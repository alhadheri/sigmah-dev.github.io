<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=712 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:05 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:19 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000712: No more update of project/orgunit tab content when coming back to it - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000712</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2015-04-28 18:38</td><td class="print">2015-05-27 17:21</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000712: No more update of project/orgunit tab content when coming back to it</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On v2.0-rc1, when a users closes the tab of a project/orgunit or switches to another tab in the application, when he will come back to the project/orgunit tab he has quitted, the content of the project/orgunit won't be reloaded.<br />
<br />
There are many consequences of this change in v2.0-rc1 in comparison with v1.2. One of it is given in additionnal information as an example.<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">On v2.0-rc1, if a user A modifies a project phase offline while another one closes this phase, and then user A synchronizes, he will sill see the phase as opened.<br />
<br />
So far, nothing new under the sun! It would be the same if online : a project is not automatically refreshed if someone closes a phase meanwhile.<br />
<br />
The issue is that even if the user closes the project tab and reopens it, or even Update the Dashboard project table, he will always see the phase as opened in the project.<br />
Only a Refresh or a closure of the session will enable him to see the phase as closed.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2015-04-28 18:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-28 18:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-04-28 18:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-04-29 10:30</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Severity</td><td class="print">major =&gt; feature</td></tr><tr class="print"><td class="print">2015-04-29 11:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Severity</td><td class="print">feature =&gt; major</td></tr><tr class="print"><td class="print">2015-04-29 11:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">After offline synchro, phase closed meanwhile still seen opened =&gt; After offline synchro, phase closed meanwhile seen opened</td></tr><tr class="print"><td class="print">2015-04-29 11:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=569#r569</td></tr><tr class="print"><td class="print">2015-05-04 18:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Priority</td><td class="print">normal =&gt; high</td></tr><tr class="print"><td class="print">2015-05-04 18:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Category</td><td class="print">Offline =&gt; Project</td></tr><tr class="print"><td class="print">2015-05-04 18:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">After offline synchro, phase closed meanwhile seen opened =&gt; No more update of project/orgunit tab content when coming back to it</td></tr><tr class="print"><td class="print">2015-05-04 18:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=620#r620</td></tr><tr class="print"><td class="print">2015-05-04 18:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=622#r622</td></tr><tr class="print"><td class="print">2015-05-06 11:14</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-05-06 11:14</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-05-06 11:14</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-05-06 11:15</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 7599b9f9</td></tr><tr class="print"><td class="print">2015-05-06 11:15</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Note Added: 0001687</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-27 17:21</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001732</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-27 17:21</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
<br />
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		Notes	</td>
</tr>
<tr>
	<td class="print-spacer" colspan="2">
		<hr size="1" />
	</td>
</tr>
<tr>
	<td class="nopad" valign="top" width="20%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				(0001687)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagec3c9.html?id=8">anonymous</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-05-06 11:15&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Fix committed to master branch.			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="print-spacer" colspan="2">
		<hr size="1" />
	</td>
</tr>
<tr>
	<td class="nopad" valign="top" width="20%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				(0001732)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-05-27 17:21&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc3.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=712 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:05 GMT -->
</html>
