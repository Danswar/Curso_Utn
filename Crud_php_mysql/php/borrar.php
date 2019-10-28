<?php

$id=$_GET['id'];

$conn = mysqli_connect("localhost","root","","wm2019");
$sql = "DELETE FROM autor WHERE id = {$id}";
mysqli_query($conn,$sql);

header('Location: ../index.php');


?>