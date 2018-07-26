Index: /src/main/java/org/sigmah/client/page/admin/AdminPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/admin/AdminPresenter.java	(Revision 1564)
+++ /src/main/java/org/sigmah/client/page/admin/AdminPresenter.java	Tue May 06 14:01:50 2014
@@ -62,9 +62,13 @@
 	private final AdminSubPresenter[] presenters;
 	private ToggleAnchor currentTab;
 	private AdminPageState currentState;
+	private AdminPageState oldState;
 	private Page activePage;
 	private final Authentication authentication;
 	private AdminOneModelPresenter adminModelPresenter;
+	private final String highlightStyle = "border:1px solid; border-radius:10px; "
+			+ "border-color: #A8A8A8; width: 148px; heigh:30px;"
+			+ "background-color: #A8A8A8; text-align:center;";
 
 	@ImplementedBy(AdminView.class)
 	public interface View {
@@ -195,16 +199,31 @@
 
 	@Override
 	public boolean navigate(PageState place) {
-
+		
+		// Update the old state
+		this.oldState = currentState;
+		
+		// Update the current state
 		final AdminPageState adminPageState = (AdminPageState) place;
-		currentState = adminPageState;
-		Log.debug("AdminPresenter : navigate normal" + currentState.isProject());
-
-		if (currentState.getModel() != null && currentState.getSubModel() != null) {
+		this.currentState = adminPageState;
+		
+		if(oldState != null) 
+			Log.debug("AdminPresenter : navigate oldState " + oldState.getManualPageId());
+		Log.debug("AdminPresenter : navigate requestedState " + currentState.getManualPageId());
+
+		// Navigate to tab/subtab
+		if (currentState.getModel() != null && currentState.getSubModel() != null) {	
+			Log.debug("AdminPresenter : navigating to tab/subtab: " + currentState.serializeAsHistoryToken());
+			
 			adminModelPresenter = injector.getAdminModelPresenter();
 			navigate(currentState, adminModelPresenter);
+			
+		// Navigate to tab
 		} else {
-			selectTab(currentState.getCurrentSection(), false);
+			Log.debug("AdminPresenter : navigating to tab: " + currentState.serializeAsHistoryToken());
+
+			setCurrentView();
+			refreshNavigationPanel(false);
 		}
 
 		return true;
@@ -213,24 +232,59 @@
 	public boolean navigate(PageState place, AdminOneModelPresenter adminOneModelPresenter) {
 		if (place != null)
 			Log.debug("AdminPresenter : navigate special " + ((AdminPageState) place).serializeAsHistoryToken());
+		
+		// Navigating to tab/subtab => enable going back to tab
+		refreshNavigationPanel(true);	
 		adminOneModelPresenter.navigate(place, view);
+		
 		return true;
 	}
-
-	private void selectTab(int index, boolean force) {
-
-		final ToggleAnchor anchor = (ToggleAnchor) view.getTabPanel().getWidget(index);
-		if (currentTab != anchor) {
-			if (currentTab != null)
-				currentTab.toggleAnchorMode();
-
-			anchor.toggleAnchorMode();
+	
+	/*
+	 * Refreshes the view of the left navigation panel.
+	 * <p>
+	 * This method should be independent of setCurrentView
+	 * which manages the main display.
+	 */
+	private void refreshNavigationPanel(boolean enableBack) {
+		
+		// Updates the old anchor if any
+		if (oldState != null) {
+			final ToggleAnchor oldAnchor = (ToggleAnchor) view.getTabPanel().getWidget(oldState.getCurrentSection());
+			oldAnchor.setAnchorMode(true);
+		}
+		
+		// Sets the new anchor
+		final ToggleAnchor anchor = (ToggleAnchor) view.getTabPanel().getWidget(currentState.getCurrentSection());
+		
+		if (enableBack) {
+			anchor.setAnchorMode(true);
+		} else {
+			anchor.setAnchorMode(false);
+		}
+		anchor.setHTMLStyle(highlightStyle);
+	}
+	
+	/*
+	 * Sets the view on the main display
+	 * <p>
+	 * This method should be independent of refreshNavigationPanel
+	 * which manages the navigationPanel.
+	 */
+	private void setCurrentView() {
+		// Checks if view is up-to-date. Update only if necessary.	
+		if(oldState != null) 
+			Log.debug("AdminPresenter : navigate oldState " + oldState.getPageId());
+		Log.debug("AdminPresenter : navigate requestedState " + currentState.getPageId());
+		
+		if (oldState == null || !oldState.getManualPageId().equals(currentState.getManualPageId())
+				|| (oldState.getManualPageId().equals(currentState.getManualPageId())
+						&& oldState.getModel() != null)) {
+			
+			int index = currentState.getCurrentSection();
+			final ToggleAnchor anchor = (ToggleAnchor) view.getTabPanel().getWidget(index);
 			currentTab = anchor;
-
-			view.setMainPanel(presenters[index].getView());
-			presenters[index].viewDidAppear();
-			presenters[index].setCurrentState(currentState);
-		} else if (force) {
+			
 			view.setMainPanel(presenters[index].getView());
 			presenters[index].viewDidAppear();
 			presenters[index].setCurrentState(currentState);


Index: /src/main/java/org/sigmah/client/ui/ToggleAnchor.java
===================================================================
--- /src/main/java/org/sigmah/client/ui/ToggleAnchor.java	(Revision 1564)
+++ /src/main/java/org/sigmah/client/ui/ToggleAnchor.java	Tue May 06 14:32:30 2014
@@ -95,7 +95,7 @@
         this.anchorMode = anchorMode;
 
         if(anchorMode) {
-            setHTML("<a href=\""+target+"\" class=\""+className+"\">"+label+"</a>");
+        	setHTML("<a href=\"" + target + "\" class=\"" + className+"\">" + label + "</a>");
         } else {
             setHTML(label);
         }
@@ -106,5 +106,18 @@
      */
     public void toggleAnchorMode() {
         setAnchorMode(!this.anchorMode);
+    }
+    
+    /*
+     * Sets a given style for the HTML. 
+     * Keeps the anchor hyperlink is present.
+     */
+    public void setHTMLStyle(String style) {
+    	if (anchorMode) {
+    		setHTML("<p style=\"" + style + "\">" + "<a href=\"" + target
+    				+ "\" class=\"" + className+"\">" + label + "</a>" + "</p>");
+    	} else {
+    		setHTML("<p style=\"" + style + "\">" + label + "</p>");
+    	}
     }
 }
