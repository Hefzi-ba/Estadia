<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql ="delete from carrito  where serviciodomicilio=0 and id=" . $_GET["eliminar"] ."";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion,"select * from carrito  where  serviciodomicilio=");
?>
<html>
  <body>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          
            
          <table class="table table-responsive">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Venta id </th>
              <th class="letrasmenu" scope="col">Usuario id</th>
              <th class="letrasmenu" scope="col">Fecha</th>
              <th class="letrasmenu" scope="col">Usuario</th>
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
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
              <tbody>
                <?php
                
                
                $consulta =
                    "SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                    carrito_productos.id_producto,ropa.nombre,ropa.imagen,ropa.categoria, carrito.lugar FROM carrito 
                    INNER JOIN carrito_productos ON carrito.id=carrito_productos.id_carrito INNER JOIN ropa
                     on carrito_productos.id_producto=ropa.id WHERE serviciodomicilio=0 and carrito.id=".$_GET["id"]." ";
                $respuesta = mysqli_query($conexion, $consulta);
                $total=0;
               
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                  $total=$arreglo["totalpagar"];
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

                  <th  class="letrasmenu"scope="row">' .$arreglo["idusuario"] .'</th>
                  
                  <td class="letrasmenu">' .$arreglo["fecha"] .'</td>

                  <td class="letrasmenu">' .$arreglo["usuario"] .'</td>
                  
                  

                  <td class="letrasmenu">' .$arreglo["id_producto"] .'</td>

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
                  
                  <td class="letrasmenu"><a href="#"  onclick="eliminar(' .
                        $arreglo["id"] .
                        ')" type="button" class="btn btn-outline-danger" > <i class="fas fa-trash"></i></a></td>
                </tr>
              ';
                }
               
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <td>Total: <?php echo $total ?> </td>
                </tr>
              </tfoot>
          </table>
          </div>
        </div>
        
      </div>
    </section>
      
  </body>
  <script>
    function eliminar(id){
      
      if(confirm("Deseas eliminar esta venta?")){
        window.location="ventaslocales2.php?eliminar="+id;
      }
    }
  </script>
</html>


