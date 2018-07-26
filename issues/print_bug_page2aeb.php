<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=620 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:32 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:08 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000620: Project Team sub-tab - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000620</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2014-05-14 10:50</td><td class="print">2016-10-07 18:42</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">aponcon</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.2</td><td class="print-category">Fixed in Version</td><td class="print">2.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000620: Project Team sub-tab</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Some users would like to get quick access to their projects, or to see only those ones, and not get confused with all projects available.<br />
Some other would like to get notified each time anything happened in one of their project.<br />
<br />
A project &quot;Team&quot; sub-tab could be added to assign project to all users which are members of the project team.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Project team roles<br />
------------------<br />
In the &quot;Users&quot; part of the administration, a new group of items can be managed: &quot;Project roles&quot;. This group is filled by default with the two roles which already exist between a project and users: &quot;project author&quot;, and &quot;project manager&quot;. <br />
Each role has the following attributes:<br />
- title (must be given in each of the language available in the user interface)<br />
- unique role per project? (a checkbox informing if the role can be granted to only one user per project)<br />
- can this role assign roles to other users?<br />
The two default roles are uniques per project, can assign roles to other. They cannot be deleted and can only be renamed.<br />
<br />
Project &quot;Team&quot; sub-tab<br />
----------------------<br />
In the project &quot;Team&quot; sub-tab, all users having the right to assign roles to others in this project can add or remove users in the list. Each time a new user is added, a role must be assigned to him.<br />
The &quot;project author&quot; cannot be changed.<br />
<br />
<br />
Profile management in Administration<br />
------------------------------------<br />
When modifiying a user in the &quot;Users&quot; part of the administration, the profile management is changed because profile application on a user can vary now according to 2 parameters: the orgunit, and the role the user has on a project.<br />
When attaching a profile to a user, the admin can now reduce the scope of application of the profil on the user. The admin can assign several profiles for a user.<br />
The GUI will be the following:<br />
- 1rst row: a label &quot;Profiles and privileges&quot; with a button &quot;Add another profile&quot;<br />
- 2nd row: a drop-down list with filled with all available profiles followed with a label &quot;only on the following organisational unit&quot;, followed by a second drop-down list filled with all available orgunits starting with an item &quot;all organisational units&quot;, followed by a label &quot;and only for projects the user is&quot;, followed finally by a third drop-down list filled all project roles starting with 3 items &quot;anyone&quot;/&quot;a member of the team&quot;/&quot;not a member of the team&quot;<br />
Example: &quot;[Desk] only on the following organisational unit [South Asia] and only for projects the user is [anyone]&quot;.<br />
- 3rd row and following: like 2nd row with the admin clicks on the &quot;Add another profile&quot; button.<br />
<br />
&#160;By default, the profile will be applied on &quot;all organisational units&quot; and &quot;all projects&quot;. Through 2 drop-down lists &quot;Organisational unit&quot;, &quot;Project role&quot; prefixed respectively with a label &quot;only on the following organisational unit and all its children&quot; and &quot;only for project the user is&quot;</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000243</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pageea25.html?id=24">aponcon</a></span>&#160;</td><td class="print">User attached to several OrgUnit&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/pdf.html" alt="pdf" />&#160;Equipe projet - 620.pdf (46,983) <span class="italic">2016-07-07 12:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=314&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-05-14 10:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-09-01 13:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001499</td><td class="print"></td></tr><tr class="print"><td class="print">2014-09-01 13:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=481#r481</td></tr><tr class="print"><td class="print">2014-09-01 14:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000243</td></tr><tr class="print"><td class="print">2016-01-19 17:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; aponcon</td></tr><tr class="print"><td class="print">2016-01-19 17:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2016-01-19 17:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 2.2</td></tr><tr class="print"><td class="print">2016-07-07 12:35</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: Equipe projet - 620.pdf</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-07 18:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002124</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-07 18:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2016-10-07 18:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2016-10-07 18:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.2</td></tr></table>
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
				(0001499)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-09-01 13:19&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added profile to project role management in the admin.			</td>
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
				(0002124)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-10-07 18:42&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.2-rc1.<br />
<br />
Congrats !			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=620 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:32 GMT -->
</html>
