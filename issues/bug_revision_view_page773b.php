<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=481 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:32 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:10 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000620: Project Team sub-tab - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page50a7.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D481">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:27 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #620</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page2aeb.html?bug_id=620">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view61ac.html?id=620">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000620: Project Team sub-tab</td>
</tr>

<tr class="spacer"><td><a name="r481"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-09-01 13:19 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Project team roles<br />
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
&#160;By default, the profile will be applied on &quot;all organisational units&quot; and &quot;all projects&quot;. Through 2 drop-down lists &quot;Organisational unit&quot;, &quot;Project role&quot; prefixed respectively with a label &quot;only on the following organisational unit and all its children&quot; and &quot;only for project the user is&quot;</td>
</tr>

	<tr class="spacer"><td><a name="r480"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-09-01 13:19 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Project team roles<br />
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
</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=481 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:33 GMT -->
</html>
