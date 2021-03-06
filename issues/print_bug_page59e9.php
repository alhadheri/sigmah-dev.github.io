<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=387 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:20 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:31:15 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000387: Importing data into fields - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000387</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2011-09-28 12:45</td><td class="print">2015-06-16 14:36</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.0</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000387: Importing data into fields</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">All NGOs use a separate software to keep track of their accounting information. To avoid double data entry, an importing data feature should be created to allow fast transfer of information between separate systems.<br />
Periodically, NGOs are already exporting preformated MS Excel files from their accounting system. Those files may be one for several projects, or one per project depending on the accounting system used. So far, NGOs using Sigmah have reported using EpiConcept Saga or MS Navision.<br />
The aim of this feature is to use those preformated MS Excel exports as a source to import financial data into Sigmah.<br />
<br />
A new concept: the importation scheme.<br />
The importation scheme is the definition of how to handle a specific importation format, which information can be extracted out of it, and how to ensure that a specific spreadsheet is valid to be used. At best, a scheme should be able to handled other format than MS Excel (LibreOffice Draw, csv, etc.).<br />
Those importation schemes should be managed in the administration part of the application.<br />
<br />
A new tab in project modes management: importations<br />
In this tab, the administrator can set for several importation schemes, how the extracted information from the scheme can be used to be imported in fields of the project (including the multiple spend budget fields), and how should be made the joint between fields of the project and extracted information from the scheme.<br />
This project model importation tab will always be modifiable even on project models which are in the &quot;Available and Used&quot; status.<br />
<br />
A new action: import data.<br />
This action will be available as a new button on the main menu. A global privilege will be attached to it.<br />
After clicking on this button, the user will see a popup with:<br />
- a drop-down list of all importation schemes available (he has to choose one)<br />
- a file browser to select either a folder or a specific file to import (we can add a radiobutton field before this filebrowser field to let him choose between file or folder import)<br />
- an &quot;Import&quot; button<br />
<br />
After clicking on import, he will see a screen describing to him all the imports ready to occur (with project identification, old and new value, etc.). If the user has no right to modifiy one field impact from a project which should be modified with this import, this screen will inform him that this project won't be modified as a whole with this import because he doesn't have sufficient privileges.<br />
<br />
If the user then clicks on &quot;Validate&quot;, all operations described will take place.<br />
<br />
Note : the description of this feature remains a bit loose on purpose. The implementation of this feature may vary according to potential technical solutions, and in particular available libraries which may exist.<br />
<br />
*Mockup*: some dynamic mockups for this feature are available online at <a href="mockups/DataImportation/index.html">http://www.sigmah.org/issues/mockups/DataImportation/</a> [<a href="mockups/DataImportation/index.html" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">In the ideal version of this feature, the modification by the importation of the field by an importation will not only be saved with Date and Author as it is done for all others fields modification, but it will also save an information like &quot;Imported from file 'FILE_NAME.EXT'&quot; in a new column of this field history popup called &quot;System comment&quot;.<br />
In this case, the history popup will have 5 columns:<br />
- Project core version (for project fields only)<br />
- Date<br />
- Author<br />
- Value<br />
- System comment</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_pagea017.php?tag_id=9' title=''>Data importation</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000386</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page2580.html?id=43">Guerline</a></span>&#160;</td><td class="print">Flexible budget field&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/zip.gif" alt="zip" />&#160;gsoc_data_importation_mockup.zip (715,137) <span class="italic">2013-07-04 14:17</span><br />http://www.sigmah.org/issues/file_download.php?file_id=87&amp;type=bug<br /><img src="images/fileicons/xls.gif" alt="xlsx" />&#160;EURO-Excel-ConversionTool.xlsx (18,045) <span class="italic">2013-07-12 16:56</span><br />http://www.sigmah.org/issues/file_download.php?file_id=92&amp;type=bug<br /><img src="images/fileicons/xls.gif" alt="xlsx" />&#160;LineByLine-ImportTest.xlsx (40,715) <span class="italic">2013-08-27 05:11</span><br />http://www.sigmah.org/issues/file_download.php?file_id=122&amp;type=bug<br /><img src="images/fileicons/xls.gif" alt="xlsx" />&#160;Several-ImportTest.xlsx (7,198) <span class="italic">2013-08-28 17:53</span><br />http://www.sigmah.org/issues/file_download.php?file_id=125&amp;type=bug<br /><img src="images/fileicons/generic.gif" alt="?" />&#160;Several-ImportTest.ods (11,765) <span class="italic">2013-08-29 11:35</span><br />http://www.sigmah.org/issues/file_download.php?file_id=126&amp;type=bug<br /><img src="images/fileicons/xls.gif" alt="xlsx" />&#160;Unique-ImportTest.xlsx (9,431) <span class="italic">2013-08-29 12:13</span><br />http://www.sigmah.org/issues/file_download.php?file_id=127&amp;type=bug<br /><img src="images/fileicons/xls.gif" alt="xlsx" />&#160;Several-ImportTest-withOrgUnit.xlsx (10,924) <span class="italic">2015-06-16 14:36</span><br />http://www.sigmah.org/issues/file_download.php?file_id=273&amp;type=bug</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-09-28 12:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-25 15:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 15:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 4.0 =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 15:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-25 15:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Importing financial data =&gt; Importing data into fields</td></tr><tr class="print"><td class="print">2013-02-25 15:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=324#r324</td></tr><tr class="print"><td class="print">2013-02-26 15:21</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Data importation</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-03 20:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-07-03 20:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-07-03 20:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000386</td></tr><tr class="print"><td class="print">2013-07-04 14:17</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: gsoc_data_importation_mockup.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-05 14:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001282</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-12 16:56</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: EURO-Excel-ConversionTool.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 13:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001327</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-09 13:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=420#r420</td></tr><tr class="print"><td class="print">2013-08-09 13:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=422#r422</td></tr><tr class="print"><td class="print">2013-08-09 13:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-08-27 05:11</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: LineByLine-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 06:07</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 06:07</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001352</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 15:14</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 15:14</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001354</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 15:49</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 15:49</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001355</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 11:36</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: Several-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 12:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 12:35</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001358</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 15:27</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: Unique-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 17:53</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Deleted: Several-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-28 17:53</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: Several-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-29 11:35</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: Several-ImportTest.ods</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-29 12:13</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Deleted: Unique-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-29 12:13</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">File Added: Unique-ImportTest.xlsx</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-29 12:50</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-29 12:50</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001359</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-06 19:28</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-06 19:28</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001361</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-06 19:30</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-09-06 19:30</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001362</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-03 19:15</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001367</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-07 00:38</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Note Added: 0001369</td><td class="print"></td></tr><tr class="print"><td class="print">2014-05-18 12:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=456#r456</td></tr><tr class="print"><td class="print">2014-11-26 12:32</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2015-01-26 11:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">Guerline =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-01-26 11:48</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-02-03 15:25</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2015-02-03 15:25</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001531</td><td class="print"></td></tr><tr class="print"><td class="print">2015-02-12 17:57</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 4e50b33c</td></tr><tr class="print"><td class="print">2015-02-12 17:57</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master b7122fd1</td></tr><tr class="print"><td class="print">2015-04-07 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001586</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-07 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-07 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-06-16 14:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: Several-ImportTest-withOrgUnit.xlsx</td><td class="print"></td></tr></table>
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
				(0001282)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-05 14:33&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				A subject we haven't discussed yet about the importation... what should we do if the information you are importing is in conflict with existing value for fields which are part of project core?<br />
