<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=419&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:08:05 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:27 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000419: Project/orgunit models modifications with Available status - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page2102.html?return=%2Fissues%2Fview.php%3Fid%3D419%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:34 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="#changesets">Related Changesets</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewbd88.php?id=419&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pageaf00.php?bug_id=419">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000419</td><td>sigmah</td><td>Administration</td><td>public</td><td>2011-11-16 11:43</td><td>2015-04-30 16:37</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>renatoaf</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000419: Project/orgunit models modifications with Available status</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">To be able to modify a project/orgunit models even though project/orgunit have been created from them, the following minor modifications should be allowed on &quot;Available&quot; models:<br />
- add new fields<br />
- add new groups<br />
- delete empty groups<br />
- rename fields and groups (but not change its type)<br />
- increase the limits of fields (increase number of allowed files, increase max number of characters), but decrease not allowed<br />
- move a field inside the same container (change of group, position)<br />
- disable fields: disabled fields won't be anymore visible if not in closed phase<br />
- modify the field's mandatory status (for existing projects whose phase containing an empty not mandatory field becoming now mandatory is closed, technical feasability should be checked: does it created a problem to have closed phase with mandotory field empty?)<br />
- for report fields, be able to change the attached report model so that new reports created from that field will use the new model ; for old reports created from old report model, there will be no change (all reports - new and old - will be visible in the 'report and documents)<br />
- for list of choice field: be able to add new items in the list, or disable an existing item (disabled items won't be anymore available to be selected as value for fields which haven't yet selected a value, but will remain the value for fields which have already selected them)<br />
- modify the content of the project/orgunit banner<br />
- increase the maximum limits of number of elements in the logframe (ie: increase number of expected results, add possibility to have groups for specific objectives, etc.)<br />
- change privacy groups attached to a field<br />
<br />
The following major modifications are not allowed:<br />
- adding or removing a phase<br />
- modify the core version of the project (disable amendable fields, or set as &quot;amendable&quot; fields which are not yet amendable)<br />
- modification of type of existing fields<br />
<br />
To make those model modifications without too much impact on the users, &quot;Available &amp; used&quot; models can be set to a temporary secondary status: &quot;Under maintenance&quot;. A new &quot;Under maintenance&quot; checkbox will be available in the project/orgunit model banner: when checked, the administrator can set a timer (30 minutes by default) to let user know when their project will be no more accessible because &quot;under maintenance&quot;. As soon as the admin check this checkbox, user having opened a project using this project model will be an information in the banner of the project : &quot;Your project will be temporary no more accessible for maintenance in XX minutes&quot;. As soon as the admin unckeck the checkbox, the projects/orgunit become normally accessible again. The admin must check this checkbox to be allowed to do all the allowed minor modifications on &quot;Available&quot; project/orgunit models, and he will be allowed to do those modifications only after the timer he has set has elapsed.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page230c.html?tag_id=1' title=''>More versatile &amp; flexible models</a>, <a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/527">http://www.sigmah.org/node/527</a> [<a href="http://www.sigmah.org/node/527" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_download13ea.php?file_id=181&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download13ea.php?file_id=181&amp;type=bug">01. a. maintenance (immediately).png</a> [<a href="file_download13ea.php?file_id=181&amp;type=bug" target="_blank">^</a>] (108,279 bytes) <span class="italic">2014-06-23 07:29</span>
<br /><a href="file_download13ea.php?file_id=181&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="01.%2520a.%2520maintenance%2520%2528immediately%252915af.png?file_id=181&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072514b537f6857786607823ef664e3f3c1f852df42b" /></a><br />
<br /><a href="file_download0704.php?file_id=182&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download0704.php?file_id=182&amp;type=bug">01. b. maintenance (scheduled).png</a> [<a href="file_download0704.php?file_id=182&amp;type=bug" target="_blank">^</a>] (108,202 bytes) <span class="italic">2014-06-23 07:29</span>
<br /><a href="file_download0704.php?file_id=182&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="01.%2520b.%2520maintenance%2520%2528scheduled%25292e23.png?file_id=182&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725375018acd6bf68277995c183fe9fd4d0391930c6" /></a><br />
<br /><a href="file_downloadbb29.php?file_id=183&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadbb29.php?file_id=183&amp;type=bug">01. c. maintenance alert on project.png</a> [<a href="file_downloadbb29.php?file_id=183&amp;type=bug" target="_blank">^</a>] (93,915 bytes) <span class="italic">2014-06-23 07:29</span>
<br /><a href="file_downloadbb29.php?file_id=183&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="01.%2520c.%2520maintenance%2520alert%2520on%2520project65ee.png?file_id=183&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725cf5ce5239a8a230164a819d39190dc9f11728159" /></a><br />
<br /><a href="file_download6111.php?file_id=184&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download6111.php?file_id=184&amp;type=bug">02. a. model on maintenance (ready to be changed).png</a> [<a href="file_download6111.php?file_id=184&amp;type=bug" target="_blank">^</a>] (102,082 bytes) <span class="italic">2014-06-23 07:29</span>
<br /><a href="file_download6111.php?file_id=184&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520a.%2520model%2520on%2520maintenance%2520%2528ready%2520to%2520be%2520changed%25297519.png?file_id=184&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807254499867482621b877f35190db8e72ef6e4e8fd98" /></a><br />
<br /><a href="file_download1b60.php?file_id=185&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download1b60.php?file_id=185&amp;type=bug">02. b. project on maintenance (not editable).png</a> [<a href="file_download1b60.php?file_id=185&amp;type=bug" target="_blank">^</a>] (83,585 bytes) <span class="italic">2014-06-23 07:29</span>
<br /><a href="file_download1b60.php?file_id=185&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520b.%2520project%2520on%2520maintenance%2520%2528not%2520editable%2529dc63.png?file_id=185&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072598b80780dea6c6ee8ba7366932cabdda2e0a7573" /></a><br />
<br /><a href="file_download4a14.php?file_id=186&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download4a14.php?file_id=186&amp;type=bug">02. c. mandatory field validation (adding new field).png</a> [<a href="file_download4a14.php?file_id=186&amp;type=bug" target="_blank">^</a>] (112,035 bytes) <span class="italic">2014-06-23 07:30</span>
<br /><a href="file_download4a14.php?file_id=186&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520c.%2520mandatory%2520field%2520validation%2520%2528adding%2520new%2520field%25290f83.png?file_id=186&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725c11a7fa0d5085b6fa05a2867cbb9bc88df73571f" /></a><br />
<br /><a href="file_download5e03.php?file_id=187&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download5e03.php?file_id=187&amp;type=bug">02. d. fields added during maintenance are fully editable.png</a> [<a href="file_download5e03.php?file_id=187&amp;type=bug" target="_blank">^</a>] (119,338 bytes) <span class="italic">2014-06-23 07:30</span>
<br /><a href="file_download5e03.php?file_id=187&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520d.%2520fields%2520added%2520during%2520maintenance%2520are%2520fully%2520editable7aee.png?file_id=187&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725c691371063b962696d466344ef29d015935e8b97" /></a><br />
<br /><a href="file_download1c2e.php?file_id=188&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download1c2e.php?file_id=188&amp;type=bug">02. e. removing empty layout groups.png</a> [<a href="file_download1c2e.php?file_id=188&amp;type=bug" target="_blank">^</a>] (77,240 bytes) <span class="italic">2014-06-23 07:31</span>
<br /><a href="file_download1c2e.php?file_id=188&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520e.%2520removing%2520empty%2520layout%2520groupsadd8.png?file_id=188&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807253c210228da363f6274a36d788d81b3206d98aa4d" /></a><br />
<br /><a href="file_download087f.php?file_id=189&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download087f.php?file_id=189&amp;type=bug">02. f. number of characters validation.png</a> [<a href="file_download087f.php?file_id=189&amp;type=bug" target="_blank">^</a>] (112,761 bytes) <span class="italic">2014-06-23 07:31</span>
<br /><a href="file_download087f.php?file_id=189&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520f.%2520number%2520of%2520characters%2520validationd312.png?file_id=189&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807254dd12f583ff049e870c002d303e9e3fd095a4fe0" /></a><br />
<br /><a href="file_downloadfcaa.php?file_id=190&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadfcaa.php?file_id=190&amp;type=bug">02. g. disabled fields.png</a> [<a href="file_downloadfcaa.php?file_id=190&amp;type=bug" target="_blank">^</a>] (106,552 bytes) <span class="italic">2014-06-23 07:32</span>
<br /><a href="file_downloadfcaa.php?file_id=190&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520g.%2520disabled%2520fields6429.png?file_id=190&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072510159c55cc40ec38813ca54625caf6bf01268abc" /></a><br />
<br /><a href="file_download0875.php?file_id=191&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download0875.php?file_id=191&amp;type=bug">02. h. mandatory field validation (editing old field).png</a> [<a href="file_download0875.php?file_id=191&amp;type=bug" target="_blank">^</a>] (115,059 bytes) <span class="italic">2014-06-23 07:32</span>
<br /><a href="file_download0875.php?file_id=191&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520h.%2520mandatory%2520field%2520validation%2520%2528editing%2520old%2520field%2529ff34.png?file_id=191&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=201807257cbaf5dac71f6041e9a0861eb07aa780e6785282" /></a><br />
<br /><a href="file_download6992.php?file_id=192&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download6992.php?file_id=192&amp;type=bug">02. i. choice field (new options and disabled ones).png</a> [<a href="file_download6992.php?file_id=192&amp;type=bug" target="_blank">^</a>] (116,728 bytes) <span class="italic">2014-06-23 07:33</span>
<br /><a href="file_download6992.php?file_id=192&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520i.%2520choice%2520field%2520%2528new%2520options%2520and%2520disabled%2520ones%2529e78f.png?file_id=192&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725646449a29e2f58b78b0181afde71088e9375c5c9" /></a><br />
<br /><a href="file_download1a0e.php?file_id=193&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download1a0e.php?file_id=193&amp;type=bug">02. j. log frame limits validation.png</a> [<a href="file_download1a0e.php?file_id=193&amp;type=bug" target="_blank">^</a>] (87,199 bytes) <span class="italic">2014-06-23 07:33</span>
<br /><a href="file_download1a0e.php?file_id=193&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="02.%2520j.%2520log%2520frame%2520limits%2520validation9597.png?file_id=193&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725da63e28c174f6592f318e95abbbfecf283c05d7b" /></a><br />
<br /><a href="file_download3288.php?file_id=194&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download3288.php?file_id=194&amp;type=bug">03. a. maintenance finished.png</a> [<a href="file_download3288.php?file_id=194&amp;type=bug" target="_blank">^</a>] (98,002 bytes) <span class="italic">2014-06-23 07:34</span>
<br /><a href="file_download3288.php?file_id=194&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="03.%2520a.%2520maintenance%2520finished6f39.png?file_id=194&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=2018072504a9c6c3184ad0e4491653f5406602e3fd1ac9c1" /></a><br />
<br /><a href="file_downloadfb73.php?file_id=195&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadfb73.php?file_id=195&amp;type=bug">03. b. project after maintenance.png</a> [<a href="file_downloadfb73.php?file_id=195&amp;type=bug" target="_blank">^</a>] (82,411 bytes) <span class="italic">2014-06-23 07:35</span>
<br /><a href="file_downloadfb73.php?file_id=195&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="03.%2520b.%2520project%2520after%2520maintenancebf02.png?file_id=195&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725c3b73f62abecdc31dfb5b2c3ef373f89ea1ddca3" /></a><br />
<br /><a href="file_download8f73.php?file_id=196&amp;type=bug"><img src="images/fileicons/png.gif" alt="png file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download8f73.php?file_id=196&amp;type=bug">03. c. project after maintenance.png</a> [<a href="file_download8f73.php?file_id=196&amp;type=bug" target="_blank">^</a>] (85,450 bytes) <span class="italic">2014-06-23 07:35</span>
<br /><a href="file_download8f73.php?file_id=196&amp;type=bug"><img alt="" style="border: 0; max-height:250px;" src="03.%2520c.%2520project%2520after%2520maintenance03ca.png?file_id=196&amp;type=bug&amp;show_inline=1&amp;file_show_inline_token=20180725e2a46e85780965d4dd859f98acb13e42217dbe38" /></a><br />
<br /><a href="file_download937b.php?file_id=207&amp;type=bug"><img src="images/fileicons/generic.gif" alt="? file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download937b.php?file_id=207&amp;type=bug">419_scheme_updates.sql</a> [<a href="file_download937b.php?file_id=207&amp;type=bug" target="_blank">^</a>] (444 bytes) <span class="italic">2014-07-21 22:01</span><br />
<a href="file_download64be.php?file_id=208&amp;type=bug"><img src="images/fileicons/text.html" alt="txt file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download64be.php?file_id=208&amp;type=bug">419_patch_v2.txt</a> [<a href="file_download64be.php?file_id=208&amp;type=bug" target="_blank">^</a>] (268,324 bytes) <span class="italic">2014-07-21 22:01</span><br />
<a href="file_download4f06.php?file_id=229&amp;type=bug"><img src="images/fileicons/zip.gif" alt="zip file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download4f06.php?file_id=229&amp;type=bug">Renato_GSoC2014_finalPatchAndSQL.zip</a> [<a href="file_download4f06.php?file_id=229&amp;type=bug" target="_blank">^</a>] (90,020 bytes) <span class="italic">2014-12-12 10:09</span></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view7d12.html?id=731">0000731</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Missing logframe model manipulation for under maintenance project models&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">has duplicate</span>&#160;</td><td><a href="view5844.php?id=314">0000314</a></td><td><span class="issue-status" title="duplicate">closed</span></td><td>&#160;</td><td>Make some changes possible on used project model&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">has duplicate</span>&#160;</td><td><a href="viewf99f.php?id=512">0000512</a></td><td><span class="issue-status" title="duplicate">closed</span></td><td>&#160;</td><td>Project/orgunit models modifications with Available status&#160;</td></tr>
<tr bgcolor="#fff494"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view5cb1.html?id=458">0000458</a></td><td><span class="issue-status" title="reopened">confirmed</span></td><td>&#160;</td><td>Assigning an OrgUnit to a test project makes it visible to all&#160;</td></tr>
<tr bgcolor="#e3b7eb"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view833a.html?id=430">0000430</a></td><td><span class="issue-status" title="open">feedback</span></td><td><span class="nowrap"><a href="view_user_page02b6.html?id=93">nikita</a></span>&#160;</td><td>Delete group of fields&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="viewcb7b.html?id=528">0000528</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Offline mode&#160;</td></tr>
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
<tr class="bugnote" id="c1080">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1080" title="Direct link to note">0001080)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-02-05 10:42</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue made more generic, and encompasses now orgunit models as well.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1418">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1418" title="Direct link to note">0001418)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-05 05:31</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi everyone,<br />
<br />
I've been studying this issue during the last week and I believe I'm able to implement it now.<br />
<br />
While I start with the minor changes, may you guys clarify some doubts for me?<br />
<br />
Here they go:<br />
<br />
1. &quot;delete empty groups&quot;: As far as I could check, it is (currently) impossible to delete a &quot;layout group&quot; of a model. Should I include a new tab to manage layout groups in the UI or a new button to &quot;delete empty groups&quot; is enough?<br />
<br />
2. &quot;disable fields&quot;: Can mandatory fields be disabled? And what about default fields (such as code, title etc.)?<br />
<br />
3. &quot;under maintenance status&quot;: A project model can only be changed if *all* projects that use it are under maintenance, am I correct? My question is: wouldn't be better if the users could set the timer for maintenance just once for all related projects/org units of a model, instead of individually setting it on each project/org unit banner?<br />
<br />
Thanks.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1420">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1420" title="Direct link to note">0001420)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-06-06 14:57</span><br />
		<span class="small">edited on:&#32;2014-06-06 14:58</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		My suggested replies:<br />
