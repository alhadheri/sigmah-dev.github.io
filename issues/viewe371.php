<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=623&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:43 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:28:28 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000623: Impossible to delete a field which had content - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_paged138.html?return=%2Fissues%2Fview.php%3Fid%3D623%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:28 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="viewe371.php?id=623&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page89bd.php?bug_id=623">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000623</td><td>sigmah</td><td>Administration</td><td>public</td><td>2014-06-17 17:33</td><td>2015-12-03 14:17</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>rcalabro</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>high</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.2</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>2.0.2</td><td class="category">Fixed in Version</td><td>2.0.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000623: Impossible to delete a field which had content</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Once a field has been created, there is no way to delete it.<br />
This issue occurs with text field and many other field types, and even if the project in which there was content for the field has been deleted.</td></tr><tr class="row-1"><td class="category">Additional Information</td><td colspan="5">Log of this error on v2.0-rc1 :<br />
[ERROR] {07/04/2015 15:49:41.864} [http-apr-8888-exec-8] o.h.e.jdbc.spi.SqlExceptionHelper - ERREUR: UPDATE ou DELETE sur la table ˠflexible_element ۠viole la contrainte de cl顩trang鳥<br />
ˠfk6ac917120d5ae49 ۠de la table ˠvalue ۊ  D굡il: La cl頨id_flexible_element)=(43878) est toujours rꧩrencꥠࡰartir de la table ˠvalue ۮ<br />
[ERROR] {07/04/2015 15:49:42.275} [http-apr-8888-exec-8] o.s.s.d.SecureDispatchServlet - COMMAND EXECUTION FAILED - Command execution: 'org.sigmah.client.security.SecureDispatchAsync$CommandExecution[authToken=401375b47e1a23ad65b4a824ae12a05e, command=org.sigmah.shared.command.DeleteFlexibleElements[], currentPageToken=admin-projects-models]' ; User: 'A. Sigmah (35)' ; RuntimeException while executing.<br />
javax.persistence.RollbackException: Error while committing the transaction<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.TransactionImpl.commit(TransactionImpl.java:92) ~[hibernate-entitymanager-4.2.14.Final.jar:4.2.14.Final]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.jpa.JpaLocalTxnInterceptor.invoke(JpaLocalTxnInterceptor.java:87) ~[guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.DeleteFlexibleElementsHandler.execute(DeleteFlexibleElementsHandler.java:47) ~[DeleteFlexibleElementsHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.DeleteFlexibleElementsHandler.execute(DeleteFlexibleElementsHandler.java:27) ~[DeleteFlexibleElementsHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) ~[AbstractCommandHandler.class:na]</td></tr><tr class="row-2"><td class="category">Tags</td><td colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">User Report URL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-1"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"></td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">has duplicate</span>&#160;</td><td><a href="view7d98.html?id=814">0000814</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Fields in project models can not be deleted on Care Sigmah Central instance&#160;</td></tr>
<tr bgcolor="#fcbdbd"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view6502.html?id=832">0000832</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Impossible to delete a used report field&#160;</td></tr>
<tr bgcolor="#fcbdbd"><td><span class="nowrap">child of</span>&#160;</td><td><a href="view13c1.html?id=825">0000825</a></td><td><span class="issue-status" title="open">new</span></td><td>&#160;</td><td>Connexion to Sigmah blocked&#160;</td></tr>
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
<tr class="bugnote" id="c1504">
        <td class="bugnote-public">
				<span class="small">(<a href="view946c.html?id=623#c1504" title="Direct link to note">0001504)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-12-10 13:29</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue set back to &quot;new&quot; because apparently not fixed yet.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1520">
        <td class="bugnote-public">
				<span class="small">(<a href="view946c.html?id=623#c1520" title="Direct link to note">0001520)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2014-12-12 10:23</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1587">
        <td class="bugnote-public">
				<span class="small">(<a href="view946c.html?id=623#c1587" title="Direct link to note">0001587)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-04-07 15:52</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Bug confirmed on v2.0-rc1.	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1920">
        <td class="bugnote-public">
				<span class="small">(<a href="view946c.html?id=623#c1920" title="Direct link to note">0001920)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2015-12-03 12:51</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because almost correct behavior checked on v2.0.2.<br />
<br />
The only thing which is not working is the removal of &quot;list of reports&quot; fields. This sub-issue has just been reported as new separate issue <a href="view6502.html?id=832" title="[new] Impossible to delete a used report field">0000832</a> .<br />
<br />
This issue <a href="view946c.html?id=623" title="[closed] Impossible to delete a field which had content" class="resolved">0000623</a> can be considered as closed in the way I just modify it now, since its fix is urgent to release in the new v2.0.2, and since there are almost no users using &quot;list of reports field&quot; at the moment.	</td>
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
		2014-06-17 17:33	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-08-05 02:26	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; renatoaf	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-08-05 02:26	</td>
	<td class="small-caption">
		<a href="view_user_page95dc.html?id=29">renatoaf</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-10 13:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001504	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-10 13:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		renatoaf =&gt; 	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-10 13:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; new	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-10 13:29	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.0 =&gt; unplanned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-10 13:30	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Tag Attached: NewComersSpecial	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-12 10:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001520	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-12 10:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; renatoaf	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2014-12-12 10:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2014-12-12 10:23	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		unplanned =&gt; 2.0	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 15:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		renatoaf =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-04-07 15:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001587	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-04-07 15:52	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Additional Information Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page3267.php?rev_id=543#r543">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-08 17:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		rcalabro =&gt; 	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-07-08 17:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; new	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-08 17:04	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.0 =&gt; next-but-one	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-07-24 17:57	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Summary	</td>
	<td class="small-caption">
		Impossible to delete a Report field =&gt; Impossible to delete a field which had content	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-07-24 17:57	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page9a6e.php?rev_id=707#r707">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-06 13:01	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000814	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-06 13:01	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		next-but-one =&gt; 2.1	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-09 18:26	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Category	</td>
	<td class="small-caption">
		Reports =&gt; Administration	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-16 11:36	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		parent of 0000825	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-16 11:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship deleted	</td>
	<td class="small-caption">
		parent of 0000825	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-16 11:41	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		child of 0000825	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-25 09:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; rcalabro	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-25 09:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Priority	</td>
	<td class="small-caption">
		normal =&gt; high	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-11-25 09:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-11-25 09:46	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.1 =&gt; 2.0.2	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 2.0.2	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 09:54	</td>
	<td class="small-caption">
		<a href="view_user_pagedcfd.html?id=4">rcalabro</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:47	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000832	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 12:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001920	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 12:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Description Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagef3ed.php?rev_id=738#r738">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 12:51	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Steps to Reproduce Updated	</td>
	<td class="small-caption">
		<a href="bug_revision_view_pagec683.php?rev_id=740#r740">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2015-12-03 14:17	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship deleted	</td>
	<td class="small-caption">
		related to 0000814	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2015-12-03 14:17	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		has duplicate 0000814	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=623&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:44 GMT -->
</html>
