<?php
  require_once("../controladores/funciones.php");
  require_once("../controladores/helpers.php");
 
  if(!isset($_SESSION["email"])) {
   header("location:login.php");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7099e40d98.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Open+Sans:300i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Perfil Usuario</title>
</head>
<body>
    <?php include_once("nav.php");?>
    <br>
    <div class="container ">
        <div class="row">
            <div class="col-sm-10"><h1>Bienvenid@ <?=$_SESSION['nombre'] ;?></h1></div> 
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="text-center style="width: 18rem;" >
                    <img src="../imagenes/<?=$_SESSION['avatar'];?>" class="card-img-top" alt="avatar">
                    <h6 class="pt-3">Subí tu foto de perfil...</h6>
                    <input type="file" class="form-control-file ">
                </div>
            </div>
            <div class="col-sm-9">
                <ul class="nav ">
                    <li class="nav-item"><a class="nav-link active" href="perfil.php"><h4><b> Mi Perfil</b></h4></a></li>
                    <li class="nav-item"><a class="nav-link active" href="carrito.php"><h4><b>Mi Carrito</b></h4></a></li>
                    <li class="nav-item"><a class="nav-link active" href="carrito.php"><h4><b>Mis Favoritos</b></h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Nombre Completo</h4></label>
                                    <input type="text" class="form-control" name="nombre_c" id="nombre_c" placeholder="Nombre Completo" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Apellido</h4></label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6 ">
                                    <label for="phone"><h4>Genero</h4></label><br>
                                    <input type="radio" name="gender" value="male" checked> Maculino<br>
                                    <input type="radio" name="gender" value="female"> Femenino<br>
                                    <input type="radio" name="gender" value="other"> Otro<br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Celular</h4></label>
                                    <input type="text" class="form-control" name="cel" id="cel" placeholder="celular" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="date"><h4>Fecha de Nacimiento</h4></label>
                                    <input type="date" class="form-control" name="f_n" id="f_n" placeholder="" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password"><h4>Cambiar Contraseña</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password2"><h4>Repetí tu contraseña</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Contraseña" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg bg-secondary" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar Cambios</button>
                                    <button class="btn btn-lg bg-secondary" type="reset"><i class="glyphicon glyphicon-repeat"></i>Borrar Cambios</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include_once("footer.php");?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>