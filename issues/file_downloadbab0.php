Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1501)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -47,6 +47,10 @@
 # Global permissions
 VIEW_PROJECT = View project
 
+VIEW_AGENDA = View Agenda
+
+EDIT_AGENDA = Edit agenda
+
 acronym = Acronym
 
 activities = Activities
Index: src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(Arbeitskopie)
@@ -1,5 +1,7 @@
 package org.sigmah.client.page.orgunit;
 
+import java.util.ArrayList;
+
 import org.sigmah.client.EventBus;
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.AsyncMonitor;
@@ -22,6 +24,7 @@
 import org.sigmah.client.page.project.SubPresenter;
 import org.sigmah.client.ui.ToggleAnchor;
 import org.sigmah.shared.command.GetOrgUnit;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrgUnitBannerDTO;
 import org.sigmah.shared.dto.OrgUnitDTO;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
@@ -29,6 +32,7 @@
 import org.sigmah.shared.dto.layout.LayoutConstraintDTO;
 import org.sigmah.shared.dto.layout.LayoutDTO;
 import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.event.Listener;
@@ -52,363 +56,383 @@
 
 public class OrgUnitPresenter implements Frame, TabPage {
 
-    public static final PageId PAGE_ID = new PageId("orgunit");
+	public static final PageId PAGE_ID = new PageId("orgunit");
 
-    public static final int REPORT_TAB_INDEX = 3;
+	public static final int REPORT_TAB_INDEX = 3;
 
-    /**
-     * Description of the view managed by this presenter.
-     */
-    @ImplementedBy(OrgUnitView.class)
-    public interface View {
+	/**
+	 * Description of the view managed by this presenter.
+	 */
+	@ImplementedBy(OrgUnitView.class)
+	public interface View {
 
-        public ContentPanel getPanelBanner();
+		public ContentPanel getPanelBanner();
 
-        public ContentPanel getTabPanel();
+		public ContentPanel getTabPanel();
 
-        public void setMainPanel(Widget widget);
+		public void setMainPanel(Widget widget);
 
-        public void insufficient();
+		public void insufficient();
 
-        public void sufficient();
-    }
+		public void sufficient();
+	}
 
-    private final View view;
-    private final Dispatcher dispatcher;
-    private final Authentication authentication;
-    private final UserLocalCache cache;
-    private Page activePage;
-    private OrgUnitState currentState;
-    private ToggleAnchor currentTab;
-    private OrgUnitDTO currentOrgUnitDTO;
-    private final SubPresenter[] presenters;
+	private final View view;
+	private final Dispatcher dispatcher;
+	private final Authentication authentication;
+	private final UserLocalCache cache;
+	private Page activePage;
+	private OrgUnitState currentState;
+	private ToggleAnchor currentTab;
+	private OrgUnitDTO currentOrgUnitDTO;
+	// private final SubPresenter[] presenters;
 
-    private final static String[] MAIN_TABS = {
-                                               I18N.CONSTANTS.orgUnitTabOverview(),
-                                               I18N.CONSTANTS.orgUnitTabInformations(),
-                                               I18N.CONSTANTS.projectTabCalendar(),
-                                               I18N.CONSTANTS.projectTabReports() };
+	// private final static String[] MAIN_TABS = {
+	// I18N.CONSTANTS.orgUnitTabOverview(),
+	// I18N.CONSTANTS.orgUnitTabInformations(),
+	// I18N.CONSTANTS.projectTabCalendar(),
+	// I18N.CONSTANTS.projectTabReports() };
 
-    @Inject
-    public OrgUnitPresenter(final Dispatcher dispatcher, View view, Authentication authentication, final EventBus eventBus, final UserLocalCache cache) {
+	private final static ArrayList<String> MAIN_TABS = new ArrayList<String>();
 
-        this.dispatcher = dispatcher;
-        this.view = view;
-        this.authentication = authentication;
-        this.cache = cache;
+	private final static ArrayList<SubPresenter> presenters = new ArrayList<SubPresenter>();
 
-        this.presenters =
-                new SubPresenter[] {
-                                    new OrgUnitDashboardPresenter(dispatcher, eventBus, authentication, this),
-                                    new OrgUnitDetailsPresenter(dispatcher, authentication, this, cache, eventBus),
-                                    new OrgUnitCalendarPresenter(dispatcher, authentication, this),
-                                    new OrgUnitReportsPresenter(authentication, dispatcher, eventBus, this) };
+	@Inject
+	public OrgUnitPresenter(final Dispatcher dispatcher, View view, Authentication authentication,
+					final EventBus eventBus, final UserLocalCache cache) {
 
-        for (int i = 0; i < MAIN_TABS.length; i++) {
-            final int index = i;
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.authentication = authentication;
+		this.cache = cache;
 
-            String tabTitle = MAIN_TABS[i];
+		if (MAIN_TABS.isEmpty()) {
+			MAIN_TABS.add(I18N.CONSTANTS.orgUnitTabOverview());
+			MAIN_TABS.add(I18N.CONSTANTS.orgUnitTabInformations());
 
-            final HBoxLayoutData layoutData = new HBoxLayoutData();
-            layoutData.setMargins(new Margins(0, 10, 0, 0));
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+				MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
+		}
 
-            final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
-            anchor.setAnchorMode(true);
+		presenters.add(new OrgUnitDashboardPresenter(dispatcher, eventBus, authentication, this));
+		presenters.add(new OrgUnitDetailsPresenter(dispatcher, authentication, this, cache, eventBus));
 
-            anchor.addClickHandler(new ClickHandler() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+			presenters.add(new OrgUnitCalendarPresenter(dispatcher, authentication, this));
+		presenters.add(new OrgUnitReportsPresenter(authentication, dispatcher, eventBus, this));
 
-                @Override
-                public void onClick(ClickEvent event) {
-                    eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
-                        .deriveTo(index), null));
-                }
-            });
+		// this.presenters = new SubPresenter[] {
+		// new OrgUnitDashboardPresenter(dispatcher, eventBus, authentication,
+		// this),
+		// new OrgUnitDetailsPresenter(dispatcher, authentication, this, cache,
+		// eventBus),
+		// new OrgUnitCalendarPresenter(dispatcher, authentication, this),
+		// new OrgUnitReportsPresenter(authentication, dispatcher, eventBus,
+		// this) };
 
-            this.view.getTabPanel().add(anchor, layoutData);
-        }
-    }
+		for (int i = 0; i < MAIN_TABS.size(); i++) {
+			final int index = i;
 
-    private void selectTab(int index, boolean force) {
-        final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
+			String tabTitle = MAIN_TABS.get(i);
 
-        if (currentTab != anchor) {
-            if (currentTab != null)
-                currentTab.toggleAnchorMode();
+			final HBoxLayoutData layoutData = new HBoxLayoutData();
+			layoutData.setMargins(new Margins(0, 10, 0, 0));
 
-            anchor.toggleAnchorMode();
-            currentTab = anchor;
+			final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
+			anchor.setAnchorMode(true);
 
-            OrgUnitPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        } else if (force) {
-            OrgUnitPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        }
-    }
+			anchor.addClickHandler(new ClickHandler() {
 
-    @Override
-    public boolean navigate(final PageState place) {
+				@Override
+				public void onClick(ClickEvent event) {
+					eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
+									.deriveTo(index), null));
+				}
+			});
 
-        final OrgUnitState state = (OrgUnitState) place;
-        final int id = state.getOrgUnitId();
+			this.view.getTabPanel().add(anchor, layoutData);
+		}
+	}
 
-        view.sufficient();
+	private void selectTab(int index, boolean force) {
 
-        if (currentOrgUnitDTO == null || id != currentOrgUnitDTO.getId()) {
+		if (index >= presenters.size())
+			return;
+		final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
 
-            if (Log.isDebugEnabled()) {
-                Log.debug("Loading org unit #" + id + "...");
-            }
+		if (currentTab != anchor) {
+			if (currentTab != null)
+				currentTab.toggleAnchorMode();
 
-            dispatcher.execute(new GetOrgUnit(id), null, new AsyncCallback<OrgUnitDTO>() {
+			anchor.toggleAnchorMode();
+			currentTab = anchor;
 
-                @Override
-                public void onFailure(Throwable throwable) {
-                    Log.error("Error, org unit #" + id + " not loaded.");
-                }
+			OrgUnitPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		} else if (force) {
+			OrgUnitPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		}
+	}
 
-                @Override
-                public void onSuccess(OrgUnitDTO orgUnitDTO) {
+	@Override
+	public boolean navigate(final PageState place) {
 
-                    if (orgUnitDTO == null) {
-                        Log.error("Org unit not loaded : " + id);
-                        view.insufficient();
-                    } else {
+		final OrgUnitState state = (OrgUnitState) place;
+		final int id = state.getOrgUnitId();
 
-                        if (Log.isDebugEnabled()) {
-                            Log.debug("Org unit loaded : " + orgUnitDTO.getName());
-                        }
+		view.sufficient();
 
-                        currentState = state;
+		if (currentOrgUnitDTO == null || id != currentOrgUnitDTO.getId()) {
 
-                        boolean orgUnitChanged = !orgUnitDTO.equals(currentOrgUnitDTO);
+			if (Log.isDebugEnabled()) {
+				Log.debug("Loading org unit #" + id + "...");
+			}
 
-                        state.setTabTitle(orgUnitDTO.getName());
-                        loadOrgUnitOnView(orgUnitDTO);
+			dispatcher.execute(new GetOrgUnit(id), null, new AsyncCallback<OrgUnitDTO>() {
 
-                        selectTab(state.getCurrentSection(), orgUnitChanged);
-                    }
-                }
-            });
-        } else {
-            boolean change = false;
+				@Override
+				public void onFailure(Throwable throwable) {
+					Log.error("Error, org unit #" + id + " not loaded.");
+				}
 
-            if (!currentState.equals(state)) {
-                change = true;
-                currentState = state;
-            }
+				@Override
+				public void onSuccess(OrgUnitDTO orgUnitDTO) {
 
-            selectTab(state.getCurrentSection(), change);
-        }
+					if (orgUnitDTO == null) {
+						Log.error("Org unit not loaded : " + id);
+						view.insufficient();
+					} else {
 
-        return true;
-    }
+						if (Log.isDebugEnabled()) {
+							Log.debug("Org unit loaded : " + orgUnitDTO.getName());
+						}
 
-    /**
-     * Loads a {@link OrgUnitDTO} object on the view.
-     * 
-     * @param orgUnitDTO
-     *            the {@link OrgUnitDTO} object loaded on the view
-     */
-    private void loadOrgUnitOnView(OrgUnitDTO orgUnitDTO) {
+						currentState = state;
 
-        currentOrgUnitDTO = orgUnitDTO;
-        refreshBanner();
-    }
+						boolean orgUnitChanged = !orgUnitDTO.equals(currentOrgUnitDTO);
 
-    /**
-     * Refreshes the org unit banner for the current org unit.
-     */
-    public void refreshBanner() {
+						state.setTabTitle(orgUnitDTO.getName());
+						loadOrgUnitOnView(orgUnitDTO);
 
-        // Panel.
-        final ContentPanel panel = view.getPanelBanner();
-        panel.setHeading(currentOrgUnitDTO.getOrgUnitModel().getTitle()
-            + ' '
-            + currentOrgUnitDTO.getName()
-            + " ("
-            + currentOrgUnitDTO.getFullName()
-            + ")");
-        panel.removeAll();
+						selectTab(state.getCurrentSection(), orgUnitChanged);
+					}
+				}
+			});
+		} else {
+			boolean change = false;
 
-        final Grid gridPanel = new Grid(1, 2);
-        gridPanel.addStyleName("banner");
-        gridPanel.setCellPadding(0);
-        gridPanel.setCellSpacing(0);
-        gridPanel.setWidth("100%");
-        gridPanel.setHeight("100%");
+			if (!currentState.equals(state)) {
+				change = true;
+				currentState = state;
+			}
 
-        // Logo.
-        final Image logo = OrgUnitImageBundle.ICONS.orgUnitLarge().createImage();
-        gridPanel.setWidget(0, 0, logo);
-        gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
+			selectTab(state.getCurrentSection(), change);
+		}
 
-        // Banner.
-        final OrgUnitBannerDTO banner = currentOrgUnitDTO.getOrgUnitModel().getBanner();
-        final LayoutDTO layout = banner.getLayout();
+		return true;
+	}
 