1=&gt; adding a &quot;Groups&quot; tab between the &quot;Fields&quot; tab and &quot;Phases&quot; tab in the Project model edition screen is a good solution: empty groups will be there easily visible, and it will be easy to delete them.<br />
<br />
2=&gt; User should be able to disable a mandatory field. But he should not be able to disable a default field.<br />
<br />
3=&gt; The original description is not very clear. The &quot;Under Maintenance&quot; status is set at the project model level, and not at the project level. If you re-read the description with this distinction, things should be clear now. :)<br />
<br />
This feature is a major thing for users.. I'm really excited to see you starting its implementation and asking meaningful and accurante questions!<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1422">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1422" title="Direct link to note">0001422)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-08 08:06</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi osarrat,<br />
Thank you for your answers. Indeed, it is clearer now! :-)<br />
<br />
I have a couple more questions to ask:<br />
<br />
4. &quot;add new fields&quot;: Can a new *required* field be added on a phase that is already closed on some related project? Can I add a new *amendable* field in a model? Based on the &quot;not allowed modifications list&quot; I'd say the answer is no, but I'd rather confirm first :)<br />
<br />
5. &quot;increase the limits of fields, but decrease not allowed&quot;: I'm checking every existent field value to obtain the 'current' limit of the edited field (i. e. the current max value). This way users can decrease the field limit, provided that they do not disrespect the existent projects/org units. I believe this approach is a little bit more flexible than the one described here. Is that ok?<br />
<br />
BTW, this issue has been a great way to get more familiar with the code!	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1426">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1426" title="Direct link to note">0001426)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-06-15 10:21</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		My (late...) replies:<br />
<br />
4. &quot;add new fields&quot;:<br />
If technically feasible, there is no functional objections to let administrators add new mandatory fields even in a phase that is already closed for some related projects. This case is similar to the &quot;modify the field's mandatory status&quot;.<br />
And you're right: no new amendable field can be added. If the project core of a project model should be changed, it has to be a new version of the model.<br />
<br />
5. &quot;increase the limits of fields, but decrease not allowed&quot;: your more flexible approach is great ! In this case, if there is a decrease which is not possible because some projects are already getting over the modified limit, would it be possible to send a feedback message to the user explaining which project does not let him decrease this limit?<br />
<br />
I'm happy that you enjoyed this issue that way... and I let you know that users are expecting a lot from this new feature! :)	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1434">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1434" title="Direct link to note">0001434)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-23 07:25</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi everyone,<br />
<br />
@osarrat. Thank you for the answers!<br />
<br />
I've finally finished a first version of this new feature ( I hope so! ). I'm not sure how should I proceed from now, since this issue is bigger than the ones I've been working before.<br />
<br />
Should I simply attach a patch and the SQL script with schema modifications? Or do you (or Tom/Jeremie) want to test it before? I don't know where yet, but I can manage to deploy my version of the application on a public server and provide access for you.<br />
<br />
For now I'm uploading some teasing pictures. They do not cover the whole feature, but it is possible to see the most important parts :-)<br />
<br />
Some captions:<br />
<br />
01. Starting the maintenance<br />
<br />
a. When the user do not opt to schedule the maintenance, a pop-up shows up to alert that the maintenance will start right now.<br />
b. The user can opt to schedule the maintenance: he should select a date and time for the maintenance to start. Sigmah will schedule an automatic job for that.<br />
c. When a maintenance is scheduled, users receive an alert message every time they open the project. This message informs that the project will be temporarily &quot;read-only&quot; (soon).<br />
<br />
02. During the maintenance period (modifications)<br />
<br />
a. Project model is under maintenance, therefore users are able to edit it again.<br />
b. Project using this model is &quot;read-only&quot; during the maintenance.<br />
c. Validation: new &quot;mandatory&quot; fields cannot be inserted on closed phases.<br />
d. A new field inserted during the maintenance period is fully editable (but not amendable).<br />
e. Validation: only empty layout groups can be removed.<br />
f. Validation: &quot;maximum&quot; fields can only be decreased if this modification do not violate existing values.<br />
g. Disabling fields (strike-through style).<br />
h. Validation: a field cannot be set as &quot;mandatory&quot; if not filled in on some existing project (closed phase).<br />
i. Question fields: users are able to add new options and disable the existing ones.<br />
j. Validation: existing log frames are verified to check if the new limit is valid.<br />
<br />
03. Finishing the maintenance<br />
<br />
a. Project model is back with &quot;Available&quot; status.<br />
b/c. Project using this model can be edited again after finishing maintenance. Modifications are visible in the banner, second phase (question field was renamed and its choices were changed) and third phase (disabled fields are no longer visible).<br />
<br />
Any suggestions are welcome!<br />
<br />
p.s. sorry for the long message.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1435">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1435" title="Direct link to note">0001435)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-06-23 11:41</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Waow!<br />
Impressive work so far! Congratulations !<br />
<br />
My suggestions:<br />
- rename &quot;Put in maintenance?&quot; into &quot;Under maintenance&quot; to have only one expression/keyword &quot;Under maintenance&quot; (ok with it ?)<br />
- rename &quot;Schedule&quot; into &quot;Schedule 'Under maintenance' status&quot;<br />
- could you propose another organisation of the project/orgunit model banner including the new &quot;Under maintenance&quot; management ? It is a pity to extend in height this banner when there is already a lot of free room on the right. What is your opinion?<br />
- if no date is selected, the maintenance will be planned by default in a 30 minutes delay, not immediately (see description of the feature)<br />
- do you think possible to have the alert which informs the user about the upcoming maintenance period in the project/orgunit banner instead of a popup ? The information will be more permanent in the banner.<br />
- rename &quot;Layout groups&quot; into &quot;Groups&quot;: the &quot;Layout&quot; concept is only in the database and is not known by the users<br />
- checkbox &quot;Under maintenance&quot; should be maintained visible during the maintenance period, this information should not come into the Status drop-down list	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1454">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1454" title="Direct link to note">0001454)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-27 19:32</span><br />
		<span class="small">edited on:&#32;2014-06-27 19:36</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thank you for your suggestions. I will work on these adjustments soon.<br />
