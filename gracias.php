<?php
session_start();
include "conexion/Conexion.php";
$arreglo = $_SESSION["carrito"];
$total = 0;
for ($i = 0; $i < count($arreglo); $i++) {
    $total = $total + $arreglo[$i]["precio"] * $arreglo[$i]["cantidad"];
}
$fecha = date("Y-m-d h:m:s");

$sql ="insert into carrito (idusuario,fecha,totalpagar, usuario, serviciodomicilio) 
    values ('" .$_SESSION["idusuario"] ."','" .$fecha ."'," .$total .",'".$_SESSION["usuario"] ."','" .$_GET["serviciodomicilio"] ."')";
mysqli_query($conexion, $sql);

$ultimoid = mysqli_insert_id($conexion);

unset($_SESSION["carrito"]);
unset($_SESSION["metodoentrega"]);
for ($i = 0; $i < count($arreglo); $i++) {
    $total = $total + $arreglo[$i]["precio"] * $arreglo[$i]["cantidad"];
    //insert into a la tabla donde almacenara los productos

    $carritop =
        "INSERT INTO carrito_productos (id_carrito, id_producto, precio_producto, cantidades_producto, nombre_producto) VALUES ('" .
        $ultimoid .
        "','" .
        $arreglo[$i]["id"] .
        "','" .
        $arreglo[$i]["precio"] .
        "','" .
        $arreglo[$i]["cantidad"] .
        "','" .
        $arreglo[$i]["nombre"] .
        "') ";
    mysqli_query($conexion, $carritop);
    echo $carritop;
}

include "Menu.php";
?>
<html>
    <head>
    <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./css/bootstrap.css" rel="stylesheet">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./css/estiloDC.css" rel="stylesheet">
        
   
        <title>DarkCube</title>
    </head>
    <body>
        <div class="container" style="margin-bottom: 10%;margin-top: 10%;">
            <h5 class="letraslogin">Tu pedido se realizo exitosamente!!</h5>
            <br>
            <a href="./index.php" class="btnx btn btn btn-outline-light">Inicio</a>
            
            
        </div>
        
    </body>
    <?php include "footer.php"; ?>
</html>