-        // Executes layout.
-        if (banner != null
-            && layout != null
-            && layout.getLayoutGroupsDTO() != null
-            && !layout.getLayoutGroupsDTO().isEmpty()) {
+	/**
+	 * Loads a {@link OrgUnitDTO} object on the view.
+	 * 
+	 * @param orgUnitDTO
+	 *            the {@link OrgUnitDTO} object loaded on the view
+	 */
+	private void loadOrgUnitOnView(OrgUnitDTO orgUnitDTO) {
 
-            // For visibility constraints, the banner accept a maximum of 2 rows
-            // and 4 columns.
-            final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
-            final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
+		currentOrgUnitDTO = orgUnitDTO;
+		refreshBanner();
+	}
 
-            final Grid gridLayout = new Grid(rows, cols);
-            gridLayout.addStyleName("banner-flex");
-            gridLayout.setCellPadding(0);
-            gridLayout.setCellSpacing(0);
-            gridLayout.setWidth("100%");
-            gridLayout.setHeight("100%");
+	/**
+	 * Refreshes the org unit banner for the current org unit.
+	 */
+	public void refreshBanner() {
 
-            for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
-                gridLayout.getColumnFormatter().setWidth(i, "325px");
-            }
+		// Panel.
+		final ContentPanel panel = view.getPanelBanner();
+		panel.setHeading(currentOrgUnitDTO.getOrgUnitModel().getTitle() + ' ' + currentOrgUnitDTO.getName() + " ("
+						+ currentOrgUnitDTO.getFullName() + ")");
+		panel.removeAll();
 
-            for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
+		final Grid gridPanel = new Grid(1, 2);
+		gridPanel.addStyleName("banner");
+		gridPanel.setCellPadding(0);
+		gridPanel.setCellSpacing(0);
+		gridPanel.setWidth("100%");
+		gridPanel.setHeight("100%");
 
-                // Checks group bounds.
-                if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
-                    continue;
-                }
+		// Logo.
+		final Image logo = OrgUnitImageBundle.ICONS.orgUnitLarge().createImage();
+		gridPanel.setWidget(0, 0, logo);
+		gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
 
-                final ContentPanel groupPanel = new ContentPanel();
-                groupPanel.setLayout(new FormLayout());
-                groupPanel.setTopComponent(null);
-                groupPanel.setHeaderVisible(false);
+		// Banner.
+		final OrgUnitBannerDTO banner = currentOrgUnitDTO.getOrgUnitModel().getBanner();
+		final LayoutDTO layout = banner.getLayout();
 
-                gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
+		// Executes layout.
+		if (banner != null && layout != null && layout.getLayoutGroupsDTO() != null
+						&& !layout.getLayoutGroupsDTO().isEmpty()) {
 
-                if (groupLayout.getLayoutConstraintsDTO() != null) {
-                    for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
+			// For visibility constraints, the banner accept a maximum of 2 rows
+			// and 4 columns.
+			final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
+			final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
 
-                        final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
+			final Grid gridLayout = new Grid(rows, cols);
+			gridLayout.addStyleName("banner-flex");
+			gridLayout.setCellPadding(0);
+			gridLayout.setCellSpacing(0);
+			gridLayout.setWidth("100%");
+			gridLayout.setHeight("100%");
 
-                        // Only default elements are allowed.
-                        if (!(element instanceof DefaultFlexibleElementDTO)) {
-                            continue;
-                        }
+			for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
+				gridLayout.getColumnFormatter().setWidth(i, "325px");
+			}
 
-                        // Builds the graphic component
-                        final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
-                        defaultElement.setService(dispatcher);
-                        defaultElement.setAuthentication(authentication);
-                        defaultElement.setCache(cache);
-                        defaultElement.setCurrentContainerDTO(currentOrgUnitDTO);
+			for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
 
-                        final Component component = defaultElement.getElementComponentInBanner(null);
+				// Checks group bounds.
+				if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
+					continue;
+				}
 
-                        if (component != null) {
-                            groupPanel.add(component);
-                        }
+				final ContentPanel groupPanel = new ContentPanel();
+				groupPanel.setLayout(new FormLayout());
+				groupPanel.setTopComponent(null);
+				groupPanel.setHeaderVisible(false);
 
-                        // Only one element per cell.
-                        break;
-                    }
-                }
-            }
+				gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
 
-            gridPanel.setWidget(0, 1, gridLayout);
-        }
-        // Default banner.
-        else {
+				if (groupLayout.getLayoutConstraintsDTO() != null) {
+					for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
 
-            panel.setLayout(new FormLayout());
+						final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
 
-            final LabelField codeField = new LabelField();
-            codeField.setReadOnly(true);
-            codeField.setFieldLabel(I18N.CONSTANTS.projectName());
-            codeField.setLabelSeparator(":");
-            codeField.setValue(currentOrgUnitDTO.getName());
+						// Only default elements are allowed.
+						if (!(element instanceof DefaultFlexibleElementDTO)) {
+							continue;
+						}
 
-            gridPanel.setWidget(0, 1, codeField);
-        }
+						// Builds the graphic component
+						final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
+						defaultElement.setService(dispatcher);
+						defaultElement.setAuthentication(authentication);
+						defaultElement.setCache(cache);
+						defaultElement.setCurrentContainerDTO(currentOrgUnitDTO);
 
-        panel.add(gridPanel);
-        panel.layout();
-    }
+						final Component component = defaultElement.getElementComponentInBanner(null);
 
-    public OrgUnitDTO getCurrentOrgUnitDTO() {
-        return currentOrgUnitDTO;
-    }
+						if (component != null) {
+							groupPanel.add(component);
+						}
 
-    public void setCurrentOrgUnitDTO(OrgUnitDTO currentOrgUnitDTO) {
-        this.currentOrgUnitDTO = currentOrgUnitDTO;
-    }
+						// Only one element per cell.
+						break;
+					}
+				}
+			}
 
-    @Override
-    public String getTabTitle() {
-        return I18N.CONSTANTS.orgunit();
-    }
+			gridPanel.setWidget(0, 1, gridLayout);
+		}
+		// Default banner.
+		else {
 
-    @Override
-    public PageId getPageId() {
-        return PAGE_ID;
-    }
+			panel.setLayout(new FormLayout());
 
-    @Override
-    public Object getWidget() {
-        return view;
-    }
+			final LabelField codeField = new LabelField();
+			codeField.setReadOnly(true);
+			codeField.setFieldLabel(I18N.CONSTANTS.projectName());
+			codeField.setLabelSeparator(":");
+			codeField.setValue(currentOrgUnitDTO.getName());
 
-    @Override
-    public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
-        NavigationError navigationError = NavigationError.NONE;
-        for (SubPresenter subPresenter : presenters) {
-            if (subPresenter.hasValueChanged()) {
-                navigationError = NavigationError.WORK_NOT_SAVED;
-            }
-        }
+			gridPanel.setWidget(0, 1, codeField);
+		}
 
-        Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
+		panel.add(gridPanel);
+		panel.layout();
+	}
 
-            @Override
-            public void handleEvent(MessageBoxEvent be) {
-                if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
-                    for (SubPresenter subPresenter : presenters) {
-                        subPresenter.forgetAllChangedValues();
-                    }
-                    callback.onDecided(NavigationError.NONE);
-                }
-            }
-        };
+	public OrgUnitDTO getCurrentOrgUnitDTO() {
+		return currentOrgUnitDTO;
+	}
 
-        if (navigationError == NavigationError.WORK_NOT_SAVED) {
-            MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
-        }
+	public void setCurrentOrgUnitDTO(OrgUnitDTO currentOrgUnitDTO) {
+		this.currentOrgUnitDTO = currentOrgUnitDTO;
+	}
 
-        callback.onDecided(navigationError);
-    }
+	@Override
+	public String getTabTitle() {
+		return I18N.CONSTANTS.orgunit();
+	}
 
-    @Override
-    public String beforeWindowCloses() {
-        return null;
-    }
+	@Override
+	public PageId getPageId() {
+		return PAGE_ID;
+	}
 
-    @Override
-    public void shutdown() {
-    }
+	@Override
+	public Object getWidget() {
+		return view;
+	}
 
-    @Override
-    public void setActivePage(Page page) {
-        this.activePage = page;
-    }
+	@Override
+	public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
+		NavigationError navigationError = NavigationError.NONE;
+		for (SubPresenter subPresenter : presenters) {
+			if (subPresenter.hasValueChanged()) {
+				navigationError = NavigationError.WORK_NOT_SAVED;
+			}
+		}
 
-    @Override
-    public Page getActivePage() {
-        return this.activePage;
-    }
+		Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
 
-    public OrgUnitState getCurrentState() {
-        return currentState;
-    }
+			@Override
+			public void handleEvent(MessageBoxEvent be) {
+				if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
+					for (SubPresenter subPresenter : presenters) {
+						subPresenter.forgetAllChangedValues();
+					}
+					callback.onDecided(NavigationError.NONE);
+				}
+			}
+		};
 
-    @Override
-    public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
-        return null;
-    }
+		if (navigationError == NavigationError.WORK_NOT_SAVED) {
+			MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
+		}
+
+		callback.onDecided(navigationError);
+	}
+
+	@Override
+	public String beforeWindowCloses() {
+		return null;
+	}
+
+	@Override
+	public void shutdown() {
+	}
+
+	@Override
+	public void setActivePage(Page page) {
+		this.activePage = page;
+	}
+
+	@Override
+	public Page getActivePage() {
+		return this.activePage;
+	}
+
+	public OrgUnitState getCurrentState() {
+		return currentState;
+	}
+
+	@Override
+	public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
+		return null;
+	}
 }
Index: src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/orgunit/calendar/OrgUnitCalendarPresenter.java	(Arbeitskopie)
@@ -14,7 +14,9 @@
 import org.sigmah.shared.command.GetCalendar;
 import org.sigmah.shared.domain.calendar.Calendar;
 import org.sigmah.shared.domain.calendar.CalendarType;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrgUnitDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.store.ListStore;
@@ -27,94 +29,96 @@
  */
 public class OrgUnitCalendarPresenter implements SubPresenter {
 
-    private final OrgUnitPresenter mainPresenter;
-    private OrgUnitDTO currentOrgUnitDTO;
+	private final OrgUnitPresenter mainPresenter;
+	private OrgUnitDTO currentOrgUnitDTO;
 
-    private ProjectCalendarView view;
-    private CalendarWidget calendar;
-    private Dispatcher dispatcher;
-    private Authentication authentication;
+	private ProjectCalendarView view;
+	private CalendarWidget calendar;
+	private Dispatcher dispatcher;
+	private Authentication authentication;
 
-    private ListStore<CalendarWrapper> calendarStore;
-    private CheckBoxSelectionModel<CalendarWrapper> selectionModel;
+	private ListStore<CalendarWrapper> calendarStore;
+	private CheckBoxSelectionModel<CalendarWrapper> selectionModel;
 
-    private int calendarIndex = 1;
+	private int calendarIndex = 1;
 
-    public OrgUnitCalendarPresenter(Dispatcher dispatcher, Authentication authentication, OrgUnitPresenter mainPresenter) {
-        this.dispatcher = dispatcher;
-        this.authentication = authentication;
-        this.mainPresenter = mainPresenter;
-    }
+	public OrgUnitCalendarPresenter(Dispatcher dispatcher, Authentication authentication, OrgUnitPresenter mainPresenter) {
+		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		this.mainPresenter = mainPresenter;
+	}
 
-    @Override
-    public Component getView() {
-        if (view == null) {
-            calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true);
-            calendarStore = new ListStore<CalendarWrapper>();
-            selectionModel = new CheckBoxSelectionModel<CalendarWrapper>();
+	@Override
+	public Component getView() {
+		if (view == null) {
+			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true, authentication);
+			calendarStore = new ListStore<CalendarWrapper>();
+			selectionModel = new CheckBoxSelectionModel<CalendarWrapper>();
 
-            view = new ProjectCalendarView(calendar, calendarStore, selectionModel, dispatcher, authentication);
-        }
+			view = new ProjectCalendarView(calendar, calendarStore, selectionModel, dispatcher, authentication);
+		}
 
-        // If the current org unit has changed, clear the view
-        if (!mainPresenter.getCurrentOrgUnitDTO().equals(currentOrgUnitDTO)) {
-            view.getAddEventButton().setEnabled(false);
-            calendarStore.removeAll(); // Reset the calendar list
-            calendar.today(); // Reset the current date
-            calendar.setDisplayMode(CalendarWidget.DisplayMode.MONTH);
-            calendarIndex = 1; // Reset the styles
-            currentOrgUnitDTO = mainPresenter.getCurrentOrgUnitDTO();
-        }
+		// If the current org unit has changed, clear the view
+		if (!mainPresenter.getCurrentOrgUnitDTO().equals(currentOrgUnitDTO)) {
+			view.getAddEventButton().setEnabled(false);
+			calendarStore.removeAll(); // Reset the calendar list
+			calendar.today(); // Reset the current date
+			calendar.setDisplayMode(CalendarWidget.DisplayMode.MONTH);
+			calendarIndex = 1; // Reset the styles
+			currentOrgUnitDTO = mainPresenter.getCurrentOrgUnitDTO();
+		}
 
-        return view;
-    }
+		return view;
+	}
 
