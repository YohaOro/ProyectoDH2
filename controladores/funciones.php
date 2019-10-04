<?php

session_start();

function validar($datos,$imagen){
    $errores = [];
    $userName = trim($datos['userName']);
    if(empty($userName )){
        $errores['userName']="Debe colocar un nombre";
    }
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Debe colocar una contraseña";
    }elseif (!is_numeric($password)) {
        $errores['password']="La contraseña debe ser numérica";
    }elseif (strlen($password)<6) {
        $errores['password']="La contraseña debe tener mínimo 6 números";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    if(isset($_FILES)){
        $nombre = $imagen['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($imagen['avatar']['error']!=0){
            $errores['avatar']="Subí una foto";
            
        }elseif ($ext != "jpg" && $ext != "png") {
            $errores['avatar']="Formato inválido";
        }        
    }
    return $errores;   
}

function validarLogin($datos){
    $errores=[];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Debe colocar una contraseña";
    }elseif (!is_numeric($password)) {
        $errores['password']="La contraseña debe ser numérica";
    }elseif (strlen($password)<6) {
        $errores['password']="La contraseña debe tener mínimo 6 números";
    }
    return $errores;
}

function validarOlvidePassword($datos){
    
    $errores = [];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="Debe colocar una contraseña";
    }elseif (!is_numeric($password)) {
        $errores['password']="La contraseña debe ser numérica";
    }elseif (strlen($password)<6) {
        $errores['password']="La contraseña debe tener mínimo 6 números";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    return $errores;   
}


function armarRegistro($datos,$avatar){
    $usuario = [
    'userName' => $datos['userName'],
    'email' => $datos['email'],
    'password' => password_hash($datos['password'],PASSWORD_DEFAULT),
    'avatar'=>$avatar,
    'role'=>1
    ];
    return $usuario;
    
}


function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
}

function armarAvatar($imagen){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."../imagenes/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}


function armarRegistroOlvide($datos){
    $usuarios = abrirBaseDatos();
    foreach ($usuarios as $key=>$usuario) {
        if($datos["email"]==$usuario["email"]){
            $usuario["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
            $usuarios[$key] = $usuario;
        }
        $usuarios[$key] = $usuario;
    }
    unlink("usuarios.json");
    foreach ($usuarios as  $usuario) {
        $jsusuario = json_encode($usuario);
        file_put_contents('usuarios.json',$jsusuario. PHP_EOL,FILE_APPEND);
    }
}


function buscarPorEmail($email){
    $usuarios = abrirBaseDatos();
    if($usuarios !=null){
        foreach ($usuarios as  $usuario) {
            if($email === $usuario['email']){
                return $usuario;
            }
        }
    }
    return null;
}


function abrirBaseDatos(){
    if(file_exists('usuarios.json')){
        $archivoJson = file_get_contents('usuarios.json');
        $archivoJson = explode(PHP_EOL,$archivoJson);
        
        array_pop($archivoJson);
        
        foreach ($archivoJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        
        return $arrayUsuarios;
    }else{
        return null;
    }
}


function seteoUsuario($usuario,$dato){
    $_SESSION['nombre']=$usuario['userName'];
    $_SESSION['email']=$usuario['email'];
    $_SESSION['avatar']=$usuario['avatar'];
    $_SESSION['role']=$usuario['role'];
    if(isset($dato['recordarme'])){
        setcookie('email',$usuario['email'],time()+3600);
        setcookie('password',$dato['password'],time()+3600);
    }
}

function validarUsuario(){
    if(isset($_SESSION['email'])){
        return true;
    }elseif(isset($_COOKIE['email'])){
        $_SESSION['email']=$_COOKIE['email'];
        return true;
    }else{
        return false;
    }
}
