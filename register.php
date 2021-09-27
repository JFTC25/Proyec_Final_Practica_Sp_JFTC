<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Crear Cuenta</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="icon" href="assets/images/wolf.ico" type="image/x-icon">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
  </head>
  <body class="dark justify-content-center align-items-center ">
    <div class="wrapper ">
      <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" action="cuenta.php" method="POST">
          <div class="mx-auto text-center my-4">
            <div class="text-center">
              <img src="assets/images/wolf.png" alt="logo.png" class="navbar-brand-img brand-md">
          </div>
            <h2 class="my-3">Crear Cuenta</h2><hr>
          </div>
          <?php 
								
								if(isset($_GET['estado'])){
									$estado=$_GET['estado'];
									if($estado==1){	?>
                  <div class="alert alert-danger form-group text-center" role="alert">
                        <span class="fe fe-check-circle fe-16 mr-2"></span>Las contraseñas no coinciden</div>
                  <?php		
                  }
								}

								?>
          <div class="form-group">
            <label for="inputEmail4">Correo Electronico:</label>
            <input type="email" class="form-control" name="correo" required>
          </div>
          <div class="form-group">
            <div class="form-group ">
              <label for="firstname">Nombre Usuario:</label>
              <input type="text" name="user" class="form-control" required>
            </div>
           </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputPassword5">Contraseña</label>
                <input type="password" class="form-control" name="pass1" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputPassword6">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="pass2" required>
              </div>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
         
        </form>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>