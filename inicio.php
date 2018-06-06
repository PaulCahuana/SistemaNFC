<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aires Express del Sur</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
    
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="inicio.php"><img src="images/aes_logo.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="inicio.php"><img src="images/aes_logo.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-ring"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="images/faces/face4.jpg" alt="">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item"><a class="nav-link" href="inicio.php"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html"><img class="menu-icon" src="images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>-->
          <li class="nav-item"><a class="nav-link" href="inicio.php"><img class="menu-icon" src="images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>

          <!-- <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html"><img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li> -->
          <li class="nav-item"><a class="nav-link" href="inicio.php"><img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> 
                <img class="menu-icon" src="images/menu_icons/04.png" alt="menu icon"> 
                <span class="menu-title">Agregar Producto</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/televisor.html">Televisores</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/equiposSonido.html">Equipos de Sonido</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/refrigeradoras.html">Refrigeradoras</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/licuadoras.html">Licuadoras</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/hornosMicro.html">Hornos Microondas</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/barrasSonido.html">Barras de Sonido</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/aspiradoras.html">Aspiradoras</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/frioBar.html">Frio Bar</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/racks.html">Racks</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/radioGraba.html">Radio Grabadoras</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/controlSonido.html">Control Remoto de Sonido</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/controlTele.html">Control Remoto de Televisor</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/dvd.html">DVD</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/blueRay.html">Blue Ray</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/homeTheater.html">Home Theater</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="pages/productos/antenas.html">Antenas</a>
                </li>



                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/index.php">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item purchase-button"><a class="nav-link" href="http://airesexpressdelsur.com/" >Cerrar Sistema</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Dinero Total</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Ordenes</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">3455</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Productos salidos
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-teal icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Saldo</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">5693</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> saldo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Empleados</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Producto
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">AiresxpressDelSur</a>. Todos los derechos reservados.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hecho por abstract.com <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>