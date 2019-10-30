<?php 
   session_start();

     echo "<h1>Estas en otra pagina del mismo sitio</h1>";
     echo "<h2>tu informacion de session aun esta disponible</h2>";
     echo "<pre>";
     print_r($_SESSION);
     echo "</pre>";

     
    //ya dejamos de usar las sessiones
    session_destroy();

?>