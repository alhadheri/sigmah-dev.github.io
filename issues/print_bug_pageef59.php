<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=638 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:46 GMT -->
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
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000638</td><td class="print">sigmah</td><td class="print">[All Projects] General</td><td class="print">public</td><td class="print">2014-11-13 15:27</td><td class="print">2015-04-01 12:30</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">dcolliot</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">minor</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">2.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000638: Performance improvement by removing default language properties file</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Currently, we have two sorts of language files:<br />
- a default one without suffix (used for &quot;developer English&quot;, where developers enter their source string (cf <a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators">https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators</a> [<a href="https://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators" target="_blank">^</a>])): *.properties<br />
- one file per language, including British English, with content reviewed by translators: *_$$.properties <br />
<br />
As a consequence, with 3 languages available in Sigmah (_en, _es, _fr), we have 4 translation contents included by GWT in the application Javascript.<br />
<br />
To improve performance and reduce the size of the application Javascript, a solution could be found to remove the default language properties file.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Log of the original discussion on IRC:<br />
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
(15:14:54) dco: anyway, thanks for your answers</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-11-13 15:27</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:16</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:16</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001556</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001557</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001558</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; dcolliot</td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-01 12:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 2.0</td></tr></table>
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
				(0001556)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-01 12:16&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Edited wiki page ContributionRules to match with issue <a href="viewe7d2.html?id=638" title="[closed] Performance improvement by removing default language properties file" class="resolved">0000638</a> solving solution which has removed the  ***_en.properties file .<br />
<br />
Modified : /wiki/ContributionRules.wiki<br />
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
				(0001557)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-01 12:30&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Edited wiki page TranslationGuide to match the removal of the _en translation properties file in v2.0 as resolution of issue <a href="viewe7d2.html?id=638" title="[closed] Performance improvement by removing default language properties file" class="resolved">0000638</a>.<br />
<br />
Modified : /wiki/TranslationGuide.wiki<br />
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
				(0001558)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-01 12:30&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Closed, because fixed in version 2.0 with commit <a href="https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e">https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e</a> [<a href="https://github.com/sigmah-dev/sigmah/commit/483e966b4b330ae79fd4110547476199d31f1e7e" target="_blank">^</a>] .			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=638 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:11:46 GMT -->
</html>
