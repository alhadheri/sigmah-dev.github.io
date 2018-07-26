### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java	(working copy)
@@ -11,8 +11,10 @@
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.dto.ExportUtils;
 import org.sigmah.shared.dto.GlobalExportSettingsDTO;
+import org.sigmah.shared.dto.OrganizationDTO;
 import org.sigmah.shared.dto.UpdateGlobalExportSettings;
 
+import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.Events;
@@ -49,73 +51,87 @@
     @Inject
     public AdminExportManagementPresenter(final UserLocalCache cache, final View view, final Dispatcher dispatcher) {
         this.view = view;
+        
+        cache.getOrganizationCache().getOrganization(new AsyncCallback<OrganizationDTO>() {
+			@Override
+			public void onSuccess(OrganizationDTO result) {
 
-        final GetGlobalExportSettings settingsCommand =
-                new GetGlobalExportSettings(cache.getOrganizationCache().getOrganization().getId());
-        dispatcher.execute(settingsCommand, null, new AsyncCallback<GlobalExportSettingsDTO>() {
+		        final GetGlobalExportSettings settingsCommand =
+		                new GetGlobalExportSettings(result.getId());
+		        dispatcher.execute(settingsCommand, null, new AsyncCallback<GlobalExportSettingsDTO>() {
 
-            @Override
-            public void onFailure(Throwable caught) {
+		            @Override
+		            public void onFailure(Throwable caught) {
+						Log.error("[execute] Error while getting the organization", caught);
 
-            }
+		            }
 
-            @Override
-            public void onSuccess(GlobalExportSettingsDTO result) {
-                // set export format
-                switch (result.getDefaultOrganizationExportFormat()) {
-                    case XLS:
-                        view.getExcelRadioButton().setValue(true);
-                        break;
+		            @Override
+		            public void onSuccess(GlobalExportSettingsDTO result) {
+		                // set export format
+		                switch (result.getDefaultOrganizationExportFormat()) {
+		                    case XLS:
+		                        view.getExcelRadioButton().setValue(true);
+		                        break;
 
-                    case ODS:
-                        view.getCalcRadioButton().setValue(true);
-                        break;
-                }
-            }
-        });
+		                    case ODS:
+		                        view.getCalcRadioButton().setValue(true);
+		                        break;
+		                }
+		            }
+		        });
 
-        view.getSaveButton().addSelectionListener(new SelectionListener<ButtonEvent>() {
+		        view.getSaveButton().addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                UpdateGlobalExportSettings settings = new UpdateGlobalExportSettings();
-                settings.setUpdateDefaultExportFormat(true);
-                if (view.getExcelRadioButton().getValue()) {
-                    settings.setDefaultOrganizationExportFormat(ExportUtils.ExportFormat.XLS);
-                } else {
-                    settings.setDefaultOrganizationExportFormat(ExportUtils.ExportFormat.ODS);
-                }                
-                settings.setOrganizationId(cache.getOrganizationCache().getOrganization().getId());
-                
-                dispatcher.execute(settings, null, new AsyncCallback<VoidResult>() {
+		            @Override
+		            public void componentSelected(ButtonEvent ce) {
+		                UpdateGlobalExportSettings settings = new UpdateGlobalExportSettings();
+		                settings.setUpdateDefaultExportFormat(true);
+		                if (view.getExcelRadioButton().getValue()) {
+		                    settings.setDefaultOrganizationExportFormat(ExportUtils.ExportFormat.XLS);
+		                } else {
+		                    settings.setDefaultOrganizationExportFormat(ExportUtils.ExportFormat.ODS);
+		                }                
+		                settings.setOrganizationId(cache.getOrganizationCache().getOrganization().getId());
+		                
+		                dispatcher.execute(settings, null, new AsyncCallback<VoidResult>() {
 
-                    @Override
-                    public void onFailure(Throwable caught) {
-                    	MessageBox.alert(I18N.CONSTANTS.saveExportConfiguration(),
-		                        I18N.MESSAGES.adminStandardCreationFailure(
-		                        		I18N.CONSTANTS.defaultExportFormat()), null);
-                    }
+		                    @Override
+		                    public void onFailure(Throwable caught) {
+		                    	MessageBox.alert(I18N.CONSTANTS.saveExportConfiguration(),
+				                        I18N.MESSAGES.adminStandardCreationFailure(
+				                        		I18N.CONSTANTS.defaultExportFormat()), null);
+		                    }
 
-                    @Override
-                    public void onSuccess(VoidResult result) {
-                        valueChanged = false;
-                        Notification.show(I18N.CONSTANTS.exportManagementSaveChangesNotificationTitle(),
-                            I18N.CONSTANTS.exportManagementSaveChangesNotificationMessage());
-                    }
-                });
-            }
-        });
+		                    @Override
+		                    public void onSuccess(VoidResult result) {
+		                        valueChanged = false;
+		                        Notification.show(I18N.CONSTANTS.exportManagementSaveChangesNotificationTitle(),
+		                            I18N.CONSTANTS.exportManagementSaveChangesNotificationMessage());
+		                    }
+		                });
+		            }
+		        });
 
-        Listener<BaseEvent> valueChangedListener = new Listener<BaseEvent>() {
+		        Listener<BaseEvent> valueChangedListener = new Listener<BaseEvent>() {
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                valueChanged = true;
-            }
-        };
+		            @Override
+		            public void handleEvent(BaseEvent be) {
+		                valueChanged = true;
+		            }
+		        };
 
-        view.getCalcRadioButton().addListener(Events.OnClick, valueChangedListener);
-        view.getExcelRadioButton().addListener(Events.OnClick, valueChangedListener);
+		        view.getCalcRadioButton().addListener(Events.OnClick, valueChangedListener);
+		        view.getExcelRadioButton().addListener(Events.OnClick, valueChangedListener);				
+			}
+			
+			@Override
+			public void onFailure(Throwable caught) {
+				// TODO Auto-generated method stub
+				
+			}
+		});
+
     }
 
     @Override
Index: src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java	(working copy)
@@ -85,7 +85,9 @@
             store.add((List<ReportReference>) reports);
 
         // Creating the toolbar
-        component.setTopComponent(createToolbar(enabled, store));
+        if (enabled) {
+        	component.setTopComponent(createToolbar(store));
+        }
 
         // Creating the grid
         final FlexibleGrid<ReportReference> reportGrid =
@@ -238,11 +240,9 @@
     /**
      * Creates the toolbar of this component.
      * 
-     * @param enabled
-     *            <code>true</code> to enable the buttons of this toolbar, <code>false</code> to disable them.
      * @return A new toolbar.
      */
-    private ToolBar createToolbar(final boolean enabled, final ListStore<ReportReference> store) {
+    private ToolBar createToolbar(final ListStore<ReportReference> store) {
         final ToolBar toolbar = new ToolBar();
 
         // Creating buttons
@@ -311,9 +311,6 @@
             }
         });
 
-        // Enabling / desabling buttons
-        createReportButton.setEnabled(enabled);
-
         // Adding buttons to the toolbar
         toolbar.add(createReportButton);
 
Index: src/main/java/org/sigmah/client/page/project/reports/ProjectReportsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsPresenter.java	(working copy)
@@ -72,9 +72,10 @@
         if (arg != null)
             reportId = Integer.parseInt(arg);
 
-        if (!projectPresenter.getCurrentProjectDTO().equals(currentProjectDTO)) {
+        if (currentProjectDTO == null || !projectPresenter.getCurrentProjectDTO().equals(currentProjectDTO)) {
             // If the current project has changed, clear the view
             currentProjectDTO = projectPresenter.getCurrentProjectDTO();
+            view.setReadOnly(currentProjectDTO.isUnderMaintenance());
             reportStore.removeAll();
 
             if (arg == null)
@@ -103,10 +104,10 @@
                 });
 
             } else {
-                view.setReport(null);
+                view.clearReport();
             }
         }
-
+        
         return view;
     }
 
@@ -144,7 +145,7 @@
                     reportStore.removeAll();
                 }
 
-                reportStore.add(result.getData());
+                addToStore(result);
             }
 
             @Override
@@ -169,7 +170,7 @@
 
                 @Override
                 public void onSuccess(ProjectReportListResult result) {
-                    reportStore.add(result.getData());
+                    addToStore(result);
                     reportStore.sort("name", SortDir.ASC);
                 }
 
@@ -178,6 +179,9 @@
                     throw new UnsupportedOperationException("Not supported yet.");
                 }
             });
+
+        view.getAttachButton().setEnabled(!currentProjectDTO.isUnderMaintenance());
+        view.getCreateReportButton().setEnabled(!currentProjectDTO.isUnderMaintenance());
     }
 
     @Override
@@ -195,4 +199,12 @@
             view.eraseChanges();
         }
     }
+
+	private void addToStore(ProjectReportListResult result) {
+		for (ReportReference reference : result.getData()) {
+			if (!reference.getFlexibleElementDisabled()) {
+				reportStore.add(reference);
+			}
+		}
+	}
 }
Index: src/main/java/org/sigmah/client/page/project/ProjectView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectView.java	(working copy)
@@ -12,6 +12,7 @@
 import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.util.Padding;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.Header;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayout;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayoutData;
@@ -20,6 +21,7 @@
 import com.google.gwt.user.client.ui.HTML;
 import com.google.gwt.user.client.ui.Widget;
 import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
 
 /**
  * Initializes the view elements of a project page.
@@ -64,10 +66,11 @@
         amendmentBox = createAmendmentBox();
         topPanel.add(amendmentBox, amendmentData);
 
-
         // BOTTOM
         bottomPanel = new ContentPanel(new BorderLayout());
-        bottomPanel.setHeaderVisible(false);
+        bottomPanel.getHeader().addStyleName("header-alert");
+        bottomPanel.getHeader().setIcon(IconImageBundle.ICONS.maintenance());
+        bottomPanel.getHeader().setVisible(false);
         bottomPanel.setBodyBorder(false);
         bottomPanel.setBorders(false);
 
@@ -115,6 +118,11 @@
     public ContentPanel getAmendmentBox() {
         return amendmentBox;
     }
+    
+    @Override
+    public Header getAlertHeader() {
+		return bottomPanel.getHeader();
+	}
 
     @Override
     public void insufficient() {
Index: src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(working copy)
@@ -51,6 +51,7 @@
 import org.sigmah.shared.dto.PhaseDTO;
 import org.sigmah.shared.dto.ProjectBannerDTO;
 import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.ProjectModelDTO;
 import org.sigmah.shared.dto.element.BudgetElementDTO;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
@@ -72,6 +73,7 @@
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Dialog;
+import com.extjs.gxt.ui.client.widget.Header;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
 import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.Window;
@@ -89,6 +91,8 @@
 import com.extjs.gxt.ui.client.widget.tips.ToolTipConfig;
 import com.google.gwt.event.dom.client.ClickEvent;
 import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.i18n.client.DateTimeFormat;
+import com.google.gwt.i18n.client.DateTimeFormat.PredefinedFormat;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 import com.google.gwt.user.client.ui.Anchor;
 import com.google.gwt.user.client.ui.Grid;
@@ -113,6 +117,7 @@
 	 */
 	@ImplementedBy(ProjectView.class)
 	public interface View {
+		public Header getAlertHeader();
 
 		public ContentPanel getPanelProjectBanner();
 
@@ -464,7 +469,6 @@
 				((ProjectSubPresenter) presenter).loadProject(projectDTO);
 			}
 		}
