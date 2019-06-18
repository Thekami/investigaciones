<?php include 'includes/viewLoader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<meta name="description" content="Como configurar git">
  <meta name="keywords" content="<?php echo $view->palabras; ?>">

  <meta name="author" content="Tecnologias COSITEC">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="es">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Configurar Git</title>

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
					<p>El siguiente tutorial nos explicará cómo configurar rápidamente GIT, la explicación es funcional para cualquier sistema operativo y estamos dando por hecho que ya tienes instalado GIT en tu equipo. De no ser así puedes entrar al siguiente <a href="https://git-scm.com/book/es/v1/Empezando-Instalando-Git" target="_blank">link</a> donde podrás aprender a instalarlo correctamente. </p>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<h4>Paso 1</h4>

					<p>Una vez instalado, deberás abrir tu consola (cmd o git bash en caso de usar Windows) o la consola normal en caso de estár user OS X o Linux</p>
					<p>Y escribir los siguientes comandos, los cuales te ayudaran a definir el nombre de usuario y correo electronico que usará git para todas las acciones</p>

					<pre><code>$ git config --global user.name "Angel Torres"
$ git config --global user.email micorreo@midominio.com</code></pre>

					<p>Para mas información: <a href="https://git-scm.com/book/es/v1/Empezando-Configurando-Git-por-primera-vez" target="_blank">Configurando Git por primera vez</a></p>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<h4>Paso 2</h4>

					<p>Ahora vamos a configurar el SSH para poder trabajar con nuestros repositorios de manera mas segura.</p>
					<p>Copia y pega en tu consola, lo que está aquí abajo para generar una nueva llave SSH, usando como proveedor el email seleccionado</p>
					<pre><code>$ ssh-keygen -t rsa -b 4096 -C "<em>micorreo@midominio.com</em>"</code></pre>

					<p>La consola nos debería regresar lo siguiente:</p>
					<pre><code>> Generating public/private rsa key pair.</code></pre>

					<p>Cuando aparezca lo siguiente, presiona "Enter" para aceptar guardar la llave en el path por default.</p>
					<pre><code>> Enter a file in which to save the key (/c/Users/you/.ssh/id_rsa):[Press enter]</code></pre>

					<p>Ahora la consola te pedirá que definas una constraseña (recuerda guardarla en un lugar seguro para no perderla)</p>
					<pre><code>> Enter passphrase (empty for no passphrase): [Type a passphrase]
> Enter same passphrase again: [Type passphrase again]</code></pre>

					<p>Si estás usando Git Shell instalada con GitHub Desktop, tu agente SSH ya debería estar ejecutándose, pero si estás usando alguna otra terminal, como Git para Windows, vamos a requerir establecer el Auto-launching del agente SSH</p>
					<pre><code># start the ssh-agent in the background
$ eval $(ssh-agent -s)
> Agent pid 59566</code></pre>

					<p>Agregar la llave privada de SSH a tu agente SSH. Si creaste tu llave con diferente nombre, o si quiere agregar una llave existente con diferente nombre, reemplaza id_rsa en el comando</p>
					<pre><code>$ ssh-add ~/.ssh/id_rsa</code></pre>
					
					<p>Para mas información: <a href="https://help.github.com/en/articles/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent" target="_blank">Generating a new ssh key and adding it to the ssh agent</a></p>

					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					
					<h4>Paso 3</h4>

					<p>Será necesario agregar nuestra llave SSH generada a nuestra cuenta de GitHub, para hacerlo, hay que ver el siguiente tutorial <a href="https://help.github.com/en/articles/adding-a-new-ssh-key-to-your-github-account" target="_blank">Adding a new ssh key to your github account</a></p>

					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<h4>Paso 4</h4>

					<p>Una vez terminado el Paso 3, vamos a intentar clonar nuestro primer repositorio</p>
					<p>Primero tenemos que colocarnos en la carpeta donde vamos a clonar el repositorio, usando el comando cd</p>
					<pre><code>$ cd /C/carpeta/carpeta/</code></pre>
					
					<p>Ahora usaremos el comando Git clone y la url de nuestro  proyecto</p>
					<pre><code>$ git clone git@github.com:Thekami/domgeo_api.git </code></pre>

					<p>Nos aparecerá lo siguiente, que lo único que hace que pide agregar la IP de GitHub a nuestros hosts conocidos, y hay que escribir "yes" para aceptarlo</p>
					<p>Puede que nos aparezca el siguiente error:</p>
					<pre><code>The authenticity of host 'github.com (192.30.253.112)' can't be established.
RSA key fingerprint is SHA256:Fr+6gGOSiFiCXWJRpNeJ0CoR8CRhX9fekIkZ1pEuFNY.
Are you sure you want to continue connecting (yes/no/[fingerprint])?</code></pre>

					<p>Puede que nos aparezca el siguiente error:</p>
					<pre><code>Warning: Permanently added 'github.com,192.30.253.112' (RSA) to the list of known hosts.
Received disconnect from 192.30.253.112 port 22:2: Connection blocked because server only allows public key authentication. Please contact your network administrator.
Disconnected from 192.30.253.112 port 22
fatal: Could not read from remote repository.
</code></pre>

					<p>De ser así, podemos investigar mas a fondo por que sucede esto, ya que personalmente no encontré una solución rápida, o intentar clonar nuestro proyecto sin SSH y en su lugar usar HTTPS</p>
					<pre><code>$ git clone https://github.com/Thekami/domgeo_api.git </code></pre>

					<br>

					<p>Para obtener el link para clonar tanto con SSH como con HTTPS es necesario ir a la pagina de GitHub, buscar nuestro repositorio y dar click en el botón verde que dice "Clone or download, y posteriormente "Use SSH" o "Use HTTPS" dependiendo de lo que requiramos, como se muestra en la imagen de abajo</p>
					<img class="img-responsive" src="assets/img/17062019144255.png">

					<hr>
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