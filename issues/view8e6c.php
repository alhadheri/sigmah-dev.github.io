<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=638&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:46 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:40:42 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000638: Performance improvement by removing default language properties file - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page498c.html?return=%2Fissues%2Fview.php%3Fid%3D638%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:40 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view8e6c.php?id=638&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pageef59.php?bug_id=638">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000638</td><td>sigmah</td><td>[All Projects] General</td><td>public</td><td>2014-11-13 15:27</td><td>2015-04-01 12:30</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>dcolliot</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>minor</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>2.0</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000638: Performance improvement by removing default language properties file</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Currently, we have two sorts of language files:<br />
- a default one without suffix (used for &quot;developer English&quot;, where developers enter their source string (cf <a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators">https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators</a> [<a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators" target="_blank">^</a>])): *.properties<br />
- one file per language, including British English, with content reviewed by translators: *_$$.properties <br />
<br />
As a consequence, with 3 languages available in Sigmah (_en, _es, _fr), we have 4 translation contents included by GWT in the application Javascript.<br />
<br />
To improve performance and reduce the size of the application Javascript, a solution could be found to remove the default language properties file.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">Log of the original discussion on IRC:<br />
<br />
(14:43:43) dco: osarrat1: I have a question for you about the translation files (i18n)<br />
(14:43:53) osarrat: yes ?<br />
(14:44:09) dco: today, we have the following files : (default), _en, _fr and _es<br />
(14:44:32) dco: but, (default) and _en should be identical, right ?<br />
(14:44:40) osarrat: not exactly<br />
(14:44:49) dco: (application default language is _en)<br />
(14:44:53) osarrat: the (default) is the &quot;developer English&quot; one<br />
(14:45:04) osarrat: the _en is the validated British English one<br />
(14:45:59) dco: in the end, the default one is never used, because there is always a language selected (or the default &quot;en&quot;)<br />
(14:46:10) osarrat: you can take a look at  <a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators">https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators</a> [<a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators" target="_blank">^</a>]<br />
(14:46:28) dco: so the (default) file is loaded into the app, but it is never used<br />
(14:46:38) osarrat: But if the string is missing in the _en file, will the default one be used ?<br />
(14:46:58) dco: yes<br />
(14:47:14) dco: it's just about the amount of data embedded into the app<br />
(14:48:13) osarrat: Normally, as written in the contribution rules guide, developers should only work on the default files (no suffix).<br />
(14:48:54) osarrat: And then, before releasing a major release, the translators team will translate every string from the no suffix file to each of the translated files (with suffix).<br />
(14:49:36) osarrat: So could we imagine a dynamic system to reduce the file embedded inthe app ?<br />
(14:50:04) dco: the only solution would be to merge the (default) and _en files<br />
(14:50:33) osarrat: example 1: a file per language is computed, and if a string is missing in the translated file, the process will automatically take the missing string from the default file<br />
(14:51:16) osarrat: example 2: 2 building options are possible, one with all files including the default one, and one with only the translated files for major releases<br />
(14:51:55) osarrat: Is one of this solution possible ?<br />
(14:52:00) chl_ a quitté le salon (quit: Ping timeout: 250 seconds)<br />
(14:52:02) dco: unfortunately, the (default) file is mandatory (GWt requirements)<br />
(14:52:29) osarrat: ok<br />
(14:52:59) osarrat: So your idea is to replace the default file by the English one in the release, isn't it ?<br />
(14:53:21) dco: that was my idea<br />
(14:53:41) dco: but I completely understant the translation process you put in place<br />
(14:54:03) osarrat: Could we done that only during the building process, and keep the source files as they are?<br />
(14:54:30) osarrat: Would Maven have another wonderful option to do such a trick? :)<br />
(14:55:15) dco: like I was saying, the (default) file has to be there, so it would contain the &quot;_en&quot;  data<br />
(14:55:45) osarrat: my idea would be to replace the default one by the _en in a temp folder for the build<br />
(14:55:49) dco: but we could have a &quot;to translate&quot;  that would not be managed by GWt permutations<br />
(14:56:55) osarrat: How many files would have in the source files with your suggestion?<br />
(14:58:21) osarrat: dco ?<br />
(14:58:23) dco: Let's imagine the following files :<br />
(14:58:24) dco: - _to_translate.properties (completely out of GWT scope)<br />
(14:58:24) dco: - (default) containing default language (&quot;en&quot; in our case)<br />
(14:58:24) dco: - _fr<br />
(14:58:24) dco: - _es<br />
(15:01:03) osarrat: And then, developers would only work on _to_translate<br />
(15:01:24) dco: well, not exactly... :-/<br />
(15:01:50) dco: the app (GWT) needs to find the properties into the (default) file to work properly<br />
(15:02:35) dco: how do the translators team work, what do they have on screen to determine if a property has already been translated ?<br />
(15:04:53) osarrat: =&gt; <a href="http://pootle.sigmah.org/">http://pootle.sigmah.org</a> [<a href="http://pootle.sigmah.org/" target="_blank">^</a>] :)<br />
(15:05:46) osarrat: Concrete example : <a href="http://pootle.sigmah.org/en_GB/sigmah/UIConstants.properties/translate/?page=5">http://pootle.sigmah.org/en_GB/sigmah/UIConstants.properties/translate/?page=5</a> [<a href="http://pootle.sigmah.org/en_GB/sigmah/UIConstants.properties/translate/?page=5" target="_blank">^</a>]<br />
(15:06:58) osarrat: Let's go back to original objective : what will we get if we remove on the 4 existing translation files ? <br />
(15:07:22) osarrat: Is this file loaded in some way in Javascript for the end-user ?<br />
(15:08:37) dco: yes, the i18n files content is directly &quot;included&quot; into a JS/HTML permutation file (to improve performances)<br />
(15:09:26) dco: we don't have to find a solution right now, it's not an urgent matter<br />
(15:10:11) dco: I just wanted to submit my opinion on the subject and understand the translation process<br />
(15:12:10) osarrat: Ok, so to conclude this discussion, we could add another issue in the bug tracker about this topic as a performance improvement possibility ?<br />
(15:14:36) dco: it's just a compilation improvement (build process) =&gt; not an urgent subject...<br />
(15:14:54) dco: anyway, thanks for your answers</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

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
<tr class="bugnote" id="c1556">
        <td class="bugnote-public">
				<span class="small">(<a href="viewe7d2.html?id=638#c1556" title="Direct link to note">0001556)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2015-04-01 12:16</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Edited wiki page ContributionRules to match with issue <a href="viewe7d2.html?id=638" title="[closed] Performance improvement by removing default language properties file" class="resolved">0000638</a> solving solution which has removed the  ***_en.properties file .<br />
<br />
Modified : /wiki/ContributionRules.wiki<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1557">
        <td class="bugnote-public">
				<span class="small">(<a href="viewe7d2.html?id=638#c1557" title="Direct link to note">0001557)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2015-04-01 12:30</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Edited wiki page TranslationGuide to match the removal of the _en translation properties file in v2.0 as resolution of issue <a href="viewe7d2.html?id=638" title="[closed] Performance improvement by removing default language properties file" class="resolved">0000638</a>.<br />
<br />
Modified : /wiki/TranslationGuide.wiki<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1558">
        <td class="bugnote-public">
				<span class="small">(<a href="viewe7d2.html?id=638#c1558" title="Direct link to note">0001558)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-01 12:30</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Closed, because fixed in version 2.0 with commit <a href="https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e">https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e</a> [<a href="https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e" target="_blank">^</a>] .	</td>
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
<tr class="row-1">
	<td class="small-caption">
		2014-11-13 15:27	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-01 12:16	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-01 12:16	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001556	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001557	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001558	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; dcolliot	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-01 12:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		unplanned =&gt; 2.0	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=638&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:46 GMT -->
</html>
