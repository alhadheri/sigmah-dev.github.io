-- Table: password_expiration_policy

-- DROP TABLE password_expiration_policy;

CREATE TABLE password_expiration_policy
(
  id bigint NOT NULL,
  policy_type character varying(255),
  reference_date date,
  frequency integer,
  reset_for_new_users boolean NOT NULL,
  organization_id integer NOT NULL,
  CONSTRAINT password_expiration_policy_pkey PRIMARY KEY (id),
  CONSTRAINT fk2fb477b2f85c2c3c FOREIGN KEY (organization_id)
      REFERENCES organization (id_organization) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);

ALTER TABLE password_expiration_policy OWNER TO sigmah;

ALTER TABLE UserLogin ADD COLUMN last_password_change timestamp without time zone;

START TRANSACTION;

UPDATE UserLogin SET last_password_change = current_timestamp;
INSERT INTO password_expiration_policy (id, policy_type, reset_for_new_users, organization_id) SELECT nextval('hibernate_sequence'), 'NEVER', false, MAX(id_organization) FROM organization;

COMMIT;
