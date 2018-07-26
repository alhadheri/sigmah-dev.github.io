Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1501)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -909,6 +909,20 @@
 
 exportToWord = Export to Word
 
+# filter labels
+
+noneFilter = exclude all closed projects
+
+allFilter = include all closed projects
+
+sixMonthsFilter = include last 6 months
+
+twelveMonthsFilter = include last 12 months
+
+customFilter = choose past time limit
+
+closedProjectsFilterText = Closed projects filter
+
 # Not implemented feature
 featureNotImplemented = Feature not yet implemented
 
@@ -1625,6 +1639,8 @@
 
 projectDetails = Details
 
+projectClosedLabel = Closed
+
 # Details
 projectDetailsNoDetails = No detail...
 
Index: src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java
===================================================================
--- src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java	(Revision 1501)
+++ src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java	(Arbeitskopie)
@@ -38,14 +38,21 @@
 import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
+import com.extjs.gxt.ui.client.GXT;
+import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.Style.SortDir;
 import com.extjs.gxt.ui.client.data.BaseModelData;
+import com.extjs.gxt.ui.client.data.FilterConfig;
+import com.extjs.gxt.ui.client.data.Loader;
 import com.extjs.gxt.ui.client.data.ModelData;
 import com.extjs.gxt.ui.client.data.SortInfo;
+import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.FieldEvent;
+import com.extjs.gxt.ui.client.event.GridEvent;
 import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.event.MenuEvent;
 import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.store.ListStore;
 import com.extjs.gxt.ui.client.store.Store;
@@ -53,6 +60,7 @@
 import com.extjs.gxt.ui.client.store.StoreFilter;
 import com.extjs.gxt.ui.client.store.StoreSorter;
 import com.extjs.gxt.ui.client.store.TreeStore;
+import com.extjs.gxt.ui.client.util.DelayedTask;
 import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
@@ -64,10 +72,13 @@
 import com.extjs.gxt.ui.client.widget.form.RadioGroup;
 import com.extjs.gxt.ui.client.widget.grid.ColumnConfig;
 import com.extjs.gxt.ui.client.widget.grid.ColumnData;
+import com.extjs.gxt.ui.client.widget.grid.ColumnHeader;
+import com.extjs.gxt.ui.client.widget.grid.ColumnHeader.Head;
 import com.extjs.gxt.ui.client.widget.grid.ColumnModel;
 import com.extjs.gxt.ui.client.widget.grid.Grid;
 import com.extjs.gxt.ui.client.widget.grid.GridCellRenderer;
 import com.extjs.gxt.ui.client.widget.grid.filters.DateFilter;
+import com.extjs.gxt.ui.client.widget.grid.filters.Filter;
 import com.extjs.gxt.ui.client.widget.grid.filters.GridFilters;
 import com.extjs.gxt.ui.client.widget.grid.filters.ListFilter;
 import com.extjs.gxt.ui.client.widget.grid.filters.NumericFilter;
@@ -75,6 +86,11 @@
 import com.extjs.gxt.ui.client.widget.layout.FitLayout;
 import com.extjs.gxt.ui.client.widget.layout.FlowData;
 import com.extjs.gxt.ui.client.widget.layout.FlowLayout;
+import com.extjs.gxt.ui.client.widget.menu.CheckMenuItem;
+import com.extjs.gxt.ui.client.widget.menu.DateMenu;
+import com.extjs.gxt.ui.client.widget.menu.Menu;
+import com.extjs.gxt.ui.client.widget.menu.MenuItem;
+import com.extjs.gxt.ui.client.widget.menu.SeparatorMenuItem;
 import com.extjs.gxt.ui.client.widget.toolbar.FillToolItem;
 import com.extjs.gxt.ui.client.widget.toolbar.SeparatorToolItem;
 import com.extjs.gxt.ui.client.widget.toolbar.ToolBar;
@@ -91,6 +107,7 @@
 import com.google.gwt.user.client.ui.Image;
 import com.google.gwt.user.client.ui.Label;
 import com.google.gwt.user.client.ui.Widget;
