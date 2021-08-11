<?php

include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql = "delete from nosotros where id=" . $_GET["eliminar"] . "";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion, "select * from nosotros");
?>
<html>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <form class="d-flex" action="Vernosotros.php" method="POST">
                  <input class="form-control me-2 letrasmenu" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-dark letrasmenu letrasmenu" type="submit">Buscar</button>
                </form>
              </div>
            </nav>
          <table class="table table-responsive">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Titular: </th>
              <th class="letrasmenu" scope="col">Frase de descripción:</th>
              <th class="letrasmenu" scope="col">Correo:</th>
              <th class="letrasmenu" scope="col">Editar</th>
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $buscar = "";
                if (isset($_POST["buscar"])) {
                    $buscar = $_POST["buscar"];
                }
                $consulta =
                    "select * from nosotros  where titulo like '%" .$buscar ."%' ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr class="letrasmenu">
                  <th class="letrasmenu" scope="row">' .
                        $arreglo["titulo"] .
                        '</th>
                  
                  
                  
                  <td class="letrasmenu">' .
                        $arreglo["descripcion"] .
                        '</td>
                  <td class="letrasmenu">' .
                        $arreglo["correo"] .
                        '</td>
                  
                  <td class="letrasmenu"><a type="button" class="btn btn-outline-secondary"  href="Editarnosotros.php?id=' .
                        $arreglo["id"] .
                        '"><i class="fas fa-edit"></i></a></td>
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
      
      if(confirm("Deseas eliminar este apartado?")){
        window.location="Vernosotros.php?eliminar="+id;
      }
    }
  </script>



  
</html>


