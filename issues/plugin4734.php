<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1859 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:07 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:56 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>Source Control Integration - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page7665.html?return=%2Fissues%2Fplugin.php%3Fpage%3DSource%2Fview%26id%3D1859">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:27 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br/>
<table class="width90" cellspacing="1" align="center">

<tr>
<td class="form-title" colspan="4">sigmah: master 6c1f8a0d</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="plugin0da4.html?page=Source/list&amp;id=3&amp;offset=0">Back to Repository</a>&#160;]</span> </td>
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
<td class="center"><a href="view_user_pagef3bc.html?id=92">bleny</a></td>
<td class="center"><a href="view_user_pagef3bc.html?id=92">bleny</a></td>
<td class="center">master</td>
<td class="center">2016-02-03 17:15:14</td>
<td class="center"><a href="plugin04f0.php?page=Source/view&amp;id=1854">master 379ed6a1</a></td>
<td class="center">
Pending</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="1">
	Affected Issues</td>

<td colspan="5"><a href="view0b8f.html?id=530">0000530</a>: New type of orgunit/project field: computation field</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-1">
<td class="category" rowspan="87">
	Changeset</td>
<td colspan="5">Merge remote-tracking branch 'raphcal/iss530' (fixes <a href="view0b8f.html?id=530" title="[closed] New type of orgunit/project field: computation field" class="resolved">0000530</a>)</td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - pom.xml</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/pom.xml">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - scripts/sql/maj-2.0-to-2.1.sql</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/scripts/sql/maj-2.0-to-2.1.sql">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/Sigmah.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/Sigmah.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/cache/UserLocalCache.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/cache/UserLocalCache.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/computation/ClientValueResolver.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/computation/ClientValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/computation/ComputationTriggerManager.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/computation/ComputationTriggerManager.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/page/PageManager.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/page/PageManager.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/page/RequestParameter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/page/RequestParameter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/security/AuthenticationProvider.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/security/AuthenticationProvider.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/notif/N10N.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/notif/N10N.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectReportsPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectReportsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/project/treegrid/ProjectsListWidget.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/treegrid/ProjectsListWidget.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/view/project/treegrid/ProjectsListView.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/view/project/treegrid/ProjectsListView.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/widget/button/Button.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/widget/button/Button.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/ui/widget/form/StringField.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/widget/form/StringField.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/util/AdminUtil.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/AdminUtil.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/JsIterable.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/JsIterable.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/TypeModel.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/TypeModel.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/profiler/ActiveProfilerStrategy.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ActiveProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/util/profiler/Execution.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/Execution.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/profiler/ExecutionAsyncDAO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ExecutionAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/profiler/InactiveProfilerStrategy.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/InactiveProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/util/profiler/Profiler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/Profiler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/client/util/profiler/ProfilerStrategy.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/dispatch/AsyncCommandHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/dispatch/AsyncCommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/handler/BatchCommandAsyncHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/handler/BatchCommandAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/handler/UpdateProjectAsyncHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/handler/UpdateProjectAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/inject/OfflineModule.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/inject/OfflineModule.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/AmendmentJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/AmendmentJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/CheckboxElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/CheckboxElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/offline/js/ComputationElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/ComputationElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/js/FlexibleElementJS.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/FlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/server/computation/ServerValueResolver.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/computation/ServerValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/dispatch/CommandHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/dispatch/CommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/server/domain/element/ComputationElement.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/element/ComputationElement.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/element/FlexibleElement.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/element/FlexibleElement.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/i18n/I18nServerImpl.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/i18n/I18nServerImpl.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/Computation.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/Computation.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/Computations.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/Computations.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/ParserEnvironment.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ParserEnvironment.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/ParserState.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ParserState.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/ValueResolver.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Add.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Add.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/BadVariable.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/BadVariable.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Constant.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Constant.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Divide.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Divide.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/HasHumanReadableFormat.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/HasHumanReadableFormat.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Instruction.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Instruction.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Instructions.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Instructions.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Minus.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Minus.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Multiply.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Multiply.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Operator.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Operator.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/OperatorPriority.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/OperatorPriority.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Substract.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Substract.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/instruction/Variable.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Variable.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/value/ComputationError.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputationError.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/value/ComputedValue.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputedValue.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/value/ComputedValues.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputedValues.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/computation/value/DoubleValue.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/DoubleValue.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/shared/dispatch/FunctionalException.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dispatch/FunctionalException.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/element/ComputationElementDTO.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/element/ComputationElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/referential/LogicalElementType.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/LogicalElementType.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/referential/LogicalElementTypes.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/LogicalElementTypes.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/dto/referential/NoElementType.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/NoElementType.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/java/org/sigmah/shared/util/Collections.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/util/Collections.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/db/migration/V2__computation_field.sql</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/resources/db/migration/V2__computation_field.sql">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/server/computation/ServerValueResolverTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/server/computation/ServerValueResolverTest.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/shared/computation/ComputationsTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/computation/ComputationsTest.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/shared/computation/value/DoubleValueTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/computation/value/DoubleValueTest.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/shared/dto/element/ComputationElementDTOTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/dto/element/ComputationElementDTOTest.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/shared/dto/referential/LogicalElementTypesTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/dto/referential/LogicalElementTypesTest.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/test/java/org/sigmah/shared/util/CollectionsTest.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/util/CollectionsTest.java">File</a>&#160;]</span> </span></td>
</tr>



</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1859 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:07 GMT -->
</html>
