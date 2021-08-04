<?php
session_start();
include "Menu.php";
$arreglo = $_SESSION["carrito"];

require __DIR__.'/vendor/autoload.php';
//agrega credenciales del vendedor
MercadoPago\SDK::setAccessToken('TEST-1394202291892395-072616-dc8c8880b99e11fee68fd422b6943987-797204514');
$arreglo=$_SESSION['carrito'];
$total=0;

//curl -X POST -H "Content-Type: application/json" "https://api.mercadopago.com/users/test_user?access_token=TEST-6782268921640834-072614-67e48a9805ae633a8efac290649c6c2f-495730978" -d "{'site_id':'MLM'}"

//{"id":797204514,"nickname":"TT394831","password":"qatest5819","site_status":"active","email":"test_user_41780942@testuser.com"} VENDEDOR
//{"id":797206738,"nickname":"TETE5415964","password":"qatest6580","site_status":"active","email":"test_user_68953720@testuser.com"} COMPRA



$datos=array();

$preference = new MercadoPago\Preference();




//...
$preference->back_urls = array(
    "success" => "http://localhost:8888/DC/metodoentrega.php",
    "failure" => "https://localhost:8888/DC/errorpago?error=fallure",
    "pending" => "https://localhost:8888/DC/errorpago?error=pending"
);
$preference->auto_return = "approved";
// ...


for ($i = 0; $i < count($arreglo); $i++) {
    $item = new MercadoPago\Item();
    $item->title = $arreglo[$i]["nombre"];
    $item->quantity = $arreglo[$i]["cantidad"];
    $item->unit_price =$arreglo[$i]["precio"];
    $datos[]=$item;
}
$preference->items = $datos;
$preference->save();



?>
<html>
    <head>
    <link href="./css/estiloDC.css" rel="stylesheet">
    </head>
    <body>
        <table class="table table-light responsive" style="margin-right: 8px;" style="margin-left: 8px;" >
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
        
        
        
        <form action="http://localhost:8888/DC/metodoentrega.php" method="POST">
        <!-- el action del form debe mandar a donde inserta la base de datos la compra 
        y cuando se suba a algun servidor hay subirlo con el dominio-->
            <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">

            </script>

        </form>
        <br>
        <br>
    </body>

</html>
<?php include "footer.php";
?>
