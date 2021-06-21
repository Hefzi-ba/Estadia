<?php 
    session_start();
    $arreglo=$_SESSION['carrito'];
    for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['id']!=$_POST['id']){
            $arreglonuevo[]=array(
                'id'=>$aregglo[$i]['id'],
                'nombre'=>$aregglo[$i]['nombre'],
                'precio'=>$aregglo[$i]['precio'],
                'imagen'=>$aregglo[$i]['imagen'],
                'carrito'=>$aregglo[$i]['cantidad']
            );
        }
        
    }
    if(isset($arreglonuevo)){
        $_SESSION['carrito']=$arreglonuevo;

    }else{
        unset($_SESSION['carrito']);
    }
    echo"realizado";
    
?>