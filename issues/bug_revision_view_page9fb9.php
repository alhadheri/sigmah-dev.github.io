<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=762 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:26 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:26:57 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000844: Out of memory error when importing large file into large project database - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page45f3.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D762">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:26 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #844</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_page5a1e.html?bug_id=844">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="viewf379.html?id=844">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000844: Out of memory error when importing large file into large project database</td>
</tr>

<tr class="spacer"><td><a name="r762"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2016-01-22 10:30 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">See attached &quot;outOfMemory.log&quot; log file for initial error.</td>
</tr>

	<tr class="spacer"><td><a name="r761"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2016-01-20 17:22 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">[ERROR] {20/01/2016 16:15:07.081} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.LayoutConstraint<br />
&#160;&#160;Source field name: element<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.element.MessageElement<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.element.MessageElement@439aa225">org.sigmah.server.domain.element.MessageElement@439aa225</a>[id=17764,label= ,validates=false,amendable=false,exportable=false,globallyExportable=false]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutConstraintDTO<br />
&#160;&#160;Dest field name: flexibleElementDTO<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.element.FlexibleElementDTO<br />
java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:07.087} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.LayoutGroup<br />
&#160;&#160;Source field name: constraints<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4671dd7e">org.sigmah.server.domain.layout.LayoutConstraint@4671dd7e</a>[id=106529,sortOrder=4], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@36c8eefe">org.sigmah.server.domain.layout.LayoutConstraint@36c8eefe</a>[id=17799,sortOrder=5], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@6e0a3c52">org.sigmah.server.domain.layout.LayoutConstraint@6e0a3c52</a>[id=17800,sortOrder=7], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@64cc97d">org.sigmah.server.domain.layout.LayoutConstraint@64cc97d</a>[id=17801,sortOrder=10], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5bdf684e">org.sigmah.server.domain.layout.LayoutConstraint@5bdf684e</a>[id=17802,sortOrder=15], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5fed7dfb">org.sigmah.server.domain.layout.LayoutConstraint@5fed7dfb</a>[id=17803,sortOrder=20], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5afc5d91">org.sigmah.server.domain.layout.LayoutConstraint@5afc5d91</a>[id=17804,sortOrder=25], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@34ff345">org.sigmah.server.domain.layout.LayoutConstraint@34ff345</a>[id=17805,sortOrder=30], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4f6e6a30">org.sigmah.server.domain.layout.LayoutConstraint@4f6e6a30</a>[id=17806,sortOrder=35], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4ed4670a">org.sigmah.server.domain.layout.LayoutConstraint@4ed4670a</a>[id=307830,sortOrder=38], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@30dfb14c">org.sigmah.server.domain.layout.LayoutConstraint@30dfb14c</a>[id=17807,sortOrder=40], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4844536">org.sigmah.server.domain.layout.LayoutConstraint@4844536</a>[id=17808,sortOrder=45], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@635e7678">org.sigmah.server.domain.layout.LayoutConstraint@635e7678</a>[id=17809,sortOrder=50], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4c0b1e9a">org.sigmah.server.domain.layout.LayoutConstraint@4c0b1e9a</a>[id=17810,sortOrder=52], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@3059b629">org.sigmah.server.domain.layout.LayoutConstraint@3059b629</a>[id=17811,sortOrder=53], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@73aaf456">org.sigmah.server.domain.layout.LayoutConstraint@73aaf456</a>[id=17812,sortOrder=55], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@7eed0cde">org.sigmah.server.domain.layout.LayoutConstraint@7eed0cde</a>[id=17813,sortOrder=60], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@6736f644">org.sigmah.server.domain.layout.LayoutConstraint@6736f644</a>[id=17814,sortOrder=63], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@820bfb">org.sigmah.server.domain.layout.LayoutConstraint@820bfb</a>[id=17815,sortOrder=65], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@2bc913f8">org.sigmah.server.domain.layout.LayoutConstraint@2bc913f8</a>[id=17816,sortOrder=70], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@49a09be4">org.sigmah.server.domain.layout.LayoutConstraint@49a09be4</a>[id=17817,sortOrder=75], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@31cf8350">org.sigmah.server.domain.layout.LayoutConstraint@31cf8350</a>[id=17818,sortOrder=80], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@16756839">org.sigmah.server.domain.layout.LayoutConstraint@16756839</a>[id=17819,sortOrder=85], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@59c5db0b">org.sigmah.server.domain.layout.LayoutConstraint@59c5db0b</a>[id=17820,sortOrder=90], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@2d56b98">org.sigmah.server.domain.layout.LayoutConstraint@2d56b98</a>[id=17821,sortOrder=95], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@9e0de5f">org.sigmah.server.domain.layout.LayoutConstraint@9e0de5f</a>[id=17822,sortOrder=100], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@788354b6">org.sigmah.server.domain.layout.LayoutConstraint@788354b6</a>[id=17823,sortOrder=105]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutGroupDTO<br />
&#160;&#160;Dest field name: constraints<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:07.092} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.Layout_$$_jvste22_57<br />
&#160;&#160;Source field name: groups<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@75595f1e">org.sigmah.server.domain.layout.LayoutGroup@75595f1e</a>[id=17792,row=0,column=0,title=Default phase group], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@11c8a9d4">org.sigmah.server.domain.layout.LayoutGroup@11c8a9d4</a>[id=17793,row=0,column=0,title=Donor Opportunity], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@5fa7459d">org.sigmah.server.domain.layout.LayoutGroup@5fa7459d</a>[id=17798,row=1,column=0,title=Concept Note], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@1e1a724d">org.sigmah.server.domain.layout.LayoutGroup@1e1a724d</a>[id=17824,row=2,column=0,title=Full Proposal], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@21847f3f">org.sigmah.server.domain.layout.LayoutGroup@21847f3f</a>[id=17829,row=3,column=0,title=Proposal package]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutDTO<br />
&#160;&#160;Dest field name: groups<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:14.016} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.PhaseModel_$$_jvste22_15<br />
&#160;&#160;Source field name: layout<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.layout.Layout_$$_jvste22_57<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.layout.Layout@3bfebd91">org.sigmah.server.domain.layout.Layout@3bfebd91</a>[id=17791]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.PhaseModelDTO<br />
&#160;&#160;Dest field name: layout<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.layout.LayoutDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:14.020} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.ProjectModel_$$_jvste22_26<br />
&#160;&#160;Source field name: rootPhaseModel<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.PhaseModel_$$_jvste22_15<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.PhaseModel@2a51e47f">org.sigmah.server.domain.PhaseModel@2a51e47f</a>[id=17790,name=Pipeline/Identification,displayOrder=0,guide=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectModelDTO<br />
&#160;&#160;Dest field name: rootPhaseModel<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.PhaseModelDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:16.406} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.Project<br />
&#160;&#160;Source field name: projectModel<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.ProjectModel_$$_jvste22_26<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.ProjectModel@58e56caa">org.sigmah.server.domain.ProjectModel@58e56caa</a>[id=17689,name=CNLProject,status=USED,dateDeleted=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectDTO<br />
&#160;&#160;Dest field name: projectModel<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.ProjectModelDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:16.409} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.ProjectFunding<br />
&#160;&#160;Source field name: funding<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.Project<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.Project@22a8a799">org.sigmah.server.domain.Project@22a8a799</a>[id=20024,startDate=2015-04-01 00:00:00.0,name=COD061N,fullName=Tuongoze Pamoja,dateDeleted=&lt;null&gt;,lastSchemaUpdate=2015-10-27 15:28:49.16,calendarId=20023,endDate=2018-03-31 00:00:00.0,closeDate=&lt;null&gt;,amendmentVersion=1,amendmentRevision=8,activityAdvancement=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectFundingDTO<br />
&#160;&#160;Dest field name: funding<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.ProjectDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:19.030} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.Project<br />
&#160;&#160;Source field name: funding<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.ProjectFunding@1e296e46">org.sigmah.server.domain.ProjectFunding@1e296e46</a>[id=20768,percentage=100.0]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectDTO<br />
&#160;&#160;Dest field name: funding<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:19.035} [http-apr-8080-exec-7] o.s.s.handler.CreateEntityHandler - Error while importing file '8be68609-f9ee-44ac-8b32-bee80816883c1453302411406'.<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) ~[GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) ~[GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) ~[UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) ~[UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) ~[Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) ~[ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) ~[ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]</td>
</tr>

	<tr class="spacer"><td><a name="r760"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2016-01-20 17:20 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">[ERROR] {20/01/2016 16:15:07.081} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.LayoutConstraint<br />
