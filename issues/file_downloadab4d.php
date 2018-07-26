Index: src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java
===================================================================
--- src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java	(Revision 1519)
+++ src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java	(Arbeitskopie)
@@ -96,6 +96,7 @@
 import com.extjs.gxt.ui.client.widget.treegrid.TreeGrid;
 import com.extjs.gxt.ui.client.widget.treegrid.WidgetTreeGridCellRenderer;
 import com.google.gwt.core.client.GWT;
+import com.google.gwt.dom.client.ImageElement;
 import com.google.gwt.event.dom.client.ClickEvent;
 import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.i18n.client.DateTimeFormat;
@@ -116,161 +117,162 @@
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
+	/** Current projects grid parameters. */
+	private ProjectModelType currentModelType;
+	private final ArrayList<Integer> orgUnitsIds;
 
-    /** The loading mode (one time by default) */
-    private final LoadingMode loadingMode;
+	/** The refreshing mode (automatic by default) */
+	private final RefreshMode refreshMode;
+	private final com.extjs.gxt.ui.client.widget.Label refreshDateLabel;
 
-    /**
-     * true if {@link #refresh(boolean, Integer...)} has already been called at
-     * least one time
-     */
-    private static boolean isLoaded = false;
+	/** The loading mode (one time by default) */
+	private final LoadingMode loadingMode;
 
-    /** The GetProjects command which will be executed for the next refresh. */
-    private GetProjects command;
+	/**
+	 * true if {@link #refresh(boolean, Integer...)} has already been called at
+	 * least one time
+	 */
+	private static boolean isLoaded = false;
 
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
-     */
-    public ProjectsListPanel(Dispatcher dispatcher, Authentication authentication, EventBus eventBus, RefreshMode refreshMode) {
-        this(dispatcher, authentication, eventBus, refreshMode, LoadingMode.ONE_TIME);
-    }
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
+	 * @param loadingMode
+	 *            The loading mode.
+	 */
+	public ProjectsListPanel(Dispatcher dispatcher, final Authentication authentication, EventBus eventBus,
+					RefreshMode refreshMode, LoadingMode loadingMode) {
 
-        // Default filters parameters.
-        orgUnitsIds = new ArrayList<Integer>();
-        currentModelType = ProjectModelType.NGO;
+		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		this.refreshMode = refreshMode;
+		this.loadingMode = loadingMode;
 
-        // Store.
-        final ProjectStore projectStore = new ProjectStore();
-        projectStore.setMonitorChanges(true);
+		// Default filters parameters.
+		orgUnitsIds = new ArrayList<Integer>();
+		currentModelType = ProjectModelType.NGO;
 
-        // Default sort order of the projects grid.
-        projectStore.setSortInfo(new SortInfo("name", SortDir.ASC));
+		// Store.
+		final ProjectStore projectStore = new ProjectStore();
+		projectStore.setMonitorChanges(true);
 
-        // Grid.
-        projectTreeGrid = new TreeGrid<ProjectDTOLight>(projectStore, getProjectGridColumnModel());
-        projectTreeGrid.setBorders(true);
-        projectTreeGrid.getStyle().setNodeOpenIcon(null);
-        projectTreeGrid.getStyle().setNodeCloseIcon(null);
-        projectTreeGrid.getStyle().setLeafIcon(null);
-        projectTreeGrid.setAutoExpandColumn("fullName");
-        projectTreeGrid.setTrackMouseOver(false);
-        projectTreeGrid.setAutoExpand(true);               
+		// Default sort order of the projects grid.
+		projectStore.setSortInfo(new SortInfo("name", SortDir.ASC));
 
-     // Apply grid filters
+		// Grid.
+		projectTreeGrid = new TreeGrid<ProjectDTOLight>(projectStore, getProjectGridColumnModel());
+		projectTreeGrid.setBorders(true);
+		projectTreeGrid.getStyle().setNodeOpenIcon(null);
+		projectTreeGrid.getStyle().setNodeCloseIcon(null);
+		projectTreeGrid.getStyle().setLeafIcon(null);
+		projectTreeGrid.setAutoExpandColumn("fullName");
+		projectTreeGrid.setTrackMouseOver(false);
+		projectTreeGrid.setAutoExpand(true);
+
+		// Apply grid filters
 		gridFilters = new GridFilters() {
 
 			private CheckMenuItem checkItem;
@@ -373,6 +375,26 @@
 								Filter f = getFilter(config.getDataIndex());
 								if (f != null) {
 									h.el().setStyleName("filtered-column-header", f.isActive());
+									// header.getContainer();
+
+									if (f.isActive()) {
+
+										if (h.el().dom.getFirstChildElement().getTitle().equals("funnel icon filter"))
+											;
+										else {
+
+											ImageElement img = ImageElement.as(IconImageBundle.ICONS.filter()
+															.createElement());
+
+											img.setClassName("funnel-sort-icon");
+											img.setTitle("funnel icon filter");
+											h.el().dom.insertFirst(img);
+										}
+
+									} else {
+										if (h.el().dom.getFirstChildElement().getTitle().equals("funnel icon filter"))
+											h.el().dom.removeChild(h.el().dom.getFirstChildElement());
+									}
 								}
 							}
 						}
