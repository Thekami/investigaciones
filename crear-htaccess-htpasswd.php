<?php include 'includes/viewLoader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<meta name="description" content="Investigación para obtener distancia entre geopuntos con MySQL">
  <!-- <meta name="keywords" content="proximidad entre geopuntos, distancia entre geopuntos, distancia entre geopuntos con mysql, distancia, proximidad"> -->
  <meta name="keywords" content="<?php echo $view->palabras; ?>">

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
					<h3><?php echo $view->titulo_tema; ?></h3> 
				</div>
				
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<small> Autor: <a style="text-decoration: underline; color: currentColor" href="<?php echo $view->pagina; ?>" target="_blank"><?php echo $view->autor; ?></a></small>
					<hr>
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<p>Pasos para crear un htacces o htpasswd con windows</p>
					<ul>
						<li>Crear un nuevo archivo te texto y llamarlo <b>htaccess.txt</b> <i>(o <b>htpasswd.txt</b> si es el caso)</i></li>
						<li>Abrir la ventana de comandos o símbolos de sistema, <i>Inicio->Ejecutar… <b>cmd.exe</b></i></li>
						<li>Ir hasta donde se tiene el archivo <b>htaccess.txt</b> <i>(usando cd y dir)</i></li>
						<li>Renombrar el archivo de texto rename <b>htaccess.txt .htaccess</b></li>
					</ul>
					<hr>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<p>Fuente de la invetigacion <a href="https://elhappy.net/2009/08/crear-htaccess-y-htpasswd-en-windows//">https://elhappy.net/2009/08/crear-htaccess-y-htpasswd-en-windows//</a></p>
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