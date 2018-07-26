CREATE TABLE monitored_point_history (
	id_monitored_point_history integer PRIMARY KEY,
	generated_date timestamp without time zone NOT NULL,
	id_monitored_point integer REFERENCES monitored_point NOT NULL,
	id_user integer NOT NULL,
	value text,
	change_type character varying(255) NOT NULL
);