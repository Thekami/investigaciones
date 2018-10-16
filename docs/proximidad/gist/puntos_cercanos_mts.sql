SELECT id, longitud, latitud, alias, id_device, ( 
	6371 * ACOS( 
		SIN( RADIANS(latitud) ) 
		* SIN( RADIANS(19.2734796) ) -- latitud del punto central
		+ COS(RADIANS(longitud - -103.7304264)) -- longitud del punto central
		* COS(RADIANS(latitud)) 
		* COS(RADIANS(19.2734796)) -- latitud del punto central
	) * 1000
) AS distancia 
FROM geolocation 
HAVING distancia < 10 ORDER BY distancia ASC; -- 0.01 se refiere a 10 metros, ya que la cuenta se saca en kilometros