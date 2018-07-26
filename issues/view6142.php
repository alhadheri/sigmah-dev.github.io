<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=610&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:57 GMT -->
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
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page6244.html?return=%2Fissues%2Fview.php%3Fid%3D610%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:28 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view6142.php?id=610&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page531b.php?bug_id=610">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000610</td><td>sigmah</td><td>Administration</td><td>public</td><td>2014-01-13 10:58</td><td>2015-07-08 17:54</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>spM</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>minor</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000610: Strict email validation on user creation</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">When creating a user, there should be a strict email validation check. If the email entered contains space character inside or on the border of the email character string, the email should not be accepted.<br />
Space characters on the border of the email address character string should be automatically trimmed without informing the user.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/896">http://www.sigmah.org/node/896</a> [<a href="http://www.sigmah.org/node/896" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_download3aeb.php?file_id=150&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download3aeb.php?file_id=150&amp;type=bug">610.patch</a> [<a href="file_download3aeb.php?file_id=150&amp;type=bug" target="_blank">^</a>] (2,637 bytes) <span class="italic">2014-03-11 12:58</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_150">[<a class="small" href='#' id='attmlink_150' onclick='swap_content("hideSection_150");swap_content("showSection_150");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_150">[<a class="small" href='#' id='attmlink_150' onclick='swap_content("hideSection_150");swap_content("showSection_150");return false;'>Hide Content</a>]<pre>Index: sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties
===================================================================
--- sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(working copy)
@@ -233,4 +233,6 @@
 #Heading for the reviewing the details imported for a project/org unit
 importConfirmationDetailsHeading=Confirm importation details for {0}
 #Notification that the importation has been successful
-importSuccessful=The importation was successful for  ''{0}''
\ No newline at end of file
+importSuccessful=The importation was successful for  ''{0}''
+#Invalid EmailAddress Message
+invalidEmailAddress=The Email Address appears to be invalid. Please check the Email Address Again
\ No newline at end of file
Index: sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java	(working copy)
@@ -9,6 +9,9 @@
 import java.util.HashMap;
 import java.util.List;
 import java.util.Map;
+import java.util.regex.Matcher;
+import java.util.regex.Pattern  ;
+
 
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.Dispatcher;
@@ -79,6 +82,8 @@
 	private final static int LABEL_WIDTH = 90;
 	private final static int MAX_PROFILES_TENTATIVES_PER_USER = 100;
 	private final static String ID_PROFILE = &quot;idProfile&quot;;
+	private static final String EMAIL_PATTERN = &quot;^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@&quot;+&quot;[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$&quot;;
+
 
 	public UserSigmahForm(Dispatcher dispatcher, UserLocalCache cache, final AsyncCallback&lt;CreateResult&gt; callback,
 			UserDTO userToUpdate) {
@@ -384,7 +389,19 @@
 
 		final String name = nameField.getValue();
 		final String firstName = firstNameField.getValue();
-		final String email = emailField.getValue();
+		final String email = emailField.getValue().trim();
+		
+		//Validate Email by matching with the given regex
+		Pattern pattern = Pattern.compile(EMAIL_PATTERN);
+		Matcher matcher = pattern.matcher(email);
+		if(!matcher.matches()){
+			MessageBox.alert(I18N.CONSTANTS.createFormIncomplete(), I18N.MESSAGES.invalidEmailAddress(), null);
+			unmask();
+			return;
+		}
+		//Validated Email
+		
+		
 		//Get the value only if the admin wants to change the password
 		final String pwd = pwdField.isVisible() ? pwdField.getValue() : null;
 
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
<tr class="bugnote" id="c1382">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf2c2.html?id=610#c1382" title="Direct link to note">0001382)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-03-10 13:06</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi,<br />
I attached a patch by the name 610.patch to solve this issue. <br />
<br />
The Input from the EmailField is trimmed first, and then matched with a simple regular expression to validate as a proper email address. <br />
The Regular Expression I use now is as follows ::<br />
^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@&quot;+&quot;[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$<br />
<br />
This will work for all common email forms. But, if we want a more exhaustive Email Validation and conform to the RFC 822 grammar for Email addresses, we will have to replace the pattern to use the Regular expression given in this link :: <a href="http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html">http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html</a> [<a href="http://www.ex-parrot.com/pdw/Mail-RFC822-Address.html" target="_blank">^</a>]<br />
Which as you can see is much more complex. Though for most practical cases the above regular expression can be used safely.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1478">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf2c2.html?id=610#c1478" title="Direct link to note">0001478)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-29 11:29</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by spM : Strict email validation on user creation. (fixes issue <a href="viewf2c2.html?id=610" title="[closed] Strict email validation on user creation" class="resolved">0000610</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1898">
        <td class="bugnote-public">
				<span class="small">(<a href="viewf2c2.html?id=610#c1898" title="Direct link to note">0001898)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-07-08 17:54</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc6.	</td>
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
		2014-01-13 10:58	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-02-14 11:47	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rush52	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-02-14 11:47	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-10 13:06	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001382	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-10 13:07	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 610.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-10 13:08	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		rush52 =&gt; spM	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 12:57	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Deleted: 610.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 12:58	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 610.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-29 11:29	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-29 11:29	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001478	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-29 11:29	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-29 11:29	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-08 17:54	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001898	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-07-08 17:54	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-08 17:54	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=610&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:57 GMT -->
</html>
