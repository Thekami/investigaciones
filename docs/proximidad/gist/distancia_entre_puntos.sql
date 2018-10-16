SELECT id, longitud, latitud, alias, id_device, ( 
	6371 * ACOS( 
		SIN( RADIANS(latitud) ) 
		* SIN( RADIANS(19.2734796) ) -- latitud del punto 1
		+ COS(RADIANS(longitud - -103.7304264)) -- longitud del punto 1
		* COS(RADIANS(latitud)) 
		* COS(RADIANS(19.2734796))  -- latitud del punto 1
	) * 1000
) AS distancia 
FROM geolocation 
WHERE id = 73 -- id del registro del cual ocupamos saber la distancia
HAVING distancia < 100 ORDER BY distancia ASC;