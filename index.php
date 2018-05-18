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
		<?php
			//INTERACTUAR CON BD's EN PHP

			//1.Crear una Conexión
			//Se especifica cual es el Server al K se va a Conectar
			//Y cuales son los Parametros p' las Credenciales
			$conexionDb = mysqli_connect("localhost","rootdos","12345_6789");//,"Inscripciones");
			//SI no se pudo conectar con la BD's
			if(!$conexionDb) die("Error de conexión a la BD's".mysqli_error());
				//die, Finaliza la Conexión elaborada Previamente y muestra un Mensajete

			//2.Seleccionar una BD's
				//Una f(x), cual es la BD's y la Conexión K se va a Usar
			$dbSeleccionada = mysqli_select_db($conexionDb,"cine");
			//SI la BD's No fue Selecionada
			if(!$dbSeleccionada) die("Error al seleccionar la BD's".mysqli_error());
		?>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script>
			$(document).on("ready",function(){
				$('font.texto2').css({
					'background-color':'red',
				});
			});
		</script>
	</head>
	<body background="img/fondoIndexV2.jpg">
		<div class="formularioPadre">
			<form action="cinemexMap.php">
				<input type="submit" name="" value="Ubicanos" class="btn" style="float: left;">
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
		<form action="registrar.php" method="post" class="formulario">
			<table>
				<?php
				//3.Realizar una Consulta a la BD's
					//Sentencia SQL
				for($i=1; $i<11; $i++)
				{
					echo "<td>";
					$sentenciaSql2 = "select tituloYAno, clasificacion, duracion, genero, trama, director, estrellas, votos, costoNeto, horario from pelicula where idPelicula=".$i.";";
					$resultados = mysqli_query($conexionDb, $sentenciaSql2);
					if(!$resultados) die("Error a la hora de la consulta".mysqli_error());
					//4.Utilizar los datos retornados (si hubieron)
					$row=mysqli_fetch_array($resultados);
					echo "	<tr><font face=\"candara\" size=6 class=\"texto2\" style=\"color: white;\">".$row[0]."</font></tr><br>";
					echo "	<tr><img src=\"img\\".$i."-.jpg\"></tr>";
					echo "</td>";
					echo "<td>";
					echo "	<tr></tr>"; //Aunque creo que no sirve para algo
					echo "	<tr>";
					echo "		<br>";
					echo "		<font face=\"candara\" size=4.5 style=\"color: ThreeDHighlight;\">".$row[1]." | ".$row[2]." min | ".$row[3]."</font>";
					echo "		<br>";
					echo "		<br>";
					echo "		<font face=\"candara\" size=3 style=\"color: white;\">".$row[4]."</font>";
					echo "		<br>";
					echo "		<br>";
					echo "		<font face=\"candara\" size=3 style=\"color: ThreeDHighlight;\">Director(es): ".$row[5]." | Stars: ".$row[6]."</font>";
					echo "		<br>";
					echo "		<font face=\"candara\" size=3 style=\"color: white;\">Votes: ".$row[7]." | Gross: ".$row[8]."</font>";
					echo "		<br>";
					echo "		<font face=\"candara\" size=3 style=\"color: ThreeDHighlight;\">Horaio: ".$row[9]."</font>";
					echo "	</tr>";
					echo "</td>";
					if($i<10) echo "<br><br>";
				}
				?>
			</table>
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
	<?php
		//5.Cerrar la Conexión
		mysqli_close($conexionDb);
	?>
<!-- Fila == <tr></tr> -->
<!-- Columna == <td></td> -->
</html>