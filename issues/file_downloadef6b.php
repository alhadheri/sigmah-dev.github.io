### Eclipse Workspace Patch 1.0
#P Sigmah
Index: src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementPresenter.java	(working copy)
@@ -1,7 +1,5 @@
 package org.sigmah.client.page.admin.management;
 
-import java.util.Map;
-
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
Index: src/main/java/org/sigmah/client/SigmahInjector.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/SigmahInjector.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/SigmahInjector.java	(working copy)
@@ -18,6 +18,7 @@
 import org.sigmah.client.page.admin.management.AdminCoreManagementPresenter;
 import org.sigmah.client.page.admin.management.AdminExportManagementPresenter;
 import org.sigmah.client.page.admin.management.AdminManagementPresenter;
+import org.sigmah.client.page.admin.management.AdminPasswordExpirationPolicyManagementPresenter;
 import org.sigmah.client.page.admin.model.common.AdminOneModelPresenter;
 import org.sigmah.client.page.charts.ChartPagePresenter;
 import org.sigmah.client.page.charts.SigmahChartLoader;
@@ -103,6 +104,7 @@
     AdminCoreManagementPresenter getAdminCoreManagementPresenter();
     AdminBackupManagementPresenter getAdminBackupManagementPresenter();
     AdminExportManagementPresenter getAdminExportManagementPresenter();
+    AdminPasswordExpirationPolicyManagementPresenter getAdminPasswordExpirationPolicyManagementPresenter();
     
     // Pages from ActivityInfo
     DataEntryLoader registerDataEntryLoader();
Index: src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminManagementPresenter.java	(working copy)
@@ -6,13 +6,8 @@
 import org.sigmah.client.page.admin.AdminPageState;
 import org.sigmah.client.page.admin.AdminSubPresenter;
 
