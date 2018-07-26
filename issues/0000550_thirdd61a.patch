Index: src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java	(Revision 1519)
+++ src/main/java/org/sigmah/client/page/project/dashboard/MonitoredPointLabelCellRender.java	(Arbeitskopie)
@@ -11,6 +11,7 @@
 import org.sigmah.client.page.project.dashboard.ProjectDashboardPresenter.View;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.UpdateEntity;
+import org.sigmah.shared.command.result.MonitoredPointResult;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.domain.reminder.ReminderChangeType;
@@ -55,7 +56,7 @@
 
 	@Override
 	public Object render(final MonitoredPointDTO model, String property, ColumnData config, int rowIndex, int colIndex,
-	                ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
+					ListStore<MonitoredPointDTO> store, Grid<MonitoredPointDTO> grid) {
 
 		boolean creator = false;
 		for (MonitoredPointHistoryDTO hist : model.getHistory()) {
@@ -67,7 +68,7 @@
 		com.google.gwt.user.client.ui.Label l = new com.google.gwt.user.client.ui.Label(model.getLabel());
 
 		if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)
-		                || ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+						|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
 
 			l.addStyleName("hyperlink_style_label");
 			if (model.isCompleted()) {
@@ -127,37 +128,43 @@
 
 						// RPC to update by using the command UpdateEntity
 						dispatcher.execute(
-						                new UpdateEntity(model, properties),
-						                new MaskingAsyncMonitor(view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
-						                new AsyncCallback<VoidResult>() {
+										new UpdateEntity(model, properties),
+										new MaskingAsyncMonitor(view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
+										new AsyncCallback<VoidResult>() {
 
-							                @Override
-							                public void onFailure(Throwable caught) {
+											@Override
+											public void onFailure(Throwable caught) {
 
-								                MessageBox.alert(I18N.CONSTANTS.monitoredPointUpdateError(),
-								                                I18N.CONSTANTS.monitoredPointUpdateErrorDetails(), null);
+												MessageBox.alert(I18N.CONSTANTS.monitoredPointUpdateError(),
+																I18N.CONSTANTS.monitoredPointUpdateErrorDetails(), null);
 
-							                }
+											}
 
-							                @Override
-							                public void onSuccess(VoidResult result) {
+											@Override
+											public void onSuccess(VoidResult result) {
 
-								                // After the RPC,modify the DTO
-								                // model of the grid
-								                model.setExpectedDate(expectedDate);
-								                model.setLabel(label);
+												// After the RPC,modify the DTO
+												// model of the grid
+												model.setExpectedDate(expectedDate);
+												model.setLabel(label);
 
-								                // Refresh the grid
-								                ListStore<MonitoredPointDTO> pointDTOStore = view
-								                                .getMonitoredPointsGrid().getStore();
-								                pointDTOStore.update(model);
+												if (result instanceof MonitoredPointResult) {
+													MonitoredPointResult resultTemp = (MonitoredPointResult) result;
+													if (resultTemp.getMonitoredPoint() != null)
+														model.setHistory(resultTemp.getMonitoredPoint().getHistory());
+												}
 
-								                Notification.show(I18N.CONSTANTS.infoConfirmation(),
-								                                I18N.CONSTANTS.monitoredPointUpdateConfirm());
+												// Refresh the grid
+												ListStore<MonitoredPointDTO> pointDTOStore = view
+																.getMonitoredPointsGrid().getStore();
+												pointDTOStore.update(model);
 
-							                }
-						                });
+												Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																I18N.CONSTANTS.monitoredPointUpdateConfirm());
 
+											}
+										});
+
 					}
 
 					// ---------Updating End-----------------------------
@@ -184,34 +191,34 @@
 									// RPC to update by using the command
 									// UpdateEntity
 									dispatcher.execute(new UpdateEntity(model, properties), new MaskingAsyncMonitor(
-									                view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
-									                new AsyncCallback<VoidResult>() {
+													view.getMonitoredPointsGrid(), I18N.CONSTANTS.loading()),
+													new AsyncCallback<VoidResult>() {
 
-										                @Override
-										                public void onFailure(Throwable caught) {
+														@Override
+														public void onFailure(Throwable caught) {
 
-											                MessageBox.alert(
-											                                I18N.CONSTANTS.deletionError(),
-											                                I18N.CONSTANTS.monitoredPointDeletionErrorDetails(),
-											                                null);
+															MessageBox.alert(
+																			I18N.CONSTANTS.deletionError(),
+																			I18N.CONSTANTS.monitoredPointDeletionErrorDetails(),
+																			null);
 
-										                }
+														}
 
-										                @Override
-										                public void onSuccess(VoidResult result) {
+														@Override
+														public void onSuccess(VoidResult result) {
 
-											                // Refresh the grid
-											                model.setDeleted(true);
-											                ListStore<MonitoredPointDTO> pointDTOStore = view
-											                                .getMonitoredPointsGrid().getStore();
-											                pointDTOStore.remove(model);
+															// Refresh the grid
+															model.setDeleted(true);
+															ListStore<MonitoredPointDTO> pointDTOStore = view
+																			.getMonitoredPointsGrid().getStore();
+															pointDTOStore.remove(model);
 
-											                window.hide();
-											                Notification.show(
-											                                I18N.CONSTANTS.infoConfirmation(),
-											                                I18N.CONSTANTS.monitoredPointDeletionConfirm());
-										                }
-									                });
+															window.hide();
+															Notification.show(
+																			I18N.CONSTANTS.infoConfirmation(),
+																			I18N.CONSTANTS.monitoredPointDeletionConfirm());
+														}
+													});
 
 								}
 
