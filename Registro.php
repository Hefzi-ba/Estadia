<?php

include "conexion/Conexion.php";
if (isset($_POST["nombreusuario"])) {
    $nombreusuario = $_POST["nombreusuario"];
    $correousuario = $_POST["correousuario"];
    $contrasena = $_POST["contrasena"];
    $ciudad = $_POST["ciudad"];
    $calles = $_POST["calles"];
    $domicilio = $_POST["domicilio"];
    $codigo_postal = $_POST["codigo_postal"];

    $telefono = $_POST["telefono"];

    $sql =
        "insert into usuarios (  nombreusuario,  correousuario, contrasena, ciudad, calles, domicilio, codigo_postal, telefono) values
     ( '" .
        $nombreusuario .
        "','" .
        $correousuario .
        "','" .
        $contrasena .
        "','" .
        $ciudad .
        "','" .
        $calles .
        "','" .
        $domicilio .
        "','" .
        $codigo_postal .
        "','" .
        $telefono .
        "')";
    mysqli_query($conexion, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./css/bootstrap.css" rel="stylesheet">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./css/estiloDC.css" rel="stylesheet">
   
        <title>DarkCube</title>
    </head>
    <body class="fondologin">
       
    <a href="index.php" type="button" class="btn-close btn-close-white" aria-label="Close"> </a>
    
        <form action="Registro.php" method="POST" class=" container form" style="margin-bottom: 20%;">
        <div>
            
        <img class="mb-4" src="./imagenes/logoDCpng.png" alt="" width="200px" height="200px" style="margin-left: 40%;">
            <div class="form-group">
            
                <label for="uname" class="letraslogin">Usuario:</label>
                <input type="text" class="form-control" id="uname" placeholder="Introduzca un usuario de registro" name="nombreusuario" required>
                
            </div>
            <div class="form-group">
            
            <label for="uname" class="letraslogin">Correo:</label>
            <input type="text" class="form-control" id="uname" placeholder="nombre@*****.com" name="correousuario" required>
            
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña que sea  facil de recordar " name="contrasena" required>
                
            </div>
            <div >
                
                <h1  class="letraslogin" style="text-align: center;">Datos necesarios para envíos. </h1>
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Ciudad:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Nuevo casas grandes, Chih. Mex.  " name="ciudad" required>
                
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Calle:</label>
                <input type="text" class="form-control" id="pwd" placeholder="16 de Septiembre " name="calles" required>
                
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Domicilio:</label>
                <input type="text" class="form-control" id="pwd" placeholder="#1209 " name="domicilio" required>
                
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Código postal:</label>
                <input type="text" class="form-control" id="pwd" placeholder=" 31700" name="codigo_postal" required>
                
            </div>
            <div class="form-group">
                <label for="pwd" class="letraslogin">Teléfono:</label>
                <input type="text" class="form-control" id="pwd" placeholder="telefono" name="telefono" required>
                
            </div>
           <br>
            <button  type="submit" class="w-100 btnx btn btn btn-outline-light">Registrarse</button>
            
        </form>
        
        
    </body>
</html>

     