@@ -381,216 +403,213 @@
 			}
 		};
 
-        projectTreeGrid.addPlugin(createGridFilters());  
+		projectTreeGrid.addPlugin(createGridFilters());
 
-        // Store.
-        projectStore.setStoreSorter(new StoreSorter<ProjectDTOLight>() {
-            @Override
-            public int compare(Store<ProjectDTOLight> store, ProjectDTOLight m1, ProjectDTOLight m2, String property) {
+		// Store.
+		projectStore.setStoreSorter(new StoreSorter<ProjectDTOLight>() {
+			@Override
+			public int compare(Store<ProjectDTOLight> store, ProjectDTOLight m1, ProjectDTOLight m2, String property) {
 
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
 
-        // Top panel
-        final RadioGroup group = new RadioGroup("projectTypeFilter");
-        group.setFireChangeEventOnSetValue(true);
+		// Top panel
+		final RadioGroup group = new RadioGroup("projectTypeFilter");
+		group.setFireChangeEventOnSetValue(true);
 
-        ngoRadio = new Radio();
-        ngoRadio.setFireChangeEventOnSetValue(true);
-        ngoRadio.setValue(true);
-        ngoRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.NGO));
-        ngoRadio.addStyleName("toolbar-radio");
+		ngoRadio = new Radio();
+		ngoRadio.setFireChangeEventOnSetValue(true);
+		ngoRadio.setValue(true);
+		ngoRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.NGO));
+		ngoRadio.addStyleName("toolbar-radio");
 
-        final WidgetComponent ngoIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.NGO, IconSize.SMALL).createImage());
-        ngoIcon.addStyleName("toolbar-icon");
+		final WidgetComponent ngoIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.NGO, IconSize.SMALL).createImage());
+		ngoIcon.addStyleName("toolbar-icon");
 
-        final Label ngoLabel = new Label(ProjectModelType.getName(ProjectModelType.NGO));
-        ngoLabel.addStyleName("flexibility-element-label");
-        ngoLabel.addStyleName("project-starred-icon");
-        ngoLabel.addClickHandler(new ClickHandler() {
+		final Label ngoLabel = new Label(ProjectModelType.getName(ProjectModelType.NGO));
+		ngoLabel.addStyleName("flexibility-element-label");
+		ngoLabel.addStyleName("project-starred-icon");
+		ngoLabel.addClickHandler(new ClickHandler() {
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(true);
-                fundingRadio.setValue(false);
-                partnerRadio.setValue(false);
-            }
-        });
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(true);
+				fundingRadio.setValue(false);
+				partnerRadio.setValue(false);
+			}
+		});
 
-        fundingRadio = new Radio();
-        fundingRadio.setFireChangeEventOnSetValue(true);
-        fundingRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.FUNDING));
-        fundingRadio.addStyleName("toolbar-radio");
+		fundingRadio = new Radio();
+		fundingRadio.setFireChangeEventOnSetValue(true);
+		fundingRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.FUNDING));
+		fundingRadio.addStyleName("toolbar-radio");
 
