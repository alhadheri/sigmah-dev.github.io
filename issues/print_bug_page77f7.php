<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=866 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:45 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:20 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000866: Computation field from linked projects - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000866</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2016-06-09 19:23</td><td class="print">2017-01-12 16:24</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.2</td><td class="print-category">Fixed in Version</td><td class="print">2.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000866: Computation field from linked projects</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">CARE Nederland has requested that computation in computation field is not limited to number fields in the current project but can also include number fields or computation fields in linked projects, or the financial contributions made by/to linked projects.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"><b>Original need</b><br />
CARE Nederland, which has requested the development of the &quot;computation field&quot; feature (<a href="view0b8f.html?id=530" title="[closed] New type of orgunit/project field: computation field" class="resolved">0000530</a>) has expressed 3 new needs to extend this feature:<br />
- Received budget of an in-house project should be automatically calculated as the sum the received budgets of all linked &quot;Funding source&quot; projects with the &quot;Source of funding&quot; project model.<br />
- The &quot;budget spent&quot; of an in-house project should be calculated as the sum the spent budgets of all linked &quot;Funded&quot; projects with the &quot;Local partner&quot; project model.<br />
- The value of a received budget of a source of funding project should be the sum of the 5 &quot;Transfers&quot; fields of that project.<br />
<br />
This need is planned to be fully covered with the 3 following features:<br />
- <a href="viewbb33.html?id=864" title="[closed] Revise budget default field design" class="resolved">0000864</a> Revise budget default field design<br />
- (optional) <a href="viewa010.html?id=865" title="[new] Convenient use of budget information in computation field">0000865</a> Convenient use of budget information in computation field<br />
- and this <a href="view75cf.html?id=866" title="[closed] Computation field from linked projects" class="resolved">0000866</a> issue<br />
<br />
<br />
<b>New formula items</b><br />
<br />
To distinguished between funding sources and funded projects, two functions are available to get access to them in formulas: &quot;fundingSources()&quot; and &quot;fundedProjects()&quot;.<br />
<br />
To get the linked projects financial contributions in formulas, the symbol &quot;@contribution&quot; must be used.<br />
<br />
Since there can be several linked projects to a project, an aggregation function is required to compute a value from a linked projects field, or financial contributions. Requested aggregation functions at this time are only: average &quot;avg()&quot;, and sum &quot;sum()&quot;. Example: &quot;fundingSources().avg(@contribution)&quot;.<br />
<br />
Since there can be several project models used in linked project, a project model filter must be called each time a specific number field or computation field is requested. This field must be the exact project model name used in parameter of the linked projects access function. Example: &quot;fundedProjects(Local partner project v2).sum(field56)&quot;.<br />
<br />
A full example : &quot;fundingSources().sum(@contribution) - fundedProjects(Local partner project v2).sum(field56)&quot;<br />
<br />
If issue <a href="viewa010.html?id=865" title="[new] Convenient use of budget information in computation field">0000865</a> is developed, it will also be possible to easily aggregate budget with formulas like: &quot;fundedProjects().sum(@budget.spent)&quot; <br />
<br />
<b>User interface</b><br />
In the admin area, the computation field edition popup should be modified so that it is possible to get to know field codes of any project model.<br />
See attached mockup for suggestion.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000865</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Convenient use of budget information in computation field&#160;</td></tr><tr><td class="print"><span class="nowrap">has duplicate</span>&#160;</td><td class="print">0000836</td><td class="print">closed&#160;</td><td class="print">&#160;</td><td class="print">Linked projects aggregation field&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;ComputationOnLinkedProjectsFields.png (32,373) <span class="italic">2016-06-09 19:23</span><br />http://www.sigmah.org/issues/file_download.php?file_id=308&amp;type=bug<br /><img src="file_download7d05.php?file_id=308&amp;type=bug" alt="png" border="0" /><br /></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2016-06-09 19:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2016-06-09 19:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2016-06-09 19:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2016-06-09 19:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ComputationOnLinkedProjectsFields.png</td><td class="print"></td></tr><tr class="print"><td class="print">2016-06-09 19:26</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=783#r783</td></tr><tr class="print"><td class="print">2016-06-23 10:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000865</td></tr><tr class="print"><td class="print">2016-07-05 17:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=805#r805</td></tr><tr class="print"><td class="print">2016-07-05 17:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=806#r806</td></tr><tr class="print"><td class="print">2016-07-06 14:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.2 =&gt; 2.3</td></tr><tr class="print"><td class="print">2016-07-07 12:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">has duplicate 0000836</td></tr><tr class="print"><td class="print">2016-08-28 15:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.3 =&gt; 2.2</td></tr><tr class="print"><td class="print">2016-10-12 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002136</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-12 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2016-10-12 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.2</td></tr><tr class="print"><td class="print">2016-10-12 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2017-01-12 16:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002295</td><td class="print"></td></tr><tr class="print"><td class="print">2017-01-12 16:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
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
				(0002136)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-10-12 10:00&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Considered resolved by rcalabro with pull request <a href="https://github.com/sigmah-dev/sigmah/pull/34">https://github.com/sigmah-dev/sigmah/pull/34</a> [<a href="https://github.com/sigmah-dev/sigmah/pull/34" target="_blank">^</a>]			</td>
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
				(0002295)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2017-01-12 16:24&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.2-rc2.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=866 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:01:45 GMT -->
</html>
