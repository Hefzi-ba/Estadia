
 
 
<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $existencia = $_POST["existencia"];
    $codigo = $_POST["codigo"];

    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "imagenes/Productos";
    $imagen = $_FILES["imagen"]["name"];
    $nombre_temporal = $_FILES["imagen"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imagen")) {
        echo "se movio";
    } else {
        echo "no se movio";
    }
    $sql =
        "insert into ropa ( codigo, nombre, imagen, descripcion, precio, existencia, categoria) values
     ( '" .
        $codigo .
        "','" .
        $nombre .
        "','" .
        $imagen .
        "','" .
        $descripcion .
        "', " .
        $precio .
        ", " .
        $existencia .
        ",'" .
        $categoria .
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
    <body >
       
    <br>
    <br>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Agregarbolso.php"  method="POST" enctype="multipart/form-data" class=" container form">
            <h1 class="ptext" >Registro de una nueva bolso.</h1> 
                <div class="form-group">
                
                    <label  class="ptext">Codigo:</label>
                    <input type="text" class="form-control"   name="codigo" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" class="form-control"   name="imagen" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Nombre:</label>
                    <input type="text" class="form-control"   name="nombre" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Categoria:</label>
                    <select name="categoria"  class="form-control" class="form-select">
                        <?php
                        include "conexion/Conexion.php";
                        $sql = "select * from categoria";

                        $respuesta = mysqli_query($conexion, $sql);
                        while ($arreglo = mysqli_fetch_array($respuesta)) {
                            echo '
                            <option>' .
                                $arreglo["nombrecategoria"] .
                                "</option>";
                        }
                        ?>
                        
                    </select>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Descripción:</label>
                    <input type="text" class="form-control"  name="descripcion" required>
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Precio:</label>
                    <input type="text" class="form-control"  name="precio" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Cantidad de piezas existentes:</label>
                    <input type="text" class="form-control"  name="existencia" required>
                    
                </div>
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar Producto">
                
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
     