
 
 
<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["nombreusuario"])) {
    $nombreusuario = $_POST["nombreusuario"];
    $correousuario = $_POST["correousuario"];
    $contrasena = $_POST["contrasena"];
    $tipodeusuario = $_POST["tipodeusuario"];

    $sql =
        "insert into usuarios (  nombreusuario,  correousuario, contrasena, tipodeusuario) values
     ( '" .
        $nombreusuario .
        "','" .
        $correousuario .
        "','" .
        $contrasena .
        "','" .
        $tipodeusuario .
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
    <br>
    <br>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
    <a href="Menuadmin2.php" type="button" class="btn-close btn-close-white" aria-label="Close"> </a>
    
        <form action="Agregarusuarioadmin.php" class=" container form" method="POST" style="margin-bottom: 20%;">
        <h1 class="ptext" >Registro de un nuevo usuario.</h1> 
        <div>
            
        <img class="mb-4" src="./imagenes/logoDCpng.png" alt="" width="200px" height="200px" style="margin-left: 40%;">
            <div class="form-group">
            
                <label for="uname" class="ptext">Usuario:</label>
                <input type="text" class="form-control" id="uname" placeholder="Introduzca un usuario de registro" name="nombreusuario" required>
                
            </div>
            <div class="form-group">
            
            <label for="uname" class="ptext">Correo:</label>
            <input type="text" class="form-control" id="uname" placeholder="nombre@*****.com" name="correousuario" required>
            
            </div>
            <div class="form-group">
                <label for="pwd" class="ptext">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña que sea  facil de recordar " name="contrasena" required>
                
            </div>
            <div class="form-group">
            
            <label for="uname" class="ptext">Tipo de Usuario:</label>
            <input type="text" class="form-control" id="uname" placeholder="Escriba la palabra 'admin'" name="tipodeusuario" required>
            
        </div>
           <br>
            
            <input type="submit" class="w-100 btnx btn btn btn-outline-dark" value="Registrar usuario">
            
        </form>
        </div>
        </div> 
    </div><!-- /.container-fluid -->
        
    </body>
</html>

     