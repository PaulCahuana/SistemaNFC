<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iniciar Sesión</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Inicio </h2>
              <h4 class="font-weight-light">Bienvenido a Aires Express del Sur</h4>
              

                <form action="checklogin.php" method="post" >
                  <div class="form-group">
                    <label >Usuario:</label>
                    <input  class="form-control"  name="user"  placeholder="Nombre de Usuario">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label >Contraseña:</label>
                    <input type="password" class="form-control"  name="password"  placeholder="Contraseña" required>
                    <i class="mdi mdi-eye"></i>
                  </div>

                  <div class="mt-5">
                     
                    <input class="btn btn-block btn-warning btn-lg font-weight-medium" type="submit" name="submit" value="LOGIN">
                  </div>

                </form>  


              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
