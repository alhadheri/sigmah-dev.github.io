<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=552&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<link rel="stylesheet" type="text/css" href="css/default.html" />
	<script type="text/javascript"><!--
		if(document.layers) {document.write("<style>td{padding:0px;}<\/style>")}
	// --></script>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma-directive" content="no-cache" />
	<meta http-equiv="Cache-Directive" content="no-cache" />
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:30:21 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000552: Advanced logframe management privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page2bbd.html?return=%2Fissues%2Fview.php%3Fid%3D552%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:30 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view08db.php?id=552&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagec038.php?bug_id=552">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000552</td><td>sigmah</td><td>Administration</td><td>public</td><td>2013-03-14 11:42</td><td>2015-06-17 15:38</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>studentblue13</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000552: Advanced logframe management privileges</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Currently, if a user has right to edit a project, he has also the right to manage the logical framework: create/delete/modify content in it.<br />
<br />
A more advanced behavior would add 2 global privileges:<br />
- VIEW_LOGFRAME for viewing the logframe sub-tab<br />
- EDIT_LOGFRAME for creating/modifying/deleting objectives, expected results, activities, hypothesis or linking/unlinking indicators to the logframe</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/694">http://www.sigmah.org/node/694</a> [<a href="http://www.sigmah.org/node/694" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloadf0ec.php?file_id=100&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadf0ec.php?file_id=100&amp;type=bug">0000552.patch</a> [<a href="file_downloadf0ec.php?file_id=100&amp;type=bug" target="_blank">^</a>] (84,525 bytes) <span class="italic">2013-08-07 01:28</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_100">[<a class="small" href='#' id='attmlink_100' onclick='swap_content("hideSection_100");swap_content("showSection_100");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_100">[<a class="small" href='#' id='attmlink_100' onclick='swap_content("hideSection_100");swap_content("showSection_100");return false;'>Hide Content</a>]<pre>Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
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
 
-    public static final PageId PAGE_ID = new PageId(&quot;project&quot;);
+	public static final PageId PAGE_ID = new PageId(&quot;project&quot;);
 
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
 
-    private final static Map&lt;Amendment.Action, String&gt; amendmentActionDisplayNames;
+	private final static Map&lt;Amendment.Action, String&gt; amendmentActionDisplayNames;
 
