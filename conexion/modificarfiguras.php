<?PHP 
   

   
    include("conexion.php");
    
    $sql="select * from ropa  where id=".$_GET['id']." and categoria='Figuras'";
    $resultado2=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_array($resultado2);
    if(isset($_POST['nombrebolso'])){
        $sql="update ropa  set  codigo='".$_POST['codigo']."',nombre='".$_POST['nombre']."',  descripcion='".$_POST['descripcion']."', precio='".$_POST['precio']."', existencia='".$_POST['existencia']."' where  id=".$_POST['id']." and categoria='Figuras'";
        mysqli_query($conexion,$sql);
        echo $sql;
        header('location: ../Verfiguras.php');
    }

  


    if(isset($_FILES['imagen'])){
        $formatos=array('.png','.jpg', '.gif', '.jpeg');
        $ubicacion="../imagenes/Productos";
        $imagen=$_FILES['imagen']['name'];
        $nombre_temporal=$_FILES['imagen']['tmp_name'];
        if(move_uploaded_file($nombre_temporal,"$ubicacion/$imagen")){
          echo 'se movio';
          $sqlimagen="update ropa set imagen='".$imagen."' where id=".$_POST['idImagen']." and categoria='Figuras'";
          mysqli_query($conexion,$sqlimagen);
        }else{
          echo 'no se movio';
        }
        header('location: ../Verfiguras.php');
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
            <form action="modificarfiguras.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de producto en Figuras.</h1>  
                <div class="form-group">
                
                    <label  class="ptext">Codigo:</label>
                    <input type="text" class="form-control"   name="codigo" value='<?php echo $fila['codigo'] ?>' >
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Nombre:</label>
                    <input type="text" class="form-control"   name="nombre"  value='<?php echo $fila['nombre'] ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Descripción:</label>
                    <input type="text" class="form-control"  name="descripcion" value='<?php echo $fila['descripcion'] ?>'>
                    
                </div>
                
                   
                    
                <div class="form-group">
                    <label  class="ptext">Precio:</label>
                    <input type="text" class="form-control"  name="precio" value='<?php echo $fila['precio'] ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Cantidad de piezas existentes:</label>
                    <input type="text" class="form-control"  name="existencia" value='<?php echo $fila['existencia'] ?>' >
                    
                </div>
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar edición">
                <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->


    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="modificarfiguras.php" method="post" enctype="multipart/form-data">

                
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" name="imagen" >
                
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar nueva imagen">
                <input type="hidden" name="idImagen" value="<?php echo $fila['id'] ?>">
                <br>
            </form>
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
     