Index: src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java	(revision 1306)
+++ src/main/java/org/sigmah/client/page/project/details/ProjectDetailsPresenter.java	(working copy)
@@ -26,7 +26,9 @@
 import org.sigmah.shared.dto.ExportUtils;
 import org.sigmah.shared.dto.OrgUnitDTO;
 import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.ProjectDTOLight;
 import org.sigmah.shared.dto.ProjectDetailsDTO;
+import org.sigmah.shared.dto.ProjectFundingDTO;
 import org.sigmah.shared.dto.UserDTO;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
@@ -429,7 +431,27 @@
                     currentProjectDTO.setPlannedBudget(plannedBudget);
                     currentProjectDTO.setSpendBudget(spendBudget);
                     currentProjectDTO.setReceivedBudget(receivedBudget);
-
+                    
+                    /** 
+                     * Update funding projects - Reflect to funded project in funding projects
+                     * 
+	                  * currentProjectDTO
+	                  * |-- getFunding() 				--> <ProjectFundingDTO>		// list of funding projects
+	                  * 		|-- getPercentage()									// no updates from here
+	                  *      |-- getFunded()			--> ProjectDTOLight			// funded project details light
+	                  *      	|--getPlannedBudget()								// update budget details
+	                  */
+                    List<ProjectFundingDTO> fundingProjects = currentProjectDTO.getFunding();
+    				if (fundingProjects != null && !fundingProjects.isEmpty()) {
+    					for (ProjectFundingDTO projectFundingDTO : fundingProjects) {
+    						ProjectDTOLight fundedProject = projectFundingDTO.getFunded();
+    						if (fundedProject != null && fundedProject.getId() == currentProjectDTO.getId()) {
+    							fundedProject.setPlannedBudget(plannedBudget);
+    							fundedProject.setSpendBudget(spendBudget);
+    							fundedProject.setReceivedBudget(receivedBudget);
+    						}
+    					}
+    				}
                 } catch (Exception e) {
                     // nothing, invalid budget.
                 }
