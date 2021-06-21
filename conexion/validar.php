<?php
include("Conexion.php");
session_start();
$usuario=$_POST['usuario'];
$contra=$_POST['contrasena'];
$sql="select * from usuarios where nombreusuario='".$usuario."' and contrasena= '".$contra."' and tipodeusuario='admin'";

$respuesta=mysqli_query($conexion,$sql);
$filas=mysqli_num_rows($respuesta);
if($filas>0){
    $_SESSION['usuario']=$usuario;
    header("location:../Verproducto.php");

}
$sql2="select * from usuarios where nombreusuario='".$usuario."' and contrasena= '".$contra."' and tipodeusuario='cliente'";
$respuesta2=mysqli_query($conexion,$sql2);
$filas2=mysqli_num_rows($respuesta2);
if($filas2>0){
    $_SESSION['usuario']=$usuario;
    header("location:../catalogo.php");
}else{
    header("location:../loguin.php");
}
?>