<br />
If project core is open for modification (unlocked), change should be done normally.<br />
But if project core is locked, I think the user should be invited to unlock the project core if has sufficient privileges for that.<br />
<br />
Does it seem a good behavior for you?			</td>
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
				(0001327)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-09 13:04&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Add &quot;This project model importation tab will always be modifiable even on project models which are in the &quot;Available and Used&quot; status.&quot; in feature description, and give additionnal information about fields history.			</td>
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
				(0001352)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-27 06:07&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added test case TB4 &quot;Create and test a scheme to import a line-by-line projects .xlsx file&quot; to test part of the issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a> on wiki page TestScenario4TransversalBehaviors through web user interface.<br />
<br />
Modified : /wiki/TestScenario4TransversalBehaviors.wiki<br />
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
				(0001354)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-27 15:14&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				First version of the import data feature (related to issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>)<br />
<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/icon/csv.png<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/icon/ods.png<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportPresenter.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportSchemeActionListener.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportVariableActionListener.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportView.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/ImportationSchemeForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/VariableForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsPresenter.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsView.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/ImportationSchemeModelForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/VariableFlexibleElementForm.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ElementExtractedValueGrid.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ImportDetailsGrid.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ImportWindow.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/Importer.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/SigmahImportServlet.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/CsvImporter.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/ExcelImporter.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/OdsImporter.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DeleteImportationSchemeModelsHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/DeleteImportationSchemesHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetImportInformationHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetImportationSchemeModelsHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetImportationSchemesHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetOrgUnitsByModelHandler.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ImportationSchemeModelPolicy.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ImportationSchemePolicy.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/DeleteImportationSchemeModels.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/DeleteImportationSchemes.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/GetImportInformation.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/GetImportationSchemeModels.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/GetImportationSchemes.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/GetOrgUnitsByModel.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/ImportInformationResult.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/ImportationSchemeListResult.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/ImportationSchemeModelListResult.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/command/result/OrgUnitListResult.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/ElementExtractedValue.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/ImportDetails.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/ImportationScheme.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/ImportationSchemeFileFormat.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/ImportationSchemeImportType.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/ImportationSchemeModel.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/Variable.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/VariableBudgetElement.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/VariableBudgetSubField.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/VariableBudgetSubFieldId.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/importation/VariableFlexibleElement.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ImportUtils.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/ImportationSchemeDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/ImportationSchemeModelDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/VariableBudgetElementDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/VariableBudgetSubFieldDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/VariableDTO.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/VariableFlexibleElementDTO.java<br />
Modified : /trunk/sigmah/pom.xml<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/icon/IconImageBundle.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/AdminPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/AdminUtil.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/AdminOneModelPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/CreateProjectWindow.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/DashboardView.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/spreadsheet/template/BaseSynthesisCalcTemplate.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/spreadsheet/template/BaseSynthesisExcelTemplate.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/file/FileManager.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/file/FileManagerImpl.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/GwtRpcModule.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/CreateEntityHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetProjectsByModelHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateProjectHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/command/GetProjectsByModel.java<br />
Modified : /trunk/sigmah/src/main/resources/dozer-schema-mapping.xml<br />
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
				(0001355)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-27 15:49&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Adds missing comments for the translation (related to issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
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
				(0001358)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-28 12:35&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added test case TB5 &quot;Create and test a scheme to import a sheet-by-sheet (SEVERAL) projects .xlsx file&quot; to test part of the issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a> on wiki page TestScenario4TransversalBehaviors through web user interface.<br />
<br />
Modified : /wiki/TestScenario4TransversalBehaviors.wiki<br />
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
				(0001359)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-29 12:50&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added test cases  to test part of the issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a> on wiki page TestScenario4Import through web user interface.<br />
<br />
Modified : /wiki/TestScenario4Import.wiki<br />
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
				(0001361)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-09-06 19:28&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Adds importation for spreadsheet by row, the ability to select the elements to be updated and extends importation to not only default flexible elements (related to issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>)<br />
<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ElementExtractedValueStatus.java<br />
Added : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ImportStatusCode.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportSchemeActionListener.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportVariableActionListener.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/importation/AdminImportView.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsPresenter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/AdminImportationSchemeModelsView.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/ImportationSchemeModelForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/importation/VariableFlexibleElementForm.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/CreateProjectWindow.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ElementExtractedValueGrid.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ImportDetailsGrid.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/dashboard/ImportWindow.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/public/sigmah.css<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/Importer.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/CsvImporter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/ExcelImporter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/export/sigmah/importer/OdsImporter.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/file/FileStorageProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/file/LocalStorageProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/file/S3StorageProvider.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetImportInformationHandler.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ImportationSchemePolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/ElementExtractedValue.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/ImportDetails.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/ImportUtils.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/importation/VariableFlexibleElementDTO.java<br />
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
				(0001362)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-09-06 19:30&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Updates the test class for the modified storage provider (related to issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>)<br />
<br />
Modified : /trunk/sigmah/src/test/java/org/sigmah/server/endpoint/file/FileManagerTestConfigModule.java<br />
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
				(0001367)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-10-03 19:15&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I've tested locally the feature on v1.3-rc1. It is already a good piece of work! Congrats! By testing, man can see the power of it, and also maybe the complexity to develop it. Well done!<br />
<br />
During my test, I've not been able to match from an OpenDocumentSpreadsheet and a project. The project code is well extracted but the import feature doesn't manage to make the match with an existing project.<br />
Have you been able to make this part of the feature works on your side?			</td>
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
				(0001369)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page2580.html?id=43">Guerline</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-10-07 00:38&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thank you for the feedback!<br />
&#160;I'm not sure why it is not working but it should.... I've been able to fix several things on the rc2 version, would you be able to test this part of the feature on this version?			</td>
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
				(0001531)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-02-03 15:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Corrected errors on wiki page TestScenario4Import through web user interface, to test issue <a href="view6a70.html?id=387" title="[closed] Importing data into fields" class="resolved">0000387</a>.<br />
<br />
Modified : /wiki/TestScenario4Import.wiki<br />
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
				(0001586)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 12:51&#160;&#160;&#160;
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
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=387 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:06:20 GMT -->
</html>
