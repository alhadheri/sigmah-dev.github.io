<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=386&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:02 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:24 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000386: Flexible budget field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page11c3.html?return=%2Fissues%2Fview.php%3Fid%3D386%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:34 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewf782.php?id=386&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page8588.php?bug_id=386">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000386</td><td>sigmah</td><td>Project</td><td>public</td><td>2011-09-28 12:18</td><td>2015-04-30 18:07</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>Guerline</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>high</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.0</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000386: Flexible budget field</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">The definition of how much is now spent on a project varies strongly according to the needs of the person requesting this data.<br />
<br />
To satisfy those various needs, the budget field should be much more flexible:<br />
- by default, when creating a project/orgunit model, the budget field will contain 4 components<br />
* 3 fields: &quot;spend budget&quot;, &quot;received budget&quot;, &quot;planned budget&quot;<br />
* a ratio formula between 2 of those fields set by default : &quot;spend budget/ &quot;planned budget&quot;<br />
- more fields can be set freely<br />
- the ratio formula can be set freely between any pair of budget sub-fields<br />
- the label of the fields can be changed freely<br />
<br />
In the budget progress bar, the percentage available to be seen as a tooltip should include the explanation of the calculation. Example: &quot;44% (spend budget/planned budget)&quot;, &quot;59% (end project spend budget/planned budget)&quot;.<br />
<br />
Finally, the export to Excel features (both Global export and Project synthesis) should be revised to take into account this new flexibility on budget.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page1782.php?tag_id=2' title=''>Complete finance follow-up</a>, <a href='tag_view_page230c.html?tag_id=1' title=''>More versatile &amp; flexible models</a>, <a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view6a70.html?id=387">0000387</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Importing data into fields&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view03ea.html?id=167">0000167</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Project core versions (amendments)&#160;</td></tr>
<tr bgcolor="#fcbdbd"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view1418.html?id=513">0000513</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Budget Excel export improvement&#160;</td></tr>
</table></td>
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
<tr class="bugnote" id="c1278">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1278" title="Direct link to note">0001278)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-07-03 20:42</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue targeted to 1.3 because short term objective for Guerline.<br />
<br />
Guerline, can you actually produce in the upcoming week a proposition of modification of the physical model to implement this feature?<br />
Tharindu who's making the detailed design of <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a> will need this information for his work.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1283">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1283" title="Direct link to note">0001283)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-07-05 15:19</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Added the description of modifications to be made on Excel export in issue description.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1285">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1285" title="Direct link to note">0001285)</a></span><br />
		<a href="view_user_page2580.html?id=43">Guerline</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-07-10 17:36</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Sorry, I won't be able to do it this week but I'll come up with a proposition as soon as possible.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1331">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1331" title="Direct link to note">0001331)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-08-19 20:27</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Adds the possibility to change the budget fields (fixes issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/BudgetSubFieldForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitsByModelHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetElement.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubField.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubFieldType.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/BudgetSubFieldDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_fr.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/offline/sigmah/dao/OrganizationDAO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/AdminUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/FinancialProjectEditButtonGridCellRender.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/LocalPartnerProjectEditButtonGridCellRender.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/ui/RatioBar.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/public/sigmah.css<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/AddOrgUnitHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/ProjectMapper.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateProjectHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/OrgUnit.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/Project.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTOLight.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java<br />
Modified : /trunk/sigmah/src/main/resources/dozer-schema-mapping.xml<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1332">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1332" title="Direct link to note">0001332)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-08-20 16:24</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Removes non issue related parts and add comments to the translation files (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_fr.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/spreadsheet/GlobalExportDataProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/ValueResultUtils.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubField.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java<br />
Removed : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitsByModelHandler.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1338">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1338" title="Direct link to note">0001338)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-08-22 11:45</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Added test case POMM28 &quot;Change budget field composition&quot; to test issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> on  wiki page TestScenario4ProjectOrgunitModelManagement through web user interface.<br />
<br />
Modified : /wiki/TestScenario4ProjectOrgunitModelManagement.wiki<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1353">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1353" title="Direct link to note">0001353)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-08-27 12:34</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Modify duplicate command for project &amp; org unit model to fit the new budget element structure (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitModelCopyHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectModelCopyHandler.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1360">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1360" title="Direct link to note">0001360)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-09-06 19:24</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Keeps order of budget sub fields and saves planned budget when a project is created (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetElement.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1655">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd08d.html?id=386#c1655" title="Direct link to note">0001655)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-30 18:07</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because expected behavior generally checked on v2.0-rc1, and because the major lacks have been reported:<br />
<a href="view1b2f.html?id=705" title="[new] Useless fields in budget field creation">0000705</a><br />
<a href="view3c7d.html?id=706" title="[closed] Error while creating another budget sub-field" class="resolved">0000706</a><br />
<a href="view6c69.html?id=707" title="[new] Impossible to rename initial budget subfields">0000707</a>	</td>
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
		2011-09-28 12:18	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-25 13:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		OS	</td>
	<td class="small-caption">
		Windows Vista =&gt; NA	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-25 13:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Browser	</td>
	<td class="small-caption">
		Mozilla Firefox 3.6 (Namoroka) =&gt; NA	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-25 13:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 3.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-25 13:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Multiple spent budget fields =&gt; Flexible budget field	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-25 13:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page6979.php?rev_id=313#r313">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:05	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: More versatile &amp; flexible models	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-26 15:11	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: Comprehensive finance follow-up	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Renamed	</td>
	<td class="small-caption">
		Comprehensive finance follow-up =&gt; Complete finance follow-up	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-11 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000167	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 20:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; Guerline	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-03 20:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 20:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001278	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-03 20:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		3.0 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 20:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000387	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-05 15:19	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001283	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-05 15:19	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page6b00.php?rev_id=409#r409">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-10 17:36	</td>
	<td class="small-caption">
		<a href="view_user_page2580.html?id=43">Guerline</a>	</td>
	<td class="small-caption">
		Note Added: 0001285	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-19 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-19 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001331	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-19 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-19 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-20 16:24	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-20 16:24	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001332	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-22 11:45	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-22 11:45	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001338	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-08-27 12:34	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-08-27 12:34	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001353	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-09-04 14:26	</td>
	<td class="small-caption">
		<a href="view_user_page2580.html?id=43">Guerline</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000513	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-09-06 19:24	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-09-06 19:24	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001360	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-02-17 17:47	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: TestLinkable	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 18:05	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship deleted	</td>
	<td class="small-caption">
		parent of 0000513	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-30 18:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000513	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 18:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001655	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-30 18:07	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 18:07	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=386&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:02 GMT -->
</html>
