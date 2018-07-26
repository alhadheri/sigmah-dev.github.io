Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1501)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -47,6 +47,10 @@
 # Global permissions
 VIEW_PROJECT = View project
 
+VIEW_LOGFRAME = View logframe
+
+EDIT_LOGFRAME = Edit logframe
+
 acronym = Acronym
 
 activities = Activities
Index: src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Revision 1501)
+++ src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Arbeitskopie)
@@ -3,6 +3,7 @@
  */
 package org.sigmah.client.page.project;
 
+import java.util.ArrayList;
 import java.util.Date;
 import java.util.EnumMap;
 import java.util.HashMap;
@@ -100,133 +101,164 @@
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
+		if (MAIN_TABS.isEmpty()) {
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabDashboard());
+			MAIN_TABS.add(I18N.CONSTANTS.projectDetails());
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_LOGFRAME))
+				MAIN_TABS.add(I18N.CONSTANTS.projectTabLogFrame());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabIndicators());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabDataEntry());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
+		}
 
-        for (int i = 0; i < MAIN_TABS.length; i++) {
-            final int index = i;
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.authentication = authentication;
+		this.cache = cache;
+		this.eventBus = eventBus;
 
-            String tabTitle = MAIN_TABS[i];
+		// For development.
+		// final DummyPresenter dummyPresenter = new DummyPresenter();
 
-            final HBoxLayoutData layoutData = new HBoxLayoutData();
-            layoutData.setMargins(new Margins(2, 10, 0, 0));
+		ProjectPresenter.presenters
+						.add(new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache));
+		ProjectPresenter.presenters.add(new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache));
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_LOGFRAME))
+			ProjectPresenter.presenters.add(new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this));
+		ProjectPresenter.presenters.add(projectIndicators);
+		ProjectPresenter.presenters.add(pivot);
+		ProjectPresenter.presenters.add(new ProjectCalendarPresenter(dispatcher, authentication, this));
+		ProjectPresenter.presenters.add(new ProjectReportsPresenter(authentication, dispatcher, eventBus, this));
 
-            final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
-            anchor.setAnchorMode(true);
+		// this.presenters =
+		// new SubPresenter[] {
+		// new ProjectDashboardPresenter(dispatcher, eventBus, authentication,
+		// this, cache), // Dashboard
+		// new ProjectDetailsPresenter(eventBus, dispatcher, authentication,
+		// this, cache), // Details,
+		// new ProjectLogFramePresenter(eventBus, dispatcher, authentication,
+		// this), // Logic
+		// projectIndicators,
+		// pivot,
+		// new ProjectCalendarPresenter(dispatcher, authentication, this), //
+		// Calendar
+		// new ProjectReportsPresenter(authentication, dispatcher, eventBus,
+		// this) // Reports
+		// /* ,dummyPresenter */// Security incidents TO DO
+		// };
 
-            anchor.addClickHandler(new ClickHandler() {
+		for (int i = 0; i < MAIN_TABS.size(); i++) {
+			final int index = i;
 
-                @Override
-                public void onClick(ClickEvent event) {
-                    eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
-                        .deriveTo(index), null));
-                }
-            });
+			String tabTitle = MAIN_TABS.get(i);
 
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
+			final HBoxLayoutData layoutData = new HBoxLayoutData();
+			layoutData.setMargins(new Margins(2, 10, 0, 0));
+
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
@@ -234,661 +266,664 @@
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
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+		final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
 
-            view.sufficient();
+		if (currentTab != anchor) {
+			if (currentTab != null)
+				currentTab.toggleAnchorMode();
 
-            if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
-                if (Log.isDebugEnabled()) {
-                    Log.debug("Loading project #" + projectId + "...");
-                }
+			anchor.toggleAnchorMode();
+			currentTab = anchor;
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		} else if (force) {
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		}
+	}
 
-                dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
+	@Override
+	public boolean navigate(final PageState place) {
+		final ProjectState projectState = (ProjectState) place;
+		final int projectId = projectState.getProjectId();
 
-                    @Override
-                    public void onFailure(Throwable throwable) {
-                        Log.error("Error, project #" + projectId + " not loaded.");
-                    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
 
-                    @Override
-                    public void onSuccess(ProjectDTO projectDTO) {
+			view.sufficient();
 
-                        if (projectDTO == null) {
-                            Log.error("Project not loaded : " + projectId);
-                            view.insufficient();
-                        } else {
+			if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
+				if (Log.isDebugEnabled()) {
+					Log.debug("Loading project #" + projectId + "...");
+				}
 
-                            if (Log.isDebugEnabled()) {
-                                Log.debug("Project loaded : " + projectDTO.getName());
-                            }
+				dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
 
-                            currentState = projectState;
+					@Override
+					public void onFailure(Throwable throwable) {
+						Log.error("Error, project #" + projectId + " not loaded.");
+					}
 
-                            boolean projectChanged = !projectDTO.equals(currentProjectDTO);
+					@Override
+					public void onSuccess(ProjectDTO projectDTO) {
 
-                            projectState.setTabTitle(projectDTO.getName());
-                            loadProjectOnView(projectDTO);
+						if (projectDTO == null) {
+							Log.error("Project not loaded : " + projectId);
+							view.insufficient();
+						} else {
 
-                            selectTab(projectState.getCurrentSection(), projectChanged);
-                        }
-                    }
-                });
-            } else {
-                boolean change = false;
+							if (Log.isDebugEnabled()) {
+								Log.debug("Project loaded : " + projectDTO.getName());
+							}
 
-                if (!currentState.equals(projectState)) {
-                    change = true;
-                    currentState = projectState;
-                }
+							currentState = projectState;
 
-                selectTab(projectState.getCurrentSection(), change);
-            }
-        } else {
-            view.insufficient();
-        }
+							boolean projectChanged = !projectDTO.equals(currentProjectDTO);
 
-        return true;
-    }
+							projectState.setTabTitle(projectDTO.getName());
+							loadProjectOnView(projectDTO);
 
