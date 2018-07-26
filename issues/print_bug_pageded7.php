<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=616 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:31 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:04 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000616: Reorganize administration global privileges - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000616</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2014-03-13 10:56</td><td class="print">2015-07-08 17:02</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/682#comment-347">http://www.sigmah.org/node/682#comment-347</a> [<a href="http://www.sigmah.org/node/682#comment-347" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000616: Reorganize administration global privileges</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Current administration global privileges are a bit messy:<br />
- &quot;View administration&quot; gives full privilege on the whole administration<br />
- &quot;Edit organisational units&quot; gives the right to modify the content of created orgunits<br />
- &quot;Manage users&quot; should grant &quot;authorisation to enter and modify user information&quot;, but has actually no effect<br />
<br />
And there is no solution to grant to some users only the right to manage orgunits (creation, etc.).<br />
<br />
As a consequence, and according to user request (see User Report URL), the new admin privileges should be created/renamed:<br />
- &quot;View Administration&quot; should be renamed &quot;Administration&quot;<br />
- &quot;Manage users&quot; objective should be &quot;Direct access button to the &quot;Users&quot; part of the administration&quot;, this privilege should add a button &quot;Manage Users&quot; in the menu on the Dashboard.<br />
- a new &quot;Manage organisational units&quot; privilege should be created in the same idea of modified &quot;Manage users&quot; privilege.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000625</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td class="print">Create new permission to relate projects&#160;</td></tr><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000507</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td class="print">Modification of locked content&#160;</td></tr><tr><td class="print"><span class="nowrap">has duplicate</span>&#160;</td><td class="print">0000606</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagea9e4.html?id=55">studentblue13</a></span>&#160;</td><td class="print">Reorder the global permission on the profile form&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000574</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td class="print">Indicators still editable for a user having only View Project privilege&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000628</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Mark file as final version (File List field)&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;01.profile_screen.png (39,247) <span class="italic">2014-07-21 20:14</span><br />http://www.sigmah.org/issues/file_download.php?file_id=205&amp;type=bug<br /><img src="file_downloadaa37.php?file_id=205&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02.profile_screen.png (38,612) <span class="italic">2014-07-21 20:14</span><br />http://www.sigmah.org/issues/file_download.php?file_id=206&amp;type=bug<br /><img src="file_downloadb424.php?file_id=206&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/text.html" alt="txt" />&#160;616_patch_v2.txt (80,546) <span class="italic">2014-07-25 04:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=209&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;616_scheme_updates.sql (4,112) <span class="italic">2014-07-25 04:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=210&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-03-13 10:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-01 19:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; renatoaf</td></tr><tr class="print"><td class="print">2014-07-01 19:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-07-04 11:44</td><td class="print"><a href="view_user_page3ebc.html?id=64">somzzz</a></td><td class="print">Note Added: 0001457</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-17 00:46</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001459</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-17 06:04</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Relationship added</td><td class="print">parent of 0000625</td></tr><tr class="print"><td class="print">2014-07-17 08:33</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Relationship added</td><td class="print">related to 0000574</td></tr><tr class="print"><td class="print">2014-07-17 08:57</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Relationship added</td><td class="print">related to 0000628</td></tr><tr class="print"><td class="print">2014-07-17 08:58</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Edited: 0001459</td><td class="print">bug_revision_view_page.php?bugnote_id=1459#r465</td></tr><tr class="print"><td class="print">2014-07-17 10:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001459</td><td class="print">bug_revision_view_page.php?bugnote_id=1459#r466</td></tr><tr class="print"><td class="print">2014-07-17 10:14</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001459</td><td class="print">bug_revision_view_page.php?bugnote_id=1459#r467</td></tr><tr class="print"><td class="print">2014-07-17 10:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001459</td><td class="print">bug_revision_view_page.php?bugnote_id=1459#r468</td></tr><tr class="print"><td class="print">2014-07-17 10:32</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001461</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-17 15:16</td><td class="print"><a href="view_user_page3ebc.html?id=64">somzzz</a></td><td class="print">Note Added: 0001462</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-21 20:14</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 01.profile_screen.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-21 20:14</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02.profile_screen.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-21 20:15</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001465</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 04:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 616_patch_v2.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 04:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 616_scheme_updates.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 04:43</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001467</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-25 09:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001469</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-10 21:57</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Relationship added</td><td class="print">parent of 0000507</td></tr><tr class="print"><td class="print">2014-08-10 22:06</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001490</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-13 15:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 2.0</td></tr><tr class="print"><td class="print">2014-12-10 13:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">has duplicate 0000606</td></tr><tr class="print"><td class="print">2014-12-12 10:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001518</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001590</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">renatoaf =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-04-07 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; assigned</td></tr><tr class="print"><td class="print">2015-04-07 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001591</td><td class="print"></td></tr><tr class="print"><td class="print">2015-07-08 17:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001884</td><td class="print"></td></tr><tr class="print"><td class="print">2015-07-08 17:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr></table>
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
				(0001457)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3ebc.html?id=64">somzzz</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-04 11:44&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi renatoaf,<br />
