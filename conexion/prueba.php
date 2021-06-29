<?php 
include("conexion.php");
if(isset($_FILES['imagen'])){
    $formatos=array('.png','.jpg', '.gif', '.jpeg');
    $ubicacion="../imagenes/Productos";
    $imagen=$_FILES['imagen']['name'];
    $nombre_temporal=$_FILES['imagen']['tmp_name'];
    if(move_uploaded_file($nombre_temporal,"$ubicacion/$imagen")){
      echo 'se movio';
      $sqlimagen="update ropa set imagen='".$imagen."' where id=".$_POST['idImagen']."";
      mysqli_query($conexion,$sqlimagen);
    }else{
      echo 'no se movio';
    }
  
}
?>
<form action="prueba.php?id=9" method="post" enctype="multipart/form-data">

                
                    <label  class="ptext">Fotografía:</label>
                    <input type="file" name="imagen" >
                
                <input type="submit" class="w-100 btnx btn btn-outline-dark" value="Guardar edición">
                <input type="hidden" name="idImagen" value="9">
                <br>
            </form>