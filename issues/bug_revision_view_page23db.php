<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=544 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:36 GMT -->
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
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000673: &quot;Map&quot; sub-tab unavailable - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_pagee120.html?return=%2Fissues%2Fbug_revision_view_page.php%3Frev_id%3D544">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:32 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issues2478.xml?project_id=0"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table>
<br />
<table class="width100" cellspacing="1">

<tr>
<td class="form-title" colspan="2">View Revisions: Issue #673</td>
<td class="right" colspan="2">
<span class="bracket-link">[&#160;<a href="bug_revision_view_pagea202.html?bug_id=673">All Revisions</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="view0fb4.html?id=673">Back to Issue</a>&#160;]</span> </td>
</tr>

<tr class="row-1">
<td class="category" width="15%">Summary</td>
<td colspan="3">0000673: &quot;Map&quot; sub-tab unavailable</td>
</tr>

<tr class="spacer"><td><a name="r544"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-04-08 16:25 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Tested on v2.0-rc1.<br />
No more information get explicitly printed in the logs.<br />
<br />
The only information printed in the log a the same time are :<br />
[WARN ] {08/04/2015 16:21:02.606} [http-apr-8888-exec-8] o.s.s.security.impl.AccessRights - No security permission can be found for token 'null'. Did you forget to declare corresponding 'sperm'?<br />
<br />
<br />
<br />
<br />
[DEBUG] {08/04/2015 16:24:49.566} [http-apr-8888-exec-5] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.SecureNavigationCommand'.<br />
[DEBUG] {08/04/2015 16:24:49.570} [http-apr-8888-exec-5] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.SecureNavigationCommand[page=project-indicators-map]' ; Handler: '<a href="mailto:org.sigmah.server.handler.SecureNavigationCommandHandler@25e7fa54">org.sigmah.server.handler.SecureNavigationCommandHandler@25e7fa54</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.629} [http-apr-8888-exec-5] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.SecureNavigationCommand[page=project-indicators-map]' EXECUTED IN 57 MS.<br />
[DEBUG] {08/04/2015 16:24:49.757} [http-apr-8888-exec-9] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:49.766} [http-apr-8888-exec-9] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.767} [http-apr-8888-exec-9] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:49.770} [http-apr-8888-exec-9] o.s.server.handler.GetValueHandler - No value for this flexible element #1135.<br />
[DEBUG] {08/04/2015 16:24:49.770} [http-apr-8888-exec-9] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1135, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 3 MS.<br />
[DEBUG] {08/04/2015 16:24:49.777} [http-apr-8888-exec-10] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:49.785} [http-apr-8888-exec-10] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:49.786} [http-apr-8888-exec-10] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-10] o.s.server.handler.GetValueHandler - No value for this flexible element #1136.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-2] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:50.267} [http-apr-8888-exec-10] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1136, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 481 MS.<br />
[DEBUG] {08/04/2015 16:24:50.306} [http-apr-8888-exec-2] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:50.295} [http-apr-8888-exec-6] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'org.sigmah.shared.command.GetValue'.<br />
[DEBUG] {08/04/2015 16:24:50.316} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - Executing specific 'doGet' servlet method.<br />
[DEBUG] {08/04/2015 16:24:50.320} [http-apr-8888-exec-2] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.557} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - Retrieving by reflection the given servlet method 'downloadLogo'.<br />
[DEBUG] {08/04/2015 16:24:50.604} [http-apr-8888-exec-8] o.s.s.s.i.AuthenticationSecureSessionValidator - Starting validation of authentication token '7076a74e4c64a75a04f96697deb9538b' for resource 'null'.<br />
[WARN ] {08/04/2015 16:24:50.613} [http-apr-8888-exec-8] o.s.s.security.impl.AccessRights - No security permission can be found for token 'null'. Did you forget to declare corresponding 'sperm'?<br />
[DEBUG] {08/04/2015 16:24:50.624} [http-apr-8888-exec-2] o.s.server.handler.GetValueHandler - No value for this flexible element #1137.<br />
[DEBUG] {08/04/2015 16:24:50.625} [http-apr-8888-exec-2] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1137, elementEntityName=element.DefaultFlexibleElement]' EXECUTED IN 304 MS.<br />
[DEBUG] {08/04/2015 16:24:50.669} [http-apr-8888-exec-6] o.s.s.dispatch.impl.UserDispatch - EXECUTING COMMAND - Command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]' ; Handler: '<a href="mailto:org.sigmah.server.handler.GetValueHandler@7454433">org.sigmah.server.handler.GetValueHandler@7454433</a>[]' ; User: 'Admin Sigmah'.<br />
[DEBUG] {08/04/2015 16:24:50.669} [http-apr-8888-exec-6] o.s.server.handler.GetValueHandler - Getting value object from the database for command: 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]'.<br />
[DEBUG] {08/04/2015 16:24:50.670} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - SERVLET METHOD EXECUTION GRANTED - Servlet method: 'protected void org.sigmah.server.servlet.FileServlet.downloadLogo(javax.servlet.http.HttpServletRequest,javax.servlet.http.HttpServletResponse,org.sigmah.server.servlet.base.ServletExecutionContext) throws java.lang.Exception' ; User: 'A. Sigmah (35)'.<br />
[DEBUG] {08/04/2015 16:24:50.671} [http-apr-8888-exec-8] o.sigmah.server.servlet.FileServlet - Downloads logo with id 'csud.png'.<br />
[INFO ] {08/04/2015 16:24:50.672} [http-apr-8888-exec-8] o.s.s.conf.ReloadableProperties - Reloading properties.<br />
[INFO ] {08/04/2015 16:24:50.672} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'sigmah.properties'.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'version.properties'.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.s.conf.ReloadableProperties - Reloading properties.<br />
[DEBUG] {08/04/2015 16:24:50.675} [http-apr-8888-exec-6] o.s.server.handler.GetValueHandler - No value for this flexible element #1138.<br />
[DEBUG] {08/04/2015 16:24:50.675} [http-apr-8888-exec-6] o.s.s.dispatch.impl.UserDispatch - COMMAND 'org.sigmah.shared.command.GetValue[projectId=1907, elementId=1138, elementEntityName=element.BudgetElement]' EXECUTED IN 6 MS.<br />
[INFO ] {08/04/2015 16:24:50.675} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'sigmah.properties'.<br />
[INFO ] {08/04/2015 16:24:50.807} [http-apr-8888-exec-8] o.s.server.conf.BasicProperties - Loading properties from file 'version.properties'.<br />
[DEBUG] {08/04/2015 16:24:50.807} [http-apr-8888-exec-8] o.s.s.servlet.util.ResponseHelper - [DOWNLOAD] DOWNLOADING FILE 'null' WITH CONTENT-TYPE 'image/png' AND LENGTH null.<br />
[DEBUG] {08/04/2015 16:24:50.809} [http-apr-8888-exec-8] o.s.s.servlet.base.AbstractServlet - SERVLET METHOD 'protected void org.sigmah.server.servlet.FileServlet.downloadLogo(javax.servlet.http.HttpServletRequest,javax.servlet.http.HttpServletResponse,org.sigmah.server.servlet.base.ServletExecutionContext) throws java.lang.Exception' EXECUTED IN 137 MS.<br />
</td>
</tr>

	<tr class="spacer"><td><a name="r528"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-04-03 11:59 by osarrat</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3">Tested on v2.0-rc1.<br />
No more information get printed in the logs.</td>
</tr>

	<tr class="spacer"><td><a name="r527"></a></td></tr>

<tr class="row-2">
<td class="category">Revision</td>
<td colspan="2">2015-03-31 16:54 by Assistcom</td>
<td class="center" width="5%">
</tr>

<tr class="row-1">
<td class="category">Additional Information</td>
<td colspan="3"></td>
</tr>

	
</table>

	<br />
	<hr size="1" />
<table border="0" width="100%" cellspacing="0" cellpadding="0"><tr valign="top"><td>	<address>Copyright &copy; 2000 - 2018 MantisBT Team</address>
</td><td>
	<div align="right"><a href="http://www.mantisbt.org/" title="Free Web Based Bug Tracker"><img src="images/mantis_logo.html" width="145" height="50" alt="Powered by Mantis Bugtracker" border="0" /></a></div>
</td></tr></table>
</body>

<!-- Mirrored from www.sigmah.org/issues/bug_revision_view_page.php?rev_id=544 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:07:36 GMT -->
</html>