-import com.extjs.gxt.ui.client.Style.LayoutRegion;
-import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
-import com.extjs.gxt.ui.client.widget.LayoutContainer;
-import com.extjs.gxt.ui.client.widget.layout.HBoxLayout;
-import com.extjs.gxt.ui.client.widget.layout.HBoxLayoutData;
 import com.google.inject.Inject;
 
 /**
@@ -52,20 +47,24 @@
         subPresenters = new AdminManagementSubPresenter[] {
                                                            injector.getAdminCoreManagementPresenter(),
                                                            injector.getAdminBackupManagementPresenter(),
-                                                           injector.getAdminExportManagementPresenter()};        
+                                                           injector.getAdminExportManagementPresenter(),
+                                                           injector.getAdminPasswordExpirationPolicyManagementPresenter()
+                                                          };        
         
         subPresenters[0].getContentPanel().setWidth("45%");
         subPresenters[1].getContentPanel().setWidth("55%");
-        subPresenters[2].getContentPanel().setWidth("100%");
+        subPresenters[2].getContentPanel().setWidth("45%");
+        subPresenters[3].getContentPanel().setWidth("55%");
 
         subPresenters[0].getContentPanel().setHeight(250);
         subPresenters[1].getContentPanel().setHeight(250);
         subPresenters[2].getContentPanel().setHeight(5000);
+        subPresenters[3].getContentPanel().setHeight(5000);
+        
         view.addPanelToMainContainer(subPresenters[0].getContentPanel());
         view.addPanelToMainContainer(subPresenters[1].getContentPanel());
         view.addPanelToSecondaryContainer(subPresenters[2].getContentPanel());
-        
-        
+        view.addPanelToSecondaryContainer(subPresenters[3].getContentPanel());
     }
 
     @Override
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/ProjectMapper.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/ProjectMapper.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/ProjectMapper.java	(working copy)
@@ -303,6 +303,7 @@
 				uDTO.setId(u.getId());
 				uDTO.setChangePasswordKey(u.getChangePasswordKey());
 				uDTO.setDateChangePasswordKeyIssued(u.getDateChangePasswordKeyIssued());
+				uDTO.setLastPasswordChange(u.getLastPasswordChange());
 				uDTO.setEmail(u.getEmail());
 				uDTO.setFirstName(u.getFirstName());
 				uDTO.setLocale(u.getLocale());
Index: src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementView.java	(working copy)
@@ -4,7 +4,7 @@
 import org.sigmah.client.page.admin.management.AdminBackupManagementPresenter.View;
 
 import com.extjs.gxt.ui.client.widget.ContentPanel;
-import com.google.gwt.user.client.ui.Button;
+import com.extjs.gxt.ui.client.widget.button.Button;
 import com.google.gwt.user.client.ui.FlexTable;
 import com.google.gwt.user.client.ui.HasHorizontalAlignment;
 import com.google.gwt.user.client.ui.ListBox;
Index: src/main/java/org/sigmah/client/PasswordChangePrompt.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/PasswordChangePrompt.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/PasswordChangePrompt.java	(working copy)
@@ -0,0 +1,123 @@
+package org.sigmah.client;
+
+import org.sigmah.client.dispatch.remote.Authentication;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.login.PasswordManagementService;
+import org.sigmah.client.page.login.PasswordManagementServiceAsync;
+import org.sigmah.client.util.Notification;
+
+import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.widget.Dialog;
+import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.form.FormPanel;
+import com.extjs.gxt.ui.client.widget.form.TextField;
+import com.google.gwt.core.client.GWT;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+
+public class PasswordChangePrompt extends Dialog {
+	private Authentication auth;
+	
+	private Button updateButton;
+	
+	public PasswordChangePrompt(Authentication auth) {
+		this.auth = auth;
+		
+		buildLayout();
+	}
+
+	protected void buildLayout() {
+		setModal(true);
+		setPixelSize(350, 190);
+		setClosable(true);
+		setButtonAlign(HorizontalAlignment.CENTER);
+		
+		final TextField<String> emailBox = new TextField<String>();
+		final TextField<String> passwordTextBox = new TextField<String>();
+		final TextField<String> confirmPasswordTextBox = new TextField<String>();
+
+		emailBox.setValue(auth.getEmail());
+		emailBox.setFieldLabel(I18N.CONSTANTS.email());
+		emailBox.setAllowBlank(true);
+		emailBox.disable();
+		
+		passwordTextBox.setFieldLabel(I18N.CONSTANTS.password());
+		passwordTextBox.setAllowBlank(false);
+		passwordTextBox.setPassword(true);
+
+		confirmPasswordTextBox.setFieldLabel(I18N.CONSTANTS.confirmPassword());
+		confirmPasswordTextBox.setAllowBlank(false);
+		confirmPasswordTextBox.setPassword(true);
+
+		updateButton = new Button(I18N.CONSTANTS.save());
+		updateButton.addListener(Events.OnClick, new Listener<ButtonEvent>() {
+			@Override
+			public void handleEvent(ButtonEvent be) {
+				String password = passwordTextBox.getValue();
+				String passwordConfirmation = confirmPasswordTextBox.getValue();
+
+				if (password == null || password.length() == 0
+						|| passwordConfirmation == null
+						|| passwordConfirmation.length() == 0) {
+					MessageBox.alert(I18N.CONSTANTS.error(),
+							I18N.CONSTANTS.formWindowFieldsUnfilledDetails(),
+							null);
+					return;
+				} else if (!password.equals(passwordConfirmation)) {
+					MessageBox.alert(I18N.CONSTANTS.error(),
+							I18N.CONSTANTS.passwordNotMatch(), null);
+					return;
+				}
+
+				beforeChangePassword();
+
+				doChangePassword(password);
+			}
+		});
+		
+		FormPanel panel = new FormPanel();
+		panel.setHeaderVisible(false);
+		panel.add(emailBox);
+		panel.add(passwordTextBox);
+		panel.add(confirmPasswordTextBox);
+		
+		add(panel);
+	
+		getButtonBar().removeAll();
+		
+		addButton(updateButton);
+		
+		setFocusWidget(passwordTextBox);
+	}
+
+	protected void beforeChangePassword() {
+		mask(I18N.CONSTANTS.saving());
+		updateButton.setEnabled(false);
+	}
+	
+	protected void afterChangePassword() {
+		unmask();
+		updateButton.setEnabled(true);
+	}
+
+	protected void doChangePassword(String newPassword) {
+        final PasswordManagementServiceAsync service = GWT.create(PasswordManagementService.class);
+		service.updatePassword(auth.getEmail(), newPassword,
+				new AsyncCallback<Void>() {
+					@Override
+					public void onFailure(Throwable caught) {
+						afterChangePassword();
+						MessageBox.alert(I18N.CONSTANTS.save(), I18N.CONSTANTS.saveError(), null);
+					}
+
+					@Override
+					public void onSuccess(Void result) {
+						Notification.show(I18N.CONSTANTS.infoConfirmation(), I18N.CONSTANTS.passwordChanged());
+						hide();
+					}
+				});
+	}
+}
Index: src/main/java/org/sigmah/client/SigmahAppFrame.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/SigmahAppFrame.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/SigmahAppFrame.java	(working copy)
@@ -29,6 +29,8 @@
 import org.sigmah.client.page.common.widget.LoadingPlaceHolder;
 import org.sigmah.client.page.dashboard.DashboardPageState;
 import org.sigmah.client.page.login.LoginView;
+import org.sigmah.client.page.login.PasswordManagementService;
+import org.sigmah.client.page.login.PasswordManagementServiceAsync;
 import org.sigmah.client.ui.CreditFrame;
 import org.sigmah.client.ui.SigmahViewport;
 import org.sigmah.client.ui.Tab;
@@ -39,7 +41,9 @@
 import org.sigmah.shared.command.GetHostServerInfo;
 import org.sigmah.shared.command.result.ApplicationInfo;
 import org.sigmah.shared.command.result.HostServerInfo;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.OrganizationDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.value.FileUploadUtils;
 
 import com.allen_sauer.gwt.log.client.Log;
@@ -128,6 +132,21 @@
 				}
 			});
 			RootPanel.get("help").add(helpButton);
+			
+			if (ProfileUtils.isGranted(auth, GlobalPermissionEnum.CHANGE_PASSWORD)) {
+				final Anchor changePasswordButton = new Anchor(I18N.CONSTANTS.changePassword());
+				changePasswordButton.addClickHandler(new ClickHandler() {
+					@Override
+					public void onClick(ClickEvent event) {
+						PasswordChangePrompt prompt = new PasswordChangePrompt(auth);
+						prompt.setHeading(I18N.CONSTANTS.changePassword());
+						prompt.show();
+					}
+				});
+				RootPanel.get("changePassword").add(changePasswordButton);
+			} else {
+				RootPanel.get("changePassword").setVisible(false);
+			}
 
 			// Logout action
 			final Anchor logoutButton = new Anchor(I18N.CONSTANTS.logout());
@@ -287,6 +306,25 @@
 					                e);
 				}
 			});
+
+	        final PasswordManagementServiceAsync service = GWT.create(PasswordManagementService.class);
+	        service.hasPasswordExpired(auth.getEmail(), new AsyncCallback<Boolean>() {
+				@Override
+				public void onSuccess(Boolean result) {
+					if (result != null && result) {
+						PasswordChangePrompt prompt = new PasswordChangePrompt(auth);
+						prompt.setClosable(false);
+						prompt.setHeading(I18N.CONSTANTS.changePassword());
+						prompt.show();
+					}
+				}
+				
+				@Override
+				public void onFailure(Throwable e) {
+					Log.error("[execute] Error while getting the password expiration information for user #id " + auth.getUserId() + ".",
+			                e);
+				}
+			});
 		}
 	}
 
Index: src/main/java/org/sigmah/client/page/login/PasswordManagementService.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/login/PasswordManagementService.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/login/PasswordManagementService.java	(working copy)
@@ -16,5 +16,6 @@
 public interface PasswordManagementService extends RemoteService {
     void forgotPassword(String email, String language, String hostUrl) throws Exception;
     String validateAndGetUserEmailByToken(String token) throws Exception;
-    void updatePassword(String email,String password) throws Exception;
+    void updatePassword(String email, String password) throws Exception;
+	Boolean hasPasswordExpired(String email) throws Exception;
 }
Index: src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html
===================================================================
--- workspace_dev/Sigmah/src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html	(revision 1560)
+++ workspace_dev/Sigmah/src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html	(working copy)
@@ -87,7 +87,7 @@
     <div class="sigmah">
         <div id="logout"><img src="image/deconnexion.png" alt="" /> </div>
         <!-- hide credit frame -->
-        <div class="minimenu"> <span id="credit"></span> &#124 <span id="bugreport"></span> &#124 <span id="help"></span> </div>
+        <div class="minimenu"> <span id="credit"></span> &#124 <span id="bugreport"></span> &#124 <span id="help"></span> <span id="changePassword">&#124 </span> </div>
         <div id="offline-status"></div>
     </div>
 </div>
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/PasswordManagementServlet.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/PasswordManagementServlet.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/PasswordManagementServlet.java	(working copy)
@@ -23,8 +23,11 @@
 import org.sigmah.client.page.login.PasswordManagementService;
 import org.sigmah.server.auth.impl.BCrypt;
 import org.sigmah.server.dao.Transactional;
+import org.sigmah.server.dao.hibernate.PasswordExpirationPolicyHibernateDAO;
 import org.sigmah.server.mail.MailSender;
+import org.sigmah.shared.domain.Organization;
 import org.sigmah.shared.domain.User;
+import org.sigmah.shared.domain.password.PasswordExpirationPolicy;
 
 import com.google.gwt.user.server.rpc.RemoteServiceServlet;
 import com.google.inject.Inject;
@@ -64,10 +67,7 @@
 		
 		final EntityManager entityManager = injector.getInstance(EntityManager.class);
 
-		// find user
-		final Query query = entityManager.createQuery("SELECT u FROM User u WHERE u.email = :email");
-		query.setParameter("email", email);
-		final User user = (User) query.getSingleResult();
+		final User user = findUser(email, entityManager);
 		
 		// unique key is stored and sent by email
 		String uniqueKey = UUID.randomUUID().toString();
@@ -131,22 +131,43 @@
 	@Override
 	@Transactional
 	public void updatePassword(String email, String password) throws Exception {
-
 		final EntityManager entityManager = injector.getInstance(EntityManager.class);
 
-		final Query query = entityManager.createQuery("SELECT u FROM User u WHERE u.email = :email");
-		query.setParameter("email", email);
-
-		final User user = (User) query.getSingleResult();
+		final User user = findUser(email, entityManager);
 
 		final String hashedPassword = BCrypt.hashpw(password, BCrypt.gensalt());
 		user.setHashedPassword(hashedPassword);
+		user.setLastPasswordChange(new Date());
 		
 		// disactivate password change key
 		user.setChangePasswordKey(null);
 		
 		entityManager.merge(user);
-		log.info(String.format("User's(%s) password has been updated using password reset link",email));
+		log.info(String.format("User's(%s) password has been updated",email));
+	}
+	
+	@Override
+	public Boolean hasPasswordExpired(String email) throws Exception {
+		final EntityManager entityManager = injector.getInstance(EntityManager.class);
+
+		final User user = findUser(email, entityManager);
+		if (user.getLastPasswordChange() == null) { // new user
+			return true;
+		}
+
+		Organization organization = user.getOrganization();
+		if (organization == null) {
+			return false;
+		}
+		
+		final PasswordExpirationPolicy policy = new PasswordExpirationPolicyHibernateDAO(entityManager).getPasswordExpirationPolicyByOrganization(organization.getId());
+		return policy != null && policy.isExpired(user.getLastPasswordChange());
+	}
+
+	protected User findUser(String email, final EntityManager entityManager) {
+		final Query query = entityManager.createQuery("SELECT u FROM User u WHERE u.email = :email");
+		query.setParameter("email", email);
+		return (User) query.getSingleResult();
 	}
 	
 	private Locale getLocale(final String key) {
Index: src/main/java/org/sigmah/client/page/login/PasswordManagementServiceAsync.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/login/PasswordManagementServiceAsync.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/login/PasswordManagementServiceAsync.java	(working copy)
@@ -12,9 +12,8 @@
  * @author RaphaÃ«l Calabro (rcalabro@ideia.fr)
  */
 public interface PasswordManagementServiceAsync {
-
     public void forgotPassword(String email, String language, String hostUrl, AsyncCallback<Void> asyncCallback);
     public void validateAndGetUserEmailByToken(String token, AsyncCallback<String> asyncCallback);
     public void updatePassword(String email,String password, AsyncCallback<Void> asyncCallback);
-
+    public void hasPasswordExpired(String email, AsyncCallback<Boolean> asyncCallback);
 }
