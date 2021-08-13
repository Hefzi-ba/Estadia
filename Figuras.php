<!DOCTYPE html>
<html lang="en">
   
    <?php
  if (!isset($_SESSION)) {
    session_start();
    } 
?>
    <?php include "Menu.php"; ?>
    <body class="body">
      
    <div class="containercard">
        <div class="row row-cols-1 row-cols-md-3 g-4 cardspace">
            <?php
            include "conexion/Conexion.php";
            $record_per_page = 9;
            $pagina = "";
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
            } else {
                $pagina = 1;
            }
            $start_from = ($pagina - 1) * $record_per_page;
            $consulta = "select * from ropa where categoria='Figuras'  ORDER BY  id DESC LIMIT $start_from, $record_per_page";
            $respuesta = mysqli_query($conexion, $consulta);
            while ($arreglo2 = mysqli_fetch_array($respuesta)) {
                echo '
              
                    <div class="col">
                      <div class="card box">
                        <img src="imagenes/Productos/' .
                    $arreglo2["imagen"] .
                    '" class="card-img-top imgcard model" alt="...">
                        <div class="card-body">
                          <h5 class="card-title mar">' .
                    $arreglo2["nombre"] .
                    '</h5>
                          <p class="card-text details letrasmenu">' .
                    $arreglo2["descripcion"] .
                    '</p>
                          <p class="card-title details">$' .
                    $arreglo2["precio"] .
                    '</p>
                          
                        <br> 
                        <br>  
                          <a  href="carrito.php?id=' .
                    $arreglo2["id"] .
                    '" type="button" class="btn btncompra btn-outline-light w-100">Comprar</a>
                        </div>
                      </div>
                      </div>

                
                
                ';
            }
            ?>
              
      </div>
  </div>
  <div align="center" class="containercard" >
  <nav >
              <?php
              $page_query =
                  "SELECT * FROM ropa WHERE categoria='Figuras' ORDER BY id DESC";
              $page_result = mysqli_query($conexion, $page_query);
              $total_record = mysqli_num_rows($page_result);
              $total_pages = ceil($total_record / $record_per_page);
              $start_loop = $pagina;
              $diferencia = $total_pages - $pagina;
              if ($diferencia <= 5) {
                  $start_loop = $total_pages - 5;
              }
              $end_loop = $start_loop + 4;
              if ($pagina > 1) {
                  echo "<a  class ='pagina btn btn-outline-dark' href='Figuras.php?pagina=1'>Primera</a>";
                  echo "<a class ='pagina btn btn-outline-dark' href='Figuras.php?pagina=" .
                      ($pagina - 1) .
                      "'><<</a>";
              }
              for ($i = $start_loop; $i <= $end_loop + 1; $i++) {
                  if ($i > 0) {
                      echo "<a class ='pagina btn btn-outline-dark' href='Figuras.php?pagina=" .
                          $i .
                          "'>" .
                          $i .
                          "</a>";
                  }
              }
              if ($pagina <= $end_loop) {
                  echo "<a class ='pagina btn btn-outline-dark' href='Figuras.php?pagina=" .
                      ($pagina + 1) .
                      "'>>></a>";
                  echo "<a class ='pagina  btn btn-outline-dark' href='Figuras.php?pagina=" .
                      $total_pages .
                      "'>Última</a>";
              }
              ?>
  </nav> 
  
  </div>
  <br>
  <?php include "footer.php"; ?>
  </body>
   
 </html>   