+import com.google.gwt.user.datepicker.client.CalendarUtil;
 
 /**
  * A widget which display a list of projects.
@@ -100,689 +117,827 @@
  */
 public class ProjectsListPanel {
 
-    /**
-     * A tree store with some useful dedicated methods.
-     * 
-     * @author tmi
-     * 
-     */
-    public static class ProjectStore extends TreeStore<ProjectDTOLight> {
-    }
+	/**
+	 * A tree store with some useful dedicated methods.
+	 * 
+	 * @author tmi
+	 * 
+	 */
+	public static class ProjectStore extends TreeStore<ProjectDTOLight> {
+	}
 
-    /**
-     * Defines the refreshing mode.
-     * 
-     * @author tmi
-     */
-    public static enum RefreshMode {
+	/**
+	 * Defines the refreshing mode.
+	 * 
+	 * @author tmi
+	 */
+	public static enum RefreshMode {
 
-        /**
-         * The project list is refreshed each time the
-         * {@link ProjectsListPanel#refresh(boolean, Integer...)} method is
-         * called.
-         */
-        AUTOMATIC,
+		/**
+		 * The project list is refreshed each time the
+		 * {@link ProjectsListPanel#refresh(boolean, Integer...)} method is
+		 * called.
+		 */
+		AUTOMATIC,
 
-        /**
-         * The project list is refreshed each time user clicks on the refresh
-         * button.
-         */
-        BUTTON,
+		/**
+		 * The project list is refreshed each time user clicks on the refresh
+		 * button.
+		 */
+		BUTTON,
 
-        /**
-         * Refresh the project list when {@link #refresh(boolean, Integer...)}
-         * if called for the first time. Subsequent refreshs are called by the
-         * refresh button.
-         */
-        BOTH;
-    }
+		/**
+		 * Refresh the project list when {@link #refresh(boolean, Integer...)}
+		 * if called for the first time. Subsequent refreshs are called by the
+		 * refresh button.
+		 */
+		BOTH;
+	}
 
-    /**
-     * Defines the loading mode.
-     * 
-     * @author tmi
-     */
-    public static enum LoadingMode {
+	/**
+	 * Defines the loading mode.
+	 * 
+	 * @author tmi
+	 */
+	public static enum LoadingMode {
 
-        /**
-         * The projects list id loaded by one single server call.
-         */
-        ONE_TIME,
+		/**
+		 * The projects list id loaded by one single server call.
+		 */
+		ONE_TIME,
 
-        /**
-         * The projects list is loaded by chunks and a progress bar informs of
-         * the loading process.
-         */
-        CHUNK;
-    }
+		/**
+		 * The projects list is loaded by chunks and a progress bar informs of
+		 * the loading process.
+		 */
+		CHUNK;
+	}
 
-    private final Dispatcher dispatcher;
-    private final Authentication authentication;
-    private final ContentPanel projectTreePanel;
-    private final TreeGrid<ProjectDTOLight> projectTreeGrid;
-    private final Radio ngoRadio;
-    private final Radio fundingRadio;
-    private final Radio partnerRadio;
-    private final Button filterButton;
-    private final GridFilters gridFilters;
-    
-    /** Current projects grid parameters. */
-    private ProjectModelType currentModelType;
-    private final ArrayList<Integer> orgUnitsIds;
+	private final Dispatcher dispatcher;
+	private final Authentication authentication;
+	private final ContentPanel projectTreePanel;
+	private final TreeGrid<ProjectDTOLight> projectTreeGrid;
+	private final Radio ngoRadio;
+	private final Radio fundingRadio;
+	private final Radio partnerRadio;
+	private final Button filterButton;
+	private final GridFilters gridFilters;
 
-    /** The refreshing mode (automatic by default) */
-    private final RefreshMode refreshMode;
-    private final com.extjs.gxt.ui.client.widget.Label refreshDateLabel;
+	// private final StoreFilter<ProjectDTOLight> closedFilter = new
+	// StoreFilter<ProjectDTOLight>() {
+	//
+	// @Override
+	// public boolean select(Store<ProjectDTOLight> store, ProjectDTOLight
+	// parent, ProjectDTOLight item,
+	// String property) {
+	// if (item.isClosed())
+	// return false;
+	// else
+	// return true;
+	// }
+	//
+	// };
 
-    /** The loading mode (one time by default) */
-    private final LoadingMode loadingMode;
+	/** Current projects grid parameters. */
+	private ProjectModelType currentModelType;
+	private final ArrayList<Integer> orgUnitsIds;
 
-    /**
-     * true if {@link #refresh(boolean, Integer...)} has already been called at
-     * least one time
-     */
-    private static boolean isLoaded = false;
+	/** The refreshing mode (automatic by default) */
+	private final RefreshMode refreshMode;
+	private final com.extjs.gxt.ui.client.widget.Label refreshDateLabel;
 
-    /** The GetProjects command which will be executed for the next refresh. */
-    private GetProjects command;
+	/** The loading mode (one time by default) */
+	private final LoadingMode loadingMode;
 
-    /**
-     * Builds a new project list panel with the default refreshing mode to
-     * {@link RefreshMode#AUTOMATIC}.
-     * 
-     * @param dispatcher
-     *            The dispatcher.
-     * @param authentication
-     *            The current authentication.
-     */
-    public ProjectsListPanel(Dispatcher dispatcher, Authentication authentication, EventBus eventBus) {
-        this(dispatcher, authentication, eventBus, RefreshMode.AUTOMATIC, LoadingMode.ONE_TIME);
-    }
+	/**
+	 * true if {@link #refresh(boolean, Integer...)} has already been called at
+	 * least one time
+	 */
+	private static boolean isLoaded = false;
 
-    /**
-     * Builds a new project list panel.
-     * 
-     * @param dispatcher
-     *            The dispatcher.
-     * @param authentication
-     *            The current authentication.
-     * @param refreshMode
-     *            The refreshing mode.
-     */
-    public ProjectsListPanel(Dispatcher dispatcher, Authentication authentication, EventBus eventBus, RefreshMode refreshMode) {
-        this(dispatcher, authentication, eventBus, refreshMode, LoadingMode.ONE_TIME);
-    }
+	/** The GetProjects command which will be executed for the next refresh. */
+	private GetProjects command;
 
-    /**
-     * Builds a new project list panel.
-     * 
-     * @param dispatcher
-     *            The dispatcher.
-     * @param authentication
-     *            The current authentication.
-     * @param refreshMode
-     *            The refreshing mode.
-     * @param loadingMode
-     *            The loading mode.
-     */
-    public ProjectsListPanel(Dispatcher dispatcher, final Authentication authentication, EventBus eventBus, RefreshMode refreshMode,
-            LoadingMode loadingMode) {
+	/**
+	 * Builds a new project list panel with the default refreshing mode to
+	 * {@link RefreshMode#AUTOMATIC}.
+	 * 
+	 * @param dispatcher
+	 *            The dispatcher.
+	 * @param authentication
+	 *            The current authentication.
+	 */
+	public ProjectsListPanel(Dispatcher dispatcher, Authentication authentication, EventBus eventBus) {
+		this(dispatcher, authentication, eventBus, RefreshMode.AUTOMATIC, LoadingMode.ONE_TIME);
+	}
 
-        this.dispatcher = dispatcher;
-        this.authentication = authentication;
-        this.refreshMode = refreshMode;
-        this.loadingMode = loadingMode;
+	/**
+	 * Builds a new project list panel.
+	 * 
+	 * @param dispatcher
+	 *            The dispatcher.
+	 * @param authentication
+	 *            The current authentication.
+	 * @param refreshMode
+	 *            The refreshing mode.
+	 */
+	public ProjectsListPanel(Dispatcher dispatcher, Authentication authentication, EventBus eventBus,
+					RefreshMode refreshMode) {
+		this(dispatcher, authentication, eventBus, refreshMode, LoadingMode.ONE_TIME);
+	}
 
-        // Default filters parameters.
-        orgUnitsIds = new ArrayList<Integer>();
-        currentModelType = ProjectModelType.NGO;
+	/**
+	 * Builds a new project list panel.
+	 * 
+	 * @param dispatcher
+	 *            The dispatcher.
+	 * @param authentication
+	 *            The current authentication.
+	 * @param refreshMode
+	 *            The refreshing mode.
+	 * @param loadingMode
+	 *            The loading mode.
+	 */
+	public ProjectsListPanel(Dispatcher dispatcher, final Authentication authentication, EventBus eventBus,
+					RefreshMode refreshMode, LoadingMode loadingMode) {
 
-        // Store.
-        final ProjectStore projectStore = new ProjectStore();
-        projectStore.setMonitorChanges(true);
+		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		this.refreshMode = refreshMode;
+		this.loadingMode = loadingMode;
 
-        // Default sort order of the projects grid.
-        projectStore.setSortInfo(new SortInfo("name", SortDir.ASC));
+		// Default filters parameters.
+		orgUnitsIds = new ArrayList<Integer>();
+		currentModelType = ProjectModelType.NGO;
 
-        // Grid.
-        projectTreeGrid = new TreeGrid<ProjectDTOLight>(projectStore, getProjectGridColumnModel());
-        projectTreeGrid.setBorders(true);
-        projectTreeGrid.getStyle().setNodeOpenIcon(null);
-        projectTreeGrid.getStyle().setNodeCloseIcon(null);
-        projectTreeGrid.getStyle().setLeafIcon(null);
-        projectTreeGrid.setAutoExpandColumn("fullName");
-        projectTreeGrid.setTrackMouseOver(false);
-        projectTreeGrid.setAutoExpand(true);               
+		// Store.
+		final ProjectStore projectStore = new ProjectStore();
+		projectStore.setMonitorChanges(true);
 
-     // Apply grid filters
-        gridFilters = new GridFilters();       
-        projectTreeGrid.addPlugin(createGridFilters());  
+		// Default sort order of the projects grid.
+		projectStore.setSortInfo(new SortInfo("name", SortDir.ASC));
 
-        // Store.
-        projectStore.setStoreSorter(new StoreSorter<ProjectDTOLight>() {
-            @Override
-            public int compare(Store<ProjectDTOLight> store, ProjectDTOLight m1, ProjectDTOLight m2, String property) {
+		// Grid.
+		projectTreeGrid = new TreeGrid<ProjectDTOLight>(projectStore, getProjectGridColumnModel());
+		projectTreeGrid.setBorders(true);
+		projectTreeGrid.getStyle().setNodeOpenIcon(null);
+		projectTreeGrid.getStyle().setNodeCloseIcon(null);
+		projectTreeGrid.getStyle().setLeafIcon(null);
+		projectTreeGrid.setAutoExpandColumn("fullName");
+		projectTreeGrid.setTrackMouseOver(false);
+		projectTreeGrid.setAutoExpand(true);
 
-                if ("name".equals(property)) {
-                    return m1.getName().compareToIgnoreCase(m2.getName());
-                } else if ("fullName".equals(property)) {
-                    return m1.getFullName().compareToIgnoreCase(m2.getFullName());
-                } else if ("phase".equals(property)) {
-                    return m1.getCurrentPhaseName().compareToIgnoreCase(m2.getCurrentPhaseName());
-                } else if ("orgUnitName".equals(property)) {
-                    return m1.getOrgUnitName().compareToIgnoreCase(m2.getOrgUnitName());
-                } else if ("spentBudget".equals(property)) {
-                    final Double d1 = NumberUtils.adjustRatio(NumberUtils.ratio(m1.getSpendBudget(),
-                            m1.getPlannedBudget()));
-                    final Double d2 = NumberUtils.adjustRatio(NumberUtils.ratio(m2.getSpendBudget(),
-                            m2.getPlannedBudget()));
-                    return d1.compareTo(d2);
-                } else if ("time".equals(property)) {
-                    final Double d1 = m1.getElapsedTime();
-                    final Double d2 = m2.getElapsedTime();
-                    return d1.compareTo(d2);
-                } else if ("activity".equals(property)) {
-                    return 0;
-                } else if ("categoryElements".equals(property)) {
-                    return 0;
-                } else {
-                    return super.compare(store, m1, m2, property);
-                }
-            }
-        });
+		// Apply grid filters
+		gridFilters = new GridFilters() {
 
-        // Top panel
-        final RadioGroup group = new RadioGroup("projectTypeFilter");
-        group.setFireChangeEventOnSetValue(true);
+			private CheckMenuItem checkItem;
+			private SeparatorMenuItem seperator;
+			private Menu filterMenuO;
+			private StoreFilter<ModelData> currentFilterO;
 
-        ngoRadio = new Radio();
-        ngoRadio.setFireChangeEventOnSetValue(true);
-        ngoRadio.setValue(true);
-        ngoRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.NGO));
-        ngoRadio.addStyleName("toolbar-radio");
+			private DelayedTask deferredUpdateO = new DelayedTask(new Listener<BaseEvent>() {
+				public void handleEvent(BaseEvent be) {
+					reload();
+				}
+			});
 
-        final WidgetComponent ngoIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.NGO, IconSize.SMALL).createImage());
-        ngoIcon.addStyleName("toolbar-icon");
+			@Override
+			protected void onContextMenu(GridEvent<?> be) {
+				int column = be.getColIndex();
 
-        final Label ngoLabel = new Label(ProjectModelType.getName(ProjectModelType.NGO));
-        ngoLabel.addStyleName("flexibility-element-label");
-        ngoLabel.addStyleName("project-starred-icon");
-        ngoLabel.addClickHandler(new ClickHandler() {
+				if (seperator == null) {
+					seperator = new SeparatorMenuItem();
+				}
+				seperator.removeFromParent();
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(true);
-                fundingRadio.setValue(false);
-                partnerRadio.setValue(false);
-            }
-        });
+				if (checkItem == null) {
+					checkItem = new CheckMenuItem(getMessages().getFilterText());
 
-        fundingRadio = new Radio();
-        fundingRadio.setFireChangeEventOnSetValue(true);
-        fundingRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.FUNDING));
-        fundingRadio.addStyleName("toolbar-radio");
+					checkItem.addListener(Events.CheckChange, new Listener<MenuEvent>() {
+						public void handleEvent(MenuEvent me) {
+							onCheckChange(me);
+						}
+					});
+					checkItem.addListener(Events.BeforeCheckChange, new Listener<MenuEvent>() {
+						public void handleEvent(MenuEvent me) {
+							onBeforeCheck(me);
+						}
+					});
+				}
+				checkItem.removeFromParent();
+				checkItem.setData("index", column);
 
-        final WidgetComponent fundingIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.FUNDING, IconSize.SMALL).createImage());
-        fundingIcon.addStyleName("toolbar-icon");
+				Filter f = getFilter(grid.getColumnModel().getColumn(column).getDataIndex());
+				if (f != null) {
+					checkItem.show();
 
-        final Label fundingLabel = new Label(ProjectModelType.getName(ProjectModelType.FUNDING));
-        fundingLabel.addStyleName("flexibility-element-label");
-        fundingLabel.addStyleName("project-starred-icon");
-        fundingLabel.addClickHandler(new ClickHandler() {
+					filterMenuO = f.getMenu();
+					checkItem.setChecked(f.isActive(), true);
+					checkItem.setSubMenu(filterMenuO);
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(false);
-                fundingRadio.setValue(true);
-                partnerRadio.setValue(false);
-            }
-        });
+					Menu menu = be.getMenu();
+					menu.add(seperator);
+					if (columnModel.getDataIndex(column).equals("time"))
+						checkItem.setText(I18N.CONSTANTS.closedProjectsFilterText());
+					else
+						checkItem.setText(GXT.MESSAGES.gridFilters_filterText());
+					menu.add(checkItem);
+				}
+			}
 
-        partnerRadio = new Radio();
-        partnerRadio.setFireChangeEventOnSetValue(true);
-        partnerRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
-        partnerRadio.addStyleName("toolbar-radio");
+			@Override
+			protected void onStateChange(Filter filter) {
+				if (checkItem != null && checkItem.isAttached()) {
+					checkItem.setChecked(filter.isActive(), true);
+				}
+				if ((isAutoReload() || isLocal())) {
+					deferredUpdateO.delay(getUpdateBuffer());
+				}
+				updateColumnHeadings();
+			}
 
-        final WidgetComponent partnerIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.LOCAL_PARTNER, IconSize.SMALL).createImage());
-        partnerIcon.addStyleName("toolbar-icon");
+			@Override
+			protected void reload() {
+				if (isLocal()) {
+					if (currentFilterO != null) {
+						getStore().removeFilter(currentFilterO);
+					}
+					currentFilterO = getModelFilter();
+					getStore().addFilter(currentFilterO);
+					if (!getStore().isFiltered()) {
+						getStore().applyFilters("");
+					}
+				} else {
+					deferredUpdateO.cancel();
 
-        final Label partnerLabel = new Label(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
-        partnerLabel.addStyleName("flexibility-element-label");
-        partnerLabel.addStyleName("project-starred-icon");
-        partnerLabel.addClickHandler(new ClickHandler() {
+					Loader<?> l = getLoader(getStore());
+					if (l != null) {
+						l.load();
+					}
+				}
+			}
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(false);
-                fundingRadio.setValue(false);
-                partnerRadio.setValue(true);
-            }
-        });
+			@Override
+			public void updateColumnHeadings() {
+				int cols = grid.getColumnModel().getColumnCount();
+				for (int i = 0; i < cols; i++) {
+					ColumnConfig config = grid.getColumnModel().getColumn(i);
+					if (!config.isHidden()) {
+						ColumnHeader header = grid.getView().getHeader();
+						if (header != null) {
+							Head h = header.getHead(i);
+							if (h != null && h.isRendered()) {
+								Filter f = getFilter(config.getDataIndex());
+								if (f != null) {
+									h.el().setStyleName("filtered-column-header", f.isActive());
 
-        final HTML headLabel = new HTML("&nbsp;&nbsp;" + I18N.CONSTANTS.projectTypeFilter() + ": ");
-        headLabel.addStyleName("flexibility-element-label");
+								}
+							}
+						}
+					}
+				}
+			}
+		};
 
