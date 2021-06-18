<?php

include("conexion.php");

$newuser = "cosa";
$id = 1;

mysqli_query($conexion, "DELETE FROM usuarios WHERE id ='$id'");
mysqli_close($conexion);
?>