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
              <th class="letrasmenu" scope="col">Fecha</th>
              <th class="letrasmenu" scope="col">Total</th>
              <th class="letrasmenu" scope="col">Ciudad</th>
              <th class="letrasmenu" scope="col">Detalles</th>
              
            
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
               
                $consulta = "SELECT carrito.id, carrito.idusuario, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, 
                carrito.lugar FROM 
                carrito   where carrito.usuario= '$_SESSION[usuario]'";
                 
                 
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                $consulta2= "SELECT * FROM usuarios where id= ".$arreglo["idusuario"]." ";
                $datos=mysqli_query($conexion,$consulta2);
                $dato=mysqli_fetch_array($datos);
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .
                        $arreglo["usuario"] .
                        '</th>
                        <th class="letrasmenu" scope="row">' .
                        $arreglo["fecha"] .
                        '</th>
                        <th class="letrasmenu" scope="row">' .
                        $arreglo["totalpagar"] .
                        '</th>
                        <th class="letrasmenu" scope="row">' .
                        $dato["ciudad"] .
                        '</th>
                  
                        <td class="letrasmenu"><a href="pedidos2.php?id='.$arreglo["id"].'"   
                        type="button" class="btn btn-outline-danger letrasmenu" > Detalles</a></td>
                  
                  
                 
                  
                  
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