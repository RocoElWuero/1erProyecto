<?php
	session_start();
	if((isset($_SESSION['user']))&&(isset($_SESSION['password']))) header("location:index.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" href="css/style.css">
		<link rel="ico" href="img/login.png">
		<title>Login</title>
	</head>
	<body background="img/cine5.jpg">
		<i><font face="Arial"><h2 class="texto">Login</h2></font></i>
		</div>
		<br><br>
		<form action="sesion.php" method="post" class="formulario">
			<table>
				<b class="texto"><font face="Arial">Usuario:</font></b>
				<br>
				<input type="text" name="user" placeholder="Usuario" required>
				<br><br>
				<b class="texto"><font face="Arial">Password:</font></b>
				<br>
				<input type="password" name="password" placeholder="Password" required>
			</table>
			<br>
			<input type="submit" name="nom_enviar2" value="Logear" class="input">
		</form>
		<br>
		<a href="registrar.php"><h4 class="texto">Registrate</h4></a>
		<br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
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