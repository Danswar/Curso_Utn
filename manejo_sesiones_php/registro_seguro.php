<pre>
<?php
    
    //print_r($_POST);

    $username = $_POST['username'];
    $password= $_POST['password'];

    //encriptamos la contraseña, el campo en la BBDD tiene que tener al menos 60 caracteres
    $password_encriptado = password_hash($password,PASSWORD_BCRYPT);

    $conexion = mysqli_connect("localhost","root","","wm2019");
    $sql= "INSERT INTO `usuario`(`username`, `pwd`, `activo`) VALUES ('{$username}','{$password_encriptado}','1')";

    $rta = mysqli_query($conexion,$sql);
    
    //var_dump($rta);

    if($rta){
        header('Location : login_seguro.html');
    }
    
?>
</pre>
