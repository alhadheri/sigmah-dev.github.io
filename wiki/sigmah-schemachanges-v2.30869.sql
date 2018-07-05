-- Iteration "type" for more intuitive iteration group manipulation (#928)
ALTER TABLE layout_group ADD COLUMN iteration_type character varying (8192);

-- Limit contacts available for a contact list according to a contact model checkbox field (#1018)
ALTER TABLE contact_list_element
    ADD COLUMN id_checkbox_element bigint;
ALTER TABLE contact_list_element
    ADD FOREIGN KEY (id_checkbox_element)
    REFERENCES checkbox_element (id_flexible_element) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;

-- Importation frameworks for Contact models (#924)
ALTER TABLE importation_scheme_model ADD id_contact_model integer;
ALTER TABLE importation_scheme_model ADD CONSTRAINT importation_scheme_model_id_contact_model_fkey
  FOREIGN KEY (id_contact_model) REFERENCES contact_model(id_contact_model) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION;