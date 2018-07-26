Index: src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java	(revision 1287)
+++ src/main/java/org/sigmah/shared/dto/element/DefaultFlexibleElementDTO.java	(working copy)
@@ -262,98 +262,98 @@
                 final Label ratioLabel = new Label();
                 ratioLabel.addStyleName("project-label-10");
                 ratioLabel.addStyleName("flexibility-label");
+                
+                if (enabled) {
+                	
+                	// Builds the number fields
+                	final NumberField plannedBudgetNumberField = createNumberField(false);
+                	final NumberField receivedBudgetNumberField = createNumberField(false);
+                	final NumberField spendBudgetNumberField = createNumberField(false);
+                	
+                	// Listener.
+                    final Listener<BaseEvent> listener = new Listener<BaseEvent>() {
 
-                // Planned budget.
-                // Final reference to the "planned budget" field (needed by the
-                // listener).
-                final NumberField[] plannedBudgetReference = new NumberField[] { null };
+                        final double minValue = 0.0;
 
-                // Spent budget.
-                final NumberField spendBudgetNumberField = createNumberField(false);
-                spendBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
-                spendBudgetField = spendBudgetNumberField;
-                spendBudgetNumberField.setValue(sb);
+                        @Override
+                        public void handleEvent(BaseEvent be) {
 
-                // Received budget.
-                final NumberField receivedBudgetNumberField = createNumberField(false);
-                receivedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
-                receivedBudgetField = receivedBudgetNumberField;
-                receivedBudgetNumberField.setValue(rb);
+                            // Retrieves values.                            
+                            final Number plannedBudget = plannedBudgetNumberField.getValue();
+                            final Double plannedBudgetAsDouble = plannedBudget.doubleValue();
 
-                // Listener.
-                final Listener<BaseEvent> listener = new Listener<BaseEvent>() {
+                            final Number receivedBudget = receivedBudgetNumberField.getValue();
+                            final Double receivedBudgetAsDouble = receivedBudget.doubleValue();
+                            
+                            final Number spendBudget = spendBudgetNumberField.getValue();
+                            final Double spendBudgetAsDouble = spendBudget.doubleValue();
 
-                    final double minValue = 0.0;
+                            // Checks the numbers intervals.
+                            final boolean isValueOn =
+                                    plannedBudgetAsDouble >= minValue
+                                        && spendBudgetAsDouble >= minValue
+                                        && receivedBudgetAsDouble >= minValue;
 
-                    @Override
-                    public void handleEvent(BaseEvent be) {
+                            // The numbers are saved as strings.
+                            final String plannedBudgetRawValue = String.valueOf(plannedBudgetAsDouble);
+                            final String spendBudgetRawValue = String.valueOf(spendBudgetAsDouble);
+                            final String receivedBudgetRawValue = String.valueOf(receivedBudgetAsDouble);
+                            final String rawValue =
+                                    ValueResultUtils.mergeElements(plannedBudgetRawValue, spendBudgetRawValue,
+                                        receivedBudgetRawValue);
 
-                        // Retrieves values.
-                        final Double plannedBudgetAsDouble;
-                        if (plannedBudgetReference[0] != null) {
-                            // If the field exists, retrieving its value.
-                            final Number plannedBudget = plannedBudgetReference[0].getValue();
-                            plannedBudgetAsDouble = plannedBudget.doubleValue();
+                            ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
+                                + ": "
+                                + NumberUtils.ratioAsString(spendBudgetAsDouble, plannedBudgetAsDouble));
 
-                        } else {
-                            // Otherwise, using the default value.
-                            plannedBudgetAsDouble = pb;
+                            fireEvents(rawValue, isValueOn);
                         }
-
-                        final Number spendBudget = spendBudgetNumberField.getValue();
-                        final Double spendBudgetAsDouble = spendBudget.doubleValue();
-
-                        final Number receivedBudget = receivedBudgetNumberField.getValue();
-                        final Double receivedBudgetAsDouble = receivedBudget.doubleValue();
-
-                        // Checks the numbers intervals.
-                        final boolean isValueOn =
-                                plannedBudgetAsDouble >= minValue
-                                    && spendBudgetAsDouble >= minValue
-                                    && receivedBudgetAsDouble >= minValue;
-
-                        // The numbers are saved as strings.
-                        final String plannedBudgetRawValue = String.valueOf(plannedBudgetAsDouble);
-                        final String spendBudgetRawValue = String.valueOf(spendBudgetAsDouble);
-                        final String receivedBudgetRawValue = String.valueOf(receivedBudgetAsDouble);
-                        final String rawValue =
-                                ValueResultUtils.mergeElements(plannedBudgetRawValue, spendBudgetRawValue,
-                                    receivedBudgetRawValue);
-
-                        ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
-                            + ": "
-                            + NumberUtils.ratioAsString(spendBudgetAsDouble, plannedBudgetAsDouble));
-
-                        fireEvents(rawValue, isValueOn);
-                    }
-                };
-
-                spendBudgetNumberField.addListener(Events.Change, listener);
-                receivedBudgetNumberField.addListener(Events.Change, listener);
-
-                if (enabled) {
+                    };                	
 
                     // Planned budget.
-                    final NumberField plannedBudgetNumberField = createNumberField(false);
                     plannedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectPlannedBudget());
-
                     plannedBudgetNumberField.addListener(Events.Change, listener);
-
                     // Sets the value to the fields.
                     plannedBudgetNumberField.setValue(pb);
-
-                    plannedBudgetReference[0] = plannedBudgetNumberField;
                     plannedBudgetField = plannedBudgetNumberField;
+                    
+                    // Received budget.
+                    receivedBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
+                    receivedBudgetNumberField.addListener(Events.Change, listener);
+                    // Sets the value to the fields.
+                    receivedBudgetNumberField.setValue(rb);
+                    receivedBudgetField = receivedBudgetNumberField;
 
-                } else {
+                    // Spent budget.
+                    spendBudgetNumberField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
+                    spendBudgetNumberField.addListener(Events.Change, listener);
+                    // Sets the value to the fields.
+                    spendBudgetNumberField.setValue(sb);
+                    spendBudgetField = spendBudgetNumberField;
 
+                } else {                	
+
+                    // Planned budget.
                     final LabelField plannedBudgetLabelField = createLabelField();
                     plannedBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectPlannedBudget());
-
                     // Sets the value to the fields.
                     plannedBudgetLabelField.setValue(pb);
+                    plannedBudgetField = plannedBudgetLabelField;  
+                    
+                    // Received budget.
+                    final LabelField receivedBudgetLabelField = createLabelField();
+                    receivedBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectReceivedBudget());
+                    // Sets the value to the fields.
+                    receivedBudgetLabelField.setValue(rb);
+                    receivedBudgetField = receivedBudgetLabelField;
 
-                    plannedBudgetField = plannedBudgetLabelField;
+                    // Spent budget.
+                    final LabelField spendBudgetLabelField = createLabelField();
+                    spendBudgetLabelField.setFieldLabel(I18N.CONSTANTS.projectSpendBudget());
+                    // Sets the value to the fields.
+                    spendBudgetLabelField.setValue(sb);
+                    spendBudgetField = spendBudgetLabelField;
+                    
                 }
 
                 ratioLabel.setText(I18N.CONSTANTS.flexibleElementBudgetDistributionRatio()
