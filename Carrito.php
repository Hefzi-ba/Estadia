<?php
session_start();
if (isset($_SESSION['metodoentrega'])){
    header("location:./metodoentrega.php");

}



    if (((!isset($_SESSION['carrito'])) && (!isset($_GET['id'])))) {
    ?>
        <script>
            alert("Su carrito esta vacio.");
            document.location="./index.php";
        </script>
        <?php
    }


$usuario = $_SESSION["usuario"];

if (!isset($usuario)) {
    header("location:./loguin.php");
} else {

    include "Menu.php";
    include "conexion/Conexion.php";
    if (isset($_SESSION["carrito"])) {
        //existe
        if (isset($_GET["id"])) {
            $arreglo = $_SESSION["carrito"];
            $existe = false;
            $numero = 0;
            for ($i = 0; $i < count($arreglo); $i++) {
                if ($arreglo[$i]["id"] == $_GET["id"]) {
                    $existe = true;
                    $numero = $i;
                }
            }
            if ($existe == true) {
                $arreglo[$numero]["cantidad"] =
                    $arreglo[$numero]["cantidad"] + 1;
                $_SESSION["carrito"] = $arreglo;
            } else {
                $nombre = "";
                $precio = "";
                $imagen = "";
                $sql = "select * from ropa where id=" . $_GET["id"] . "";
                $resultado = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_row($resultado);
                if($fila[6]=="Disponible"){
                    $nombre = $fila[3];
                $precio = 0;
                if ($fila[8] == 0) {
                    $precio = $fila[5];
                } else {
                    $precio = $fila[7];
                }

                $imagen = $fila[2];
                $arregloNuevo = [
                    "id" => $_GET["id"],
                    "nombre" => $nombre,
                    "precio" => $precio,
                    "imagen" => $imagen,
                    "cantidad" => 1,
                ];
                array_push($arreglo, $arregloNuevo);
                $_SESSION["carrito"] = $arreglo;
                }else {
                    echo '<script>alert("Producto agotado");</script>';
                }
            }
                
                
        }
    } else {
        //no existe
        if (isset($_GET["id"])) {
            $nombre = "";
            $precio = "";
            $imagen = "";
            $sql = "select * from ropa where id=" . $_GET["id"] . "";
            $resultado = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_row($resultado);
            if($fila[6]=="Disponible"){
                $nombre = $fila[3];
            $precio = 0;
            if ($fila[8] == 0) {
                $precio = $fila[5];
            } else {
                $precio = $fila[7];
            }
            $imagen = $fila[2];
            $arreglo[] = [
                "id" => $_GET["id"],
                "nombre" => $nombre,
                "precio" => $precio,
                "imagen" => $imagen,
                "cantidad" => 1,
            ];
            $_SESSION["carrito"] = $arreglo;
            }else {
                echo '<script>alert("Producto agotado");</script>';
            }
            
        }
    }
    ?>
<html>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
              
<table class=" table table-light table-striped">
    <tr>
        <th class="letrasmenu">Imagen</th>
        <th class="letrasmenu">Nombre</th>
        <th class="letrasmenu">Precio</th>
        <th class="letrasmenu">Cantidad</th>
        <th class="letrasmenu">Quitar</th>
        <th class="letrasmenu">Subtotal</th>
    </tr>
    <?php
    $total = 0;
    if (isset($_SESSION["carrito"])) {
        $arreglocarrito = $_SESSION["carrito"];
        for ($i = 0; $i < count($arreglocarrito); $i++) {
            $total =
                $total +
                $arreglocarrito[$i]["precio"] *
                    $arreglocarrito[$i]["cantidad"]; ?> 
    <tr>
    <td>
    <img class="tableimg" src="imagenes/Productos/<?php echo $arreglocarrito[
        $i
    ]["imagen"]; ?>" class="img-tumbnail">
    </td>
    <td class="letrasmenu"><?php echo $arreglocarrito[$i]["nombre"]; ?> </td>
    <td class="letrasmenu"><?php echo $arreglocarrito[$i]["precio"]; ?></td>
    
    <td class="letrasmenu">
    <div class="input-group mb-3" style="width: 25%;">
        
        <input type="number" class="form-control textCantidad" value="<?php echo $arreglocarrito[
            $i
        ]["cantidad"]; ?>"  
        data-id="<?php echo $arreglocarrito[$i]["id"]; ?>"  
        data-precio="<?php echo $arreglocarrito[$i]["precio"]; ?>"
          aria-label="Example text with two button addons">
        
        
       
    </div>
    </td>
    <td class="letrasmenu">
    <a  type="button"href="" class="btn btn-danger BotonEliminar" data-id="<?php echo $arreglocarrito[
        $i
    ]["id"]; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
    </svg>
    </a>
    </td>
    <td class="letrasmenu canti<?php echo $arreglocarrito[$i]["id"]; ?>">
    <?php echo $arreglocarrito[$i]["cantidad"] *
        $arreglocarrito[$i]["precio"]; ?>
    </td>
    </tr>
    <?php
        }
    }
    ?>
    <tr>
   <td class="letrasmenu">Total a pagar</td> 
   <td colspan="5" class="letrasmenu">$<?php echo number_format($total, 2, ".", ""); ?></td> 
    </tr>

</table>
</div>
        </div>
        
      </div>
    </section>
<a type="button" href="orden.php"  class=" btnx btn btn btn-outline-light" style="margin-left: 40%;"> Realizar pedido</a>
<br>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){   
$(".BotonEliminar").click(function(event){
    event.preventDefault();
    var id=$(this).data('id');
    var boton=$(this);
    $.ajax({
        method:'POST',
        url:'./conexion/eliminarcarrito.php',
        data:{
            id:id
        }
    }).done(function(resultado){
        boton.parent('td').parent('tr').remove();
        alert("Deseas eliminar el producto?");
        document.location="./carrito.php";
        
    });
});
$(".textCantidad").keyup(function(){
var cantidad=$(this).val();
var precio=$(this).data('precio');
var id=$(this).data('id');
if(cantidad==""){
    cantidad=0;
}
incrementar(cantidad,precio,id);
});
function incrementar(cantidad,precio,id){
    var subtotal=parseFloat(cantidad)*parseFloat(precio);
    $(".canti"+id).text(subtotal);
   
    $.ajax({
        method:'POST',
        url:'./conexion/actualizarcantidad.php',
        data:{
            id:id,
            cantidad:cantidad
        }
    }).done(function(resultado){
       window.location="./Carrito.php";
        
    });

}
});
</script>
</body>

</html>
<?php
}
?>
<br>
<?php include "footer.php"; ?>
