SELECT id, longitud, latitud, alias, id_device, ( 
	6371 * ACOS( 
		SIN( RADIANS(latitud) ) 
		* SIN( RADIANS(19.2734796) ) -- latitud del punto central
		+ COS(RADIANS(longitud - -103.7304264)) -- longitud del punto central 
		* COS(RADIANS(latitud)) 
		* COS(RADIANS(19.2734796)) -- latitud del punto central
	) 
) AS distancia 
FROM geolocation 
WHERE (
	(latitud BETWEEN 19.272580278394 AND 19.274378921606) -- minimos y maximos (respectivamente) obtendos con PHP
	OR (longitud BETWEEN -103.73137911778 AND -103.72947368222) -- minimos y maximos (respectivamente) obtendos con PHP
)
HAVING distancia < 0.01 ORDER BY distancia ASC;