<!DOCTYPE html>
<html lang="en">
<?php
session_start();
session_destroy();
?>
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
    
        <form method="POST" action="conexion/validar.php" class="was-validated container" >
        <img class="mb-4" src="./imagenes/logoDCpng.png" alt="" width="200px" height="200px" style="margin-left: 40%;">
            
            <div class="form-group">
            
                <label  class="letraslogin">Usuario:</label>
                <input type="text" class="form-control"  placeholder="Introduzca su usuario" name="usuario" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Vacio es invalido</div>
            </div>
            <div class="form-group">
                <label  class="letraslogin">Contraseña:</label>
                <input type="password" class="form-control"  placeholder="*******" name="contrasena" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Vacio es invalido</div>
            </div>
           <br>
            <button type="submit" class="w-100 btnx btn btn btn-outline-light">Iniciar sesión</button>
        </form>
        



        <main class="form-signin">
         <form  method="POST" action="phpconexion/validar.php">
         <img class="mb-4" src="./Imagenes/LOGOPAAT.png" alt="" width="72" height="57" style="margin-left: 40%;">

            <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required>
            
            <input type="text" class="form-control" name="contraseña" placeholder="******" require>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
        </form>
    </main>  
        
    </body>
</html>
      