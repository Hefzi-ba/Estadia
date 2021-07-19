<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$bd = "darkcube";
($conexion = mysqli_connect($servidor, $usuario, $pass, $bd)) or
    die("Problema en conexión");

?>
