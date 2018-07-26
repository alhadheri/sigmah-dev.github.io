Index: /src/main/java/org/sigmah/client/page/dashboard/CreateProjectWindow.java
===================================================================
--- /src/main/java/org/sigmah/client/page/dashboard/CreateProjectWindow.java (Revision 1559)
+++ /src/main/java/org/sigmah/client/page/dashboard/CreateProjectWindow.java
@@ -393,7 +393,7 @@
 		formPanel = new FormPanel();
 		formPanel.setBodyBorder(false);
 		formPanel.setHeaderVisible(false);
-		formPanel.setPadding(5);
+		formPanel.setPadding(20);
 		formPanel.setLabelWidth(170);
 		formPanel.setFieldWidth(350);
 
@@ -419,7 +419,7 @@
 		projectPanel = new FormPanel();
 		projectPanel.setBodyBorder(false);
 		projectPanel.setHeaderVisible(false);
-		projectPanel.setPadding(5);
+		projectPanel.setPadding(0);
 		projectPanel.add(formPanel);
 		projectPanel.add(testProjectPanel);
 
@@ -431,7 +431,7 @@
 
 		// Window.
 		window = new Window();
-		window.setWidth(560);
+		window.setWidth(590);
 		window.setAutoHeight(true);
 
 		window.setPlain(true);


Index: /src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java	(Revision 1559)
+++ /src/main/java/org/sigmah/client/page/project/logframe/FormWindow.java	
@@ -210,7 +210,7 @@
         fieldsPanel.setLayout(fieldsPanelLayout);
         fieldsPanel.setBorders(false);
         fieldsPanel.setWidth("100%");
-
+        
         // Builds the main panel.
         final ContentPanel mainPanel = new ContentPanel();
         final VBoxLayout layout = new VBoxLayout();
@@ -470,8 +470,8 @@
         fieldPanel.setHeaderVisible(false);
         fieldPanel.setLayout(new HBoxLayout());
 
-        fieldPanel.add(fieldLabel, new HBoxLayoutData(new Margins(4, 5, 0, 0)));
-        final HBoxLayoutData flex = new HBoxLayoutData(new Margins(0, 5, 0, 0));
+        fieldPanel.add(fieldLabel, new HBoxLayoutData(new Margins(4, 20, 0, 0)));
+        final HBoxLayoutData flex = new HBoxLayoutData(new Margins(0, 20, 0, 0));
         flex.setFlex(1);
         fieldPanel.add(field, flex);
 
