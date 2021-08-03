<?php
if (!isset($_SESSION)) {
    session_start();
} ?>
<html>
<?php include "Menu.php"; ?>
     <?php include "Envio.php"; ?>
    
     <?php include "inicio.php"; ?>
    <br>
    <?php include "footer.php"; ?>

</html>