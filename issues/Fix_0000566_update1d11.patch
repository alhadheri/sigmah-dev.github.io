### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/reports/ProjectReportsView.java	(working copy)
@@ -644,10 +644,11 @@
                                 }
                             }
 
+                            updateChanges();
+
                             autoSaveTimer.cancel();
                             autoSaveTimer.schedule(AUTO_SAVE_PERIOD);
                         }
-
                     });
                 }
             };
@@ -1023,6 +1024,15 @@
         return changed;
     }
 
+    public void updateChanges() {
+        if (textAreas != null) {
+            for (Map.Entry<Integer, String> entry : oldContents.entrySet()) {
+                RichTextArea textArea = textAreas.get(entry.getKey());
+                oldContents.put(entry.getKey(), textArea.getText());
+            }
+        }
+    }
+
     public void eraseChanges() {
         oldContents.clear();
     }
Index: src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/orgunit/reports/OrgUnitReportsView.java	(working copy)
@@ -631,10 +631,11 @@
                                 }
                             }
 
+                            updateChanges();
+
                             autoSaveTimer.cancel();
                             autoSaveTimer.schedule(AUTO_SAVE_PERIOD);
                         }
-
                     });
                 }
             };
@@ -1010,6 +1011,15 @@
         return changed;
     }
 
+    public void updateChanges() {
+        if (textAreas != null) {
+            for (Map.Entry<Integer, String> entry : oldContents.entrySet()) {
+                RichTextArea textArea = textAreas.get(entry.getKey());
+                oldContents.put(entry.getKey(), textArea.getText());
+            }
+        }
+    }
+
     public void eraseChanges() {
         oldContents.clear();
     }
