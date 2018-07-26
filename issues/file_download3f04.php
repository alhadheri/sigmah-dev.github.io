Index: sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(working copy)
@@ -4,6 +4,8 @@
 import java.util.HashMap;
 import java.util.List;
 import java.util.Map;
+import java.util.Date;
+import java.lang.Integer;
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
@@ -83,6 +85,8 @@
 import com.google.gwt.user.client.ui.FlexTable;
 import com.google.gwt.user.client.ui.Grid;
 
+import com.extjs.gxt.ui.client.widget.form.DateField;
+
 /**
  * Create flexible element form.
  * 
@@ -118,6 +122,8 @@
 	private final SimpleComboBox<String> textAreaTypeList;
 	private final NumberField maxLimitField;
 	private final NumberField minLimitField;
+	private final DateField minDateField;
+	private final DateField maxDateField;
 	private final NumberField lengthField;
 	private final CheckBox isDecimal;
 	private final ComboBox<ReportModelDTO> reportModelList;
@@ -262,25 +268,24 @@
 		});
 
 		reportModelList.setStore(reportModelsStore);
+		
+		// Min and Max Date Fields (to be hidden and used only in case of a Date Field)
+		minDateField = new DateField();
+		minDateField.setAllowBlank(true);
+		minDateField.setFieldLabel("Min Date");
+
+		maxDateField = new DateField();
+		maxDateField.setAllowBlank(true);
+		maxDateField.setFieldLabel("Max Date");
+		
+		minDateField.setVisible(false);
+		maxDateField.setVisible(false);	
 
 		// Files list and text area special
 		maxLimitField = new NumberField();
 		maxLimitField.setFieldLabel(I18N.CONSTANTS.adminFlexibleMaxLimit());
 		maxLimitField.hide();
 
-		// Text area special
-		textAreaTypeList = new SimpleComboBox<String>();
-		textAreaTypeList.setTriggerAction(TriggerAction.ALL);
-		textAreaTypeList.setEditable(false);
-		textAreaTypeList.hide();
-		textAreaTypeList.setFieldLabel(I18N.CONSTANTS.adminFlexibleTextType());
-		List<String> textTypes = new ArrayList<String>();
-		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeP());
-		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeT());
-		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeN());
-		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeD());
-		textAreaTypeList.add(textTypes);
-
 		minLimitField = new NumberField();
 		minLimitField.setFieldLabel(I18N.CONSTANTS.adminFlexibleMinLimit());
 		minLimitField.hide();
@@ -456,6 +461,55 @@
 
 		});
 		isBanner.hide();
+		
+		// Text area special
+		textAreaTypeList = new SimpleComboBox<String>();
+		textAreaTypeList.setTriggerAction(TriggerAction.ALL);
+		textAreaTypeList.setEditable(false);
+		textAreaTypeList.hide();
+		textAreaTypeList.setFieldLabel(I18N.CONSTANTS.adminFlexibleTextType());
+		List<String> textTypes = new ArrayList<String>();
+		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeP());
+		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeT());
+		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeN());
+		textTypes.add(I18N.CONSTANTS.adminFlexibleTextTypeD());
+		textAreaTypeList.add(textTypes);
+		
+		//Add onChange Listener for textAreaTypeList		
+		textAreaTypeList.addListener(Events.Select, new Listener<BaseEvent>() {
+
+			@Override
+			public void handleEvent(BaseEvent be) {
+				maxLimitField.hide();
+				minLimitField.hide();
+				minDateField.setVisible(false);
+				maxDateField.setVisible(false);
+				lengthField.hide();
+				isDecimal.hide();
+				
+				if (I18N.CONSTANTS.adminFlexibleTextTypeD().equals(textAreaTypeList.getSimpleValue())) { //Found the Date Field
+					//Case of Date Type
+				   //Make minLimitField and maxLimitField Date pickable
+				   // By Date Pickable, the minLimitField stores the Date in a particular String Format, but when storing into the minLimit variable the epoch time is used
+					minDateField.setVisible(true);
+					maxDateField.setVisible(true);
+					
+				}else if (I18N.CONSTANTS.adminFlexibleTextTypeN().equals(textAreaTypeList.getSimpleValue())) { //Found the Date Field
+					//Case of Number Type
+					isDecimal.show();
+					minLimitField.show();
+					maxLimitField.show();
+				}else if (I18N.CONSTANTS.adminFlexibleTextTypeT().equals(textAreaTypeList.getSimpleValue())) { //Found the Date Field
+				//Case of regular TextField
+					lengthField.show();
+				}else if (I18N.CONSTANTS.adminFlexibleTextTypeP().equals(textAreaTypeList.getSimpleValue())) { //Found the Date Field
+				//Case of Paragraph Type
+					lengthField.show();
+				}						
+				
+			}
+		});
+		//onChange Listener for textAreaTypeList added
 
 		// initSpecifics(flexibleElement);
 		specificsPanel.add(isBanner);
@@ -466,6 +520,8 @@
 		specificsPanel.add(isDecimal);
 		specificsPanel.add(minLimitField);
 		specificsPanel.add(maxLimitField);
+		specificsPanel.add(minDateField);
+		specificsPanel.add(maxDateField);
 		specificsPanel.add(isMultipleQ);
 		specificsPanel.add(isLinkedToQuality);
 		specificsPanel.add(linkedCategory);
@@ -951,6 +1007,10 @@
 		textAreaTypeList.hide();
 		maxLimitField.hide();
 		minLimitField.hide();
+		minDateField.setVisible(false);
+		maxDateField.setVisible(false);
+		minDateField.setVisible(false);
+		maxDateField.setVisible(false);
 		lengthField.hide();
 		isDecimal.hide();
 		reportModelList.hide();
@@ -1008,12 +1068,30 @@
 			if (onSelectAction) {
 				maxLimitField.clear();
 			}
+			
 			textAreaTypeList.show();
-			lengthField.show();
-			isDecimal.show();
-			minLimitField.show();
-			maxLimitField.show();
 			specificsPanel.show();
+			
+			//Show fields depending on the type of TEXT_AREA selected
+			if (I18N.CONSTANTS.adminFlexibleTextTypeD().equals(textAreaTypeList.getSimpleValue())) { 
+				//Case of Date Type
+			    //Make minLimitField and maxLimitField Date pickable
+			    // By Date Pickable, the minLimitField stores the Date in a particular String Format, but when storing into the minLimit variable the epoch time is used
+				minDateField.setVisible(true);
+				maxDateField.setVisible(true);
+				
+			}else if (I18N.CONSTANTS.adminFlexibleTextTypeN().equals(textAreaTypeList.getSimpleValue())) { 
+				//Case of Number Type
+				isDecimal.show();
+				minLimitField.show();
+				maxLimitField.show();
+			}else if (I18N.CONSTANTS.adminFlexibleTextTypeT().equals(textAreaTypeList.getSimpleValue())) { 
+				//Case of regular TextField
+				lengthField.show();
+			}else if (I18N.CONSTANTS.adminFlexibleTextTypeP().equals(textAreaTypeList.getSimpleValue())) { 
+				//Case of Paragraph Type
+				lengthField.show();
+			}	
 		}
 	}
 
@@ -1088,12 +1166,36 @@
 			textTypeC = 'D';
 		}
 
+		
 		Integer maxLimit = null;
-		if (maxLimitField.getValue() != null)
-			maxLimit = new Integer(maxLimitField.getValue().intValue());
 		Integer minLimit = null;
-		if (minLimitField.getValue() != null)
-			minLimit = new Integer(minLimitField.getValue().intValue());
+		
+		//Note :: Clones of the max and min limits for Date are made of the same data type as of now
+		//        because the Date is supposed to be stored as the linux epoch time in miliseconds as 
+		//        returned by Date.getTime(), and it is of Long data type, but Long is not supported 
+		//        by AdminUtil.PROP_FX_MAX_LIMIT and AdminUtil.PROP_FX_MIN_LIMIT , hence the values 
+		//        have to be forcefully divided by 1000 converting them into seconds and type casted
+		//        into Integer. Having clones for the same will allow flexibility in avoiding this data
+		//        loss in future.
+		
+		Integer maxLimitDate = null;
+		Integer minLimitDate = null;
+
+		if(textTypeC != 'D'){
+		//Case 1 :: when the textArea is not of Date Type
+			if (maxLimitField.getValue() != null)
+				maxLimit = new Integer(maxLimitField.getValue().intValue());
+			if (minLimitField.getValue() != null)
+				minLimit = new Integer(minLimitField.getValue().intValue());
+		}else{
+		//Case 2 :: when the textArea is of Date Type
+			if (maxDateField.getValue() != null)
+				maxLimitDate = (new Long(maxDateField.getValue().getTime()/1000)).intValue();
+			if (minDateField.getValue() != null)
+				minLimitDate = (new Long(minDateField.getValue().getTime()/1000)).intValue();
+		}
+		
+		
 		Integer length = null;
 		if (lengthField.getValue() != null)
 			length = new Integer(lengthField.getValue().intValue());
@@ -1128,10 +1230,23 @@
 			newFieldProperties.put(AdminUtil.PROP_FX_TEXT_TYPE, textTypeC);
 		if (length != null)
 			newFieldProperties.put(AdminUtil.PROP_FX_LENGTH, length);
-		if (maxLimit != null)
-			newFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT, maxLimit);
-		if (minLimit != null)
-			newFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT, minLimit);
+		
+		if(textTypeC != 'D'){
+			//Case 1 :: when the textArea is not of Date Type(Date	
+			if (maxLimit != null)
+				newFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT, maxLimit);
+			if (minLimit != null)
+				newFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT, minLimit);
+		
+		}else{
+			//Case 2 :: when the textArea is of Date Type
+			if (maxLimitDate != null)
+				newFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT, maxLimitDate);
+			if (minLimitDate != null)
+				newFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT, minLimitDate);			
+		}
+		
+		
 		if (decimal != null && ElementTypeEnum.TEXT_AREA.equals(ElementTypeEnum.getType(type)))
 			newFieldProperties.put(AdminUtil.PROP_FX_DECIMAL, decimal);
 		// Report Element
@@ -1385,12 +1500,6 @@
 
 			} else if (flexibleElement instanceof TextAreaElementDTO) {
 
-				if (((TextAreaElementDTO) flexibleElement).getMaxValue() != null) {
-					maxLimitField.setValue(((TextAreaElementDTO) flexibleElement).getMaxValue());
-					oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT,
-					                ((TextAreaElementDTO) flexibleElement).getMaxValue());
-				}
-
 				TextAreaElementDTO textElement = (TextAreaElementDTO) flexibleElement;
 				if ("P".equals(textElement.getType().toString())) {
 					oldFieldProperties.put(AdminUtil.PROP_FX_TEXT_TYPE, 'P');
@@ -1405,11 +1514,40 @@
 					oldFieldProperties.put(AdminUtil.PROP_FX_TEXT_TYPE, 'D');
 					textAreaTypeList.setSimpleValue(I18N.CONSTANTS.adminFlexibleTextTypeD());
 				}
+				
+				if (((TextAreaElementDTO) flexibleElement).getMaxValue() != null) {
+					// Case 1 :: When the Text Area Element is not of Date type
+					if(!textElement.getType().toString().equals("D")){
+						
+					    maxLimitField.setValue(((TextAreaElementDTO) flexibleElement).getMaxValue());
+					    oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT,
+					                ((TextAreaElementDTO) flexibleElement).getMaxValue());
+					
+					}else{
+						// Case 2 :: When the Text Area Element is of Date Type
+						// Convert the Date Value from  Linux Epoch Time (as stored in the DTO) and render it as human readable date
+						maxDateField.setValue(new Date(((TextAreaElementDTO) flexibleElement).getMaxValue()*1000));
+						oldFieldProperties.put(AdminUtil.PROP_FX_MAX_LIMIT,
+				                    ((TextAreaElementDTO) flexibleElement).getMaxValue());
+						
+					}
+				}
+
 
 				if (((TextAreaElementDTO) flexibleElement).getMinValue() != null) {
+					//Case 1 :: When the Text Area Element is not of Date type
+					if(!textElement.getType().toString().equals("D")){
 					minLimitField.setValue(((TextAreaElementDTO) flexibleElement).getMinValue());
 					oldFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT,
 					                ((TextAreaElementDTO) flexibleElement).getMinValue());
+					}else{
+					// Case 2 :: When the Text Area Element is of Date Type
+					// Convert the Date Value from  Linux Epoch Time (as stored in the DTO) and render it as human readable date
+					minDateField.setValue(new Date(((TextAreaElementDTO) flexibleElement).getMinValue()*1000));
+					oldFieldProperties.put(AdminUtil.PROP_FX_MIN_LIMIT,
+						            ((TextAreaElementDTO) flexibleElement).getMinValue());					
+						
+					}
 				}
 
 				if (((TextAreaElementDTO) flexibleElement).getLength() != null) {
