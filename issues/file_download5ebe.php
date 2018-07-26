### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java	(working copy)
@@ -471,7 +471,7 @@
         fieldPanel.setLayout(new HBoxLayout());
 
         fieldPanel.add(fieldLabel, new HBoxLayoutData(new Margins(4, 5, 0, 0)));
-        final HBoxLayoutData flex = new HBoxLayoutData(new Margins(0, 5, 0, 0));
+        final HBoxLayoutData flex = new HBoxLayoutData(new Margins(0, 18, 0, 0));
         flex.setFlex(1);
         fieldPanel.add(field, flex);
 
