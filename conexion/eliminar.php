<?php
include("Conexion.php");
$sql=("delete from ropa where id=".$_GET['id']."");
mysqli_query($conexion,$sql);
?>
<script>
    window.location="../Verproducto.php"
</script>