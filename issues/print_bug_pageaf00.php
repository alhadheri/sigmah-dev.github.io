<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=419 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:10 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:34:28 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000419: Project/orgunit models modifications with Available status - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000419</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2011-11-16 11:43</td><td class="print">2015-04-30 16:37</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">renatoaf</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.1</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/527">http://www.sigmah.org/node/527</a> [<a href="http://www.sigmah.org/node/527" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000419: Project/orgunit models modifications with Available status</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">To be able to modify a project/orgunit models even though project/orgunit have been created from them, the following minor modifications should be allowed on &quot;Available&quot; models:<br />
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
To make those model modifications without too much impact on the users, &quot;Available &amp; used&quot; models can be set to a temporary secondary status: &quot;Under maintenance&quot;. A new &quot;Under maintenance&quot; checkbox will be available in the project/orgunit model banner: when checked, the administrator can set a timer (30 minutes by default) to let user know when their project will be no more accessible because &quot;under maintenance&quot;. As soon as the admin check this checkbox, user having opened a project using this project model will be an information in the banner of the project : &quot;Your project will be temporary no more accessible for maintenance in XX minutes&quot;. As soon as the admin unckeck the checkbox, the projects/orgunit become normally accessible again. The admin must check this checkbox to be allowed to do all the allowed minor modifications on &quot;Available&quot; project/orgunit models, and he will be allowed to do those modifications only after the timer he has set has elapsed.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page230c.html?tag_id=1' title=''>More versatile &amp; flexible models</a>, <a href='tag_view_page67a4.php?tag_id=16' title=''>TestLinkable</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000731</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Missing logframe model manipulation for under maintenance project models&#160;</td></tr><tr><td class="print"><span class="nowrap">has duplicate</span>&#160;</td><td class="print">0000314</td><td class="print">closed&#160;</td><td class="print">&#160;</td><td class="print">Make some changes possible on used project model&#160;</td></tr><tr><td class="print"><span class="nowrap">has duplicate</span>&#160;</td><td class="print">0000512</td><td class="print">closed&#160;</td><td class="print">&#160;</td><td class="print">Project/orgunit models modifications with Available status&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000458</td><td class="print">confirmed&#160;</td><td class="print">&#160;</td><td class="print">Assigning an OrgUnit to a test project makes it visible to all&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000430</td><td class="print">feedback&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page02b6.html?id=93">nikita</a></span>&#160;</td><td class="print">Delete group of fields&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000528</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Offline mode&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/png.gif" alt="png" />&#160;01. a. maintenance (immediately).png (108,279) <span class="italic">2014-06-23 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=181&amp;type=bug<br /><img src="file_download13ea.php?file_id=181&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;01. b. maintenance (scheduled).png (108,202) <span class="italic">2014-06-23 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=182&amp;type=bug<br /><img src="file_download0704.php?file_id=182&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;01. c. maintenance alert on project.png (93,915) <span class="italic">2014-06-23 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=183&amp;type=bug<br /><img src="file_downloadbb29.php?file_id=183&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. a. model on maintenance (ready to be changed).png (102,082) <span class="italic">2014-06-23 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=184&amp;type=bug<br /><img src="file_download6111.php?file_id=184&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. b. project on maintenance (not editable).png (83,585) <span class="italic">2014-06-23 07:29</span><br />http://www.sigmah.org/issues/file_download.php?file_id=185&amp;type=bug<br /><img src="file_download1b60.php?file_id=185&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. c. mandatory field validation (adding new field).png (112,035) <span class="italic">2014-06-23 07:30</span><br />http://www.sigmah.org/issues/file_download.php?file_id=186&amp;type=bug<br /><img src="file_download4a14.php?file_id=186&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. d. fields added during maintenance are fully editable.png (119,338) <span class="italic">2014-06-23 07:30</span><br />http://www.sigmah.org/issues/file_download.php?file_id=187&amp;type=bug<br /><img src="file_download5e03.php?file_id=187&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. e. removing empty layout groups.png (77,240) <span class="italic">2014-06-23 07:31</span><br />http://www.sigmah.org/issues/file_download.php?file_id=188&amp;type=bug<br /><img src="file_download1c2e.php?file_id=188&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. f. number of characters validation.png (112,761) <span class="italic">2014-06-23 07:31</span><br />http://www.sigmah.org/issues/file_download.php?file_id=189&amp;type=bug<br /><img src="file_download087f.php?file_id=189&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. g. disabled fields.png (106,552) <span class="italic">2014-06-23 07:32</span><br />http://www.sigmah.org/issues/file_download.php?file_id=190&amp;type=bug<br /><img src="file_downloadfcaa.php?file_id=190&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. h. mandatory field validation (editing old field).png (115,059) <span class="italic">2014-06-23 07:32</span><br />http://www.sigmah.org/issues/file_download.php?file_id=191&amp;type=bug<br /><img src="file_download0875.php?file_id=191&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. i. choice field (new options and disabled ones).png (116,728) <span class="italic">2014-06-23 07:33</span><br />http://www.sigmah.org/issues/file_download.php?file_id=192&amp;type=bug<br /><img src="file_download6992.php?file_id=192&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;02. j. log frame limits validation.png (87,199) <span class="italic">2014-06-23 07:33</span><br />http://www.sigmah.org/issues/file_download.php?file_id=193&amp;type=bug<br /><img src="file_download1a0e.php?file_id=193&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;03. a. maintenance finished.png (98,002) <span class="italic">2014-06-23 07:34</span><br />http://www.sigmah.org/issues/file_download.php?file_id=194&amp;type=bug<br /><img src="file_download3288.php?file_id=194&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;03. b. project after maintenance.png (82,411) <span class="italic">2014-06-23 07:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=195&amp;type=bug<br /><img src="file_downloadfb73.php?file_id=195&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;03. c. project after maintenance.png (85,450) <span class="italic">2014-06-23 07:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=196&amp;type=bug<br /><img src="file_download8f73.php?file_id=196&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/generic.gif" alt="?" />&#160;419_scheme_updates.sql (444) <span class="italic">2014-07-21 22:01</span><br />http://www.sigmah.org/issues/file_download.php?file_id=207&amp;type=bug<br /><img src="images/fileicons/text.html" alt="txt" />&#160;419_patch_v2.txt (268,324) <span class="italic">2014-07-21 22:01</span><br />http://www.sigmah.org/issues/file_download.php?file_id=208&amp;type=bug<br /><img src="images/fileicons/zip.gif" alt="zip" />&#160;Renato_GSoC2014_finalPatchAndSQL.zip (90,020) <span class="italic">2014-12-12 10:09</span><br />http://www.sigmah.org/issues/file_download.php?file_id=229&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-11-16 11:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2012-06-07 10:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">has duplicate 0000314</td></tr><tr class="print"><td class="print">2012-06-07 10:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=236#r236</td></tr><tr class="print"><td class="print">2013-02-05 10:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001080</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-05 10:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Allow modifications of project model with status available =&gt; Allow modifications of project/orgunit model with status available</td></tr><tr class="print"><td class="print">2013-02-05 10:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=306#r306</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 4.0 =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=327#r327</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=328#r328</td></tr><tr class="print"><td class="print">2013-02-26 15:40</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: More versatile &amp; flexible models</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">has duplicate 0000512</td></tr><tr class="print"><td class="print">2013-02-26 15:42</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Allow modifications of project/orgunit model with status available =&gt; Project/orgunit models modifications with Available status</td></tr><tr class="print"><td class="print">2013-07-02 18:44</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000458</td></tr><tr class="print"><td class="print">2014-05-27 06:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Assigned To</td><td class="print"> =&gt; renatoaf</td></tr><tr class="print"><td class="print">2014-05-27 06:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-06-05 05:31</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001418</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-06 14:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001420</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-06 14:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Edited: 0001420</td><td class="print">bug_revision_view_page.php?bugnote_id=1420#r461</td></tr><tr class="print"><td class="print">2014-06-08 08:06</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001422</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-15 10:21</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001426</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-22 18:28</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Relationship added</td><td class="print">parent of 0000430</td></tr><tr class="print"><td class="print">2014-06-23 07:25</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001434</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:29</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 01. a. maintenance (immediately).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:29</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 01. b. maintenance (scheduled).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:29</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 01. c. maintenance alert on project.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:29</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. a. model on maintenance (ready to be changed).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:29</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. b. project on maintenance (not editable).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:30</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. c. mandatory field validation (adding new field).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:30</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. d. fields added during maintenance are fully editable.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:31</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. e. removing empty layout groups.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:31</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. f. number of characters validation.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:32</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. g. disabled fields.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:32</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. h. mandatory field validation (editing old field).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:33</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. i. choice field (new options and disabled ones).png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:33</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 02. j. log frame limits validation.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:34</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 03. a. maintenance finished.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 03. b. project after maintenance.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 07:35</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 03. c. project after maintenance.png</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-23 11:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001435</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-27 19:32</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001454</td><td class="print"></td></tr><tr class="print"><td class="print">2014-06-27 19:36</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Edited: 0001454</td><td class="print">bug_revision_view_page.php?bugnote_id=1454#r463</td></tr><tr class="print"><td class="print">2014-07-11 12:12</td><td class="print"><a href="view_user_page6258.php?id=21">ewach</a></td><td class="print">Note Added: 0001458</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-18 04:33</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001463</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-18 17:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001464</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-18 17:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000528</td></tr><tr class="print"><td class="print">2014-07-21 20:54</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001466</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-21 22:01</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 419_scheme_updates.sql</td><td class="print"></td></tr><tr class="print"><td class="print">2014-07-21 22:01</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">File Added: 419_patch_v2.txt</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-10 22:06</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Note Added: 0001491</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-13 15:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2014-12-12 10:09</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: Renato_GSoC2014_finalPatchAndSQL.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-12 10:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001508</td><td class="print"></td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master a3d6ccf9</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master a37d4eca</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 77c96c31</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 44c370f1</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 4a5ec1dc</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 47341853</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 6c10ab5a</td></tr><tr class="print"><td class="print">2015-03-04 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 7f416775</td></tr><tr class="print"><td class="print">2015-03-05 18:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master e59366c5</td></tr><tr class="print"><td class="print">2015-03-06 18:15</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 3997ee21</td></tr><tr class="print"><td class="print">2015-03-18 19:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 7b336d14</td></tr><tr class="print"><td class="print">2015-03-19 18:00</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master ed202b82</td></tr><tr class="print"><td class="print">2015-04-03 16:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship replaced</td><td class="print">related to 0000458</td></tr><tr class="print"><td class="print">2015-04-03 16:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship replaced</td><td class="print">related to 0000430</td></tr><tr class="print"><td class="print">2015-04-03 16:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-04-03 16:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-03 16:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-07 16:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: TestLinkable</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-30 16:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000731</td></tr><tr class="print"><td class="print">2015-04-30 16:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001653</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-30 16:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr></table>
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
				(0001080)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-02-05 10:42&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue made more generic, and encompasses now orgunit models as well.			</td>
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
				(0001418)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-05 05:31&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