-    /**
-     * Loads a {@link ProjectDTO} object on the view.
-     * 
-     * @param projectDTO
-     *            the {@link ProjectDTO} object loaded on the viewprojectIndicators
-     */
-    private void loadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
+							selectTab(projectState.getCurrentSection(), projectChanged);
+						}
+					}
+				});
+			} else {
+				boolean change = false;
 
-        refreshBanner();
-        refreshAmendment();
+				if (!currentState.equals(projectState)) {
+					change = true;
+					currentState = projectState;
+				}
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
+				selectTab(projectState.getCurrentSection(), change);
+			}
+		} else {
+			view.insufficient();
+		}
 
-    }
+		return true;
+	}
 
-    public void ReloadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
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
 
-        refreshBanner();
-        refreshAmendment();
+		refreshBanner();
+		refreshAmendment();
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
-    }
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
 
-    public ProjectDTO getCurrentProjectDTO() {
-        return currentProjectDTO;
-    }
+	}
 
-    public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
-        this.currentProjectDTO = currentProjectDTO;
-    }
+	public void ReloadProjectOnView(ProjectDTO projectDTO) {
+		currentProjectDTO = projectDTO;
+		currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
 
-    public PhaseDTO getCurrentDisplayedPhaseDTO() {
-        return currentDisplayedPhaseDTO;
-    }
+		refreshBanner();
+		refreshAmendment();
 
-    public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
-        this.currentDisplayedPhaseDTO = currentPhaseDTO;
-    }
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
+	}
 
-    /**
-     * Refreshes the project banner for the current project.
-     */
-    public void refreshBanner() {
+	public ProjectDTO getCurrentProjectDTO() {
+		return currentProjectDTO;
+	}
 
-        // Panel.
-        final ContentPanel panel = view.getPanelProjectBanner();
+	public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
+		this.currentProjectDTO = currentProjectDTO;
+	}
 
-        // Set the heading of panel
-        String projectTitle = currentProjectDTO.getFullName();
-        String titleToDisplay = "";
-        if (projectTitle != null && !projectTitle.isEmpty())
-            titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
+	public PhaseDTO getCurrentDisplayedPhaseDTO() {
+		return currentDisplayedPhaseDTO;
+	}
 
-        panel.setHeading(I18N.CONSTANTS.projectMainTabTitle()
-            + ' '
-            + currentProjectDTO.getName()
-            + " ("
-            + titleToDisplay
-            + ")");
+	public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
+		this.currentDisplayedPhaseDTO = currentPhaseDTO;
+	}
 
-        // Set the tool tip
-        ToolTipConfig panelToolTipconfig = new ToolTipConfig();
-        panelToolTipconfig.setMaxWidth(500);
-        panelToolTipconfig.setText(projectTitle);
-        panel.setToolTip(panelToolTipconfig);
+	/**
+	 * Refreshes the project banner for the current project.
+	 */
+	public void refreshBanner() {
 
-        panel.removeAll();
+		// Panel.
+		final ContentPanel panel = view.getPanelProjectBanner();
 
-        final Grid gridPanel = new Grid(1, 2);
-        gridPanel.addStyleName("banner");
-        gridPanel.setCellPadding(0);
-        gridPanel.setCellSpacing(0);
-        gridPanel.setWidth("100%");
-        gridPanel.setHeight("100%");
+		// Set the heading of panel
+		String projectTitle = currentProjectDTO.getFullName();
+		String titleToDisplay = "";
+		if (projectTitle != null && !projectTitle.isEmpty())
+			titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
 
-        // Logo.
-        final Image logo =
-                FundingIconProvider.getProjectTypeIcon(
-                    currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
-                    FundingIconProvider.IconSize.LARGE).createImage();
-        gridPanel.setWidget(0, 0, logo);
-        gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
+		panel.setHeading(I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + " ("
+						+ titleToDisplay + ")");
 
-        // Banner.
-        final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
-        final LayoutDTO layout = banner.getLayoutDTO();
+		// Set the tool tip
+		ToolTipConfig panelToolTipconfig = new ToolTipConfig();
+		panelToolTipconfig.setMaxWidth(500);
+		panelToolTipconfig.setText(projectTitle);
+		panel.setToolTip(panelToolTipconfig);
 
-        // Executes layout.
-        if (banner != null
-            && layout != null
-            && layout.getLayoutGroupsDTO() != null
-            && !layout.getLayoutGroupsDTO().isEmpty()) {
+		panel.removeAll();
 
-            // For visibility constraints, the banner accept a maximum of 2 rows
-            // and 4 columns.
-            final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
-            final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
+		final Grid gridPanel = new Grid(1, 2);
+		gridPanel.addStyleName("banner");
+		gridPanel.setCellPadding(0);
+		gridPanel.setCellSpacing(0);
+		gridPanel.setWidth("100%");
+		gridPanel.setHeight("100%");
 
-            final Grid gridLayout = new Grid(rows, cols);
-            gridLayout.addStyleName("banner-flex");
-            gridLayout.setCellPadding(0);
-            gridLayout.setCellSpacing(0);
-            gridLayout.setWidth("100%");
-            gridLayout.setHeight("100%");
+		// Logo.
+		final Image logo = FundingIconProvider.getProjectTypeIcon(
+						currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
+						FundingIconProvider.IconSize.LARGE).createImage();
+		gridPanel.setWidget(0, 0, logo);
+		gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
 
-            for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
-                gridLayout.getColumnFormatter().setWidth(i, "325px");
-            }
+		// Banner.
+		final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
+		final LayoutDTO layout = banner.getLayoutDTO();
 
-            for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
+		// Executes layout.
+		if (banner != null && layout != null && layout.getLayoutGroupsDTO() != null
+						&& !layout.getLayoutGroupsDTO().isEmpty()) {
 
-                // Checks group bounds.
-                if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
-                    continue;
-                }
+			// For visibility constraints, the banner accept a maximum of 2 rows
+			// and 4 columns.
+			final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
+			final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
 
-                final ContentPanel groupPanel = new ContentPanel();
-                groupPanel.setLayout(new FormLayout());
-                groupPanel.setTopComponent(null);
-                groupPanel.setHeaderVisible(false);
+			final Grid gridLayout = new Grid(rows, cols);
+			gridLayout.addStyleName("banner-flex");
+			gridLayout.setCellPadding(0);
+			gridLayout.setCellSpacing(0);
+			gridLayout.setWidth("100%");
+			gridLayout.setHeight("100%");
 
-                gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
+			for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
+				gridLayout.getColumnFormatter().setWidth(i, "325px");
+			}
 
