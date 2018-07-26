Index: sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/AdminFlexibleElementsView.java	(working copy)
@@ -265,7 +265,21 @@
 		
         List<ColumnConfig> configs = new ArrayList<ColumnConfig>();  
 		  
-        ColumnConfig column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
+        ColumnConfig column = null;
+        
+       column = new ColumnConfig("order",I18N.CONSTANTS.adminFlexibleOrder(), 50);   
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
+        column = new ColumnConfig("label",I18N.CONSTANTS.adminFlexibleName(), 250);   
         column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
 
 			@Override
