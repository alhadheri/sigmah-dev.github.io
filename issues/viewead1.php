<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=641&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:49 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:31 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000641: General improvement of robustness and performance - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page0462.html?return=%2Fissues%2Fview.php%3Fid%3D641%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:28 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewead1.php?id=641&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagea85e.php?bug_id=641">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000641</td><td>sigmah</td><td>[All Projects] General</td><td>public</td><td>2014-12-19 15:43</td><td>2016-06-20 18:15</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000641: General improvement of robustness and performance</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Refactoring of Sigmah codebase to bring more robustness and improve performance.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

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
<tr class="bugnote" id="c1548">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd122.html?id=641#c1548" title="Direct link to note">0001548)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-03-02 12:46</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue set as resolved because new organisation of the code to improve robustness and performance now active in v2.0	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1654">
        <td class="bugnote-public">
				<span class="small">(<a href="viewd122.html?id=641#c1654" title="Direct link to note">0001654)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-30 17:32</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because expected behavior and results generally confirmed on v2.0-rc1.	</td>
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
<td class="category" width="25%" rowspan="2">
	<a name="changeset1703">sigmah: master d644df16</a>
	<br/><span class="small">Timestamp: 2015-02-03 18:16:57</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugindaff.php?page=Source/view&amp;id=1703">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/d644df161a81f4a327fd7d2f2b836dd711b6b5af">Diff</a>&#160;]</span> </td>
<td colspan="3">Activated every permutation (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>, some permutations were disabled for development purpose)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/Sigmah.gwt.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/d644df161a81f4a327fd7d2f2b836dd711b6b5af">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/d644df161a81f4a327fd7d2f2b836dd711b6b5af/src/main/resources/org/sigmah/Sigmah.gwt.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="83">
	<a name="changeset1702">sigmah: master 4e50b33c</a>
	<br/><span class="small">Timestamp: 2015-02-11 18:01:48</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin3be9.php?page=Source/view&amp;id=1702">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> </td>
<td colspan="3">Upgraded to Sigmah 2.0-beta :<br />
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

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - scripts/sql/maj-trunk-to-2.0.sql</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/scripts/sql/maj-trunk-to-2.0.sql">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/Sigmah.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/Sigmah.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/dispatch/AbstractDispatchAsync.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/dispatch/AbstractDispatchAsync.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/event/OfflineEvent.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/OfflineEvent.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/event/UpdateEvent.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/UpdateEvent.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/event/handler/OfflineHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/event/handler/OfflineHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/inject/Injector.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/inject/Injector.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/SecureDispatchAsync.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/security/SecureDispatchAsync.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddImportationSchemePresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/admin/importation/AddImportationSchemePresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/admin/importation/ImportationSchemeAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/logframe/ProjectLogFramePresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/logframe/ProjectLogFramePresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/projectcore/ProjectCoreDiffPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/project/projectcore/ProjectCoreDiffPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OrganizationBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/presenter/zone/OrganizationBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/ui/res/icon/offline/OfflineIconBundle.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/res/icon/offline/OfflineIconBundle.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/importation/AddImportationSchemeView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/admin/importation/AddImportationSchemeView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/admin/importation/ImportationSchemeAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/ProjectView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/ProjectView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/dashboard/PhasesView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/dashboard/PhasesView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameGrid.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameGrid.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/logframe/ProjectLogFrameView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/ui/view/project/projectcore/DiffEntry.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/DiffEntry.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">rm - src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffLigne.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffLigne.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/project/projectcore/ProjectCoreDiffView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/client/ui/widget/HistoryWindow.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Store.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/indexeddb/Store.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/CommandJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/js/CommandJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/status/ConnectionStatus.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/status/ConnectionStatus.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/dao/impl/BaseMapFsDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/dao/impl/BaseMapFsDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/HistoryToken.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/HistoryToken.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/OrgUnit.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/OrgUnit.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/domain/element/CoreVersionElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/element/CoreVersionElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/AmendmentActionCommandHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/AmendmentActionCommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/ChangePhaseHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/ChangePhaseHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetHistoryHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetHistoryHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetOrgUnitHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetOrgUnitHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/handler/GetSitesCountHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/GetSitesCountHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/Handlers.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/handler/util/Handlers.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/inject/CommandHandlerModule.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/inject/CommandHandlerModule.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/AmendmentService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/service/AmendmentService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/ImportationSchemeService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/service/ImportationSchemeService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/FileServlet.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/FileServlet.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/ManifestServlet.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/ManifestServlet.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/util/ResponseHelper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/server/servlet/util/ResponseHelper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/AmendmentActionCommand.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/command/AmendmentActionCommand.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/element/CoreVersionElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/CoreVersionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementType.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/FlexibleElementType.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/TextAreaElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/element/TextAreaElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/history/HistoryTokenDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/AmendmentState.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/referential/AmendmentState.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/ElementTypeEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/dto/referential/ElementTypeEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/DirectTransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/DirectTransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/TransfertManagerProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/java/org/sigmah/shared/file/TransfertManagerProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/dozer/dozer-schema-mapping.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/dozer/dozer-schema-mapping.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/connect.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/connect.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/disconnect.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/disconnect.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/error.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/error.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOff.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOff.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOn.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/offline/signalOn.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/warningSmall.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/client/ui/res/icon/warningSmall.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4e50b33c67f4444b72d810a859450e8a6fc3185a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4e50b33c67f4444b72d810a859450e8a6fc3185a/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset1729">sigmah: master 3bdab1b2</a>
	<br/><span class="small">Timestamp: 2015-02-16 17:05:03</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin7ce7.php?page=Source/view&amp;id=1729">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3bdab1b242716a9566635cb86ec60ab7f3ad114d">Diff</a>&#160;]</span> </td>
