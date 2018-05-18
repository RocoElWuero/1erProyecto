<?php
	session_start();
	if((isset($_SESSION['user']))&&(isset($_SESSION['password']))) header("location:index.php");
	echo "";
	if((isset($_POST["user"]))&&(isset($_POST["password"])))
		{
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


			//3.Realizar una Consulta a la BD's
				//Sentencia SQL
			//$resultados = mysqli_query($conexionDb,"SELECT * FROM student");
			$sentenciaSql2 = "select * from usuario;";
			$resultados = mysqli_query($conexionDb, $sentenciaSql2);
			if(!$resultados) die("Error a la hora de la consulta".mysqli_error());

			//4.Utilizar los datos retornados (si hubieron)
			while($row=mysqli_fetch_array($resultados))
			{
				if(($row[1]==$_REQUEST['user']) && ($row[2]==$_REQUEST['password']))
				{
					$_SESSION['user'] = $_REQUEST['user'];
					$_SESSION['password'] = $_REQUEST['password'];
				}
			}

			//5.Cerrar la Conexión
			mysqli_close($conexionDb);

			header("location:index.php");
		}
	else header("location:login.php");
?>