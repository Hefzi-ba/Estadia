
<?
session_start();
include("phpconexion/Conexion.php");
  $usuario=$_SESSION['usuario'];
  if(!isset($usuario)){
    header(("location:./loguin.php"));
  }else{
    ?>
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

        <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="./dist/css/adminlte.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <title>DarkCube</title>
    </head>
    <body class="">

  


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link">
      
      <span class="brand-text font-weight-light letrasmenu">Menú administrador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block letrasmenu">Julio Silveira </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
                  <a href="./conexion/cerrar.php" class="nav-link">
                    <i class="nav-icon "></i>
                    <p class="letrasmenu">
                      Cerrar sesión 
                     
                      
                    </p>
                  </a>
               </li> 
               <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hat-wizard"></i>
              <p class="letrasmenu">
              Novedad de inicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="agregarinicio.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Agregar novedad </p>
                </a>
                <a href="./phpconexion/editarinicio.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Ver novedades </p>
                </a>
              </li>
            
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="Verproducto.php" class="nav-link">
              <i class="nav-icon fas fa-tshirt"></i>
              <p class="letrasmenu">
               Ropa
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Agregarproducto.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu"> Agregar  </p>
                </a>
                <a href="./Verproducto.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">ver productos </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="Verproducto.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p class="letrasmenu">
                Categorías
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Agregarcategoria.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu"> Agregar  </p>
                </a>
                <a href="./Vercategoria.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Ver categorías </p>
                </a>
              </li>
            
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="Verproducto.php" class="nav-link">
              <i class="nav-icon fas fa-ghost"></i>
              <p class="letrasmenu">
                Figuras
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="./Agregarfigura.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Agregar</p>
                </a>
                <a href="./Verfiguras.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu"> Ver figuras </p>
                </a>
               
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p class="letrasmenu">
                Bolsos 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Agregarbolso.php" class="nav-link">
                  <i class="far nav-icon"></i>
                  <p class="letrasmenu"> Agregar  </p>
                </a>
                <a href="./Verbolso.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Ver bolsos</p>
                </a>
              </li>
          </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p class="letrasmenu">
              Nosotros 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Vernosotros.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Editar nosotros </p>
                </a>
              </li>
            
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p class="letrasmenu">
              Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ventaslocales2.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Ventas locales</p>
                </a>
                <a href="Ventasexternas.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Venta externa </p>
                </a>
              </li>
            
            </ul>
          </li>
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-user-circle"></i>
              <p class="letrasmenu">
                Usuarios
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Agregarusuarioadmin.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Agregar usuario </p>
                </a>
                
                
              </li>
              <li class="nav-item">
              <a href="Verusuarios.php" class="nav-link">
                  <i class="far  nav-icon"></i>
                  <p class="letrasmenu">Administradores</p>
                </a>
              </li>
              
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>

</body>
<?
  }
?>
</html>
