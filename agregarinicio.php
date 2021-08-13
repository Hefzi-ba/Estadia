<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["titular"])) {
    $titular = $_POST["titular"];

    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "imagenes/Inicio";
    $imageninicio= $_FILES["imageninicio"]["name"];
    $nombre_temporal = $_FILES["imageninicio"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imageninicio")) {
        echo "se movio";
    } else {
        echo "no se movio";
    }
    $sql =
        "insert into inicio (titular, imageninicio) values
     ( '" .
        $titular .
        "','" .
        $imageninicio .
        "')";
    mysqli_query($conexion, $sql);
    $ultimoid = mysqli_insert_id($conexion);
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Novedad registrada!");
        window.location="Vernovedad.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Vernovedad.php"
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
            <form action="agregarinicio.php"  method="POST" enctype="multipart/form-data" class=" container form">
                
            <h1 class="ptext" >Registro de una nueva novedad o marca.</h1> 
                <div class="form-group">
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" class="form-control"   name="imageninicio" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Titular:</label>
                    <input type="text" class="form-control"   name="titular" required>
                    
                </div>
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar a inicio">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->



    </body>
</html>
     