Index: src/main/java/org/sigmah/shared/command/UpdatePasswordExpirationPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/UpdatePasswordExpirationPolicy.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/UpdatePasswordExpirationPolicy.java	(working copy)
@@ -0,0 +1,48 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.shared.command;
+
+import java.util.Date;
+
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+
+/**
+ * @author renatoaf
+ */
+public class UpdatePasswordExpirationPolicy implements Command<VoidResult> {
+	private static final long serialVersionUID = -16062353382310195L;
+	
+	private int organizationId;
+	private ExpirationPolicyEnum type;
+	private Date referenceDate;
+
+	public UpdatePasswordExpirationPolicy() {
+	}
+
+	public ExpirationPolicyEnum getType() {
+		return type;
+	}
+	
+	public void setType(ExpirationPolicyEnum type) {
+		this.type = type;
+	}
+	
+	public int getOrganizationId() {
+		return organizationId;
+	}
+
+	public void setOrganizationId(int organizationId) {
+		this.organizationId = organizationId;
+	}
+	
+	public Date getReferenceDate() {
+		return referenceDate;
+	}
+	
+	public void setReferenceDate(Date referenceDate) {
+		this.referenceDate = referenceDate;
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementPresenter.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementPresenter.java	(working copy)
@@ -0,0 +1,132 @@
+package org.sigmah.client.page.admin.management;
+
+import org.sigmah.client.cache.UserLocalCache;
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.admin.management.AdminManagementPresenter.AdminManagementSubPresenter;
+import org.sigmah.client.util.Notification;
+import org.sigmah.shared.command.GetPasswordExpirationPolicy;
+import org.sigmah.shared.command.UpdatePasswordExpirationPolicy;
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+import org.sigmah.shared.dto.PasswordExpirationPolicyDTO;
+
+import com.extjs.gxt.ui.client.event.BaseEvent;
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.event.SelectionListener;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.form.DateField;
+import com.extjs.gxt.ui.client.widget.form.SimpleComboBox;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.inject.Inject;
+
+/**
+ * Presenter of the password expiration policy settings page.
+ * 
+ * @author renatoaf
+ */
+public class AdminPasswordExpirationPolicyManagementPresenter implements AdminManagementSubPresenter {
+    public interface View {
+        ContentPanel getContentPanel();
+
+        SimpleComboBox<ExpirationPolicyEnum> getExpirationPolicyTypeCombo();
+
+        DateField getScheduledDateField();
+
+        Button getSaveButton();
+    }
+
+    private final View view;
+    private boolean valueChanged;
+
+    @Inject
+    public AdminPasswordExpirationPolicyManagementPresenter(final UserLocalCache cache, final View view, final Dispatcher dispatcher) {
+        this.view = view;
+
+        view.getSaveButton().addSelectionListener(new SelectionListener<ButtonEvent>() {
+            @Override
+            public void componentSelected(ButtonEvent ce) {
+                UpdatePasswordExpirationPolicy settings = new UpdatePasswordExpirationPolicy();
+                settings.setType(view.getExpirationPolicyTypeCombo().getSimpleValue());
+                settings.setOrganizationId(cache.getOrganizationCache().getOrganization().getId());
+                settings.setReferenceDate(view.getScheduledDateField().getValue());
+                
+                if (view.getScheduledDateField().isVisible() && settings.getReferenceDate() == null) {
+                	MessageBox.alert(I18N.CONSTANTS.error(),
+	                        I18N.CONSTANTS.formWindowFieldsUnfilledDetails(), null);
+                	return;
+                }
+                
+                dispatcher.execute(settings, null, new AsyncCallback<VoidResult>() {
+                    @Override
+                    public void onFailure(Throwable caught) {
+                    	MessageBox.alert(I18N.CONSTANTS.savePasswordExpirationPolicyConfiguration(),
+		                        I18N.MESSAGES.adminStandardCreationFailure(
+		                        		I18N.CONSTANTS.passwordExpirationPolicy()), null);
+                    }
+                    
+                    @Override
+                    public void onSuccess(VoidResult result) {
+                        valueChanged = false;
+                        Notification.show(I18N.CONSTANTS.passwordExpirationPolicySaveChangesNotificationTitle(),
+                            I18N.CONSTANTS.passwordExpirationPolicySaveChangesNotificationMessage());
+                    }
+                });
+            }
+        });
+
+        Listener<BaseEvent> valueChangedListener = new Listener<BaseEvent>() {
+            @Override
+            public void handleEvent(BaseEvent be) {
+                valueChanged = true;
+            }
+        };
+
+        view.getExpirationPolicyTypeCombo().addListener(Events.SelectionChange, valueChangedListener);
+        view.getScheduledDateField().addListener(Events.Change, valueChangedListener);
+
+        final GetPasswordExpirationPolicy settingsCommand = new GetPasswordExpirationPolicy(cache.getOrganizationCache().getOrganization().getId());
+        dispatcher.execute(settingsCommand, null, new AsyncCallback<PasswordExpirationPolicyDTO>() {
+            @Override
+            public void onFailure(Throwable caught) {
+            	
+            }
+
+            @Override
+            public void onSuccess(PasswordExpirationPolicyDTO result) {
+            	view.getScheduledDateField().setValue(result.getReferenceDate());
+            	view.getExpirationPolicyTypeCombo().setSimpleValue(result.getType());
+                valueChanged = false;
+            }
+        });
+    }
+
+    @Override
+    public boolean hasValueChanged() {
+        return valueChanged;
+    }
+
+    @Override
+    public void forgetAllChangedValues() {
+        valueChanged = false;
+    }
+
+    @Override
+    public void setCurrentState() {
+
+    }
+
+    @Override
+    public ContentPanel getContentPanel() {
+        return view.getContentPanel();
+    }
+
+    @Override
+    public String getName() {
+        return I18N.CONSTANTS.passwordExpirationPolicy();
+    }
+}
Index: src/main/java/org/sigmah/shared/command/GetPasswordExpirationPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/GetPasswordExpirationPolicy.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/command/GetPasswordExpirationPolicy.java	(working copy)
@@ -0,0 +1,31 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.shared.command;
+
+import org.sigmah.shared.dto.PasswordExpirationPolicyDTO;
+
+/**
+ * @author renatoaf
+ */
+public class GetPasswordExpirationPolicy implements Command<PasswordExpirationPolicyDTO> {
+	private static final long serialVersionUID = 5367051796565604864L;
+
+	private int organizationId;
+
+	public GetPasswordExpirationPolicy() {
+	}
+
+	public GetPasswordExpirationPolicy(int organizationId) {
+		this.organizationId = organizationId;
+	}
+
+	public int getOrganizationId() {
+		return organizationId;
+	}
+
+	public void setOrganizationId(int organizationId) {
+		this.organizationId = organizationId;
+	}
+}
Index: src/main/java/org/sigmah/server/policy/UserPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/UserPolicy.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/policy/UserPolicy.java	(working copy)
@@ -98,8 +98,10 @@
                 userToPersist.setHashedPassword(PasswordHelper.hashPassword(password));
                 userToPersist.setChangePasswordKey(null);
                 userToPersist.setDateChangePasswordKeyIssued(new Date());
+            	userToPersist.setLastPasswordChange(new Date());
             } else if (userFound != null){
             	userToPersist.setHashedPassword(userFound.getHashedPassword());
+            	userToPersist.setLastPasswordChange(userFound.getLastPasswordChange());
             }
 
             if (userFound != null && userFound.getId() > 0) {
Index: src/main/java/org/sigmah/public/sigmah.css
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/public/sigmah.css	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/public/sigmah.css	(working copy)
@@ -88,7 +88,7 @@
 #logout {
 	font-size: 11px;
 	height: 16px;
-	width: 92px;
+	width: 80px;
 	float: right;
 	text-align: right;
 	padding-top: 1px;
@@ -123,8 +123,8 @@
 
 .minimenu {
 	height: 16px;
-	width: 245px;
-	float: right;
+	width: 280px;
+/*	float: right; */
 	text-align: right;
 	padding-top: 1px;
 	color: #C2C1C1;
Index: src/main/java/org/sigmah/shared/dto/UserDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/UserDTO.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/UserDTO.java	(working copy)
@@ -87,6 +87,14 @@
     	set("pwdChangeDate", pwdChangeDate);
     }
     
+    public Date getLastPasswordChange() {
+        return get("lastPasswordChange");
+    }
+
+    public void setLastPasswordChange(Date passwordChange) {
+    	set("lastPasswordChange", passwordChange);
+    }
+    
     public List<ProfileDTO> getProfilesDTO() {
     	return get("profilesDTO");
     }
Index: src/main/java/org/sigmah/shared/domain/password/ExpirationPolicyEnum.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/password/ExpirationPolicyEnum.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/password/ExpirationPolicyEnum.java	(working copy)
@@ -0,0 +1,88 @@
+package org.sigmah.shared.domain.password;
+
+import java.util.Date;
+
+import org.sigmah.client.i18n.I18N;
+
+/**
+ * Enumeration for password expiration policies.
+ * 
+ * @author renatoaf
+ */
+public enum ExpirationPolicyEnum {
+	WEEKLY {
+		@Override
+		public boolean isExpired(Date referenceDate, Date lastChange) {
+			Date currentDate = new Date();
+			return currentDate.getTime() - lastChange.getTime() > WEEK;
+		}
+	},
+	
+	MONTHLY {
+		@Override
+		public boolean isExpired(Date referenceDate, Date lastChange) {
+			Date currentDate = new Date();
+			return currentDate.getTime() - lastChange.getTime() > MONTH;
+		}
+	},
+	
+	YEARLY {
+		@Override
+		public boolean isExpired(Date referenceDate, Date lastChange) {
+			Date currentDate = new Date();
+			return currentDate.getTime() - lastChange.getTime() > YEAR;
+		}
+	},
+	
+	SCHEDULED {
+		@Override
+		public boolean isExpired(Date referenceDate, Date lastChange) {
+			return lastChange.before(referenceDate);
+		}
+	},
+	
+	NEVER {
+		@Override
+		public boolean isExpired(Date referenceDate, Date date) {
+			return false;
+		}
+	};
+
+	private static final long SECOND = 1000;
+	private static final long MINUTE = 60 * SECOND;
+	private static final long HOUR = 60 * MINUTE;
+	private static final long DAY = 24 * HOUR;
+	private static final long WEEK = 7 * DAY;
+	private static final long MONTH = 30 * DAY;
+	private static final long YEAR = 365 * DAY;
+	
+	public abstract boolean isExpired(Date referenceDate, Date lastChange);
+	
+	public static String getName(ExpirationPolicyEnum policy) {
+		String policyName = null;
+		switch (policy) {
+		case WEEKLY:
+			policyName = I18N.CONSTANTS.weekly();
+			break;
+		case MONTHLY:
+			policyName = I18N.CONSTANTS.monthly();
+			break;
+		case YEARLY:
+			policyName = I18N.CONSTANTS.yearly();
+			break;
+		case NEVER:
+			policyName = I18N.CONSTANTS.never();
+			break;
+		case SCHEDULED:
+			policyName = I18N.CONSTANTS.scheduled();
+			break;
+		default:
+			policyName = "default";
+		}
+		return policyName;
+	}
+	
+	public String toString() {
+		return getName(this);
+	}
+}
Index: src/main/java/org/sigmah/server/dao/PasswordExpirationPolicyDAO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/PasswordExpirationPolicyDAO.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/PasswordExpirationPolicyDAO.java	(working copy)
@@ -0,0 +1,21 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.server.dao;
+
+import java.util.Date;
+
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+import org.sigmah.shared.domain.password.PasswordExpirationPolicy;
+
+/**
+ * DAO interface for password expiration policies.
+ * 
+ * @author renatoaf
+ */
+public interface PasswordExpirationPolicyDAO {
+	public PasswordExpirationPolicy getPasswordExpirationPolicyByOrganization(Integer id);
+
+	public void updateExpirationPolicy(Integer organizationId, ExpirationPolicyEnum expirationPolicyType, Date referenceDate);
+}
Index: src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminBackupManagementPresenter.java	(working copy)
@@ -9,13 +9,13 @@
 import org.sigmah.client.page.admin.management.AdminManagementPresenter.AdminManagementSubPresenter;
 import org.sigmah.shared.dto.OrgUnitDTOLight;
 
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.button.Button;
 import com.google.gwt.core.client.GWT;
-import com.google.gwt.event.dom.client.ClickEvent;
-import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.Window;
 import com.google.gwt.user.client.rpc.AsyncCallback;
-import com.google.gwt.user.client.ui.Button;
 import com.google.gwt.user.client.ui.ListBox;
 import com.google.gwt.user.client.ui.RadioButton;
 import com.google.inject.ImplementedBy;
@@ -80,10 +80,10 @@
         
         view.getLastVersionRadioButton().setValue(true);
         
-        view.getBackupButton().addClickHandler(new ClickHandler() {
-            
+        view.getBackupButton().addSelectionListener(new SelectionListener<ButtonEvent>() {
+
             @Override
-            public void onClick(ClickEvent arg0) {
+            public void componentSelected(ButtonEvent ce) {
                 StringBuilder stringBuilder = new StringBuilder(GWT.getModuleBaseURL() + "backup");
                 stringBuilder.append("?");
                 stringBuilder.append("downloadVersions").append("=").append(view.getAllVersionsRadioButton().getValue());
@@ -92,8 +92,8 @@
                 
                 Window.open(stringBuilder.toString(), "_parent", "location=no");
                 
-            }
-        });
+			}
+		});
     }
     
     
Index: src/main/java/org/sigmah/shared/dto/PasswordExpirationPolicyDTO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/PasswordExpirationPolicyDTO.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/dto/PasswordExpirationPolicyDTO.java	(working copy)
@@ -0,0 +1,49 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.shared.dto;
+
+import java.util.Date;
+
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+
+import com.extjs.gxt.ui.client.data.BaseModelData;
+
+/**
+ * @author renatoaf
+ */
+public class PasswordExpirationPolicyDTO extends BaseModelData implements EntityDTO {
+	private static final long serialVersionUID = -2053511704247237670L;
+
+	@Override
+	public int getId() {
+		final Integer id = (Integer) get("id");
+		return id != null ? id : -1;
+	}
+
+	public void setId(int id) {
+		set("id", id);
+	}
+	
+	public ExpirationPolicyEnum getType() {
+		return get("type");
+	}
+
+	public void setType(ExpirationPolicyEnum type) {
+		set("type", type);
+	} 
+
+    public Date getReferenceDate() {
+		return get("referenceDate");
+	}
+    
+    public void setReferenceDate(Date referenceDate) {
+    	set("referenceDate", referenceDate);
+	}
+
+	@Override
+	public String getEntityName() {
+		return "PasswordExpirationPolicy";
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementPresenter.java	(working copy)
@@ -10,15 +10,15 @@
 import org.sigmah.shared.dto.OrganizationDTO;
 import org.sigmah.shared.dto.value.FileUploadUtils;
 
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.button.Button;
 import com.google.gwt.core.client.GWT;
 import com.google.gwt.event.dom.client.ChangeEvent;
 import com.google.gwt.event.dom.client.ChangeHandler;
-import com.google.gwt.event.dom.client.ClickEvent;
-import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.user.client.Window;
 import com.google.gwt.user.client.rpc.AsyncCallback;
-import com.google.gwt.user.client.ui.Button;
 import com.google.gwt.user.client.ui.FileUpload;
 import com.google.gwt.user.client.ui.FormPanel;
 import com.google.gwt.user.client.ui.FormPanel.SubmitCompleteEvent;
@@ -115,10 +115,10 @@
             }
         });
 