-                if (groupLayout.getLayoutConstraintsDTO() != null) {
-                    for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
+			for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
 
-                        final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
+				// Checks group bounds.
+				if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
+					continue;
+				}
 
-                        // Only default elements are allowed.
-                        if (!(element instanceof DefaultFlexibleElementDTO)) {
-                            continue;
-                        }
+				final ContentPanel groupPanel = new ContentPanel();
+				groupPanel.setLayout(new FormLayout());
+				groupPanel.setTopComponent(null);
+				groupPanel.setHeaderVisible(false);
 
-                        // Builds the graphic component
-                        final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
-                        defaultElement.setService(dispatcher);
-                        defaultElement.setAuthentication(authentication);
-                        defaultElement.setCache(cache);
-                        defaultElement.setCurrentContainerDTO(currentProjectDTO);
+				gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
 
-                        final Component component = defaultElement.getElementComponentInBanner(null);
+				if (groupLayout.getLayoutConstraintsDTO() != null) {
+					for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
 
-                        if (component != null) {
+						final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
 
-                            if (component instanceof LabelField) {
-                                LabelField lableFieldComponent = (LabelField) component;
-                                // Get the text of the field
-                                String textValue = lableFieldComponent.getText();
+						// Only default elements are allowed.
+						if (!(element instanceof DefaultFlexibleElementDTO)) {
+							continue;
+						}
 
-                                // Set the tool tip
-                                ToolTipConfig config = new ToolTipConfig();
-                                config.setMaxWidth(500);
-                                config.setText(textValue);
-                                lableFieldComponent.setToolTip(config);
+						// Builds the graphic component
+						final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
+						defaultElement.setService(dispatcher);
+						defaultElement.setAuthentication(authentication);
+						defaultElement.setCache(cache);
+						defaultElement.setCurrentContainerDTO(currentProjectDTO);
 
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
+						final Component component = defaultElement.getElementComponentInBanner(null);
 
-                        }
+						if (component != null) {
 
-                        // Only one element per cell.
-                        break;
-                    }
-                }
-            }
+							if (component instanceof LabelField) {
+								LabelField lableFieldComponent = (LabelField) component;
+								// Get the text of the field
+								String textValue = lableFieldComponent.getText();
 
-            gridPanel.setWidget(0, 1, gridLayout);
-        }
-        // Default banner.
-        else {
+								// Set the tool tip
+								ToolTipConfig config = new ToolTipConfig();
+								config.setMaxWidth(500);
+								config.setText(textValue);
+								lableFieldComponent.setToolTip(config);
 
-            panel.setLayout(new FormLayout());
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
 
-            final LabelField codeField = new LabelField();
-            codeField.setReadOnly(true);
-            codeField.setFieldLabel(I18N.CONSTANTS.projectName());
-            codeField.setLabelSeparator(":");
-            codeField.setValue(currentProjectDTO.getName());
+						}
 
-            gridPanel.setWidget(0, 1, codeField);
-        }
+						// Only one element per cell.
+						break;
+					}
+				}
+			}
 
-        panel.add(gridPanel);
-        panel.layout();
-    }
+			gridPanel.setWidget(0, 1, gridLayout);
+		}
+		// Default banner.
+		else {
 
-    private void refreshAmendment() {
-        Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
+			panel.setLayout(new FormLayout());
 
-        final ContentPanel amendmentBox = view.getAmendmentBox();
-        amendmentBox.removeAll();
+			final LabelField codeField = new LabelField();
+			codeField.setReadOnly(true);
+			codeField.setFieldLabel(I18N.CONSTANTS.projectName());
+			codeField.setLabelSeparator(":");
+			codeField.setValue(currentProjectDTO.getName());
 
-        // Prepare the amendment store
-        final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
+			gridPanel.setWidget(0, 1, codeField);
+		}
 
-        for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
-            amendmentDTO.prepareName();
-            store.add(amendmentDTO);
-        }
+		panel.add(gridPanel);
+		panel.layout();
+	}
 
-        // Adding the current amendment
-        final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
-        store.add(currentAmendment);
+	private void refreshAmendment() {
+		Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
 
-        // Creating the amendment list
-        final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
-        versionList.setStore(store);
-        versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
+		final ContentPanel amendmentBox = view.getAmendmentBox();
+		amendmentBox.removeAll();
 
-        versionList.setValue(currentAmendment); // Selecting the
-                                                // currentAmendment
+		// Prepare the amendment store
+		final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
 
-        Log.debug(store.getCount() + " amendment(s).");
+		for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
+			amendmentDTO.prepareName();
+			store.add(amendmentDTO);
+		}
 
-        final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
-        displayAmendmentButton.setEnabled(false);
+		// Adding the current amendment
+		final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
+		store.add(currentAmendment);
 
-        versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
+		// Creating the amendment list
+		final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
+		versionList.setStore(store);
+		versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
 
-            @Override
-            public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
-                int currentAmendmentId = 0;
-                if (currentProjectDTO.getCurrentAmendment() != null)
-                    currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
+		versionList.setValue(currentAmendment); // Selecting the
+												// currentAmendment
 
-                Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
+		Log.debug(store.getCount() + " amendment(s).");
 
-                displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
-            }
-        });
+		final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
+		displayAmendmentButton.setEnabled(false);
 
