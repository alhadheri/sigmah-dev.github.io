Index: sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(revision 1561)
	+++ sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(working copy)
	@@ -290,6 +290,9 @@
	 					if (perm != null && !perm.isEmpty())
	 						content = perm + ", " + content;
							 				}
+				if(content != ""){ //removes the trailing comma
	+				content = content.substring(0, content.lastIndexOf(", "));
	+				}
	 				return createUserGridText(content);
					 
					 			}
@@ -309,6 +312,10 @@
 					content = "(" + pg.getKey().getTitle() + ", " + PrivacyGroupPermissionEnum.getName(pg.getValue())
					 					                + ")" + ", " + content;
												 				}
+				if(content != ""){//removes the trailing comma
	+					content = content.substring(0, content.lastIndexOf(", "));
	+				}
	+				
	 				return createUserGridText(content);
					 			}
 
@@ -482,6 +489,7 @@
 					for (ProfileDTO oneProfileDTO : model.getProfilesDTO()) {
						 						content = oneProfileDTO.getName() + ", " + content;
												 					}
+					content = content.substring(0, content.lastIndexOf(", ")); // removes the trailing comma
 				} else {
					 					content = I18N.CONSTANTS.adminUsersNoProfiles();
										 				}

