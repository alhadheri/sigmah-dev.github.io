<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=688&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:54 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:09 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000688: Missing automatic opening of offline menu on first Internet signal detection - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page329d.html?return=%2Fissues%2Fview.php%3Fid%3D688%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:32 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewb278.php?id=688&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page9a0a.php?bug_id=688">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000688</td><td>sigmah</td><td>Offline</td><td>public</td><td>2015-04-13 17:02</td><td>2015-05-27 18:11</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>low</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.0</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000688: Missing automatic opening of offline menu on first Internet signal detection</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">On v2.0-rc1, while offline, when the Internet signal is detected the first time, a notification message &quot;You can reconnect yourself to the Sigmah server by clicking on the &quot;Connect &amp; Synchronize&quot; button.&quot; opens as it should.<br />
<br />
But the Offline menu is not opening automatically at the same time as this notification message as illustrated in the original mockup <a href="mockups/OfflineMode/index.html#connected_offline_page">http://www.sigmah.org/issues/mockups/OfflineMode/#connected_offline_page</a> [<a href="mockups/OfflineMode/index.html#connected_offline_page" target="_blank">^</a>] .<br />
<br />
This automatic opening is required to show to new users where the &quot;Connect &amp; Synchronize&quot; button is located.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

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
<tr class="bugnote" id="c1600">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1600" title="Direct link to note">0001600)</a></span><br />
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-14 17:13</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Showing the offline menu when the notification is displayed.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1609">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1609" title="Direct link to note">0001609)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-15 10:29</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fixed in v2.0-rc2 by rcalabro.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1628">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1628" title="Direct link to note">0001628)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-16 17:33</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Great and almost fixed !..<br />
But this menu appearance is expected only at the first detection of Internet access after having entered the offline mode (as planned in the original mockups).<br />
<br />
Users in humanitarian contexts have often very instable connections. And they will get annoyed to see this appearance every two minutes if they have an instable connection.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1634">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1634" title="Direct link to note">0001634)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-27 14:26</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Priority set to low, because a little bit annoying but not too much!<br />
Developement of the fix as part of v2.0 will be decided later on.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1681">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1681" title="Direct link to note">0001681)</a></span><br />
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>		<span class="small">(viewer)</span>
				<br />
		<span class="small">2015-05-06 11:15</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fix committed to master branch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1742">
        <td class="bugnote-public">
				<span class="small">(<a href="view7c3f.html?id=688#c1742" title="Direct link to note">0001742)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-05-27 18:11</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc3.	</td>
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
<td class="category" width="25%" rowspan="48">
	<a name="changeset1757">sigmah: master 7599b9f9</a>
	<br/><span class="small">Timestamp: 2015-05-06 11:00:08</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin9462.php?page=Source/view&amp;id=1757">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> </td>
