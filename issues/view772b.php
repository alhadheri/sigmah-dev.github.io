<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=478&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:46 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:33:10 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000478: Add an &quot;order&quot; column in project/orgunit model fields table - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagefded.html?return=%2Fissues%2Fview.php%3Fid%3D478%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:33 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view772b.php?id=478&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_pagedde6.php?bug_id=478">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000478</td><td>sigmah</td><td>Administration</td><td>public</td><td>2012-08-02 15:50</td><td>2015-05-04 09:34</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>spM</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>feature</td><td class="category">Reproducibility</td><td>N/A</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0</td><td class="category">Fixed in Version</td><td>2.0</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000478: Add an &quot;order&quot; column in project/orgunit model fields table</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Currently, when designing a model, it is hard to know the position of a field in a group from the table of fields.<br />
Adding an &quot;order&quot; column would reply to this need.</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/601">http://www.sigmah.org/node/601</a> [<a href="http://www.sigmah.org/node/601" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_downloadc94b.php?file_id=147&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_downloadc94b.php?file_id=147&amp;type=bug">478.patch</a> [<a href="file_downloadc94b.php?file_id=147&amp;type=bug" target="_blank">^</a>] (1,356 bytes) <span class="italic">2014-03-11 11:24</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_147">[<a class="small" href='#' id='attmlink_147' onclick='swap_content("hideSection_147");swap_content("showSection_147");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_147">[<a class="small" href='#' id='attmlink_147' onclick='swap_content("hideSection_147");swap_content("showSection_147");return false;'>Hide Content</a>]<pre>Index: sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(working copy)
@@ -265,7 +265,21 @@
 		
         List&lt;ColumnConfig&gt; configs = new ArrayList&lt;ColumnConfig&gt;();  
 		  
-        ColumnConfig column = new ColumnConfig(&quot;label&quot;,I18N.CONSTANTS.adminFlexibleName(), 250);   
+        ColumnConfig column = null;
+        
+       column = new ColumnConfig(&quot;order&quot;,I18N.CONSTANTS.adminFlexibleOrder(), 50);   
+		column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
+
+			@Override
+			public Object render(FlexibleElementDTO model, String property,
+					ColumnData config, int rowIndex, int colIndex,
+					ListStore&lt;FlexibleElementDTO&gt; store, Grid&lt;FlexibleElementDTO&gt; grid) {	
+				return AdminUtil.createGridText(model.getConstraint().getSortOrder()+&quot;&quot;);
+			}	    	
+	    });
+		configs.add(column);        
+        
+        column = new ColumnConfig(&quot;label&quot;,I18N.CONSTANTS.adminFlexibleName(), 250);   
         column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
 
 			@Override
</pre></span>
<br />
<a href="file_download6b13.php?file_id=149&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download6b13.php?file_id=149&amp;type=bug">478_updated.patch</a> [<a href="file_download6b13.php?file_id=149&amp;type=bug" target="_blank">^</a>] (2,088 bytes) <span class="italic">2014-03-11 12:56</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_149">[<a class="small" href='#' id='attmlink_149' onclick='swap_content("hideSection_149");swap_content("showSection_149");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_149">[<a class="small" href='#' id='attmlink_149' onclick='swap_content("hideSection_149");swap_content("showSection_149");return false;'>Hide Content</a>]<pre>Index: sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -178,6 +178,8 @@
 
 adminFlexibleOrder = Order
 
+adminFlexibleOrderInGroup = Order in Group
+
 adminFlexibleOrderChoice = Display order...
 
 adminFlexibleQChoices = Custom choices
Index: sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(working copy)
@@ -265,7 +265,9 @@
 		
         List&lt;ColumnConfig&gt; configs = new ArrayList&lt;ColumnConfig&gt;();  
 		  
-        ColumnConfig column = new ColumnConfig(&quot;label&quot;,I18N.CONSTANTS.adminFlexibleName(), 250);   
+        ColumnConfig column = null;      
+        
+        column = new ColumnConfig(&quot;label&quot;,I18N.CONSTANTS.adminFlexibleName(), 250);   
         column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
 
 			@Override
@@ -453,6 +455,18 @@
 	    }); 
 		configs.add(column);
 		
