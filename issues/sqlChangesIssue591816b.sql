/* SQL changement suppression du droit global VIEW_ACTIVITYINFO */
/* POSTGRESQL */
DELETE FROM global_permission WHERE permission = 'VIEW_ACTIVITYINFO';

/* MYSQL */