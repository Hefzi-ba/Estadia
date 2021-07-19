<?php
include "indexad2.php";
include "conexion/Conexion.php";
if (isset($_GET["eliminar"])) {
    $sql =
        "delete from envio where id=" .$_GET["eliminar"] . "";
    mysqli_query($conexion, $sql);
}
$sql = mysqli_query($conexion, "select * from envio ");
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
              <th class="letrasmenu" scope="col">Texto de envío</th>
              <th class="letrasmenu" scope="col">Monto</th>
              
              <th class="letrasmenu" scope="col">Editar</th>
              <th class="letrasmenu" scope="col">eliminar</th>
              
              </thead>
              
                <?php
                include "conexion/Conexion.php";
                $consulta = "select * from  envio ";
                $respuesta = mysqli_query($conexion, $consulta);
                while ($arreglo = mysqli_fetch_array($respuesta)) {
                    echo '
                <tr>
                  <th class="letrasmenu" scope="row">' .$arreglo["texto_envio"] .'</th>
                  <th class="letrasmenu" scope="row">' .$arreglo["montoenvio"] .'</th>
                  
                  
                  <td><a type="button" class="btn btn-outline-secondary"  href="conexion/modificarenvio.php?id=' .
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
      
      if(confirm("Deseas eliminar este monto?")){
        window.location="Verenvio.php?eliminar="+id;
      }
    }
  </script>
</html>


