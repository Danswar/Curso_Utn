<?php
    $name = $_POST['name'];
    $conn = mysqli_connect("localhost","root","","wm2019");
    $sql = "INSERT INTO `autor`(`nombre`) VALUES ('{$name}')";
    
    mysqli_query($conn,$sql);
    
    header('Location: ../index.php');
?>