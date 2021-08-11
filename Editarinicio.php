<?php 
include "./conexion/Conexion.php";
include "indexad2.php";
$sql =
    "select * from inicio  where id=" . $_GET["id"] . " ";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["titular"])) {
    $sql =
        "update inicio  set  titular='" .$_POST["titular"] ."'  where  id=" .$_POST["id"] ." ";
    mysqli_query($conexion, $sql);
    echo $sql;
    header("location: ./Vernovedad.php");
    ob_end_flush();
}

if (isset($_FILES["imageninicio"])) {
    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "./imagenes/Inicio";
    $imagen = $_FILES["imageninicio"]["name"];
    $nombre_temporal = $_FILES["imageninicio"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imagen")) {
        $sqlimagen ="update inicio set imageninicio='" .$imagen ."' where id=" .$_POST["idImagen"] ." ";
        mysqli_query($conexion, $sqlimagen);
    } else {
        echo "no se movio";
    }
    header("location: ./Vernovedad.php");
}
?>

<body >
       

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <form action="Editarinicio.php"  method="POST"  class=" container form">
            <h1 class="banderin" style="

              font-family:fantasy;
               letter-spacing: 2px;">Edición de novedad.</h1>  
                
                
                <div class="form-group">
                    <label  class="ptext">Titular:</label>
                    <input type="text" class="form-control"   name="titular"  value='<?php echo $fila[
                        "titular"
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
            <form action="Editarinicio.php" method="post" enctype="multipart/form-data" class="container form ">

                
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" name="imageninicio" >
                
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar nueva imagen">
                <input type="hidden" name="idImagen" value="<?php echo $fila[
                    "id"
                ]; ?>">
                <br>
            </form>
            </div>
        </div> 
    </div><!-- /.container-fluid -->

</body>
  