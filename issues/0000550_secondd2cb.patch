Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1504)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -51,6 +51,10 @@
 
 EDIT_LOGFRAME = Edit logframe
 
+EDIT_OWN_REMINDER = Edit own reminder
+
+EDIT_ALL_REMINDERS = Edit all reminders
+
 acronym = Acronym
 
 activities = Activities
Index: src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java	(Revision 1504)
+++ src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java	(Arbeitskopie)
@@ -5,13 +5,18 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.project.dashboard.EditFormWindow.FormSubmitListener;
 import org.sigmah.client.page.project.dashboard.ProjectDashboardPresenter.View;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.UpdateEntity;
 import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.reminder.MonitoredPointDTO;
+import org.sigmah.shared.dto.reminder.MonitoredPointHistoryDTO;
 
 import com.extjs.gxt.ui.client.event.Listener;
 import com.extjs.gxt.ui.client.event.MessageBoxEvent;
@@ -26,42 +31,60 @@
 import com.google.gwt.user.client.rpc.AsyncCallback;
 
 /**
- * A cell renderer for label column in a monitored point grid 
+ * A cell renderer for label column in a monitored point grid
  * 
  * @author HUZHE
- *
+ * 
  */
 public class MonitoredPointLabelCellRender implements GridCellRenderer<MonitoredPointDTO> {
 
-	
 	private ProjectDashboardPresenter.View view;
 	private Dispatcher dispatcher;
-	
+	private final Authentication authentication;
+
 	/**
 	 * @param view
 	 * @param dispatcher
 	 */
-	public MonitoredPointLabelCellRender(View view, Dispatcher dispatcher) {
+	public MonitoredPointLabelCellRender(View view, Dispatcher dispatcher, Authentication authentication) {
 		super();
 		this.view = view;
 		this.dispatcher = dispatcher;
+		this.authentication = authentication;
 	}
 
 	@Override
-	public Object render(final MonitoredPointDTO model, String property,
-			ColumnData config, int rowIndex, int colIndex,
-			ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
-		
-		
-		//Create a lable with a hyperlink style 
+	public Object render(final MonitoredPointDTO model, String property, ColumnData config, int rowIndex, int colIndex,
+					ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+
+		boolean creator = false;
+		for (MonitoredPointHistoryDTO hist : model.getHistory()) {
+			if (hist.getType() == ReminderChangeType.CREATED)
+				creator = (authentication.getUserId() == hist.getUserId() ? true : false);
+		}
+
+		// Create a lable with a hyperlink style
 		com.google.gwt.user.client.ui.Label l = new com.google.gwt.user.client.ui.Label(model.getLabel());
-		l.addStyleName("hyperlink_style_label");
-		if (model.isCompleted()) {
-			//When the monitored point is completed,change the label style
-			l.addStyleName("points-completed");
+
+		if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER)
+						|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+
+			l.addStyleName("hyperlink_style_label");
+			if (model.isCompleted()) {
+				// When the monitored point is completed,change the label style
+				l.addStyleName("points-completed");
+			}
+		} else {
+			if (model.isCompleted()) {
+				// When the monitored point is completed,change the label style
+				l.addStyleName("points-completed");
+			}
+
+			return l;
+
 		}
-		
-		//Add a click handler to response a cleck event
+
+		// Add a click handler to response a cleck event
 		l.addClickHandler(new ClickHandler() {
 
 			@Override
@@ -69,18 +92,17 @@
 
 				// Create a new FormWindow to edit the monitred point
 				final EditFormWindow window = new EditFormWindow();
-				window.addTextField(I18N.CONSTANTS.monitoredPointLabel(),model.getLabel(), false);
-				window.addDateField(I18N.CONSTANTS.monitoredPointExpectedDate(),model.getExpectedDate(), false);
+				window.addTextField(I18N.CONSTANTS.monitoredPointLabel(), model.getLabel(), false);
+				window.addDateField(I18N.CONSTANTS.monitoredPointExpectedDate(), model.getExpectedDate(), false);
 
-				window.show(I18N.CONSTANTS.monitoredPointUpdate(),I18N.CONSTANTS.monitoredPointUpdateDetails());
-				
-				//SubmitLister, see the definition of FormWindow for details
+				window.show(I18N.CONSTANTS.monitoredPointUpdate(), I18N.CONSTANTS.monitoredPointUpdateDetails());
+
+				// SubmitLister, see the definition of FormWindow for details
 				window.addFormSubmitListener(new FormSubmitListener() {
 
-					
 					// ---------Updating Handler-------------------------
-					// --------------------------------------------------	
-					
+					// --------------------------------------------------
+
 					@Override
 					public void formSubmitted(Object... values) {
 
@@ -95,139 +117,126 @@
 							return;
 						}
 
-						//Retrive all values 
+						// Retrive all values
 						final Date expectedDate = (Date) element0;
 						final String label = (String) element1;
 						final HashMap<String, Object> properties = new HashMap<String, Object>();
-						properties.put("expectedDate",
-								expectedDate.getTime());
+						properties.put("expectedDate", expectedDate.getTime());
 						properties.put("label", label);
 						properties.put("deleted", model.isDeleted());
 
 						// RPC to update by using the command UpdateEntity
-						dispatcher.execute(new UpdateEntity(model, properties),new MaskingAsyncMonitor(view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
-								new AsyncCallback<VoidResult>() {
+						dispatcher.execute(
+										new UpdateEntity(model, properties),
+										new MaskingAsyncMonitor(view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
+										new AsyncCallback<VoidResult>() {
 
-									@Override
-									public void onFailure(Throwable caught) {						 
-									
-									  MessageBox.alert(
-													I18N.CONSTANTS
-															.monitoredPointUpdateError(),
-													I18N.CONSTANTS
-															.monitoredPointUpdateErrorDetails(),
-													null);
-								  
-									}
+											@Override
+											public void onFailure(Throwable caught) {
 
-									@Override
-									public void onSuccess(VoidResult result) {
+												MessageBox.alert(I18N.CONSTANTS.monitoredPointUpdateError(),
+																I18N.CONSTANTS.monitoredPointUpdateErrorDetails(), null);
 
-										// After the RPC,modify the DTO model of the grid
-										model.setExpectedDate(expectedDate);
-										model.setLabel(label);
-										
-										//Refresh the grid 
-									    ListStore<MonitoredPointDTO> pointDTOStore = view.getMonitoredPointsGrid().getStore();
-									    pointDTOStore.update(model);
-									    
-									    
-										   Notification.show(
-												I18N.CONSTANTS
-														.infoConfirmation(),
-												I18N.CONSTANTS
-														.monitoredPointUpdateConfirm());
-									       
-									}
-								});
+											}
 
+											@Override
+											public void onSuccess(VoidResult result) {
+
+												// After the RPC,modify the DTO
+												// model of the grid
+												model.setExpectedDate(expectedDate);
+												model.setLabel(label);
+
+												// Refresh the grid
+												ListStore<MonitoredPointDTO> pointDTOStore = view
+																.getMonitoredPointsGrid().getStore();
+												pointDTOStore.update(model);
+
+												Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																I18N.CONSTANTS.monitoredPointUpdateConfirm());
+
+											}
+										});
+
 					}
 
 					// ---------Updating End-----------------------------
-					
+
 					// ---------Deletion Handler-------------------------
-				    // --------------------------------------------------	
-					
+					// --------------------------------------------------
+
 					@Override
 					public void deleteModelObject() {
-					
-						
-					     //Create a listener for the confirm message box
-					    Listener<MessageBoxEvent> confirmListener =new Listener<MessageBoxEvent>() {  
-					           public void handleEvent(MessageBoxEvent be) {  
-					             
-					        	   Button btn = be.getButtonClicked();
-					        	   
-					        	   //If user clicks the Yes button,begin to delete
-					        	   if(btn.getText().equals(I18N.CONSTANTS.yes()))
-					        	    {				        		            
-					        		   HashMap<String, Object> properties = new HashMap <String,Object>();
-				                       properties.put("expectedDate",model.getExpectedDate().getTime());
-									   properties.put("label", model.getLabel());
-								       properties.put("deleted", true);
-					        		   
-										// RPC to update by using the command UpdateEntity
-										dispatcher.execute(new UpdateEntity(model, properties),new MaskingAsyncMonitor(view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
-												new AsyncCallback<VoidResult>() {
 
-													@Override
-													public void onFailure(Throwable caught) {						 
-													
-													  MessageBox.alert(
-																	I18N.CONSTANTS
-																			.deletionError(),
-																	I18N.CONSTANTS
-																			.monitoredPointDeletionErrorDetails(),
-																	null);
-												  
-													}
+						// Create a listener for the confirm message box
+						Listener<MessageBoxEvent> confirmListener = new Listener<MessageBoxEvent>() {
+							public void handleEvent(MessageBoxEvent be) {
 
-													@Override
-													public void onSuccess(VoidResult result) {
-														
-														//Refresh the grid 
-														model.setDeleted(true);
-													    ListStore<MonitoredPointDTO> pointDTOStore = view.getMonitoredPointsGrid().getStore();
-													    pointDTOStore.remove(model);
-													    
-													    window.hide();
-													     Notification.show(
-																	I18N.CONSTANTS
-																			.infoConfirmation(),
-																	I18N.CONSTANTS
-																			.monitoredPointDeletionConfirm());
-													}
-												});
-					        		   
-					        	    }
-					        	   	        	   
-					           }  
-					         };  
-					       							
-				       //Create a confirm messagebox with the listener
-				       MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(),I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
-				       confirmMessageBox.setButtons(MessageBox.YESNO);
-				       ((Button)confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
-				       ((Button)confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
-				       confirmMessageBox.setIcon(MessageBox.WARNING);
-				       confirmMessageBox.show();		
-						
+								Button btn = be.getButtonClicked();
+
+								// If user clicks the Yes button,begin to delete
+								if (btn.getText().equals(I18N.CONSTANTS.yes())) {
+									HashMap<String, Object> properties = new HashMap<String, Object>();
+									properties.put("expectedDate", model.getExpectedDate().getTime());
+									properties.put("label", model.getLabel());
+									properties.put("deleted", true);
+
+									// RPC to update by using the command
+									// UpdateEntity
+									dispatcher.execute(new UpdateEntity(model, properties), new MaskingAsyncMonitor(
+													view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
+													new AsyncCallback<VoidResult>() {
+
+														@Override
+														public void onFailure(Throwable caught) {
+
+															MessageBox.alert(
+																			I18N.CONSTANTS.deletionError(),
+																			I18N.CONSTANTS.monitoredPointDeletionErrorDetails(),
+																			null);
+
+														}
+
+														@Override
+														public void onSuccess(VoidResult result) {
+
+															// Refresh the grid
+															model.setDeleted(true);
+															ListStore<MonitoredPointDTO> pointDTOStore = view
+																			.getMonitoredPointsGrid().getStore();
+															pointDTOStore.remove(model);
+
+															window.hide();
+															Notification.show(
+																			I18N.CONSTANTS.infoConfirmation(),
+																			I18N.CONSTANTS.monitoredPointDeletionConfirm());
+														}
+													});
+
+								}
+
+							}
+						};
+
+						// Create a confirm messagebox with the listener
+						MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(),
+										I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
+						confirmMessageBox.setButtons(MessageBox.YESNO);
+						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
+						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
+						confirmMessageBox.setIcon(MessageBox.WARNING);
+						confirmMessageBox.show();
+
 					}
 
 					// ---------Deletion End-----------------------------
-					
+
 				});
-				
-			
 
 			}
 		});
 		return l;
-		
-		
-		
-		
-		
+
 	}
 
 }
Index: src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java	(Revision 1504)
+++ src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java	(Arbeitskopie)
@@ -5,8 +5,10 @@
 
 package org.sigmah.client.page.project.dashboard;
 
+import java.util.ArrayList;
 import java.util.Arrays;
 import java.util.Date;
+import java.util.List;
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.remote.Authentication;
@@ -19,17 +21,22 @@
 import org.sigmah.client.util.DateUtils;
 import org.sigmah.client.util.NumberUtils;
 import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
 import org.sigmah.shared.dto.ProjectFundingDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementType;
 import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.reminder.MonitoredPointDTO;
+import org.sigmah.shared.dto.reminder.MonitoredPointHistoryDTO;
 import org.sigmah.shared.dto.reminder.ReminderDTO;
+import org.sigmah.shared.dto.reminder.ReminderHistoryDTO;
 
 import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
 import com.extjs.gxt.ui.client.Style.LayoutRegion;
 import com.extjs.gxt.ui.client.Style.Scroll;
 import com.extjs.gxt.ui.client.data.ModelData;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
 import com.extjs.gxt.ui.client.event.MenuEvent;
 import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.store.ListStore;
@@ -41,6 +48,7 @@
 import com.extjs.gxt.ui.client.widget.Label;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
 import com.extjs.gxt.ui.client.widget.TabPanel;
+import com.extjs.gxt.ui.client.widget.Window;
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.form.CheckBox;
 import com.extjs.gxt.ui.client.widget.grid.CellEditor;
@@ -76,1122 +84,1316 @@
  */
 public class ProjectDashboardView extends ProjectDashboardPresenter.View {
 
-    private final Authentication authentication;
-    private final Dispatcher dispatcher;
-    private final ToolBar toolBar;
+	private final Authentication authentication;
+	private final Dispatcher dispatcher;
+	private final ToolBar toolBar;
 
-    private TabPanel tabPanelPhases;
-    private LayoutContainer panelProjectModel;
-    private LayoutContainer panelSelectedPhase;
+	private TabPanel tabPanelPhases;
+	private LayoutContainer panelProjectModel;
+	private LayoutContainer panelSelectedPhase;
 
-    private Button buttonSavePhase;
-    private Button buttonActivatePhase;
-    private Button buttonPhaseGuide;
+	private Button buttonSavePhase;
+	private Button buttonActivatePhase;
+	private Button buttonPhaseGuide;
 
-    private ContentPanel panelFinancialProjects;
-    private ContentPanel panelLocalProjects;
-    private Grid<FlexibleElementDTO> gridRequiredElements;
+	private ContentPanel panelFinancialProjects;
+	private ContentPanel panelLocalProjects;
+	private Grid<FlexibleElementDTO> gridRequiredElements;
 
-    private FlexibleGrid<ProjectFundingDTO> financialGrid;
-    private Button addFinancialProjectButton;
-    private Button createFinancialProjectButton;
-    private FlexibleGrid<ProjectFundingDTO> localGrid;
-    private Button addLocalPartnerProjectButton;
-    private Button createLocalPartnerProjectButton;
+	private FlexibleGrid<ProjectFundingDTO> financialGrid;
+	private Button addFinancialProjectButton;
+	private Button createFinancialProjectButton;
+	private FlexibleGrid<ProjectFundingDTO> localGrid;
+	private Button addLocalPartnerProjectButton;
+	private Button createLocalPartnerProjectButton;
 
-    private ContentPanel panelReminders;
-    private Button addReminderButton;
-    private Grid<ReminderDTO> remindersGrid;
+	private ContentPanel panelReminders;
+	private Button addReminderButton;
+	private Grid<ReminderDTO> remindersGrid;
 
-    private ContentPanel panelMonitoredPoints;
-    private Button addMonitoredPointButton;
-    private Grid<MonitoredPointDTO> monitoredPointsGrid;
+	private ContentPanel panelMonitoredPoints;
+	private Button addMonitoredPointButton;
+	private Grid<MonitoredPointDTO> monitoredPointsGrid;
 
-    private Image editIcon;
+	private Image editIcon;
 
-    private final ProjectPresenter projectPresenter;
+	private final ProjectPresenter projectPresenter;
 
-    private ContentPanel requiredElementContentPanel;
+	private ContentPanel requiredElementContentPanel;
 
-    public ProjectDashboardView(Authentication authentication, Dispatcher dispatcher, ProjectPresenter projectPresenter) {
+	public ProjectDashboardView(Authentication authentication, Dispatcher dispatcher, ProjectPresenter projectPresenter) {
 
-        this.authentication = authentication;
-        this.dispatcher = dispatcher;
-        this.projectPresenter = projectPresenter;
+		this.authentication = authentication;
+		this.dispatcher = dispatcher;
+		this.projectPresenter = projectPresenter;
 
-        final BorderLayout borderLayout = new BorderLayout();
-        borderLayout.setContainerStyle("x-border-layout-ct main-background");
-        setLayout(borderLayout);
+		final BorderLayout borderLayout = new BorderLayout();
+		borderLayout.setContainerStyle("x-border-layout-ct main-background");
+		setLayout(borderLayout);
 
-        /* Center panel */
-        ListStore<FlexibleElementDTO> storeRequiredElements = new ListStore<FlexibleElementDTO>();
+		/* Center panel */
+		ListStore<FlexibleElementDTO> storeRequiredElements = new ListStore<FlexibleElementDTO>();
 
-        gridRequiredElements = new Grid<FlexibleElementDTO>(storeRequiredElements, getRequiredElementsColumModel());
-        gridRequiredElements.setAutoExpandColumn("label");
-        gridRequiredElements.getView().setForceFit(true);
+		gridRequiredElements = new Grid<FlexibleElementDTO>(storeRequiredElements, getRequiredElementsColumModel());
+		gridRequiredElements.setAutoExpandColumn("label");
+		gridRequiredElements.getView().setForceFit(true);
 
-        // Phases tab panel
-        tabPanelPhases = new TabPanel();
-        tabPanelPhases.setPlain(true);
-        tabPanelPhases.setTabScroll(true);
-        tabPanelPhases.setAnimScroll(true);
+		// Phases tab panel
+		tabPanelPhases = new TabPanel();
+		tabPanelPhases.setPlain(true);
+		tabPanelPhases.setTabScroll(true);
+		tabPanelPhases.setAnimScroll(true);
 
-        // Toolbar
-        toolBar = new ToolBar();
-        toolBar.setAlignment(HorizontalAlignment.LEFT);
-        toolBar.setBorders(false);
+		// Toolbar
+		toolBar = new ToolBar();
+		toolBar.setAlignment(HorizontalAlignment.LEFT);
+		toolBar.setBorders(false);
 
-        buttonSavePhase = new Button(I18N.CONSTANTS.projectSavePhaseButton(), IconImageBundle.ICONS.save());
-        buttonActivatePhase = new Button(I18N.CONSTANTS.projectClosePhaseButton(), IconImageBundle.ICONS.activate());
-        buttonPhaseGuide = new Button(I18N.CONSTANTS.projectPhaseGuideHeader(), IconImageBundle.ICONS.info());
+		buttonSavePhase = new Button(I18N.CONSTANTS.projectSavePhaseButton(), IconImageBundle.ICONS.save());
+		buttonActivatePhase = new Button(I18N.CONSTANTS.projectClosePhaseButton(), IconImageBundle.ICONS.activate());
+		buttonPhaseGuide = new Button(I18N.CONSTANTS.projectPhaseGuideHeader(), IconImageBundle.ICONS.info());
 
-        buttonActivatePhase.setEnabled(false);
-        buttonSavePhase.setEnabled(false);
-        buttonPhaseGuide.setEnabled(false);
+		buttonActivatePhase.setEnabled(false);
+		buttonSavePhase.setEnabled(false);
+		buttonPhaseGuide.setEnabled(false);
 
-        toolBar.add(buttonActivatePhase);
-        toolBar.add(new SeparatorToolItem());
-        toolBar.add(buttonSavePhase);
-        toolBar.add(new SeparatorToolItem());
-        toolBar.add(buttonPhaseGuide);
+		toolBar.add(buttonActivatePhase);
+		toolBar.add(new SeparatorToolItem());
+		toolBar.add(buttonSavePhase);
+		toolBar.add(new SeparatorToolItem());
+		toolBar.add(buttonPhaseGuide);
 
-        // Tab item main panel
-        panelProjectModel = new LayoutContainer(new BorderLayout());
-        panelProjectModel.setBorders(false);
-        panelProjectModel.addStyleName("project-current-phase-panel");
+		// Tab item main panel
+		panelProjectModel = new LayoutContainer(new BorderLayout());
+		panelProjectModel.setBorders(false);
+		panelProjectModel.addStyleName("project-current-phase-panel");
 
-        panelSelectedPhase = new LayoutContainer(new FitLayout());
+		panelSelectedPhase = new LayoutContainer(new FitLayout());
 
-        final BorderLayoutData wd = new BorderLayoutData(LayoutRegion.WEST, 250);
-        wd.setMargins(new Margins(0, 4, 4, 4));
+		final BorderLayoutData wd = new BorderLayoutData(LayoutRegion.WEST, 250);
+		wd.setMargins(new Margins(0, 4, 4, 4));
 
-        requiredElementContentPanel = new ContentPanel(new FitLayout());
+		requiredElementContentPanel = new ContentPanel(new FitLayout());
 
-        requiredElementContentPanel.add(gridRequiredElements);
-        panelProjectModel.add(requiredElementContentPanel, wd);
+		requiredElementContentPanel.add(gridRequiredElements);
+		panelProjectModel.add(requiredElementContentPanel, wd);
 
-        final BorderLayoutData cd = new BorderLayoutData(LayoutRegion.CENTER);
-        cd.setMargins(new Margins(0, 4, 4, 0));
+		final BorderLayoutData cd = new BorderLayoutData(LayoutRegion.CENTER);
+		cd.setMargins(new Margins(0, 4, 4, 0));
 
-        final ContentPanel cp2 = new ContentPanel(new FitLayout());
-        cp2.setHeading(I18N.CONSTANTS.phaseDetails());
-        cp2.setScrollMode(Scroll.AUTOY);
+		final ContentPanel cp2 = new ContentPanel(new FitLayout());
+		cp2.setHeading(I18N.CONSTANTS.phaseDetails());
+		cp2.setScrollMode(Scroll.AUTOY);
 
-        cp2.setTopComponent(toolBar);
-        cp2.add(panelSelectedPhase, new FitData(new Margins(4)));
+		cp2.setTopComponent(toolBar);
+		cp2.add(panelSelectedPhase, new FitData(new Margins(4)));
 
-        panelProjectModel.add(cp2, cd);
+		panelProjectModel.add(cp2, cd);
 
-        panelReminders = getRemindersPanel();
-        panelMonitoredPoints = getMonitoredPointsPanel();
+		panelReminders = getRemindersPanel();
+		panelMonitoredPoints = getMonitoredPointsPanel();
 
-        final VBoxLayout vLayout = new VBoxLayout();
-        vLayout.setVBoxLayoutAlign(VBoxLayoutAlign.STRETCH);
-        final ContentPanel westPanel = new ContentPanel(vLayout);
-        westPanel.setHeading(I18N.CONSTANTS.reminders());
+		final VBoxLayout vLayout = new VBoxLayout();
+		vLayout.setVBoxLayoutAlign(VBoxLayoutAlign.STRETCH);
+		final ContentPanel westPanel = new ContentPanel(vLayout);
+		westPanel.setHeading(I18N.CONSTANTS.reminders());
 
-        final VBoxLayoutData flex = new VBoxLayoutData(new Margins(0, 0, 5, 0));
-        flex.setFlex(1);
-        westPanel.add(panelReminders, flex);
-        westPanel.add(panelMonitoredPoints, flex);
+		final VBoxLayoutData flex = new VBoxLayoutData(new Margins(0, 0, 5, 0));
+		flex.setFlex(1);
+		westPanel.add(panelReminders, flex);
+		westPanel.add(panelMonitoredPoints, flex);
 
-        /* South panel */
+		/* South panel */
 
-        buildFinancialProjectsPanel();
-        buildLocalPartnerProjectsPanel();
+		buildFinancialProjectsPanel();
+		buildLocalPartnerProjectsPanel();
 
-        final HBoxLayout layout = new StylableHBoxLayout("join-background");
-        layout.setHBoxLayoutAlign(HBoxLayoutAlign.STRETCH);
-        final ContentPanel southPanel = new ContentPanel(layout);
-        southPanel.setHeading(I18N.CONSTANTS.projectLinkedProjects());
+		final HBoxLayout layout = new StylableHBoxLayout("join-background");
+		layout.setHBoxLayoutAlign(HBoxLayoutAlign.STRETCH);
+		final ContentPanel southPanel = new ContentPanel(layout);
+		southPanel.setHeading(I18N.CONSTANTS.projectLinkedProjects());
 
-        panelFinancialProjects.setWidth("50%");
-        panelLocalProjects.setWidth("50%");
-        southPanel.add(panelFinancialProjects, new HBoxLayoutData(0, 2, 0, 0));
-        southPanel.add(panelLocalProjects, new HBoxLayoutData(0, 0, 0, 2));
+		panelFinancialProjects.setWidth("50%");
+		panelLocalProjects.setWidth("50%");
+		southPanel.add(panelFinancialProjects, new HBoxLayoutData(0, 2, 0, 0));
+		southPanel.add(panelLocalProjects, new HBoxLayoutData(0, 0, 0, 2));
 
-        /* BorderLayoutData */
-        final BorderLayoutData southData = new BorderLayoutData(LayoutRegion.SOUTH, 140);
-        southData.setCollapsible(true);
-        southData.setMargins(new Margins(4, 0, 0, 0));
+		/* BorderLayoutData */
+		final BorderLayoutData southData = new BorderLayoutData(LayoutRegion.SOUTH, 140);
+		southData.setCollapsible(true);
+		southData.setMargins(new Margins(4, 0, 0, 0));
 
-        final BorderLayoutData westData = new BorderLayoutData(LayoutRegion.WEST, 250);
-        westData.setMargins(new Margins(0, 4, 4, 0));
-        westData.setCollapsible(true);
+		final BorderLayoutData westData = new BorderLayoutData(LayoutRegion.WEST, 250);
+		westData.setMargins(new Margins(0, 4, 4, 0));
+		westData.setCollapsible(true);
 
-        final BorderLayoutData centerData = new BorderLayoutData(LayoutRegion.CENTER);
-        centerData.setMargins(new Margins(0, 0, 4, 4));
+		final BorderLayoutData centerData = new BorderLayoutData(LayoutRegion.CENTER);
+		centerData.setMargins(new Margins(0, 0, 4, 4));
 
-        add(westPanel, westData);
-        add(tabPanelPhases, centerData);
-        add(southPanel, southData);
-    }
+		add(westPanel, westData);
+		add(tabPanelPhases, centerData);
+		add(southPanel, southData);
+	}
 
-    /**
-     * Generates the {@link ColumnModel} for the required elements grid.
-     * 
-     * @return the {@link ColumnModel} for the required elements grid.
-     */
-    private ColumnModel getRequiredElementsColumModel() {
+	/**
+	 * Generates the {@link ColumnModel} for the required elements grid.
+	 * 
+	 * @return the {@link ColumnModel} for the required elements grid.
+	 */
+	private ColumnModel getRequiredElementsColumModel() {
 
-        // Element's label.
-        final ColumnConfig labelColumn = new ColumnConfig("label", I18N.CONSTANTS.projectRequiredElementsGridLabel(),
-                150);
+		// Element's label.
+		final ColumnConfig labelColumn = new ColumnConfig("label", I18N.CONSTANTS.projectRequiredElementsGridLabel(),
+						150);
 
-        // Element's completion.
-        final CheckColumnConfig filledInColumn = new CheckColumnConfig("filledIn",
-                I18N.CONSTANTS.projectRequiredElementsGridChecked(), 50);
-        filledInColumn.setMenuDisabled(false);
-        filledInColumn.setSortable(false);
-        filledInColumn.setRenderer(new GridCellRenderer<FlexibleElementDTO>() {
-            @Override
-            public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
-                if (model.isFilledIn()) {
-                    return IconImageBundle.ICONS.elementCompleted().createImage();
-                } else {
-                    return IconImageBundle.ICONS.elementUncompleted().createImage();
-                }
-            }
-        });
+		// Element's completion.
+		final CheckColumnConfig filledInColumn = new CheckColumnConfig("filledIn",
+						I18N.CONSTANTS.projectRequiredElementsGridChecked(), 50);
+		filledInColumn.setMenuDisabled(false);
+		filledInColumn.setSortable(false);
+		filledInColumn.setRenderer(new GridCellRenderer<FlexibleElementDTO>() {
+			@Override
+			public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
+				if (model.isFilledIn()) {
+					return IconImageBundle.ICONS.elementCompleted().createImage();
+				} else {
+					return IconImageBundle.ICONS.elementUncompleted().createImage();
+				}
+			}
+		});
 
-        // Element's type.
-        final ColumnConfig typeColumn = new ColumnConfig("typeOfElement",
-                I18N.CONSTANTS.projectRequiredElementsElementType(), 75);
-        typeColumn.setRenderer(new GridCellRenderer<FlexibleElementDTO>() {
-            @Override
-            public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
-                return FlexibleElementType.getFlexibleElementTypeName(model);
-            }
-        });
+		// Element's type.
+		final ColumnConfig typeColumn = new ColumnConfig("typeOfElement",
+						I18N.CONSTANTS.projectRequiredElementsElementType(), 75);
+		typeColumn.setRenderer(new GridCellRenderer<FlexibleElementDTO>() {
+			@Override
+			public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
+				return FlexibleElementType.getFlexibleElementTypeName(model);
+			}
+		});
 
-        return new ColumnModel(Arrays.asList(filledInColumn, labelColumn, typeColumn));
-    }
+		return new ColumnModel(Arrays.asList(filledInColumn, labelColumn, typeColumn));
+	}
 
-    @Override
-    public Button getButtonActivatePhase() {
-        return buttonActivatePhase;
-    }
+	@Override
+	public Button getButtonActivatePhase() {
+		return buttonActivatePhase;
+	}
 
-    @Override
-    public Button getButtonPhaseGuide() {
-        return buttonPhaseGuide;
-    }
+	@Override
+	public Button getButtonPhaseGuide() {
+		return buttonPhaseGuide;
+	}
 
-    @Override
-    public Button getButtonSavePhase() {
-        return buttonSavePhase;
-    }
+	@Override
+	public Button getButtonSavePhase() {
+		return buttonSavePhase;
+	}
 
-    @Override
-    public Grid<FlexibleElementDTO> getGridRequiredElements() {
-        return gridRequiredElements;
-    }
+	@Override
+	public Grid<FlexibleElementDTO> getGridRequiredElements() {
+		return gridRequiredElements;
+	}
 
-    @Override
-    public ContentPanel getPanelFinancialProjects() {
-        return panelFinancialProjects;
-    }
+	@Override
+	public ContentPanel getPanelFinancialProjects() {
+		return panelFinancialProjects;
+	}
 
-    @Override
-    public ContentPanel getPanelLocalProjects() {
-        return panelLocalProjects;
-    }
+	@Override
+	public ContentPanel getPanelLocalProjects() {
+		return panelLocalProjects;
+	}
 
-    @Override
-    public LayoutContainer getPanelProjectModel() {
-        return panelProjectModel;
-    }
+	@Override
+	public LayoutContainer getPanelProjectModel() {
+		return panelProjectModel;
+	}
 
-    @Override
-    public ContentPanel getPanelReminders() {
-        return panelReminders;
-    }
+	@Override
+	public ContentPanel getPanelReminders() {
+		return panelReminders;
+	}
 
-    @Override
-    public Button getAddReminderButton() {
-        return addReminderButton;
-    }
+	@Override
+	public Button getAddReminderButton() {
+		return addReminderButton;
+	}
 
-    @Override
-    public Grid<ReminderDTO> getRemindersGrid() {
-        return remindersGrid;
-    }
+	@Override
+	public Grid<ReminderDTO> getRemindersGrid() {
+		return remindersGrid;
+	}
 
-    @Override
-    public LayoutContainer getPanelSelectedPhase() {
-        return panelSelectedPhase;
-    }
+	@Override
+	public LayoutContainer getPanelSelectedPhase() {
+		return panelSelectedPhase;
+	}
 
-    @Override
-    public ContentPanel getPanelWatchedPoints() {
-        return panelMonitoredPoints;
-    }
+	@Override
+	public ContentPanel getPanelWatchedPoints() {
+		return panelMonitoredPoints;
+	}
 
-    @Override
-    public TabPanel getTabPanelPhases() {
-        return tabPanelPhases;
-    }
+	@Override
+	public TabPanel getTabPanelPhases() {
+		return tabPanelPhases;
+	}
 
-    @Override
-    public TabPanel getTabPanelProject() {
-        throw new UnsupportedOperationException("Not supported yet.");
-    }
+	@Override
+	public TabPanel getTabPanelProject() {
+		throw new UnsupportedOperationException("Not supported yet.");
+	}
 
-    @Override
-    public void flushToolbar() {
-        toolBar.removeAll();
-        toolBar.removeAllListeners();
-    }
+	@Override
+	public void flushToolbar() {
+		toolBar.removeAll();
+		toolBar.removeAllListeners();
+	}
 
-    @Override
-    public void fillToolbar() {
+	@Override
+	public void fillToolbar() {
 
-        flushToolbar();
+		flushToolbar();
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CHANGE_PHASE)) {
-            toolBar.add(buttonActivatePhase);
-            toolBar.add(new SeparatorToolItem());
-        }
-        toolBar.add(buttonSavePhase);
-        toolBar.add(new SeparatorToolItem());
-        toolBar.add(buttonPhaseGuide);
-    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CHANGE_PHASE)) {
+			toolBar.add(buttonActivatePhase);
+			toolBar.add(new SeparatorToolItem());
+		}
+		toolBar.add(buttonSavePhase);
+		toolBar.add(new SeparatorToolItem());
+		toolBar.add(buttonPhaseGuide);
+	}
 
