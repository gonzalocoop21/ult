<?php
$servidor = "mangito.mysql.database.azure.com";
$usuario = "azureuser";
$contrasena = "123456Aa";
$base_de_datos = "tienda";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "¡Conexión exitosa!";
}
?>