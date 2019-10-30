<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subida de archivos</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    
    <form enctype="multipart/form-data" action="upload.php" method="POST"><!--IMPORTATE: agregar el enctype AQUI-->
       
        <input type="file" name="miarchivo">    
        <button type="submit">Enviar</button>
    
    </form>

    <!--COGIDO PHP-->
    <pre>
    <?php
        if(isset($_FILES['miarchivo'])){

            //Directorio de destino en el server
            $dir_subida = '/xampp/htdocs/curso_utn/subida_archivos_php/directorio_destino/';
            
            //Aqui es donde definitivamente se guardara el archivo
            $destino = $dir_subida . $_FILES['miarchivo']['name'];

            //Sentencia para mover el archivo
            if(move_uploaded_file($_FILES['miarchivo']['tmp_name'],$destino)){
                echo "<h2>Archivo subido exitosamente! :)</h2>";
            }else{
                echo "<h2>Algo malo paso! :(</h2>";
            }

            //Estructura de la variable $_FILES
            /*
            Array
            (
                [miarchivo] => Array
                    (
                        [name] => photo-1495996797143-9fc04e79e304.webp
                        [type] => image/webp
                        [tmp_name] => C:\xampp\tmp\php3CDD.tmp
                        [error] => 0
                        [size] => 93165
                    )

            )
            */
        }
    ?>
    </pre>


</body>
</html>