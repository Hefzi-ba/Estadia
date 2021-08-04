<?php
include "indexad2.php";
include "conexion/Conexion.php";

$sql = mysqli_query($conexion, "select * from footer ");
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
          <table class="table ">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Titulo</th>
              <th class="letrasmenu" scope="col">Horario</th>
              <th class="letrasmenu" scope="col">Teléfono</th>
              <th class="letrasmenu" scope="col">Correo</th>
              <th class="letrasmenu" scope="col">Facebook</th>
              <th class="letrasmenu" scope="col">Instagram</th>
              <th class="letrasmenu" scope="col">Pie de footer</th>
              <th class="letrasmenu" scope="col">Editar</th>
              
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $consulta = "select * from  footer ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .$arreglo["titulofooter"] .'</th>
                  <th class="letrasmenu" scope="row">' .$arreglo["horario"] .'</th>
                  <th class="letrasmenu" scope="row">' .$arreglo["telefonofooter"] .'</th>
                  <th class="letrasmenu" scope="row">' .$arreglo["correofooter"] .'</th>
                  <th class="letrasmenu" scope="row"><img class="tableimg"  src="imagenes/redsocial/' .
                  $arreglo["ligafooter"] .
                  '"></th>
                  <th class="letrasmenu" scope="row"><img class="tableimg"  src="imagenes/redsocial/' .
                  $arreglo["instagram"] .
                  '"></th>
                  
                  <th class="letrasmenu" scope="row">' .$arreglo["piefooter"] .'</th>
                 
                  
                  <td><a type="button" class="btn btn-outline-secondary"  href="conexion/modificarfooter.php?id=' .
                        $arreglo["id"] .'"><i class="fas fa-edit"></i></a></td>
                  
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