-        displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
+		versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                NavigationCallback navigationCallback = new NavigationCallback() {
+			@Override
+			public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
+				int currentAmendmentId = 0;
+				if (currentProjectDTO.getCurrentAmendment() != null)
+					currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
 
-                    @Override
-                    public void onDecided(NavigationError navigationError) {
-                        if (navigationError == NavigationError.NONE) {
-                            AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
-                            if (amendmentDTO.getId() == 0)
-                                amendmentDTO = null;
-                            else
-                                Log.debug("Back to " + amendmentDTO.getId());
+				Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
 
-                            currentProjectDTO.setCurrentAmendment(amendmentDTO);
+				displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
+			}
+		});
 
-                            // Refreshing the whole view
-                            discardAllViews();
-                            selectTab(currentState.getCurrentSection(), true);
-                            displayAmendmentButton.setEnabled(false);
-                        }
-                    }
+		displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-                };
-                requestToNavigateAway(null, navigationCallback);
-            }
-        });
+			@Override
+			public void componentSelected(ButtonEvent ce) {
+				NavigationCallback navigationCallback = new NavigationCallback() {
 
-        final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
-        amendmentListContainer.add(versionList);
-        amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
+					@Override
+					public void onDecided(NavigationError navigationError) {
+						if (navigationError == NavigationError.NONE) {
+							AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
+							if (amendmentDTO.getId() == 0)
+								amendmentDTO = null;
+							else
+								Log.debug("Back to " + amendmentDTO.getId());
 
-        amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
+							currentProjectDTO.setCurrentAmendment(amendmentDTO);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+							// Refreshing the whole view
+							discardAllViews();
+							selectTab(currentState.getCurrentSection(), true);
+							displayAmendmentButton.setEnabled(false);
+						}
+					}
 
-            // Displaying the available actions
-            final Amendment.Action[] actions;
-            if (currentProjectDTO.getAmendmentState() != null)
-                actions = currentProjectDTO.getAmendmentState().getActions();
-            else
-                actions = new Amendment.Action[0];
-            final Anchor[] anchors = new Anchor[actions.length];
+				};
+				requestToNavigateAway(null, navigationCallback);
+			}
+		});
 
-            for (int index = 0; index < actions.length; index++) {
-                final Amendment.Action action = actions[index];
-                Log.debug("Adding the " + action + " amendment action.");
+		final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
+		amendmentListContainer.add(versionList);
+		amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
 
-                if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
-                    if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
-                        Log.debug("You can not validate !");
-                        continue;
-                    }
+		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-                }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
 
-                Log.debug("You can  validate !");
+			// Displaying the available actions
+			final Amendment.Action[] actions;
+			if (currentProjectDTO.getAmendmentState() != null)
+				actions = currentProjectDTO.getAmendmentState().getActions();
+			else
+				actions = new Amendment.Action[0];
+			final Anchor[] anchors = new Anchor[actions.length];
 
-                final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
-                actionAnchor.addStyleName("amendment-action");
+			for (int index = 0; index < actions.length; index++) {
+				final Amendment.Action action = actions[index];
+				Log.debug("Adding the " + action + " amendment action.");
 
-                actionAnchor.addClickHandler(new ClickHandler() {
+				if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
+					if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
+						Log.debug("You can not validate !");
+						continue;
+					}
 
-                    @Override
-                    public void onClick(ClickEvent event) {
-                        // Disabling every actions before sending the request
+				}
 
-                        NavigationCallback navigationCallback = new NavigationCallback() {
+				Log.debug("You can  validate !");
 
-                            @Override
-                            public void onDecided(NavigationError navigationError) {
-                                // TODO Auto-generated method stub
-                                if (navigationError == NavigationError.NONE) {
-                                    amendmentBox.mask(I18N.CONSTANTS.loading());
+				final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
+				actionAnchor.addStyleName("amendment-action");
 
-                                    for (final Anchor anchor : anchors) {
-                                        if (anchor == null)
-                                            Log.debug("anchor is null");
-                                        if (anchor != null)
-                                            anchor.setEnabled(false);
-                                    }
+				actionAnchor.addClickHandler(new ClickHandler() {
 
-                                    final AmendmentAction amendmentAction =
-                                            new AmendmentAction(currentProjectDTO.getId(), action);
-                                    dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
+					@Override
+					public void onClick(ClickEvent event) {
+						// Disabling every actions before sending the request
 
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
+						NavigationCallback navigationCallback = new NavigationCallback() {
 
-                                        @Override
-                                        public void onSuccess(ProjectDTO result) {
-                                            for (final Anchor anchor : anchors) {
-                                                if (anchor != null)
-                                                    anchor.setEnabled(true);
-                                            }
+							@Override
+							public void onDecided(NavigationError navigationError) {
+								// TODO Auto-generated method stub
+								if (navigationError == NavigationError.NONE) {
+									amendmentBox.mask(I18N.CONSTANTS.loading());
 
-                                            // Updating the current project
-                                            currentProjectDTO = result;
+									for (final Anchor anchor : anchors) {
+										if (anchor == null)
+											Log.debug("anchor is null");
+										if (anchor != null)
+											anchor.setEnabled(false);
+									}
 
-                                            // Refreshing the whole view
-                                            discardAllViews();
-                                            selectTab(currentState.getCurrentSection(), true);
-                                            refreshAmendment();
+									final AmendmentAction amendmentAction = new AmendmentAction(currentProjectDTO
+													.getId(), action);
+									dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
 
-                                            amendmentBox.unmask();
-                                        }
-                                    });
-                                }
-                            }
-                        };
-                        requestToNavigateAway(null, navigationCallback);
-                    }
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
 
-                });
+										@Override
+										public void onSuccess(ProjectDTO result) {
+											for (final Anchor anchor : anchors) {
+												if (anchor != null)
+													anchor.setEnabled(true);
+											}
 
-                amendmentBox.add(actionAnchor, new VBoxLayoutData());
-                anchors[index] = actionAnchor;
+											// Updating the current project
+											currentProjectDTO = result;
 
-            }
+											// Refreshing the whole view
+											discardAllViews();
+											selectTab(currentState.getCurrentSection(), true);
+											refreshAmendment();
 
-        }
+											amendmentBox.unmask();
+										}
+									});
+								}
+							}
+						};
+						requestToNavigateAway(null, navigationCallback);
+					}
 