-        final WidgetComponent fundingIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.FUNDING, IconSize.SMALL).createImage());
-        fundingIcon.addStyleName("toolbar-icon");
+		final WidgetComponent fundingIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.FUNDING, IconSize.SMALL).createImage());
+		fundingIcon.addStyleName("toolbar-icon");
 
-        final Label fundingLabel = new Label(ProjectModelType.getName(ProjectModelType.FUNDING));
-        fundingLabel.addStyleName("flexibility-element-label");
-        fundingLabel.addStyleName("project-starred-icon");
-        fundingLabel.addClickHandler(new ClickHandler() {
+		final Label fundingLabel = new Label(ProjectModelType.getName(ProjectModelType.FUNDING));
+		fundingLabel.addStyleName("flexibility-element-label");
+		fundingLabel.addStyleName("project-starred-icon");
+		fundingLabel.addClickHandler(new ClickHandler() {
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(false);
-                fundingRadio.setValue(true);
-                partnerRadio.setValue(false);
-            }
-        });
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(false);
+				fundingRadio.setValue(true);
+				partnerRadio.setValue(false);
+			}
+		});
 
-        partnerRadio = new Radio();
-        partnerRadio.setFireChangeEventOnSetValue(true);
-        partnerRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
-        partnerRadio.addStyleName("toolbar-radio");
+		partnerRadio = new Radio();
+		partnerRadio.setFireChangeEventOnSetValue(true);
+		partnerRadio.setFieldLabel(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
+		partnerRadio.addStyleName("toolbar-radio");
 
-        final WidgetComponent partnerIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
-                ProjectModelType.LOCAL_PARTNER, IconSize.SMALL).createImage());
-        partnerIcon.addStyleName("toolbar-icon");
+		final WidgetComponent partnerIcon = new WidgetComponent(FundingIconProvider.getProjectTypeIcon(
+						ProjectModelType.LOCAL_PARTNER, IconSize.SMALL).createImage());
+		partnerIcon.addStyleName("toolbar-icon");
 
-        final Label partnerLabel = new Label(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
-        partnerLabel.addStyleName("flexibility-element-label");
-        partnerLabel.addStyleName("project-starred-icon");
-        partnerLabel.addClickHandler(new ClickHandler() {
+		final Label partnerLabel = new Label(ProjectModelType.getName(ProjectModelType.LOCAL_PARTNER));
+		partnerLabel.addStyleName("flexibility-element-label");
+		partnerLabel.addStyleName("project-starred-icon");
+		partnerLabel.addClickHandler(new ClickHandler() {
 
-            @Override
-            public void onClick(ClickEvent event) {
-                ngoRadio.setValue(false);
-                fundingRadio.setValue(false);
-                partnerRadio.setValue(true);
-            }
-        });
+			@Override
+			public void onClick(ClickEvent event) {
+				ngoRadio.setValue(false);
+				fundingRadio.setValue(false);
+				partnerRadio.setValue(true);
+			}
+		});
 
-        final HTML headLabel = new HTML("&nbsp;&nbsp;" + I18N.CONSTANTS.projectTypeFilter() + ": ");
-        headLabel.addStyleName("flexibility-element-label");
+		final HTML headLabel = new HTML("&nbsp;&nbsp;" + I18N.CONSTANTS.projectTypeFilter() + ": ");
+		headLabel.addStyleName("flexibility-element-label");
 
-        group.add(ngoRadio);
-        group.add(fundingRadio);
-        group.add(partnerRadio);
-        group.setAutoWidth(true);
+		group.add(ngoRadio);
+		group.add(fundingRadio);
+		group.add(partnerRadio);
+		group.setAutoWidth(true);
 
-        // Expand all button.
-        final Button expandButton = new Button("", IconImageBundle.ICONS.expand(),
-                new SelectionListener<ButtonEvent>() {
+		// Expand all button.
+		final Button expandButton = new Button("", IconImageBundle.ICONS.expand(),
+						new SelectionListener<ButtonEvent>() {
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        projectTreeGrid.expandAll();
-                    }
-                });
+							@Override
+							public void componentSelected(ButtonEvent ce) {
+								projectTreeGrid.expandAll();
+							}
+						});
 
