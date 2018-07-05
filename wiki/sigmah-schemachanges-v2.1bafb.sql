-- "code" property.
ALTER TABLE flexible_element ADD code VARCHAR(30);

-- "computation field" flexible element.
CREATE TABLE computation_element
(
  id_flexible_element int primary key,
  rule varchar(1500),
  minimum varchar(1500),
  maximum varchar(1500)
);