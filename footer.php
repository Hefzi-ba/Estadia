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
    <link href="./css/estiloDC.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DarkCube</title>
  </head>

  <?php
            include "conexion/Conexion.php";
            
            
            $consulta = "select * from footer ";
            $respuesta = mysqli_query($conexion, $consulta);
            while ($arreglo2 = mysqli_fetch_array($respuesta)) {
                echo '
                        

                        <body class="body">
                          <div class="card text-center">
                            <div class="card-header">
                              <h3
                                style="
                                  font-weight: bold;
                                  letter-spacing: 2px;
                                  font-family: fantasy;

                                  color: #e2e7e7;
                                "
                              >
                              ' .$arreglo2["titulofooter"] .'
                              </h3>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title nosotros">' .$arreglo2["horario"] .'</h5>
                              <p class="card-text nosotros">' .$arreglo2["telefonofooter"] .'</p>
                              <p class="card-text nosotros">' .$arreglo2["correofooter"] .'</p>
                              <a href="https://www.facebook.com/DarkCube.NCG"
                                ><img class="img-thumbnail"  src="imagenes/redsocial/' .
                                $arreglo2["ligafooter"] .'"></a>
                              <a href=""
                                ><img class="img-thumbnail"  src="imagenes/redsocial/' .
                                $arreglo2["instagram"] .'"></a>
                            </div>
                            <div class="card-footer text-muted card-body">
                            ' .$arreglo2["piefooter"] .'
                            </div>
                          </div>
                        </body>
                      ';
            }
  ?>

  
</html>