@@ -220,7 +227,7 @@
 
 						// Create a confirm messagebox with the listener
 						MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(),
-						                I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
+										I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
 						confirmMessageBox.setButtons(MessageBox.YESNO);
 						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
 						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
Index: src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java	(Revision 1536)
+++ src/main/java/org/sigmah/client/page/project/dashboard/ReminderLableCellRenderer.java	(Arbeitskopie)
@@ -13,6 +13,7 @@
 import org.sigmah.client.page.project.dashboard.EditFormWindow.FormSubmitListener;
 import org.sigmah.client.util.Notification;
 import org.sigmah.shared.command.UpdateEntity;
+import org.sigmah.shared.command.result.ReminderResult;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.domain.reminder.ReminderChangeType;
@@ -51,7 +52,7 @@
 	 * @param view
 	 */
 	public ReminderLableCellRenderer(ProjectDashboardPresenter.View view, Dispatcher dispatcher,
-	                Authentication authentication) {
+					Authentication authentication) {
 		super();
 		this.view = view;
 		this.dispatcher = dispatcher;
@@ -61,7 +62,7 @@
 
 	@Override
 	public Object render(final ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
-	                ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+					ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
 
 		boolean creator = false;
 		for (ReminderHistoryDTO hist : model.getHistory()) {
@@ -73,7 +74,7 @@
 		com.google.gwt.user.client.ui.Label l = new com.google.gwt.user.client.ui.Label(model.getLabel());
 
 		if (creator && ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_OWN_REMINDERS)
-		                || ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
+						|| ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_ALL_REMINDERS)) {
 
 			l.addStyleName("hyperlink_style_label");
 			if (model.isCompleted()) {
@@ -134,36 +135,42 @@
 
 						// RPC to update by using the command UpdateEntity
 						dispatcher.execute(new UpdateEntity(model, properties),
-						                new MaskingAsyncMonitor(view.getRemindersGrid(), I18N.CONSTANTS.loading()),
-						                new AsyncCallback<VoidResult>() {
+										new MaskingAsyncMonitor(view.getRemindersGrid(), I18N.CONSTANTS.loading()),
+										new AsyncCallback<VoidResult>() {
 
-							                @Override
-							                public void onFailure(Throwable caught) {
+											@Override
+											public void onFailure(Throwable caught) {
 
-								                Log.error("[execute] Error while updating the reminder.", caught);
-								                MessageBox.alert(I18N.CONSTANTS.reminderUpdateError(),
-								                                I18N.CONSTANTS.reminderUpdateErrorDetails(), null);
+												Log.error("[execute] Error while updating the reminder.", caught);
+												MessageBox.alert(I18N.CONSTANTS.reminderUpdateError(),
+																I18N.CONSTANTS.reminderUpdateErrorDetails(), null);
 
-							                }
+											}
 
-							                @Override
-							                public void onSuccess(VoidResult result) {
+											@Override
+											public void onSuccess(VoidResult result) {
 
-								                // After the RPC,modify the DTO
-								                // model of the grid
-								                model.setExpectedDate(expectedDate);
-								                model.setLabel(label);
+												// After the RPC,modify the DTO
+												// model of the grid
+												model.setExpectedDate(expectedDate);
+												model.setLabel(label);
 
-								                // Refresh the grid
-								                ListStore<ReminderDTO> reminderDTOStore = view.getRemindersGrid()
-								                                .getStore();
-								                reminderDTOStore.update(model);
+												if (result instanceof ReminderResult) {
+													ReminderResult resultTemp = (ReminderResult) result;
+													if (resultTemp.getReminder() != null)
+														model.setHistory(resultTemp.getReminder().getHistory());
+												}
 
-								                Notification.show(I18N.CONSTANTS.infoConfirmation(),
-								                                I18N.CONSTANTS.reminderUpdateConfirm());
-							                }
-						                });
+												// Refresh the grid
+												ListStore<ReminderDTO> reminderDTOStore = view.getRemindersGrid()
+																.getStore();
+												reminderDTOStore.update(model);
 
+												Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																I18N.CONSTANTS.reminderUpdateConfirm());
+											}
+										});
+
 					}
 
 					// ---------Updating End-----------------------------
