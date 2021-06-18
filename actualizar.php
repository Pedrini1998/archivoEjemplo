<?php

include("conexion.php");

$newuser = "cosa";
$id = 1;

mysqli_query($conexion, "UPDATE usuarios SET usuario = '$newuser' WHERE id = '1'");
mysqli_close($conexion);
?>