
-- Fuente de la investigación:
-- http://www.michael-pratt.com/blog/7/Encontrar-Lugares-cercanos-con-MySQL-y-PHP/

--------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------

-- Esta consulta sirve para obtener los puntos cercanos a determinados metros a la redonda ------------------
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
	HAVING distancia < 0.01 ORDER BY distancia ASC; -- 0.01 se refiere a 10 metros, ya que la cuenta se saca en kilometros

-- Esta es la misma consulta pero arroja resultado en metros -----------------------------------------------
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


-- Para mejorar el rendimiento de la base de datos es conveniente 
-- crear primero un area de cobertura del punto central con la medida que ocupamos
-- ejemplo: tenemos un punto y delimitamos un area de 100 metros a la redonda
-- esto de hace con una función en PHP que nos arroja la longitud y latitud maxima y minima
-- en base al punto central y entonces ejecutamos la siguiente consulta  con esos maximos y minimos.
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


-- Si lo que queremos saber cuanta distancia hay entr 2 puntos 
-- lo que debemos hacer es lo siguiente.
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

-- Resultado en metros

+----+------------------+-----------------+---------------------+
| id | longitud         | latitud         | distancia           |
+----+------------------+-----------------+---------------------+
| 73 | -103.7305337     | 19.2735386      | 13.03382468300301   |
+---+-------------------+-----------------+---------------------+