<?php session_start();
$varlink=mysqli_connect('localhost','root','','baseblanco')or die('Error al seleccionar la base de datos');

function registrar(){
    global $varlink;
    //usuario
    //acceso
    $usuario=escapar($_POST['usuario']);

    $acceso=password_hash($_POST['acceso'],PASSWORD_DEFAULT);

    if($varlink->query(' INSERT INTO clientes (nombre,password) VALUES ("'.$usuario.'", "'.$acceso.'")')){
        $_SESSION['alert']=array('success',' Te has registrado con Exito');
    }else{
        $_SESSION['alert']=array('danger',' Halgo paso!.. Ocurrio un Error al Guardar ');
    }
}

function iniciar_sesion(){
    global $varlink;
    //usuario
    //acceso
    $usuario=escapar($_POST['usuario']);
    $acceso=$_POST['acceso'];
    /*consultamos si hay algun nombre de usuario */
    $query=$varlink->query('SELECT * FROM clientes  where nombre="'.$usuario.'"');
    /*comprobamos si hubo algun resultado de esta consulta */

    if($query->num_rows>0){
        //validar contraseña 
        /*obtenemos el resultado que nos dios la consulta $query*/
        $datos=$query->fetch_assoc(); /*en datos tenemos todos los campos de la fila que coincidio con nuestra consulta incluida la contraseña */
        
        /* debemos comparar la contraseña encryptada de la bd y la contraseña que el usuario ingreso  con la funcion password_verify como primer parametro se usa la contraseña que el usuario envio y 2 parametro la contraseña que tenemos en nuestra base de datos*/
        if(password_verify($acceso, $datos['password'])){
            //si la contraseña es correcta
            $_SESSION['usuario']=array('id'=>$datos['id'], 'nombre'=>$datos['nombre']);

        }else{
            //si es incorrecta
            $_SESSION['alert']=array('warning',' La contraseña ingresada es incorrecta ');
        }

    }else{

        $_SESSION['alert']=array('warning', 'El nombre de usuario es incorrecto');
    }

    
}

function get_header($title){
    echo '
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate1.css">
        <link rel="stylesheet" href="style.css">

        <title>'.$title.'</title>
    </head>
    <body>';
    if(isset($_SESSION['alert'])){
        echo '
        <div class="alert alert-'.$_SESSION['alert'][0].' animated fadeInLeft alert-dismissible fade show alerta" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.$_SESSION['alert'][1].'
        </div>';
        unset($_SESSION['alert']);
    }
}
function get_footer(){
    echo '
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>';
}
function escapar($entrada){
    global $varlink;
    return mysqli_real_escape_string($varlink,$entrada);
}