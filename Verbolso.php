<?php 
include("Menuadmin2.php");
include("conexion/Conexion.php");
if(isset($_GET['eliminar'])){
  $sql="delete from ropa where categoria='Bolsos' and id=".$_GET['eliminar']."";
  mysqli_query($conexion,$sql);
}
$sql=mysqli_query($conexion,"select * from ropa where categoria='Bolsos'");
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
          <table class="table ">
              <thead class="table-dark">
              <th scope="col">Codigo </th>
              <th scope="col">Imagen</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción </th>
              <th scope="col">Precio</th>
              <th scope="col">Existencia pz</th>
              <th scope="col">Editar</th>
              <th scope="col">eliminar</th>
              
              </thead>
              
                <?php 
              include("conexion/Conexion.php");
            $consulta="select * from ropa where categoria='Bolsos'";
            $respuesta=mysqli_query($conexion,$consulta);
            while($arreglo=mysqli_fetch_array($respuesta)){
              echo '
                <tr>
                  <th scope="row">'.$arreglo['codigo'].'</th>
                  
                  <td ><img class="tableimg"  src="imagenes/Productos/'.$arreglo['imagen'].'"></td>
                  <td>'.$arreglo['nombre'].'</td>
                  <td>'.$arreglo['descripcion'].'</td>
                  <td>'.$arreglo['precio'].'</td>
                  <td>'.$arreglo['existencia'].'</td>
                  <td><a type="button" class="btn btn-outline-secondary"  href="conexion/modificarsbolsos.php?id='.$arreglo['id'].'"><i class="fas fa-edit"></i></a></td>
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
      
      if(confirm("Deseas eliminar este articulo?")){
        window.location="Verbolso.php?eliminar="+id;
      }
    }
  </script>

</html>


