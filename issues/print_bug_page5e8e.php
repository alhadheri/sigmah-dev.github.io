<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=438 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:42 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:39:37 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000438: Own password modification by user - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000438</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2012-02-02 13:00</td><td class="print">2015-04-03 17:17</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">renatoaf</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/fr/node/551">http://www.sigmah.org/fr/node/551</a> [<a href="http://www.sigmah.org/fr/node/551" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000438: Own password modification by user</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">The users have no mean to change their password by themselves.<br />
A feature should be develop to allow this. This feature must be optionnal (using a global privilege for example) since some organizations may prefer to let only the administrator modifiy the passwords.<br />
<br />
The admin will be able to define in the Administration&gt;Settings screen a period for automatic renewal of the password. This period can be &quot;never&quot; if no automatic renewal is set up. (this feature is feature <a href="view6017.html?id=517" title="[assigned] Automatic user password reset">0000517</a>)<br />
<br />
If a user has this feature enabled with his user profile, he will be prompted to change his password by himself each time his password has been automatically set or reset (at the creation of his user account, or when his password has expired)</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page8369.php?tag_id=11' title=''>Enhanced user session and rights</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000517</td><td class="print">assigned&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page95dc.html?id=29">renatoaf</a></span>&#160;</td><td class="print">Automatic user password reset&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;01.permission.png (143,736) <span class="italic">2014-05-27 05:40</span><br />http://www.sigmah.org/issues/file_download.php?file_id=173&amp;type=bug<br /><img src="file_download74d8.php?file_id=173&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02.change_password_option.png (89,624) <span class="italic">2014-05-27 05:40</span><br />http://www.sigmah.org/issues/file_download.php?file_id=174&amp;type=bug<br /><img src="file_download0dcd.php?file_id=174&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;03.change_password_prompt.png (96,441) <span class="italic">2014-05-27 05:40</span><br />http://www.sigmah.org/issues/file_download.php?file_id=175&amp;type=bug<br /><img src="file_download2a4d.php?file_id=175&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;04.expiration_policy_1.png (106,968) <span class="italic">2014-05-27 05:40</span><br />http://www.sigmah.org/issues/file_download.php?file_id=176&amp;type=bug<br /><img src="file_download39f4.php?file_id=176&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;05.expiration_policy_2.png (119,297) <span class="italic">2014-05-27 05:41</span><br />http://www.sigmah.org/issues/file_download.php?file_id=177&amp;type=bug<br /><img src="file_download51a1.php?file_id=177&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/text.html" alt="txt" />&#160;438_patch.txt (62,224) <span class="italic">2014-05-27 05:43</span><br />http://www.sigmah.org/issues/file_download.php?file_id=178&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;438_scheme_updates.sql (917) <span class="italic">2014-05-27 05:44</span><br />http://www.sigmah.org/issues/file_download.php?file_id=179&amp;type=bug<br /><img src="images/fileicons/png.gif" alt="png" />&#160;fix01 - frequency and new user policy.png (73,960) <span class="italic">2014-06-30 08:36</span><br />http://www.sigmah.org/issues/file_download.php?file_id=201&amp;type=bug<br /><img src="file_download6b03.php?file_id=201&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;fix02 - current password.png (69,731) <span class="italic">2014-06-30 08:37</span><br />http://www.sigmah.org/issues/file_download.php?file_id=202&amp;type=bug<br /><img src="file_downloadc51d.php?file_id=202&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/text.html" alt="txt" />&#160;438_patch_v2.txt (71,050) <span class="italic">2014-06-30 08:37</span><br />http://www.sigmah.org/issues/file_download.php?file_id=203&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;438_scheme_updates_final.sql (983) <span class="italic">2014-06-30 08:38</span><br />http://www.sigmah.org/issues/file_download.php?file_id=204&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2012-02-02 13:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2012-12-04 14:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=302#r302</td></tr><tr class="print"><td class="print">2013-02-25 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 9.0 =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-25 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=320#r320</td></tr><tr class="print"><td class="print">2013-02-26 15:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Enhanced user session management</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Renamed</td><td class="print">Enhanced user session management =&gt; Enhanced user session and rights</td></tr><tr class="print"><td class="print">2014-05-24 00:03</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Assigned To</td><td class="print"> =&gt; renatoaf</td></tr><tr class="print"><td class="print">2014-05-24 00:03</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-05-27 05:40</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 01.permission.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:40</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02.change_password_option.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:40</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 03.change_password_prompt.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:40</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 04.expiration_policy_1.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:41</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 05.expiration_policy_2.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:43</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 438_patch.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 05:44</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 438_scheme_updates.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-27 06:05</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001415</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-02 20:54</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001416</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-04 22:03</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001417</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-06 14:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001419</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-08 07:30</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001421</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-30 08:36</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: fix01 - frequency and new user policy.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-30 08:37</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: fix02 - current password.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-30 08:37</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 438_patch_v2.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-30 08:38</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 438_scheme_updates_final.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-30 08:39</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001456</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-10 22:06</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001489</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-13 15:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000517</td></tr><tr class="print"><td class="print">2014-08-13 15:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2014-08-13 15:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=471#r471</td></tr><tr class="print"><td class="print">2014-08-13 15:54</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001495</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-12 10:16</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001510</td><td class="print"></td></tr><tr class="print"><td class="print">2015-03-12 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 774e8221</td></tr><tr class="print"><td class="print">2015-04-03 16:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship replaced</td><td class="print">related to 0000517</td></tr><tr class="print"><td class="print">2015-04-03 16:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001572</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-03 16:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-03 16:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-03 16:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-03 17:17</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001573</td><td class="print"></td></tr></table>
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
				(0001415)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-05-27 06:05&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi, I've uploaded some pictures to illustrate the solution behavior. Some comments:<br />