-    @Override
-    public FlexibleGrid<ProjectFundingDTO> getFinancialProjectGrid() {
-        return financialGrid;
-    }
+	@Override
+	public FlexibleGrid<ProjectFundingDTO> getFinancialProjectGrid() {
+		return financialGrid;
+	}
 
-    @Override
-    public Button getAddFinancialProjectButton() {
-        return addFinancialProjectButton;
-    }
+	@Override
+	public Button getAddFinancialProjectButton() {
+		return addFinancialProjectButton;
+	}
 
-    @Override
-    public Button getCreateFinancialProjectButton() {
-        return createFinancialProjectButton;
-    }
+	@Override
+	public Button getCreateFinancialProjectButton() {
+		return createFinancialProjectButton;
+	}
 
-    @Override
-    public FlexibleGrid<ProjectFundingDTO> getLocalPartnerProjectGrid() {
-        return localGrid;
-    }
+	@Override
+	public FlexibleGrid<ProjectFundingDTO> getLocalPartnerProjectGrid() {
+		return localGrid;
+	}
 
-    @Override
-    public Button getAddLocalPartnerProjectButton() {
-        return addLocalPartnerProjectButton;
-    }
+	@Override
+	public Button getAddLocalPartnerProjectButton() {
+		return addLocalPartnerProjectButton;
+	}
 
-    @Override
-    public Button getCreateLocalPartnerProjectButton() {
-        return createLocalPartnerProjectButton;
-    }
+	@Override
+	public Button getCreateLocalPartnerProjectButton() {
+		return createLocalPartnerProjectButton;
+	}
 
-    @Override
-    public Grid<MonitoredPointDTO> getMonitoredPointsGrid() {
-        return monitoredPointsGrid;
-    }
+	@Override
+	public Grid<MonitoredPointDTO> getMonitoredPointsGrid() {
+		return monitoredPointsGrid;
+	}
 
-    @Override
-    public Button getAddMonitoredPointButton() {
-        return addMonitoredPointButton;
-    }
+	@Override
+	public Button getAddMonitoredPointButton() {
+		return addMonitoredPointButton;
+	}
 
-    @Override
-    public Image getEditIcon() {
-        return editIcon;
-    }
+	@Override
+	public Image getEditIcon() {
+		return editIcon;
+	}
 
-    /**
-     * Builds the grid to display financial projects.
-     */
-    private void buildFinancialProjectsPanel() {
+	/**
+	 * Builds the grid to display financial projects.
+	 */
+	private void buildFinancialProjectsPanel() {
 
-        // The grid sorter.
-        final StoreSorter<ProjectFundingDTO> storeSorter = new StoreSorter<ProjectFundingDTO>() {
+		// The grid sorter.
+		final StoreSorter<ProjectFundingDTO> storeSorter = new StoreSorter<ProjectFundingDTO>() {
 
-            @Override
-            public int compare(Store<ProjectFundingDTO> store, ProjectFundingDTO m1, ProjectFundingDTO m2,
-                    String property) {
+			@Override
+			public int compare(Store<ProjectFundingDTO> store, ProjectFundingDTO m1, ProjectFundingDTO m2,
+							String property) {
 
-                if ("name".equals(property)) {
-                    return m1.getFunding().getName().compareTo(m2.getFunding().getName());
-                } else if ("fullName".equals(property)) {
-                    return m1.getFunding().getFullName().compareTo(m2.getFunding().getFullName());
-                } else {
-                    return super.compare(store, m1, m2, property);
-                }
-            }
-        };
+				if ("name".equals(property)) {
+					return m1.getFunding().getName().compareTo(m2.getFunding().getName());
+				} else if ("fullName".equals(property)) {
+					return m1.getFunding().getFullName().compareTo(m2.getFunding().getFullName());
+				} else {
+					return super.compare(store, m1, m2, property);
+				}
+			}
+		};
 
-        // Builds the grid.
-        final ListStore<ProjectFundingDTO> financialStore = new ListStore<ProjectFundingDTO>();
-        financialStore.setStoreSorter(storeSorter);
-        financialGrid = new FlexibleGrid<ProjectFundingDTO>(financialStore, null, 2, getFinancialColumnModel());
-        financialGrid.setAutoExpandColumn("name");
+		// Builds the grid.
+		final ListStore<ProjectFundingDTO> financialStore = new ListStore<ProjectFundingDTO>();
+		financialStore.setStoreSorter(storeSorter);
+		financialGrid = new FlexibleGrid<ProjectFundingDTO>(financialStore, null, 2, getFinancialColumnModel());
+		financialGrid.setAutoExpandColumn("name");
 
-        // Builds the panel tool bar.
-        addFinancialProjectButton = new Button(I18N.CONSTANTS.createProjectTypeFundingSelect(),
-                IconImageBundle.ICONS.select());
-        addFinancialProjectButton.setTitle(I18N.CONSTANTS.createProjectTypeFundingSelectDetails());
+		// Builds the panel tool bar.
+		addFinancialProjectButton = new Button(I18N.CONSTANTS.createProjectTypeFundingSelect(),
+						IconImageBundle.ICONS.select());
+		addFinancialProjectButton.setTitle(I18N.CONSTANTS.createProjectTypeFundingSelectDetails());
 
-        createFinancialProjectButton = new Button(I18N.CONSTANTS.createProjectTypeFundingCreate(),
-                IconImageBundle.ICONS.add());
-        createFinancialProjectButton.setTitle(I18N.CONSTANTS.createProjectTypeFundingCreateDetails());
+		createFinancialProjectButton = new Button(I18N.CONSTANTS.createProjectTypeFundingCreate(),
+						IconImageBundle.ICONS.add());
+		createFinancialProjectButton.setTitle(I18N.CONSTANTS.createProjectTypeFundingCreateDetails());
 
-        final Label title = new Label(I18N.CONSTANTS.projectFinancialProjectsHeader());
-        title.addStyleName("toolbar-title");
+		final Label title = new Label(I18N.CONSTANTS.projectFinancialProjectsHeader());
+		title.addStyleName("toolbar-title");
 
-        final ToolBar toolbar = new ToolBar();
-        toolbar.add(title);
+		final ToolBar toolbar = new ToolBar();
+		toolbar.add(title);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(new SeparatorToolItem());
-            toolbar.add(addFinancialProjectButton);
-        }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+			toolbar.add(new SeparatorToolItem());
+			toolbar.add(addFinancialProjectButton);
+		}
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
-                GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(new SeparatorToolItem());
-            toolbar.add(createFinancialProjectButton);
-        }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
+						GlobalPermissionEnum.EDIT_PROJECT)) {
+			toolbar.add(new SeparatorToolItem());
+			toolbar.add(createFinancialProjectButton);
+		}
 
-        // Builds the grid panel.
-        panelFinancialProjects = new ContentPanel();
-        panelFinancialProjects.setHeaderVisible(false);
+		// Builds the grid panel.
+		panelFinancialProjects = new ContentPanel();
+		panelFinancialProjects.setHeaderVisible(false);
 
-        panelFinancialProjects.setTopComponent(toolbar);
-        panelFinancialProjects.add(financialGrid);
-    }
+		panelFinancialProjects.setTopComponent(toolbar);
+		panelFinancialProjects.add(financialGrid);
+	}
 
