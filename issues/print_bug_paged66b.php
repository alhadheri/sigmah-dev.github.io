<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=814 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:42 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:27 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000814: Fields in project models can not be deleted on Care Sigmah Central instance - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000814</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2015-10-21 13:01</td><td class="print">2015-12-03 14:18</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">jcarlier</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">have not tried</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0.2</td><td class="print-category">Fixed in Version</td><td class="print">2.0.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">Windows 7</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4">Firefox 41.0.2</td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000814: Fields in project models can not be deleted on Care Sigmah Central instance</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">The user created 3 project models (in-house, source of funding and local partner) on the Care Nederland Sigmah instance (hosted by Netapsys) and encountered numerous bugs with layout groups (issue 0000812 already reported).<br />
<br />
When editing the project models (in-house and source of funding) in Care Sigmah Central instance to delete some existing fields, an error message is displayed : &quot;An error occurred while deleting 'name of field'. Please try again later and contact your administrator if the problem persists&quot;.<br />
The project models are in Draft mode and some test projects have been created with these models.<br />
<br />
The user tried to reproduce the error on a local Sigmah instance. He exported these 2 project models and imported them in a new local Sigmah instance, the fields from the project models could then be deleted. There seems to be a bug only on Care Sigmah instance.<br />
<br />
To complete testing, the user then exported the 2 edited project models from a local Sigmah instance and tried to import them in the Care Sigmah Central instance. The in-house project could not be imported. The Source of funding was imported but caused Sigmah to crash. Numerous error messages were displayed including one about Sigmah going in offline mode and the connection lost when the connection was not actually lost on the user side (server crashed?). Care Sigmah instance did not respond. The user closed the browser and tried to reconnect to Sigmah. It was impossible to login again.<br />
<br />
It is the second time the Care Sigmah instance crashes while manipulating project models in Administration.<br />
<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5">- Go to Care Sigmah instance (login to be sent by email)<br />
- Try delete the &quot;Received transfers from Donor&quot; field in the FundingProject (error message to be displayed)<br />
- Try delete the &quot;Total grant incl. Internal Cost recoveries&quot; field in the CNLProject (error message to be displayed)<br />
<br />
When the project models are duplicated, the fields can be deleted.<br />
When the project models are exported and imported again, the FundingProject can be imported. The CNLProject can not be imported (&quot;Error during project model import&quot;).<br />
<br />
The major Sigmah crash could not be reproduced but it has now happened twice while manipulating project models indicating an instability with Care Sigmah instance.</td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">duplicate of</span>&#160;</td><td class="print">0000825</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Connexion to Sigmah blocked&#160;</td></tr><tr><td class="print"><span class="nowrap">duplicate of</span>&#160;</td><td class="print">0000623</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Impossible to delete a field which had content&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2015-10-21 13:01</td><td class="print"><a href="view_user_pagee8ec.php?id=91">jcarlier</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-10-21 13:01</td><td class="print"><a href="view_user_pagee8ec.php?id=91">jcarlier</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-10-21 13:01</td><td class="print"><a href="view_user_pagee8ec.php?id=91">jcarlier</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-11-04 10:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.1</td></tr><tr class="print"><td class="print">2015-11-06 13:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000623</td></tr><tr class="print"><td class="print">2015-11-16 19:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">duplicate of 0000825</td></tr><tr class="print"><td class="print">2015-12-02 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 2e94ed1a</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-12-03 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.1 =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2015-12-03 14:17</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">related to 0000623</td></tr><tr class="print"><td class="print">2015-12-03 14:17</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">duplicate of 0000623</td></tr><tr class="print"><td class="print">2015-12-03 14:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001921</td><td class="print"></td></tr><tr class="print"><td class="print">2015-12-03 14:18</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
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
				(0001921)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-12-03 14:18&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Closed because duplicate of <a href="view946c.html?id=623" title="[closed] Impossible to delete a field which had content" class="resolved">0000623</a> and fixed in v2.0.2.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=814 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:42 GMT -->
</html>
