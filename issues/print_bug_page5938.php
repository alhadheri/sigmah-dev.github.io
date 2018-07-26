<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=99 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:12 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:40:57 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000099: Funding source Budget part percentage not udpated on total budget change - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000099</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2011-02-25 15:57</td><td class="print">2013-07-23 11:31</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">tharindum</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">0.8.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">1.2</td><td class="print-category">Fixed in Version</td><td class="print">1.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000099: Funding source Budget part percentage not udpated on total budget change</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">If the total budget of a project is changed, the percentage of each of its funding source in this total budget is not updated.<br />
Those percentages should be computed and updated.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">The percentage is actually changed, but only after a refresh of the page.<br />
This bug has been converted from a bug to a feature. The expected behavior is now an automatic refresh of the budget part percentage in project links.</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/text.html" alt="patch" />&#160;ProjectDetailsPresenter.java.patch (2,402) <span class="italic">2013-05-05 10:10</span><br />http://www.sigmah.org/issues/file_download.php?file_id=77&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-02-25 15:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2011-03-23 19:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print"> =&gt; 1.0</td></tr><tr class="print"><td class="print">2011-05-29 17:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; tmiette</td></tr><tr class="print"><td class="print">2011-05-29 17:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2011-05-30 20:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">tmiette =&gt; </td></tr><tr class="print"><td class="print">2011-05-30 20:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Severity</td><td class="print">major =&gt; feature</td></tr><tr class="print"><td class="print">2011-05-30 20:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2011-05-30 20:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">1.0 =&gt; unplanned</td></tr><tr class="print"><td class="print">2011-05-30 20:10</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=92#r92</td></tr><tr class="print"><td class="print">2013-05-05 10:10</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">File Added: ProjectDetailsPresenter.java.patch</td><td class="print"></td></tr><tr class="print"><td class="print">2013-05-05 10:12</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Note Added: 0001153</td><td class="print"></td></tr><tr class="print"><td class="print">2013-05-06 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; tharindum</td></tr><tr class="print"><td class="print">2013-05-06 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-05-06 09:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 1.2</td></tr><tr class="print"><td class="print">2013-05-08 07:49</td><td class="print"><a href="view_user_page7d36.html?id=51">tharindum</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-05-24 19:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001194</td><td class="print"></td></tr><tr class="print"><td class="print">2013-05-24 19:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; assigned</td></tr><tr class="print"><td class="print">2013-06-03 14:56</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-03 14:56</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001217</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-03 14:56</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-06-03 14:56</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-07-02 18:25</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001270</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-23 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-07-23 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 3.6 (Namoroka) =&gt; NA</td></tr><tr class="print"><td class="print">2013-07-23 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001305</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-23 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2013-07-23 11:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 1.2</td></tr></table>
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
				(0001153)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page7d36.html?id=51">tharindum</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-05-05 10:12&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Please apply this patch to fix this issue. It's not relating to refresh of the page, but to update budget changes to the funding projects' funded object.			</td>
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
				(0001194)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-05-24 19:46&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue shift back to assigned because patch used to solve it not yet committed in the codebase.<br />
<br />
Other information: this issue should be test with integration test case <a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21">http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21</a> [<a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21" target="_blank">^</a>]			</td>
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
				(0001217)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-06-03 14:56&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch by tharindum : applies budget changes to the funding projects' funded object (fixes issue <a href="view0468.html?id=99" title="[closed] Funding source Budget part percentage not udpated on total budget change" class="resolved">0000099</a>).<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java<br />
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
				(0001270)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-02 18:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Integration test case <a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21">http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21</a> [<a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21" target="_blank">^</a>] failed on v1.2-rc3. Even though it concerns the deletion of project link and not the update of the Budget part percentage, we will wait the 1.2-rc4 and the correct execution of PRJM21 to close this issue.			</td>
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
				(0001305)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-23 11:31&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v1.2-rc4, and no risk of regression because <a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21">http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21</a> [<a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21" target="_blank">^</a>] passes on v1.2-rc4 .			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=99 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:12 GMT -->
</html>
