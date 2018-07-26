--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.2
-- Dumped by pg_dump version 9.5.2

-- Started on 2016-11-21 12:54:30

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

--
-- TOC entry 2627 (class 0 OID 83366)
-- Dependencies: 219
-- Data for Name: framework; Type: TABLE DATA; Schema: public; Owner: sigmah
--

INSERT INTO framework (id_framework, availability_status, implementation_status, label, id_organization) VALUES (13831, 'AVAILABLE', 'WAITING_FOR_IMPLEMENTATION', 'Projet avec participants formation', 1);


--
-- TOC entry 2631 (class 0 OID 83384)
-- Dependencies: 223
-- Data for Name: framework_hierarchy; Type: TABLE DATA; Schema: public; Owner: sigmah
--

INSERT INTO framework_hierarchy (id_framework_hierarchy, label, level, id_framework, parent_hierarchy) VALUES (13832, 'Formation', 0, 13831, NULL);


--
-- TOC entry 2628 (class 0 OID 83372)
-- Dependencies: 220
-- Data for Name: framework_element; Type: TABLE DATA; Schema: public; Owner: sigmah
--

INSERT INTO framework_element (id_framework_element, data_type, label, value_rule, id_framework_hierarchy) VALUES (13833, 'CONTACT_LIST', 'Participants formation', 'FIRST_NOT_NULL_VALUE', 13832);


--
-- TOC entry 2630 (class 0 OID 83381)
-- Dependencies: 222
-- Data for Name: framework_fulfillment; Type: TABLE DATA; Schema: public; Owner: sigmah
--

INSERT INTO framework_fulfillment (id_framework_fulfillment, reject_reason, id_framework, id_project_model) VALUES (13872, NULL, 13831, 13843);
INSERT INTO framework_fulfillment (id_framework_fulfillment, reject_reason, id_framework, id_project_model) VALUES (13913, NULL, 13831, 13885);


--
-- TOC entry 2629 (class 0 OID 83378)
-- Dependencies: 221
-- Data for Name: framework_element_implementation; Type: TABLE DATA; Schema: public; Owner: sigmah
--

INSERT INTO framework_element_implementation (id_framework_element_implementation, id_flexible_element, id_framework_element, id_framework_fulfillment) VALUES (13875, 13873, 13833, 13872);
INSERT INTO framework_element_implementation (id_framework_element_implementation, id_flexible_element, id_framework_element, id_framework_fulfillment) VALUES (13914, 13911, 13833, 13913);


-- Completed on 2016-11-21 12:54:31

--
-- PostgreSQL database dump complete
--

