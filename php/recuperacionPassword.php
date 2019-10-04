<?php
require_once("../controladores/funciones.php");
require_once('../controladores/helpers.php');
if($_POST){
  $errores= validarOlvidePassword($_POST);
  if(count($errores)==0){
    $usuario = buscarPorEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe en nuestra base de datos";
    }else{
        $registro = armarRegistroOlvide($_POST);
          header("location: cambioContraseña.php");
          exit;
    }
  }
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
  <link rel="stylesheet" href="../css/recuperacionPassword.css">
  <title>Recuperá tu contraseña</title>
</head>
<body>
  <?php include_once("nav.php");?>
  
  <div class="container ">
    <div class="d-flex justify-content-center h-100">
      <div class="card mt-auto mb-auto">
        <div class="card-header">
          <h3 class="text-white">Recuperá tu contraseña</h3>
          <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 
        </div>
        <div class="card-body">
          <form id="formularioOlvide"  class="formOlvide" name="formOlvide" method="POST">
            
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
              </div>
              <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value= "<?=isset($errores['email'])? "":old('email') ;?>" placeholder="Ingrese su correo">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña al menos 6 numeros ">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Repetir la contraseña">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-secondary float-right">Cambiar contraseña</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <?php include_once("footer.php");?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>