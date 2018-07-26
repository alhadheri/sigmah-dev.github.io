Index: sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -178,6 +178,8 @@
 
 adminFlexibleOrder = Order
 
+adminFlexibleOrderInGroup = Order in Group
+
 adminFlexibleOrderChoice = Display order...
 
 adminFlexibleQChoices = Custom choices
Index: sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(working copy)
@@ -265,7 +265,9 @@
 		
         List<ColumnConfig> configs = new ArrayList<ColumnConfig>();  
 		  
-        ColumnConfig column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
+        ColumnConfig column = null;      
+        
+        column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
         column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
 
 			@Override
@@ -453,6 +455,18 @@
 	    }); 
 		configs.add(column);
 		
+        column = new ColumnConfig("order",I18N.CONSTANTS.adminFlexibleOrderInGroup(), 50);   
+		column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
+
+			@Override
+			public Object render(FlexibleElementDTO model, String property,
+					ColumnData config, int rowIndex, int colIndex,
+					ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {	
+				return AdminUtil.createGridText(model.getConstraint().getSortOrder()+"");
+			}	    	
+	    });
+		configs.add(column);
+		
 		ColumnModel cm = new ColumnModel(configs);		
 		fieldsStore.setSortField("container");
 		Grid<FlexibleElementDTO> grid = new Grid<FlexibleElementDTO>(fieldsStore, cm); 
