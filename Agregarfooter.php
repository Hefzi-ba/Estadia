<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["titulofooter"])) {
    $titulofooter = $_POST["titulofooter"];
    $horario = $_POST["horario"];
    $telefonofooter = $_POST["telefonofooter"];
    $correofooter = $_POST["correofooter"];
    $piefooter = $_POST["piefooter"];


    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "imagenes/redsocial";
    $ligafooter = $_FILES["ligafooter"]["name"];
    $nombre_temporal = $_FILES["ligafooter"]["tmp_name"];

    $formatos2= [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion2 = "imagenes/redsocial";
    $instagram= $_FILES["instagram"]["name"];
    $nombre_temporal2 = $_FILES["instagram"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$ligafooter")) {
        
    } else {
        
    }
    if (move_uploaded_file($nombre_temporal2, "$ubicacion2/$instagram")) {
        
    } else {
        
    }
    $sql =
        "insert into footer ( titulofooter, horario, telefonofooter, correofooter, ligafooter, instagram, piefooter) values
     ( '" .
        $titulofooter .
        "','" .
        $horario .
        "','" .
        $telefonofooter .
        "', '" .
        $correofooter .
        "', '" .
        $ligafooter .
        "', '" .
        $instagram .
        "','" .$piefooter .
        "')";
    mysqli_query($conexion, $sql);
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Registrado!");
        window.location="Verfooter.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Verfooter.php"
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
            <form action="Agregarfooter.php"  method="POST" enctype="multipart/form-data" class=" container form">
            <h1 class="ptext" >Datos de footer.</h1> 
                <div class="form-group">
                
                    <label  class="ptext">Titulo de footer:</label>
                    <input type="text" class="form-control"   name="titulofooter" required>
                    
                </div>
                <div class="form-group">
                
                    <label  class="ptext">Horario de atención:</label>
                    <input type="text" class="form-control"   name="horario" required>
                    
                </div>
                <div class="form-group">
                
                    <label  class="ptext">Teléfono:</label>
                    <input type="text" class="form-control"   name="telefonofooter" required>
                    
                </div>
                <div class="form-group">
                
                    <label  class="ptext">Correo de DarkCube:</label>
                    <input type="text" class="form-control"   name="correofooter" required>
                    
                </div>

                <div class="form-group">
                    <label  class="ptext">Icono de red social:</label>
                    <input type="file" class="form-control"   name="ligafooter" required>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Instagram:</label>
                    <input type="file" class="form-control"   name="instagram" required>
                    
                </div>
                <div class="form-group">
                
                    <label  class="ptext">Pie de footer:</label>
                    <input type="text" class="form-control"   name="piefooter" required>
                    
                </div>
                
                    
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar información de footer">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->

    </body>
</html>
     