+        column = new ColumnConfig(&quot;order&quot;,I18N.CONSTANTS.adminFlexibleOrderInGroup(), 50);   
+		column.setRenderer(new GridCellRenderer&lt;FlexibleElementDTO&gt;(){
+
+			@Override
+			public Object render(FlexibleElementDTO model, String property,
+					ColumnData config, int rowIndex, int colIndex,
+					ListStore&lt;FlexibleElementDTO&gt; store, Grid&lt;FlexibleElementDTO&gt; grid) {	
+				return AdminUtil.createGridText(model.getConstraint().getSortOrder()+&quot;&quot;);
+			}	    	
+	    });
+		configs.add(column);
+		
 		ColumnModel cm = new ColumnModel(configs);		
 		fieldsStore.setSortField(&quot;container&quot;);
 		Grid&lt;FlexibleElementDTO&gt; grid = new Grid&lt;FlexibleElementDTO&gt;(fieldsStore, cm); 
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
<tr class="bugnote" id="c1386">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1386" title="Direct link to note">0001386)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-03-11 11:26</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Hi,<br />
I attached a patch for this issue by the name of 478.patch<br />
<br />
I was not sure of the placement of the &quot;order&quot; column, so I placed it as the first column, even before the &quot;name&quot; column. If you have a specific placement in mind, I can send in an updated patch with the desired placement.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1387">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1387" title="Direct link to note">0001387)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-03-11 11:34</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I would rather add the new column at the extreme right of the table, just after the &quot;Group&quot; column. You could even name it &quot;Order in group&quot;.<br />
Thanks for this work !	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1388">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1388" title="Direct link to note">0001388)</a></span><br />
		<a href="view_user_page3162.html?id=26">spM</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-03-11 11:59</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		I uploaded the updated patch which puts the &quot;order&quot; column after the &quot;group&quot; column. And I have named it &quot;Order in group&quot;, and updated the translations for French and Spanish using google translate(not sure if the translations are grammatically correct). :)	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1389">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1389" title="Direct link to note">0001389)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-03-11 12:10</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Thanks !<br />
Regarding translation, according to our rule &quot;Developers develop &amp; translators translate&quot; (see <a href="http://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators">http://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators</a> [<a href="http://code.google.com/p/sigma-h/wiki/ContributionRules#Rules_for_coordination_with_translators" target="_blank">^</a>]), you should not update translations strings, but just the strings in &quot;developer English&quot;. :)	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1437">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1437" title="Direct link to note">0001437)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2014-06-23 16:44</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by spM : Add an &quot;order&quot; column in project/orgunit model fields table. (fixes issue <a href="view0619.html?id=478" title="[closed] Add an &quot;order&quot; column in project/orgunit model fields table" class="resolved">0000478</a>) <br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1661">
        <td class="bugnote-public">
				<span class="small">(<a href="view0619.html?id=478#c1661" title="Direct link to note">0001661)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-05-04 09:34</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v2.0-rc1.	</td>
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
		2012-08-02 15:50	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-04 10:22	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: NewComersSpecial	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-04 10:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; pubci	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-04 10:40	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 11:24	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 478.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 11:26	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001386	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 11:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		pubci =&gt; spM	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 11:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001387	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 11:57	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 478_updated.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 11:59	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		Note Added: 0001388	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 12:10	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001389	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-03-11 12:56	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Deleted: 478_updated.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-03-11 12:56	</td>
	<td class="small-caption">
		<a href="view_user_page3162.html?id=26">spM</a>	</td>
	<td class="small-caption">
		File Added: 478_updated.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001437	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-23 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-06-23 16:44	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-06-24 14:05	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		unplanned =&gt; 2.0	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-04 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		OS	</td>
	<td class="small-caption">
		Windows XP =&gt; NA	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-04 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Browser	</td>
	<td class="small-caption">
		Mozilla Firefox 3.0 (Gran Paradiso) =&gt; NA	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-04 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001661	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-05-04 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-05-04 09:34	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2016-03-03 09:39	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Renamed	</td>
	<td class="small-caption">
		NewComersSpecial =&gt; LowHangingFruits	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=478&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:46 GMT -->
</html>