&#160;&#160;Source field name: element<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.element.MessageElement<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.element.MessageElement@439aa225">org.sigmah.server.domain.element.MessageElement@439aa225</a>[id=17764,label=&nbsp;,validates=false,amendable=false,exportable=false,globallyExportable=false]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutConstraintDTO<br />
&#160;&#160;Dest field name: flexibleElementDTO<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.element.FlexibleElementDTO<br />
java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:07.087} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.LayoutGroup<br />
&#160;&#160;Source field name: constraints<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4671dd7e">org.sigmah.server.domain.layout.LayoutConstraint@4671dd7e</a>[id=106529,sortOrder=4], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@36c8eefe">org.sigmah.server.domain.layout.LayoutConstraint@36c8eefe</a>[id=17799,sortOrder=5], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@6e0a3c52">org.sigmah.server.domain.layout.LayoutConstraint@6e0a3c52</a>[id=17800,sortOrder=7], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@64cc97d">org.sigmah.server.domain.layout.LayoutConstraint@64cc97d</a>[id=17801,sortOrder=10], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5bdf684e">org.sigmah.server.domain.layout.LayoutConstraint@5bdf684e</a>[id=17802,sortOrder=15], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5fed7dfb">org.sigmah.server.domain.layout.LayoutConstraint@5fed7dfb</a>[id=17803,sortOrder=20], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@5afc5d91">org.sigmah.server.domain.layout.LayoutConstraint@5afc5d91</a>[id=17804,sortOrder=25], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@34ff345">org.sigmah.server.domain.layout.LayoutConstraint@34ff345</a>[id=17805,sortOrder=30], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4f6e6a30">org.sigmah.server.domain.layout.LayoutConstraint@4f6e6a30</a>[id=17806,sortOrder=35], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4ed4670a">org.sigmah.server.domain.layout.LayoutConstraint@4ed4670a</a>[id=307830,sortOrder=38], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@30dfb14c">org.sigmah.server.domain.layout.LayoutConstraint@30dfb14c</a>[id=17807,sortOrder=40], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4844536">org.sigmah.server.domain.layout.LayoutConstraint@4844536</a>[id=17808,sortOrder=45], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@635e7678">org.sigmah.server.domain.layout.LayoutConstraint@635e7678</a>[id=17809,sortOrder=50], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@4c0b1e9a">org.sigmah.server.domain.layout.LayoutConstraint@4c0b1e9a</a>[id=17810,sortOrder=52], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@3059b629">org.sigmah.server.domain.layout.LayoutConstraint@3059b629</a>[id=17811,sortOrder=53], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@73aaf456">org.sigmah.server.domain.layout.LayoutConstraint@73aaf456</a>[id=17812,sortOrder=55], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@7eed0cde">org.sigmah.server.domain.layout.LayoutConstraint@7eed0cde</a>[id=17813,sortOrder=60], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@6736f644">org.sigmah.server.domain.layout.LayoutConstraint@6736f644</a>[id=17814,sortOrder=63], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@820bfb">org.sigmah.server.domain.layout.LayoutConstraint@820bfb</a>[id=17815,sortOrder=65], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@2bc913f8">org.sigmah.server.domain.layout.LayoutConstraint@2bc913f8</a>[id=17816,sortOrder=70], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@49a09be4">org.sigmah.server.domain.layout.LayoutConstraint@49a09be4</a>[id=17817,sortOrder=75], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@31cf8350">org.sigmah.server.domain.layout.LayoutConstraint@31cf8350</a>[id=17818,sortOrder=80], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@16756839">org.sigmah.server.domain.layout.LayoutConstraint@16756839</a>[id=17819,sortOrder=85], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@59c5db0b">org.sigmah.server.domain.layout.LayoutConstraint@59c5db0b</a>[id=17820,sortOrder=90], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@2d56b98">org.sigmah.server.domain.layout.LayoutConstraint@2d56b98</a>[id=17821,sortOrder=95], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@9e0de5f">org.sigmah.server.domain.layout.LayoutConstraint@9e0de5f</a>[id=17822,sortOrder=100], <a href="mailto:org.sigmah.server.domain.layout.LayoutConstraint@788354b6">org.sigmah.server.domain.layout.LayoutConstraint@788354b6</a>[id=17823,sortOrder=105]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutGroupDTO<br />
&#160;&#160;Dest field name: constraints<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:07.092} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.layout.Layout_$$_jvste22_57<br />
&#160;&#160;Source field name: groups<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@75595f1e">org.sigmah.server.domain.layout.LayoutGroup@75595f1e</a>[id=17792,row=0,column=0,title=Default phase group], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@11c8a9d4">org.sigmah.server.domain.layout.LayoutGroup@11c8a9d4</a>[id=17793,row=0,column=0,title=Donor Opportunity], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@5fa7459d">org.sigmah.server.domain.layout.LayoutGroup@5fa7459d</a>[id=17798,row=1,column=0,title=Concept Note], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@1e1a724d">org.sigmah.server.domain.layout.LayoutGroup@1e1a724d</a>[id=17824,row=2,column=0,title=Full Proposal], <a href="mailto:org.sigmah.server.domain.layout.LayoutGroup@21847f3f">org.sigmah.server.domain.layout.LayoutGroup@21847f3f</a>[id=17829,row=3,column=0,title=Proposal package]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.layout.LayoutDTO<br />
&#160;&#160;Dest field name: groups<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:14.016} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.PhaseModel_$$_jvste22_15<br />
&#160;&#160;Source field name: layout<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.layout.Layout_$$_jvste22_57<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.layout.Layout@3bfebd91">org.sigmah.server.domain.layout.Layout@3bfebd91</a>[id=17791]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.PhaseModelDTO<br />
&#160;&#160;Dest field name: layout<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.layout.LayoutDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:14.020} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.ProjectModel_$$_jvste22_26<br />
&#160;&#160;Source field name: rootPhaseModel<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.PhaseModel_$$_jvste22_15<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.PhaseModel@2a51e47f">org.sigmah.server.domain.PhaseModel@2a51e47f</a>[id=17790,name=Pipeline/Identification,displayOrder=0,guide=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectModelDTO<br />
&#160;&#160;Dest field name: rootPhaseModel<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.PhaseModelDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:16.406} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.Project<br />
&#160;&#160;Source field name: projectModel<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.ProjectModel_$$_jvste22_26<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.ProjectModel@58e56caa">org.sigmah.server.domain.ProjectModel@58e56caa</a>[id=17689,name=CNLProject,status=USED,dateDeleted=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectDTO<br />
&#160;&#160;Dest field name: projectModel<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.ProjectModelDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:16.409} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.ProjectFunding<br />
&#160;&#160;Source field name: funding<br />
&#160;&#160;Source field type: class org.sigmah.server.domain.Project<br />
&#160;&#160;Source field value: <a href="mailto:org.sigmah.server.domain.Project@22a8a799">org.sigmah.server.domain.Project@22a8a799</a>[id=20024,startDate=2015-04-01 00:00:00.0,name=COD061N,fullName=Tuongoze Pamoja,dateDeleted=&lt;null&gt;,lastSchemaUpdate=2015-10-27 15:28:49.16,calendarId=20023,endDate=2018-03-31 00:00:00.0,closeDate=&lt;null&gt;,amendmentVersion=1,amendmentRevision=8,activityAdvancement=&lt;null&gt;]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectFundingDTO<br />
&#160;&#160;Dest field name: funding<br />
&#160;&#160;Dest field type: org.sigmah.shared.dto.ProjectDTO<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:19.030} [http-apr-8080-exec-7] org.dozer.MappingProcessor - Field mapping error --&gt;<br />
&#160;&#160;MapId: null<br />
&#160;&#160;Type: null<br />
&#160;&#160;Source parent class: org.sigmah.server.domain.Project<br />
&#160;&#160;Source field name: funding<br />
&#160;&#160;Source field type: class org.hibernate.collection.internal.PersistentBag<br />
&#160;&#160;Source field value: [<a href="mailto:org.sigmah.server.domain.ProjectFunding@1e296e46">org.sigmah.server.domain.ProjectFunding@1e296e46</a>[id=20768,percentage=100.0]]<br />
&#160;&#160;Dest parent class: org.sigmah.shared.dto.ProjectDTO<br />
&#160;&#160;Dest field name: funding<br />
&#160;&#160;Dest field type: java.util.List<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) [DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) [GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) [UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) [Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) [ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) [dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) [dozer-5.5.1.jar:na]<br />
[ERROR] {20/01/2016 16:15:19.035} [http-apr-8080-exec-7] o.s.s.handler.CreateEntityHandler - Error while importing file '8be68609-f9ee-44ac-8b32-bee80816883c1453302411406'.<br />
org.dozer.MappingException: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.throwMappingException(MappingUtils.java:82) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:319) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.processSuperTypeMapping(MappingProcessor.java:1067) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:256) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapGeneral(MappingProcessor.java:170) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:104) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:99) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.DozerBeanMapper.map(DozerBeanMapper.java:120) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:39) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.map(DozerMapper.java:129) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.mapper.DozerMapper.mapCollection(DozerMapper.java:60) ~[DozerMapper.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:39) ~[GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetProjectsByModelHandler.execute(GetProjectsByModelHandler.java:22) ~[GetProjectsByModelHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.access$000(UserDispatch.java:34) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:110) ~[UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch$UserExecutionContext.execute(UserDispatch.java:100) ~[UserDispatch$UserExecutionContext.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.Importer.getCorrespondancePerSheetOrLine(Importer.java:401) ~[Importer.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.getCorrespondances(ExcelImporter.java:62) ~[ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.importer.ExcelImporter.&lt;init&gt;(ExcelImporter.java:40) ~[ExcelImporter.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.doImport(GetImportInformationHandler.java:89) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:55) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.GetImportInformationHandler.execute(GetImportInformationHandler.java:40) [GetImportInformationHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) [AbstractCommandHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.doExecute(UserDispatch.java:301) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.impl.UserDispatch.execute(UserDispatch.java:228) [UserDispatch.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dispatch.SecureDispatchServlet.execute(SecureDispatchServlet.java:148) [SecureDispatchServlet.class:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor280.invoke(Unknown Source) ~[na:na]<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62) [gwt-servlet-2.4.0.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:648) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:729) [servlet-api.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.servlet.filter.CacheFilter.doFilter(CacheFilter.java:120) [CacheFilter.class:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.PersistFilter.doFilter(PersistFilter.java:89) [guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113) [guice-servlet-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.internalDoFilter(ApplicationFilterChain.java:239) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.ApplicationFilterChain.doFilter(ApplicationFilterChain.java:206) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardWrapperValve.invoke(StandardWrapperValve.java:219) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardContextValve.invoke(StandardContextValve.java:106) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.authenticator.AuthenticatorBase.invoke(AuthenticatorBase.java:502) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardHostValve.invoke(StandardHostValve.java:142) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.ErrorReportValve.invoke(ErrorReportValve.java:79) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.valves.AbstractAccessLogValve.invoke(AbstractAccessLogValve.java:617) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.core.StandardEngineValve.invoke(StandardEngineValve.java:88) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.catalina.connector.CoyoteAdapter.service(CoyoteAdapter.java:518) [catalina.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.http11.AbstractHttp11Processor.process(AbstractHttp11Processor.java:1091) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.coyote.AbstractProtocol$AbstractConnectionHandler.process(AbstractProtocol.java:668) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.doRun(AprEndpoint.java:2463) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.net.AprEndpoint$SocketProcessor.run(AprEndpoint.java:2452) [tomcat-coyote.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source) [na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:61) [tomcat-util.jar:8.0.22]<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Unknown Source) [na:1.8.0_45]<br />
Caused by: java.lang.OutOfMemoryError: GC overhead limit exceeded<br />
&#160;&#160;&#160;&#160;at java.lang.AbstractStringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at java.lang.StringBuilder.&lt;init&gt;(Unknown Source) ~[na:1.8.0_45]<br />
&#160;&#160;&#160;&#160;at org.dozer.util.MappingUtils.getMappedParentFieldKey(MappingUtils.java:107) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:263) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapFromFieldMap(MappingProcessor.java:361) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapField(MappingProcessor.java:307) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.map(MappingProcessor.java:267) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapToDestObject(MappingProcessor.java:216) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.createByCreationDirectiveAndMap(MappingProcessor.java:196) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCustomObject(MappingProcessor.java:512) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:465) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:820) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.addOrUpdateToList(MappingProcessor.java:894) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapListToList(MappingProcessor.java:730) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapCollection(MappingProcessor.java:580) ~[dozer-5.5.1.jar:na]<br />
&#160;&#160;&#160;&#160;at org.dozer.MappingProcessor.mapOrRecurseObject(MappingProcessor.java:453) ~[dozer-5.5.1.jar:na]</td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=762 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:02:27 GMT -->
</html>
