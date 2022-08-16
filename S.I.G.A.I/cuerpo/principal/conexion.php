

<?php
$servidor = "localhost";
$usuario = "root";
$clave = "Danny16029567*";
$base = "S.I.G.A.I";


$conexion = new mysqli($servidor, $usuario, $clave, $base);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}