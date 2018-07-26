CREATE TABLE reminder_history (
	id_reminder_history integer PRIMARY KEY,
	generated_date timestamp without time zone NOT NULL,
	id_reminder integer REFERENCES reminder NOT NULL,
	id_user integer NOT NULL,
	value text,
	change_type character varying(255) NOT NULL
);