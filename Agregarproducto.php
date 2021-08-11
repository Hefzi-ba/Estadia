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

    $tallas = $_POST["tallas"];
    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "imagenes/Productos";
    $imagen = $_FILES["imagen"]["name"];
    $nombre_temporal = $_FILES["imagen"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imagen")) {
        
    } else {
        
    }
    $sql =
        "insert into ropa ( codigo, nombre, imagen, descripcion, precio, existencia, categoria) values
     ( '" .$codigo ."','" .$nombre ."','" .$imagen ."','" .$descripcion ."',
      " .$precio .", '" .$existencia ."','" .$categoria ."')";
    mysqli_query($conexion, $sql);

    foreach ($_POST["tallas"] as $talla) {
        $sql3 =
            "insert into tallas(nombretalla, codigoropa) values 
        ('" .
            $talla .
            "','" .
            $codigo .
            "')";
        mysqli_query($conexion, $sql3);
    }
    if(mysqli_query($conexion, $sql) && mysqli_query($conexion, $sql3)){
       
            echo '<script type="text/javascript">
            alert("Prenda registrada!");
            window.location="Verproducto.php"
            </script>';
        
           
        }else{
            echo '<script type="text/javascript">
            alert("Algo salio mal!");
            window.location="Verproducto.php"
            </script>';
        }
    }

?>

<html lang="en">
  
    <body >
       
    <br>
    <br>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Agregarproducto.php"  method="POST" enctype="multipart/form-data" class=" container form">
            <h1 class="ptext" >Registro de una nueva prenda.</h1> 
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
                <label class="ptext">Marque las tallas existentes:</label>
                    <br>
                    <?php
                    $consulta = "select * from tabladetallas";
                    $resultado = mysqli_query($conexion, $consulta);
                    while ($arreglo2 = mysqli_fetch_array($resultado)) {
                        echo '
                        <br><div class="form-check form-switch ">
                        <input name="tallas[]" class="form-check-input " type="checkbox"  value="' .
                            $arreglo2["nombretalla"] .
                            '"> ' .
                            $arreglo2["nombretalla"] .
                            '
                        </div>
                        
                    
                        ';
                    }
                    ?>
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
     