-        // Collapse all button.
-        final Button collapseButton = new Button("", IconImageBundle.ICONS.collapse(),
-                new SelectionListener<ButtonEvent>() {
+		// Collapse all button.
+		final Button collapseButton = new Button("", IconImageBundle.ICONS.collapse(),
+						new SelectionListener<ButtonEvent>() {
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        projectTreeGrid.collapseAll();
-                    }
-                });
+							@Override
+							public void componentSelected(ButtonEvent ce) {
+								projectTreeGrid.collapseAll();
+							}
+						});
 
-        // Filter button.
-        filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
+		// Filter button.
+		filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
 
-        // Refresh button.
-        final Button refreshButton = new Button(I18N.CONSTANTS.refreshProjectList(), IconImageBundle.ICONS.refresh(),
-                new SelectionListener<ButtonEvent>() {
+		// Refresh button.
+		final Button refreshButton = new Button(I18N.CONSTANTS.refreshProjectList(), IconImageBundle.ICONS.refresh(),
+						new SelectionListener<ButtonEvent>() {
 
-                    @Override
-                    public void componentSelected(ButtonEvent ce) {
-                        // Explicit refresh.
-                        refreshProjectGrid(command);
-                    }
-                });
-        refreshButton.setToolTip(I18N.CONSTANTS.refreshProjectListDetails());
-        refreshButton.addStyleName("project-refresh-button");
+							@Override
+							public void componentSelected(ButtonEvent ce) {
+								// Explicit refresh.
+								refreshProjectGrid(command);
+							}
+						});
+		refreshButton.setToolTip(I18N.CONSTANTS.refreshProjectListDetails());
+		refreshButton.addStyleName("project-refresh-button");
 
-        // Refresh date.
-        refreshDateLabel = new com.extjs.gxt.ui.client.widget.Label();
-        
-        eventBus.addListener(AppEvents.DeleteProject, new Listener<ProjectEvent>() {
+		// Refresh date.
+		refreshDateLabel = new com.extjs.gxt.ui.client.widget.Label();
 
-            @Override
-            public void handleEvent(ProjectEvent be) {
-                refreshProjectGrid(command);
-            }
-        });
-        
-        
+		eventBus.addListener(AppEvents.DeleteProject, new Listener<ProjectEvent>() {
 
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
+			@Override
+			public void handleEvent(ProjectEvent be) {
+				refreshProjectGrid(command);
+			}
+		});
 
-        // Panel
-        projectTreePanel = new ContentPanel(new FitLayout());
-        projectTreePanel.setHeading(I18N.CONSTANTS.projects());
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
 
-        projectTreePanel.setTopComponent(toolbar);
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.GLOBAL_EXPORT)) {
+			final GlobalExportForm globalExportForm = new GlobalExportForm(authentication.getOrganizationId(),
+							dispatcher);
+			toolbar.add(new FillToolItem());
+			toolbar.add(globalExportForm.getButton());
+			toolbar.add(globalExportForm.getExportForm());
+		}
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
-            projectTreePanel.add(projectTreeGrid);
-        } else {
-            final HTML insufficient = new HTML(I18N.CONSTANTS.permViewProjectsInsufficient());
-            insufficient.addStyleName("important-label");
-            projectTreePanel.add(insufficient);
-        }
+		// Panel
+		projectTreePanel = new ContentPanel(new FitLayout());
+		projectTreePanel.setHeading(I18N.CONSTANTS.projects());
 
-        addListeners();
-        addFilters();
+		projectTreePanel.setTopComponent(toolbar);
 
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+			projectTreePanel.add(projectTreeGrid);
+		} else {
+			final HTML insufficient = new HTML(I18N.CONSTANTS.permViewProjectsInsufficient());
+			insufficient.addStyleName("important-label");
+			projectTreePanel.add(insufficient);
+		}
+
+		addListeners();
+		addFilters();
+
 		getProjectsPanel().addListener(Events.AfterLayout, new Listener<BaseEvent>() {
 
 			@Override
@@ -600,345 +619,346 @@
 			}
 		});
 
-    }
+	}
 
