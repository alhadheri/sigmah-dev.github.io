<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=813&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:48 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:23 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000813: Impossible to attach a file new version if last version deleted - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page3f2b.html?return=%2Fissues%2Fview.php%3Fid%3D813%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:26 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view9d68.php?id=813&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page62d8.php?bug_id=813">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000813</td><td>sigmah</td><td>Project</td><td>public</td><td>2015-10-16 12:04</td><td>2017-01-12 15:27</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.0.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.2</td><td class="category">Fixed in Version</td><td>2.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000813: Impossible to attach a file new version if last version deleted</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">If a user deletes the last version of a file in the file versions history box, he won't be anymore able to add any new version to this file.<br />
<br />
You will then get this unappropriate warning message : &quot;Une erreur est survenue pendant le chargement du fichier. Le fichier est vide.&quot;.</td></tr><tr class="row-1"><td class="category">Steps To Reproduce</td><td colspan="5">1. attach a file<br />
2. attach a new version of this file<br />
3. open the history popup for this file<br />
4. delete the latest version of this file<br />
5. try to attach a new version of this file<br />
=&gt; you get the error</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewe74f.html?id=868">0000868</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pageb182.html?id=100">ftavin</a></span>&#160;</td><td>Impossible to attach a new file version in a &quot;single file&quot; list field&#160;</td></tr>
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
<tr class="bugnote" id="c1919">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c1919" title="Direct link to note">0001919)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-12-03 12:36</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Error reproduced on v2.0.2.<br />
Issue reopened and resolution postponed to v2.1.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1951">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c1951" title="Direct link to note">0001951)</a></span><br />
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>		<span class="small">(viewer)</span>
				<br />
		<span class="small">2016-01-04 19:00</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fix committed to master branch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2009">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2009" title="Direct link to note">0002009)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-06-24 14:49</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Error reproduced on v2.1.<br />
