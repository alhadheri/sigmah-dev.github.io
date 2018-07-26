<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=610 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:57 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:36 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000610: Strict email validation on user creation - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000610</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2014-01-13 10:58</td><td class="print">2015-07-08 17:54</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">spM</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">minor</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/896">http://www.sigmah.org/node/896</a> [<a href="http://www.sigmah.org/node/896" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000610: Strict email validation on user creation</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">When creating a user, there should be a strict email validation check. If the email entered contains space character inside or on the border of the email character string, the email should not be accepted.<br />
Space characters on the border of the email address character string should be automatically trimmed without informing the user.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;610.patch (2,637) <span class="italic">2014-03-11 12:58</span><br />http://www.sigmah.org/issues/file_download.php?file_id=150&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-01-13 10:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-02-14 11:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rush52</td></tr><tr class="print"><td class="print">2014-02-14 11:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-03-10 13:06</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">Note Added: 0001382</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-10 13:07</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">File Added: 610.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-10 13:08</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">rush52 =&gt; spM</td></tr><tr class="print"><td class="print">2014-03-11 12:57</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">File Deleted: 610.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2014-03-11 12:58</td><td class="print"><a href="view_user_page3162.html?id=26">spM</a></td><td class="print">File Added: 610.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-29 11:29</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-29 11:29</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001478</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-29 11:29</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2014-07-29 11:29</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-07-08 17:54</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001898</td><td class="print"></td></tr><tr class="print"><td class="print">2015-07-08 17:54</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-07-08 17:54</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0001382)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page3162.html?id=26">spM</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-03-10 13:06&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi,<br />
I attached a patch by the name 610.patch to solve this issue. <br />
<br />
The Input from the EmailField is trimmed first, and then matched with a simple regular expression to validate as a proper email address. <br />
The Regular Expression I use now is as follows ::<br />
^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@&quot;+&quot;[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$<br />
<br />
This will work for all common email forms. But, if we want a more exhaustive Email Validation and conform to the RFC 822 grammar for Email addresses, we will have to replace the pattern to use the Regular expression given in this link :: <a href="http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html">http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html</a> [<a href="http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html" target="_blank">^</a>]<br />
Which as you can see is much more complex. Though for most practical cases the above regular expression can be used safely.			</td>
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
				(0001478)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-29 11:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by spM : Strict email validation on user creation. (fixes issue <a href="viewf2c2.html?id=610" title="[closed] Strict email validation on user creation" class="resolved">0000610</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java<br />
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
				(0001898)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-07-08 17:54&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v2.0-rc6.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=610 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:57 GMT -->
</html>
