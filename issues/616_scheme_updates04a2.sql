INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'CREATE_TEST_PROJECT', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'REMOVE_PROJECT_FILE', p.id_profile FROM global_permission p WHERE p.permission='REMOVE_FILE';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'LOCK_PROJECT_CORE', p.id_profile FROM global_permission p WHERE p.permission='EDIT_PROJECT';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'VIEW_PROJECT_AGENDA', p.id_profile FROM global_permission p WHERE p.permission='VIEW_AGENDA';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'EDIT_PROJECT_AGENDA', p.id_profile FROM global_permission p WHERE p.permission='EDIT_AGENDA';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'RELATE_PROJECT', p.id_profile FROM global_permission p WHERE p.permission='EDIT_PROJECT';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'EDIT_ORG_UNIT', p.id_profile FROM global_permission p WHERE p.permission='MANAGE_UNIT';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'REMOVE_ORG_UNIT_FILE', p.id_profile FROM global_permission p WHERE p.permission='REMOVE_FILE';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'VIEW_ORG_UNIT_AGENDA', p.id_profile FROM global_permission p WHERE p.permission='VIEW_AGENDA';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'EDIT_ORG_UNIT_AGENDA', p.id_profile FROM global_permission p WHERE p.permission='EDIT_AGENDA';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_USERS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_ORG_UNITS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_PROJECT_MODELS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_ORG_UNIT_MODELS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_REPORT_MODELS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_CATEGORIES', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_IMPORTATION_SCHEMES', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

INSERT INTO global_permission (id_global_permission, permission, id_profile) SELECT nextval('hibernate_sequence'), 'MANAGE_SETTINGS', p.id_profile FROM global_permission p WHERE p.permission='VIEW_ADMIN';

DELETE FROM global_permission p WHERE p.permission='MANAGE_UNIT';

DELETE FROM global_permission p WHERE p.permission='REMOVE_FILE';

DELETE FROM global_permission p WHERE p.permission='MANAGE_USER';

DELETE FROM global_permission p WHERE p.permission='VIEW_AGENDA';

DELETE FROM global_permission p WHERE p.permission='EDIT_AGENDA';
