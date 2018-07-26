<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=167 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:02 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:37:09 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000167: Project core versions (amendments) - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000167</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2011-04-19 17:57</td><td class="print">2015-04-07 12:50</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">feature</td><td class="print-category">Reproducibility</td><td class="print">N/A</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">0.9</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0</td><td class="print-category">Fixed in Version</td><td class="print">2.0</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000167: Project core versions (amendments)</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Amendments should be renamed &quot;Project core version&quot;.<br />
<br />
Project core versions are a way to keep track of modifications of the core logic of intervention of the project.<br />
The core logic of intervention consists of:<br />
- the logical framework<br />
- all indicators attached to the logical framework (all their characteristics (name, target value...) except their value)<br />
- start and end dates of the project<br />
- planned budget field (or more precisely the budget sub-field used as ratio basis for budget progress computation)<br />
- any indicator set as &quot;part of the core logic of intervention&quot; of the project<br />
- any activity set as &quot;part of the core logic of intervention&quot; of the project<br />
- any field set as &quot;part of the core logic of intervention&quot; of the project in the model<br />
<br />
<b>Project core versions visualization</b><br />
In the top right corner project page (on the right of the banner), a box is set to manipulate Project core versions.<br />
A drop-down list will allow to set under which Project core versions should the project be seen (by default, the project will be seen as in the last version).<br />
In the drop-down list, all the available Project core versions will be listed like:<br />
n°0 - 01/12/2012 - Initial version<br />
n°1 - 14/01/2013 - Revision of the number of beneficiaries<br />
n°2 - open version<br />
<br />
On the right of this drop-down list, a button &quot;Display&quot; is available to change the project and show it with the value of all content of the logic of the project as freezed in the selected Project core version.<br />
Below the drop-down list, a button &quot;See version summary&quot; will open a popup which will list all the modifcations between the selected version and its previous version. In this popup the version of project core used as reference for comparison can be selected among all the previous versions to the one selected initially.<br />
Below this last drop-down list, a textfield &quot;Project core version title&quot; will be available to update the selected version title.<br />
The graphical design of this box should be revised to reply to the needs expressed by this draft graphical design.<br />
<br />
Each information which has been modified since the initial version will be highlighted through a small mark (an exclamation mark?) to inform the user that some changes have been made on it in a Project core version . By clicking on this small mark, a popup will open listing all the modifications made in each of the Project core version (with the number, date and title of the modification).<br />
<br />
If it is a past version which has been selected, when the user will navigate inside the project, he will see for each modified information the information as set in the version, as well as the present version (in a different color?) for comparison. Of course, the small mark will also available to see all the Project core versions made on this information.<br />
<br />
<b>Modifications workflow</b><br />
When a project is created, the version #0 is open for modification.<br />
A user with the required global privilege can lock a Project core version so that all information linked to it are no more open to modification.<br />
When a Project core version is locked, it can be validated by a user having another required global privilege, or unlocked by a user having the &quot;Lock Modification&quot; global privilege.<br />
When a user validates a Project core version, the user enters a title for the versiona, and optionnally a comment.<br />
When the last Project core version is validated and a user try to modify an information of the Project core, he will get a popup informing him:<br />
- if this user has the &quot;Create new Project core version&quot; global privilege: &quot;By modifying this information, you will create a new Project Core version. Do you want to continue?&quot;<br />
- if this user doesn't have this global privilege: &quot;This information is part of the Project core, and the current version of the project core is not open for modification. Ask someone with the required privilege to open the project core for modification&quot;. &lt;= this message will also be displayed if the project core version is locked.<br />
</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Other aspects to take in mind while developing  this feature:<br />
- A new option will be available when setting up a checkbox field in a project model : &quot;Linked to a project core version&quot;: this checkbox will enable to force to create project core version in a phase (for example: to create a project core version in a &quot;Design&quot; phase)<br />
- Make Project core version management enabled/disabled in project model<br />
- The implementation of this feature should also take into account the implementation of issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management) which needed to be rollbacked to fix issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a> (Budget field always editable). And this implementation should take into consideration implementation of issue <a href="viewd08d.html?id=386" title="[closed] Flexible budget field" class="resolved">0000386</a> (Flexible budget field).<br />
- Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process. <br />
- A revert to an old version mechanism is also requested by the users as a secondary priority. This revert mechanism could also be thought to develop a revert mechanism for all common fields having a revision history.<br />
<br />
<br />
<b>Detailed design document available at <a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing">https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing</a> [<a href="https://docs.google.com/document/d/1Z-tSKMoDwzpzSkY5R3DJcTOHdYVp15aT74rOl9B8X-Q/edit?usp=sharing" target="_blank">^</a>]</b><br />
<br />
<b>Online mockup:</b> some mockups will hyperlinks between the screens are available at <a href="mockups/ProjectCoreVersions/index.html">http://www.sigmah.org/issues/mockups/ProjectCoreVersions/</a> [<a href="mockups/ProjectCoreVersions/index.html" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page56f0.php?tag_id=10' title=''>Project versionning</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000386</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page2580.html?id=43">Guerline</a></span>&#160;</td><td class="print">Flexible budget field&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000548</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page7d36.html?id=51">tharindum</a></span>&#160;</td><td class="print">Budget field always editable&#160;</td></tr><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000280</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page0b30.html?id=2">osarrat</a></span>&#160;</td><td class="print">Add a field status bar for every fields of project/orgunit&#160;</td></tr><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000559</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page7d36.html?id=51">tharindum</a></span>&#160;</td><td class="print">Right click behavior should have all classic options&#160;</td></tr><tr><td class="print"><span class="nowrap">parent of</span>&#160;</td><td class="print">0000497</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page0b30.html?id=2">osarrat</a></span>&#160;</td><td class="print">Set budget and start/ending date default fields as amendable by default&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000180</td><td class="print">closed&#160;</td><td class="print">&#160;</td><td class="print">Exclude Received budget and Spent budget from Amendment management&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000207</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page87f1.html?id=14">zhe.hu32</a></span>&#160;</td><td class="print">Create a right to &quot;Valid an amendment&quot;&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000279</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Add a versioning system on the OrgUnit&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000601</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_page3a9f.html?id=6">dcolliot</a></span>&#160;</td><td class="print">&quot;Exportable in Project synthesis&quot; not visible in project model field edition popup&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000629</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Logframe history of changes&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"><img src="images/fileicons/zip.gif" alt="zip" />&#160;ProjectCoreVersions-mockup.zip (791,071) <span class="italic">2013-04-26 16:46</span><br />http://www.sigmah.org/issues/file_download.php?file_id=74&amp;type=bug<br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-1.png (143,872) <span class="italic">2013-06-12 16:37</span><br />http://www.sigmah.org/issues/file_download.php?file_id=78&amp;type=bug<br /><img src="file_download8fb5.php?file_id=78&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-2.png (154,879) <span class="italic">2013-06-12 16:37</span><br />http://www.sigmah.org/issues/file_download.php?file_id=79&amp;type=bug<br /><img src="file_downloada261.php?file_id=79&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-3.png (175,532) <span class="italic">2013-06-12 16:38</span><br />http://www.sigmah.org/issues/file_download.php?file_id=80&amp;type=bug<br /><img src="file_download98cd.php?file_id=80&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-4.png (160,988) <span class="italic">2013-06-12 16:38</span><br />http://www.sigmah.org/issues/file_download.php?file_id=81&amp;type=bug<br /><img src="file_download3423.php?file_id=81&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-5.png (157,247) <span class="italic">2013-06-12 16:39</span><br />http://www.sigmah.org/issues/file_download.php?file_id=82&amp;type=bug<br /><img src="file_downloadf016.php?file_id=82&amp;type=bug" alt="png" border="0" /><br /><br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersions-6.png (558,100) <span class="italic">2013-06-12 16:39</span><br />http://www.sigmah.org/issues/file_download.php?file_id=83&amp;type=bug<br /><img src="images/fileicons/zip.gif" alt="zip" />&#160;ProjectCoreVersions-IconsSet.zip (8,612) <span class="italic">2013-07-03 18:52</span><br />http://www.sigmah.org/issues/file_download.php?file_id=85&amp;type=bug<br /><img src="images/fileicons/png.gif" alt="png" />&#160;ProjectCoreVersion-WorkingVersionNotYetValidated.png (157,180) <span class="italic">2013-07-15 17:14</span><br />http://www.sigmah.org/issues/file_download.php?file_id=95&amp;type=bug<br /><img src="file_downloadd022.php?file_id=95&amp;type=bug" alt="png" border="0" /><br /></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2011-04-19 17:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2011-04-20 22:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000180</td></tr><tr class="print"><td class="print">2011-04-28 15:10</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Note Added: 0000236</td><td class="print"></td></tr><tr class="print"><td class="print">2011-05-02 20:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000207</td></tr><tr class="print"><td class="print">2011-05-20 12:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=71#r71</td></tr><tr class="print"><td class="print">2011-05-20 12:13</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=73#r73</td></tr><tr class="print"><td class="print">2011-05-24 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0000317</td><td class="print"></td></tr><tr class="print"><td class="print">2011-05-24 10:00</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=86#r86</td></tr><tr class="print"><td class="print">2011-05-24 12:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000279</td></tr><tr class="print"><td class="print">2011-05-24 12:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000280</td></tr><tr class="print"><td class="print">2011-05-27 00:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">1.0 =&gt; 1.1</td></tr><tr class="print"><td class="print">2011-09-25 19:59</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">1.1 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2011-10-03 11:32</td><td class="print"><a href="view_user_page6258.php?id=21">ewach</a></td><td class="print">Note Added: 0000774</td><td class="print"></td></tr><tr class="print"><td class="print">2011-10-03 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0000777</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">OS</td><td class="print">Windows Vista =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Browser</td><td class="print">Mozilla Firefox 4.0 =&gt; NA</td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001097</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 3.0</td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=321#r321</td></tr><tr class="print"><td class="print">2013-02-25 13:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=322#r322</td></tr><tr class="print"><td class="print">2013-02-26 15:24</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: Project versionning</td><td class="print"></td></tr><tr class="print"><td class="print">2013-02-26 15:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=326#r326</td></tr><tr class="print"><td class="print">2013-04-26 16:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-mockup.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-26 16:51</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-04-26 16:51</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001141</td><td class="print"></td></tr><tr class="print"><td class="print">2013-05-27 12:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001195</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-11 16:07</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=393#r393</td></tr><tr class="print"><td class="print">2013-06-11 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=394#r394</td></tr><tr class="print"><td class="print">2013-06-11 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000386</td></tr><tr class="print"><td class="print">2013-06-11 16:12</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000548</td></tr><tr class="print"><td class="print">2013-06-12 16:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-1.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:37</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-2.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-3.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:38</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-4.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-5.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; tharindum</td></tr><tr class="print"><td class="print">2013-06-12 16:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-06-12 16:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-6.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:44</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001243</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-12 16:44</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">3.0 =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-07-03 09:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000559</td></tr><tr class="print"><td class="print">2013-07-03 10:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">related to 0000559</td></tr><tr class="print"><td class="print">2013-07-03 10:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000559</td></tr><tr class="print"><td class="print">2013-07-03 18:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersions-IconsSet.zip</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-04 17:26</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001281</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-04 17:26</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=407#r407</td></tr><tr class="print"><td class="print">2013-07-04 17:26</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=408#r408</td></tr><tr class="print"><td class="print">2013-07-15 17:14</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">File Added: ProjectCoreVersion-WorkingVersionNotYetValidated.png</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-29 18:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000601</td></tr><tr class="print"><td class="print">2013-08-27 04:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001351</td><td class="print"></td></tr><tr class="print"><td class="print">2013-08-27 04:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; 1.4</td></tr><tr class="print"><td class="print">2013-10-04 09:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001368</td><td class="print"></td></tr><tr class="print"><td class="print">2013-10-04 09:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">1.4 =&gt; 2.0</td></tr><tr class="print"><td class="print">2013-10-04 09:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Revise Amendments system behavior =&gt; Project core versions (amendments)</td></tr><tr class="print"><td class="print">2013-10-04 12:43</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=433#r433</td></tr><tr class="print"><td class="print">2013-10-08 17:06</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship replaced</td><td class="print">parent of 0000280</td></tr><tr class="print"><td class="print">2014-05-18 12:21</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=457#r457</td></tr><tr class="print"><td class="print">2014-07-25 11:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000629</td></tr><tr class="print"><td class="print">2014-07-25 13:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000497</td></tr><tr class="print"><td class="print">2014-11-26 12:31</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2014-12-24 12:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">tharindum =&gt; rcalabro</td></tr><tr class="print"><td class="print">2014-12-24 14:15</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-02-12 17:57</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 4e50b33c</td></tr><tr class="print"><td class="print">2015-02-12 17:57</td><td class="print"></td><td class="print">Changeset attached</td><td class="print"> =&gt; sigmah master 7f84e288</td></tr><tr class="print"><td class="print">2015-04-07 12:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001585</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 12:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; closed</td></tr><tr class="print"><td class="print">2015-04-07 12:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-04-07 12:50</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0</td></tr></table>
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
				(0000236)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_pagedcfd.html?id=4">rcalabro</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2011-04-28 15:10&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				As a reminder, here is the current behavior :<br />
