<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_POST["montoenvio"])) {
    $montoenvio = $_POST["montoenvio"];
    $texto_envio = $_POST["texto_envio"];
    $sql =
        "insert into envio (montoenvio, texto_envio) values
     ( '" .$montoenvio ."','" .$texto_envio."')";
    mysqli_query($conexion, $sql);
    if(mysqli_query($conexion, $sql)){
        echo '<script type="text/javascript">
        alert("Envio registrado!");
        window.location="Verenvio.php"
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Algo salio mal!");
        window.location="Verenvio.php"
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
            <form action="Agregarenvio.php"  method="POST"  class=" container form">
                
            <h1 class="ptext" >Registro de un nuevo monto de envío.</1> 
                
                <div class="form-group">
                    <label  class="ptext">Texto de da banda:</label>
                    <input type="text" class="form-control"   name="texto_envio" required>
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Monto en MXN:</label>
                    <input type="text" class="form-control"   name="montoenvio" required>
                    
                </div>
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Agregar nuevo monto">
                
            </form>
            <br>
            </div>
        </div> 
    </div><!-- /.container-fluid -->

    </body>
</html>
     