-- Project team sub-tab (#620) 
CREATE TABLE project_team_members
(
  id_project integer NOT NULL,
  userid integer NOT NULL,
  CONSTRAINT fk_70qe4sufg4oab00hik1d550jq FOREIGN KEY (id_project)
      REFERENCES project (databaseid) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_npm2g3bmepw61ye0vvce18614 FOREIGN KEY (userid)
      REFERENCES userlogin (userid) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT uk_aiug08fx4cx6p93ynvqlgp7xu UNIQUE (id_project, userid)
)
WITH (
  OIDS=FALSE
);


CREATE TABLE project_team_member_profiles
(
  id_project integer NOT NULL,
  id_profile integer NOT NULL,
  CONSTRAINT fk_9jyuxw6qomv6jou6tt5ogs4yq FOREIGN KEY (id_project)
      REFERENCES project (databaseid) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_ho3qygde3ttb969mpa5k1wn7k FOREIGN KEY (id_profile)
      REFERENCES profile (id_profile) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT uk_asrruyupsb7jmfcgbrr9i8vn4 UNIQUE (id_project, id_profile)
)
WITH (
  OIDS=FALSE
);


-- User attached to several OrgUnit (#243)
ALTER TABLE user_unit ADD COLUMN user_unit_type varchar(32);


-- Data framework feature foundations development (#860)
CREATE TABLE framework
(
  id_framework integer NOT NULL,
  availability_status character varying(255) NOT NULL,
  implementation_status character varying(255) NOT NULL,
  label character varying(255) NOT NULL,
  id_organization integer,
  CONSTRAINT framework_pkey PRIMARY KEY (id_framework),
  CONSTRAINT fk_3l3o8bnug9ymilr8irjecxfxy FOREIGN KEY (id_organization)
      REFERENCES organization (id_organization) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE framework_fulfillment
(
  id_framework_fulfillment integer NOT NULL,
  reject_reason character varying(255),
  id_framework integer NOT NULL,
  id_project_model integer NOT NULL,
  CONSTRAINT framework_fulfillment_pkey PRIMARY KEY (id_framework_fulfillment),
  CONSTRAINT fk_hn13s8iybgi1vdo47xkqqd0b7 FOREIGN KEY (id_framework)
      REFERENCES framework (id_framework) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT fk_rs0vcqcllktrd5d12o1blowqe FOREIGN KEY (id_project_model)
      REFERENCES project_model (id_project_model) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT uk_rs0vcqcllktrd5d12o1blowqe UNIQUE (id_project_model, id_framework)
);

CREATE TABLE framework_hierarchy
(
  id_framework_hierarchy integer NOT NULL,
  label character varying(255) NOT NULL,
  level integer NOT NULL,
  id_framework integer NOT NULL,
  parent_hierarchy integer, -- XXX: Useless if the hierarchy is not a tree
  CONSTRAINT framework_hierarchy_pkey PRIMARY KEY (id_framework_hierarchy),
  CONSTRAINT fk_6ap8cn4cxh5vj7163tyvlk03b FOREIGN KEY (parent_hierarchy)
      REFERENCES framework_hierarchy (id_framework_hierarchy) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT fk_g7s48h8iyf2po13qyi6sd5qtb FOREIGN KEY (id_framework)
      REFERENCES framework (id_framework) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT framework_hierarchy_level_check CHECK (level >= 0)
);

CREATE TABLE framework_element
(
  id_framework_element integer NOT NULL,
  data_type character varying(255) NOT NULL,
  label character varying(255) NOT NULL,
  value_rule character varying(255) NOT NULL,
  id_framework_hierarchy integer NOT NULL,
  CONSTRAINT framework_element_pkey PRIMARY KEY (id_framework_element),
  CONSTRAINT fk_j2vqfnb56b43qyrxp0cuoyd60 FOREIGN KEY (id_framework_hierarchy)
      REFERENCES framework_hierarchy (id_framework_hierarchy) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE
);

CREATE TABLE framework_element_implementation
(
  id_framework_element_implementation integer NOT NULL,
  id_flexible_element integer NOT NULL,
  id_framework_element integer NOT NULL,
  id_framework_fulfillment integer NOT NULL,
  CONSTRAINT framework_element_implementation_pkey PRIMARY KEY (id_framework_element_implementation),
  CONSTRAINT fk_1q2w7ryycg4e220id3s69kdgu FOREIGN KEY (id_framework_element)
      REFERENCES framework_element (id_framework_element) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT fk_haj6o47cyolg7xjob4uymvndw FOREIGN KEY (id_flexible_element)
      REFERENCES flexible_element (id_flexible_element) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT fk_mq0iewhji722rna3m050mwmfj FOREIGN KEY (id_framework_fulfillment)
      REFERENCES framework_fulfillment (id_framework_fulfillment) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE CASCADE,
  CONSTRAINT uk_mq0iewhji722rna3m050mwmfj UNIQUE (id_flexible_element, id_framework_element)
);


-- Revise budget default field design (#864)
CREATE TABLE budget_ratio_element
(
  id_flexible_element bigint NOT NULL,
  id_spent_field bigint,
  id_planned_field bigint,
  CONSTRAINT budget_ratio_element_pkey PRIMARY KEY (id_flexible_element),
  CONSTRAINT budget_ratio_element_fkey1 FOREIGN KEY (id_spent_field)
      REFERENCES flexible_element (id_flexible_element) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT budget_ratio_element_fkey2 FOREIGN KEY (id_planned_field)
      REFERENCES flexible_element (id_flexible_element) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);


-- Contact database (aka "CRM") (#634)
CREATE TABLE contact_model (
  id_contact_model INTEGER PRIMARY KEY,
  id_organization INTEGER NOT NULL
    REFERENCES organization(id_organization),
  type VARCHAR(255) NOT NULL,
  name VARCHAR(8192) NOT NULL,
  status VARCHAR(255) NOT NULL,
  date_deleted TIMESTAMP WITHOUT TIME ZONE,
  date_maintenance TIMESTAMP WITHOUT TIME ZONE
);

CREATE TABLE contact_card (
  id_contact_card INTEGER PRIMARY KEY,
  id_contact_model INTEGER NOT NULL
    REFERENCES contact_model(id_contact_model)
    ON DELETE CASCADE,
  id_layout INTEGER REFERENCES layout(id_layout)
);

CREATE TABLE contact_details (
  id_contact_details INTEGER PRIMARY KEY,
  id_contact_model INTEGER NOT NULL
    REFERENCES contact_model(id_contact_model)
    ON DELETE CASCADE,
  id_layout INTEGER REFERENCES layout(id_layout)
);

CREATE TABLE default_contact_flexible_element (
  id_flexible_element INTEGER NOT NULL
    PRIMARY KEY
    REFERENCES flexible_element (id_flexible_element)
    ON DELETE CASCADE,
  type VARCHAR(255)
);

CREATE OR REPLACE FUNCTION contact_model_create_default_layout_constraint(p_type VARCHAR, p_id_layout_group INTEGER, p_id_contact_model INTEGER, p_sort_order INTEGER, p_recycle_flexible_element_from_details BOOLEAN) RETURNS INTEGER AS $$
    DECLARE
        p_id_flexible_element INTEGER;
        p_id_layout_constraint INTEGER;
    BEGIN
        p_id_layout_constraint := nextval('hibernate_sequence');

        IF p_recycle_flexible_element_from_details THEN
            -- Let's find the flexible element with the same type in the details layout
            -- Sharing the flexible element between card and details indicates to the application that a flexible
            -- element in the details layout appears in the contact card
            SELECT dcf.id_flexible_element INTO p_id_flexible_element
            FROM contact_details cd
            JOIN layout_group dlg ON (dlg.id_layout = cd.id_layout)
            JOIN layout_constraint dlc ON (dlc.id_layout_group = dlg.id_layout_group)
            JOIN default_contact_flexible_element dcf ON (dcf.id_flexible_element = dlc.id_flexible_element AND dcf.type = p_type)
            WHERE cd.id_contact_model = p_id_contact_model;
        ELSE
            p_id_flexible_element := nextval('hibernate_sequence');

            INSERT INTO flexible_element (id_flexible_element, amendable, validates, exportable, globally_exportable, creation_date)
            SELECT p_id_flexible_element, false, false, true, false, NOW();

            INSERT INTO default_contact_flexible_element (id_flexible_element, type)
            SELECT p_id_flexible_element, p_type;
        END IF;

        INSERT INTO layout_constraint (id_layout_constraint, sort_order, id_flexible_element, id_layout_group)
        SELECT p_id_layout_constraint, p_sort_order, p_id_flexible_element, p_id_layout_group;

        RETURN p_id_layout_constraint;
    END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION contact_model_create_card_and_details(p_id_contact_model INTEGER) RETURNS VOID AS $$
    DECLARE
        p_id_contact_card INTEGER;
        p_id_contact_card_layout INTEGER;
        p_id_contact_photo_layout_group INTEGER;
        p_id_contact_card_layout_group INTEGER;
        p_id_contact_details INTEGER;
        p_id_contact_details_layout INTEGER;
        p_id_contact_details_layout_group INTEGER;
        p_type VARCHAR;
        p_counter INTEGER;
    BEGIN
        -- ContactDetails creation
        p_id_contact_details := nextval('hibernate_sequence');
        p_id_contact_details_layout := nextval('hibernate_sequence');
        p_id_contact_details_layout_group := nextval('hibernate_sequence');

        INSERT INTO layout (id_layout, columns_count, rows_count)
        SELECT p_id_contact_details_layout, 1, 1;

        INSERT INTO layout_group (id_layout_group, column_index, row_index, title, id_layout)
        SELECT p_id_contact_details_layout_group, 0, 0, 'Default details group', p_id_contact_details_layout;

        p_counter := 1;
        FOREACH p_type IN ARRAY ARRAY['FAMILY_NAME', 'FIRST_NAME', 'ORGANIZATION_NAME', 'MAIN_ORG_UNIT', 'SECONDARY_ORG_UNITS', 'CREATION_DATE', 'LOGIN', 'EMAIL_ADDRESS', 'PHONE_NUMBER', 'POSTAL_ADDRESS', 'PHOTO', 'COUNTRY', 'DIRECT_MEMBERSHIP', 'TOP_MEMBERSHIP']
        LOOP
            PERFORM contact_model_create_default_layout_constraint(p_type, p_id_contact_details_layout_group, p_id_contact_model, p_counter, false);
            p_counter := p_counter + 1;
        END LOOP;

        INSERT INTO contact_details (id_contact_details, id_contact_model, id_layout)
        SELECT p_id_contact_details, p_id_contact_model, p_id_contact_details_layout;

        -- ContactCard creation
        p_id_contact_card := nextval('hibernate_sequence');
        p_id_contact_card_layout := nextval('hibernate_sequence');

        INSERT INTO layout (id_layout, columns_count, rows_count)
        SELECT p_id_contact_card_layout, 2, 1;

        -- Photo group
        p_id_contact_photo_layout_group := nextval('hibernate_sequence');

        INSERT INTO layout_group (id_layout_group, column_index, row_index, title, id_layout)
        SELECT p_id_contact_photo_layout_group, 0, 0, 'Avatar group', p_id_contact_card_layout;

        PERFORM contact_model_create_default_layout_constraint('PHOTO', p_id_contact_photo_layout_group, p_id_contact_model, 0, true);

        -- Card information group
        p_id_contact_card_layout_group := nextval('hibernate_sequence');

        INSERT INTO layout_group (id_layout_group, column_index, row_index, title, id_layout)
        SELECT p_id_contact_card_layout_group, 0, 1, 'Default card group', p_id_contact_card_layout;

        PERFORM contact_model_create_default_layout_constraint('FAMILY_NAME', p_id_contact_card_layout_group, p_id_contact_model, 1, true);
        PERFORM contact_model_create_default_layout_constraint('ORGANIZATION_NAME', p_id_contact_card_layout_group, p_id_contact_model, 1, true);
        PERFORM contact_model_create_default_layout_constraint('FIRST_NAME', p_id_contact_card_layout_group, p_id_contact_model, 2, true);
        PERFORM contact_model_create_default_layout_constraint('TOP_MEMBERSHIP', p_id_contact_card_layout_group, p_id_contact_model, 3, true);
        PERFORM contact_model_create_default_layout_constraint('EMAIL_ADDRESS', p_id_contact_card_layout_group, p_id_contact_model, 4, true);
        PERFORM contact_model_create_default_layout_constraint('PHONE_NUMBER', p_id_contact_card_layout_group, p_id_contact_model, 5, true);
        PERFORM contact_model_create_default_layout_constraint('POSTAL_ADDRESS', p_id_contact_card_layout_group, p_id_contact_model, 6, true);
        PERFORM contact_model_create_default_layout_constraint('COUNTRY', p_id_contact_card_layout_group, p_id_contact_model, 7, true);

        INSERT INTO contact_card (id_contact_card, id_contact_model, id_layout)
        SELECT p_id_contact_card, p_id_contact_model, p_id_contact_card_layout;
    END;
$$ LANGUAGE plpgsql;


CREATE OR REPLACE FUNCTION contact_model_create(p_id_organization INTEGER, p_type VARCHAR, p_name VARCHAR) RETURNS INTEGER AS $$
    DECLARE
        p_id_contact_model INTEGER;
    BEGIN
        p_id_contact_model := nextval('hibernate_sequence');

        INSERT INTO contact_model (id_contact_model, name, status, type, id_organization)
        SELECT p_id_contact_model, p_name, 'USED', p_type, p_id_organization;

        PERFORM contact_model_create_card_and_details(p_id_contact_model);

        RETURN p_id_contact_model;
    END;
$$ LANGUAGE plpgsql;

CREATE TABLE contact (
  id_contact INTEGER PRIMARY KEY,
  id_contact_model INTEGER NOT NULL REFERENCES contact_model(id_contact_model),
  id_user INTEGER REFERENCES userlogin(userid),
  id_organization INTEGER REFERENCES organization(id_organization),
  name VARCHAR,
  firstname VARCHAR,
  id_main_org_unit INTEGER REFERENCES partner(partnerid),
  login VARCHAR,
  email VARCHAR,
  phone_number VARCHAR,
  postal_address VARCHAR,
  photo VARCHAR,
  id_country INTEGER REFERENCES country(countryid),
  id_parent INTEGER REFERENCES contact(id_contact),
  date_created TIMESTAMP WITHOUT TIME ZONE,
  date_deleted TIMESTAMP WITHOUT TIME ZONE
);

CREATE OR REPLACE FUNCTION contact_check_type (p_id_user INTEGER, p_id_organization INTEGER, p_id_contact_model INTEGER) RETURNS BOOLEAN AS $$
    DECLARE
        p_valid BOOLEAN;
    BEGIN
        IF p_id_user IS NOT NULL AND p_id_organization IS NOT NULL THEN
            -- This contact is both related to a user and an organization
            -- This is not valid
            p_valid = false;
        ELSIF p_id_user IS NOT NULL THEN
            -- The related model should be an 'INDIVIDUAL' model
            SELECT type = 'INDIVIDUAL' INTO p_valid
            FROM contact_model
            WHERE id_contact_model = p_id_contact_model;
        ELSIF p_id_organization IS NOT NULL THEN
            -- The related model should be an 'ORGANIZATION' model
            SELECT type = 'ORGANIZATION' INTO p_valid
            FROM contact_model
            WHERE id_contact_model = p_id_contact_model;
        ELSE
            -- Not related to a user or an organization
            -- the type of the related model can either be 'INDIVIDUAL' or 'ORGANIZATION'
            p_valid = true;
        END IF;

        RETURN p_valid;
    END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION is_parent_an_organization (p_id_contact INTEGER) RETURNS BOOLEAN AS $$
    SELECT cm.id_contact_model IS NOT NULL
    FROM contact c
    LEFT JOIN contact_model cm ON (c.id_contact_model = c.id_contact_model AND cm.type = 'ORGANIZATION')
    WHERE c.id_contact = p_id_contact;
$$ LANGUAGE SQL;

ALTER TABLE contact
  ADD CONSTRAINT is_parent_an_organization_constraint
  CHECK (is_parent_an_organization(id_parent)) ;

ALTER TABLE contact
  ADD CONSTRAINT check_type_constraint
  CHECK (contact_check_type(id_user, id_organization, id_contact_model));

CREATE TABLE contact_unit (
  id_contact INTEGER NOT NULL REFERENCES contact(id_contact),
  id_org_unit INTEGER NOT NULL REFERENCES partner(partnerid),
  PRIMARY KEY (id_contact, id_org_unit)
);


CREATE TABLE contact_list_element (
  id_flexible_element BIGINT
    PRIMARY KEY
    REFERENCES flexible_element(id_flexible_element),
  allowed_type VARCHAR,
  contact_limit INTEGER NOT NULL DEFAULT 0,
  is_member BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE contact_list_element_model (
  id_flexible_element INTEGER NOT NULL REFERENCES contact_list_element(id_flexible_element),
  id_contact_model INTEGER NOT NULL REFERENCES contact_model(id_contact_model),
  PRIMARY KEY (id_flexible_element, id_contact_model)
);

CREATE TABLE global_contact_export
(
  id bigint NOT NULL,
  generated_date timestamp without time zone NOT NULL,
  organization_id integer NOT NULL,
  CONSTRAINT global_contact_export_pkey PRIMARY KEY (id),
  CONSTRAINT global_contact_export_organization_fkey FOREIGN KEY (organization_id)
      REFERENCES organization (id_organization) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE global_contact_export_content
(
  id bigint NOT NULL,
  csv_content text,
  contact_model_name character varying(8192) NOT NULL,
  global_export_id bigint NOT NULL,
  CONSTRAINT global_contact_export_content_pkey PRIMARY KEY (id),
  CONSTRAINT global_contact_export_content_global_export_fkey FOREIGN KEY (global_export_id)
      REFERENCES global_contact_export (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE global_contact_export_settings
(
  id bigint NOT NULL,
  auto_delete_frequency integer,
  auto_export_frequency integer,
  default_organization_export_format character varying(255),
  export_format character varying(255),
  last_export_date timestamp without time zone,
  locale_string character varying(4) NOT NULL,
  organization_id integer NOT NULL,
  CONSTRAINT global_contact_export_settings_pkey PRIMARY KEY (id),
  CONSTRAINT global_contact_export_settings_organization_fkey FOREIGN KEY (organization_id)
      REFERENCES organization (id_organization) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);


-- Extension required to search for similar but not exactly equal contact duplicates (part of issue #634)
CREATE EXTENSION IF NOT EXISTS pg_trgm; 

CREATE INDEX contact_fullname_idx ON contact USING gin(LOWER(name||' '||firstname) gin_trgm_ops);
CREATE INDEX contact_email_idx ON contact (LOWER(email));
CREATE INDEX userlogin_fullname_idx ON userlogin USING gin(LOWER(name||' '||firstname) gin_trgm_ops);
CREATE INDEX userlogin_email_idx ON userlogin (LOWER(email));
CREATE INDEX organization_name_idx ON organization USING gin(LOWER(name) gin_trgm_ops);


-- Group iterations (#501)
CREATE TABLE layout_group_iteration (
  id_layout_group_iteration integer NOT NULL,
  id_layout_group integer NOT NULL,
  id_container integer NOT NULL,
  name varchar(30) NOT NULL,
  CONSTRAINT layout_group_iteration_pkey PRIMARY KEY (id_layout_group_iteration),
  CONSTRAINT layout_group_iteration_id_layout_group_fkey FOREIGN KEY (id_layout_group)
    REFERENCES layout_group (id_layout_group) MATCH SIMPLE
    ON UPDATE NO ACTION ON DELETE CASCADE
);

CREATE OR REPLACE FUNCTION does_layout_group_have_iterations (p_id_layout_group integer) RETURNS boolean AS $$
  DECLARE
    p_has_iterations boolean;
  BEGIN
    SELECT has_iterations INTO p_has_iterations
    FROM layout_group
    WHERE id_layout_group = p_id_layout_group;

    RETURN p_has_iterations;
  END;
$$ LANGUAGE plpgsql;

ALTER TABLE layout_group_iteration
  ADD CONSTRAINT does_layout_group_have_iterations_constraint
  CHECK (does_layout_group_have_iterations(id_layout_group)) ;

ALTER TABLE layout_group ADD has_iterations boolean NOT NULL DEFAULT false;

ALTER TABLE value ADD id_layout_group_iteration integer;
ALTER TABLE value DROP CONSTRAINT value_id_flexible_element_key;
ALTER TABLE value ADD CONSTRAINT uk_ev3lt5f4afcgkonu6exlm9be8
  UNIQUE (id_flexible_element, id_project, id_layout_group_iteration);

ALTER TABLE history_token ADD id_layout_group_iteration integer;

CREATE TABLE iteration_history_token
(
  id_iteration_history_token integer NOT NULL,
  history_date timestamp without time zone NOT NULL,
  id_layout_group_iteration integer NOT NULL,
  id_layout_group integer NOT NULL,
  id_project integer NOT NULL,
  name varchar(30) NOT NULL,
  core_version integer,
  CONSTRAINT iteration_history_token_pkey PRIMARY KEY (id_iteration_history_token),
  CONSTRAINT fk_iteration_history_token_core_version FOREIGN KEY (core_version)
      REFERENCES amendment (id_amendment) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT fk_iteration_history_token_layout_group FOREIGN KEY (id_layout_group)
      REFERENCES layout_group (id_layout_group) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);