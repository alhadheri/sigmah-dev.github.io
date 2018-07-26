<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=615 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:23 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:54 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000615: Unnecessary trailing commas in some columns of User Admin page - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000615</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2014-03-09 15:33</td><td class="print">2015-06-17 15:40</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">spM</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">spM</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">trivial</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print">Mac OSx</td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print">10.7 </td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000615: Unnecessary trailing commas in some columns of User Admin page</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On the User administration page, there are unnecessary trailing commas under the profiles column of the User panel , and the Global Authorization columns and Privacy Group columns of the Profiles panel.<br />
Though not a high priority task, but I guess its good to fix it just for the sake of aesthetics.<br />
<br />
(Attached is an image with the unnecessarily marked commas )</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;bug_report_sigmah.png (86,315) <span class="italic">2014-03-09 15:33</span><br />http://www.sigmah.org/issues/file_download.php?file_id=141&amp;type=bug<br /><img src="file_downloadf1f8.php?file_id=141&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/text.html" alt="patch" />&#160;615.patch (1,388) <span class="italic">2014-03-09 15:42</span><br />http://www.sigmah.org/issues/file_download.php?file_id=142&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-03-09 15:33</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-09 15:33</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-03-09 15:33</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Assigned To</td><td class="print"> =&gt; spM</td></tr><tr class="print"><td class="print">2014-03-09 15:33</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">File Added: bug_report_sigmah.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-09 15:42</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">File Added: 615.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-09 15:43</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001380</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-12 10:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Product Version</td><td class="print">3.0 =&gt; 1.2</td></tr><tr class="print"><td class="print">2014-03-12 10:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2014-03-12 10:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Unnecessary trailing commas in profiles column, global authorization column, and Privacy groups column of User Administration Pa =&gt; Unnecessary trailing commas in some columns of User Admin page</td></tr><tr class="print"><td class="print">2014-07-29 11:52</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-29 11:52</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001481</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-29 11:52</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2014-07-29 11:52</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-06-17 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001808</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-06-17 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001380)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-03-09 15:43&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				attached the patch for the same by the filename 615.patch.			</td>
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
				(0001481)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-29 11:52&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by spM : Unnecessary trailing commas in some columns of User Admin page. (fixes issue <a href="view4df4.html?id=615" title="[closed] Unnecessary trailing commas in some columns of User Admin page" class="resolved">0000615</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java<br />
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
				(0001808)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-17 15:40&#160;&#160;&#160;
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

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=615 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:23 GMT -->
</html>
