<?php if(empty($varlink))return;?>

<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <link rel="stylesheet" type="text/css" href="../style_redes.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div class="form">
 

<section class="full-height">
    <section class="container">
        <section class="row justify-content-center">
            <section class="col-auto">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Iniciar Sesion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-registro-tab" data-toggle="pill" href="#pills-registro" role="tab" aria-controls="pills-registro" aria-selected="false">Registrar</a>
                    </li>

                </ul>
                
                <div class="tab-content"  id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        

                        <form action="trafic.php" method="post">
                            <div class="form-group">
                                <label>Nombre de usuario
                                    <input type="text" name="usuario" class="form-control" required maxlength="100">
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Contraseña
                                    <input type="password" name="acceso" class="form-control" required maxlength="100">
                                </label>
                            </div>
                           
                            <input type="submit" class="btn_volver" value=" Listo "><!-- class= btn btn-lg btn-primary -->
                            <input type="hidden" name="btn_inicio_sesion" value="listo_1">                     
                                
                        </form>
                        
                         <form action="../index.php">
                            <input type="submit" class="btn_volver" value=" Volver ">
                         </form>
                    
                    </div>
                 
                    <div class="tab-pane fade" id="pills-registro" role="tabpanel" aria-labelledby="pills-registro-tab">
                        <form action="trafic.php" method="post">
                            <div class="form-group">
                                <label>Nombre de usuario
                                    <input type="text" name="usuario" class="form-control" required maxlength="100">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Contraseña
                                    <input type="password" name="acceso" class="form-control" required maxlength="100">
                                </label>
                            </div>
                            <input type="submit" class="btn btn-lg btn-primary" value="Enviar Registro">
                            <input type="hidden" name="btn_registroName" value="enviar">
                        </form>
                    </div>
                </div>
                

            </section>
        </section>
    </section>
</section>

            
    

</div>

<ul class="redes">
    <li><a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a></li>
    <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i>    </a></li>
    <li><a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i>   </a></li>
    <li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i>     </a></li>
</ul>

</body>
</html>
