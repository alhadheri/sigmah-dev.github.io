<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">

<!-- Mirrored from wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&do=revisions by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 16:56:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>administratorguide:solrinstallation - Old revisions [Sigmah wiki]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <meta name="generator" content="DokuWiki"/>
<meta name="robots" content="noindex,nofollow"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://wiki.sigmah.org/lib/exe/opensearch.php" title="Sigmah wiki"/>
<link rel="start" href="http://wiki.sigmah.org/"/>
<link rel="contents" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=index" title="Sitemap"/>
<link rel="alternate" type="application/rss+xml" title="Recent Changes" href="http://wiki.sigmah.org/feed.php"/>
<link rel="alternate" type="application/rss+xml" title="Current namespace" href="http://wiki.sigmah.org/feed.php?mode=list&amp;ns=administratorguide"/>
<link rel="alternate" type="text/html" title="Plain HTML" href="http://wiki.sigmah.org/doku.php?do=export_xhtml&amp;id=administratorguide:solrinstallation"/>
<link rel="alternate" type="text/plain" title="Wiki Markup" href="http://wiki.sigmah.org/doku.php?do=export_raw&amp;id=administratorguide:solrinstallation"/>
<link rel="stylesheet" type="text/css" href="http://wiki.sigmah.org/lib/exe/css.php?t=dokuwiki&amp;tseed=74cd2fc0434d10331b9bc01ea3827dea"/>
<!--[if gte IE 9]><!-->
<script type="text/javascript">/*<![CDATA[*/var NS='administratorguide';var JSINFO = {"id":"administratorguide:solrinstallation","namespace":"administratorguide"};
/*!]]>*/</script>
<script type="text/javascript" charset="utf-8" src="http://wiki.sigmah.org/lib/exe/jquery.php?tseed=23f888679b4f1dc26eef34902aca964f"></script>
<script type="text/javascript" charset="utf-8" src="http://wiki.sigmah.org/lib/exe/js.php?t=dokuwiki&amp;tseed=74cd2fc0434d10331b9bc01ea3827dea"></script>
<!--<![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" href="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/favicon.ico" />
<link rel="apple-touch-icon" href="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/apple-touch-icon.png" />
    </head>

<body>
    <div id="dokuwiki__site"><div id="dokuwiki__top" class="site dokuwiki mode_revisions tpl_dokuwiki     ">

        
<!-- ********** HEADER ********** -->
<div id="dokuwiki__header"><div class="pad group">

    
    <div class="headings group">
        <ul class="a11y skip">
            <li><a href="#dokuwiki__content">skip to content</a></li>
        </ul>

        <h1><a href="http://wiki.sigmah.org/doku.php?id=start"  accesskey="h" title="[H]"><img src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/logo.png" width="64" height="64" alt="" /> <span>Sigmah wiki</span></a></h1>
            </div>

    <div class="tools group">
        <!-- USER TOOLS -->
                    <div id="dokuwiki__usertools">
                <h3 class="a11y">User Tools</h3>
                <ul>
                    <li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=register"  class="action register" rel="nofollow" title="Register">Register</a></li><li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=login&amp;sectok="  class="action login" rel="nofollow" title="Log In">Log In</a></li>                </ul>
            </div>
        
        <!-- SITE TOOLS -->
        <div id="dokuwiki__sitetools">
            <h3 class="a11y">Site Tools</h3>
            <form action="http://wiki.sigmah.org/doku.php?id=start" accept-charset="utf-8" class="search" id="dw__search" method="get" role="search"><div class="no"><input type="hidden" name="do" value="search" /><input type="text" placeholder="Search" id="qsearch__in" accesskey="f" name="id" class="edit" title="[F]" /><button type="submit" title="Search">Search</button><div id="qsearch__out" class="ajax_qsearch JSpopup"></div></div></form>            <div class="mobileTools">
                <form action="http://wiki.sigmah.org/doku.php" method="get" accept-charset="utf-8"><div class="no"><input type="hidden" name="id" value="administratorguide:solrinstallation" /><select name="do" class="edit quickselect" title="Tools"><option value="">Tools</option><optgroup label="Page Tools"><option value="">Show page</option><option value="revisions">Old revisions</option><option value="backlink">Backlinks</option></optgroup><optgroup label="Site Tools"><option value="recent">Recent Changes</option><option value="media">Media Manager</option><option value="index">Sitemap</option></optgroup><optgroup label="User Tools"><option value="login">Log In</option><option value="register">Register</option></optgroup></select><button type="submit">&gt;</button></div></form>            </div>
            <ul>
                <li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=recent"  class="action recent" accesskey="r" rel="nofollow" title="Recent Changes [R]">Recent Changes</a></li><li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=media&amp;ns=administratorguide"  class="action media" rel="nofollow" title="Media Manager">Media Manager</a></li><li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=index"  class="action index" accesskey="x" rel="nofollow" title="Sitemap [X]">Sitemap</a></li>            </ul>
        </div>

    </div>

    <!-- BREADCRUMBS -->
            <div class="breadcrumbs">
                                        <div class="trace"><span class="bchead">Trace:</span> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=model:user_unit"  class="breadcrumbs" title="model:user_unit">user_unit</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=model:user_unit_profiles"  class="breadcrumbs" title="model:user_unit_profiles">user_unit_profiles</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=model:value"  class="breadcrumbs" title="model:value">value</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4gsoc2017"  class="breadcrumbs" title="ssoc:ideas4gsoc2017">ideas4gsoc2017</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4gsoc2016"  class="breadcrumbs" title="ssoc:ideas4gsoc2016">ideas4gsoc2016</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4soc2015"  class="breadcrumbs" title="ssoc:ideas4soc2015">ideas4soc2015</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4gsoc2014"  class="breadcrumbs" title="ssoc:ideas4gsoc2014">ideas4gsoc2014</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4gsoc2013"  class="breadcrumbs" title="ssoc:ideas4gsoc2013">ideas4gsoc2013</a></bdi> <span class="bcsep">•</span> <bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:ideas4gsoc2012"  class="breadcrumbs" title="ssoc:ideas4gsoc2012">ideas4gsoc2012</a></bdi> <span class="bcsep">•</span> <span class="curid"><bdi><a href="http://wiki.sigmah.org/doku.php?id=ssoc:sigmahsummerofcode"  class="breadcrumbs" title="ssoc:sigmahsummerofcode">sigmahsummerofcode</a></bdi></span></div>
                    </div>
    


    <hr class="a11y" />
</div></div><!-- /header -->

        <div class="wrapper group">

            
            <!-- ********** CONTENT ********** -->
            <div id="dokuwiki__content"><div class="pad group">
                
                <div class="pageId"><span>administratorguide:solrinstallation</span></div>

                <div class="page group">
                                                            <!-- wikipage start -->
                    
<h1 class="sectionedit1" id="old_revisions">Old Revisions</h1>
<div class="level1">

<p>
These are the older revisons of the current document. To revert to an old revision, select it from below, click <code>Edit this page</code> and save it.
</p>

</div>
<form id="page__revisions" class="changes" method="post" action="#" accept-charset="utf-8"><div class="no">
<input type="hidden" name="sectok" value="" /><ul >
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="current"/>
<span class="date">
2017/08/14 15:11</span>
<img src="http://wiki.sigmah.org/lib/images/blank.gif" width="15" height="11" alt="" /><a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502716295">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
(current)</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502631606"/>
<span class="date">
2017/08/13 15:40</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631606&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631606">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Creating a new Solr core for Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502631514"/>
<span class="date">
2017/08/13 15:38</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631514&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631514">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Creating a new Solr core for Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502631196"/>
<span class="date">
2017/08/13 15:33</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631196&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631196">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Prerequisites] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502631128"/>
<span class="date">
2017/08/13 15:32</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631128&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631128">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Prerequisites] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502631032"/>
<span class="date">
2017/08/13 15:30</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631032&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502631032">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Changing the name of the core] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630839"/>
<span class="date">
2017/08/13 15:27</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630839&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630839">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Sources] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630782"/>
<span class="date">
2017/08/13 15:26</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630782&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630782">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Sources] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630763"/>
<span class="date">
2017/08/13 15:26</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630763&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630763">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Sources] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630484"/>
<span class="date">
2017/08/13 15:21</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630484&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630484">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Notes] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630394"/>
<span class="date">
2017/08/13 15:19</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630394&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630394">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630337"/>
<span class="date">
2017/08/13 15:18</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630337&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630337">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502630044"/>
<span class="date">
2017/08/13 15:14</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630044&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502630044">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Notes] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502629693"/>
<span class="date">
2017/08/13 15:08</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629693&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629693">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502629616"/>
<span class="date">
2017/08/13 15:06</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629616&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629616">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502629488"/>
<span class="date">
2017/08/13 15:04</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629488&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502629488">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502628353"/>
<span class="date">
2017/08/13 14:45</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502628353&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502628353">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Integrating Solr with an instance of Sigmah] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502627183"/>
<span class="date">
2017/08/13 14:26</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502627183&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502627183">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Changing the name of the core] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502627134"/>
<span class="date">
2017/08/13 14:25</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502627134&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502627134">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Changing the name of the core] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502626774"/>
<span class="date">
2017/08/13 14:19</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502626774&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502626774">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Carrying out a full data import of the database] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
<li >
<div class="li">
<input type="checkbox" name="rev2[]" value="1502625919"/>
<span class="date">
2017/08/13 14:05</span>
<a class="diff_link" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502625919&amp;do=diff">
<img src="http://wiki.sigmah.org/lib/images/diff.png" width="15" height="11" title="Show differences to current revisions" alt="Show differences to current revisions"/>
</a>
<a class="wikilink1" href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;rev=1502625919">
administratorguide:solrinstallation</a>
<span class="sum">
 – <bdi>[Carrying out a full data import of the database] </bdi></span>
<span class="user">
<bdi>indianauthority97</bdi></span>
</div>
</li>
</ul>
<button name="do[diff]" type="submit">Show differences between selected revisions</button>
</div></form>
<div class="pagenav"><div class="pagenav-next"><form class="button btn_older" method="get" action="http://wiki.sigmah.org/doku.php"><div class="no"><input type="hidden" name="do" value="revisions" /><input type="hidden" name="first" value="20" /><input type="hidden" name="id" value="administratorguide:solrinstallation" /><button type="submit" accesskey="n" title="less recent &gt;&gt; [N]">less recent &gt;&gt;</button></div></form></div></div>
                    <!-- wikipage stop -->
                                    </div>

                <div class="docInfo"><bdi>administratorguide/solrinstallation.txt</bdi> · Last modified: 2017/08/14 15:11 by <bdi>indianauthority97</bdi></div>

                            </div></div><!-- /content -->

            <hr class="a11y" />

            <!-- PAGE ACTIONS -->
            <div id="dokuwiki__pagetools">
                <h3 class="a11y">Page Tools</h3>
                <div class="tools">
                    <ul>
                        <li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do="  class="action show" accesskey="v" rel="nofollow" title="Show page [V]"><span>Show page</span></a></li><li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=revisions"  class="action revs" accesskey="o" rel="nofollow" title="Old revisions [O]"><span>Old revisions</span></a></li><li><a href="http://wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&amp;do=backlink"  class="action backlink" rel="nofollow" title="Backlinks"><span>Backlinks</span></a></li><li><a href="#dokuwiki__top"  class="action top" accesskey="t" rel="nofollow" title="Back to top [T]"><span>Back to top</span></a></li>                    </ul>
                </div>
            </div>
        </div><!-- /wrapper -->

        
<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <div class="license">Except where otherwise noted, content on this wiki is licensed under the following license: <bdi><a href="http://creativecommons.org/licenses/by-sa/4.0/" rel="license" class="urlextern">CC Attribution-Share Alike 4.0 International</a></bdi></div>
    <div class="buttons">
        <a href="http://creativecommons.org/licenses/by-sa/4.0/" rel="license"><img src="http://wiki.sigmah.org/lib/images/license/button/cc-by-sa.png" alt="CC Attribution-Share Alike 4.0 International" /></a>        <a href="http://www.dokuwiki.org/donate" title="Donate" ><img
            src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/button-donate.gif" width="80" height="15" alt="Donate" /></a>
        <a href="http://php.net/" title="Powered by PHP" ><img
            src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
        <a href="http://validator.w3.org/check/referer" title="Valid HTML5" ><img
            src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" ><img
            src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
        <a href="http://dokuwiki.org/" title="Driven by DokuWiki" ><img
            src="http://wiki.sigmah.org/lib/tpl/dokuwiki/images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
</div></div><!-- /footer -->

    </div></div><!-- /site -->

    <div class="no"><img src="http://wiki.sigmah.org/lib/exe/indexer.php?id=administratorguide%3Asolrinstallation&amp;1530809742" width="2" height="1" alt="" /></div>
    <div id="screen__mode" class="no"></div></body>

<!-- Mirrored from wiki.sigmah.org/doku.php?id=administratorguide:solrinstallation&do=revisions by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 16:56:37 GMT -->
</html>
