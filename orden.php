<?php
include('Menu.html');
session_start();
$arreglo=$_SESSION['carrito'];

?>
<html>
    <head>
    </head>
    <body>
        <table class="table table-striped">
         <tr>
           <th> del producto:</th> 
           <th>cantidad:</th> 
           <th>subtotal</th> 
         </tr>
         <?php 
         $total=0;
            for($i=0;$i<count($arreglo);$i++){
                $total=$total+($arreglo[$i]['precio']*$arreglo[$i]['cantidad']);

            
         ?>
         <tr>
            <td><?php  echo $arreglo[$i]['nombre'];?></td>
            <td><?php  echo $arreglo[$i]['precio'];?></td>
            <td><?php  echo $arreglo[$i]['precio']* $arreglo[$i]['cantidad'];?></td>
         </tr>
         <?php 
         }
         ?>
         <tr>
         <td>total a pagar:</td>
         <td colspan="2"><?php  echo  number_format($total, 2, '.', '');?></td>
         </tr>
        </table>
        <a href="gracias.php" class="btn btn-success">comprar</a>
    </body>
</html>
<?php
?>