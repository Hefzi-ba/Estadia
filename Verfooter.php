<?php
include "indexad2.php";
include "conexion/Conexion.php";

$sql = mysqli_query($conexion, "select * from footer ");
?>
<html>
  <body>
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
                 
                  
                  <td><a type="button" class="btn btn-outline-secondary"  href="Editarfooter.php?id=' .
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



