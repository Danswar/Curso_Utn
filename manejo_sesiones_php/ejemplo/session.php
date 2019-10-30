<?php 
    //inicia uso de session
    session_start();

    $_SESSION['info1']='Información de tu sesion en particular';
    $_SESSION['info2']='Otra información de la misma sesion en particular';

    echo "<h1>Información de tu session guardada en el servidor</h1>";
    echo "<pre>";
    print_r($_SESSION); 
    echo "</pre>";

    echo "<a href='otra_pagina.php'>Ir a la siguiente pagina</a>";

   
?>