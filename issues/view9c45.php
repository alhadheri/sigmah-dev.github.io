<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from www.sigmah.org/issues/view.php?id=548&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:17 GMT -->
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
	<meta http-equiv="Expires" content="Wed, 25 Jul 2018 15:41:00 GMT" />
	<link rel="shortcut icon" href="images/favicon.html" type="image/x-icon" />
	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Text Search" href="browser_search_plugin84ae.html?type=text" />	<link rel="search" type="application/opensearchdescription+xml" title="MantisBT: Issue Id" href="browser_search_pluginb70d.html?type=id" />	<title>0000548: Budget field always editable - Sigmah Issue Tracker</title>
<script type="text/javascript" src="javascript/min/common.html"></script>
<script type="text/javascript">var loading_lang = "Loading...";</script><script type="text/javascript" src="javascript/min/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="plugin_filea93c.css?file=Source/style.css"/></head>
<body>
<div align="left"><a href="my_view_page.html"><img border="0" alt="Sigmah Issue Tracker" src="images/sigmah-logo-Mantis.html" /></a></div><table class="hide"><tr><td class="login-info-left">Anonymous | <a href="login_page2f3f.html?return=%2Fissues%2Fview.php%3Fid%3D548%26history%3D1">Login</a> | <a href="signup_page.html">Signup for a new account</a></td><td class="login-info-middle"><span class="italic">2018-07-25 17:41 CEST</span></td><td class="login-info-right"><form method="post" name="form_set_project" action="http://www.sigmah.org/issues/set_project.php">Project: <select name="project_id" class="small" onchange="document.forms.form_set_project.submit();"><option value="0" selected="selected" >All Projects</option>
<option value="1">sigmah</option>
<option value="4">Sigmah Central</option>
</select> <input type="submit" class="button-small" value="Switch" /></form><a href="200_rss_Sigmah_Issue_Tracker_-_Issuesd41d.xml?"><img src="images/rss.html" alt="RSS" style="border-style: none; margin: 5px; vertical-align: middle;" /></a></td></tr></table><table class="width100" cellspacing="0"><tr><td class="menu"><a href="my_view_page.html">My View</a> | <a href="view_all_bug_page.html">View Issues</a> | <a href="changelog_page.html">Change Log</a> | <a href="roadmap_page.html">Roadmap</a> | <a href="plugina0e2.html?page=Source/index">Repositories</a> | <a href="account_page.html">My Account</a></td><td class="menu right nowrap"><form method="post" action="http://www.sigmah.org/issues/jump_to_bug.php"><input type="text" name="bug_id" size="10" class="small" value="Issue #" onfocus="if (this.value == 'Issue #') this.value = ''" onblur="if (this.value == '') this.value = 'Issue #'" />&#160;<input type="submit" class="button-small" value="Jump" />&#160;</form></td></tr></table><br /><table class="width100" cellspacing="1"><tr><td class="form-title" colspan="3">View Issue Details&#160;<span class="small"><span class="bracket-link">[&#160;<a href="#bugnotes">Jump to Notes</a>&#160;]</span> </span></td><td class="center"><span class="small"></span></td><td class="right" colspan="2"><span class="small"><span class="bracket-link">[&#160;<a href="view9c45.php?id=548&amp;history=1#history">Issue History</a>&#160;]</span> </span><span class="small"><span class="bracket-link">[&#160;<a href="print_bug_page803e.php?bug_id=548">Print</a>&#160;]</span> </span></td></tr><tr><td class="category" width="15%">ID</td><td class="category" width="20%">Project</td><td class="category" width="15%">Category</td><td class="category" width="15%">View Status</td><td class="category" width="15%">Date Submitted</td><td class="category" width="20%">Last Update</td></tr><tr class="row-1"><td>0000548</td><td>sigmah</td><td>Project</td><td>public</td><td>2013-03-08 17:44</td><td>2013-07-03 10:55</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">Reporter</td><td>osarrat</td><td colspan="4">&#160;</td></tr><tr class="row-1"><td class="category">Assigned To</td><td>tharindum</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Priority</td><td>normal</td><td class="category">Severity</td><td>major</td><td class="category">Reproducibility</td><td>always</td></tr><tr class="row-1"><td class="category">Status</td><td bgcolor="#c9ccc4">closed</td><td class="category">Resolution</td><td>fixed</td><td colspan="2">&#160;</td></tr><tr class="row-2"><td class="category">Platform</td><td></td><td class="category">OS</td><td></td><td class="category">OS Version</td><td></td></tr><tr class="row-1"><td class="category">Product Version</td><td>1.1.1</td><td colspan="4">&#160;</td></tr><tr class="row-2"><td class="category">Target Version</td><td>1.2</td><td class="category">Fixed in Version</td><td>1.2</td><td colspan="2">&#160;</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category">Summary</td><td colspan="5">0000548: Budget field always editable</td></tr><tr class="row-2"><td class="category">Description</td><td colspan="5">Currently, the budget field is always editable when visible.<br />
If view right are only given on the budget field, it should not be editable.</td></tr><tr class="row-1"><td class="category">Steps To Reproduce</td><td colspan="5">Scenario 1:<br />
1. set a privacy group to the budget field<br />
2. set this privacy group to an user whith only &quot;view&quot; right<br />
3. open the project with the concerned user -&gt; you can still edit &quot;received budget&quot; and &quot;budget spent&quot; fields (planned budget is however not editable)<br />
<br />
Scenario 2:<br />
1. add a user with only &quot;view project&quot; right<br />
2. open any project with this user : he can modify budget fields</td></tr><tr class="row-2"><td class="category">Additional Information</td><td colspan="5">This bug might be linked to the bug fix of <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a> (Exclude Received budget and Spent budget from Amendment management).</td></tr><tr class="row-1"><td class="category">Tags</td><td colspan="5">No tags attached.</td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-2"><td class="category">User Report URL</td><td colspan="5"><a href="http://www.sigmah.org/node/697">http://www.sigmah.org/node/697</a> [<a href="http://www.sigmah.org/node/697" target="_blank">^</a>]</td></tr><tr class="row-1"><td class="category">OS</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other OS</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">Browser</td><td colspan="5">NA</td></tr><tr class="row-2"><td class="category">Other browser</td><td colspan="5"></td></tr><tr class="row-1"><td class="category">ScreenURL</td><td colspan="5"></td></tr><tr class="row-2"><td class="category">(ActivityInfo) Noticed in revision</td><td colspan="5"></td></tr><tr class="spacer"><td colspan="6"></td></tr><tr class="row-1"><td class="category"><a name="attachments" id="attachments" />Attached Files</td><td colspan="5"><a href="file_download602f.php?file_id=70&amp;type=bug"><img src="images/fileicons/text.html" alt="patch file icon" width="16" height="16" border="0" /></a>&#160;<a href="file_download602f.php?file_id=70&amp;type=bug">DefaultFlexibleElementDTO.java.patch</a> [<a href="file_download602f.php?file_id=70&amp;type=bug" target="_blank">^</a>] (9,887 bytes) <span class="italic">2013-04-23 18:58</span><script type="text/javascript" language="JavaScript">
<!--
function swap_content( span ) {
displayType = ( document.getElementById( span ).style.display == 'none' ) ? '' : 'none';
document.getElementById( span ).style.display = displayType;
}

 -->
 </script> <span id="hideSection_70">[<a class="small" href='#' id='attmlink_70' onclick='swap_content("hideSection_70");swap_content("showSection_70");return false;'>Show Content</a>]</span> <span style='display:none' id="showSection_70">[<a class="small" href='#' id='attmlink_70' onclick='swap_content("hideSection_70");swap_content("showSection_70");return false;'>Hide Content</a>]<pre>Index: src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java	(revision 1287)
