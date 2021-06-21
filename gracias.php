<?php 
    session_start();
    include("conexion/Conexion.php");
    $arreglo=$_SESSION['carrito'];
    $total=0;
    for($i=0;$i<count($arreglo);$i++){
        $total=$total+($arreglo[$i]['precio']*$arreglo[$i]['cantidad']);

    }
    $fecha=date('Y-m-d h:m:s');
    $sql="insert into ventas(idusuario,fecha,totalpagar)values(5,'".$fecha."',".$total.")";
    mysqli_query($conexion,$sql);
    include("conexion/vaciarcarrito.php");
    include("Menu.html");
?>
<html>
    <head>
    </head>
    <body>
        <h1>tu pedido se realizo exitosamente</h1>
    </body>
</html>