<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=565 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:09 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:40:55 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000565: No more possible to delete project link - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="6"><div class="center">Sigmah Issue Tracker - sigmah</div></td></tr><tr><td class="form-title" colspan="6">View Issue Details</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print-category"><td class="print" width="16%">ID</td><td class="print" width="16%">Project</td><td class="print" width="16%">Category</td><td class="print" width="16%">View Status</td><td class="print" width="16%">Date Submitted</td><td class="print" width="16%">Last Update</td></tr><tr class="print"><td class="print">0000565</td><td class="print">sigmah</td><td class="print">Project</td><td class="print">public</td><td class="print">2013-06-21 17:58</td><td class="print">2013-07-23 11:34</td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Reporter</td><td class="print">osarrat</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Assigned To</td><td class="print">Guerline</td><td class="print" colspan="4">&#160;</td></tr><tr class="print"><td class="print-category">Priority</td><td class="print">normal</td><td class="print-category">Severity</td><td class="print">major</td><td class="print-category">Reproducibility</td><td class="print">always</td></tr><tr class="print"><td class="print-category">Status</td><td class="print">closed</td><td class="print-category">Resolution</td><td class="print">fixed</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">Platform</td><td class="print"></td><td class="print-category">OS</td><td class="print"></td><td class="print-category">OS Version</td><td class="print"></td></tr><tr class="print"><td class="print-category">Product Version</td><td class="print">1.2</td><td class="print" colspan="4">&#160;</td></tr><tr><td class="print-category">Target Version</td><td class="print">1.2</td><td class="print-category">Fixed in Version</td><td class="print">1.2</td><td class="print" colspan="2">&#160;</td></tr><tr class="print"><td class="print-category">User Report URL</td><td class="print" colspan="4"><a href="http://www.sigmah.org/node/769">http://www.sigmah.org/node/769</a> [<a href="http://www.sigmah.org/node/769" target="_blank">^</a>]</td></tr><tr class="print"><td class="print-category">OS</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other OS</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">Browser</td><td class="print" colspan="4">NA</td></tr><tr class="print"><td class="print-category">Other browser</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">ScreenURL</td><td class="print" colspan="4"></td></tr><tr class="print"><td class="print-category">(ActivityInfo) Noticed in revision</td><td class="print" colspan="4"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr class="print"><td class="print-category">Summary</td><td class="print" colspan="5">0000565: No more possible to delete project link</td></tr><tr class="print"><td class="print-category">Description</td><td class="print" colspan="5">Integration test <a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21">http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21</a> [<a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21" target="_blank">^</a>] failed.</td></tr><tr class="print"><td class="print-category">Steps To Reproduce</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Additional Information</td><td class="print" colspan="5">2013-06-24 14:36:35,774 qtp23025815-19 DEBUG UpdateEntityHandler:59 - [execute] Update command for entity: Project.<br />
2013-06-24 14:36:35,817 qtp23025815-19 ERROR AbstractFlushingEventListener:324 - Could not synchronize database state with session<br />
org.hibernate.HibernateException: cannot recreate collection while filter is enabled: [org.sigmah.shared.domain.Project.funding#2612]<br />
&#160;&#160;&#160;&#160;at org.hibernate.action.CollectionUpdateAction.execute(CollectionUpdateAction.java:75)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.execute(ActionQueue.java:279)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.executeActions(ActionQueue.java:263)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.executeActions(ActionQueue.java:170)<br />
&#160;&#160;&#160;&#160;at org.hibernate.event.def.AbstractFlushingEventListener.performExecutions(AbstractFlushingEventListener.java:321)<br />
&#160;&#160;&#160;&#160;at org.hibernate.event.def.DefaultFlushEventListener.onFlush(DefaultFlushEventListener.java:50)<br />
&#160;&#160;&#160;&#160;at org.hibernate.impl.SessionImpl.flush(SessionImpl.java:1027)<br />
&#160;&#160;&#160;&#160;at org.hibernate.impl.SessionImpl.managedFlush(SessionImpl.java:365)<br />
&#160;&#160;&#160;&#160;at org.hibernate.transaction.JDBCTransaction.commit(JDBCTransaction.java:137)<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.TransactionImpl.commit(TransactionImpl.java:54)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dao.hibernate.TransactionalInterceptor.invoke(TransactionalInterceptor.java:64)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback.intercept(InterceptorStackCallback.java:52)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b.handleCommand(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet.handleCommands(CommandServlet.java:80)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b.CGLIB$handleCommands$0(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b$$FastClassByGuice$$57404cb.invoke(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.cglib.proxy.$MethodProxy.invokeSuper(MethodProxy.java:228)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback.intercept(InterceptorStackCallback.java:52)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b.handleCommands(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet.execute(CommandServlet.java:56)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b.CGLIB$execute$2(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b$$FastClassByGuice$$57404cb.invoke(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.cglib.proxy.$MethodProxy.invokeSuper(MethodProxy.java:228)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback$InterceptedMethodInvocation.proceed(InterceptorStackCallback.java:72)<br />
&#160;&#160;&#160;&#160;at com.google.inject.internal.InterceptorStackCallback.intercept(InterceptorStackCallback.java:52)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet$$EnhancerByGuice$$bc124c2b.execute(&lt;generated&gt;)<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor6967.invoke(Unknown Source)<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:25)<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Method.java:597)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62)<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:727)<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:820)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:168)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CacheFilter.doFilter(CacheFilter.java:47)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:168)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler$CachedChain.doFilter(ServletHandler.java:1187)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler.doHandle(ServletHandler.java:425)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ScopedHandler.handle(ScopedHandler.java:119)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.security.SecurityHandler.handle(SecurityHandler.java:457)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.session.SessionHandler.handle(SessionHandler.java:182)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandler.doHandle(ContextHandler.java:933)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler.doScope(ServletHandler.java:362)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandler.doScope(ContextHandler.java:867)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ScopedHandler.handle(ScopedHandler.java:117)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandlerCollection.handle(ContextHandlerCollection.java:245)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.HandlerCollection.handle(HandlerCollection.java:126)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.HandlerWrapper.handle(HandlerWrapper.java:113)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.Server.handle(Server.java:334)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection.handleRequest(HttpConnection.java:559)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection$RequestHandler.content(HttpConnection.java:1007)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.http.HttpParser.parseNext(HttpParser.java:747)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.http.HttpParser.parseAvailable(HttpParser.java:209)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection.handle(HttpConnection.java:406)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.io.nio.SelectChannelEndPoint.run(SelectChannelEndPoint.java:462)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.util.thread.QueuedThreadPool$2.run(QueuedThreadPool.java:436)<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Thread.java:662)<br />
2013-06-24 14:36:35,819 qtp23025815-19 ERROR CommandServlet:70 - Exception was thrown while executing handleCommand<br />
javax.persistence.RollbackException: Error while commiting the transaction<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.TransactionImpl.commit(TransactionImpl.java:71)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.dao.hibernate.TransactionalInterceptor.invoke(TransactionalInterceptor.java:64)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet.handleCommands(CommandServlet.java:80)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CommandServlet.execute(CommandServlet.java:56)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.util.logging.LoggingInterceptor.invoke(LoggingInterceptor.java:52)<br />
&#160;&#160;&#160;&#160;at sun.reflect.GeneratedMethodAccessor6967.invoke(Unknown Source)<br />
&#160;&#160;&#160;&#160;at sun.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:25)<br />
&#160;&#160;&#160;&#160;at java.lang.reflect.Method.invoke(Method.java:597)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RPC.invokeAndEncodeResponse(RPC.java:569)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processCall(RemoteServiceServlet.java:208)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.RemoteServiceServlet.processPost(RemoteServiceServlet.java:248)<br />
&#160;&#160;&#160;&#160;at com.google.gwt.user.server.rpc.AbstractRemoteServiceServlet.doPost(AbstractRemoteServiceServlet.java:62)<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:727)<br />
&#160;&#160;&#160;&#160;at javax.servlet.http.HttpServlet.service(HttpServlet.java:820)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.doService(ServletDefinition.java:263)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ServletDefinition.service(ServletDefinition.java:178)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedServletPipeline.service(ManagedServletPipeline.java:91)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:62)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:168)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at org.sigmah.server.endpoint.gwtrpc.CacheFilter.doFilter(CacheFilter.java:47)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:163)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterDefinition.doFilter(FilterDefinition.java:168)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.FilterChainInvocation.doFilter(FilterChainInvocation.java:58)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.ManagedFilterPipeline.dispatch(ManagedFilterPipeline.java:118)<br />
&#160;&#160;&#160;&#160;at com.google.inject.servlet.GuiceFilter.doFilter(GuiceFilter.java:113)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler$CachedChain.doFilter(ServletHandler.java:1187)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler.doHandle(ServletHandler.java:425)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ScopedHandler.handle(ScopedHandler.java:119)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.security.SecurityHandler.handle(SecurityHandler.java:457)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.session.SessionHandler.handle(SessionHandler.java:182)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandler.doHandle(ContextHandler.java:933)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.servlet.ServletHandler.doScope(ServletHandler.java:362)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandler.doScope(ContextHandler.java:867)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ScopedHandler.handle(ScopedHandler.java:117)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.ContextHandlerCollection.handle(ContextHandlerCollection.java:245)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.HandlerCollection.handle(HandlerCollection.java:126)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.handler.HandlerWrapper.handle(HandlerWrapper.java:113)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.Server.handle(Server.java:334)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection.handleRequest(HttpConnection.java:559)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection$RequestHandler.content(HttpConnection.java:1007)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.http.HttpParser.parseNext(HttpParser.java:747)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.http.HttpParser.parseAvailable(HttpParser.java:209)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.server.HttpConnection.handle(HttpConnection.java:406)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.io.nio.SelectChannelEndPoint.run(SelectChannelEndPoint.java:462)<br />
&#160;&#160;&#160;&#160;at org.eclipse.jetty.util.thread.QueuedThreadPool$2.run(QueuedThreadPool.java:436)<br />
&#160;&#160;&#160;&#160;at java.lang.Thread.run(Thread.java:662)<br />
Caused by: org.hibernate.HibernateException: cannot recreate collection while filter is enabled: [org.sigmah.shared.domain.Project.funding#2612]<br />
&#160;&#160;&#160;&#160;at org.hibernate.action.CollectionUpdateAction.execute(CollectionUpdateAction.java:75)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.execute(ActionQueue.java:279)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.executeActions(ActionQueue.java:263)<br />
&#160;&#160;&#160;&#160;at org.hibernate.engine.ActionQueue.executeActions(ActionQueue.java:170)<br />
&#160;&#160;&#160;&#160;at org.hibernate.event.def.AbstractFlushingEventListener.performExecutions(AbstractFlushingEventListener.java:321)<br />
&#160;&#160;&#160;&#160;at org.hibernate.event.def.DefaultFlushEventListener.onFlush(DefaultFlushEventListener.java:50)<br />
&#160;&#160;&#160;&#160;at org.hibernate.impl.SessionImpl.flush(SessionImpl.java:1027)<br />
&#160;&#160;&#160;&#160;at org.hibernate.impl.SessionImpl.managedFlush(SessionImpl.java:365)<br />
&#160;&#160;&#160;&#160;at org.hibernate.transaction.JDBCTransaction.commit(JDBCTransaction.java:137)<br />
&#160;&#160;&#160;&#160;at org.hibernate.ejb.TransactionImpl.commit(TransactionImpl.java:54)<br />
&#160;&#160;&#160;&#160;... 49 more</td></tr><tr class="print"><td class="print-category">Tags</td><td class="print" colspan="5">No tags attached.</td></tr><tr class="print"><td class="print-category">Relationships</td><td class="print" colspan="5"></td></tr><tr class="print"><td class="print-category">Attached Files</td><td class="print" colspan="5"></td></tr><tr><td class="print-spacer" colspan="6"><hr size="1" /></td></tr><tr><td class="form-title">Issue History</td></tr><tr class="print-category"><td class="row-category-history">Date Modified</td><td class="row-category-history">Username</td><td class="row-category-history">Field</td><td class="row-category-history">Change</td></tr><tr class="print"><td class="print">2013-06-21 17:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">New Issue</td><td class="print"></td></tr><tr class="print"><td class="print">2013-06-21 17:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">new =&gt; assigned</td></tr><tr class="print"><td class="print">2013-06-21 17:58</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print"> =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-06-21 18:03</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">User Report URL</td><td class="print"> =&gt; <a href="http://www.sigmah.org/node/769">http://www.sigmah.org/node/769</a> [<a href="http://www.sigmah.org/node/769" target="_blank">^</a>]</td></tr><tr class="print"><td class="print">2013-06-24 14:45</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Additional Information Updated</td><td class="print">bug_revision_view_page.php?rev_id=400#r400</td></tr><tr class="print"><td class="print">2013-07-02 18:19</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Assigned To</td><td class="print">Guerline =&gt; tharindum</td></tr><tr class="print"><td class="print">2013-07-02 18:20</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001269</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-04 10:22</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Assigned To</td><td class="print">tharindum =&gt; Guerline</td></tr><tr class="print"><td class="print">2013-07-04 10:25</td><td class="print"><a href="view_user_page2580.html?id=43">Guerline</a></td><td class="print">Note Added: 0001279</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-04 10:28</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001280</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-16 11:44</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Checkin</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-16 11:44</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Note Added: 0001290</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-16 11:44</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Status</td><td class="print">assigned =&gt; resolved</td></tr><tr class="print"><td class="print">2013-07-16 11:44</td><td class="print"><a href="view_user_page5255.html?id=9">svn_mantis-robot</a></td><td class="print">Resolution</td><td class="print">open =&gt; fixed</td></tr><tr class="print"><td class="print">2013-07-23 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Note Added: 0001307</td><td class="print"></td></tr><tr class="print"><td class="print">2013-07-23 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Status</td><td class="print">resolved =&gt; closed</td></tr><tr class="print"><td class="print">2013-07-23 11:34</td><td class="print"><a href="view_user_page0b30.html?id=2">osarrat</a></td><td class="print">Fixed in Version</td><td class="print"> =&gt; 1.2</td></tr></table>
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
				(0001269)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-02 18:20&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				tharindum, I've assigned back the issue to you because I guess you will in a better position to solve, since it could that this issue is linked to the fix you made on <a href="view0468.html?id=99" title="[closed] Funding source Budget part percentage not udpated on total budget change" class="resolved">0000099</a> . Can you check that?			</td>
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
				(0001279)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page2580.html?id=43">Guerline</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-04 10:25&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				I've assigned back to myself because it is actually related to the fix that I've made on issue <a href="viewfc8f.html?id=503" title="[closed] Deleted test projects still partially visible" class="resolved">0000503</a>.			</td>
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
				(0001280)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-04 10:28&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Ok, so if you're the culprit, it makes actually sense to assign this issue back to you Guerline ! ;)			</td>
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
				(0001290)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-16 11:44&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Deletes physically project links associated to a deleted project (fixes issue <a href="viewdbb1.html?id=565" title="[closed] No more possible to delete project link" class="resolved">0000565</a>)<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/domain/DomainFilters.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/server/policy/ProjectPolicy.java<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/domain/Project.java<br />
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
				(0001307)
			</td>
		</tr>
		<tr>
			<td class="print">
				<a href="view_user_page0b30.html?id=2">osarrat</a>&#160;&#160;&#160;
			</td>
		</tr>
		<tr>
			<td class="print">
				2013-07-23 11:34&#160;&#160;&#160;
							</td>
		</tr>
		</table>
	</td>
	<td class="nopad" valign="top" width="85%">
		<table class="hide" cellspacing="1">
		<tr>
			<td class="print">
				Issue closed because correct behavior checked on v1.2-rc4 through integration test case <a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21">http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21</a> [<a href="http://code.google.com/p/sigma-h/wiki/TestScenario4ProjectManagement#PRJM21" target="_blank">^</a>]			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>

<!-- Mirrored from www.sigmah.org/issues/print_bug_page.php?bug_id=565 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:09 GMT -->
</html>