-        amendmentBox.layout();
-    }
+				});
 
-    private void discardAllViews() {
-        for (final SubPresenter presenter : presenters)
-            presenter.discardView();
-    }
+				amendmentBox.add(actionAnchor, new VBoxLayoutData());
+				anchors[index] = actionAnchor;
 
-    @Override
-    public String getTabTitle() {
-        return I18N.CONSTANTS.projectMainTabTitle();
-    }
+			}
 
-    @Override
-    public PageId getPageId() {
-        return PAGE_ID;
-    }
+		}
 
-    @Override
-    public Object getWidget() {
-        return view;
-    }
+		amendmentBox.layout();
+	}
 
-    @Override
-    public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
-        NavigationError navigationError = NavigationError.NONE;
-        for (SubPresenter subPresenter : presenters) {
-            if (subPresenter.hasValueChanged()) {
-                navigationError = NavigationError.WORK_NOT_SAVED;
-            }
-        }
+	private void discardAllViews() {
+		for (final SubPresenter presenter : presenters)
+			presenter.discardView();
+	}
 
-        Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
+	@Override
+	public String getTabTitle() {
+		return I18N.CONSTANTS.projectMainTabTitle();
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
+	public PageId getPageId() {
+		return PAGE_ID;
+	}
 
-        if (navigationError == NavigationError.WORK_NOT_SAVED) {
-            MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
-        }
+	@Override
+	public Object getWidget() {
+		return view;
+	}
 
-        callback.onDecided(navigationError);
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
-    public String beforeWindowCloses() {
-        return null;
-    }
+		Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
 
-    @Override
-    public void shutdown() {
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
-    public void setActivePage(Page page) {
-        this.activePage = page;
-    }
+		if (navigationError == NavigationError.WORK_NOT_SAVED) {
+			MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
+		}
 
-    @Override
-    public Page getActivePage() {
-        return this.activePage;
-    }
+		callback.onDecided(navigationError);
+	}
 
-    public ProjectState getCurrentState() {
-        return currentState;
-    }
+	@Override
+	public String beforeWindowCloses() {
+		return null;
+	}
 
-    @Override
-    public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
-        return null;
-    }
+	@Override
+	public void shutdown() {
+	}
 
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
Index: src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(Arbeitskopie)
@@ -1,8 +1,5 @@
 package org.sigmah.client.page.project.logframe;
 
-import java.util.HashMap;
-import java.util.Map;
-
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
@@ -26,24 +23,16 @@
 import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
-import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.Listener;
-import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Label;
 import com.extjs.gxt.ui.client.widget.MessageBox;
-import com.extjs.gxt.ui.client.widget.Window;
 import com.extjs.gxt.ui.client.widget.button.Button;
-import com.extjs.gxt.ui.client.widget.form.FormPanel;
-import com.extjs.gxt.ui.client.widget.form.HiddenField;
-import com.extjs.gxt.ui.client.widget.form.Radio;
-import com.extjs.gxt.ui.client.widget.form.RadioGroup;
 import com.extjs.gxt.ui.client.widget.form.TextField;
-import com.extjs.gxt.ui.client.widget.layout.FitLayout;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 
 /**
@@ -53,314 +42,320 @@
  */
 public class ProjectLogFramePresenter implements SubPresenter {
 
-    /**
-     * The label used for the no-name groups.
-     */
-    public static final String DEFAULT_GROUP_LABEL = "-";
+	/**
+	 * The label used for the no-name groups.
+	 */
+	public static final String DEFAULT_GROUP_LABEL = "-";
 
-    /**
-     * Description of the view managed by this presenter.
-     */
-    public static abstract class View extends ContentPanel {
+	/**
+	 * Description of the view managed by this presenter.
+	 */
+	public static abstract class View extends ContentPanel {
 
-        public abstract ProjectLogFrameGrid getLogFrameGrid();
+		public abstract ProjectLogFrameGrid getLogFrameGrid();
 
-        public abstract Button getSaveButton();
+		public abstract Button getSaveButton();
 
-        public abstract Button getCopyButton();
+		public abstract Button getCopyButton();
 
-        public abstract Button getPasteButton();
+		public abstract Button getPasteButton();
 
-        public abstract ExportSpreadsheetFormButton getExcelExportFormButton();
+		public abstract ExportSpreadsheetFormButton getExcelExportFormButton();
 
-        public abstract Label getLogFrameTitleContentLabel();
+		public abstract Label getLogFrameTitleContentLabel();
 
-        public abstract TextField<String> getLogFrameMainObjectiveTextBox();
-    }
+		public abstract TextField<String> getLogFrameMainObjectiveTextBox();
+	}
 
-    private static Integer logFrameIdCopySource;
+	private static Integer logFrameIdCopySource;
 
-    /**
-     * This presenter view.
-     */
-    private View view;
+	/**
+	 * This presenter view.
+	 */
+	private View view;
 
-    /**
-     * The dispatcher.
-     */
-    private final Dispatcher dispatcher;
+	/**
+	 * The dispatcher.
+	 */
+	private final Dispatcher dispatcher;
 
-    private final EventBus eventBus;
+	private final EventBus eventBus;
 
-    /**
-     * The authentication.
-     */
-    private final Authentication authentication;
+	/**
+	 * The authentication.
+	 */
+	private final Authentication authentication;
 
-    private boolean logFrameUpdated;
+	private boolean logFrameUpdated;
 
-    /**
-     * The main project presenter.
-     */
-    private final ProjectPresenter projectPresenter;
+	/**
+	 * The main project presenter.
+	 */
+	private final ProjectPresenter projectPresenter;
 
-    public ProjectDTO getCurrentProjectDTO() {
-        return currentProjectDTO;
-    }
+	public ProjectDTO getCurrentProjectDTO() {
+		return currentProjectDTO;
+	}
 
-    public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
-        this.currentProjectDTO = currentProjectDTO;
-    }
+	public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
+		this.currentProjectDTO = currentProjectDTO;
+	}
 
