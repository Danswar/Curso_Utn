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
    
    <h2>Insert: insertando un nuevo registro a la BBDD</h2>
    <form action="php/insertar.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Escribe el nombre del autor" autofocus>
        <button type="submit">Agregar</button>
    </form>


    <h2>Select: consulta para todos los registros</h2>
    <?php
        $conn = mysqli_connect("localhost","root","","wm2019");
        $sql = "SELECT * FROM autor";
        $respuesta = mysqli_query($conn,$sql);
    ?>

    <table>
        <tr class="header">
        <th>ID</th>
        <th>NOMBRE DEL AUTOR</th>
        <th>ACTION</th>
        </tr>
        
        <?php while($row=mysqli_fetch_array($respuesta)) { 
            $id=$row['id'];
            $nombre=$row['nombre']?>

            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre;?></td>
                <td>
                    <i class="fas fa-pen-square"></i>    <a href="pagina_editar.php?id=<?php echo $id; ?>" class="btnEdit">Edit</a>
                    <i class="fas fa-minus-circle"> </i> <a href="php/borrar.php?id=<?php echo $id; ?>" class="btnDelete">Delete</a>
                </td>
            </tr>

        <?php } ?>     
        
    </table>



</body>
</html>