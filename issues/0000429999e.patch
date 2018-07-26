Index: /src/main/java/org/sigmah/client/i18n/UIMessages.properties
===================================================================
--- /src/main/java/org/sigmah/client/i18n/UIMessages.properties	(Revision 1564)
+++ /src/main/java/org/sigmah/client/i18n/UIMessages.properties	
@@ -39,6 +39,8 @@
 
 adminPrivacyGroupsConfirmDelete = Are you sure you want to delete these privacy groups : ''{0}'' ?
 
+adminDeleteDraftModel = Confirm deletion of {0}
+
 #Project report model
 adminReportSecionInvalidName = The name ''{0}'' already exists !


Index: /src/main/java/org/sigmah/client/page/admin/model/common/AdminModelActionListener.java
===================================================================
--- /src/main/java/org/sigmah/client/page/admin/model/common/AdminModelActionListener.java	(Revision 1564)
+++ /src/main/java/org/sigmah/client/page/admin/model/common/AdminModelActionListener.java	
@@ -178,8 +178,9 @@
             };
 
             MessageBox deleteConfirmMsgBox =
-                    MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(), I18N.CONSTANTS.deleteDraftProjectModelConfirm(),
+                    MessageBox.confirm(I18N.MESSAGES.adminDeleteDraftModel(getProjectModel().getName()), I18N.CONSTANTS.deleteDraftProjectModelConfirm(),
                         l);
+
             deleteConfirmMsgBox.show();
 
         } else if (isOrgUnit) {// Delete draft OrgUnit model
@@ -205,7 +206,7 @@
             };
 
             MessageBox deleteConfirmMsgBox =
-                    MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(), I18N.CONSTANTS.deleteDraftOrgUnitModelConfirm(),
+                    MessageBox.confirm(I18N.MESSAGES.adminDeleteDraftModel(getOrgUnit().getName()), I18N.CONSTANTS.deleteDraftOrgUnitModelConfirm(),
                         l);
             deleteConfirmMsgBox.show();
 