-    @Override
-    public void discardView() {
-        this.view = null;
-    }
+	@Override
+	public void discardView() {
+		this.view = null;
+	}
 
-    @Override
-    public void viewDidAppear() {
-        // Fetching the calendars
-        if (calendarStore.getCount() == 0) {
-            final AsyncCallback<Calendar> callback = new AsyncCallback<Calendar>() {
+	@Override
+	public void viewDidAppear() {
+		// Fetching the calendars
+		if (calendarStore.getCount() == 0) {
+			final AsyncCallback<Calendar> callback = new AsyncCallback<Calendar>() {
 
-                @Override
-                public void onSuccess(Calendar result) {
-                    // Defines the color index of the calendar
-                    result.setStyle(calendarIndex++);
+				@Override
+				public void onSuccess(Calendar result) {
+					// Defines the color index of the calendar
+					result.setStyle(calendarIndex++);
 
-                    calendarStore.add(new CalendarWrapper(result));
-                    selectionModel.select(calendarStore.getCount() - 1, true);
+					calendarStore.add(new CalendarWrapper(result));
+					selectionModel.select(calendarStore.getCount() - 1, true);
 
-                    if (result.isEditable()) {
-                        view.getAddEventButton().setEnabled(true);
-                    }
-                }
+					if (result.isEditable()
+									&& ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_AGENDA,
+													GlobalPermissionEnum.EDIT_PROJECT)) {
+						view.getAddEventButton().setEnabled(true);
+					}
+				}
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    Log.debug("Error while loading a calendar", caught);
-                }
-            };
+				@Override
+				public void onFailure(Throwable caught) {
+					Log.debug("Error while loading a calendar", caught);
+				}
+			};
 
-            // Retrieving the events linked to the current org unit
-            final Integer calendarId = currentOrgUnitDTO.getCalendarId();
-            if (calendarId != null) {
-                final GetCalendar getPersonalCalendar = new GetCalendar(CalendarType.Personal, calendarId);
-                dispatcher.execute(getPersonalCalendar, null, callback);
-            }
-        }
-    }
+			// Retrieving the events linked to the current org unit
+			final Integer calendarId = currentOrgUnitDTO.getCalendarId();
+			if (calendarId != null) {
+				final GetCalendar getPersonalCalendar = new GetCalendar(CalendarType.Personal, calendarId);
+				dispatcher.execute(getPersonalCalendar, null, callback);
+			}
+		}
+	}
 
-    @Override
-    public boolean hasValueChanged() {
-        return false;
-    }
+	@Override
+	public boolean hasValueChanged() {
+		return false;
+	}
 
-    @Override
-    public void forgetAllChangedValues() {
-    }
+	@Override
+	public void forgetAllChangedValues() {
+	}
 
 }
Index: src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Arbeitskopie)
@@ -3,6 +3,7 @@
  */
 package org.sigmah.client.page.project;
 
+import java.util.ArrayList;
 import java.util.Date;
 import java.util.EnumMap;
 import java.util.HashMap;
@@ -100,133 +101,147 @@
  */
 public class ProjectPresenter implements Frame, TabPage {
 
-    public static final PageId PAGE_ID = new PageId("project");
+	public static final PageId PAGE_ID = new PageId("project");
 
-    public static final int REPORT_TAB_INDEX = 6;
+	public static final int REPORT_TAB_INDEX = 6;
 
-    /**
-     * Description of the view managed by this presenter.
-     */
-    @ImplementedBy(ProjectView.class)
-    public interface View {
+	/**
+	 * Description of the view managed by this presenter.
+	 */
+	@ImplementedBy(ProjectView.class)
+	public interface View {
 
-        public ContentPanel getPanelProjectBanner();
+		public ContentPanel getPanelProjectBanner();
 
-        public ContentPanel getTabPanel();
+		public ContentPanel getTabPanel();
 
-        public ContentPanel getAmendmentBox();
+		public ContentPanel getAmendmentBox();
 
-        public void setMainPanel(Widget widget);
+		public void setMainPanel(Widget widget);
 
-        public void insufficient();
+		public void insufficient();
 
-        public void sufficient();
-    }
+		public void sufficient();
+	}
 
-    private final View view;
-    private final Dispatcher dispatcher;
-    private final Authentication authentication;
-    private final UserLocalCache cache;
-    private final EventBus eventBus;
-    private Page activePage;
+	private final View view;
+	private final Dispatcher dispatcher;
+	private final Authentication authentication;
+	private final UserLocalCache cache;
+	private final EventBus eventBus;
+	private Page activePage;
 
-    private ProjectState currentState;
-    private ToggleAnchor currentTab;
-    /**
-     * The current displayed project.
-     */
-    private ProjectDTO currentProjectDTO;
-    /**
-     * The current displayed phase.
-     */
-    private PhaseDTO currentDisplayedPhaseDTO;
+	private ProjectState currentState;
+	private ToggleAnchor currentTab;
+	/**
+	 * The current displayed project.
+	 */
+	private ProjectDTO currentProjectDTO;
+	/**
+	 * The current displayed phase.
+	 */
+	private PhaseDTO currentDisplayedPhaseDTO;
 
-    private final static Map<Amendment.Action, String> amendmentActionDisplayNames;
+	private final static Map<Amendment.Action, String> amendmentActionDisplayNames;
 
-    static {
-        final EnumMap<Amendment.Action, String> map = new EnumMap<Amendment.Action, String>(Amendment.Action.class);
-        map.put(Amendment.Action.CREATE, I18N.CONSTANTS.amendmentCreate());
-        map.put(Amendment.Action.LOCK, I18N.CONSTANTS.amendmentLock());
-        map.put(Amendment.Action.UNLOCK, I18N.CONSTANTS.amendmentUnlock());
-        map.put(Amendment.Action.REJECT, I18N.CONSTANTS.amendmentReject());
-        map.put(Amendment.Action.VALIDATE, I18N.CONSTANTS.amendmentValidate());
+	static {
+		final EnumMap<Amendment.Action, String> map = new EnumMap<Amendment.Action, String>(Amendment.Action.class);
+		map.put(Amendment.Action.CREATE, I18N.CONSTANTS.amendmentCreate());
+		map.put(Amendment.Action.LOCK, I18N.CONSTANTS.amendmentLock());
+		map.put(Amendment.Action.UNLOCK, I18N.CONSTANTS.amendmentUnlock());
+		map.put(Amendment.Action.REJECT, I18N.CONSTANTS.amendmentReject());
+		map.put(Amendment.Action.VALIDATE, I18N.CONSTANTS.amendmentValidate());
 
-        amendmentActionDisplayNames = map;
-    }
+		amendmentActionDisplayNames = map;
+	}
 
-    private final static String[] MAIN_TABS = {
-                                               I18N.CONSTANTS.projectTabDashboard(),
-                                               I18N.CONSTANTS.projectDetails(),
-                                               I18N.CONSTANTS.projectTabLogFrame(),
-                                               I18N.CONSTANTS.projectTabIndicators(),
-                                               I18N.CONSTANTS.projectTabDataEntry(),
-                                               I18N.CONSTANTS.projectTabCalendar(),
-                                               I18N.CONSTANTS.projectTabReports()
-    /* , I18N.CONSTANTS.projectTabSecurityIncident() */// TO DO
-            };
+	// private final static String[] MAIN_TABS = {
+	// I18N.CONSTANTS.projectTabDashboard(),
+	// I18N.CONSTANTS.projectDetails(),
+	// I18N.CONSTANTS.projectTabLogFrame(),
+	// I18N.CONSTANTS.projectTabIndicators(),
+	// I18N.CONSTANTS.projectTabDataEntry(),
+	// I18N.CONSTANTS.projectTabCalendar(),
+	// I18N.CONSTANTS.projectTabReports()
+	// /* , I18N.CONSTANTS.projectTabSecurityIncident() */// TO DO
+	// };
 
-    // TODO: the sub presenters all probably need to be notified of when the
-    // project is to be loaded
-    // into view. Maybe a SubProjectPresenter interface? Then projectIndicators
-    // field can be removed below
-    private final SubPresenter[] presenters;
+	private final static ArrayList<String> MAIN_TABS = new ArrayList<String>();
 
-    @Inject
-    public ProjectPresenter(final Dispatcher dispatcher, View view, Authentication authentication, final EventBus eventBus, final UserLocalCache cache, ProjectIndicatorsContainer projectIndicators, ProjectPivotContainer pivot) {
-        this.dispatcher = dispatcher;
-        this.view = view;
-        this.authentication = authentication;
-        this.cache = cache;
-        this.eventBus = eventBus;
+	// TODO: the sub presenters all probably need to be notified of when the
+	// project is to be loaded
+	// into view. Maybe a SubProjectPresenter interface? Then projectIndicators
+	// field can be removed below
+	private final static ArrayList<SubPresenter> presenters = new ArrayList<SubPresenter>();
 
-        // For development.
-        // final DummyPresenter dummyPresenter = new DummyPresenter();
+	@Inject
+	public ProjectPresenter(final Dispatcher dispatcher, View view, Authentication authentication,
+					final EventBus eventBus, final UserLocalCache cache, ProjectIndicatorsContainer projectIndicators,
+					ProjectPivotContainer pivot) {
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.authentication = authentication;
+		this.cache = cache;
+		this.eventBus = eventBus;
 
-        this.presenters =
-                new SubPresenter[] {
-                                    new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache), // Dashboard
-                                    new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache), // Details,
-                                    new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this), // Logic
-                                    projectIndicators,
-                                    pivot,
-                                    new ProjectCalendarPresenter(dispatcher, authentication, this), // Calendar
-                                    new ProjectReportsPresenter(authentication, dispatcher, eventBus, this) // Reports
-                /* ,dummyPresenter */// Security incidents TO DO
-                };
+		// For development.
+		// final DummyPresenter dummyPresenter = new DummyPresenter();
 
-        for (int i = 0; i < MAIN_TABS.length; i++) {
-            final int index = i;
+		if (MAIN_TABS.isEmpty()) {
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabDashboard());
+			MAIN_TABS.add(I18N.CONSTANTS.projectDetails());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabLogFrame());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabIndicators());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabDataEntry());
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+				MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
+		}
 
-            String tabTitle = MAIN_TABS[i];
+		ProjectPresenter.presenters
+						.add(new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache));
+		ProjectPresenter.presenters.add(new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache));
 
-            final HBoxLayoutData layoutData = new HBoxLayoutData();
-            layoutData.setMargins(new Margins(2, 10, 0, 0));
+		ProjectPresenter.presenters.add(new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this));
+		ProjectPresenter.presenters.add(projectIndicators);
+		ProjectPresenter.presenters.add(pivot);
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
+			ProjectPresenter.presenters.add(new ProjectCalendarPresenter(dispatcher, authentication, this));
+		ProjectPresenter.presenters.add(new ProjectReportsPresenter(authentication, dispatcher, eventBus, this));
 