<br />
An idea for the global permissions:<br />
<br />
Currently, the global permissions are independent one from another. On the profile creation form, each can be selected/ticked without influencing the possiblity to select another permission.<br />
<br />
What if we have a hierarchy of permissions? A user can view a page or edit the content of the page. Editing the page depends on viewing it. Of course, if the page is not displayed at all, no modifications can be made to its content. BUT when handling the profile permissions, an admin can still give the user the permission to edit the page, even though he does not have the permission to view it. This is pointless and not very clear for the user.<br />
<br />
Relationships between permissions could be added: if permission Y and Z depend on permission X, it should not be possible to select either Y or Z without having X already selected for the respective profile. Similarly, if X, Y and Z are all selected, and X is removed, then Y and Z should be automatically removed from the profile permission list.<br />
<br />
In the profile creation form, this could be reflected graphically by disabling the dependant fields when the parent permission field is not selected. <br />
<br />
What is your opinion about this idea? Do you believe it could be implemented as part of this issue?			</td>
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
				(0001459)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-17 00:46&#160;&#160;&#160;
				<br />(edited on:&#32;2014-07-17 10:29)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi somzzz, I like your idea! Yes, I can implement it as part of <a href="view6e0a.html?id=616" title="[closed] Reorganize administration global privileges" class="resolved">0000616</a>. I think it will only impact in the graphic interface. GWT/GXT has plenty of widgets to represent trees (such as <a href="http://examples.roughian.com/index.htm#Widgets~Tree">http://examples.roughian.com/index.htm#Widgets~Tree</a> [<a href="http://examples.roughian.com/index.htm#Widgets~Tree" target="_blank">^</a>]), so the implementation is really straight-forward.<br />
<br />
I've encountered other inconsistencies in the current model. For example, there is a “EDIT AGENDA” permission which is valid for both projects and org units. The same logic applies to “VIEW AGENDA” permission. I believe separated permissions would be more flexible.<br />
<br />
The final hierarchy considering dependencies (as suggested by somzzz), would look like this:<br />
<br />
* Administration-related<br />
<br />
- View administration<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage users<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage org units<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage project models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage org unit models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage report models<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage categories<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage importation schemes<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage settings<br />
<br />
* Organisational unit-related<br />
<br />
- Edit organisational unit fields content(equivalent to the current &quot;manage org unit&quot; permission)<br />
- View organisational unit agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit org unit agenda<br />
<br />
* Project-related<br />
<br />
- Create project<br />
- Create test project<br />
- View projects<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit project fields content<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Delete project<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Change phase<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Lock project core<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Validate project core version<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit own reminders<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit all reminders<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View logframe<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit logframe<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View project agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit project agenda<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- View indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Edit indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage indicators<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Global export<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Relate project (related to <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>)<br />
<br />
* Others<br />
<br />
- Edit own password (related to <a href="view0fbe.html?id=438" title="[closed] Own password modification by user" class="resolved">0000438</a>)<br />
<br />
<br />
I would, of course, create a SQL script to adapt the existing profiles to the new structure. Existing profiles with the old “View Administration” global permission, for example, will have all &quot;Manage ...&quot; privileges, since they can edit the whole administration page in the current version of Sigmah.<br />
<br />
What do you think?<br />
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
				(0001461)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-17 10:32&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I like this idea very much too !<br />
I've edited your organisation of the privileges directly into your comment.			</td>
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
				(0001462)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3ebc.html?id=64">somzzz</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-17 15:16&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				That's great, renatoaf!<br />
<br />
As a comment, my project will add the following branch to the hierarchy you described:<br />
* Project-related<br />
<br />
&#160;- View projects<br />
&#160;&#160;&#160;&#160;&#160;- View MapTab<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage sites (create/edit/delete)<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Manage main site<br />
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;- Export HXL			</td>
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
				(0001465)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-21 20:15&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Great! I'm working on it.<br />
I've attached some pictures of the new add/edit profile screen.<br />
As soon as I finish adjusting the code to the new permissions, I'll send a patch.			</td>
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
				(0001467)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-25 04:43&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				The files:<br />
- 616_patch_v2.txt<br />
- 616_scheme_updates.sql<br />
<br />
Address both issues <a href="view6e0a.html?id=616" title="[closed] Reorganize administration global privileges" class="resolved">0000616</a> and <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>.<br />
<br />
This SQL file does not make any schema changes, it only makes sure that every existing profile will keep the same privileges they have with the current permission organization.			</td>
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
				(0001469)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-25 09:51&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for this patch! I will let tmiette review it when he will be available.<br />
Regarding schema update, we keep them all centralized on a wiki page, and don't include them as SQL file on the issue. I let you go through this information to know more about this: <a href="https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model">https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model</a> [<a href="https://code.google.com/p/sigma-h/wiki/SchemaChangeLog#Remarks_for_developers_in_need_to_change_the_database_model" target="_blank">^</a>]<br />
Best !			</td>
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
				(0001490)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-08-10 22:06&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I've merged all my GSoC work into a single patch to simplify the synchronization, so please ignore this patch. I'll update the wiki page with the SQL modifications.			</td>
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
				(0001518)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-12-12 10:22&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.			</td>
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
				(0001590)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 16:07&#160;&#160;&#160;
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
				(0001591)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 16:12&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Some little modifications to finalize this very useful reorganisation of global privileges :<br />
- &quot;Edit own reminders&quot; (and below &quot;Edit all reminders&quot;) should be below &quot;View project&quot;<br />
- &quot;Lock project&quot; (which will be renamed &quot;Lock project core&quot; by the translators) should be below &quot;Edit project&quot;<br />
- &quot;Export HXL&quot; could be hidden because not active yet<br />
- &quot;View project map&quot; could be directly below &quot;View project&quot;			</td>
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
				(0001884)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-07-08 17:02&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because acceptable behavior checked on v2.0-rc6, even if slightly different from last expectations in last note.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=616 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:04:31 GMT -->
</html>
