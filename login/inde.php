<?php include'funciones.php';

if(empty($_SESSION['usuario'])){ /*si no tenemos sesion mostramos nuestro formulario de login y de registro*/
	
	get_header('Inicia sesion');/*incluimos nuestro encabezado*/
	include'login.php';

}else{ /*en caso de estar en una sesion incluimos home.php*/ 
	include'home.php';
	
}

get_footer(); 