-            final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
-            anchor.setAnchorMode(true);
+		for (int i = 0; i < MAIN_TABS.size(); i++) {
+			final int index = i;
 
-            anchor.addClickHandler(new ClickHandler() {
+			String tabTitle = MAIN_TABS.get(i);
 
-                @Override
-                public void onClick(ClickEvent event) {
-                    eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
-                        .deriveTo(index), null));
-                }
-            });
+			final HBoxLayoutData layoutData = new HBoxLayoutData();
+			layoutData.setMargins(new Margins(2, 10, 0, 0));
 
-            this.view.getTabPanel().add(anchor, layoutData);
-        }
-        
-        //Export excel button
-        final Button exportAnchor = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
-        exportAnchor.setHeight("22px");
-        
-        final HBoxLayoutData layoutData = new HBoxLayoutData();
-        layoutData.setMargins(new Margins(0, 3, 0, 0));
-                        
-        final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
-        exportAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
-			
+			final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
+			anchor.setAnchorMode(true);
+
+			anchor.addClickHandler(new ClickHandler() {
+
+				@Override
+				public void onClick(ClickEvent event) {
+					eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
+									.deriveTo(index), null));
+				}
+			});
+
+			this.view.getTabPanel().add(anchor, layoutData);
+		}
+
+		// Export excel button
+		final Button exportAnchor = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
+		exportAnchor.setHeight("22px");
+
+		final HBoxLayoutData layoutData = new HBoxLayoutData();
+		layoutData.setMargins(new Margins(0, 3, 0, 0));
+
+		final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
+		exportAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
+
 			@Override
 			public void componentSelected(ButtonEvent arg0) {
 				final Window w = new Window();
@@ -234,661 +249,663 @@
 				w.setModal(true);
 				w.setBlinkModal(true);
 				w.setLayout(new FitLayout());
-				w.setSize(350,180);
+				w.setSize(350, 180);
 				w.setHeading(I18N.CONSTANTS.exportData());
 
-				final FormPanel panel=new FormPanel();		 
-				
+				final FormPanel panel = new FormPanel();
+
 				final CheckBoxGroup options = new CheckBoxGroup();
 				options.setOrientation(Orientation.VERTICAL);
 				options.setFieldLabel(I18N.CONSTANTS.exportOptions());
-				final CheckBox synthesisBox=createCheckBox(I18N.CONSTANTS.projectSynthesis());
+				final CheckBox synthesisBox = createCheckBox(I18N.CONSTANTS.projectSynthesis());
 				synthesisBox.setValue(true);
 				synthesisBox.setEnabled(false);
-				final CheckBox indicatorBox=createCheckBox(I18N.CONSTANTS.flexibleElementIndicatorsList());
-				final CheckBox logFrameBox=createCheckBox(I18N.CONSTANTS.logFrame());
-				options.add(synthesisBox); 				
+				final CheckBox indicatorBox = createCheckBox(I18N.CONSTANTS.flexibleElementIndicatorsList());
+				final CheckBox logFrameBox = createCheckBox(I18N.CONSTANTS.logFrame());
+				options.add(synthesisBox);
 				options.add(logFrameBox);
 				options.add(indicatorBox);
-				 
- 				
- 				panel.add(options);
- 				
+
+				panel.add(options);
+
 				final Button export = new Button(I18N.CONSTANTS.export());
-		 		panel.getButtonBar().add(export); 	
+				panel.getButtonBar().add(export);
 				export.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
 					@Override
 					public void componentSelected(ButtonEvent ce) {
-						 ExportUtils.ExportType type=ExportUtils.ExportType.PROJECT_SYNTHESIS;
-				          if(indicatorBox.getValue() && logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
-				          }else if(indicatorBox.getValue() && !logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
-				          }else if(!indicatorBox.getValue() && logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME;
-				          }          
-				          exportForm.getFieldMap().put(
-				       		   ExportUtils.PARAM_EXPORT_TYPE,type.name());
-				          
+						ExportUtils.ExportType type = ExportUtils.ExportType.PROJECT_SYNTHESIS;
+						if (indicatorBox.getValue() && logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
+						} else if (indicatorBox.getValue() && !logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
+						} else if (!indicatorBox.getValue() && logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME;
+						}
+						exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_TYPE, type.name());
+
 						exportForm.triggerExport();
 						w.hide();
 					}
-				});		
-			 
+				});
+
 				w.add(panel);
 				w.show();
-				 
-				exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID, 
-		        		String.valueOf(currentProjectDTO.getId()));				
+
+				exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID,
+								String.valueOf(currentProjectDTO.getId()));
 			}
 		});
-        
-        //Creates a blank space between the tabs'links and the buttons
-        final HBoxLayoutData flex = new HBoxLayoutData();
-        flex.setFlex(1);
-        this.view.getTabPanel().add(new Anchor(), flex);
-        
-        this.view.getTabPanel().add(exportAnchor,layoutData);  
-        this.view.getTabPanel().add(exportForm.getExportForm());  
-        
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.DELETE_PROJECT)) {
-            final HBoxLayoutData deleteLayoutData = new HBoxLayoutData();
-            deleteLayoutData.setMargins(new Margins(0, 0, 0, 0));
+		// Creates a blank space between the tabs'links and the buttons
+		final HBoxLayoutData flex = new HBoxLayoutData();
+		flex.setFlex(1);
+		this.view.getTabPanel().add(new Anchor(), flex);
 
-            final Button deleteAnchor = new Button(I18N.CONSTANTS.deleteProjectAnchor(), IconImageBundle.ICONS.remove());
-            deleteAnchor.setHeight("22px");
-            deleteAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
+		this.view.getTabPanel().add(exportAnchor, layoutData);
+		this.view.getTabPanel().add(exportForm.getExportForm());
 
-                @Override
-                public void componentSelected(ButtonEvent event) {
-                    MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(), I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
-                        new Listener<MessageBoxEvent>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.DELETE_PROJECT)) {
+			final HBoxLayoutData deleteLayoutData = new HBoxLayoutData();
+			deleteLayoutData.setMargins(new Margins(0, 0, 0, 0));
 
-                            @Override
-                            public void handleEvent(MessageBoxEvent be) {
-                                Button selectedButton = be.getButtonClicked();
-                                if (selectedButton.getItemId().equals(Dialog.YES)) {
-                                    Map<String, Object> changes = new HashMap<String, Object>();
-                                    changes.put("dateDeleted", new Date());
-                                    UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
-                                    dispatcher.execute(updateEntity, null, new AsyncCallback<VoidResult>() {
+			final Button deleteAnchor = new Button(I18N.CONSTANTS.deleteProjectAnchor(), IconImageBundle.ICONS.remove());
+			deleteAnchor.setHeight("22px");
+			deleteAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-                                        @Override
-                                        public void onFailure(Throwable arg0) {
-                                            // TODO Auto-generated method stub
+				@Override
+				public void componentSelected(ButtonEvent event) {
+					MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(),
+									I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
+									new Listener<MessageBoxEvent>() {
 
-                                        }
+										@Override
+										public void handleEvent(MessageBoxEvent be) {
+											Button selectedButton = be.getButtonClicked();
+											if (selectedButton.getItemId().equals(Dialog.YES)) {
+												Map<String, Object> changes = new HashMap<String, Object>();
+												changes.put("dateDeleted", new Date());
+												UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
+												dispatcher.execute(updateEntity, null, new AsyncCallback<VoidResult>() {
 
-                                        @Override
-                                        public void onSuccess(VoidResult arg0) {
-                                            ProjectPresenter.this.eventBus.fireEvent(AppEvents.DeleteProject,
-                                                new ProjectEvent(AppEvents.DeleteProject,
-                                                    ProjectPresenter.this.currentProjectDTO.getId()));
-                                            Notification.show(I18N.CONSTANTS.deleteProjectNotificationTitle(), I18N.CONSTANTS.deleteProjectNotificationContent());
-                                        }
-                                    });
-                                }
+													@Override
+													public void onFailure(Throwable arg0) {
+														// TODO Auto-generated
+														// method stub
 
-                            }
-                        });
-                }
-            });
+													}
 
-            this.view.getTabPanel().add(deleteAnchor);
-        }
-    }
-    
-    private CheckBox createCheckBox( String label) {
-        CheckBox box = new CheckBox();
-         box.setBoxLabel(label);
-        return box;
-    }
+													@Override
+													public void onSuccess(VoidResult arg0) {
+														ProjectPresenter.this.eventBus
+																		.fireEvent(AppEvents.DeleteProject,
+																						new ProjectEvent(
+																										AppEvents.DeleteProject,
+																										ProjectPresenter.this.currentProjectDTO
+																														.getId()));
+														Notification.show(
+																		I18N.CONSTANTS.deleteProjectNotificationTitle(),
+																		I18N.CONSTANTS.deleteProjectNotificationContent());
+													}
+												});
+											}
 
+										}
+									});
+				}
+			});
 
-    private void selectTab(int index, boolean force) {
-        final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
+			this.view.getTabPanel().add(deleteAnchor);
+		}
+	}
 
-        if (currentTab != anchor) {
-            if (currentTab != null)
-                currentTab.toggleAnchorMode();
+	private CheckBox createCheckBox(String label) {
+		CheckBox box = new CheckBox();
+		box.setBoxLabel(label);
+		return box;
+	}
 
-            anchor.toggleAnchorMode();
-            currentTab = anchor;
-            ProjectPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        } else if (force) {
-            ProjectPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        }
-    }
+	private void selectTab(int index, boolean force) {
 
-    @Override
-    public boolean navigate(final PageState place) {
-        final ProjectState projectState = (ProjectState) place;
-        final int projectId = projectState.getProjectId();
+		if (index >= presenters.size())
+			return;
+		final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+		if (currentTab != anchor) {
+			if (currentTab != null)
+				currentTab.toggleAnchorMode();
 
-            view.sufficient();
+			anchor.toggleAnchorMode();
+			currentTab = anchor;
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		} else if (force) {
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		}
+	}
 
-            if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
-                if (Log.isDebugEnabled()) {
-                    Log.debug("Loading project #" + projectId + "...");
-                }
+	@Override
+	public boolean navigate(final PageState place) {
+		final ProjectState projectState = (ProjectState) place;
+		final int projectId = projectState.getProjectId();
 
-                dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
 
-                    @Override
-                    public void onFailure(Throwable throwable) {
-                        Log.error("Error, project #" + projectId + " not loaded.");
-                    }
+			view.sufficient();
 
-                    @Override
-                    public void onSuccess(ProjectDTO projectDTO) {
+			if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
+				if (Log.isDebugEnabled()) {
+					Log.debug("Loading project #" + projectId + "...");
+				}
 
-                        if (projectDTO == null) {
-                            Log.error("Project not loaded : " + projectId);
-                            view.insufficient();
-                        } else {
+				dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
 
-                            if (Log.isDebugEnabled()) {
-                                Log.debug("Project loaded : " + projectDTO.getName());
-                            }
+					@Override
+					public void onFailure(Throwable throwable) {
+						Log.error("Error, project #" + projectId + " not loaded.");
+					}
 
-                            currentState = projectState;
+					@Override
+					public void onSuccess(ProjectDTO projectDTO) {
 
-                            boolean projectChanged = !projectDTO.equals(currentProjectDTO);
+						if (projectDTO == null) {
+							Log.error("Project not loaded : " + projectId);
+							view.insufficient();
+						} else {
 
-                            projectState.setTabTitle(projectDTO.getName());
-                            loadProjectOnView(projectDTO);
+							if (Log.isDebugEnabled()) {
+								Log.debug("Project loaded : " + projectDTO.getName());
+							}
 
-                            selectTab(projectState.getCurrentSection(), projectChanged);
-                        }
-                    }
-                });
-            } else {
-                boolean change = false;
+							currentState = projectState;
 
-                if (!currentState.equals(projectState)) {
-                    change = true;
-                    currentState = projectState;
-                }
+							boolean projectChanged = !projectDTO.equals(currentProjectDTO);
 
-                selectTab(projectState.getCurrentSection(), change);
-            }
-        } else {
-            view.insufficient();
-        }
+							projectState.setTabTitle(projectDTO.getName());
+							loadProjectOnView(projectDTO);
 
