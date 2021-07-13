<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<html>
<?php 
    include ("Menu.php");
    ?>
     <?php 
    include ("Envio.html");
    ?>
    
     <?php 
    include ("inicio.php");
    ?>
    <br>
    <?php 
    include ("footer.html");
    ?>

</html>