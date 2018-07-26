Index: src/main/java/org/sigmah/client/ui/GlobalExportForm.java
===================================================================
--- src/main/java/org/sigmah/client/ui/GlobalExportForm.java	(revision 1560)
+++ src/main/java/org/sigmah/client/ui/GlobalExportForm.java	(working copy)
@@ -121,6 +121,7 @@
 				periods.setEditable(false);
 				periods.setTriggerAction(TriggerAction.ALL);
 				periods.setHideLabel(false);
+				periods.setEnabled(false);
 
 				final FlexTable periodTable = new FlexTable();
 				periodTable.setHTML(0, 0, "<b>" + I18N.CONSTANTS.exportBackSelection() + "</b>");
@@ -181,6 +182,7 @@
 										                }
 										                periodsStore.add(result.getList());
 										                periodsStore.commitChanges();
+										                periods.setEnabled(true);
 									                }
 								                }
 							                });
