<?php
$host = "localhost";       // Cambia si tu servidor no es local
$user = "root";            // Tu usuario de MySQL
$pass = "";                // Tu contraseña, si tienes
$db = "resenas";  // Cambia esto por el nombre real de tu base de datos

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>