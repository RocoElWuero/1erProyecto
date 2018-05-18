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
		<title>Registrar</title>
	</head>
	<body>
		<?php
			if((!isset($_REQUEST['user'])) && (!isset($_REQUEST['password'])))
			{
				?>
				<br><br><br><br><br><br><br><br><br><br><br>
				<form action="registrar.php" method="post" class="formulario2">
					<table>
						<h3>
							<b class="texto3"><font face="Arial">Ingrese sus datos:</font></b>
						</h3>
						<br>
						<b class="texto3"><font face="Arial">Nombre de Usuario:</font></b>
						<br>
						<input type="text" name="user" placeholder="Nombre de usuario" required>
						<br><br>
						<b class="texto3"><font face="Arial">Password:</font></b>
						<br>
						<input type="password" name="password" placeholder="Password" required>
					</table>
					<br>
					<input type="submit" name="enviar1" value="Registrar" class="btn">
				</form>
				<?php
			}
			else
			{
				//INTERACTUAR CON BD's EN PHP
				//1.Crear una Conexión
				//Se especifica cual es el Server al K se va a Conectar
				//Y cuales son los Parametros p' las Credenciales
				$conexion = mysqli_connect("localhost","rootdos","12345_6789");
				//SI no se pudo conectar con la BD's
				if(!$conexion) die("Error de conexión con el Manejador ".mysqli_error());
					//die, Finaliza la Conexión elaborada Previamente y muestra un Mensajete

				//2.Seleccionar una BD's
					//Una f(x), cual es la BD's y la Conexión K se va a Usar
				$DB_Selecionada = mysqli_select_db($conexion,"cine");
				//SI la BD's No fue Selecionada
				if(!$DB_Selecionada) die("Error al seleccionar la BDs ".mysqli_error());


				//3.Realizar una Consulta a la BD's
					//Sentencia SQL
				$SenteciaSQL = "INSERT INTO usuario(user,password) VALUES('".$_REQUEST['user']."','".$_REQUEST['password']."');";
				$resultados = mysqli_query($conexion,$SenteciaSQL);
				if(!$resultados) die("Error a la hora de la consulta".mysqli_error());

				//5.Cerrar la Conexión
				mysqli_close($conexion);

				header("location:login.php");
			}
			?>
	</body>
</html>