-    /**
-     * The current displayed project.
-     */
-    private ProjectDTO currentProjectDTO;
+	/**
+	 * The current displayed project.
+	 */
+	private ProjectDTO currentProjectDTO;
 
-    /**
-     * The displayed log frame.
-     */
-    private LogFrameDTO logFrame;
+	/**
+	 * The displayed log frame.
+	 */
+	private LogFrameDTO logFrame;
 
-    public ProjectLogFramePresenter(EventBus eventBus, Dispatcher dispatcher, Authentication authentication, ProjectPresenter projectPresenter) {
-        this.eventBus = eventBus;
-        this.dispatcher = dispatcher;
-        this.authentication = authentication;
-        this.projectPresenter = projectPresenter;
-        this.currentProjectDTO = projectPresenter.getCurrentProjectDTO();
-        this.logFrameUpdated = false;
-    }
+	public ProjectLogFramePresenter(EventBus eventBus, Dispatcher dispatcher, Authentication authentication,
+					ProjectPresenter projectPresenter) {
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+		this.authentication = authentication;
+		this.projectPresenter = projectPresenter;
+		this.currentProjectDTO = projectPresenter.getCurrentProjectDTO();
+		this.logFrameUpdated = false;
 
-    @Override
-    public Component getView() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_LOGFRAME)) {
 
-        if (view == null) {
-            view = new ProjectLogFrameView(eventBus, dispatcher);
-            if (projectPresenter.getCurrentProjectDTO().getCurrentAmendment() == null)
-                logFrame = projectPresenter.getCurrentProjectDTO().getLogFrameDTO();
-            else
-                logFrame = projectPresenter.getCurrentProjectDTO().getCurrentAmendment().getLogFrameDTO();
+		}
+	}
 
-            currentProjectDTO = projectPresenter.getCurrentProjectDTO();
-            fillAndInit();
-            addListeners();
-        }
+	@Override
+	public Component getView() {
 
-        // If the current project has changed, clear the view
-        if (projectPresenter.getCurrentProjectDTO() != currentProjectDTO) {
-            if (projectPresenter.getCurrentProjectDTO().getCurrentAmendment() == null)
-                logFrame = projectPresenter.getCurrentProjectDTO().getLogFrameDTO();
-            else
-                logFrame = projectPresenter.getCurrentProjectDTO().getCurrentAmendment().getLogFrameDTO();
+		if (view == null) {
+			view = new ProjectLogFrameView(eventBus, dispatcher);
+			if (projectPresenter.getCurrentProjectDTO().getCurrentAmendment() == null)
+				logFrame = projectPresenter.getCurrentProjectDTO().getLogFrameDTO();
+			else
+				logFrame = projectPresenter.getCurrentProjectDTO().getCurrentAmendment().getLogFrameDTO();
 
-            currentProjectDTO = projectPresenter.getCurrentProjectDTO();
-            fillAndInit();
-        }
+			currentProjectDTO = projectPresenter.getCurrentProjectDTO();
+			fillAndInit();
+			addListeners();
+		}
 
-        return view;
-    }
+		// If the current project has changed, clear the view
+		if (projectPresenter.getCurrentProjectDTO() != currentProjectDTO) {
+			if (projectPresenter.getCurrentProjectDTO().getCurrentAmendment() == null)
+				logFrame = projectPresenter.getCurrentProjectDTO().getLogFrameDTO();
+			else
+				logFrame = projectPresenter.getCurrentProjectDTO().getCurrentAmendment().getLogFrameDTO();
 
-    @Override
-    public void discardView() {
-        this.view = null;
-    }
+			currentProjectDTO = projectPresenter.getCurrentProjectDTO();
+			fillAndInit();
+		}
 
-    @Override
-    public void viewDidAppear() {
+		return view;
+	}
 
-        // Make sure when the currentProjectDTO's title is changed, reset the log title's value
-        view.getLogFrameTitleContentLabel().setText(projectPresenter.getCurrentProjectDTO().getFullName());
+	@Override
+	public void discardView() {
+		this.view = null;
+	}
 
-    }
+	@Override
+	public void viewDidAppear() {
 
-    @Override
-    public boolean hasValueChanged() {
-        return logFrameUpdated;
-    }
+		// Make sure when the currentProjectDTO's title is changed, reset the
+		// log title's value
+		view.getLogFrameTitleContentLabel().setText(projectPresenter.getCurrentProjectDTO().getFullName());
 
-    @Override
-    public void forgetAllChangedValues() {
-        logFrameUpdated = false;
-    }
+	}
 