@@ -188,38 +195,38 @@
 									properties.put("deleted", true);
 
 									dispatcher.execute(new UpdateEntity(model, properties), new MaskingAsyncMonitor(
-									                view.getRemindersGrid(), I18N.CONSTANTS.loading()),
-									                new AsyncCallback<VoidResult>() {
+													view.getRemindersGrid(), I18N.CONSTANTS.loading()),
+													new AsyncCallback<VoidResult>() {
 
-										                @Override
-										                public void onFailure(Throwable caught) {
+														@Override
+														public void onFailure(Throwable caught) {
 
-											                Log.error("[execute] Error while updating the reminder.",
-											                                caught);
-											                MessageBox.alert(
-											                                I18N.CONSTANTS.deletionError(),
-											                                I18N.CONSTANTS.reminderDeletionErrorDetails(),
-											                                null);
+															Log.error("[execute] Error while updating the reminder.",
+																			caught);
+															MessageBox.alert(
+																			I18N.CONSTANTS.deletionError(),
+																			I18N.CONSTANTS.reminderDeletionErrorDetails(),
+																			null);
 
-										                }
+														}
 
-										                @Override
-										                public void onSuccess(VoidResult result) {
+														@Override
+														public void onSuccess(VoidResult result) {
 
-											                // After RPC,
-											                // refresh the veiw
-											                model.setDeleted(true);
-											                ListStore<ReminderDTO> reminderDTOStore = view
-											                                .getRemindersGrid().getStore();
-											                reminderDTOStore.remove(model);
+															// After RPC,
+															// refresh the veiw
+															model.setDeleted(true);
+															ListStore<ReminderDTO> reminderDTOStore = view
+																			.getRemindersGrid().getStore();
+															reminderDTOStore.remove(model);
 
-											                window.hide();
-											                Notification.show(I18N.CONSTANTS.infoConfirmation(),
-											                                I18N.CONSTANTS.reminderDeletionConfirm());
+															window.hide();
+															Notification.show(I18N.CONSTANTS.infoConfirmation(),
+																			I18N.CONSTANTS.reminderDeletionConfirm());
 
-										                }
+														}
 
-									                });
+													});
 
 								}
 
@@ -228,7 +235,7 @@
 
 						// Create a confirm messagebox with the listener
 						MessageBox confirmMessageBox = MessageBox.confirm(I18N.CONSTANTS.deleteConfirm(),
-						                I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
+										I18N.CONSTANTS.deleteConfirmMessage(), confirmListener);
 						confirmMessageBox.setButtons(MessageBox.YESNO);
 						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(0)).setText(I18N.CONSTANTS.yes());
 						((Button) confirmMessageBox.getDialog().getButtonBar().getItem(1)).setText(I18N.CONSTANTS.no());
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java	(Revision 1536)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/UpdateEntityHandler.java	(Arbeitskopie)
@@ -12,6 +12,7 @@
 
 import org.apache.commons.logging.Log;
 import org.apache.commons.logging.LogFactory;
+import org.dozer.Mapper;
 import org.sigmah.server.policy.ActivityPolicy;
 import org.sigmah.server.policy.PersonalEventPolicy;
 import org.sigmah.server.policy.ProjectPolicy;
@@ -21,6 +22,8 @@
 import org.sigmah.shared.command.UpdateEntity;
 import org.sigmah.shared.command.handler.CommandHandler;
 import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.command.result.MonitoredPointResult;
+import org.sigmah.shared.command.result.ReminderResult;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.domain.Attribute;
 import org.sigmah.shared.domain.AttributeGroup;
@@ -33,6 +36,8 @@
 import org.sigmah.shared.domain.reminder.Reminder;
 import org.sigmah.shared.domain.reminder.ReminderChangeType;
 import org.sigmah.shared.domain.reminder.ReminderHistory;
+import org.sigmah.shared.dto.reminder.MonitoredPointDTO;
+import org.sigmah.shared.dto.reminder.ReminderDTO;
 import org.sigmah.shared.exception.CommandException;
 import org.sigmah.shared.exception.IllegalAccessCommandException;
 
@@ -49,10 +54,13 @@
 
 	private final Injector injector;
 
+	private final Mapper mapper;
+
 	@Inject
