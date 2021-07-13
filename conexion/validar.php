<?php
include("Conexion.php");
session_start();
$usuario=$_POST['usuario'];
$contra=$_POST['contrasena'];
$sql2="select * from usuarios where nombreusuario='".$usuario."' and contrasena= '".$contra."'";
$respuesta2=mysqli_query($conexion,$sql2);
$vaciar=mysqli_fetch_array($respuesta2);
$filas2=mysqli_num_rows($respuesta2);
if($filas2>0){
    $_SESSION['usuario']=$usuario;
    $_SESSION['idusuario']=$vaciar['id'];
    if($vaciar['tipodeusuario']=='admin'){
        header("location:../estadistica3.php");
    }else{
        header("location:../index.php");
    }
    
}else{
    
    header("location:../loguin.php");
}
?>