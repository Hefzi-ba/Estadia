
<?php
include ("conexion.php");
 
$sql = "select * from footer ";

$resultado2 = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_array($resultado2);

    if (isset($_POST["titulofooter"])) {
        $sql =
            "update footer set titulofooter='" .$_POST["titulofooter"] ."',  horario='" .$_POST["horario"] ."', telefonofooter='" . $_POST["telefonofooter"] ."', 
            correofooter='" .$_POST["correofooter"] ."', piefooter='" .$_POST["piefooter"] ."' where id=" . $_POST["id"] ." ";

        mysqli_query($conexion, $sql);
        
        header('location: ../Verfooter.php');
    }

    if (isset($_FILES["ligafooter"])) {
        $formatos = [".png", ".jpg", ".gif", ".jpeg"];
        $ubicacion = "../imagenes/redsocial";
        $ligafooter = $_FILES["ligafooter"]["name"];
        $nombre_temporal = $_FILES["ligafooter"]["tmp_name"];
        if (move_uploaded_file($nombre_temporal, "$ubicacion/$ligafooter")) {
            
            $sqlimagen ="update footer set ligafooter='" .$ligafooter ."' where id=" .$_POST["idImagen"] ."";
            mysqli_query($conexion, $sqlimagen);
            header('location: ../Verfooter.php');
        }
    }
    if (isset($_FILES["instagram"])) {
        $formatos2 = [".png", ".jpg", ".gif", ".jpeg"];
        $ubicacion2 = "../imagenes/redsocial";
        $instagram = $_FILES["instagram"]["name"];
        $nombre_temporal2 = $_FILES["instagram"]["tmp_name"];
        if (move_uploaded_file($nombre_temporal2, "$ubicacion2/$instagram")) {
            
            $sqlimagen2 ="update footer set instagram='" .$instagram ."' where id=" .$_POST["idImagen2"] ."";
            mysqli_query($conexion, $sqlimagen2);
            header('location: ../Verfooter.php');
        }
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
    
    <body>
       

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="modificarfooter.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de footer.</h1> 
                <div class="form-group">
                
                    <label  class="ptext">Titulo:</label>
                    <input type="text" class="form-control"   name="titulofooter" value='<?php echo $fila[
                        "titulofooter"
                    ]; ?>' >
                    
                </div>
                
                <div class="form-group">
                    <label  class="ptext">Horario:</label>
                    <input type="text" class="form-control"   name="horario"  value='<?php echo $fila[
                        "horario"
                    ]; ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Teléfono:</label>
                    <input type="text" class="form-control"  name="telefonofooter" value='<?php echo $fila[
                        "telefonofooter"
                    ]; ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Correo:</label>
                    <input type="text" class="form-control"  name="correofooter" value='<?php echo $fila[
                        "correofooter"
                    ]; ?>'>
                    
                </div>
                <div class="form-group">
                    <label  class="ptext">Pie de footer:</label>
                    <input type="text" class="form-control"  name="piefooter" value='<?php echo $fila[
                        "piefooter"
                    ]; ?>'>
                    
                </div>
                
                
            <br>
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar edición">
                <input type="hidden" name="id" value="<?php echo $fila[
                    "id"
                ]; ?>">
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
            <form action="modificarfooter.php" method="post" enctype="multipart/form-data" class="container form ">

                
                    <label  class="ptext">Facebook logo:</label>
                    <input type="file" name="ligafooter" >
                
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar nuevo icono">
                <input type="hidden" name="idImagen" value="<?php echo $fila[
                    "id"
                ]; ?>">
                <br>
            </form>
            </div>
        </div> 
    </div><!-- /.container-fluid -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="modificarfooter.php" method="post" enctype="multipart/form-data" class="container form ">

                
                    <label  class="ptext">Instagram logo:</label>
                    <input type="file" name="instagram" >
                
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar nuevo icono">
                <input type="hidden" name="idImagen2" value="<?php echo $fila[
                    "id"
                ]; ?>">
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
     