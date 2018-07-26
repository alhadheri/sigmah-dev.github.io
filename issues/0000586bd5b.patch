Index: /src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java	(Revision 1559)
+++ /src/main/java/org/sigmah/client/page/project/dashboard/ProjectDashboardPresenter.java	
@@ -887,8 +887,12 @@
 		// --
 
 		// Disabled until a field is modified.
-		view.getButtonSavePhase().setEnabled(false);
-		view.getButtonSavePhase().removeAllListeners();
+		if(hasValueChanged()) {
+			view.getButtonSavePhase().setEnabled(true);
+		} else {
+			view.getButtonSavePhase().setEnabled(false);
+			view.getButtonSavePhase().removeAllListeners();
+		}	
 
 		// If the phase isn't ended, adds the save action.
 		if (!isEndedPhase(projectPresenter.getCurrentDisplayedPhaseDTO())) {
