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

    
    

    <body class="body">
      
    <div class="">
        <div class="row row-cols-1 row-cols-md-3 g-4 cardspace">
            <?php
            include "conexion/Conexion.php";

            $consulta = "select * from inicio  ";
            $respuesta = mysqli_query($conexion, $consulta);
            while ($arreglo2 = mysqli_fetch_array($respuesta)) {
                echo '
              
                    <div class="col">
                      <div class="card box">
                            <h5 class="card-title mmar">' .
                    $arreglo2["titular"] .
                    '</h5>
                    
                            <img src="imagenes/Inicio/' .
                    $arreglo2["imageninicio"] .
                    '" class="card-img-top imgcard model" alt="...">
                        
                            </div>
                            </div>
                          
                          ';
            }
            ?>
              
      </div>
  </div>
  
  
  
  <br>
 
  </body>
</html>