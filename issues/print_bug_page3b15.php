<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=530 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:06 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:46 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000530: New type of orgunit/project field: computation field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000530</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2013-02-25 15:08</td><td class="print">2016-02-12 20:27</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.1</td><td class="print-category">Fixed in Version</td><td class="print">2.1</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000530: New type of orgunit/project field: computation field</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">A new type of field should be added in project/orgunit model: computation field. This field is similar to the organizational unit aggregation field but will aggregate information only on decimal or integer fields of the same orgunit/project model. Computation operations requested: sum, ratio, difference, multiplication. Computation can be done on more than 2 fields of the same model.<br />
Finally, it should be possible to set optionally a minimum and a maximum limit for the value of the computation field: when trying to save a modification of the fields which are used to compute the value of the computation field makes this value get out of the limits, a warning message informs the user that &quot;Your latest modification on field(s) FIELD1, FIELD2, [List of fields modified and part of the computation] cannot be saved because it makes the computed value of NAME_OF_THE_COMPUTATION_FIELD [below/greater] than EXCEEDED_LIMIT.&quot;.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">The detailed behavior of the feature has been imagined as follows :<br />
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
</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page629a.php?tag_id=3' title=''>Minimum complete data processing capabilities</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000389</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Organizational Unit aggregation field&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000846</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Field value modification not detected properly for the computation field&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000847</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Project model fields table not displaying correctly some field's types&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000848</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Confusing &quot;NO_VALUE less than UNDEFINED&quot; message in computation field&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;ComputationField.png (49,897) <span class="italic">2015-11-23 15:18</span><br />http://www.sigmah.org/issues/file_download.php?file_id=295&amp;type=bug<br /><img src="file_downloade986.php?file_id=295&amp;type=bug" alt="png" border="0" /><br /></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-02-25 15:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Minimum complete data processing capabilities</td><td class="print"></td></tr><tr class="print"><td class="print">2015-06-08 12:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000389</td></tr><tr class="print"><td class="print">2015-11-04 15:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=710#r710</td></tr><tr class="print"><td class="print">2015-11-04 16:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001906</td><td class="print"></td></tr><tr class="print"><td class="print">2015-11-04 16:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.1</td></tr><tr class="print"><td class="print">2015-11-06 12:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=711#r711</td></tr><tr class="print"><td class="print">2015-11-06 12:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=713#r713</td></tr><tr class="print"><td class="print">2015-11-16 11:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.1 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2015-11-18 14:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-11-18 14:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-11-18 14:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.1</td></tr><tr class="print"><td class="print">2015-11-23 15:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ComputationField.png</td><td class="print"></td></tr><tr class="print"><td class="print">2015-11-23 15:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=736#r736</td></tr><tr class="print"><td class="print">2015-11-23 15:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=737#r737</td></tr><tr class="print"><td class="print">2015-12-08 16:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001944</td><td class="print"></td></tr><tr class="print"><td class="print">2015-12-08 16:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=743#r743</td></tr><tr class="print"><td class="print">2015-12-08 17:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001944</td><td class="print">bug_revision_view_page.php?bugnote_id=1944#r745</td></tr><tr class="print"><td class="print">2016-01-29 10:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001959</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-29 10:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=765#r765</td></tr><tr class="print"><td class="print">2016-02-03 18:15</td><td class="print"><a href="view_user_pagef3bc.html?id=92">bleny</a></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 6c1f8a0d</td></tr><tr class="print"><td class="print">2016-02-03 18:15</td><td class="print"><a href="view_user_pagef3bc.html?id=92">bleny</a></td><td class="print">Note Added: 0001961</td><td class="print"></td></tr><tr class="print"><td class="print">2016-02-03 18:15</td><td class="print"><a href="view_user_pagef3bc.html?id=92">bleny</a></td><td class="print">Assigned To</td><td class="print">rcalabro =&gt; bleny</td></tr><tr class="print"><td class="print">2016-02-03 18:15</td><td class="print"><a href="view_user_pagef3bc.html?id=92">bleny</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2016-02-03 18:15</td><td class="print"><a href="view_user_pagef3bc.html?id=92">bleny</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2016-02-08 17:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000846</td></tr><tr class="print"><td class="print">2016-02-08 20:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000847</td></tr><tr class="print"><td class="print">2016-02-08 21:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000848</td></tr><tr class="print"><td class="print">2016-02-12 20:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001980</td><td class="print"></td></tr><tr class="print"><td class="print">2016-02-12 20:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2016-02-12 20:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">bleny =&gt; rcalabro</td></tr><tr class="print"><td class="print">2016-02-12 20:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.1</td></tr></table>
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
				(0001906)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-11-04 16:58&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue target version changed from 3.0 to next release (v2.0.2, which might be renamed 2.1 if this feature requires some data model modification), because might be part of this release depending on the cost to develop it.			</td>
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
				(0001944)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-12-08 16:56&#160;&#160;&#160;
				<br />(edited on:&#32;2015-12-08 17:02)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Revised version of the detailed design of the feature after a discussion with rcalabro.<br />
This revised version is more up to date than the mockup which won't be the exact look of the feature : for example the two Min and Max limits will be above one another instead of being side by side.<br />
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
				(0001959)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-29 10:22&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				&quot;Additionnal information&quot; area just modified for a new exceeding limit online error message template to match layout constraints of the error message popup which can't display real tables. 			</td>
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
				(0001961)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagef3bc.html?id=92">bleny</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-02-03 18:15&#160;&#160;&#160;
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
				(0001980)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-02-12 20:27&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.1-rc2.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=530 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:06 GMT -->
</html>
