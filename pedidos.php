<?php
  if (!isset($_SESSION)) {
    session_start();
    } 
include("Menu.php"); 

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
          
          <table class="table table-light">
              <thead class="table-light">
              <th class="letrasmenu" scope="col">Usuario </th>
              <th class="letrasmenu" scope="col">Productos</th>
              <th class="letrasmenu" scope="col">Imagen</th>
              
            
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
               
                $consulta = "SELECT carrito.id, ropa.id, ropa.imagen, carrito_productos.id_producto, carrito_productos.nombre_producto, carrito.usuario FROM 
                carrito inner join carrito_productos on carrito.id=carrito_productos.id_carrito  inner join ropa on carrito_productos.id_producto=ropa.id  where carrito.usuario= '$_SESSION[usuario]'";
                 
                 //"SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                 //carrito_productos.id_producto,ropa.nombre,ropa.imagen, carrito.lugar FROM carrito 
                 //INNER JOIN carrito_productos ON carrito.id=carrito_productos.id_carrito INNER JOIN ropa
                  //on carrito_productos.id_producto=ropa.id WHERE serviciodomicilio=1 ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .
                        $arreglo["usuario"] .
                        '</th>
                  
                  
                  <td class="letrasmenu">' .
                        $arreglo["nombre_producto"] .
                        '</td>
                  <td class="letrasmenu" scope="row"><img class="tableimg"  src="imagenes/Productos/' .
                        $arreglo["imagen"] .'"></td>
                 
                  
                  
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
  
</html>
<?php
  include('footer.php');
  ?>