Issue reopened and resolution postponed to v2.2.<br />
<br />
The fix of this error may have created the new issue <a href="viewe74f.html?id=868" title="[closed] Impossible to attach a new file version in a &quot;single file&quot; list field" class="resolved">0000868</a>.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2037">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2037" title="Direct link to note">0002037)</a></span><br />
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-08-26 17:56</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue <a href="viewe74f.html?id=868" title="[closed] Impossible to attach a new file version in a &quot;single file&quot; list field" class="resolved">0000868</a> is caused by an error in the check for conflicts, not by this fix.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2038">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2038" title="Direct link to note">0002038)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-08-29 10:02</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Is this issue <a href="view7e6d.html?id=813" title="[closed] Impossible to attach a file new version if last version deleted" class="resolved">0000813</a> easily fixable eventhough?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2039">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2039" title="Direct link to note">0002039)</a></span><br />
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-08-29 10:24</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Yes, since the 2 errors are not linked it was easily fixable, see PR 39 ( <a href="https://github.com/sigmah-dev/sigmah/pull/39">https://github.com/sigmah-dev/sigmah/pull/39</a> [<a href="https://github.com/sigmah-dev/sigmah/pull/39" target="_blank">^</a>] )	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2111">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2111" title="Direct link to note">0002111)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-10-07 17:06</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Considered fixed by rcalabro in v2.2-rc1	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2293">
        <td class="bugnote-public">
				<span class="small">(<a href="view7e6d.html?id=813#c2293" title="Direct link to note">0002293)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2017-01-12 15:27</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.2-rc2.	</td>
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
<td class="category" width="25%" rowspan="50">
	<a name="changeset1828">sigmah: master 2e94ed1a</a>
	<br/><span class="small">Timestamp: 2015-12-02 18:24:54</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugind2e4.php?page=Source/view&amp;id=1828">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> </td>
<td colspan="3">Fixed issues <a href="viewa556.html?id=637" title="[closed] Deleted reminders still visible in Calendar" class="resolved">0000637</a>, <a href="viewe223.html?id=619" title="[new] Add year in Indicators export monthly table">0000619</a>, <a href="view651a.html?id=147" title="[closed] Display reminders linked project code on dashboard" class="resolved">0000147</a>, <a href="view6d4a.html?id=801" title="[closed] Impossible offline to attach a new version of a file" class="resolved">0000801</a>, <a href="view7d98.html?id=814" title="[closed] Fields in project models can not be deleted on Care Sigmah Central instance" class="resolved">0000814</a>, <a href="view2864.html?id=818" title="[closed] Impossible to remove a file in a closed phase" class="resolved">0000818</a>, <a href="viewbbbf.html?id=817" title="[closed] Impossible to attach a file on an empty file field in a closed phase" class="resolved">0000817</a>, <a href="view31e1.html?id=816" title="[new] Impossible to use project's orgunit in importation">0000816</a>, <a href="viewce72.html?id=802" title="[closed] Bad display of rich text in files field title" class="resolved">0000802</a>, <a href="viewe830.html?id=803" title="[closed] Wrong order in Project Synthesis export" class="resolved">0000803</a>, <a href="view308c.html?id=804" title="[closed] Bad display of checkbox fields" class="resolved">0000804</a>, <a href="view6859.html?id=808" title="[closed] Project Country default field wrongly manually editable, and no more modifiable" class="resolved">0000808</a>, <a href="view7e6d.html?id=813" title="[closed] Impossible to attach a file new version if last version deleted" class="resolved">0000813</a>, <a href="view3994.html?id=811" title="[closed] When creating a &quot;choice list&quot; field, all previous lists of choices from the project model are automatically added" class="resolved">0000811</a>.</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/importation/ActionRenderer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/presenter/importation/ActionRenderer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/AuthenticationBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/presenter/zone/AuthenticationBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/DashboardView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/view/DashboardView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/zone/AuthenticationBannerView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/view/zone/AuthenticationBannerView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/client/ui/view/zone/OfflineBannerView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/MonitoredPointAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/dao/MonitoredPointAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OrganizationAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/dao/OrganizationAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectModelAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/dao/ProjectModelAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ReminderAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/dao/ReminderAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetMonitoredPointsAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/handler/GetMonitoredPointsAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetRemindersAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/handler/GetRemindersAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/handler/PrepareFileUploadAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/UpdateEntityAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/handler/UpdateEntityAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/CommandJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/CommandJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/DefaultFlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/KeyQuestionJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/KeyQuestionJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ObjectJsMapBoxer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/ObjectJsMapBoxer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/PrepareFileUploadJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/PrepareFileUploadJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ProjectModelJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/ProjectModelJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ProjectReportContentJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/ProjectReportContentJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ProjectReportSectionJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/ProjectReportSectionJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/RichTextElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/offline/js/RichTextElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/ProjectModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/domain/ProjectModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/DeleteFlexibleElementsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/DeleteFlexibleElementsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/DeleteHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/DeleteHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetMonitoredPointsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/GetMonitoredPointsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetOrgUnitModelsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/GetOrgUnitModelsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetRemindersHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/GetRemindersHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/MoveOrgUnitHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/MoveOrgUnitHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/PrepareFileUploadHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/calendar/MonitoredPointCalendarHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/calendar/MonitoredPointCalendarHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/calendar/ReminderCalendarHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/calendar/ReminderCalendarHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/Conflicts.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/handler/util/Conflicts.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/FileServlet.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/servlet/FileServlet.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/exporter/base/Exporter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/server/servlet/exporter/base/Exporter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/2e94ed1afcf0a9d2e0517c9f89cb06a897d5cca9/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="78">
	<a name="changeset1838">sigmah: master 70e18445</a>
	<br/><span class="small">Timestamp: 2016-01-04 18:24:39</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin485c.html?page=Source/view&amp;id=1838">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> </td>
<td colspan="3">Fixes <a href="viewfc7b.html?id=636" title="[new] Average aggregated value should not take into account empty cells">0000636</a>, <a href="viewec12.html?id=789" title="[closed] User experience improvements in the import process" class="resolved">0000789</a>, <a href="viewd0b3.html?id=805" title="[closed] Line space too small in message fields" class="resolved">0000805</a>, <a href="view651a.html?id=147" title="[closed] Display reminders linked project code on dashboard" class="resolved">0000147</a>, <a href="view7e6d.html?id=813" title="[closed] Impossible to attach a file new version if last version deleted" class="resolved">0000813</a>, <a href="view2729.html?id=810" title="[closed] Missing indicator attributes field controls" class="resolved">0000810</a> +<br />
Added a first version of the Profiler API.</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/importation/ImportationPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/presenter/importation/ImportationPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/DashboardView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/view/DashboardView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/view/importation/ElementExtractedValuePopup.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/importation/ImportDetailsPopup.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/view/importation/ImportDetailsPopup.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/indicator/EditIndicatorView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/view/project/indicator/EditIndicatorView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/ui/widget/FlexibleGrid.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/Checkpoint.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/util/profiler/Checkpoint.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/Execution.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/util/profiler/Execution.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/Profiler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/util/profiler/Profiler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/ProfilerStore.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/util/profiler/ProfilerStore.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/Scenario.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/client/util/profiler/Scenario.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/AbstractAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/AbstractAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/dao/AbstractUserDatabaseAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/AbstractUserDatabaseAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/AsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/AsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/AuthenticationAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/AuthenticationAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/BaseAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/BaseAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/CategoryElementAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/CategoryElementAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/CategoryTypeAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/CategoryTypeAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/CountryAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/CountryAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/FileDataAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/FileDataAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/HistoryAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/HistoryAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/LogFrameAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/LogFrameAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/LogoAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/MonitoredPointAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/MonitoredPointAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OpenTransactionHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/OpenTransactionHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OrgUnitAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/OrgUnitAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OrgUnitModelAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/OrgUnitModelAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/OrganizationAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/OrganizationAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/PageAccessAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/PageAccessAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/PersonalCalendarAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/PersonalCalendarAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/PhaseAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/PhaseAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/PhaseModelAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/PhaseModelAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectModelAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ProjectModelAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectReportAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ProjectReportAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ReminderAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ReminderAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ReportReferenceAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ReportReferenceAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/UpdateDiaryAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/UpdateDiaryAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/UserAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/UserAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/dao/ValueAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/fileapi/Files.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/fileapi/Files.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/DeleteAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/DeleteAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetCategoriesAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/GetCategoriesAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetCountriesAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/GetCountriesAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetMonitoredPointsAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/GetMonitoredPointsAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetRemindersAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/GetRemindersAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/GetUsersByOrganizationAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/GetUsersByOrganizationAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/UpdateMonitoredPointsAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/UpdateMonitoredPointsAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/UpdateRemindersAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/handler/UpdateRemindersAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/AlreadyOpenedDatabaseRequest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/AlreadyOpenedDatabaseRequest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Database.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/Database.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IDBDatabase.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/IDBDatabase.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/NativeOpenDatabaseRequest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/NativeOpenDatabaseRequest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/NoopDatabaseRequest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/NoopDatabaseRequest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/OpenDatabaseRequest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/OpenDatabaseRequest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/indexeddb/Schema.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/Schema.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Store.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/Store.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/indexeddb/Stores.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/Stores.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/Transaction.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/indexeddb/Transaction.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/AuthenticationJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/js/AuthenticationJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/Values.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/js/Values.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/FileSelectionView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/offline/view/FileSelectionView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetImportationSchemeModelsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/server/handler/GetImportationSchemeModelsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/servlet/importer/Importer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/server/servlet/importer/Importer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/base/Command.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/shared/command/base/Command.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/MessageElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/shared/dto/element/MessageElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_en_GB.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/client/i18n/UIConstants_en_GB.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_es.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/client/i18n/UIConstants_es.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/themes/css/xtheme-sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/70e184454038907ac5a63a51d48b1c8140262598">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/70e184454038907ac5a63a51d48b1c8140262598/src/main/resources/org/sigmah/public/themes/css/xtheme-sigmah.css">File</a>&#160;]</span> </span></td>
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
		2015-10-16 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-10-16 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-10-16 12:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-04 10:58	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 2.1	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-02 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 2e94ed1a	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; 2.0.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001919	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 12:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		fixed =&gt; reopened	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 12:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		2.0.2 =&gt; 	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.0.2 =&gt; 2.1	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 70e18445	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-04 19:00	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Note Added: 0001951	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-04 19:00	</td>
	<td class="small-caption">
		<a href="view_user_pagec3c9.html?id=8">anonymous</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-06-24 14:49	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002009	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-06-24 14:49	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		rcalabro =&gt; 	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-06-24 14:49	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; new	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-06-24 14:49	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; 2.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-06-24 14:49	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000868	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-08-26 17:56	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Note Added: 0002037	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-08-29 10:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002038	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-08-29 10:24	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Note Added: 0002039	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-10-07 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002111	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-10-07 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-10-07 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.2	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-10-07 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		reopened =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-10-07 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2017-01-12 15:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002293	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2017-01-12 15:27	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=813&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:49 GMT -->
</html>
