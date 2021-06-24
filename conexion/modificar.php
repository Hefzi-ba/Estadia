<?PHP 
   
    include("conexion.php");
    $sql="select * from ropa where id=".$_GET['id']."";
    $resultado2=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_array($resultado2);
    if(isset($_POST['nombre'])){
        $sql="update ropa set codigo='codigo', imagen='imagen', nombre='nombre', descripcion='descripcion', precio='precio', existencia='existencia' where id=".$_POST['id']."";
        mysqli_query($conexion,$sql);
        header('location: ../Verproducto.php');
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
            <form action="modificar.php"  method="POST" enctype="multipart/form-data" class=" container form">
                
                <div class="form-group">
                
                    <label  class="ptext">Codigo:</label>
                    <input type="text" class="form-control"   name="codigo" value='<?php echo $fila['codigo'] ?>' >
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" class="form-control"   name="imagen" value='<?php echo $fila['imagen'] ?>' >
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Nombre:</label>
                    <input type="text" class="form-control"   name="nombre"  value='<?php echo $fila['nombre'] ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Descripción:</label>
                    <input type="text" class="form-control"  name="descripcion" value='<?php echo $fila['descripcion'] ?>'>
                    
                </div>
                <label class="ptext">Marque las tallas existentes:</label>
                    <br>
                    <?php
                    $consulta="select * from tabladetallas";
                    $resultado=mysqli_query($conexion,$consulta);
                    while($arreglo2=mysqli_fetch_array($resultado)){
                        echo'
                        <br><div class="form-check form-switch ">
                        <input name="tallas[]" class="form-check-input " type="checkbox"  value="'.$arreglo2['nombretalla'].'"> '.$arreglo2['nombretalla'].'
                        </div>
                        
                    
                        ';
                    }
                    ?>
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
     