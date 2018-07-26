<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=313 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:03 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:26 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000386: Flexible budget field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page59e9.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D313">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:34 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #386</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page8588.html?bug_id=386">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="viewd08d.html?id=386">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000386: Flexible budget field</td>
</tr>

<tr class="spacer"><td><a name="r409"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-07-05 15:19 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">The definition of how much is now spent on a project varies strongly according to the needs of the person requesting this data.<br />
<br />
To satisfy those various needs, the budget field should be much more flexible:<br />
- by default, when creating a project/orgunit model, the budget field will contain 4 components<br />
* 3 fields: &quot;spend budget&quot;, &quot;received budget&quot;, &quot;planned budget&quot;<br />
* a ratio formula between 2 of those fields set by default : &quot;spend budget/ &quot;planned budget&quot;<br />
- more fields can be set freely<br />
- the ratio formula can be set freely between any pair of budget sub-fields<br />
- the label of the fields can be changed freely<br />
<br />
In the budget progress bar, the percentage available to be seen as a tooltip should include the explanation of the calculation. Example: &quot;44% (spend budget/planned budget)&quot;, &quot;59% (end project spend budget/planned budget)&quot;.<br />
<br />
Finally, the export to Excel features (both Global export and Project synthesis) should be revised to take into account this new flexibility on budget.</td>
</tr>

	<tr class="spacer"><td><a name="r313"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-25 13:02 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">The definition of how much is now spent on a project varies strongly according to the needs of the person requesting this data.<br />
<br />
To satisfy those various needs, the budget field should be much more flexible:<br />
- by default, when creating a project/orgunit model, the budget field will contain 4 components<br />
* 3 fields: &quot;spend budget&quot;, &quot;received budget&quot;, &quot;planned budget&quot;<br />
* a ratio formula between 2 of those fields set by default : &quot;spend budget/ &quot;planned budget&quot;<br />
- more fields can be set freely<br />
- the ratio formula can be set freely between any pair of budget sub-fields<br />
- the label of the fields can be changed freely<br />
<br />
Finally, in the budget progress bar, the percentage available to be seen as a tooltip should include the explanation of the calculation. Example: &quot;44% of planned budget&quot;, &quot;59% of acquired budget&quot;.</td>
</tr>

	<tr class="spacer"><td><a name="r312"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-09-28 12:18 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Description</td>
<td colspan="3">The definition of how much is now spent on a project varies strongly according to the needs of the person requesting this data.<br />
<br />
To satisfy those various needs, it should be possible to have several spent budget fields inside the budget field. In the definition of a project model, a user should be able to configure the budget field with the following options:<br />
- enabling to have multiple spent budget fields<br />
- creating, ordering and naming as much spent budget fields as desired (note: no font or size adjustement of the text of the name of the field is allowed)<br />
- assigning each separate budget field to a privacy group (this rule is valid for all the budget fields: planned, received and all the spent ones)<br />
- if multiple spent budget fields option is enabled, choose which field among the one created will be the one used for calculations representing the project as a whole (in the dashboard for example)<br />
<br />
Graphically, if the option multiple spent budget fields is enabled :<br />
- the new spent budget fields should appear below the two first budget fields (planned and received), in italic, and with an indent<br />
- the old main spent budget becomes disabled, just displaying the content of the spent budget field chosen as source for the main one, and with on the right of it in brackets the full name of the spent budget field chosen as source.<br />
As an example :<br />
Planned budget  [_____]<br />
Received budget [_____]<br />
&#160;&#160;&#160;Field validated spent budget [_____]<br />
&#160;&#160;&#160;HQ validated spent budget [_____]<br />
Spent budget    _____ (HQ validated spent budget)</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=313 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:03 GMT -->
</html>