Thanks.			</td>
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
				(0001420)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-06 14:57&#160;&#160;&#160;
				<br />(edited on:&#32;2014-06-06 14:58)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
				(0001422)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-08 08:06&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Hi osarrat,<br />
Thank you for your answers. Indeed, it is clearer now! :-)<br />
<br />
I have a couple more questions to ask:<br />
<br />
4. &quot;add new fields&quot;: Can a new *required* field be added on a phase that is already closed on some related project? Can I add a new *amendable* field in a model? Based on the &quot;not allowed modifications list&quot; I'd say the answer is no, but I'd rather confirm first :)<br />
<br />
5. &quot;increase the limits of fields, but decrease not allowed&quot;: I'm checking every existent field value to obtain the 'current' limit of the edited field (i. e. the current max value). This way users can decrease the field limit, provided that they do not disrespect the existent projects/org units. I believe this approach is a little bit more flexible than the one described here. Is that ok?<br />
<br />
BTW, this issue has been a great way to get more familiar with the code!			</td>
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
				(0001426)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-15 10:21&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				My (late...) replies:<br />
<br />
4. &quot;add new fields&quot;:<br />
If technically feasible, there is no functional objections to let administrators add new mandatory fields even in a phase that is already closed for some related projects. This case is similar to the &quot;modify the field's mandatory status&quot;.<br />
And you're right: no new amendable field can be added. If the project core of a project model should be changed, it has to be a new version of the model.<br />
<br />
5. &quot;increase the limits of fields, but decrease not allowed&quot;: your more flexible approach is great ! In this case, if there is a decrease which is not possible because some projects are already getting over the modified limit, would it be possible to send a feedback message to the user explaining which project does not let him decrease this limit?<br />
<br />
I'm happy that you enjoyed this issue that way... and I let you know that users are expecting a lot from this new feature! :)			</td>
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
				(0001434)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-23 07:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
