<?php
ob_start();
include ("./conexion/Conexion.php");
 include("indexad2.php");
$sql = "select * from footer ";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
    if (isset($_POST["titulofooter"])) {
        $sql =
            "update footer set titulofooter='" .$_POST["titulofooter"] ."',  horario='" .$_POST["horario"] ."', telefonofooter='" . $_POST["telefonofooter"] ."', 
            correofooter='" .$_POST["correofooter"] ."', piefooter='" .$_POST["piefooter"] ."' where id=" . $_POST["id"] ." ";

        mysqli_query($conexion, $sql);
        
        header('location: ./Verfooter.php');
        ob_end_flush();
    }
    if (isset($_FILES["ligafooter"])) {
        $formatos = [".png", ".jpg", ".gif", ".jpeg"];
        $ubicacion = "./imagenes/redsocial";
        $ligafooter = $_FILES["ligafooter"]["name"];
        $nombre_temporal = $_FILES["ligafooter"]["tmp_name"];
        if (move_uploaded_file($nombre_temporal, "$ubicacion/$ligafooter")) {
            
            $sqlimagen ="update footer set ligafooter='" .$ligafooter ."' where id=" .$_POST["idImagen"] ."";
            mysqli_query($conexion, $sqlimagen);
            header('location: ./Verfooter.php');
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
            header('location: ./Verfooter.php');
        }
    }
?>
<body>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Editarfooter.php"  method="POST"  class=" container form">
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
            <form action="Editarfooter.php" method="post" enctype="multipart/form-data" class="container form ">

                
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
            <form action="Editarfooter.php" method="post" enctype="multipart/form-data" class="container form ">

                
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

</body>
    