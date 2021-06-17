<?php
include("Conexion.php");
include("Menuadmin2.php");
$nombrep=$_POST['nombre'];

$sql="update  ropa set nombre='".$nombrep."', where codigo=".$_GET['id']."";
mysqli_query($conexion,$sql);
if(isset($_FILES['imagen'])){
    $formatos=array('.png','.jpg', '.gif', '.jpeg');
    $ubicacion="../imagenes/Productos";
    $imagen=$_FILES['imagen']['name'];
    $nombre_temporal=$_FILES['imagen']['tmp_name'];
    if(move_uploaded_file($nombre_temporal,"$ubicacion/$imagen")){
      echo 'se movio';
      $sqlimagen="update ropa set imagen='".$imagen."' where codigo=".$_GET['id']."";
      mysqli_query($conexion,$sqlimagen);
    }else{
      echo 'no se movio';
    }
  
}
?>
<script>
window.location="../Verproducto.php"
</script>