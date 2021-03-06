<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=550 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:37 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:40 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000550: Advanced reminders management privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000550</td><td class="print">sigmah</td><td class="print">Calendar</td><td class="print">public</td><td class="print">2013-03-14 11:20</td><td class="print">2015-05-04 12:24</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">studentblue13</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">have not tried</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/710">http://www.sigmah.org/node/710</a> [<a href="http://www.sigmah.org/node/710" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000550: Advanced reminders management privileges</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, if a user has right to edit a project, he has also the right to manage reminders (create/delete/modify/close).<br />
<br />
A more advanced behavior would add two global privileges:<br />
- EDIT_OWN_REMINDER for creating/deleting/modifying/closing reminders created by the user<br />
- EDIT_ALL_REMINDERS for creating/deleting/modifying/closing reminders created by the user or by other users<br />
<br />
Of course, if a user has not  the right to edit the project, he won't be able to edit reminders.<br />
<br />
The development of this feature should include the addition of this history feature on reminders: to keep trace of who has created, modified or closed a reminder.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000740</td><td class="print">new&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page0b30.html?id=2">osarrat</a></span>&#160;</td><td class="print">Missing reminders history&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;0000550_second.patch (188,123) <span class="italic">2013-08-23 06:54</span><br />http://www.sigmah.org/issues/file_download.php?file_id=112&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;mytable.sql (276) <span class="italic">2013-08-23 06:54</span><br />http://www.sigmah.org/issues/file_download.php?file_id=113&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;mytable2.sql (304) <span class="italic">2013-08-23 06:54</span><br />http://www.sigmah.org/issues/file_download.php?file_id=114&amp;type=bug<br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000550_second_update.patch (188,631) <span class="italic">2013-08-26 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=118&amp;type=bug<br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000550_third.patch (21,972) <span class="italic">2013-09-25 22:39</span><br />http://www.sigmah.org/issues/file_download.php?file_id=130&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-03-14 11:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-24 16:29</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Assigned To</td><td class="print"> =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-04-24 16:29</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-04-24 18:09</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">Guerline =&gt; </td></tr><tr class="print"><td class="print">2013-04-24 18:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001126</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-24 18:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; osarrat</td></tr><tr class="print"><td class="print">2013-04-24 18:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2013-04-26 15:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">osarrat =&gt; </td></tr><tr class="print"><td class="print">2013-07-19 14:44</td><td class="print"><a href="view_user_paged61c.html?id=5">tmiette</a></td><td class="print">Assigned To</td><td class="print"> =&gt; studentblue13</td></tr><tr class="print"><td class="print">2013-07-19 14:44</td><td class="print"><a href="view_user_paged61c.html?id=5">tmiette</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-08-01 08:26</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000550.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-01 08:26</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mytable.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 04:13</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: mytable.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 04:13</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000550.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 04:13</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000550.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 04:14</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mytable.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 04:14</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mytable2.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:53</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: mytable2.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:53</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: mytable.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:53</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000550.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:54</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000550_second.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:54</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mytable.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:54</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mytable2.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 06:59</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001339</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:00</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Edited: 0001339</td><td class="print">bug_revision_view_page.php?bugnote_id=1339#r428</td></tr><tr class="print"><td class="print">2013-08-26 07:29</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000550_second_update.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:29</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001344</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 14:00</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 14:00</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001348</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 14:00</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-08-26 14:00</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-09-25 22:35</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001365</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-25 22:35</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Status</td><td class="print">resolved =&gt; feedback</td></tr><tr class="print"><td class="print">2013-09-25 22:35</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Resolution</td><td class="print">fixed =&gt; reopened</td></tr><tr class="print"><td class="print">2013-09-25 22:39</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000550_third.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-20 16:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">feedback =&gt; resolved</td></tr><tr class="print"><td class="print">2013-10-20 16:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-10-20 16:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">reopened =&gt; fixed</td></tr><tr class="print"><td class="print">2013-10-20 16:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001370</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-20 16:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; feedback</td></tr><tr class="print"><td class="print">2013-10-20 16:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">fixed =&gt; reopened</td></tr><tr class="print"><td class="print">2015-05-04 12:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000740</td></tr><tr class="print"><td class="print">2015-05-04 12:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001665</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 12:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">feedback =&gt; assigned</td></tr><tr class="print"><td class="print">2015-05-04 12:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-05-04 12:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">reopened =&gt; fixed</td></tr></table>
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
				(0001126)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-04-24 18:10&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue set back from &quot;assigned&quot; to &quot;new&quot; because is part of GSoC project and should not be fixed earlier.			</td>
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
				(0001339)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-23 06:59&#160;&#160;&#160;
				<br />(edited on:&#32;2013-08-23 07:00)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added self-revised version of patch. The history opens on context of the reminder in the projects tab. Has still some problems with the history only being updated in the ui on open/closing checkbox click, the persisted history is ok though. I'm on it. Removed Pop-ups displayed on unsufficient perms, not sigmah-style as i've been told ! also added necessary queries to create the new tables (postgres).<br />
<br />
			</td>
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
				(0001344)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 07:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added category for the new privileges			</td>
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
				(0001348)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 14:00&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by studentblue13 : Adds permission &amp; history management for  reminders (fixes issue <a href="view71d8.html?id=550" title="[closed] Advanced reminders management privileges" class="resolved">0000550</a>)<br />
<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/reminder/MonitoredPointHistory.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/reminder/ReminderChangeType.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/reminder/ReminderHistory.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointHistoryDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/reminder/ReminderHistoryDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardView.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/domain/PersistentClasses.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateMonitoredPointsHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateRemindersHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/reminder/MonitoredPoint.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/reminder/Reminder.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/reminder/MonitoredPointDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/reminder/ReminderListDTO.java<br />
Modified : /trunk/sigmah/src/main/resources/dozer-schema-mapping.xml<br />
			</td>
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
				(0001365)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-09-25 22:35&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				history gets updated on change name or date			</td>
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
				(0001370)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-10-20 16:08&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Back from resolved to &quot;feedback&quot; because there is actually another patch to validate and commit.			</td>
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
				(0001665)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-05-04 12:24&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc1, except the integration of the code developed for reminders history. The issue is closed nevertheless because the issue <a href="viewd624.html?id=740" title="[new] Missing reminders history">0000740</a> has been reported to track the integration of this part of the code.<br />
<br />
Congratulations studentblue13 for this work!!			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=550 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:37 GMT -->
</html>