+++ src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java	(working copy)
@@ -262,98 +262,98 @@
                 final Label ratioLabel = new Label();
                 ratioLabel.addStyleName(&quot;project-label-10&quot;);
                 ratioLabel.addStyleName(&quot;flexibility-label&quot;);
+                
+                if (enabled) {
+                	
+                	// Builds the number fields
+                	final NumberField plannedBudgetNumberField = createNumberField(false);
+                	final NumberField receivedBudgetNumberField = createNumberField(false);
+                	final NumberField spendBudgetNumberField = createNumberField(false);
+                	
+                	// Listener.
+                    final Listener&lt;BaseEvent&gt; listener = new Listener&lt;BaseEvent&gt;() {
 
-                // Planned budget.
-                // Final reference to the &quot;planned budget&quot; field (needed by the
-                // listener).
-                final NumberField[] plannedBudgetReference = new NumberField[] { null };
+                        final double minValue = 0.0;
 
-                // Spent budget.
-                final NumberField spendBudgetNumberField = createNumberField(false);
-                spendBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
-                spendBudgetField = spendBudgetNumberField;
-                spendBudgetNumberField.setValue(sb);
+                        @Override
+                        public void handleEvent(BaseEvent be) {
 
-                // Received budget.
-                final NumberField receivedBudgetNumberField = createNumberField(false);
-                receivedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
-                receivedBudgetField = receivedBudgetNumberField;
-                receivedBudgetNumberField.setValue(rb);
+                            // Retrieves values.                            
+                            final Number plannedBudget = plannedBudgetNumberField.getValue();
+                            final Double plannedBudgetAsDouble = plannedBudget.doubleValue();
 
-                // Listener.
-                final Listener&lt;BaseEvent&gt; listener = new Listener&lt;BaseEvent&gt;() {
+                            final Number receivedBudget = receivedBudgetNumberField.getValue();
+                            final Double receivedBudgetAsDouble = receivedBudget.doubleValue();
+                            
+                            final Number spendBudget = spendBudgetNumberField.getValue();
+                            final Double spendBudgetAsDouble = spendBudget.doubleValue();
 
-                    final double minValue = 0.0;
+                            // Checks the numbers intervals.
+                            final boolean isValueOn =
+                                    plannedBudgetAsDouble &gt;= minValue
+                                        &amp;&amp; spendBudgetAsDouble &gt;= minValue
+                                        &amp;&amp; receivedBudgetAsDouble &gt;= minValue;
 
-                    @Override
-                    public void handleEvent(BaseEvent be) {
+                            // The numbers are saved as strings.
+                            final String plannedBudgetRawValue = String.valueOf(plannedBudgetAsDouble);
+                            final String spendBudgetRawValue = String.valueOf(spendBudgetAsDouble);
+                            final String receivedBudgetRawValue = String.valueOf(receivedBudgetAsDouble);
+                            final String rawValue =
+                                    ValueResultUtils.mergeElements(plannedBudgetRawValue, spendBudgetRawValue,
+                                        receivedBudgetRawValue);
 
-                        // Retrieves values.
-                        final Double plannedBudgetAsDouble;
-                        if (plannedBudgetReference[0] != null) {
-                            // If the field exists, retrieving its value.
-                            final Number plannedBudget = plannedBudgetReference[0].getValue();
-                            plannedBudgetAsDouble = plannedBudget.doubleValue();
+                            ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
+                                + &quot;: &quot;
+                                + NumberUtils.ratioAsString(spendBudgetAsDouble, plannedBudgetAsDouble));
 
-                        } else {
-                            // Otherwise, using the default value.
-                            plannedBudgetAsDouble = pb;
+                            fireEvents(rawValue, isValueOn);
                         }
-
-                        final Number spendBudget = spendBudgetNumberField.getValue();
-                        final Double spendBudgetAsDouble = spendBudget.doubleValue();
-
-                        final Number receivedBudget = receivedBudgetNumberField.getValue();
-                        final Double receivedBudgetAsDouble = receivedBudget.doubleValue();
-
-                        // Checks the numbers intervals.
-                        final boolean isValueOn =
-                                plannedBudgetAsDouble &gt;= minValue
-                                    &amp;&amp; spendBudgetAsDouble &gt;= minValue
-                                    &amp;&amp; receivedBudgetAsDouble &gt;= minValue;
-
-                        // The numbers are saved as strings.
-                        final String plannedBudgetRawValue = String.valueOf(plannedBudgetAsDouble);
-                        final String spendBudgetRawValue = String.valueOf(spendBudgetAsDouble);
-                        final String receivedBudgetRawValue = String.valueOf(receivedBudgetAsDouble);
-                        final String rawValue =
-                                ValueResultUtils.mergeElements(plannedBudgetRawValue, spendBudgetRawValue,
-                                    receivedBudgetRawValue);
-
-                        ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
-                            + &quot;: &quot;
-                            + NumberUtils.ratioAsString(spendBudgetAsDouble, plannedBudgetAsDouble));
-
-                        fireEvents(rawValue, isValueOn);
-                    }
-                };
-
-                spendBudgetNumberField.addListener(Events.Change, listener);
-                receivedBudgetNumberField.addListener(Events.Change, listener);
-
-                if (enabled) {
+                    };                	
 
                     // Planned budget.
-                    final NumberField plannedBudgetNumberField = createNumberField(false);
                     plannedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectPlannedBudget());
