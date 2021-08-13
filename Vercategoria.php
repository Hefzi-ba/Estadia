<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql =
        "delete from categoria where id=" .$_GET["eliminar"] . "";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion, "select * from categoria ");
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
                <form class="d-flex" action="Vercategoria.php" method="POST">
                  <input class="form-control me-2 letrasmenu" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-dark letrasmenu" type="submit">Buscar</button>
                </form>
              </div>
            </nav>
          <table class="table ">
              <thead class="table-dark">
              <th class="letrasmenu" scope="col">Categoría</th>
              <th class="letrasmenu" scope="col">Editar</th>
              <th class="letrasmenu" scope="col">Eliminar</th>
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $buscar = "";
                if (isset($_POST["buscar"])) {
                    $buscar = $_POST["buscar"];
                }
                $consulta = "select * from  categoria where nombrecategoria like '%" .$buscar ."%' ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .$arreglo["nombrecategoria"] .'</th>
                  <td><a type="button" class="btn btn-outline-secondary"  href="Editarcategoria.php?id=' .
                        $arreglo["id"] .'"><i class="fas fa-edit"></i></a></td>
                  <td><a href="#"  onclick="eliminar(' .$arreglo["id"] .')" type="button" class="btn btn-outline-danger" > <i class="fas fa-trash"></i></a></td>
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
      
      if(confirm("Deseas eliminar este categoría?")){
        window.location="Vercategoria.php?eliminar="+id;
      }
    }
  </script>
</html>