-    /**
-     * Initializes the presenter.
-     */
-    private void addListeners() {
+	@Override
+	public boolean hasValueChanged() {
+		return logFrameUpdated;
+	}
 
-        // Enable the save button when the log frame is edited.
-        view.getLogFrameGrid().addListener(new ProjectLogFrameGrid.LogFrameGridListener() {
+	@Override
+	public void forgetAllChangedValues() {
+		logFrameUpdated = false;
+	}
 
-            @Override
-            public void logFrameEdited() {
-                logFrameUpdated = true;
-                view.getSaveButton().setEnabled(true);
-            }
-        });
+	/**
+	 * Initializes the presenter.
+	 */
+	private void addListeners() {
 
-        // Log frame main objective box listener.
-        view.getLogFrameMainObjectiveTextBox().addListener(Events.OnKeyUp, new Listener<BaseEvent>() {
+		// Enable the save button when the log frame is edited.
+		view.getLogFrameGrid().addListener(new ProjectLogFrameGrid.LogFrameGridListener() {
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                if (logFrame != null) {
-                    logFrame.setMainObjective(view.getLogFrameMainObjectiveTextBox().getValue());
-                    logFrameUpdated = true;
-                    view.getSaveButton().setEnabled(true);
-                }
-            }
-        });
+			@Override
+			public void logFrameEdited() {
+				logFrameUpdated = true;
+				view.getSaveButton().setEnabled(true);
+			}
+		});
 
-        // Save action.
-        view.getSaveButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
+		// Log frame main objective box listener.
+		view.getLogFrameMainObjectiveTextBox().addListener(Events.OnKeyUp, new Listener<BaseEvent>() {
 
-            @Override
-            public void handleEvent(BaseEvent be) {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				if (logFrame != null) {
+					logFrame.setMainObjective(view.getLogFrameMainObjectiveTextBox().getValue());
+					logFrameUpdated = true;
+					view.getSaveButton().setEnabled(true);
+				}
+			}
+		});
 
-                // Logs the modified log frame.
-                if (Log.isDebugEnabled()) {
-                    Log.debug("[handleEvent] Merges the log frame : \n" + logFrame.toString());
-                }
+		// Save action.
+		view.getSaveButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
 
-                // Sends the merge action to the server.
-                dispatcher.execute(new UpdateLogFrame(logFrame, currentProjectDTO.getId()), new MaskingAsyncMonitor(
-                    view, I18N.CONSTANTS.loading()), new AsyncCallback<LogFrameResult>() {
+			@Override
+			public void handleEvent(BaseEvent be) {
 
-                    @Override
-                    public void onFailure(Throwable e) {
+				// Logs the modified log frame.
+				if (Log.isDebugEnabled()) {
+					Log.debug("[handleEvent] Merges the log frame : \n" + logFrame.toString());
+				}
 
-                        // Informs of the error.
-                        Log.error("[execute] Error when saving the log frame.", e);
-                        MessageBox.alert(I18N.CONSTANTS.save(), I18N.CONSTANTS.saveError(), null);
-                    }
+				// Sends the merge action to the server.
+				dispatcher.execute(new UpdateLogFrame(logFrame, currentProjectDTO.getId()), new MaskingAsyncMonitor(
+								view, I18N.CONSTANTS.loading()), new AsyncCallback<LogFrameResult>() {
 
-                    @Override
-                    public void onSuccess(LogFrameResult r) {
-                        if (Log.isDebugEnabled()) {
-                            Log.debug("[execute] Log frame successfully saved.");
-                        }
+					@Override
+					public void onFailure(Throwable e) {
 
-                        // Updates local entities with the new returned log
-                        // frame (to get the generated ids).
-                        final LogFrameDTO updated = r.getLogFrame();
-                        currentProjectDTO.setLogFrameDTO(updated);
-                        view.getLogFrameGrid().updateLogFrame(updated);
-                        logFrame = updated;
+						// Informs of the error.
+						Log.error("[execute] Error when saving the log frame.", e);
+						MessageBox.alert(I18N.CONSTANTS.save(), I18N.CONSTANTS.saveError(), null);
+					}
 
-                        // Informs of the success.
-                        Notification.show(I18N.CONSTANTS.infoConfirmation(), I18N.CONSTANTS.saveConfirm());
-                        logFrameUpdated = false;
-                        view.getSaveButton().setEnabled(false);
+					@Override
+					public void onSuccess(LogFrameResult r) {
+						if (Log.isDebugEnabled()) {
+							Log.debug("[execute] Log frame successfully saved.");
+						}
 
-                        // broadcast an indicator change event to be safe
-                        eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED, ProjectLogFramePresenter.this));
-                    }
-                });
-            }
-        });
+						// Updates local entities with the new returned log
+						// frame (to get the generated ids).
+						final LogFrameDTO updated = r.getLogFrame();
+						currentProjectDTO.setLogFrameDTO(updated);
+						view.getLogFrameGrid().updateLogFrame(updated);
+						logFrame = updated;
 
-        // Copy action.
-        view.getCopyButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
+						// Informs of the success.
+						Notification.show(I18N.CONSTANTS.infoConfirmation(), I18N.CONSTANTS.saveConfirm());
+						logFrameUpdated = false;
+						view.getSaveButton().setEnabled(false);
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                logFrameIdCopySource = logFrame.getId();
-                view.getPasteButton().setEnabled(isEditable() && currentProjectDTO.getCurrentAmendment() == null);
+						// broadcast an indicator change event to be safe
+						eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED, ProjectLogFramePresenter.this));
+					}
+				});
+			}
+		});
 
-                Notification.show(I18N.CONSTANTS.copy(), I18N.CONSTANTS.logFrameCopied());
-            }
-        });
+		// Copy action.
+		view.getCopyButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
 
-        // Paste action.
-        view.getPasteButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				logFrameIdCopySource = logFrame.getId();
+				view.getPasteButton().setEnabled(isEditable() && currentProjectDTO.getCurrentAmendment() == null);
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                final ConfirmPasteDialog dialog = new ConfirmPasteDialog();
-                dialog.show(new FormDialogCallback() {
+				Notification.show(I18N.CONSTANTS.copy(), I18N.CONSTANTS.logFrameCopied());
+			}
+		});
 
