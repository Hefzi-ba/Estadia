<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql ="delete from ropa where categoria= 'Ropa' and id=" .$_GET["eliminar"] ."";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion, "select * from ropa where categoria= 'Ropa'");
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
                <form class="d-flex" action="Verproducto.php" method="POST">
                  <input class="form-control me-2 letrasmenu" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-dark letrasmenu" type="submit">Buscar</button>
                </form>
              </div>
            </nav>
          <table class="table table-responsive">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Codigo </th>
              <th class="letrasmenu" scope="col">Imagen</th>
              <th class="letrasmenu" scope="col">Nombre</th>
              <th class="letrasmenu" scope="col">Descripción </th>
              <th class="letrasmenu" scope="col">Precio</th>
              
              <th class="letrasmenu" scope="col">Existencia pz</th>
              <th class="letrasmenu" scope="col">Editar</th>
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $buscar = "";
                if (isset($_POST["buscar"])) {
                    $buscar = $_POST["buscar"];
                }
                $consulta ="select * from ropa where categoria= 'Ropa' and nombre like '%" .$buscar ."%' ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .
                        $arreglo["codigo"] .
                        '</th>

                       
                  
                  <td class="letrasmenu" ><img class="tableimg"  src="imagenes/Productos/' .
                        $arreglo["imagen"] .
                        '"></td>
                  <td class="letrasmenu">' .
                        $arreglo["nombre"] .
                        '</td>
                  <td class="letrasmenu">' .
                        $arreglo["descripcion"] .
                        '</td>
                  
                  <td class="letrasmenu">' .
                        $arreglo["precio"] .
                        '</td>
                  
                  <td class="letrasmenu">' .
                        $arreglo["existencia"] .
                        '</td>
                  <td class="letrasmenu"><a type="button" class="btn btn-outline-secondary"  href="Editarropa.php?id=' .
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
      
      if(confirm("Deseas eliminar este articulo?")){
        window.location="Verproducto.php?eliminar="+id;
      }
    }
  </script>



  
</html>


