<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=841&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:38 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:15 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000841: Performance measure framework - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page1f37.html?return=%2Fissues%2Fview.php%3Fid%3D841%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:26 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewa77f.php?id=841&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page640e.php?bug_id=841">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000841</td><td>sigmah</td><td>[All Projects] General</td><td>public</td><td>2016-01-19 17:30</td><td>2017-01-12 16:32</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.0</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.2</td><td class="category">Fixed in Version</td><td>2.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000841: Performance measure framework</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Sigmah software performance have currently no way to be measured and monitored.<br />
<br />
A framework with an evolutive number of probes to measure Sigmah performance should be added.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">More information on this wiki page: <a href="http://wiki.sigmah.org/doku.php?id=optimisation:conception">http://wiki.sigmah.org/doku.php?id=optimisation:conception</a> [<a href="http://wiki.sigmah.org/doku.php?id=optimisation:conception" target="_blank">^</a>]<br />
<br />
And a great user documentation created here: <a href="http://wiki.sigmah.org/doku.php?id=contributorguide:performanceoptimisation">http://wiki.sigmah.org/doku.php?id=contributorguide:performanceoptimisation</a> [<a href="http://wiki.sigmah.org/doku.php?id=contributorguide:performanceoptimisation" target="_blank">^</a>]</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">parent of</span>&#160;</td><td><a href="view6a66.html?id=1007">0001007</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_page0b30.html?id=2">osarrat</a></span>&#160;</td><td>Wrong version indicated in optimisation mail messages&#160;</td></tr>
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
<tr class="bugnote" id="c2192">
        <td class="bugnote-public">
				<span class="small">(<a href="view4a04.html?id=841#c2192" title="Direct link to note">0002192)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-10-25 14:39</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Considered resolved by rcalabro in pull request <a href="https://github.com/sigmah-dev/sigmah/pull/26/">https://github.com/sigmah-dev/sigmah/pull/26/</a> [<a href="https://github.com/sigmah-dev/sigmah/pull/26/" target="_blank">^</a>]	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c2300">
        <td class="bugnote-public">
				<span class="small">(<a href="view4a04.html?id=841#c2300" title="Direct link to note">0002300)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2017-01-12 16:32</span><br />
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
		2016-01-19 17:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-19 17:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-19 17:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-19 17:31	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagec197.php?rev_id=759#r759">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-12 10:18	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; 2.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-07-18 16:26	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page3783.php?rev_id=833#r833">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-10-25 14:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002192	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-10-25 14:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-10-25 14:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.2	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-10-25 14:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-10-25 15:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0001007	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2017-01-12 16:32	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0002300	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2017-01-12 16:32	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=841&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:38 GMT -->
</html>