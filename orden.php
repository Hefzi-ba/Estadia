<?php
session_start();
include "Menu.php";
$arreglo = $_SESSION["carrito"];
?>
<html>
    <head>
    <link href="./css/estiloDC.css" rel="stylesheet">
    </head>
    <body>
        <table class="table table-light responsive">
         <tr>
           <th > Nombre del producto:</th> 
           <th >Cantidad:</th> 
           <th >Subtotal</th> 
         </tr>
         <?php
         $total = 0;
         for ($i = 0; $i < count($arreglo); $i++) {
             $total =
                 $total + $arreglo[$i]["precio"] * $arreglo[$i]["cantidad"]; ?>
         <tr>
            <td ><?php echo $arreglo[$i]["nombre"]; ?></td>
            <td><?php echo $arreglo[$i]["cantidad"]; ?></td>
            <td><?php echo $arreglo[$i]["precio"] *
                $arreglo[$i]["cantidad"]; ?></td>
         </tr>
         <?php
         }
         ?>
         <tr>
         <td>Total a pagar:</td>
         <td colspan="2"><?php echo number_format($total, 2, ".", ""); ?></td>
         </tr>
        </table>
        <a href="gracias.php?serviciodomicilio=0" class="btnx btn btn btn-outline-light">comprar y recoger</a>
        <a href="gracias.php?serviciodomicilio=1" class="btnx btn btn btn-outline-light">comprar y enviar a domicilio</a>
    </body>
</html>
<?php include "footer.html";
?>
