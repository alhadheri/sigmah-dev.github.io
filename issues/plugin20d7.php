<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1728 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:50 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:33 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>Source Control Integration - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagefbce.html?return=%2Fissues%2Fplugin.php%3Fpage%3DSource%2Fview%26id%3D1728">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:28 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br/>
<table class="width90" cellspacing="1" align="center">

<tr>
<td class="form-title" colspan="4">sigmah: master fb909822</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="plugin0da4.html?page=Source/list&amp;id=3&amp;offset=0">Back to Repository</a>&#160;]</span> </td>
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
<td class="center">2015-02-16 18:17:46</td>
<td class="center"><a href="plugin7ce7.php?page=Source/view&amp;id=1729">master 3bdab1b2</a></td>
<td class="center">
Pending</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="2">
	Affected Issues</td>

<td colspan="5"><a href="viewcb7b.html?id=528">0000528</a>: Offline mode</td>
</tr>

<tr class="row-1"><td colspan="5"><a href="viewd122.html?id=641">0000641</a>: General improvement of robustness and performance</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="28">
	Changeset</td>
<td colspan="5">Moved &quot;normalizeFileName&quot; method to an utility class (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>) +<br />
Refreshing the page after a sync (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Created a Conflicts utility class to simplify conflicts handling (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Detailed conflicts after a sync by adding the project name/org unit name for each group of error (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Added a mention if one of the conflict touches a file (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>).</td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/BudgetElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/BudgetElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/CheckboxElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/CheckboxElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/FileVersionJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FileVersionJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/FilesListElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FilesListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/FlexibleElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/MessageElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/MessageElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/QuestionElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/QuestionElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/ReportElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/ReportElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/ReportListElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/ReportListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/TextAreaElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/TextAreaElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/TripletsListElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/TripletsListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/DeleteHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/DeleteHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/server/handler/util/Conflicts.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/util/Conflicts.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/referential/Container.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/dto/referential/Container.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/util/ValueResultUtils.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/util/ValueResultUtils.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/resources/org/sigmah/client/i18n/UIMessages.properties</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/resources/org/sigmah/client/i18n/UIMessages.properties">File</a>&#160;]</span> </span></td>
</tr>



</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1728 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:50 GMT -->
</html>