-
                     plannedBudgetNumberField.addListener(Events.Change, listener);
-
                     // Sets the value to the fields.
                     plannedBudgetNumberField.setValue(pb);
-
-                    plannedBudgetReference[0] = plannedBudgetNumberField;
                     plannedBudgetField = plannedBudgetNumberField;
+                    
+                    // Received budget.
+                    receivedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
+                    receivedBudgetNumberField.addListener(Events.Change, listener);
+                    // Sets the value to the fields.
+                    receivedBudgetNumberField.setValue(rb);
+                    receivedBudgetField = receivedBudgetNumberField;
 
-                } else {
+                    // Spent budget.
+                    spendBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
+                    spendBudgetNumberField.addListener(Events.Change, listener);
+                    // Sets the value to the fields.
+                    spendBudgetNumberField.setValue(sb);
+                    spendBudgetField = spendBudgetNumberField;
 
+                } else {                	
+
+                    // Planned budget.
                     final LabelField plannedBudgetLabelField = createLabelField();
                     plannedBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectPlannedBudget());
-
                     // Sets the value to the fields.
                     plannedBudgetLabelField.setValue(pb);
+                    plannedBudgetField = plannedBudgetLabelField;  
+                    
+                    // Received budget.
+                    final LabelField receivedBudgetLabelField = createLabelField();
+                    receivedBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
+                    // Sets the value to the fields.
+                    receivedBudgetLabelField.setValue(rb);
+                    receivedBudgetField = receivedBudgetLabelField;
 
