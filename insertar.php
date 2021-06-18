<?php

include("conexion.php");

$pass = "$_REQUEST[pass]";
$nombre = "$_REQUEST[nombre]";

mysqli_query($conexion, "INSERT INTO usuarios (usuario,clave,fecha) VALUES ('$nombre','$pass',now())");
mysqli_close($conexion);
?>