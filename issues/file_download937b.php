ALTER TABLE flexible_element ADD COLUMN creation_date timestamp without time zone not null default current_timestamp;

ALTER TABLE project_model ADD COLUMN date_maintenance timestamp without time zone;
ALTER TABLE org_unit_model ADD COLUMN date_maintenance timestamp without time zone;

ALTER TABLE flexible_element ADD COLUMN is_disabled boolean default false;
ALTER TABLE question_choice_element ADD COLUMN is_disabled boolean default false;
