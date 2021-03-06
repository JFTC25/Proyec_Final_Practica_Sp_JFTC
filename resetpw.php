<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Resetear Contraseña</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="icon" href="assets/images/wolf.ico" type="image/x-icon">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
    
  </head>
  <body class="dark row align-items-center vh-100">
    <div class="wrapper ">
      <div class="row align-items-center ">
        <div class="col-lg-7">
          <div class=" d-none d-lg-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/128055.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/hd.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/4493.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>
          
        </div> 
        <div class="col-lg-5 ">
          <div class="w-50 mx-auto">
            <form class="mx-auto text-center" action="restaurar.php" method="POST">
              <div class="text-center">
                <img src="assets/images/wolf.png" alt="logo.png" class="navbar-brand-img brand-md">
            </div><br>
            <h2 class="my-3">Resetear Contraseña</h2>
            <?php 
								
								if(isset($_GET['estado'])){
									$estado=$_GET['estado'];
									if($estado==1){	?>
                  <div class="alert alert-danger form-group" role="alert">
                        <span class="fe fe-check-circle fe-16 mr-2"></span>Usuario o Correo no coinciden</div>
									<?php		
									}
									if($estado==2){	?>
                  <div class="alert alert-danger form-group" role="alert">
                        <span class="fe fe-x-circle fe-16 mr-2"></span> Usuario o Contraseña Incorrectos </div>
                  <?php		
                  }
								}

								?>
              <div class="form-group">
                <label for="inputEmail" class="sr-only">Correo Electronico</label>
                <input type="email" name="correo" class="form-control form-control-lg" placeholder="Correo Electronico" required="" autofocus="">
              </div>
              <div class="form-group">
                <label for="inputPassword" class="sr-only">Usuario</label>
                <input type="text" name="user" class="form-control form-control-lg" placeholder="Usuario" required="">
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Resetear</button><br> <br>
              
            </form>
          </div> <!-- .card -->
        </div> <!-- ./col -->
      </div> <!-- .row -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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