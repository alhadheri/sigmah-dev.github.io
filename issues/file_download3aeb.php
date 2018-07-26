Index: sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties
===================================================================
--- sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/i18n/UIMessages.properties	(working copy)
@@ -233,4 +233,6 @@
 #Heading for the reviewing the details imported for a project/org unit
 importConfirmationDetailsHeading=Confirm importation details for {0}
 #Notification that the importation has been successful
-importSuccessful=The importation was successful for  ''{0}''
\ No newline at end of file
+importSuccessful=The importation was successful for  ''{0}''
+#Invalid EmailAddress Message
+invalidEmailAddress=The Email Address appears to be invalid. Please check the Email Address Again
\ No newline at end of file
Index: sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java	(revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/page/admin/users/form/UserSigmahForm.java	(working copy)
@@ -9,6 +9,9 @@
 import java.util.HashMap;
 import java.util.List;
 import java.util.Map;
+import java.util.regex.Matcher;
+import java.util.regex.Pattern  ;
+
 
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.Dispatcher;
@@ -79,6 +82,8 @@
 	private final static int LABEL_WIDTH = 90;
 	private final static int MAX_PROFILES_TENTATIVES_PER_USER = 100;
 	private final static String ID_PROFILE = "idProfile";
+	private static final String EMAIL_PATTERN = "^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@"+"[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$";
+
 
 	public UserSigmahForm(Dispatcher dispatcher, UserLocalCache cache, final AsyncCallback<CreateResult> callback,
 			UserDTO userToUpdate) {
@@ -384,7 +389,19 @@
 
 		final String name = nameField.getValue();
 		final String firstName = firstNameField.getValue();
-		final String email = emailField.getValue();
+		final String email = emailField.getValue().trim();
+		
+		//Validate Email by matching with the given regex
+		Pattern pattern = Pattern.compile(EMAIL_PATTERN);
+		Matcher matcher = pattern.matcher(email);
+		if(!matcher.matches()){
+			MessageBox.alert(I18N.CONSTANTS.createFormIncomplete(), I18N.MESSAGES.invalidEmailAddress(), null);
+			unmask();
+			return;
+		}
+		//Validated Email
+		
+		
 		//Get the value only if the admin wants to change the password
 		final String pwd = pwdField.isVisible() ? pwdField.getValue() : null;
 
