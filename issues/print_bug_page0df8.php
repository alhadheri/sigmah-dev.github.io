<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=468 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:26 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:56 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000468: Advanced indicator management privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000468</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2012-06-15 14:18</td><td class="print">2015-06-17 15:38</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">studentblue13</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/694">http://www.sigmah.org/node/694</a> [<a href="http://www.sigmah.org/node/694" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000468: Advanced indicator management privileges</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, if a user has right to edit a project, he has also the right to manage indicators (create/delete/modify) and edit the values associated with it.<br />
<br />
A more advanced behavior would add 3 global privileges:<br />
- VIEW_INDICATOR for viewing the two indicator sub-tabs<br />
- MANAGE_INDICATOR for creating/deleting/modifying indicator definitions<br />
- EDIT_INDICATOR for editing values of existing indicators</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000432</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page6fb5.html?id=31">sherzod</a></span>&#160;</td><td class="print">User right management missing Indicators rights&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;0000468_second.patch (259,676) <span class="italic">2013-08-23 07:39</span><br />http://www.sigmah.org/issues/file_download.php?file_id=116&amp;type=bug<br /><img src="images/fileicons/text.html" alt="patch" />&#160;0000468_second_update.patch (260,262) <span class="italic">2013-08-26 07:38</span><br />http://www.sigmah.org/issues/file_download.php?file_id=119&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2012-06-15 14:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2012-06-15 15:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000432</td></tr><tr class="print"><td class="print">2013-03-14 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">User Report URL</td><td class="print"> =&gt; <a href="http://www.sigmah.org/node/694">http://www.sigmah.org/node/694</a> [<a href="http://www.sigmah.org/node/694" target="_blank">^</a>]</td></tr><tr class="print"><td class="print">2013-03-14 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-03-14 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 11.0 =&gt; NA</td></tr><tr class="print"><td class="print">2013-03-14 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=340#r340</td></tr><tr class="print"><td class="print">2013-07-15 14:29</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Assigned To</td><td class="print"> =&gt; studentblue13</td></tr><tr class="print"><td class="print">2013-07-15 14:29</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-07-26 17:50</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000468.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 06:48</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000468.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-07 06:49</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000468.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:38</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Deleted: 0000468.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:39</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000468_second.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-23 07:40</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001341</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:38</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">File Added: 0000468_second_update.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 07:38</td><td class="print"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></td><td class="print">Note Added: 0001345</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 15:46</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 15:46</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001349</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-26 15:46</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-08-26 15:46</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-10-07 19:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-02-17 17:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001807</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-06-17 15:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001341)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-23 07:40&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				added second version of my patch. mainly removed annoying pop-ups and disabled cell events.			</td>
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
				(0001345)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagea9e4.html?id=55">studentblue13</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 07:38&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				category matching for new privileges added			</td>
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
				(0001349)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-26 15:46&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by studentblue13 : Adds permission management for  indicators (fixes issue <a href="view9b7e.html?id=468" title="[closed] Advanced indicator management privileges" class="resolved">0000468</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/common/toolbar/ActionToolBar.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/config/design/DesignFormContainer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/config/design/DesignPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/config/design/IndicatorDialog.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/config/design/IndicatorForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/logframe/grid/IndicatorListWidget.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/pivot/ProjectPivotContainer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/table/PivotGridPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/table/PivotPage.java<br />
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
				(0001807)
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

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=468 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:26 GMT -->
</html>
