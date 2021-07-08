<?php 
    session_start();
    include("conexion/Conexion.php");
    $arreglo=$_SESSION['carrito'];
    $total=0;
    for($i=0;$i<count($arreglo);$i++){
        $total=$total+($arreglo[$i]['precio']*$arreglo[$i]['cantidad']);

    }
    $fecha=date('Y-m-d h:m:s');
    
    
    
    $sql="insert into carrito (idusuario,fecha,totalpagar, usuario) values ('".$_SESSION['id0usuario']."','".$fecha."',".$total.",'".$_SESSION['usuario']."')";
    mysqli_query($conexion,$sql);
    echo $sql;
    unset($_SESSION['carrito']);
    for($i=0;$i<count($arreglo);$i++){
        $total=$total+($arreglo[$i]['precio']*$arreglo[$i]['cantidad']);
    //insert into a la tabla donde almacenara los productos
    }
    
    
    include("Menu.html");
?>
<html>
    <head>
    </head>
    <body>
        <h1>Tu pedido se realizo exitosamente</h1>
    </body>
   
</html>