<br />
Each project begins as a &quot;draft&quot; and has an amendment numbered 1.0<br />
<br />
&quot;draft&quot; state: &quot;Lock version&quot; to switch to the &quot;locked&quot; state.<br />
&quot;locked&quot; state: &quot;Unlock&quot; to switch to the &quot;locked&quot; state. &quot;Reject&quot; to switch to the &quot;rejected&quot; state. &quot;Validate&quot; to switch to the &quot;validated&quot; state.<br />
&quot;rejected&quot; state : the last amendment in &quot;validated&quot; state is restored. If none exists, a new amendment is created in &quot;draft&quot; state. Increases the minor version number for the current major version number.<br />
&quot;validated&quot; state : &quot;New amendment&quot; to create a new amendment in &quot;draft&quot; state. Increases the major version number.			</td>
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
				(0000317)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2011-05-24 10:00&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Date added to version after user suggestion.			</td>
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
				(0000774)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page6258.php?id=21">ewach</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2011-10-03 11:32&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Suggestion for a new system of amendment management:<br />
According to the fact that we need:<br />
&#160;&#160;- to make the difference between the versions of a project (i.e. collaborative work inside the NGO) and the “contractual” amendments (i.e. most of time decision from a donor)<br />
&#160;&#160;- to make the difference between an “active” version (which can be only one at one time – idem above comments) and an “draft/pending” version<br />
&#160;&#160;- to make the difference between an accepted and rejected amendment<br />
<br />
We suggest, instead of having a specific system for amendment, to have an “amendment phase” (like assessment, or implementation etc.). This phase will however have a specific behaviour.<br />
&#160;&#160;- This amendment phase would be available at any time and will “insert” between two phases (in a normal project cycle management between the “implementation” and “evaluation” phase). The amendment phase could be inserted several time (to have amendment 1, amendment 2 etc.)<br />
&#160;&#160;- As a normal phase, the amendment phase could be “being used” (i.e. active), “accessible” (i.e. pending), “closed” etc. (in fact, exactly what we need). To have a perfect amendment behaviour, we just need to have the possibly to “reject” the phase without closing the project (i.e. the possibility to jump a phase).<br />
&#160;&#160;- The amendment phase will include the amended documents (proposal etc.) and all “amendable field” (budget, duration…).<br />
&#160;&#160;- Once the amendment phase is closed (i.e. accepted), the “amendable fields” will be automatically changed/updated in the “details container” (e.g. budget, duration etc.) <br />
NB: it’s important to have the possibility to make comparison between data (budget, duration…) before and after amendment (i.e. to don’t erase/loose the previous data). <br />
&#160;- Once the amendment phase is closed (i.e. accepted), the last active phase will be automatically “duplicated” in order to have for example: Phase 1 assessment - &gt; Phase 2 Design -&gt; Phase 3 Implementation -&gt; Phase 4 Amendment -&gt; Phase 5 Implementation -&gt; Phase 6 Evaluation<br />
<br />
NB: the “only” problem of this suggestion is the management of the “indicators”. But (i) this part of SIGMAH should also be reviewed/discussed in a further step (ii) it’s already a problem in the current behaviour (indicator should be changed by-hand and aren’t really consider as amendable fields).			</td>
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
				(0000777)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2011-10-03 16:12&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Thanks for this expression of needs!<br />