-    /**
-     * Builds the grid to display local partner projects.
-     */
-    private void buildLocalPartnerProjectsPanel() {
+	/**
+	 * Builds the grid to display local partner projects.
+	 */
+	private void buildLocalPartnerProjectsPanel() {
 
-        // The grid sorter.
-        final StoreSorter<ProjectFundingDTO> storeSorter = new StoreSorter<ProjectFundingDTO>() {
+		// The grid sorter.
+		final StoreSorter<ProjectFundingDTO> storeSorter = new StoreSorter<ProjectFundingDTO>() {
 
-            @Override
-            public int compare(Store<ProjectFundingDTO> store, ProjectFundingDTO m1, ProjectFundingDTO m2,
-                    String property) {
+			@Override
+			public int compare(Store<ProjectFundingDTO> store, ProjectFundingDTO m1, ProjectFundingDTO m2,
+							String property) {
 
-                if ("name".equals(property)) {
-                    return m1.getFunding().getName().compareTo(m2.getFunding().getName());
-                } else if ("fullName".equals(property)) {
-                    return m1.getFunding().getFullName().compareTo(m2.getFunding().getFullName());
-                } else {
-                    return super.compare(store, m1, m2, property);
-                }
-            }
-        };
+				if ("name".equals(property)) {
+					return m1.getFunding().getName().compareTo(m2.getFunding().getName());
+				} else if ("fullName".equals(property)) {
+					return m1.getFunding().getFullName().compareTo(m2.getFunding().getFullName());
+				} else {
+					return super.compare(store, m1, m2, property);
+				}
+			}
+		};
 
-        // Builds the grid.
-        final ListStore<ProjectFundingDTO> localStore = new ListStore<ProjectFundingDTO>();
-        localStore.setStoreSorter(storeSorter);
-        localGrid = new FlexibleGrid<ProjectFundingDTO>(new ListStore<ProjectFundingDTO>(), null, 2,
-                getLocalPartnerColumnModel());
-        localGrid.setAutoExpandColumn("name");
+		// Builds the grid.
+		final ListStore<ProjectFundingDTO> localStore = new ListStore<ProjectFundingDTO>();
+		localStore.setStoreSorter(storeSorter);
+		localGrid = new FlexibleGrid<ProjectFundingDTO>(new ListStore<ProjectFundingDTO>(), null, 2,
+						getLocalPartnerColumnModel());
+		localGrid.setAutoExpandColumn("name");
 
-        // Builds the panel tool bar.
-        addLocalPartnerProjectButton = new Button(I18N.CONSTANTS.createProjectTypePartnerSelect(),
-                IconImageBundle.ICONS.select());
-        addLocalPartnerProjectButton.setTitle(I18N.CONSTANTS.createProjectTypePartnerSelectDetails());
+		// Builds the panel tool bar.
+		addLocalPartnerProjectButton = new Button(I18N.CONSTANTS.createProjectTypePartnerSelect(),
+						IconImageBundle.ICONS.select());
+		addLocalPartnerProjectButton.setTitle(I18N.CONSTANTS.createProjectTypePartnerSelectDetails());
 
-        createLocalPartnerProjectButton = new Button(I18N.CONSTANTS.createProjectTypePartnerCreate(),
-                IconImageBundle.ICONS.add());
-        createLocalPartnerProjectButton.setTitle(I18N.CONSTANTS.createProjectTypePartnerCreateDetails());
+		createLocalPartnerProjectButton = new Button(I18N.CONSTANTS.createProjectTypePartnerCreate(),
+						IconImageBundle.ICONS.add());
+		createLocalPartnerProjectButton.setTitle(I18N.CONSTANTS.createProjectTypePartnerCreateDetails());
 
-        final Label title = new Label(I18N.CONSTANTS.projectLocalPartnerProjectsHeader());
-        title.addStyleName("toolbar-title");
+		final Label title = new Label(I18N.CONSTANTS.projectLocalPartnerProjectsHeader());
+		title.addStyleName("toolbar-title");
 
-        final ToolBar toolbar = new ToolBar();
-        toolbar.add(title);
+		final ToolBar toolbar = new ToolBar();
+		toolbar.add(title);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(new SeparatorToolItem());
-            toolbar.add(addLocalPartnerProjectButton);
-        }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+			toolbar.add(new SeparatorToolItem());
+			toolbar.add(addLocalPartnerProjectButton);
+		}
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
-                GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(new SeparatorToolItem());
-            toolbar.add(createLocalPartnerProjectButton);
-        }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.CREATE_PROJECT,
+						GlobalPermissionEnum.EDIT_PROJECT)) {
+			toolbar.add(new SeparatorToolItem());
+			toolbar.add(createLocalPartnerProjectButton);
+		}
 
-        // Builds the grid panel.
-        panelLocalProjects = new ContentPanel();
-        panelLocalProjects.setHeaderVisible(false);
+		// Builds the grid panel.
+		panelLocalProjects = new ContentPanel();
+		panelLocalProjects.setHeaderVisible(false);
 
-        panelLocalProjects.setTopComponent(toolbar);
-        panelLocalProjects.add(localGrid);
-    }
+		panelLocalProjects.setTopComponent(toolbar);
+		panelLocalProjects.add(localGrid);
+	}
 
-    /**
-     * Gets the columns for the funding projects grid.
-     * 
-     * @return The columns for the funding projects grid.
-     */
-    private ColumnConfig[] getFinancialColumnModel() {
+	/**
+	 * Gets the columns for the funding projects grid.
+	 * 
+	 * @return The columns for the funding projects grid.
+	 */
+	private ColumnConfig[] getFinancialColumnModel() {
 
-        // Icon.
-        final ColumnConfig iconColumn = new ColumnConfig();
-        iconColumn.setId("icon");
-        iconColumn.setSortable(false);
-        iconColumn.setWidth(15);
-        iconColumn.setAlignment(HorizontalAlignment.CENTER);
-        iconColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Icon.
+		final ColumnConfig iconColumn = new ColumnConfig();
+		iconColumn.setId("icon");
+		iconColumn.setSortable(false);
+		iconColumn.setWidth(15);
+		iconColumn.setAlignment(HorizontalAlignment.CENTER);
+		iconColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
-                return FundingIconProvider.getProjectTypeIcon(
-                        model.getFunding().getProjectModelType(authentication.getOrganizationId())).createImage();
-            }
-        });
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+				return FundingIconProvider.getProjectTypeIcon(
+								model.getFunding().getProjectModelType(authentication.getOrganizationId()))
+								.createImage();
+			}
+		});
 
-        // Name.
-        final ColumnConfig nameColumn = new ColumnConfig();
-        nameColumn.setId("name");
-        nameColumn.setHeader(I18N.CONSTANTS.projectName());
-        nameColumn.setWidth(80);
-        nameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Name.
+		final ColumnConfig nameColumn = new ColumnConfig();
+		nameColumn.setId("name");
+		nameColumn.setHeader(I18N.CONSTANTS.projectName());
+		nameColumn.setWidth(80);
+		nameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                final Hyperlink nameHyperlink = new Hyperlink(model.getFunding().getName(), true,
-                        ProjectPresenter.PAGE_ID.toString() + '!' + model.getFunding().getId());
-                nameHyperlink.addStyleName("hyperlink");
+				final Hyperlink nameHyperlink = new Hyperlink(model.getFunding().getName(), true,
+								ProjectPresenter.PAGE_ID.toString() + '!' + model.getFunding().getId());
+				nameHyperlink.addStyleName("hyperlink");
 
-                return nameHyperlink;
-            }
-        });
+				return nameHyperlink;
+			}
+		});
 
-        // Full name.
-        final ColumnConfig fullNameColumn = new ColumnConfig();
-        fullNameColumn.setId("fullName");
-        fullNameColumn.setHeader(I18N.CONSTANTS.projectFullName());
-        fullNameColumn.setWidth(130);
-        fullNameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Full name.
+		final ColumnConfig fullNameColumn = new ColumnConfig();
+		fullNameColumn.setId("fullName");
+		fullNameColumn.setHeader(I18N.CONSTANTS.projectFullName());
+		fullNameColumn.setWidth(130);
+		fullNameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                final Label fullNameLabel = new Label(model.getFunding().getFullName());
+				final Label fullNameLabel = new Label(model.getFunding().getFullName());
 
-                return fullNameLabel;
-            }
-        });
+				return fullNameLabel;
+			}
+		});
 
-        // Amount.
-        final ColumnConfig amountColumn = new ColumnConfig();
-        amountColumn.setId("percentage");
-        amountColumn.setHeader(I18N.CONSTANTS.projectFinances() + " (" + I18N.CONSTANTS.currencyEuro() + ')');
-        amountColumn.setWidth(120);
+		// Amount.
+		final ColumnConfig amountColumn = new ColumnConfig();
+		amountColumn.setId("percentage");
+		amountColumn.setHeader(I18N.CONSTANTS.projectFinances() + " (" + I18N.CONSTANTS.currencyEuro() + ')');
+		amountColumn.setWidth(120);
 
-        // Percentage.
-        final ColumnConfig percentageColumn = new ColumnConfig();
-        percentageColumn.setId("percentage2");
-        percentageColumn.setHeader(I18N.CONSTANTS.createProjectPercentage());
-        percentageColumn.setWidth(60);
-        percentageColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Percentage.
+		final ColumnConfig percentageColumn = new ColumnConfig();
+		percentageColumn.setId("percentage2");
+		percentageColumn.setHeader(I18N.CONSTANTS.createProjectPercentage());
+		percentageColumn.setWidth(60);
+		percentageColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                // The amount of the funding.
-                final Double amount = model.getPercentage();
+				// The amount of the funding.
+				final Double amount = model.getPercentage();
 
-                // The current project budget.
-                final Double budget = model.getFunded().getPlannedBudget();
+				// The current project budget.
+				final Double budget = model.getFunded().getPlannedBudget();
 
-                final Label percentageLabel = new Label(NumberUtils.ratioAsString(amount, budget));
-                return percentageLabel;
-            }
-        });
+				final Label percentageLabel = new Label(NumberUtils.ratioAsString(amount, budget));
+				return percentageLabel;
+			}
+		});
 
-        // Edit icon.
-        final ColumnConfig editButtonColumn = new ColumnConfig();
-        editButtonColumn.setId("editButton");
-        editButtonColumn.setSortable(false);
-        editButtonColumn.setWidth(30);
-        editButtonColumn.setAlignment(HorizontalAlignment.LEFT);
-        editButtonColumn.setRenderer(new FinancialProjectEditButtonGridCellRender(this, dispatcher, projectPresenter));
+		// Edit icon.
+		final ColumnConfig editButtonColumn = new ColumnConfig();
+		editButtonColumn.setId("editButton");
+		editButtonColumn.setSortable(false);
+		editButtonColumn.setWidth(30);
+		editButtonColumn.setAlignment(HorizontalAlignment.LEFT);
+		editButtonColumn.setRenderer(new FinancialProjectEditButtonGridCellRender(this, dispatcher, projectPresenter));
 
-        return new ColumnConfig[] { iconColumn, nameColumn, fullNameColumn, amountColumn, percentageColumn,
-                editButtonColumn };
-    }
+		return new ColumnConfig[] { iconColumn, nameColumn, fullNameColumn, amountColumn, percentageColumn,
+						editButtonColumn };
+	}
 
-    /**
-     * Gets the columns for the funded projects grid.
-     * 
-     * @return The columns for the funded projects grid.
-     */
-    private ColumnConfig[] getLocalPartnerColumnModel() {
+	/**
+	 * Gets the columns for the funded projects grid.
+	 * 
+	 * @return The columns for the funded projects grid.
+	 */
+	private ColumnConfig[] getLocalPartnerColumnModel() {
 
-        // Icon.
-        final ColumnConfig iconColumn = new ColumnConfig();
-        iconColumn.setId("icon");
-        iconColumn.setSortable(false);
-        iconColumn.setWidth(15);
-        iconColumn.setAlignment(HorizontalAlignment.CENTER);
-        iconColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Icon.
+		final ColumnConfig iconColumn = new ColumnConfig();
+		iconColumn.setId("icon");
+		iconColumn.setSortable(false);
+		iconColumn.setWidth(15);
+		iconColumn.setAlignment(HorizontalAlignment.CENTER);
+		iconColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
-                return FundingIconProvider.getProjectTypeIcon(
-                        model.getFunded().getProjectModelType(authentication.getOrganizationId())).createImage();
-            }
-        });
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+				return FundingIconProvider.getProjectTypeIcon(
+								model.getFunded().getProjectModelType(authentication.getOrganizationId()))
+								.createImage();
+			}
+		});
 
-        // Name.
-        final ColumnConfig nameColumn = new ColumnConfig();
-        nameColumn.setId("name");
-        nameColumn.setHeader(I18N.CONSTANTS.projectName());
-        nameColumn.setWidth(80);
-        nameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Name.
+		final ColumnConfig nameColumn = new ColumnConfig();
+		nameColumn.setId("name");
+		nameColumn.setHeader(I18N.CONSTANTS.projectName());
+		nameColumn.setWidth(80);
+		nameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                final Hyperlink nameHyperlink = new Hyperlink(model.getFunded().getName(), true,
-                        ProjectPresenter.PAGE_ID.toString() + '!' + model.getFunded().getId());
-                nameHyperlink.addStyleName("hyperlink");
+				final Hyperlink nameHyperlink = new Hyperlink(model.getFunded().getName(), true,
+								ProjectPresenter.PAGE_ID.toString() + '!' + model.getFunded().getId());
+				nameHyperlink.addStyleName("hyperlink");
 
-                return nameHyperlink;
-            }
-        });
+				return nameHyperlink;
+			}
+		});
 
-        // Full name.
-        final ColumnConfig fullNameColumn = new ColumnConfig();
-        fullNameColumn.setId("fullName");
-        fullNameColumn.setHeader(I18N.CONSTANTS.projectFullName());
-        fullNameColumn.setWidth(130);
-        fullNameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Full name.
+		final ColumnConfig fullNameColumn = new ColumnConfig();
+		fullNameColumn.setId("fullName");
+		fullNameColumn.setHeader(I18N.CONSTANTS.projectFullName());
+		fullNameColumn.setWidth(130);
+		fullNameColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                final Label fullNameLabel = new Label(model.getFunded().getFullName());
+				final Label fullNameLabel = new Label(model.getFunded().getFullName());
 
-                return fullNameLabel;
-            }
-        });
+				return fullNameLabel;
+			}
+		});
 
-        // Amount.
-        final ColumnConfig amountColumn = new ColumnConfig();
-        amountColumn.setId("percentage");
-        amountColumn.setHeader(I18N.CONSTANTS.projectFundedBy() + " (" + I18N.CONSTANTS.currencyEuro() + ')');
-        amountColumn.setWidth(120);
+		// Amount.
+		final ColumnConfig amountColumn = new ColumnConfig();
+		amountColumn.setId("percentage");
+		amountColumn.setHeader(I18N.CONSTANTS.projectFundedBy() + " (" + I18N.CONSTANTS.currencyEuro() + ')');
+		amountColumn.setWidth(120);
 
-        // Percentage.
-        final ColumnConfig percentageColumn = new ColumnConfig();
-        percentageColumn.setId("percentage2");
-        percentageColumn.setHeader(I18N.CONSTANTS.createProjectPercentage());
-        percentageColumn.setWidth(60);
-        percentageColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
+		// Percentage.
+		final ColumnConfig percentageColumn = new ColumnConfig();
+		percentageColumn.setId("percentage2");
+		percentageColumn.setHeader(I18N.CONSTANTS.createProjectPercentage());
+		percentageColumn.setWidth(60);
+		percentageColumn.setRenderer(new GridCellRenderer<ProjectFundingDTO>() {
 
-            @Override
-            public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
+			@Override
+			public Object render(ProjectFundingDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<ProjectFundingDTO> store, Grid<ProjectFundingDTO> grid) {
 
-                // The amount of the funding.
-                final Double amount = model.getPercentage();
+				// The amount of the funding.
+				final Double amount = model.getPercentage();
 
-                // The funded project budget.
-                final Double budget = model.getFunded().getPlannedBudget();
+				// The funded project budget.
+				final Double budget = model.getFunded().getPlannedBudget();
 
-                final Label percentageLabel = new Label(NumberUtils.ratioAsString(amount, budget));
-                return percentageLabel;
-            }
-        });
+				final Label percentageLabel = new Label(NumberUtils.ratioAsString(amount, budget));
+				return percentageLabel;
+			}
+		});
 
-        // Edit icon.
-        final ColumnConfig editButtonColumn = new ColumnConfig();
-        editButtonColumn.setId("editButton");
-        editButtonColumn.setSortable(false);
-        editButtonColumn.setWidth(30);
-        editButtonColumn.setAlignment(HorizontalAlignment.LEFT);
-        editButtonColumn
-                .setRenderer(new LocalPartnerProjectEditButtonGridCellRender(this, dispatcher, projectPresenter));
+		// Edit icon.
+		final ColumnConfig editButtonColumn = new ColumnConfig();
+		editButtonColumn.setId("editButton");
+		editButtonColumn.setSortable(false);
+		editButtonColumn.setWidth(30);
+		editButtonColumn.setAlignment(HorizontalAlignment.LEFT);
+		editButtonColumn.setRenderer(new LocalPartnerProjectEditButtonGridCellRender(this, dispatcher, projectPresenter));
 
-        return new ColumnConfig[] { iconColumn, nameColumn, fullNameColumn, amountColumn, percentageColumn,
-                editButtonColumn };
-    }
+		return new ColumnConfig[] { iconColumn, nameColumn, fullNameColumn, amountColumn, percentageColumn,
+						editButtonColumn };
+	}
 
-    /**
-     * Gets the panel which displays the reminders.
-     * 
-     * @return The panel which displays the reminders.
-     */
-    private ContentPanel getRemindersPanel() {
+	/**
+	 * Gets the panel which displays the reminders.
+	 * 
+	 * @return The panel which displays the reminders.
+	 */
+	private ContentPanel getRemindersPanel() {
 
-        // Store filters.
+		// Store filters.
 
-        final StoreFilter<ReminderDTO> notCompletedFilter = new StoreFilter<ReminderDTO>() {
+		final StoreFilter<ReminderDTO> notCompletedFilter = new StoreFilter<ReminderDTO>() {
 
-            @Override
-            public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
-                return !item.isCompleted();
-            }
-        };
+			@Override
+			public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
+				return !item.isCompleted();
+			}
+		};
 
-        final StoreFilter<ReminderDTO> completedFilter = new StoreFilter<ReminderDTO>() {
+		final StoreFilter<ReminderDTO> completedFilter = new StoreFilter<ReminderDTO>() {
 
-            @Override
-            public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
-                return item.isCompleted();
-            }
-        };
+			@Override
+			public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
+				return item.isCompleted();
+			}
+		};
 
-        final StoreFilter<ReminderDTO> exceededFilter = new StoreFilter<ReminderDTO>() {
+		final StoreFilter<ReminderDTO> exceededFilter = new StoreFilter<ReminderDTO>() {
 
-            @Override
-            public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
-                return !item.isCompleted() && DateUtils.DAY_COMPARATOR.compare(new Date(), item.getExpectedDate()) > 0;
-            }
-        };
+			@Override
+			public boolean select(Store<ReminderDTO> store, ReminderDTO parent, ReminderDTO item, String property) {
+				return !item.isCompleted() && DateUtils.DAY_COMPARATOR.compare(new Date(), item.getExpectedDate()) > 0;
+			}
+		};
 
-        // Store
-        final ListStore<ReminderDTO> remindersStore = new ListStore<ReminderDTO>();
+		// Store
+		final ListStore<ReminderDTO> remindersStore = new ListStore<ReminderDTO>();
 
-        // Grid.
-        remindersGrid = new Grid<ReminderDTO>(remindersStore, new ColumnModel(Arrays.asList(getRemindersColumnModel())));
-        remindersGrid.getView().setForceFit(true);
-        remindersGrid.setBorders(false);
+		// Grid.
+		remindersGrid = new Grid<ReminderDTO>(remindersStore, new ColumnModel(Arrays.asList(getRemindersColumnModel())));
+		remindersGrid.getView().setForceFit(true);
+		remindersGrid.setBorders(false);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            remindersGrid.addPlugin((CheckColumnConfig) remindersGrid.getColumnModel().getColumn(0));
-        }
-        remindersGrid.setAutoExpandColumn("label");
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+										.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER))) {
+			remindersGrid.addPlugin((CheckColumnConfig) remindersGrid.getColumnModel().getColumn(0));
+		}
+		remindersGrid.setAutoExpandColumn("label");
 
-        // Filter menu.
+		// Filter menu.
 
-        final FilterSelectionListener<ReminderDTO> filterListener = new FilterSelectionListener<ReminderDTO>(
-                remindersStore);
+		final FilterSelectionListener<ReminderDTO> filterListener = new FilterSelectionListener<ReminderDTO>(
+						remindersStore);
 
-        final MenuItem noFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointAll());
-        noFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(noFilterItem, null);
-            }
-        });
+		final MenuItem noFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointAll());
+		noFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(noFilterItem, null);
+			}
+		});
 
-        final MenuItem completedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointCompleted(),
-                IconImageBundle.ICONS.closedReminder());
-        completedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(completedFilterItem, completedFilter);
-            }
-        });
+		final MenuItem completedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointCompleted(),
+						IconImageBundle.ICONS.closedReminder());
+		completedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(completedFilterItem, completedFilter);
+			}
+		});
 
-        final MenuItem notCompletedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointUncompleted(),
-                IconImageBundle.ICONS.openedReminder());
-        notCompletedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(notCompletedFilterItem, notCompletedFilter);
-            }
-        });
+		final MenuItem notCompletedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointUncompleted(),
+						IconImageBundle.ICONS.openedReminder());
+		notCompletedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(notCompletedFilterItem, notCompletedFilter);
+			}
+		});
 
-        final MenuItem exceededFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointExceeded(),
-                IconImageBundle.ICONS.overdueReminder());
-        exceededFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(exceededFilterItem, exceededFilter);
-            }
-        });
+		final MenuItem exceededFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointExceeded(),
+						IconImageBundle.ICONS.overdueReminder());
+		exceededFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(exceededFilterItem, exceededFilter);
+			}
+		});
 
