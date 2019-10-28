<?php
    $id= $_POST['id'];
    echo $id;
    $name = $_POST['name'];
    $conn = mysqli_connect("localhost","root","","wm2019");
    $sql = "UPDATE autor SET nombre ='{$name}' WHERE id = {$id} ";
    
    mysqli_query($conn,$sql);
    
    header('Location: ../index.php');
?>