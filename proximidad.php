<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<meta name="description" content="Investigación para obtener distancia entre geopuntos con MySQL">
  <meta name="keywords" content="proximidad entre geopuntos, distancia entre geopuntos, distancia entre geopuntos con mysql, distancia, proximidad">

  <meta name="author" content="Tecnologias COSITEC">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="es">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Proximidad entre geopuntos</title>

	<link rel="shortcut icon" href="assets/img/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">
	
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	
	<!-- <link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css">	 -->

</head>
<body>

	<?php include 'includes/nav.php' ?>

	<section>

		<div class="container">
	
			<div class="row">
				<div class="col-md-12">
					<h3>Investigación sobre proximidad entre geopuntos</h3> 
				</div>
				
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<small> Autor: <a style="text-decoration: underline; color: currentColor" href="https://github.com/thekami" target="_blank">Angel Torres</a></small>
					<hr>
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<p>Esta consulta sirve para obtener los puntos cercanos a determinados metros a la redonda</p>
					<script src="https://gist.github.com/Thekami/dac330e1b4328e7ed3c3ed225a8b6ec6.js?file=puntos_cercanos_kms.sql"></script>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Esta es la misma consulta pero arroja resultado en metros </p>
					<script src="https://gist.github.com/Thekami/dac330e1b4328e7ed3c3ed225a8b6ec6.js?file=puntos_cercanos_mts.sql"></script>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Para mejorar el rendimiento de la base de datos es conveniente crear primero un area de cobertura del punto central con la medida que ocupamos</p>
					<p><b>Ejemplo</b>: tenemos un punto y delimitamos un area de 100 metros a la redonda, esto de hace con una función en PHP que nos arroja la longitud y latitud maxima y minima en base al punto central y entonces ejecutamos la siguiente consulta con esos maximos y minimos.</p>
					<script src="https://gist.github.com/Thekami/dac330e1b4328e7ed3c3ed225a8b6ec6.js?file=puntos_cercanos_mejor_rendimiento.sql"></script>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Si lo que queremos saber cuanta distancia hay entr 2 puntos lo que debemos hacer es lo siguiente.</p>
					<script src="https://gist.github.com/Thekami/dac330e1b4328e7ed3c3ed225a8b6ec6.js?file=ditancia_entre_puntos.sql"></script>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Resultado en metros</p>
					<script src="https://gist.github.com/Thekami/dac330e1b4328e7ed3c3ed225a8b6ec6.js?file=resultado_ejemplo.txt"></script>
					<hr>
				</div>
			</div>			

			<div class="row">
				<div class="col-md-12">
					<p>Fuente de la invetigacion <a href="http://www.michael-pratt.com/blog/7/Encontrar-Lugares-cercanos-con-MySQL-y-PHP/">http://www.michael-pratt.com/blog/7/Encontrar-Lugares-cercanos-con-MySQL-y-PHP/</a></p>
				</div>
			</div>

			
		</div>

	</section>


  <?php include 'includes/footer.html' ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script href="assets/js/fontawesome.min.js"></script>
	<script href="assets/js/main.js"></script>

</body>
</html>