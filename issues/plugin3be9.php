<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1702 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:49 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:32 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>Source Control Integration - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page1bcc.html?return=%2Fissues%2Fplugin.php%3Fpage%3DSource%2Fview%26id%3D1702">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:28 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br/>
<table class="width90" cellspacing="1" align="center">

<tr>
<td class="form-title" colspan="4">sigmah: master 4e50b33c</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="plugin0da4.html?page=Source/list&amp;id=3&amp;offset=0">Back to Repository</a>&#160;]</span> </td>
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
<td class="center">2015-02-11 18:01:48</td>
<td class="center"><a href="plugindaff.php?page=Source/view&amp;id=1703">master d644df16</a></td>
<td class="center">
Pending</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="4">
	Affected Issues</td>

<td colspan="5"><a href="view03ea.html?id=167">0000167</a>: Project core versions (amendments)</td>
</tr>

<tr class="row-1"><td colspan="5"><a href="view6a70.html?id=387">0000387</a>: Importing data into fields</td>
</tr>

<tr class="row-2"><td colspan="5"><a href="viewcb7b.html?id=528">0000528</a>: Offline mode</td>
</tr>

<tr class="row-1"><td colspan="5"><a href="viewd122.html?id=641">0000641</a>: General improvement of robustness and performance</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="83">
	Changeset</td>
<td colspan="5">Upgraded to Sigmah 2.0-beta :<br />
- Redesign (in progress) for the offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>)<br />
- Offline state is now monitored by ApplicationStateManager and events are properly sent with the event bus introduced in Sigmah 2.0 (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>)<br />
- Caching the organization logo for offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>)<br />
- Added an edit button for Importation Schemes (issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>)<br />
- Popup asking the name of the new core version when validating (issue <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a>)<br />
- Added the project core icon on the log frame (issue <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a>)<br />
- Autoloading values when opening the compare core version dialog (issue <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a>)<br />
- Added a &quot;core version&quot; column to the history dialog (issue <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a>)<br />
- Removed references to Log4J (was replaced by SLF4J for issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - pom.xml</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/pom.xml">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - scripts/sql/maj-trunk-to-2.0.sql</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/scripts/sql/maj-trunk-to-2.0.sql">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/Sigmah.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/Sigmah.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/dispatch/AbstractDispatchAsync.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/dispatch/AbstractDispatchAsync.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/event/OfflineEvent.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/OfflineEvent.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/event/UpdateEvent.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/UpdateEvent.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/event/handler/OfflineHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/handler/OfflineHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/inject/Injector.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/inject/Injector.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/security/SecureDispatchAsync.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/security/SecureDispatchAsync.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddImportationSchemePresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddImportationSchemePresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/logframe/ProjectLogFramePresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/logframe/ProjectLogFramePresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/projectcore/ProjectCoreDiffPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/projectcore/ProjectCoreDiffPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OrganizationBannerPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/zone/OrganizationBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/ui/res/icon/offline/OfflineIconBundle.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/res/icon/offline/OfflineIconBundle.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/importation/AddImportationSchemeView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/admin/importation/AddImportationSchemeView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/ProjectView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/ProjectView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/dashboard/PhasesView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/dashboard/PhasesView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameGrid.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameGrid.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/ui/view/project/projectcore/DiffEntry.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/DiffEntry.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">rm - src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffLigne.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffLigne.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/indexeddb/Store.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/indexeddb/Store.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/CommandJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/js/CommandJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/status/ConnectionStatus.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/status/ConnectionStatus.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/dao/impl/BaseMapFsDAO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/dao/impl/BaseMapFsDAO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/HistoryToken.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/HistoryToken.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/OrgUnit.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/OrgUnit.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/server/domain/element/CoreVersionElement.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/element/CoreVersionElement.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/AmendmentActionCommandHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/AmendmentActionCommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/ChangePhaseHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/ChangePhaseHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetHistoryHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetHistoryHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/GetOrgUnitHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetOrgUnitHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/server/handler/GetSitesCountHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetSitesCountHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/util/Handlers.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/util/Handlers.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/inject/CommandHandlerModule.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/inject/CommandHandlerModule.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/service/AmendmentService.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/service/AmendmentService.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/service/ImportationSchemeService.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/service/ImportationSchemeService.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/servlet/FileServlet.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/FileServlet.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/servlet/ManifestServlet.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/ManifestServlet.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/servlet/util/ResponseHelper.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/util/ResponseHelper.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/AmendmentActionCommand.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/command/AmendmentActionCommand.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/element/CoreVersionElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/CoreVersionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementType.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/FlexibleElementType.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/element/TextAreaElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/TextAreaElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/referential/AmendmentState.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/referential/AmendmentState.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dto/referential/ElementTypeEnum.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/referential/ElementTypeEnum.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/file/DirectTransfertManager.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/DirectTransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/file/TransfertManagerProvider.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/TransfertManagerProvider.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/resources/dozer/dozer-schema-mapping.xml</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/dozer/dozer-schema-mapping.xml">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/connect.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/connect.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/disconnect.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/disconnect.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/error.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/error.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOff.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOff.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOn.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOn.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/client/ui/res/icon/warningSmall.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/warningSmall.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>



</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1702 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:50 GMT -->
</html>
