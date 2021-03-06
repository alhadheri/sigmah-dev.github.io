<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=337 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:39 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:51 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000337: Hide by default in Dashboard closed projects - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000337</td><td class="print">sigmah</td><td class="print">Dashboard</td><td class="print">public</td><td class="print">2011-06-26 17:07</td><td class="print">2015-05-04 09:45</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">studentblue13</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/fr/node/460">http://www.sigmah.org/fr/node/460</a> [<a href="http://www.sigmah.org/fr/node/460" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000337: Hide by default in Dashboard closed projects</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">A new filter on open/closed project status should be added on the Dashboard projects table. This open/closed status is described in the &quot;Interruption project phases&quot; feature (<a href="view8057.html?id=510" title="[new] Interruption project phases">0000510</a>).<br />
This new filter will be available through a new button on the left of the Export button.<br />
By default, this button will be called: &quot;Include closed projects&quot;. When clicked, it will open a menu below with the following options:<br />
- exclude closed projects<br />
- include last 6 months closed projects<br />
- include last 12 months closed projects<br />
- choose another time limit (if this last option is chosen, a text field will be given to the user to enter his own limit of months)<br />
- include all closed projects<br />
<br />
Once an option is chosen in this menu, the projects table is automatically reloaded.<br />
By default, when Sigmah is opened, the default filter will be &quot;exclude closed projects&quot; (this last part of this feature is subdued to the development of issue <a href="view6fb5.html?id=31" title="[closed] Table filters through technical migration to GXT 2.2.5" class="resolved">0000031</a>).<br />
When the user clicks on &quot;Refresh&quot;, it will refresh the projects table with the &quot;Include closed projects&quot; filter selected earlier.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page3e0c.php?tag_id=12' title=''>Enhanced dashboard project table</a>, <a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000031</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page6fb5.html?id=31">sherzod</a></span>&#160;</td><td class="print">Table filters through technical migration to GXT 2.2.5&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000510</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Interruption project phases&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000585</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></span>&#160;</td><td class="print">Add a filter symbol on filtered columns of the Dashboard projects table&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;0000337.patch (97,861) <span class="italic">2013-08-21 06:16</span><br />http://www.sigmah.org/issues/file_download.php?file_id=109&amp;type=bug<br /><img src="images/fileicons/zip.gif" alt="zip" />&#160;MockUp_337_third.zip (100,048) <span class="italic">2013-08-21 06:17</span><br />http://www.sigmah.org/issues/file_download.php?file_id=110&amp;type=bug<br /><img src="images/fileicons/png.gif" alt="png" />&#160;Menu-with-RadioButtons.png (12,666) <span class="italic">2013-08-22 09:47</span><br />http://www.sigmah.org/issues/file_download.php?file_id=111&amp;type=bug<br /><img src="file_downloade190.php?file_id=111&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000552_addition.patch (2,027) <span class="italic">2013-08-26 07:14</span><br />http://www.sigmah.org/issues/file_download.php?file_id=117&amp;type=bug<br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000337_update.patch (133,446) <span class="italic">2013-08-26 09:12</span><br />http://www.sigmah.org/issues/file_download.php?file_id=121&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-06-26 17:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2011-06-26 17:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=119#r119</td></tr><tr class="print"><td class="print">2011-06-26 17:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">child of 0000031</td></tr><tr class="print"><td class="print">2013-02-05 11:53</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">child of 0000031</td></tr><tr class="print"><td class="print">2013-02-05 11:53</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000031</td></tr><tr class="print"><td class="print">2013-02-25 12:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-25 12:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=311#r311</td></tr><tr class="print"><td class="print">2013-02-25 12:53</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000510</td></tr><tr class="print"><td class="print">2013-02-26 15:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Enhanced dashboard project table</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-19 14:44</td><td class="print"><a href="view_user_paged61c.html?id=5">tmiette</a></td><td class="print">Assigned To</td><td class="print"> =&gt; studentblue13</td></tr><tr class="print"><td class="print">2013-07-19 14:44</td><td class="print"><a href="view_user_paged61c.html?id=5">tmiette</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-08-13 19:16</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001328</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-14 17:47</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001329</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-14 17:48</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Edited: 0001329</td><td class="print">bug_revision_view_page.php?bugnote_id=1329#r424</td></tr><tr class="print"><td class="print">2013-08-14 17:48</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mockup_337.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-14 19:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001330</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-14 19:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-08-15 10:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001330</td><td class="print">bug_revision_view_page.php?bugnote_id=1330#r426</td></tr><tr class="print"><td class="print">2013-08-18 03:15</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: mockup_337.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-18 03:21</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: mockup_337_second.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-18 03:23</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000337.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 05:40</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: mockup_337_second.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 05:40</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000337.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 06:16</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000337.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 06:17</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: MockUp_337_third.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 06:19</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001333</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-22 09:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000585</td></tr><tr class="print"><td class="print">2013-08-22 09:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001337</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-22 09:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: Menu-with-RadioButtons.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:41</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001342</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:14</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000552_addition.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:16</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001343</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 09:12</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000337_update.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 09:14</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001347</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 09:18</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Edited: 0001347</td><td class="print">bug_revision_view_page.php?bugnote_id=1347#r430</td></tr><tr class="print"><td class="print">2013-08-26 18:11</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 18:11</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001350</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 18:11</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-08-26 18:11</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-02-17 17:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2015-05-04 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 4.0 =&gt; NA</td></tr><tr class="print"><td class="print">2015-05-04 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001664</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-05-04 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001328)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-13 19:16&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				studentblue13, the reply to the question you made on IRC today (=&gt; i got confused about what &quot;closed project&quot; means : as i understand it it's linked to a not yet implemented feature &quot;0000510: Interruption project phases&quot; so the &quot;Closed project status phase&quot; is not there yet. As it is now, how can i then assume that a project is closed ?) is: a project which has its &quot;close_date&quot; column filled.<br />
<br />
Currently, a project is closed when the last phase of a project is closed. When this last phase is closed, the system stores in the close_date column the timestamp of the closure of the project.<br />
When feature <a href="view8057.html?id=510" title="[new] Interruption project phases">0000510</a> will be develop, this behavior to closed project will be changed as you've noticed. But you can already develop safely this closed project hiding feature with the current project closing behavior.			</td>
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
				(0001329)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-14 17:47&#160;&#160;&#160;
				<br />(edited on:&#32;2013-08-14 17:48)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added a mockup for the new menu<br />
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
				(0001330)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-14 19:24&#160;&#160;&#160;
				<br />(edited on:&#32;2013-08-15 10:06)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for those mockups !<br />
From this basis, I've looked in depth in this topic, including a new reading of issue <a href="view8057.html?id=510" title="[new] Interruption project phases">0000510</a> to include as much ideas as possible.<br />
The main idea I think it will be good to include in the graphical design of this feature comes from <a href="view8057.html?id=510" title="[new] Interruption project phases">0000510</a> and is: &quot;The Close/Open status should be available by default in the Project Table : closed projects will have a 'Closed' label printed in place of the time consumption progress bar.&quot;<br />
<br />
Here is then what I propose:<br />
- the Time column behavior should be changed: if a project is closed, a &quot;Closed&quot; label should replace the time consumption progress bar<br />
- the closed project filters should be moved as filter of the &quot;Time&quot; column<br />
- by default, when loading the projects table for the first time, the Time column will be filtered to exclude all closed projects and will appear as filtered<br />
- in feature <a href="view14aa.html?id=585" title="[closed] Add a filter symbol on filtered columns of the Dashboard projects table" class="resolved">0000585</a>, users have requested to have more visible filtered columns: your funnel icon could be used to magnify this filtered state of all columns and will be visible by default on the Time column<br />
- when opening the Time column menu, a new checkbox menu item &quot;Closed projects filter&quot; will be available, like the &quot;Filter&quot; menu item of the Category or Title columns (this checkbox menu item will be checked by default)<br />
- this &quot;Closed projects filter&quot; checkbox menu item will open a sub-menu with the 5 radiobutton menu items: &quot;exclude all closed projects&quot; (default option), &quot;include last 6 months&quot;, &quot;include last 12 months&quot;, &quot;choose past time limit&quot;, &quot;include all closed projects&quot;<br />
- the &quot;choose past time limit&quot; will open a sub-sub-menu with a calendar to select a date as in your mockup<br />
<br />
What is your opinion about this behavior?<br />
Are you ok with and develop also the (easier ;) <a href="view14aa.html?id=585" title="[closed] Add a filter symbol on filtered columns of the Dashboard projects table" class="resolved">0000585</a> feature with your funnel icon?<br />
Is it possible to develop this &quot;Closed projects filter&quot; with its specific projects table reloading behavior? (all other filters on the projects table are just filtering dynamically on the client side the content of the table, this &quot;Closed projects filter&quot; will work differently and force a reload of the data contained in the table)<br />
<br />
<i>Note:</i> For more information about radiobutton menu item, you can look at: <a href="http://www.sencha.com/examples/#ExamplePlace:basictoolbar">http://www.sencha.com/examples/#ExamplePlace:basictoolbar</a> [<a href="http://www.sencha.com/examples/#ExamplePlace:basictoolbar" target="_blank">^</a>]<br />
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
				(0001333)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-21 06:19&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added patch and Mock-up, also includes feature  <a href="view14aa.html?id=585">http://www.sigmah.org/issues/view.php?id=585</a> [<a href="view14aa.html?id=585" target="_blank">^</a>]			</td>
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
				(0001337)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-22 09:46&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Great job! I think we are getting very close to a very good behavior for the end user. :)<br />
<br />
Here are my new comments:<br />
- First of all, no need to delete the previous version of your mockup when you add a new one. Issue pages are good also to keep all the history of a development to understand in the end how all decisions have been taken. So you can keep different version of the mockups like you are doing, especially if you are using a good naming policy like you do with a version number in the file name. :)<br />
- The menu radio buttons might look nicer if you could use the radiobutton menu items provided with GXT (see file attached coming from sencha.com demo).<br />
- To make things simpler, I think we can remove the &quot;include all closed projects&quot; menu item in the filter because this filter option means actually we want to remove all filtering... and then, the user has just to uncheck the &quot;Closed projects filter&quot; checkbox.<br />
<br />
Does it seem good to you?			</td>
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
				(0001342)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-23 07:41&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				yes, i'm on it.			</td>
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
				(0001343)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 07:16&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				because i added a category selection function i added a (small)patch for resolved issue <a href="viewc1e3.html?id=552" title="[closed] Advanced logframe management privileges" class="resolved">0000552</a>			</td>
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
				(0001347)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 09:14&#160;&#160;&#160;
				<br />(edited on:&#32;2013-08-26 09:18)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added updated version of my patch it includes now the category behaviour wanted in profile form window. If this patch will be accepted into 1.3 a category should be set for any new privilege added, if not it will be mapped into the &quot;not mapped category&quot;.<br />
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
				(0001350)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 18:11&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by studentblue13 : Adds a filter in project's list on dashboard page for closed projects (fixes issue <a href="view8bdf.html?id=337" title="[closed] Hide by default in Dashboard closed projects" class="resolved">0000337</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/public/sigmah.css<br />
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
				(0001664)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-05-04 09:45&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc1, except reported issue <a href="view5a73.html?id=644" title="[closed] Filter on the time column of the Dashboard projects table not working" class="resolved">0000644</a>.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=337 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:39 GMT -->
</html>
