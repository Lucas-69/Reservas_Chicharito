<?php


$_id=$_GET['id'];


$varlink=mysqli_connect("localhost","root","","baseblanco");



if (mysqli_connect_errno($varlink))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$_query="DELETE FROM `reservas` WHERE `id`=".$_id;


mysqli_query($varlink,$_query);

/*SET @AUTOID :=0;
UPDATE reservas SET id = @autoid := (@autoid+1);
ALTER TABLE reservas AUTO_INCREMENT =1;*/


header('Location: index.php');
exit();
?>
