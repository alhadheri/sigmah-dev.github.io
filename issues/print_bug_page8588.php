<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=386 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:02 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:24 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000386: Flexible budget field - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000386</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2011-09-28 12:18</td><td class="print">2015-04-30 18:07</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">Guerline</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000386: Flexible budget field</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">The definition of how much is now spent on a project varies strongly according to the needs of the person requesting this data.<br />
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
Finally, the export to Excel features (both Global export and Project synthesis) should be revised to take into account this new flexibility on budget.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page1782.php?tag_id=2' title=''>Complete finance follow-up</a>, <a href='tag_view_page230c.html?tag_id=1' title=''>More versatile &amp; flexible models</a>, <a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000387</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Importing data into fields&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000167</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Project core versions (amendments)&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000513</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Budget Excel export improvement&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-09-28 12:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-25 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 3.6 (Namoroka) =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-25 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Multiple spent budget fields =&gt; Flexible budget field</td></tr><tr class="print"><td class="print">2013-02-25 13:02</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=313#r313</td></tr><tr class="print"><td class="print">2013-02-26 15:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: More versatile &amp; flexible models</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:11</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Comprehensive finance follow-up</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Renamed</td><td class="print">Comprehensive finance follow-up =&gt; Complete finance follow-up</td></tr><tr class="print"><td class="print">2013-06-11 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000167</td></tr><tr class="print"><td class="print">2013-07-03 20:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-07-03 20:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-07-03 20:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001278</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-03 20:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-07-03 20:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000387</td></tr><tr class="print"><td class="print">2013-07-05 15:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001283</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-05 15:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=409#r409</td></tr><tr class="print"><td class="print">2013-07-10 17:36</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Note Added: 0001285</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-19 20:27</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-19 20:27</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001331</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-19 20:27</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-08-19 20:27</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-08-20 16:24</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-20 16:24</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001332</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-22 11:45</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-22 11:45</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001338</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 12:34</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 12:34</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001353</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-04 14:26</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Relationship added</td><td class="print">parent of 0000513</td></tr><tr class="print"><td class="print">2013-09-06 19:24</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-06 19:24</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001360</td><td class="print"></td></tr><tr class="print"><td class="print">2015-02-17 17:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-30 18:05</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">parent of 0000513</td></tr><tr class="print"><td class="print">2015-04-30 18:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000513</td></tr><tr class="print"><td class="print">2015-04-30 18:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001655</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-30 18:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-30 18:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001278)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-03 20:42&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue targeted to 1.3 because short term objective for Guerline.<br />
<br />
Guerline, can you actually produce in the upcoming week a proposition of modification of the physical model to implement this feature?<br />
Tharindu who's making the detailed design of <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a> will need this information for his work.			</td>
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
				(0001283)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-05 15:19&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added the description of modifications to be made on Excel export in issue description.			</td>
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
				(0001285)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page2580.html?id=43">Guerline</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-10 17:36&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Sorry, I won't be able to do it this week but I'll come up with a proposition as soon as possible.			</td>
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
				(0001331)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-19 20:27&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Adds the possibility to change the budget fields (fixes issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/BudgetSubFieldForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitsByModelHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetElement.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubField.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubFieldType.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/BudgetSubFieldDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_fr.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/offline/sigmah/dao/OrganizationDAO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/AdminUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/orgunit/OrgUnitPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/orgunit/details/OrgUnitDetailsPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/ProjectPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/FinancialProjectEditButtonGridCellRender.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/LocalPartnerProjectEditButtonGridCellRender.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/ui/RatioBar.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/public/sigmah.css<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/AddOrgUnitHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/ProjectMapper.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateProjectHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/OrgUnit.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/Project.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTOLight.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java<br />
Modified : /trunk/sigmah/src/main/resources/dozer-schema-mapping.xml<br />
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
				(0001332)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-20 16:24&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Removes non issue related parts and add comments to the translation files (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants_fr.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/spreadsheet/GlobalExportDataProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/ValueResultUtils.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetSubField.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/OrgUnitDTO.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ProjectDTO.java<br />
Removed : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitsByModelHandler.java<br />
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
				(0001338)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-22 11:45&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added test case POMM28 &quot;Change budget field composition&quot; to test issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> on  wiki page TestScenario4ProjectOrgunitModelManagement through web user interface.<br />
<br />
Modified : /wiki/TestScenario4ProjectOrgunitModelManagement.wiki<br />
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
				(0001353)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-27 12:34&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Modify duplicate command for project &amp; org unit model to fit the new budget element structure (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitModelCopyHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectModelCopyHandler.java<br />
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
				(0001360)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-09-06 19:24&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Keeps order of budget sub fields and saves planned budget when a project is created (related to issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ProjectsListPanel.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectModelPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/admin/ModelUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/BudgetElement.java<br />
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
				(0001655)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-30 18:07&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because expected behavior generally checked on v2.0-rc1, and because the major lacks have been reported:<br />
<a href="view1b2f.html?id=705" title="[new] Useless fields in budget field creation">0000705</a><br />
<a href="view3c7d.html?id=706" title="[closed] Error while creating another budget sub-field" class="resolved">0000706</a><br />
<a href="view6c69.html?id=707" title="[new] Impossible to rename initial budget subfields">0000707</a>			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=386 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:02 GMT -->
</html>