<td colspan="3">Improved usability by removing local environment configuration (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3bdab1b242716a9566635cb86ec60ab7f3ad114d">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3bdab1b242716a9566635cb86ec60ab7f3ad114d/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="28">
	<a name="changeset1728">sigmah: master fb909822</a>
	<br/><span class="small">Timestamp: 2015-02-16 18:17:46</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin20d7.php?page=Source/view&amp;id=1728">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> </td>
<td colspan="3">Moved &quot;normalizeFileName&quot; method to an utility class (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>) +<br />
Refreshing the page after a sync (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Created a Conflicts utility class to simplify conflicts handling (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Detailed conflicts after a sync by adding the project name/org unit name for each group of error (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Added a mention if one of the conflict touches a file (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/BudgetElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/BudgetElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/CheckboxElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/CheckboxElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/FileVersionJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FileVersionJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/FilesListElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FilesListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/FlexibleElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/FlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/MessageElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/MessageElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/QuestionElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/QuestionElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ReportElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/ReportElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ReportListElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/ReportListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/TextAreaElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/TextAreaElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/TripletsListElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/js/TripletsListElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/DeleteHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/DeleteHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/handler/util/Conflicts.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/server/handler/util/Conflicts.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/referential/Container.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/dto/referential/Container.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/util/ValueResultUtils.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/java/org/sigmah/shared/util/ValueResultUtils.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIMessages.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/fb909822d32875a623c6ed22cfa0cca3e870a34c">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/fb909822d32875a623c6ed22cfa0cca3e870a34c/src/main/resources/org/sigmah/client/i18n/UIMessages.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="13">
	<a name="changeset1724">sigmah: master 7f416775</a>
	<br/><span class="small">Timestamp: 2015-02-20 19:01:14</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin29e8.php?page=Source/view&amp;id=1724">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> </td>
<td colspan="3">Adapted code from Renato to set the enabled state of the flexible elements depending on ValueEventChangeTypes (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Refactored DefaultFlexibleElementDTO (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/cache/LocalCachedOrganization.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/client/cache/LocalCachedOrganization.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/TripletsListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/TripletsListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/value/FileDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/value/FileDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="6">
	<a name="changeset1722">sigmah: master ec23c30d</a>
	<br/><span class="small">Timestamp: 2015-02-24 17:47:38</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin2969.php?page=Source/view&amp;id=1722">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> </td>
<td colspan="3">Hidding menu items when the current user doesn't have required permissions (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/AdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ec23c30d1949f89238af5b3d7324649a0916ffd8/src/main/java/org/sigmah/client/ui/presenter/admin/AdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ec23c30d1949f89238af5b3d7324649a0916ffd8/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ec23c30d1949f89238af5b3d7324649a0916ffd8/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/SubMenuItem.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ec23c30d1949f89238af5b3d7324649a0916ffd8/src/main/java/org/sigmah/client/ui/widget/SubMenuItem.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/SubMenuWidget.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ec23c30d1949f89238af5b3d7324649a0916ffd8">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ec23c30d1949f89238af5b3d7324649a0916ffd8/src/main/java/org/sigmah/client/ui/widget/SubMenuWidget.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="3">
	<a name="changeset1721">sigmah: master 6e206cdb</a>
	<br/><span class="small">Timestamp: 2015-02-24 17:48:49</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin43d3.php?page=Source/view&amp;id=1721">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6e206cdbb684bf11ac1b4b7736fc29931a02aa77">Diff</a>&#160;]</span> </td>
<td colspan="3">Auto-collapse of the model grid when selecting an entry (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6e206cdbb684bf11ac1b4b7736fc29931a02aa77">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6e206cdbb684bf11ac1b4b7736fc29931a02aa77/src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6e206cdbb684bf11ac1b4b7736fc29931a02aa77">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6e206cdbb684bf11ac1b4b7736fc29931a02aa77/src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="3">
	<a name="changeset1720">sigmah: master 4921fdbe</a>
	<br/><span class="small">Timestamp: 2015-02-24 17:49:46</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin4deb.php?page=Source/view&amp;id=1720">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4921fdbe763261869275ee185e003c7e22699fcb">Diff</a>&#160;]</span> </td>
<td colspan="3">Fixed an issue when creating a new user (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/ActivityService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4921fdbe763261869275ee185e003c7e22699fcb">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4921fdbe763261869275ee185e003c7e22699fcb/src/main/java/org/sigmah/server/service/ActivityService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/UserService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4921fdbe763261869275ee185e003c7e22699fcb">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4921fdbe763261869275ee185e003c7e22699fcb/src/main/java/org/sigmah/server/service/UserService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="38">
	<a name="changeset1744">sigmah: master 7b336d14</a>
	<br/><span class="small">Timestamp: 2015-03-18 18:42:11</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin7db5.php?page=Source/view&amp;id=1744">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> </td>
<td colspan="3">Updated to version 2.0 rc1 (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)<br />
<br />
New in offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) :<br />
- automatically refreshing the page when the cache has been downloaded<br />
- added notifications about offline actions<br />
- showing the offline menu when an offline notification appears<br />
- files in the synchronization popup are organized by projects/org units<br />
- saving locally the &quot;underMaintenance&quot; value for project and org unit models<br />
- dummy implementation for the GetSitesCount command<br />
- icons in the menu<br />
<br />
Bug fix for offline mode :<br />
- project detail page can now be viewed again (underMaintenance + GetSitesCount)<br />
<br />
Bug fix for maintenance mode (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) :<br />
- editable property is now verified at the model level<br />
<br />
Bug fix for map tab :<br />
- OpenLayers library is now hosted by Sigmah and thus available for http and https access<br />
- OpenStreetMap library is include with :// protocol to allow access from http and https<br />
<br />
Bug fix for backup archive job :<br />
- Testing if a file exists before trying to backup it</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/event/EventBusImpl.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/event/EventBusImpl.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/page/RequestParameter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/page/RequestParameter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/AuthenticationProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/security/AuthenticationProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/notif/N10N.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/notif/N10N.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/handler/GetSitesCountAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/handler/GetSitesCountAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/inject/OfflineModule.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/inject/OfflineModule.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/OrgUnitModelJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/OrgUnitModelJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ProjectModelJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/ProjectModelJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/js/SiteJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/SiteJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/js/SiteResultJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/SiteResultJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/FileSelectionView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/view/FileSelectionView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/file/impl/BackupArchiveJob.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/server/file/impl/BackupArchiveJob.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/IsModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/IsModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/public/openlayers.js</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/public/openlayers.js">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/server/servlet/index.html</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/server/servlet/index.html">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset1977">sigmah: master ce18259c</a>
	<br/><span class="small">Timestamp: 2016-06-09 11:00:08</span>
	<br/><span class="small">Author: RaphaÃ«l</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="pluginf6e5.php?page=Source/view&amp;id=1977">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ce18259cf1dafbc9e3536242af962b4a7c031d00">Diff</a>&#160;]</span> </td>
<td colspan="3">Using a parametrized query to avoid casting (related to issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/ProjectMapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ce18259cf1dafbc9e3536242af962b4a7c031d00">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ce18259cf1dafbc9e3536242af962b4a7c031d00/src/main/java/org/sigmah/server/handler/util/ProjectMapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset1976">sigmah: master 4ac95449</a>
	<br/><span class="small">Timestamp: 2016-06-09 11:37:42</span>
	<br/><span class="small">Author: RaphaÃ«l</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin8ee5.php?page=Source/view&amp;id=1976">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4ac95449206f080923e10d8dd20b4c3ef13d8ebd">Diff</a>&#160;]</span> </td>
<td colspan="3">Lower cased the field order column name to match the column name inside the SQL scripts (related to issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4ac95449206f080923e10d8dd20b4c3ef13d8ebd">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4ac95449206f080923e10d8dd20b4c3ef13d8ebd/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset1975">sigmah: master 4435377c</a>
	<br/><span class="small">Timestamp: 2016-06-09 12:59:00</span>
	<br/><span class="small">Author: RaphaÃ«l</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin79db.php?page=Source/view&amp;id=1975">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4435377c64431f5a22d00befdf5ebe031f4b505d">Diff</a>&#160;]</span> </td>
<td colspan="3">Skipping &quot;fillBudget&quot; if no BudgetElement exists (related to issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/ProjectMapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4435377c64431f5a22d00befdf5ebe031f4b505d">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4435377c64431f5a22d00befdf5ebe031f4b505d/src/main/java/org/sigmah/server/handler/util/ProjectMapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="3">
	<a name="changeset1974">sigmah: master 4043e049</a>
	<br/><span class="small">Timestamp: 2016-06-20 18:14:23</span>
	<br/><span class="small">Author: <a href="view_user_page0b30.html?id=2">osarrat</a></span>
	<br/><span class="small">Committer: GitHub</span>		<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugina2b9.php?page=Source/view&amp;id=1974">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4043e0493f776b2698bb67e5718fd7b7f257240a">Diff</a>&#160;]</span> </td>
<td colspan="3">Merge pull request <a href="view95dc.php?id=29" title="[resolved] Display error after deleting a prerequisite" class="resolved">0000029</a> from Raphcal/unit-tests-fix<br />
<br />
Fixed unit tests (related to issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4043e0493f776b2698bb67e5718fd7b7f257240a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4043e0493f776b2698bb67e5718fd7b7f257240a/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/ProjectMapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4043e0493f776b2698bb67e5718fd7b7f257240a">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4043e0493f776b2698bb67e5718fd7b7f257240a/src/main/java/org/sigmah/server/handler/util/ProjectMapper.java">File</a>&#160;]</span> </span></td>
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
<tr class="row-2">
	<td class="small-caption">
		2014-12-19 15:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-02-12 17:57	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4e50b33c	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-02-12 17:57	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master d644df16	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-02 12:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001548	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-02 12:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-02 12:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-02 12:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-02 12:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4921fdbe	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 6e206cdb	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master ec23c30d	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 7f416775	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master fb909822	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 3bdab1b2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-18 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 7b336d14	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-30 17:32	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001654	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 17:32	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-06-20 18:15	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4043e049	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-06-20 18:15	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4435377c	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-06-20 18:15	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4ac95449	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-06-20 18:15	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master ce18259c	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=641&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:49 GMT -->
</html>
