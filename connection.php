<?php
$host = "http://ec2-18-117-100-224.us-east-2.compute.amazonaws.com/"; // Cambia esto si tu servidor MySQL no está en el mismo host que tu PHP
$usuario = "B07"; // Reemplaza esto con el nombre de usuario de tu MySQL
$contrasena = "123"; // Reemplaza esto con la contraseña de tu MySQL
$base_datos = "dbexample"; // Reemplaza esto con el nombre de tu base de datos

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos.";
?>