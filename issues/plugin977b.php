<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1705 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:23 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:31:49 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>Source Control Integration - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page4db0.html?return=%2Fissues%2Fplugin.php%3Fpage%3DSource%2Fview%26id%3D1705">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:31 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br/>
<table class="width90" cellspacing="1" align="center">

<tr>
<td class="form-title" colspan="4">sigmah: master b7122fd1</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="plugin0da4.html?page=Source/list&amp;id=3&amp;offset=0">Back to Repository</a>&#160;]</span> </td>
<tr>

<tr class="row-category">
<td>Author</td>
<td>Committer</td>
<td>Branch</td>
<td>Timestamp</td>
<td>Parent</td>
<td>Ported</td>
</tr>

<tr class="row-1">
<td class="center">daeke</td>
<td class="center">daeke</td>
<td class="center">master</td>
<td class="center">2015-02-03 16:31:11</td>
<td class="center"><a href="plugin178e.html?page=Source/view&amp;id=1706">master 952e886b</a></td>
<td class="center">
Pending</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="2">
	Affected Issues</td>

<td colspan="5"><a href="view6a70.html?id=387">0000387</a>: Importing data into fields</td>
</tr>

<tr class="row-1"><td colspan="5"><a href="viewcb7b.html?id=528">0000528</a>: Offline mode</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="45">
	Changeset</td>
<td colspan="5">Data importation mechanism (issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>) +<br />
Importation scheme administration +<br />
<br />
History revision, system comment column added (also described in issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>) +<br />
Comment added when synchronizing from the offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Comment added when importing a file.</td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/Sigmah.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/Sigmah.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/event/UpdateEvent.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/event/UpdateEvent.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/inject/Injector.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/inject/Injector.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/page/RequestParameter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/page/RequestParameter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddVariableImporationSchemePresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddVariableImporationSchemePresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/AddImportationSchemeModelsAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/AddImportationSchemeModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/AddMatchingRuleImportationShemeModelsAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/AddMatchingRuleImportationShemeModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/ImportationSchemeModelsAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/models/importer/ImportationSchemeModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/importation/ImportationPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/presenter/importation/ImportationPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/models/importer/AddImportationSchemeModelsAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/view/admin/models/importer/AddImportationSchemeModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/models/importer/AddMatchingRuleImportationShemeModelsAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/view/admin/models/importer/AddMatchingRuleImportationShemeModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/models/importer/ImportationSchemeModelsAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/view/admin/models/importer/ImportationSchemeModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">rm - src/main/java/org/sigmah/client/ui/view/pivot/PivotToolBar.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/view/pivot/PivotToolBar.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/util/NumberUtils.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/client/util/NumberUtils.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/fileapi/Blob.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/offline/fileapi/Blob.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/HistoryTokenJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/offline/js/HistoryTokenJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/HistoryToken.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/domain/HistoryToken.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/UserDatabase.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/domain/UserDatabase.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/DeleteImportationSchemeModelsHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/DeleteImportationSchemeModelsHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/DeleteImportationSchemesHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/DeleteImportationSchemesHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetHistoryHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/GetHistoryHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetImportInformationHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/GetImportInformationHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetImportationSchemeModelsHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/GetImportationSchemeModelsHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetSchemaHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/GetSchemaHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/service/ImportationSchemeModelService.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/service/ImportationSchemeModelService.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/service/base/EntityServices.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/service/base/EntityServices.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/servlet/importer/CsvImporter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/servlet/importer/CsvImporter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/servlet/importer/Importer.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/server/servlet/importer/Importer.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/DeleteImportationSchemeModels.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/command/DeleteImportationSchemeModels.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/DeleteImportationSchemes.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/command/DeleteImportationSchemes.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/GetImportationSchemeModels.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/command/GetImportationSchemeModels.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/UpdateProject.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/command/UpdateProject.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dispatch/DispatchException.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/dispatch/DispatchException.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dispatch/FunctionalException.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/dispatch/FunctionalException.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/importation/ImportationSchemeModelDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/b7122fd11fa996865e815b3b4148e34053da8c0e">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/b7122fd11fa996865e815b3b4148e34053da8c0e/src/main/java/org/sigmah/shared/dto/importation/ImportationSchemeModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>



</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1705 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:23 GMT -->
</html>
