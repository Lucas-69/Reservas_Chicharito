<?php 

	include('conexion.php');
	include('login/funciones.php');


	$query="SELECT * FROM `reservas` where 1 "; //PARA HACER UN LISTADO, SE GUARDA EL STRING EN $query. 
	
	$consulta=mysqli_query($varlink,$query); //USA DOS PARAMETROS: coneccion de mysqli_connect y el segundo es la query.
	
	$fila=mysqli_fetch_row($consulta);//ESTA FUNCION SE UTILIZA PARA SACAR UNA LINEA DE LA MATRIZ, CON FETCH

	mysqli_close($varlink);



	if(empty($_SESSION['usuario'])){ /*si no tenemos sesion mostramos nuestro formulario de login y de registro*/
		
		

	}else{ /*en caso de estar en una sesion incluimos home.php*/ 
	
		echo "<h1>bienvenido</h1>".$_SESSION['usuario']['nombre']; 
		
	}

?>

<!DOCTYPE html>
<html>
<head> 

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	
	<link rel="stylesheet" type="text/css" href="style_inde.css">
	<link rel="stylesheet" type="text/css" href="style_titulo.css">
	 
	
	<title> Reservas Chicharito </title>
	<link rel="icon" href="imagenes/icon/icon_pestaña2.ico">


</head>




<body >
	 <?php include('cabezera.php');?> 


	
	<div class="contenedor">
	
		
			<!--<div class="cuadro">-->
			
				<div class="main">
						<div class="icon_center">
							<center>

								<img src="imagenes/jugador2.png" >
								<img src="imagenes/pelota.png" >
								<img src="imagenes/jugador3.png" >
						
							</center>
						</div>

					<div id="style_titulo">
				
						<ul>
							<li>R</li>
							<li>e</li>
							<li>s</li>
							<li>e</li>
							<li>r</li>
							<li>v</li>
							<li>a</li>
							<li>s</li>
							<li>C</li>
							<li>h</li>
							<li>i</li>
							<li>c</li>
							<li>h</li>
							<li>a</li>
							<li>r</li>
							<li>i</li>
							<li>t</li>
							<li>o</li>
						</ul>
						
						<br>
					</div>
				</div>	

		<table border="2px">

				<thead>
					<tr class="centro"> <!--FILA 1 -->
						<td bgcolor=#2C3E50 width="70"> ID </td> <!-- CELDA 1  -->
						<td bgcolor=#2C3E50> DNI </td> <!-- CELDA 2  -->
						<td bgcolor=#2C3E50> Nombre </td>  <!-- CELDA 3  -->
						<td bgcolor=#2C3E50> Apellido </td>  <!-- CELDA 4  -->
						<td bgcolor=#2C3E50> Cancha </td>  <!-- CELDA 5  -->
						<td bgcolor=#DC4260 width="100"> Eliminar </td> <!-- CELDA 6  -->
						<td bgcolor=#0EE35C width="100"> Modificar </td> <!-- CELDA 7  -->
					</tr>
				</thead>

				<tbody> 
			
					<?php while ($fila){?>
			
					<tr class="tab"> <!--FILA 2 -->
						 	<td  align="center"><?php echo $fila[0];?></td> <!-- CELDA 8 -->
							<td  align="center"><?php echo $fila[1];?></td> <!-- CELDA 9 -->
							<td  align="center"><?php echo $fila[2];?></td> <!-- CELDA 10 -->
							<td  align="center"><?php echo $fila[3];?></td> <!-- CELDA 11  -->
							<td  align="center"><?php echo $fila[4];?></td> <!-- CELDA 12  -->
							<td><a href="baja.php?id=<?php echo $fila[0];?>" class="eliminar" > Eliminar </a></td>
							<td><a href="update.php?id=<?php echo $fila[0];?>" class="modificar" > Modificar </a></td>
							
					</tr>
							
					
							<?php $fila=mysqli_fetch_row($consulta);}?>

				</tbody>

			<!--</div>-->	

		</table>

					<!--  !!!!!!!!!!!!!  	BOTONES FOOTER		 !!!!!!!!!!!  -->

						<form action="reserva.html">
				  
							<input class="boton_index" type="submit" value="Reservar " />
						</form>	
			
						<form action="login/inde.php">
				  
	    					<input class="boton_index" type="submit" value="Logearse " />
				
						</form>
					
						<br><br><br>

	

	<?php include("redes.html"); ?>
</div>

</body>
</html>