<br />
- The button &quot;Change your password&quot; (picture 2) only appears when the user has the permission &quot;Change own password&quot;, granted by his profiles (picture 1). By clicking on it, he will be able to change his password whenever he wants (picture 3);<br />
<br />
- The &quot;Change password&quot; prompt (picture 3) also shows up automatically when a new user logs in or when his password expires (which is defined according to the last time the user changed his password and  the expiration policy configured by an administrator);<br />
<br />
- Five expiration policies are available: Never, Weekly, Monthly, Yearly and Scheduled (pictures 4 and 5). The &quot;Scheduled&quot; expiration policy requires a specific date on which all users should change their password. I believe the others are self-explainable.<br />
<br />
One important question:<br />
<br />
- Users are allowed to use their current password when the &quot;change password&quot; prompt shows up automatically? (i. e. they can choose not to update it?)<br />
<br />
Please let me know if anything should be changed or improved.			</td>
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
				(0001416)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-02 20:54&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Very good work so far! (on the basis of the screenshots)<br />
I like very much your idea to have the &quot;Change password&quot; link closed to the logout button.<br />
<br />
My replies and suggestions for last improvements:<br />
- When the &quot;Change password&quot; prompt shows up automatically, users are not allowed to set up a new password which is the same as the current one.<br />
- The &quot;Change password&quot; prompt should pop up automatically only when the user password has expired and he logs in. There is no reason to ask a new user to change his password automatically at his first log in. (which reason whould you see?)<br />
- For security reason, when the &quot;Change password&quot; prompt is opened manually, the system should also ask the current password for verification.<br />
- For the expiration policies, I would suggest to have: Never, Weeks, Months, Scheduled. If Weeks or Months is selected, the admin must enter a number (positive integer) indicating the number of weeks or months to use as frequency. I'm sure some organisation may request to have changes every 3 months or 6 months...<br />
<br />
Congrats for the good design!			</td>
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
				(0001417)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-04 22:03&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi osarrat,<br />
<br />
I like these ideas too. I'll work on these improvements soon.<br />
<br />
As for the second topic: &quot;There is no reason to ask a new user to change his password automatically at his first log in. (which reason whould you see?)&quot;, I based it on the feature description:<br />
<br />
&quot;... he will be prompted to change his password by himself each time his password has been automatically set or reset (at the creation of his user account, or when his password has expired)&quot;<br />
<br />
I thought it was required because user's first password is currently automatically defined ( sent within the email invitation ). Is this no longer necessary?<br />
<br />
Thank you for the feedback.			</td>
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
				(0001419)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-06 14:39&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I haven't read again the initial description of the feature.<br />
I think then that the behaviof you planned is right, but I would suggest to make this feature flexibility: a new &quot;Ask user for new password at his first log in&quot; checkbox in the &quot;Password expiration policy&quot; admin part could be added.<br />
If you are ok with it, let's go in that direction!			</td>
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
				(0001421)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-08 07:30&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Great! I'll get back to it as soon as I finish a first version of <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.<br />
Thank you.			</td>
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
				(0001456)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-30 08:39&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I just attached a new patch and SQL script with all adjustments. Please ignore the first patch I've sent.			</td>
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
				(0001489)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-08-10 22:06&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I've merged all my GSoC work into a single patch to simplify the synchronization, so please ignore this patch. I'll update the wiki page with the SQL modifications.			</td>
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
				(0001495)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-08-13 15:54&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				When you will upload your patch, please indicate then all the issues it should solve (and don't forget to include issue <a href="view6017.html?id=517" title="[assigned] Automatic user password reset">0000517</a> in the list).			</td>
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
				(0001510)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-12-12 10:16&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Latest patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.			</td>
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
				(0001572)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-03 16:59&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because general expected behavior checked on v2.0-rc1.			</td>
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
				(0001573)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-03 17:17&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue completly verified through test case app-178 .			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=438 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:42 GMT -->
</html>