-    /**
-     * Builds and returns the columns model for the projects tree grid.
-     * 
-     * @return The project tree grid columns model.
-     */
-    private ColumnModel getProjectGridColumnModel() {
+	/**
+	 * Builds and returns the columns model for the projects tree grid.
+	 * 
+	 * @return The project tree grid columns model.
+	 */
+	private ColumnModel getProjectGridColumnModel() {
 
-        final DateTimeFormat format = DateUtils.DATE_SHORT;
+		final DateTimeFormat format = DateUtils.DATE_SHORT;
 
-        // Starred icon
-        final ColumnConfig starredIconColumn = new ColumnConfig("starred", "", 30);
-        starredIconColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
-            private final DashboardImageBundle imageBundle = GWT.create(DashboardImageBundle.class);
+		// Starred icon
+		final ColumnConfig starredIconColumn = new ColumnConfig("starred", "", 30);
+		starredIconColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+			private final DashboardImageBundle imageBundle = GWT.create(DashboardImageBundle.class);
 
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
+			@Override
+			public Object render(final ProjectDTOLight model, String property, ColumnData config, int rowIndex,
+							int colIndex, final ListStore<ProjectDTOLight> store, final Grid<ProjectDTOLight> grid) {
 
-                //Star icon click-handler
-                icon.addClickHandler(new ClickHandler() {
+				// A star icon
+				final Image icon;
 
-                    @Override
-                    public void onClick(ClickEvent event) {
+				if (isFavoriteProject(authentication.getUserId(), model)) {
+					// star
+					icon = imageBundle.star().createImage();
+					icon.setTitle("Favorite");
+				} else {
+					// empty start
+					icon = imageBundle.emptyStar().createImage();
+					icon.setTitle("Non-favorite");
+				}
 
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
+				// Star icon click-handler
+				icon.addClickHandler(new ClickHandler() {
 
-							@Override
-							public void onFailure(Throwable caught) {
-								
-								  Log.error(
-	                                        "[execute] Error while setting the favorite status of the project #"
-	                                                + model.getId(), caught);
-	                                MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
-	                                        I18N.CONSTANTS.projectStarredErrorDetails(), null);
-	                            
-								
-							}
+					@Override
+					public void onClick(ClickEvent event) {
 
-							@Override
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
-							}
-                			
-                		});
-                    	                    	
-                 
-                    }
-                });
+						UpdateProjectFavorite updateCmd;
 
-                icon.addStyleName("project-starred-icon");
+						// Get the project's id
+						int projectId = model.getId();
+						if (projectId < 0) {
+							projectId = (Integer) model.get("pid");
+						}
 
-                return icon;
-            }
-        });
+						if (isFavoriteProject(authentication.getUserId(), model)) {// Remove
+																					// the
+																					// favorite
+																					// user
+																					// from
+																					// project
+																					// favorite
+																					// user
+																					// list
 
-        // Code
-        final ColumnConfig codeColumn = new ColumnConfig("name", I18N.CONSTANTS.projectName(), 110);
-        codeColumn.setRenderer(new WidgetTreeGridCellRenderer<ProjectDTOLight>() {
-            @Override
-            public Widget getWidget(ProjectDTOLight model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+							updateCmd = new UpdateProjectFavorite(projectId, UpdateProjectFavorite.UpdateType.REMOVE);
 
-                Integer id = model.get("id");
-                if (id <= 0) {
-                    id = model.get("pid");
-                }
+						} else {// Add current user into the favorite user list
+								// of the project
 
-                final Hyperlink h = new Hyperlink((String) model.get(property), true, ProjectPresenter.PAGE_ID
-                        .toString() + '!' + String.valueOf(id));
-                if (!model.isLeaf()) {
-                    h.addStyleName("project-grid-node");
-                } else {
-                    h.addStyleName("project-grid-leaf");
-                }
+							updateCmd = new UpdateProjectFavorite(projectId, UpdateProjectFavorite.UpdateType.ADD);
 
-                final com.google.gwt.user.client.ui.Grid panel = new com.google.gwt.user.client.ui.Grid(1, 2);
-                panel.setCellPadding(0);
-                panel.setCellSpacing(0);
+						}
 
-                panel.setWidget(
-                        0,
-                        0,
-                        FundingIconProvider.getProjectTypeIcon(
-                                model.getProjectModelType(authentication.getOrganizationId()), IconSize.SMALL_MEIDUM)
-                                .createImage());
-                panel.getCellFormatter().addStyleName(0, 0, "project-grid-code-icon");
-                panel.setWidget(0, 1, h);
-                panel.getCellFormatter().addStyleName(0, 1, "project-grid-code");
+						// RPC to change the favorite tag
+						dispatcher.execute(updateCmd,
+										new MaskingAsyncMonitor(projectTreePanel, I18N.CONSTANTS.loading()),
+										new AsyncCallback<CreateResult>() {
 
-                return panel;
-            }
-        });
+											@Override
+											public void onFailure(Throwable caught) {
 
-        // Title
-        final ColumnConfig titleColumn = new ColumnConfig("fullName", I18N.CONSTANTS.projectFullName(), 230);
-        titleColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+												Log.error("[execute] Error while setting the favorite status of the project #"
+																+ model.getId(), caught);
+												MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
+																I18N.CONSTANTS.projectStarredErrorDetails(), null);
 
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
+											}
 
-        // Current phase
-        final ColumnConfig currentPhaseName = new ColumnConfig("currentPhaseName", I18N.CONSTANTS.projectActivePhase(), 150);
-        currentPhaseName.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return createProjectGridText(model, (String) model.get(property));
-            }
-        });
+											@Override
+											public void onSuccess(CreateResult result) {
 
-        // Org Unit
-        final ColumnConfig orgUnitColumn = new ColumnConfig("orgUnitName", I18N.CONSTANTS.orgunit(), 150);
-        orgUnitColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+												if (result == null || result.getEntity() == null) {
+													MessageBox.alert(I18N.CONSTANTS.projectStarredError(),
+																	I18N.CONSTANTS.projectStarredErrorDetails(), null);
+												} else {
+													// Update local store
+													ProjectDTOLight resultProject = (ProjectDTOLight) result
+																	.getEntity();
+													model.setFavoriteUsers(resultProject.getFavoriteUsers());
+													store.update(model);
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return createProjectGridText(model, (String) model.get(property));
-            }
-        });
+													Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																	I18N.CONSTANTS.projectStarred());
 
