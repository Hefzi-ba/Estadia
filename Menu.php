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
      
            
            
            <div class="jumbotron text-center">
                <nav class="navbar navbar-expand-lg  sticky-top  ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                        <?php if (isset($_SESSION["usuario"])) { ?>
                            <li class="nav-item">
                            <a type="button" class="btn btn-outline-light letrasmenu " href="./conexion/cerrar.php">Cerrar sesion</a>
                            </li>
                            <li class="nav-item">
                            <a type="button" class="btn btn-outline-light letrasmenu " href="pedidos.php">Pedidos</a>
                            </li>
                            
                            <?php } else { ?>
                            <li class="nav-item">
                            <a type="button" class="btn btn-outline-light letrasmenu " href="loguin.php">Iniciar sesi??n</a>
                            </li>
                            <li class="nav-item">
                              <a type="button" class="btn btn-outline-light letrasmenu" href="Registro.php">Registrarse</a>
                            </li>
                           <?php } ?>
                         
                          <li class="nav-item">
                            <a class="btn btn-outline-light letrasmenu" href="catalogo.php">Ropa</a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-light letrasmenu" href="Figuras.php">Figuras</a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-light text-end letrasmenu" href="Bolsos.php">Bolsos</a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-light text-end letrasmenu" href="Oferta.php">Ofertas</a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-outline-light text-end letrasmenu " href="Nosotros.php">Nosotros</a>
                          </li>
                        </ul>
                      </div>
                      <a href="carrito.php"><i class="fas fa-shopping-cart btn btn-outline-light text-end"></i></a>
                    </div>
                  </nav>
                <div class="intro">
                    <a><img src="imagenes/logoDCpng.png"  style="height: 140px;"></a>
                    <h1>
                      
                    </h1>
                   
                </div>
            </div>
            <br>
            <br>
             
   
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>