-        group.add(ngoRadio);
-        group.add(fundingRadio);
-        group.add(partnerRadio);
-        group.setAutoWidth(true);
+		projectTreeGrid.addPlugin(createGridFilters());
 
-        // Expand all button.
-        final Button expandButton = new Button("", IconImageBundle.ICONS.expand(),
-                new SelectionListener<ButtonEvent>() {
+		// Store.
+		projectStore.setStoreSorter(new StoreSorter<ProjectDTOLight>() {
+			@Override
+			public int compare(Store<ProjectDTOLight> store, ProjectDTOLight m1, ProjectDTOLight m2, String property) {
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        projectTreeGrid.expandAll();
-                    }
-                });
+				if ("name".equals(property)) {
+					return m1.getName().compareToIgnoreCase(m2.getName());
+				} else if ("fullName".equals(property)) {
+					return m1.getFullName().compareToIgnoreCase(m2.getFullName());
+				} else if ("phase".equals(property)) {
+					return m1.getCurrentPhaseName().compareToIgnoreCase(m2.getCurrentPhaseName());
+				} else if ("orgUnitName".equals(property)) {
+					return m1.getOrgUnitName().compareToIgnoreCase(m2.getOrgUnitName());
+				} else if ("spentBudget".equals(property)) {
+					final Double d1 = NumberUtils.adjustRatio(NumberUtils.ratio(m1.getSpendBudget(),
+									m1.getPlannedBudget()));
+					final Double d2 = NumberUtils.adjustRatio(NumberUtils.ratio(m2.getSpendBudget(),
+									m2.getPlannedBudget()));
+					return d1.compareTo(d2);
+				} else if ("time".equals(property)) {
+					final Double d1 = m1.getElapsedTime();
+					final Double d2 = m2.getElapsedTime();
+					return d1.compareTo(d2);
+				} else if ("activity".equals(property)) {
+					return 0;
+				} else if ("categoryElements".equals(property)) {
+					return 0;
+				} else {
+					return super.compare(store, m1, m2, property);
+				}
+			}
+		});
 
-        // Collapse all button.
-        final Button collapseButton = new Button("", IconImageBundle.ICONS.collapse(),
-                new SelectionListener<ButtonEvent>() {
+		// Top panel
+		final RadioGroup group = new RadioGroup("projectTypeFilter");
+		group.setFireChangeEventOnSetValue(true);
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        projectTreeGrid.collapseAll();
-                    }
-                });
+		ngoRadio = new Radio();
+		ngoRadio.setFireChangeEventOnSetValue(true);
+		ngoRadio.setValue(true);
+		ngoRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.NGO));
+		ngoRadio.addStyleName("toolbar-radio");
 
-        // Filter button.
-        filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
+		final WidgetComponent ngoIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.NGO, IconSize.SMALL).createImage());
+		ngoIcon.addStyleName("toolbar-icon");
 
-        // Refresh button.
-        final Button refreshButton = new Button(I18N.CONSTANTS.refreshProjectList(), IconImageBundle.ICONS.refresh(),
-                new SelectionListener<ButtonEvent>() {
+		final Label ngoLabel = new Label(ProjectModelType.getName(ProjectModelType.NGO));
+		ngoLabel.addStyleName("flexibility-element-label");
+		ngoLabel.addStyleName("project-starred-icon");
+		ngoLabel.addClickHandler(new ClickHandler() {
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        // Explicit refresh.
-                        refreshProjectGrid(command);
-                    }
-                });
-        refreshButton.setToolTip(I18N.CONSTANTS.refreshProjectListDetails());
-        refreshButton.addStyleName("project-refresh-button");
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(true);
+				fundingRadio.setValue(false);
+				partnerRadio.setValue(false);
+			}
+		});
 
-        // Refresh date.
-        refreshDateLabel = new com.extjs.gxt.ui.client.widget.Label();
-        
-        eventBus.addListener(AppEvents.DeleteProject, new Listener<ProjectEvent>() {
+		fundingRadio = new Radio();
+		fundingRadio.setFireChangeEventOnSetValue(true);
+		fundingRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.FUNDING));
+		fundingRadio.addStyleName("toolbar-radio");
 
-            @Override
-            public void handleEvent(ProjectEvent be) {
-                refreshProjectGrid(command);
-            }
-        });
-        
-        
+		final WidgetComponent fundingIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.FUNDING, IconSize.SMALL).createImage());
+		fundingIcon.addStyleName("toolbar-icon");
 
-        final ToolBar toolbar = new ToolBar();
-        if (refreshMode == RefreshMode.BUTTON || refreshMode == RefreshMode.BOTH) {
-            toolbar.add(refreshButton);
-            toolbar.add(refreshDateLabel);
-            toolbar.add(new SeparatorToolItem());
-        }
-        toolbar.add(expandButton);
-        toolbar.add(collapseButton);
-        toolbar.add(new SeparatorToolItem());
-        toolbar.add(filterButton);
-        toolbar.add(new WidgetComponent(headLabel));
-        toolbar.add(ngoRadio);
-        toolbar.add(ngoIcon);
-        toolbar.add(new WidgetComponent(ngoLabel));
-        toolbar.add(fundingRadio);
-        toolbar.add(fundingIcon);
-        toolbar.add(new WidgetComponent(fundingLabel));
-        toolbar.add(partnerRadio);
-        toolbar.add(partnerIcon);
-        toolbar.add(new WidgetComponent(partnerLabel));       
-        
-        if(ProfileUtils.isGranted(authentication, GlobalPermissionEnum.GLOBAL_EXPORT)){
-        	 final GlobalExportForm globalExportForm=
-             	new GlobalExportForm(authentication.getOrganizationId(),dispatcher);
-        	 toolbar.add(new FillToolItem());
-             toolbar.add(globalExportForm.getButton());
-             toolbar.add(globalExportForm.getExportForm());
-        }
-       
+		final Label fundingLabel = new Label(ProjectModelType.getName(ProjectModelType.FUNDING));
+		fundingLabel.addStyleName("flexibility-element-label");
+		fundingLabel.addStyleName("project-starred-icon");
+		fundingLabel.addClickHandler(new ClickHandler() {
 
-        // Panel
-        projectTreePanel = new ContentPanel(new FitLayout());
-        projectTreePanel.setHeading(I18N.CONSTANTS.projects());
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(false);
+				fundingRadio.setValue(true);
+				partnerRadio.setValue(false);
+			}
+		});
 
-        projectTreePanel.setTopComponent(toolbar);
+		partnerRadio = new Radio();
+		partnerRadio.setFireChangeEventOnSetValue(true);
+		partnerRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
+		partnerRadio.addStyleName("toolbar-radio");
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
-            projectTreePanel.add(projectTreeGrid);
-        } else {
-            final HTML insufficient = new HTML(I18N.CONSTANTS.permViewProjectsInsufficient());
-            insufficient.addStyleName("important-label");
-            projectTreePanel.add(insufficient);
-        }
+		final WidgetComponent partnerIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.LOCAL_PARTNER, IconSize.SMALL).createImage());
+		partnerIcon.addStyleName("toolbar-icon");
 