-                    plannedBudgetField = plannedBudgetLabelField;
+                    // Spent budget.
+                    final LabelField spendBudgetLabelField = createLabelField();
+                    spendBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
+                    // Sets the value to the fields.
+                    spendBudgetLabelField.setValue(sb);
+                    spendBudgetField = spendBudgetLabelField;
+                    
                 }
 
                 ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
</pre></span>
</td></tr><tr align="center"><td align="center" colspan="6"><table><tr class="vcenter"><td class="center"></td><td class="center"></td><td class="center"></td><td class="center"></td></tr></table></td></tr></table><br />

<div id="relationships_open"><table class="width100" cellspacing="1">
<tr class="row-2" valign="top">
	<td width="15%" class="form-title" colspan="2">
		<a href="#" onclick="ToggleDiv( 'relationships' ); return false;"
			><img border="0" src="images/minus.html" alt="-" /></a>&#160;Relationships	</td>
</tr>
<tr>
	<td colspan="2"><table border="0" width="100%" cellpadding="0" cellspacing="1"><tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view0741.html?id=180">0000180</a></td><td><span class="issue-status" title="fixed">closed</span></td><td>&#160;</td><td>Exclude Received budget and Spent budget from Amendment management&#160;</td></tr>
<tr bgcolor="#c9ccc4"><td><span class="nowrap">related to</span>&#160;</td><td><a href="view03ea.html?id=167">0000167</a></td><td><span class="issue-status" title="fixed">closed</span></td><td><span class="nowrap"><a href="view_user_pagedcfd.html?id=4">rcalabro</a></span>&#160;</td><td>Project core versions (amendments)&#160;</td></tr>
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
<tr class="bugnote" id="c1123">
        <td class="bugnote-public">
				<span class="small">(<a href="view105c.html?id=548#c1123" title="Direct link to note">0001123)</a></span><br />
		<a href="view_user_page7d36.html?id=51">tharindum</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-04-23 18:59</span><br />
		<span class="small">edited on:&#32;2013-04-23 19:00</span><br />		<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Here I attached the patch file for fixing this issue. This issue has been introduced by the bug fix of 0000180. It is related to the Amendment management and due to this fix that will be reopen. It's better to handle that issue properly by considering the business requirement of the amendment. <br />
