<?php
include "conexion/Conexion.php";
if (isset($_POST["nombreusuario"])) {
    $nombreusuario = $_POST["nombreusuario"];
    $correousuario = $_POST["correousuario"];
    $contrasena =md5( $_POST["contrasena"]);
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
    if(mysqli_query($conexion, $sql)){
        echo "<script>alert('Usuario registrado: $nombreusuario')window.location='index.php'</script>";
    }else{
        echo "<script>alert('Usuario no registrado')</script>";
    }
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
        <link href="./css/login.css" rel="stylesheet">
   
        <title>DarkCube</title>
    </head>
    <body class=""> 
       
    
    
    <form action="Registro.php" method="POST" class="container" style="margin-bottom: 20%;" >
        <div class="body"></div>
        <div class="grad">
        <div class="container">
            
           
                <div class="form-group container " style="margin-top: 2%;">
                
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-close btn-close-white me-md-2" type="button" href="index.php"></a>
                    </div>
                    <label for="uname" class="letraslogin">Usuario:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Introduzca un usuario de registro" name="nombreusuario" required>
                    
                </div>
                <div class="form-group container">
                
                    <label for="uname" class="letraslogin">Correo:</label>
                    <input type="text" class="form-control" id="uname" placeholder="nombre@*****.com" name="correousuario" required>
                    
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">Contrase??a:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Contrase??a que sea  facil de recordar " name="contrasena" required>
                    
                </div>
                <div >
                    
                    <h1  class="letraslogin" style="text-align: center;">Datos necesarios para env??os. </h1>
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">Ciudad:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Nuevo casas grandes, Chih. Mex.  " name="ciudad" required>
                    
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">Calle:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="16 de Septiembre " name="calles" required>
                    
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">Domicilio:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="#1209 " name="domicilio" required>
                    
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">C??digo postal:</label>
                    <input type="text" class="form-control" id="pwd" placeholder=" 31700" name="codigo_postal" required>
                    
                </div>
                <div class="form-group container">
                    <label for="pwd" class="letraslogin">Tel??fono:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="telefono" name="telefono" required>
                    
                </div>
               <br>
                <button  type="submit" class="w-100 btnx btn btn btn-outline-light ">Registrarse</button>
                
        </div>
        
    </form>
        
        
    </body>
</html>

     