-    static {
-        final EnumMap&lt;Amendment.Action, String&gt; map = new EnumMap&lt;Amendment.Action, String&gt;(Amendment.Action.class);
-        map.put(Amendment.Action.CREATE, I18N.CONSTANTS.amendmentCreate());
-        map.put(Amendment.Action.LOCK, I18N.CONSTANTS.amendmentLock());
-        map.put(Amendment.Action.UNLOCK, I18N.CONSTANTS.amendmentUnlock());
-        map.put(Amendment.Action.REJECT, I18N.CONSTANTS.amendmentReject());
-        map.put(Amendment.Action.VALIDATE, I18N.CONSTANTS.amendmentValidate());
+	static {
+		final EnumMap&lt;Amendment.Action, String&gt; map = new EnumMap&lt;Amendment.Action, String&gt;(Amendment.Action.class);
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
+	private final static ArrayList&lt;String&gt; MAIN_TABS = new ArrayList&lt;String&gt;();
 
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
+	private final static ArrayList&lt;SubPresenter&gt; presenters = new ArrayList&lt;SubPresenter&gt;();
 
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
 
-        for (int i = 0; i &lt; MAIN_TABS.length; i++) {
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
+		for (int i = 0; i &lt; MAIN_TABS.size(); i++) {
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
-        exportAnchor.setHeight(&quot;22px&quot;);
-        
-        final HBoxLayoutData layoutData = new HBoxLayoutData();
-        layoutData.setMargins(new Margins(0, 3, 0, 0));
-                        
-        final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
-        exportAnchor.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
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
+		exportAnchor.setHeight(&quot;22px&quot;);
+
+		final HBoxLayoutData layoutData = new HBoxLayoutData();
+		layoutData.setMargins(new Margins(0, 3, 0, 0));
+
+		final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
+		exportAnchor.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
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
 				export.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
 
 					@Override
 					public void componentSelected(ButtonEvent ce) {
-						 ExportUtils.ExportType type=ExportUtils.ExportType.PROJECT_SYNTHESIS;
-				          if(indicatorBox.getValue() &amp;&amp; logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
-				          }else if(indicatorBox.getValue() &amp;&amp; !logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
-				          }else if(!indicatorBox.getValue() &amp;&amp; logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME;
-				          }          
-				          exportForm.getFieldMap().put(
-				       		   ExportUtils.PARAM_EXPORT_TYPE,type.name());
-				          
+						ExportUtils.ExportType type = ExportUtils.ExportType.PROJECT_SYNTHESIS;
+						if (indicatorBox.getValue() &amp;&amp; logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
+						} else if (indicatorBox.getValue() &amp;&amp; !logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
+						} else if (!indicatorBox.getValue() &amp;&amp; logFrameBox.getValue()) {
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
-            deleteAnchor.setHeight(&quot;22px&quot;);
-            deleteAnchor.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
+		this.view.getTabPanel().add(exportAnchor, layoutData);
+		this.view.getTabPanel().add(exportForm.getExportForm());
 
-                @Override
-                public void componentSelected(ButtonEvent event) {
-                    MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(), I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
-                        new Listener&lt;MessageBoxEvent&gt;() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.DELETE_PROJECT)) {
+			final HBoxLayoutData deleteLayoutData = new HBoxLayoutData();
+			deleteLayoutData.setMargins(new Margins(0, 0, 0, 0));
 
-                            @Override
-                            public void handleEvent(MessageBoxEvent be) {
-                                Button selectedButton = be.getButtonClicked();
-                                if (selectedButton.getItemId().equals(Dialog.YES)) {
-                                    Map&lt;String, Object&gt; changes = new HashMap&lt;String, Object&gt;();
-                                    changes.put(&quot;dateDeleted&quot;, new Date());
-                                    UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
-                                    dispatcher.execute(updateEntity, null, new AsyncCallback&lt;VoidResult&gt;() {
+			final Button deleteAnchor = new Button(I18N.CONSTANTS.deleteProjectAnchor(), IconImageBundle.ICONS.remove());
+			deleteAnchor.setHeight(&quot;22px&quot;);
+			deleteAnchor.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
 
-                                        @Override
-                                        public void onFailure(Throwable arg0) {
-                                            // TODO Auto-generated method stub
+				@Override
+				public void componentSelected(ButtonEvent event) {
+					MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(),
+									I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
+									new Listener&lt;MessageBoxEvent&gt;() {
 
-                                        }
+										@Override
+										public void handleEvent(MessageBoxEvent be) {
+											Button selectedButton = be.getButtonClicked();
+											if (selectedButton.getItemId().equals(Dialog.YES)) {
+												Map&lt;String, Object&gt; changes = new HashMap&lt;String, Object&gt;();
+												changes.put(&quot;dateDeleted&quot;, new Date());
+												UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
+												dispatcher.execute(updateEntity, null, new AsyncCallback&lt;VoidResult&gt;() {
 
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
+		if (index &gt;= presenters.size())
+			return;
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+		final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
 
-            view.sufficient();
+		if (currentTab != anchor) {
+			if (currentTab != null)
+				currentTab.toggleAnchorMode();
 
-            if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
-                if (Log.isDebugEnabled()) {
-                    Log.debug(&quot;Loading project #&quot; + projectId + &quot;...&quot;);
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
 
-                dispatcher.execute(new GetProject(projectId), null, new AsyncCallback&lt;ProjectDTO&gt;() {
+	@Override
+	public boolean navigate(final PageState place) {
+		final ProjectState projectState = (ProjectState) place;
+		final int projectId = projectState.getProjectId();
 
-                    @Override
-                    public void onFailure(Throwable throwable) {
-                        Log.error(&quot;Error, project #&quot; + projectId + &quot; not loaded.&quot;);
-                    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
 
-                    @Override
-                    public void onSuccess(ProjectDTO projectDTO) {
+			view.sufficient();
 
-                        if (projectDTO == null) {
-                            Log.error(&quot;Project not loaded : &quot; + projectId);
-                            view.insufficient();
-                        } else {
+			if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
+				if (Log.isDebugEnabled()) {
+					Log.debug(&quot;Loading project #&quot; + projectId + &quot;...&quot;);
+				}
 
-                            if (Log.isDebugEnabled()) {
-                                Log.debug(&quot;Project loaded : &quot; + projectDTO.getName());
-                            }
+				dispatcher.execute(new GetProject(projectId), null, new AsyncCallback&lt;ProjectDTO&gt;() {
 
-                            currentState = projectState;
+					@Override
+					public void onFailure(Throwable throwable) {
+						Log.error(&quot;Error, project #&quot; + projectId + &quot; not loaded.&quot;);
+					}
 
-                            boolean projectChanged = !projectDTO.equals(currentProjectDTO);
+					@Override
+					public void onSuccess(ProjectDTO projectDTO) {
 
-                            projectState.setTabTitle(projectDTO.getName());
-                            loadProjectOnView(projectDTO);
+						if (projectDTO == null) {
+							Log.error(&quot;Project not loaded : &quot; + projectId);
+							view.insufficient();
+						} else {
 
-                            selectTab(projectState.getCurrentSection(), projectChanged);
-                        }
-                    }
-                });
-            } else {
-                boolean change = false;
+							if (Log.isDebugEnabled()) {
+								Log.debug(&quot;Project loaded : &quot; + projectDTO.getName());
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
-        String titleToDisplay = &quot;&quot;;
-        if (projectTitle != null &amp;&amp; !projectTitle.isEmpty())
-            titleToDisplay = projectTitle.length() &gt; 110 ? projectTitle.substring(0, 110) + &quot;...&quot; : projectTitle;
+	public PhaseDTO getCurrentDisplayedPhaseDTO() {
+		return currentDisplayedPhaseDTO;
+	}
 
-        panel.setHeading(I18N.CONSTANTS.projectMainTabTitle()
-            + ' '
-            + currentProjectDTO.getName()
-            + &quot; (&quot;
-            + titleToDisplay
-            + &quot;)&quot;);
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
-        gridPanel.addStyleName(&quot;banner&quot;);
-        gridPanel.setCellPadding(0);
-        gridPanel.setCellSpacing(0);
-        gridPanel.setWidth(&quot;100%&quot;);
-        gridPanel.setHeight(&quot;100%&quot;);
+		// Set the heading of panel
+		String projectTitle = currentProjectDTO.getFullName();
+		String titleToDisplay = &quot;&quot;;
+		if (projectTitle != null &amp;&amp; !projectTitle.isEmpty())
+			titleToDisplay = projectTitle.length() &gt; 110 ? projectTitle.substring(0, 110) + &quot;...&quot; : projectTitle;
 
-        // Logo.
-        final Image logo =
-                FundingIconProvider.getProjectTypeIcon(
-                    currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
-                    FundingIconProvider.IconSize.LARGE).createImage();
-        gridPanel.setWidget(0, 0, logo);
-        gridPanel.getCellFormatter().addStyleName(0, 0, &quot;banner-logo&quot;);
+		panel.setHeading(I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + &quot; (&quot;
+						+ titleToDisplay + &quot;)&quot;);
 
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
-            &amp;&amp; layout != null
-            &amp;&amp; layout.getLayoutGroupsDTO() != null
-            &amp;&amp; !layout.getLayoutGroupsDTO().isEmpty()) {
+		panel.removeAll();
 
-            // For visibility constraints, the banner accept a maximum of 2 rows
-            // and 4 columns.
-            final int rows = layout.getRowsCount() &gt; 2 ? 2 : layout.getRowsCount();
-            final int cols = layout.getColumnsCount() &gt; 4 ? 4 : layout.getColumnsCount();
+		final Grid gridPanel = new Grid(1, 2);
+		gridPanel.addStyleName(&quot;banner&quot;);
+		gridPanel.setCellPadding(0);
+		gridPanel.setCellSpacing(0);
+		gridPanel.setWidth(&quot;100%&quot;);
+		gridPanel.setHeight(&quot;100%&quot;);
 
-            final Grid gridLayout = new Grid(rows, cols);
-            gridLayout.addStyleName(&quot;banner-flex&quot;);
-            gridLayout.setCellPadding(0);
-            gridLayout.setCellSpacing(0);
-            gridLayout.setWidth(&quot;100%&quot;);
-            gridLayout.setHeight(&quot;100%&quot;);
+		// Logo.
+		final Image logo = FundingIconProvider.getProjectTypeIcon(
+						currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
+						FundingIconProvider.IconSize.LARGE).createImage();
+		gridPanel.setWidget(0, 0, logo);
+		gridPanel.getCellFormatter().addStyleName(0, 0, &quot;banner-logo&quot;);
 
-            for (int i = 0; i &lt; gridLayout.getColumnCount() - 1; i++) {
-                gridLayout.getColumnFormatter().setWidth(i, &quot;325px&quot;);
-            }
+		// Banner.
+		final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
+		final LayoutDTO layout = banner.getLayoutDTO();
 
-            for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
+		// Executes layout.
+		if (banner != null &amp;&amp; layout != null &amp;&amp; layout.getLayoutGroupsDTO() != null
+						&amp;&amp; !layout.getLayoutGroupsDTO().isEmpty()) {
 
-                // Checks group bounds.
-                if (groupLayout.getRow() + 1 &gt; rows || groupLayout.getColumn() + 1 &gt; cols) {
-                    continue;
-                }
+			// For visibility constraints, the banner accept a maximum of 2 rows
+			// and 4 columns.
+			final int rows = layout.getRowsCount() &gt; 2 ? 2 : layout.getRowsCount();
+			final int cols = layout.getColumnsCount() &gt; 4 ? 4 : layout.getColumnsCount();
 
-                final ContentPanel groupPanel = new ContentPanel();
-                groupPanel.setLayout(new FormLayout());
-                groupPanel.setTopComponent(null);
-                groupPanel.setHeaderVisible(false);
+			final Grid gridLayout = new Grid(rows, cols);
+			gridLayout.addStyleName(&quot;banner-flex&quot;);
+			gridLayout.setCellPadding(0);
+			gridLayout.setCellSpacing(0);
+			gridLayout.setWidth(&quot;100%&quot;);
+			gridLayout.setHeight(&quot;100%&quot;);
 
-                gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
+			for (int i = 0; i &lt; gridLayout.getColumnCount() - 1; i++) {
+				gridLayout.getColumnFormatter().setWidth(i, &quot;325px&quot;);
+			}
 
-                if (groupLayout.getLayoutConstraintsDTO() != null) {
-                    for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
+			for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
 
-                        final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
+				// Checks group bounds.
+				if (groupLayout.getRow() + 1 &gt; rows || groupLayout.getColumn() + 1 &gt; cols) {
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
-                                if (textValue != null &amp;&amp; !textValue.isEmpty()) {
-                                    String newTextValue =
-                                            textValue.length() &gt; 30 ? textValue.substring(0, 29) + &quot;...&quot; : textValue;
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
+								if (textValue != null &amp;&amp; !textValue.isEmpty()) {
+									String newTextValue = textValue.length() &gt; 30 ? textValue.substring(0, 29) + &quot;...&quot;
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
-            codeField.setLabelSeparator(&quot;:&quot;);
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
-        Log.debug(&quot;Loading amendments for project '&quot; + currentProjectDTO.getName() + &quot;'...&quot;);
+			panel.setLayout(new FormLayout());
 
-        final ContentPanel amendmentBox = view.getAmendmentBox();
-        amendmentBox.removeAll();
+			final LabelField codeField = new LabelField();
+			codeField.setReadOnly(true);
+			codeField.setFieldLabel(I18N.CONSTANTS.projectName());
+			codeField.setLabelSeparator(&quot;:&quot;);
+			codeField.setValue(currentProjectDTO.getName());
 
-        // Prepare the amendment store
-        final ListStore&lt;AmendmentDTO&gt; store = new ListStore&lt;AmendmentDTO&gt;();
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
+		Log.debug(&quot;Loading amendments for project '&quot; + currentProjectDTO.getName() + &quot;'...&quot;);
 
-        // Creating the amendment list
-        final ComboBox&lt;AmendmentDTO&gt; versionList = new ComboBox&lt;AmendmentDTO&gt;();
-        versionList.setStore(store);
-        versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
+		final ContentPanel amendmentBox = view.getAmendmentBox();
+		amendmentBox.removeAll();
 
-        versionList.setValue(currentAmendment); // Selecting the
-                                                // currentAmendment
+		// Prepare the amendment store
+		final ListStore&lt;AmendmentDTO&gt; store = new ListStore&lt;AmendmentDTO&gt;();
 
-        Log.debug(store.getCount() + &quot; amendment(s).&quot;);
+		for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
+			amendmentDTO.prepareName();
+			store.add(amendmentDTO);
+		}
 
-        final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
-        displayAmendmentButton.setEnabled(false);
+		// Adding the current amendment
+		final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
+		store.add(currentAmendment);
 
-        versionList.addSelectionChangedListener(new SelectionChangedListener&lt;AmendmentDTO&gt;() {
+		// Creating the amendment list
+		final ComboBox&lt;AmendmentDTO&gt; versionList = new ComboBox&lt;AmendmentDTO&gt;();
+		versionList.setStore(store);
+		versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
 
-            @Override
-            public void selectionChanged(SelectionChangedEvent&lt;AmendmentDTO&gt; se) {
-                int currentAmendmentId = 0;
-                if (currentProjectDTO.getCurrentAmendment() != null)
-                    currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
+		versionList.setValue(currentAmendment); // Selecting the
+												// currentAmendment
 
-                Log.debug(&quot;Current &quot; + currentAmendmentId + &quot; / Selected &quot; + se.getSelectedItem().getId());
+		Log.debug(store.getCount() + &quot; amendment(s).&quot;);
 
-                displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
-            }
-        });
+		final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
+		displayAmendmentButton.setEnabled(false);
 
-        displayAmendmentButton.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
+		versionList.addSelectionChangedListener(new SelectionChangedListener&lt;AmendmentDTO&gt;() {
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                NavigationCallback navigationCallback = new NavigationCallback() {
+			@Override
+			public void selectionChanged(SelectionChangedEvent&lt;AmendmentDTO&gt; se) {
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
-                                Log.debug(&quot;Back to &quot; + amendmentDTO.getId());
+				Log.debug(&quot;Current &quot; + currentAmendmentId + &quot; / Selected &quot; + se.getSelectedItem().getId());
 
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
+		displayAmendmentButton.addSelectionListener(new SelectionListener&lt;ButtonEvent&gt;() {
 
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
+								Log.debug(&quot;Back to &quot; + amendmentDTO.getId());
 
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
 
-            for (int index = 0; index &lt; actions.length; index++) {
-                final Amendment.Action action = actions[index];
-                Log.debug(&quot;Adding the &quot; + action + &quot; amendment action.&quot;);
+		final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
+		amendmentListContainer.add(versionList);
+		amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
 
-                if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
-                    if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
-                        Log.debug(&quot;You can not validate !&quot;);
-                        continue;
-                    }
+		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-                }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
 
-                Log.debug(&quot;You can  validate !&quot;);
+			// Displaying the available actions
+			final Amendment.Action[] actions;
+			if (currentProjectDTO.getAmendmentState() != null)
+				actions = currentProjectDTO.getAmendmentState().getActions();
+			else
+				actions = new Amendment.Action[0];
+			final Anchor[] anchors = new Anchor[actions.length];
 
-                final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
-                actionAnchor.addStyleName(&quot;amendment-action&quot;);
+			for (int index = 0; index &lt; actions.length; index++) {
+				final Amendment.Action action = actions[index];
+				Log.debug(&quot;Adding the &quot; + action + &quot; amendment action.&quot;);
 
-                actionAnchor.addClickHandler(new ClickHandler() {
+				if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
+					if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
+						Log.debug(&quot;You can not validate !&quot;);
+						continue;
+					}
 
-                    @Override
-                    public void onClick(ClickEvent event) {
-                        // Disabling every actions before sending the request
+				}
 
-                        NavigationCallback navigationCallback = new NavigationCallback() {
+				Log.debug(&quot;You can  validate !&quot;);
 
-                            @Override
-                            public void onDecided(NavigationError navigationError) {
-                                // TODO Auto-generated method stub
-                                if (navigationError == NavigationError.NONE) {
-                                    amendmentBox.mask(I18N.CONSTANTS.loading());
+				final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
+				actionAnchor.addStyleName(&quot;amendment-action&quot;);
 
-                                    for (final Anchor anchor : anchors) {
-                                        if (anchor == null)
-                                            Log.debug(&quot;anchor is null&quot;);
-                                        if (anchor != null)
-                                            anchor.setEnabled(false);
-                                    }
+				actionAnchor.addClickHandler(new ClickHandler() {
 
-                                    final AmendmentAction amendmentAction =
-                                            new AmendmentAction(currentProjectDTO.getId(), action);
-                                    dispatcher.execute(amendmentAction, null, new AsyncCallback&lt;ProjectDTO&gt;() {
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
+											Log.debug(&quot;anchor is null&quot;);
+										if (anchor != null)
+											anchor.setEnabled(false);
+									}
 
-                                            // Refreshing the whole view
-                                            discardAllViews();
-                                            selectTab(currentState.getCurrentSection(), true);
-                                            refreshAmendment();
+									final AmendmentAction amendmentAction = new AmendmentAction(currentProjectDTO
+													.getId(), action);
+									dispatcher.execute(amendmentAction, null, new AsyncCallback&lt;ProjectDTO&gt;() {
 
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
 
-        Listener&lt;MessageBoxEvent&gt; listener = new Listener&lt;MessageBoxEvent&gt;() {
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
+		Listener&lt;MessageBoxEvent&gt; listener = new Listener&lt;MessageBoxEvent&gt;() {
 
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
-    public static final String DEFAULT_GROUP_LABEL = &quot;-&quot;;
+	/**
+	 * The label used for the no-name groups.
+	 */
+	public static final String DEFAULT_GROUP_LABEL = &quot;-&quot;;
 
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
 
-        public abstract TextField&lt;String&gt; getLogFrameMainObjectiveTextBox();
-    }
+		public abstract TextField&lt;String&gt; getLogFrameMainObjectiveTextBox();
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
-        view.getLogFrameMainObjectiveTextBox().addListener(Events.OnKeyUp, new Listener&lt;BaseEvent&gt;() {
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
-        view.getSaveButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
+		// Log frame main objective box listener.
+		view.getLogFrameMainObjectiveTextBox().addListener(Events.OnKeyUp, new Listener&lt;BaseEvent&gt;() {
 
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
-                    Log.debug(&quot;[handleEvent] Merges the log frame : \n&quot; + logFrame.toString());
-                }
+		// Save action.
+		view.getSaveButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
 
-                // Sends the merge action to the server.
-                dispatcher.execute(new UpdateLogFrame(logFrame, currentProjectDTO.getId()), new MaskingAsyncMonitor(
-                    view, I18N.CONSTANTS.loading()), new AsyncCallback&lt;LogFrameResult&gt;() {
+			@Override
+			public void handleEvent(BaseEvent be) {
 
-                    @Override
-                    public void onFailure(Throwable e) {
+				// Logs the modified log frame.
+				if (Log.isDebugEnabled()) {
+					Log.debug(&quot;[handleEvent] Merges the log frame : \n&quot; + logFrame.toString());
+				}
 
-                        // Informs of the error.
-                        Log.error(&quot;[execute] Error when saving the log frame.&quot;, e);
-                        MessageBox.alert(I18N.CONSTANTS.save(), I18N.CONSTANTS.saveError(), null);
-                    }
+				// Sends the merge action to the server.
+				dispatcher.execute(new UpdateLogFrame(logFrame, currentProjectDTO.getId()), new MaskingAsyncMonitor(
+								view, I18N.CONSTANTS.loading()), new AsyncCallback&lt;LogFrameResult&gt;() {
 
-                    @Override
-                    public void onSuccess(LogFrameResult r) {
-                        if (Log.isDebugEnabled()) {
-                            Log.debug(&quot;[execute] Log frame successfully saved.&quot;);
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
+						Log.error(&quot;[execute] Error when saving the log frame.&quot;, e);
+						MessageBox.alert(I18N.CONSTANTS.save(), I18N.CONSTANTS.saveError(), null);
+					}
 
-                        // Informs of the success.
-                        Notification.show(I18N.CONSTANTS.infoConfirmation(), I18N.CONSTANTS.saveConfirm());
-                        logFrameUpdated = false;
-                        view.getSaveButton().setEnabled(false);
+					@Override
+					public void onSuccess(LogFrameResult r) {
+						if (Log.isDebugEnabled()) {
+							Log.debug(&quot;[execute] Log frame successfully saved.&quot;);
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
-        view.getCopyButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
+						// Informs of the success.
+						Notification.show(I18N.CONSTANTS.infoConfirmation(), I18N.CONSTANTS.saveConfirm());
+						logFrameUpdated = false;
+						view.getSaveButton().setEnabled(false);
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                logFrameIdCopySource = logFrame.getId();
-                view.getPasteButton().setEnabled(isEditable() &amp;&amp; currentProjectDTO.getCurrentAmendment() == null);
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
+		view.getCopyButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
 
-        // Paste action.
-        view.getPasteButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
+			@Override
+			public void handleEvent(BaseEvent be) {
+				logFrameIdCopySource = logFrame.getId();
+				view.getPasteButton().setEnabled(isEditable() &amp;&amp; currentProjectDTO.getCurrentAmendment() == null);
 
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
+		view.getPasteButton().addListener(Events.OnClick, new Listener&lt;BaseEvent&gt;() {
 
-                        dispatcher.execute(copyLogFrame, null, new AsyncCallback&lt;LogFrameDTO&gt;() {
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
+						dispatcher.execute(copyLogFrame, null, new AsyncCallback&lt;LogFrameDTO&gt;() {
 
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
-        view.getExcelExportFormButton().getButton().addListener(Events.OnClick, new Listener&lt;ButtonEvent&gt;() {
+				});
 
+			}
+		});
+
+		// Excel action.
+		view.getExcelExportFormButton().getButton().addListener(Events.OnClick, new Listener&lt;ButtonEvent&gt;() {
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
-            &amp;&amp; currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
-            &amp;&amp; currentProjectDTO.getCurrentAmendment() == null
-            &amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT);
-    }
+	}
 
-    /**
-     * Fills the view with the current log frame and initializes buttons state.
-     */
-    private void fillAndInit() {
+	private boolean isEditable() {
+		return logFrame != null &amp;&amp; currentProjectDTO.getAmendmentState() == Amendment.State.DRAFT
+						&amp;&amp; currentProjectDTO.getCurrentAmendment() == null
+						&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)
+						&amp;&amp; ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_LOGFRAME);
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
-            isEditable() &amp;&amp; logFrameIdCopySource != null &amp;&amp; currentProjectDTO.getCurrentAmendment() == null);
-    }
+			// Fill the grid.
+			view.getLogFrameGrid().displayLogFrame(currentProjectDTO.getId(), logFrame, editable);
+		}
 
+		// Default buttons states.
+		view.getSaveButton().setEnabled(false);
+		view.getCopyButton().setEnabled(true);
+		view.getPasteButton()
+						.setEnabled(isEditable() &amp;&amp; logFrameIdCopySource != null
+										&amp;&amp; currentProjectDTO.getCurrentAmendment() == null);
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
</pre></span>
</td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"></td>
</tr>
</table>

</div><div id="relationships_closed" class="hidden"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Relationships	</td>
</tr>
</table>

</div>
<a name="bugnotes" id="bugnotes" /><br />

<div id="bugnotes_open"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;		Notes	</td>
</tr>
<tr class="bugnote" id="c1284">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc1e3.html?id=552#c1284" title="Direct link to note">0001284)</a></span><br />
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-07-09 17:43</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		0000552.patch is an addition to patch.txt	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1334">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc1e3.html?id=552#c1334" title="Direct link to note">0001334)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-08-21 13:35</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Adds permission management for log frames (fixes issue <a href="viewc1e3.html?id=552" title="[closed] Advanced logframe management privileges" class="resolved">0000552</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1535">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc1e3.html?id=552#c1535" title="Direct link to note">0001535)</a></span><br />
		<a href="view_user_page0641.html?id=88">Assistcom</a>		<span class="small">(manager)</span>
				<br />
		<span class="small">2015-02-18 17:56</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Test cases added to test the issue : <br />
- <a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122">http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122</a> [<a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122" target="_blank">^</a>]<br />
- <a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123">http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123</a> [<a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123" target="_blank">^</a>]<br />
<br />
Good development but when the user has not to priviledge to view the logframe it would have be better not to show him the sub-tab instead of the error popup &quot;You are not authorized to access this resource&quot;.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1806">
        <td class="bugnote-public">
				<span class="small">(<a href="viewc1e3.html?id=552#c1806" title="Direct link to note">0001806)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-06-17 15:38</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc4.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
</table>

</div><div id="bugnotes_closed" class="hidden">
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;		Notes	</td>
</tr>
</table>
</div>
<a name="history" id="history" /><br />

<div id="history_open"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Issue History	</td>
</tr>
<tr class="row-category-history">
	<td class="small-caption">
		Date Modified	</td>
	<td class="small-caption">
		Username	</td>
	<td class="small-caption">
		Field	</td>
	<td class="small-caption">
		Change	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-03-14 11:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-10 10:57	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagefcae.php?rev_id=392#r392">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-06-15 14:41	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; studentblue13	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-15 14:41	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 23:31	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Added: Patch_0000552.zip	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-05 17:18	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Deleted: Patch_0000552.zip	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-05 17:18	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Added: patch.txt	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-09 17:21	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Added: 0000552.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-09 17:43	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		Note Added: 0001284	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-12 23:51	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Deleted: 0000552.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-12 23:51	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Deleted: patch.txt	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-12 23:53	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Added: 0000552.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-07 01:27	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Deleted: 0000552.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-07 01:28	</td>
	<td class="small-caption">
		<a href="view_user_pagea9e4.html?id=55">studentblue13</a>	</td>
	<td class="small-caption">
		File Added: 0000552.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-21 13:35	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-21 13:35	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001334	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-21 13:35	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-21 13:35	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-02-17 17:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: TestLinkable	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-02-18 17:56	</td>
	<td class="small-caption">
		<a href="view_user_page0641.html?id=88">Assistcom</a>	</td>
	<td class="small-caption">
		Note Added: 0001535	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-06-17 15:38	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001806	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-06-17 15:38	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-06-17 15:38	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
</table>
</div><div id="history_closed" class="hidden"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
	<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Issue History	</td>
</tr>
</table>

</div>	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=552&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:30 GMT -->
</html>