-        view.getSaveButton().addClickHandler(new ClickHandler() {
-
-            @Override
-            public void onClick(ClickEvent event) {
+        view.getSaveButton().addSelectionListener(new SelectionListener<ButtonEvent>() {
+        	
+        	@Override
+			public void componentSelected(ButtonEvent ce) {
                 if (view.getOrganizationNameTextBox().getText().isEmpty()) {
                     Window.alert(I18N.CONSTANTS.organizationManagementBlankNameNotificationError());
                 } else {
Index: src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementView.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminPasswordExpirationPolicyManagementView.java	(working copy)
@@ -0,0 +1,100 @@
+package org.sigmah.client.page.admin.management;
+
+import java.util.Arrays;
+import java.util.Date;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.admin.management.AdminPasswordExpirationPolicyManagementPresenter.View;
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+
+import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
+import com.extjs.gxt.ui.client.event.SelectionChangedEvent;
+import com.extjs.gxt.ui.client.event.SelectionChangedListener;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.form.ComboBox.TriggerAction;
+import com.extjs.gxt.ui.client.widget.form.DateField;
+import com.extjs.gxt.ui.client.widget.form.FormPanel;
+import com.extjs.gxt.ui.client.widget.form.SimpleComboBox;
+import com.extjs.gxt.ui.client.widget.form.SimpleComboValue;
+import com.extjs.gxt.ui.client.widget.layout.FormLayout;
+import com.google.inject.Inject;
+
+/**
+ * View for setting the password expiration policy.
+ * 
+ * @author renatoaf
+ */
+public class AdminPasswordExpirationPolicyManagementView extends ContentPanel implements View {
+    private final SimpleComboBox<ExpirationPolicyEnum> policyTypeCombo;
+    private final DateField scheduledDateField;
+    private final Button saveButton;
+
+    @Inject
+	public AdminPasswordExpirationPolicyManagementView() {
+		this.setHeading(I18N.CONSTANTS.passwordExpirationPolicy());
+		
+		final FormPanel panel = new FormPanel();
+        panel.setHeaderVisible(false);
+        
+        FormLayout layout = new FormLayout();
+        layout.setLabelWidth(150);
+        panel.setLayout(layout);
+        
+        // file format
+        policyTypeCombo = new SimpleComboBox<ExpirationPolicyEnum>();
+        policyTypeCombo.add(Arrays.asList(ExpirationPolicyEnum.values()));
+        policyTypeCombo.setTriggerAction(TriggerAction.ALL);
+        policyTypeCombo.setEditable(false);
+        policyTypeCombo.setAllowBlank(false);
+        policyTypeCombo.setFieldLabel(I18N.CONSTANTS.expirationPolicy());
+        policyTypeCombo.addSelectionChangedListener(new SelectionChangedListener<SimpleComboValue<ExpirationPolicyEnum>>() {
+			public void selectionChanged(
+					SelectionChangedEvent<SimpleComboValue<ExpirationPolicyEnum>> se) {
+				SimpleComboValue<ExpirationPolicyEnum> selectedItem = se.getSelectedItem();
+				if (selectedItem != null && selectedItem.getValue() == ExpirationPolicyEnum.SCHEDULED) {
+					scheduledDateField.setVisible(true);
+				} else {
+					scheduledDateField.clear();
+					scheduledDateField.setVisible(false);
+				}
+			}
+		});
+        
+        scheduledDateField = new DateField();
+        scheduledDateField.setFieldLabel(I18N.CONSTANTS.date());
+        scheduledDateField.setMinValue(new Date());
+        scheduledDateField.setAllowBlank(false);
+
+        saveButton = new Button(I18N.CONSTANTS.save());
+        
+        panel.add(policyTypeCombo);
+        panel.add(scheduledDateField);
+        panel.getButtonBar().add(saveButton);
+        panel.setButtonAlign(HorizontalAlignment.CENTER);
+        panel.getButtonBar().setEnableOverflow(false);
+        
+        this.setBodyStyleName("width-of-parent");
+        this.add(panel);
+    }
+
+    @Override
+    public ContentPanel getContentPanel() {
+        return this;
+    }
+
+    @Override
+    public SimpleComboBox<ExpirationPolicyEnum> getExpirationPolicyTypeCombo() {
+    	return policyTypeCombo;
+    }
+
+    @Override
+    public DateField getScheduledDateField() {
+		return scheduledDateField;
+	}
+ 
+    @Override
+    public Button getSaveButton() {
+        return saveButton;
+    }
+}
Index: src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminExportManagementView.java	(working copy)
@@ -1,8 +1,5 @@
 package org.sigmah.client.page.admin.management;
 
-import java.util.HashMap;
-import java.util.Map;
-
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.page.admin.management.AdminExportManagementPresenter.View;
 
Index: src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/management/AdminCoreManagementView.java	(working copy)
@@ -4,8 +4,8 @@
 import org.sigmah.client.page.admin.management.AdminCoreManagementPresenter.View;
 
 import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.layout.FlowLayout;
-import com.google.gwt.user.client.ui.Button;
 import com.google.gwt.user.client.ui.FileUpload;
 import com.google.gwt.user.client.ui.FlexTable;
 import com.google.gwt.user.client.ui.FormPanel;
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdatePasswordExpirationPolicyHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdatePasswordExpirationPolicyHandler.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdatePasswordExpirationPolicyHandler.java	(working copy)
@@ -0,0 +1,46 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.server.endpoint.gwtrpc.handler;
+
+import javax.persistence.EntityManager;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.dozer.Mapper;
+import org.sigmah.server.dao.PasswordExpirationPolicyDAO;
+import org.sigmah.shared.command.UpdatePasswordExpirationPolicy;
+import org.sigmah.shared.command.handler.CommandHandler;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.domain.User;
+import org.sigmah.shared.domain.password.PasswordExpirationPolicy;
+import org.sigmah.shared.exception.CommandException;
+
+import com.google.inject.Inject;
+
+/**
+ * Updates {@link PasswordExpirationPolicy} from a given update command.
+ * 
+ * @author renatoaf
+ */
+public class UpdatePasswordExpirationPolicyHandler implements CommandHandler<UpdatePasswordExpirationPolicy> {
+	protected static final Log log = LogFactory.getLog(UpdatePasswordExpirationPolicyHandler.class);
+	
+	protected final PasswordExpirationPolicyDAO dao;
+	protected final EntityManager em;
+	protected final Mapper mapper;
+
+	@Inject
+	public UpdatePasswordExpirationPolicyHandler(PasswordExpirationPolicyDAO dao, EntityManager em, Mapper mapper) {
+		this.dao = dao;
+		this.em = em;
+		this.mapper = mapper;
+	}
+			
+	@Override
+	public CommandResult execute(UpdatePasswordExpirationPolicy cmd, User user) throws CommandException {
+		dao.updateExpirationPolicy(cmd.getOrganizationId(), cmd.getType(), cmd.getReferenceDate());
+		return null;
+	}
+}
Index: src/main/java/org/sigmah/shared/domain/User.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/User.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/User.java	(working copy)
@@ -5,11 +5,23 @@
 
 package org.sigmah.shared.domain;
 
-import org.sigmah.shared.domain.profile.OrgUnitProfile;
-
-import javax.persistence.*;
 import java.util.Date;
 
+import javax.persistence.Column;
+import javax.persistence.Entity;
+import javax.persistence.FetchType;
+import javax.persistence.GeneratedValue;
+import javax.persistence.GenerationType;
+import javax.persistence.Id;
+import javax.persistence.JoinColumn;
+import javax.persistence.ManyToOne;
+import javax.persistence.NamedQueries;
+import javax.persistence.NamedQuery;
+import javax.persistence.OneToOne;
+import javax.persistence.Table;
+
+import org.sigmah.shared.domain.profile.OrgUnitProfile;
+
 /**
  * Describes a user
  * 
@@ -35,6 +47,7 @@
     private String locale;
     private String changePasswordKey;
     private Date dateChangePasswordKeyIssued;
+    private Date lastPasswordChange;
     private String hashedPassword;
     private Organization organization;
     private OrgUnitProfile orgUnitWithProfiles;
@@ -153,6 +166,18 @@
         this.dateChangePasswordKeyIssued = dateChangePasswordKeyIssued;
     }
 
+    /**
+     * Gets the date on which the password was last changed.
+     */
+    @Column(name = "last_password_change", nullable = true)
+    public Date getLastPasswordChange() {
+		return lastPasswordChange;
+	}
+    
+    public void setLastPasswordChange(Date lastPasswordChange) {
+		this.lastPasswordChange = lastPasswordChange;
+	}
+
     public void clearChangePasswordKey() {
         this.setChangePasswordKey(null);
         this.setDateChangePasswordKeyIssued(null);
Index: src/main/java/org/sigmah/server/dao/hibernate/PasswordExpirationPolicyHibernateDAO.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/hibernate/PasswordExpirationPolicyHibernateDAO.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/hibernate/PasswordExpirationPolicyHibernateDAO.java	(working copy)
@@ -0,0 +1,43 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.server.dao.hibernate;
+
+import java.util.Date;
+
+import javax.persistence.EntityManager;
+import javax.persistence.Query;
+
+import org.sigmah.server.dao.PasswordExpirationPolicyDAO;
+import org.sigmah.shared.domain.password.ExpirationPolicyEnum;
+import org.sigmah.shared.domain.password.PasswordExpirationPolicy;
+
+import com.google.inject.Inject;
+
+/**
+ * @author renatoaf
+ */
+public class PasswordExpirationPolicyHibernateDAO implements PasswordExpirationPolicyDAO {
+	private final EntityManager em;
+
+	@Inject
+	public PasswordExpirationPolicyHibernateDAO(EntityManager em) {
+		this.em = em;
+	}
+
+	@Override
+	public PasswordExpirationPolicy getPasswordExpirationPolicyByOrganization(Integer id) {
+		Query query = em.createQuery("FROM PasswordExpirationPolicy pep WHERE pep.organization.id = :id");
+		query.setParameter("id", id);
+		return (PasswordExpirationPolicy) query.getSingleResult();
+	}
+
+	@Override
+	public void updateExpirationPolicy(Integer organizationId, ExpirationPolicyEnum expirationPolicyType, Date referenceDate) {
+		PasswordExpirationPolicy policy = getPasswordExpirationPolicyByOrganization(organizationId);
+		policy.setType(expirationPolicyType);
+		policy.setReferenceDate(referenceDate);
+		em.merge(policy);
+	}
+}
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetPasswordExpirationPolicyHandler.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetPasswordExpirationPolicyHandler.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetPasswordExpirationPolicyHandler.java	(working copy)
@@ -0,0 +1,48 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.server.endpoint.gwtrpc.handler;
+
+import javax.persistence.EntityManager;
+
+import org.apache.commons.logging.Log;
+import org.apache.commons.logging.LogFactory;
+import org.dozer.Mapper;
+import org.sigmah.server.dao.PasswordExpirationPolicyDAO;
+import org.sigmah.shared.command.GetPasswordExpirationPolicy;
+import org.sigmah.shared.command.handler.CommandHandler;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.domain.User;
+import org.sigmah.shared.domain.password.PasswordExpirationPolicy;
+import org.sigmah.shared.dto.PasswordExpirationPolicyDTO;
+import org.sigmah.shared.exception.CommandException;
+
+import com.google.inject.Inject;
+
+/**
+ * Provides {@link PasswordExpirationPolicy} for a given command.
+ * 
+ * @author renatoaf
+ */
+public class GetPasswordExpirationPolicyHandler implements CommandHandler<GetPasswordExpirationPolicy> {
+	protected static final Log log = LogFactory.getLog(GetPasswordExpirationPolicyHandler.class);
+
+	protected final PasswordExpirationPolicyDAO dao;
+	protected final EntityManager em;
+	protected final Mapper mapper;
+
+	@Inject
+	public GetPasswordExpirationPolicyHandler(PasswordExpirationPolicyDAO dao, EntityManager em, Mapper mapper) {
+		this.dao = dao;
+		this.em = em;
+		this.mapper = mapper;
+	}
+
+	@Override
+	public CommandResult execute(GetPasswordExpirationPolicy cmd, User user) throws CommandException {
+		PasswordExpirationPolicy policy = dao.getPasswordExpirationPolicyByOrganization(cmd .getOrganizationId());
+		PasswordExpirationPolicyDTO result = mapper.map(policy, PasswordExpirationPolicyDTO.class);
+		return result;
+	}
+}
Index: src/main/java/org/sigmah/client/page/admin/AdminModule.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminModule.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/AdminModule.java	(working copy)
@@ -8,6 +8,8 @@
 import org.sigmah.client.page.admin.management.AdminExportManagementView;
 import org.sigmah.client.page.admin.management.AdminManagementPresenter;
 import org.sigmah.client.page.admin.management.AdminManagementView;
+import org.sigmah.client.page.admin.management.AdminPasswordExpirationPolicyManagementPresenter;
+import org.sigmah.client.page.admin.management.AdminPasswordExpirationPolicyManagementView;
 import org.sigmah.client.page.admin.model.common.AdminOneModelPresenter;
 import org.sigmah.client.page.admin.model.common.AdminOneModelView;
 
@@ -23,6 +25,7 @@
 		bind(AdminCoreManagementPresenter.View.class).to(AdminCoreManagementView.class);
 		bind(AdminBackupManagementPresenter.View.class).to(AdminBackupManagementView.class);
 		bind(AdminExportManagementPresenter.View.class).to(AdminExportManagementView.class);
+		bind(AdminPasswordExpirationPolicyManagementPresenter.View.class).to(AdminPasswordExpirationPolicyManagementView.class);
 	}
 
 }
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(working copy)
@@ -123,7 +123,12 @@
 	/**
 	 * Show global export button in projects list
 	 */
-	GLOBAL_EXPORT;
+	GLOBAL_EXPORT,
+
+	/**
+	 * for changing own password
+	 */
+	CHANGE_PASSWORD;
 
 	public static String getName(GlobalPermissionEnum gp) {
 		String gpName = "default";
@@ -191,7 +196,9 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
-
+		case CHANGE_PASSWORD:
+			gpName = I18N.CONSTANTS.CHANGE_OWN_PASSWORD();
+			break;
 		default:
 			gpName = null;
 		}
@@ -238,6 +245,9 @@
 		case GLOBAL_EXPORT:
 			gpCategory = I18N.CONSTANTS.categoryOthers();
 			break;
+		case CHANGE_PASSWORD:
+			gpCategory = I18N.CONSTANTS.categoryOthers();
+			break;
 		default:
 			break;
 		}
Index: src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/page/admin/users/AdminUsersView.java	(working copy)
@@ -452,7 +452,7 @@
 		});
 		configs.add(column);
 
-		column = new ColumnConfig("pwdChangeDate", I18N.CONSTANTS.adminUsersDatePasswordChange(), 120);
+		column = new ColumnConfig("lastPasswordChange", I18N.CONSTANTS.adminUsersDatePasswordChange(), 120);
 		final DateTimeFormat format = DateUtils.DATE_SHORT;
 		column.setHeader(I18N.CONSTANTS.adminUsersDatePasswordChange());
 		column.setDateTimeFormat(format);
@@ -670,7 +670,7 @@
 	public ProfileSigmahForm showNewProfileForm(Window window, AsyncCallback<CreateResult> asyncCallback,
 	                ProfileDTO profileToUpdate) {
 		window.setHeading(I18N.CONSTANTS.adminProfileAdd());
-		window.setSize(550, 600);
+		window.setSize(550, 620);
 		window.setPlain(true);
 		window.setModal(true);
 		window.setBlinkModal(true);
Index: src/main/java/org/sigmah/server/dao/hibernate/HibernateModule.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/hibernate/HibernateModule.java	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/server/dao/hibernate/HibernateModule.java	(working copy)
@@ -17,6 +17,7 @@
 import org.sigmah.server.dao.IndicatorDAO;
 import org.sigmah.server.dao.LocationDAO;
 import org.sigmah.server.dao.PartnerDAO;
+import org.sigmah.server.dao.PasswordExpirationPolicyDAO;
 import org.sigmah.server.dao.PersonalEventDAO;
 import org.sigmah.server.dao.ProjectReportDAO;
 import org.sigmah.server.dao.ReportDefinitionDAO;
@@ -98,6 +99,7 @@
         bind(PersonalEventDAO.class).to(PersonalEventHibernateDAO.class);
         bind(ProjectReportDAO.class).to(ProjectReportHibernateDAO.class);
         bind(GlobalExportDAO.class).to(GlobalExportHibernateDAO.class);
+        bind(PasswordExpirationPolicyDAO.class).to(PasswordExpirationPolicyHibernateDAO.class);
     }
 
     private <T extends DAO> void bindDAOProxy(Class<T> daoClass) {
Index: src/main/java/org/sigmah/shared/domain/password/PasswordExpirationPolicy.java
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/password/PasswordExpirationPolicy.java	(revision 0)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/shared/domain/password/PasswordExpirationPolicy.java	(working copy)
@@ -0,0 +1,80 @@
+/*
+ * All Sigmah code is released under the GNU General Public License v3
+ * See COPYRIGHT.txt and LICENSE.txt.
+ */
+package org.sigmah.shared.domain.password;
+
+import java.io.Serializable;
+import java.util.Date;
+
+import javax.persistence.Column;
+import javax.persistence.Entity;
+import javax.persistence.EnumType;
+import javax.persistence.Enumerated;
+import javax.persistence.GeneratedValue;
+import javax.persistence.GenerationType;
+import javax.persistence.Id;
+import javax.persistence.JoinColumn;
+import javax.persistence.ManyToOne;
+import javax.persistence.Table;
+
+import org.sigmah.shared.domain.Organization;
+
+/**
+ * Password expiration policy per organization.
+ * 
+ * @author renatoaf
+ */
+@Entity
+@Table(name = "password_expiration_policy")
+public class PasswordExpirationPolicy implements Serializable {
+	private static final long serialVersionUID = -2722884637221828205L;
+
+	private Long id;
+	private ExpirationPolicyEnum type;
+	private Organization organization;
+	private Date referenceDate;
+	
+	@Column(name = "policy_type", nullable = false)
+	@Enumerated(EnumType.STRING)
+	public ExpirationPolicyEnum getType() {
+		return type;
+	}
+
+	public void setType(ExpirationPolicyEnum type) {
+		this.type = type;
+	}
+
+	@Id
+	@GeneratedValue(strategy = GenerationType.AUTO)
+	public Long getId() {
+		return id;
+	}
+
+	public void setId(Long id) {
+		this.id = id;
+	}
+ 
+	@ManyToOne
+	@JoinColumn(name = "organization_id", nullable = false)
+	public Organization getOrganization() {
+		return organization;
+	}
+
+	public void setOrganization(Organization organization) {
+		this.organization = organization;
+	}
+
+    @Column(name = "reference_date", nullable = true)
+    public Date getReferenceDate() {
+		return referenceDate;
+	}
+    
+    public void setReferenceDate(Date referenceDate) {
+		this.referenceDate = referenceDate;
+	}
+
+	public boolean isExpired(Date lastPasswordChange) {
+		return getType().isExpired(getReferenceDate(), lastPasswordChange);
+	}
+}
Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1560)
+++ workspace_dev/Sigmah/src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -61,6 +61,8 @@
 
 EDIT_INDICATOR = Edit indicator
 
+CHANGE_OWN_PASSWORD = Change own password
+
 EDIT_OWN_REMINDERS = Edit own reminders
 
 EDIT_ALL_REMINDERS = Edit all reminders
@@ -2098,6 +2100,10 @@
 
 year = Year
 
+yearly = Yearly
+
+scheduled = Scheduled
+
 yes = Yes
 
 you = You
@@ -2388,4 +2394,17 @@
 #Name for permission not included in any catebory
 categoryNotMapped = Not in any Category
 
+#Label for the "change own password" option
+changePassword = Change your password
 
+#Text displayed when a user changes his password
+passwordChanged = Your password is successfully updated.
+
+#Labels displayed on password expiration policy configuration tab (administration)
+expirationPolicy = Expiration policy
+passwordExpirationPolicy = Password expiration policy
+savePasswordExpirationPolicyConfiguration = Password expiration policy configuration
+passwordExpirationPolicySaveChangesNotificationTitle = Changes saved
+passwordExpirationPolicySaveChangesNotificationMessage = Your changes are correctly saved !
+
+never = Never
\ No newline at end of file
