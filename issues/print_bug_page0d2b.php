<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=551 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:33 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:30:24 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000551: Advanced agenda management privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000551</td><td class="print">sigmah</td><td class="print">Calendar</td><td class="print">public</td><td class="print">2013-03-14 11:30</td><td class="print">2015-06-17 15:37</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">studentblue13</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/694">http://www.sigmah.org/node/694</a> [<a href="http://www.sigmah.org/node/694" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000551: Advanced agenda management privileges</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, if a user has right to edit a project, he has also the right to manage the agenda: create/delete/modify events.<br />
<br />
A more advanced behavior would add a new global privilege:<br />
- VIEW_AGENDA for viewing the agenda sub-tab<br />
- EDIT_AGENDA for creating/deleting/modifying events in the agenda<br />
<br />
Of course, if a user has not the right to edit the project, he won't be able to edit the agenda.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;0000551_second.patch (119,518) <span class="italic">2013-08-23 07:10</span><br />http://www.sigmah.org/issues/file_download.php?file_id=115&amp;type=bug<br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000551_second_update.patch (120,016) <span class="italic">2013-08-26 07:50</span><br />http://www.sigmah.org/issues/file_download.php?file_id=120&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-03-14 11:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-03-14 11:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=338#r338</td></tr><tr class="print"><td class="print">2013-04-25 10:01</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Assigned To</td><td class="print"> =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-04-25 10:01</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-04-26 14:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">Guerline =&gt; </td></tr><tr class="print"><td class="print">2013-04-26 15:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; osarrat</td></tr><tr class="print"><td class="print">2013-04-26 15:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2013-04-26 15:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">osarrat =&gt; </td></tr><tr class="print"><td class="print">2013-07-05 22:03</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Assigned To</td><td class="print"> =&gt; studentblue13</td></tr><tr class="print"><td class="print">2013-07-05 22:03</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-07-09 18:56</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-09 19:01</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-09 19:03</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-13 00:26</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-13 00:26</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 16:55</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 16:56</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:09</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000551.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:10</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551_second.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:11</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001340</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:50</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000551_second_update.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:51</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001346</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 16:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001595</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 16:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-04-07 16:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-07 16:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-07 16:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001805</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
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
				(0001340)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-23 07:11&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added patch self-revised. extended the behaviour to the org-unit calendar and tabs as well . was that inteded ?			</td>
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
				(0001346)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 07:51&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added category matching for the new privileges			</td>
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
				(0001595)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 16:18&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue set as resolved because apparently resolved in v2.0-rc1.<br />
Must be tested to confirm resolution before closure.			</td>
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
				(0001805)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-17 15:37&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc4.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=551 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:33 GMT -->
</html>
