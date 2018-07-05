-- Add default field codes to numeric fields which haven't any
UPDATE flexible_element
SET code = 'f' || id_flexible_element 
WHERE id_flexible_element in
	(SELECT fe.id_flexible_element 
	FROM flexible_element fe
		inner join textarea_element te on te.id_flexible_element = fe.id_flexible_element
	WHERE fe.code is null and te.type = 'N');