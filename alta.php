<?php

$varlink=mysqli_connect("localhost","root","","baseblanco");



if (mysqli_connect_errno($varlink))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$_dni = $_POST['inpu_dni'];
$_nombre = $_POST['inpu_nombre'];
$_apellido = $_POST['inpu_apellido'];
$_cancha = isset($_POST['inpu_cancha'])? $_POST['inpu_cancha'] : ""; 


$resultado=mysqli_query($varlink,"INSERT INTO reservas ( dni, nombre, apellido, cancha) VALUES ('$_dni', '$_nombre', '$_apellido', '$_cancha')");

if ( false===$resultado ) {
  printf("error: %s\n", mysqli_error($varlink));
}
else {
  echo 'todo bien papaaa';
}


header('Location: index.php');
exit();
?>