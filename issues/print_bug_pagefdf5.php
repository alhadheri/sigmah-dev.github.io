<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=8 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:56 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:35 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000008: Local handlers for CreateEntity and UpdateEntity - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000008</td><td class="print">sigmah</td><td class="print">Offline</td><td class="print">public</td><td class="print">2010-10-18 13:57</td><td class="print">2015-07-08 18:01</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">abertram</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">0.7.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">0.7.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000008: Local handlers for CreateEntity and UpdateEntity</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">-&gt; Change id type of Site and ReportingPeriod to String/Guid<br />
-&gt; Add local handlers for Site &amp; Reporting Period<br />
-&gt; Setup sqlite-backed queue for local changes<br />
-&gt; Local changes must be sent &amp; acked by server before we can transition to online mode.<br />
<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2010-10-18 13:57</td><td class="print"><a href="view_user_page8803.html?id=7">abertram</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2010-10-21 09:05</td><td class="print"><a href="view_user_page8803.html?id=7">abertram</a></td><td class="print">Category</td><td class="print">General =&gt; Offline</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">OS</td><td class="print">Windows XP =&gt; NA</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 1.0 (Phoenix) =&gt; NA</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">new =&gt; resolved</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-06-15 09:51</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-07-08 18:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
<br />
<table class="width100" cellspacing="1">
<tr>
	<td class="print" colspan="2">
		There are no notes attached to this issue.	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=8 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:56 GMT -->
</html>