-        return true;
-    }
+							selectTab(projectState.getCurrentSection(), projectChanged);
+						}
+					}
+				});
+			} else {
+				boolean change = false;
 
-    /**
-     * Loads a {@link ProjectDTO} object on the view.
-     * 
-     * @param projectDTO
-     *            the {@link ProjectDTO} object loaded on the viewprojectIndicators
-     */
-    private void loadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
+				if (!currentState.equals(projectState)) {
+					change = true;
+					currentState = projectState;
+				}
 
-        refreshBanner();
-        refreshAmendment();
+				selectTab(projectState.getCurrentSection(), change);
+			}
+		} else {
+			view.insufficient();
+		}
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
+		return true;
+	}
 
-    }
+	/**
+	 * Loads a {@link ProjectDTO} object on the view.
+	 * 
+	 * @param projectDTO
+	 *            the {@link ProjectDTO} object loaded on the
+	 *            viewprojectIndicators
+	 */
+	private void loadProjectOnView(ProjectDTO projectDTO) {
+		currentProjectDTO = projectDTO;
+		currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
 
-    public void ReloadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
+		refreshBanner();
+		refreshAmendment();
 
-        refreshBanner();
-        refreshAmendment();
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
-    }
+	}
 
-    public ProjectDTO getCurrentProjectDTO() {
-        return currentProjectDTO;
-    }
+	public void ReloadProjectOnView(ProjectDTO projectDTO) {
+		currentProjectDTO = projectDTO;
+		currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
 
-    public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
-        this.currentProjectDTO = currentProjectDTO;
-    }
+		refreshBanner();
+		refreshAmendment();
 
-    public PhaseDTO getCurrentDisplayedPhaseDTO() {
-        return currentDisplayedPhaseDTO;
-    }
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
+	}
 
-    public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
-        this.currentDisplayedPhaseDTO = currentPhaseDTO;
-    }
+	public ProjectDTO getCurrentProjectDTO() {
+		return currentProjectDTO;
+	}
 
-    /**
-     * Refreshes the project banner for the current project.
-     */
-    public void refreshBanner() {
+	public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
+		this.currentProjectDTO = currentProjectDTO;
+	}
 
-        // Panel.
-        final ContentPanel panel = view.getPanelProjectBanner();
+	public PhaseDTO getCurrentDisplayedPhaseDTO() {
+		return currentDisplayedPhaseDTO;
+	}
 
-        // Set the heading of panel
-        String projectTitle = currentProjectDTO.getFullName();
-        String titleToDisplay = "";
-        if (projectTitle != null && !projectTitle.isEmpty())
-            titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
+	public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
+		this.currentDisplayedPhaseDTO = currentPhaseDTO;
+	}
 
-        panel.setHeading(I18N.CONSTANTS.projectMainTabTitle()
-            + ' '
-            + currentProjectDTO.getName()
-            + " ("
-            + titleToDisplay
-            + ")");
+	/**
+	 * Refreshes the project banner for the current project.
+	 */
+	public void refreshBanner() {
 
-        // Set the tool tip
-        ToolTipConfig panelToolTipconfig = new ToolTipConfig();
-        panelToolTipconfig.setMaxWidth(500);
-        panelToolTipconfig.setText(projectTitle);
-        panel.setToolTip(panelToolTipconfig);
+		// Panel.
+		final ContentPanel panel = view.getPanelProjectBanner();
 
-        panel.removeAll();
+		// Set the heading of panel
+		String projectTitle = currentProjectDTO.getFullName();
+		String titleToDisplay = "";
+		if (projectTitle != null && !projectTitle.isEmpty())
+			titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
 
-        final Grid gridPanel = new Grid(1, 2);
-        gridPanel.addStyleName("banner");
-        gridPanel.setCellPadding(0);
-        gridPanel.setCellSpacing(0);
-        gridPanel.setWidth("100%");
-        gridPanel.setHeight("100%");
+		panel.setHeading(I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + " ("
+						+ titleToDisplay + ")");
 
-        // Logo.
-        final Image logo =
-                FundingIconProvider.getProjectTypeIcon(
-                    currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
-                    FundingIconProvider.IconSize.LARGE).createImage();
-        gridPanel.setWidget(0, 0, logo);
-        gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
+		// Set the tool tip
+		ToolTipConfig panelToolTipconfig = new ToolTipConfig();
+		panelToolTipconfig.setMaxWidth(500);
+		panelToolTipconfig.setText(projectTitle);
+		panel.setToolTip(panelToolTipconfig);
 
-        // Banner.
-        final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
-        final LayoutDTO layout = banner.getLayoutDTO();
+		panel.removeAll();
 
-        // Executes layout.
-        if (banner != null
-            && layout != null
-            && layout.getLayoutGroupsDTO() != null
-            && !layout.getLayoutGroupsDTO().isEmpty()) {
+		final Grid gridPanel = new Grid(1, 2);
+		gridPanel.addStyleName("banner");
+		gridPanel.setCellPadding(0);
+		gridPanel.setCellSpacing(0);
+		gridPanel.setWidth("100%");
+		gridPanel.setHeight("100%");
 
-            // For visibility constraints, the banner accept a maximum of 2 rows
-            // and 4 columns.
-            final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
-            final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
+		// Logo.
+		final Image logo = FundingIconProvider.getProjectTypeIcon(
+						currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
+						FundingIconProvider.IconSize.LARGE).createImage();
+		gridPanel.setWidget(0, 0, logo);
+		gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
 
-            final Grid gridLayout = new Grid(rows, cols);
-            gridLayout.addStyleName("banner-flex");
-            gridLayout.setCellPadding(0);
-            gridLayout.setCellSpacing(0);
-            gridLayout.setWidth("100%");
-            gridLayout.setHeight("100%");
+		// Banner.
+		final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
+		final LayoutDTO layout = banner.getLayoutDTO();
 
-            for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
-                gridLayout.getColumnFormatter().setWidth(i, "325px");
-            }
+		// Executes layout.
+		if (banner != null && layout != null && layout.getLayoutGroupsDTO() != null
+						&& !layout.getLayoutGroupsDTO().isEmpty()) {
 
-            for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
+			// For visibility constraints, the banner accept a maximum of 2 rows
+			// and 4 columns.
+			final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
+			final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
 
-                // Checks group bounds.
-                if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
-                    continue;
-                }
+			final Grid gridLayout = new Grid(rows, cols);
+			gridLayout.addStyleName("banner-flex");
+			gridLayout.setCellPadding(0);
+			gridLayout.setCellSpacing(0);
+			gridLayout.setWidth("100%");
+			gridLayout.setHeight("100%");
 
-                final ContentPanel groupPanel = new ContentPanel();
-                groupPanel.setLayout(new FormLayout());
-                groupPanel.setTopComponent(null);
-                groupPanel.setHeaderVisible(false);
+			for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
+				gridLayout.getColumnFormatter().setWidth(i, "325px");
+			}
 
-                gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
+			for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
 
-                if (groupLayout.getLayoutConstraintsDTO() != null) {
-                    for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
+				// Checks group bounds.
+				if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
+					continue;
+				}
 
-                        final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
+				final ContentPanel groupPanel = new ContentPanel();
+				groupPanel.setLayout(new FormLayout());
+				groupPanel.setTopComponent(null);
+				groupPanel.setHeaderVisible(false);
 
-                        // Only default elements are allowed.
-                        if (!(element instanceof DefaultFlexibleElementDTO)) {
-                            continue;
-                        }
+				gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
 
-                        // Builds the graphic component
-                        final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
-                        defaultElement.setService(dispatcher);
-                        defaultElement.setAuthentication(authentication);
-                        defaultElement.setCache(cache);
-                        defaultElement.setCurrentContainerDTO(currentProjectDTO);
+				if (groupLayout.getLayoutConstraintsDTO() != null) {
+					for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
 
-                        final Component component = defaultElement.getElementComponentInBanner(null);
+						final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
 
-                        if (component != null) {
+						// Only default elements are allowed.
+						if (!(element instanceof DefaultFlexibleElementDTO)) {
+							continue;
+						}
 
-                            if (component instanceof LabelField) {
-                                LabelField lableFieldComponent = (LabelField) component;
-                                // Get the text of the field
-                                String textValue = lableFieldComponent.getText();
+						// Builds the graphic component
+						final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
+						defaultElement.setService(dispatcher);
+						defaultElement.setAuthentication(authentication);
+						defaultElement.setCache(cache);
+						defaultElement.setCurrentContainerDTO(currentProjectDTO);
 
-                                // Set the tool tip
-                                ToolTipConfig config = new ToolTipConfig();
-                                config.setMaxWidth(500);
-                                config.setText(textValue);
-                                lableFieldComponent.setToolTip(config);
+						final Component component = defaultElement.getElementComponentInBanner(null);
 
-                                // Clip the text if it is longer than 30
-                                if (textValue != null && !textValue.isEmpty()) {
-                                    String newTextValue =
-                                            textValue.length() > 30 ? textValue.substring(0, 29) + "..." : textValue;
-                                    lableFieldComponent.setText(newTextValue);
-                                }
-                                groupPanel.add(lableFieldComponent);
-                            } else {
-                                groupPanel.add(component);
-                            }
+						if (component != null) {
 
-                        }
+							if (component instanceof LabelField) {
+								LabelField lableFieldComponent = (LabelField) component;
+								// Get the text of the field
+								String textValue = lableFieldComponent.getText();
 
-                        // Only one element per cell.
-                        break;
-                    }
-                }
-            }
+								// Set the tool tip
+								ToolTipConfig config = new ToolTipConfig();
+								config.setMaxWidth(500);
+								config.setText(textValue);
+								lableFieldComponent.setToolTip(config);
 
-            gridPanel.setWidget(0, 1, gridLayout);
-        }
-        // Default banner.
-        else {
+								// Clip the text if it is longer than 30
+								if (textValue != null && !textValue.isEmpty()) {
+									String newTextValue = textValue.length() > 30 ? textValue.substring(0, 29) + "..."
+													: textValue;
+									lableFieldComponent.setText(newTextValue);
+								}
+								groupPanel.add(lableFieldComponent);
+							} else {
+								groupPanel.add(component);
+							}
 
-            panel.setLayout(new FormLayout());
+						}
 
-            final LabelField codeField = new LabelField();
-            codeField.setReadOnly(true);
-            codeField.setFieldLabel(I18N.CONSTANTS.projectName());
-            codeField.setLabelSeparator(":");
-            codeField.setValue(currentProjectDTO.getName());
+						// Only one element per cell.
+						break;
+					}
+				}
+			}
 
-            gridPanel.setWidget(0, 1, codeField);
-        }
+			gridPanel.setWidget(0, 1, gridLayout);
+		}
+		// Default banner.
+		else {
 
-        panel.add(gridPanel);
-        panel.layout();
-    }
+			panel.setLayout(new FormLayout());
 
-    private void refreshAmendment() {
-        Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
+			final LabelField codeField = new LabelField();
+			codeField.setReadOnly(true);
+			codeField.setFieldLabel(I18N.CONSTANTS.projectName());
+			codeField.setLabelSeparator(":");
+			codeField.setValue(currentProjectDTO.getName());
 
-        final ContentPanel amendmentBox = view.getAmendmentBox();
-        amendmentBox.removeAll();
+			gridPanel.setWidget(0, 1, codeField);
+		}
 
-        // Prepare the amendment store
-        final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
+		panel.add(gridPanel);
+		panel.layout();
+	}
 
-        for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
-            amendmentDTO.prepareName();
-            store.add(amendmentDTO);
-        }
+	private void refreshAmendment() {
+		Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
 
-        // Adding the current amendment
-        final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
-        store.add(currentAmendment);
+		final ContentPanel amendmentBox = view.getAmendmentBox();
+		amendmentBox.removeAll();
 
-        // Creating the amendment list
-        final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
-        versionList.setStore(store);
-        versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
+		// Prepare the amendment store
+		final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
 
-        versionList.setValue(currentAmendment); // Selecting the
-                                                // currentAmendment
+		for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
+			amendmentDTO.prepareName();
+			store.add(amendmentDTO);
+		}
 
