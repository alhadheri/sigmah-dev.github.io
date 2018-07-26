<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=617&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:01 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:39:32 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000617: Impossible to remove a privacy group from a field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagef366.html?return=%2Fissues%2Fview.php%3Fid%3D617%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:39 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view1f53.php?id=617&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagedee2.php?bug_id=617">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000617</td><td>sigmah</td><td>Administration</td><td>public</td><td>2014-03-27 16:12</td><td>2015-04-07 12:04</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>renatoaf</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000617: Impossible to remove a privacy group from a field</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">In a project/orgunit model, when a privacy group has been set for a field, and the modifications of the field have been saved, it is no more possible to come back to the situation where this field has no privacy group attached.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">Information reported during initiation training on 27 of March 2014 by Charlotte and Antoine from French Red Cross, thanks !</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_download575b.php?file_id=168&amp;type=bug"><img src="images/fileicons/text.html" alt="txt file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download575b.php?file_id=168&amp;type=bug">patch_0000617.txt</a> [<a href="file_download575b.php?file_id=168&amp;type=bug" target="_blank">^</a>] (4,005 bytes) <span class="italic">2014-05-12 22:49</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_168">[<a class="small" href='#' id='attmlink_168' onclick='swap_content("hideSection_168");swap_content("showSection_168");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_168">[<a class="small" href='#' id='attmlink_168' onclick='swap_content("hideSection_168");swap_content("showSection_168");return false;'>Hide Content</a>]<pre>### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(working copy)
@@ -10,6 +10,7 @@
 import org.sigmah.client.i18n.UIConstants;
 import org.sigmah.client.icon.IconImageBundle;
 import org.sigmah.client.page.admin.AdminUtil;
+import org.sigmah.client.ui.ClearableField;
 import org.sigmah.client.ui.ClickableLabel;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.CreateEntity;
@@ -846,16 +847,16 @@
 		}
 
 		commonPanel.add(validates);
-
+		
 		privacyGroupsListCombo = new ComboBox&lt;PrivacyGroupDTO&gt;();
+		privacyGroupsListCombo.setWidth(&quot;100%&quot;);
 		privacyGroupsListCombo.setEditable(false);
-		privacyGroupsListCombo.setFieldLabel(constants.adminPrivacyGroups());
 		privacyGroupsListCombo.setDisplayField(&quot;title&quot;);
 		privacyGroupsListCombo.setValueField(&quot;id&quot;);
 		privacyGroupsListCombo.setTriggerAction(TriggerAction.ALL);
 		final ListStore&lt;PrivacyGroupDTO&gt; privacyGroupsStore = new ListStore&lt;PrivacyGroupDTO&gt;();
 		dispatcher.execute(new GetPrivacyGroups(), null, new AsyncCallback&lt;PrivacyGroupsListResult&gt;() {
-
+	
 			@Override
 			public void onFailure(Throwable arg0) {
 				privacyGroupsListCombo.setEmptyText(I18N.CONSTANTS.adminChoiceProblem());
@@ -872,13 +873,16 @@
 			}
 		});
 
+		ClearableField&lt;PrivacyGroupDTO&gt; privacyGroupsField = new ClearableField&lt;PrivacyGroupDTO&gt;(privacyGroupsListCombo);
+		privacyGroupsField.setFieldLabel(constants.adminPrivacyGroups());
+
 		privacyGroupsListCombo.setStore(privacyGroupsStore);
 		if (flexibleElement != null &amp;&amp; flexibleElement.getPrivacyGroup() != null) {
 			privacyGroupsListCombo.setValue(flexibleElement.getPrivacyGroup());
 			oldFieldProperties.put(AdminUtil.PROP_FX_PRIVACY_GROUP, flexibleElement.getPrivacyGroup());
 		}
 
-		commonPanel.add(privacyGroupsListCombo);
+		commonPanel.add(privacyGroupsField);
 
 		isAmendable = new CheckBox();
 		// isAmendable.setBoxLabel(constants.adminFlexibleAmendable());
