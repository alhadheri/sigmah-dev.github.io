<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=844 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:25 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:53 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000844: Out of memory error when importing large file into large project database - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000844</td><td class="print">sigmah</td><td class="print">Import</td><td class="print">public</td><td class="print">2016-01-20 17:20</td><td class="print">2016-11-22 14:56</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print"></td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">sometimes</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.2</td><td class="print-category">Fixed in Version</td><td class="print">2.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000844: Out of memory error when importing large file into large project database</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">With a file with about 120 rows for a database of about 250 projects, the importation process is interrupted before showing the import confirmation popup.<br />
On the server log, you get a &quot;GC overhead limit exceeded&quot; error message (see full log below).</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">See attached &quot;outOfMemory.log&quot; log file for initial error.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000845</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Mass import option for large import files&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000862</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">More than 5 minutes delay to create a project in a more than 300 projects database&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="log" />&#160;outOfMemory.log (150,833) <span class="italic">2016-01-21 14:09</span><br />http://www.sigmah.org/issues/file_download.php?file_id=300&amp;type=bug<br /><img src="images/fileicons/text.html" alt="log" />&#160;TrialWith2GB-sigmah.log (12,598) <span class="italic">2016-01-22 10:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=301&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;import-script-example.sql (1,592) <span class="italic">2016-01-26 16:09</span><br />http://www.sigmah.org/issues/file_download.php?file_id=302&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2016-01-20 17:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-20 17:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2016-01-20 17:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; osarrat</td></tr><tr class="print"><td class="print">2016-01-20 17:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Priority</td><td class="print">normal =&gt; high</td></tr><tr class="print"><td class="print">2016-01-20 17:22</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=761#r761</td></tr><tr class="print"><td class="print">2016-01-21 09:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">osarrat =&gt; rcalabro</td></tr><tr class="print"><td class="print">2016-01-21 10:03</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Added: 0001953</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-21 14:09</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: outOfMemory.log</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-22 10:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: TrialWith2GB-sigmah.log</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-22 10:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001955</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-22 10:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=762#r762</td></tr><tr class="print"><td class="print">2016-01-22 10:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001955</td><td class="print">bug_revision_view_page.php?bugnote_id=1955#r764</td></tr><tr class="print"><td class="print">2016-01-22 16:31</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Added: 0001956</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-25 15:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001957</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-26 16:09</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: import-script-example.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2016-01-26 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001958</td><td class="print"></td></tr><tr class="print"><td class="print">2016-02-08 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000845</td></tr><tr class="print"><td class="print">2016-02-08 11:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001964</td><td class="print"></td></tr><tr class="print"><td class="print">2016-02-08 11:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">rcalabro =&gt; </td></tr><tr class="print"><td class="print">2016-02-08 11:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2016-02-08 11:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.1 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2016-11-22 14:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0002231</td><td class="print"></td></tr><tr class="print"><td class="print">2016-11-22 14:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; closed</td></tr><tr class="print"><td class="print">2016-11-22 14:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2016-11-22 14:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.2</td></tr><tr class="print"><td class="print">2016-11-22 14:55</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000862</td></tr><tr class="print"><td class="print">2016-11-22 14:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.2</td></tr></table>
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
				(0001953)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagedcfd.html?id=4">rcalabro</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-21 10:03&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				What amount of memory have you allocated to Sigmah ? If it is inferior to 1G, try setting a higher value.			</td>
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
				(0001955)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-22 10:30&#160;&#160;&#160;
				<br />(edited on:&#32;2016-01-22 10:42)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for the tip, I have set up a &quot;setenv.bat&quot; file with this command line : set JAVA_OPTS=%JAVA_OPTS% -Xms128m -Xmx2048m .<br />
Then, I've re-launched the import process at about 15:50, and it hasn't crashed as it did it before after 10-20 minutes. Actually, when I left the office about 18:30, it was still running! This morning, I saw that the import process as finally crashed but with a NoClassDefFoundError error message at 23:22, and with a first OutOfMemoryError error at 23:13 (see attached TrialWith2GB log file, provided with two previous WARN which might be also useful).<br />
<br />
It might have no link with the problem, but in the &quot;localhost_access_log&quot;, there are &quot;GET /2.0.2/sigmah/online.nocache.json HTTP/1.1&quot; rows about one every 1 to 3 minutes before 23:22:29, and starting from 23:22:29 those message appears by hundreds for each second! At 23:22:29, there is actually a &quot;POST /2.0.2/sigmah/dispatch HTTP/1.1&quot; that I see in the log only twice at 15:55:15.<br />
<br />
What would you suggest now?<br />
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
				(0001956)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagedcfd.html?id=4">rcalabro</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-22 16:31&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I would suggest you to divide the files in smaller pieces and try importing them.<br />
<br />
(Otherwise, the two WARN are unrelated to this problem).			</td>
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
				(0001957)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-25 15:42&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for the suggestion!<br />
I've tried it, and the importation does work with small files of about 10 rows. When I increase this number of row to 20 or more, I get the bug and much faster with my previous file of more than 100 rows which took 7 hours to crash the import.<br />
<br />
But in the final real case, the file to import may have more than 300 rows... which means to divide it in 30 files, and import them one by one. It would in the end be maybe faster to do the modification by hand in the application...<br />
<br />
Does this report I give to you help you to think of a fast solution to fix this? Why 20 rows would crash the import when 10 do not?			</td>
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
				(0001958)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-01-26 16:12&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				A workaround solution has been found: converting the Excel file to import into a SQL script. The just attached &quot;import-script-example.sql&quot; SQL file is an example of a query making the relevant modification in datatabase.<br />
<br />
This workaround solution can be used with caution until this issue is properly fixed.			</td>
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
				(0001964)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-02-08 11:33&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Fix of this issue postponed to a later version since it would require a major rewrite of the whole import feature, and this rewriting would just extend the limit at which this bug occurs.<br />
As a bypass solution, feature <a href="viewf3fd.html?id=845" title="[closed] Mass import option for large import files" class="resolved">0000845</a> has been designed and requested.			</td>
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
				(0002231)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2016-11-22 14:55&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed indirectly by the fix of <a href="viewb3ec.html?id=862" title="[closed] More than 5 minutes delay to create a project in a more than 300 projects database" class="resolved">0000862</a>.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=844 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:25 GMT -->
</html>
