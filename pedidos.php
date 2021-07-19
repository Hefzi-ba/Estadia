<?php
  if (!isset($_SESSION)) {
    session_start();
    } 
include("Menu.php"); ?>

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
              <th class="letrasmenu" scope="col">Id de venta </th>
              <th class="letrasmenu" scope="col">Fecha</th>
              <th class="letrasmenu" scope="col">Productos</th>
              <th class="letrasmenu" scope="col">Imagen</th>
              
              <th class="letrasmenu" scope="col">Total</th>
              
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $buscar = "";
                if (isset($_POST["buscar"])) {
                    $buscar = $_POST["buscar"];
                }
                $consulta ="SELECT * FROM usuarios where idusuario= ".$_SESSION["idusuario"]." ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">id venta </th>
                  <th class="letrasmenu" scope="row">fecha</th>
                  <th class="letrasmenu" scope="row">'.$arreglo["nombreusuario"].'</th>
                  
                  <td class="letrasmenu" ><img class="tableimg"  src="imagenes/Productos/' .$arreglo["imagen"] .'"></td>
                  <td class="letrasmenu">' .$arreglo["nombre"] .'</td>
                 
                  
                  <td class="letrasmenu">total</td>
                  
                  

                  
                  
              ';
                }
                ?>
              
          </table>
<?php
include("footer.html");
?>