-        addListeners();
-        addFilters();
-    }
+		final Label partnerLabel = new Label(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
+		partnerLabel.addStyleName("flexibility-element-label");
+		partnerLabel.addStyleName("project-starred-icon");
+		partnerLabel.addClickHandler(new ClickHandler() {
 
-    /**
-     * Builds and returns the columns model for the projects tree grid.
-     * 
-     * @return The project tree grid columns model.
-     */
-    private ColumnModel getProjectGridColumnModel() {
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(false);
+				fundingRadio.setValue(false);
+				partnerRadio.setValue(true);
+			}
+		});
 
-        final DateTimeFormat format = DateUtils.DATE_SHORT;
+		final HTML headLabel = new HTML("&nbsp;&nbsp;" + I18N.CONSTANTS.projectTypeFilter() + ": ");
+		headLabel.addStyleName("flexibility-element-label");
 
-        // Starred icon
-        final ColumnConfig starredIconColumn = new ColumnConfig("starred", "", 30);
-        starredIconColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
-            private final DashboardImageBundle imageBundle = GWT.create(DashboardImageBundle.class);
+		group.add(ngoRadio);
+		group.add(fundingRadio);
+		group.add(partnerRadio);
+		group.setAutoWidth(true);
 
-            @Override
-            public Object render(final ProjectDTOLight model, String property, ColumnData config, int rowIndex,
-                    int colIndex, final ListStore<ProjectDTOLight> store, final Grid<ProjectDTOLight> grid) {
-            	
-            	//A star icon
-                final Image icon;
-                                             
-                if (isFavoriteProject(authentication.getUserId(),model)) {
-                	//star
-                    icon = imageBundle.star().createImage();
-                    icon.setTitle("Favorite");
-                } else {
-                	//empty start
-                    icon = imageBundle.emptyStar().createImage();
-                    icon.setTitle("Non-favorite");
-                }
+		// Expand all button.
+		final Button expandButton = new Button("", IconImageBundle.ICONS.expand(),
+						new SelectionListener<ButtonEvent>() {
 
-                //Star icon click-handler
-                icon.addClickHandler(new ClickHandler() {
+							@Override
+							public void componentSelected(ButtonEvent ce) {
+								projectTreeGrid.expandAll();
+							}
+						});
 
-                    @Override
-                    public void onClick(ClickEvent event) {
+		// Collapse all button.
+		final Button collapseButton = new Button("", IconImageBundle.ICONS.collapse(),
+						new SelectionListener<ButtonEvent>() {
 
-                    	UpdateProjectFavorite updateCmd ;
-                    	
-                    	//Get the project's id
-                    	int projectId = model.getId();
-                		if(projectId<0) {
-                			projectId = (Integer) model.get("pid");
-                		}
-                		
-                    	
-                    	if(isFavoriteProject(authentication.getUserId(),model))
-                    	{//Remove the favorite user from project favorite user list
-                    	              	   
-                    		 updateCmd = new UpdateProjectFavorite(projectId,UpdateProjectFavorite.UpdateType.REMOVE);
-                    		                    		
-                    	}
-                    	else
-                    	{//Add current user into the favorite user list of the project
-                    		
-                    		 updateCmd = new UpdateProjectFavorite(projectId,UpdateProjectFavorite.UpdateType.ADD);                   		
-                    		
-                    	}
-                    	
-                    	//RPC to change the favorite tag
-                    	dispatcher.execute(updateCmd, new MaskingAsyncMonitor(projectTreePanel, I18N.CONSTANTS.loading()), new AsyncCallback<CreateResult>(){
-
 							@Override
-							public void onFailure(Throwable caught) {
-								
-								  Log.error(
-	                                        "[execute] Error while setting the favorite status of the project #"
-	                                                + model.getId(), caught);
-	                                MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
-	                                        I18N.CONSTANTS.projectStarredErrorDetails(), null);
-	                            
-								
+							public void componentSelected(ButtonEvent ce) {
+								projectTreeGrid.collapseAll();
 							}
+						});
 
+		// Filter button.
+		filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
+
+		// Refresh button.
+		final Button refreshButton = new Button(I18N.CONSTANTS.refreshProjectList(), IconImageBundle.ICONS.refresh(),
+						new SelectionListener<ButtonEvent>() {
+
 							@Override
-							public void onSuccess(CreateResult result) {
-								
-								if(result==null || result.getEntity()==null)
-								{
-		                                MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
-		                                        I18N.CONSTANTS.projectStarredErrorDetails(), null);
-								}
-								else
-								{
-									//Update local store
-									ProjectDTOLight resultProject =(ProjectDTOLight) result.getEntity();
-									model.setFavoriteUsers(resultProject.getFavoriteUsers());
-									store.update(model);
-									
-									Notification.show(I18N.CONSTANTS.infoConfirmation(),
-                                            I18N.CONSTANTS.projectStarred());
-								 
-																													
-								}
-								
-								
+							public void componentSelected(ButtonEvent ce) {
+								// Explicit refresh.
+								refreshProjectGrid(command);
 							}
-                			
-                		});
-                    	                    	
-                 
-                    }
-                });
+						});
+		refreshButton.setToolTip(I18N.CONSTANTS.refreshProjectListDetails());
+		refreshButton.addStyleName("project-refresh-button");
 
-                icon.addStyleName("project-starred-icon");
+		// Refresh date.
+		refreshDateLabel = new com.extjs.gxt.ui.client.widget.Label();
 
-                return icon;
-            }
-        });
+		eventBus.addListener(AppEvents.DeleteProject, new Listener<ProjectEvent>() {
 
-        // Code
-        final ColumnConfig codeColumn = new ColumnConfig("name", I18N.CONSTANTS.projectName(), 110);
-        codeColumn.setRenderer(new WidgetTreeGridCellRenderer<ProjectDTOLight>() {
-            @Override
-            public Widget getWidget(ProjectDTOLight model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+			@Override
+			public void handleEvent(ProjectEvent be) {
+				refreshProjectGrid(command);
+			}
+		});
 
-                Integer id = model.get("id");
-                if (id <= 0) {
-                    id = model.get("pid");
-                }
+		final ToolBar toolbar = new ToolBar();
+		if (refreshMode == RefreshMode.BUTTON || refreshMode == RefreshMode.BOTH) {
+			toolbar.add(refreshButton);
+			toolbar.add(refreshDateLabel);
+			toolbar.add(new SeparatorToolItem());
+		}
+		toolbar.add(expandButton);
+		toolbar.add(collapseButton);
+		toolbar.add(new SeparatorToolItem());
+		toolbar.add(filterButton);
+		toolbar.add(new WidgetComponent(headLabel));
+		toolbar.add(ngoRadio);
+		toolbar.add(ngoIcon);
+		toolbar.add(new WidgetComponent(ngoLabel));
+		toolbar.add(fundingRadio);
+		toolbar.add(fundingIcon);
+		toolbar.add(new WidgetComponent(fundingLabel));
+		toolbar.add(partnerRadio);
+		toolbar.add(partnerIcon);
+		toolbar.add(new WidgetComponent(partnerLabel));
 
-                final Hyperlink h = new Hyperlink((String) model.get(property), true, ProjectPresenter.PAGE_ID
-                        .toString() + '!' + String.valueOf(id));
-                if (!model.isLeaf()) {
-                    h.addStyleName("project-grid-node");
-                } else {
-                    h.addStyleName("project-grid-leaf");
-                }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.GLOBAL_EXPORT)) {
+			final GlobalExportForm globalExportForm = new GlobalExportForm(authentication.getOrganizationId(),
+							dispatcher);
+			toolbar.add(new FillToolItem());
+			toolbar.add(globalExportForm.getButton());
+			toolbar.add(globalExportForm.getExportForm());
+		}
 
-                final com.google.gwt.user.client.ui.Grid panel = new com.google.gwt.user.client.ui.Grid(1, 2);
-                panel.setCellPadding(0);
-                panel.setCellSpacing(0);
+		// Panel
+		projectTreePanel = new ContentPanel(new FitLayout());
+		projectTreePanel.setHeading(I18N.CONSTANTS.projects());
 
-                panel.setWidget(
-                        0,
-                        0,
-                        FundingIconProvider.getProjectTypeIcon(
-                                model.getProjectModelType(authentication.getOrganizationId()), IconSize.SMALL_MEIDUM)
-                                .createImage());
-                panel.getCellFormatter().addStyleName(0, 0, "project-grid-code-icon");
-                panel.setWidget(0, 1, h);
-                panel.getCellFormatter().addStyleName(0, 1, "project-grid-code");
+		projectTreePanel.setTopComponent(toolbar);
 
-                return panel;
-            }
-        });
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+			projectTreePanel.add(projectTreeGrid);
+		} else {
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permViewProjectsInsufficient());
+			insufficient.addStyleName("important-label");
+			projectTreePanel.add(insufficient);
+		}
 
-        // Title
-        final ColumnConfig titleColumn = new ColumnConfig("fullName", I18N.CONSTANTS.projectFullName(), 230);
-        titleColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// getProjectsStore().addFilter(closedFilter);
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                String title = (String) model.get(property);
-                if (model.getParent() != null) {
-                    title = "&nbsp;&nbsp;&nbsp;&nbsp;" + title;
-                }
-                return createProjectGridText(model, title);
-            }
-        });
+		addListeners();
+		addFilters();
 
-        // Current phase
-        final ColumnConfig currentPhaseName = new ColumnConfig("currentPhaseName", I18N.CONSTANTS.projectActivePhase(), 150);
-        currentPhaseName.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return createProjectGridText(model, (String) model.get(property));
-            }
-        });
+		getProjectsPanel().addListener(Events.AfterLayout, new Listener<BaseEvent>() {
 
-        // Org Unit
-        final ColumnConfig orgUnitColumn = new ColumnConfig("orgUnitName", I18N.CONSTANTS.orgunit(), 150);
-        orgUnitColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				gridFilters.getFilter("time").setActive(true, false);
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return createProjectGridText(model, (String) model.get(property));
-            }
-        });
+			}
+		});
 
-        // Ratio budget
-        final ColumnConfig spentBudgetColumn = new ColumnConfig("spentBudget", I18N.CONSTANTS.projectSpendBudget(), 100);
-        spentBudgetColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+	}
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return new RatioBar(NumberUtils.ratio(model.getSpendBudget(), model.getPlannedBudget()));
-            }
-        });
+	/**
+	 * Builds and returns the columns model for the projects tree grid.
+	 * 
+	 * @return The project tree grid columns model.
+	 */
+	private ColumnModel getProjectGridColumnModel() {
 
-        // Planned budget
-        final ColumnConfig plannedBudgetColumn = new ColumnConfig("plannedBudget",
-                I18N.CONSTANTS.projectPlannedBudget(), 75);
-        plannedBudgetColumn.setHidden(true);
+		final DateTimeFormat format = DateUtils.DATE_SHORT;
 
-        // Spend budget
-        final ColumnConfig spendBudgetColumn = new ColumnConfig("spendBudget", I18N.CONSTANTS.projectSpendBudget(), 75);
-        spendBudgetColumn.setHidden(true);
+		// Starred icon
+		final ColumnConfig starredIconColumn = new ColumnConfig("starred", "", 30);
+		starredIconColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+			private final DashboardImageBundle imageBundle = GWT.create(DashboardImageBundle.class);
 
-        // Received budget
-        final ColumnConfig receivedBudgetColumn = new ColumnConfig("receivedBudget",
-                I18N.CONSTANTS.projectReceivedBudget(), 75);
-        receivedBudgetColumn.setHidden(true);
+			@Override
+			public Object render(final ProjectDTOLight model, String property, ColumnData config, int rowIndex,
+							int colIndex, final ListStore<ProjectDTOLight> store, final Grid<ProjectDTOLight> grid) {
 
-        // Time
-        final ColumnConfig timeColumn = new ColumnConfig("time", I18N.CONSTANTS.projectTime(), 100);
-        timeColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+				// A star icon
+				final Image icon;
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return new RatioBar(model.getElapsedTime());
-            }
-        });
+				if (isFavoriteProject(authentication.getUserId(), model)) {
+					// star
+					icon = imageBundle.star().createImage();
+					icon.setTitle("Favorite");
+				} else {
+					// empty start
+					icon = imageBundle.emptyStar().createImage();
+					icon.setTitle("Non-favorite");
+				}
 
-        // Start date
-        final ColumnConfig startDateColumn = new ColumnConfig("startDate", I18N.CONSTANTS.projectStartDate(), 75);
-        startDateColumn.setHidden(true);
-        startDateColumn.setDateTimeFormat(format);
-        startDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+				// Star icon click-handler
+				icon.addClickHandler(new ClickHandler() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+					@Override
+					public void onClick(ClickEvent event) {
 
-        // End date
-        final ColumnConfig endDateColumn = new ColumnConfig("endDate", I18N.CONSTANTS.projectEndDate(), 75);
-        endDateColumn.setDateTimeFormat(format);
-        endDateColumn.setHidden(true);
-        endDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+						UpdateProjectFavorite updateCmd;
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+						// Get the project's id
+						int projectId = model.getId();
+						if (projectId < 0) {
+							projectId = (Integer) model.get("pid");
+						}
 
-        // Close date
-        final ColumnConfig closeDateColumn = new ColumnConfig("closeDate", I18N.CONSTANTS.projectClosedDate(), 75);
-        closeDateColumn.setDateTimeFormat(format);
-        closeDateColumn.setHidden(true);
-        closeDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+						if (isFavoriteProject(authentication.getUserId(), model)) {// Remove
+																					// the
+																					// favorite
+																					// user
+																					// from
+																					// project
+																					// favorite
+																					// user
+																					// list
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+							updateCmd = new UpdateProjectFavorite(projectId, UpdateProjectFavorite.UpdateType.REMOVE);
 
-        // Activity
-        final ColumnConfig activityColumn = new ColumnConfig("activity", I18N.CONSTANTS.logFrameActivity(), 100);
-        activityColumn.setSortable(false);
-        activityColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+						} else {// Add current user into the favorite user list
+								// of the project
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return new RatioBar(model.getActivityAdvancement() != null ? model.getActivityAdvancement() : 0);
-            }
-        });
+							updateCmd = new UpdateProjectFavorite(projectId, UpdateProjectFavorite.UpdateType.ADD);
 
-        // Category
-        final ColumnConfig categoryColumn = new ColumnConfig("categoryElements", I18N.CONSTANTS.category(), 150);
-        categoryColumn.setSortable(false);
-        categoryColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+						}
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+						// RPC to change the favorite tag
+						dispatcher.execute(updateCmd,
+										new MaskingAsyncMonitor(projectTreePanel, I18N.CONSTANTS.loading()),
+										new AsyncCallback<CreateResult>() {
 
-                final Set<CategoryElementDTO> elements = model.getCategoryElements();
-                final LayoutContainer panel = new LayoutContainer();
-                panel.setLayout(new FlowLayout());
-                final FlowData data = new FlowData(new Margins(0, 5, 0, 0));
+											@Override
+											public void onFailure(Throwable caught) {
 
-                if (elements != null) {
-                    for (final CategoryElementDTO element : elements) {
-                        panel.add(CategoryIconProvider.getIcon(element), data);
-                    }
-                }
+												Log.error("[execute] Error while setting the favorite status of the project #"
+																+ model.getId(), caught);
+												MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
+																I18N.CONSTANTS.projectStarredErrorDetails(), null);
 
-                return panel;
-            }
-        });
+											}
 