-        // Ratio budget
-        final ColumnConfig spentBudgetColumn = new ColumnConfig("spentBudget", I18N.CONSTANTS.projectSpendBudget(), 100);
-        spentBudgetColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+												}
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-            	String ratioDividendLabel = null;
-            	String ratioDivisorLabel = null;
-            	if(model.getRatioDividendType() != null){
-            		ratioDividendLabel = BudgetSubFieldType.getName(model.getRatioDividendType());
-            	} else {
-            		ratioDividendLabel = model.getRatioDividendLabel();
-            	}
-            	if(model.getRatioDivisorType() != null){
-            		ratioDivisorLabel = BudgetSubFieldType.getName(model.getRatioDivisorType());
-            	} else {
-            		ratioDivisorLabel =model.getRatioDivisorLabel();
-            	}
-            	String titleRatioLabel = "(" + ratioDividendLabel + "/" +  ratioDivisorLabel+ ")";
-            	if(model.getRatioDividendValue() != null || model.getRatioDivisorValue() != null){
-            		return new RatioBar(NumberUtils.ratio(model.getRatioDividendValue(), model.getRatioDivisorValue()),titleRatioLabel);
-            	}else {
-            		return new RatioBar(0.0);
-            	}
-                
-            }
-        });
+											}
 
-        // Planned budget
-        final ColumnConfig plannedBudgetColumn = new ColumnConfig("plannedBudget",
-                I18N.CONSTANTS.projectPlannedBudget(), 75);
-        plannedBudgetColumn.setHidden(true);
+										});
 
-        // Spend budget
-        final ColumnConfig spendBudgetColumn = new ColumnConfig("spendBudget", I18N.CONSTANTS.projectSpendBudget(), 75);
-        spendBudgetColumn.setHidden(true);
+					}
+				});
 