This patch should be applied and the fix for issue 0000180 should be something else than the enabling  &quot;Received budget&quot; and &quot;Spent budget&quot; fields directly from UI.<br />
<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1229">
        <td class="bugnote-public">
				<span class="small">(<a href="view105c.html?id=548#c1229" title="Direct link to note">0001229)</a></span><br />
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>		<span class="small">(developer)</span>
				<br />
		<span class="small">2013-06-11 15:58</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Patch by tharindum : enables all the budget text inputs for read-only mode (fixes issue <a href="view105c.html?id=548" title="[closed] Budget field always editable" class="resolved">0000548</a>). The planned budget field is no more disabled when the current amendment is locked (reopens issue <a href="view0741.html?id=180" title="[closed] Exclude Received budget and Spent budget from Amendment management" class="resolved">0000180</a>).<br />
<br />
Modified : /trunk/sigmah/src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java<br />
	</td>
</tr>
<tr class="spacer">
	<td colspan="2"></td>
</tr>
<tr class="bugnote" id="c1277">
        <td class="bugnote-public">
				<span class="small">(<a href="view105c.html?id=548#c1277" title="Direct link to note">0001277)</a></span><br />
		<a href="view_user_page0b30.html?id=2">osarrat</a>		<span class="small">(administrator)</span>
				<br />
		<span class="small">2013-07-03 10:55</span><br />
				<br /><div class="small">
				</div>
	</td>
	<td class="bugnote-note-public">
		Issue closed because correct behavior checked on v1.2-rc3.	</td>
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
		2013-03-08 17:44	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		New Issue	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-03-08 17:44	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000180	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-04-23 18:58	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		File Added: DefaultFlexibleElementDTO.java.patch	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-04-23 18:59	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		Note Added: 0001123	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-04-23 18:59	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		Note Edited: 0001123	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page176d.php?bugnote_id=1123#r356">View Revisions</a>	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-04-23 19:00	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		Note Edited: 0001123	</td>
	<td class="small-caption">
		<a href="bug_revision_view_page176d.php?bugnote_id=1123#r357">View Revisions</a>	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-06-06 21:19	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		Assigned To	</td>
	<td class="small-caption">
		 =&gt; tharindum	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-06 21:19	</td>
	<td class="small-caption">
		<a href="view_user_page7d36.html?id=51">tharindum</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		new =&gt; assigned	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-06-07 19:47	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Target Version	</td>
	<td class="small-caption">
		2.0 =&gt; 1.2	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-11 15:58	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Checkin	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-06-11 15:58	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Note Added: 0001229	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-11 15:58	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		assigned =&gt; resolved	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-06-11 15:58	</td>
	<td class="small-caption">
		<a href="view_user_page5255.html?id=9">svn_mantis-robot</a>	</td>
	<td class="small-caption">
		Resolution	</td>
	<td class="small-caption">
		open =&gt; fixed	</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-06-11 16:12	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Relationship added	</td>
	<td class="small-caption">
		related to 0000167	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 10:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Note Added: 0001277	</td>
	<td class="small-caption">
			</td>
</tr>
<tr class="row-1">
	<td class="small-caption">
		2013-07-03 10:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Status	</td>
	<td class="small-caption">
		resolved =&gt; closed	</td>
</tr>
<tr class="row-2">
	<td class="small-caption">
		2013-07-03 10:55	</td>
	<td class="small-caption">
		<a href="view_user_page0b30.html?id=2">osarrat</a>	</td>
	<td class="small-caption">
		Fixed in Version	</td>
	<td class="small-caption">
		 =&gt; 1.2	</td>
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

<!-- Mirrored from www.sigmah.org/issues/view.php?id=548&history=1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jul 2018 16:12:17 GMT -->
</html>