-        Log.debug(store.getCount() + " amendment(s).");
+		// Adding the current amendment
+		final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
+		store.add(currentAmendment);
 
-        final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
-        displayAmendmentButton.setEnabled(false);
+		// Creating the amendment list
+		final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
+		versionList.setStore(store);
+		versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
 
-        versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
+		versionList.setValue(currentAmendment); // Selecting the
+												// currentAmendment
 
-            @Override
-            public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
-                int currentAmendmentId = 0;
-                if (currentProjectDTO.getCurrentAmendment() != null)
-                    currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
+		Log.debug(store.getCount() + " amendment(s).");
 
-                Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
+		final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
+		displayAmendmentButton.setEnabled(false);
 
-                displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
-            }
-        });
+		versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
 
-        displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
+			@Override
+			public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
+				int currentAmendmentId = 0;
+				if (currentProjectDTO.getCurrentAmendment() != null)
+					currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                NavigationCallback navigationCallback = new NavigationCallback() {
+				Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
 
-                    @Override
-                    public void onDecided(NavigationError navigationError) {
-                        if (navigationError == NavigationError.NONE) {
-                            AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
-                            if (amendmentDTO.getId() == 0)
-                                amendmentDTO = null;
-                            else
-                                Log.debug("Back to " + amendmentDTO.getId());
+				displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
+			}
+		});
 
-                            currentProjectDTO.setCurrentAmendment(amendmentDTO);
+		displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-                            // Refreshing the whole view
-                            discardAllViews();
-                            selectTab(currentState.getCurrentSection(), true);
-                            displayAmendmentButton.setEnabled(false);
-                        }
-                    }
+			@Override
+			public void componentSelected(ButtonEvent ce) {
+				NavigationCallback navigationCallback = new NavigationCallback() {
 
-                };
-                requestToNavigateAway(null, navigationCallback);
-            }
-        });
+					@Override
+					public void onDecided(NavigationError navigationError) {
+						if (navigationError == NavigationError.NONE) {
+							AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
+							if (amendmentDTO.getId() == 0)
+								amendmentDTO = null;
+							else
+								Log.debug("Back to " + amendmentDTO.getId());
 
-        final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
-        amendmentListContainer.add(versionList);
-        amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
+							currentProjectDTO.setCurrentAmendment(amendmentDTO);
 
-        amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
+							// Refreshing the whole view
+							discardAllViews();
+							selectTab(currentState.getCurrentSection(), true);
+							displayAmendmentButton.setEnabled(false);
+						}
+					}
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+				};
+				requestToNavigateAway(null, navigationCallback);
+			}
+		});
 
-            // Displaying the available actions
-            final Amendment.Action[] actions;
-            if (currentProjectDTO.getAmendmentState() != null)
-                actions = currentProjectDTO.getAmendmentState().getActions();
-            else
-                actions = new Amendment.Action[0];
-            final Anchor[] anchors = new Anchor[actions.length];
+		final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
+		amendmentListContainer.add(versionList);
+		amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
 
-            for (int index = 0; index < actions.length; index++) {
-                final Amendment.Action action = actions[index];
-                Log.debug("Adding the " + action + " amendment action.");
+		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-                if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
-                    if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
-                        Log.debug("You can not validate !");
-                        continue;
-                    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
 
-                }
+			// Displaying the available actions
+			final Amendment.Action[] actions;
+			if (currentProjectDTO.getAmendmentState() != null)
+				actions = currentProjectDTO.getAmendmentState().getActions();
+			else
+				actions = new Amendment.Action[0];
+			final Anchor[] anchors = new Anchor[actions.length];
 
-                Log.debug("You can  validate !");
+			for (int index = 0; index < actions.length; index++) {
+				final Amendment.Action action = actions[index];
+				Log.debug("Adding the " + action + " amendment action.");
 
-                final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
-                actionAnchor.addStyleName("amendment-action");
+				if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
+					if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
+						Log.debug("You can not validate !");
+						continue;
+					}
 
-                actionAnchor.addClickHandler(new ClickHandler() {
+				}
 
-                    @Override
-                    public void onClick(ClickEvent event) {
-                        // Disabling every actions before sending the request
+				Log.debug("You can  validate !");
 
-                        NavigationCallback navigationCallback = new NavigationCallback() {
+				final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
+				actionAnchor.addStyleName("amendment-action");
 
-                            @Override
-                            public void onDecided(NavigationError navigationError) {
-                                // TODO Auto-generated method stub
-                                if (navigationError == NavigationError.NONE) {
-                                    amendmentBox.mask(I18N.CONSTANTS.loading());
+				actionAnchor.addClickHandler(new ClickHandler() {
 
-                                    for (final Anchor anchor : anchors) {
-                                        if (anchor == null)
-                                            Log.debug("anchor is null");
-                                        if (anchor != null)
-                                            anchor.setEnabled(false);
-                                    }
+					@Override
+					public void onClick(ClickEvent event) {
+						// Disabling every actions before sending the request
 
-                                    final AmendmentAction amendmentAction =
-                                            new AmendmentAction(currentProjectDTO.getId(), action);
-                                    dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
+						NavigationCallback navigationCallback = new NavigationCallback() {
 
-                                        @Override
-                                        public void onFailure(Throwable caught) {
-                                            // Failures may happen if an other user changes
-                                            // the
-                                            // amendment state.
-                                            // TODO: we should maybe refresh the project or
-                                            // tell
-                                            // the user to refresh the page.
-                                            MessageBox.alert(amendmentActionDisplayNames.get(action),
-                                                I18N.CONSTANTS.amendmentActionError(), null);
-                                            for (final Anchor anchor : anchors)
-                                                anchor.setEnabled(true);
-                                            amendmentBox.unmask();
-                                        }
+							@Override
+							public void onDecided(NavigationError navigationError) {
+								// TODO Auto-generated method stub
+								if (navigationError == NavigationError.NONE) {
+									amendmentBox.mask(I18N.CONSTANTS.loading());
 
-                                        @Override
-                                        public void onSuccess(ProjectDTO result) {
-                                            for (final Anchor anchor : anchors) {
-                                                if (anchor != null)
-                                                    anchor.setEnabled(true);
-                                            }
+									for (final Anchor anchor : anchors) {
+										if (anchor == null)
+											Log.debug("anchor is null");
+										if (anchor != null)
+											anchor.setEnabled(false);
+									}
 
-                                            // Updating the current project
-                                            currentProjectDTO = result;
+									final AmendmentAction amendmentAction = new AmendmentAction(currentProjectDTO
+													.getId(), action);
+									dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
 
-                                            // Refreshing the whole view
-                                            discardAllViews();
-                                            selectTab(currentState.getCurrentSection(), true);
-                                            refreshAmendment();
+										@Override
+										public void onFailure(Throwable caught) {
+											// Failures may happen if an other
+											// user changes
+											// the
+											// amendment state.
+											// TODO: we should maybe refresh the
+											// project or
+											// tell
+											// the user to refresh the page.
+											MessageBox.alert(amendmentActionDisplayNames.get(action),
+															I18N.CONSTANTS.amendmentActionError(), null);
+											for (final Anchor anchor : anchors)
+												anchor.setEnabled(true);
+											amendmentBox.unmask();
+										}
 
-                                            amendmentBox.unmask();
-                                        }
-                                    });
-                                }
-                            }
-                        };
-                        requestToNavigateAway(null, navigationCallback);
-                    }
+										@Override
+										public void onSuccess(ProjectDTO result) {
+											for (final Anchor anchor : anchors) {
+												if (anchor != null)
+													anchor.setEnabled(true);
+											}
 
-                });
+											// Updating the current project
+											currentProjectDTO = result;
 
-                amendmentBox.add(actionAnchor, new VBoxLayoutData());
-                anchors[index] = actionAnchor;
+											// Refreshing the whole view
+											discardAllViews();
+											selectTab(currentState.getCurrentSection(), true);
+											refreshAmendment();
 
-            }
+											amendmentBox.unmask();
+										}
+									});
+								}
+							}
+						};
+						requestToNavigateAway(null, navigationCallback);
+					}
 
-        }
+				});
 
-        amendmentBox.layout();
-    }
+				amendmentBox.add(actionAnchor, new VBoxLayoutData());
+				anchors[index] = actionAnchor;
 
-    private void discardAllViews() {
-        for (final SubPresenter presenter : presenters)
-            presenter.discardView();
-    }
+			}
 
-    @Override
-    public String getTabTitle() {
-        return I18N.CONSTANTS.projectMainTabTitle();
-    }
+		}
 
-    @Override
-    public PageId getPageId() {
-        return PAGE_ID;
-    }
+		amendmentBox.layout();
+	}
 
-    @Override
-    public Object getWidget() {
-        return view;
-    }
+	private void discardAllViews() {
+		for (final SubPresenter presenter : presenters)
+			presenter.discardView();
+	}
 
-    @Override
-    public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
-        NavigationError navigationError = NavigationError.NONE;
-        for (SubPresenter subPresenter : presenters) {
-            if (subPresenter.hasValueChanged()) {
-                navigationError = NavigationError.WORK_NOT_SAVED;
-            }
-        }
+	@Override
+	public String getTabTitle() {
+		return I18N.CONSTANTS.projectMainTabTitle();
+	}
 
-        Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
+	@Override
+	public PageId getPageId() {
+		return PAGE_ID;
+	}
 
-            @Override
-            public void handleEvent(MessageBoxEvent be) {
-                if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
-                    for (SubPresenter subPresenter : presenters) {
-                        subPresenter.forgetAllChangedValues();
-                    }
-                    callback.onDecided(NavigationError.NONE);
-                }
-            }
-        };
+	@Override
+	public Object getWidget() {
+		return view;
+	}
 
-        if (navigationError == NavigationError.WORK_NOT_SAVED) {
-            MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
-        }
+	@Override
+	public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
+		NavigationError navigationError = NavigationError.NONE;
+		for (SubPresenter subPresenter : presenters) {
+			if (subPresenter.hasValueChanged()) {
+				navigationError = NavigationError.WORK_NOT_SAVED;
+			}
+		}
 
-        callback.onDecided(navigationError);
-    }
+		Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
 
-    @Override
-    public String beforeWindowCloses() {
-        return null;
-    }
+			@Override
+			public void handleEvent(MessageBoxEvent be) {
+				if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
+					for (SubPresenter subPresenter : presenters) {
+						subPresenter.forgetAllChangedValues();
+					}
+					callback.onDecided(NavigationError.NONE);
+				}
+			}
+		};
 
-    @Override
-    public void shutdown() {
-    }
+		if (navigationError == NavigationError.WORK_NOT_SAVED) {
+			MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
+		}
 
-    @Override
-    public void setActivePage(Page page) {
-        this.activePage = page;
-    }
+		callback.onDecided(navigationError);
+	}
 
-    @Override
-    public Page getActivePage() {
-        return this.activePage;
-    }
+	@Override
+	public String beforeWindowCloses() {
+		return null;
+	}
 
-    public ProjectState getCurrentState() {
-        return currentState;
-    }
+	@Override
+	public void shutdown() {
+	}
 
-    @Override
-    public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
-        return null;
-    }
+	@Override
+	public void setActivePage(Page page) {
+		this.activePage = page;
+	}
 
+	@Override
+	public Page getActivePage() {
+		return this.activePage;
+	}
+
+	public ProjectState getCurrentState() {
+		return currentState;
+	}
+
+	@Override
+	public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
+		return null;
+	}
+
 }
