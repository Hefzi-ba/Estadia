<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link href="./css/bootstrap.css" rel="stylesheet" />

    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="./css/estiloDC.css" rel="stylesheet" />

    <title>DarkCube</title>
  </head>
  <?php
            include "conexion/Conexion.php";
            
            
            $consulta = "select * from envio ";
            $respuesta = mysqli_query($conexion, $consulta);
            while ($arreglo2 = mysqli_fetch_array($respuesta)) {
                echo '
                        <body class="body">
                          <p class="penvio">' .$arreglo2["texto_envio"] .'' .$arreglo2["montoenvio"] .'</p>
                        </body>
                      ';
            }
  ?>



  



</html>