<br />
Regarding the alert which informs about an upcoming maintenance period, I agree with you: this information would fit better in the banner. The only problem is that there is little space left in the banner ( I thought that the banner header would be a good choice, but it has already a lot of information :-( ). I'm not a good designer but I'll come up with a proposal.<br />
<br />
Sorry about the &quot;immediately start&quot; when no date was selected for maintenance. I needed it for tests and ended up developing it as a feature. My mistake.<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1458">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1458" title="Direct link to note">0001458)</a></span><br />
		<a href="view_user_page6258.php?id=21">ewach</a>		<span class="small">(reporter)</span>
				<br />
		<span class="small">2014-07-11 12:12</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Just one short reminder (more than a comment or an idea...) following the Sigmah steering committee of yesterday : we were indeed wondering how this feature (more specifically the &quot;under-maintenance&quot; one) will be operating with the future off-line mode.<br />
Best,	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1463">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1463" title="Direct link to note">0001463)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-18 04:33</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi ewach,<br />
<br />
This is, indeed, a very important question.<br />
<br />
<br />
For now, I can think of two solutions, depending on how &quot;deep&quot; the offline mode will be used by the organizations on operation.<br />
<br />
<br />
1. If the offline mode is being designed for *short-term offline periods* (such as unstable connections), the information about scheduled maintenance periods could be simply stored locally and used to prevent the user to modify the project after the maintenance starts. In the unlikely event that a maintenance was scheduled and started during the period the user had no Internet connection, information might be lost.<br />
<br />
To improve the communication, users could be notified about the maintenance by email, so that they would be aware about it even if they haven't accessed Sigmah recently.<br />
<br />
<br />
2. If the offline mode is being designed for *long-term offline periods* (days? weeks?), a integrity verification would be required before synchronizing offline data with the server data. If the model is changed with some offline modifications pending to be saved, it would be necessary to validate each modified field again.<br />
<br />
For example, let's suppose that the administrator had decreased the &quot;max number of characters&quot; of a text field from 50 to 25 (all existing projects field values were within this limit, so the modification was valid) during a maintenance. However, a user has offline changes to commit, and one of them alters the field value to a text with 30 characters. This change would violate the new limit, therefore the user should be alerted and asked to redo this modification according to the new limit.<br />
<br />
<br />
These ideas are still raw, but they can be elaborated.<br />
<br />
<br />
Someone with more knowledge on the future offline mode could comment if these two possible solutions could fit in the new Sigmah architecture?<br />
<br />
<br />
Best,<br />
Renato	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1464">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1464" title="Direct link to note">0001464)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-07-18 17:04</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		We've discussed this issue today with rcalabro from Ideia who's in charge of designing and developing the offline mode.<br />
<br />
Offline will be designed to handle both short and long term offline periods. Long term offline periods may last some weeks... <br />
But as it is designed, this live modification of project models will not make major changes (no addition/removal of phases, etc.). There is no technical integrity risk. And when an admin will modify a project model to add new fields (even mandatory) or change the limit of a field (number of files to attach, etc.), he will know that it won't change past data. So having a few data which won't respect the new model during the short transition period seems a minor risk.<br />
<br />
As a consequence, we've imagined the following as a first-level reply:<br />
- all modifications made when synchronizing an offline database will be marked as &quot;from offline database synchro&quot; in the history for the field<br />
- potentially, if you have enough time Renato, you could add in this field history popup an information in the history about the modification of the field structure (change of limit, set as mandatory/not mandatory, etc.) due to modification of the project model<br />
<br />
In the future if we see that this problem is really important, we could add test to control that the data coming from an offline synchro do not violate the new version of a project model.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1466">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1466" title="Direct link to note">0001466)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-07-21 20:54</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thanks for the explanation. I agree with this decision :-)<br />
<br />
When I finish the major priorities of my proposal I'll get back to this History feature, ok?<br />
<br />
For now I've attached a patch and SQL script with schema changes.<br />
<br />
This patch encompasses both issues <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a> and <a href="view833a.html?id=430" title="[feedback] Delete group of fields">0000430</a> (&quot;Delete group of fields&quot;).	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1491">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1491" title="Direct link to note">0001491)</a></span><br />
		<a href="view_user_page95dc.html?id=29">renatoaf</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-08-10 22:06</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I've merged all my GSoC work into a single patch to simplify the synchronization, so please ignore this patch. I'll update the wiki page with the SQL modifications.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1508">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1508" title="Direct link to note">0001508)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-12-12 10:13</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Just attached Renato_GSoC2014_finalPatchAndSQL.zip as Renato's final single patch+SQL for all this work during GSoC2014.<br />
