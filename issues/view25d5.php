<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=615&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:22 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:29:53 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000615: Unnecessary trailing commas in some columns of User Admin page - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagea4f6.html?return=%2Fissues%2Fview.php%3Fid%3D615%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:29 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view25d5.php?id=615&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page3006.php?bug_id=615">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000615</td><td>sigmah</td><td>Administration</td><td>public</td><td>2014-03-09 15:33</td><td>2015-06-17 15:40</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>spM</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>spM</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>trivial</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td>Mac OSx</td><td class="category">OS</td><td></td><td class="category">OS Version</td><td>10.7 </td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000615: Unnecessary trailing commas in some columns of User Admin page</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">On the User administration page, there are unnecessary trailing commas under the profiles column of the User panel , and the Global Authorization columns and Privacy Group columns of the Profiles panel.<br />
Though not a high priority task, but I guess its good to fix it just for the sake of aesthetics.<br />
<br />
(Attached is an image with the unnecessarily marked commas )</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloadf1f8.php?file_id=141&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadf1f8.php?file_id=141&amp;type=bug">bug_report_sigmah.png</a> [<a href="file_downloadf1f8.php?file_id=141&amp;type=bug" target="_blank">^</a>] (86,315 bytes) <span class="italic">2014-03-09 15:33</span>
<br /><a href="file_downloadf1f8.php?file_id=141&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="bug_report_sigmah72c6.png?file_id=141&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072562f3261accd7e4f5273a3ea3b9cbb8ade171ce7a" /></a><br />
<br /><a href="file_download2668.php?file_id=142&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download2668.php?file_id=142&amp;type=bug">615.patch</a> [<a href="file_download2668.php?file_id=142&amp;type=bug" target="_blank">^</a>] (1,388 bytes) <span class="italic">2014-03-09 15:42</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_142">[<a class="small" href='#' id='attmlink_142' onclick='swap_content("hideSection_142");swap_content("showSection_142");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_142">[<a class="small" href='#' id='attmlink_142' onclick='swap_content("hideSection_142");swap_content("showSection_142");return false;'>Hide Content</a>]<pre>Index: sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(revision 1561)
	+++ sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(working copy)
	@@ -290,6 +290,9 @@
	 					if (perm != null &amp;&amp; !perm.isEmpty())
	 						content = perm + &quot;, &quot; + content;
							 				}
+				if(content != &quot;&quot;){ //removes the trailing comma
	+				content = content.substring(0, content.lastIndexOf(&quot;, &quot;));
	+				}
	 				return createUserGridText(content);
					 
					 			}
@@ -309,6 +312,10 @@
 					content = &quot;(&quot; + pg.getKey().getTitle() + &quot;, &quot; + PrivacyGroupPermissionEnum.getName(pg.getValue())
					 					                + &quot;)&quot; + &quot;, &quot; + content;
												 				}
+				if(content != &quot;&quot;){//removes the trailing comma
	+					content = content.substring(0, content.lastIndexOf(&quot;, &quot;));
	+				}
	+				
	 				return createUserGridText(content);
					 			}
 
@@ -482,6 +489,7 @@
 					for (ProfileDTO oneProfileDTO : model.getProfilesDTO()) {
						 						content = oneProfileDTO.getName() + &quot;, &quot; + content;
												 					}
+					content = content.substring(0, content.lastIndexOf(&quot;, &quot;)); // removes the trailing comma
 				} else {
					 					content = I18N.CONSTANTS.adminUsersNoProfiles();
										 				}

</pre></span>
</td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"></td>
</tr>
</table>

</div><div id="relationships_closed" class="hidden"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Relationships	</td>
</tr>
</table>

</div>
<a name="bugnotes" id="bugnotes" /><br />

<div id="bugnotes_open"><table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;		Notes	</td>
</tr>
<tr class="bugnote" id="c1380">
        <td class="bugnote-public">
				<span class="small">(<a href="view4df4.html?id=615#c1380" title="Direct link to note">0001380)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-03-09 15:43</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		attached the patch for the same by the filename 615.patch.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1481">
        <td class="bugnote-public">
				<span class="small">(<a href="view4df4.html?id=615#c1481" title="Direct link to note">0001481)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-29 11:52</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by spM : Unnecessary trailing commas in some columns of User Admin page. (fixes issue <a href="view4df4.html?id=615" title="[closed] Unnecessary trailing commas in some columns of User Admin page" class="resolved">0000615</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1808">
        <td class="bugnote-public">
				<span class="small">(<a href="view4df4.html?id=615#c1808" title="Direct link to note">0001808)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-06-17 15:40</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc4.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
</table>

</div><div id="bugnotes_closed" class="hidden">
<table class="width100" cellspacing="1">
<tr>
	<td class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'bugnotes' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;		Notes	</td>
</tr>
</table>
</div>
<a name="history" id="history" /><br />

<div id="history_open"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Issue History	</td>
</tr>
<tr class="row-category-history">
	<td class="small-caption">
		Date Modified	</td>
	<td class="small-caption">
		Username	</td>
	<td class="small-caption">
		Field	</td>
	<td class="small-caption">
		Change	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-09 15:33	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-09 15:33	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-09 15:33	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; spM	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-09 15:33	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: bug_report_sigmah.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-09 15:42	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 615.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-09 15:43	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001380	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-12 10:13	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Product Version	</td>
	<td class="small-caption">
		3.0 =&gt; 1.2	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-12 10:13	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-12 10:13	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Unnecessary trailing commas in profiles column, global authorization column, and Privacy groups column of User Administration Pa =&gt; Unnecessary trailing commas in some columns of User Admin page	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-29 11:52	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-29 11:52	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001481	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-29 11:52	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-29 11:52	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-06-17 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001808	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-06-17 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-06-17 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
</table>
</div><div id="history_closed" class="hidden"><table class="width100" cellspacing="0">
<tr>
	<td class="form-title" colspan="4">
	<a href="#" onclick="ToggleDiv( 'history' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Issue History	</td>
</tr>
</table>

</div>	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=615&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:05:23 GMT -->
</html>