-        // Received budget
-        final ColumnConfig receivedBudgetColumn = new ColumnConfig("receivedBudget",
-                I18N.CONSTANTS.projectReceivedBudget(), 75);
-        receivedBudgetColumn.setHidden(true);
+				icon.addStyleName("project-starred-icon");
 
-        // Time
-        final ColumnConfig timeColumn = new ColumnConfig("time", I18N.CONSTANTS.projectTime(), 100);
-        timeColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+				return icon;
+			}
+		});
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
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
+				String ratioDividendLabel = null;
+				String ratioDivisorLabel = null;
+				if (model.getRatioDividendType() != null) {
+					ratioDividendLabel = BudgetSubFieldType.getName(model.getRatioDividendType());
+				} else {
+					ratioDividendLabel = model.getRatioDividendLabel();
+				}
+				if (model.getRatioDivisorType() != null) {
+					ratioDivisorLabel = BudgetSubFieldType.getName(model.getRatioDivisorType());
+				} else {
+					ratioDivisorLabel = model.getRatioDivisorLabel();
+				}
+				String titleRatioLabel = "(" + ratioDividendLabel + "/" + ratioDivisorLabel + ")";
+				if (model.getRatioDividendValue() != null || model.getRatioDivisorValue() != null) {
+					return new RatioBar(NumberUtils.ratio(model.getRatioDividendValue(), model.getRatioDivisorValue()),
+									titleRatioLabel);
+				} else {
+					return new RatioBar(0.0);
+				}
+
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
 				if (!model.isClosed())
-                return new RatioBar(model.getElapsedTime());
+					return new RatioBar(model.getElapsedTime());
 				else
 					return new Label(I18N.CONSTANTS.projectClosedLabel());
-            }
-        });
+			}
+		});
 
-        // Start date
-        final ColumnConfig startDateColumn = new ColumnConfig("startDate", I18N.CONSTANTS.projectStartDate(), 75);
-        startDateColumn.setHidden(true);
-        startDateColumn.setDateTimeFormat(format);
-        startDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// Start date
+		final ColumnConfig startDateColumn = new ColumnConfig("startDate", I18N.CONSTANTS.projectStartDate(), 75);
+		startDateColumn.setHidden(true);
+		startDateColumn.setDateTimeFormat(format);
+		startDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
 
-        // End date
-        final ColumnConfig endDateColumn = new ColumnConfig("endDate", I18N.CONSTANTS.projectEndDate(), 75);
-        endDateColumn.setDateTimeFormat(format);
-        endDateColumn.setHidden(true);
-        endDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// End date
+		final ColumnConfig endDateColumn = new ColumnConfig("endDate", I18N.CONSTANTS.projectEndDate(), 75);
+		endDateColumn.setDateTimeFormat(format);
+		endDateColumn.setHidden(true);
+		endDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
 
-        // Close date
-        final ColumnConfig closeDateColumn = new ColumnConfig("closeDate", I18N.CONSTANTS.projectClosedDate(), 75);
-        closeDateColumn.setDateTimeFormat(format);
-        closeDateColumn.setHidden(true);
-        closeDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// Close date
+		final ColumnConfig closeDateColumn = new ColumnConfig("closeDate", I18N.CONSTANTS.projectClosedDate(), 75);
+		closeDateColumn.setDateTimeFormat(format);
+		closeDateColumn.setHidden(true);
+		closeDateColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                final Date d = (Date) model.get(property);
-                return createProjectGridText(model, d != null ? format.format(d) : "");
-            }
-        });
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				final Date d = (Date) model.get(property);
+				return createProjectGridText(model, d != null ? format.format(d) : "");
+			}
+		});
 
-        // Activity
-        final ColumnConfig activityColumn = new ColumnConfig("activity", I18N.CONSTANTS.logFrameActivity(), 100);
-        activityColumn.setSortable(false);
-        activityColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// Activity
+		final ColumnConfig activityColumn = new ColumnConfig("activity", I18N.CONSTANTS.logFrameActivity(), 100);
+		activityColumn.setSortable(false);
+		activityColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
-                return new RatioBar(model.getActivityAdvancement() != null ? model.getActivityAdvancement() : 0);
-            }
-        });
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+				return new RatioBar(model.getActivityAdvancement() != null ? model.getActivityAdvancement() : 0);
+			}
+		});
 