Index: src/main/java/org/sigmah/client/ui/ClearableField.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClearableField.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClearableField.java	(working copy)
@@ -0,0 +1,51 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.client.ui;
+
+import org.sigmah.client.icon.IconImageBundle;
+
+import com.extjs.gxt.ui.client.widget.form.AdapterField;
+import com.extjs.gxt.ui.client.widget.form.Field;
+import com.google.gwt.event.dom.client.ClickEvent;
+import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.user.client.ui.Grid;
+import com.google.gwt.user.client.ui.Image;
+
+/**
+ * @author renatoaf
+ */
+public class ClearableField&lt;T&gt; extends AdapterField {
+	private Image deleteIcon;
+	private Field&lt;T&gt; field;
+	
+	public ClearableField(final Field&lt;T&gt; field) {
+		super(new Grid(1, 2));
+
+		this.field = field;
+		this.deleteIcon = IconImageBundle.ICONS.deleteIcon().createImage();
+		
+		Grid grid = (Grid) widget;
+		grid.setWidget(0, 0, field);
+		grid.setWidget(0, 1, deleteIcon);
+		grid.setCellSpacing(1);
+
+		grid.getCellFormatter().setWidth(0, 1, &quot;5px&quot;);
+		
+		addClearHandler(new ClickHandler() {
+			public void onClick(ClickEvent event) {
+				field.clear();
+			}
+		});
+	}
+	
+	public Field&lt;T&gt; getField() {
+		return field;
+	}
+	
+	public void addClearHandler(ClickHandler handler){
+		deleteIcon.addClickHandler(handler);
+	}
+}
+
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
<tr class="bugnote" id="c1497">
        <td class="bugnote-public">
				<span class="small">(<a href="viewb970.html?id=617#c1497" title="Direct link to note">0001497)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-08-18 03:01</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I've merged this patch with my GSoC final patch. You can ignore this attached file if you want.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1519">
        <td class="bugnote-public">
				<span class="small">(<a href="viewb970.html?id=617#c1519" title="Direct link to note">0001519)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-12-12 10:23</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1579">
        <td class="bugnote-public">
				<span class="small">(<a href="viewb970.html?id=617#c1579" title="Direct link to note">0001579)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-07 12:04</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc1.	</td>
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
</div><div id="Source_open"><br/>
<a name="changesets"/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Related Changesets</td>
</tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="17">
	<a name="changeset1723">sigmah: master 6c10ab5a</a>
	<br/><span class="small">Timestamp: 2015-02-23 18:01:17</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin2b21.php?page=Source/view&amp;id=1723">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> </td>
<td colspan="3">Added the ClearableField widget of Renato to clear the content of the PrivacyGroup field for flexible elements (issue <a href="viewb970.html?id=617" title="[closed] Impossible to remove a privacy group from a field" class="resolved">0000617</a>) +<br />
Verifiy the &quot;relate project&quot; right to show or hide the relate button (issue <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>) +<br />
Checking for the new rights when accessing a section of the administration (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Removed &quot;remove files&quot; right since it has been replaced by &quot;remove project files&quot; and &quot;remove orgunit files&quot; (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/ProjectDashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/ProjectDashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/dashboard/ProjectDashboardView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/view/project/dashboard/ProjectDashboardView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/ui/widget/form/ClearableField.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/widget/form/ClearableField.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/security/impl/AccessRights.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/server/security/impl/AccessRights.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		</table>
</div><div id="Source_closed" class="hidden"><br/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Related Changesets</td>
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
<tr class="row-1">
	<td class="small-caption">
		2014-03-27 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-27 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: NewComersSpecial	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-05-12 20:10	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; renatoaf	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-05-12 20:10	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-05-12 22:49	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: patch_0000617.txt	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-18 03:01	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001497	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-12 10:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001519	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 6c10ab5a	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001579	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-03-03 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Renamed	</td>
	<td class="small-caption">
		NewComersSpecial =&gt; LowHangingFruits	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=617&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:01 GMT -->
</html>
