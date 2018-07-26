<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=997 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:28 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:27:03 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000997: Execution error on budget ratio after migration with dedicated Java tool - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000997</td><td class="print">sigmah</td><td class="print">[All Projects] General</td><td class="print">public</td><td class="print">2016-10-14 18:36</td><td class="print">2016-11-21 15:57</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.2</td><td class="print-category">Fixed in Version</td><td class="print">2.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000997: Execution error on budget ratio after migration with dedicated Java tool</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">On v2.2-rc1, we get &quot;No budget ratio element was found for project&quot; errors on v2.1 database on which we have runned the budget ratio java tool.<br />
<br />
This tool should be debugged at least in the case provided below, or better should be replaced by a set of SQL commands as all other existing data updates solution so far (see : <a href="http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#existing_data_updates">http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#existing_data_updates</a> [<a href="http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#existing_data_updates" target="_blank">^</a>] )</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"><b>Restore first the database provided as attached file</b><br />
<br />
<b>On Java tool execution, we get information that everything went fine, including for project #1639:</b> (see full migration_budget_field.log for more details)<br />
6/ BudgetElement [id=325, divisor=2987, dividend=2979, projetId=1639, divisorVal=234000, dividendVal=0, layoutOrder=4, l<br />
ayoutGroupId=340, userId=35, DividendVarId=0, DividendSchModId=0, DivisorVarId=0, DivisorSchModId=0]<br />
<br />
<b>After the Java migration tool, no error while passing all other required SQL commands</b><br />
SQL commands available here : <a href="http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#sql_commands_for_other_existing_data">http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#sql_commands_for_other_existing_data</a> [<a href="http://wiki.sigmah.org/doku.php?id=contributorguide:schemachangelog#sql_commands_for_other_existing_data" target="_blank">^</a>]<br />
<br />
<b>But when running the app v2.2-rc1 for the first time on this database, I get this error</b><br />
[ERROR] {14/10/2016 17:55:35.564} [http-apr-8080-exec-6] o.s.s.handler.util.ProjectMapper - No budget ratio element was found for project #1639<br />
javax.persistence.NoResultException: No entity found for query<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.QueryImpl.getSingleResult(QueryImpl.java:290) ~[hibernate-entitymanager-4.2.14.Final.jar:4.2.14.Final]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.util.ProjectMapper.fillBudget(ProjectMapper.java:347) [ProjectMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.util.ProjectMapper.map(ProjectMapper.java:248) [ProjectMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsFromIdHandler.execute(GetProjectsFromIdHandler.java:117) [GetProjectsFromIdHandler.class:na]<br />
</td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/zip.gif" alt="zip" />&#160;sigmah_2.2-DemoData--withoutAnyExistingDataUpdate.sql.zip (166,729) <span class="italic">2016-10-14 18:36</span><br />http://www.sigmah.org/issues/file_download.php?file_id=345&amp;type=bug<br /><img src="images/fileicons/text.html" alt="log" />&#160;migration_budget_field.log (2,477) <span class="italic">2016-10-14 18:38</span><br />http://www.sigmah.org/issues/file_download.php?file_id=346&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2016-10-14 18:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-14 18:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2016-10-14 18:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2016-10-14 18:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: sigmah_2.2-DemoData--withoutAnyExistingDataUpdate.sql.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-14 18:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: migration_budget_field.log</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-17 10:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002150</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-17 10:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">rcalabro =&gt; osarrat</td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 99b57448</td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 18cba50b</td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 1ca23967</td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002167</td><td class="print"></td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2016-10-21 18:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2016-11-21 15:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002220</td><td class="print"></td></tr><tr class="print"><td class="print">2016-11-21 15:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2016-11-21 15:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.2</td></tr></table>
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
				(0002150)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-10-17 10:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue assigned to myself to develop a SQL migration tool easier to integrate with other SQL migration commands.			</td>
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
				(0002167)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-10-21 18:00&#160;&#160;&#160;
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
				(0002220)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-11-21 15:57&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.2-SNAPSHOT built after v2.2-rc1 release.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=997 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:28 GMT -->
</html>