-                    @Override
-                    public void onValidated() {
-                        final CopyLogFrame copyLogFrame =
-                                CopyLogFrame
-                                    .from(logFrameIdCopySource)
-                                    .to(currentProjectDTO)
-                                    .with(
-                                        dialog.isLinkIndicatorsChecked() ? IndicatorCopyStrategy.DUPLICATE_AND_LINK : IndicatorCopyStrategy.DUPLICATE);
+		// Paste action.
+		view.getPasteButton().addListener(Events.OnClick, new Listener<BaseEvent>() {
 
-                        dispatcher.execute(copyLogFrame, null, new AsyncCallback<LogFrameDTO>() {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				final ConfirmPasteDialog dialog = new ConfirmPasteDialog();
+				dialog.show(new FormDialogCallback() {
 
-                            @Override
-                            public void onFailure(Throwable caught) {
-                                MessageBox.alert(I18N.CONSTANTS.paste(), I18N.CONSTANTS.logFramePasteError(), null);
-                            }
+					@Override
+					public void onValidated() {
+						final CopyLogFrame copyLogFrame = CopyLogFrame
+										.from(logFrameIdCopySource)
+										.to(currentProjectDTO)
+										.with(dialog.isLinkIndicatorsChecked() ? IndicatorCopyStrategy.DUPLICATE_AND_LINK
+														: IndicatorCopyStrategy.DUPLICATE);
 
-                            @Override
-                            public void onSuccess(LogFrameDTO result) {
-                                logFrame = result;
-                                currentProjectDTO.setLogFrameDTO(result);
+						dispatcher.execute(copyLogFrame, null, new AsyncCallback<LogFrameDTO>() {
 
-                                fillAndInit();
-                                Notification.show(I18N.CONSTANTS.paste(), I18N.CONSTANTS.logFramePasted());
-                            }
+							@Override
+							public void onFailure(Throwable caught) {
+								MessageBox.alert(I18N.CONSTANTS.paste(), I18N.CONSTANTS.logFramePasteError(), null);
+							}
 
-                        });
-                    }
+							@Override
+							public void onSuccess(LogFrameDTO result) {
+								logFrame = result;
+								currentProjectDTO.setLogFrameDTO(result);
 
-                });
+								fillAndInit();
+								Notification.show(I18N.CONSTANTS.paste(), I18N.CONSTANTS.logFramePasted());
+							}
 
-            }
-        });
+						});
+					}
 
-        // Excel action.  
-        view.getExcelExportFormButton().getButton().addListener(Events.OnClick, new Listener<ButtonEvent>() {
+				});
 
+			}
+		});
+
+		// Excel action.
+		view.getExcelExportFormButton().getButton().addListener(Events.OnClick, new Listener<ButtonEvent>() {
+
 			@Override
 			public void handleEvent(ButtonEvent be) {
-				view.getExcelExportFormButton().getFieldMap().put(ExportUtils.PARAM_EXPORT_TYPE, 
-						ExportUtils.ExportType.PROJECT_LOG_FRAME.name());
-				view.getExcelExportFormButton().getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID, 
-		        		String.valueOf(currentProjectDTO.getId()));
-		        view.getExcelExportFormButton().triggerExport();
+				view.getExcelExportFormButton().getFieldMap()
+								.put(ExportUtils.PARAM_EXPORT_TYPE, ExportUtils.ExportType.PROJECT_LOG_FRAME.name());
+				view.getExcelExportFormButton().getFieldMap()
+								.put(ExportUtils.PARAM_EXPORT_PROJECT_ID, String.valueOf(currentProjectDTO.getId()));
+				view.getExcelExportFormButton().triggerExport();
 			}
 		});
-       
-    }
 
-    private boolean isEditable() {
-        return logFrame != null
-            && currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
-            && currentProjectDTO.getCurrentAmendment() == null
-            && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
-    }
+	}
 
-    /**
-     * Fills the view with the current log frame and initializes buttons state.
-     */
-    private void fillAndInit() {
+	private boolean isEditable() {
+		return logFrame != null && currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
+						&& currentProjectDTO.getCurrentAmendment() == null
+						&& ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_LOGFRAME);
+	}
 
-        // Fill the log frame title with the project's title
-        view.getLogFrameTitleContentLabel().setText(currentProjectDTO.getFullName());
+	/**
+	 * Fills the view with the current log frame and initializes buttons state.
+	 */
+	private void fillAndInit() {
 
-        if (logFrame != null) {
-            // Fill the log frame main objective.
-            view.getLogFrameMainObjectiveTextBox().setValue(logFrame.getMainObjective());
+		// Fill the log frame title with the project's title
+		view.getLogFrameTitleContentLabel().setText(currentProjectDTO.getFullName());
 
-            final boolean editable = isEditable();
+		if (logFrame != null) {
+			// Fill the log frame main objective.
+			view.getLogFrameMainObjectiveTextBox().setValue(logFrame.getMainObjective());
 
-            if (!editable) {
-                view.getLogFrameMainObjectiveTextBox().setEnabled(false);
-            }
+			final boolean editable = isEditable();
 
-            // Fill the grid.
-            view.getLogFrameGrid().displayLogFrame(currentProjectDTO.getId(), logFrame, editable);
-        }
+			if (!editable) {
+				view.getLogFrameMainObjectiveTextBox().setEnabled(false);
+			}
 
-        // Default buttons states.
-        view.getSaveButton().setEnabled(false);
-        view.getCopyButton().setEnabled(true);
-        view.getPasteButton().setEnabled(
-            isEditable() && logFrameIdCopySource != null && currentProjectDTO.getCurrentAmendment() == null);
-    }
+			// Fill the grid.
+			view.getLogFrameGrid().displayLogFrame(currentProjectDTO.getId(), logFrame, editable);
+		}
 
+		// Default buttons states.
+		view.getSaveButton().setEnabled(false);
+		view.getCopyButton().setEnabled(true);
+		view.getPasteButton()
+						.setEnabled(isEditable() && logFrameIdCopySource != null
+										&& currentProjectDTO.getCurrentAmendment() == null);
+	}
+
 }
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Revision 1501)
+++ src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Arbeitskopie)
@@ -71,6 +71,18 @@
 	/**
 	 * Show global export button in projects list
 	 */
+
+	VIEW_LOGFRAME,
+	/**
+	 * for viewing the logframe sub-tab
+	 */
+
+	EDIT_LOGFRAME,
+
+	/**
+	 * for creating/modifying/deleting objectives, expected results, activities,
+	 * hypothesis or linking/unlinking indicators to the logframe
+	 */
 	GLOBAL_EXPORT;
 
 	public static String getName(GlobalPermissionEnum gp) {
@@ -112,6 +124,12 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
+		case VIEW_LOGFRAME:
+			gpName = I18N.CONSTANTS.VIEW_LOGFRAME();
+			break;
+		case EDIT_LOGFRAME:
+			gpName = I18N.CONSTANTS.EDIT_LOGFRAME();
+			break;
 		default:
 			gpName = null;
 		}
