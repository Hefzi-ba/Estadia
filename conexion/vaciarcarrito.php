<?php
session_start();

session_destroy($_SESSION["carrito"]);
header("location:../catalogo.php");
?>
