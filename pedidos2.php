<?php 
  if (!isset($_SESSION)) {
    session_start();
    } 

include "Menu.php";
include "conexion/Conexion.php";

$sql = mysqli_query($conexion,"select * from carrito  ");
?>
<html>
 
 
  <body>

  <br>
    <br>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          
            
          <table class="table table-responsive">
              <thead class="table-light">
              <th class="letrasmenu" scope="col">Venta id </th>
              
              <th class="letrasmenu" scope="col">Fecha</th>
              
              <th class="letrasmenu" scope="col">Total</th>
              <th class="letrasmenu" scope="col">Id de producto</th>
              <th class="letrasmenu" scope="col">Productos</th>
              <th class="letrasmenu" scope="col">Imagen</th>
              <th class="letrasmenu" scope="col">Talla</th>
              <th class="letrasmenu" scope="col">Ciudad</th>
              <th class="letrasmenu" scope="col">Calles</th>
              <th class="letrasmenu" scope="col">Domicilio</th>
              <th class="letrasmenu" scope="col">Codigo postal</th>
              <th class="letrasmenu" scope="col">Teléfono</th>
              
              
              </thead>
              <tbody class="table-light">
                <?php
                
                
                $consulta =
                    "SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                    carrito_productos.id_producto,ropa.nombre,ropa.imagen,ropa.categoria, carrito.lugar FROM carrito 
                    INNER JOIN carrito_productos ON carrito.id=carrito_productos.id_carrito INNER JOIN ropa
                     on carrito_productos.id_producto=ropa.id WHERE  carrito.id=".$_GET["id"]." ";
                $respuesta = mysqli_query($conexion, $consulta);
                $total=0;
               
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                  $total=$arreglo["totalpagar"];
                  $usuario=$arreglo["usuario"];
                  $consulta2= "SELECT * FROM usuarios where id= ".$arreglo["idusuario"]." ";
                $datos=mysqli_query($conexion,$consulta2);
                $dato=mysqli_fetch_array($datos);
                
                if($arreglo["categoria"]=="Ropa"){
                  $con2= "SELECT ropa.codigo, tallas.codigoropa, tallas.nombretalla, ropa.id from ropa,tallas
                  where ropa.id=".$arreglo["id_producto"]." ";
                  $con=mysqli_query($conexion,$con2);
                  $co=mysqli_fetch_array($con);
                  
                }
                    echo '
                <tr>
                  
                  <td class="letrasmenu">' .$arreglo["id"] .'</td>

                  
                  
                  <td class="letrasmenu">' .$arreglo["fecha"] .'</td>

                  
                  
                  

                  <td class="letrasmenu">' .$arreglo["totalpagar"] .'</td>

                  <td class="letrasmenu" scope="row">' .$arreglo["id_producto"] .'</td>
                  <td class="letrasmenu" scope="row">' .$arreglo["nombre"] .'</td>
                  <td class="letrasmenu" scope="row"><img class="tableimg"  src="imagenes/Productos/' .
                  $arreglo["imagen"] .'"></td>

                  
                  <td class="letrasmenu" scope="row">';
                  if($arreglo["categoria"]=="Ropa"){ 
                 echo $co["nombretalla"];
                }else{
                  echo "No aplica";
                }
                   echo '</td>
                  <td class="letrasmenu" scope="row">' .$dato["ciudad"] .'</td>
                  <td class="letrasmenu" scope="row">' .$dato["calles"] .'</td>
                  <td class="letrasmenu" scope="row">' .$dato["domicilio"] .'</td>
                  <td class="letrasmenu" scope="row">' .$dato["codigo_postal"] .'</td>
                  <td class="letrasmenu" scope="row">' .$dato["telefono"] .'</td>
                  
                  
                </tr>
              ';
                }
               
                ?>
              </tbody>
              <tfoot class="table-light">
                <tr>
                  <td class="letrasmenu">Total: <?php echo $total ?> </td>
                  <td class="letrasmenu">usuario: <?php echo $usuario ?> </td>
                  
                </tr>
              </tfoot>
          </table>
          </div>
        </div>
        
      </div>
    </section>
      
  </body>
  <?php
include "footer.php";

?>
</html>


