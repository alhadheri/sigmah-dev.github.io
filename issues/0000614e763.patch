Index: src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java
===================================================================
--- src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(revision 1560)
+++ src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(working copy)
@@ -573,7 +573,9 @@
 			@Override
 			public boolean select(Store<UserDTO> store, UserDTO parent, UserDTO item, String property) {
 				boolean selected = false;
-				selected = item.getName().toUpperCase().startsWith(filterUser.toUpperCase());
+				selected = item.getName().toUpperCase().contains(filterUser.toUpperCase()) 
+						|| item.getFirstName().toUpperCase().contains(filterUser.toUpperCase())
+						|| item.getEmail().toUpperCase().contains(filterUser.toUpperCase());
 				return selected;
 			}
 		};
