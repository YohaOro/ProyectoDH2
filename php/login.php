<?php
  require_once("../controladores/funciones.php");
  require_once("../controladores/helpers.php");

  
  if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario == null){
        $errores['email']="Usuario no registrado";
      }else{
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){
            header('location:perfil.php');
            exit;
          }else{
            header('location:login.php');
            exit;
          }
        }
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
	<link rel="stylesheet" href="../css/login.css">
	<title>login</title>
</head>
<body>
	<?php include_once("nav.php");?>
	
	<div class="container ">
		<div class="d-flex justify-content-center h-100">
			<div class="card mt-auto mb-auto">
				<div class="card-header">
					<h3 class="text-white" >Ingresá</h3>
					<?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 
				</div>
				<div class="card-body">
				<form id="formulario"  class="form" name="formRegistro"   method="POST" enctype="multipart/form-data" >
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
							<input  name="email" type="email" class="form-control" value= "<?=isset($errores['email'])? "":old('email') ;?>" placeholder="Mail de Usuario">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input  name="password" type="password" class="form-control" placeholder="Contraseña">
						</div>
						<div class="row align-items-center text-white ml-2">
							<input  class="text-left" name="recordarme" type="checkbox" value= "recordarme" class="form-control " id="recordarme" >Recordar
						</div>
						<div class="form-group">
							<input type="submit" value="Ingresar" class="btn btn-secondary float-right ">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center text-white">¿No tenés una cuenta? <a href="register.php"> Registrate</a>
					</div>
					<div class="d-flex justify-content-center text-while">
						<a href="recuperacionPassword.php">¿No recordás tu contraseña?</a>
					</div>
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