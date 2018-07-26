<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=753 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:38 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:15 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000243: User attached to several OrgUnit - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pageb424.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D753">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:27 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #243</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_pagedabc.html?bug_id=243">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view0445.html?id=243">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000243: User attached to several OrgUnit</td>
</tr>

<tr class="spacer"><td><a name="r753"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2016-01-06 16:49 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">This behavior is useful for example to let a user be attached to a Country with a lot of rights, and to the global organization (to the HQ then) with less rights.<br />
With this configuration, a user would be able to all full writing privileges on the projects of the country he's working in, but only reading privileges to non-confidential information for projects of other countries.<br />
<br />
This feature is also useful for the offline mode: it will reduce the number of visible orgunits in offline mode, since only the main organisational unit of the user and all the children orgunit of it will be visible while offline.</td>
</tr>

	<tr class="spacer"><td><a name="r752"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-05-04 09:01 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">This behavior is useful for example to let a user be attached to a Country with a lot of rights, and to the global organization (to the HQ then) with less rights.<br />
With this configuration, a user would be able to all full writing privileges on the projects of the country he's working in, but only reading privileges to non-confidential information for projects of other countries.</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=753 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:38 GMT -->
</html>
