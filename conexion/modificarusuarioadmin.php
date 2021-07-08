<?PHP 
   
    include("conexion.php");
    
    $sql="select * from usuarios where id=".$_GET['id']."";
    $resultado2=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_array($resultado2);
    if(isset($_POST['nombreusuario'])){
        $sql="update usuarios set nombreusuario='".$_POST['nombreusuario']."',  correousuario='".$_POST['correousuario']."', contrasena='".$_POST['contrasena']."' where id=".$_POST['id']."";
        mysqli_query($conexion,$sql);
        echo $sql;
        header('location: ../Verusuarios.php');
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
    <body >
       

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="modificarusuarioadmin.php"  method="POST"  class=" container form">
            <p class="banderin" style="background-color:  rgb(63, 59, 59);
             color:white;
              font-family:fantasy;
               letter-spacing: 2px;">Edición de usuarios.</p> 
                <div class="form-group">
                
                    <label  class="ptext">Usuario:</label>
                    <input type="text" class="form-control"   name="nombreusuario" value='<?php echo $fila['nombreusuario'] ?>' >
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Correo:</label>
                    <input type="text" class="form-control"   name="correousuario"  value='<?php echo $fila['correousuario'] ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">contrasena:</label>
                    <input type="pwd" class="form-control"  name="contrasena" value='<?php echo $fila['contrasena'] ?>'>
                    
                </div>
                
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar edición">
                <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->


   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>
     