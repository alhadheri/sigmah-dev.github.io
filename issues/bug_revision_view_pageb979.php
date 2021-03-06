<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=321 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:55 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:39:18 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000167: Project core versions (amendments) - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page2d03.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D321">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:39 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #167</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page0221.html?bug_id=167">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view03ea.html?id=167">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000167: Project core versions (amendments)</td>
</tr>

<tr class="spacer"><td><a name="r407"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-07-04 17:26 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Amendments should be renamed &quot;Project core version&quot;.<br />
<br />
Project core versions are a way to keep track of modifications of the core logic of intervention of the project.<br />
The core logic of intervention consists of:<br />
- the logical framework<br />
- all indicators attached to the logical framework (all their characteristics (name, target value...) except their value)<br />
- start and end dates of the project<br />
- planned budget field (or more precisely the budget sub-field used as ratio basis for budget progress computation)<br />
- any indicator set as &quot;part of the core logic of intervention&quot; of the project<br />
- any activity set as &quot;part of the core logic of intervention&quot; of the project<br />
- any field set as &quot;part of the core logic of intervention&quot; of the project in the model<br />
<br />
<b>Project core versions visualization</b><br />
In the top right corner project page (on the right of the banner), a box is set to manipulate Project core versions.<br />
A drop-down list will allow to set under which Project core versions should the project be seen (by default, the project will be seen as in the last version).<br />
In the drop-down list, all the available Project core versions will be listed like:<br />
n°0 - 01/12/2012 - Initial version<br />
n°1 - 14/01/2013 - Revision of the number of beneficiaries<br />
n°2 - open version<br />
<br />
On the right of this drop-down list, a button &quot;Display&quot; is available to change the project and show it with the value of all content of the logic of the project as freezed in the selected Project core version.<br />
Below the drop-down list, a button &quot;See version summary&quot; will open a popup which will list all the modifcations between the selected version and its previous version. In this popup the version of project core used as reference for comparison can be selected among all the previous versions to the one selected initially.<br />
Below this last drop-down list, a textfield &quot;Project core version title&quot; will be available to update the selected version title.<br />
The graphical design of this box should be revised to reply to the needs expressed by this draft graphical design.<br />
<br />
Each information which has been modified since the initial version will be highlighted through a small mark (an exclamation mark?) to inform the user that some changes have been made on it in a Project core version . By clicking on this small mark, a popup will open listing all the modifications made in each of the Project core version (with the number, date and title of the modification).<br />
<br />
If it is a past version which has been selected, when the user will navigate inside the project, he will see for each modified information the information as set in the version, as well as the present version (in a different color?) for comparison. Of course, the small mark will also available to see all the Project core versions made on this information.<br />
<br />
<b>Modifications workflow</b><br />
When a project is created, the version #0 is open for modification.<br />
A user with the required global privilege can lock a Project core version so that all information linked to it are no more open to modification.<br />
When a Project core version is locked, it can be validated by a user having another required global privilege, or unlocked by a user having the &quot;Lock Modification&quot; global privilege.<br />
When a user validates a Project core version, the user enters a title for the versiona, and optionnally a comment.<br />
When the last Project core version is validated and a user try to modify an information of the Project core, he will get a popup informing him:<br />
- if this user has the &quot;Create new Project core version&quot; global privilege: &quot;By modifying this information, you will create a new Project Core version. Do you want to continue?&quot;<br />
- if this user doesn't have this global privilege: &quot;This information is part of the Project core, and the current version of the project core is not open for modification. Ask someone with the required privilege to open the project core for modification&quot;. &lt;= this message will also be displayed if the project core version is locked.<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r326"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-26 15:28 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Amendments should be renamed &quot;Project core version&quot;.<br />
<br />
Project core versions are a way to keep track of modifications of the core logic of intervention of the project.<br />
The logic of intervention consists of:<br />
- the logical framework<br />
- all indicators attached to the logical framework (all their characteristics (name, target value...) except their value)<br />
- start and end dates of the project<br />
- planned budget field (or more precisely the budget sub-field used as ratio basis for budget progress computation)<br />
- any indicator set as &quot;part of the core logic of intervention&quot; of the project<br />
- any activity set as &quot;part of the core logic of intervention&quot; of the project<br />
- any field set as &quot;part of the core logic of intervention&quot; of the project in the model<br />
<br />
<b>Project core versions visualization</b><br />
In the top right corner project page (on the right of the banner), a box is set to manipulate Project core versions.<br />
A drop-down list will allow to set under which Project core versions should the project be seen (by default, the project will be seen as in the last version).<br />
In the drop-down list, all the available Project core versions will be listed like:<br />
n°0 - 01/12/2012 - Initial version<br />
n°1 - 14/01/2013 - Revision of the number of beneficiaries<br />
n°2 - open version<br />
<br />
On the right of this drop-down list, a button &quot;Display&quot; is available to change the project and show it with the value of all content of the logic of the project as freezed in the selected Project core version.<br />
Below the drop-down list, a button &quot;See version summary&quot; will open a popup which will list all the modifcations between the selected version and its previous version. In this popup the version of project core used as reference for comparison can be selected among all the previous versions to the one selected initially.<br />
Below this last drop-down list, a textfield &quot;Project core version title&quot; will be available to update the selected version title.<br />
The graphical design of this box should be revised to reply to the needs expressed by this draft graphical design.<br />
<br />
Each information which has been modified since the initial version will be highlighted through a small mark (an exclamation mark?) to inform the user that some changes have been made on it in a Project core version . By clicking on this small mark, a popup will open listing all the modifications made in each of the Project core version (with the number, date and title of the modification).<br />
<br />
If it is a past version which has been selected, when the user will navigate inside the project, he will see for each modified information the information as set in the version, as well as the present version (in a different color?) for comparison. Of course, the small mark will also available to see all the Project core versions made on this information.<br />
<br />
<b>Modifications workflow</b><br />
When a project is created, the version #0 is open for modification.<br />
A user with the required global privilege can lock a Project core version so that all information linked to it are no more open to modification.<br />
When a Project core version is locked, it can be validated by a user having another required global privilege, or unlocked by a user having the &quot;Lock Modification&quot; global privilege.<br />
When a user validates a Project core version, the user can enter a title for the version.<br />
When the last Project core version is validated and a user try to modify an information of the Project core, he will get a popup informing him:<br />
- if this user has the &quot;Create new Project core version&quot; global privilege: &quot;By modifying this information, you will create a new Project Core version. Do you want to continue?&quot;<br />
- if this user doesn't have this global privilege: &quot;This information is part of the Project core, and the current version of the project core is not open for modification. Ask someone with the required privilege to open the project core for modification&quot;. &lt;= this message will also be displayed if the project core version is locked.<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r321"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-25 13:31 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">Amendments should be renamed &quot;Project core version&quot;.<br />
<br />
Project core versions are a way to keep track of modifications of the core logic of intervention of the project.<br />
The logic of intervention consists of:<br />
- the logical framework<br />
- all indicators attached to the logical framework (all their characteristics (name, target value...) except their value)<br />
- start and end dates of the project<br />
- planned budget field (or more precisely the budget sub-field used as ratio basis for budget progress computation)<br />
- any indicator set as &quot;part of the core logic of intervention&quot; of the project<br />
- any activity set as &quot;part of the core logic of intervention&quot; of the project<br />
- any field set as &quot;part of the core logic of intervention&quot; of the project in the model<br />
<br />
<b>Project core versions visualization</b><br />
In the top right corner project page (on the right of the banner), a box is set to manipulate Project core versions.<br />
A drop-down list will allow to set under which Project core versions should the project be seen (by default, the project will be seen as in the last version).<br />
In the drop-down list, all the available Project core versions will be listed like:<br />
#0 - 01/12/2012 - Initial version<br />
<a href="view681a.html?id=1" title="[closed] Crash when trying to access activityinfo's setup page" class="resolved">0000001</a> - 14/01/2013 - Revision of the number of beneficiaries<br />
<a href="view0b30.html?id=2" title="[new] Large Admin synchronization regions need to be batched">0000002</a> - open version<br />
<br />
On the right of this drop-down list, a button &quot;Display&quot; is available to change the project and show it with the value of all content of the logic of the project as freezed in the selected Project core version.<br />
Below the drop-down list, a button &quot;See version summary&quot; will open a popup which will list all the modifcations between the selected version and its previous version. In this popup the version of project core used as reference for comparison can be selected among all the previous versions to the one selected initially.<br />
Below this last drop-down list, a textfield &quot;Project core version title&quot; will be available to update the selected version title.<br />
The graphical design of this box should be revised to reply to the needs expressed by this draft graphical design.<br />
<br />
Each information which has been modified since the initial version will be highlighted through a small mark (an exclamation mark?) to inform the user that some changes have been made on it in a Project core version . By clicking on this small mark, a popup will open listing all the modifications made in each of the Project core version (with the number, date and title of the modification).<br />
<br />
If it is a past version which has been selected, when the user will navigate inside the project, he will see for each modified information the information as set in the version, as well as the present version (in a different color?) for comparison. Of course, the small mark will also available to see all the Project core versions made on this information.<br />
<br />
<b>Modifications workflow</b><br />
When a project is created, the version #0 is open for modification.<br />
A user with the required global privilege can lock a Project core version so that all information linked to it are no more open to modification.<br />
When a Project core version is locked, it can be validated by a user having another required global privilege, or unlocked by a user having the &quot;Lock Modification&quot; global privilege.<br />
When a user validates a Project core version, the user can enter a title for the version.<br />
When the last Project core version is validated and a user try to modify an information of the Project core, he will get a popup informing him:<br />
- if this user has the &quot;Create new Project core version&quot; global privilege: &quot;By modifying this information, you will create a new Project Core version. Do you want to continue?&quot;<br />
- if this user doesn't have this global privilege: &quot;This information is part of the Project core, and the current version of the project core is not open for modification. Ask someone with the required privilege to open the project core for modification&quot;. &lt;= this message will also be displayed if the project core version is locked.<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r86"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-05-24 10:00 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">When presented in details to the final users, the amendments system has been considered by them as not representing fully their expectations. It should be revised as follows:<br />
<br />
Terminology:<br />
------------<br />
The title of the block should remain &quot;Amendments&quot;<br />
Elsewhere, the word &quot;amendment&quot; should be replaced by &quot;version&quot;.<br />
<br />
Version status graph:<br />
---------------------<br />
First version is 1, and this version is in status &quot;draft&quot;<br />
_If version 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, or on &quot;Validate version&quot; to put version in status &quot;Validated&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
_If version &gt; 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, on &quot;Validate version&quot; to put version in status &quot;Validated&quot; (and put previous validated version in status &quot;Archived&quot;) or on &quot;Reject version&quot; to put version in status &quot;Rejected&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
<br />
Version presentation<br />
--------------------<br />
There is only one version &quot;Validated&quot; at one time.<br />
This version is shown be default when loading a project.<br />
The status of the versions are displayed with the version name in the version drop-down list like this:<br />
Version 1 - Archived - 02/14/2011<br />
Version 2 - Rejected - 02/27/2011<br />
Version 3 - Validated - 03/13/2011<br />
Version 4 - Draft<br />
Version 5 - Locked - 05/25/2011<br />
<br />
Other rule<br />
----------<br />
When a non-validated version is displayed, the fields and sub-tabs which are not managed with amendments should be disabled (not possible to modify them)<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r71"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-05-20 12:00 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">When presented in details to the final users, the amendments system has been considered by them as not representing fully their expectations. It should be revised as follows:<br />
<br />
Terminology:<br />
------------<br />
The title of the block should remain &quot;Amendments&quot;<br />
Elsewhere, the word &quot;amendment&quot; should be replaced by &quot;version&quot;.<br />
<br />
Version status graph:<br />
---------------------<br />
First version is 1, and this version is in status &quot;draft&quot;<br />
_If version 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, or on &quot;Validate version&quot; to put version in status &quot;Validated&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
_If version &gt; 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, on &quot;Validate version&quot; to put version in status &quot;Validated&quot; (and put previous validated version in status &quot;Archived&quot;) or on &quot;Reject version&quot; to put version in status &quot;Rejected&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
<br />
Version presentation<br />
--------------------<br />
There is only one version &quot;Validated&quot; at one time.<br />
This version is shown be default when loading a project.<br />
The status of the versions are displayed with the version name in the version drop-down list like this:<br />
Version 1 - Archived<br />
Version 2 - Rejected<br />
Version 3 - Validated<br />
Version 4 - Draft<br />
Version 5 - Locked<br />
<br />
Other rule<br />
----------<br />
When a non-validated version is displayed, the fields and sub-tabs which are not managed with amendments should be disabled (not possible to modify them)<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r70"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-04-28 15:10 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">When presented in details to the final users, the amendments system has been considered by them as not representing fully their expectations. It should be revised as follows:<br />
<br />
Terminology:<br />
------------<br />
The title of the block should remain &quot;Amendments&quot;<br />
Elsewhere, the word &quot;amendment&quot; should be replaced by &quot;version&quot;.<br />
<br />
Version status graph:<br />
---------------------<br />
First version is 1, and this version is in status &quot;draft&quot;<br />
_If version 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, or on &quot;Validate version&quot; to put version in status &quot;Validated&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
_If version &gt; 1_<br />
if status = draft, user can click on &quot;Lock version&quot; to put version in &quot;locked&quot;<br />
if status = locked, user can click on &quot;Unlock version&quot; to put version in &quot;draft&quot;, on &quot;Validate version&quot; to put version in status &quot;Validated&quot; (and put previous validated version in status &quot;Archived&quot;) or on &quot;Reject version&quot; to put version in status &quot;Rejected&quot;<br />
if status = validated, user can click on &quot;New version&quot; to create a new version<br />
<br />
Version presentation<br />
--------------------<br />
There is only one version &quot;Validated&quot; at one time.<br />
This version is shown be default when loading a project.<br />
The status of the versions are displayed with the version name in the version drop-down list like this:<br />
Version 1 - Archived<br />
Version 2 - Rejected<br />
Version 3 - Validated<br />
Version 4 - Draft<br />
<br />
Other rule<br />
----------<br />
When a non-validated version is displayed, the fields and sub-tabs which are not managed with amendments should be disabled (not possible to modify them)<br />
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

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=321 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:55 GMT -->
</html>
