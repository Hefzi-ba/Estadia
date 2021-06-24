<?php

session_start();

$arreglo=$_SESSION['carrito'];
echo $arreglo[0]['cantidad'];
for($i=0;$i<count($arreglo);$i++){

    if($arreglo[$i]['id']==$_POST['id']){

        $arreglo[$i]['cantidad']=$_POST['cantidad'];

        $_SESSION['carrito']=$arreglo;
        

        break;

    }

}

?>