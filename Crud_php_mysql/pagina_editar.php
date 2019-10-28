<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://kit.fontawesome.com/5162fbebe5.js" crossorigin="anonymous"></script>
</head>
<body>
    <pre>
    <?php
        $id = $_GET['id']; //capturamos el id 
        
        $conn = mysqli_connect("localhost","root","","wm2019");
        $sql = "SELECT * FROM autor WHERE ID = {$id}";
        $respuesta = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($respuesta);
        
        $name = $row['nombre']; //nombre traido de la BBDD
    ?>
    </pre>

    <h2>Update: editando un registro en la BBDD</h2>
    <form action="php/editar.php?id= <?php echo $id ?>" method="POST"> <!-- Inyectamos los datos en el form-->
        <input type="hidden" name="id" id="id" value = "<?php echo $id ?>" >
        <input type="text" name="name" id="name" autofocus value = "<?php echo $name ?>">
        <button type="submit">Editar</button>
    </form>


</body>
</html>