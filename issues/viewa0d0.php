<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=530&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:06 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:45 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000530: New type of orgunit/project field: computation field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page670d.html?return=%2Fissues%2Fview.php%3Fid%3D530%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:27 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewa0d0.php?id=530&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page3b15.php?bug_id=530">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000530</td><td>sigmah</td><td>Administration</td><td>public</td><td>2013-02-25 15:08</td><td>2016-02-12 20:27</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.1</td><td class="category">Fixed in Version</td><td>2.1</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000530: New type of orgunit/project field: computation field</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">A new type of field should be added in project/orgunit model: computation field. This field is similar to the organizational unit aggregation field but will aggregate information only on decimal or integer fields of the same orgunit/project model. Computation operations requested: sum, ratio, difference, multiplication. Computation can be done on more than 2 fields of the same model.<br />
Finally, it should be possible to set optionally a minimum and a maximum limit for the value of the computation field: when trying to save a modification of the fields which are used to compute the value of the computation field makes this value get out of the limits, a warning message informs the user that &quot;Your latest modification on field(s) FIELD1, FIELD2, [List of fields modified and part of the computation] cannot be saved because it makes the computed value of NAME_OF_THE_COMPUTATION_FIELD [below/greater] than EXCEEDED_LIMIT.&quot;.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">The detailed behavior of the feature has been imagined as follows :<br />
A. Modifications in the server database schema:<br />
To make this feature work, the following modifications will be made on the server database schema:<br />
- computation field will be a new kind of &quot;flexible element&quot;, which will store two informations: its latest computed value, and in a text format the formula used for computation with fields part of computation represented as &quot;$ID_OF_FIELD&quot; ($2460, $13986, etc.)<br />
- a new characteristic of field is added, the &quot;field code&quot; which will be used in computation fields formulas<br />
- fields part of computation are flagged differently and associated to the computation field they are part of<br />
<br />
B. Administration area<br />
- Since computation field will in this first version only work for Number field, it has been decided to move as main field &quot;Type&quot; the various different text field sub-types: &quot;Text field&quot;, &quot;Paragraph&quot;, &quot;Number&quot; and &quot;Date&quot;.<br />
- In the &quot;Specific properties&quot; area of the Field popup for field of type &quot;Number&quot;, a new field &quot;Field code&quot; will give the possibility to edit the default code given to the field. Each field has by default a field code in the format &quot;field001&quot;, &quot;field045&quot;, etc. The numbering of this default field codes is done from the first created fields in the model.<br />
- When creating or editing the computation field in a project/orgunit model, a formula must be entered using the field codes to represent the fields. The list of all fields of the model is available to help the administrator to identify and get the codes of the fields he wants to use, and this list is editable on the field code through a popup. When saving the modifications of the computation field, the system checks that the entered formula is valid and that all field codes used match the most up-to-date field codes in database. Currently, it won't be accepted to make computation field using other computation fields.<br />
- When deleting or disabling a field part of a computation in a project/orgunit model, a warning message will inform the administrator that : &quot;The field you want to disable/delete is used in computation field(s) NAME_OF_THE_COMPUTATION_FIELD[, list of computation fields where the field is used]. If you disable/delete it without modifying the formula of those computation field(s), the computed values might be aberrant. Are you sure you want to continue?&quot;<br />
<br />
C. For the end-user<br />
- When editing a field part of the computation, the computed value is changed (without controlling the optional limits) when the edition of the field is ended so that the user can be informed of the computed value.<br />
- When saving ONLINE a modification of one or several fields part of the computation, the server computes the new aggregated value based on the latest values stored in the server database and the modifications made by the user : if there is a limit and if this limit is exceeded, the modification made by the user is rejected and he gets a detailed warning message informing him that &quot;Your latest modification on fields FIELD1, FIELD2, [List of fields modified and part of the computation] cannot be saved because it makes the computed value of NAME_OF_THE_COMPUTATION_FIELD [below/greater] than EXCEEDED_LIMIT. For your information, here are the latest values of all fields used to compute NAME_OF_THE_COMPUTATION_FIELD: [list of fields' values with this template: ' - TITLE_OF_THE_FIELD: VALUE_OF_THE_FIELD (by AUTHOR_OF_LATEST_MODIFICATION on DATETIME_OF_LATEST_MODIFICATION)']&quot;<br />
- When saving OFFLINE a modification of one or several fields part of the computation, the software on the client-side computes the new aggregated value based on the latest values stored in its offline data base and save always anyway the modification but if a limit is exceeded returns as well the following message: &quot;According the values collected at different times in your offline data base, your latest modification on field(s) FIELD1, FIELD2, [List of fields modified and part of the computation] would make the computed value of NAME_OF_THE_COMPUTATION_FIELD [below/greater] than EXCEEDED_LIMIT. When you will synchronize your offline data base with the server, this modification might then be rejected if it makes the value computed with the other server-side values exceed a limit.&quot;<br />
- When synchronizing an offline data base with modification of a field part of a computation, control of the aggregated value will be made and the modification might be rejected as if the edition was made online and rejection can join the final synchronization feedback and email.<br />
<br />
<br />
IN THE FUTURE<br />
In an extended version of this feature, budget and dates will be able also to be taken into account, and a constant could be added as part of the computation (and for dates, it can be either a specific date or today), or global variables (like total amount of funding from all sources of funding, total funded from all funded projects).<br />
The extended version of this feature which will take into account budget will then be an opportunity for the revision of the budget field which will become a default computation field.<br />
</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page629a.php?tag_id=3' title=''>Minimum complete data processing capabilities</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloade986.php?file_id=295&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloade986.php?file_id=295&amp;type=bug">ComputationField.png</a> [<a href="file_downloade986.php?file_id=295&amp;type=bug" target="_blank">^</a>] (49,897 bytes) <span class="italic">2015-11-23 15:18</span>
<br /><a href="file_downloade986.php?file_id=295&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="ComputationField4702.png?file_id=295&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072502ff0917583d3853e72b218cc4c57b5cc8c897c7" /></a></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#fcbdbd"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewbc80.html?id=389">0000389</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Organizational Unit aggregation field&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewabb3.html?id=846">0000846</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Field value modification not detected properly for the computation field&#160;</td></tr>
<tr bgcolor="#fcbdbd"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewa89a.html?id=847">0000847</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Project model fields table not displaying correctly some field's types&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view62cf.html?id=848">0000848</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Confusing &quot;NO_VALUE less than UNDEFINED&quot; message in computation field&#160;</td></tr>
</table></td>
</tr>
</table>

</div><div id="relationships_closed" class="hidden"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Relationships	</td>
</tr>
</table>

</div>
<a name="bugnotes" id="bugnotes" /><br />

<div id="bugnotes_open"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;		Notes	</td>
</tr>
<tr class="bugnote" id="c1906">
        <td class="bugnote-public">
				<span class="small">(<a href="view0b8f.html?id=530#c1906" title="Direct link to note">0001906)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-11-04 16:58</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue target version changed from 3.0 to next release (v2.0.2, which might be renamed 2.1 if this feature requires some data model modification), because might be part of this release depending on the cost to develop it.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1944">
        <td class="bugnote-public">
				<span class="small">(<a href="view0b8f.html?id=530#c1944" title="Direct link to note">0001944)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-12-08 16:56</span><br />
		<span class="small">edited on:&#32;2015-12-08 17:02</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Revised version of the detailed design of the feature after a discussion with rcalabro.<br />
This revised version is more up to date than the mockup which won't be the exact look of the feature : for example the two Min and Max limits will be above one another instead of being side by side.<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1959">
        <td class="bugnote-public">
				<span class="small">(<a href="view0b8f.html?id=530#c1959" title="Direct link to note">0001959)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-01-29 10:22</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		&quot;Additionnal information&quot; area just modified for a new exceeding limit online error message template to match layout constraints of the error message popup which can't display real tables. 	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1961">
        <td class="bugnote-public">
				<span class="small">(<a href="view0b8f.html?id=530#c1961" title="Direct link to note">0001961)</a></span><br />
		<a href="view_user_pagef3bc.html?id=92">bleny</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2016-02-03 18:15</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Fix committed to master branch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1980">
        <td class="bugnote-public">
				<span class="small">(<a href="view0b8f.html?id=530#c1980" title="Direct link to note">0001980)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2016-02-12 20:27</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.1-rc2.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
</table>

</div><div id="bugnotes_closed" class="hidden">
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;		Notes	</td>
</tr>
</table>
</div><div id="Source_open"><br/>
<a name="changesets"/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Related Changesets</td>
</tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="87">
	<a name="changeset1859">sigmah: master 6c1f8a0d</a>
	<br/><span class="small">Timestamp: 2016-02-03 17:15:14</span>
	<br/><span class="small">Author: <a href="view_user_pagef3bc.html?id=92">bleny</a></span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin4734.php?page=Source/view&amp;id=1859">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> </td>
<td colspan="3">Merge remote-tracking branch 'raphcal/iss530' (fixes <a href="view0b8f.html?id=530" title="[closed] New type of orgunit/project field: computation field" class="resolved">0000530</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - scripts/sql/maj-2.0-to-2.1.sql</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/scripts/sql/maj-2.0-to-2.1.sql">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/Sigmah.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/Sigmah.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/cache/UserLocalCache.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/cache/UserLocalCache.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/computation/ClientValueResolver.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/computation/ClientValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/computation/ComputationTriggerManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/computation/ComputationTriggerManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/page/PageManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/page/PageManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/page/RequestParameter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/page/RequestParameter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/AuthenticationProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/security/AuthenticationProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/notif/N10N.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/notif/N10N.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectReportsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/ProjectReportsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/treegrid/ProjectsListWidget.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/project/treegrid/ProjectsListWidget.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/treegrid/ProjectsListView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/view/project/treegrid/ProjectsListView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/widget/button/Button.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/widget/button/Button.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/ui/widget/form/StringField.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/ui/widget/form/StringField.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/AdminUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/AdminUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/JsIterable.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/JsIterable.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/TypeModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/TypeModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/ActiveProfilerStrategy.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ActiveProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/profiler/Execution.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/Execution.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/ExecutionAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ExecutionAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/InactiveProfilerStrategy.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/InactiveProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/profiler/Profiler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/Profiler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/util/profiler/ProfilerStrategy.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/client/util/profiler/ProfilerStrategy.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dispatch/AsyncCommandHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/dispatch/AsyncCommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/dispatch/LocalDispatchServiceAsync.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/BatchCommandAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/handler/BatchCommandAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/handler/UpdateProjectAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/handler/UpdateProjectAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/inject/OfflineModule.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/inject/OfflineModule.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/AmendmentJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/AmendmentJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/CheckboxElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/CheckboxElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/js/ComputationElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/ComputationElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/FlexibleElementJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/js/FlexibleElementJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/computation/ServerValueResolver.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/computation/ServerValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/dispatch/CommandHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/dispatch/CommandHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/domain/element/ComputationElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/element/ComputationElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/element/FlexibleElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/element/FlexibleElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/i18n/I18nServerImpl.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/i18n/I18nServerImpl.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/Computation.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/Computation.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/Computations.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/Computations.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/ParserEnvironment.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ParserEnvironment.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/ParserState.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ParserState.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/ValueResolver.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/ValueResolver.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Add.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Add.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/BadVariable.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/BadVariable.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Constant.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Constant.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Divide.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Divide.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/HasHumanReadableFormat.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/HasHumanReadableFormat.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Instruction.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Instruction.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Instructions.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Instructions.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Minus.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Minus.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Multiply.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Multiply.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Operator.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Operator.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/OperatorPriority.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/OperatorPriority.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Substract.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Substract.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/instruction/Variable.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/instruction/Variable.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/value/ComputationError.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputationError.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/value/ComputedValue.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputedValue.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/value/ComputedValues.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/ComputedValues.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/computation/value/DoubleValue.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/computation/value/DoubleValue.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dispatch/FunctionalException.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dispatch/FunctionalException.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/element/ComputationElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/element/ComputationElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/referential/LogicalElementType.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/LogicalElementType.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/referential/LogicalElementTypes.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/LogicalElementTypes.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/dto/referential/NoElementType.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/dto/referential/NoElementType.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/util/Collections.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/java/org/sigmah/shared/util/Collections.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/db/migration/V2__computation_field.sql</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/main/resources/db/migration/V2__computation_field.sql">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/server/computation/ServerValueResolverTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/server/computation/ServerValueResolverTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/shared/computation/ComputationsTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/computation/ComputationsTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/shared/computation/value/DoubleValueTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/computation/value/DoubleValueTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/shared/dto/element/ComputationElementDTOTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/dto/element/ComputationElementDTOTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/shared/dto/referential/LogicalElementTypesTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/dto/referential/LogicalElementTypesTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/test/java/org/sigmah/shared/util/CollectionsTest.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c1f8a0d1795d6d1ab4dacafd365e9404e7dc908/src/test/java/org/sigmah/shared/util/CollectionsTest.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		</table>
</div><div id="Source_closed" class="hidden"><br/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Related Changesets</td>
</tr>

</table>
</div>
<a name="history" id="history" /><br />

<div id="history_open"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Issue History	</td>
</tr>
<tr class="row-category-history">
	<td class="small-caption">
		Date Modified	</td>
	<td class="small-caption">
		Username	</td>
	<td class="small-caption">
		Field	</td>
	<td class="small-caption">
		Change	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-25 15:08	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:20	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: Minimum complete data processing capabilities	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-06-08 12:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000389	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-04 15:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page8a70.php?rev_id=710#r710">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-04 16:58	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001906	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-04 16:58	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		3.0 =&gt; 2.1	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-06 12:28	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page4360.php?rev_id=711#r711">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-06 12:28	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page0f18.php?rev_id=713#r713">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-16 11:24	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; next-but-one	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-18 14:24	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-18 14:24	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-18 14:24	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 2.1	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-23 15:18	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: ComputationField.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-23 15:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page2c79.php?rev_id=736#r736">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-23 15:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page3012.php?rev_id=737#r737">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-08 16:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001944	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-08 16:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page08a7.php?rev_id=743#r743">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-08 17:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001944	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagebbfe.php?bugnote_id=1944#r745">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-01-29 10:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001959	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-01-29 10:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pageeb58.php?rev_id=765#r765">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-03 18:15	</td>
	<td class="small-caption">
		<a href="view_user_pagef3bc.html?id=92">bleny</a>	</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 6c1f8a0d	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-03 18:15	</td>
	<td class="small-caption">
		<a href="view_user_pagef3bc.html?id=92">bleny</a>	</td>
	<td class="small-caption">
		Note Added: 0001961	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-03 18:15	</td>
	<td class="small-caption">
		<a href="view_user_pagef3bc.html?id=92">bleny</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		rcalabro =&gt; bleny	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-03 18:15	</td>
	<td class="small-caption">
		<a href="view_user_pagef3bc.html?id=92">bleny</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-03 18:15	</td>
	<td class="small-caption">
		<a href="view_user_pagef3bc.html?id=92">bleny</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-08 17:59	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000846	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-08 20:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000847	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-08 21:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000848	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-12 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001980	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-12 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-02-12 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		bleny =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2016-02-12 20:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.1	</td>
</tr>
</table>
</div><div id="history_closed" class="hidden"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
	<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Issue History	</td>
</tr>
</table>

</div>	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=530&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:06 GMT -->
</html>