<br />
This patch covers the following issues:<br />
<a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a><br />
<a href="view833a.html?id=430" title="[feedback] Delete group of fields">0000430</a><br />
<a href="view0fbe.html?id=438" title="[closed] Own password modification by user" class="resolved">0000438</a><br />
<a href="view3085.html?id=507" title="[closed] Modification of locked content" class="resolved">0000507</a><br />
<a href="view6017.html?id=517" title="[assigned] Automatic user password reset">0000517</a><br />
<a href="viewd62f.html?id=553" title="[closed] Impossible to view history on closed phases fields" class="resolved">0000553</a><br />
<a href="view9d60.html?id=561" title="[closed] Add the fields' privacy group to the duplication of project models" class="resolved">0000561</a><br />
<a href="viewac86.php?id=574" title="[closed] Indicators still editable for a user having only View Project privilege" class="resolved">0000574</a><br />
<a href="viewe1fd.php?id=593" title="[closed] Draft project model logframe model cleared when derivated draft project logframe modified" class="resolved">0000593</a><br />
<a href="viewb20d.html?id=598" title="[closed] Disable logframe model constraints fields for available project models" class="resolved">0000598</a><br />
<a href="view6e0a.html?id=616" title="[closed] Reorganize administration global privileges" class="resolved">0000616</a><br />
<a href="viewb970.html?id=617" title="[closed] Impossible to remove a privacy group from a field" class="resolved">0000617</a><br />
<a href="view946c.html?id=623" title="[closed] Impossible to delete a field which had content" class="resolved">0000623</a><br />
<a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1653">
        <td class="bugnote-public">
				<span class="small">(<a href="viewcd66.html?id=419#c1653" title="Direct link to note">0001653)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-30 16:37</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because general expected behavior checked on v2.0-rc1.<br />
