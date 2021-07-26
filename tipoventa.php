<?php
session_start();
include "Menu.php";

?>

        <a href="gracias.php?serviciodomicilio=0" class="btnx btn btn btn-outline-light">Recoger mi compra </a>
        <a href="gracias.php?serviciodomicilio=1" class="btnx btn btn btn-outline-light">Compra a domicilio</a>
        <!-- este es el boton de pago que deberia ir en otro lugar-->
        
    

</html>
<?php include "footer.html";
?>
