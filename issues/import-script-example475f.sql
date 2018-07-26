
-- Constants used
-- 36 : userid used as author of modification (Bastiaan)
-- 1598 : id of budget field in "Local partner" project model
-- 380% : budget subfield id for "PLANNED" budget in "Local partner" project model
-- 		(for information, 382 is id for "SPENT" budget subfield)
-- 
-- Variable used which should be replace by text extracted from the imported Excel file:
-- 1234567.89 => new budget value (MUST used a '.' and not ',' as decimal separator!!!!)
-- PROJECTCODE => the projectcode used to find the project in database



UPDATE value  SET action_last_modif = 'U', date_last_modif = localtimestamp, 
value = overlay(value placing ('380%' || '1234567.89') from position('380' in value) for (position('~' in substring(value from position('380' in value)))- position('380' in value)) ),
id_user_last_modif = 36
WHERE id_flexible_element = 1598 and id_project = (select databaseid from userdatabase u where u.name = 'PROJECTCODE' and u.datedeleted is null);

INSERT INTO history_token(
            id_history_token, history_date, id_element, 
            id_project, change_type, value, id_user, 
            comment)
SELECT nextval('hibernate_sequence') as id_history_token, v.date_last_modif as history_date, v.id_flexible_element as id_element, 
	v.id_project as id_project, 'EDIT' as change_type, v.value as value, v.id_user_last_modif as id_user, 
	'Imported by SQL script from file ''toto.xslx''' as comment
FROM value v
WHERE v.id_flexible_element = 1598 and v.id_project = (select databaseid from userdatabase u where u.name = 'PROJECTCODE' and u.datedeleted is null);