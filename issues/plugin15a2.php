<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1752 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:35 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:32:39 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>Source Control Integration - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page66cf.html?return=%2Fissues%2Fplugin.php%3Fpage%3DSource%2Fview%26id%3D1752">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:32 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br/>
<table class="width90" cellspacing="1" align="center">

<tr>
<td class="form-title" colspan="4">sigmah: master de2aac52</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="plugin0da4.html?page=Source/list&amp;id=3&amp;offset=0">Back to Repository</a>&#160;]</span> </td>
<tr>

<tr class="row-category">
<td>Author</td>
<td>Committer</td>
<td>Branch</td>
<td>Timestamp</td>
<td>Parent</td>
<td>Ported</td>
</tr>

<tr class="row-1">
<td class="center">daeke</td>
<td class="center">daeke</td>
<td class="center">master</td>
<td class="center">2015-04-14 17:52:42</td>
<td class="center"><a href="plugin42e0.php?page=Source/view&amp;id=1753">master 298aff03</a></td>
<td class="center">
Pending</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-2">
<td class="category" rowspan="1">
	Affected Issues</td>

<td colspan="5"><a href="view0fb4.html?id=673">0000673</a>: &quot;Map&quot; sub-tab unavailable</td>
</tr>


<tr><td class="spacer"></td></tr>

<tr class="row-1">
<td class="category" rowspan="68">
	Changeset</td>
<td colspan="5">Refreshed OpenLayers and added the missing theme and images (issue <a href="view0fb4.html?id=673" title="[closed] &quot;Map&quot; sub-tab unavailable" class="resolved">0000673</a>).</td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/java/org/sigmah/client/ui/widget/map/OpenStreetMapWorldMap.java</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/java/org/sigmah/client/ui/widget/map/OpenStreetMapWorldMap.java">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/blank.gif</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/blank.gif">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/cloud-popup-relative.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/cloud-popup-relative.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/drag-rectangle-off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/drag-rectangle-off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/drag-rectangle-on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/drag-rectangle-on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/east-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/east-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/layer-switcher-maximize.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/layer-switcher-maximize.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/layer-switcher-minimize.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/layer-switcher-minimize.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/marker-blue.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/marker-blue.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/marker-gold.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/marker-gold.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/marker-green.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/marker-green.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/marker.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/marker.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/measuring-stick-off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/measuring-stick-off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/measuring-stick-on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/measuring-stick-on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/north-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/north-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/panning-hand-off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/panning-hand-off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/panning-hand-on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/panning-hand-on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/slider.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/slider.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/south-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/south-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/west-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/west-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/zoom-minus-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/zoom-minus-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/zoom-plus-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/zoom-plus-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/zoom-world-mini.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/zoom-world-mini.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/img/zoombar.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/img/zoombar.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/google.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/google.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/google.tidy.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/google.tidy.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/ie6-style.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/ie6-style.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/ie6-style.tidy.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/ie6-style.tidy.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/add_point_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/add_point_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/add_point_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/add_point_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/blank.gif</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/blank.gif">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/close.gif</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/close.gif">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/drag-rectangle-off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/drag-rectangle-off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/drag-rectangle-on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/drag-rectangle-on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_line_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_line_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_line_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_line_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_point_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_point_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_point_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_point_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_polygon_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_polygon_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/draw_polygon_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/draw_polygon_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/editing_tool_bar.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/editing_tool_bar.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/move_feature_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/move_feature_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/move_feature_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/move_feature_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/navigation_history.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/navigation_history.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/overview_replacement.gif</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/overview_replacement.gif">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/pan-panel-NOALPHA.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/pan-panel-NOALPHA.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/pan-panel.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/pan-panel.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/pan_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/pan_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/pan_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/pan_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/panning-hand-off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/panning-hand-off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/panning-hand-on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/panning-hand-on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/remove_point_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/remove_point_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/remove_point_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/remove_point_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/ruler.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/ruler.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/save_features_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/save_features_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/save_features_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/save_features_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/view_next_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/view_next_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/view_next_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/view_next_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/view_previous_off.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/view_previous_off.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/view_previous_on.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/view_previous_on.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/zoom-panel-NOALPHA.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/zoom-panel-NOALPHA.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/img/zoom-panel.png</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/img/zoom-panel.png">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/style.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/style.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/style.mobile.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/style.mobile.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/style.mobile.tidy.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/style.mobile.tidy.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-1">
<td class="small mono" colspan="4">add - src/main/resources/org/sigmah/public/theme/default/style.tidy.css</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/public/theme/default/style.tidy.css">File</a>&#160;]</span> </span></td>
</tr>

<tr class="row-2">
<td class="small mono" colspan="4">mod - src/main/resources/org/sigmah/server/servlet/index.html</td>
<td class="center"><span class="small-links">
	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/commit/de2aac5206f091e07cb30554af07e719c175cad7">Diff</a>&#160;]</span> 	<span class="bracket-link">[&#160;<a href="http://github.com/sigmah-dev/sigmah/tree/de2aac5206f091e07cb30554af07e719c175cad7/src/main/resources/org/sigmah/server/servlet/index.html">File</a>&#160;]</span> </span></td>
</tr>



</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/plugin.php?page=Source/view&id=1752 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:35 GMT -->
</html>
