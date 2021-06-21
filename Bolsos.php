<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="./css/bootstrap.css" rel="stylesheet">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="./css/estiloDC.css" rel="stylesheet">
        
   
        <title>DarkCube</title>
    </head>
    <?php 
    include("Menu.html");
    ?>
    <div class="containercard">
        <div class="row row-cols-1 row-cols-md-3 g-4 cardspace">
            <?php
            
            include("conexion/Conexion.php");
            $consulta="select * from bolsos";
            $respuesta=mysqli_query($conexion,$consulta);
            while($arreglo2=mysqli_fetch_array($respuesta)){
              echo '
              
                    <div class="col">
                      <div class="card box">
                        <img src="imagenes/Productos/'.$arreglo2['imagenbolso'].'" class="card-img-top imgcard model" alt="...">
                        <div class="card-body">
                          <h5 class="card-title mar">'.$arreglo2['nombrebolso'].'</h5>
                          <p class="card-text details">'.$arreglo2['descripcionbolso'].'</p>
                          <p class="card-title details">$'.$arreglo2['preciobolso'].'</p>
                          <select class="form-select">
                        <br> 
                        <br>  
                          <a type="button" class="btn btn-outline-danger w-100">Comprar</a>
                        </div>
                      </div>
                      </div>

                
                
                ';
              }
              ?>
              
      </div>
  </div>
  <?php 
        include("footer.html");
        ?>
  </body>
