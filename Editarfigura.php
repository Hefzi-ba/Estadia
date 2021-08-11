<?php
ob_start();
include ("./conexion/Conexion.php");
include("indexad2.php");
$sql ="select * from ropa  where id=" . $_GET["id"] . " and categoria='Figuras'";
$resultado2 = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado2);
if (isset($_POST["nombre"])) {
    $sql ="update ropa  set  codigo='" .$_POST["codigo"] ."',nombre='".$_POST["nombre"]."',descripcion='".$_POST["descripcion"]."', precio='".$_POST["precio"]."', existencia='" .
        $_POST["existencia"] ."' where  id=" .$_POST["id"] ." and categoria='Figuras'";
    mysqli_query($conexion, $sql);
    header("location:./Verfiguras.php");
    ob_end_flush();
}

if (isset($_FILES["imagen"])) {
    $formatos = [".png", ".jpg", ".gif", ".jpeg"];
    $ubicacion = "./imagenes/Productos";
    $imagen = $_FILES["imagen"]["name"];
    $nombre_temporal = $_FILES["imagen"]["tmp_name"];
    if (move_uploaded_file($nombre_temporal, "$ubicacion/$imagen")) {
        echo "se movio";
        $sqlimagen =
            "update ropa set imagen='" .
            $imagen .
            "' where id=" .
            $_POST["idImagen"] .
            " and categoria='Figuras'";
        mysqli_query($conexion, $sqlimagen);
    } else {
        echo $sqlimagen;
        echo "no se movio";
    }
    header("location:Verfiguras.php");
    
}
?>
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <form action="Editarfigura.php"  method="POST"  class=" container form">
               <h1 class="banderin" style="
                 font-family:fantasy;
                  letter-spacing: 2px;">Edición de producto en Figuras.</h1>  
                   <div class="form-group">
                       <label  class="ptext">Codigo:</label>
                       <input type="text" class="form-control"   name="codigo" value='<?php echo $fila[
                           "codigo"
                       ]; ?>' >   
                   </div>
                   <div class="form-group">
                       <label  class="ptext">Nombre:</label>
                       <input type="text" class="form-control"   name="nombre"  value='<?php echo $fila[
                           "nombre"
                       ]; ?>'>  
                   </div>
                   <div class="form-group">
                       <label  class="ptext">Descripción:</label>
                       <input type="text" class="form-control"  name="descripcion" value='<?php echo $fila[
                           "descripcion"
                       ]; ?>'> 
                   </div>  
                   <div class="form-group">
                       <label  class="ptext">Precio:</label>
                       <input type="text" class="form-control"  name="precio" value='<?php echo $fila[
                           "precio"
                       ]; ?>'>
                   </div>
                   <div class="form-group">
                       <label  class="ptext">Cantidad de piezas existentes:</label>
                       <input type="text" class="form-control"  name="existencia" value='<?php echo $fila[
                           "existencia"
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
               <form action="Editarfigura.php" method="post" enctype="multipart/form-data">
                       <label  class="ptext">Fotografía:</label>
                       <input type="file" name="imagen" >
                   <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar nueva imagen">
                   <input type="hidden" name="idImagen" value="<?php echo $fila[
                       "id"
                   ]; ?>">
                   <br>
               </form>
               </div>
           </div> 
       </div><!-- /.container-fluid -->