p.s. sorry for the long message.			</td>
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
				(0001435)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-23 11:41&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
- checkbox &quot;Under maintenance&quot; should be maintained visible during the maintenance period, this information should not come into the Status drop-down list			</td>
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
				(0001454)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-06-27 19:32&#160;&#160;&#160;
				<br />(edited on:&#32;2014-06-27 19:36)			</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thank you for your suggestions. I will work on these adjustments soon.<br />
<br />
Regarding the alert which informs about an upcoming maintenance period, I agree with you: this information would fit better in the banner. The only problem is that there is little space left in the banner ( I thought that the banner header would be a good choice, but it has already a lot of information :-( ). I'm not a good designer but I'll come up with a proposal.<br />
<br />
Sorry about the &quot;immediately start&quot; when no date was selected for maintenance. I needed it for tests and ended up developing it as a feature. My mistake.<br />
<br />
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
				(0001458)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page6258.php?id=21">ewach</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-11 12:12&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Just one short reminder (more than a comment or an idea...) following the Sigmah steering committee of yesterday : we were indeed wondering how this feature (more specifically the &quot;under-maintenance&quot; one) will be operating with the future off-line mode.<br />
Best,			</td>
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
				(0001463)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-18 04:33&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
Renato			</td>
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
				(0001464)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-18 17:04&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				We've discussed this issue today with rcalabro from Ideia who's in charge of designing and developing the offline mode.<br />
<br />
Offline will be designed to handle both short and long term offline periods. Long term offline periods may last some weeks... <br />
But as it is designed, this live modification of project models will not make major changes (no addition/removal of phases, etc.). There is no technical integrity risk. And when an admin will modify a project model to add new fields (even mandatory) or change the limit of a field (number of files to attach, etc.), he will know that it won't change past data. So having a few data which won't respect the new model during the short transition period seems a minor risk.<br />
<br />
As a consequence, we've imagined the following as a first-level reply:<br />
- all modifications made when synchronizing an offline database will be marked as &quot;from offline database synchro&quot; in the history for the field<br />
- potentially, if you have enough time Renato, you could add in this field history popup an information in the history about the modification of the field structure (change of limit, set as mandatory/not mandatory, etc.) due to modification of the project model<br />
<br />
In the future if we see that this problem is really important, we could add test to control that the data coming from an offline synchro do not violate the new version of a project model.			</td>
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
				(0001466)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page95dc.html?id=29">renatoaf</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-07-21 20:54&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for the explanation. I agree with this decision :-)<br />
<br />
When I finish the major priorities of my proposal I'll get back to this History feature, ok?<br />
<br />
For now I've attached a patch and SQL script with schema changes.<br />
<br />
This patch encompasses both issues <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a> and <a href="view833a.html?id=430" title="[feedback] Delete group of fields">0000430</a> (&quot;Delete group of fields&quot;).			</td>
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
				(0001491)
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
				(0001508)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-12-12 10:13&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
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
<a href="view42a9.html?id=625" title="[closed] Create new permission to relate projects" class="resolved">0000625</a>			</td>
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
				(0001653)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-30 16:37&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because general expected behavior checked on v2.0-rc1.<br />
Only the logframe model managament while under maintenance is missing and has been added as new issue <a href="view7d12.html?id=731" title="[closed] Missing logframe model manipulation for under maintenance project models" class="resolved">0000731</a>.<br />
<br />
Congratulations to renoatoaf for this major feature strongly expected by users, and developed as part of GSOC2014, and congrats also for the adaptation of renatoaf's code to v2.0 new framework by rcalabro.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=419 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:09:10 GMT -->
</html>
