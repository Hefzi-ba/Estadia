<?php
session_start();
$arreglo = $_SESSION["carrito"];
for ($i = 0; $i < count($arreglo); $i++) {
    if ($arreglo[$i]["id"] != $_POST["id"]) {
        $arreglonuevo[] = [
            "id" => $arreglo[$i]["id"],
            "nombre" => $arreglo[$i]["nombre"],
            "precio" => $arreglo[$i]["precio"],
            "imagen" => $arreglo[$i]["imagen"],
            "cantidad" => $arreglo[$i]["cantidad"],
        ];
    }
}
if (isset($arreglonuevo)) {
    $_SESSION["carrito"] = $arreglonuevo;
    echo'<script>alert("Deseas eliminar del carrito ?");
    </script>';
} else {
    unset($_SESSION["carrito"]);
}
echo "realizado";

?>
