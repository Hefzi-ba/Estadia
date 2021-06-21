<?php
include("Conexion.php");
include("Menuadmin2.php");

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$sql="update  ropa set nombre='".$nombre."',descripcion='".$descripcion."' where id=".$_GET['id']."";
mysqli_query($conexion,$sql);
if(isset($_FILES['imagen'])){
    $formatos=array('.png','.jpg', '.gif', '.jpeg');
    $ubicacion="../imagenes/Productos";
    $imagen=$_FILES['imagen']['name'];
    $nombre_temporal=$_FILES['imagen']['tmp_name'];
    if(move_uploaded_file($nombre_temporal,"$ubicacion/$portada")){
      echo 'se movio';
      $sqlimagen="update productos set imagenproducto='".$imagen."' where id=".$_GET['id']."";
      mysqli_query($conexion,$sqlimagen);
    }else{
      echo 'no se movio';
    }
  
}
?>
<script>
window.location="../Verproducto.php"
</script>
