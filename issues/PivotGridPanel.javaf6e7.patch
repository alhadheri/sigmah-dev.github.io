Index: src/main/java/org/sigmah/client/page/table/PivotGridPanel.java
===================================================================
--- src/main/java/org/sigmah/client/page/table/PivotGridPanel.java	(revision 1287)
+++ src/main/java/org/sigmah/client/page/table/PivotGridPanel.java	(working copy)
@@ -22,6 +22,7 @@
 import org.sigmah.client.icon.IconUtil;
 import org.sigmah.client.page.project.pivot.ProjectPivotContainer;
 import org.sigmah.client.util.DateUtilGWTImpl;
+import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.BatchCommand;
 import org.sigmah.shared.command.GetIndicators;
 import org.sigmah.shared.command.Month;
@@ -274,7 +275,7 @@
 					prepareEditor(pivotEvent, indicator);
 				} else {
 					be.setCancelled(true);
-					Info.display(I18N.CONSTANTS.dataEntry(), I18N.CONSTANTS.indicatorDirectEntry());
+					Notification.show(I18N.CONSTANTS.dataEntry(), I18N.CONSTANTS.indicatorDirectEntry());
 				}
 			}
         });
