<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=623 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:44 GMT -->
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
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000623</td><td class="print">sigmah</td><td class="print">Administration</td><td class="print">public</td><td class="print">2014-06-17 17:33</td><td class="print">2015-12-03 14:17</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">rcalabro</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">high</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">2.0.2</td><td class="print-category">Fixed in Version</td><td class="print">2.0.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000623: Impossible to delete a field which had content</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Once a field has been created, there is no way to delete it.<br />
This issue occurs with text field and many other field types, and even if the project in which there was content for the field has been deleted.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">Log of this error on v2.0-rc1 :<br />
[ERROR] {07/04/2015 15:49:41.864} [http-apr-8888-exec-8] o.h.e.jdbc.spi.SqlExceptionHelper - ERREUR: UPDATE ou DELETE sur la table ˠflexible_element ۠viole la contrainte de cl顩trang鳥<br />
ˠfk6ac917120d5ae49 ۠de la table ˠvalue ۊ  D굡il: La cl頨id_flexible_element)=(43878) est toujours rꧩrencꥠࡰartir de la table ˠvalue ۮ<br />
[ERROR] {07/04/2015 15:49:42.275} [http-apr-8888-exec-8] o.s.s.d.SecureDispatchServlet - COMMAND EXECUTION FAILED - Command execution: 'org.sigmah.client.security.SecureDispatchAsync$CommandExecution[authToken=401375b47e1a23ad65b4a824ae12a05e, command=org.sigmah.shared.command.DeleteFlexibleElements[], currentPageToken=admin-projects-models]' ; User: 'A. Sigmah (35)' ; RuntimeException while executing.<br />
javax.persistence.RollbackException: Error while committing the transaction<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.TransactionImpl.commit(TransactionImpl.java:92) ~[hibernate-entitymanager-4.2.14.Final.jar:4.2.14.Final]<br />
&#160;&#160;&#160;&#160;at com.google.inject.persist.jpa.JpaLocalTxnInterceptor.invoke(JpaLocalTxnInterceptor.java:87) ~[guice-persist-3.0.jar:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.DeleteFlexibleElementsHandler.execute(DeleteFlexibleElementsHandler.java:47) ~[DeleteFlexibleElementsHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.DeleteFlexibleElementsHandler.execute(DeleteFlexibleElementsHandler.java:27) ~[DeleteFlexibleElementsHandler.class:na]<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.handler.base.AbstractCommandHandler.execute(AbstractCommandHandler.java:95) ~[AbstractCommandHandler.class:na]</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5"><a href='tag_view_page5916.html?tag_id=15' title='Easiest issues to pick up when starting to contribute on the project.'>LowHangingFruits</a></td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr><td class="print"><span class="nowrap">has duplicate</span>&#160;</td><td class="print">0000814</td><td class="print">closed&#160;</td><td class="print"><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td class="print">Fields in project models can not be deleted on Care Sigmah Central instance&#160;</td></tr><tr><td class="print"><span class="nowrap">related to</span>&#160;</td><td class="print">0000832</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Impossible to delete a used report field&#160;</td></tr><tr><td class="print"><span class="nowrap">child of</span>&#160;</td><td class="print">0000825</td><td class="print">new&#160;</td><td class="print">&#160;</td><td class="print">Connexion to Sigmah blocked&#160;</td></tr></table></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2014-06-17 17:33</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2014-08-05 02:26</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Assigned To</td><td class="print"> =&gt; renatoaf</td></tr><tr class="print"><td class="print">2014-08-05 02:26</td><td class="print"><a href="view_user_page95dc.html?id=29">renatoaf</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-12-10 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001504</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-10 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">renatoaf =&gt; </td></tr><tr class="print"><td class="print">2014-12-10 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2014-12-10 13:29</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; unplanned</td></tr><tr class="print"><td class="print">2014-12-10 13:30</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Attached: NewComersSpecial</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-12 10:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001520</td><td class="print"></td></tr><tr class="print"><td class="print">2014-12-12 10:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; renatoaf</td></tr><tr class="print"><td class="print">2014-12-12 10:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2014-12-12 10:23</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">unplanned =&gt; 2.0</td></tr><tr class="print"><td class="print">2015-04-07 15:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">renatoaf =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-04-07 15:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001587</td><td class="print"></td></tr><tr class="print"><td class="print">2015-04-07 15:52</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=543#r543</td></tr><tr class="print"><td class="print">2015-07-08 17:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">rcalabro =&gt; </td></tr><tr class="print"><td class="print">2015-07-08 17:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">assigned =&gt; new</td></tr><tr class="print"><td class="print">2015-07-08 17:04</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.0 =&gt; next-but-one</td></tr><tr class="print"><td class="print">2015-07-24 17:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Summary</td><td class="print">Impossible to delete a Report field =&gt; Impossible to delete a field which had content</td></tr><tr class="print"><td class="print">2015-07-24 17:57</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=707#r707</td></tr><tr class="print"><td class="print">2015-11-06 13:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000814</td></tr><tr class="print"><td class="print">2015-11-06 13:01</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">next-but-one =&gt; 2.1</td></tr><tr class="print"><td class="print">2015-11-09 18:26</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Category</td><td class="print">Reports =&gt; Administration</td></tr><tr class="print"><td class="print">2015-11-16 11:36</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">parent of 0000825</td></tr><tr class="print"><td class="print">2015-11-16 11:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">parent of 0000825</td></tr><tr class="print"><td class="print">2015-11-16 11:41</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">child of 0000825</td></tr><tr class="print"><td class="print">2015-11-25 09:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; rcalabro</td></tr><tr class="print"><td class="print">2015-11-25 09:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Priority</td><td class="print">normal =&gt; high</td></tr><tr class="print"><td class="print">2015-11-25 09:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2015-11-25 09:46</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Target Version</td><td class="print">2.1 =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 2.0.2</td></tr><tr class="print"><td class="print">2015-12-03 09:54</td><td class="print"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2015-12-03 12:47</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">related to 0000832</td></tr><tr class="print"><td class="print">2015-12-03 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001920</td><td class="print"></td></tr><tr class="print"><td class="print">2015-12-03 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2015-12-03 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Description Updated</td><td class="print">bug_revision_view_page.php?rev_id=738#r738</td></tr><tr class="print"><td class="print">2015-12-03 12:51</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Steps to Reproduce Updated</td><td class="print">bug_revision_view_page.php?rev_id=740#r740</td></tr><tr class="print"><td class="print">2015-12-03 14:17</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship deleted</td><td class="print">related to 0000814</td></tr><tr class="print"><td class="print">2015-12-03 14:17</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Relationship added</td><td class="print">has duplicate 0000814</td></tr><tr class="print"><td class="print">2016-03-03 09:39</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Tag Renamed</td><td class="print">NewComersSpecial =&gt; LowHangingFruits</td></tr></table>
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
				(0001504)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-12-10 13:29&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue set back to &quot;new&quot; because apparently not fixed yet.			</td>
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
				(0001520)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2014-12-12 10:23&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Patch to fix this issue attached as a larger patch on issue <a href="viewcd66.html?id=419" title="[closed] Project/orgunit models modifications with Available status" class="resolved">0000419</a>.			</td>
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
				(0001587)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-04-07 15:52&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Bug confirmed on v2.0-rc1.			</td>
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
				(0001920)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2015-12-03 12:51&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because almost correct behavior checked on v2.0.2.<br />
<br />
The only thing which is not working is the removal of &quot;list of reports&quot; fields. This sub-issue has just been reported as new separate issue <a href="view6502.html?id=832" title="[new] Impossible to delete a used report field">0000832</a> .<br />
<br />
This issue <a href="view946c.html?id=623" title="[closed] Impossible to delete a field which had content" class="resolved">0000623</a> can be considered as closed in the way I just modify it now, since its fix is urgent to release in the new v2.0.2, and since there are almost no users using &quot;list of reports field&quot; at the moment.			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=623 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:03:44 GMT -->
</html>
