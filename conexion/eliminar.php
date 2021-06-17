<?php
include("Conexion.php");
$sql=("delete from ropa where codigo=".$_GET['id']."");
mysqli_query($conexion,$sql);
?>
<script>
    window.location="../Verproducto.php"
</script>