-        return new ColumnModel(Arrays.asList(starredIconColumn, codeColumn, titleColumn, currentPhaseName,
-                orgUnitColumn, spentBudgetColumn, plannedBudgetColumn, spendBudgetColumn, receivedBudgetColumn,
-                startDateColumn, endDateColumn, closeDateColumn, timeColumn, activityColumn, categoryColumn));
-    }
-    
-    /*
-     * Grid filters for projects' TreeGrid  
-     */
+											@Override
+											public void onSuccess(CreateResult result) {
+
+												if (result == null || result.getEntity() == null) {
+													MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
+																	I18N.CONSTANTS.projectStarredErrorDetails(), null);
+												} else {
+													// Update local store
+													ProjectDTOLight resultProject = (ProjectDTOLight) result
+																	.getEntity();
+													model.setFavoriteUsers(resultProject.getFavoriteUsers());
+													store.update(model);
+
+													Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																	I18N.CONSTANTS.projectStarred());
+
+												}
+
+											}
+
+										});
+
+					}
+				});
+
+				icon.addStyleName("project-starred-icon");
+
+				return icon;
+			}
+		});
+
+		// Code
+		final ColumnConfig codeColumn = new ColumnConfig("name", I18N.CONSTANTS.projectName(), 110);
+		codeColumn.setRenderer(new WidgetTreeGridCellRenderer<ProjectDTOLight>() {
+			@Override
+			public Widget getWidget(ProjectDTOLight model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+
+				Integer id = model.get("id");
+				if (id <= 0) {
+					id = model.get("pid");
+				}
+
+				final Hyperlink h = new Hyperlink((String) model.get(property), true, ProjectPresenter.PAGE_ID
+								.toString() + '!' + String.valueOf(id));
+				if (!model.isLeaf()) {
+					h.addStyleName("project-grid-node");
+				} else {
+					h.addStyleName("project-grid-leaf");
+				}
+
+				final com.google.gwt.user.client.ui.Grid panel = new com.google.gwt.user.client.ui.Grid(1, 2);
+				panel.setCellPadding(0);
+				panel.setCellSpacing(0);
+
+				panel.setWidget(0,
+								0,
+								FundingIconProvider.getProjectTypeIcon(
+												model.getProjectModelType(authentication.getOrganizationId()),
+												IconSize.SMALL_MEIDUM).createImage());
+				panel.getCellFormatter().addStyleName(0, 0, "project-grid-code-icon");
+				panel.setWidget(0, 1, h);
+				panel.getCellFormatter().addStyleName(0, 1, "project-grid-code");
+
+				return panel;
+			}
+		});
+
+		// Title
+		final ColumnConfig titleColumn = new ColumnConfig("fullName", I18N.CONSTANTS.projectFullName(), 230);
+		titleColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				String title = (String) model.get(property);
+				if (model.getParent() != null) {
+					title = "&nbsp;&nbsp;&nbsp;&nbsp;" + title;
+				}
+				return createProjectGridText(model, title);
+			}
+		});
+
+		// Current phase
+		final ColumnConfig currentPhaseName = new ColumnConfig("currentPhaseName", I18N.CONSTANTS.projectActivePhase(),
+						150);
+		currentPhaseName.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				return createProjectGridText(model, (String) model.get(property));
+			}
+		});
+
+		// Org Unit
+		final ColumnConfig orgUnitColumn = new ColumnConfig("orgUnitName", I18N.CONSTANTS.orgunit(), 150);
+		orgUnitColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				return createProjectGridText(model, (String) model.get(property));
+			}
+		});
+
+		// Ratio budget
+		final ColumnConfig spentBudgetColumn = new ColumnConfig("spentBudget", I18N.CONSTANTS.projectSpendBudget(), 100);
+		spentBudgetColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				return new RatioBar(NumberUtils.ratio(model.getSpendBudget(), model.getPlannedBudget()));
+			}
+		});
+
+		// Planned budget
+		final ColumnConfig plannedBudgetColumn = new ColumnConfig("plannedBudget",
+						I18N.CONSTANTS.projectPlannedBudget(), 75);
+		plannedBudgetColumn.setHidden(true);
+
+		// Spend budget
+		final ColumnConfig spendBudgetColumn = new ColumnConfig("spendBudget", I18N.CONSTANTS.projectSpendBudget(), 75);
+		spendBudgetColumn.setHidden(true);
+
+		// Received budget
+		final ColumnConfig receivedBudgetColumn = new ColumnConfig("receivedBudget",
+						I18N.CONSTANTS.projectReceivedBudget(), 75);
+		receivedBudgetColumn.setHidden(true);
+
+		// Time
+		final ColumnConfig timeColumn = new ColumnConfig("time", I18N.CONSTANTS.projectTime(), 100);
+		timeColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				if (!model.isClosed())
+					return new RatioBar(model.getElapsedTime());
+				else
+					return new Label(I18N.CONSTANTS.projectClosedLabel());
+			}
+		});
+
+		// Start date
+		final ColumnConfig startDateColumn = new ColumnConfig("startDate", I18N.CONSTANTS.projectStartDate(), 75);
+		startDateColumn.setHidden(true);
+		startDateColumn.setDateTimeFormat(format);
+		startDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
+
+		// End date
+		final ColumnConfig endDateColumn = new ColumnConfig("endDate", I18N.CONSTANTS.projectEndDate(), 75);
+		endDateColumn.setDateTimeFormat(format);
+		endDateColumn.setHidden(true);
+		endDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
+
+		// Close date
+		final ColumnConfig closeDateColumn = new ColumnConfig("closeDate", I18N.CONSTANTS.projectClosedDate(), 75);
+		closeDateColumn.setDateTimeFormat(format);
+		closeDateColumn.setHidden(true);
+		closeDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
+
+		// Activity
+		final ColumnConfig activityColumn = new ColumnConfig("activity", I18N.CONSTANTS.logFrameActivity(), 100);
+		activityColumn.setSortable(false);
+		activityColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				return new RatioBar(model.getActivityAdvancement() != null ? model.getActivityAdvancement() : 0);
+			}
+		});
+
+		// Category
+		final ColumnConfig categoryColumn = new ColumnConfig("categoryElements", I18N.CONSTANTS.category(), 150);
+		categoryColumn.setSortable(false);
+		categoryColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+
+				final Set<CategoryElementDTO> elements = model.getCategoryElements();
+				final LayoutContainer panel = new LayoutContainer();
+				panel.setLayout(new FlowLayout());
+				final FlowData data = new FlowData(new Margins(0, 5, 0, 0));
+
+				if (elements != null) {
+					for (final CategoryElementDTO element : elements) {
+						panel.add(CategoryIconProvider.getIcon(element), data);
+					}
+				}
+
+				return panel;
+			}
+		});
+
+		return new ColumnModel(Arrays.asList(starredIconColumn, codeColumn, titleColumn, currentPhaseName,
+						orgUnitColumn, spentBudgetColumn, plannedBudgetColumn, spendBudgetColumn, receivedBudgetColumn,
+						startDateColumn, endDateColumn, closeDateColumn, timeColumn, activityColumn, categoryColumn));
+	}
+
+	/*
+	 * Grid filters for projects' TreeGrid
+	 */
 	private GridFilters createGridFilters() {
 
 		gridFilters.setLocal(true);
 
-		/*		 
-		 * Data index of each filter should be identical with column id 
-		 * in ColumnConfig of TreeGrid
+		/*
+		 * Data index of each filter should be identical with column id in
+		 * ColumnConfig of TreeGrid
 		 */
-		
-		//Common filters
+
+		// Common filters
 		gridFilters.addFilter(new StringFilter("name"));
 		gridFilters.addFilter(new StringFilter("fullName"));
 		gridFilters.addFilter(new StringFilter("currentPhaseName"));
@@ -795,7 +950,7 @@
 		gridFilters.addFilter(new DateFilter("closeDate"));
 
 		// Custom filter for category elements' list
-		ListFilter categoryListFilter = new ListFilter("categoryElements",new ListStore<ModelData>()) {
+		ListFilter categoryListFilter = new ListFilter("categoryElements", new ListStore<ModelData>()) {
 			@SuppressWarnings("unchecked")
 			@Override
 			public boolean validateModel(ModelData model) {
@@ -806,7 +961,7 @@
 				if (elementsPerProject != null) {
 					String label = null;
 					for (final CategoryElementDTO element : elementsPerProject) {
-						label = element.getLabel() + " ("+ element.getParentCategoryDTO().getLabel()+ ")";
+						label = element.getLabel() + " (" + element.getParentCategoryDTO().getLabel() + ")";
 						if (filterLabels.contains(label)) {
 							return true;
 						}
@@ -820,49 +975,78 @@
 		};
 		categoryListFilter.setDisplayProperty("categoryFilter");
 		gridFilters.addFilter(categoryListFilter);
-		
+
+		ClosedFilter closed = new ClosedFilter("time");
+		gridFilters.addFilter(closed);
+
+		// gridFilters.addFilter(new DateFilter("time"));
+
+		// closed.addListener(Events.Activate, new Listener<BaseEvent>() {
+		//
+		// @Override
+		// public void handleEvent(BaseEvent be) {
+		// if (getProjectsStore().getFilters().contains(closedFilter)) {
+		// getProjectsStore().removeFilter(closedFilter);
+		// applyProjectFilters();
+		//
+		// }
+		//
+		// }
+		// });
+
+		// closed.addListener(Events.Deactivate, new Listener<BaseEvent>() {
+		//
+		// @Override
+		// public void handleEvent(BaseEvent be) {
+		// if (!getProjectsStore().getFilters().contains(closedFilter)) {
+		// getProjectsStore().addFilter(closedFilter);
+		// applyProjectFilters();
+		//
+		// }
+		//
+		// }
+		// });
+
 		return gridFilters;
 	}
-	
 
 	/*
-	 * Fetches categories in active user's organization and
-	 * fills {@link ListFilter} store of a category column  
+	 * Fetches categories in active user's organization and fills {@link
+	 * ListFilter} store of a category column
 	 */
 	private void reloadCategoryListFilterStore() {
-		dispatcher.execute(new GetCategories(), null,
-				new AsyncCallback<CategoriesListResult>() {
+		dispatcher.execute(new GetCategories(), null, new AsyncCallback<CategoriesListResult>() {
 
-					@Override
-					public void onFailure(Throwable e) {
-						Log.error("[GetCategories command] Error while getting categories.",e);
-					}
+			@Override
+			public void onFailure(Throwable e) {
+				Log.error("[GetCategories command] Error while getting categories.", e);
+			}
 
-					@SuppressWarnings("unchecked")
-					@Override
-					public void onSuccess(CategoriesListResult result) {
-						ListFilter categoryListFilter = (ListFilter) gridFilters.getFilter("categoryElements");
-						ListStore<ModelData> filterStore = categoryListFilter.getStore();						
- 						List<CategoryTypeDTO> categories = result.getList();
-						
-						for (CategoryTypeDTO category : categories) {
-							List<CategoryElementDTO> categoryElements = category.getCategoryElementsDTO();
-							for (CategoryElementDTO element : categoryElements) {
-								String filterLabel = element.getLabel() + " ("+ category.getLabel() + ")";
-								boolean exist=false;
- 								 for(ModelData model : filterStore.getModels()){
-										if(model.get("categoryFilter").equals(filterLabel)){
-											exist=true;
-											break;
-										}
-								  }
- 								 if(!exist){
- 									 filterStore.add(getFilterModelData(filterLabel));
- 								 }
+			@SuppressWarnings("unchecked")
+			@Override
+			public void onSuccess(CategoriesListResult result) {
+				ListFilter categoryListFilter = (ListFilter) gridFilters.getFilter("categoryElements");
+				ListStore<ModelData> filterStore = categoryListFilter.getStore();
+				List<CategoryTypeDTO> categories = result.getList();
+
+				for (CategoryTypeDTO category : categories) {
+					List<CategoryElementDTO> categoryElements = category.getCategoryElementsDTO();
+					for (CategoryElementDTO element : categoryElements) {
+						String filterLabel = element.getLabel() + " (" + category.getLabel() + ")";
+						boolean exist = false;
+						for (ModelData model : filterStore.getModels()) {
+							if (model.get("categoryFilter").equals(filterLabel)) {
+								exist = true;
+								break;
 							}
-						} 
+						}
+						if (!exist) {
+							filterStore.add(getFilterModelData(filterLabel));
+						}
 					}
-				});
+				}
+			}
+		});
 	}
 
 	private ModelData getFilterModelData(String filterLabel) {
@@ -871,323 +1055,541 @@
 		return model;
 	}
 
-    private Object createProjectGridText(ProjectDTOLight model, String content) {
-        final Text label = new Text(content);
-        if (!model.isLeaf()) {
-            label.addStyleName("project-grid-node");
-        } else {
-            label.addStyleName("project-grid-leaf");
-        }
-        return label;
-    }
+	private Object createProjectGridText(ProjectDTOLight model, String content) {
+		final Text label = new Text(content);
+		if (!model.isLeaf()) {
+			label.addStyleName("project-grid-node");
+		} else {
+			label.addStyleName("project-grid-leaf");
+		}
+		return label;
+	}
 
-    private void addListeners() {
+	private void addListeners() {
 
-        // Updates the projects grid heading when the store is filtered.
-        projectTreeGrid.getTreeStore().addListener(Store.Filter, new Listener<StoreEvent<ProjectDTOLight>>() {
+		// Updates the projects grid heading when the store is filtered.
+		projectTreeGrid.getTreeStore().addListener(Store.Filter, new Listener<StoreEvent<ProjectDTOLight>>() {
 
-            @Override
-            public void handleEvent(StoreEvent<ProjectDTOLight> be) {
-                projectTreePanel.setHeading(I18N.CONSTANTS.projects() + " ("
-                        + projectTreeGrid.getTreeStore().getChildCount() + ')');
-            }
-        });
+			@Override
+			public void handleEvent(StoreEvent<ProjectDTOLight> be) {
+				projectTreePanel.setHeading(I18N.CONSTANTS.projects() + " ("
+								+ projectTreeGrid.getTreeStore().getChildCount() + ')');
+			}
+		});
 
-        // Adds actions on filter by model type.
-        for (final ProjectModelType type : ProjectModelType.values()) {
-            getRadioFilter(type).addListener(Events.Change, new Listener<FieldEvent>() {
+		// Adds actions on filter by model type.
+		for (final ProjectModelType type : ProjectModelType.values()) {
+			getRadioFilter(type).addListener(Events.Change, new Listener<FieldEvent>() {
 
-                @Override
-                public void handleEvent(FieldEvent be) {
-                    if (Boolean.TRUE.equals(be.getValue())) {
-                        currentModelType = type;
-                        applyProjectFilters();
-                    }
-                }
-            });
-        }
-    }
+				@Override
+				public void handleEvent(FieldEvent be) {
+					if (Boolean.TRUE.equals(be.getValue())) {
+						currentModelType = type;
+						applyProjectFilters();
+					}
+				}
+			});
+		}
 
-    private void addFilters() {
+	}
 
-        // The filter by model type.
-        final StoreFilter<ProjectDTOLight> typeFilter = new StoreFilter<ProjectDTOLight>() {
+	private void addFilters() {
 
-            @Override
-            public boolean select(Store<ProjectDTOLight> store, ProjectDTOLight parent, ProjectDTOLight item,
-                    String property) {
+		// The filter by model type.
+		final StoreFilter<ProjectDTOLight> typeFilter = new StoreFilter<ProjectDTOLight>() {
 
-                boolean selected = false;
+			@Override
+			public boolean select(Store<ProjectDTOLight> store, ProjectDTOLight parent, ProjectDTOLight item,
+							String property) {
 
-                // Root item.
-                if (item.getParent() == null) {
-                    // A root item is filtered if its type doesn't match the
-                    // current type.
-                    selected = item.getVisibility(authentication.getOrganizationId()) == currentModelType;
-                }
-                // Child item
-                else {
-                    // A child item is filtered if its parent is filtered.
-                    selected = ((ProjectDTOLight) item.getParent()).getVisibility(authentication.getOrganizationId()) == currentModelType;
-                }
+				boolean selected = false;
 
-                return selected;
-            }
-        };
+				// Root item.
+				if (item.getParent() == null) {
+					// A root item is filtered if its type doesn't match the
+					// current type.
+					selected = item.getVisibility(authentication.getOrganizationId()) == currentModelType;
+				}
+				// Child item
+				else {
+					// A child item is filtered if its parent is filtered.
+					selected = ((ProjectDTOLight) item.getParent()).getVisibility(authentication.getOrganizationId()) == currentModelType;
+				}
 
-        getProjectsStore().addFilter(typeFilter);
+				return selected;
+			}
+		};
 
-        // Filters aren't used for the moment.
-        filterButton.setVisible(false);
-    }
+		getProjectsStore().addFilter(typeFilter);
 
-    private void applyProjectFilters() {
-        getProjectsStore().applyFilters(null);
-    }
+		// Filters aren't used for the moment.
+		filterButton.setVisible(false);
+	}
 
-    private Radio getRadioFilter(ProjectModelType type) {
+	private void applyProjectFilters() {
+		getProjectsStore().applyFilters(null);
+	}
 
-        if (type != null) {
-            switch (type) {
-            case NGO:
-                return ngoRadio;
-            case FUNDING:
-                return fundingRadio;
-            case LOCAL_PARTNER:
-                return partnerRadio;
-            }
-        }
+	private Radio getRadioFilter(ProjectModelType type) {
 
-        return null;
-    }
+		if (type != null) {
+			switch (type) {
+			case NGO:
+				return ngoRadio;
+			case FUNDING:
+				return fundingRadio;
+			case LOCAL_PARTNER:
+				return partnerRadio;
+			}
+		}
 
-    /**
-     * Display the given date as the last refreshed date.
-     * 
-     * @param date
-     *            The last refreshed date.
-     */
-    @SuppressWarnings("deprecation")
-    private void updateRefreshingDate(Date date) {
-        if (date != null) {
-            refreshDateLabel.setText("(" + (date.getHours() < 10 ? "0" + date.getHours() : date.getHours()) + "h"
-                    + (date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()) + ")");
-        }
-    }
+		return null;
+	}
 
-    /**
-     * Refreshes the projects grid with the current parameters.
-     * 
-     * @param cmd
-     *            The {@link GetProjects} command to execute.
-     */
-    private void refreshProjectGrid(GetProjects cmd) {
+	/**
+	 * Display the given date as the last refreshed date.
+	 * 
+	 * @param date
+	 *            The last refreshed date.
+	 */
+	@SuppressWarnings("deprecation")
+	private void updateRefreshingDate(Date date) {
+		if (date != null) {
+			refreshDateLabel.setText("(" + (date.getHours() < 10 ? "0" + date.getHours() : date.getHours()) + "h"
+							+ (date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()) + ")");
+		}
+	}
 
-        // Checks that the user can view projects.
-        if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
-            return;
-        }
+	/**
+	 * Refreshes the projects grid with the current parameters.
+	 * 
+	 * @param cmd
+	 *            The {@link GetProjects} command to execute.
+	 */
+	private void refreshProjectGrid(GetProjects cmd) {
 
-        if (cmd == null) {
-            return;
-        }
+		// Checks that the user can view projects.
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+			return;
+		}
 
-        //Reload filter labels for category filter list store
-        reloadCategoryListFilterStore();
-        
-        if (loadingMode == LoadingMode.ONE_TIME) {
+		if (cmd == null) {
+			return;
+		}
 
-            dispatcher.execute(cmd, new MaskingAsyncMonitor(projectTreePanel, I18N.CONSTANTS.loading()),
-                    new AsyncCallback<ProjectListResult>() {
+		// Reload filter labels for category filter list store
+		reloadCategoryListFilterStore();
 
-                        @Override
-                        public void onFailure(Throwable e) {
-                            Log.error("[GetProjects command] Error while getting projects.", e);
-                            // nothing
-                        }
+		if (loadingMode == LoadingMode.ONE_TIME) {
 
-                        @Override
-                        public void onSuccess(ProjectListResult result) {
+			dispatcher.execute(cmd, new MaskingAsyncMonitor(projectTreePanel, I18N.CONSTANTS.loading()),
+							new AsyncCallback<ProjectListResult>() {
 
-                            getProjectsStore().removeAll();
-                            getProjectsStore().clearFilters();
+								@Override
+								public void onFailure(Throwable e) {
+									Log.error("[GetProjects command] Error while getting projects.", e);
+									// nothing
+								}
 
-                            if (result != null) {
-                                final List<ProjectDTOLight> resultList = result.getListProjectsLightDTO();
-                                int i = -1;
-                                for (final ProjectDTOLight p : resultList) {
-                                    try {
-                                        // Project id.
-                                        p.setProjectId(p.getId());
-                                        // Tree id.
-                                        p.setId(i--);
+								@Override
+								public void onSuccess(ProjectListResult result) {
 
-                                        for (final ProjectDTOLight c : p.getChildrenProjects()) {
-                                            // Project id.
-                                            if (c != null) {
+									getProjectsStore().removeAll();
+									getProjectsStore().clearFilters();
 
-                                                c.setProjectId(c.getId());
-                                                // Tree id.
-                                                c.setId(i--);
+									if (result != null) {
+										final List<ProjectDTOLight> resultList = result.getListProjectsLightDTO();
+										int i = -1;
+										for (final ProjectDTOLight p : resultList) {
+											try {
+												// Project id.
+												p.setProjectId(p.getId());
+												// Tree id.
+												p.setId(i--);
 
-                                            }
-                                        }
-                                    } catch (Exception e) {
-                                        e.printStackTrace();
-                                    }
-                                }
-                                getProjectsStore().add(resultList, true);
-                            }
+												for (final ProjectDTOLight c : p.getChildrenProjects()) {
+													// Project id.
+													if (c != null) {
 
-                            applyProjectFilters();
-                            updateRefreshingDate(new Date());
-                        }
-                    });
-        } else if (loadingMode == LoadingMode.CHUNK) {
+														c.setProjectId(c.getId());
+														// Tree id.
+														c.setId(i--);
 
-            // Builds a new chunks worker.
+													}
+												}
+											} catch (Exception e) {
+												e.printStackTrace();
+											}
+										}
+										getProjectsStore().add(resultList, true);
+									}
 
-            int chunSize = 2;
-            try {
-                chunSize = Integer.parseInt(Window.Location.getParameter("chunk"));
-                if (chunSize <= 0) {
-                    chunSize = 2;
-                }
-            } catch (Throwable e) {
-                // swallow exception.
-            }
+									applyProjectFilters();
+									updateRefreshingDate(new Date());
+								}
+							});
+		} else if (loadingMode == LoadingMode.CHUNK) {
 
-            final GetProjectsWorker worker = new GetProjectsWorker(dispatcher, cmd, projectTreePanel, chunSize);
-            worker.addWorkerListener(new GetProjectsWorker.WorkerListener() {
+			// Builds a new chunks worker.
 
-                private int index = -1;
+			int chunSize = 2;
+			try {
+				chunSize = Integer.parseInt(Window.Location.getParameter("chunk"));
+				if (chunSize <= 0) {
+					chunSize = 2;
+				}
+			} catch (Throwable e) {
+				// swallow exception.
+			}
 
-                @Override
-                public void serverError(Throwable error) {
-                    Log.error("[GetProjectsWorker] Error while getting projects by chunks.", error);
-                    applyProjectFilters();
-                    updateRefreshingDate(new Date());
-                    MessageBox.alert(I18N.CONSTANTS.error(), I18N.CONSTANTS.refreshProjectListError(), null);
-                }
+			final GetProjectsWorker worker = new GetProjectsWorker(dispatcher, cmd, projectTreePanel, chunSize);
+			worker.addWorkerListener(new GetProjectsWorker.WorkerListener() {
 
-                @Override
-                public void chunkRetrieved(List<ProjectDTOLight> projects) {
+				private int index = -1;
 
-                    if (projects != null) {
-                        for (final ProjectDTOLight p : projects) {
-                            try {
-                                // Project id.
-                                p.setProjectId(p.getId());
-                                // Tree id.
-                                p.setId(index--);
+				@Override
+				public void serverError(Throwable error) {
+					Log.error("[GetProjectsWorker] Error while getting projects by chunks.", error);
+					applyProjectFilters();
+					updateRefreshingDate(new Date());
+					MessageBox.alert(I18N.CONSTANTS.error(), I18N.CONSTANTS.refreshProjectListError(), null);
+				}
 
-                                for (final ProjectDTOLight c : p.getChildrenProjects()) {
-                                    // Project id.
-                                    if (c != null) {
+				@Override
+				public void chunkRetrieved(List<ProjectDTOLight> projects) {
 
-                                        c.setProjectId(c.getId());
-                                        // Tree id.
-                                        c.setId(index--);
+					if (projects != null) {
+						for (final ProjectDTOLight p : projects) {
+							try {
+								// Project id.
+								p.setProjectId(p.getId());
+								// Tree id.
+								p.setId(index--);
 
-                                    }
-                                }
-                            } catch (Exception e) {
-                                e.printStackTrace();
-                            }
-                        }
-                        getProjectsStore().add(projects, true);
-                    }
-                }
+								for (final ProjectDTOLight c : p.getChildrenProjects()) {
+									// Project id.
+									if (c != null) {
 
-                @Override
-                public void ended() {
-                    applyProjectFilters();
-                    updateRefreshingDate(new Date());
-                }
-            });
+										c.setProjectId(c.getId());
+										// Tree id.
+										c.setId(index--);
 
-            // Runs the worker.
-            getProjectsStore().removeAll();
-            getProjectsStore().clearFilters();
-            worker.run();
-        }
-    }
+									}
+								}
+							} catch (Exception e) {
+								e.printStackTrace();
+							}
+						}
+						getProjectsStore().add(projects, true);
+					}
+				}
 
-    public ContentPanel getProjectsPanel() {
-        return projectTreePanel;
-    }
+				@Override
+				public void ended() {
+					applyProjectFilters();
+					updateRefreshingDate(new Date());
+				}
+			});
 
-    public TreeGrid<ProjectDTOLight> getProjectsTreeGrid() {
-        return projectTreeGrid;
-    }
+			// Runs the worker.
+			getProjectsStore().removeAll();
+			getProjectsStore().clearFilters();
 
-    public ProjectStore getProjectsStore() {
-        return (ProjectStore) projectTreeGrid.getTreeStore();
-    }
+			worker.run();
+		}
+	}
 
-    public RefreshMode getRefreshMode() {
-        return refreshMode;
-    }
+	public ContentPanel getProjectsPanel() {
+		return projectTreePanel;
+	}
 
-    /**
-     * Asks for a refresh of the projects list. If the refreshing mode is set to
-     * {@link RefreshMode#AUTOMATIC}, the list will be refreshed immediately.
-     * Otherwise, the list will be refreshed depending on the selected
-     * refreshing mode.
-     * 
-     * @param viewOwnOrManage
-     *            If the projects that the user own or manage must be included
-     *            in the list (no matter of their organizational units).
-     * @param orgUnitsIds
-     *            The list of ids of the organizational units for which the
-     *            projects will be retrieved. The projects of each the
-     *            sub-organizational units are retrieved automatically.
-     */
-    public void refresh(boolean viewOwnOrManage, Integer... orgUnitsIds) {
+	public TreeGrid<ProjectDTOLight> getProjectsTreeGrid() {
+		return projectTreeGrid;
+	}
 
-        final List<Integer> orgUnitsIdsAsList = Arrays.asList(orgUnitsIds);
+	public ProjectStore getProjectsStore() {
+		return (ProjectStore) projectTreeGrid.getTreeStore();
+	}
 
-        this.orgUnitsIds.clear();
-        this.orgUnitsIds.addAll(orgUnitsIdsAsList);
+	public RefreshMode getRefreshMode() {
+		return refreshMode;
+	}
 
-        // Builds the next refresh command.
-        command = new GetProjects();
-        command.setOrgUnitsIds(orgUnitsIdsAsList);
-        command.setViewOwnOrManage(viewOwnOrManage);
+	/**
+	 * Asks for a refresh of the projects list. If the refreshing mode is set to
+	 * {@link RefreshMode#AUTOMATIC}, the list will be refreshed immediately.
+	 * Otherwise, the list will be refreshed depending on the selected
+	 * refreshing mode.
+	 * 
+	 * @param viewOwnOrManage
+	 *            If the projects that the user own or manage must be included
+	 *            in the list (no matter of their organizational units).
+	 * @param orgUnitsIds
+	 *            The list of ids of the organizational units for which the
+	 *            projects will be retrieved. The projects of each the
+	 *            sub-organizational units are retrieved automatically.
+	 */
+	public void refresh(boolean viewOwnOrManage, Integer... orgUnitsIds) {
 
-        // If the mode is automatic, the list is refreshed immediately.
-        if (refreshMode == RefreshMode.AUTOMATIC || (refreshMode == RefreshMode.BOTH && !isLoaded)) {
-            refreshProjectGrid(command);
-            isLoaded = true;
-        }
-    }
-    
-    /**
-     * 
-     * Check if the project is a favorite project of the current user.
-     * 
-     * @param userId
-     * 
-     * @param project
-     * 
-     * @return 
-     * 
-     * @author  HUZHE(zhe.hu32@gmail.com)	  
-     */
-    public boolean isFavoriteProject(int userId,ProjectDTOLight project)
-    {
-       if(project.getFavoriteUsers()==null)
-    	   return false;
-    	
-    	for(UserDTO u : project.getFavoriteUsers())
-    	{
-    		if(u.getId()==userId)   		
-    			return true;
-    		
-    	}
-    	
-    	return false;
-    }
-    
-    
+		final List<Integer> orgUnitsIdsAsList = Arrays.asList(orgUnitsIds);
+
+		this.orgUnitsIds.clear();
+		this.orgUnitsIds.addAll(orgUnitsIdsAsList);
+
+		// Builds the next refresh command.
+		command = new GetProjects();
+		command.setOrgUnitsIds(orgUnitsIdsAsList);
+		command.setViewOwnOrManage(viewOwnOrManage);
+
+		// If the mode is automatic, the list is refreshed immediately.
+		if (refreshMode == RefreshMode.AUTOMATIC || (refreshMode == RefreshMode.BOTH && !isLoaded)) {
+			refreshProjectGrid(command);
+			isLoaded = true;
+		}
+	}
+
+	/**
+	 * 
+	 * Check if the project is a favorite project of the current user.
+	 * 
+	 * @param userId
+	 * 
+	 * @param project
+	 * 
+	 * @return
+	 * 
+	 * @author HUZHE(zhe.hu32@gmail.com)
+	 */
+	public boolean isFavoriteProject(int userId, ProjectDTOLight project) {
+		if (project.getFavoriteUsers() == null)
+			return false;
+
+		for (UserDTO u : project.getFavoriteUsers()) {
+			if (u.getId() == userId)
+				return true;
+
+		}
+
+		return false;
+	}
+
+	private class ClosedFilter extends Filter {
+
+		private Radio noneFilter, allFilter, sixMonthsFilter, twelveMonthsFilter, customFilter;
+		private DateMenu dateMenu;
+		private MenuItem hidden;
+
+		final private static String none = "none";
+		final private static String all = "all";
+		final private static String twelveMonths = "twelve Months";
+		final private static String sixMonths = "six Months";
+		final private static String custom = "custom";
+
+		private RadioGroup radioGroup;
+
+		private Listener<MenuEvent> menuListener = new Listener<MenuEvent>() {
+			public void handleEvent(MenuEvent be) {
+				// if (be.getType() == Events.CheckChange) {
+				// onCheckChange(be);
+				// } else
+				if (be.getType() == Events.Select) {
+					onMenuSelect(be);
+				}
+			}
+		};
+
+		private Listener<FieldEvent> radioListener = new Listener<FieldEvent>() {
+
+			@Override
+			public void handleEvent(FieldEvent be) {
+
+				final RadioGroup radioGroupTemp;
+				final Radio clickedRadioBtn;
+
+				if (be.getSource() instanceof RadioGroup) {
+
+					radioGroupTemp = (RadioGroup) be.getSource();
+
+					clickedRadioBtn = radioGroupTemp.getValue();
+
+					if (clickedRadioBtn.getValueAttribute().equals(custom)) {
+
+						hidden.expandMenu();
+
+					} else {
+						menu.hide(true);
+						dateMenu.hide();
+						fireUpdate();
+					}
+
+					return;
+				}
+
+				if (be.getSource() instanceof Radio) {
+
+					clickedRadioBtn = (Radio) be.getSource();
+
+					if (be.getType() == Events.Focus && clickedRadioBtn.getValueAttribute().equals(custom)) {
+
+						hidden.expandMenu();
+					}
+				}
+
+			}
+		};
+
+		public ClosedFilter(String dataIndex) {
+			super(dataIndex);
+
+			menu = new Menu();
+
+			noneFilter = new Radio();
+			noneFilter.setBoxLabel(I18N.CONSTANTS.noneFilter());
+			noneFilter.setValueAttribute(none);
+			noneFilter.setValue(true);
+
+			allFilter = new Radio();
+			allFilter.setBoxLabel(I18N.CONSTANTS.allFilter());
+			allFilter.setValueAttribute(all);
+
+			sixMonthsFilter = new Radio();
+			sixMonthsFilter.setBoxLabel(I18N.CONSTANTS.sixMonthsFilter());
+			sixMonthsFilter.setValueAttribute(sixMonths);
+
+			twelveMonthsFilter = new Radio();
+			twelveMonthsFilter.setBoxLabel(I18N.CONSTANTS.twelveMonthsFilter());
+			twelveMonthsFilter.setValueAttribute(twelveMonths);
+
+			customFilter = new Radio();
+			customFilter.setBoxLabel(I18N.CONSTANTS.customFilter());
+			customFilter.setValueAttribute(custom);
+			customFilter.addListener(Events.Focus, radioListener);
+
+			radioGroup = new RadioGroup();
+			radioGroup.setOrientation(Orientation.VERTICAL);
+
+			radioGroup.add(noneFilter);
+			radioGroup.add(sixMonthsFilter);
+			radioGroup.add(twelveMonthsFilter);
+
+			radioGroup.add(customFilter);
+
+			radioGroup.add(allFilter);
+
+			// menu.add(noneFilter);
+			//
+			// menu.add(sixMonthsFilter);
+			//
+			// menu.add(twelveMonthsFilter);
+			//
+			// menu.add(customFilter);
+			//
+			// menu.add(allFilter);
+			menu.add(radioGroup);
+			hidden = new MenuItem() {
+				@Override
+				public void expandMenu() {
+					if (isEnabled() && subMenu != null) {
+						subMenu.setFocusOnShow(true);
+						subMenu.show(customFilter.getElement(), "tl-tr?");
+					}
+				}
+			};
+			dateMenu = new DateMenu();
+
+			dateMenu.setDate(new Date());
+			dateMenu.addListener(Events.Select, menuListener);
+			hidden.setSubMenu(dateMenu);
+
+			menu.add(hidden);
+			hidden.hide();
+			radioGroup.addListener(Events.Change, radioListener);
+
+		}
+
+		protected void onMenuSelect(MenuEvent be) {
+			DateMenu d = null;
+
+			if (be.getMenu() == dateMenu) {
+				d = (DateMenu) be.getMenu();
+				d.hide(true);
+
+				fireUpdate();
+			}
+
+		}
+
+		@Override
+		public List<FilterConfig> getSerialArgs() {
+			// TODO Auto-generated method stub
+			return null;
+		}
+
+		@Override
+		public Object getValue() {
+			// TODO Auto-generated method stub
+
+			return null;
+		}
+
+		@Override
+		public void setValue(Object value) {
+			// TODO Auto-generated method stub
+
+		}
+
+		@Override
+		public boolean isActivatable() {
+
+			return true;
+		}
+
+		@Override
+		public boolean validateModel(ModelData model) {
+
+			final Radio clickedRadioBtn = radioGroup.getValue();
+
+			Date d = model.get("closeDate");
+			if (d == null) {
+				return true;
+			} else {
+
+				if (clickedRadioBtn.getValueAttribute().equals(all))
+					return true;
+				if (clickedRadioBtn.getValueAttribute().equals(none))
+					return false;
+				if (clickedRadioBtn.getValueAttribute().equals(sixMonths)) {
+					Date dateTemp = new Date();
+					CalendarUtil.addMonthsToDate(dateTemp, -6);
+					if (d.before(dateTemp))
+						return false;
+					else
+						return true;
+
+				}
+				if (clickedRadioBtn.getValueAttribute().equals(twelveMonths)) {
+					Date dateTemp = new Date();
+					CalendarUtil.addMonthsToDate(dateTemp, -12);
+					if (d.before(dateTemp))
+						return false;
+					else
+						return true;
+
+				}
+
+				if (clickedRadioBtn.getValueAttribute().equals(custom)) {
+
+					if (d.before(dateMenu.getDate()))
+						return false;
+					else
+						return true;
+				}
+
+				return false;
+
+			}
+
+		}
+
+	}
 }
Index: src/main/java/org/sigmah/public/sigmah.css
===================================================================
--- src/main/java/org/sigmah/public/sigmah.css	(Revision 1501)
+++ src/main/java/org/sigmah/public/sigmah.css	(Arbeitskopie)
@@ -36,8 +36,8 @@
 
 #alert {
 	clear: both;
-    overflow: hidden;
-    padding: 10px 15px 0;
+	overflow: hidden;
+	padding: 10px 15px 0;
 }
 
 .message {
@@ -45,7 +45,7 @@
 	border: 1px solid #EBAE7F;
 	padding: 4px 0 3px 30px;
 	color: #D85D01;
-	font: 11px arial,tahoma,helvetica,sans-serif;
+	font: 11px arial, tahoma, helvetica, sans-serif;
 }
 
 #username {
@@ -361,7 +361,7 @@
 
 .module-background {
 	background-color: #FFFFFF !important;
-	overflow : visible !important;
+	overflow: visible !important;
 }
 
 .panel-background {
@@ -373,23 +373,23 @@
 }
 
 .width-of-parent {
-	width : inherit !important;
+	width: inherit !important;
 }
 
 .height-of-parent {
-	height : inherit !important;	
+	height: inherit !important;
 }
 
 .form-radio label {
-    padding-left: 6px;
+	padding-left: 6px;
 }
 
 .form-text {
-	font: 12px tahoma,arial,helvetica,sans-serif;
+	font: 12px tahoma, arial, helvetica, sans-serif;
 }
 
-.form-radio > input {
-	margin-left : 7px;
+.form-radio>input {
+	margin-left: 7px;
 }
 
 .hyperlink a,.hyperlink a:active,.hyperlink a:hover,.hyperlink a:focus,.hyperlink a:link,.hyperlink a:visited
@@ -443,22 +443,20 @@
 
 .project-linkedProject-editButton {
 	width: 13px;
-    Height: 13px;
+	Height: 13px;
 }
 
 .project-linkedProject-editButton-down-hovering {
-    border: border-width : 1px;
+	border: border-width:  1px;
 	border-style: solid;
-	border-bottom-color:#FFFCEC;
+	border-bottom-color: #FFFCEC;
 	border-right-color: #FFFCEC;
 	border-top-color: #FFF8D7;
-	border-left-color:#FFF8D7;
-	
+	border-left-color: #FFF8D7;
 }
 
 .project-linkedProject-editButton-up-hovering {
-	
-	border: border-width : 1px;
+	border: border-width:  1px;
 	border-style: solid;
 	border-bottom-color: #FFF8D7;
 	border-right-color: #FFF8D7;
@@ -466,9 +464,6 @@
 	border-left-color: #FFFCEC;
 }
 
-
-
-
 .toolbar-title {
 	font-weight: bold !important;
 	margin-left: 4px;
@@ -856,16 +851,17 @@
 	background-image: url(./image/context_menu_icon_orange.png);
 }
 
-.log-frame-indicators-table{
-table-layout: fixed;
-margin-bottom: 8px;
+.log-frame-indicators-table {
+	table-layout: fixed;
+	margin-bottom: 8px;
 }
-.log-frame-indicators-table-cell{
-white-space: normal;
-width: 50%;
-overflow:hidden;
-border-bottom: solid 1px #EDEDED;
-padding: 5px 0 2px 2px;
+
+.log-frame-indicators-table-cell {
+	white-space: normal;
+	width: 50%;
+	overflow: hidden;
+	border-bottom: solid 1px #EDEDED;
+	padding: 5px 0 2px 2px;
 }
 /* --------------------------------------------- Reports */
 .project-report {
@@ -879,14 +875,14 @@
 	font-size: 10pt;
 	color: white;
 	width: 100%;
-	margin: 0 ;
+	margin: 0;
 	background-color: rgb(74, 63, 43);
 	padding-left: 8px;
 	padding-right: 24px;
 	line-height: 32px;
 }
 
-.project-report-personalDraft {	
+.project-report-personalDraft {
 	font-weight: bold;
 }
 
@@ -1060,20 +1056,19 @@
 	height: 8px;
 }
 
-
 /*----------------------------------------------- Password reset*/
-.update-form-message-title{
-font-family: tahoma, arial, helvetica, sans-serif;
+.update-form-message-title {
+	font-family: tahoma, arial, helvetica, sans-serif;
 	font-size: 13px;
 	font-weight: bold;
 	color: white;
-	padding:0 0 8px 8px;
+	padding: 0 0 8px 8px;
 }
 
-.update-form-message-content{
-font-family: tahoma, arial, helvetica, sans-serif;
+.update-form-message-content {
+	font-family: tahoma, arial, helvetica, sans-serif;
 	font-size: 12px;
- 	color: white;
+	color: white;
 	text-align: justify;
 }
 
@@ -1110,7 +1105,8 @@
 .blockStat {
 	border: 1px solid #B9A48F;
 	padding: 1px;
-	background: transparent url(image/ratio-bar-bg.png) repeat-x scroll 0 1px;
+	background: transparent url(image/ratio-bar-bg.png) repeat-x scroll 0
+		1px;
 }
 
 .blockStat div {
@@ -1182,7 +1178,6 @@
 	font-size: 10px;
 }
 
-
 .credits-manager-header {
 	font-weight: bold;
 }
@@ -1223,41 +1218,46 @@
 .credits-developer {
 	margin-left: 15px;
 	padding-top: 3px;
-	font-weight:bold;
+	font-weight: bold;
 }
 
 .credits-developer-email {
 	margin-left: 50px;
 }
 
-.backup-label{
-	background-color: F5F5DC	
+.backup-label {
+	background-color: F5F5DC
 }
-.orgunitModel-grid-nameLink{
+
+.orgunitModel-grid-nameLink {
 	text-decoration: underline;
 	cursor: pointer;
 	color: #4B3E2D;
 }
 
-.delete-anchor{
+.delete-anchor {
 	background: url("image/remove.png") no-repeat;
 	padding-left: 20px;
 }
 
-.export-spreadsheet-anchor{
+.export-spreadsheet-anchor {
 	background: url("image/excel.png") no-repeat;
 	padding-left: 20px;
 }
 
-
 .global-export-fields-table {
 	border: 1px solid lightgrey;
 	margin-bottom: 13px;
-    margin-top: 5px;	
+	margin-top: 5px;
 }
 
+.filtered-column-header {
+	background: url("image/filter.png") no-repeat left;
+	padding-left: 20px;
+}
+
 /*------------------------------------------------------ Linked Project Form*/
 .x-combo-list-item-disabled {
-	font-weight:bold !important;
-	text-align:center;
+	font-weight: bold !important;
+	text-align: center;
 }
\ No newline at end of file
