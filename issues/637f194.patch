### Eclipse Workspace Patch 1.0
#P sigmah
Index: src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/calendar/ReminderCalendarHandler.java
===================================================================
--- src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/calendar/ReminderCalendarHandler.java	(revision 1593)
+++ src/main/java/org/sigmah/server/endpoint/gwtrpc/handler/calendar/ReminderCalendarHandler.java	(working copy)
@@ -16,7 +16,9 @@
 import org.sigmah.shared.domain.calendar.ReminderCalendarIdentifier;
 import org.sigmah.shared.domain.reminder.Reminder;
 import org.sigmah.shared.domain.reminder.ReminderList;
+import org.sigmah.shared.dto.reminder.ReminderDTO;
 
+
 import com.google.inject.Inject;
 
 /**
@@ -63,9 +65,13 @@
 
             final ReminderList list = (ReminderList) query.getSingleResult();
 
+
             if (list.getReminders() != null) {
                 for (final Reminder reminder : list.getReminders()) {
 
+                    Boolean isDeleted = (Boolean) reminder.isDeleted();
+                    if(isDeleted == null || isDeleted == Boolean.FALSE){
+
                     final Event event = new Event();
                     event.setParent(calendar);
                     event.setIdentifier(reminder.getId());
@@ -111,6 +117,7 @@
                     events.add(event);
                 }
             }
+        }
 
         } catch (NoResultException e) {
             // No monitored points in the current project.
