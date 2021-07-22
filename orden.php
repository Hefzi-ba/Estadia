<?php
session_start();
include "Menu.php";
$arreglo = $_SESSION["carrito"];

require __DIR__.'/vendor/autoload.php';
//agrega credenciales del vendedor
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');
$arreglo=$_SESSION['carrito'];
$total=0;


$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price =75.56;
$preference->items = array($item);
$preference->save();



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
        <!-- este es el boton de pago que deberia ir en otro lugar-->
        <form action="http://localhost/DC/gracias.php" method="$_POST">
        <!-- el action del form debe mandar a donde inserta la base de datos la compra 
        y cuando se suba a algun servidor hay subirlo con el dominio-->
            <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">

            </script>

        </form>
    </body>

</html>
<?php include "footer.html";
?>
