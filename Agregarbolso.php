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
        ", '" .$existencia ."','" .$categoria ."')";
    mysqli_query($conexion, $sql);
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Bolso registrado!");
        window.location="Verbolso.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Verbolso.php"
        </script>';
    }
}  
?>

<html lang="en">
    
    <body >
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
                    <label  class="ptext">Existencia:</label>
                    
                    <select name="existencia" class="form-select" aria-label="Default select example">
                        <option selected>Existencia en...</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                        
                    </select>
                    
                </div>
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar Producto">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->

    </body>
</html>
     