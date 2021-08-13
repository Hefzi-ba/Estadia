<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["tipoentrega"])) {
    $tipoentrega = $_POST["tipoentrega"];

    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "imagenes/Inicio";
    $imagenentrega= $_FILES["imagenentrega"]["name"];
    $nombre_temporal = $_FILES["imagenentrega"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imagenentrega")) {
       
    } else {
        
    }
    $sql =
        "insert into entrega (tipoentrega, imgentrega) values
     ( '" .
        $tipoentrega .
        "','" .
        $imagenentrega .
        "')";
    mysqli_query($conexion, $sql);
    $ultimoid = mysqli_insert_id($conexion);
    if(mysqli_query($conexion, $sql)){
       
        echo '<script type="text/javascript">
        alert("Entrega registrada!");
        window.location="Verentrega.php"
        </script>';
    
       
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Verentrega.php"
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
            <form action="Agregartipoentrega.php"  method="POST" enctype="multipart/form-data" class=" container form">
                
            <h1 class="ptext" >Registro de tipos de entrega.</h1> 
                <div class="form-group">
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" class="form-control"   name="imagenentrega" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Tipo de entrega:</label>
                    <input type="text" class="form-control"   name="tipoentrega" required>
                    
                </div>
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->





    </body>
</html>
     