-        final Menu filterMenu = new Menu();
-        filterMenu.add(noFilterItem);
-        filterMenu.add(new SeparatorMenuItem());
-        filterMenu.add(completedFilterItem);
-        filterMenu.add(notCompletedFilterItem);
-        filterMenu.add(exceededFilterItem);
+		final Menu filterMenu = new Menu();
+		filterMenu.add(noFilterItem);
+		filterMenu.add(new SeparatorMenuItem());
+		filterMenu.add(completedFilterItem);
+		filterMenu.add(notCompletedFilterItem);
+		filterMenu.add(exceededFilterItem);
 
-        // Fires manually the first filter (no filter).
-        filterListener.filter(noFilterItem, null);
+		// Fires manually the first filter (no filter).
+		filterListener.filter(noFilterItem, null);
 
-        // Filter button.
-        final Button filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
-        filterButton.setMenu(filterMenu);
+		// Filter button.
+		final Button filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
+		filterButton.setMenu(filterMenu);
 
-        addReminderButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
+		addReminderButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
 
-        // Toolbar.
-        final ToolBar toolbar = new ToolBar();
-        toolbar.setAlignment(HorizontalAlignment.LEFT);
+		// Toolbar.
+		final ToolBar toolbar = new ToolBar();
+		toolbar.setAlignment(HorizontalAlignment.LEFT);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(addReminderButton);
-        }
-        toolbar.add(filterButton);
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+										.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER))) {
+			toolbar.add(addReminderButton);
+		}
+		toolbar.add(filterButton);
 
-        // Panel.
-        final ContentPanel panel = new ContentPanel(new FitLayout());
-        panel.setHeading(I18N.CONSTANTS.reminderPoints());
-        panel.setBorders(false);
+		// Panel.
+		final ContentPanel panel = new ContentPanel(new FitLayout());
+		panel.setHeading(I18N.CONSTANTS.reminderPoints());
+		panel.setBorders(false);
 
-        panel.setTopComponent(toolbar);
-        panel.add(remindersGrid);
+		panel.setTopComponent(toolbar);
+		panel.add(remindersGrid);
 
-        return panel;
-    }
+		Menu menuContext = new Menu();
+		MenuItem item1 = new MenuItem(I18N.CONSTANTS.historyShow());
 
-    /**
-     * Gets the panel which displays the monitored points.
-     * 
-     * @return The panel which displays the monitored points.
-     */
-    private ContentPanel getMonitoredPointsPanel() {
+		item1.addListener(Events.Select, new Listener<MenuEvent>() {
 
-        // Store filters.
+			public void handleEvent(MenuEvent be) {
 
-        final StoreFilter<MonitoredPointDTO> notCompletedFilter = new StoreFilter<MonitoredPointDTO>() {
+				List<ColumnConfig> configs = new ArrayList<ColumnConfig>();
+				ColumnConfig column = new ColumnConfig();
+				column.setId("id");
+				column.setHeader("Token ID");
+				column.setWidth(100);
+				configs.add(column);
 
-            @Override
-            public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
-                    String property) {
-                return !item.isCompleted();
-            }
-        };
+				column = new ColumnConfig("date", "DATE", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-        final StoreFilter<MonitoredPointDTO> completedFilter = new StoreFilter<MonitoredPointDTO>() {
+				column = new ColumnConfig("value", "NOTE", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-            @Override
-            public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
-                    String property) {
-                return item.isCompleted();
-            }
-        };
+				column = new ColumnConfig("type", "ACTION", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-        final StoreFilter<MonitoredPointDTO> exceededFilter = new StoreFilter<MonitoredPointDTO>() {
+				ColumnModel cm = new ColumnModel(configs);
 
-            @Override
-            public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
-                    String property) {
-                return !item.isCompleted() && DateUtils.DAY_COMPARATOR.compare(new Date(), item.getExpectedDate()) > 0;
-            }
-        };
+				ListStore<ReminderHistoryDTO> historyStore = new ListStore<ReminderHistoryDTO>();
+				historyStore.add(remindersGrid.getSelectionModel().getSelectedItem().getHistory());
 
-        // Store
-        final ListStore<MonitoredPointDTO> monitoredPointsStore = new ListStore<MonitoredPointDTO>();
+				Grid<ReminderHistoryDTO> grid = new Grid<ReminderHistoryDTO>(historyStore, cm);
+				grid.getView().setForceFit(true);
+				grid.setBorders(false);
+				grid.setAutoExpandColumn("value");
+				// grid.addPlugin(countColumn);
 
-        // Grid.
-        monitoredPointsGrid = new Grid<MonitoredPointDTO>(monitoredPointsStore, new ColumnModel(
-                Arrays.asList(getMonitoredPointsColumnModel())));
-        monitoredPointsGrid.getView().setForceFit(true);
-        monitoredPointsGrid.setBorders(false);
+				// Builds the window.
+				Window window = new Window();
+				window.setWidth(750);
+				window.setHeight(400);
+				window.setPlain(true);
+				window.setModal(true);
+				window.setBlinkModal(true);
+				window.setLayout(new FitLayout());
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            monitoredPointsGrid.addPlugin((CheckColumnConfig) monitoredPointsGrid.getColumnModel().getColumn(0));
-        }
-        monitoredPointsGrid.setAutoExpandColumn("label");
+				window.setHeading(remindersGrid.getSelectionModel().getSelectedItem().getLabel());
 
-        // Filter menu.
+				window.add(grid);
+				window.show();
 
-        final FilterSelectionListener<MonitoredPointDTO> filterListener = new FilterSelectionListener<MonitoredPointDTO>(
-                monitoredPointsStore);
+			}
+		});
+		menuContext.add(item1);
 
-        final MenuItem noFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointAll());
-        noFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(noFilterItem, null);
-            }
-        });
+		remindersGrid.setContextMenu(menuContext);
 
-        final MenuItem completedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointCompleted(),
-                IconImageBundle.ICONS.closedPoint());
-        completedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(completedFilterItem, completedFilter);
-            }
-        });
+		return panel;
+	}
 
-        final MenuItem notCompletedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointUncompleted(),
-                IconImageBundle.ICONS.openedPoint());
-        notCompletedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(notCompletedFilterItem, notCompletedFilter);
-            }
-        });
+	/**
+	 * Gets the panel which displays the monitored points.
+	 * 
+	 * @return The panel which displays the monitored points.
+	 */
+	private ContentPanel getMonitoredPointsPanel() {
 
-        final MenuItem exceededFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointExceeded(),
-                IconImageBundle.ICONS.overduePoint());
-        exceededFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                filterListener.filter(exceededFilterItem, exceededFilter);
-            }
-        });
+		// Store filters.
 
-        final Menu filterMenu = new Menu();
-        filterMenu.add(noFilterItem);
-        filterMenu.add(new SeparatorMenuItem());
-        filterMenu.add(completedFilterItem);
-        filterMenu.add(notCompletedFilterItem);
-        filterMenu.add(exceededFilterItem);
+		final StoreFilter<MonitoredPointDTO> notCompletedFilter = new StoreFilter<MonitoredPointDTO>() {
 
-        // Fires manually the first filter (no filter).
-        filterListener.filter(noFilterItem, null);
+			@Override
+			public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
+							String property) {
+				return !item.isCompleted();
+			}
+		};
 
-        // Filter button.
-        final Button filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
-        filterButton.setMenu(filterMenu);
+		final StoreFilter<MonitoredPointDTO> completedFilter = new StoreFilter<MonitoredPointDTO>() {
 
-        addMonitoredPointButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
+			@Override
+			public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
+							String property) {
+				return item.isCompleted();
+			}
+		};
 
-        // Toolbar.
-        final ToolBar toolbar = new ToolBar();
-        toolbar.setAlignment(HorizontalAlignment.LEFT);
+		final StoreFilter<MonitoredPointDTO> exceededFilter = new StoreFilter<MonitoredPointDTO>() {
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            toolbar.add(addMonitoredPointButton);
-        }
-        toolbar.add(filterButton);
+			@Override
+			public boolean select(Store<MonitoredPointDTO> store, MonitoredPointDTO parent, MonitoredPointDTO item,
+							String property) {
+				return !item.isCompleted() && DateUtils.DAY_COMPARATOR.compare(new Date(), item.getExpectedDate()) > 0;
+			}
+		};
 
-        // Panel.
-        final ContentPanel panel = new ContentPanel(new FitLayout());
-        panel.setHeading(I18N.CONSTANTS.monitoredPoints());
-        panel.setBorders(false);
+		// Store
+		final ListStore<MonitoredPointDTO> monitoredPointsStore = new ListStore<MonitoredPointDTO>();
 
-        panel.setTopComponent(toolbar);
-        panel.add(monitoredPointsGrid);
+		// Grid.
+		monitoredPointsGrid = new Grid<MonitoredPointDTO>(monitoredPointsStore, new ColumnModel(
+						Arrays.asList(getMonitoredPointsColumnModel())));
+		monitoredPointsGrid.getView().setForceFit(true);
+		monitoredPointsGrid.setBorders(false);
 
-        return panel;
-    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+			monitoredPointsGrid.addPlugin((CheckColumnConfig) monitoredPointsGrid.getColumnModel().getColumn(0));
+		}
+		monitoredPointsGrid.setAutoExpandColumn("label");
 
-    /**
-     * Define a listener to apply a one filter at a time and manage the menu
-     * item state.
-     * 
-     * @author tmi
-     * 
-     * @param <E>
-     */
-    private static class FilterSelectionListener<E extends ModelData> {
+		// Filter menu.
 
-        private MenuItem currentItem;
-        private StoreFilter<E> currentFilter;
-        private final Store<E> store;
+		final FilterSelectionListener<MonitoredPointDTO> filterListener = new FilterSelectionListener<MonitoredPointDTO>(
+						monitoredPointsStore);
 
-        private FilterSelectionListener(Store<E> store) {
-            this.store = store;
-        }
+		final MenuItem noFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointAll());
+		noFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(noFilterItem, null);
+			}
+		});
 
-        public void filter(MenuItem item, StoreFilter<E> filter) {
-            activate();
-            currentItem = item;
-            filter(filter);
-            desactivate();
-        }
+		final MenuItem completedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointCompleted(),
+						IconImageBundle.ICONS.closedPoint());
+		completedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(completedFilterItem, completedFilter);
+			}
+		});
 
-        private void activate() {
-            if (currentItem != null) {
-                currentItem.setEnabled(true);
-            }
-        }
+		final MenuItem notCompletedFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointUncompleted(),
+						IconImageBundle.ICONS.openedPoint());
+		notCompletedFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(notCompletedFilterItem, notCompletedFilter);
+			}
+		});
 
-        private void desactivate() {
-            if (currentItem != null) {
-                currentItem.setEnabled(false);
-            }
-        }
+		final MenuItem exceededFilterItem = new MenuItem(I18N.CONSTANTS.monitoredPointExceeded(),
+						IconImageBundle.ICONS.overduePoint());
+		exceededFilterItem.addSelectionListener(new SelectionListener<MenuEvent>() {
+			@Override
+			public void componentSelected(MenuEvent ce) {
+				filterListener.filter(exceededFilterItem, exceededFilter);
+			}
+		});
 
-        private void filter(StoreFilter<E> filter) {
+		final Menu filterMenu = new Menu();
+		filterMenu.add(noFilterItem);
+		filterMenu.add(new SeparatorMenuItem());
+		filterMenu.add(completedFilterItem);
+		filterMenu.add(notCompletedFilterItem);
+		filterMenu.add(exceededFilterItem);
 
-            if (store == null) {
-                return;
-            }
+		// Fires manually the first filter (no filter).
+		filterListener.filter(noFilterItem, null);
 
-            store.removeFilter(currentFilter);
+		// Filter button.
+		final Button filterButton = new Button(I18N.CONSTANTS.filter(), IconImageBundle.ICONS.filter());
+		filterButton.setMenu(filterMenu);
 
-            if (filter != null) {
-                store.addFilter(filter);
-            }
+		addMonitoredPointButton = new Button(I18N.CONSTANTS.addItem(), IconImageBundle.ICONS.add());
 
-            store.applyFilters(null);
-            currentFilter = filter;
-        }
-    }
+		// Toolbar.
+		final ToolBar toolbar = new ToolBar();
+		toolbar.setAlignment(HorizontalAlignment.LEFT);
 
-    /**
-     * Gets the columns for the monitored points grid.
-     * 
-     * @return The columns for the monitored points grid.
-     */
-    private ColumnConfig[] getMonitoredPointsColumnModel() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+										.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER))) {
+			toolbar.add(addMonitoredPointButton);
+		}
+		toolbar.add(filterButton);
 
-        final DateTimeFormat format = DateUtils.DATE_SHORT;
-        final Date now = new Date();
+		// Panel.
+		final ContentPanel panel = new ContentPanel(new FitLayout());
+		panel.setHeading(I18N.CONSTANTS.monitoredPoints());
+		panel.setBorders(false);
 
-        // Completed ?
-        final CheckColumnConfig completedColumn = new CheckColumnConfig();
-        completedColumn.setId("completed");
-        completedColumn.setHeader(I18N.CONSTANTS.monitoredPointClose() + "?");
-        completedColumn.setWidth(20);
-        completedColumn.setSortable(false);
-        final CellEditor checkBoxEditor = new CellEditor(new CheckBox());
-        completedColumn.setEditor(checkBoxEditor);
+		panel.setTopComponent(toolbar);
+		panel.add(monitoredPointsGrid);
 
-        // Icon
-        final ColumnConfig iconColumn = new ColumnConfig();
-        iconColumn.setId("icon");
-        iconColumn.setHeader("");
-        iconColumn.setWidth(16);
-        iconColumn.setRenderer(new GridCellRenderer<MonitoredPointDTO>() {
+		Menu menuContext = new Menu();
+		MenuItem item1 = new MenuItem(I18N.CONSTANTS.historyShow());
 
-            @Override
-            public Object render(MonitoredPointDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+		item1.addListener(Events.Select, new Listener<MenuEvent>() {
 
-                if (model.isCompleted()) {
-                    return IconImageBundle.ICONS.closedPoint().createImage();
-                } else if (DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
-                    return IconImageBundle.ICONS.overduePoint().createImage();
-                } else {
-                    return IconImageBundle.ICONS.openedPoint().createImage();
-                }
-            }
-        });
+			public void handleEvent(MenuEvent be) {
 
-        // Label.
-        final ColumnConfig labelColumn = new ColumnConfig();
-        labelColumn.setId("label");
-        labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
-        labelColumn.setWidth(60);
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            labelColumn.setRenderer(new MonitoredPointLabelCellRender(this, this.dispatcher));
-        }
+				List<ColumnConfig> configs = new ArrayList<ColumnConfig>();
+				ColumnConfig column = new ColumnConfig();
+				column.setId("id");
+				column.setHeader("Token ID");
+				column.setWidth(100);
+				configs.add(column);
 
-        // Expected date.
-        final ColumnConfig expectedDateColumn = new ColumnConfig();
-        expectedDateColumn.setId("expectedDate");
-        expectedDateColumn.setHeader(I18N.CONSTANTS.monitoredPointExpectedDate());
-        expectedDateColumn.setWidth(60);
-        expectedDateColumn.setDateTimeFormat(format);
-        expectedDateColumn.setRenderer(new GridCellRenderer<MonitoredPointDTO>() {
+				column = new ColumnConfig("date", "DATE", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-            @Override
-            public Object render(MonitoredPointDTO model, String property, ColumnData config, int rowIndex,
-                    int colIndex, ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+				column = new ColumnConfig("value", "NOTE", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-                final Label l = new Label(format.format(model.getExpectedDate()));
-                if (!model.isCompleted() && DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
-                    l.addStyleName("points-date-exceeded");
-                }
-                return l;
-            }
-        });
+				column = new ColumnConfig("type", "ACTION", 150);
+				column.setAlignment(HorizontalAlignment.LEFT);
+				configs.add(column);
 
-        // Completion date.
-        final ColumnConfig completionDateColumn = new ColumnConfig();
-        completionDateColumn.setId("completionDate");
-        completionDateColumn.setHeader(I18N.CONSTANTS.monitoredPointCompletionDate());
-        completionDateColumn.setWidth(60);
-        completionDateColumn.setDateTimeFormat(format);
+				ColumnModel cm = new ColumnModel(configs);
 
-        return new ColumnConfig[] { completedColumn, iconColumn, labelColumn, expectedDateColumn, completionDateColumn };
-    }
+				ListStore<MonitoredPointHistoryDTO> historyStore = new ListStore<MonitoredPointHistoryDTO>();
+				historyStore.add(monitoredPointsGrid.getSelectionModel().getSelectedItem().getHistory());
 
-    /**
-     * Gets the columns for the reminders grid.
-     * 
-     * @return The columns for the reminders grid.
-     */
-    private ColumnConfig[] getRemindersColumnModel() {
+				Grid<MonitoredPointHistoryDTO> grid = new Grid<MonitoredPointHistoryDTO>(historyStore, cm);
+				grid.getView().setForceFit(true);
+				grid.setBorders(false);
+				grid.setAutoExpandColumn("value");
+				// grid.addPlugin(countColumn);
 
-        final DateTimeFormat format = DateUtils.DATE_SHORT;
-        final Date now = new Date();
+				// Builds the window.
+				Window window = new Window();
+				window.setWidth(750);
+				window.setHeight(400);
+				window.setPlain(true);
+				window.setModal(true);
+				window.setBlinkModal(true);
+				window.setLayout(new FitLayout());
 
-        // Completed ?
-        final CheckColumnConfig completedColumn = new CheckColumnConfig();
-        completedColumn.setId("completed");
-        completedColumn.setHeader(I18N.CONSTANTS.monitoredPointClose() + "?");
-        completedColumn.setWidth(20);
-        completedColumn.setSortable(false);
-        final CellEditor checkBoxEditor = new CellEditor(new CheckBox());
-        completedColumn.setEditor(checkBoxEditor);
+				window.setHeading(monitoredPointsGrid.getSelectionModel().getSelectedItem().getLabel());
+				window.add(grid);
+				window.show();
 
-        // Icon
-        final ColumnConfig iconColumn = new ColumnConfig();
-        iconColumn.setId("icon");
-        iconColumn.setHeader("");
-        iconColumn.setWidth(16);
-        iconColumn.setRenderer(new GridCellRenderer<ReminderDTO>() {
+			}
+		});
+		menuContext.add(item1);
 
-            @Override
-            public Object render(ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+		monitoredPointsGrid.setContextMenu(menuContext);
 
-                if (model.isCompleted()) {
-                    return IconImageBundle.ICONS.closedReminder().createImage();
-                } else if (DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
-                    return IconImageBundle.ICONS.overdueReminder().createImage();
-                } else {
-                    return IconImageBundle.ICONS.openedReminder().createImage();
-                }
-            }
-        });
+		return panel;
+	}
 
-        // Label.
-        final ColumnConfig labelColumn = new ColumnConfig();
-        labelColumn.setId("label");
-        labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
-        labelColumn.setWidth(60);
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
-            labelColumn.setRenderer(new ReminderLableCellRenderer(this, this.dispatcher));
-        }
+	/**
+	 * Define a listener to apply a one filter at a time and manage the menu
+	 * item state.
+	 * 
+	 * @author tmi
+	 * 
+	 * @param <E>
+	 */
+	private static class FilterSelectionListener<E extends ModelData> {
 
-        // Expected date.
-        final ColumnConfig expectedDateColumn = new ColumnConfig();
-        expectedDateColumn.setId("expectedDate");
-        expectedDateColumn.setHeader(I18N.CONSTANTS.monitoredPointExpectedDate());
-        expectedDateColumn.setWidth(60);
-        expectedDateColumn.setDateTimeFormat(format);
-        expectedDateColumn.setRenderer(new GridCellRenderer<ReminderDTO>() {
+		private MenuItem currentItem;
+		private StoreFilter<E> currentFilter;
+		private final Store<E> store;
 
-            @Override
-            public Object render(ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
-                    ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+		private FilterSelectionListener(Store<E> store) {
+			this.store = store;
+		}
 
-                final Label l = new Label(format.format(model.getExpectedDate()));
-                if (!model.isCompleted() && DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
-                    l.addStyleName("points-date-exceeded");
-                }
-                return l;
-            }
-        });
+		public void filter(MenuItem item, StoreFilter<E> filter) {
+			activate();
+			currentItem = item;
+			filter(filter);
+			desactivate();
+		}
 
-        // Completion date.
-        final ColumnConfig completionDateColumn = new ColumnConfig();
-        completionDateColumn.setId("completionDate");
-        completionDateColumn.setHeader(I18N.CONSTANTS.monitoredPointCompletionDate());
-        completionDateColumn.setWidth(60);
-        completionDateColumn.setDateTimeFormat(format);
+		private void activate() {
+			if (currentItem != null) {
+				currentItem.setEnabled(true);
+			}
+		}
 
-        return new ColumnConfig[] { completedColumn, iconColumn, labelColumn, expectedDateColumn, completionDateColumn };
-    }
+		private void desactivate() {
+			if (currentItem != null) {
+				currentItem.setEnabled(false);
+			}
+		}
 
