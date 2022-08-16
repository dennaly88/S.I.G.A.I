<?php
$servername = "localhost";
$database = "S.I.G.A.I";
$username = "root";
$password = "Danny16029567*";
$conexion = mysqli_connect($servername, $username, $password, $database);
if (!$conexion) {
    die("CONEXION FALLIDA ALGO ESTA MAL : " . mysqli_connect_error());
}


?>
