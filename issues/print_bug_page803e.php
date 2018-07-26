<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=548 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:17 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:41:00 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000548: Budget field always editable - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000548</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2013-03-08 17:44</td><td class="print">2013-07-03 10:55</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">tharindum</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">1.2</td><td class="print-category">Fixed in Version</td><td class="print">1.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/697">http://www.sigmah.org/node/697</a> [<a href="http://www.sigmah.org/node/697" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000548: Budget field always editable</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, the budget field is always editable when visible.<br />
If view right are only given on the budget field, it should not be editable.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5">Scenario 1:<br />
1. set a privacy group to the budget field<br />
2. set this privacy group to an user whith only &quot;view&quot; right<br />
3. open the project with the concerned user -&gt; you can still edit &quot;received budget&quot; and &quot;budget spent&quot; fields (planned budget is however not editable)<br />
<br />
Scenario 2:<br />
1. add a user with only &quot;view project&quot; right<br />
2. open any project with this user : he can modify budget fields</td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">This bug might be linked to the bug fix of <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management).</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000180</td><td class="print">closed&#160;</td><td class="print">&#160;</td><td class="print">Exclude Received budget and Spent budget from Amendment management&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000167</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Project core versions (amendments)&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;DefaultFlexibleElementDTO.java.patch (9,887) <span class="italic">2013-04-23 18:58</span><br />http://www.sigmah.org/issues/file_download.php?file_id=70&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-03-08 17:44</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-03-08 17:44</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000180</td></tr><tr class="print"><td class="print">2013-04-23 18:58</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">File Added: DefaultFlexibleElementDTO.java.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-23 18:59</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Note Added: 0001123</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-23 18:59</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Note Edited: 0001123</td><td class="print">bug_revision_view_page.php?bugnote_id=1123#r356</td></tr><tr class="print"><td class="print">2013-04-23 19:00</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Note Edited: 0001123</td><td class="print">bug_revision_view_page.php?bugnote_id=1123#r357</td></tr><tr class="print"><td class="print">2013-06-06 21:19</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Assigned To</td><td class="print"> =&gt; tharindum</td></tr><tr class="print"><td class="print">2013-06-06 21:19</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-06-07 19:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; 1.2</td></tr><tr class="print"><td class="print">2013-06-11 15:58</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-11 15:58</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001229</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-11 15:58</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-06-11 15:58</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-06-11 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000167</td></tr><tr class="print"><td class="print">2013-07-03 10:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001277</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-03 10:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2013-07-03 10:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 1.2</td></tr></table>
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
				(0001123)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page7d36.html?id=51">tharindum</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-04-23 18:59&#160;&#160;&#160;
				<br />(edited on:&#32;2013-04-23 19:00)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Here I attached the patch file for fixing this issue. This issue has been introduced by the bug fix of 0000180. It is related to the Amendment management and due to this fix that will be reopen. It's better to handle that issue properly by considering the business requirement of the amendment. <br />
This patch should be applied and the fix for issue 0000180 should be something else than the enabling  &quot;Received budget&quot; and &quot;Spent budget&quot; fields directly from UI.<br />
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
				(0001229)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-06-11 15:58&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by tharindum : enables all the budget text inputs for read-only mode (fixes issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a>). The planned budget field is no more disabled when the current amendment is locked (reopens issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a>).<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java<br />
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
				(0001277)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-03 10:55&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v1.2-rc3.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=548 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:17 GMT -->
</html>
