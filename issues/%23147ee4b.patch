Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetRemindersHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetRemindersHandler.java	(revision 1536)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/GetRemindersHandler.java	(working copy)
@@ -19,6 +19,7 @@
 import org.sigmah.shared.command.result.CommandResult;
 import org.sigmah.shared.command.result.RemindersResultList;
 import org.sigmah.shared.domain.OrgUnit;
+import org.sigmah.shared.domain.Project;
 import org.sigmah.shared.domain.User;
 import org.sigmah.shared.domain.reminder.MonitoredPoint;
 import org.sigmah.shared.domain.reminder.Reminder;
@@ -58,18 +59,23 @@
         for (final OrgUnit unit : units) {
 
             // Builds and executes the query.
-            final Query query = em.createQuery("SELECT p.remindersList.reminders FROM Project p WHERE :unit MEMBER OF p.partners");
+//        	final Query query = em.createQuery("SELECT p.name, p.fullName, p.remindersList FROM Project p WHERE :unit MEMBER OF p.partners");
+        	final Query query = em.createQuery("SELECT p FROM Project p WHERE :unit MEMBER OF p.partners");
             query.setParameter("unit", unit);
-
-            final List<Reminder> reminders = (List<Reminder>) query.getResultList();
-            for (final Reminder reminder : reminders) {
-                if(reminder.getCompletionDate() == null)
-                {// Not completed only
-                  ReminderDTO reminderDTO = mapper.map(reminder, ReminderDTO.class);
-                  reminderDTO.setDeleted(reminder.isDeleted());
-                  dtos.add(reminderDTO);
-                }
-            }
+            final List<Project> projects = (List<Project>) query.getResultList();
+            for (Project project : projects) {	
+            	final List<Reminder> reminders = project.getRemindersList().getReminders();
+            	for (final Reminder reminder : reminders) {
+            		if(reminder.getCompletionDate() == null)
+            		{// Not completed only
+            			ReminderDTO reminderDTO = mapper.map(reminder, ReminderDTO.class);
+            			reminderDTO.setDeleted(reminder.isDeleted());
+            			reminderDTO.setProjectCode(project.getName());
+            			reminderDTO.setProjectTitle(project.getFullName());
+            			dtos.add(reminderDTO);
+            		}
+            	}
+			}
 
         }
         
Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1536)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -1482,6 +1482,12 @@
 
 monitoredPointOpen = Reopen
 
+monitoredPointProjectCode = Project Code
+
+monitoredPointProjectTitle = Project Title
+
+monitoredPointReminderDetails = Reminder Details
+
 monitoredPointUncompleted = Uncompleted
 
 monitoredPointUpdate = Update a point
Index: src/main/java/org/sigmah/client/page/dashboard/DashboardView.java
===================================================================
--- src/main/java/org/sigmah/client/page/dashboard/DashboardView.java	(revision 1536)
+++ src/main/java/org/sigmah/client/page/dashboard/DashboardView.java	(working copy)
@@ -48,6 +48,7 @@
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Label;
+import com.extjs.gxt.ui.client.widget.MessageBox;
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.grid.ColumnConfig;
 import com.extjs.gxt.ui.client.widget.grid.ColumnData;
@@ -60,6 +61,8 @@
 import com.extjs.gxt.ui.client.widget.layout.VBoxLayout;
 import com.extjs.gxt.ui.client.widget.layout.VBoxLayoutData;
 import com.extjs.gxt.ui.client.widget.treegrid.TreeGrid;
+import com.google.gwt.event.dom.client.ClickEvent;
+import com.google.gwt.event.dom.client.ClickHandler;
 import com.google.gwt.i18n.client.DateTimeFormat;
 import com.google.gwt.user.client.ui.AbstractImagePrototype;
 import com.google.inject.Inject;
@@ -500,6 +503,27 @@
 		labelColumn.setId("label");
 		labelColumn.setHeader(I18N.CONSTANTS.monitoredPointLabel());
 		labelColumn.setWidth(100);
+		labelColumn.setRenderer(new GridCellRenderer<ReminderDTO>() {
+			@Override
+			public Object render(final ReminderDTO model, String property, ColumnData config, int rowIndex, int colIndex,
+			                ListStore<ReminderDTO> store, Grid<ReminderDTO> grid) {
+				// Create a lable with a hyperlink style
+				com.google.gwt.user.client.ui.Label l = new com.google.gwt.user.client.ui.Label(model.getLabel());				
+				l.addStyleName("hyperlink_style_label");
+				// Add a click handler to response a click event
+				l.addClickHandler(new ClickHandler() {
+					@Override
+					public void onClick(ClickEvent event) {
+						// Create a message box
+						StringBuilder sb = new StringBuilder();
+						sb.append(I18N.CONSTANTS.monitoredPointProjectCode()).append(" : ").append(model.getProjectCode());
+						sb.append("<br>").append(I18N.CONSTANTS.monitoredPointProjectTitle()).append(" : ").append(model.getProjectTitle());
+						MessageBox.info(I18N.CONSTANTS.monitoredPointReminderDetails(), sb.toString(), null);						
+					}
+				});
+				return l;
+			}
+		});
 
 		// Expected date.
 		final ColumnConfig expectedDateColumn = new ColumnConfig();
@@ -520,8 +544,15 @@
 				return l;
 			}
 		});
+		
+		// Project code
+		final ColumnConfig projectCodeColumn = new ColumnConfig();
+		projectCodeColumn.setId("projectCode");
+		projectCodeColumn.setHeader(I18N.CONSTANTS.monitoredPointProjectCode());
+		projectCodeColumn.setWidth(60);
+		projectCodeColumn.setHidden(true);
 
-		return Arrays.asList(new ColumnConfig[] { iconColumn, labelColumn, expectedDateColumn });
+		return Arrays.asList(new ColumnConfig[] { iconColumn, labelColumn, expectedDateColumn, projectCodeColumn });
 	}
 
 	private ContentPanel createMonitoredPointListPanel() {
Index: src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java
===================================================================
--- src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java	(revision 1536)
+++ src/main/java/org/sigmah/shared/dto/reminder/ReminderDTO.java	(working copy)
@@ -92,7 +92,25 @@
 
 		set("history", history);
 	}
+	
+	// Project code
+	public String getProjectCode() {
+		return get("projectCode");
+	}
+
+	public void setProjectCode(String projectCode) {
+		set("projectCode", projectCode);
+	}
+
+	// Project title
+	public String getProjectTitle() {
+		return get("projectTitle");
+	}
 
+	public void setProjectTitle(String projectTitle) {
+		set("projectTitle", projectTitle);
+	}
+	
 	@Override
 	public boolean equals(Object obj) {
 