We'll take them into account when designing technically this revision of the Amendements system.			</td>
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
				(0001097)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-02-25 13:31&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Complete revision of the new desired behavior for amendment after long meeting of the adoption focal points of the Steering Cooperative.			</td>
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
				(0001141)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-04-26 16:51&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added a link to mockup for issue <a href="view03ea.html?id=167" title="[closed] Project core versions (amendments)" class="resolved">0000167</a> on wiki page Ideas4GSoC2013 through web user interface.<br />
<br />
Modified : /wiki/Ideas4GSoC2013.wiki<br />
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
				(0001195)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-05-27 12:50&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Simple note to add to this feature the fact that the Excel project exportation should be made in the project core version currently loaded.<br />
So the implementation of this feature should revise as well partly the Excel exportation process.			</td>
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
				(0001243)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-06-12 16:44&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Added new mockups which replace the old ProjectCoreVersions-mockup.zip.<br />
Those mockups are still not final, because the Revert action is missing.<br />
They are neither exhaustive, because not covering all screens impacted. But they already give the fundamental graphic design that should be reused everywhere to develop this feature.<br />
<br />
Almost everything is ready now to start the detailed design (including complete mockups) and then implementation as tharindum Google Summer of Code 2013's project!			</td>
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
				(0001281)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-04 17:26&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Extended and modified a bit the feature according to discussion with adoption Focal points in <a href="http://www.sigmah.org/node/732">http://www.sigmah.org/node/732</a> [<a href="http://www.sigmah.org/node/732" target="_blank">^</a>]			</td>
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
				(0001351)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-08-27 04:52&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue shifted from target version 1.3 to target version 1.4 to be sure to have a proper bug-free version of this central feature.			</td>
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
				(0001368)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-10-04 09:39&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Back to target version 1.3 because tharindum is continuing his work on project core versions after GSoC2013 end! Thanks, and good luck for the last step of this big and fundamental feature!			</td>
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
				(0001585)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 12:50&#160;&#160;&#160;
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

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=167 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:10:02 GMT -->
</html>
