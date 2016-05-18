<?php

require('mailer/PHPMailerAutoload.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>APPSXXI - Desarrollo de software</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="/imagenes/logos/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body id="body">
	<div class="pagina">
		<header>
			<div class="center">
				<div class="logo_contenedor">
					<a href="#inicio"><img class="logo" src="imagenes/logo.png"></a>
				</div>
				<nav>
					<a href="/#inicio">Inicio</a>
					<a href="/#servicios">Servicios</a>
					<a href="/#productos">Productos</a>
					<a href="/#clientes">Clientes</a>
					<!-- <a href="#equipo">Equipo</a> -->
					<a href="/#nosotros">Nosotros</a>
				</nav>
			</div>	
		</header>

		<section>
			<div class="contenido-principal">
				<div class="center">
<?php

$regEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(preg_match($regEmail, $_POST['email'])) {
	$mail = new PHPMailer();

	$mail->addAddress('info@appsxxi.com', 'APPSxxi.com');
	$mail->setFrom($_POST['email'], $_POST['nombre']);

	$mail->Subject = utf8_decode('Mensaje desde APPSxxi.com');
	$mail->msgHTML(utf8_decode($_POST['mensaje']));

	if ($mail->send()) {

		?>

		<script>
		document.location.href = "/#nosotros";
		</script>

		<?php

	} else {

		?>

		<p>El email no se ha podido enviar, vuelve a intentarlo! Serás devuelto a la página principal.</p>
		<script>
		setTimeout(function() {
			document.location.href = "/#nosotros";
		}, 2000);
		</script>
		
		<?php

	}

} else {

	?>

	<p>El email es incorrecto, vuelve a intentarlo! Serás devuelto a la página principal.</p>
	<script>
	setTimeout(function() {
		document.location.href = "/#nosotros";
	}, 2000);
	</script>
	
	<?php

}

?>

				</div>
			</div>
		</section>

		<footer>
			<div class="center">
				<div class="columna-30-dentro borde-derecho-1">
					<h3>Navegación</h3>
					<ul>
						<li>· <a href="#inicio">Inicio</a></li>
						<li>· <a href="#servicios">Servicios</a></li>
						<li>· <a href="#productos">Productos</a></li>
						<li class="padding-20-izquierda">· <a href="#ecommerce">eCommerceXXI</a></li>
						<li class="padding-20-izquierda">· <a href="#erp">plusERPXXI</a></li>
						<li>· <a href="#clientes">Clientes</a></li>
						<li>· <a href="#nosotros">Nosotros</a></li>
					</ul>
				</div>
				<div class="columna-30-dentro">
					<h3>Medios de contacto</h3>
					<p>Contacta con nuestro equipo por cualquier consulta.</p>
					<ul>
						<li>
							<span class="fa fa-envelope"></span>
							<span class="info">contacto@appsxxi.com</span>
						</li>
						<li>
							<span class="fa fa-phone"></span>
							<span class="info">091 066 416 - 099 350 787</span>
						</li>
						<li>
							<span class="fa fa-skype"></span>
							<span class="info">apps_miguels - apps_leonardog</span>
						</li>
					</ul>
				</div>
				<div class="columna-30-dentro borde-izquierdo-1">
					<h3>Mantente informado</h3>
					<p>Enterate de todas nuestras actualizaciones y lanzamientos a través de facebook y twitter.</p>
					<!-- <p>Suscribite y recibí noticias en tu email, también seguinos en facebook y twitter.</p> -->
					<!-- <form action="">
						<input type="text">
						<span class="fa fa-envelope"></span>
					</form> -->
					<p>
						<a href="https://www.facebook.com/appsxxi" target="_blank" class="fa fa-facebook"></a>
						<a href="https://twitter.com/APPSxxi" target="_blank" class="fa fa-twitter"></a>
					</p>
				</div>
			</div>
			<div class="derechos-y-logos">
				<div class="center">
					<p>
						<strong>AppsXXI</strong> y todas las marcas son marcas registradas - Todos los derechos reservados 2016
					</p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>