-
 	}
 
 	public void ReloadProjectOnView(ProjectDTO projectDTO) {
@@ -501,7 +505,6 @@
 	 * Refreshes the project banner for the current project.
 	 */
 	public void refreshBanner() {
-
 		// Panel.
 		final ContentPanel panel = view.getPanelProjectBanner();
 
@@ -509,11 +512,23 @@
 		String projectTitle = currentProjectDTO.getFullName();
 		String titleToDisplay = "";
 		if (projectTitle != null && !projectTitle.isEmpty())
-			titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
+			titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 100) + "..." : projectTitle;
 
-		panel.setHeading(I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + " ("
-		                + titleToDisplay + ")");
-
+		String title = I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + " (" + titleToDisplay + ")";
+		panel.setHeading(title);
+		
+		ProjectModelDTO model = currentProjectDTO.getProjectModelDTO();
+		if (model.isUnderMaintenance()) {
+			view.getAlertHeader().setText(I18N.MESSAGES.projectMaintenanceMessage());
+			view.getAlertHeader().show();
+		} else if (!model.isUnderMaintenance() && model.getDateMaintenance() != null) {
+			String maintenanceDate = DateTimeFormat.getFormat(PredefinedFormat.DATE_TIME_LONG).format(model.getDateMaintenance());
+			view.getAlertHeader().setText(I18N.MESSAGES.projectMaintenanceScheduledMessage(maintenanceDate));
+			view.getAlertHeader().show();
+		} else {
+			view.getAlertHeader().hide();
+		}
+		
 		// Set the tool tip
 		ToolTipConfig panelToolTipconfig = new ToolTipConfig();
 		panelToolTipconfig.setMaxWidth(500);
@@ -531,13 +546,13 @@
 
 		// Logo.
 		final Image logo = FundingIconProvider.getProjectTypeIcon(
-		                currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
+		                model.getVisibility(authentication.getOrganizationId()),
 		                FundingIconProvider.IconSize.LARGE).createImage();
 		gridPanel.setWidget(0, 0, logo);
 		gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
 
 		// Banner.
-		final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
+		final ProjectBannerDTO banner = model.getProjectBannerDTO();
 		final LayoutDTO layout = banner.getLayoutDTO();
 
 		// Executes layout.
@@ -757,7 +772,7 @@
 
 		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+		if (!currentProjectDTO.isUnderMaintenance() && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
 
 			// Displaying the available actions
 			final Amendment.Action[] actions;
Index: src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java	(working copy)
@@ -137,8 +137,9 @@
 
     private Timer autoSaveTimer;
 
-    public ProjectReportsView(Authentication authentication, EventBus eventBus, Dispatcher dispatcher, ListStore<ReportReference> store) {
+	private boolean readOnly;
 
+    public ProjectReportsView(Authentication authentication, EventBus eventBus, Dispatcher dispatcher, ListStore<ReportReference> store) {
         this.authentication = authentication;
         this.eventBus = eventBus;
         this.dispatcher = dispatcher;
@@ -291,7 +292,7 @@
                             // Opening a report
 
                             if (model.getId() != currentReportId) {
-                                setReport(null); // Closing the current report
+                            	clearReport();
                                 mainPanel.mask(I18N.CONSTANTS.loading());
 
                                 final ProjectState state = new ProjectState(currentState.getProjectId());
@@ -430,6 +431,10 @@
 
         parent.add(sectionPanel);
     }
+    
+    public void clearReport() {
+    	setReport(null);
+    }
 
     public void setReport(final ProjectReportDTO report) {
         mainPanel.removeAll();
@@ -496,7 +501,7 @@
 
         final IconImageBundle icons = GWT.create(IconImageBundle.class);
 
-        if (report.isDraft()) {
+        if (!isReadOnly() && report.isDraft()) {
             // Draft banner
             final HorizontalPanel header = new HorizontalPanel();
             header.addStyleName("project-report-draft");
@@ -670,9 +675,9 @@
             autoSaveTimer.schedule(AUTO_SAVE_PERIOD);
 
         } else {
-            final Button editReportButton = new Button(I18N.CONSTANTS.edit(), icons.editPage());
+        	Button editReportButton = new Button(I18N.CONSTANTS.edit(), icons.editPage());
 
-            if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+            if (!isReadOnly() && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
                 toolBar.add(editReportButton);
             }
 
@@ -791,7 +796,15 @@
         mainPanel.unmask();
     }
 
-    private void createRichTextToolbar(final ToolBar toolbar) {
+    public boolean isReadOnly() {
+		return readOnly;
+	}
+    
+    public void setReadOnly(boolean readOnly) {
+		this.readOnly = readOnly;
+	}
+
+	private void createRichTextToolbar(final ToolBar toolbar) {
         createRichTextToolbar(toolbar, globalFormatterArray);
     }
 
@@ -1010,7 +1023,7 @@
     public Button getCreateReportButton() {
         return createReportButton;
     }
-
+    
     public boolean isTextAreaChanged() {
         boolean changed = false;
         if (textAreas != null) {
Index: src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java	(working copy)
@@ -47,6 +47,15 @@
         }
     }
 
+    // Question choice label
+    public Boolean getDisabled() {
+        return get("disabled");
+    }
+
+    public void setDisabled(Boolean disabled) {
+        set("disabled", disabled);
+    }
+
     // Question choice sort order
     public int getSortOrder() {
         return (Integer) get("sortOrder");
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetAvailableStatusForModelHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetAvailableStatusForModelHandler.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetAvailableStatusForModelHandler.java	(working copy)
@@ -57,6 +57,9 @@
                 availableStatus.add(ProjectModelStatus.USED);
                 availableStatus.add(ProjectModelStatus.UNAVAILABLE);
                 break;
+            case UNDER_MAINTENANCE:
+                availableStatus.add(ProjectModelStatus.USED);
+            	break;
             case UNAVAILABLE:
 
                 availableStatus.add(ProjectModelStatus.UNAVAILABLE);
Index: src/main/java/org/sigmah/client/page/orgunit/OrgUnitView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitView.java	(working copy)
@@ -1,12 +1,14 @@
 package org.sigmah.client.page.orgunit;
 
 import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
 import org.sigmah.client.ui.StylableHBoxLayout;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.Style.LayoutRegion;
 import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.Header;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayout;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayoutData;
@@ -42,7 +44,9 @@
         panelBanner.addStyleName("project-label-10");
 
         bottomPanel = new ContentPanel(new BorderLayout());
-        bottomPanel.setHeaderVisible(false);
+        bottomPanel.getHeader().addStyleName("header-alert");
+        bottomPanel.getHeader().setIcon(IconImageBundle.ICONS.maintenance());
+        bottomPanel.getHeader().setVisible(false);
         bottomPanel.setBodyBorder(false);
         bottomPanel.setBorders(false);
 
@@ -86,6 +90,11 @@
     }
 
     @Override
+    public Header getAlertHeader() {
+		return bottomPanel.getHeader();
+	}
+
+    @Override
     public void insufficient() {
 
         if (viewDisplayed != null && !viewDisplayed) {
Index: src/main/java/org/sigmah/shared/exception/LogFrameMaxPerExpectedResultValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerExpectedResultValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerExpectedResultValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class LogFrameMaxPerExpectedResultValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -6732852966132021274L;
+	
+	private Long limit;
+	private String projectName;
+	
+	public LogFrameMaxPerExpectedResultValidationException() {
+	}
+	
+	public LogFrameMaxPerExpectedResultValidationException(String projectName, Long limit) {
+		this.projectName = projectName;
+		this.limit = limit;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelMaxPerExpectedResultValidation(limit.toString(), projectName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsView.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsView.java	(working copy)
@@ -0,0 +1,320 @@
+package org.sigmah.client.page.admin.model.common.element;
+
+import java.util.ArrayList;
+import java.util.List;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+import org.sigmah.client.page.admin.AdminUtil;
+import org.sigmah.client.page.admin.model.common.element.AdminLayoutGroupsPresenter.View;
+import org.sigmah.client.page.common.grid.ConfirmCallback;
+import org.sigmah.client.page.common.toolbar.UIActions;
+import org.sigmah.shared.command.GetOrgUnitModel;
+import org.sigmah.shared.command.GetProjectModel;
+import org.sigmah.shared.command.result.CreateResult;
+import org.sigmah.shared.domain.ProjectModelStatus;
+import org.sigmah.shared.dto.OrgUnitModelDTO;
+import org.sigmah.shared.dto.ProjectModelDTO;
+import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.event.MessageBoxEvent;
+import com.extjs.gxt.ui.client.store.ListStore;
+import com.extjs.gxt.ui.client.util.Margins;
+import com.extjs.gxt.ui.client.widget.Component;
+import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.extjs.gxt.ui.client.widget.Window;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.grid.ColumnConfig;
+import com.extjs.gxt.ui.client.widget.grid.ColumnData;
+import com.extjs.gxt.ui.client.widget.grid.ColumnModel;
+import com.extjs.gxt.ui.client.widget.grid.Grid;
+import com.extjs.gxt.ui.client.widget.grid.GridCellRenderer;
+import com.extjs.gxt.ui.client.widget.grid.GridSelectionModel;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+import com.extjs.gxt.ui.client.widget.layout.VBoxLayoutData;
+import com.extjs.gxt.ui.client.widget.toolbar.ToolBar;
+import com.google.gwt.event.dom.client.ClickEvent;
+import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.Anchor;
+
+public class AdminLayoutGroupsView extends View {	
+	private final ListStore<LayoutGroupDTO> groupsStore;
+	
+	private final Dispatcher dispatcher;
+	private final Grid<LayoutGroupDTO> groupGrid;
+
+	private AdminFlexibleElementsPresenter.View elementsView;
+	
+	private final static Boolean alert = false;
+
+	public AdminLayoutGroupsView(Dispatcher dispatcher) {
+		this.dispatcher = dispatcher;
+		this.groupsStore = new ListStore<LayoutGroupDTO>();		
+
+        setLayout(new FitLayout());
+        setHeaderVisible(false);
+        setBorders(false);
+        setBodyBorder(false);
+        
+        final VBoxLayoutData topVBoxLayoutData = new VBoxLayoutData();
+        topVBoxLayoutData.setMargins(new Margins(0,0,0,2));
+        topVBoxLayoutData.setFlex(1.0);
+        
+        groupGrid = buildFieldsListGrid();
+        groupGrid.setSelectionModel(new GridSelectionModel<LayoutGroupDTO>());
+        groupGrid.setAutoHeight(true);
+        groupGrid.getView().setForceFit(true);
+        
+        add(groupGrid, topVBoxLayoutData);
+        this.layout();
+	}
+
+	public AdminFlexibleElementsPresenter.View getElementsView() {
+		return elementsView;
+	}
+	
+	public void setElementsView(AdminFlexibleElementsPresenter.View elementsView) {
+		this.elementsView = elementsView;
+	}
+	
+	@Override
+	public ListStore<LayoutGroupDTO> getGroupsStore() {
+		return groupsStore;
+	}
+	
+	private ToolBar initToolBar(ProjectModelStatus status) {
+		ToolBar toolbar = new ToolBar();
+    	
+		Button addButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
+        addButton.setItemId(UIActions.add);
+		addButton.addListener(Events.OnClick, new Listener<ButtonEvent>(){
+			@Override
+			public void handleEvent(ButtonEvent be) {
+				AdminLayoutGroupsActionListener listener  = new AdminLayoutGroupsActionListener(AdminLayoutGroupsView.this, dispatcher);
+				listener.onUIAction(UIActions.add);
+			}
+		});
+		
+		Button deleteButton = new Button(I18N.CONSTANTS.adminDeleteLayoutGroups(), IconImageBundle.ICONS.delete());
+		deleteButton.setItemId(UIActions.delete);
+		deleteButton.addListener(Events.OnClick, new Listener<ButtonEvent>(){
+			@Override
+			public void handleEvent(ButtonEvent be) {
+				AdminLayoutGroupsActionListener listener  = new AdminLayoutGroupsActionListener(AdminLayoutGroupsView.this, dispatcher);
+				listener.onUIAction(UIActions.delete);
+			}
+		});
+		
+		toolbar.add(addButton);
+		toolbar.add(deleteButton);
+	    return toolbar;
+    }
+
+	public void showNewGroupForm(final LayoutGroupDTO model, final boolean isUpdate) {
+		int width = 400;
+		int height = 200;
+
+		String title = I18N.CONSTANTS.adminFlexibleGroup();
+
+		final Window window = new Window();
+		window.setHeading(title);
+		window.setSize(width, height);
+		window.setPlain(true);
+		window.setModal(true);
+		window.setBlinkModal(true);
+		window.setLayout(new FitLayout());
+		
+		final LayoutGroupSigmahForm form = new LayoutGroupSigmahForm(
+				dispatcher, new AsyncCallback<CreateResult>() {
+					@Override
+					public void onFailure(Throwable arg0) {
+						window.hide();
+					}
+
+					@Override
+					public void onSuccess(final CreateResult layoutGroupResult) {
+						window.hide();
+						
+						if (layoutGroupResult != null) {
+							if (projectModel != null) {
+								GetProjectModel refreshModel = new GetProjectModel();
+								refreshModel.setId(projectModel.getId());
+								dispatcher.execute(refreshModel, null,
+										new AsyncCallback<ProjectModelDTO>() {
+											@Override
+											public void onFailure(Throwable arg0) {
+												AdminUtil.alertPbmData(alert);
+											}
+
+											@Override
+											public void onSuccess(
+													ProjectModelDTO modelResult) {
+												if (modelResult != null) {
+													AdminLayoutGroupsView.this
+															.getGroupsStore()
+															.removeAll();
+													projectModel = modelResult;
+													AdminLayoutGroupsView.this
+															.getGroupsStore()
+															.add(projectModel
+																	.getAllLayoutGroups());
+												}
+												
+												if (isUpdate) {						
+													updateAssociatedFields(model);
+												}
+											}
+										});
+							} else if (orgUnitModel != null) {
+								GetOrgUnitModel refreshModel = new GetOrgUnitModel();
+								refreshModel.setId(orgUnitModel.getId());
+								dispatcher.execute(refreshModel, null,
+										new AsyncCallback<OrgUnitModelDTO>() {
+											@Override
+											public void onFailure(Throwable arg0) {
+												AdminUtil.alertPbmData(alert);
+											}
+
+											@Override
+											public void onSuccess(
+													OrgUnitModelDTO modelResult) {
+												if (modelResult != null) {
+													getGroupsStore()
+															.removeAll();
+													orgUnitModel = modelResult;
+													getGroupsStore()
+															.add(orgUnitModel
+																	.getAllLayoutGroups());
+												}
+												
+												if (isUpdate) {						
+													updateAssociatedFields(model);
+												}
+											}
+										});
+							}
+						}
+					}
+
+				}, model, projectModel, orgUnitModel);
+		window.add(form);
+		window.show();
+	}
+	
+	public List<FlexibleElementDTO> getAssociatedFields(
+			final LayoutGroupDTO model) {
+		return getElementsView().getFieldsStore().findModels("group", model);
+	}
+
+	private void updateAssociatedFields(final LayoutGroupDTO model) {
+		LayoutGroupDTO group = getGroupsStore().findModel("id", model.getId());
+		for(FlexibleElementDTO modifiedFlex : getAssociatedFields(model)) {
+			modifiedFlex.setGroup(group);
+			getElementsView().getFieldsStore().update(modifiedFlex);
+		}			
+		getElementsView().getFieldsStore().commitChanges();
+	}
+
+	private Grid<LayoutGroupDTO> buildFieldsListGrid() {
+		List<ColumnConfig> configs = new ArrayList<ColumnConfig>();
+
+		ColumnConfig column = new ColumnConfig("title",
+				I18N.CONSTANTS.adminLayoutGroupName(), 250);
+		column.setRenderer(new GridCellRenderer<LayoutGroupDTO>() {
+			@Override
+			public Object render(final LayoutGroupDTO model, String property,
+					ColumnData config, int rowIndex, int colIndex,
+					ListStore<LayoutGroupDTO> store, Grid<LayoutGroupDTO> grid) {
+
+				if ((projectModel != null && projectModel.getStatus()
+						.isEditable())
+						|| (orgUnitModel != null && orgUnitModel.getStatus()
+								.isEditable())) {
+					final Anchor nameHyperlink = new Anchor(model.getTitle(),
+							true);
+					nameHyperlink.addStyleName("credits-partner-url");
+					nameHyperlink.addClickHandler(new ClickHandler() {
+						@Override
+						public void onClick(ClickEvent event) {
+							showNewGroupForm(model, true);
+						}
+					});
+					return nameHyperlink;
+				} else {
+					return AdminUtil.createGridText(model.getTitle());
+				}
+			}
+		});
+		configs.add(column);
+
+		column = new ColumnConfig("container",
+				I18N.CONSTANTS.adminFlexibleContainer(), 120);
+		column.setRenderer(new GridCellRenderer<LayoutGroupDTO>() {
+			@Override
+			public Object render(LayoutGroupDTO model, String property,
+					ColumnData config, int rowIndex, int colIndex,
+					ListStore<LayoutGroupDTO> store, Grid<LayoutGroupDTO> grid) {
+				return AdminUtil.createGridText(model.getContainerModel(). <String> get("name"));
+			}
+
+		});
+		configs.add(column);
+
+		groupsStore.setSortField("container");
+
+		ColumnModel cm = new ColumnModel(configs);
+		Grid<LayoutGroupDTO> grid = new Grid<LayoutGroupDTO>(groupsStore, cm);
+		return grid;
+	}
+
+	@Override
+	public Component getMainPanel() {
+		return this;
+	}
+
+	@Override
+	public void enableToolBar(ProjectModelStatus status) {
+		if (status.isEditable()) {
+			setTopComponent(initToolBar(status));
+		}
+	}
+
+	@Override
+	public List<LayoutGroupDTO> getDeleteSelection() {
+		GridSelectionModel<LayoutGroupDTO> sm = groupGrid.getSelectionModel();
+		return sm.getSelectedItems();
+	}
+
+	@Override
+	public void confirmDeleteSelected(final ConfirmCallback confirmCallback) {
+		List<LayoutGroupDTO> deleteElements = getDeleteSelection();
+		if (deleteElements.isEmpty()) {
+			MessageBox.alert(I18N.CONSTANTS.delete(),
+					I18N.MESSAGES.adminLayoutGroupNone(), null);
+		} else {
+			String separator = "";
+			String names = "";
+			for (LayoutGroupDTO s : deleteElements) {
+				names += separator + s.getTitle();
+				separator = ", ";
+			}
+
+			MessageBox.confirm(I18N.CONSTANTS.delete(),
+					I18N.MESSAGES.adminLayoutGroupConfirmDelete(names),
+					new Listener<MessageBoxEvent>() {
+						@Override
+						public void handleEvent(MessageBoxEvent be) {
+							if (be.getButtonClicked().getItemId().equals("yes")) {
+								confirmCallback.confirmed();
+							}
+						}
+					});
+		}
+	}
+}
Index: src/main/java/org/sigmah/shared/domain/layout/LayoutConstraint.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/layout/LayoutConstraint.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/layout/LayoutConstraint.java	(working copy)
@@ -28,6 +28,9 @@
 	private FlexibleElement element;
 	private Integer sortOrder;
 
+	public LayoutConstraint() {
+	}
+	
 	@Id
 	@GeneratedValue(strategy = GenerationType.AUTO)
 	@Column(name = "id_layout_constraint")
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java	(working copy)
@@ -231,7 +231,7 @@
 			return null;
 	}
 
-	private CommandResult createOrgUnitModel(User user, PropertyMap propertyMap) {
+	private CommandResult createOrgUnitModel(User user, PropertyMap propertyMap) throws CommandException {
 		OrgUnitModelPolicy policy = injector.getInstance(OrgUnitModelPolicy.class);
 		OrgUnitModelDTO newOrgUnitModel = (OrgUnitModelDTO) policy.create(user, propertyMap);
 		if (newOrgUnitModel != null) {
@@ -253,7 +253,7 @@
 			return null;
 	}
 
-	private CommandResult createProjectModel(User user, PropertyMap propertyMap) {
+	private CommandResult createProjectModel(User user, PropertyMap propertyMap) throws CommandException {
 		ProjectModelPolicy policy = injector.getInstance(ProjectModelPolicy.class);
 		ProjectModelDTO newProjectModel = (ProjectModelDTO) policy.create(user, propertyMap);
 		if (newProjectModel != null) {
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsPresenter.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsPresenter.java	(working copy)
@@ -0,0 +1,108 @@
+package org.sigmah.client.page.admin.model.common.element;
+
+import java.util.List;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.page.admin.AdminPageState;
+import org.sigmah.client.page.admin.model.AdminModelSubPresenter;
+import org.sigmah.client.page.admin.model.common.ModelView;
+import org.sigmah.client.page.common.grid.ConfirmCallback;
+import org.sigmah.shared.dto.OrgUnitModelDTO;
+import org.sigmah.shared.dto.ProjectModelDTO;
+import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
+import com.extjs.gxt.ui.client.store.ListStore;
+import com.extjs.gxt.ui.client.widget.Component;
+
+public class AdminLayoutGroupsPresenter implements AdminModelSubPresenter {
+    private final View view;
+    
+    private ProjectModelDTO projectModel;
+    private OrgUnitModelDTO orgUnitModel;
+
+    public static abstract class View extends ModelView {
+        public abstract Component getMainPanel();
+
+        public abstract ListStore<LayoutGroupDTO> getGroupsStore();
+
+        public abstract void showNewGroupForm(final LayoutGroupDTO model, final boolean isUpdate);
+
+        public abstract List<LayoutGroupDTO> getDeleteSelection();
+
+        public abstract void confirmDeleteSelected(ConfirmCallback confirmCallback);
+        
+        public abstract void setElementsView(AdminFlexibleElementsPresenter.View view);
+
+		public abstract List<FlexibleElementDTO> getAssociatedFields(LayoutGroupDTO model);
+    }
+
+    public AdminLayoutGroupsPresenter(Dispatcher dispatcher) {
+        this.view = new AdminLayoutGroupsView(dispatcher);
+    }
+    
+    public View getAdminView() {
+    	return view;
+	}
+
+    @Override
+    public Component getView() {
+        assert (projectModel != null || orgUnitModel != null);
+        if (projectModel != null) {
+            view.setProjectModel(projectModel);
+            view.setOrgUnitModel(null);
+            view.getGroupsStore().add(projectModel.getAllLayoutGroups());
+            view.getGroupsStore().commitChanges();
+        } else if (orgUnitModel != null) {
+            view.setOrgUnitModel(orgUnitModel);
+            view.setProjectModel(null);
+            view.getGroupsStore().add(orgUnitModel.getAllLayoutGroups());
+            view.getGroupsStore().commitChanges();
+        }
+        return view.getMainPanel();
+    }
+
+    @Override
+    public void discardView() {
+    }
+
+    @Override
+    public void viewDidAppear() {
+    }
+
+    @Override
+    public boolean hasValueChanged() {
+        return false;
+    }
+
+    @Override
+    public void forgetAllChangedValues() {
+    }
+
+    @Override
+    public void setCurrentState(AdminPageState currentState) {
+    }
+
+    @Override
+    public void setModel(Object model) {
+        if (model instanceof ProjectModelDTO) {
+            this.projectModel = (ProjectModelDTO) model;
+            this.orgUnitModel = null;
+            this.view.setProjectModel(projectModel);
+            this.view.setOrgUnitModel(null);
+        } else if (model instanceof OrgUnitModelDTO) {
+            this.orgUnitModel = (OrgUnitModelDTO) model;
+            this.projectModel = null;
+            this.view.setProjectModel(null);
+            this.view.setOrgUnitModel(orgUnitModel);
+        }
+    }
+
+    @Override
+    public Object getModel() {
+        if (projectModel != null)
+            return projectModel;
+        else
+            return orgUnitModel;
+    }
+}
Index: src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java	(working copy)
@@ -48,7 +48,7 @@
 
     public static final String exportData = "exportData";
     
-    public static final String deleteModel ="deleteModel";
-    	
-    	
+    public static final String deleteModel = "deleteModel";
+
+	public static final String disable = "disable";
 }
Index: src/main/java/org/sigmah/shared/exception/MaxValueValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/MaxValueValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/MaxValueValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class MaxValueValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -4863358483158662819L;
+	
+	private Integer limit;
+	private String containerName;
+	
+	public MaxValueValidationException() {
+	}
+	
+	public MaxValueValidationException(String containerName, Integer limit) {
+		this.containerName = containerName;
+		this.limit = limit;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.flexibleElementMaxValueValidation(limit.toString(), containerName);
+	}
+}
Index: src/main/java/org/sigmah/shared/command/DeleteLayoutGroups.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/DeleteLayoutGroups.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/DeleteLayoutGroups.java	(working copy)
@@ -0,0 +1,28 @@
+package org.sigmah.shared.command;
+
+import java.util.List;
+
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
+public class DeleteLayoutGroups implements Command<VoidResult> {
+	private static final long serialVersionUID = -6750954216001738221L;
+
+	private List<LayoutGroupDTO> layoutGroups;
+
+	protected DeleteLayoutGroups() {
+		// serialization
+	}
+	
+	public DeleteLayoutGroups(List<LayoutGroupDTO> layoutGroups) {
+		this.setLayoutGroups(layoutGroups);
+	}
+
+	public List<LayoutGroupDTO> getLayoutGroups() {
+		return layoutGroups;
+	}
+	
+	public void setLayoutGroups(List<LayoutGroupDTO> layoutGroups) {
+		this.layoutGroups = layoutGroups;
+	}
+}
Index: src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java	(working copy)
@@ -29,6 +29,7 @@
 import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrgUnitBannerDTO;
 import org.sigmah.shared.dto.OrgUnitDTO;
+import org.sigmah.shared.dto.OrgUnitModelDTO;
 import org.sigmah.shared.dto.element.BudgetElementDTO;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
@@ -44,12 +45,15 @@
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Dialog;
+import com.extjs.gxt.ui.client.widget.Header;
 import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.form.LabelField;
 import com.extjs.gxt.ui.client.widget.layout.FormLayout;
 import com.extjs.gxt.ui.client.widget.layout.HBoxLayoutData;
 import com.google.gwt.event.dom.client.ClickEvent;
 import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.i18n.client.DateTimeFormat;
+import com.google.gwt.i18n.client.DateTimeFormat.PredefinedFormat;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 import com.google.gwt.user.client.ui.Grid;
 import com.google.gwt.user.client.ui.Image;
@@ -68,6 +72,7 @@
 	 */
 	@ImplementedBy(OrgUnitView.class)
 	public interface View {
+	    public Header getAlertHeader();
 
 		public ContentPanel getPanelBanner();
 
@@ -240,8 +245,22 @@
 
 		// Panel.
 		final ContentPanel panel = view.getPanelBanner();
-		panel.setHeading(currentOrgUnitDTO.getOrgUnitModel().getTitle() + ' ' + currentOrgUnitDTO.getName() + " ("
-						+ currentOrgUnitDTO.getFullName() + ")");
+		
+		String title = currentOrgUnitDTO.getOrgUnitModel().getTitle() + ' ' + currentOrgUnitDTO.getName() + " (" + currentOrgUnitDTO.getFullName() + ")";
+		panel.setHeading(title);
+
+		OrgUnitModelDTO model = currentOrgUnitDTO.getOrgUnitModel();
+		if (model.isUnderMaintenance()) {
+			view.getAlertHeader().setText(I18N.MESSAGES.orgUnitMaintenanceMessage());
+			view.getAlertHeader().show();
+		} else if (!model.isUnderMaintenance() && model.getDateMaintenance() != null) {
+			String maintenanceDate = DateTimeFormat.getFormat(PredefinedFormat.DATE_TIME_LONG).format(model.getDateMaintenance());
+			view.getAlertHeader().setText(I18N.MESSAGES.orgUnitMaintenanceScheduledMessage(maintenanceDate));
+			view.getAlertHeader().show();
+		} else {
+			view.getAlertHeader().hide();
+		}
+
 		panel.removeAll();
 
 		final Grid gridPanel = new Grid(1, 2);
Index: src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelView.java	(working copy)
@@ -8,6 +8,7 @@
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.client.page.project.dashboard.funding.FundingIconProvider;
 import org.sigmah.client.page.project.dashboard.funding.FundingIconProvider.IconSize;
+import org.sigmah.client.ui.DateTimeField;
 import org.sigmah.shared.command.CheckModelUsage;
 import org.sigmah.shared.command.GetAvailableStatusForModel;
 import org.sigmah.shared.command.result.ProjectModelStatusListResult;
@@ -18,6 +19,7 @@
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.Style.LayoutRegion;
+import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.FieldEvent;
 import com.extjs.gxt.ui.client.event.Listener;
@@ -30,7 +32,9 @@
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.form.CheckBox;
 import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
+import com.extjs.gxt.ui.client.widget.form.CheckBoxGroup;
 import com.extjs.gxt.ui.client.widget.form.FormPanel;
+import com.extjs.gxt.ui.client.widget.form.LabelField;
 import com.extjs.gxt.ui.client.widget.form.Radio;
 import com.extjs.gxt.ui.client.widget.form.RadioGroup;
 import com.extjs.gxt.ui.client.widget.form.SimpleComboBox;
@@ -64,6 +68,12 @@
     private FormPanel topRightFormPanel;
     private final TextField<String> name;
     private final SimpleComboBox<String> statusList;
+    private final CheckBox underMaintenanceCheckBox;
+
+    private FormPanel maintenanceFormPanel;
+    private final DateTimeField maintenanceDateField;
+    private final LabelField maintenanceStartField;
+	private final CheckBoxGroup maintenanceCheckGroup;
 
     // Project Model
     private FormPanel topCenterFormPanel;
@@ -113,8 +123,13 @@
         topCenterFormPanel.setWidth(300);
         topCenterFormPanel.setHeaderVisible(false);
 
+        maintenanceFormPanel = new FormPanel();
+        maintenanceFormPanel.setWidth(320);
+        maintenanceFormPanel.setLabelWidth(110);
+        maintenanceFormPanel.setHeaderVisible(false);
+
         topRightFormPanel = new FormPanel();
-        topRightFormPanel.setWidth(600);
+        topRightFormPanel.setWidth(300);
         topRightFormPanel.setHeaderVisible(false);
 
         name = new TextField<String>();
@@ -128,10 +143,35 @@
         statusList.setAllowBlank(false);
         statusList.setTriggerAction(TriggerAction.ALL);
 
+        underMaintenanceCheckBox = new CheckBox();
+        underMaintenanceCheckBox.setValue(false);
+        underMaintenanceCheckBox.setBoxLabel("");
+        underMaintenanceCheckBox.addListener(Events.Change, new Listener<BaseEvent>() {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				statusList.setEnabled(!underMaintenanceCheckBox.getValue());
+				maintenanceDateField.setEnabled(underMaintenanceCheckBox.getValue());
+			}
+		});
+        
+        maintenanceDateField = new DateTimeField();
+        maintenanceDateField.hide();
+        maintenanceDateField.disable();
+        maintenanceDateField.setFieldLabel(I18N.CONSTANTS.adminOneModelMaintenanceDate());
+        
+        maintenanceStartField = new LabelField();
+        maintenanceStartField.setValue("");
+        maintenanceStartField.setFieldLabel(I18N.CONSTANTS.adminOneModelMaintenanceStartDate() + ":");
+        maintenanceStartField.hide();
+        
+        maintenanceCheckGroup = new CheckBoxGroup();
+        maintenanceCheckGroup.hide();
+        maintenanceCheckGroup.setFieldLabel(I18N.CONSTANTS.adminOneModelPutIntoMaintenance());
+        maintenanceCheckGroup.add(underMaintenanceCheckBox);
+
         /*
          * *******************************************ProjectModel **********************
          */
-
         radioGroup = new RadioGroup("projectTypeFilter");
 
         ngoRadio = new Radio();
@@ -246,6 +286,10 @@
         topLeftFormPanel.add(name);
         topLeftFormPanel.add(titleField);
         topLeftFormPanel.add(statusList);
+        
+        maintenanceFormPanel.add(maintenanceCheckGroup);
+        maintenanceFormPanel.add(maintenanceStartField);
+        maintenanceFormPanel.add(maintenanceDateField);
 
         hasBudgetCheckBox = new CheckBox();
         hasBudgetCheckBox.hide();
@@ -343,7 +387,8 @@
         return null;
     }
 
-    @Override
+    @SuppressWarnings("deprecation")
+	@Override
     public void initModelView(Object model) {
 
         if (model instanceof ProjectModelDTO) {
@@ -366,6 +411,9 @@
 
             currentProjectModel = (ProjectModelDTO) model;
             if (currentProjectModel != null) {
+            	maintenanceDateField.setValue(currentProjectModel.getDateMaintenance());
+            	maintenanceStartField.setValue(currentProjectModel.getDateMaintenance() == null ? "-" : currentProjectModel.getDateMaintenance().toLocaleString());
+            	underMaintenanceCheckBox.setValue(currentProjectModel.getDateMaintenance() != null);
 
                 name.setValue(currentProjectModel.getName());
 
@@ -375,7 +423,6 @@
                 Log.debug("Original project model status : "
                     + ProjectModelStatus.getName(currentProjectModel.getStatus()));
 
-                currentProjectModel.getStatus();
                 ProjectModelType type =
                         currentProjectModel.getVisibility(cache.getOrganizationCache().getOrganization().getId());
                 switch (type) {
@@ -421,6 +468,9 @@
 
             currentOrgUnitModel = (OrgUnitModelDTO) model;
             if (currentOrgUnitModel != null) {
+            	maintenanceDateField.setValue(currentOrgUnitModel.getDateMaintenance());
+            	underMaintenanceCheckBox.setValue(currentOrgUnitModel.getDateMaintenance() != null);
+            	maintenanceStartField.setValue(currentOrgUnitModel.getDateMaintenance() == null ? "-" : currentOrgUnitModel.getDateMaintenance().toLocaleString());
 
                 name.setValue(currentOrgUnitModel.getName());
 
@@ -442,7 +492,6 @@
     }
 
     private void updateStatusList(final ProjectModelStatus status) {
-
         statusList.clear();
         final GetAvailableStatusForModel cmd = new GetAvailableStatusForModel();
         cmd.setStatus(status);
@@ -473,7 +522,10 @@
                 }
 
                 statusList.add(values);
-                statusList.setSimpleValue(ProjectModelStatus.getName(status));
+                
+                String statusLabel = ProjectModelStatus.getName(status);
+                
+				statusList.setSimpleValue(values.contains(statusLabel) ? statusLabel : ( values.isEmpty() ? null : values.iterator().next() ));
 
                 if (onlyDraft) {
                     statusList.setTitle(I18N.CONSTANTS.adminOrgUnitModelOfRoot());
@@ -481,12 +533,34 @@
                     statusList.setTitle(null);
                 }
 
+            	updateMaintenanceFields(status);
             }
-
         });
 
     }
 
+	private void updateMaintenanceFields(final ProjectModelStatus status) {
+		if (status == ProjectModelStatus.USED) {
+			topPanel.insert(maintenanceFormPanel, 1, new HBoxLayoutData(0, 4, 0, 4));
+    		maintenanceDateField.show();
+    		maintenanceCheckGroup.show();
+    		maintenanceStartField.hide();
+    	} else if (status == ProjectModelStatus.UNDER_MAINTENANCE) {
+			topPanel.insert(maintenanceFormPanel, 1, new HBoxLayoutData(0, 4, 0, 4));
+    		maintenanceDateField.hide();
+    		maintenanceCheckGroup.show();
+    		maintenanceStartField.show();
+    	} else {
+    		topPanel.remove(maintenanceFormPanel);
+    		maintenanceDateField.hide();
+    		maintenanceCheckGroup.hide();
+    		maintenanceStartField.hide();
+    		underMaintenanceCheckBox.setValue(false);
+    		maintenanceDateField.setValue(null);
+    	}
+		topPanel.layout();
+	}
+
     @Override
     public SimpleComboBox<String> getStatusList() {
         return this.statusList;
@@ -494,7 +568,6 @@
 
     @Override
     public ContentPanel getTopPanel() {
-
         return this.topPanel;
     }
 
@@ -527,6 +600,16 @@
     public CheckBox getHasBudgetCheckBox() {
         return this.hasBudgetCheckBox;
     }
+    
+    @Override
+    public CheckBox getUnderMaintenanceCheckBox() {
+    	return underMaintenanceCheckBox;
+    }
+
+    @Override
+    public DateTimeField getMaintenanceDateField() {
+    	return maintenanceDateField;
+    }
 
     @Override
     public CheckBox getCanContainProjectsCheckBox() {
@@ -547,5 +630,4 @@
     public OrgUnitModelDTO getCurrentOrgUnitModel() {
         return this.currentOrgUnitModel;
     }
-
 }
Index: src/main/java/org/sigmah/client/icon/disable.png
===================================================================
Cannot display: file marked as a binary type.
svn:mime-type = application/octet-stream
Index: src/main/java/org/sigmah/client/icon/disable.png
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/disable.png	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/disable.png	(working copy)

Property changes on: src/main/java/org/sigmah/client/icon/disable.png
___________________________________________________________________
Added: svn:mime-type
## -0,0 +1 ##
+application/octet-stream
Index: src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceScheduler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceScheduler.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceScheduler.java	(working copy)
@@ -0,0 +1,145 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.server.schedule.maintenance;
+
+import java.util.LinkedList;
+import java.util.List;
+import java.util.Map;
+import java.util.concurrent.ConcurrentHashMap;
+
+import javax.persistence.EntityManager;
+import javax.persistence.EntityManagerFactory;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.quartz.JobDetail;
+import org.quartz.Scheduler;
+import org.quartz.SchedulerException;
+import org.quartz.SchedulerFactory;
+import org.quartz.SimpleTrigger;
+import org.quartz.Trigger;
+import org.sigmah.shared.domain.Model;
+import org.sigmah.shared.domain.ProjectModelStatus;
+
+import com.google.inject.Inject;
+
+public class MaintenanceScheduler {
+	private static final Log log = LogFactory.getLog(MaintenanceScheduler.class);
+	
+	private static final String SCHEDULER_TRIGGER_GROUP = "maintenance-scheduler";
+
+	private EntityManagerFactory emf;
+
+	private Scheduler scheduler;
+	
+	private Map<String, Trigger> scheduledJobs = new ConcurrentHashMap<String, Trigger>();
+
+	@Inject
+	public MaintenanceScheduler(final EntityManagerFactory emf, final SchedulerFactory factory) throws SchedulerException {
+		this.emf = emf;
+		this.scheduler = factory.getScheduler();
+		
+		scheduleExistentModels();
+		
+		start();
+		
+		log.info("Maintenance scheduler started successfully.");
+	}
+
+	public void start() throws SchedulerException {
+		scheduler.start();
+	}
+	
+	public void stop() throws SchedulerException {
+		scheduler.shutdown();
+	}
+	
+	public void standby() throws SchedulerException {
+		scheduler.standby();
+	}
+	
+	public boolean isScheduled(Model model) {
+		return scheduledJobs.containsKey(generateTriggerName(model));
+	}
+
+	public void updateMaintenanceScheduling(Model model) throws SchedulerException {
+		if (model == null || model.getId() == null) {
+			log.debug("Ignored model for maintenance: " + model);
+		} else if (model.getDateMaintenance() == null || model.getStatus() != ProjectModelStatus.USED) { // invalid schedule
+			if (isScheduled(model)) {
+				unscheduleMaintence(model);
+			}
+		} else if (isScheduled(model)) {
+			rescheduleForMaintenance(model);
+		} else {
+			scheduleForMaintenance(model);
+		}
+	}
+	
+	public void scheduleForMaintenance(Model model) throws SchedulerException {
+		String triggerName = generateTriggerName(model);
+		
+		SimpleTrigger trigger = generateTrigger(model, triggerName);
+		JobDetail job = generateJobDetail(model);
+		
+		scheduler.scheduleJob(job, trigger);
+		scheduledJobs.put(triggerName, trigger);
+		
+		log.info("Model " + model.getClass().getName() + " (" + model.getId() + ") scheduled successfully.");
+	}
+	
+	public void rescheduleForMaintenance(Model model) throws SchedulerException {
+		String triggerName = generateTriggerName(model);
+		
+		Trigger actualTrigger = scheduledJobs.get(triggerName);
+		
+		SimpleTrigger trigger = generateTrigger(model, triggerName);
+		trigger.setJobName(actualTrigger.getJobName());
+		trigger.setJobGroup(actualTrigger.getJobGroup());
+		
+		scheduler.rescheduleJob(triggerName, SCHEDULER_TRIGGER_GROUP, trigger);
+		scheduledJobs.put(triggerName, trigger);
+		
+		log.info("Model " + model.getClass().getName() + " (" + model.getId() + ") rescheduled successfully.");
+	}
+	
+	public void unscheduleMaintence(Model model) throws SchedulerException {
+		String triggerName = generateTriggerName(model);
+		scheduler.unscheduleJob(triggerName, SCHEDULER_TRIGGER_GROUP);
+		scheduledJobs.remove(triggerName);
+		
+		log.info("Model " + model.getClass().getName() + " (" + model.getId() + ") unscheduled successfully.");
+	}
+
+	private SimpleTrigger generateTrigger(Model model, String triggerName) {
+		return new SimpleTrigger(triggerName, SCHEDULER_TRIGGER_GROUP, model.getDateMaintenance());
+	}
+	
+	private JobDetail generateJobDetail(Model model) {
+		JobDetail jobDetail = new JobDetail("job-" + model.getId(), SCHEDULER_TRIGGER_GROUP, MaintenanceModelJob.class);
+		jobDetail.getJobDataMap().put(MaintenanceModelJob.MODEL_PARAMETER, model);
+		jobDetail.getJobDataMap().put(MaintenanceModelJob.MODEL_EMF, emf);
+		return jobDetail;
+	}
+
+	private String generateTriggerName(Model model) {
+		return model.getClass().getName() + "-" + model.getId();
+	}
+	
+	@SuppressWarnings("unchecked")
+	private void scheduleExistentModels() throws SchedulerException {
+		EntityManager em = emf.createEntityManager();
+		
+		List<Model> models = new LinkedList<Model>();
+		models.addAll(em.createQuery("select p from ProjectModel p where p.dateMaintenance is not null and p.status = 'USED'").getResultList());
+		models.addAll(em.createQuery("select o from OrgUnitModel o where o.dateMaintenance is not null and o.status = 'USED'").getResultList());
+
+		log.info("Number of existent models to configure schedule: " + models.size());
+		for (Model model : models) {
+			updateMaintenanceScheduling(model);
+		}
+	}
+}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectModelsHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectModelsHandler.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectModelsHandler.java	(working copy)
@@ -80,7 +80,8 @@
 						// status different form DRAFT.
 						if ((cmd.getModelType() == null || type == cmd.getModelType())
 								&& !ProjectModelStatus.DRAFT.equals(model.getStatus())
-								&& !ProjectModelStatus.UNAVAILABLE.equals(model.getStatus())) {
+								&& !ProjectModelStatus.UNAVAILABLE.equals(model.getStatus())
+								&& !ProjectModelStatus.UNDER_MAINTENANCE.equals(model.getStatus())) {
 							projectModelDTOList.add(mapper.map(model, ProjectModelDTOLight.class));
 						}
 					}
Index: src/main/java/org/sigmah/public/sigmah.css
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/public/sigmah.css	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/public/sigmah.css	(working copy)
@@ -757,6 +757,17 @@
 	cursor: pointer;
 }
 
+.disabled-element {
+	text-decoration: line-through;
+}
+
+.header-alert {
+	color: black !important;
+	background-color: rgb(255, 90, 90) !important;
+	background-image: none !important;
+	border: 1px black solid !important; 
+}
+
 /* ----------------------------------------------------- GWT HTML Table */
 .html-grid-header-row {
 	border-bottom: solid 1px #B7A076;
Index: src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java	(working copy)
@@ -277,4 +277,7 @@
 		return elements;
 	}
 
+	public boolean isUnderMaintenance() {
+		return getOrgUnitModel().isUnderMaintenance();
+	}
 }
Index: src/main/java/org/sigmah/shared/exception/LogFrameMaxPerSpecificObjectiveValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerSpecificObjectiveValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerSpecificObjectiveValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class LogFrameMaxPerSpecificObjectiveValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -1443043639054096978L;
+	
+	private Long limit;
+	private String projectName;
+	
+	public LogFrameMaxPerSpecificObjectiveValidationException() {
+	}
+	
+	public LogFrameMaxPerSpecificObjectiveValidationException(String projectName, Long limit) {
+		this.projectName = projectName;
+		this.limit = limit;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelMaxPerSpecificObjectiveValidation(limit.toString(), projectName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelPresenter.java	(working copy)
@@ -1,5 +1,6 @@
 package org.sigmah.client.page.admin.model.common;
 
+import java.util.Date;
 import java.util.HashMap;
 import java.util.List;
 
@@ -19,9 +20,11 @@
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.client.page.admin.model.AdminModelSubPresenter;
 import org.sigmah.client.page.admin.model.common.element.AdminFlexibleElementsPresenter;
+import org.sigmah.client.page.admin.model.common.element.AdminLayoutGroupsPresenter;
 import org.sigmah.client.page.admin.model.common.importation.AdminImportationSchemeModelsPresenter;
 import org.sigmah.client.page.admin.model.project.logframe.AdminLogFramePresenter;
 import org.sigmah.client.page.admin.model.project.phase.AdminPhasesPresenter;
+import org.sigmah.client.ui.DateTimeField;
 import org.sigmah.client.util.Notification;
 import org.sigmah.client.util.state.IStateManager;
 import org.sigmah.shared.command.CheckModelUsage;
@@ -46,6 +49,7 @@
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.Listener;
 import com.extjs.gxt.ui.client.event.MessageBoxEvent;
+import com.extjs.gxt.ui.client.util.DateWrapper;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Dialog;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
@@ -67,7 +71,7 @@
 
 public class AdminOneModelPresenter {
 
-	private final static String[] MAIN_TABS = { I18N.CONSTANTS.adminProjectModelFields(),
+	private final static String[] MAIN_TABS = { I18N.CONSTANTS.adminProjectModelFields(), I18N.CONSTANTS.adminProjectModelLayoutGroups(),
 	                I18N.CONSTANTS.adminProjectModelPhases(), I18N.CONSTANTS.adminProjectModelLogFrame(),
 	                I18N.CONSTANTS.adminModelImportationSchemes() };
 
@@ -109,6 +113,10 @@
 		public CheckBox getHasBudgetCheckBox();
 
 		public CheckBox getCanContainProjectsCheckBox();
+		
+		public CheckBox getUnderMaintenanceCheckBox();
+		
+		public DateTimeField getMaintenanceDateField();
 
 		public RadioGroup getProjectTypeRadioGroup();
 
@@ -124,7 +132,14 @@
 	                final UserLocalCache cache, final Authentication authentication, IStateManager stateMgr) {
 		this.dispatcher = dispatcher;
 		this.view = view;
-		this.presenters = new AdminModelSubPresenter[] { new AdminFlexibleElementsPresenter(dispatcher),
+		
+		AdminLayoutGroupsPresenter adminLayoutGroupsPresenter = new AdminLayoutGroupsPresenter(dispatcher);
+		AdminFlexibleElementsPresenter adminFlexibleElementsPresenter = new AdminFlexibleElementsPresenter(dispatcher);
+		
+		linkViews(adminFlexibleElementsPresenter, adminLayoutGroupsPresenter);
+		
+		this.presenters = new AdminModelSubPresenter[] { adminFlexibleElementsPresenter,
+						adminLayoutGroupsPresenter,
 		                new AdminPhasesPresenter(dispatcher), new AdminLogFramePresenter(dispatcher),
 		                new AdminImportationSchemeModelsPresenter(dispatcher) };
 		this.eventBus = eventBus;
@@ -134,6 +149,13 @@
 		addListeners();
 	}
 
+	private void linkViews(
+			AdminFlexibleElementsPresenter adminFlexibleElementsPresenter,
+			AdminLayoutGroupsPresenter adminLayoutGroupsPresenter) {
+		adminFlexibleElementsPresenter.getAdminView().setGroupView(adminLayoutGroupsPresenter.getAdminView());
+		adminLayoutGroupsPresenter.getAdminView().setElementsView(adminFlexibleElementsPresenter.getAdminView());
+	}
+
 	private void addListeners() {
 
 		// Status combox
@@ -141,11 +163,30 @@
 
 		// Save button
 		view.getSaveButton().addListener(Events.OnClick, new Listener<ButtonEvent>() {
-
 			@Override
 			public void handleEvent(ButtonEvent be) {
-				dataChanged = false;
-				updateModel();
+				saveModel();
+			}
+
+			public void saveModel() {
+				if (view.getUnderMaintenanceCheckBox().getValue() && view.getMaintenanceDateField().isVisible() && view.getMaintenanceDateField().getValue() != null && view.getMaintenanceDateField().getValue().before(new Date())) {
+					MessageBox.alert(I18N.CONSTANTS.error(), I18N.CONSTANTS.adminOneModelInvalidDate(), null);
+				} else if (view.getUnderMaintenanceCheckBox().getValue() && view.getMaintenanceDateField().isVisible() && view.getMaintenanceDateField().getValue() == null) {
+					MessageBox.confirm(I18N.CONSTANTS.adminOneModelMaintenanceDateAlert(), I18N.CONSTANTS.adminOneModelMaintenanceDateAlertConfirmMessage(), new Listener<MessageBoxEvent>() {
+		                @Override
+		                public void handleEvent(MessageBoxEvent be) {
+                            if (be.getButtonClicked().getItemId()
+                                            .equals(Dialog.YES)) {
+                            	Date date = new DateWrapper().addMinutes(30).asDate();
+								view.getMaintenanceDateField().setValue(date);
+                            	saveModel();
+                            }
+						}
+					});
+				} else {
+					dataChanged = false;
+					updateModel();
+				}
 			}
 		});
 
@@ -159,8 +200,10 @@
 
 		view.getCanContainProjectsCheckBox().addListener(Events.OnClick, dataChangedListener);
 		view.getHasBudgetCheckBox().addListener(Events.OnClick, dataChangedListener);
+		view.getUnderMaintenanceCheckBox().addListener(Events.OnClick, dataChangedListener);
 		view.getTitleField().addListener(Events.Change, dataChangedListener);
 		view.getNameField().addListener(Events.Change, dataChangedListener);
+		view.getMaintenanceDateField().addListener(Events.Change, dataChangedListener);
 		for (Field<?> radio : view.getProjectTypeRadioGroup().getAll()) {
 			radio.addListener(Events.OnClick, dataChangedListener);
 		}
@@ -259,7 +302,6 @@
 	}
 
 	public boolean navigate(PageState place, final AdminPresenter.View view) {
-
 		final AdminPageState adminPageState = (AdminPageState) place;
 		currentState = adminPageState;
 		if (currentState.isProject()) {
@@ -285,7 +327,8 @@
 			});
 		} else {
 			addSingleTab(0);
-			addSingleTab(3);
+			addSingleTab(1);
+			addSingleTab(4);
 			GetOrgUnitModel command = new GetOrgUnitModel(currentState.getModel());
 			command.setId(currentState.getModel().intValue());
 			dispatcher.execute(command, null, new AsyncCallback<OrgUnitModelDTO>() {
@@ -312,12 +355,10 @@
 
 	private void selectTab(String subModel, AdminPresenter.View adminView, Object model, boolean force,
 	                boolean isProject) {
-
 		int index = arrayIndexOf(MAIN_TABS, subModel);
 		if (index != -1) {
 
 			final TabItem item = this.view.getTabPanelParameters().getItemByItemId(String.valueOf(index));
-
 			if (!item.equals(currentTabItem)) {
 				currentTabItem = item;
 
@@ -337,7 +378,6 @@
 				else
 					this.setCurrentOrgUnitModel((OrgUnitModelDTO) presenters[index].getModel());
 				presenters[index].viewDidAppear();
-
 			} else if (force) {
 				presenters[index].setCurrentState(currentState);
 				presenters[index].setModel(model);
@@ -810,6 +850,8 @@
 	 * Method to update the model
 	 */
 	private void updateModel() {
+		Boolean underMaintenance = view.getUnderMaintenanceCheckBox().getValue();
+		Date maintenanceDate = view.getMaintenanceDateField().getValue();
 
 		if (view.isProject()) {
 			if (view.getNameField().getValue() == null || view.getStatusList().getValue() == null
@@ -824,9 +866,15 @@
 			modelProperties.put(AdminUtil.PROP_PM_NAME, view.getNameField().getValue());
 
 			if (view.getStatusList().getValue() != null) {
-				String status = view.getStatusList().getValue().getValue();
-				ProjectModelStatus statusEnum = ProjectModelStatus.getStatus(status);
-				modelProperties.put(AdminUtil.PROP_PM_STATUS, statusEnum);
+				if (underMaintenance) {
+					ProjectModelStatus currentStatus = currentProjectModel.getStatus();
+					modelProperties.put(AdminUtil.PROP_PM_STATUS, currentStatus);
+					if (currentStatus == ProjectModelStatus.USED) { // maintenance scheduled
+						modelProperties.put(AdminUtil.PROP_PM_MAINTENANCE_DATE, maintenanceDate);
+					}
+				} else {
+					modelProperties.put(AdminUtil.PROP_PM_STATUS, ProjectModelStatus.getStatus(view.getStatusList().getValue().getValue()));
+				}
 			}
 
 			modelProperties.put(AdminUtil.PROP_PM_USE, view.getCurrentModelType());
@@ -905,11 +953,19 @@
 
 			HashMap<String, Object> modelProperties = new HashMap<String, Object>();
 			modelProperties.put(AdminUtil.PROP_OM_NAME, view.getNameField().getValue());
+
 			if (view.getStatusList().getValue() != null) {
-				String status = view.getStatusList().getValue().getValue();
-				ProjectModelStatus statusEnum = ProjectModelStatus.getStatus(status);
-				modelProperties.put(AdminUtil.PROP_OM_STATUS, statusEnum);
+				if (underMaintenance) {
+					ProjectModelStatus currentStatus = currentOrgUnitModel.getStatus();
+					modelProperties.put(AdminUtil.PROP_OM_STATUS, currentStatus);
+					if (currentStatus == ProjectModelStatus.USED) { // maintenance scheduled
+						modelProperties.put(AdminUtil.PROP_OM_MAINTENANCE_DATE, maintenanceDate);
+					}
+				} else {
+					modelProperties.put(AdminUtil.PROP_OM_STATUS, ProjectModelStatus.getStatus(view.getStatusList().getValue().getValue()));
+				}
 			}
+			
 			modelProperties.put(AdminUtil.ADMIN_ORG_UNIT_MODEL, view.getCurrentOrgUnitModel());
 			modelProperties.put(AdminUtil.PROP_OM_NAME, nameValue);
 			modelProperties.put(AdminUtil.PROP_OM_TITLE, title);
Index: src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java	(working copy)
@@ -5,6 +5,8 @@
 
 package org.sigmah.shared.dto.element;
 
+import java.util.Date;
+
 import org.sigmah.client.EventBus;
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.Dispatcher;
@@ -392,7 +394,7 @@
     }
 
 	public boolean getExportable() {
-		return  (Boolean) get("exportable");
+		return (Boolean) get("exportable");
 	}
 
 	public void setExportable(boolean exportable) {
@@ -501,11 +503,7 @@
     }
 
     public BaseModelData getContainerModel() {
-        return get("container");
-    }
-
-    public void setContainerModel(BaseModelData model) {
-        set("container", model);
+        return getGroup().getContainerModel();
     }
 
     public LayoutConstraintDTO getConstraint() {
@@ -515,6 +513,14 @@
     public void setConstraint(LayoutConstraintDTO constraint) {
         set("constraint", constraint);
     }
+    
+    public Boolean getDisabled() {
+    	return get("disabled");
+    }
+    
+    public void setDisabled(Boolean disabled) {
+    	set("disabled", disabled);
+    }
 
     public LayoutConstraintDTO getBannerConstraint() {
         return get("banner");
@@ -523,4 +529,12 @@
     public void setBannerConstraint(LayoutConstraintDTO constraint) {
         set("banner", constraint);
     }
+
+	public Date getCreationDate() {
+		return get("creationDate");
+	}
+	
+	public void setCreationDate(Date creationDate) {
+		set("creationDate", creationDate);
+	}
 }
Index: src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroupType.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroupType.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroupType.java	(working copy)
@@ -7,7 +7,35 @@
  * 
  */
 public enum LogFrameGroupType {
-
     SPECIFIC_OBJECTIVE, EXPECTED_RESULT, ACTIVITY, PREREQUISITE;
 
+    public static Class<?> getTypeClass(LogFrameGroupType type) {
+    	switch (type) {
+    	case SPECIFIC_OBJECTIVE:
+    		return SpecificObjective.class;
+    	case EXPECTED_RESULT:
+    		return ExpectedResult.class;
+    	case ACTIVITY:
+    		return LogFrameActivity.class;
+    	case PREREQUISITE:
+    		return Prerequisite.class;
+    	default:
+    		return null;
+    	}
+    }
+
+	public static String getShorteningName(LogFrameGroupType type) {
+    	switch (type) {
+    	case SPECIFIC_OBJECTIVE:
+    		return "SO";
+    	case EXPECTED_RESULT:
+    		return "ER";
+    	case ACTIVITY:
+    		return "A";
+    	case PREREQUISITE:
+    		return "P";
+    	default:
+    		return null;
+    	}
+	}
 }
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetValueHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetValueHandler.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetValueHandler.java	(working copy)
@@ -65,7 +65,7 @@
      *         for this element.
      */
     @Override
-    public CommandResult execute(GetValue cmd, User user) throws CommandException {
+    public ValueResult execute(GetValue cmd, User user) throws CommandException {
 
         if (LOG.isDebugEnabled()) {
             LOG.debug("[execute] Getting value object from the database.");
Index: src/main/java/org/sigmah/shared/dto/ProjectDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java	(working copy)
@@ -601,4 +601,8 @@
 		set("favoriteUsers", favoriteUsers);
 	}
 
+	public boolean isUnderMaintenance() {
+		return getProjectModelDTO().isUnderMaintenance();
+	}
+
 }
Index: src/main/java/org/sigmah/server/policy/EntityPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/EntityPolicy.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/EntityPolicy.java	(working copy)
@@ -23,9 +23,9 @@
      * @param properties  A map between property names and property values
      * @return the primary key of the newly created entity
      */
-    Object create(User user, PropertyMap properties);
+    Object create(User user, PropertyMap properties) throws Exception;
 
-    void update(User user, Object entityId, PropertyMap changes);
+    void update(User user, Object entityId, PropertyMap changes) throws Exception;
 
 
 }
Index: src/main/java/org/sigmah/shared/domain/Model.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/Model.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/Model.java	(working copy)
@@ -0,0 +1,16 @@
+package org.sigmah.shared.domain;
+
+import java.io.Serializable;
+import java.util.Date;
+
+public interface Model {
+	public Serializable getId();
+	
+	public ProjectModelStatus getStatus();
+	
+	public void setStatus(ProjectModelStatus status);
+	
+	public Date getDateMaintenance();
+	
+	public void setDateMaintenance(Date dateMaintenance);
+}
Index: src/main/java/org/sigmah/client/icon/maintenance.png
===================================================================
Cannot display: file marked as a binary type.
svn:mime-type = application/octet-stream
Index: src/main/java/org/sigmah/client/icon/maintenance.png
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/maintenance.png	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/maintenance.png	(working copy)

Property changes on: src/main/java/org/sigmah/client/icon/maintenance.png
___________________________________________________________________
Added: svn:mime-type
## -0,0 +1 ##
+application/octet-stream
Index: src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java	(working copy)
@@ -1,6 +1,7 @@
 package org.sigmah.server.policy;
 
 import java.util.ArrayList;
+import java.util.Date;
 import java.util.List;
 
 import javax.persistence.EntityManager;
@@ -8,8 +9,10 @@
 import org.apache.commons.logging.Log;
 import org.apache.commons.logging.LogFactory;
 import org.dozer.Mapper;
+import org.quartz.SchedulerException;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.server.policy.admin.ModelUtil;
+import org.sigmah.server.schedule.maintenance.MaintenanceScheduler;
 import org.sigmah.shared.domain.PhaseModel;
 import org.sigmah.shared.domain.ProjectBanner;
 import org.sigmah.shared.domain.ProjectDetails;
@@ -29,6 +32,7 @@
 import org.sigmah.shared.domain.logframe.LogFrameModel;
 import org.sigmah.shared.dto.PhaseModelDTO;
 import org.sigmah.shared.dto.ProjectModelDTO;
+import org.sigmah.shared.exception.CommandException;
 
 import com.google.inject.Inject;
 
@@ -42,6 +46,8 @@
 
 	private final EntityManager em;
 	private final Mapper mapper;
+	private final MaintenanceScheduler maintenanceScheduler;
+	
 	private ProjectModelDTO projectModel;
 	private ProjectModel modelToUpdate;
 
@@ -69,13 +75,14 @@
 	private final static Log log = LogFactory.getLog(ProjectModelPolicy.class);
 
 	@Inject
-	public ProjectModelPolicy(EntityManager em, Mapper mapper) {
+	public ProjectModelPolicy(EntityManager em, Mapper mapper, MaintenanceScheduler maintenanceScheduler) {
 		this.em = em;
 		this.mapper = mapper;
+		this.maintenanceScheduler = maintenanceScheduler;
 	}
 
 	@Override
-	public Object create(User user, PropertyMap properties) {
+	public Object create(User user, PropertyMap properties) throws CommandException {
 
 		projectModel = (ProjectModelDTO) properties.get(AdminUtil.ADMIN_PROJECT_MODEL);
 		// Only draft models can be changed
@@ -221,7 +228,7 @@
 	}
 
 	@Override
-	public void update(User user, Object entity, PropertyMap changes) {
+	public void update(User user, Object entity, PropertyMap changes) throws CommandException {
 
 		log.debug("Begins update the model");
 
@@ -232,8 +239,16 @@
 		if (model != null) {
 			if (changes.get(AdminUtil.PROP_PM_NAME) != null)
 				model.setName((String) changes.get(AdminUtil.PROP_PM_NAME));
-			if (changes.get(AdminUtil.PROP_PM_STATUS) != null)
+			if (changes.get(AdminUtil.PROP_PM_STATUS) != null) {
 				model.setStatus((ProjectModelStatus) changes.get(AdminUtil.PROP_PM_STATUS));
+
+		        if (model.getStatus() != ProjectModelStatus.UNDER_MAINTENANCE) {
+		        	model.setDateMaintenance(null);
+		        }
+			}
+			if (changes.get(AdminUtil.PROP_PM_MAINTENANCE_DATE) != null) {
+				model.setDateMaintenance(changes.<Date>get(AdminUtil.PROP_PM_MAINTENANCE_DATE));
+			}
 			if (changes.get(AdminUtil.PROP_PM_USE) != null) {
 				List<ProjectModelVisibility> visibilities = model.getVisibilities();
 				for (ProjectModelVisibility v : visibilities) {
@@ -243,7 +258,10 @@
 					}
 				}
 			}
+			
+			updateMaintenanceScheduling(model);
 			model = em.merge(model);
+			
 			modelToUpdate = model;
 			/*
 			 * ***********************************Log Frame
@@ -254,6 +272,7 @@
 				LogFrameModel logFrameModel = null;
 				if (model.getLogFrameModel() != null) {
 					logFrameModel = em.find(LogFrameModel.class, model.getLogFrameModel().getId());
+					ModelUtil.validateLogFrameModelChange(em, mapper, changes, logFrameModel);
 				} else {
 					logFrameModel = new LogFrameModel();
 					logFrameModel.setProjectModel(model);
@@ -432,6 +451,14 @@
 
 	}
 
+	private void updateMaintenanceScheduling(ProjectModel projectModel) throws CommandException {
+		try {
+			maintenanceScheduler.updateMaintenanceScheduling(projectModel);
+		} catch (SchedulerException e) {
+			throw new CommandException(e);
+		}
+	}
+
 	public static LogFrameModel createDefaultLogFrameModel(ProjectModel model) {
 		LogFrameModel logFrameModel = new LogFrameModel();
 		logFrameModel.setName("Default log frame");
Index: src/main/java/org/sigmah/client/page/admin/model/common/ProjectModelForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/ProjectModelForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/ProjectModelForm.java	(working copy)
@@ -1,6 +1,7 @@
 package org.sigmah.client.page.admin.model.common;
 
 import java.util.HashMap;
+
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.i18n.UIConstants;
@@ -27,14 +28,10 @@
 import com.extjs.gxt.ui.client.widget.form.TextField;
 import com.extjs.gxt.ui.client.widget.layout.FormLayout;
 import com.google.gwt.core.client.GWT;
-import com.google.gwt.event.dom.client.ClickEvent;
-import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 import com.google.gwt.user.client.ui.Grid;
-import com.google.gwt.user.client.ui.Label;
 
 public class ProjectModelForm extends FormPanel {
-	
 	private final Dispatcher dispatcher;
 	private final TextField<String> nameField;
 	private final Grid ngoGrid;
Index: src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java	(working copy)
@@ -545,8 +545,7 @@
 		 */
 
 		// If the element are read only.
-		final boolean readOnly = isEndedPhase(phaseDTO)
-		                || !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
+		final boolean readOnly = isReadOnly(phaseDTO);
 
 		// Masks the main panel.
 		int count = 0;
@@ -598,10 +597,12 @@
 
 			// For each constraint in the current layout group.
 			for (final LayoutConstraintDTO constraintDTO : groupDTO.getLayoutConstraintsDTO()) {
-
 				// Gets the element managed by this constraint.
 				final FlexibleElementDTO elementDTO = constraintDTO.getFlexibleElementDTO();
-
+				if (elementDTO.getDisabled() && !phaseDTO.isEnded()) {
+					unmask();
+					continue;
+				}
 				// --
 				// -- ELEMENT VALUE
 				// --
@@ -668,18 +669,15 @@
 
 						// Adds a value change handler to this element.
 						elementDTO.addValueHandler(new ValueHandlerImpl());
+						elementDTO.setConstraint(constraintDTO);
+						elementDTO.setGroup(groupDTO);
 
 						// If this element id a required one.
-						if (elementDTO.getValidates()) {
+						if (elementDTO.getValidates() && !elementDTO.getDisabled()) {
 
 							// Adds a specific handler.
 							elementDTO.addRequiredValueHandler(new RequiredValueHandlerImpl(elementDTO));
 
-							// Set the groupDTO into the element
-							elementDTO.setGroup(groupDTO);
-
-							elementDTO.setConstraint(constraintDTO);
-
 							// Adds the element to the tmp list for sorting
 							requiredElemetsList.add(elementDTO);
 
@@ -717,6 +715,12 @@
 
 	}
 
+	private boolean isReadOnly(final PhaseDTO phaseDTO) {
+		return isEndedPhase(phaseDTO)
+						|| projectPresenter.getCurrentProjectDTO().isUnderMaintenance()
+		                || !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
+	}
+
 	/**
 	 * Internal class handling the value changes of the flexible elements.
 	 */
@@ -779,7 +783,8 @@
 	private void refreshActionsToolbar() {
 
 		// If the current displayed phase is ended, the toolbar is hidden.
-		if (isEndedPhase(projectPresenter.getCurrentDisplayedPhaseDTO())) {
+		final PhaseDTO currentDisplayedPhaseDTO = projectPresenter.getCurrentDisplayedPhaseDTO();
+		if (isEndedPhase(currentDisplayedPhaseDTO)) {
 			view.flushToolbar();
 			return;
 		}
@@ -790,7 +795,7 @@
 		// -- ACTION: ACTIVATE OR CLOSE PHASE
 		// --
 
-		boolean enabled = activePhaseRequiredElements.isTrue();
+		boolean enabled = !isReadOnly(currentDisplayedPhaseDTO) && activePhaseRequiredElements.isTrue();
 		view.getButtonActivatePhase().setEnabled(enabled);
 		view.getButtonActivatePhase().removeAllListeners();
 
@@ -820,7 +825,7 @@
 			final Menu successorsMenu = new Menu();
 
 			final List<PhaseDTO> successors = projectPresenter.getCurrentProjectDTO().getSuccessors(
-			                projectPresenter.getCurrentDisplayedPhaseDTO());
+			                currentDisplayedPhaseDTO);
 
 			// If the current displayed phase hasn't successor, the close action
 			// ends the project.
@@ -877,7 +882,7 @@
 
 				@Override
 				public void handleEvent(ButtonEvent be) {
-					activatePhase(projectPresenter.getCurrentDisplayedPhaseDTO(), false);
+					activatePhase(currentDisplayedPhaseDTO, false);
 				}
 			});
 		}
@@ -891,7 +896,7 @@
 		view.getButtonSavePhase().removeAllListeners();
 
 		// If the phase isn't ended, adds the save action.
-		if (!isEndedPhase(projectPresenter.getCurrentDisplayedPhaseDTO())) {
+		if (!isEndedPhase(currentDisplayedPhaseDTO)) {
 			view.getButtonSavePhase().addListener(Events.OnClick, new SaveListener());
 		}
 
@@ -902,9 +907,9 @@
 		// Check guide availability.
 		view.getButtonPhaseGuide().removeAllListeners();
 
-		if (projectPresenter.getCurrentDisplayedPhaseDTO().getPhaseModelDTO().isGuideAvailable()) {
+		if (currentDisplayedPhaseDTO.getPhaseModelDTO().isGuideAvailable()) {
 
-			final String guide = projectPresenter.getCurrentDisplayedPhaseDTO().getPhaseModelDTO().getGuide();
+			final String guide = currentDisplayedPhaseDTO.getPhaseModelDTO().getGuide();
 
 			view.getButtonPhaseGuide().setEnabled(true);
 			view.getButtonPhaseGuide().setTitle(guide);
Index: src/main/java/org/sigmah/shared/domain/ProjectModel.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/ProjectModel.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/ProjectModel.java	(working copy)
@@ -35,7 +35,7 @@
 @Table(name = "project_model")
 @org.hibernate.annotations.FilterDefs({ @org.hibernate.annotations.FilterDef(name = "hideDeleted") })
 @org.hibernate.annotations.Filters({ @org.hibernate.annotations.Filter(name = "hideDeleted", condition = "date_deleted is null") })
-public class ProjectModel extends BaseModelData implements Serializable {
+public class ProjectModel extends BaseModelData implements Serializable, Model {
 
     private static final long serialVersionUID = -1266259112071917788L;
 
@@ -49,6 +49,7 @@
     private ProjectModelStatus status;
     private LogFrameModel logFrameModel;
     private Date dateDeleted;
+    private Date dateMaintenance;
 
     @Id
     @GeneratedValue(strategy = GenerationType.AUTO)
@@ -158,6 +159,20 @@
     }
 
     /**
+     * 
+     * @return The date on which this project model maintenance started.
+     */
+    @Column(name="date_maintenance")
+    @Temporal(value = TemporalType.TIMESTAMP)
+    public Date getDateMaintenance() {
+		return dateMaintenance;
+	}
+    
+    public void setDateMaintenance(Date dateMaintenance) {
+		this.dateMaintenance = dateMaintenance;
+	}
+
+    /**
      * Marks this database as deleted. (Though the row is not removed from the
      * database)
      */
Index: src/main/java/org/sigmah/client/icon/IconImageBundle.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/IconImageBundle.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/icon/IconImageBundle.java	(working copy)
@@ -203,4 +203,8 @@
     AbstractImagePrototype ods();
     
     AbstractImagePrototype csv();
+    
+    AbstractImagePrototype disable();
+    
+    AbstractImagePrototype maintenance();
 }
Index: src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java	(working copy)
@@ -6,6 +6,7 @@
 package org.sigmah.shared.dto.element;
 
 import java.util.ArrayList;
+import java.util.LinkedList;
 import java.util.List;
 
 import org.sigmah.client.i18n.I18N;
@@ -90,7 +91,6 @@
 
     @Override
     protected Component getComponent(ValueResult valueResult, boolean enabled) {
-
         // Question's component.
         final Component component;
 
@@ -101,6 +101,8 @@
         // Creates the listener of selection changes.
         final ComboBoxSelectionListener listener = new ComboBoxSelectionListener();
 
+        List<QuestionChoiceElementDTO> selectedChoices = new LinkedList<QuestionChoiceElementDTO>();
+        
         // Single selection case.
         if (!Boolean.TRUE.equals(getIsMultiple())) {
 
@@ -130,11 +132,12 @@
 
             if (valueResult != null && valueResult.isValueDefined()) {
 
-                final String idChoice = (String) valueResult.getValueObject();
+                final String idChoice = valueResult.getValueObject();
 
                 for (QuestionChoiceElementDTO choiceDTO : getChoicesDTO()) {
                     if (idChoice.equals(String.valueOf(choiceDTO.getId()))) {
                         comboBox.setValue(choiceDTO);
+                        selectedChoices.add(choiceDTO);
                         break;
                     }
                 }
@@ -198,22 +201,19 @@
 
             // Selects the already selected choices.
             if (valueResult != null && valueResult.isValueDefined()) {
-
                 final List<Long> selectedChoicesId = ValueResultUtils.splitValuesAsLong(valueResult.getValueObject());
-                final ArrayList<QuestionChoiceElementDTO> selectedChoices = new ArrayList<QuestionChoiceElementDTO>();
-
-                for (Long id : selectedChoicesId) {
-                    for (QuestionChoiceElementDTO choiceDTO : getChoicesDTO()) {
-                        if (id == choiceDTO.getId()) {
-                            selectedChoices.add(choiceDTO);
-                        }
+                for (QuestionChoiceElementDTO choiceDTO : getChoicesDTO()) {
+                    if (selectedChoicesId.contains(new Long(choiceDTO.getId()))) {
+                        selectedChoices.add(choiceDTO);
                     }
                 }
-
-                sm.select(selectedChoices, false);
             }
 
-            multipleQuestion.getSelectionModel().setLocked(!enabled);
+//            sm.setLocked(!enabled);
+            multipleQuestion.setHideHeaders(!enabled);
+            multipleQuestion.setEnabled(enabled);
+
+            sm.setSelection(selectedChoices);
 
             component = cp;
         }
@@ -231,6 +231,13 @@
         } else if (getQualityCriterionDTO() != null) {
             component.setToolTip(I18N.MESSAGES.flexibleElementQuestionQuality(getQualityCriterionDTO().getInfo()));
         }
+        
+        // Remove disabled options (not selected)
+        for (QuestionChoiceElementDTO choiceDTO : getChoicesDTO()) {
+        	if (choiceDTO.getDisabled() && !selectedChoices.contains(choiceDTO)) {
+        		store.remove(choiceDTO);
+        	}
+        }
 
         return component;
     }
Index: src/main/java/org/sigmah/shared/exception/LogFrameMaxPerGroupValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerGroupValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerGroupValidationException.java	(working copy)
@@ -0,0 +1,31 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.shared.domain.logframe.LogFrameGroupType;
+
+public class LogFrameMaxPerGroupValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = 4430708836380754957L;
+
+	private Long limit;
+	private String projectName;
+	private LogFrameGroupType type;
+	
+	public LogFrameMaxPerGroupValidationException() {
+	}
+	
+	public LogFrameMaxPerGroupValidationException(String projectName, Long limit, LogFrameGroupType type) {
+		this.projectName = projectName;
+		this.limit = limit;
+		this.type = type;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelMaxPerGroupValidation(LogFrameGroupType.getShorteningName(type), limit.toString(), projectName);
+	}
+}
Index: src/main/java/org/sigmah/shared/domain/element/QuestionChoiceElement.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/element/QuestionChoiceElement.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/element/QuestionChoiceElement.java	(working copy)
@@ -29,6 +29,7 @@
     private String label;
     private int sortOrder;
     private CategoryElement categoryElement;
+	private Boolean disabled = false;
 
     @Id
     @GeneratedValue(strategy = GenerationType.AUTO)
@@ -60,6 +61,15 @@
         this.label = label;
     }
 
+    @Column(name = "is_disabled", nullable = false)
+    public Boolean getDisabled() {
+        return disabled;
+    }
+
+    public void setDisabled(Boolean disabled) {
+        this.disabled = disabled;
+    }
+
     @Column(name = "sort_order", nullable = true)
     public int getSortOrder() {
         return sortOrder;
Index: src/main/java/org/sigmah/client/page/admin/model/common/ModelView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/ModelView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/ModelView.java	(working copy)
@@ -13,8 +13,8 @@
 
 	public void setProjectModel(ProjectModelDTO model) {
 		this.projectModel = model;
-		if(projectModel != null && ProjectModelStatus.DRAFT.equals(projectModel.getStatus()))
-			enableToolBar();
+		if(projectModel != null)
+			enableToolBar(projectModel.getStatus());
 	}
 
 
@@ -24,8 +24,8 @@
 	
 	public void setOrgUnitModel(OrgUnitModelDTO model) {
 		this.orgUnitModel = model;
-		if(orgUnitModel != null && ProjectModelStatus.DRAFT.equals(orgUnitModel.getStatus()))
-			enableToolBar();
+		if(orgUnitModel != null)
+			enableToolBar(orgUnitModel.getStatus());
 	}
 
 
@@ -33,7 +33,7 @@
 		return orgUnitModel;
 	}
 	
-	public abstract void enableToolBar();
+	public abstract void enableToolBar(ProjectModelStatus projectModelStatus);
 	
 	public void refreshProjectModel(ProjectModelDTO model) {
 		this.projectModel = model;
Index: src/main/java/org/sigmah/shared/exception/LogFrameMaxPerFrameValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerFrameValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxPerFrameValidationException.java	(working copy)
@@ -0,0 +1,31 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.shared.domain.logframe.LogFrameGroupType;
+
+public class LogFrameMaxPerFrameValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = 4430708836380754957L;
+
+	private Long limit;
+	private String projectName;
+	private LogFrameGroupType type;
+	
+	public LogFrameMaxPerFrameValidationException() {
+	}
+	
+	public LogFrameMaxPerFrameValidationException(String projectName, Long limit, LogFrameGroupType type) {
+		this.projectName = projectName;
+		this.limit = limit;
+		this.type = type;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelMaxPerFrameValidation(LogFrameGroupType.getShorteningName(type), limit.toString(), projectName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsActionListener.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsActionListener.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminLayoutGroupsActionListener.java	(working copy)
@@ -0,0 +1,94 @@
+package org.sigmah.client.page.admin.model.common.element;
+
+import java.util.ArrayList;
+import java.util.List;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.admin.model.common.element.AdminLayoutGroupsPresenter.View;
+import org.sigmah.client.page.common.grid.ConfirmCallback;
+import org.sigmah.client.page.common.toolbar.ActionListener;
+import org.sigmah.client.page.common.toolbar.UIActions;
+import org.sigmah.client.util.Notification;
+import org.sigmah.shared.command.DeleteLayoutGroups;
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
+import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+
+public class AdminLayoutGroupsActionListener implements ActionListener {
+	private final View view;
+	private final Dispatcher dispatcher;
+
+	public AdminLayoutGroupsActionListener(View view, Dispatcher dispatcher) {
+		this.view = view;
+		this.dispatcher = dispatcher;
+	}
+
+	@Override
+	public void onUIAction(String actionId) {
+		if (UIActions.delete.equals(actionId)) {
+			view.confirmDeleteSelected(new ConfirmCallback() {
+				public void confirmed() {
+					onDeleteConfirmed(view.getDeleteSelection());
+				}
+			});
+		} else if (UIActions.add.equals(actionId)) {
+			onAdd();
+		}
+	}
+
+	protected void onDeleteConfirmed(final List<LayoutGroupDTO> selection) {
+		List<Integer> ids = new ArrayList<Integer>();
+
+		String names = "";
+		String notDeletableNames = "";
+
+		String nameSeparator = "";
+		String notDeletableSeparator = "";
+
+		for (LayoutGroupDTO group : selection) {
+			ids.add(group.getId());
+			names += nameSeparator + group.getTitle();
+			nameSeparator = ", ";
+			
+			if (!view.getAssociatedFields(group).isEmpty() || !group.getLayoutConstraintsDTO().isEmpty()) {
+				notDeletableNames += notDeletableSeparator + group.getTitle();
+				notDeletableSeparator = ", ";
+			}
+		}
+
+		if ("".equals(notDeletableNames)) {
+			final String toDelete = names;
+			final DeleteLayoutGroups delete = new DeleteLayoutGroups(selection);
+			dispatcher.execute(delete, null, new AsyncCallback<VoidResult>() {
+				@Override
+				public void onFailure(Throwable caught) {
+					MessageBox.alert(I18N.CONSTANTS.error(),
+							I18N.MESSAGES.entityDeleteEventError(toDelete),
+							null);
+				}
+
+				@Override
+				public void onSuccess(VoidResult result) {
+					// Update view
+					for (LayoutGroupDTO s : selection) {
+						view.getGroupsStore().remove(s);
+					}
+
+					// Feedback
+					Notification.show(I18N.CONSTANTS.infoConfirmation(),
+							I18N.CONSTANTS.adminDeleteLayoutGroupsConfirm());
+				}
+			});
+		} else {
+			MessageBox.alert(I18N.CONSTANTS.error(), I18N.MESSAGES
+					.adminErrorDeleteNotEmptyGroup(notDeletableNames), null);
+		}
+	}
+
+	protected void onAdd() {
+		view.showNewGroupForm(null, false);
+	}
+}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DisableFlexibleElementsHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DisableFlexibleElementsHandler.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DisableFlexibleElementsHandler.java	(working copy)
@@ -0,0 +1,42 @@
+package org.sigmah.server.endpoint.gwtrpc.handler;
+
+import javax.persistence.EntityManager;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.sigmah.shared.command.DisableFlexibleElements;
+import org.sigmah.shared.command.handler.CommandHandler;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.dao.UserDAO;
+import org.sigmah.shared.domain.User;
+import org.sigmah.shared.domain.element.FlexibleElement;
+import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.exception.CommandException;
+
+import com.google.inject.Inject;
+
+public class DisableFlexibleElementsHandler implements CommandHandler<DisableFlexibleElements> {
+	private static final Log log = LogFactory
+			.getLog(DisableFlexibleElementsHandler.class);
+
+	private EntityManager em;
+
+	@Inject
+	public DisableFlexibleElementsHandler(EntityManager em, UserDAO userDAO) {
+		this.em = em;
+	}
+
+	@Override
+	public CommandResult execute(DisableFlexibleElements cmd, User executiongUser) throws CommandException {
+		if (cmd.getFlexibleElements() != null) {
+			for (FlexibleElementDTO flexibleElementDTO : cmd.getFlexibleElements()) {
+				FlexibleElement flexibleElement = em.find(FlexibleElement.class, new Long(flexibleElementDTO.getId()));
+				flexibleElement.setDisabled(true);
+				em.merge(flexibleElement);
+				
+				log.debug("DisableFlexibleElementsHandler flexibleElement " + flexibleElementDTO.getId() + " name " + flexibleElementDTO.getLabel());
+			}
+		}
+		return null;
+	}
+}
Index: src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java	(working copy)
@@ -5,6 +5,7 @@
 package org.sigmah.shared.dto;
 
 import java.util.ArrayList;
+import java.util.Date;
 import java.util.HashMap;
 import java.util.List;
 
@@ -206,62 +207,71 @@
     	    	 	
 		return allElements;		      
     }
-    public List<FlexibleElementDTO> getAllElements(){
-    	List<FlexibleElementDTO> allElements = new ArrayList<FlexibleElementDTO>();
-    	List<FlexibleElementDTO> bannerElements = new ArrayList<FlexibleElementDTO>();
-    	
-    	//banner
-		if(this.getProjectBannerDTO().getLayoutDTO()!=null){
-			for(LayoutGroupDTO lg : getProjectBannerDTO().getLayoutDTO().getLayoutGroupsDTO()){
-				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-					FlexibleElementDTO f = lc.getFlexibleElementDTO();
-					f.setBannerConstraint(lc);
-					bannerElements.add(f);			
-				}
+
+	public List<LayoutGroupDTO> getAllLayoutGroups() {
+		List<LayoutGroupDTO> allLayoutGroups = new ArrayList<LayoutGroupDTO>();
+
+		// phases
+		for (PhaseModelDTO phaseDTO : getPhaseModelsDTO()) {
+			for (LayoutGroupDTO group : phaseDTO.getLayoutDTO().getLayoutGroupsDTO()) {
+				group.setContainerModel(phaseDTO);
+				allLayoutGroups.add(group);
 			}
 		}
 		
-    	//phases
-		for(PhaseModelDTO phaseDTO : getPhaseModelsDTO()){
-			for(LayoutGroupDTO lg : phaseDTO.getLayoutDTO().getLayoutGroupsDTO()){
-				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-					FlexibleElementDTO f = lc.getFlexibleElementDTO();
-					f.setGroup(lg);
-					f.setConstraint(lc);
-					f.setContainerModel(phaseDTO);
-					for(FlexibleElementDTO bf : bannerElements){
-						if(f.getId()== bf.getId()){
-							f.setBannerConstraint(bf.getBannerConstraint());
-						}
-					}				
-					allElements.add(f);
-				}
-			}
-		}
-		//Project Details
+		// Project Details
 		ProjectDetailsDTO p = getProjectDetailsDTO();
 		p.setName();
 		setProjectDetailsDTO(p);
-		if(getProjectDetailsDTO().getLayoutDTO()!=null){
-			for(LayoutGroupDTO lg : getProjectDetailsDTO().getLayoutDTO().getLayoutGroupsDTO()){
-				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-					FlexibleElementDTO f = lc.getFlexibleElementDTO();
-					f.setGroup(lg);
-					f.setConstraint(lc);
-					f.setContainerModel(getProjectDetailsDTO());
-					for(FlexibleElementDTO bf : bannerElements){
-						if(f.getId()== bf.getId()){
-							f.setBannerConstraint(bf.getBannerConstraint());
-						}
-					}
-					allElements.add(f);					
-				}
+
+		if (getProjectDetailsDTO().getLayoutDTO() != null) {
+			for (LayoutGroupDTO group : getProjectDetailsDTO().getLayoutDTO()
+					.getLayoutGroupsDTO()) {
+				group.setContainerModel(getProjectDetailsDTO());
+				allLayoutGroups.add(group);
 			}
 		}
+
+		return allLayoutGroups;
+	}
+   
+    public List<FlexibleElementDTO> getAllElements(){
+    	List<FlexibleElementDTO> allElements = new ArrayList<FlexibleElementDTO>();
+
+		// banner
+		List<FlexibleElementDTO> bannerElements = getBannerElements();
 		
+		// elements
+		for (LayoutGroupDTO lg : getAllLayoutGroups()) {
+			for (LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()) {
+				FlexibleElementDTO f = lc.getFlexibleElementDTO();
+				f.setGroup(lg);
+				f.setConstraint(lc);
+				for (FlexibleElementDTO bf : bannerElements) {
+					if (f.getId() == bf.getId()) {
+						f.setBannerConstraint(bf.getBannerConstraint());
+					}
+				}
+				allElements.add(f);
+			}
+    	}
 		
 		return allElements;
     }
+
+	private List<FlexibleElementDTO> getBannerElements() {
+		List<FlexibleElementDTO> bannerElements = new ArrayList<FlexibleElementDTO>();
+		if(this.getProjectBannerDTO().getLayoutDTO()!=null){
+			for(LayoutGroupDTO lg : getProjectBannerDTO().getLayoutDTO().getLayoutGroupsDTO()){
+				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
+					FlexibleElementDTO f = lc.getFlexibleElementDTO();
+					f.setBannerConstraint(lc);
+					bannerElements.add(f);			
+				}
+			}
+		}
+		return bannerElements;
+	}
     /**
      * Gets all the flexible elements instances of the given class in this model
      * (phases and details page). The banner is ignored cause the elements in it
@@ -325,4 +335,16 @@
 
         return localizedElements.get(clazz);
     }
+
+	public Date getDateMaintenance() {
+		return get("dateMaintenance");
+	}
+	
+	public void setDateMaintenance(Date date) {
+		set("dateMaintenance", date);
+	}
+
+	public boolean isUnderMaintenance() {
+		return getStatus() == ProjectModelStatus.UNDER_MAINTENANCE;
+	}
 }
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementActionListener.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementActionListener.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementActionListener.java	(working copy)
@@ -5,12 +5,13 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.admin.model.common.element.AdminFlexibleElementsPresenter.View;
 import org.sigmah.client.page.common.grid.ConfirmCallback;
 import org.sigmah.client.page.common.toolbar.ActionListener;
 import org.sigmah.client.page.common.toolbar.UIActions;
-import org.sigmah.client.page.admin.model.common.element.AdminFlexibleElementsPresenter.View;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.DeleteFlexibleElements;
+import org.sigmah.shared.command.DisableFlexibleElements;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.domain.element.DefaultFlexibleElementType;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
@@ -33,15 +34,70 @@
 		if (UIActions.delete.equals(actionId)) {
             view.confirmDeleteSelected(new ConfirmCallback() {
                 public void confirmed() {
-                    onDeleteConfirmed(view.getDeleteSelection());
+                    onDeleteConfirmed(view.getSelection());
                 }
             });
-        }else if (UIActions.add.equals(actionId)) {
+        } else if (UIActions.disable.equals(actionId)) {
+            view.confirmDisableSelected(new ConfirmCallback() {
+                public void confirmed() {
+                    onDisableConfirmed(view.getSelection());
+                }
+            });
+        } else if (UIActions.add.equals(actionId)) {
             onAdd();
-        }else if(UIActions.edit.equals(actionId)) {
-            onAddGroup();
         }
+	}
+	
+	protected void onDisableConfirmed(final List<FlexibleElementDTO> selection) {
+		List<Integer> ids = new ArrayList<Integer>();
 		
+		String names = "";
+		String notDisablableNames = "";
+		
+		for (FlexibleElementDTO s : selection) {
+			ids.add(s.getId());
+			
+			names = s.getLabel() + ", " + names;
+			
+			if (s.getAmendable() || s instanceof DefaultFlexibleElementDTO) {
+				if (s instanceof DefaultFlexibleElementDTO) {
+					notDisablableNames += DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO)s).getType()) + ", ";
+				} else {
+					notDisablableNames += s.getLabel() + ", ";
+				}
+			}
+		}
+		
+		if ("".equals(notDisablableNames)) {
+			final String toDelete = names;
+			
+	        dispatcher.execute(new DisableFlexibleElements(selection), null, new AsyncCallback<VoidResult>() {
+	            @Override
+	            public void onFailure(Throwable caught) {
+	                MessageBox.alert(I18N.CONSTANTS.error(), I18N.MESSAGES.flexibleElementDisableError(toDelete), null);
+	            }
+
+	            @Override
+	            public void onSuccess(VoidResult result) {
+	            	// update view   
+	            	for (FlexibleElementDTO s : selection) {
+						s.setDisabled(true);
+						
+	            		view.getFieldsStore().update(s);
+	            	}
+	            	
+	            	// feedback 
+	            	Notification.show(
+								I18N.CONSTANTS
+										.infoConfirmation(),
+								I18N.CONSTANTS
+										 .adminFlexibleDisableFlexibleElementsConfirm());
+	            }
+	        });
+		} else {
+			notDisablableNames = notDisablableNames.substring(0, notDisablableNames.lastIndexOf(", "));
+			MessageBox.alert(I18N.CONSTANTS.error(), I18N.MESSAGES.adminErrorDisableDefaultOrAmendableFlexible(notDisablableNames), null);
+		}
 	}
 	
 	protected void onDeleteConfirmed(final List<FlexibleElementDTO> selection) {
@@ -87,13 +143,9 @@
 			notDeletableNames = notDeletableNames.substring(0, notDeletableNames.lastIndexOf(", "));
 			MessageBox.alert(I18N.CONSTANTS.error(), I18N.MESSAGES.adminErrorDeleteDefaultFlexible(notDeletableNames), null);
 		}
-	}	
+	}
 	
 	private void onAdd() {	
 		view.showNewFlexibleElementForm(null,false);		
 	}
-	
-	private void onAddGroup() {	
-		view.showNewGroupForm(null, false);
-	}
 }
Index: src/main/java/org/sigmah/shared/exception/NewCompulsoryElementValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/NewCompulsoryElementValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/NewCompulsoryElementValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class NewCompulsoryElementValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -7617681774897420609L;
+	
+	private String projectName;
+	private String phaseName;
+	
+	public NewCompulsoryElementValidationException() {
+	}
+	
+	public NewCompulsoryElementValidationException(String projectName, String phaseName) {
+		this.projectName = projectName;
+		this.phaseName = phaseName;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.flexibleElementCompulsoryNewElementValidation(phaseName, projectName);
+	}
+}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DeleteLayoutGroupsHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DeleteLayoutGroupsHandler.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DeleteLayoutGroupsHandler.java	(working copy)
@@ -0,0 +1,39 @@
+package org.sigmah.server.endpoint.gwtrpc.handler;
+
+import javax.persistence.EntityManager;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.sigmah.shared.command.DeleteLayoutGroups;
+import org.sigmah.shared.command.handler.CommandHandler;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.dao.UserDAO;
+import org.sigmah.shared.domain.User;
+import org.sigmah.shared.domain.layout.LayoutGroup;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+import org.sigmah.shared.exception.CommandException;
+
+import com.google.inject.Inject;
+
+public class DeleteLayoutGroupsHandler implements CommandHandler<DeleteLayoutGroups>{
+	private static final Log log = LogFactory.getLog(DeleteLayoutGroupsHandler.class);
+	
+	private EntityManager em;
+
+    @Inject
+    public DeleteLayoutGroupsHandler(EntityManager em, UserDAO userDAO) {
+        this.em = em;
+    }
+
+	@Override
+	public CommandResult execute(DeleteLayoutGroups cmd, User executiongUser) throws CommandException {
+		if (cmd.getLayoutGroups() != null){
+			for (LayoutGroupDTO layoutGroupDTO : cmd.getLayoutGroups()) {
+				LayoutGroup layoutGroup = em.find(LayoutGroup.class, new Integer(layoutGroupDTO.getId()).longValue());
+				em.remove(layoutGroup);
+				log.debug("DeleteLayoutGroup " + layoutGroupDTO.getId() + " name" + layoutGroupDTO.getTitle());
+			}			
+		}
+		return null;
+	}
+}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectReportsHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectReportsHandler.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectReportsHandler.java	(working copy)
@@ -5,14 +5,14 @@
 
 package org.sigmah.server.endpoint.gwtrpc.handler;
 
-import com.google.inject.Inject;
 import java.util.ArrayList;
 import java.util.List;
-import javax.persistence.Query;
+
 import javax.persistence.EntityManager;
 import javax.persistence.NoResultException;
+import javax.persistence.Query;
+
 import org.sigmah.shared.command.GetProjectReports;
-import org.sigmah.shared.dto.report.ReportReference;
 import org.sigmah.shared.command.handler.CommandHandler;
 import org.sigmah.shared.command.result.CommandResult;
 import org.sigmah.shared.command.result.ProjectReportListResult;
@@ -21,9 +21,11 @@
 import org.sigmah.shared.domain.profile.PrivacyGroupPermission;
 import org.sigmah.shared.domain.profile.Profile;
 import org.sigmah.shared.domain.report.ProjectReport;
-import org.sigmah.shared.domain.value.Value;
+import org.sigmah.shared.dto.report.ReportReference;
 import org.sigmah.shared.exception.CommandException;
 
+import com.google.inject.Inject;
+
 /**
  *
  * @author Raphaël Calabro (rcalabro@ideia.fr)
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/LayoutGroupSigmahForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/LayoutGroupSigmahForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/LayoutGroupSigmahForm.java	(working copy)
@@ -7,6 +7,22 @@
 
 import java.util.HashMap;
 
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.i18n.UIConstants;
+import org.sigmah.client.page.admin.AdminUtil;
+import org.sigmah.client.util.Notification;
+import org.sigmah.shared.command.CreateEntity;
+import org.sigmah.shared.command.result.CreateResult;
+import org.sigmah.shared.domain.ProjectModelStatus;
+import org.sigmah.shared.dto.OrgUnitDetailsDTO;
+import org.sigmah.shared.dto.OrgUnitModelDTO;
+import org.sigmah.shared.dto.PhaseModelDTO;
+import org.sigmah.shared.dto.ProjectDetailsDTO;
+import org.sigmah.shared.dto.ProjectModelDTO;
+import org.sigmah.shared.dto.layout.LayoutDTO;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
 import com.extjs.gxt.ui.client.data.BaseModelData;
 import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
@@ -16,28 +32,13 @@
 import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.form.ComboBox;
+import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
 import com.extjs.gxt.ui.client.widget.form.FormPanel;
 import com.extjs.gxt.ui.client.widget.form.SimpleComboBox;
 import com.extjs.gxt.ui.client.widget.form.TextField;
-import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
 import com.extjs.gxt.ui.client.widget.layout.FormLayout;
 import com.google.gwt.core.client.GWT;
 import com.google.gwt.user.client.rpc.AsyncCallback;
-import org.sigmah.client.i18n.I18N;
-import org.sigmah.client.i18n.UIConstants;
-import org.sigmah.client.page.admin.AdminUtil;
-import org.sigmah.client.util.Notification;
-import org.sigmah.client.dispatch.Dispatcher;
-import org.sigmah.shared.command.CreateEntity;
-import org.sigmah.shared.command.result.CreateResult;
-import org.sigmah.shared.dto.OrgUnitDetailsDTO;
-import org.sigmah.shared.dto.OrgUnitModelDTO;
-import org.sigmah.shared.dto.PhaseModelDTO;
-import org.sigmah.shared.dto.ProjectDetailsDTO;
-import org.sigmah.shared.dto.ProjectModelDTO;
-import org.sigmah.shared.dto.element.FlexibleElementDTO;
-import org.sigmah.shared.dto.layout.LayoutDTO;
-import org.sigmah.shared.dto.layout.LayoutGroupDTO;
 
 /**
  * Create user form.
@@ -50,7 +51,7 @@
 	private final TextField<String> nameField;
 	private final ComboBox<BaseModelData> containerList;
 	private final SimpleComboBox<Integer> rowField;
-	private LayoutGroupDTO layoutGroupToUpdate;
+	protected LayoutGroupDTO layoutGroupToUpdate;
 	private ProjectModelDTO projectModelToUpdate;
 	private OrgUnitModelDTO orgUnitModelToUpdate;
 	
@@ -58,26 +59,24 @@
 	private HashMap<String, Object> newPrivacyGroupProperties;
 	
 	private final static int LABEL_WIDTH = 90;
-	
-	public LayoutGroupSigmahForm(Dispatcher dispatcher, 
-			final AsyncCallback<CreateResult> callback, FlexibleElementDTO fxToUpdate, ProjectModelDTO projectModelToUpdate
-			, OrgUnitModelDTO orgUnitModelToUpdate) {
+
+	public LayoutGroupSigmahForm(Dispatcher dispatcher,
+			final AsyncCallback<CreateResult> callback,
+			LayoutGroupDTO layoutGroupToUpdate,
+			ProjectModelDTO projectModelToUpdate,
+			OrgUnitModelDTO orgUnitModelToUpdate) {
 		
 		this.dispatcher = dispatcher;
 		this.projectModelToUpdate = projectModelToUpdate;
 		this.orgUnitModelToUpdate = orgUnitModelToUpdate;
+		this.layoutGroupToUpdate = layoutGroupToUpdate;
 		
 		UIConstants constants = GWT.create(UIConstants.class);
 		
-		if(fxToUpdate != null){
-			layoutGroupToUpdate = fxToUpdate.getGroup();
-		}
-			
 		FormLayout layout = new FormLayout();
 		layout.setLabelWidth(LABEL_WIDTH);
 		setLayout(layout);
 		
-		
 		nameField = new TextField<String>();
 		nameField.setFieldLabel(constants.adminPrivacyGroupsName());
 		nameField.setAllowBlank(false);
@@ -93,14 +92,14 @@
 		containerList.setFieldLabel(I18N.CONSTANTS.adminFlexibleContainer());
 		containerList.setAllowBlank(false);
 		containerList.setTriggerAction(TriggerAction.ALL);		
-		
+		containerList.setVisible(!isUpdateUnderMaintenance());
 		
-		if(projectModelToUpdate != null){
+		if (projectModelToUpdate != null) {
 			containersStore.add(projectModelToUpdate.getProjectDetailsDTO());
 			for(PhaseModelDTO p : projectModelToUpdate.getPhaseModelsDTO()){
 				containersStore.add(p);
 			}
-		}else if(orgUnitModelToUpdate != null){
+		} else if(orgUnitModelToUpdate != null){
 			containersStore.add(orgUnitModelToUpdate.getDetails());
 		}
 		
@@ -112,26 +111,24 @@
 		rowField.setTriggerAction(TriggerAction.ALL);
 		rowField.setFieldLabel(constants.adminFlexibleGroupVPosition());
 		
-		
-		if(fxToUpdate != null){
-			containerList.setValue(fxToUpdate.getContainerModel());
-			if(fxToUpdate.getContainerModel() != null){
+		if(layoutGroupToUpdate != null){
+			containerList.setValue(layoutGroupToUpdate.getContainerModel());
+			if(layoutGroupToUpdate.getContainerModel() != null){
 				LayoutDTO container = new LayoutDTO();
-				if(fxToUpdate.getContainerModel() instanceof ProjectDetailsDTO){
+				if(layoutGroupToUpdate.getContainerModel() instanceof ProjectDetailsDTO){
 					 container = ((ProjectDetailsDTO)containerList.getValue()).getLayoutDTO();
-				}else if(fxToUpdate.getContainerModel() instanceof PhaseModelDTO){
+				}else if(layoutGroupToUpdate.getContainerModel() instanceof PhaseModelDTO){
 					 container = ((PhaseModelDTO)containerList.getValue()).getLayoutDTO();
-				}else if(fxToUpdate.getContainerModel() instanceof OrgUnitDetailsDTO){
+				}else if(layoutGroupToUpdate.getContainerModel() instanceof OrgUnitDetailsDTO){
 					 container = ((OrgUnitDetailsDTO)containerList.getValue()).getLayout();
 				}
-				if(container != null){
+				if (container != null){
 					rowField.removeAll();
 					 for(int i=0; i<=container.getRowsCount();i++){						 						 
 						 rowField.add(i);
 					 }
 					 rowField.setSimpleValue(layoutGroupToUpdate.getRow());
 				}
-				 
 			 }
 		}
 		
@@ -171,6 +168,10 @@
         });
         add(createButton);
   	}
+	
+	public LayoutGroupDTO getLayoutGroupToUpdate() {
+		return layoutGroupToUpdate;
+	}
 
 	private void createLayoutGroup(final AsyncCallback<CreateResult> callback) {
 		 if (!this.isValid()) {
@@ -202,7 +203,7 @@
 		 HashMap<String, Object> newGroupProperties = new HashMap<String, Object>();
 		 
 		 LayoutGroupDTO layoutGroupDTO = new LayoutGroupDTO();
-		 if(layoutGroupToUpdate != null)
+		 if(isUpdateMode())
 			 layoutGroupDTO = layoutGroupToUpdate;
 		 
 		 layoutGroupDTO.setTitle(name);
@@ -245,4 +246,25 @@
 	public HashMap<String, Object> getPrivacyGroupsProperties(){
 		return newPrivacyGroupProperties;
 	}
+
+	private boolean isUpdateMode() {
+		return layoutGroupToUpdate != null;
+	}
+
+	private boolean isUnderMaintenance() {
+		return getModelStatus().equals(ProjectModelStatus.UNDER_MAINTENANCE);
+	}
+
+	private boolean isUpdateUnderMaintenance() {
+		return isUpdateMode() && isUnderMaintenance();
+	}
+
+	private ProjectModelStatus getModelStatus() {
+		if (projectModelToUpdate != null) {
+			return projectModelToUpdate.getStatus();
+		} else if(orgUnitModelToUpdate != null){
+			return orgUnitModelToUpdate.getStatus();
+		}
+		return null;
+	}
 }
Index: src/main/java/org/sigmah/shared/exception/CompulsoryElementValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/CompulsoryElementValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/CompulsoryElementValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class CompulsoryElementValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -2652887709490939676L;
+
+	private String projectName;
+	private String phaseName;
+	
+	public CompulsoryElementValidationException() {
+	}
+	
+	public CompulsoryElementValidationException(String projectName, String phaseName) {
+		this.projectName = projectName;
+		this.phaseName = phaseName;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.flexibleElementCompulsoryElementValidation(phaseName, projectName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/AdminUtil.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminUtil.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminUtil.java	(working copy)
@@ -53,6 +53,7 @@
 	public final static String PROP_FX_Q_QUALITY = "FlexibleElementQuestionQuality";
 	public final static String PROP_FX_Q_CATEGORY = "FlexibleElementQuestionCategory";
 	public final static String PROP_FX_Q_CHOICES = "FlexibleElementQuestionChoices";
+	public final static String PROP_FX_Q_CHOICES_STATUS = "FlexibleElementQuestionChoicesStatus";
 	public final static String PROP_FX_B_BUDGETSUBFIELDS = "FlexibleElementBudgetSubFields";	
 	public final static String PROP_FX_B_BUDGET_RATIO_DIVIDEND = "FlexibleElementBudgetRatioDividend";	
 	public final static String PROP_FX_B_BUDGET_RATIO_DIVISOR = "FlexibleElementBudgetRatioDivisor";	
@@ -98,6 +99,7 @@
 	public final static String PROP_PM_NAME = "ProjectModelName";
 	public final static String PROP_PM_USE = "ProjectModelUse";
 	public final static String PROP_PM_STATUS = "ProjectModelStatus";
+	public final static String PROP_PM_MAINTENANCE_DATE = "ProjectModelMaintenanceDate";
 	
 	public final static String PROP_OM_NAME = "OrgUnitModelName";
 	public final static String PROP_OM_STATUS = "OrgUnitModelStatus";
@@ -105,6 +107,7 @@
 	public final static String PROP_OM_HAS_BUDGET = "OrgUnitModelBudget";
 	public final static String PROP_OM_HAS_SITE = "OrgUnitModelSite";
 	public final static String PROP_OM_CONTAINS_PROJECTS = "OrgUnitModelContainProjects";
+	public final static String PROP_OM_MAINTENANCE_DATE = "OrgUnitModelMaintenanceDate";
 	
 	public final static String PROP_SCH_NAME = "importationSchemeName";
 	public final static String PROP_SCH_FILE_FORMAT = "importationSchemeFileFormat";
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsPresenter.java	(working copy)
@@ -15,48 +15,51 @@
 import com.extjs.gxt.ui.client.widget.Component;
 
 public class AdminFlexibleElementsPresenter implements AdminModelSubPresenter {
-
     private final View view;
+    
     private ProjectModelDTO projectModel;
     private OrgUnitModelDTO orgUnitModel;
 
     public static abstract class View extends ModelView {
-
         public abstract Component getMainPanel();
 
         public abstract ListStore<FlexibleElementDTO> getFieldsStore();
 
         public abstract void showNewFlexibleElementForm(FlexibleElementDTO element, boolean isUpdate);
 
-        public abstract void showNewGroupForm(final FlexibleElementDTO model, final boolean isUpdate);
-
-        public abstract List<FlexibleElementDTO> getDeleteSelection();
+        public abstract List<FlexibleElementDTO> getSelection();
 
         public abstract void confirmDeleteSelected(ConfirmCallback confirmCallback);
+        
+        public abstract void confirmDisableSelected(ConfirmCallback confirmCallback);
+        
+        public abstract void setGroupView(AdminLayoutGroupsPresenter.View view);
+
+		public abstract void refreshView();
     }
 
     public AdminFlexibleElementsPresenter(Dispatcher dispatcher) {
         this.view = new AdminFlexibleElementsView(dispatcher);
     }
+    
+    public View getAdminView() {
+    	return view;
+	}
 
     @Override
     public Component getView() {
-
         assert (projectModel != null || orgUnitModel != null);
         if (projectModel != null) {
             view.setProjectModel(projectModel);
             view.setOrgUnitModel(null);
             view.getFieldsStore().add(projectModel.getAllElements());
             view.getFieldsStore().commitChanges();
-            projectModel = view.getModel();
         } else if (orgUnitModel != null) {
             view.setOrgUnitModel(orgUnitModel);
             view.setProjectModel(null);
             view.getFieldsStore().add(orgUnitModel.getAllElements());
             view.getFieldsStore().commitChanges();
-            orgUnitModel = view.getModel();
         }
-
         return view.getMainPanel();
     }
 
@@ -86,9 +89,13 @@
         if (model instanceof ProjectModelDTO) {
             this.projectModel = (ProjectModelDTO) model;
             this.orgUnitModel = null;
+            this.view.setProjectModel(projectModel);
+            this.view.setOrgUnitModel(null);
         } else if (model instanceof OrgUnitModelDTO) {
             this.orgUnitModel = (OrgUnitModelDTO) model;
             this.projectModel = null;
+            this.view.setProjectModel(null);
+            this.view.setOrgUnitModel(orgUnitModel);
         }
     }
 
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(working copy)
@@ -10,9 +10,6 @@
 import org.sigmah.client.page.admin.model.common.element.AdminFlexibleElementsPresenter.View;
 import org.sigmah.client.page.common.grid.ConfirmCallback;
 import org.sigmah.client.page.common.toolbar.UIActions;
-import org.sigmah.shared.command.GetOrgUnitModel;
-import org.sigmah.shared.command.GetProjectModel;
-import org.sigmah.shared.command.result.CreateResult;
 import org.sigmah.shared.command.result.UpdateModelResult;
 import org.sigmah.shared.domain.ProjectModelStatus;
 import org.sigmah.shared.domain.element.DefaultFlexibleElementType;
@@ -32,6 +29,7 @@
 import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.extjs.gxt.ui.client.widget.Text;
 import com.extjs.gxt.ui.client.widget.Window;
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.form.CheckBox;
@@ -44,30 +42,28 @@
 import com.extjs.gxt.ui.client.widget.layout.FitLayout;
 import com.extjs.gxt.ui.client.widget.layout.VBoxLayoutData;
 import com.extjs.gxt.ui.client.widget.toolbar.ToolBar;
+import com.google.gwt.dom.client.Style.TextDecoration;
 import com.google.gwt.event.dom.client.ClickEvent;
 import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 import com.google.gwt.user.client.ui.Anchor;
 
 public class AdminFlexibleElementsView extends View {	
-	
 	private final ListStore<FlexibleElementDTO> fieldsStore;
 	
 	private final Dispatcher dispatcher;
 	private final Grid<FlexibleElementDTO> flexGrid;
-	private final List<LayoutGroupDTO> addedGroups = new ArrayList<LayoutGroupDTO>();
-	private final static Boolean alert = false;
+	private AdminLayoutGroupsPresenter.View groupView;
 
-	public AdminFlexibleElementsView(Dispatcher dispatcher){	
+	public AdminFlexibleElementsView(Dispatcher dispatcher) {
 		this.dispatcher = dispatcher;
-		this.fieldsStore = new ListStore<FlexibleElementDTO>();		
+		this.fieldsStore = new ListStore<FlexibleElementDTO>();
 
         setLayout(new FitLayout());
         setHeaderVisible(false);
         setBorders(false);
         setBodyBorder(false);	
         
-        
         final VBoxLayoutData topVBoxLayoutData = new VBoxLayoutData();
         topVBoxLayoutData.setMargins(new Margins(0,0,0,2));
         topVBoxLayoutData.setFlex(1.0);
@@ -82,13 +78,26 @@
         this.layout();
 	}
 	
-	private ToolBar initToolBar() {
+	public AdminLayoutGroupsPresenter.View getGroupView() {
+		return groupView;
+	}
+	
+	public void setGroupView(AdminLayoutGroupsPresenter.View groupView) {
+		this.groupView = groupView;
+	}
+	
+	public void refreshView() {
+		flexGrid.getView().refresh(false);
+		layout();
+	}
+	
+	private ToolBar initToolBar(ProjectModelStatus status) {
 		
 		ToolBar toolbar = new ToolBar();
     	
-		Button button = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
-        button.setItemId(UIActions.add);
-		button.addListener(Events.OnClick, new Listener<ButtonEvent>(){
+		Button addButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
+        addButton.setItemId(UIActions.add);
+		addButton.addListener(Events.OnClick, new Listener<ButtonEvent>(){
 
 			@Override
 			public void handleEvent(ButtonEvent be) {
@@ -99,119 +108,45 @@
 		});
 		
 		Button groupButton = new Button(I18N.CONSTANTS.adminFlexibleAddGroup(), IconImageBundle.ICONS.add());
-        groupButton.setItemId(UIActions.edit);
 		groupButton.addListener(Events.OnClick, new Listener<ButtonEvent>(){
-
 			@Override
 			public void handleEvent(ButtonEvent be) {
-				AdminFlexibleElementActionListener listener  = new AdminFlexibleElementActionListener(AdminFlexibleElementsView.this, dispatcher);
-				listener.onUIAction(UIActions.edit);
+				groupView.setProjectModel(projectModel);
+				groupView.setOrgUnitModel(orgUnitModel);
+				groupView.showNewGroupForm(null, false);
 			}
-			
 		});
 		
 		Button deleteButton = new Button(I18N.CONSTANTS.adminFlexibleDeleteFlexibleElements(), IconImageBundle.ICONS.delete());
 		deleteButton.setItemId(UIActions.delete);
 		deleteButton.addListener(Events.OnClick, new Listener<ButtonEvent>(){
-
 			@Override
 			public void handleEvent(ButtonEvent be) {
-				AdminFlexibleElementActionListener listener  = new AdminFlexibleElementActionListener(AdminFlexibleElementsView.this, dispatcher);
+				AdminFlexibleElementActionListener listener = new AdminFlexibleElementActionListener(AdminFlexibleElementsView.this, dispatcher);
 				listener.onUIAction(UIActions.delete);
 			}
-			
 		});
 		
-		toolbar.add(button);
-		toolbar.add(groupButton);
-		toolbar.add(deleteButton);
+		Button disableButton = new Button(I18N.CONSTANTS.adminFlexibleDisableFlexibleElements(), IconImageBundle.ICONS.disable());
+		disableButton.setItemId(UIActions.disable);
+		disableButton.addListener(Events.OnClick, new Listener<ButtonEvent>() {
+			@Override
+			public void handleEvent(ButtonEvent be) {
+				AdminFlexibleElementActionListener listener  = new AdminFlexibleElementActionListener(AdminFlexibleElementsView.this, dispatcher);
+				listener.onUIAction(UIActions.disable);
+			}
+		});
 		
+		toolbar.add(addButton);
+		toolbar.add(groupButton);
+		if (status.equals(ProjectModelStatus.DRAFT)) {
+			toolbar.add(deleteButton);
+		} else if (status.equals(ProjectModelStatus.UNDER_MAINTENANCE)) {
+			toolbar.add(disableButton);
+		}
 	    return toolbar;
     }
 	
-	public void showNewGroupForm(final FlexibleElementDTO model,
-			final boolean isUpdate) {
-		int width = 400;
-		int height = 200;
-		String title = I18N.CONSTANTS.adminFlexibleGroup();
-		final Window window = new Window();		
-		window.setHeading(title);
-        window.setSize(width, height);
-        window.setPlain(true);
-        window.setModal(true);
-        window.setBlinkModal(true);
-        window.setLayout(new FitLayout());
-		final LayoutGroupSigmahForm form = new LayoutGroupSigmahForm(dispatcher, new AsyncCallback<CreateResult>(){
-
-			@Override
-			public void onFailure(Throwable arg0) {
-				window.hide();				
-			}
-
-			@Override
-			public void onSuccess(CreateResult layoutGroupResult) {
-				window.hide();
-				if(layoutGroupResult != null){
-					if(projectModel != null){
-						GetProjectModel refreshModel = new GetProjectModel();
-						refreshModel.setId(projectModel.getId());
-						dispatcher.execute(refreshModel, 
-								null,
-				        		new AsyncCallback<ProjectModelDTO>() {
-				        	@Override
-				            public void onFailure(Throwable arg0) {
-				        		AdminUtil.alertPbmData(alert);
-				            }
-
-				            @Override
-				            public void onSuccess(ProjectModelDTO modelResult) {
-				            	if(modelResult != null){
-				            		AdminFlexibleElementsView.this.getFieldsStore().removeAll();
-				            		projectModel = modelResult;
-					            	AdminFlexibleElementsView.this.getFieldsStore().add(projectModel.getAllElements());
-				            	}
-				            	
-				            }
-				        });
-					}else if(orgUnitModel != null){
-						GetOrgUnitModel refreshModel = new GetOrgUnitModel();
-						refreshModel.setId(orgUnitModel.getId());
-						dispatcher.execute(refreshModel, 
-								null,
-				        		new AsyncCallback<OrgUnitModelDTO>() {
-				        	@Override
-				            public void onFailure(Throwable arg0) {
-				        		AdminUtil.alertPbmData(alert);
-				            }
-
-				            @Override
-				            public void onSuccess(OrgUnitModelDTO modelResult) {
-				            	if(modelResult != null){
-				            		AdminFlexibleElementsView.this.getFieldsStore().removeAll();
-				            		orgUnitModel = modelResult;
-					            	AdminFlexibleElementsView.this.getFieldsStore().add(orgUnitModel.getAllElements());
-				            	}
-				            	
-				            }
-				        });
-					}
-					
-					
-					if(isUpdate){						
-						List<FlexibleElementDTO> modifiedFlexs = AdminFlexibleElementsView.this.getFieldsStore().findModels("group", model.getGroup());
-						for(FlexibleElementDTO modifiedFlex : modifiedFlexs){
-							modifiedFlex.setGroup((LayoutGroupDTO) layoutGroupResult.getEntity());
-							AdminFlexibleElementsView.this.getFieldsStore().update(modifiedFlex);							
-						}			
-						AdminFlexibleElementsView.this.getFieldsStore().commitChanges();						
-					}
-					addedGroups.add((LayoutGroupDTO) layoutGroupResult.getEntity());
-				}				
-			}			
-		}, model , projectModel, orgUnitModel);
-		window.add(form);
-        window.show();
-	}
 	
 	public void showNewFlexibleElementForm(final FlexibleElementDTO model,
 			final boolean isUpdate) {
@@ -261,20 +196,20 @@
 	}
 	
 	private Grid<FlexibleElementDTO> buildFieldsListGrid(){
-		
-		
         List<ColumnConfig> configs = new ArrayList<ColumnConfig>();  
 		  
-        ColumnConfig column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
+        ColumnConfig column = null;      
+        
+        column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
         column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
-
-			@Override
+			
+        	@Override
 			public Object render(final FlexibleElementDTO model, String property,
 					ColumnData config, int rowIndex, int colIndex,
 					ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
 				
-				if((projectModel != null && ProjectModelStatus.DRAFT.equals(projectModel.getStatus()))
-						|| (orgUnitModel != null && ProjectModelStatus.DRAFT.equals(orgUnitModel.getStatus()))){
+				if (!model.getDisabled() && ( (projectModel != null && projectModel.getStatus().isEditable())
+						|| (orgUnitModel != null && orgUnitModel.getStatus().isEditable())) ) {
 					final Anchor nameHyperlink ;
 					if(ElementTypeEnum.DEFAULT.equals(model.getElementType())){
 						nameHyperlink = new Anchor(DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO)model).getType()), true);	
@@ -291,11 +226,17 @@
 	                	
 	                });
 	                return nameHyperlink;
-				}else{				
+				}else{
+					Text text = null;
 					if(ElementTypeEnum.DEFAULT.equals(model.getElementType()))
-						return AdminUtil.createGridText(DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO)model).getType()));
+						text = AdminUtil.createGridText(DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO)model).getType()));
 					else
-						return AdminUtil.createGridText(model.getLabel());					
+						text = AdminUtil.createGridText(model.getLabel());
+					
+					if (model.getDisabled()) {
+						text.addStyleName("disabled-element");
+					}
+					return text;
 				}
 			}
         });
@@ -429,26 +370,23 @@
 			public Object render(final FlexibleElementDTO model, String property,
 					ColumnData config, int rowIndex, int colIndex,
 					ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {	
-				LayoutGroupDTO group = model.getGroup();
-				
-				if((projectModel != null && ProjectModelStatus.DRAFT.equals(projectModel.getStatus()))
-						|| (orgUnitModel != null && ProjectModelStatus.DRAFT.equals(orgUnitModel.getStatus()))){
+				final LayoutGroupDTO group = model.getGroup();
+				if((projectModel != null && projectModel.getStatus().isEditable())
+						|| (orgUnitModel != null && orgUnitModel.getStatus().isEditable())){
 					final Anchor nameHyperlink = new Anchor((String)group.get("title"), true);
 	                nameHyperlink.addStyleName("credits-partner-url");
 	                nameHyperlink.addClickHandler(new ClickHandler(){
-
 						@Override
 						public void onClick(ClickEvent event) {
-							showNewGroupForm(model, true);
+							groupView.setProjectModel(projectModel);
+							groupView.setOrgUnitModel(orgUnitModel);
+							groupView.showNewGroupForm(group, true);
 						}
-	                	
 	                });
 	                return nameHyperlink;
 				}else{
 					return AdminUtil.createGridText((String)group.get("title"));
 				}
-				
-				
 			}	    	
 	    }); 
 		configs.add(column);
@@ -471,19 +409,21 @@
 
 
 	@Override
-	public void enableToolBar(){
-		setTopComponent(initToolBar());
+	public void enableToolBar(ProjectModelStatus status){
+		if (status.isEditable()) {
+			setTopComponent(initToolBar(status));
+		}
 	}
 
 	@Override
-	public List<FlexibleElementDTO> getDeleteSelection() {
+	public List<FlexibleElementDTO> getSelection() {
 		GridSelectionModel<FlexibleElementDTO> sm = flexGrid.getSelectionModel();
         return sm.getSelectedItems();
 	}
 	
 	@Override
 	public void confirmDeleteSelected(final ConfirmCallback confirmCallback) {
-		List<FlexibleElementDTO> deleteElements = getDeleteSelection();
+		List<FlexibleElementDTO> deleteElements = getSelection();
 		String names = "";
 		for(FlexibleElementDTO s : deleteElements){			
 			if(s instanceof DefaultFlexibleElementDTO){
@@ -497,7 +437,6 @@
 		}else{
 			names = names.substring(0, names.lastIndexOf(", "));
 			MessageBox.confirm(I18N.CONSTANTS.delete(), I18N.MESSAGES.adminFlexibleConfirmDelete(names), new Listener<MessageBoxEvent>() {
-				
 				@Override
 				public void handleEvent(MessageBoxEvent be) {
 					if(be.getButtonClicked().getItemId().equals("yes")) {
@@ -506,7 +445,35 @@
 				}
 			});
 		}
+	}
+	
+	@Override
+	public void confirmDisableSelected(final ConfirmCallback confirmCallback) {
+		List<FlexibleElementDTO> deleteElements = getSelection();
 		
-				
+		String names = "";
+		String separator = "";
+		for (FlexibleElementDTO s : deleteElements) {
+			names += separator;
+			if (s instanceof DefaultFlexibleElementDTO){
+				names += DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO)s).getType());
+			} else {
+				names += s.getLabel();
+			}
+			separator = ", ";
+		}
+		
+		if (names.isEmpty()) {
+			MessageBox.alert(I18N.CONSTANTS.disable(), I18N.MESSAGES.adminFlexibleDisableNone(), null);
+		} else {
+			MessageBox.confirm(I18N.CONSTANTS.disable(), I18N.MESSAGES.adminFlexibleConfirmDisable(names), new Listener<MessageBoxEvent>() {
+				@Override
+				public void handleEvent(MessageBoxEvent be) {
+					if (be.getButtonClicked().getItemId().equals("yes")) {
+						confirmCallback.confirmed();
+					}
+				}
+			});
+		}
 	}
 }
Index: src/main/java/org/sigmah/client/page/admin/model/project/phase/AdminPhasesView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/phase/AdminPhasesView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/phase/AdminPhasesView.java	(working copy)
@@ -235,8 +235,10 @@
 
 
 	@Override
-	public void enableToolBar() {
-		setTopComponent(initToolBar());
+	public void enableToolBar(ProjectModelStatus status) {
+		if (status.equals(ProjectModelStatus.DRAFT)) {
+			setTopComponent(initToolBar());
+		}
 	}
 
 
Index: src/main/java/org/sigmah/shared/domain/Phase.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/Phase.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/Phase.java	(working copy)
@@ -108,4 +108,14 @@
 	public boolean isActive() {
 		return startDate != null;
 	}
+
+	/**
+	 * Returns if the phase is closed (end date isn't <code>null</code>).
+	 *
+	 * @return If the phase is closed.
+	 */
+	@Transient
+	public boolean isClosed() {
+		return endDate != null;
+	}
 }
Index: src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroup.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroup.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/logframe/LogFrameGroup.java	(working copy)
@@ -1,7 +1,6 @@
 package org.sigmah.shared.domain.logframe;
 
 import java.io.Serializable;
-import java.util.Date;
 
 import javax.persistence.Column;
 import javax.persistence.Entity;
@@ -13,11 +12,6 @@
 import javax.persistence.JoinColumn;
 import javax.persistence.ManyToOne;
 import javax.persistence.Table;
-import javax.persistence.Temporal;
-import javax.persistence.TemporalType;
-import javax.persistence.Transient;
-
-import org.sigmah.shared.domain.Deleteable;
 
 /**
  * Represents a group of log frame elements displayed together.
Index: src/main/java/org/sigmah/shared/domain/element/FlexibleElement.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/element/FlexibleElement.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/element/FlexibleElement.java	(working copy)
@@ -1,6 +1,7 @@
 package org.sigmah.shared.domain.element;
 
 import java.io.Serializable;
+import java.util.Date;
 
 import javax.persistence.Column;
 import javax.persistence.Entity;
@@ -12,6 +13,8 @@
 import javax.persistence.JoinColumn;
 import javax.persistence.ManyToOne;
 import javax.persistence.Table;
+import javax.persistence.Temporal;
+import javax.persistence.TemporalType;
 import javax.persistence.Transient;
 
 import org.sigmah.shared.domain.history.Historable;
@@ -44,6 +47,8 @@
     private Boolean amendable = false;
     private Boolean exportable = true; // exported to project synthesis sheet 
     private Boolean globallyExportable = false; // exported to a global projects list
+	private Boolean disabled = false;
+    private Date creationDate = new Date();
 
     @Id
     @GeneratedValue(strategy = GenerationType.AUTO)
@@ -111,6 +116,20 @@
 	public void setGloballyExportable(boolean globallyExportable) {
 		this.globallyExportable = globallyExportable;
 	}
+	
+    /**
+     * 
+     * @return The date on which this element was created.
+     */
+    @Column(name="creation_date")
+    @Temporal(value = TemporalType.TIMESTAMP)
+    public Date getCreationDate() {
+		return creationDate;
+	}
+
+    public void setCreationDate(Date createDate) {
+		this.creationDate = createDate;
+	}
 
 	@Override
     @Transient
@@ -163,5 +182,13 @@
     	if(exportable==null) exportable=true;
     	if(globallyExportable==null) globallyExportable=false;
     }
- 
+
+    @Column(name = "is_disabled", nullable = false)
+	public Boolean getDisabled() {
+		return disabled;
+	}
+	
+	public void setDisabled(Boolean disabled) {
+		this.disabled = disabled;
+	}
 }
Index: src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsPresenter.java	(working copy)
@@ -72,9 +72,10 @@
         if (arg != null)
             reportId = Integer.parseInt(arg);
 
-        if (!orgUnitPresenter.getCurrentOrgUnitDTO().equals(currentOrgUnitDTO)) {
+        if (currentOrgUnitDTO == null || !orgUnitPresenter.getCurrentOrgUnitDTO().equals(currentOrgUnitDTO)) {
             // If the current project has changed, clear the view
             currentOrgUnitDTO = orgUnitPresenter.getCurrentOrgUnitDTO();
+            view.setReadOnly(orgUnitPresenter.getCurrentOrgUnitDTO().isUnderMaintenance());
             reportStore.removeAll();
 
             if (arg == null)
@@ -103,10 +104,10 @@
                 });
 
             } else {
-                view.setReport(null);
+                view.clearReport();
             }
         }
-
+        
         return view;
     }
 
@@ -144,8 +145,8 @@
                 if (reportStore.getCount() > 0) {
                     reportStore.removeAll();
                 }
-
-                reportStore.add(result.getData());
+                
+                addToStore(result);
             }
 
             @Override
@@ -169,7 +170,7 @@
 
                 @Override
                 public void onSuccess(ProjectReportListResult result) {
-                    reportStore.add(result.getData());
+                    addToStore(result);
                     reportStore.sort("name", SortDir.ASC);
                 }
 
@@ -178,6 +179,9 @@
                     throw new UnsupportedOperationException("Not supported yet.");
                 }
             });
+
+        view.getAttachButton().setEnabled(!orgUnitPresenter.getCurrentOrgUnitDTO().isUnderMaintenance());
+        view.getCreateReportButton().setEnabled(!orgUnitPresenter.getCurrentOrgUnitDTO().isUnderMaintenance());
     }
 
     @Override
@@ -195,4 +199,12 @@
             view.eraseChanges();
         }
     }
+
+	private void addToStore(ProjectReportListResult result) {
+		for (ReportReference reference : result.getData()) {
+			if (!reference.getFlexibleElementDisabled()) {
+				reportStore.add(reference);
+			}
+		}
+	}
 }
Index: src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java	(working copy)
@@ -0,0 +1,28 @@
+package org.sigmah.shared.command;
+
+import java.util.List;
+
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.dto.element.FlexibleElementDTO;
+
+public class DisableFlexibleElements implements Command<VoidResult> {
+	private static final long serialVersionUID = 3902096705358448566L;
+
+	private List<FlexibleElementDTO> flexibleElements;
+	
+	protected DisableFlexibleElements() {
+		//serialization
+	}
+	
+	public DisableFlexibleElements(List<FlexibleElementDTO> flexibleElements) {
+		this.setFlexibleElements(flexibleElements);
+	}
+
+	public List<FlexibleElementDTO> getFlexibleElements() {
+		return flexibleElements;
+	}
+
+	public void setFlexibleElements(List<FlexibleElementDTO> flexElts) {
+		this.flexibleElements = flexElts;
+	}
+}
Index: src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java	(working copy)
@@ -232,7 +232,7 @@
 		final LayoutDTO layout = details.getLayoutDTO();
 
 		// If the element are read only.
-		final boolean readOnly = !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
+		final boolean readOnly = projectPresenter.getCurrentProjectDTO().isUnderMaintenance() || !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
 
 		// Counts elements.
 		int count = 0;
@@ -257,10 +257,12 @@
 				// For each constraint in the current layout group.
 				if (groupLayout.getLayoutConstraintsDTO() != null) {
 					for (final LayoutConstraintDTO constraintDTO : groupLayout.getLayoutConstraintsDTO()) {
-
 						// Gets the element managed by this constraint.
 						final FlexibleElementDTO elementDTO = constraintDTO.getFlexibleElementDTO();
-
+						if (elementDTO.getDisabled() && !projectPresenter.getCurrentDisplayedPhaseDTO().isEnded()) {
+							unmask();
+							continue;
+						}
 						// --
 						// -- ELEMENT VALUE
 						// --
Index: src/main/java/org/sigmah/shared/domain/OrgUnitModel.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/OrgUnitModel.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/OrgUnitModel.java	(working copy)
@@ -28,7 +28,7 @@
 @Table(name = "org_unit_model")
 @org.hibernate.annotations.FilterDefs({ @org.hibernate.annotations.FilterDef(name = "hideDeleted") })
 @org.hibernate.annotations.Filters({ @org.hibernate.annotations.Filter(name = "hideDeleted", condition = "date_deleted is null") })
-public class OrgUnitModel implements Serializable {
+public class OrgUnitModel implements Serializable, Model {
 
     private static final long serialVersionUID = -722132644240828016L;
 
@@ -44,6 +44,7 @@
     private ProjectModelStatus status = ProjectModelStatus.DRAFT;
     private Organization organization;
     private Date dateDeleted;
+    private Date dateMaintenance;
     
     @Id
     @GeneratedValue(strategy = GenerationType.AUTO)
@@ -144,6 +145,20 @@
     protected void setDateDeleted(Date date) {
         this.dateDeleted = date;
     }
+    
+    /**
+     * 
+     * @return The date on which this org unit model maintenance started.
+     */
+    @Column(name="date_maintenance")
+    @Temporal(value = TemporalType.TIMESTAMP)
+    public Date getDateMaintenance() {
+		return dateMaintenance;
+	}
+    
+    public void setDateMaintenance(Date dateMaintenance) {
+		this.dateMaintenance = dateMaintenance;
+	}
 
     /**
      * Marks this database as deleted. (Though the row is not removed from the
Index: src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceSchedulerModule.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceSchedulerModule.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceSchedulerModule.java	(working copy)
@@ -0,0 +1,19 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.server.schedule.maintenance;
+
+import org.quartz.SchedulerFactory;
+import org.quartz.impl.StdSchedulerFactory;
+
+import com.google.inject.AbstractModule;
+import com.google.inject.Scopes;
+
+public class MaintenanceSchedulerModule extends AbstractModule {
+	@Override
+	protected void configure() {
+	   bind(SchedulerFactory.class).to(StdSchedulerFactory.class).in(Scopes.SINGLETON);
+	   bind(MaintenanceScheduler.class).asEagerSingleton();
+	}
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/exception/LengthValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LengthValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LengthValidationException.java	(working copy)
@@ -0,0 +1,28 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+
+public class LengthValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = -7004918740127230606L;
+	
+	private String containerName;
+	private Integer limit;
+	
+	public LengthValidationException() {
+	}
+	
+	public LengthValidationException(String containerName, Integer limit) {
+		this.containerName = containerName;
+		this.limit = limit;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.flexibleElementLengthValidation(limit.toString(), containerName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java	(working copy)
@@ -22,6 +22,7 @@
 import org.sigmah.shared.dto.ExportUtils;
 import org.sigmah.shared.dto.OrgUnitDTO;
 import org.sigmah.shared.dto.OrgUnitDetailsDTO;
+import org.sigmah.shared.dto.OrgUnitModelDTO;
 import org.sigmah.shared.dto.element.BudgetElementDTO;
 import org.sigmah.shared.dto.element.BudgetSubFieldDTO;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
@@ -216,9 +217,10 @@
 
         // Layout.
         final LayoutDTO layout = details.getLayout();
+		final OrgUnitModelDTO model = details.getOrgUnitModel();
 
      // If the user has the right to modify the element
-        final boolean enabled = ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT);
+        final boolean enabled = !model.isUnderMaintenance() && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT);
         
         // Counts elements.
         int count = 0;
@@ -246,10 +248,13 @@
                 // For each constraint in the current layout group.
                 if (groupLayout.getLayoutConstraintsDTO() != null) {
                     for (final LayoutConstraintDTO constraintDTO : groupLayout.getLayoutConstraintsDTO()) {
-
                         // Gets the element managed by this constraint.
                         final FlexibleElementDTO elementDTO = constraintDTO.getFlexibleElementDTO();
-
+                    	if (elementDTO.getDisabled()) {
+							unmask();
+                    		continue;
+                    	}
+                    	
                         // --
                         // -- ELEMENT VALUE
                         // --
Index: src/main/java/org/sigmah/client/page/admin/model/project/logframe/AdminLogFrameView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/logframe/AdminLogFrameView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/project/logframe/AdminLogFrameView.java	(working copy)
@@ -12,8 +12,10 @@
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.CreateEntity;
 import org.sigmah.shared.command.result.CreateResult;
+import org.sigmah.shared.domain.ProjectModelStatus;
 import org.sigmah.shared.dto.ProjectModelDTO;
 import org.sigmah.shared.dto.logframe.LogFrameModelDTO;
+import org.sigmah.shared.exception.ClientException;
 
 import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
@@ -36,7 +38,9 @@
 
 public class AdminLogFrameView extends View {
 
-    private static final int LIMIT = 20;
+    private static final String ADMIN_LOG_FRAME_UNLIMITED = I18N.CONSTANTS.adminLogFrameUnlimited();
+
+	private static final int LIMIT = 20;
 
     private final Dispatcher dispatcher;
 
@@ -104,7 +108,7 @@
         logFrameMainPanel.setHeight(900);
 
         List<String> values = new ArrayList<String>();
-        values.add(I18N.CONSTANTS.adminLogFrameUnlimited());
+        values.add(ADMIN_LOG_FRAME_UNLIMITED);
         for (int i = 1; i < LIMIT; i++) {
             values.add("" + i);
         }
@@ -138,7 +142,7 @@
         objectives_max.addListener(Events.Change, listener);
 
         objectives_max_per_group = new SimpleComboBox<String>();
-        objectives_max_per_group.setFieldLabel(I18N.CONSTANTS.adminLogFrameMaxAPerGroup());
+        objectives_max_per_group.setFieldLabel(I18N.CONSTANTS.adminLogFrameMaxOSPerGroup());
         objectives_max_per_group.add(values);
         objectives_max_per_group.setTriggerAction(TriggerAction.ALL);
         objectives_max_per_group.addListener(Events.Change, listener);
@@ -449,12 +453,12 @@
             if (logFrameModel.getSpecificObjectivesMax() != null) {
                 objectives_max.setSimpleValue(logFrameModel.getSpecificObjectivesMax().toString());
             } else {
-                objectives_max.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                objectives_max.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getSpecificObjectivesPerGroupMax() != null) {
                 objectives_max_per_group.setSimpleValue(logFrameModel.getSpecificObjectivesPerGroupMax().toString());
             } else {
-                objectives_max_per_group.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                objectives_max_per_group.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getEnableSpecificObjectivesGroups() != null) {
                 objectives_enable_groups.setSimpleValue(logFrameModel.getEnableSpecificObjectivesGroups());
@@ -462,27 +466,27 @@
             if (logFrameModel.getSpecificObjectivesGroupsMax() != null) {
                 objectives_max_groups.setSimpleValue(logFrameModel.getSpecificObjectivesGroupsMax().toString());
             } else {
-                objectives_max_groups.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                objectives_max_groups.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getActivitiesMax() != null) {
                 activities_max.setSimpleValue(logFrameModel.getActivitiesMax().toString());
             } else {
-                activities_max.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                activities_max.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getActivitiesGroupsMax() != null) {
                 activities_max_groups.setSimpleValue(logFrameModel.getActivitiesGroupsMax().toString());
             } else {
-                activities_max_groups.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                activities_max_groups.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getActivitiesPerGroupMax() != null) {
                 activities_max_per_group.setSimpleValue(logFrameModel.getActivitiesPerGroupMax().toString());
             } else {
-                activities_max_per_group.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                activities_max_per_group.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getActivitiesPerExpectedResultMax() != null) {
                 activities_max_per_result.setSimpleValue(logFrameModel.getActivitiesPerExpectedResultMax().toString());
             } else {
-                activities_max_per_result.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                activities_max_per_result.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getEnableActivitiesGroups() != null) {
                 activities_enable_groups.setSimpleValue(logFrameModel.getEnableActivitiesGroups());
@@ -490,7 +494,7 @@
             if (logFrameModel.getExpectedResultsMax() != null) {
                 results_max.setSimpleValue(logFrameModel.getExpectedResultsMax().toString());
             } else {
-                results_max.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                results_max.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getEnableExpectedResultsGroups() != null) {
                 results_enable_groups.setSimpleValue(logFrameModel.getEnableExpectedResultsGroups());
@@ -498,23 +502,23 @@
             if (logFrameModel.getExpectedResultsGroupsMax() != null) {
                 results_max_groups.setSimpleValue(logFrameModel.getExpectedResultsGroupsMax().toString());
             } else {
-                results_max_groups.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                results_max_groups.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getExpectedResultsPerGroupMax() != null) {
                 results_max_per_group.setSimpleValue(logFrameModel.getExpectedResultsPerGroupMax().toString());
             } else {
-                results_max_per_group.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                results_max_per_group.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getExpectedResultsPerSpecificObjectiveMax() != null) {
                 results_max_per_obj
                     .setSimpleValue(logFrameModel.getExpectedResultsPerSpecificObjectiveMax().toString());
             } else {
-                results_max_per_obj.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                results_max_per_obj.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getPrerequisitesMax() != null) {
                 prerequisites_max.setSimpleValue(logFrameModel.getPrerequisitesMax().toString());
             } else {
-                prerequisites_max.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                prerequisites_max.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getEnablePrerequisitesGroups() != null) {
                 prerequisites_enable_groups.setSimpleValue(logFrameModel.getEnablePrerequisitesGroups());
@@ -522,19 +526,19 @@
             if (logFrameModel.getPrerequisitesGroupsMax() != null) {
                 prerequisites_max_groups.setSimpleValue(logFrameModel.getPrerequisitesGroupsMax().toString());
             } else {
-                prerequisites_max_groups.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                prerequisites_max_groups.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
             if (logFrameModel.getPrerequisitesPerGroupMax() != null) {
                 prerequisites_max_per_group.setSimpleValue(logFrameModel.getPrerequisitesPerGroupMax().toString());
             } else {
-                prerequisites_max_per_group.setSimpleValue(I18N.CONSTANTS.adminLogFrameUnlimited());
+                prerequisites_max_per_group.setSimpleValue(ADMIN_LOG_FRAME_UNLIMITED);
             }
         }
     }
 
     private Integer translateMaxValue(String value) {
         Integer max = null;
-        if (value != null && I18N.CONSTANTS.adminLogFrameUnlimited().equals(value)) {
+        if (value != null && ADMIN_LOG_FRAME_UNLIMITED.equals(value)) {
             max = null;
         } else {
             max = new Integer(value);
@@ -605,10 +609,14 @@
 
         dispatcher.execute(new CreateEntity("ProjectModel", logFrameProperties), null,
             new AsyncCallback<CreateResult>() {
-
+            	@Override
                 public void onFailure(Throwable caught) {
-                    MessageBox.alert(I18N.CONSTANTS.adminLogFrameUpdate(), I18N.MESSAGES.adminLogFrameUpdateFailure(),
-                        null);
+                	String errorMessage;
+                	if (caught instanceof ClientException)
+            			errorMessage = ((ClientException) caught).generateClientMessage();
+            		else
+            			errorMessage = I18N.MESSAGES.adminLogFrameUpdateFailure();
+                    MessageBox.alert(I18N.CONSTANTS.adminLogFrameUpdate(), errorMessage, null);
                 }
 
                 @Override
@@ -630,8 +638,9 @@
     }
 
     @Override
-    public void enableToolBar() {
-        logFrameMainPanel.setTopComponent(initToolBar());
+    public void enableToolBar(ProjectModelStatus status) {
+    	if (status.isEditable()) {
+    		logFrameMainPanel.setTopComponent(initToolBar());
+    	}
     }
-
 }
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(working copy)
@@ -1,6 +1,7 @@
 package org.sigmah.client.page.admin.model.common.element;
 
 import java.util.ArrayList;
+import java.util.Date;
 import java.util.HashMap;
 import java.util.List;
 import java.util.Map;
@@ -11,6 +12,7 @@
 import org.sigmah.client.icon.IconImageBundle;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.client.ui.ClickableLabel;
+import org.sigmah.client.ui.ClickableLabel.Mode;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.CreateEntity;
 import org.sigmah.shared.command.GetCategories;
@@ -21,6 +23,7 @@
 import org.sigmah.shared.command.result.PrivacyGroupsListResult;
 import org.sigmah.shared.command.result.ReportModelsListResult;
 import org.sigmah.shared.command.result.UpdateModelResult;
+import org.sigmah.shared.domain.ProjectModelStatus;
 import org.sigmah.shared.domain.element.BudgetSubFieldType;
 import org.sigmah.shared.domain.element.DefaultFlexibleElementType;
 import org.sigmah.shared.dto.OrgUnitDetailsDTO;
@@ -44,6 +47,7 @@
 import org.sigmah.shared.dto.layout.LayoutGroupDTO;
 import org.sigmah.shared.dto.profile.PrivacyGroupDTO;
 import org.sigmah.shared.dto.report.ReportModelDTO;
+import org.sigmah.shared.exception.ClientException;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
@@ -142,6 +146,8 @@
 	private final Anchor anchorAddSubField;
 
 	private int num = 0;
+	
+	private Date maintenanceDate;
 
 	private final static int LABEL_WIDTH = 90;
 	private final static int MAX_TENTATIVES_FOR_CHOICES = 100;
@@ -156,8 +162,10 @@
 		setHeaderVisible(false);
 
 		if (projectModelToUpdate != null) {
+			maintenanceDate = projectModelToUpdate.getDateMaintenance();
 			isProject = true;
 		} else {
+			maintenanceDate = orgUnitModelToUpdate.getDateMaintenance();
 			isProject = false;
 		}
 		this.dispatcher = dispatcher;
@@ -176,6 +184,7 @@
 
 		budgetFields = new FlexTable();
 		budgetFields.setVisible(false);
+		
 		anchorAddSubField = new Anchor();
 		anchorAddSubField.setHTML(IconImageBundle.ICONS.add().getHTML() + I18N.CONSTANTS.adminAddBudgetSubField());
 		anchorAddSubField.addStyleName("credits-partner-url");
@@ -347,7 +356,7 @@
 		linkedCategory.setStore(linkedCategoriesStore);
 
 		for (int i = 0; i < MAX_TENTATIVES_FOR_CHOICES; i++) {
-			final ClickableLabel label = new ClickableLabel();
+			final ClickableLabel label = new ClickableLabel(isUpdateUnderMaintenance() ? Mode.SELECT : Mode.DELETE);
 			label.addClickHandler(new ClickHandler() {
 				@Override
 				public void onClick(ClickEvent arg0) {
@@ -357,7 +366,12 @@
 						linkedCategory.setEnabled(true);
 					}
 				}
-
+			});
+			label.addSelectListener(new Listener<BaseEvent>() {
+				@Override
+				public void handleEvent(BaseEvent be) {
+					setDisabledStyle(label);		
+				}
 			});
 			label.hide();
 			selectableChoices.put(i, label);
@@ -383,6 +397,8 @@
 						if (num < MAX_TENTATIVES_FOR_CHOICES) {
 							linkedCategory.setEnabled(false);
 							selectableChoices.get(num).setText(questionChoice.getValue());
+							selectableChoices.get(num).setSelected(true);
+							selectableChoices.get(num).setClickMode(Mode.DELETE);
 							selectableChoices.get(num).show();
 							num++;
 							selectedChoicesLabels.add(questionChoice.getValue());
@@ -676,6 +692,7 @@
 
 		typeList.setFieldLabel(constants.adminFlexibleType());
 		typeList.setAllowBlank(false);
+		typeList.setVisible(!isUpdateUnderMaintenance());
 		typeList.setTriggerAction(TriggerAction.ALL);
 		List<String> values = new ArrayList<String>();
 		for (ElementTypeEnum e : ElementTypeEnum.values()) {
@@ -702,6 +719,7 @@
 		final ListStore<BaseModelData> containersStore = new ListStore<BaseModelData>();
 		containerList = new ComboBox<BaseModelData>();
 		containerList.setEditable(false);
+		containerList.setVisible(!isUpdateUnderMaintenance());
 		containerList.setDisplayField("name");
 		containerList.setValueField("id");
 		containerList.setFieldLabel(I18N.CONSTANTS.adminFlexibleContainer());
@@ -885,10 +903,11 @@
 		isAmendable.setBoxLabel(" ");
 		isAmendable.setFieldLabel(constants.adminFlexibleAmendable());
 		isAmendable.setValue(false);
-		if (flexibleElement != null) {
+		if (isUpdateMode()) {
 			isAmendable.setValue(flexibleElement.getAmendable());
 			oldFieldProperties.put(AdminUtil.PROP_FX_AMENDABLE, flexibleElement.getAmendable());
 		}
+		isAmendable.setVisible(!isUnderMaintenance());
 
 		commonPanel.add(isAmendable);
 
@@ -938,6 +957,31 @@
 		layout();
 	}
 
+	private boolean isUpdateMode() {
+		return flexibleElementToUpdate != null;
+	}
+	
+	private boolean isUnderMaintenance() {
+		return getModelStatus().equals(ProjectModelStatus.UNDER_MAINTENANCE);
+	}
+
+	private boolean isCreatedBeforeMaintenance() {
+		return maintenanceDate != null && maintenanceDate.after(flexibleElementToUpdate.getCreationDate());
+	}
+
+	private boolean isUpdateUnderMaintenance() {
+		return isUpdateMode() && isUnderMaintenance() && isCreatedBeforeMaintenance();
+	}
+
+	private ProjectModelStatus getModelStatus() {
+		if (projectModelToUpdate != null) {
+			return projectModelToUpdate.getStatus();
+		} else if(orgUnitModelToUpdate != null){
+			return orgUnitModelToUpdate.getStatus();
+		}
+		return null;
+	}
+
 	private void hideAllSpecificAttributes() {
 		linkedCategory.hide();
 		isLinkedToQuality.hide();
@@ -968,9 +1012,11 @@
 			isBanner.show();
 			posBanner.show();
 			specificsPanel.show();
-			if (DefaultFlexibleElementType.BUDGET.equals(((DefaultFlexibleElementDTO) flexibleElement).getType())) {
-				budgetFields.setVisible(true);
-				ratioFlexTable.setVisible(true);
+			if (!isUpdateUnderMaintenance()) {
+				if (DefaultFlexibleElementType.BUDGET.equals(((DefaultFlexibleElementDTO) flexibleElement).getType())) {
+					budgetFields.setVisible(true);
+					ratioFlexTable.setVisible(true);
+				}
 			}
 		} else if (ElementTypeEnum.getName(ElementTypeEnum.CHECKBOX).equals(type)) {
 			// no additional fields
@@ -987,9 +1033,11 @@
 		} else if (ElementTypeEnum.getName(ElementTypeEnum.MESSAGE).equals(type)) {
 			// no additional fields
 		} else if (ElementTypeEnum.getName(ElementTypeEnum.QUESTION).equals(type)) {
-			linkedCategory.show();
 			// FIXME isLinkedToQuality.show();
-			isMultipleQ.show();
+			if (!isUpdateUnderMaintenance()) {
+				isMultipleQ.show();
+				linkedCategory.show();
+			}
 			questionChoice.show();
 			addChoiceButton.show();
 			for (ClickableLabel selected : selectableChoices.values()) {
@@ -1008,11 +1056,13 @@
 			if (onSelectAction) {
 				maxLimitField.clear();
 			}
-			textAreaTypeList.show();
+			if (!isUpdateUnderMaintenance()) {
+				textAreaTypeList.show();
+				isDecimal.show();
+				minLimitField.show();
+				maxLimitField.show();
+			}
 			lengthField.show();
-			isDecimal.show();
-			minLimitField.show();
-			maxLimitField.show();
 			specificsPanel.show();
 		}
 	}
@@ -1144,6 +1194,8 @@
 			newFieldProperties.put(AdminUtil.PROP_FX_Q_CATEGORY, category);
 		if (selectedChoicesLabels != null)
 			newFieldProperties.put(AdminUtil.PROP_FX_Q_CHOICES, selectedChoicesLabels);
+		if (isUpdateUnderMaintenance())
+			newFieldProperties.put(AdminUtil.PROP_FX_Q_CHOICES_STATUS, getSelectedChoicesStatusMap());
 
 		List<BudgetSubFieldDTO> budgetSubFieldsToUpdate = new ArrayList<BudgetSubFieldDTO>();
 		if (budgetFields.getRowCount() > 0) {
@@ -1217,11 +1269,7 @@
 			dispatcher.execute(new CreateEntity("ProjectModel", newFieldProperties), null,
 			                new AsyncCallback<CreateResult>() {
 				                public void onFailure(Throwable caught) {
-					                MessageBox.alert(
-					                                I18N.CONSTANTS.adminFlexibleCreationBox(),
-					                                I18N.MESSAGES.adminStandardCreationFailure(I18N.CONSTANTS
-					                                                .adminStandardFlexibleName() + " '" + name + "'"),
-					                                null);
+					                showErrorMessage(caught, name);
 					                callback.onFailure(caught);
 				                }
 
@@ -1232,7 +1280,7 @@
 						                UpdateModelResult completeResult = new UpdateModelResult(pModelUpdated.getId());
 						                completeResult.setEntity(pModelUpdated);
 
-						                if (flexibleElementToUpdate != null) {// Update
+						                if (isUpdateMode()) {// Update
 							                for (FlexibleElementDTO f : pModelUpdated.getAllElements()) {
 								                if (f.getId() == flexibleElementToUpdate.getId()) {
 									                completeResult.setAnnexEntity(f);
@@ -1282,11 +1330,7 @@
 			dispatcher.execute(new CreateEntity("OrgUnitModel", newFieldProperties), null,
 			                new AsyncCallback<CreateResult>() {
 				                public void onFailure(Throwable caught) {
-					                MessageBox.alert(
-					                                I18N.CONSTANTS.adminFlexibleCreationBox(),
-					                                I18N.MESSAGES.adminStandardCreationFailure(I18N.CONSTANTS
-					                                                .adminStandardFlexibleName() + " '" + name + "'"),
-					                                null);
+					                showErrorMessage(caught, name);
 					                callback.onFailure(caught);
 				                }
 
@@ -1297,7 +1341,7 @@
 						                UpdateModelResult completeResult = new UpdateModelResult(oModelUpdated.getId());
 						                completeResult.setEntity(oModelUpdated);
 
-						                if (flexibleElementToUpdate != null) {// Update
+						                if (isUpdateMode()) {// Update
 							                for (FlexibleElementDTO f : oModelUpdated.getAllElements()) {
 								                if (f.getId() == flexibleElementToUpdate.getId()) {
 									                Log.debug("@EF --> FlexibleElement Updated : " + f.getId());
@@ -1349,6 +1393,21 @@
 
 	}
 
+	private Map<String, Boolean> getSelectedChoicesStatusMap() {
+		if (selectedChoicesLabels == null) {
+			return null;
+		}
+		
+		Map<String, Boolean> selectedChoicesStatus = new HashMap<String, Boolean>();
+		for (ClickableLabel label : selectableChoices.values()) {
+			String labelText = label.getText();
+			if (selectedChoicesLabels.contains(labelText)) {
+				selectedChoicesStatus.put(labelText, !label.isSelected());
+			}
+		}
+		return selectedChoicesStatus;
+	}
+
 	private void initSpecifics(FlexibleElementDTO flexibleElement) {
 
 		isDecimal.setValue(false);
@@ -1377,18 +1436,18 @@
 					}
 				}
 			} else if (flexibleElement instanceof FilesListElementDTO) {
-				if (((FilesListElementDTO) flexibleElement).getLimit() != null) {
-					maxLimitField.setValue(((FilesListElementDTO) flexibleElement).getLimit());
-					oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT,
-					                ((FilesListElementDTO) flexibleElement).getLimit());
+				FilesListElementDTO filesListElementDTO = (FilesListElementDTO) flexibleElement;
+				if (filesListElementDTO.getLimit() != null) {
+					maxLimitField.setValue(filesListElementDTO.getLimit());
+					oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT, filesListElementDTO.getLimit());
 				}
-
 			} else if (flexibleElement instanceof TextAreaElementDTO) {
 
-				if (((TextAreaElementDTO) flexibleElement).getMaxValue() != null) {
-					maxLimitField.setValue(((TextAreaElementDTO) flexibleElement).getMaxValue());
+				TextAreaElementDTO textAreaElementDTO = (TextAreaElementDTO) flexibleElement;
+				if (textAreaElementDTO.getMaxValue() != null) {
+					maxLimitField.setValue(textAreaElementDTO.getMaxValue());
 					oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT,
-					                ((TextAreaElementDTO) flexibleElement).getMaxValue());
+					                textAreaElementDTO.getMaxValue());
 				}
 
 				TextAreaElementDTO textElement = (TextAreaElementDTO) flexibleElement;
@@ -1406,22 +1465,22 @@
 					textAreaTypeList.setSimpleValue(I18N.CONSTANTS.adminFlexibleTextTypeD());
 				}
 
-				if (((TextAreaElementDTO) flexibleElement).getMinValue() != null) {
-					minLimitField.setValue(((TextAreaElementDTO) flexibleElement).getMinValue());
+				if (textAreaElementDTO.getMinValue() != null) {
+					minLimitField.setValue(textAreaElementDTO.getMinValue());
 					oldFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT,
-					                ((TextAreaElementDTO) flexibleElement).getMinValue());
+					                textAreaElementDTO.getMinValue());
 				}
 
-				if (((TextAreaElementDTO) flexibleElement).getLength() != null) {
-					lengthField.setValue(((TextAreaElementDTO) flexibleElement).getLength());
+				if (textAreaElementDTO.getLength() != null) {
+					lengthField.setValue(textAreaElementDTO.getLength());
 					oldFieldProperties
-					                .put(AdminUtil.PROP_FX_LENGTH, ((TextAreaElementDTO) flexibleElement).getLength());
+					                .put(AdminUtil.PROP_FX_LENGTH, textAreaElementDTO.getLength());
 				}
 
-				if (((TextAreaElementDTO) flexibleElement).getIsDecimal() != null) {
-					isDecimal.setValue(((TextAreaElementDTO) flexibleElement).getIsDecimal());
+				if (textAreaElementDTO.getIsDecimal() != null) {
+					isDecimal.setValue(textAreaElementDTO.getIsDecimal());
 					oldFieldProperties.put(AdminUtil.PROP_FX_DECIMAL,
-					                ((TextAreaElementDTO) flexibleElement).getIsDecimal());
+					                textAreaElementDTO.getIsDecimal());
 				}
 			} else if (flexibleElement instanceof QuestionElementDTO) {
 				if (((QuestionElementDTO) flexibleElement).getQualityCriterionDTO() != null) {
@@ -1459,8 +1518,11 @@
 						selectedChoicesLabels.add(choice.getLabel());
 
 						if (num < MAX_TENTATIVES_FOR_CHOICES) {
-							selectableChoices.get(num).setText(choice.getLabel());
-							selectableChoices.get(num).show();
+							ClickableLabel choiceLabel = selectableChoices.get(num);
+							choiceLabel.setText(choice.getLabel());
+							choiceLabel.setSelected(!choice.getDisabled());
+							choiceLabel.show();
+							setDisabledStyle(choiceLabel);
 							num++;
 						} else {
 							MessageBox.alert(I18N.CONSTANTS.adminMaxAttempts(),
@@ -1473,14 +1535,14 @@
 		}
 	}
 
-	private void addNewGroupsToStore(LayoutDTO container, ListStore<LayoutGroupDTO> groupsStore,
-	                List<LayoutGroupDTO> addedGroups) {
-		for (LayoutGroupDTO lg : addedGroups) {
-			if (lg.getParentLayoutDTO().getId() == container.getId()) {
-				groupsStore.add(lg);
-			}
-		}
-	}
+//	private void addNewGroupsToStore(LayoutDTO container, ListStore<LayoutGroupDTO> groupsStore,
+//	                List<LayoutGroupDTO> addedGroups) {
+//		for (LayoutGroupDTO lg : addedGroups) {
+//			if (lg.getParentLayoutDTO().getId() == container.getId()) {
+//				groupsStore.add(lg);
+//			}
+//		}
+//	}
 
 	public void updateElementFormForBudgetElement(BudgetElementDTO budgetElement) {
 		upBudgetSubFieldStore.removeAll();
@@ -1583,9 +1645,9 @@
 		downBudgetSubFieldCombo.setEditable(true);
 		downBudgetSubFieldCombo.setAllowBlank(false);
 
-		budgetFields.setVisible(true);
-		ratioFlexTable.setVisible(true);
-		anchorAddSubField.setVisible(true);
+		budgetFields.setVisible(!isUpdateUnderMaintenance());
+		ratioFlexTable.setVisible(!isUpdateUnderMaintenance());
+		anchorAddSubField.setVisible(!isUpdateUnderMaintenance());
 	}
 
 	protected void updateRatioCombos(ComboBox<BudgetSubFieldDTO> budgetSubFieldsComboChanged) {
@@ -1638,4 +1700,25 @@
 		}
 
 	}
+
+	private void showErrorMessage(Throwable caught, final String name) {
+		String errorMessage = null;
+		
+		if (caught instanceof ClientException) {
+			errorMessage = ((ClientException) caught).generateClientMessage();
+		} else {
+			errorMessage = I18N.MESSAGES.adminStandardCreationFailure(I18N.CONSTANTS
+                    .adminStandardFlexibleName() + " '" + name + "'");
+		}
+
+		MessageBox.alert(I18N.CONSTANTS.adminFlexibleCreationBox(), errorMessage, null);
+	}
+
+	private void setDisabledStyle(final ClickableLabel label) {
+		if (label.isSelected()) {
+			label.removeTextStyleName("disabled-element");
+		} else {
+			label.addTextStyleName("disabled-element");
+		}
+	}
 }
Index: src/main/java/org/sigmah/shared/dto/report/ReportReference.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/report/ReportReference.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/report/ReportReference.java	(working copy)
@@ -1,10 +1,12 @@
 package org.sigmah.shared.dto.report;
 
-import com.extjs.gxt.ui.client.data.BaseModelData;
 import java.util.Date;
+
 import org.sigmah.shared.domain.report.ProjectReport;
 import org.sigmah.shared.dto.value.ListableValue;
 
+import com.extjs.gxt.ui.client.data.BaseModelData;
+
 public class ReportReference extends BaseModelData implements ListableValue {
 
     private static final long serialVersionUID = 1736989091550004973L;
@@ -18,8 +20,10 @@
         this.set("lastEditDate", report.getCurrentVersion().getEditDate());
         this.set("editorName", report.getCurrentVersion().getEditorShortName());
         this.set("phaseName", report.getCurrentVersion().getPhaseName());
+
         if (report.getFlexibleElement() != null) {
-            this.set("flexibleElementLabel", report.getFlexibleElement().getLabel());
+        	setFlexibleElementLabel(report.getFlexibleElement().getLabel());
+        	setFlexibleElementDisabled(report.getFlexibleElement().getDisabled());
         }
     }
 
@@ -55,6 +59,14 @@
         this.set("flexibleElementLabel", label);
     }
 
+	public boolean getFlexibleElementDisabled() {
+        return get("flexibleElementDisabled");
+	}
+
+    public void setFlexibleElementDisabled(boolean disabled) {
+        this.set("flexibleElementDisabled", disabled);
+    }
+
     public Date getLastEditDate() {
         return get("lastEditDate");
     }
Index: src/main/java/org/sigmah/server/StartupListener.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/StartupListener.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/StartupListener.java	(working copy)
@@ -22,6 +22,7 @@
 import org.sigmah.server.mail.MailModule;
 import org.sigmah.server.report.ReportModule;
 import org.sigmah.server.schedule.export.SchedulerModule;
+import org.sigmah.server.schedule.maintenance.MaintenanceSchedulerModule;
 import org.sigmah.server.util.BeanMappingModule;
 import org.sigmah.server.util.TemplateModule;
 import org.sigmah.server.util.logging.LoggingModule;
@@ -61,7 +62,7 @@
                     new BeanMappingModule(), new MailModule(), new HibernateModule(), new FileModule(),
                     new AuthenticationModule(), new ReportModule(), new BootstrapModule(), new SigmahBootstrapModule(),
                     new GwtRpcModule(), new ExportModule(), new WfsModule(), new AccountModule(), new JsonRpcModule(),
-                    new KmlModule(), new SchedulerModule());
+                    new KmlModule(), new SchedulerModule(), new MaintenanceSchedulerModule());
 
         return injector;
     }
Index: src/main/java/org/sigmah/shared/exception/ClientException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/ClientException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/ClientException.java	(working copy)
@@ -0,0 +1,10 @@
+package org.sigmah.shared.exception;
+
+/**
+ * Exceptions designed to generate the error message only on client side (and thus use appropriate I18N messages).
+ * 
+ * @author renato
+ */
+public interface ClientException {
+	public abstract String generateClientMessage();
+}
Index: src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceModelJob.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceModelJob.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/schedule/maintenance/MaintenanceModelJob.java	(working copy)
@@ -0,0 +1,42 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.server.schedule.maintenance;
+
+import javax.persistence.EntityManager;
+import javax.persistence.EntityManagerFactory;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.quartz.Job;
+import org.quartz.JobExecutionContext;
+import org.quartz.JobExecutionException;
+import org.sigmah.shared.domain.Model;
+import org.sigmah.shared.domain.ProjectModelStatus;
+
+public class MaintenanceModelJob implements Job {
+	private static final Log log = LogFactory.getLog(MaintenanceModelJob.class);
+
+	public static final String MODEL_PARAMETER = "model";
+	public static final String MODEL_EMF = "emf";
+	
+    public void execute(JobExecutionContext jobContext) throws JobExecutionException {
+    	Model model = (Model) jobContext.getJobDetail().getJobDataMap().get(MODEL_PARAMETER);
+    	EntityManagerFactory emf = (EntityManagerFactory) jobContext.getJobDetail().getJobDataMap().get(MODEL_EMF);
+    	
+    	EntityManager em = emf.createEntityManager();
+    	if (model == null || model.getId() == null || model.getDateMaintenance() == null) {
+    		log.warn("Invalid model passed to put into maintenance: " + model);
+    	} else {
+    		log.info("Going to put model " + model.getClass().getName() + "(" + model.getId() + ") into maintenance...");
+    		
+    		em.getTransaction().begin();
+    		em.createQuery("update " + model.getClass().getSimpleName() + " set status=:status where id=:id").setParameter("id", model.getId()).setParameter("status", ProjectModelStatus.UNDER_MAINTENANCE).executeUpdate(); // em.merge was generating problems with hibernate
+    		em.getTransaction().commit();
+    		
+    		log.info("Model " + model.getClass().getName() + "(" + model.getId() + ") is under maintenance.");
+    	}
+    }
+}
Index: src/main/java/org/sigmah/server/policy/admin/ModelUtil.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java	(working copy)
@@ -1,10 +1,13 @@
 package org.sigmah.server.policy.admin;
 
 import java.util.ArrayList;
+import java.util.Collections;
 import java.util.HashMap;
 import java.util.List;
+import java.util.Map;
 
 import javax.persistence.EntityManager;
+import javax.persistence.NoResultException;
 import javax.persistence.Query;
 import javax.persistence.Table;
 
@@ -13,8 +16,14 @@
 import org.dozer.Mapper;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.client.page.admin.model.common.element.ElementTypeEnum;
+import org.sigmah.server.endpoint.gwtrpc.handler.GetValueHandler;
 import org.sigmah.server.policy.PropertyMap;
+import org.sigmah.shared.command.GetValue;
+import org.sigmah.shared.command.result.ValueResult;
+import org.sigmah.shared.command.result.ValueResultUtils;
 import org.sigmah.shared.domain.OrgUnitModel;
+import org.sigmah.shared.domain.Phase;
+import org.sigmah.shared.domain.Project;
 import org.sigmah.shared.domain.ProjectModel;
 import org.sigmah.shared.domain.category.CategoryElement;
 import org.sigmah.shared.domain.category.CategoryType;
@@ -29,26 +38,278 @@
 import org.sigmah.shared.domain.element.ReportElement;
 import org.sigmah.shared.domain.element.ReportListElement;
 import org.sigmah.shared.domain.element.TextAreaElement;
+import org.sigmah.shared.domain.layout.Layout;
 import org.sigmah.shared.domain.layout.LayoutConstraint;
 import org.sigmah.shared.domain.layout.LayoutGroup;
+import org.sigmah.shared.domain.logframe.LogFrameGroupType;
+import org.sigmah.shared.domain.logframe.LogFrameModel;
 import org.sigmah.shared.domain.profile.PrivacyGroup;
 import org.sigmah.shared.domain.report.ProjectReportModel;
 import org.sigmah.shared.dto.category.CategoryTypeDTO;
 import org.sigmah.shared.dto.element.BudgetSubFieldDTO;
+import org.sigmah.shared.dto.element.FilesListElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.dto.element.TextAreaElementDTO;
 import org.sigmah.shared.dto.layout.LayoutConstraintDTO;
 import org.sigmah.shared.dto.layout.LayoutGroupDTO;
 import org.sigmah.shared.dto.profile.PrivacyGroupDTO;
 import org.sigmah.shared.dto.report.ReportModelDTO;
+import org.sigmah.shared.exception.CommandException;
+import org.sigmah.shared.exception.CompulsoryElementValidationException;
+import org.sigmah.shared.exception.LengthValidationException;
+import org.sigmah.shared.exception.LogFrameEnableGroupsValidationException;
+import org.sigmah.shared.exception.LogFrameMaxNumberOfGroupsValidationException;
+import org.sigmah.shared.exception.LogFrameMaxPerExpectedResultValidationException;
+import org.sigmah.shared.exception.LogFrameMaxPerFrameValidationException;
+import org.sigmah.shared.exception.LogFrameMaxPerGroupValidationException;
+import org.sigmah.shared.exception.LogFrameMaxPerSpecificObjectiveValidationException;
+import org.sigmah.shared.exception.MaxValueValidationException;
+import org.sigmah.shared.exception.NewCompulsoryElementValidationException;
 
 public class ModelUtil {
-
 	private final static Log log = LogFactory.getLog(ModelUtil.class);
+	
+	public static void validateLogFrameModelChange(EntityManager em, Mapper mapper, PropertyMap changes, LogFrameModel model) throws CommandException {
+		if (changes.get(AdminUtil.PROP_OBJ_MAX) != null)
+			validateLogFrameModelMaxPerFrame(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_OBJ_MAX), LogFrameGroupType.SPECIFIC_OBJECTIVE);
+		if (changes.get(AdminUtil.PROP_OBJ_MAX_PER_GROUP) != null)
+			validateLogFrameModelMaxPerGroup(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_OBJ_MAX_PER_GROUP), LogFrameGroupType.SPECIFIC_OBJECTIVE);
+		if (changes.get(AdminUtil.PROP_OBJ_ENABLE_GROUPS) != null)
+			validateLogFrameModelEnableGroups(em, mapper, model, changes.<Boolean> get(AdminUtil.PROP_OBJ_ENABLE_GROUPS), LogFrameGroupType.SPECIFIC_OBJECTIVE);
+		if (changes.get(AdminUtil.PROP_OBJ_MAX_GROUPS) != null)
+			validateLogFrameModelMaxNumberOfGroups(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_OBJ_MAX_GROUPS), LogFrameGroupType.SPECIFIC_OBJECTIVE);
+		if (changes.get(AdminUtil.PROP_A_MAX) != null)
+			validateLogFrameModelMaxPerFrame(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_A_MAX), LogFrameGroupType.ACTIVITY);
+		if (changes.get(AdminUtil.PROP_A_MAX_PER_GROUP) != null)
+			validateLogFrameModelMaxPerGroup(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_A_MAX_PER_GROUP), LogFrameGroupType.ACTIVITY);
+		if (changes.get(AdminUtil.PROP_A_ENABLE_GROUPS) != null)
+			validateLogFrameModelEnableGroups(em, mapper, model, changes.<Boolean> get(AdminUtil.PROP_A_ENABLE_GROUPS), LogFrameGroupType.ACTIVITY);
+		if (changes.get(AdminUtil.PROP_A_MAX_GROUPS) != null)
+			validateLogFrameModelMaxNumberOfGroups(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_A_MAX_GROUPS), LogFrameGroupType.ACTIVITY);
+		if (changes.get(AdminUtil.PROP_A_MAX_PER_RESULT) != null)
+			validateLogFrameModelMaxActivitiesPerExpectedResult(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_A_MAX_PER_RESULT));
+		if (changes.get(AdminUtil.PROP_R_MAX) != null)
+			validateLogFrameModelMaxPerFrame(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_R_MAX), LogFrameGroupType.EXPECTED_RESULT);
+		if (changes.get(AdminUtil.PROP_R_MAX_PER_GROUP) != null)
+			validateLogFrameModelMaxPerGroup(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_R_MAX_PER_GROUP), LogFrameGroupType.EXPECTED_RESULT);
+		if (changes.get(AdminUtil.PROP_R_ENABLE_GROUPS) != null)
+			validateLogFrameModelEnableGroups(em, mapper, model, changes.<Boolean> get(AdminUtil.PROP_R_ENABLE_GROUPS), LogFrameGroupType.EXPECTED_RESULT);
+		if (changes.get(AdminUtil.PROP_R_MAX_GROUPS) != null)
+			validateLogFrameModelMaxNumberOfGroups(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_R_MAX_GROUPS), LogFrameGroupType.EXPECTED_RESULT);
+		if (changes.get(AdminUtil.PROP_R_MAX_PER_OBJ) != null)
+			validateLogFrameModelMaxExpectedResultsPerSpecificObjective(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_R_MAX_PER_OBJ));
+		if (changes.get(AdminUtil.PROP_P_MAX) != null)
+			validateLogFrameModelMaxPerFrame(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_P_MAX), LogFrameGroupType.PREREQUISITE);
+		if (changes.get(AdminUtil.PROP_P_MAX_PER_GROUP) != null)
+			validateLogFrameModelMaxPerGroup(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_P_MAX_PER_GROUP), LogFrameGroupType.PREREQUISITE);
+		if (changes.get(AdminUtil.PROP_P_ENABLE_GROUPS) != null)
+			validateLogFrameModelEnableGroups(em, mapper, model, changes.<Boolean> get(AdminUtil.PROP_P_ENABLE_GROUPS), LogFrameGroupType.PREREQUISITE);
+		if (changes.get(AdminUtil.PROP_P_MAX_GROUPS) != null)
+			validateLogFrameModelMaxNumberOfGroups(em, mapper, model, changes.<Integer> get(AdminUtil.PROP_P_MAX_GROUPS), LogFrameGroupType.PREREQUISITE);
+	}
+
+	private static void validateLogFrameModelMaxPerFrame(EntityManager em, Mapper mapper, LogFrameModel model, Integer maxNumber, LogFrameGroupType type) throws LogFrameMaxPerFrameValidationException {
+		Query query = em.createQuery("select count(e), e.group.parentLogFrame.parentProject.name from " + LogFrameGroupType.getTypeClass(type).getSimpleName()  + " e where e.group.type=:type and e.group.parentLogFrame.logFrameModel.id=:id group by e.group.parentLogFrame.id, e.group.parentLogFrame.parentProject.name order by count(e) desc").setParameter("id", model.getId()).setParameter("type", type).setMaxResults(1);
+		try {
+			Object[] register = (Object[]) query.getSingleResult();
+			Long currentMaxValue = (Long) register[0];
+			String projectName = (String) register[1];
+			if (maxNumber < currentMaxValue) {
+				throw new LogFrameMaxPerFrameValidationException(projectName, currentMaxValue, type);
+			}
+		} catch (NoResultException e) {
+			// ignore
+		}
+	}
+	
+	private static void validateLogFrameModelMaxPerGroup(EntityManager em, Mapper mapper, LogFrameModel model, Integer maxNumber, LogFrameGroupType type) throws LogFrameMaxPerGroupValidationException {
+		Query query = em.createQuery("select count(e), e.group.parentLogFrame.parentProject.name from " + LogFrameGroupType.getTypeClass(type).getSimpleName()  + " e where e.group.type=:type and e.group.parentLogFrame.logFrameModel.id=:id group by e.group.id, e.group.parentLogFrame.parentProject.name order by count(e) desc").setParameter("id", model.getId()).setParameter("type", type).setMaxResults(1);
+		try {
+			Object[] register = (Object[]) query.getSingleResult();
+			Long currentMaxValue = (Long) register[0];
+			String projectName = (String) register[1];
+			if (maxNumber < currentMaxValue) {
+				throw new LogFrameMaxPerGroupValidationException(projectName, currentMaxValue, type);
+			}
+		} catch (NoResultException e) {
+			// ignore
+		}
+	}
+	
+	private static void validateLogFrameModelMaxNumberOfGroups(EntityManager em, Mapper mapper, LogFrameModel model, Integer maxNumber, LogFrameGroupType type) throws LogFrameMaxNumberOfGroupsValidationException {
+		Query query = em.createQuery("select count(e), e.group.parentLogFrame.parentProject.name from " + LogFrameGroupType.getTypeClass(type).getSimpleName()  + " e where e.group.type=:type and e.group.parentLogFrame.logFrameModel.id=:id group by e.group.id, e.group.parentLogFrame.parentProject.name order by count(e) desc").setParameter("id", model.getId()).setParameter("type", type).setMaxResults(1);
+		try {
+			Object[] register = (Object[]) query.getSingleResult();
+			Long currentMaxValue = (Long) register[0];
+			String projectName = (String) register[1];
+			if (maxNumber < currentMaxValue) {
+				throw new LogFrameMaxNumberOfGroupsValidationException(projectName, currentMaxValue, type);
+			}
+		} catch (NoResultException e) {
+			// ignore
+		}
+	}
+	
+	private static void validateLogFrameModelEnableGroups(EntityManager em, Mapper mapper, LogFrameModel model, Boolean enable, LogFrameGroupType type) throws LogFrameEnableGroupsValidationException {
+		if (!enable) {
+			Query query = em.createQuery("select count(g), l.parentProject.name from LogFrame l join l.groups g where l.logFrameModel.id=:id and g.type=:type group by l.id, l.parentProject.name order by count(g) desc").setParameter("id", model.getId()).setParameter("type", type).setMaxResults(1);
+			try {
+				Object[] register = (Object[]) query.getSingleResult();
+				Long currentMaxValue = (Long) register[0];
+				String projectName = (String) register[1];
+				if (currentMaxValue > 1) {
+					throw new LogFrameEnableGroupsValidationException(projectName, type);
+				}
+			} catch (NoResultException e) {
+				// ignore
+			}
+		}
+	}
+
+	private static void validateLogFrameModelMaxActivitiesPerExpectedResult(EntityManager em, Mapper mapper, LogFrameModel model, Integer maxNumber) throws LogFrameMaxPerExpectedResultValidationException {
+		Query query = em.createQuery("select count(e), e.group.parentLogFrame.parentProject.name from LogFrameActivity e where e.group.parentLogFrame.logFrameModel.id=:id group by e.parentExpectedResult.id, e.group.parentLogFrame.parentProject.name order by count(e) desc").setParameter("id", model.getId()).setMaxResults(1);
+		try {
+			Object[] register = (Object[]) query.getSingleResult();
+			Long currentMaxValue = (Long) register[0];
+			String projectName = (String) register[1];
+			if (maxNumber < currentMaxValue) {
+				throw new LogFrameMaxPerExpectedResultValidationException(projectName, currentMaxValue);
+			}
+		} catch (NoResultException e) {
+			// ignore
+		}
+	}
+
+	private static void validateLogFrameModelMaxExpectedResultsPerSpecificObjective(EntityManager em, Mapper mapper, LogFrameModel model, Integer maxNumber) throws LogFrameMaxPerSpecificObjectiveValidationException {
+		Query query = em.createQuery("select count(e), e.group.parentLogFrame.parentProject.name from ExpectedResult e where e.group.parentLogFrame.logFrameModel.id=:id group by e.parentSpecificObjective.id, e.group.parentLogFrame.parentProject.name order by count(e) desc").setParameter("id", model.getId()).setMaxResults(1);
+		try {
+			Object[] register = (Object[]) query.getSingleResult();
+			Long currentMaxValue = (Long) register[0];
+			String projectName = (String) register[1];
+			if (maxNumber < currentMaxValue) {
+				throw new LogFrameMaxPerSpecificObjectiveValidationException(projectName, currentMaxValue);
+			}
+		} catch (NoResultException e) {
+			// ignore
+		}
+	}
+
+	private static void validateFlexibleElementModel(EntityManager em, Mapper mapper, PropertyMap changes, boolean isProject) throws CommandException {
+		FlexibleElementDTO model = changes.get(AdminUtil.PROP_FX_FLEXIBLE_ELEMENT);
+		if (model != null) {
+			if (changes.get(AdminUtil.PROP_FX_IS_COMPULSARY) != null) {
+				validateCompulsoryField(em, mapper, model, changes.<Boolean> get(AdminUtil.PROP_FX_IS_COMPULSARY), changes.<LayoutGroupDTO> get(AdminUtil.PROP_FX_GROUP));
+			}
+			
+			if (model.getId() != 0) {
+				if (changes.get(AdminUtil.PROP_FX_LENGTH) != null) {
+					validateMaxLengthChange(em, model, changes.<Integer> get(AdminUtil.PROP_FX_LENGTH), isProject);
+				}
+				if (changes.get(AdminUtil.PROP_FX_MAX_LIMIT) != null) {
+					validateMaxLimitChange(em, model, changes.<Integer> get(AdminUtil.PROP_FX_MAX_LIMIT), isProject);
+				}
+			}
+		}
+	}
+
+	private static void validateCompulsoryField(EntityManager em, Mapper mapper, FlexibleElementDTO model, Boolean compulsory, LayoutGroupDTO layoutGroupDTO) throws CommandException {
+		if (compulsory) {
+			for (Phase phase : findClosedPhases(em, model, layoutGroupDTO)) {
+				Project project = phase.getParentProject();
+				if (model.getId() == 0) {
+					throw new NewCompulsoryElementValidationException(project.getName(), phase.getModel().getName());
+				} else if (!hasAssociatedValue(em, mapper, model, project)) {
+					throw new CompulsoryElementValidationException(project.getName(), phase.getModel().getName());
+				}
+			}
+		}
+	}
+
+	private static void validateMaxLimitChange(EntityManager em, FlexibleElementDTO model, Integer maxValue, boolean isProject) throws MaxValueValidationException {
+		if (model instanceof FilesListElementDTO) {
+			Object[] maxRegister = findMaxFilesListRegister(em, new Long(model.getId()));
+			if (maxRegister != null) {
+				Long currentMaxValue = (Long) maxRegister[0];
+				Integer containerId = (Integer) maxRegister[1];
+				if (maxValue < currentMaxValue) {
+					throw new MaxValueValidationException(findContainerName(em, containerId, isProject), currentMaxValue.intValue());
+				}
+			}
+		}
+	}
+
+	private static void validateMaxLengthChange(EntityManager em, FlexibleElementDTO model, Integer maxLength, boolean isProject) throws LengthValidationException {
+		if (model instanceof TextAreaElementDTO) {
+			Object[] maxRegister = findMaxLengthRegister(em, new Long(model.getId()));
+			if (maxRegister != null) {
+				Long currentMaxValue = (Long) maxRegister[0];
+				Integer containerId = (Integer) maxRegister[1];
+				if (maxLength < currentMaxValue) {
+					throw new LengthValidationException(findContainerName(em, containerId, isProject), currentMaxValue.intValue());
+				}
+			}
+		}
+	}
+
+	private static Object[] findMaxLengthRegister(EntityManager em, Long elementId) {
+		try {
+			return (Object[]) em.createQuery("select length(v.value), v.containerId from Value v where v.element.id=:id order by length(v.value) desc").setMaxResults(1).setParameter("id", elementId).getSingleResult();
+		} catch (NoResultException e) {
+			return null;
+		}
+	}
+
+	@SuppressWarnings("unchecked")
+	private static Object[] findMaxFilesListRegister(EntityManager em, Long elementId) {
+		Integer containerId = null;
+		Long maxValue = null;
+		
+		for (Object[] register : (List<Object[]>) em.createQuery("select v.value, v.containerId from Value v where v.element.id=:id").setParameter("id", elementId).getResultList()) {
+			long count = ValueResultUtils.splitElements(register[0].toString()).size();
+			if (maxValue == null || maxValue < count) {
+				maxValue = count;
+				containerId = (Integer) register[1];
+			}
+		}
+		
+		return maxValue == null ? null : new Object[] { maxValue, containerId };
+	}
+
+	private static boolean hasAssociatedValue(EntityManager em, Mapper mapper, FlexibleElementDTO model, Project project) throws CommandException {
+		GetValue cmd = new GetValue(project.getId(), model.getId(), model.getEntityName());
+		ValueResult result = new GetValueHandler(em, mapper).execute(cmd, null);
+		return model.isCorrectRequiredValue(result);
+	}
+
+	@SuppressWarnings("unchecked")
+	private static List<Phase> findClosedPhases(EntityManager em, FlexibleElementDTO model, LayoutGroupDTO layoutGroupDTO) {
+		Layout layout = findParentLayout(em, model, layoutGroupDTO);
+		return layout == null ? Collections.EMPTY_LIST : em.createQuery("select p from Phase p where p.model.layout.id=:id and p.endDate is not null").setParameter("id", layout.getId()).getResultList();
+	}
 
 	@SuppressWarnings("unchecked")
-	public static void persistFlexibleElement(EntityManager em, Mapper mapper, PropertyMap changes, Object model) {
+	private static Layout findParentLayout(EntityManager em, FlexibleElementDTO model, LayoutGroupDTO layoutGroupDTO) {
+		LayoutGroup layoutGroup = null;
+		if (layoutGroupDTO == null) { // not changed, find from original model
+			List<LayoutGroup> resultList = em.createQuery("select lc.parentLayoutGroup from LayoutConstraint lc where lc.element.id=:id").setParameter("id", new Long(model.getId())).getResultList();
+			layoutGroup = resultList.isEmpty() ? null : resultList.get(0);
+		} else { // changed, find the new group
+			layoutGroup = em.find(LayoutGroup.class, new Long(layoutGroupDTO.getId()));
+		}
+		return layoutGroup == null ? null : layoutGroup.getParentLayout();
+	}
 
-		FlexibleElementDTO flexibleEltDTO = null;
+	private static String findContainerName(EntityManager em, Integer containerId, boolean isProject) {
+		if (isProject) {
+			return (String) em.createQuery("select p.name from Project p where p.id=:id").setParameter("id", containerId).getSingleResult();
+		}
+		return (String) em.createQuery("select o.name from OrgUnit o where o.id=:id").setParameter("id", containerId).getSingleResult();
+	}
+
+	@SuppressWarnings("unchecked")
+	public static void persistFlexibleElement(EntityManager em, Mapper mapper, PropertyMap changes, Object model) throws CommandException {
+		validateFlexibleElementModel(em, mapper, changes, model instanceof ProjectModel);
+		
 		if (changes.get(AdminUtil.PROP_FX_FLEXIBLE_ELEMENT) != null) {
 			// Common attributes
 			String name = (String) changes.get(AdminUtil.PROP_FX_NAME);
@@ -120,6 +381,9 @@
 			List<String> qChoices = null;
 			if (changes.get(AdminUtil.PROP_FX_Q_CHOICES) != null)
 				qChoices = (List<String>) changes.get(AdminUtil.PROP_FX_Q_CHOICES);
+			Map<String, Boolean> choiceEnabledStatus = null;
+			if (changes.get(AdminUtil.PROP_FX_Q_CHOICES_STATUS) != null)
+				choiceEnabledStatus = (Map<String, Boolean>) changes.get(AdminUtil.PROP_FX_Q_CHOICES_STATUS);
 			List<BudgetSubFieldDTO> bSubFields = null;
 			if (changes.get(AdminUtil.PROP_FX_B_BUDGETSUBFIELDS) != null)
 				bSubFields = (List<BudgetSubFieldDTO>) changes.get(AdminUtil.PROP_FX_B_BUDGETSUBFIELDS);
@@ -131,14 +395,8 @@
 			if (changes.get(AdminUtil.PROP_FX_B_BUDGET_RATIO_DIVISOR) != null)
 				ratioDivisor = (BudgetSubFieldDTO) changes.get(AdminUtil.PROP_FX_B_BUDGET_RATIO_DIVISOR);
 
-			flexibleEltDTO = (FlexibleElementDTO) changes.get(AdminUtil.PROP_FX_FLEXIBLE_ELEMENT);
 
-			FlexibleElement flexibleElt = null;
-			if (flexibleEltDTO.getId() != 0) {
-				flexibleElt = em.find(FlexibleElement.class, new Integer(flexibleEltDTO.getId()).longValue());
-			} else {
-				flexibleElt = (FlexibleElement) createNewFlexibleElement(em, oldType, type, flexibleElt);
-			}
+			FlexibleElement flexibleElt = getFlexibleElement(em, changes, type, oldType);
 
 			log.debug("Saving : (" + name + "," + type + "," + group + "," + order + "," + inBanner + "," + posB + ","
 							+ isCompulsory + "," + pg + "," + amend + "," + exportable + ")");
@@ -366,18 +624,19 @@
 				QuestionElement questionElement = em.find(QuestionElement.class, flexibleElt.getId());
 				if (questionElement != null) {
 
+					QuestionElement choice = (QuestionElement) flexibleElt;
 					if (isMultiple != null) {
-						((QuestionElement) flexibleElt).setIsMultiple(isMultiple);
+						choice.setIsMultiple(isMultiple);
 						specificChanges = true;
 					}
 					if (category != null) {
 
-						for (QuestionChoiceElement choiceElt : ((QuestionElement) flexibleElt).getChoices()) {
+						for (QuestionChoiceElement choiceElt : choice.getChoices()) {
 							em.remove(choiceElt);
 						}
 						CategoryType categoryType = em.find(CategoryType.class, category.getId());
 						if (categoryType != null) {
-							((QuestionElement) flexibleElt).setCategoryType(categoryType);
+							choice.setCategoryType(categoryType);
 
 							List<QuestionChoiceElement> choices = new ArrayList<QuestionChoiceElement>();
 							int i = 0;
@@ -389,30 +648,43 @@
 								qChoice.setSortOrder(i++);
 								choices.add(qChoice);
 							}
-							((QuestionElement) flexibleElt).setChoices(choices);
+							choice.setChoices(choices);
 							specificChanges = true;
 						}
 					} else if (qChoices != null && qChoices.size() > 0) {
-
-						for (QuestionChoiceElement choiceElt : ((QuestionElement) flexibleElt).getChoices()) {
-							em.remove(choiceElt);
-						}
-						((QuestionElement) flexibleElt).setCategoryType(null);
-						List<QuestionChoiceElement> choices = new ArrayList<QuestionChoiceElement>();
+						choice.setCategoryType(null);
+						
+						List<QuestionChoiceElement> newChoices = new ArrayList<QuestionChoiceElement>();
+						
 						int i = 0;
 						for (String choiceLabel : qChoices) {
 							QuestionChoiceElement qChoice = new QuestionChoiceElement();
+							for (QuestionChoiceElement choiceElt : choice.getChoices()) {
+								if (choiceElt.getLabel().equals(choiceLabel)) {
+									qChoice = choiceElt;
+									break;
+								}
+							}
+							
 							qChoice.setLabel(choiceLabel);
 							qChoice.setParentQuestion(questionElement);
+							qChoice.setDisabled(choiceEnabledStatus == null ? Boolean.FALSE : choiceEnabledStatus.get(choiceLabel));
 							qChoice.setSortOrder(i++);
-							choices.add(qChoice);
+							newChoices.add(qChoice);
+						}
+
+						for (QuestionChoiceElement choiceElt : choice.getChoices()) {
+							if (!newChoices.contains(choiceElt)) {
+								em.remove(choiceElt);
+							}
 						}
-						((QuestionElement) flexibleElt).setChoices(choices);
+						
+						choice.setChoices(newChoices);
 						specificChanges = true;
 					}
 
 					if (specificChanges) {
-						flexibleElt = em.merge((QuestionElement) flexibleElt);
+						flexibleElt = em.merge(choice);
 					}
 				}
 			}
@@ -421,6 +693,17 @@
 		}
 	}
 
+	public static FlexibleElement getFlexibleElement(EntityManager em, PropertyMap changes, ElementTypeEnum type, ElementTypeEnum oldType) {
+		FlexibleElementDTO flexibleEltDTO = (FlexibleElementDTO) changes.get(AdminUtil.PROP_FX_FLEXIBLE_ELEMENT);
+		FlexibleElement flexibleElt = null;
+		if (flexibleEltDTO.getId() != 0) {
+			flexibleElt = em.find(FlexibleElement.class, new Integer(flexibleEltDTO.getId()).longValue());
+		} else {
+			flexibleElt = (FlexibleElement) createNewFlexibleElement(em, oldType, type, flexibleElt);
+		}
+		return flexibleElt;
+	}
+
 	public static String retrieveTable(String className) {
 		String table = null;
 		int bI = className.lastIndexOf(".") + 1;
Index: src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsView.java	(working copy)
@@ -15,6 +15,7 @@
 import org.sigmah.shared.command.GetImportationSchemes;
 import org.sigmah.shared.command.result.CreateResult;
 import org.sigmah.shared.command.result.ImportationSchemeListResult;
+import org.sigmah.shared.domain.ProjectModelStatus;
 import org.sigmah.shared.domain.element.DefaultFlexibleElementType;
 import org.sigmah.shared.dto.EntityDTO;
 import org.sigmah.shared.dto.OrgUnitDTO;
@@ -454,9 +455,9 @@
 	}
 
 	@Override
-	public void enableToolBar() {
+	public void enableToolBar(ProjectModelStatus projectModelStatus) {
 		// TODO Auto-generated method stub
-
+		
 	}
 
 	@Override
Index: src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java	(working copy)
@@ -10,6 +10,7 @@
 import org.sigmah.shared.dto.OrganizationDTO;
 import org.sigmah.shared.dto.value.FileUploadUtils;
 
+import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.google.gwt.core.client.GWT;
 import com.google.gwt.event.dom.client.ChangeEvent;
@@ -73,91 +74,101 @@
         view.getOrganizationNameTextBox().addChangeHandler(changeHandler);
         view.getLogoFileUpload().addChangeHandler(changeHandler);
 
-        organization = cache.getOrganizationCache().getOrganization();
-        view.getOrganizationNameTextBox().setText(organization.getName());
+        cache.getOrganizationCache().getOrganization(new AsyncCallback<OrganizationDTO>() {
+			public void onSuccess(OrganizationDTO result) {
+				organization = result;
 
-        if (organization.getLogo() != null) {
-            view.getLogoImage().setUrl(
-                GWT.getModuleBaseURL()
-                    + "image-provider?"
-                    + FileUploadUtils.IMAGE_URL
-                    + "="
-                    + organization.getLogo()
-                    + "&tmstmp="
-                    + System.currentTimeMillis());
-        } else {
+		        view.getOrganizationNameTextBox().setText(organization.getName());
 
-            view.getLogoImage().setUrl(
-                GWT.getModuleBaseURL()
-                    + "image-provider?"
-                    + FileUploadUtils.IMAGE_URL
-                    + "="
-                    + FileUploadUtils.DEFAULT_LOGO_FILE_NAME);
-        }
+		        if (organization.getLogo() != null) {
+		            view.getLogoImage().setUrl(
+		                GWT.getModuleBaseURL()
+		                    + "image-provider?"
+		                    + FileUploadUtils.IMAGE_URL
+		                    + "="
+		                    + organization.getLogo()
+		                    + "&tmstmp="
+		                    + System.currentTimeMillis());
+		        } else {
 
-        view.getFileFormPanel().setAction(
-            GWT.getModuleBaseURL() + "image-provider?organization=" + organization.getId());
+		            view.getLogoImage().setUrl(
+		                GWT.getModuleBaseURL()
+		                    + "image-provider?"
+		                    + FileUploadUtils.IMAGE_URL
+		                    + "="
+		                    + FileUploadUtils.DEFAULT_LOGO_FILE_NAME);
+		        }
 
-        view.getFileFormPanel().addSubmitCompleteHandler(new SubmitCompleteHandler() {
+		        view.getFileFormPanel().setAction(
+		            GWT.getModuleBaseURL() + "image-provider?organization=" + organization.getId());
 
-            @Override
-            public void onSubmitComplete(SubmitCompleteEvent event) {
-                view.getLogoImage().setUrl(
-                    GWT.getModuleBaseURL()
-                        + "image-provider?"
-                        + FileUploadUtils.IMAGE_URL
-                        + "="
-                        + organization.getLogo()
-                        + "&tmstmp="
-                        + System.currentTimeMillis());
-                Notification.show(I18N.CONSTANTS.organizationManagementLogoNotificationTitle(),
-                    I18N.CONSTANTS.organizationManagementLogoNotificationMessage());
-            }
-        });
+		        view.getFileFormPanel().addSubmitCompleteHandler(new SubmitCompleteHandler() {
 
-        view.getSaveButton().addClickHandler(new ClickHandler() {
+		            @Override
+		            public void onSubmitComplete(SubmitCompleteEvent event) {
+		                view.getLogoImage().setUrl(
+		                    GWT.getModuleBaseURL()
+		                        + "image-provider?"
+		                        + FileUploadUtils.IMAGE_URL
+		                        + "="
+		                        + organization.getLogo()
+		                        + "&tmstmp="
+		                        + System.currentTimeMillis());
+		                Notification.show(I18N.CONSTANTS.organizationManagementLogoNotificationTitle(),
+		                    I18N.CONSTANTS.organizationManagementLogoNotificationMessage());
+		            }
+		        });
 
-            @Override
-            public void onClick(ClickEvent event) {
-                if (view.getOrganizationNameTextBox().getText().isEmpty()) {
-                    Window.alert(I18N.CONSTANTS.organizationManagementBlankNameNotificationError());
-                } else {
-                    if (!view.getLogoFileUpload().getFilename().isEmpty()) {
-                        view.getFileFormPanel().submit();
-                    }
+		        view.getSaveButton().addClickHandler(new ClickHandler() {
 
-                    dispatcher.execute(
-                        new UpdateOrganization(organization, view.getOrganizationNameTextBox().getText()), null,
-                        new AsyncCallback<OrganizationResult>() {
+		            @Override
+		            public void onClick(ClickEvent event) {
+		                if (view.getOrganizationNameTextBox().getText().isEmpty()) {
+		                    Window.alert(I18N.CONSTANTS.organizationManagementBlankNameNotificationError());
+		                } else {
+		                    if (!view.getLogoFileUpload().getFilename().isEmpty()) {
+		                        view.getFileFormPanel().submit();
+		                    }
 
-                            @Override
-                            public void onFailure(Throwable arg0) {
-                                Window.alert(I18N.CONSTANTS.organizationManagementWebServiceNotificationError());
-                            }
+		                    dispatcher.execute(
+		                        new UpdateOrganization(organization, view.getOrganizationNameTextBox().getText()), null,
+		                        new AsyncCallback<OrganizationResult>() {
 
-                            @Override
-                            public void onSuccess(OrganizationResult result) {
+		                            @Override
+		                            public void onFailure(Throwable arg0) {
+		                                Window.alert(I18N.CONSTANTS.organizationManagementWebServiceNotificationError());
+		                            }
 
-                                fieldValueChanged = false;
-                                cache.refreshOrganization(new AsyncCallback<Void>() {
+		                            @Override
+		                            public void onSuccess(OrganizationResult result) {
 
-                                    @Override
-                                    public void onSuccess(Void arg0) {
-                                        Notification.show(
-                                            I18N.CONSTANTS.organizationManagementSaveChangesNotificationTitle(),
-                                            I18N.CONSTANTS.organizationManagementSaveChangesNotificationMessage());
-                                    }
+		                                fieldValueChanged = false;
+		                                cache.refreshOrganization(new AsyncCallback<Void>() {
 
-                                    @Override
-                                    public void onFailure(Throwable arg0) {
-                                        Window.alert(I18N.CONSTANTS.organizationManagementLocalCacheNotificationError());
-                                    }
-                                });
-                            }
-                        });
-                }
-            }
-        });
+		                                    @Override
+		                                    public void onSuccess(Void arg0) {
+		                                        Notification.show(
+		                                            I18N.CONSTANTS.organizationManagementSaveChangesNotificationTitle(),
+		                                            I18N.CONSTANTS.organizationManagementSaveChangesNotificationMessage());
+		                                    }
+
+		                                    @Override
+		                                    public void onFailure(Throwable arg0) {
+		                                        Window.alert(I18N.CONSTANTS.organizationManagementLocalCacheNotificationError());
+		                                    }
+		                                });
+		                            }
+		                        });
+		                }
+		            }
+		        });				
+			}
+			
+			@Override
+			public void onFailure(Throwable caught) {
+				Log.error("[execute] Error while getting the organization", caught);
+			}
+		});
     }
 
     @Override
Index: src/main/java/org/sigmah/shared/domain/ProjectModelStatus.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/ProjectModelStatus.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/ProjectModelStatus.java	(working copy)
@@ -10,7 +10,7 @@
  */
 public enum ProjectModelStatus {
 
-	DRAFT, READY, USED, UNAVAILABLE;
+	DRAFT, UNDER_MAINTENANCE, READY, USED, UNAVAILABLE;
 
     /**
      * Gets the translation value for the given status. To use only on the
@@ -27,9 +27,9 @@
 		case READY : statusName = I18N.CONSTANTS.READY(); break;
 		case USED : statusName = I18N.CONSTANTS.USED(); break;
 		case UNAVAILABLE : statusName = I18N.CONSTANTS.UNAVAILABLE(); break;
+		case UNDER_MAINTENANCE : statusName = I18N.CONSTANTS.UNDER_MAINTENANCE(); break;
 		default : statusName = null;
 		}
-		
 		return statusName;
 	}
     
@@ -43,8 +43,13 @@
     		statusEnum = USED;
     	}else if(I18N.CONSTANTS.UNAVAILABLE().equals(status)){
     		statusEnum = UNAVAILABLE;
+    	}else if(I18N.CONSTANTS.UNDER_MAINTENANCE().equals(status)){
+    		statusEnum = UNDER_MAINTENANCE;
     	}
-		
 		return statusEnum;
 	}
+    
+    public boolean isEditable() {
+    	return this == DRAFT || this == UNDER_MAINTENANCE;
+    }
 }
Index: src/main/java/org/sigmah/client/i18n/UIMessages.properties
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(working copy)
@@ -54,7 +54,7 @@
 
 adminStandardCreationSuccessF = New {0} has been successfully created.
 
-adminStandardLayoutGroup = fields group
+adminStandardLayoutGroup = Layout groups
 
 adminStandardPhase = phase
 
@@ -233,4 +233,31 @@
 #Heading for the reviewing the details imported for a project/org unit
 importConfirmationDetailsHeading=Confirm importation details for {0}
 #Notification that the importation has been successful
-importSuccessful=The importation was successful for  ''{0}''
\ No newline at end of file
+importSuccessful=The importation was successful for  ''{0}''
+
+adminLayoutGroupConfirmDelete=Are you sure you want to delete these groups : ''{0}'' ?
+adminErrorDeleteNotEmptyGroup=You are not allowed to delete groups with associated fields: ''{0}''.
+adminLayoutGroupNone=You have not selected a group. Please select one row or more.
+
+flexibleElementDisableError = Failed to disable elements: ''{0}''.
+adminErrorDisableDefaultOrAmendableFlexible = You are not allowed to disable compulsory or amendable fields : ''{0}'' !
+
+adminFlexibleDisableNone = You did not select any field! Please select one row or more.
+adminFlexibleConfirmDisable = Are you sure you want to disable these fields : ''{0}'' ?
+
+flexibleElementLengthValidation = ''Number of Characters'' cannot be lower than {0} because there is a field with this value on ''{1}'' !
+flexibleElementMaxValueValidation = ''Max value'' cannot be lower than {0} because there is a field with this value on ''{1}'' !
+flexibleElementCompulsoryElementValidation = You cannot set this field as required on phase ''{0}'' because this phase is closed on project ''{1}'' !
+flexibleElementCompulsoryNewElementValidation = You cannot add this required field on phase ''{0}'' because this phase is closed on project ''{1}'' !
+
+logFrameModelMaxPerFrameValidation = ''Max. number of {0}s'' cannot be lower than {1} because it would violate Log Frame structure of the project ''{2}''.
+logFrameModelMaxPerGroupValidation = ''Max. number of {0}s per Group'' cannot be lower than {1} because it would violate Log Frame structure of the project ''{2}''.
+logFrameModelMaxNumberOfGroupsValidation = ''Max. number of {0} Groups'' cannot be lower than {1} because it would violate Log Frame structure of the project ''{2}''.
+logFrameModelEnableGroupsValidation = ''{0} Groups'' cannot be disabled because it would violate Log Frame structure of the project ''{1}''.
+logFrameModelMaxPerExpectedResultValidation = ''Max. number of As per ER'' cannot be lower than {0} because it would violate Log Frame structure of the project ''{1}''.
+logFrameModelMaxPerSpecificObjectiveValidation = ''Max. number of ERs per SO'' cannot be lower than {0} because it would violate Log Frame structure of the project ''{1}''.
+
+projectMaintenanceMessage = This project is under maintenance, modifications are not allowed.
+orgUnitMaintenanceMessage = This organization is under maintenance, modifications are not allowed.
+projectMaintenanceScheduledMessage = WARNING: This project will be put into maintenance at ''{0}'', be aware that during this period modifications will not be allowed. 
+orgUnitMaintenanceScheduledMessage = This organization unit will be put into maintenance at ''{0}'', be aware that during this period modifications will not be allowed. 
\ No newline at end of file
Index: src/main/java/org/sigmah/client/ui/DateTimeField.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/DateTimeField.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/DateTimeField.java	(working copy)
@@ -0,0 +1,132 @@
+package org.sigmah.client.ui;
+
+import java.util.Date;
+
+import com.extjs.gxt.ui.client.util.DateWrapper;
+import com.extjs.gxt.ui.client.util.Margins;
+import com.extjs.gxt.ui.client.util.Padding;
+import com.extjs.gxt.ui.client.widget.LayoutContainer;
+import com.extjs.gxt.ui.client.widget.form.AdapterField;
+import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
+import com.extjs.gxt.ui.client.widget.form.DateField;
+import com.extjs.gxt.ui.client.widget.form.DateTimePropertyEditor;
+import com.extjs.gxt.ui.client.widget.form.Time;
+import com.extjs.gxt.ui.client.widget.form.TimeField;
+import com.extjs.gxt.ui.client.widget.layout.HBoxLayout;
+import com.extjs.gxt.ui.client.widget.layout.HBoxLayout.HBoxLayoutAlign;
+import com.extjs.gxt.ui.client.widget.layout.HBoxLayoutData;
+import com.google.gwt.i18n.client.DateTimeFormat;
+import com.google.gwt.user.client.ui.Widget;
+
+public class DateTimeField extends AdapterField {
+	protected String datePattern;
+	protected String timePattern;
+	
+	protected DateField dateField;
+	protected TimeField timeField;
+	
+	public DateTimeField() {
+		super(null);
+		this.widget = createWidget();
+	}
+	
+	public DateField getDateField() {
+		return dateField;
+	}
+	
+	public TimeField getTimeField() {
+		return timeField;
+	}
+	
+	public Date getDate() {
+		DateWrapper dateWrapper = getDateWrapper();
+		return dateWrapper == null ? null : dateWrapper.asDate();
+	}
+	
+	public Time getTime() {
+		return timeField.getValue();
+	}
+	
+	public DateWrapper getDateWrapper() {
+		Date date = dateField.getValue();
+		if (date != null) {
+			DateWrapper dateWrapper = new DateWrapper(date);
+			dateWrapper.clearTime();
+			return dateWrapper;
+		}
+		return null;
+	}
+	
+	public void setDatePattern(String datePattern) {
+		this.datePattern = datePattern;
+		dateField.setPropertyEditor(new DateTimePropertyEditor(datePattern));
+	}
+	
+	public String getDatePattern() {
+		return datePattern;
+	}
+	
+	public void setTimePattern(String timePattern) {
+		this.timePattern = timePattern;
+		timeField.setFormat(DateTimeFormat.getFormat(timePattern));
+	}
+	
+	public String getTimePattern() {
+		return timePattern;
+	}
+	
+	public Date getDateTime() {
+		DateWrapper dateValueWrapper = getDateWrapper();
+		if (dateValueWrapper == null) {
+			return null;
+		}
+		
+		Time time = getTime();
+		if (time != null) {
+			dateValueWrapper = dateValueWrapper.addHours(time.getHour());
+			dateValueWrapper = dateValueWrapper.addMinutes(time.getMinutes());
+		}
+		return new Date(dateValueWrapper.getTime());
+	}
+
+	public Date getValue() {
+		return getDateTime();
+	}
+	
+	public void setValue(Date value) {
+		dateField.setValue(value);
+		if (value == null) {
+			timeField.setValue(null);
+		} else {
+			timeField.setDateValue(value);
+		}
+	}
+	
+	protected Widget createWidget() {
+		dateField = new DateField();
+		
+		timeField = new TimeField();
+		timeField.setTriggerAction(TriggerAction.ALL);
+		timeField.setIncrement(1);
+		timeField.setEditable(true);
+		
+		setTimePattern("HH:mm");
+
+        LayoutContainer container = new LayoutContainer();
+        
+        HBoxLayout layout = new HBoxLayout();  
+        layout.setPadding(new Padding(5));  
+        layout.setHBoxLayoutAlign(HBoxLayoutAlign.MIDDLE);  
+
+        HBoxLayoutData dateLayoutData = new HBoxLayoutData(new Margins(0, 5, 0, 0));  
+        dateLayoutData.setFlex(2);
+
+        HBoxLayoutData timeLayoutData = new HBoxLayoutData(new Margins(0));  
+        timeLayoutData.setFlex(2);
+        
+        container.setLayout(layout);
+        container.add(dateField, dateLayoutData);
+        container.add(timeField, timeLayoutData);  
+		return container;
+	}
+}
Index: src/main/java/org/sigmah/shared/command/result/GenericResult.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/result/GenericResult.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/result/GenericResult.java	(working copy)
@@ -0,0 +1,24 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.command.result;
+
+public class GenericResult<T> implements CommandResult {
+	private static final long serialVersionUID = -3744789104924210704L;
+	
+	private T result;
+
+	public GenericResult(T result) {
+		this.result = result;
+	}
+	
+	public T getResult() {
+		return result;
+	}
+	
+	public void setResult(T result) {
+		this.result = result;
+	}
+}
Index: src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java	(working copy)
@@ -1,6 +1,7 @@
 package org.sigmah.shared.dto;
 
 import java.util.ArrayList;
+import java.util.Date;
 import java.util.HashMap;
 import java.util.List;
 
@@ -129,12 +130,51 @@
         final Boolean b = get("topModel");
         return b != null ? b : false;
     }
-    
+
+	public List<LayoutGroupDTO> getAllLayoutGroups() {
+		List<LayoutGroupDTO> allGroups = new ArrayList<LayoutGroupDTO>();
+
+		// Project Details
+		OrgUnitDetailsDTO d = getDetails();
+		d.setName();
+		setDetails(d);
+
+		if (getDetails().getLayout() != null) {
+			for (LayoutGroupDTO group : getDetails().getLayout().getLayoutGroupsDTO()) {
+				group.setContainerModel(getDetails());
+				allGroups.add(group);
+			}
+		}
+
+		return allGroups;
+	}
+
     public List<FlexibleElementDTO> getAllElements(){
     	List<FlexibleElementDTO> allElements = new ArrayList<FlexibleElementDTO>();
-    	List<FlexibleElementDTO> bannerElements = new ArrayList<FlexibleElementDTO>();
-    	
-    	//banner
+
+		// banner
+		List<FlexibleElementDTO> bannerElements = getBannerElements();
+		
+		// elements
+		for (LayoutGroupDTO lg : getAllLayoutGroups()) {
+			for (LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()) {
+				FlexibleElementDTO f = lc.getFlexibleElementDTO();
+				f.setGroup(lg);
+				f.setConstraint(lc);
+				for (FlexibleElementDTO bf : bannerElements) {
+					if (f.getId() == bf.getId()) {
+						f.setBannerConstraint(bf.getBannerConstraint());
+					}
+				}
+				allElements.add(f);
+			}
+    	}
+		
+		return allElements;
+    }
+    
+	private List<FlexibleElementDTO> getBannerElements() {
+		List<FlexibleElementDTO> bannerElements = new ArrayList<FlexibleElementDTO>();
 		if(this.getBanner().getLayout()!=null){
 			for(LayoutGroupDTO lg : getBanner().getLayout().getLayoutGroupsDTO()){
 				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
@@ -144,31 +184,8 @@
 				}
 			}
 		}
-		
-		//Details
-		OrgUnitDetailsDTO d = getDetails();
-		d.setName();
-		setDetails(d);
-		if(getDetails().getLayout()!=null){
-			for(LayoutGroupDTO lg : getDetails().getLayout().getLayoutGroupsDTO()){
-				for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-					FlexibleElementDTO f = lc.getFlexibleElementDTO();
-					f.setGroup(lg);
-					f.setConstraint(lc);
-					f.setContainerModel(getDetails());
-					for(FlexibleElementDTO bf : bannerElements){
-						if(f.getId()== bf.getId()){
-							f.setBannerConstraint(bf.getBannerConstraint());
-						}
-					}
-					allElements.add(f);					
-				}
-			}
-		}
-		
-		
-		return allElements;
-    }
+		return bannerElements;
+	}
     
 	/**
 	 * Gets all the flexible elements instances of the given class in this model
@@ -209,4 +226,16 @@
         }
         return localizedElements.get(clazz);
     }
+
+	public Date getDateMaintenance() {
+		return get("dateMaintenance");
+	}
+	
+	public void setDateMaintenance(Date date) {
+		set("dateMaintenance", date);
+	}
+
+	public boolean isUnderMaintenance() {
+		return getStatus() == ProjectModelStatus.UNDER_MAINTENANCE;
+	}
 }
Index: src/main/java/org/sigmah/client/ui/ClickableLabel.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClickableLabel.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClickableLabel.java	(working copy)
@@ -6,7 +6,11 @@
 
 import org.sigmah.client.icon.IconImageBundle;
 
+import com.extjs.gxt.ui.client.event.BaseEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
 import com.extjs.gxt.ui.client.widget.form.AdapterField;
+import com.extjs.gxt.ui.client.widget.form.CheckBox;
 import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.ui.Grid;
 import com.google.gwt.user.client.ui.Image;
@@ -16,46 +20,82 @@
  * @author nrebiai
  */
 public class ClickableLabel extends AdapterField{
+	public enum Mode {
+		DELETE,
+		SELECT
+	}
 	
+	private String text;
 	private Grid grid;		
+
 	private Image deleteIcon;
-	private String text;
+	private CheckBox checkBox;
+	
+	public ClickableLabel() {
+		this(Mode.DELETE);
+	}
 	
-	public ClickableLabel(){
+	public ClickableLabel(Mode mode) {
 		super(null);
 		
-		Grid grid = new Grid(1,2);
-		deleteIcon = IconImageBundle.ICONS.deleteIcon().createImage();
+		this.deleteIcon = IconImageBundle.ICONS.deleteIcon().createImage();
+		this.checkBox = new CheckBox();
+		this.grid = new Grid(1, 2);
 		
-		grid.setWidget(0, 0, deleteIcon);
+		setClickMode(mode);
+		
 		grid.setCellSpacing(0);
 		grid.getCellFormatter().setWidth(0, 0, "5px");
 		grid.getCellFormatter().addStyleName(0, 0, "delete-cell");
 		grid.getCellFormatter().addStyleName(0, 1, "delete-cell");
 		
-		this.grid = grid;
 		this.widget = grid;
-		setLabelSeparator(" ");
 		
+		setLabelSeparator(" ");
+	}
+
+	public void setClickMode(Mode mode) {
+		if (mode == Mode.DELETE) {
+			grid.setWidget(0, 0, deleteIcon);
+		} else if (mode == Mode.SELECT) {
+			grid.setWidget(0, 0, checkBox);
+		}
 	}
 	
+	public void setSelected(boolean selected) {
+		checkBox.setValue(selected);
+	}
 	
-	public void setText(String s){
-		this.text = s;
-		grid.setText(0, 1, s);
+	public boolean isSelected() {
+		return checkBox.getValue();
 	}
 	
-	public String getText(){
+	public void setText(String text){
+		this.text = text;
+		grid.setText(0, 1, text);
+	}
+	
+	public String getText() {
 		return text;
 	}
 	
-	public Grid getGrid(){
+	public Grid getGrid() {
 		return grid;
 	}
 
 	public void addClickHandler(ClickHandler handler){
 		deleteIcon.addClickHandler(handler);
 	}
-		
-}
+	
+	public void addSelectListener(Listener<? extends BaseEvent> listener) {
+		checkBox.addListener(Events.Change, listener);
+	}
 
+	public void removeTextStyleName(String styleName) {
+		grid.getCellFormatter().removeStyleName(0, 1, styleName);
+	}
+
+	public void addTextStyleName(String styleName) {
+		grid.getCellFormatter().addStyleName(0, 1, styleName);
+	}
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/exception/LogFrameEnableGroupsValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameEnableGroupsValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameEnableGroupsValidationException.java	(working copy)
@@ -0,0 +1,29 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.shared.domain.logframe.LogFrameGroupType;
+
+public class LogFrameEnableGroupsValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = 4430708836380754957L;
+	
+	private String projectName;
+	private LogFrameGroupType type;
+	
+	public LogFrameEnableGroupsValidationException() {
+	}
+	
+	public LogFrameEnableGroupsValidationException(String projectName, LogFrameGroupType type) {
+		this.projectName = projectName;
+		this.type = type;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelEnableGroupsValidation(LogFrameGroupType.getShorteningName(type), projectName);
+	}
+}
Index: src/main/java/org/sigmah/shared/dto/layout/LayoutGroupDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/layout/LayoutGroupDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/layout/LayoutGroupDTO.java	(working copy)
@@ -88,6 +88,14 @@
         set("layoutConstraintsDTO", layoutConstraintsDTO);
     }
 
+    public BaseModelData getContainerModel() {
+        return get("container");
+    }
+
+    public void setContainerModel(BaseModelData model) {
+        set("container", model);
+    }
+
     public Widget getWidget() {
         final FieldSet fieldSet = new FieldSet();
         fieldSet.setHeading(getTitle());
Index: src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java	(working copy)
@@ -320,6 +320,7 @@
 
 	private boolean isEditable() {
 		return logFrame != null && currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
+						&& !currentProjectDTO.getProjectModelDTO().isUnderMaintenance()
 		                && currentProjectDTO.getCurrentAmendment() == null
 		                && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
 		                && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_LOGFRAME);
Index: src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java	(working copy)
@@ -347,7 +347,9 @@
 			mainPanel.setHeading(getLabel());
 		}
 
-		mainPanel.setTopComponent(actionsToolBar);
+		if (enabled) {
+			mainPanel.setTopComponent(actionsToolBar);
+		}
 		mainPanel.add(filesGrid);
 
 		return mainPanel;
Index: src/main/java/org/sigmah/server/policy/OrgUnitModelPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/OrgUnitModelPolicy.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/OrgUnitModelPolicy.java	(working copy)
@@ -1,14 +1,18 @@
 package org.sigmah.server.policy;
 
 import java.util.ArrayList;
+import java.util.Date;
 import java.util.List;
 
 import javax.persistence.EntityManager;
+
 import org.apache.commons.logging.Log;
 import org.apache.commons.logging.LogFactory;
 import org.dozer.Mapper;
+import org.quartz.SchedulerException;
 import org.sigmah.client.page.admin.AdminUtil;
 import org.sigmah.server.policy.admin.ModelUtil;
+import org.sigmah.server.schedule.maintenance.MaintenanceScheduler;
 import org.sigmah.shared.domain.OrgUnitBanner;
 import org.sigmah.shared.domain.OrgUnitDetails;
 import org.sigmah.shared.domain.OrgUnitModel;
@@ -16,10 +20,12 @@
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.element.DefaultFlexibleElement;
 import org.sigmah.shared.domain.element.DefaultFlexibleElementType;
+import org.sigmah.shared.domain.layout.Layout;
 import org.sigmah.shared.domain.layout.LayoutConstraint;
 import org.sigmah.shared.domain.layout.LayoutGroup;
 import org.sigmah.shared.dto.OrgUnitModelDTO;
-import org.sigmah.shared.domain.layout.Layout;
+import org.sigmah.shared.exception.CommandException;
+
 import com.google.inject.Inject;
 
 /**
@@ -29,23 +35,24 @@
  * 
  */
 public class OrgUnitModelPolicy implements EntityPolicy<OrgUnitModel>  {
-
     private final EntityManager em;
     private final Mapper mapper;
+    private final MaintenanceScheduler maintenanceScheduler;
+
     private OrgUnitModelDTO orgUnitModel;
     private OrgUnitModel modelToUpdate;
     
-	
 	private final static Log log = LogFactory.getLog(OrgUnitModelPolicy.class);
 
     @Inject
-    public OrgUnitModelPolicy(EntityManager em, Mapper mapper) {
+    public OrgUnitModelPolicy(EntityManager em, Mapper mapper, MaintenanceScheduler maintenanceScheduler) {
         this.em = em;
         this.mapper = mapper;
+        this.maintenanceScheduler = maintenanceScheduler;
     }
 
     @Override
-    public Object create(User user, PropertyMap properties) {
+    public Object create(User user, PropertyMap properties) throws CommandException {
     	
     	orgUnitModel = (OrgUnitModelDTO) properties.get(AdminUtil.ADMIN_ORG_UNIT_MODEL);
     	//Only draft models can be changed
@@ -136,7 +143,7 @@
     }
 
 	@Override
-	public void update(User user, Object entity, PropertyMap changes) {
+	public void update(User user, Object entity, PropertyMap changes) throws CommandException {
 		OrgUnitModel model = null;
 		if(orgUnitModel != null){
 			model = em.find(OrgUnitModel.class, new Integer(orgUnitModel.getId()));		
@@ -157,7 +164,7 @@
 			
 	}
 	
-	private OrgUnitModel createOrgUnitModel(OrgUnitModel oM, PropertyMap properties, User user){
+	private OrgUnitModel createOrgUnitModel(OrgUnitModel oM, PropertyMap properties, User user) throws CommandException{
 		if(oM == null)
 			oM = new OrgUnitModel();
 		
@@ -184,12 +191,29 @@
 		if(properties.get(AdminUtil.PROP_OM_STATUS) !=null)
 		{
 			oM.setStatus((ProjectModelStatus)properties.get(AdminUtil.PROP_OM_STATUS));
+
+	        if (oM.getStatus() != ProjectModelStatus.UNDER_MAINTENANCE) {
+	        	oM.setDateMaintenance(null);
+	        }
 		}
 		else
 		{
 		    oM.setStatus(ProjectModelStatus.DRAFT);
 		}
-		
+
+		if (properties.get(AdminUtil.PROP_OM_MAINTENANCE_DATE) != null) {
+        	oM.setDateMaintenance(properties.<Date>get(AdminUtil.PROP_OM_MAINTENANCE_DATE));
+		}
+
+        updateMaintenanceScheduling(oM);
 		return oM;
 	}
+
+	private void updateMaintenanceScheduling(OrgUnitModel orgUnitModel) throws CommandException {
+		try {
+			maintenanceScheduler.updateMaintenanceScheduling(orgUnitModel);
+		} catch (SchedulerException e) {
+			throw new CommandException(e);
+		}
+	}
 }
Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -24,6 +24,8 @@
 
 DRAFT = Draft
 
+UNDER_MAINTENANCE = Under maintenance
+
 EDIT_PROJECT = Edit project
 
 DELETE_PROJECT = Delete project
@@ -128,7 +130,7 @@
 # Flexible element administration
 adminFlexible = Field
 
-adminFlexibleAddGroup = Add layout group
+adminFlexibleAddGroup = Add group
 
 adminFlexibleAmendable = Amendable
 
@@ -430,6 +432,8 @@
 
 adminProjectModelPhases = Phases
 
+adminProjectModelLayoutGroups = Groups
+
 adminProjectModelReports = Reports
 
 adminProjectModelStandard = project model
@@ -2388,4 +2392,19 @@
 #Name for permission not included in any catebory
 categoryNotMapped = Not in any Category
 
+adminLayoutGroupName = Group
+adminDeleteLayoutGroupsConfirm = The selected groups have been already deleted.
+adminDeleteLayoutGroups = Delete selected groups
+
+disable = Disable
+adminFlexibleDisableFlexibleElements = Disable selected fields
+adminFlexibleDisableFlexibleElementsConfirm = The selected fields have been already disabled.
 
+adminOneModelPutIntoMaintenance = Under maintenance
+adminOneModelMaintenanceDate = Schedule 'Under maintenance' status
+adminOneModelMaintenanceStartDate = Started at
+adminOneModelInvalidDate = Invalid date, you should select a future date and time.
+adminOneModelMaintenanceDateAlert = Scheduling alert
+adminOneModelMaintenanceDateAlertConfirmMessage = You did not select any date to schedule the maintenance, therefore this model will be put into maintenance 30 minutes from now. Confirm?
+
+maintenanceScheduledAlert = Alert
Index: src/main/java/org/sigmah/shared/exception/LogFrameMaxNumberOfGroupsValidationException.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxNumberOfGroupsValidationException.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/exception/LogFrameMaxNumberOfGroupsValidationException.java	(working copy)
@@ -0,0 +1,31 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+
+package org.sigmah.shared.exception;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.shared.domain.logframe.LogFrameGroupType;
+
+public class LogFrameMaxNumberOfGroupsValidationException extends CommandException implements ClientException {
+	private static final long serialVersionUID = 4430708836380754957L;
+	
+	private Long limit;
+	private String projectName;
+	private LogFrameGroupType type;
+	
+	public LogFrameMaxNumberOfGroupsValidationException() {
+	}
+	
+	public LogFrameMaxNumberOfGroupsValidationException(String projectName, Long limit, LogFrameGroupType type) {
+		this.projectName = projectName;
+		this.limit = limit;
+		this.type = type;
+    }
+
+	@Override
+	public String generateClientMessage() {
+		return I18N.MESSAGES.logFrameModelMaxNumberOfGroupsValidation(LogFrameGroupType.getShorteningName(type), limit.toString(), projectName);
+	}
+}
Index: src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(working copy)
@@ -137,6 +137,8 @@
 
     private Timer autoSaveTimer;
 
+	private boolean readOnly;
+
     public OrgUnitReportsView(Authentication authentication, EventBus eventBus, Dispatcher dispatcher, ListStore<ReportReference> store) {
 
         this.authentication = authentication;
@@ -288,7 +290,7 @@
                         public void onClick(ClickEvent event) {
                             // Opening a report
 
-                            setReport(null); // Closing the current report
+                        	clearReport(); // Closing the current report
                             mainPanel.mask(I18N.CONSTANTS.loading());
 
                             final OrgUnitState state = new OrgUnitState(currentState.getOrgUnitId());
@@ -422,6 +424,10 @@
         parent.add(sectionPanel);
     }
 
+    public void clearReport() {
+    	setReport(null);
+    }
+    
     public void setReport(final ProjectReportDTO report) {
         mainPanel.removeAll();
         // currentReport = report;
@@ -483,7 +489,7 @@
 
         final IconImageBundle icons = GWT.create(IconImageBundle.class);
 
-        if (report.isDraft()) {
+        if (!readOnly && report.isDraft()) {
             // Draft banner
             final HorizontalPanel header = new HorizontalPanel();
             header.addStyleName("project-report-draft");
@@ -657,9 +663,9 @@
             autoSaveTimer.schedule(AUTO_SAVE_PERIOD);
 
         } else {
-            final Button editReportButton = new Button(I18N.CONSTANTS.edit(), icons.editPage());
+        	Button editReportButton = new Button(I18N.CONSTANTS.edit(), icons.editPage());
 
-            if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT)) {
+            if (!isReadOnly() && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_UNIT)) {
                 toolBar.add(editReportButton);
             }
 
@@ -778,6 +784,14 @@
         mainPanel.unmask();
     }
 
+    public boolean isReadOnly() {
+		return readOnly;
+	}
+    
+    public void setReadOnly(boolean readOnly) {
+		this.readOnly = readOnly;
+	}
+
     private void createRichTextToolbar(final ToolBar toolbar) {
         createRichTextToolbar(toolbar, globalFormatterArray);
     }
@@ -997,7 +1011,7 @@
     public Button getCreateReportButton() {
         return createReportButton;
     }
-
+    
     public boolean isTextAreaChanged() {
         boolean changed = false;
         if (textAreas != null) {
