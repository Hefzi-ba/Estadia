<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql =
        "delete from carrito  where serviciodomicilio=1 and id=" .
        $_GET["eliminar"] .
        "";
    mysqli_query($conexion, $sql);
}

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
          <form method="POST" action="cf_ventasexternas.php">
              <input type="date" name="f1ve" class="letrasmenu ">
              <input type="date" name="f2ve" class="letrasmenu ">
              <input type="submit" class=" letrasmenu btn btn-dark" value="Buscar">
          </form>
          <br>
            
          <table class="table table-responsive">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Id de venta  </th>
              <th class="letrasmenu" scope="col">Id de usuario</th>
              <th class="letrasmenu" scope="col">Fecha</th>
              <th class="letrasmenu" scope="col">Usuario</th>
              <th class="letrasmenu" scope="col">Total</th>
              <th class="letrasmenu" scope="col">Id de producto</th>
             
              
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $f1ve=$_POST['f1ve']."00:00:00";
                $f2ve=$_POST['f2ve']."11:59:59";
                
                $consulta =
                    
                     "SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                     carrito.lugar FROM carrito  WHERE serviciodomicilio=1 AND fecha BETWEEN '$f1ve' AND '$f2ve' ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  
                  <td class="letrasmenu">' .
                        $arreglo["id"] .
                        '</td>
                  <th class="letrasmenu" scope="row">' .
                        $arreglo["idusuario"] .
                        '</th>
                  
                  <td class="letrasmenu">' .
                        $arreglo["fecha"] .
                        '</td>
                  <td class="letrasmenu" >' .
                        $arreglo["usuario"] .
                        '</td>
                  
                  <td class="letrasmenu">' .
                        $arreglo["totalpagar"] .
                        '</td>
                  
                  <td class="letrasmenu"><a href="ventasexternas22.php?id='.$arreglo["id"].'"   type="button" class="btn btn-outline-danger" > Consultar</a></td>
                  
                  <td class="letrasmenu"><a href="#"  onclick="eliminar(' .
                        $arreglo["id"] .
                        ')" type="button" class="btn btn-outline-danger" > <i class="fas fa-trash"></i></a></td>
                </tr>
              ';
                }
                ?>
              
          </table>
          </div>
        </div>
        
      </div>
    </section>
      
  </body>
  <script>
    function eliminar(id){
      
      if(confirm("Deseas eliminar esta venta?")){
        window.location="Ventasexterna2.php?eliminar="+id;
      }
    }
  </script>
</html>


