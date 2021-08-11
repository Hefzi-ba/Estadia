<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["nombreusuario"])) {
    $nombreusuario = $_POST["nombreusuario"];
    $correousuario = $_POST["correousuario"];
    $contrasena = md5($_POST["contrasena"]);
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
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Usuario registrado!");
        window.location="Verusuarios.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Verusuarios.php"
        </script>';
    }
}
?>

<html lang="en">
   
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
            
            
            <div class="form-group">
                    <label  class="ptext">Tipo de usuario:</label>
                    
                    
                    <select type="text" name="tipodeusuario" class="form-select" aria-label="Default select example" 
                    value='<?php echo $fila["tipodeusuario"]; ?>'>
                        <option namespace="tipodeusuario" selected>Usuario...</option>
                        <option namespace="tipodeusuario" value="Administrador">Administrador</option>
                    </select>
            </div>
        </div>
           <br>
            
            <input type="submit" class="w-100 btnx btn btn btn-outline-dark" value="Registrar usuario">
            
        </form>
        </div>
        </div> 
    </div><!-- /.container-fluid -->
        
    </body>
</html>

     