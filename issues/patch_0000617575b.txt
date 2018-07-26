### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/model/common/element/ElementForm.java	(working copy)
@@ -10,6 +10,7 @@
 import org.sigmah.client.i18n.UIConstants;
 import org.sigmah.client.icon.IconImageBundle;
 import org.sigmah.client.page.admin.AdminUtil;
+import org.sigmah.client.ui.ClearableField;
 import org.sigmah.client.ui.ClickableLabel;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.CreateEntity;
@@ -846,16 +847,16 @@
 		}
 
 		commonPanel.add(validates);
-
+		
 		privacyGroupsListCombo = new ComboBox<PrivacyGroupDTO>();
+		privacyGroupsListCombo.setWidth("100%");
 		privacyGroupsListCombo.setEditable(false);
-		privacyGroupsListCombo.setFieldLabel(constants.adminPrivacyGroups());
 		privacyGroupsListCombo.setDisplayField("title");
 		privacyGroupsListCombo.setValueField("id");
 		privacyGroupsListCombo.setTriggerAction(TriggerAction.ALL);
 		final ListStore<PrivacyGroupDTO> privacyGroupsStore = new ListStore<PrivacyGroupDTO>();
 		dispatcher.execute(new GetPrivacyGroups(), null, new AsyncCallback<PrivacyGroupsListResult>() {
-
+	
 			@Override
 			public void onFailure(Throwable arg0) {
 				privacyGroupsListCombo.setEmptyText(I18N.CONSTANTS.adminChoiceProblem());
@@ -872,13 +873,16 @@
 			}
 		});
 
+		ClearableField<PrivacyGroupDTO> privacyGroupsField = new ClearableField<PrivacyGroupDTO>(privacyGroupsListCombo);
+		privacyGroupsField.setFieldLabel(constants.adminPrivacyGroups());
+
 		privacyGroupsListCombo.setStore(privacyGroupsStore);
 		if (flexibleElement != null && flexibleElement.getPrivacyGroup() != null) {
 			privacyGroupsListCombo.setValue(flexibleElement.getPrivacyGroup());
 			oldFieldProperties.put(AdminUtil.PROP_FX_PRIVACY_GROUP, flexibleElement.getPrivacyGroup());
 		}
 
-		commonPanel.add(privacyGroupsListCombo);
+		commonPanel.add(privacyGroupsField);
 
 		isAmendable = new CheckBox();
 		// isAmendable.setBoxLabel(constants.adminFlexibleAmendable());
Index: src/main/java/org/sigmah/client/ui/ClearableField.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClearableField.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/ui/ClearableField.java	(working copy)
@@ -0,0 +1,51 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.client.ui;
+
+import org.sigmah.client.icon.IconImageBundle;
+
+import com.extjs.gxt.ui.client.widget.form.AdapterField;
+import com.extjs.gxt.ui.client.widget.form.Field;
+import com.google.gwt.event.dom.client.ClickEvent;
+import com.google.gwt.event.dom.client.ClickHandler;
+import com.google.gwt.user.client.ui.Grid;
+import com.google.gwt.user.client.ui.Image;
+
+/**
+ * @author renatoaf
+ */
+public class ClearableField<T> extends AdapterField {
+	private Image deleteIcon;
+	private Field<T> field;
+	
+	public ClearableField(final Field<T> field) {
+		super(new Grid(1, 2));
+
+		this.field = field;
+		this.deleteIcon = IconImageBundle.ICONS.deleteIcon().createImage();
+		
+		Grid grid = (Grid) widget;
+		grid.setWidget(0, 0, field);
+		grid.setWidget(0, 1, deleteIcon);
+		grid.setCellSpacing(1);
+
+		grid.getCellFormatter().setWidth(0, 1, "5px");
+		
+		addClearHandler(new ClickHandler() {
+			public void onClick(ClickEvent event) {
+				field.clear();
+			}
+		});
+	}
+	
+	public Field<T> getField() {
+		return field;
+	}
+	
+	public void addClearHandler(ClickHandler handler){
+		deleteIcon.addClickHandler(handler);
+	}
+}
+