-	public UpdateEntityHandler(EntityManager em, Injector injector) {
+	public UpdateEntityHandler(EntityManager em, Injector injector, Mapper mapper) {
 		super(em);
 		this.injector = injector;
+		this.mapper = mapper;
 	}
 
 	@Override
@@ -91,9 +99,9 @@
 			policy.update(user, cmd.getId(), changeMap);
 
 		} else if ("reminder.Reminder".equals(cmd.getEntityName())) {
-			updateReminder(user, cmd);
+			return updateReminder(user, cmd);
 		} else if ("reminder.MonitoredPoint".equals(cmd.getEntityName())) {
-			updateMonitoredPoint(user, cmd);
+			return updateMonitoredPoint(user, cmd);
 		} else if ("ProjectFunding".equals(cmd.getEntityName())) {
 			updateProjectFunding(cmd);
 		} else if ("Project".equals(cmd.getEntityName())) {
@@ -117,7 +125,7 @@
 	}
 
 	private void updateIndicator(User user, UpdateEntity cmd, Map<String, Object> changes)
-	                throws IllegalAccessCommandException {
+					throws IllegalAccessCommandException {
 		Indicator indicator = em.find(Indicator.class, cmd.getId());
 
 		// todo: make UserDatabase non-nullable
@@ -152,7 +160,7 @@
 		if (reminderToUpdate != null) {
 
 			boolean date_modified = !(new Date((Long) cmd.getChanges().get("expectedDate")).equals(reminderToUpdate
-			                .getExpectedDate()));
+							.getExpectedDate()));
 			boolean label_modified = !((String) cmd.getChanges().get("label")).equals(reminderToUpdate.getLabel());
 
 			// Update 3 properties: ExpectedDate,Label,Deleted
@@ -193,7 +201,12 @@
 				reminderToUpdate.addHistory(hist);
 			}
 		}
-		return new VoidResult();
+		// return new ReminderResult(mapper.map(reminderToUpdate,
+		// ReminderDTO.class));
+
+		ReminderResult result = new ReminderResult();
+		result.setReminder(mapper.map(reminderToUpdate, ReminderDTO.class));
+		return result;
 	}
 
 	private VoidResult updateMonitoredPoint(User user, UpdateEntity cmd) {
@@ -202,7 +215,7 @@
 		if (point != null) {
 
 			boolean date_modified = !(new Date((Long) cmd.getChanges().get("expectedDate")).equals(point
-			                .getExpectedDate()));
+							.getExpectedDate()));
 			boolean label_modified = !((String) cmd.getChanges().get("label")).equals(point.getLabel());
 
 			// Update 3 properties: ExpectedDate,Label,Deleted
@@ -242,7 +255,10 @@
 				point.addHistory(hist);
 			}
 		}
-		return new VoidResult();
+
+		MonitoredPointResult result = new MonitoredPointResult();
+		result.setMonitoredPoint(mapper.map(point, MonitoredPointDTO.class));
+		return result;
 	}
 
 }
Index: src/main/java/org/sigmah/shared/command/result/MonitoredPointResult.java
===================================================================
--- src/main/java/org/sigmah/shared/command/result/MonitoredPointResult.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/command/result/MonitoredPointResult.java	(Revision 0)
@@ -0,0 +1,26 @@
+package org.sigmah.shared.command.result;
+
+import org.sigmah.shared.dto.reminder.MonitoredPointDTO;
+
+public class MonitoredPointResult extends VoidResult {
+
+	/**
+	 * 
+	 */
+	private static final long serialVersionUID = -763121933654273201L;
+
+	private MonitoredPointDTO monitoredPoint;
+
+	public MonitoredPointResult() {
+
+	}
+
+	public MonitoredPointDTO getMonitoredPoint() {
+		return monitoredPoint;
+	}
+
+	public void setMonitoredPoint(MonitoredPointDTO monitoredPoint) {
+		this.monitoredPoint = monitoredPoint;
+	}
+
+}
Index: src/main/java/org/sigmah/shared/command/result/ReminderResult.java
===================================================================
--- src/main/java/org/sigmah/shared/command/result/ReminderResult.java	(Revision 0)
+++ src/main/java/org/sigmah/shared/command/result/ReminderResult.java	(Revision 0)
@@ -0,0 +1,29 @@
+package org.sigmah.shared.command.result;
+
+import org.sigmah.shared.dto.reminder.ReminderDTO;
+
+public class ReminderResult extends VoidResult {
+
+	/**
+	 * 
+	 */
+	private static final long serialVersionUID = 4100337772922649740L;
+
+	private ReminderDTO reminder;
+
+	public ReminderResult() {
+	}
+
+	public ReminderResult(ReminderDTO reminder) {
+		this.reminder = reminder;
+	}
+
+	public ReminderDTO getReminder() {
+		return reminder;
+	}
+
+	public void setReminder(ReminderDTO reminder) {
+		this.reminder = reminder;
+	}
+
+}
