<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=685 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:25 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:31:51 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000685: Missing message and new file in list while attaching offline from &quot;Reports &amp; documents&quot; - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000685</td><td class="print">sigmah</td><td class="print">Offline</td><td class="print">public</td><td class="print">2015-04-13 16:10</td><td class="print">2015-06-16 13:07</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">minor</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000685: Missing message and new file in list while attaching offline from &quot;Reports &amp; documents&quot;</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On v2.0-rc1 while offline, when the user tries to attach a file from the &quot;Reports &amp; documents&quot; sub-tab, everything goes smoothly until he selects a file.<br />
Then, the &quot;Add a file&quot; popup does not close by itself after attaching the file, no confirmation message comes to inform the user about the successful attachment, and the file does not appear in the list of all attached files available in this &quot;Reports &amp; documents&quot; sub-tab.<br />
But when the user leaves and comes back to this screen, he can see that his file has been correctly attached.<br />
<br />
The process just lacks the required feedbacks mentioned above.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000781</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Error when attaching offline a file from &quot;Report &amp; documents&quot;&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2015-04-13 16:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-14 10:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-04-14 10:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-05-27 12:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000781</td></tr><tr class="print"><td class="print">2015-06-12 12:15</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 337aa33b</td></tr><tr class="print"><td class="print">2015-06-15 09:46</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-06-15 09:46</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-06-15 09:46</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-06-16 13:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001780</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-16 13:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
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
				(0001780)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-16 13:07&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc4.<br />
<br />
A separate issue has been found on offline file attachment from the &quot;Reports &amp; documents&quot; sub-tab and delcared as <a href="view1890.html?id=790" title="[new] Impossible to attach files offline from &quot;Reports &amp; documents&quot; if no update offline data base">0000790</a>.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=685 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:25 GMT -->
</html>