-    @Override
-    public ContentPanel getRequiredElementContentPanel() {
+		private void filter(StoreFilter<E> filter) {
 
-        return requiredElementContentPanel;
-    }
+			if (store == null) {
+				return;
+			}
 
+			store.removeFilter(currentFilter);
+
+			if (filter != null) {
+				store.addFilter(filter);
+			}
+
+			store.applyFilters(null);
+			currentFilter = filter;
+		}
+	}
+
+	/**
+	 * Gets the columns for the monitored points grid.
+	 * 
+	 * @return The columns for the monitored points grid.
+	 */
+	private ColumnConfig[] getMonitoredPointsColumnModel() {
+
+		final DateTimeFormat format = DateUtils.DATE_SHORT;
+		final Date now = new Date();
+
+		// Completed ?
+		final CheckColumnConfig completedColumn = new CheckColumnConfig() {
+			/**
+			 * Returns the css style name which contains a background image
+			 * representing the checkbox. This implementation returns "-on" or
+			 * "" based on a boolean model property. "-disabled" can be returned
+			 * to render a disabled checkbox.
+			 * 
+			 * @param model
+			 *            the model
+			 * @param property
+			 *            the model property
+			 * @param rowIndex
+			 *            the row index
+			 * @param colIndex
+			 *            the cell index
+			 * @return the css style name
+			 */
+			@Override
+			protected String getCheckState(ModelData model, String property, int rowIndex, int colIndex) {
+				MonitoredPointDTO point = (MonitoredPointDTO) model;
+
+				boolean creator = false;
+				for (MonitoredPointHistoryDTO hist : point.getHistory()) {
+					if (hist.getType() == ReminderChangeType.CREATED)
+						creator = (authentication.getUserId() == hist.getUserId() ? true : false);
+				}
+
+				if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER)
+								|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+					Boolean v = model.get(property);
+					String on = (v != null && v) ? "-on" : "";
+					return on;
+				} else
+					return "-disabled";
+			}
+		};
+		completedColumn.setId("completed");
+		completedColumn.setHeader(I18N.CONSTANTS.monitoredPointClose() + "?");
+		completedColumn.setWidth(20);
+		completedColumn.setSortable(false);
+		final CellEditor checkBoxEditor = new CellEditor(new CheckBox());
+		completedColumn.setEditor(checkBoxEditor);
+
+		// Icon
+		final ColumnConfig iconColumn = new ColumnConfig();
+		iconColumn.setId("icon");
+		iconColumn.setHeader("");
+		iconColumn.setWidth(16);
+		iconColumn.setRenderer(new GridCellRenderer<MonitoredPointDTO>() {
+
+			@Override
+			public Object render(MonitoredPointDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+
+				if (model.isCompleted()) {
+					return IconImageBundle.ICONS.closedPoint().createImage();
+				} else if (DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
+					return IconImageBundle.ICONS.overduePoint().createImage();
+				} else {
+					return IconImageBundle.ICONS.openedPoint().createImage();
+				}
+			}
+		});
+
+		// Label.
+		final ColumnConfig labelColumn = new ColumnConfig();
+		labelColumn.setId("label");
+		labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
+		labelColumn.setWidth(60);
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+										.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER))) {
+			labelColumn.setRenderer(new MonitoredPointLabelCellRender(this, this.dispatcher, authentication));
+		}
+
+		// Expected date.
+		final ColumnConfig expectedDateColumn = new ColumnConfig();
+		expectedDateColumn.setId("expectedDate");
+		expectedDateColumn.setHeader(I18N.CONSTANTS.monitoredPointExpectedDate());
+		expectedDateColumn.setWidth(60);
+		expectedDateColumn.setDateTimeFormat(format);
+		expectedDateColumn.setRenderer(new GridCellRenderer<MonitoredPointDTO>() {
+
+			@Override
+			public Object render(MonitoredPointDTO model, String property, ColumnData config, int rowIndex,
+							int colIndex, ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+
+				final Label l = new Label(format.format(model.getExpectedDate()));
+				if (!model.isCompleted() && DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
+					l.addStyleName("points-date-exceeded");
+				}
+				return l;
+			}
+		});
+
+		// Completion date.
+		final ColumnConfig completionDateColumn = new ColumnConfig();
+		completionDateColumn.setId("completionDate");
+		completionDateColumn.setHeader(I18N.CONSTANTS.monitoredPointCompletionDate());
+		completionDateColumn.setWidth(60);
+		completionDateColumn.setDateTimeFormat(format);
+
+		return new ColumnConfig[] { completedColumn, iconColumn, labelColumn, expectedDateColumn, completionDateColumn };
+	}
+
+	/**
+	 * Gets the columns for the reminders grid.
+	 * 
+	 * @return The columns for the reminders grid.
+	 */
+	private ColumnConfig[] getRemindersColumnModel() {
+
+		final DateTimeFormat format = DateUtils.DATE_SHORT;
+		final Date now = new Date();
+
+		// Completed ?
+		final CheckColumnConfig completedColumn = new CheckColumnConfig() {
+			/**
+			 * Returns the css style name which contains a background image
+			 * representing the checkbox. This implementation returns "-on" or
+			 * "" based on a boolean model property. "-disabled" can be returned
+			 * to render a disabled checkbox.
+			 * 
+			 * @param model
+			 *            the model
+			 * @param property
+			 *            the model property
+			 * @param rowIndex
+			 *            the row index
+			 * @param colIndex
+			 *            the cell index
+			 * @return the css style name
+			 */
+			@Override
+			protected String getCheckState(ModelData model, String property, int rowIndex, int colIndex) {
+				ReminderDTO reminder = (ReminderDTO) model;
+
+				boolean creator = false;
+				for (ReminderHistoryDTO hist : reminder.getHistory()) {
+					if (hist.getType() == ReminderChangeType.CREATED)
+						creator = (authentication.getUserId() == hist.getUserId() ? true : false);
+				}
+
+				if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER)
+								|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+					Boolean v = model.get(property);
+					String on = (v != null && v) ? "-on" : "";
+					return on;
+				} else
+					return "-disabled";
+			}
+		};
+		completedColumn.setId("completed");
+		completedColumn.setHeader(I18N.CONSTANTS.monitoredPointClose() + "?");
+		completedColumn.setWidth(20);
+		completedColumn.setSortable(false);
+		final CellEditor checkBoxEditor = new CellEditor(new CheckBox());
+		completedColumn.setEditor(checkBoxEditor);
+
+		// Icon
+		final ColumnConfig iconColumn = new ColumnConfig();
+		iconColumn.setId("icon");
+		iconColumn.setHeader("");
+		iconColumn.setWidth(16);
+		iconColumn.setRenderer(new GridCellRenderer<ReminderDTO>() {
+
+			@Override
+			public Object render(ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+
+				if (model.isCompleted()) {
+					return IconImageBundle.ICONS.closedReminder().createImage();
+				} else if (DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
+					return IconImageBundle.ICONS.overdueReminder().createImage();
+				} else {
+					return IconImageBundle.ICONS.openedReminder().createImage();
+				}
+			}
+		});
+
+		// Label.
+		final ColumnConfig labelColumn = new ColumnConfig();
+		labelColumn.setId("label");
+		labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
+		labelColumn.setWidth(60);
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&& (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS) || ProfileUtils
+										.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER))) {
+			labelColumn.setRenderer(new ReminderLableCellRenderer(this, this.dispatcher, authentication));
+		}
+
+		// Expected date.
+		final ColumnConfig expectedDateColumn = new ColumnConfig();
+		expectedDateColumn.setId("expectedDate");
+		expectedDateColumn.setHeader(I18N.CONSTANTS.monitoredPointExpectedDate());
+		expectedDateColumn.setWidth(60);
+		expectedDateColumn.setDateTimeFormat(format);
+		expectedDateColumn.setRenderer(new GridCellRenderer<ReminderDTO>() {
+
+			@Override
+			public Object render(ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
+							ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+
+				final Label l = new Label(format.format(model.getExpectedDate()));
+				if (!model.isCompleted() && DateUtils.DAY_COMPARATOR.compare(now, model.getExpectedDate()) > 0) {
+					l.addStyleName("points-date-exceeded");
+				}
+				return l;
+			}
+		});
+
+		// Completion date.
+		final ColumnConfig completionDateColumn = new ColumnConfig();
+		completionDateColumn.setId("completionDate");
+		completionDateColumn.setHeader(I18N.CONSTANTS.monitoredPointCompletionDate());
+		completionDateColumn.setWidth(60);
+		completionDateColumn.setDateTimeFormat(format);
+
+		return new ColumnConfig[] { completedColumn, iconColumn, labelColumn, expectedDateColumn, completionDateColumn };
+	}
+
+	@Override
+	public ContentPanel getRequiredElementContentPanel() {
+
+		return requiredElementContentPanel;
+	}
+
 }
Index: src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java	(Revision 1504)
+++ src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java	(Arbeitskopie)
@@ -8,12 +8,17 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.project.dashboard.EditFormWindow.FormSubmitListener;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.UpdateEntity;
 import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.reminder.ReminderDTO;
+import org.sigmah.shared.dto.reminder.ReminderHistoryDTO;
 
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.event.Listener;
@@ -28,10 +33,8 @@
 import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.rpc.AsyncCallback;
 
-
-
 /**
- * A cell renderer for label column in a Reminder grid 
+ * A cell renderer for label column in a Reminder grid
  * 
  * @author HUZHE
  * 
@@ -41,32 +44,53 @@
 	// private ProjectPresenter projectPresenter;
 	private ProjectDashboardPresenter.View view;
 	private final Dispatcher dispatcher;
+	private final Authentication authentication;
 
 	/**
 	 * @param dispatcher
 	 * @param view
 	 */
-	public ReminderLableCellRenderer(ProjectDashboardPresenter.View view,
-			Dispatcher dispatcher) {
+	public ReminderLableCellRenderer(ProjectDashboardPresenter.View view, Dispatcher dispatcher,
+					Authentication authentication) {
 		super();
 		this.view = view;
 		this.dispatcher = dispatcher;
+		this.authentication = authentication;
 
 	}
 
 	@Override
-	public Object render(final ReminderDTO model, String property,ColumnData config, int rowIndex, int colIndex,
-			ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+	public Object render(final ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
+					ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
 
-		//Create a lable with a hyperlink style 
+		boolean creator = false;
+		for (ReminderHistoryDTO hist : model.getHistory()) {
+			if (hist.getType() == ReminderChangeType.CREATED)
+				creator = (authentication.getUserId() == hist.getUserId() ? true : false);
+		}
+
+		// Create a lable with a hyperlink style
 		com.google.gwt.user.client.ui.Label l = new com.google.gwt.user.client.ui.Label(model.getLabel());
-		l.addStyleName("hyperlink_style_label");
-		if (model.isCompleted()) {
-			//When the reminder is completed,change the label style
-			l.addStyleName("points-completed");
+
+		if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDER)
+						|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+
+			l.addStyleName("hyperlink_style_label");
+			if (model.isCompleted()) {
+				// When the monitored point is completed,change the label style
+				l.addStyleName("points-completed");
+			}
+		} else {
+			if (model.isCompleted()) {
+				// When the monitored point is completed,change the label style
+				l.addStyleName("points-completed");
+			}
+
+			return l;
+
 		}
-		
-		//Add a click handler to response a cleck event
+
+		// Add a click handler to response a cleck event
 		l.addClickHandler(new ClickHandler() {
 
 			@Override
@@ -74,18 +98,18 @@
 
 				// Create a new FormWindow to edit the reminder
 				final EditFormWindow window = new EditFormWindow();
-				window.addTextField(I18N.CONSTANTS.monitoredPointLabel(),model.getLabel(), false);
-				window.addDateField(I18N.CONSTANTS.monitoredPointExpectedDate(),model.getExpectedDate(), false);
+				window.addTextField(I18N.CONSTANTS.monitoredPointLabel(), model.getLabel(), false);
+				window.addDateField(I18N.CONSTANTS.monitoredPointExpectedDate(), model.getExpectedDate(), false);
 
-				window.show(I18N.CONSTANTS.reminderUpdate(),I18N.CONSTANTS.reminderUpdateDetails());
-								
-				//SubmitLister, see the definition of EditFormWindow for details
+				window.show(I18N.CONSTANTS.reminderUpdate(), I18N.CONSTANTS.reminderUpdateDetails());
+
+				// SubmitLister, see the definition of EditFormWindow for
+				// details
 				window.addFormSubmitListener(new FormSubmitListener() {
 
-					
 					// ---------Updating Handler-------------------------
-					// --------------------------------------------------	
-					
+					// --------------------------------------------------
+
 					@Override
 					public void formSubmitted(Object... values) {
 
@@ -100,140 +124,127 @@
 							return;
 						}
 
-						//Retrive all values 
+						// Retrive all values
 						final Date expectedDate = (Date) element0;
 						final String label = (String) element1;
 						final HashMap<String, Object> properties = new HashMap<String, Object>();
-						properties.put("expectedDate",
-								expectedDate.getTime());
+						properties.put("expectedDate", expectedDate.getTime());
 						properties.put("label", label);
 						properties.put("deleted", model.isDeleted());
 
 						// RPC to update by using the command UpdateEntity
-						dispatcher.execute(new UpdateEntity(model, properties),new MaskingAsyncMonitor(view.getRemindersGrid(), I18N.CONSTANTS.loading()),
-								new AsyncCallback<VoidResult>() {
+						dispatcher.execute(new UpdateEntity(model, properties),
+										new MaskingAsyncMonitor(view.getRemindersGrid(), I18N.CONSTANTS.loading()),
+										new AsyncCallback<VoidResult>() {
 
-									@Override
-									public void onFailure(Throwable caught) {						 
-									
-										Log.error("[execute] Error while updating the reminder.",caught);
-										MessageBox.alert(
-												I18N.CONSTANTS
-														.reminderUpdateError(),
-												I18N.CONSTANTS
-														.reminderUpdateErrorDetails(),
-												null);
-																	  
-									}
+											@Override
+											public void onFailure(Throwable caught) {
 
-									@Override
-									public void onSuccess(VoidResult result) {
+												Log.error("[execute] Error while updating the reminder.", caught);
+												MessageBox.alert(I18N.CONSTANTS.reminderUpdateError(),
+																I18N.CONSTANTS.reminderUpdateErrorDetails(), null);
 
-										// After the RPC,modify the DTO model of the grid
-										model.setExpectedDate(expectedDate);
-										model.setLabel(label);
-										
-										//Refresh the grid 									
-										 ListStore<ReminderDTO> reminderDTOStore = view
-												.getRemindersGrid().getStore();
-										  reminderDTOStore.update(model);
-										  
-										   Notification.show(
-												I18N.CONSTANTS
-														.infoConfirmation(),
-												I18N.CONSTANTS
-														.reminderUpdateConfirm());
-									}
-								});
+											}
 
+											@Override
+											public void onSuccess(VoidResult result) {
+
+												// After the RPC,modify the DTO
+												// model of the grid
+												model.setExpectedDate(expectedDate);
+												model.setLabel(label);
+
+												// Refresh the grid
+												ListStore<ReminderDTO> reminderDTOStore = view.getRemindersGrid()
+																.getStore();
+												reminderDTOStore.update(model);
+
+												Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																I18N.CONSTANTS.reminderUpdateConfirm());
+											}
+										});
+
 					}
-                    
+
 					// ---------Updating End-----------------------------
 
-					
 					// ---------Deletion Handler-------------------------
-				    // --------------------------------------------------	
-					
+					// --------------------------------------------------
+
 					@Override
 					public void deleteModelObject() {
-						
-					     //Create a listener for the confirm message box
-					    Listener<MessageBoxEvent> confirmListener =new Listener<MessageBoxEvent>() {  
-					           public void handleEvent(MessageBoxEvent be) {  
-					             
-					        	   Button btn = be.getButtonClicked();
-					        	   
-					        	   //If user clicks the Yes button,begin to delete
-					        	   if(btn.getText().equals(I18N.CONSTANTS.yes()))
-					        	    {				        		            
-					        		   HashMap<String, Object> properties = new HashMap <String,Object>();
-				                       properties.put("expectedDate",model.getExpectedDate().getTime());
-									   properties.put("label", model.getLabel());
-								       properties.put("deleted", true);
-					        		   
-								        dispatcher.execute(new UpdateEntity(model,properties),new MaskingAsyncMonitor(view.getRemindersGrid(), I18N.CONSTANTS.loading()),
-								        		new AsyncCallback<VoidResult>(){
 
-													@Override
-													public void onFailure(Throwable caught) {
-														
-														
-														Log.error("[execute] Error while updating the reminder.",caught);
-														MessageBox.alert(
-																I18N.CONSTANTS
-																		.deletionError(),
-																I18N.CONSTANTS
-																		.reminderDeletionErrorDetails(),
-																null);
-														
-													}
+						// Create a listener for the confirm message box
+						Listener<MessageBoxEvent> confirmListener = new Listener<MessageBoxEvent>() {
+							public void handleEvent(MessageBoxEvent be) {
 
-													@Override
-													public void onSuccess(VoidResult result) {
-														
-														//After RPC, refresh the veiw
-														 model.setDeleted(true);
-														 ListStore<ReminderDTO> reminderDTOStore = view
-															.getRemindersGrid().getStore();
-													     reminderDTOStore.remove(model);
-													     
-													     window.hide();
-													     Notification.show(
-																	I18N.CONSTANTS
-																			.infoConfirmation(),
-																	I18N.CONSTANTS
-																			.reminderDeletionConfirm());
-														
-													}					
-								        	
-								        });
-					        		   
-					        	    }
-					        	   	        	   
-					           }  
-					         };  
-					       							
-				       //Create a confirm messagebox with the listener
-				       MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(), I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
-				       confirmMessageBox.setButtons(MessageBox.YESNO);
-				       ((Button)confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
-				       ((Button)confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
-				       confirmMessageBox.setIcon(MessageBox.WARNING);
-				       confirmMessageBox.show();	
-						
+								Button btn = be.getButtonClicked();
+
+								// If user clicks the Yes button,begin to delete
+								if (btn.getText().equals(I18N.CONSTANTS.yes())) {
+									HashMap<String, Object> properties = new HashMap<String, Object>();
+									properties.put("expectedDate", model.getExpectedDate().getTime());
+									properties.put("label", model.getLabel());
+									properties.put("deleted", true);
+
+									dispatcher.execute(new UpdateEntity(model, properties), new MaskingAsyncMonitor(
+													view.getRemindersGrid(), I18N.CONSTANTS.loading()),
+													new AsyncCallback<VoidResult>() {
+
+														@Override
+														public void onFailure(Throwable caught) {
+
+															Log.error("[execute] Error while updating the reminder.",
+																			caught);
+															MessageBox.alert(
+																			I18N.CONSTANTS.deletionError(),
+																			I18N.CONSTANTS.reminderDeletionErrorDetails(),
+																			null);
+
+														}
+
+														@Override
+														public void onSuccess(VoidResult result) {
+
+															// After RPC,
+															// refresh the veiw
+															model.setDeleted(true);
+															ListStore<ReminderDTO> reminderDTOStore = view
+																			.getRemindersGrid().getStore();
+															reminderDTOStore.remove(model);
+
+															window.hide();
+															Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																			I18N.CONSTANTS.reminderDeletionConfirm());
+
+														}
+
+													});
+
+								}
+
+							}
+						};
+
+						// Create a confirm messagebox with the listener
+						MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(),
+										I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
+						confirmMessageBox.setButtons(MessageBox.YESNO);
+						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
+						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
+						confirmMessageBox.setIcon(MessageBox.WARNING);
+						confirmMessageBox.show();
+
 					}
-					
-					// ---------Deletion End-----------------------------		
-					
+
+					// ---------Deletion End-----------------------------
+
 				});
-						
 
 			}
 		});
 		return l;
 
 	}
-	
-	
 
 }
Index: src/main/java/org/sigmah/server/domain/PersistentClasses.java
===================================================================
--- src/main/java/org/sigmah/server/domain/PersistentClasses.java	(Revision 1504)
+++ src/main/java/org/sigmah/server/domain/PersistentClasses.java	(Arbeitskopie)
@@ -65,8 +65,10 @@
 import org.sigmah.shared.domain.quality.QualityCriterion;
 import org.sigmah.shared.domain.quality.QualityFramework;
 import org.sigmah.shared.domain.reminder.MonitoredPoint;
+import org.sigmah.shared.domain.reminder.MonitoredPointHistory;
 import org.sigmah.shared.domain.reminder.MonitoredPointList;
 import org.sigmah.shared.domain.reminder.Reminder;
+import org.sigmah.shared.domain.reminder.ReminderHistory;
 import org.sigmah.shared.domain.reminder.ReminderList;
 import org.sigmah.shared.domain.value.File;
 import org.sigmah.shared.domain.value.FileVersion;
@@ -89,8 +91,10 @@
             File.class,
             MonitoredPoint.class,
             MonitoredPointList.class,
+            MonitoredPointHistory.class,
             Reminder.class,
             ReminderList.class,
+            ReminderHistory.class,
             IndicatorValue.class,
             AttributeValue.class,
             ReportingPeriod.class,
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java	(Revision 1504)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java	(Arbeitskopie)
@@ -47,8 +47,11 @@
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.UserDatabase;
 import org.sigmah.shared.domain.reminder.MonitoredPoint;
