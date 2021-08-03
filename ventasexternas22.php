<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql ="delete from carrito  where serviciodomicilio=1 and id=" . $_GET["eliminar"] ."";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion,"select * from carrito  where  serviciodomicilio=1 ");
?>
<html>
  <head>
  <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="./css/bootstrap.css" rel="stylesheet">
    
    <link href="./css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

  <br>
    <br>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          
            <nav class="navbar navbar-light bg-light letrasmenu">
              <div class="container-fluid">
                <form class="d-flex" action="Ventaslocales.php" method="POST">
                  <input class="form-control me-2 letrasmenu" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-dark letrasmenu" type="submit">Buscar</button>
                </form>
              </div>
            </nav>
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
              
                <?php
                include "conexion/Conexion.php";
                $buscar = "";
                if (isset($_POST["buscar"])) {
                    $buscar = $_POST["buscar"];
                }
                //$consulta2= "SELECT * FROM usuarios where id= ".$_SESSION["idusuario"]." ";
                //$datos=mysqli_query($conexion,$consulta2);
                //$dato=mysqli_fetch_array($datos);
                $consulta =
                    "SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                    carrito_productos.id_producto,ropa.nombre,ropa.imagen, carrito.lugar FROM carrito 
                    INNER JOIN carrito_productos ON carrito.id=carrito_productos.id_carrito INNER JOIN ropa
                     on carrito_productos.id_producto=ropa.id WHERE serviciodomicilio=1 ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                  $consulta2= "SELECT * FROM usuarios where id= ".$arreglo["idusuario"]." ";
                $datos=mysqli_query($conexion,$consulta2);
                $dato=mysqli_fetch_array($datos);
                $con2= "SELECT ropa.codigo, tallas.codigoropa, tallas.nombretalla, ropa.id from ropa,tallas
                where ropa.id=".$arreglo["id_producto"]." ";
                $con=mysqli_query($conexion,$con2);
                $co=mysqli_fetch_array($con);
                    echo '
                <tr>
                  
                  <td class="letrasmenu">' .$arreglo["id"] .'</td>

                  <th  class="letrasmenu"scope="row">' .$arreglo["idusuario"] .'</th>
                  
                  <td class="letrasmenu">' .$arreglo["fecha"] .'</td>

                  <td class="letrasmenu">' .$arreglo["usuario"] .'</td>
                  
                  <td class="letrasmenu">' .$arreglo["totalpagar"] .'</td>

                  <td class="letrasmenu">' .$arreglo["id_producto"] .'</td>

                  <td class="letrasmenu" scope="row">' .$arreglo["nombre"] .'</td>
                  <td class="letrasmenu" scope="row"><img class="tableimg"  src="imagenes/Productos/' .
                  $arreglo["imagen"] .'"></td>

                  
                  <td class="letrasmenu" scope="row">' .$co["nombretalla"] .'</td>
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


