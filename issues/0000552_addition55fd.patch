Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1501)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -47,6 +47,15 @@
 # Global permissions
 VIEW_PROJECT = View project
 
+VIEW_LOGFRAME = View logframe
+
+EDIT_LOGFRAME = Edit logframe
+
+categoryProject = Project
+
+categoryNotMapped = Not in any Category
+
+
 acronym = Acronym
 
 activities = Activities
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Revision 1501)
+++ src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Arbeitskopie)
@@ -71,6 +71,18 @@
 	/**
 	 * Show global export button in projects list
 	 */
+
+	VIEW_LOGFRAME,
+	/**
+	 * for viewing the logframe sub-tab
+	 */
+
+	EDIT_LOGFRAME,
+
+	/**
+	 * for creating/modifying/deleting objectives, expected results, activities,
+	 * hypothesis or linking/unlinking indicators to the logframe
+	 */
 	GLOBAL_EXPORT;
 
 	public static String getName(GlobalPermissionEnum gp) {
@@ -112,10 +124,31 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
+		case VIEW_LOGFRAME:
+			gpName = I18N.CONSTANTS.VIEW_LOGFRAME();
+			break;
+		case EDIT_LOGFRAME:
+			gpName = I18N.CONSTANTS.EDIT_LOGFRAME();
+			break;
 		default:
 			gpName = null;
 		}
 
 		return gpName;
 	}
+
+	public static String getCategory(GlobalPermissionEnum gp) {
+		String gpCategory = I18N.CONSTANTS.categoryNotMapped();
+		switch (gp) {
+		case VIEW_LOGFRAME:
+			gpCategory = I18N.CONSTANTS.categoryProject();
+			break;
+		case EDIT_LOGFRAME:
+			gpCategory = I18N.CONSTANTS.categoryProject();
+			break;
+		}
+
+		return gpCategory;
+	}
+
 }
