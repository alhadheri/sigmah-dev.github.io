<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=490 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:22 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:41:03 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000490: No more possible to import project models - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000490</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2012-09-28 12:25</td><td class="print">2013-07-02 19:01</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">sherzod</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">1.2</td><td class="print-category">Fixed in Version</td><td class="print">1.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000490: No more possible to import project models</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">While testing v1.2-rc1, I've been unable to import project models coming from v1.1.1.<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">I guess that this issue might come from the new columns added to the table flexible_element, but it has to be confirmed.<br />
<br />
Here is the message I get in the log file (and this goes against my assumption...):<br />
2012-09-28 12:14:01,343 qtp30389577-15  WARN ExportModelServlet - Unauthorized access to the import service from user null<br />
2012-09-28 12:14:20,045 qtp30389577-17  WARN ExportModelServlet - Unauthorized access to the import service from user null<br />
2012-09-28 12:14:45,585 qtp30389577-12  WARN ExportModelServlet - Unauthorized access to the import service from user null<br />
<br />
I've added the 3 project models I've tried to import to this issue.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/zip.gif" alt="zip" />&#160;ProjectModelsFiles.zip (14,346) <span class="italic">2012-09-28 12:25</span><br />http://www.sigmah.org/issues/file_download.php?file_id=62&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2012-09-28 12:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2012-09-28 12:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2012-09-28 12:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; sherzod</td></tr><tr class="print"><td class="print">2012-09-28 12:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectModelsFiles.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2012-09-28 12:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001062</td><td class="print"></td></tr><tr class="print"><td class="print">2012-09-28 12:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; 1.2</td></tr><tr class="print"><td class="print">2012-10-01 17:19</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2012-10-01 17:19</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001063</td><td class="print"></td></tr><tr class="print"><td class="print">2012-10-01 17:19</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2012-10-01 17:19</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2012-10-01 17:25</td><td class="print"><a href="view_user_page6fb5.html?id=31">sherzod</a></td><td class="print">Note Added: 0001064</td><td class="print"></td></tr><tr class="print"><td class="print">2012-10-01 17:25</td><td class="print"><a href="view_user_page6fb5.html?id=31">sherzod</a></td><td class="print">Status</td><td class="print">resolved =&gt; feedback</td></tr><tr class="print"><td class="print">2012-10-01 17:25</td><td class="print"><a href="view_user_page6fb5.html?id=31">sherzod</a></td><td class="print">Resolution</td><td class="print">fixed =&gt; reopened</td></tr><tr class="print"><td class="print">2012-10-01 17:25</td><td class="print"><a href="view_user_page6fb5.html?id=31">sherzod</a></td><td class="print">Status</td><td class="print">feedback =&gt; closed</td></tr><tr class="print"><td class="print">2012-10-01 17:25</td><td class="print"><a href="view_user_page6fb5.html?id=31">sherzod</a></td><td class="print">Resolution</td><td class="print">reopened =&gt; fixed</td></tr><tr class="print"><td class="print">2012-10-02 10:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001065</td><td class="print"></td></tr><tr class="print"><td class="print">2012-10-02 10:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">closed =&gt; resolved</td></tr><tr class="print"><td class="print">2013-07-02 19:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001272</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-02 19:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2013-07-02 19:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 1.2</td></tr></table>
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
				(0001062)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2012-09-28 12:27&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Sherzod, don't hesitate to discuss this issue or your availability to manage it on IRC. I've assigned it to you because it might be linked with your modifications on table flexible_element, but you might not be available to fix it, so please feel free to discuss with with Tom &amp; I.			</td>
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
				(0001063)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2012-10-01 17:19&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				fixes issue <a href="viewf5f2.html?id=490" title="[closed] No more possible to import project models" class="resolved">0000490</a><br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/handler/ProjectModelHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/spreadsheet/GlobalExportDataProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/element/FlexibleElement.java<br />
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
				(0001064)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page6fb5.html?id=31">sherzod</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2012-10-01 17:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Olivier, as you guessed issue came from the new columns added to the table flexible_element.I may forget to check it. But, it did not have message like &quot;WARN ExportModelServlet - Unauthorized access to the import service from user null&quot;. <br />
These days i am preparing to move to USA. Thus, i may not be available in IRC for a while. But, i will fix issues and read mailing list.			</td>
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
				(0001065)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2012-10-02 10:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks Sherzod for fixing this issue!<br />
I've set back the issue status to &quot;resolved&quot;, because issues are marked as &quot;closed&quot; only when the correct behavior is checked during the integration tests.			</td>
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
				(0001272)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-02 19:01&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v1.2-rc3.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=490 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:22 GMT -->
</html>
