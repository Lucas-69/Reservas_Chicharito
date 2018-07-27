<?php include 'funciones.php';

if(empty($_SESSION['usuario'])){
    
    if(isset($_POST['btn_inicio_sesion'])&&$_POST['btn_inicio_sesion']=='listo_1'){
        iniciar_sesion();

    }
    else if(isset($_POST['btn_registroName'])&&$_POST['btn_registroName']=='enviar'){
        registrar();
    }
}

header('location: ../index.php');