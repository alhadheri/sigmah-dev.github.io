<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=741 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:43 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:23 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000741: Incoherent &quot;Edit own reminders&quot; privilege presentation - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000741</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2015-05-04 12:18</td><td class="print">2015-06-24 10:56</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">minor</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000741: Incoherent &quot;Edit own reminders&quot; privilege presentation</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On v2.0-rc1, the &quot;Edit own reminders&quot; (and its dependent bigger version &quot;Edit all reminders&quot;) privilege is presented has part of the group &quot;Others&quot; in the Manage users screen &quot;Edit profile popup.<br />
But the implementation makes the edition of reminders only possible for users having the &quot;Edit project&quot; global privilege.<br />
<br />
So the presentation of the privilege is not coherent with its implementation.<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Two solutions are proposed:<br />
<br />
1. Revise the implementation of the privilege so that a user can edit reminders even if he doesn't have the &quot;Edit project&quot; global privilege. (which is actually a conscious modification of the initially expected behavior)<br />
In this case, the edit reminders privileges (&quot;Edit own reminders&quot; and below &quot;Edit all reminders&quot;) should be moved below &quot;View project&quot; in Edit profile popup.<br />
<br />
2. Only moved the edit reminders privileges (&quot;Edit own reminders&quot; and below &quot;Edit all reminders&quot;) below &quot;Edit project&quot; in Edit profile popup.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2015-05-04 12:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-05-04 12:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-05-04 12:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-06-17 18:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 7b154cc0</td></tr><tr class="print"><td class="print">2015-06-17 18:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Note Added: 0001813</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-17 18:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-06-17 18:00</td><td class="print"><a href="view_user_pagec3c9.html?id=8">anonymous</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-06-24 08:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001851</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-24 08:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; assigned</td></tr><tr class="print"><td class="print">2015-06-24 08:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">fixed =&gt; reopened</td></tr><tr class="print"><td class="print">2015-06-24 09:47</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Added: 0001856</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-24 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Edited: 0001856</td><td class="print">bug_revision_view_page.php?rev_id=700</td></tr><tr class="print"><td class="print">2015-06-24 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Deleted: 0001856</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-24 10:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001859</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-24 10:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-06-24 10:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">reopened =&gt; fixed</td></tr><tr class="print"><td class="print">2015-06-24 10:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001813)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagec3c9.html?id=8">anonymous</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-17 18:00&#160;&#160;&#160;
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
				(0001851)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-24 08:55&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue reopened because fix is only partial. A user can now edit reminders even if he has the &quot;Edit own/Edit all reminders&quot; privilege, but he won't be able to see them in the Management board if he doesn't have the &quot;Edit field content&quot; privilege.<br />
<br />
Reminders should be visible to all users able to view the agenda.			</td>
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
				(0001859)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-06-24 10:56&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc5.<br />
<br />
Issue <a href="view850d.html?id=796" title="[closed] Reminders invisible without &quot;Edit fields&quot; privilege even if  having &quot;Edit reminders&quot;" class="resolved">0000796</a> created because remaining part of &quot;solution 1&quot; feature developed to gix this issue <a href="viewebab.html?id=741" title="[closed] Incoherent &quot;Edit own reminders&quot; privilege presentation" class="resolved">0000741</a> remained to be developed.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=741 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:43 GMT -->
</html>
