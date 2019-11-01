<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conexion = mysqli_connect("localhost","root","","wm2019");

//recuperamos el usuario que coincida, ya no filtramos por password
$sql = "SELECT * FROM `usuario` WHERE `username`='{$username}' AND `activo`='1'";

$result = mysqli_query($conexion,$sql);
if(!$result){
    die("<h1>Fallo en la consulta</h1>");
}

$usuario =  mysqli_fetch_array($result);
if(!$usuario){
    die("<h1>Usuario no exite o inactivo</h1>");
}

if(!password_verify($password,$usuario['pwd'])){
    die("<h1>Usuario/Contraseña incorrecto</h1>");
}


session_start();
$_SESSION['login_ok']=true;
$_SESSION['user_id']=$usuario['id'];

header('location: pag_segura.html');

?>