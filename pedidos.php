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
    <body class="body">
      
    <div class="containercard">
        <div class="row row-cols-1 row-cols-md-3 g-4 cardspace">
            <?php
            
            include("conexion/Conexion.php");
            $consulta="select * from carrito";
            $respuesta=mysqli_query($conexion,$consulta);
            while($arreglo2=mysqli_fetch_array($respuesta)){
              echo '
              
                    <div class="col">
                      <div class="card box">
                       
                        <div class="card-body">
                            <p class="card-text mar">Usuario:</p>
                            <p class="card-text details">'.$arreglo2['usuario'].'</p>
                          <p class="card-text details">'.$arreglo2['idusuario'].'</p>
                          <p class="card-text mar">Fecha:</p>
                          <p class="card-text details">'.$arreglo2['fecha'].'</p>
                          <p class="card-text mar">Ubicación:</p>
                          <p class="card-title details">$'.$arreglo2['lugar'].'</p>
                          <p class="card-text mar">Total:</p>
                          <p class="card-title details">$'.$arreglo2['totalpagar'].'</p>
                          
                       
                        
                        </div>
                      </div>
                      </div>

                
                
                ';
              }
              ?>
              
      </div>
  </div>
  </body>
   
 </html>   



