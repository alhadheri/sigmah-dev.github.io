<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=1045 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:01 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:25:24 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0001045: Very buggy behavior if displaying former project core version - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0001045</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2017-01-17 16:03</td><td class="print">2017-02-27 17:18</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">ftavin</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.2</td><td class="print-category">Fixed in Version</td><td class="print">2.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0001045: Very buggy behavior if displaying former project core version</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On v2.2-rc2, the application becomes very buggy if the user tries to display a former project core version.<br />
<br />
After requesting to display a former project core version, you will get the following behavior:<br />
- an unexpected error just after requesting to display a former project core version<br />
- each time you will open the &quot;Details&quot; sub-tab of another project, you will get an unexpected error and the tab you would have opened will be renamed to the project code of the project you have requested to display a former project core version</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5">1. open a project (like IF1294 on the demo database)<br />
2. lock project core and validate a new project core version<br />
3. modify one of the fields of the project core and Save<br />
4. request now to display the project core version you have created in step 2<br />
=&gt; you get the error and all the strange behavior</td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0001070</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Impossible to view a project &quot;Details&quot; sub-tab if another project is in old core version viewing mode&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;DisplayProjectCoreVersion-UnexpectedError.png (68,909) <span class="italic">2017-01-17 16:03</span><br />http://www.sigmah.org/issues/file_download.php?file_id=368&amp;type=bug<br /><img src="file_download2a46.php?file_id=368&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;DisplayProjectCoreVersion-TabsMultiplication.png (44,242) <span class="italic">2017-01-17 16:05</span><br />http://www.sigmah.org/issues/file_download.php?file_id=369&amp;type=bug<br /><img src="file_download7736.php?file_id=369&amp;type=bug" alt="png" border="0" /><br /></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2017-01-17 16:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2017-01-17 16:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2017-01-17 16:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; ftavin</td></tr><tr class="print"><td class="print">2017-01-17 16:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: DisplayProjectCoreVersion-UnexpectedError.png</td><td class="print"></td></tr><tr class="print"><td class="print">2017-01-17 16:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: DisplayProjectCoreVersion-TabsMultiplication.png</td><td class="print"></td></tr><tr class="print"><td class="print">2017-02-06 13:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 6977ba6d</td></tr><tr class="print"><td class="print">2017-02-06 13:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Note Added: 0002370</td><td class="print"></td></tr><tr class="print"><td class="print">2017-02-06 13:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2017-02-06 13:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2017-02-27 17:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0001070</td></tr><tr class="print"><td class="print">2017-02-27 17:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002404</td><td class="print"></td></tr><tr class="print"><td class="print">2017-02-27 17:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2017-02-27 17:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.2</td></tr></table>
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
				(0002370)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagec3c9.html?id=8">anonymous</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2017-02-06 13:00&#160;&#160;&#160;
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
				(0002404)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2017-02-27 17:18&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because part of correct behavior checked on v2.2-rc3.<br />
But actually, a part of the issue remains and has been reported as separate issue <a href="view79c6.html?id=1070" title="[new] Impossible to view a project &quot;Details&quot; sub-tab if another project is in old core version viewing mode">0001070</a>.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=1045 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:01 GMT -->
</html>