+import org.sigmah.shared.domain.reminder.MonitoredPointHistory;
 import org.sigmah.shared.domain.reminder.MonitoredPointList;
 import org.sigmah.shared.domain.reminder.Reminder;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.domain.reminder.ReminderHistory;
 import org.sigmah.shared.domain.reminder.ReminderList;
 import org.sigmah.shared.dto.OrgUnitModelDTO;
 import org.sigmah.shared.dto.ProjectDTOLight;
@@ -138,9 +141,9 @@
 			ProjectReportPolicy policy = injector.getInstance(ProjectReportPolicy.class);
 			return new CreateResult(policy.createDraft(user, propertyMap));
 		} else if ("MonitoredPoint".equals(cmd.getEntityName())) {
-			return createMonitoredPoint(properties);
+			return createMonitoredPoint(user, properties);
 		} else if ("Reminder".equals(cmd.getEntityName())) {
-			return createReminder(properties);
+			return createReminder(user, properties);
 		} else if ("User".equals(cmd.getEntityName())) {
 			return createUser(user, propertyMap);
 		} else if ("PrivacyGroup".equals(cmd.getEntityName())) {
@@ -301,7 +304,7 @@
 	}
 
 	private CommandResult createIndicator(User user, CreateEntity cmd, Map<String, Object> properties)
-	                throws IllegalAccessCommandException {
+					throws IllegalAccessCommandException {
 
 		Indicator indicator = new Indicator();
 
@@ -360,7 +363,7 @@
 		em.persist(funding);
 
 		final CreateResult result = new CreateResult(injector.getInstance(Mapper.class).map(funding,
-		                ProjectFundingDTO.class));
+						ProjectFundingDTO.class));
 
 		// Sets update or create to inform the client-side.
 		result.setNewId(create ? -1 : 1);
@@ -368,7 +371,7 @@
 		return result;
 	}
 
-	private CommandResult createMonitoredPoint(Map<String, Object> properties) {
+	private CommandResult createMonitoredPoint(User user, Map<String, Object> properties) {
 
 		if (log.isDebugEnabled()) {
 			log.debug("[createMonitoredPoint] Starts monitored point creation.");
@@ -394,7 +397,7 @@
 
 			if (log.isDebugEnabled()) {
 				log.debug("[createMonitoredPoint] The project #" + project.getId()
-				                + " doesn't have a points list. Creates it.");
+								+ " doesn't have a points list. Creates it.");
 			}
 
 			list = new MonitoredPointList();
@@ -413,18 +416,25 @@
 		// Adds it to the list.
 		list.addMonitoredPoint(point);
 
+		MonitoredPointHistory hist = new MonitoredPointHistory();
+		hist.setDate(new Date());
+		hist.setType(ReminderChangeType.CREATED);
+		hist.setUserId(user.getId());
+		hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+		point.addHistory(hist);
+
 		// Saves it.
 		em.persist(project);
 
 		if (log.isDebugEnabled()) {
 			log.debug("[createMonitoredPoint] Ends monitored point creation #" + point.getId() + " in list #"
-			                + list.getId() + ".");
+							+ list.getId() + ".");
 		}
 
 		return new CreateResult(injector.getInstance(Mapper.class).map(point, MonitoredPointDTO.class));
 	}
 
-	private CommandResult createReminder(Map<String, Object> properties) {
+	private CommandResult createReminder(User user, Map<String, Object> properties) {
 
 		if (log.isDebugEnabled()) {
 			log.debug("[createReminder] Starts reminder creation.");
@@ -450,7 +460,7 @@
 
 			if (log.isDebugEnabled()) {
 				log.debug("[createReminder] The project #" + project.getId()
-				                + " doesn't have a reminders list. Creates it.");
+								+ " doesn't have a reminders list. Creates it.");
 			}
 
 			list = new ReminderList();
@@ -468,12 +478,19 @@
 		// Adds it to the list.
 		list.addReminder(reminder);
 
+		ReminderHistory hist = new ReminderHistory();
+		hist.setDate(new Date());
+		hist.setType(ReminderChangeType.CREATED);
+		hist.setUserId(user.getId());
+		hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+		reminder.addHistory(hist);
+
 		// Saves it.
 		em.persist(project);
 
 		if (log.isDebugEnabled()) {
 			log.debug("[createReminder] Ends reminder creation #" + reminder.getId() + " in list #" + list.getId()
-			                + ".");
+							+ ".");
 		}
 
 		return new CreateResult(injector.getInstance(Mapper.class).map(reminder, ReminderDTO.class));
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java	(Revision 1504)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java	(Arbeitskopie)
@@ -29,7 +29,10 @@
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.UserDatabase;
 import org.sigmah.shared.domain.reminder.MonitoredPoint;
+import org.sigmah.shared.domain.reminder.MonitoredPointHistory;
 import org.sigmah.shared.domain.reminder.Reminder;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.domain.reminder.ReminderHistory;
 import org.sigmah.shared.exception.CommandException;
 import org.sigmah.shared.exception.IllegalAccessCommandException;
 
@@ -53,10 +56,10 @@
 	}
 
 	@Override
-    public CommandResult execute(UpdateEntity cmd, User user) throws CommandException {
+	public CommandResult execute(UpdateEntity cmd, User user) throws CommandException {
 
 		if (LOG.isDebugEnabled()) {
-            LOG.debug("[execute] Update command for entity: " + cmd.getEntityName() + ".");
+			LOG.debug("[execute] Update command for entity: " + cmd.getEntityName() + ".");
 		}
 
 		Map<String, Object> changes = cmd.getChanges().getTransientMap();
@@ -80,49 +83,41 @@
 			policy.update(user, cmd.getId(), changeMap);
 
 		} else if ("PersonalEvent".equals(cmd.getEntityName())) {
-            PersonalEventPolicy policy = injector.getInstance(PersonalEventPolicy.class);
+			PersonalEventPolicy policy = injector.getInstance(PersonalEventPolicy.class);
 			policy.update(user, cmd.getId(), changeMap);
 
 		} else if ("ProjectReport".equals(cmd.getEntityName())) {
-            ProjectReportPolicy policy = injector.getInstance(ProjectReportPolicy.class);
+			ProjectReportPolicy policy = injector.getInstance(ProjectReportPolicy.class);
 			policy.update(user, cmd.getId(), changeMap);
-			
-		}else if("reminder.Reminder".equals(cmd.getEntityName()))
-		{
-			updateReminder(cmd);
-		}else if("reminder.MonitoredPoint".equals(cmd.getEntityName()))
-		{
-			updateMonitoredPoint(cmd);
-		}
-		else if("ProjectFunding".equals(cmd.getEntityName()))
-		{
+
+		} else if ("reminder.Reminder".equals(cmd.getEntityName())) {
+			updateReminder(user, cmd);
+		} else if ("reminder.MonitoredPoint".equals(cmd.getEntityName())) {
+			updateMonitoredPoint(user, cmd);
+		} else if ("ProjectFunding".equals(cmd.getEntityName())) {
 			updateProjectFunding(cmd);
-		}
-		else if("Project".equals(cmd.getEntityName()))
-		{
-			 ProjectPolicy policy = injector.getInstance(ProjectPolicy.class);
-				policy.update(user, cmd.getId(), changeMap);
-		}
-		else {
+		} else if ("Project".equals(cmd.getEntityName())) {
+			ProjectPolicy policy = injector.getInstance(ProjectPolicy.class);
+			policy.update(user, cmd.getId(), changeMap);
+		} else {
 			throw new RuntimeException("unknown entity type");
 		}
 
 		return null;
 	}
 
