<?php


$varlink=mysqli_connect("localhost","root","","baseblanco");

if (mysqli_connect_errno($varlink))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


move_uploaded_file($_tmp_name, $fichero_subido);


$resultado=mysqli_query($varlink,"");

if ( false===$resultado ) {
  printf("error: %s\n", mysqli_error($varlink));
}
else {
  echo 'todo bien papaaa';
}

?>