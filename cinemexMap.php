<?php
	session_start();
	if((!isset($_SESSION['user']))&&(!isset($_SESSION['password']))) header("location:login.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" href="css/style2.css">
		<link rel="ico" href="img/index.png">
		<title>Cinemex</title>
	</head>
	<body background="img/fondoIndexV2.jpg">
		<div class="formularioPadre">
			<form action="index.php">
				<input type="submit" name="" value="Regresar" class="btn" style="float: left;">
			</form>
			<!--<form action="reservar.php">
				<input type="submit" name="" value="Reserva" class="btn" style="float: left;">
			</form>-->
			<form action="logout.php">
				<input type="submit" name="" value="Logout" class="btn" style="float: right;">
			</form>
			<img src="img/logo.png">
			<br><font face="times new roman" size=6 class="texto3">CineWorld</font><br>
			<font face="times new roman" size=4 class="texto3">El mundo del cine!</font><br>
			<font face="times new roman" size=4 style="float: right; color: white;">Bienvenido Usuario: <?php echo $_SESSION['user']?>!</font><br>
		</div>
		<br>
		<font face="times new roman" size=4 style="color: white;">Nos encontramos en:</font>
		<form action="" class="formulario2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.7122750661583!2d-99.17358884421667!3d19.394054111832045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c162c2028f10c51!2sCinemex+Wtc!5e0!3m2!1ses-419!2smx!4v1526593285444" width="600" height="450" frameborder="0" allowfullscreen></iframe>
		</form>
		<br>
		<footer class="footerEstilo">
			<div class="formaFooter1">
				<div>
					<div>
						<br>
						<h2 class="texto2">Para más información:</h2>
						<a class="texto3">Visita nuestras redes sociales:</a>
						<br>
						<a class="texto3">xbfgfbdxdfvz</a>
					</div>
					<br>
					<div class="col l4 offset-l2 s12">
						<h5 class="texto3">Más Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
				<div>© 2018 Copyright Text</div>
			</div>
		</footer>
	</body>
</html>