Index: src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarPresenter.java	(Arbeitskopie)
@@ -31,186 +31,187 @@
  */
 public class ProjectCalendarPresenter implements SubPresenter {
 
-    private final ProjectPresenter projectPresenter;
-    private ProjectDTO currentProjectDTO;
+	private final ProjectPresenter projectPresenter;
+	private ProjectDTO currentProjectDTO;
 
-    private ProjectCalendarView view;
-    private CalendarWidget calendar;
-    private Dispatcher dispatcher;
-    private Authentication authentication;
+	private ProjectCalendarView view;
+	private CalendarWidget calendar;
+	private Dispatcher dispatcher;
+	private Authentication authentication;
 
-    private ListStore<CalendarWrapper> calendarStore;
-    private CheckBoxSelectionModel<CalendarWrapper> selectionModel;
+	private ListStore<CalendarWrapper> calendarStore;
+	private CheckBoxSelectionModel<CalendarWrapper> selectionModel;
 
-    private boolean needsRefresh;
+	private boolean needsRefresh;
 
-    private int calendarIndex = 1;
+	private int calendarIndex = 1;
 
-    @Override
-    public void discardView() {
-        this.view = null;
-    }
+	@Override
+	public void discardView() {
+		this.view = null;
+	}
 
-    /**
-     * Wrapper class that allow the use of {@link Calendar}s objects with Ext-GWT.
-     */
-    public static class CalendarWrapper extends BaseModel {
+	/**
+	 * Wrapper class that allow the use of {@link Calendar}s objects with
+	 * Ext-GWT.
+	 */
+	public static class CalendarWrapper extends BaseModel {
 
-        private static final long serialVersionUID = 1017103235263407544L;
+		private static final long serialVersionUID = 1017103235263407544L;
 
-        private Calendar calendar;
+		private Calendar calendar;
 
-        /**
-         * Empty constructor, needed by the serialization process.
-         */
-        public CalendarWrapper() {
-        }
+		/**
+		 * Empty constructor, needed by the serialization process.
+		 */
+		public CalendarWrapper() {
+		}
 
-        /**
-         * Wrap the given Calendar as a BaseModel object.
-         * 
-         * @param calendar
-         *            the calendar to wrap.
-         */
-        public CalendarWrapper(Calendar calendar) {
-            this.set("name", calendar.getName());
-            this.set("id", calendar.getIdentifier());
-            this.calendar = calendar;
-        }
+		/**
+		 * Wrap the given Calendar as a BaseModel object.
+		 * 
+		 * @param calendar
+		 *            the calendar to wrap.
+		 */
+		public CalendarWrapper(Calendar calendar) {
+			this.set("name", calendar.getName());
+			this.set("id", calendar.getIdentifier());
+			this.calendar = calendar;
+		}
 
-        public Calendar getCalendar() {
-            return calendar;
-        }
+		public Calendar getCalendar() {
+			return calendar;
+		}
 
-        public void setCalendar(Calendar calendar) {
-            this.calendar = calendar;
-        }
+		public void setCalendar(Calendar calendar) {
+			this.calendar = calendar;
+		}
 
-        @Override
-        public boolean equals(Object obj) {
-            if (obj == null) {
-                return false;
-            }
-            if (getClass() != obj.getClass()) {
-                return false;
-            }
-            final CalendarWrapper other = (CalendarWrapper) obj;
-            if (this.calendar != other.calendar && (this.calendar == null || !this.calendar.equals(other.calendar))) {
-                return false;
-            }
-            return true;
-        }
+		@Override
+		public boolean equals(Object obj) {
+			if (obj == null) {
+				return false;
+			}
+			if (getClass() != obj.getClass()) {
+				return false;
+			}
+			final CalendarWrapper other = (CalendarWrapper) obj;
+			if (this.calendar != other.calendar && (this.calendar == null || !this.calendar.equals(other.calendar))) {
+				return false;
+			}
+			return true;
+		}
 
-        @Override
-        public int hashCode() {
-            int hash = 7;
-            hash = 53 * hash + (this.calendar != null ? this.calendar.hashCode() : 0);
-            return hash;
-        }
-    }
+		@Override
+		public int hashCode() {
+			int hash = 7;
+			hash = 53 * hash + (this.calendar != null ? this.calendar.hashCode() : 0);
+			return hash;
+		}
+	}
 
-    public ProjectCalendarPresenter(Dispatcher dispatcher, Authentication authentication, ProjectPresenter projectPresenter) {
-        this.dispatcher = dispatcher;
-        this.authentication = authentication;
-        this.projectPresenter = projectPresenter;
-    }
+	public ProjectCalendarPresenter(Dispatcher dispatcher, Authentication authentication,
+					ProjectPresenter projectPresenter) {
+		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		this.projectPresenter = projectPresenter;
+	}
 
-    @Override
-    public Component getView() {
-        if (view == null) {
-            calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true);
-            calendarStore = new ListStore<CalendarWrapper>();
-            selectionModel = new CheckBoxSelectionModel<CalendarWrapper>();
+	@Override
+	public Component getView() {
+		if (view == null) {
+			calendar = new CalendarWidget(CalendarWidget.COLUMN_HEADERS, true, authentication);
+			calendarStore = new ListStore<CalendarWrapper>();
+			selectionModel = new CheckBoxSelectionModel<CalendarWrapper>();
 
-            view = new ProjectCalendarView(calendar, calendarStore, selectionModel, dispatcher, authentication);
-        }
+			view = new ProjectCalendarView(calendar, calendarStore, selectionModel, dispatcher, authentication);
+		}
 
-        // If the current project has changed, clear the view
-        if (!projectPresenter.getCurrentProjectDTO().equals(currentProjectDTO)) {
-            view.getAddEventButton().setEnabled(false);
-            calendarStore.removeAll(); // Reset the calendar list
-            calendar.today(); // Reset the current date
-            calendar.setDisplayMode(CalendarWidget.DisplayMode.MONTH);
-            calendarIndex = 1; // Reset the styles
-            currentProjectDTO = projectPresenter.getCurrentProjectDTO();
+		// If the current project has changed, clear the view
+		if (!projectPresenter.getCurrentProjectDTO().equals(currentProjectDTO)) {
+			view.getAddEventButton().setEnabled(false);
+			calendarStore.removeAll(); // Reset the calendar list
+			calendar.today(); // Reset the current date
+			calendar.setDisplayMode(CalendarWidget.DisplayMode.MONTH);
+			calendarIndex = 1; // Reset the styles
+			currentProjectDTO = projectPresenter.getCurrentProjectDTO();
 
-        } else
-            needsRefresh = true;
+		} else
+			needsRefresh = true;
 
-        return view;
-    }
+		return view;
+	}
 
-    @Override
-    public void viewDidAppear() {
-        // Fetching the calendars
-        if (calendarStore.getCount() == 0 || needsRefresh) {
-            final AsyncCallback<Calendar> callback = new AsyncCallback<Calendar>() {
+	@Override
+	public void viewDidAppear() {
+		// Fetching the calendars
+		if (calendarStore.getCount() == 0 || needsRefresh) {
+			final AsyncCallback<Calendar> callback = new AsyncCallback<Calendar>() {
 
-                @Override
-                public void onSuccess(Calendar result) {
-                    if (needsRefresh) {
-                        calendarIndex = 1;
-                        calendarStore.removeAll();
-                        needsRefresh = false;
-                    }
+				@Override
+				public void onSuccess(Calendar result) {
+					if (needsRefresh) {
+						calendarIndex = 1;
+						calendarStore.removeAll();
+						needsRefresh = false;
+					}
 
-                    // Defines the color index of the calendar
-                    result.setStyle(calendarIndex++);
+					// Defines the color index of the calendar
+					result.setStyle(calendarIndex++);
 
-                    calendarStore.add(new CalendarWrapper(result));
-                    selectionModel.select(calendarStore.getCount() - 1, true);
+					calendarStore.add(new CalendarWrapper(result));
+					selectionModel.select(calendarStore.getCount() - 1, true);
 
-                    if (result.isEditable()) {
-                        view.getAddEventButton().setEnabled(true);
-                    }
-                }
+					if (result.isEditable()) {
+						view.getAddEventButton().setEnabled(true);
+					}
+				}
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    Log.debug("Error while loading a calendar", caught);
-                }
-            };
+				@Override
+				public void onFailure(Throwable caught) {
+					Log.debug("Error while loading a calendar", caught);
+				}
+			};
 
-            // Retrieving the activities
-            final ActivityCalendarIdentifier identifier =
-                    new ActivityCalendarIdentifier(currentProjectDTO.getId(), I18N.CONSTANTS.logFrameActivities(),
-                        I18N.CONSTANTS.logFrameActivitiesCode());
-            final GetCalendar getActivityCalendar = new GetCalendar(CalendarType.Activity, identifier);
-            dispatcher.execute(getActivityCalendar, null, callback);
+			// Retrieving the activities
+			final ActivityCalendarIdentifier identifier = new ActivityCalendarIdentifier(currentProjectDTO.getId(),
+							I18N.CONSTANTS.logFrameActivities(), I18N.CONSTANTS.logFrameActivitiesCode());
+			final GetCalendar getActivityCalendar = new GetCalendar(CalendarType.Activity, identifier);
+			dispatcher.execute(getActivityCalendar, null, callback);
 
-            // Retrieving the events linked to the current project
-            final Integer calendarId = currentProjectDTO.getCalendarId();
-            if (calendarId != null) {
-                final GetCalendar getPersonalCalendar = new GetCalendar(CalendarType.Personal, calendarId);
-                dispatcher.execute(getPersonalCalendar, null, callback);
-            }
+			// Retrieving the events linked to the current project
+			final Integer calendarId = currentProjectDTO.getCalendarId();
+			if (calendarId != null) {
+				final GetCalendar getPersonalCalendar = new GetCalendar(CalendarType.Personal, calendarId);
+				dispatcher.execute(getPersonalCalendar, null, callback);
+			}
 
-            // Retrieving the reminders
-            final ReminderCalendarIdentifier reminderIdentifier =
-                    new ReminderCalendarIdentifier(currentProjectDTO.getRemindersList().getId(),
-                        I18N.CONSTANTS.reminderPoints(), I18N.CONSTANTS.monitoredPointClosed(),
-                        I18N.CONSTANTS.monitoredPointExpectedDate(), DateUtils.DATE_SHORT.getPattern());
-            final GetCalendar getReminderCalendar = new GetCalendar(CalendarType.Reminder, reminderIdentifier);
-            dispatcher.execute(getReminderCalendar, null, callback);
+			// Retrieving the reminders
+			final ReminderCalendarIdentifier reminderIdentifier = new ReminderCalendarIdentifier(currentProjectDTO
+							.getRemindersList().getId(), I18N.CONSTANTS.reminderPoints(),
+							I18N.CONSTANTS.monitoredPointClosed(), I18N.CONSTANTS.monitoredPointExpectedDate(),
+							DateUtils.DATE_SHORT.getPattern());
+			final GetCalendar getReminderCalendar = new GetCalendar(CalendarType.Reminder, reminderIdentifier);
+			dispatcher.execute(getReminderCalendar, null, callback);
 
-            // Retrieving the monitored points
-            final MonitoredPointCalendarIdentifier monitoredPointIdentifier =
-                    new MonitoredPointCalendarIdentifier(currentProjectDTO.getPointsList().getId(),
-                        I18N.CONSTANTS.monitoredPoints(), I18N.CONSTANTS.monitoredPointClosed(),
-                        I18N.CONSTANTS.monitoredPointExpectedDate(), DateUtils.DATE_SHORT.getPattern());
-            final GetCalendar getMonitoredPointCalendar =
-                    new GetCalendar(CalendarType.MonitoredPoint, monitoredPointIdentifier);
-            dispatcher.execute(getMonitoredPointCalendar, null, callback);
-        }
-    }
+			// Retrieving the monitored points
+			final MonitoredPointCalendarIdentifier monitoredPointIdentifier = new MonitoredPointCalendarIdentifier(
+							currentProjectDTO.getPointsList().getId(), I18N.CONSTANTS.monitoredPoints(),
+							I18N.CONSTANTS.monitoredPointClosed(), I18N.CONSTANTS.monitoredPointExpectedDate(),
+							DateUtils.DATE_SHORT.getPattern());
+			final GetCalendar getMonitoredPointCalendar = new GetCalendar(CalendarType.MonitoredPoint,
+							monitoredPointIdentifier);
+			dispatcher.execute(getMonitoredPointCalendar, null, callback);
+		}
+	}
 
-    @Override
-    public boolean hasValueChanged() {
-        return false;
-    }
+	@Override
+	public boolean hasValueChanged() {
+		return false;
+	}
 
-    @Override
-    public void forgetAllChangedValues() {
-    }
+	@Override
+	public void forgetAllChangedValues() {
+	}
 
 }
