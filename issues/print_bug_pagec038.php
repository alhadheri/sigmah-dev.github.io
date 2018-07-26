<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=552 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:30 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:30:21 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000552: Advanced logframe management privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000552</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2013-03-14 11:42</td><td class="print">2015-06-17 15:38</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">studentblue13</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/694">http://www.sigmah.org/node/694</a> [<a href="http://www.sigmah.org/node/694" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000552: Advanced logframe management privileges</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, if a user has right to edit a project, he has also the right to manage the logical framework: create/delete/modify content in it.<br />
<br />
A more advanced behavior would add 2 global privileges:<br />
- VIEW_LOGFRAME for viewing the logframe sub-tab<br />
- EDIT_LOGFRAME for creating/modifying/deleting objectives, expected results, activities, hypothesis or linking/unlinking indicators to the logframe</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;0000552.patch (84,525) <span class="italic">2013-08-07 01:28</span><br />http://www.sigmah.org/issues/file_download.php?file_id=100&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-03-14 11:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-10 10:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=392#r392</td></tr><tr class="print"><td class="print">2013-06-15 14:41</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Assigned To</td><td class="print"> =&gt; studentblue13</td></tr><tr class="print"><td class="print">2013-06-15 14:41</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-07-03 23:31</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: Patch_0000552.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-05 17:18</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: Patch_0000552.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-05 17:18</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: patch.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-09 17:21</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000552.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-09 17:43</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001284</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-12 23:51</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000552.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-12 23:51</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: patch.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-12 23:53</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000552.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 01:27</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000552.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 01:28</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000552.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 13:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 13:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001334</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-21 13:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-08-21 13:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-02-17 17:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-02-18 17:56</td><td class="print"><a href="view_user_page0641.html?id=88">Assistcom</a></td><td class="print">Note Added: 0001535</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001806</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001284)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-09 17:43&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				0000552.patch is an addition to patch.txt			</td>
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
				(0001334)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-21 13:35&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Adds permission management for log frames (fixes issue <a href="viewc1e3.html?id=552" title="[closed] Advanced logframe management privileges" class="resolved">0000552</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/logframe/ProjectLogFramePresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java<br />
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
				(0001535)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0641.html?id=88">Assistcom</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-02-18 17:56&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Test cases added to test the issue : <br />
- <a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122">http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122</a> [<a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-122" target="_blank">^</a>]<br />
- <a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123">http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123</a> [<a href="http://testlink.sigmah.org/linkto.php?tprojectPrefix=app&amp;item=testcase&amp;id=app-123" target="_blank">^</a>]<br />
<br />
Good development but when the user has not to priviledge to view the logframe it would have be better not to show him the sub-tab instead of the error popup &quot;You are not authorized to access this resource&quot;.			</td>
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
				(0001806)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-17 15:38&#160;&#160;&#160;
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

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=552 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:30 GMT -->
</html>
