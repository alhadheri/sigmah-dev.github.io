<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=605&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:28 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:37:04 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000605: Resumable transfer of files - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page9614.html?return=%2Fissues%2Fview.php%3Fid%3D605%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:37 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view8784.php?id=605&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page446d.php?bug_id=605">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000605</td><td>sigmah</td><td>[All Projects] General</td><td>public</td><td>2013-08-02 16:53</td><td>2015-04-03 16:48</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>spM</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000605: Resumable transfer of files</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">In context where the Internet connection is weak, the connection is often not very stable neither. This means that it may take for example 10 minutes to slowly upload a file until a micro-shutdown of the connection interrupts the transfer before its end, and the whole upload needs to be started from scratch once again. A solution to be able to pause the uploading of files when there is no more connection should be found.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">Look at this mockup to see how the resume of file transfer could be controled: <a href="mockups/OfflineMode/index.html">http://www.sigmah.org/issues/mockups/OfflineMode/</a> [<a href="mockups/OfflineMode/index.html" target="_blank">^</a>]</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">child of</span>&#160;</td><td><a href="view27be.html?id=633">0000633</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Background transfer of files&#160;</td></tr>
</table></td>
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
<tr class="bugnote" id="c1423">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1423" title="Direct link to note">0001423)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-10 18:11</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I am currently working on this issue, and Olivier asked me to post my technical questions to this thread for record.<br />
<br />
So I am currently ready with a prototype of the protocol that I had proposed in my GSoC proposal, the current frontend client is written using jquery and works perfectly file with the latest Firefox and Chrome browsers (all browsers which have the HTML5 FileAPI implemented) , and the backend interactions are handled by nodejs.<br />
<br />
So now my task is to port it into Sigmah. I wanted to include jquery and my fileAPI interactions using jquery code using the Java Native Interface (JNI) provided by GWT directly, and then write a servlet which handles the bakend interactions according to the protocol.<br />
<br />
So, is it accepted according to the Sigmah coding principles if I want to include the whole of jquery and some extra raw jquery code into the pages ?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1425">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1425" title="Direct link to note">0001425)</a></span><br />
		<a href="view_user_page23df.php?id=74">jbriand</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-13 16:52</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I am not really keen on using jquery within GWT. An it's normally not the purpose of GWT.<br />
<br />
Why don't you implement your solution in classique gwt ? Is there any feature in jquery you cannot render with GWT ?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1431">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1431" title="Direct link to note">0001431)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-19 01:48</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi jbriand,<br />
<br />
I understand, but for now I have written an implementation of the feature using just jquery in clientside and nodejs on backend, so I was hoping if it was okay to have a part of the clientside code in jquery.<br />
<br />
And I mainly wanted to use the HTML5 File API, upon more research I found this implementation (<a href="https://code.google.com/p/lib-gwt-file/">https://code.google.com/p/lib-gwt-file/</a> [<a href="https://code.google.com/p/lib-gwt-file/" target="_blank">^</a>]) which looks promising. I will be building around this to implement the client side interactions if its a strong no for jquery.<br />
Thanks for your inputs :)	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1438">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1438" title="Direct link to note">0001438)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-06-23 16:56</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I've tested your Proof-Of-Concept on <a href="http://web.iiit.ac.in:11988/demo/index.html">http://web.iiit.ac.in:11988/demo/index.html</a> [<a href="http://web.iiit.ac.in:11988/demo/index.html" target="_blank">^</a>] .<br />
Result of my test of an upload of 25MB file:<br />
- 1rst unplug of my network cable after 15% of the file uploaded: when I have replugged the cable, the progression bar has come back to 1% (or 0?)<br />
- 2nd unplug of my network cable after 30% of the file uploaded: I had a javascript alert message informing me that there has been an error while I was offline<br />
<br />
Have you also experienced those 2 cases?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1441">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1441" title="Direct link to note">0001441)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-23 17:58</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		osarrat : We I had tested it disconnection gaps of upto 10minutes, and it still works for me, I would still have a look at it from different connections and get back to you on this. Maybe I should implement better logs on the server side of the implementation to figure out what could be the issue behind these errors.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1468">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1468" title="Direct link to note">0001468)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-07-25 09:43</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		spM, I would have a suggestion about the design of the technical reply for this feature request. Could we imagine to have a higher-level solution than the one you propose? A service which would chunk files in small pieces on the client side and build back the original files from the pieces on the server side?<br />
rcalabro, how should such a service be designed to be reused for the offline mode?	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1470">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1470" title="Direct link to note">0001470)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-25 10:09</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		osarrat : For now I do the same thing. I use the HTML5 File API to chunk a big file into small parts and upload individual parts one by one marked by an ID which says which file these chunks belong to and the offset. Then on the server side, the servlet is receiving these chunks and combining them into the original file. <br />
(For now, I am testing using CURL on the servlet I have written and it works great !!) <br />
But when simulating really bad connections with faux disconnections in between....then sometimes things mess up because of GWT RPC disconnections :'( <br />
<br />
So for that, my current approach which I am looking at, is to set a custom timeout for the GWT RPC connections I will be using, and then in case of the GWT RPC timeout, I simply try doing it again.<br />
(Reference : <a href="https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es">https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es</a> [<a href="https://groups.google.com/forum/#!topic/google-web-toolkit/EZYMKOGi2es" target="_blank">^</a>] )	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1471">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1471" title="Direct link to note">0001471)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-07-25 11:29</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Good !<br />
And regarding link with the offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>), best would be to have a good API on the work you do so that the file stream which will be used for synchronization will also be able to use your work and resist to bad connections.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1498">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1498" title="Direct link to note">0001498)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-08-28 17:31</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		spM, a full mockup of the offline mode including file transfer has just been published. It could give you hint on how the whole thing could be integrated in Sigmah v2.0-rc1 by the end of September if possible.<br />
Your work in this could be to extend your code to make it work both for uploads and downloads and plug it to this GUI. Does it seem feasible for you in time for v2.0-rc1 ?<br />
<a href="mockups/OfflineMode/index.html">http://www.sigmah.org/issues/mockups/OfflineMode/</a> [<a href="mockups/OfflineMode/index.html" target="_blank">^</a>]	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1568">
        <td class="bugnote-public">
				<span class="small">(<a href="viewbe27.html?id=605#c1568" title="Direct link to note">0001568)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-03 16:48</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc1.<br />
The resume of file transfers is automatic and not manual, but the behavior is well replying to the need.	</td>
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
		2013-08-02 16:53	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-10-02 10:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; tharindum	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-10-02 10:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-02-14 16:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		tharindum =&gt; 	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-02-14 16:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; new	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-05 11:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; spM	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-05 11:02	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-10 18:11	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001423	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-13 16:52	</td>
	<td class="small-caption">
		<a href="view_user_page23df.php?id=74">jbriand</a>	</td>
	<td class="small-caption">
		Note Added: 0001425	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-19 01:48	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001431	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 16:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001438	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 17:58	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001441	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-25 09:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001468	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-25 10:09	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001470	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-25 11:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001471	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-25 11:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000528	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-28 17:31	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001498	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-29 17:50	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		child of 0000633	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-29 17:50	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship deleted	</td>
	<td class="small-caption">
		related to 0000528	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-29 17:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Background and robust uploading of files =&gt; Resumable transfer of files	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-29 17:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page3dcc.php?rev_id=475#r475">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-29 17:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page6903.php?rev_id=477#r477">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-03 16:48	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001568	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-03 16:48	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-03 16:48	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-03 16:48	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=605&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:28 GMT -->
</html>
