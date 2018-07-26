<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=457 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:57 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:39:25 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000167: Project core versions (amendments) - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page8fcd.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D457">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:39 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
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

<tr class="spacer"><td><a name="r457"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2014-05-18 12:21 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Other aspects to take in mind while developing  this feature:<br />
- A new option will be available when setting up a checkbox field in a project model : &quot;Linked to a project core version&quot;: this checkbox will enable to force to create project core version in a phase (for example: to create a project core version in a &quot;Design&quot; phase)<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable). And this implementation should take into consideration implementation of issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> (Flexible budget field).<br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. <br />
- A revert to an old version mechanism is also requested by the users as a secondary priority. This revert mechanism could also be thought to develop a revert mechanism for all common fields having a revision history.<br />
<br />
<br />
<b>Detailed design document available at <a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing">https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing</a> [<a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing" target="_blank">^</a>]</b><br />
<br />
<b>Online mockup:</b> some mockups will hyperlinks between the screens are available at <a href="mockups/ProjectCoreVersions/index.html">http://www.sigmah.org/issues/mockups/ProjectCoreVersions/</a> [<a href="mockups/ProjectCoreVersions/index.html" target="_blank">^</a>]</td>
</tr>

	<tr class="spacer"><td><a name="r433"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-10-04 12:43 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Other aspects to take in mind while developing  this feature:<br />
- A new option will be available when setting up a checkbox field in a project model : &quot;Linked to a project core version&quot;: this checkbox will enable to force to create project core version in a phase (for example: to create a project core version in a &quot;Design&quot; phase)<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable). And this implementation should take into consideration implementation of issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> (Flexible budget field).<br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. <br />
- A revert to an old version mechanism is also requested by the users as a secondary priority. This revert mechanism could also be thought to develop a revert mechanism for all common fields having a revision history.<br />
<br />
<br />
<b>Detailed design document available at <a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing">https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing</a> [<a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing" target="_blank">^</a>]</b></td>
</tr>

	<tr class="spacer"><td><a name="r408"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-07-04 17:26 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Other aspects to take in mind while developing  this feature:<br />
- A new option will be available when setting up a checkbox field in a project model : &quot;Linked to a project core version&quot;: this checkbox will enable to force to create project core version in a phase (for example: to create a project core version in a &quot;Design&quot; phase)<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable). And this implementation should take into consideration implementation of issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> (Flexible budget field).<br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. <br />
- A revert to an old version mechanism is also requested by the users as a secondary priority. This revert mechanism could also be thought to develop a revert mechanism for all common fields having a revision history.</td>
</tr>

	<tr class="spacer"><td><a name="r394"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-06-11 16:12 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Other aspects to take in mind while developing  this feature:<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable). And this implementation should take into consideration implementation of issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> (Flexible budget field).<br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. </td>
</tr>

	<tr class="spacer"><td><a name="r393"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-06-11 16:07 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Other aspects to take in mind while developing  this feature:<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable) <br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. </td>
</tr>

	<tr class="spacer"><td><a name="r322"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2013-02-25 13:31 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3"></td>
</tr>

	<tr class="spacer"><td><a name="r73"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-05-20 12:13 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">The link &quot;New version&quot; should be available whatever the status of the version. This link should always be the last one in the list of available actions.</td>
</tr>

	<tr class="spacer"><td><a name="r72"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2011-05-20 12:00 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3"></td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=457 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:58 GMT -->
</html>
