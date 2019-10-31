<pre>
<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conexion = mysqli_connect("localhost","root","","wm2019");

    $sql = "SELECT * FROM `usuario` WHERE `username`='{$username}' AND `pwd`= '{$password}' AND `activo`='1'";

    $result = mysqli_query($conexion,$sql);

    $usuario = mysqli_fetch_array($result);

    if(!$usuario){
        die("User/pass incorrecto");
    }

    session_start();

    $_SESSION['login_ok']=true;
    $_SESSION['user_id']=$usuario['id'];

    header('location: pag_segura.html');



?>
</pre>