-    private VoidResult updateProjectFunding(UpdateEntity cmd) {
-		
-    	ProjectFunding projectFunding = em.find(ProjectFunding.class, cmd.getId());
-    	if(projectFunding!=null)
-    	{
-    		projectFunding.setPercentage((Double)cmd.getChanges().get("percentage"));
-    		em.merge(projectFunding);
-    	}
+	private VoidResult updateProjectFunding(UpdateEntity cmd) {
+
+		ProjectFunding projectFunding = em.find(ProjectFunding.class, cmd.getId());
+		if (projectFunding != null) {
+			projectFunding.setPercentage((Double) cmd.getChanges().get("percentage"));
+			em.merge(projectFunding);
+		}
 		return new VoidResult();
 	}
 
 	private void updateIndicator(User user, UpdateEntity cmd, Map<String, Object> changes)
-            throws IllegalAccessCommandException {
+					throws IllegalAccessCommandException {
 		Indicator indicator = em.find(Indicator.class, cmd.getId());
 
 		// todo: make UserDatabase non-nullable
@@ -132,12 +127,12 @@
 		}
 
 		assertDesignPriviledges(user, db);
-		if(indicator.getName().length() > 1024)
-            indicator.setName(indicator.getName().substring(0, 1024));
+		if (indicator.getName().length() > 1024)
+			indicator.setName(indicator.getName().substring(0, 1024));
 		updateIndicatorProperties(indicator, changes);
 	}
 
-    private void updateAttribute(User user, UpdateEntity cmd, Map<String, Object> changes) {
+	private void updateAttribute(User user, UpdateEntity cmd, Map<String, Object> changes) {
 		Attribute attribute = em.find(Attribute.class, cmd.getId());
 
 		// TODO: decide where attributes belong and how to manage them
@@ -146,37 +141,106 @@
 		updateAttributeProperties(changes, attribute);
 	}
 
-    private void updateAttributeGroup(UpdateEntity cmd, Map<String, Object> changes) {
+	private void updateAttributeGroup(UpdateEntity cmd, Map<String, Object> changes) {
 		AttributeGroup group = em.find(AttributeGroup.class, cmd.getId());
 
 		updateAttributeGroupProperties(group, changes);
 	}
 
-	
-	private VoidResult updateReminder(UpdateEntity cmd)
-	{
+	private VoidResult updateReminder(User user, UpdateEntity cmd) {
 		Reminder reminderToUpdate = em.find(Reminder.class, cmd.getId());
 		if (reminderToUpdate != null) {
-			//Update 3 properties: ExpectedDate,Label,Deleted
+
+			boolean date_modified = !(new Date((Long) cmd.getChanges().get("expectedDate")).equals(reminderToUpdate
+							.getExpectedDate()));
+			boolean label_modified = !((String) cmd.getChanges().get("label")).equals(reminderToUpdate.getLabel());
+
+			// Update 3 properties: ExpectedDate,Label,Deleted
 			reminderToUpdate.setExpectedDate(new Date((Long) cmd.getChanges().get("expectedDate")));
 			reminderToUpdate.setLabel((String) cmd.getChanges().get("label"));
-			Boolean deleted = (Boolean)cmd.getChanges().get("deleted");
-			reminderToUpdate.setDeleted(deleted);
+			Boolean deleted = (Boolean) cmd.getChanges().get("deleted");
+			if (deleted != null)
+				reminderToUpdate.setDeleted(deleted);
+
 			em.merge(reminderToUpdate);
+
+			if (!reminderToUpdate.isDeleted()) {
+
+				if (date_modified) {
+					ReminderHistory hist = new ReminderHistory();
+					hist.setDate(new Date());
+					hist.setType(ReminderChangeType.DATE_MODIFIED);
+					hist.setUserId(user.getId());
+					hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+					reminderToUpdate.addHistory(hist);
+				}
+
+				if (label_modified) {
+					ReminderHistory hist = new ReminderHistory();
+					hist.setDate(new Date());
+					hist.setType(ReminderChangeType.LABEL_MODIFIED);
+					hist.setUserId(user.getId());
+					hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+					reminderToUpdate.addHistory(hist);
+				}
+
+			} else {
+				ReminderHistory hist = new ReminderHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.DELETED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				reminderToUpdate.addHistory(hist);
+			}
 		}
 		return new VoidResult();
 	}
 
-	private VoidResult updateMonitoredPoint(UpdateEntity cmd) {
-		
+	private VoidResult updateMonitoredPoint(User user, UpdateEntity cmd) {
+
 		MonitoredPoint point = em.find(MonitoredPoint.class, cmd.getId());
 		if (point != null) {
-			//Update 3 properties: ExpectedDate,Label,Deleted
+
+			boolean date_modified = !(new Date((Long) cmd.getChanges().get("expectedDate")).equals(point
+							.getExpectedDate()));
+			boolean label_modified = !((String) cmd.getChanges().get("label")).equals(point.getLabel());
+
+			// Update 3 properties: ExpectedDate,Label,Deleted
 			point.setExpectedDate(new Date((Long) cmd.getChanges().get("expectedDate")));
 			point.setLabel((String) cmd.getChanges().get("label"));
-			Boolean deleted =(Boolean) cmd.getChanges().get("deleted");
-			point.setDeleted(deleted);
+			Boolean deleted = (Boolean) cmd.getChanges().get("deleted");
+			if (deleted != null)
+				point.setDeleted(deleted);
+
 			em.merge(point);
+
+			if (!point.isDeleted()) {
+				if (date_modified) {
+					MonitoredPointHistory hist = new MonitoredPointHistory();
+					hist.setDate(new Date());
+					hist.setType(ReminderChangeType.DATE_MODIFIED);
+					hist.setUserId(user.getId());
+					hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+					point.addHistory(hist);
+				}
+
+				if (label_modified) {
+					MonitoredPointHistory hist = new MonitoredPointHistory();
+					hist.setDate(new Date());
+					hist.setType(ReminderChangeType.LABEL_MODIFIED);
+					hist.setUserId(user.getId());
+					hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+					point.addHistory(hist);
+				}
+
+			} else {
+				MonitoredPointHistory hist = new MonitoredPointHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.DELETED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				point.addHistory(hist);
+			}
 		}
 		return new VoidResult();
 	}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateMonitoredPointsHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateMonitoredPointsHandler.java	(Revision 1504)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateMonitoredPointsHandler.java	(Arbeitskopie)
@@ -1,6 +1,7 @@
 package org.sigmah.server.endpoint.gwtrpc.handler;
 
 import java.util.ArrayList;
+import java.util.Date;
 
 import javax.persistence.EntityManager;
 
@@ -11,6 +12,8 @@
 import org.sigmah.shared.command.result.MonitoredPointsResultList;
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.reminder.MonitoredPoint;
+import org.sigmah.shared.domain.reminder.MonitoredPointHistory;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
 import org.sigmah.shared.dto.reminder.MonitoredPointDTO;
 import org.sigmah.shared.exception.CommandException;
 
@@ -18,37 +21,89 @@
 
 public class UpdateMonitoredPointsHandler implements CommandHandler<UpdateMonitoredPoints> {
 
-    private final EntityManager em;
-    private final Mapper mapper;
+	private final EntityManager em;
+	private final Mapper mapper;
 
-    @Inject
-    public UpdateMonitoredPointsHandler(EntityManager em, Mapper mapper) {
-        this.em = em;
-        this.mapper = mapper;
-    }
+	@Inject
+	public UpdateMonitoredPointsHandler(EntityManager em, Mapper mapper) {
+		this.em = em;
+		this.mapper = mapper;
+	}
 
-    @Override
-    public CommandResult execute(UpdateMonitoredPoints cmd, User user) throws CommandException {
+	@Override
+	public CommandResult execute(UpdateMonitoredPoints cmd, User user) throws CommandException {
 
-        final ArrayList<MonitoredPointDTO> resultList = new ArrayList<MonitoredPointDTO>();
+		final ArrayList<MonitoredPointDTO> resultList = new ArrayList<MonitoredPointDTO>();
 
-        MonitoredPoint point;
-        for (final MonitoredPointDTO pointDTO : cmd.getList()) {
+		MonitoredPoint point;
+		for (final MonitoredPointDTO pointDTO : cmd.getList()) {
 
-            // Retrieves entity.
-            point = em.find(MonitoredPoint.class, pointDTO.getId());
+			// Retrieves entity.
+			point = em.find(MonitoredPoint.class, pointDTO.getId());
 
-            // Updates it.
-            point.setCompletionDate(pointDTO.getCompletionDate());
-            point.setExpectedDate(pointDTO.getExpectedDate());
-            point.setLabel(pointDTO.getLabel());
+			boolean completionDateChanged = false;
+			if (point.getCompletionDate() == null && pointDTO.getCompletionDate() != null)
+				completionDateChanged = true;
+			if (pointDTO.getCompletionDate() == null && point.getCompletionDate() != null)
+				completionDateChanged = true;
+			boolean expectedDateChanged = !pointDTO.getExpectedDate().equals(point.getExpectedDate());
+			boolean labelChanged = !pointDTO.getLabel().equals(point.getLabel());
 
-            // Saves it.
-            point = em.merge(point);
+			// Updates it.
+			point.setCompletionDate(pointDTO.getCompletionDate());
+			point.setExpectedDate(pointDTO.getExpectedDate());
+			point.setLabel(pointDTO.getLabel());
 
-            resultList.add(mapper.map(point, MonitoredPointDTO.class));
-        }
+			// Saves it.
+			point = em.merge(point);
 
-        return new MonitoredPointsResultList(resultList);
-    }
+			// History
+
+			if (completionDateChanged) {
+
+				Date lastDateOpened = new Date(0);
+				Date lastDateClosed = new Date(0);
+
+				for (MonitoredPointHistory hist : point.getHistory()) {
+					if (hist.getType() == ReminderChangeType.CLOSED && hist.getDate().after(lastDateClosed))
+						lastDateClosed = hist.getDate();
+					if (hist.getType() == ReminderChangeType.OPENED && hist.getDate().after(lastDateOpened))
+						lastDateOpened = hist.getDate();
+				}
+
+				MonitoredPointHistory hist = new MonitoredPointHistory();
+				hist.setDate(new Date());
+				if (lastDateOpened.after(lastDateClosed) || lastDateClosed.equals(lastDateOpened))
+					hist.setType(ReminderChangeType.CLOSED);
+				else
+					hist.setType(ReminderChangeType.OPENED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+
+				point.addHistory(hist);
+			}
+
+			if (labelChanged) {
+				MonitoredPointHistory hist = new MonitoredPointHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.LABEL_MODIFIED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				point.addHistory(hist);
+			}
+
+			if (expectedDateChanged) {
+				MonitoredPointHistory hist = new MonitoredPointHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.DATE_MODIFIED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				point.addHistory(hist);
+			}
+
+			resultList.add(mapper.map(point, MonitoredPointDTO.class));
+		}
+
+		return new MonitoredPointsResultList(resultList);
+	}
 }
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateRemindersHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateRemindersHandler.java	(Revision 1504)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateRemindersHandler.java	(Arbeitskopie)
@@ -1,6 +1,7 @@
 package org.sigmah.server.endpoint.gwtrpc.handler;
 
 import java.util.ArrayList;
+import java.util.Date;
 
 import javax.persistence.EntityManager;
 
@@ -11,6 +12,8 @@
 import org.sigmah.shared.command.result.RemindersResultList;
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.reminder.Reminder;
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.domain.reminder.ReminderHistory;
 import org.sigmah.shared.dto.reminder.ReminderDTO;
 import org.sigmah.shared.exception.CommandException;
 
@@ -18,37 +21,89 @@
 
 public class UpdateRemindersHandler implements CommandHandler<UpdateReminders> {
 
-    private final EntityManager em;
-    private final Mapper mapper;
+	private final EntityManager em;
+	private final Mapper mapper;
 
-    @Inject
-    public UpdateRemindersHandler(EntityManager em, Mapper mapper) {
-        this.em = em;
-        this.mapper = mapper;
-    }
+	@Inject
+	public UpdateRemindersHandler(EntityManager em, Mapper mapper) {
+		this.em = em;
+		this.mapper = mapper;
+	}
 
-    @Override
-    public CommandResult execute(UpdateReminders cmd, User user) throws CommandException {
+	@Override
+	public CommandResult execute(UpdateReminders cmd, User user) throws CommandException {
 
-        final ArrayList<ReminderDTO> resultList = new ArrayList<ReminderDTO>();
+		final ArrayList<ReminderDTO> resultList = new ArrayList<ReminderDTO>();
 
-        Reminder reminder;
-        for (final ReminderDTO reminderDTO : cmd.getList()) {
+		Reminder reminder;
+		for (final ReminderDTO reminderDTO : cmd.getList()) {
 
-            // Retrieves entity.
-            reminder = em.find(Reminder.class, reminderDTO.getId());
+			// Retrieves entity.
+			reminder = em.find(Reminder.class, reminderDTO.getId());
 
-            // Updates it.
-            reminder.setCompletionDate(reminderDTO.getCompletionDate());
-            reminder.setExpectedDate(reminderDTO.getExpectedDate());
-            reminder.setLabel(reminderDTO.getLabel());
+			boolean completionDateChanged = false;
+			if (reminder.getCompletionDate() == null && reminderDTO.getCompletionDate() != null)
+				completionDateChanged = true;
+			if (reminderDTO.getCompletionDate() == null && reminder.getCompletionDate() != null)
+				completionDateChanged = true;
+			boolean expectedDateChanged = !reminderDTO.getExpectedDate().equals(reminder.getExpectedDate());
+			boolean labelChanged = !reminderDTO.getLabel().equals(reminder.getLabel());
 
-            // Saves it.
-            reminder = em.merge(reminder);
+			// Updates it.
+			reminder.setCompletionDate(reminderDTO.getCompletionDate());
+			reminder.setExpectedDate(reminderDTO.getExpectedDate());
+			reminder.setLabel(reminderDTO.getLabel());
 
-            resultList.add(mapper.map(reminder, ReminderDTO.class));
-        }
+			// Saves it.
+			reminder = em.merge(reminder);
 
-        return new RemindersResultList(resultList);
-    }
+			// History
+
+			if (completionDateChanged) {
+
+				Date lastDateOpened = new Date(0);
+				Date lastDateClosed = new Date(0);
+
+				for (ReminderHistory hist : reminder.getHistory()) {
+					if (hist.getType() == ReminderChangeType.CLOSED && hist.getDate().after(lastDateClosed))
+						lastDateClosed = hist.getDate();
+					if (hist.getType() == ReminderChangeType.OPENED && hist.getDate().after(lastDateOpened))
+						lastDateOpened = hist.getDate();
+				}
+
+				ReminderHistory hist = new ReminderHistory();
+				hist.setDate(new Date());
+				if (lastDateOpened.after(lastDateClosed) || lastDateClosed.equals(lastDateOpened))
+					hist.setType(ReminderChangeType.CLOSED);
+				else
+					hist.setType(ReminderChangeType.OPENED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+
+				reminder.addHistory(hist);
+			}
+
+			if (labelChanged) {
+				ReminderHistory hist = new ReminderHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.LABEL_MODIFIED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				reminder.addHistory(hist);
+			}
+
+			if (expectedDateChanged) {
+				ReminderHistory hist = new ReminderHistory();
+				hist.setDate(new Date());
+				hist.setType(ReminderChangeType.DATE_MODIFIED);
+				hist.setUserId(user.getId());
+				hist.setValue(user.getName() + ", " + user.getFirstName() + " <" + user.getEmail() + ">");
+				reminder.addHistory(hist);
+			}
+
+			resultList.add(mapper.map(reminder, ReminderDTO.class));
+		}
+
+		return new RemindersResultList(resultList);
+	}
 }
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Arbeitskopie)
@@ -72,7 +72,6 @@
 	 * for viewing the logframe sub-tab
 	 */
 	VIEW_LOGFRAME,
-	
 
 	/**
 	 * for creating/modifying/deleting objectives, expected results, activities,
@@ -80,8 +79,22 @@
 	 */
 	EDIT_LOGFRAME,
 
+	/**
+	 * 
+	 * for creating/deleting/modifying/closing reminders created by the user
+	 */
 
+	EDIT_OWN_REMINDER,
+
 	/**
+	 * 
+	 * for creating/deleting/modifying/closing reminders created by the user or
+	 * by other users
+	 */
+
+	EDIT_ALL_REMINDERS,
+
+	/**
 	 * Show global export button in projects list
 	 */
 	GLOBAL_EXPORT;
@@ -131,6 +144,12 @@
 		case EDIT_LOGFRAME:
 			gpName = I18N.CONSTANTS.EDIT_LOGFRAME();
 			break;
+		case EDIT_ALL_REMINDERS:
+			gpName = I18N.CONSTANTS.EDIT_ALL_REMINDERS();
+			break;
+		case EDIT_OWN_REMINDER:
+			gpName = I18N.CONSTANTS.EDIT_OWN_REMINDER();
+			break;
 		default:
 			gpName = null;
 		}
Index: src/main/java/org/sigmah/shared/domain/reminder/MonitoredPoint.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/reminder/MonitoredPoint.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/domain/reminder/MonitoredPoint.java	(Arbeitskopie)
@@ -1,8 +1,11 @@
 package org.sigmah.shared.domain.reminder;
 
 import java.io.Serializable;
+import java.util.ArrayList;
 import java.util.Date;
+import java.util.List;
 
+import javax.persistence.CascadeType;
 import javax.persistence.Column;
 import javax.persistence.Entity;
 import javax.persistence.GeneratedValue;
@@ -10,6 +13,7 @@
 import javax.persistence.Id;
 import javax.persistence.JoinColumn;
 import javax.persistence.ManyToOne;
+import javax.persistence.OneToMany;
 import javax.persistence.Table;
 import javax.persistence.Temporal;
 import javax.persistence.TemporalType;
@@ -21,89 +25,104 @@
 @Table(name = "monitored_point")
 public class MonitoredPoint implements Serializable {
 
-    private static final long serialVersionUID = 3600773298461293280L;
+	private static final long serialVersionUID = 3600773298461293280L;
 
-    private Integer id;
-    private String label;
-    private Date expectedDate;
-    private Date completionDate;
-    private File file;
-    private MonitoredPointList parentList;
-    private Boolean deleted;
+	private Integer id;
+	private String label;
+	private Date expectedDate;
+	private Date completionDate;
+	private File file;
+	private MonitoredPointList parentList;
+	private Boolean deleted;
 
-    @Id
-    @GeneratedValue(strategy = GenerationType.AUTO)
-    @Column(name = "id_monitored_point")
-    public Integer getId() {
-        return id;
-    }
+	private List<MonitoredPointHistory> history = new ArrayList<MonitoredPointHistory>(0);
 
-    public void setId(Integer id) {
-        this.id = id;
-    }
+	@Id
+	@GeneratedValue(strategy = GenerationType.AUTO)
+	@Column(name = "id_monitored_point")
+	public Integer getId() {
+		return id;
+	}
 
-    @Column(name = "label", length = 8192, nullable = false)
-    public String getLabel() {
-        return label;
-    }
+	public void setId(Integer id) {
+		this.id = id;
+	}
 
-    public void setLabel(String label) {
-        this.label = label;
-    }
+	@Column(name = "label", length = 8192, nullable = false)
+	public String getLabel() {
+		return label;
+	}
 
-    @Column(name = "expected_date", nullable = false)
-    @Temporal(value = TemporalType.TIMESTAMP)
-    public Date getExpectedDate() {
-        return expectedDate;
-    }
+	public void setLabel(String label) {
+		this.label = label;
+	}
 
-    public void setExpectedDate(Date expectedDate) {
-        this.expectedDate = expectedDate;
-    }
+	@Column(name = "expected_date", nullable = false)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getExpectedDate() {
+		return expectedDate;
+	}
 
-    @Column(name = "completion_date", nullable = true)
-    @Temporal(value = TemporalType.TIMESTAMP)
-    public Date getCompletionDate() {
-        return completionDate;
-    }
+	public void setExpectedDate(Date expectedDate) {
+		this.expectedDate = expectedDate;
+	}
 
-    public void setCompletionDate(Date completionDate) {
-        this.completionDate = completionDate;
-    }
+	@Column(name = "completion_date", nullable = true)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getCompletionDate() {
+		return completionDate;
+	}
 
-    @ManyToOne(optional = true)
-    @JoinColumn(name = "id_file", nullable = true)
-    public File getFile() {
-        return file;
-    }
+	public void setCompletionDate(Date completionDate) {
+		this.completionDate = completionDate;
+	}
 
-    public void setFile(File file) {
-        this.file = file;
-    }
+	@ManyToOne(optional = true)
+	@JoinColumn(name = "id_file", nullable = true)
+	public File getFile() {
+		return file;
+	}
 
-    @ManyToOne(optional = false)
-    @JoinColumn(name = "id_list", nullable = false)
-    public MonitoredPointList getParentList() {
-        return parentList;
-    }
+	public void setFile(File file) {
+		this.file = file;
+	}
 
-    public void setParentList(MonitoredPointList parentList) {
-        this.parentList = parentList;
-    }
+	@ManyToOne(optional = false)
+	@JoinColumn(name = "id_list", nullable = false)
+	public MonitoredPointList getParentList() {
+		return parentList;
+	}
 
-    @Transient
-    public boolean isCompleted() {
-        return completionDate != null;
-    }
-    
-    @Column(name="deleted")
+	public void setParentList(MonitoredPointList parentList) {
+		this.parentList = parentList;
+	}
+
+	@Transient
+	public boolean isCompleted() {
+		return completionDate != null;
+	}
+
+	@Column(name = "deleted")
 	public Boolean isDeleted() {
 		return deleted;
 	}
 
-	public  void setDeleted(Boolean deleted) {
+	public void setDeleted(Boolean deleted) {
 		this.deleted = deleted;
 	}
-    
-    
+
+	@OneToMany(cascade = { CascadeType.PERSIST, CascadeType.MERGE, CascadeType.REMOVE }, mappedBy = "monitoredPoint")
+	public List<MonitoredPointHistory> getHistory() {
+		return history;
+	}
+
+	public void addHistory(MonitoredPointHistory hist) {
+		hist.setMonitoredPoint(this);
+		history.add(hist);
+	}
+
+	public void setHistory(List<MonitoredPointHistory> history) {
+		this.history = history;
+	}
+
 }
Index: src/main/java/org/sigmah/shared/domain/reminder/MonitoredPointHistory.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/reminder/MonitoredPointHistory.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/domain/reminder/MonitoredPointHistory.java	(Revision 0)
@@ -0,0 +1,95 @@
+package org.sigmah.shared.domain.reminder;
+
+import java.io.Serializable;
+import java.util.Date;
+
+import javax.persistence.Column;
+import javax.persistence.Entity;
+import javax.persistence.EnumType;
+import javax.persistence.Enumerated;
+import javax.persistence.GeneratedValue;
+import javax.persistence.GenerationType;
+import javax.persistence.Id;
+import javax.persistence.JoinColumn;
+import javax.persistence.ManyToOne;
+import javax.persistence.Table;
+import javax.persistence.Temporal;
+import javax.persistence.TemporalType;
+
+@Entity
+@Table(name = "monitored_point_history")
+public class MonitoredPointHistory implements Serializable {
+
+	private static final long serialVersionUID = 1784565851559026850L;
+
+	private Integer id;
+	private Integer userId;
+
+	private MonitoredPoint monitoredPoint;
+
+	private Date date;
+	private ReminderChangeType type;
+	private String value;
+
+	@Id
+	@GeneratedValue(strategy = GenerationType.AUTO)
+	@Column(name = "id_monitored_point_history")
+	public Integer getId() {
+		return id;
+	}
+
+	public void setId(Integer id) {
+		this.id = id;
+	}
+
+	@Column(name = "generated_date", nullable = false)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getDate() {
+		return date;
+	}
+
+	public void setDate(Date date) {
+		this.date = date;
+	}
+
+	@Column(name = "id_user", nullable = false)
+	public Integer getUserId() {
+		return userId;
+	}
+
+	public void setUserId(Integer userId) {
+		this.userId = userId;
+	}
+
+	@Column(name = "change_type", nullable = false)
+	@Enumerated(value = EnumType.STRING)
+	public ReminderChangeType getType() {
+		return type;
+	}
+
+	public void setType(ReminderChangeType type) {
+		this.type = type;
+	}
+
+	@Column(name = "value", nullable = true, columnDefinition = "TEXT")
+	public String getValue() {
+		return value;
+	}
+
+	public void setValue(String value) {
+		this.value = value;
+	}
+
+	@ManyToOne
+	@JoinColumn(name = "id_monitored_point", nullable = false)
+	public MonitoredPoint getMonitoredPoint() {
+
+		return monitoredPoint;
+	}
+
+	public void setMonitoredPoint(MonitoredPoint monitoredPoint) {
+
+		this.monitoredPoint = monitoredPoint;
+
+	}
+}
Index: src/main/java/org/sigmah/shared/domain/reminder/Reminder.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/reminder/Reminder.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/domain/reminder/Reminder.java	(Arbeitskopie)
@@ -1,8 +1,11 @@
 package org.sigmah.shared.domain.reminder;
 
 import java.io.Serializable;
+import java.util.ArrayList;
 import java.util.Date;
+import java.util.List;
 
+import javax.persistence.CascadeType;
 import javax.persistence.Column;
 import javax.persistence.Entity;
 import javax.persistence.GeneratedValue;
@@ -10,6 +13,7 @@
 import javax.persistence.Id;
 import javax.persistence.JoinColumn;
 import javax.persistence.ManyToOne;
+import javax.persistence.OneToMany;
 import javax.persistence.Table;
 import javax.persistence.Temporal;
 import javax.persistence.TemporalType;
@@ -19,71 +23,73 @@
 @Table(name = "reminder")
 public class Reminder implements Serializable {
 
-    private static final long serialVersionUID = 2360748872630231054L;
+	private static final long serialVersionUID = 2360748872630231054L;
 
-    private Integer id;
-    private String label;
-    private Date expectedDate;
-    private Date completionDate;
-    private ReminderList parentList;
-    private Boolean deleted;
+	private Integer id;
+	private String label;
+	private Date expectedDate;
+	private Date completionDate;
+	private ReminderList parentList;
+	private Boolean deleted;
 
-    @Id
-    @GeneratedValue(strategy = GenerationType.AUTO)
-    @Column(name = "id_reminder")
-    public Integer getId() {
-        return id;
-    }
+	private List<ReminderHistory> history = new ArrayList<ReminderHistory>(0);
 
-    public void setId(Integer id) {
-        this.id = id;
-    }
+	@Id
+	@GeneratedValue(strategy = GenerationType.AUTO)
+	@Column(name = "id_reminder")
+	public Integer getId() {
+		return id;
+	}
 
-    @Column(name = "label", length = 8192, nullable = false)
-    public String getLabel() {
-        return label;
-    }
+	public void setId(Integer id) {
+		this.id = id;
+	}
 
-    public void setLabel(String label) {
-        this.label = label;
-    }
+	@Column(name = "label", length = 8192, nullable = false)
+	public String getLabel() {
+		return label;
+	}
 
-    @Column(name = "expected_date", nullable = false)
-    @Temporal(value = TemporalType.TIMESTAMP)
-    public Date getExpectedDate() {
-        return expectedDate;
-    }
+	public void setLabel(String label) {
+		this.label = label;
+	}
 
-    public void setExpectedDate(Date expectedDate) {
-        this.expectedDate = expectedDate;
-    }
+	@Column(name = "expected_date", nullable = false)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getExpectedDate() {
+		return expectedDate;
+	}
 
-    @Column(name = "completion_date", nullable = true)
-    @Temporal(value = TemporalType.TIMESTAMP)
-    public Date getCompletionDate() {
-        return completionDate;
-    }
+	public void setExpectedDate(Date expectedDate) {
+		this.expectedDate = expectedDate;
+	}
 
-    public void setCompletionDate(Date completionDate) {
-        this.completionDate = completionDate;
-    }
+	@Column(name = "completion_date", nullable = true)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getCompletionDate() {
+		return completionDate;
+	}
 
-    @ManyToOne(optional = false)
-    @JoinColumn(name = "id_list", nullable = false)
-    public ReminderList getParentList() {
-        return parentList;
-    }
+	public void setCompletionDate(Date completionDate) {
+		this.completionDate = completionDate;
+	}
 
-    public void setParentList(ReminderList parentList) {
-        this.parentList = parentList;
-    }
+	@ManyToOne(optional = false)
+	@JoinColumn(name = "id_list", nullable = false)
+	public ReminderList getParentList() {
+		return parentList;
+	}
 
-    @Transient
-    public boolean isCompleted() {
-        return completionDate != null;
-    }
-   
-    @Column(name="deleted")
+	public void setParentList(ReminderList parentList) {
+		this.parentList = parentList;
+	}
+
+	@Transient
+	public boolean isCompleted() {
+		return completionDate != null;
+	}
+
+	@Column(name = "deleted")
 	public Boolean isDeleted() {
 		return deleted;
 	}
@@ -92,8 +98,18 @@
 		this.deleted = deleted;
 	}
 
+	@OneToMany(cascade = { CascadeType.PERSIST, CascadeType.MERGE, CascadeType.REMOVE }, mappedBy = "reminder")
+	public List<ReminderHistory> getHistory() {
+		return history;
+	}
 
-    
-    
-   
+	public void addHistory(ReminderHistory hist) {
+		hist.setReminder(this);
+		history.add(hist);
+	}
+
+	public void setHistory(List<ReminderHistory> history) {
+		this.history = history;
+	}
+
 }
Index: src/main/java/org/sigmah/shared/domain/reminder/ReminderChangeType.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/reminder/ReminderChangeType.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/domain/reminder/ReminderChangeType.java	(Revision 0)
@@ -0,0 +1,7 @@
+package org.sigmah.shared.domain.reminder;
+
+public enum ReminderChangeType {
+
+	CREATED, DATE_MODIFIED, LABEL_MODIFIED, CLOSED, OPENED, DELETED
+
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/domain/reminder/ReminderHistory.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/reminder/ReminderHistory.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/domain/reminder/ReminderHistory.java	(Revision 0)
@@ -0,0 +1,99 @@
+package org.sigmah.shared.domain.reminder;
+
+import java.io.Serializable;
+import java.util.Date;
+
+import javax.persistence.Column;
+import javax.persistence.Entity;
+import javax.persistence.EnumType;
+import javax.persistence.Enumerated;
+import javax.persistence.GeneratedValue;
+import javax.persistence.GenerationType;
+import javax.persistence.Id;
+import javax.persistence.JoinColumn;
+import javax.persistence.ManyToOne;
+import javax.persistence.Table;
+import javax.persistence.Temporal;
+import javax.persistence.TemporalType;
+
+@Entity
+@Table(name = "reminder_history")
+public class ReminderHistory implements Serializable {
+
+	/**
+	 * 
+	 */
+	private static final long serialVersionUID = 6420022855036073653L;
+
+	private Integer id;
+	private Integer userId;
+
+	private Reminder reminder;
+
+	private Date date;
+	private ReminderChangeType type;
+	private String value;
+
+	@Id
+	@GeneratedValue(strategy = GenerationType.AUTO)
+	@Column(name = "id_reminder_history")
+	public Integer getId() {
+		return id;
+	}
+
+	public void setId(Integer id) {
+		this.id = id;
+	}
+
+	@Column(name = "generated_date", nullable = false)
+	@Temporal(value = TemporalType.TIMESTAMP)
+	public Date getDate() {
+		return date;
+	}
+
+	public void setDate(Date date) {
+		this.date = date;
+	}
+
+	@Column(name = "id_user", nullable = false)
+	public Integer getUserId() {
+		return userId;
+	}
+
+	public void setUserId(Integer userId) {
+		this.userId = userId;
+	}
+
+	@Column(name = "change_type", nullable = false)
+	@Enumerated(value = EnumType.STRING)
+	public ReminderChangeType getType() {
+		return type;
+	}
+
+	public void setType(ReminderChangeType type) {
+		this.type = type;
+	}
+
+	@Column(name = "value", nullable = true, columnDefinition = "TEXT")
+	public String getValue() {
+		return value;
+	}
+
+	public void setValue(String value) {
+		this.value = value;
+	}
+
+	@ManyToOne
+	@JoinColumn(name = "id_reminder", nullable = false)
+	public Reminder getReminder() {
+
+		return reminder;
+	}
+
+	public void setReminder(Reminder reminder) {
+
+		this.reminder = reminder;
+
+	}
+
+}
Index: src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java	(Arbeitskopie)
@@ -1,6 +1,7 @@
 package org.sigmah.shared.dto.reminder;
 
 import java.util.Date;
+import java.util.List;
 
 import org.sigmah.shared.domain.value.File;
 import org.sigmah.shared.dto.EntityDTO;
@@ -16,97 +17,106 @@
  */
 public class MonitoredPointDTO extends BaseModelData implements EntityDTO {
 
-    private static final long serialVersionUID = 1259632326368572850L;
+	private static final long serialVersionUID = 1259632326368572850L;
 
-    @Override
-    public String getEntityName() {
-        return "reminder.MonitoredPoint";
-    }
+	@Override
+	public String getEntityName() {
+		return "reminder.MonitoredPoint";
+	}
 
-    // Id.
-    @Override
-    public int getId() {
-        final Integer id = (Integer) get("id");
-        return id != null ? id : -1;
-    }
+	// Id.
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
 
-    public void setId(int id) {
-        set("id", id);
-    }
+	public void setId(int id) {
+		set("id", id);
+	}
 
-    // Label
-    public String getLabel() {
-        return get("label");
-    }
+	// Label
+	public String getLabel() {
+		return get("label");
+	}
 
-    public void setLabel(String label) {
-        set("label", label);
-    }
+	public void setLabel(String label) {
+		set("label", label);
+	}
 
-    // Expected date
-    public Date getExpectedDate() {
-        return get("expectedDate");
-    }
+	// Expected date
+	public Date getExpectedDate() {
+		return get("expectedDate");
+	}
 
-    public void setExpectedDate(Date expectedDate) {
-        set("expectedDate", expectedDate);
-    }
+	public void setExpectedDate(Date expectedDate) {
+		set("expectedDate", expectedDate);
+	}
 
-    // Completion date
-    public Date getCompletionDate() {
-        return get("completionDate");
-    }
+	// Completion date
+	public Date getCompletionDate() {
+		return get("completionDate");
+	}
 
-    public void setCompletionDate(Date completionDate) {
-        set("completionDate", completionDate);
-        setIsCompleted();
-    }
+	public void setCompletionDate(Date completionDate) {
+		set("completionDate", completionDate);
+		setIsCompleted();
+	}
 
-    public void setIsCompleted() {
-        set("completed", getCompletionDate() != null);
-    }
+	public void setIsCompleted() {
+		set("completed", getCompletionDate() != null);
+	}
 
-    public boolean getIsCompleted() {
-        return (Boolean) get("completed");
-    }
+	public boolean getIsCompleted() {
+		return (Boolean) get("completed");
+	}
 
-    // File
-    public FileDTO getFile() {
-        return get("file");
-    }
+	// File
+	public FileDTO getFile() {
+		return get("file");
+	}
 
-    public void setFile(File file) {
-        set("file", file);
-    }
-    
-    //Deleted
-    public Boolean isDeleted()
-    {
-    	return (Boolean) get("deleted");
-    }
-    
-    public void setDeleted(Boolean isDeleted)
-    {
-    	set("deleted",isDeleted);
-    }
+	public void setFile(File file) {
+		set("file", file);
+	}
 
-    public boolean isCompleted() {
-        return getCompletionDate() != null;
-    }
+	// Deleted
+	public Boolean isDeleted() {
+		return (Boolean) get("deleted");
+	}
 
-    @Override
-    public boolean equals(Object obj) {
+	public void setDeleted(Boolean isDeleted) {
+		set("deleted", isDeleted);
+	}
 
-        if (obj == null) {
-            return false;
-        }
+	public boolean isCompleted() {
+		return getCompletionDate() != null;
+	}
 
-        if (!(obj instanceof MonitoredPointDTO)) {
-            return false;
-        }
+	// History
+	public List<MonitoredPointHistoryDTO> getHistory() {
 
-        final MonitoredPointDTO other = (MonitoredPointDTO) obj;
+		return get("history");
+	}
 
-        return getId() == other.getId();
-    }
+	public void setHistory(List<MonitoredPointHistoryDTO> history) {
+
+		set("history", history);
+	}
+
+	@Override
+	public boolean equals(Object obj) {
+
+		if (obj == null) {
+			return false;
+		}
+
+		if (!(obj instanceof MonitoredPointDTO)) {
+			return false;
+		}
+
+		final MonitoredPointDTO other = (MonitoredPointDTO) obj;
+
+		return getId() == other.getId();
+	}
 }
Index: src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointHistoryDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointHistoryDTO.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointHistoryDTO.java	(Revision 0)
@@ -0,0 +1,90 @@
+package org.sigmah.shared.dto.reminder;
+
+import java.util.Date;
+
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.dto.EntityDTO;
+
+import com.extjs.gxt.ui.client.data.BaseModelData;
+
+public class MonitoredPointHistoryDTO extends BaseModelData implements EntityDTO {
+
+	/**
+	 * 
+	 */
+	private static final long serialVersionUID = -8640742685576164607L;
+
+	@Override
+	public String getEntityName() {
+		return "reminder.MonitoredPointHistory";
+	}
+
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
+
+	public void setId(int id) {
+		set("id", id);
+	}
+
+	public Date getDate() {
+		return get("date");
+	}
+
+	public void setDate(Date date) {
+		set("date", date);
+	}
+
+	public String getValue() {
+		return get("value");
+	}
+
+	public void setValue(String value) {
+		set("value", value);
+	}
+
+	public int getUserId() {
+		final Integer userId = (Integer) get("userId");
+		return userId != null ? userId : -1;
+	}
+
+	public void setUserId(int userId) {
+		set("userId", userId);
+	}
+
+	public ReminderChangeType getType() {
+		return get("type");
+	}
+
+	public void setType(ReminderChangeType type) {
+
+		set("type", type);
+	}
+
+	public void setMonitoredPoint(MonitoredPointDTO monitoredPoint) {
+		set("monitoredPoint", monitoredPoint);
+	}
+
+	public MonitoredPointDTO getMonitoredPoint() {
+		return get("monitoredPoint");
+	}
+
+	@Override
+	public boolean equals(Object obj) {
+
+		if (obj == null) {
+			return false;
+		}
+
+		if (!(obj instanceof MonitoredPointHistoryDTO)) {
+			return false;
+		}
+
+		final MonitoredPointHistoryDTO other = (MonitoredPointHistoryDTO) obj;
+
+		return getId() == other.getId();
+	}
+
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java	(Arbeitskopie)
@@ -1,6 +1,7 @@
 package org.sigmah.shared.dto.reminder;
 
 import java.util.Date;
+import java.util.List;
 
 import org.sigmah.shared.dto.EntityDTO;
 
@@ -14,88 +15,97 @@
  */
 public class ReminderDTO extends BaseModelData implements EntityDTO {
 
-    private static final long serialVersionUID = 6733872261309621888L;
+	private static final long serialVersionUID = 6733872261309621888L;
 
-    @Override
-    public String getEntityName() {
-        return "reminder.Reminder";
-    }
+	@Override
+	public String getEntityName() {
+		return "reminder.Reminder";
+	}
 
-    // Id.
-    @Override
-    public int getId() {
-        final Integer id = (Integer) get("id");
-        return id != null ? id : -1;
-    }
+	// Id.
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
 
-    public void setId(int id) {
-        set("id", id);
-    }
+	public void setId(int id) {
+		set("id", id);
+	}
 
-    // Label
-    public String getLabel() {
-        return get("label");
-    }
+	// Label
+	public String getLabel() {
+		return get("label");
+	}
 
-    public void setLabel(String label) {
-        set("label", label);
-    }
+	public void setLabel(String label) {
+		set("label", label);
+	}
 
-    // Expected date
-    public Date getExpectedDate() {
-        return get("expectedDate");
-    }
+	// Expected date
+	public Date getExpectedDate() {
+		return get("expectedDate");
+	}
 
-    public void setExpectedDate(Date expectedDate) {
-        set("expectedDate", expectedDate);
-    }
+	public void setExpectedDate(Date expectedDate) {
+		set("expectedDate", expectedDate);
+	}
 
-    // Completion date
-    public Date getCompletionDate() {
-        return get("completionDate");
-    }
+	// Completion date
+	public Date getCompletionDate() {
+		return get("completionDate");
+	}
 
-    public void setCompletionDate(Date completionDate) {
-        set("completionDate", completionDate);
-        setIsCompleted();
-    }
-    
-    //Deleted
-    public Boolean isDeleted()
-    {
-    	return (Boolean) get("deleted");
-    }
-    
-    public void setDeleted(Boolean isDeleted)
-    {
-    	set("deleted",isDeleted);
-    }
+	public void setCompletionDate(Date completionDate) {
+		set("completionDate", completionDate);
+		setIsCompleted();
+	}
 
-    public void setIsCompleted() {
-        set("completed", getCompletionDate() != null);
-    }
+	// Deleted
+	public Boolean isDeleted() {
+		return (Boolean) get("deleted");
+	}
 
-    public boolean getIsCompleted() {
-        return (Boolean) get("completed");
-    }
+	public void setDeleted(Boolean isDeleted) {
+		set("deleted", isDeleted);
+	}
 
-    public boolean isCompleted() {
-        return getCompletionDate() != null;
-    }
+	public void setIsCompleted() {
+		set("completed", getCompletionDate() != null);
+	}
 
-    @Override
-    public boolean equals(Object obj) {
+	public boolean getIsCompleted() {
+		return (Boolean) get("completed");
+	}
 
-        if (obj == null) {
-            return false;
-        }
+	public boolean isCompleted() {
+		return getCompletionDate() != null;
+	}
 
-        if (!(obj instanceof ReminderDTO)) {
-            return false;
-        }
+	// History
+	public List<ReminderHistoryDTO> getHistory() {
 
-        final ReminderDTO other = (ReminderDTO) obj;
+		return get("history");
+	}
 
-        return getId() == other.getId();
-    }
+	public void setHistory(List<ReminderHistoryDTO> history) {
+
+		set("history", history);
+	}
+
+	@Override
+	public boolean equals(Object obj) {
+
+		if (obj == null) {
+			return false;
+		}
+
+		if (!(obj instanceof ReminderDTO)) {
+			return false;
+		}
+
+		final ReminderDTO other = (ReminderDTO) obj;
+
+		return getId() == other.getId();
+	}
 }
Index: src/main/java/org/sigmah/shared/dto/reminder/ReminderHistoryDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/ReminderHistoryDTO.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/dto/reminder/ReminderHistoryDTO.java	(Revision 0)
@@ -0,0 +1,94 @@
+package org.sigmah.shared.dto.reminder;
+
+import java.util.Date;
+
+import org.sigmah.shared.domain.reminder.ReminderChangeType;
+import org.sigmah.shared.dto.EntityDTO;
+
+import com.extjs.gxt.ui.client.data.BaseModelData;
+
+public class ReminderHistoryDTO extends BaseModelData implements EntityDTO {
+
+	/**
+	 * 
+	 */
+	private static final long serialVersionUID = -6492226113360591166L;
+
+	/**
+	 * 
+	 */
+
+	@Override
+	public String getEntityName() {
+		return "reminder.ReminderHistory";
+	}
+
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
+
+	public void setId(int id) {
+		set("id", id);
+	}
+
+	public Date getDate() {
+		return get("date");
+	}
+
+	public void setDate(Date date) {
+		set("date", date);
+	}
+
+	public String getValue() {
+		return get("value");
+	}
+
+	public void setValue(String value) {
+		set("value", value);
+	}
+
+	public int getUserId() {
+		final Integer userId = (Integer) get("userId");
+		return userId != null ? userId : -1;
+	}
+
+	public void setUserId(int userId) {
+		set("userId", userId);
+	}
+
+	public ReminderChangeType getType() {
+		return get("type");
+	}
+
+	public void setType(ReminderChangeType type) {
+
+		set("type", type);
+	}
+
+	public void setReminder(ReminderDTO reminder) {
+		set("reminder", reminder);
+	}
+
+	public ReminderDTO getReminder() {
+		return get("reminder");
+	}
+
+	@Override
+	public boolean equals(Object obj) {
+
+		if (obj == null) {
+			return false;
+		}
+
+		if (!(obj instanceof ReminderHistoryDTO)) {
+			return false;
+		}
+
+		final ReminderHistoryDTO other = (ReminderHistoryDTO) obj;
+
+		return getId() == other.getId();
+	}
+
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/shared/dto/reminder/ReminderListDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/ReminderListDTO.java	(Revision 1504)
+++ src/main/java/org/sigmah/shared/dto/reminder/ReminderListDTO.java	(Arbeitskopie)
@@ -14,30 +14,30 @@
  */
 public class ReminderListDTO extends BaseModelData implements EntityDTO {
 
-    private static final long serialVersionUID = 6658962865288286355L;
+	private static final long serialVersionUID = 6658962865288286355L;
 
-    @Override
-    public String getEntityName() {
-        return "reminder.ReminderList";
-    }
+	@Override
+	public String getEntityName() {
+		return "reminder.ReminderList";
+	}
 
-    // Id.
-    @Override
-    public int getId() {
-        final Integer id = (Integer) get("id");
-        return id != null ? id : -1;
-    }
+	// Id.
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
 
-    public void setId(int id) {
-        set("id", id);
-    }
+	public void setId(int id) {
+		set("id", id);
+	}
 
-    // Reminders
-    public List<ReminderDTO> getReminders() {
-        return get("reminders");
-    }
+	// Reminders
+	public List<ReminderDTO> getReminders() {
+		return get("reminders");
+	}
 
-    public void setReminders(List<ReminderDTO> reminders) {
-        set("reminders", reminders);
-    }
+	public void setReminders(List<ReminderDTO> reminders) {
+		set("reminders", reminders);
+	}
 }
\ No newline at end of file
Index: src/main/resources/dozer-schema-mapping.xml
===================================================================
--- src/main/resources/dozer-schema-mapping.xml	(Revision 1504)
+++ src/main/resources/dozer-schema-mapping.xml	(Arbeitskopie)
@@ -85,7 +85,7 @@
 			<a>id</a>
 			<b>id</b>
 		</field>
-		
+
 		<field>
 			<a>database.id</a>
 			<b>databaseId</b>
@@ -191,7 +191,7 @@
 			<a>projectDetails</a>
 			<b>projectDetailsDTO</b>
 		</field>
-		
+
 		<field>
 			<a>logFrameModel</a>
 			<b>logFrameModelDTO</b>
@@ -204,10 +204,10 @@
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.report.ProjectReportModel</class-a>
 		<class-b>org.sigmah.shared.dto.report.ReportModelDTO</class-b>
-		
+
 		<field>
-		 <a>organization.id</a>
-		 <b>organizationId</b>
+			<a>organization.id</a>
+			<b>organizationId</b>
 		</field>
 		<field>
 			<a>sections</a>
@@ -215,9 +215,11 @@
 		</field>
 	</mapping>
 	<mapping wildcard="true">
-		<class-a>org.sigmah.shared.domain.report.ProjectReportModelSection</class-a>
-		<class-b>org.sigmah.shared.dto.report.ProjectReportModelSectionDTO</class-b>
-		
+		<class-a>org.sigmah.shared.domain.report.ProjectReportModelSection
+		</class-a>
+		<class-b>org.sigmah.shared.dto.report.ProjectReportModelSectionDTO
+		</class-b>
+
 		<field>
 			<a>subSections</a>
 			<b>subSectionsDTO</b>
@@ -289,7 +291,7 @@
 		<field>
 			<a>element</a>
 			<b>flexibleElementDTO</b>
-			<a-hint>org.sigmah.shared.domain.element.DefaultFlexibleElement,org.sigmah.shared.domain.element.MessageElement,org.sigmah.shared.domain.element.CheckboxElement,org.sigmah.shared.domain.element.TextAreaElement,org.sigmah.shared.domain.element.QuestionElement,org.sigmah.shared.domain.element.TripletsListElement,org.sigmah.shared.domain.element.FilesListElement,org.sigmah.shared.domain.element.IndicatorsListElement,org.sigmah.shared.domain.element.BudgetDistributionElement,org.sigmah.shared.domain.element.ReportElement,org.sigmah.shared.domain.element.ReportListElement,org.sigmah.shared.domain.element.BudgetElement 
+			<a-hint>org.sigmah.shared.domain.element.DefaultFlexibleElement,org.sigmah.shared.domain.element.MessageElement,org.sigmah.shared.domain.element.CheckboxElement,org.sigmah.shared.domain.element.TextAreaElement,org.sigmah.shared.domain.element.QuestionElement,org.sigmah.shared.domain.element.TripletsListElement,org.sigmah.shared.domain.element.FilesListElement,org.sigmah.shared.domain.element.IndicatorsListElement,org.sigmah.shared.domain.element.BudgetDistributionElement,org.sigmah.shared.domain.element.ReportElement,org.sigmah.shared.domain.element.ReportListElement,org.sigmah.shared.domain.element.BudgetElement
 			</a-hint>
 			<b-hint>org.sigmah.shared.dto.element.DefaultFlexibleElementDTO,org.sigmah.shared.dto.element.MessageElementDTO,org.sigmah.shared.dto.element.CheckboxElementDTO,org.sigmah.shared.dto.element.TextAreaElementDTO,org.sigmah.shared.dto.element.QuestionElementDTO,org.sigmah.shared.dto.element.TripletsListElementDTO,org.sigmah.shared.dto.element.FilesListElementDTO,org.sigmah.shared.dto.element.IndicatorsListElementDTO,org.sigmah.shared.dto.element.BudgetDistributionElementDTO,org.sigmah.shared.dto.element.ReportElementDTO,org.sigmah.shared.dto.element.ReportListElementDTO,org.sigmah.shared.dto.element.BudgetElementDTO
 			</b-hint>
@@ -455,9 +457,9 @@
 			<b>parentCategoryDTO</b>
 		</field>
 	</mapping>
-	
 
-	
+
+
 	<!-- BudgetElement/BudgetElementDTO Mapping -->
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.element.BudgetElement
@@ -478,8 +480,8 @@
 			<b>ratioDivisor</b>
 		</field>
 	</mapping>
-	
-		<!-- BudgetSubField/BudgetSubFieldDTO mapping -->
+
+	<!-- BudgetSubField/BudgetSubFieldDTO mapping -->
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.element.BudgetSubField</class-a>
 		<class-b>org.sigmah.shared.dto.element.BudgetSubFieldDTO</class-b>
@@ -527,7 +529,7 @@
 		<class-a>org.sigmah.shared.domain.Amendment</class-a>
 		<class-b>org.sigmah.shared.dto.AmendmentDTO</class-b>
 
-                <field>
+		<field>
 			<a>logFrame</a>
 			<b>logFrameDTO</b>
 		</field>
@@ -553,18 +555,18 @@
 			<b>phaseName</b>
 		</field>
 	</mapping>
-	
+
 	<!-- User/UserDTO Mapping -->
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.User</class-a>
 		<class-b>org.sigmah.shared.dto.UserDTO</class-b>
-		
+
 		<field-exclude>
 			<a>orgUnitWithProfiles</a>
 			<b>orgUnitWithProfiles</b>
 		</field-exclude>
 	</mapping>
-	
+
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.profile.Profile</class-a>
 		<class-b>org.sigmah.shared.dto.profile.ProfileDTOLight</class-b>
@@ -584,18 +586,18 @@
 		</field-exclude>
 
 	</mapping>
-	
+
 	<mapping wildcard="true">
 
 		<class-a>org.sigmah.shared.domain.profile.PrivacyGroup</class-a>
 		<class-b>org.sigmah.shared.dto.profile.PrivacyGroupDTO</class-b>
 
 	</mapping>
-	
-    <mapping wildcard="true">
-        <class-a>org.sigmah.shared.domain.Indicator</class-a>
-        <class-b>org.sigmah.shared.dto.IndicatorDataSourceDTO</class-b>
 
+	<mapping wildcard="true">
+		<class-a>org.sigmah.shared.domain.Indicator</class-a>
+		<class-b>org.sigmah.shared.dto.IndicatorDataSourceDTO</class-b>
+
 		<field>
 			<a>id</a>
 			<b>indicatorId</b>
@@ -605,39 +607,98 @@
 			<a>name</a>
 			<b>indicatorName</b>
 		</field>
-        <field>
-            <a>code</a>
-            <b>indicatorCode</b>
-        </field>
 		<field>
+			<a>code</a>
+			<b>indicatorCode</b>
+		</field>
+		<field>
 			<a>database.id</a>
 			<b>databaseId</b>
 		</field>
-        <field>
-            <a>database.name</a>
-            <b>databaseName</b>
-        </field>
-    </mapping>
-	
-	
+		<field>
+			<a>database.name</a>
+			<b>databaseName</b>
+		</field>
+	</mapping>
+
+
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.element.ReportElement</class-a>
 		<class-b>org.sigmah.shared.dto.element.ReportElementDTO</class-b>
-		
+
 		<field>
-		 <a>model.id</a>
-		 <b>modelId</b>
+			<a>model.id</a>
+			<b>modelId</b>
 		</field>
 	</mapping>
-	
+
 	<mapping wildcard="true">
 		<class-a>org.sigmah.shared.domain.element.ReportListElement</class-a>
 		<class-b>org.sigmah.shared.dto.element.ReportListElementDTO</class-b>
-		
+
 		<field>
-		 <a>model.id</a>
-		 <b>modelId</b>
+			<a>model.id</a>
+			<b>modelId</b>
 		</field>
 	</mapping>
 
+	<mapping wildcard="true">
+		<class-a>org.sigmah.shared.domain.reminder.ReminderHistory</class-a>
+		<class-b>org.sigmah.shared.dto.reminder.ReminderHistoryDTO</class-b>
+		<field>
+			<a>id</a>
+			<b>id</b>
+		</field>
+		<field>
+			<a>userId</a>
+			<b>userId</b>
+		</field>
+		<field>
+			<a>value</a>
+			<b>value</b>
+		</field>
+		<field>
+			<a>date</a>
+			<b>date</b>
+		</field>
+		<field>
+			<a>reminder</a>
+			<b>reminder</b>
+		</field>
+		<field>
+			<a>type</a>
+			<b>type</b>
+		</field>
+	</mapping>
+	<mapping wildcard="true">
+		<class-a>org.sigmah.shared.domain.reminder.MonitoredPointHistory
+		</class-a>
+		<class-b>org.sigmah.shared.dto.reminder.MonitoredPointHistoryDTO
+		</class-b>
+		<field>
+			<a>id</a>
+			<b>id</b>
+		</field>
+		<field>
+			<a>userId</a>
+			<b>userId</b>
+		</field>
+		<field>
+			<a>value</a>
+			<b>value</b>
+		</field>
+		<field>
+			<a>date</a>
+			<b>date</b>
+		</field>
+		<field>
+			<a>monitoredPoint</a>
+			<b>monitoredPoint</b>
+		</field>
+		<field>
+			<a>type</a>
+			<b>type</b>
+		</field>
+	</mapping>
+
 </mappings>
\ No newline at end of file