Index: src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/calendar/ProjectCalendarView.java	(Arbeitskopie)
@@ -82,8 +82,8 @@
 
 	@SuppressWarnings("rawtypes")
 	public ProjectCalendarView(final CalendarWidget calendar, final ListStore<CalendarWrapper> calendarStore,
-	                final CheckBoxSelectionModel<CalendarWrapper> selectionModel, final Dispatcher dispatcher,
-	                final Authentication authentication) {
+					final CheckBoxSelectionModel<CalendarWrapper> selectionModel, final Dispatcher dispatcher,
+					final Authentication authentication) {
 
 		final BorderLayout borderLayout = new BorderLayout();
 		borderLayout.setContainerStyle("x-border-layout-ct main-background");
@@ -102,7 +102,7 @@
 		calendarColor.setRenderer(new GridCellRenderer() {
 			@Override
 			public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
-			                ListStore store, Grid grid) {
+							ListStore store, Grid grid) {
 				final CalendarWrapper calendarWrapper = (CalendarWrapper) model;
 				final SimplePanel panel = new SimplePanel();
 				panel.setPixelSize(14, 14);
@@ -114,7 +114,7 @@
 		});
 
 		final ColumnModel calendarColumnModel = new ColumnModel(Arrays.asList(selectionModel.getColumn(), calendarName,
-		                calendarColor));
+						calendarColor));
 
 		final Grid<CalendarWrapper> calendarGrid = new Grid<CalendarWrapper>(calendarStore, calendarColumnModel);
 		calendarGrid.setAutoExpandColumn("name");
@@ -231,7 +231,8 @@
 			}
 		});
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_AGENDA)) {
 			toolbar.add(addEventButton);
 		}
 
@@ -262,10 +263,10 @@
 					@Override
 					public void onSuccess(VoidResult result) {
 						final List<Event> oldEventList = event
-						                .getParent()
-						                .getEvents()
-						                .get(new Date(event.getDtstart().getYear(), event.getDtstart().getMonth(),
-						                                event.getDtstart().getDate()));
+										.getParent()
+										.getEvents()
+										.get(new Date(event.getDtstart().getYear(), event.getDtstart().getMonth(),
+														event.getDtstart().getDate()));
 						oldEventList.remove(event);
 
 						calendarWidget.refresh();
@@ -285,7 +286,7 @@
 	}
 
 	public Dialog getEditPersonalEventDialog(final Event event, final ListStore<CalendarWrapper> calendarStore,
-	                final CalendarWidget calendarWidget, final Dispatcher dispatcher) {
+					final CalendarWidget calendarWidget, final Dispatcher dispatcher) {
 		if (addPersonalEventDialog == null) {
 			final Dialog dialog = new Dialog();
 			dialog.setButtons(Dialog.OKCANCEL);
@@ -367,22 +368,22 @@
 			}
 		} else {
 			boolean fullDayEvent = event.getDtend() != null
-			                && (event.getDtstart().getDate() != event.getDtend().getDate()
-			                                || event.getDtstart().getMonth() != event.getDtend().getMonth() || event
-			                                .getDtstart().getYear() != event.getDtend().getYear());
+							&& (event.getDtstart().getDate() != event.getDtend().getDate()
+											|| event.getDtstart().getMonth() != event.getDtend().getMonth() || event
+											.getDtstart().getYear() != event.getDtend().getYear());
 
 			((ComboBox<CalendarWrapper>) addPersonalEventDialog.getWidget(0)).setValue(new CalendarWrapper(event
-			                .getParent()));
+							.getParent()));
 			((TextField<String>) addPersonalEventDialog.getWidget(1)).setValue(event.getSummary());
 			((DateField) addPersonalEventDialog.getWidget(2)).setValue(new Date(event.getDtstart().getYear(), event
-			                .getDtstart().getMonth(), event.getDtstart().getDate()));
+							.getDtstart().getMonth(), event.getDtstart().getDate()));
 			if (!fullDayEvent) {
 				((TimeField) addPersonalEventDialog.getWidget(3)).setValue(((TimeField) addPersonalEventDialog
-				                .getWidget(3)).findModel(event.getDtstart()));
+								.getWidget(3)).findModel(event.getDtstart()));
 
 				if (event.getDtend() != null) {
 					((TimeField) addPersonalEventDialog.getWidget(4)).setValue(((TimeField) addPersonalEventDialog
-					                .getWidget(4)).findModel(event.getDtend()));
+									.getWidget(4)).findModel(event.getDtend()));
 				} else {
 					((TimeField) addPersonalEventDialog.getWidget(4)).setValue(null);
 				}
@@ -421,7 +422,7 @@
 					if (addPersonalEventDialog.getWidget(index) instanceof TimeField) {
 						final TimeField field = (TimeField) addPersonalEventDialog.getWidget(index);
 						properties.put(field.getName(), field.getDateValue() != null ? field.getDateValue().getTime()
-						                : null);
+										: null);
 					} else {
 
 						final Field<Serializable> field = (Field<Serializable>) addPersonalEventDialog.getWidget(index);
@@ -497,7 +498,7 @@
 	 * @param callback
 	 */
 	private void addPersonalEvent(final Map<String, Serializable> properties, final Dispatcher dispatcher,
-	                final AsyncCallback<Event> callback) {
+					final AsyncCallback<Event> callback) {
 		final CreateEntity createEntity = new CreateEntity("PersonalEvent", properties);
 		dispatcher.execute(createEntity, null, new AsyncCallback<CreateResult>() {
 
@@ -527,9 +528,9 @@
 	 * @param callback
 	 */
 	private void editPersonalEvent(final Event event, final Map<String, ?> properties, final Dispatcher dispatcher,
-	                final AsyncCallback<Event> callback) {
+					final AsyncCallback<Event> callback) {
 		final UpdateEntity updateEntity = new UpdateEntity("PersonalEvent", (Integer) event.getIdentifier(),
-		                (Map<String, Object>) properties);
+						(Map<String, Object>) properties);
 		dispatcher.execute(updateEntity, null, new AsyncCallback<VoidResult>() {
 
 			@Override
@@ -542,8 +543,8 @@
 				final Calendar calendar = event.getParent();
 
 				final List<Event> oldEventList = CalendarWidget.normalize(calendar).get(
-				                new Date(event.getDtstart().getYear(), event.getDtstart().getMonth(), event
-				                                .getDtstart().getDate()));
+								new Date(event.getDtstart().getYear(), event.getDtstart().getMonth(), event
+												.getDtstart().getDate()));
 				oldEventList.remove(event);
 
 				updateEvent(event, properties);
Index: src/main/java/org/sigmah/client/ui/CalendarWidget.java
===================================================================
--- src/main/java/org/sigmah/client/ui/CalendarWidget.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/ui/CalendarWidget.java	(Arbeitskopie)
@@ -9,10 +9,13 @@
 import java.util.Map;
 import java.util.TreeSet;
 
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.shared.domain.calendar.ActivityCalendarIdentifier;
 import org.sigmah.shared.domain.calendar.Calendar;
 import org.sigmah.shared.domain.calendar.Event;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.google.gwt.dom.client.Element;
 import com.google.gwt.event.dom.client.ClickEvent;
@@ -197,10 +200,13 @@
 	private CalendarListener listener;
 	private Delegate delegate;
 
-	public CalendarWidget(int displayHeaders, boolean displayWeekNumber) {
+	private final Authentication authentication;
+
+	public CalendarWidget(int displayHeaders, boolean displayWeekNumber, Authentication authentication) {
 		this.calendars = new ArrayList<Calendar>();
 		this.displayHeaders = displayHeaders;
 		this.displayWeekNumber = displayWeekNumber;
+		this.authentication = authentication;
 
 		// final SimplePanel container;
 
@@ -401,7 +407,7 @@
 				// They shouldn't be placed in their startDate list
 				if (!isSameDay(normalizedKeyDate, event.getDtstart()) && !isActivityCalendar) {
 					normalizedKeyDate = new Date(event.getDtstart().getYear(), event.getDtstart().getMonth(), event
-					                .getDtstart().getDate());
+									.getDtstart().getDate());
 				}
 
 				if (eventMapNormalized.get(normalizedKeyDate) == null) {
@@ -437,18 +443,18 @@
 	 * @return height of a cell.
 	 */
 	private native int getCellHeight(int defaultHeight) /*-{
-	                                                    var height = 0;
+														var height = 0;
 
-	                                                    if(!$wnd.getComputedStyle)
-	                                                    return defaultHeight;
+														if(!$wnd.getComputedStyle)
+														return defaultHeight;
 
-	                                                    var row = $wnd.document.getElementById('calendar-row-calibration');
+														var row = $wnd.document.getElementById('calendar-row-calibration');
 
-	                                                    var style = $wnd.getComputedStyle(row, null);
-	                                                    height += parseInt(style.height);
+														var style = $wnd.getComputedStyle(row, null);
+														height += parseInt(style.height);
 
-	                                                    return height;
-	                                                    }-*/;
+														return height;
+														}-*/;
 
 	/**
 	 * Calculates the width of the cell identified by
@@ -457,18 +463,18 @@
 	 * @return width of a cell.
 	 */
 	private native int getCellWidth(int defaultWidth) /*-{
-	                                                  var width = 0;
+														var width = 0;
 
-	                                                  if(!$wnd.getComputedStyle)
-	                                                  return defaultWidth;
+														if(!$wnd.getComputedStyle)
+														return defaultWidth;
 
-	                                                  var cell = $wnd.document.getElementById('calendar-cell-calibration');
+														var cell = $wnd.document.getElementById('calendar-cell-calibration');
 
-	                                                  var style = $wnd.getComputedStyle(cell, null);
-	                                                  width += parseInt(style.width);
+														var style = $wnd.getComputedStyle(cell, null);
+														width += parseInt(style.width);
 
-	                                                  return width;
-	                                                  }-*/;
+														return width;
+														}-*/;
 
 	/**
 	 * Retrieves the current heading of the calendar.
@@ -668,8 +674,8 @@
 				eventDate.append(hourFormatter.format(event.getDtend()));
 
 				if (event.getDtstart().getDate() != event.getDtend().getDate()
-				                || event.getDtstart().getMonth() != event.getDtend().getMonth()
-				                || event.getDtstart().getYear() != event.getDtend().getYear()) {
+								|| event.getDtstart().getMonth() != event.getDtend().getMonth()
+								|| event.getDtstart().getYear() != event.getDtend().getYear()) {
 					fullDayEvent = true;
 					flowPanel.addStyleName("calendar-fullday-event");
 				}
@@ -709,7 +715,9 @@
 			} else
 				popupContent.setText(2, 0, "");
 
-			if (event.getParent().isEditable()) {
+			if (event.getParent().isEditable()
+							&& ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT,
+											GlobalPermissionEnum.EDIT_AGENDA)) {
 				final Anchor editAnchor = new Anchor(I18N.CONSTANTS.calendarEditEvent());
 				editAnchor.addClickHandler(new ClickHandler() {
 					@Override
@@ -814,8 +822,9 @@
 
 		final Date januaryFourth = new Date(thursday.getYear(), 0, 4);
 		final int daysToMonday = 1 - januaryFourth.getDay(); // Essayer avec le
-		                                                     // 1er jour de la
-		                                                     // semaine
+																// 1er jour de
+																// la
+																// semaine
 		final Date monday = new Date(thursday.getYear(), 0, 4 + daysToMonday);
 
 		final double diff = Math.floor((thursday.getTime() - monday.getTime()) / (1000 * 60 * 60 * 24));
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Revision 1501)
+++ src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Arbeitskopie)
@@ -71,6 +71,19 @@
 	/**
 	 * Show global export button in projects list
 	 */
+
+	VIEW_AGENDA,
+
+	/**
+	 * for viewing the agenda sub-tab
+	 */
+
+	EDIT_AGENDA,
+	/**
+	 * 
+	 * for creating/deleting/modifying events in the agenda
+	 */
+
 	GLOBAL_EXPORT;
 
 	public static String getName(GlobalPermissionEnum gp) {
@@ -112,6 +125,12 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
+		case VIEW_AGENDA:
+			gpName = I18N.CONSTANTS.VIEW_AGENDA();
+			break;
+		case EDIT_AGENDA:
+			gpName = I18N.CONSTANTS.EDIT_AGENDA();
+			break;
 		default:
 			gpName = null;
 		}