Only the logframe model managament while under maintenance is missing and has been added as new issue <a href="view7d12.html?id=731" title="[closed] Missing logframe model manipulation for under maintenance project models" class="resolved">0000731</a>.<br />
<br />
Congratulations to renoatoaf for this major feature strongly expected by users, and developed as part of GSOC2014, and congrats also for the adaptation of renatoaf's code to v2.0 new framework by rcalabro.	</td>
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
</div><div id="Source_open"><br/>
<a name="changesets"/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Related Changesets</td>
</tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="13">
	<a name="changeset1724">sigmah: master 7f416775</a>
	<br/><span class="small">Timestamp: 2015-02-20 19:01:14</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin29e8.php?page=Source/view&amp;id=1724">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> </td>
<td colspan="3">Adapted code from Renato to set the enabled state of the flexible elements depending on ValueEventChangeTypes (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Refactored DefaultFlexibleElementDTO (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/cache/LocalCachedOrganization.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/client/cache/LocalCachedOrganization.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/CheckboxElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/FilesListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/QuestionElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/ReportListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/TripletsListElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/element/TripletsListElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/value/FileDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7f416775898d88745da0b93f20547a58033775ef">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7f416775898d88745da0b93f20547a58033775ef/src/main/java/org/sigmah/shared/dto/value/FileDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="17">
	<a name="changeset1723">sigmah: master 6c10ab5a</a>
	<br/><span class="small">Timestamp: 2015-02-23 18:01:17</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin2b21.php?page=Source/view&amp;id=1723">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> </td>
<td colspan="3">Added the ClearableField widget of Renato to clear the content of the PrivacyGroup field for flexible elements (issue <a href="viewb970.html?id=617" title="[closed] Impossible to remove a privacy group from a field" class="resolved">0000617</a>) +<br />
Verifiy the &quot;relate project&quot; right to show or hide the relate button (issue <a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>) +<br />
Checking for the new rights when accessing a section of the administration (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Removed &quot;remove files&quot; right since it has been replaced by &quot;remove project files&quot; and &quot;remove orgunit files&quot; (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>)</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/ProjectDashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/ProjectDashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/presenter/reports/ReportsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/dashboard/ProjectDashboardView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/view/project/dashboard/ProjectDashboardView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/client/ui/widget/form/ClearableField.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/client/ui/widget/form/ClearableField.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/security/impl/AccessRights.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/server/security/impl/AccessRights.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/element/HistoryWrapper.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/6c10ab5a63a0360898b8e78667c9b1e52c945491">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/6c10ab5a63a0360898b8e78667c9b1e52c945491/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="7">
	<a name="changeset1718">sigmah: master 47341853</a>
	<br/><span class="small">Timestamp: 2015-02-25 19:11:27</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin6e7b.php?page=Source/view&amp;id=1718">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> </td>
<td colspan="3">Added controls to schedule a maintenance for a project model (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/ProjectModelStatus.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/java/org/sigmah/shared/dto/referential/ProjectModelStatus.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4734185398dc99feb54366fcdeec10565e6584ae">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4734185398dc99feb54366fcdeec10565e6584ae/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="21">
	<a name="changeset1717">sigmah: master 4a5ec1dc</a>
	<br/><span class="small">Timestamp: 2015-02-26 18:30:51</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin0073.php?page=Source/view&amp;id=1717">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> </td>
<td colspan="3">Applying the &quot;under maintenance&quot; status when the scheduled date has been reached (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/AdminUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/util/AdminUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/DateUtils.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/client/util/DateUtils.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/dao/impl/ProjectModelHibernateDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/dao/impl/ProjectModelHibernateDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/domain/HasMaintenance.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/domain/HasMaintenance.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/OrgUnitModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/domain/OrgUnitModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/ProjectModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/domain/ProjectModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/ProjectModelService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/server/service/ProjectModelService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/ProjectModelStatus.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/java/org/sigmah/shared/dto/referential/ProjectModelStatus.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/4a5ec1dc9f514f91ac54e967d50c4e56efa79f4f/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="24">
	<a name="changeset1716">sigmah: master 44c370f1</a>
	<br/><span class="small">Timestamp: 2015-02-27 18:03:49</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugindbb9.php?page=Source/view&amp;id=1716">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> </td>
<td colspan="3">Issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a> :<br />
Controls to put under maintenance org unit models +<br />
Disable and enable buttons for flexible elements when under maintenance.</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/presenter/admin/models/base/AbstractModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/res/icon/IconImageBundle.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/view/admin/models/base/AbstractModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/AdminUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/client/util/AdminUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/element/FlexibleElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/server/domain/element/FlexibleElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/server/handler/DisableFlexibleElementsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/server/handler/DisableFlexibleElementsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/inject/CommandHandlerModule.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/server/inject/CommandHandlerModule.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/OrgUnitModelService.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/server/service/OrgUnitModelService.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/IsModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/shared/dto/IsModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIMessages.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/resources/org/sigmah/client/i18n/UIMessages.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/client/ui/res/icon/disable.png</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/44c370f1ff4488d8214932a57ef74e1b28ddc8fa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/44c370f1ff4488d8214932a57ef74e1b28ddc8fa/src/main/resources/org/sigmah/client/ui/res/icon/disable.png">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="16">
	<a name="changeset1715">sigmah: master 77c96c31</a>
	<br/><span class="small">Timestamp: 2015-03-02 18:15:23</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugina81d.php?page=Source/view&amp;id=1715">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> </td>
<td colspan="3">Replaced the &quot;disabled&quot; column in flexible element by a the date on which the element was disabled (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Disabled element are not rendered if the current phase is opened or if the phase was close after disabling the element +<br />
Enable &amp; disable buttons for flexible element now set or clear the disable date.</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - scripts/sql/maj-trunk-to-2.0.sql</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/scripts/sql/maj-trunk-to-2.0.sql">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/ColumnProviders.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/client/util/ColumnProviders.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/element/FlexibleElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/server/domain/element/FlexibleElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/DisableFlexibleElementsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/server/handler/DisableFlexibleElementsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/shared/command/DisableFlexibleElements.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/77c96c3100b1f06e6ba275fa647aba37620d78aa">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/77c96c3100b1f06e6ba275fa647aba37620d78aa/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="16">
	<a name="changeset1714">sigmah: master a37d4eca</a>
	<br/><span class="small">Timestamp: 2015-03-03 18:26:02</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugina8ac.php?page=Source/view&amp;id=1714">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> </td>
<td colspan="3">Flexible element edition popup is different when the project model is under maintenance (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
Question choice can be enable or disable if they have been created before the maintenance date +<br />
Fixed a bug when editing multiple time the same question flexible element</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - scripts/sql/maj-trunk-to-2.0.sql</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/scripts/sql/maj-trunk-to-2.0.sql">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/util/AdminUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/client/util/AdminUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/element/FlexibleElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/server/domain/element/FlexibleElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/element/QuestionChoiceElement.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/server/domain/element/QuestionChoiceElement.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/util/EntityConstants.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/server/domain/util/EntityConstants.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/service/util/ModelUtil.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/server/service/util/ModelUtil.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/IsModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/IsModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/element/QuestionChoiceElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/java/org/sigmah/shared/dto/referential/GlobalPermissionEnum.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a37d4eca720736a65dbf627c8d8e222e2b666b53">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a37d4eca720736a65dbf627c8d8e222e2b666b53/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="2">
	<a name="changeset1713">sigmah: master a3d6ccf9</a>
	<br/><span class="small">Timestamp: 2015-03-04 17:50:30</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin3328.php?page=Source/view&amp;id=1713">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a3d6ccf927e7f9b9d24adc738355f5db2c01d0b3">Diff</a>&#160;]</span> </td>
<td colspan="3">In the flexible elements admin popup (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) :<br />
- hidding budget fields when the model is under maintenance<br />
- fixed a comparison problem between Integers<br />
- disabling text area options when the model is under maintenance</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/a3d6ccf927e7f9b9d24adc738355f5db2c01d0b3">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/a3d6ccf927e7f9b9d24adc738355f5db2c01d0b3/src/main/java/org/sigmah/client/ui/presenter/admin/models/EditFlexibleElementAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="22">
	<a name="changeset1734">sigmah: master e59366c5</a>
	<br/><span class="small">Timestamp: 2015-03-05 17:48:45</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin11fe.php?page=Source/view&amp;id=1734">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> </td>
<td colspan="3">Fixed a bug that prevented to exit the maintenance mode for project and org unit models (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) +<br />
File selection dialog when syncing files (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
Switching to the correct IndexedDB database when the user log in or out +<br />
Displaying a popup when the offline cache is too old</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/SecureExceptionHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/client/security/SecureExceptionHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/offline/indexeddb/IndexedDB.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/FileSelectionView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/offline/view/FileSelectionView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/server/dao/impl/FileHibernateDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/OrgUnitModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/server/domain/OrgUnitModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/ProjectModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/server/domain/ProjectModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/GetFilesFromFavoriteProjectsHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/server/handler/GetFilesFromFavoriteProjectsHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/value/FileDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/dto/value/FileDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/DirectTransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/file/DirectTransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/HasProgressListeners.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/file/HasProgressListeners.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/java/org/sigmah/shared/file/TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIMessages.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/resources/org/sigmah/client/i18n/UIMessages.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIMessages_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/e59366c5ae5e253a0709b669b9f852bdb097ea6b">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/e59366c5ae5e253a0709b669b9f852bdb097ea6b/src/main/resources/org/sigmah/client/i18n/UIMessages_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="20">
	<a name="changeset1735">sigmah: master 3997ee21</a>
	<br/><span class="small">Timestamp: 2015-03-06 18:07:02</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugina481.php?page=Source/view&amp;id=1735">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> </td>
<td colspan="3">Implemented the MODIFY_LOCKED_CONTENT permission (issue <a href="view3085.html?id=507" title="[closed] Modification of locked content" class="resolved">0000507</a>) +<br />
Properly rollbacking updates when a conflict occurs (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) +<br />
UpdateConflictException are now serializable and are displayed when a conflicting update is made +<br />
On the model administration page, displaying &quot;under maintenance&quot; instead of &quot;used&quot; in the model list if the model is under maintenance (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/client/ui/presenter/orgunit/OrgUnitDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/client/ui/presenter/project/ProjectDetailsPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/client/ui/presenter/project/dashboard/PhasesPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/client/ui/view/admin/models/orgunit/OrgUnitModelsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/client/ui/view/admin/models/project/ProjectModelsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/sync/Synchronizer.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/offline/sync/Synchronizer.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/OrgUnit.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/domain/OrgUnit.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/domain/Project.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/domain/Project.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/DeleteHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/handler/DeleteHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/SynchronizeHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/handler/SynchronizeHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/handler/UpdateProjectHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/handler/util/Conflicts.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/server/handler/util/Conflicts.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/command/result/SynchronizeResult.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dispatch/FunctionalException.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dispatch/FunctionalException.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dispatch/UpdateConflictException.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dto/element/BudgetElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dto/element/FlexibleElementDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">rm - src/main/java/org/sigmah/shared/dto/referential/ContainerType.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/3997ee21778b78e9ba9c9cd73700b50210d40cec">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/3997ee21778b78e9ba9c9cd73700b50210d40cec/src/main/java/org/sigmah/shared/dto/referential/ContainerType.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="38">
	<a name="changeset1744">sigmah: master 7b336d14</a>
	<br/><span class="small">Timestamp: 2015-03-18 18:42:11</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin7db5.php?page=Source/view&amp;id=1744">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> </td>
<td colspan="3">Updated to version 2.0 rc1 (issue <a href="viewd122.html?id=641" title="[closed] General improvement of robustness and performance" class="resolved">0000641</a>)<br />
<br />
New in offline mode (issue <a href="viewcb7b.html?id=528" title="[closed] Offline mode" class="resolved">0000528</a>) :<br />
- automatically refreshing the page when the cache has been downloaded<br />
- added notifications about offline actions<br />
- showing the offline menu when an offline notification appears<br />
- files in the synchronization popup are organized by projects/org units<br />
- saving locally the &quot;underMaintenance&quot; value for project and org unit models<br />
- dummy implementation for the GetSitesCount command<br />
- icons in the menu<br />
<br />
Bug fix for offline mode :<br />
- project detail page can now be viewed again (underMaintenance + GetSitesCount)<br />
<br />
Bug fix for maintenance mode (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>) :<br />
- editable property is now verified at the model level<br />
<br />
Bug fix for map tab :<br />
- OpenLayers library is now hosted by Sigmah and thus available for http and https access<br />
- OpenStreetMap library is include with :// protocol to allow access from http and https<br />
<br />
Bug fix for backup archive job :<br />
- Testing if a file exists before trying to backup it</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - pom.xml</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/pom.xml">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/event/EventBusImpl.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/event/EventBusImpl.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/page/RequestParameter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/page/RequestParameter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/security/AuthenticationProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/security/AuthenticationProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/notif/N10N.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/notif/N10N.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/DashboardPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/FlexibleElementsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/orgunit/OrgUnitModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/LogFrameModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/PhaseModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/admin/models/project/ProjectModelsAdminPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/presenter/zone/OfflineBannerPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/EditFlexibleElementAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsAdminView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/client/ui/view/admin/models/FlexibleElementsColumnsProvider.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/dao/ProjectAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/dao/TransfertAsyncDAO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/handler/GetSitesCountAsyncHandler.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/handler/GetSitesCountAsyncHandler.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/inject/OfflineModule.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/inject/OfflineModule.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/OrgUnitModelJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/OrgUnitModelJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/js/ProjectModelJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/ProjectModelJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/js/SiteJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/SiteJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/java/org/sigmah/offline/js/SiteResultJS.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/js/SiteResultJS.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/presenter/FileSelectionPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/status/ApplicationStateManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/status/ApplicationStateManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/FileSelectionView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/view/FileSelectionView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/offline/view/OfflineMenuPanel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/server/file/impl/BackupArchiveJob.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/server/file/impl/BackupArchiveJob.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/IsModel.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/IsModel.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/OrgUnitModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/shared/file/Html5TransfertManager.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/java/org/sigmah/shared/file/Html5TransfertManager.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/client/i18n/UIConstants.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/client/i18n/UIConstants_fr.properties">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">add - src/main/resources/org/sigmah/public/openlayers.js</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/public/openlayers.js">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/server/servlet/index.html</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/7b336d144a5ed645cf8893566a2c059521151f36">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/7b336d144a5ed645cf8893566a2c059521151f36/src/main/resources/org/sigmah/server/servlet/index.html">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		
<tr class="row-1">
<td class="category" width="25%" rowspan="4">
	<a name="changeset1746">sigmah: master ed202b82</a>
	<br/><span class="small">Timestamp: 2015-03-19 17:24:15</span>
	<br/><span class="small">Author: daeke</span>
			<br/><span class="small">Ported: N/A</span>
		<br/><span class="small-links">
		<span class="bracket-link">[&#160;<a href="plugin3258.php?page=Source/view&amp;id=1746">Details</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ed202b82bb83bedc3929529173735224a10bf2d1">Diff</a>&#160;]</span> </td>
<td colspan="3">Showing a message in the project banner if its model is in maintenance or if a maintenance has been scheduled (issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>).</td>
</tr>

		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ed202b82bb83bedc3929529173735224a10bf2d1">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ed202b82bb83bedc3929529173735224a10bf2d1/src/main/java/org/sigmah/client/ui/presenter/project/ProjectPresenter.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/java/org/sigmah/client/ui/view/project/ProjectView.java</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ed202b82bb83bedc3929529173735224a10bf2d1">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ed202b82bb83bedc3929529173735224a10bf2d1/src/main/java/org/sigmah/client/ui/view/project/ProjectView.java">File</a>&#160;]</span> </span></td>
</tr>
		<tr class="row-2">
<td class="small mono" colspan="2">mod - src/main/resources/org/sigmah/public/css/sigmah.css</td>
<td class="center" width="12%"><span class="small-links">
		<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/ed202b82bb83bedc3929529173735224a10bf2d1">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/ed202b82bb83bedc3929529173735224a10bf2d1/src/main/resources/org/sigmah/public/css/sigmah.css">File</a>&#160;]</span> </span></td>
</tr>
		<tr><td class="spacer"></td></tr>
		</table>
</div><div id="Source_closed" class="hidden"><br/>
<table class="width100" cellspacing="1">

<tr>
	<td class="form-title"><a href="#" onclick="ToggleDiv( 'Source' ); return false;"
			><img border="0" src="images/plus.html" alt="+" /></a>&#160;Related Changesets</td>
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
		2011-11-16 11:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2012-06-07 10:28	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		has duplicate 0000314	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2012-06-07 10:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagef7d9.php?rev_id=236#r236">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-05 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001080	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-05 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Allow modifications of project model with status available =&gt; Allow modifications of project/orgunit model with status available	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-05 10:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page7bf4.php?rev_id=306#r306">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		OS	</td>
	<td class="small-caption">
		Windows Vista =&gt; NA	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Browser	</td>
	<td class="small-caption">
		Mozilla Firefox 4.0 =&gt; NA	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		unplanned =&gt; 3.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page35d2.php?rev_id=327#r327">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page4a81.php?rev_id=328#r328">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-26 15:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: More versatile &amp; flexible models	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-02-26 15:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		has duplicate 0000512	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-02-26 15:42	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Allow modifications of project/orgunit model with status available =&gt; Project/orgunit models modifications with Available status	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-02 18:44	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000458	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-05-27 06:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; renatoaf	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-05-27 06:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-05 05:31	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001418	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-06 14:57	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001420	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-06 14:58	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Edited: 0001420	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagefd4d.php?bugnote_id=1420#r461">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-08 08:06	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001422	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-15 10:21	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001426	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-22 18:28	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000430	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:25	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001434	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:29	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 01. a. maintenance (immediately).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:29	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 01. b. maintenance (scheduled).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:29	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 01. c. maintenance alert on project.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:29	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. a. model on maintenance (ready to be changed).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:29	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. b. project on maintenance (not editable).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:30	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. c. mandatory field validation (adding new field).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:30	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. d. fields added during maintenance are fully editable.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:31	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. e. removing empty layout groups.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:31	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. f. number of characters validation.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:32	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. g. disabled fields.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:32	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. h. mandatory field validation (editing old field).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:33	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. i. choice field (new options and disabled ones).png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:33	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 02. j. log frame limits validation.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:34	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 03. a. maintenance finished.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 07:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 03. b. project after maintenance.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 07:35	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 03. c. project after maintenance.png	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 11:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001435	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-27 19:32	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001454	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-27 19:36	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Edited: 0001454	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page3158.php?bugnote_id=1454#r463">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-11 12:12	</td>
	<td class="small-caption">
		<a href="view_user_page6258.php?id=21">ewach</a>	</td>
	<td class="small-caption">
		Note Added: 0001458	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-18 04:33	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001463	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-18 17:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001464	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-18 17:06	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000528	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-21 20:54	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001466	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-07-21 22:01	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 419_scheme_updates.sql	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-07-21 22:01	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		File Added: 419_patch_v2.txt	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-10 22:06	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Note Added: 0001491	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-13 15:56	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		3.0 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-12 10:09	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		File Added: Renato_GSoC2014_finalPatchAndSQL.zip	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-12 10:13	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001508	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master a3d6ccf9	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master a37d4eca	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 77c96c31	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 44c370f1	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 4a5ec1dc	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 47341853	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 6c10ab5a	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-04 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 7f416775	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-05 18:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master e59366c5	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-06 18:15	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 3997ee21	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-03-18 19:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master 7b336d14	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-03-19 18:00	</td>
	<td class="small-caption">
			</td>
	<td class="small-caption">
		Changeset attached	</td>
	<td class="small-caption">
		 =&gt; sigmah master ed202b82	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-03 16:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship replaced	</td>
	<td class="small-caption">
		related to 0000458	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-03 16:43	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship replaced	</td>
	<td class="small-caption">
		related to 0000430	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-03 16:45	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-03 16:45	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-03 16:45	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 16:24	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: TestLinkable	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 16:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000731	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-30 16:37	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001653	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-30 16:37	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=419&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:10 GMT -->
</html>