-        // Category
-        final ColumnConfig categoryColumn = new ColumnConfig("categoryElements", I18N.CONSTANTS.category(), 150);
-        categoryColumn.setSortable(false);
-        categoryColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
+		// Category
+		final ColumnConfig categoryColumn = new ColumnConfig("categoryElements", I18N.CONSTANTS.category(), 150);
+		categoryColumn.setSortable(false);
+		categoryColumn.setRenderer(new GridCellRenderer<ProjectDTOLight>() {
 
-            @Override
-            public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
+			@Override
+			public Object render(ProjectDTOLight model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ProjectDTOLight> store, Grid<ProjectDTOLight> grid) {
 
-                final Set<CategoryElementDTO> elements = model.getCategoryElements();
-                final LayoutContainer panel = new LayoutContainer();
-                panel.setLayout(new FlowLayout());
-                final FlowData data = new FlowData(new Margins(0, 5, 0, 0));
+				final Set<CategoryElementDTO> elements = model.getCategoryElements();
+				final LayoutContainer panel = new LayoutContainer();
+				panel.setLayout(new FlowLayout());
+				final FlowData data = new FlowData(new Margins(0, 5, 0, 0));
 
-                if (elements != null) {
-                    for (final CategoryElementDTO element : elements) {
-                        panel.add(CategoryIconProvider.getIcon(element), data);
-                    }
-                }
+				if (elements != null) {
+					for (final CategoryElementDTO element : elements) {
+						panel.add(CategoryIconProvider.getIcon(element), data);
+					}
+				}
 
-                return panel;
-            }
-        });
+				return panel;
+			}
+		});
 
-        return new ColumnModel(Arrays.asList(starredIconColumn, codeColumn, titleColumn, currentPhaseName,
-                orgUnitColumn, spentBudgetColumn, plannedBudgetColumn, spendBudgetColumn, receivedBudgetColumn,
-                startDateColumn, endDateColumn, closeDateColumn, timeColumn, activityColumn, categoryColumn));
-    }
-    
-    /*
-     * Grid filters for projects' TreeGrid  
-     */
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
Index: src/main/java/org/sigmah/public/sigmah.css
===================================================================
--- src/main/java/org/sigmah/public/sigmah.css	(Revision 1519)
+++ src/main/java/org/sigmah/public/sigmah.css	(Arbeitskopie)
@@ -447,7 +447,7 @@
 }
 
 .project-linkedProject-editButton-down-hovering {
-	border: border-width:                                1px;
+	border: border-width:                                          1px;
 	border-style: solid;
 	border-bottom-color: #FFFCEC;
 	border-right-color: #FFFCEC;
@@ -456,7 +456,7 @@
 }
 
 .project-linkedProject-editButton-up-hovering {
-	border: border-width:                                1px;
+	border: border-width:                                          1px;
 	border-style: solid;
 	border-bottom-color: #FFF8D7;
 	border-right-color: #FFF8D7;
@@ -1254,9 +1254,25 @@
 .filtered-column-header {
 	font-weight: bold;
 	font-style: italic;
-	background: url("image/filter.png") no-repeat left;
+}
+
+.funnel-sort-icon {
+	background-repeat: no-repeat;
+	display: inline;
+	height: 4px;
+	width: 13px;
+	margin-left: 3px;
+	margin-right: 3px;
+	vertical-align: middle;
+	height: 4px;
+}
+
+/*
+.x-grid3-hd {
+	background: url("image/filter.png") no-repeat !important left;
 	padding-left: 20px;
 }
+*/
 
 /*------------------------------------------------------ Linked Project Form*/
 .x-combo-list-item-disabled {
@@ -1270,9 +1286,9 @@
 }
 
 .budget-sub-fields-table {
-	padding:5px;
+	padding: 5px;
 }
 
 .budget-sub-fields-text {
-	margin-left:20px;
-}
+	margin-left: 20px;
+}
\ No newline at end of file
