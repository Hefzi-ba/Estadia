<?php
session_start();
include("conexion/Conexion.php");
  $usuario=$_SESSION['usuario'];
  if(!isset($usuario)){
    header(("location:./loguin.php"));
  }else{?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Administración DC</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    <link href="./css/estiloDC.css" rel="stylesheet">
  </head>
  <body
    class="
      hold-transition
      sidebar-mini
      layout-fixed layout-navbar-fixed layout-footer-fixed
    "
  >
    <div class="wrapper">
      <!-- Navbar -->
      
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          
          <span class="brand-text font-weight-light letrasmenu">DarkCube </span>
          <span class="brand-text font-weight-light letrasmenu">Administración</span>

        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
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
                    <a href="Vernovedad.php" class="nav-link">
                      <i class="far  nav-icon"></i>
                      <p class="letrasmenu">Ver novedades </p>
                    </a>
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
                  <i class="nav-icon fas fa-hand-holding-usd"></i>
                  <p class="letrasmenu">
                  Banda de envíos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
             
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="Verenvio.php" class="nav-link">
                      <i class="far  nav-icon"></i>
                      <p class="letrasmenu">Montos de envío</p>
                    </a>
                    <a href="Agregarenvio.php" class="nav-link">
                      <i class="far  nav-icon"></i>
                      <p class="letrasmenu">Nuevo monto</p>
                    </a>
                  </li> 
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="dist/js/pages/dashboard2.js"></script>
  </body>
  <?php
  }
?>
</html>
