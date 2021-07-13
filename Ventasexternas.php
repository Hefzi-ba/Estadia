<?php 
include("Menuadmin2.php");
include("conexion/Conexion.php");
if(isset($_GET['eliminar'])){
  $sql="delete from carrito  where serviciodomicilio=1 and id=".$_GET['eliminar']."";
  mysqli_query($conexion,$sql);
}
$sql=mysqli_query($conexion,"select * from carrito  where  serviciodomicilio=1 ");
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


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <form class="d-flex" action="Ventaslocales.php" method="POST">
                  <input class="form-control me-2" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
              </div>
            </nav>
          <table class="table table-responsive">
              <thead class="table-dark">
              <th scope="col">Id de venta  </th>
              <th scope="col">Id de usuario</th>
              <th scope="col">Fecha</th>
              <th scope="col">Usuario</th>
              <th scope="col">Total</th>
              <th scope="col">Id de producto</th>
              <th scope="col">Productos</th>
              
              <th scope="col">Eliminar</th>
              
              </thead>
              
                <?php 

              include("conexion/Conexion.php");
              $buscar='';
              if(isset($_POST['buscar'])){
                $buscar=$_POST['buscar'];
              }
            $consulta="SELECT carrito.id, carrito.usuario, carrito.fecha, carrito.totalpagar, carrito.idusuario, carrito_productos.id_producto  FROM  carrito, carrito_productos   WHERE serviciodomicilio=1";
            $respuesta=mysqli_query($conexion,$consulta);
            while($arreglo=mysqli_fetch_array($respuesta)){
              echo '
                <tr>
                  
                  <td>'.$arreglo['id'].'</td>
                  <th scope="row">'.$arreglo['idusuario'].'</th>
                  
                  <td>'.$arreglo['fecha'].'</td>
                  <td>'.$arreglo['usuario'].'</td>
                  
                  <td>'.$arreglo['totalpagar'].'</td>
                  <td>'.$arreglo['id_producto'].'</td>
                  <td scope="row">producto</td>
                  
                  
                  
                  <td><a href="#"  onclick="eliminar('.$arreglo['id'].')" type="button" class="btn btn-outline-danger" > <i class="fas fa-trash"></i></a></td>
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
      
      if(confirm("Deseas eliminar esta venta?")){
        window.location="Ventasexternas.php?eliminar="+id;
      }
    }
  </script>



  
</html>