<td colspan="3">Fixed the following mantis:<br />
- Added an update for project links (fixes <a href="view7fa9.html?id=649" title="[closed] Impossible to change the budget contribution in a project link" class="resolved">0000649</a>)<br />
- Saving the project report flexible element value (fixes <a href="viewb6b3.html?id=657" title="[closed] Mandatory report field never green" class="resolved">0000657</a>, fixes <a href="viewa131.html?id=696" title="[closed] Report created in a phase no more available from phase" class="resolved">0000696</a>)<br />
- Added a scrollbar into the edit profile popup (fixes <a href="viewf3e3.html?id=670" title="[closed] Impossible to resize the &quot;Add profile&quot; popup" class="resolved">0000670</a>)<br />
- Changed the message when trying to access an unavailable feature when offline (fixes <a href="viewd045.html?id=682" title="[closed] Bad information on project creation while offline" class="resolved">0000682</a>, fixes <a href="viewe94f.html?id=683" title="[closed] Administration tab should not be available offline" class="resolved">0000683</a>, fixes <a href="view4ccd.html?id=715" title="[closed] Bad information on project core locking/validating while offline" class="resolved">0000715</a>, fixes <a href="view8db0.html?id=716" title="[closed] Bad information on phase closure while offline" class="resolved">0000716</a>)<br />
- Showing the offline menu on reconnection only on the first reconnection (fixes <a href="view7c3f.html?id=688" title="[closed] Missing automatic opening of offline menu on first Internet signal detection" class="resolved">0000688</a>)<br />
- Fixed the event handling of the org unit element (fixes <a href="view919a.html?id=694" title="[closed] Quit without saving on Details sub-tab without modifications" class="resolved">0000694</a>)<br />
- Properly cleaning values in the transfer file popup (fixes <a href="view399a.html?id=698" title="[closed] Files missing in Transfer files downloads list" class="resolved">0000698</a>)<br />
- Verifying if the file is available offline before queuing download from the report and document page (fixes <a href="viewb8a3.html?id=699" title="[closed] Offline download of unavailable files from &quot;Reports &amp; documents&quot; reported strangely online" class="resolved">0000699</a>)<br />
- Not showing the initial popup when offline (fixes <a href="view13ef.html?id=701" title="[closed] Removing Offline mode initial synchro invitation while offline" class="resolved">0000701</a>)<br />
- Properly handling errors when opening an IndexedDB database (fixes <a href="viewe61b.html?id=710" title="[new] Sigmah not working without any message in Firefox if  &quot;Remember history&quot; not allowed ">0000710</a>)<br />
- Refreshing the project at each page change (fixes <a href="view0fc1.html?id=712" title="[closed] No more update of project/orgunit tab content when coming back to it" class="resolved">0000712</a>)<br />
- Properly cleaning the loaded phase in the phase administration dialog (fixes <a href="view4efa.html?id=724" title="[closed] Bad loading of Next phases option in Phase edition popup" class="resolved">0000724</a>)<br />
- Allowed modification of the logframe when a model is in maintenance mode (fixes <a href="view7d12.html?id=731" title="[closed] Missing logframe model manipulation for under maintenance project models" class="resolved">0000731</a>)<br />
- Renamed buttons on the map tab (fixes <a href="view8eb5.html?id=733" title="[closed] Rename &quot;New site&quot; button with star icon &quot;Set project location&quot;" class="resolved">0000733</a>)<br />
- Added an &quot;import button&quot; permission (fixes <a href="view688a.html?id=737" title="[closed] Missing Import global privilege" class="resolved">0000737</a>)<br />
<br />
Also fixed by this update:<br />
# 645</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/dispatch/CommandResultHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/dispatch/CommandResultHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/SecureExceptionHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/security/SecureExceptionHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/notif/N10N.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/notif/N10N.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/CreateProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/CreateProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/EditPhaseModelAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/EditPhaseModelAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/base/AbstractPagePresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/base/AbstractPagePresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/AbstractProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/project/AbstractProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/LinkedProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/project/LinkedProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/indicator/SavingHelper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/project/indicator/SavingHelper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/EditPhaseModelAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/view/admin/models/project/EditPhaseModelAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/users/ProfileEditView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/view/admin/users/ProfileEditView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/LinkedProjectView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/view/project/LinkedProjectView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/indicator/SiteGridPanel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/ui/view/project/indicator/SiteGridPanel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/DateUtils.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/util/DateUtils.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/EnumModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/client/util/EnumModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OpenTransactionHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/dao/OpenTransactionHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Database.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/indexeddb/Database.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IndexedDBException.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/indexeddb/IndexedDBException.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/NativeOpenDatabaseRequest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/indexeddb/NativeOpenDatabaseRequest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Request.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/indexeddb/Request.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/FileSelectionView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/offline/view/FileSelectionView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/PhaseModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/server/domain/PhaseModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/ProjectModelService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/server/service/ProjectModelService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/UserService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/server/service/UserService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/filter/CacheFilter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/server/servlet/filter/CacheFilter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/importer/Importer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/server/servlet/importer/Importer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/UpdateSubscription.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/shared/command/UpdateSubscription.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/ReportElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/shared/dto/element/ReportElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7599b9f992ed64b35a12b90298e9575b439aed41">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7599b9f992ed64b35a12b90298e9575b439aed41/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
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
		2015-04-13 17:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-14 10:25	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-14 10:25	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-14 17:13	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Note Added: 0001600	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-14 17:13	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-14 17:13	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0 rc2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-14 17:13	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-15 10:28	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		2.0 rc2 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-15 10:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001609	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-16 17:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001628	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-16 17:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-27 14:26	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001634	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-27 14:26	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Priority	</td>
	<td class="small-caption">
		normal =&gt; low	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-06 11:15	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 7599b9f9	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-06 11:15	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Note Added: 0001681	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-06 11:15	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-27 18:11	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001742	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-27 18:11	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=688&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:55 GMT -->
</html>
