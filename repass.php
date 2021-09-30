<?php
include("conexionbd.php");
$id = $_GET["id"];
$datos = "SELECT * FROM usuario WHERE id = '$id' ";


session_start();
$correo = $_SESSION['correo'];
if (!isset($correo)) {
    header("Location:index.php?estado=3");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="favicon.ico" />
        <title>Perfil</title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="css/simplebar.css" />
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
        <!-- Icons CSS -->
        <link rel="icon" href="assets/images/wolf.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/feather.css" />
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="css/daterangepicker.css" />
        <!-- App CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled />
        <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" />
    </head>

    <body class="vertical dark">
        <div class="wrapper">
            <nav class="topnav navbar navbar-light">
                <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                    <i class="fe fe-menu navbar-toggler-icon"></i>
                </button>
                <form class="form-inline mr-auto searchform text-muted" action="busqueda.php" method="POST">
                    <input name="buscar" class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="text" placeholder="Buscar..." aria-label="Search">
                </form>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                            <i class="fe fe-sun fe-16"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar avatar-sm mt-2">
                                <img src="./assets/images/da.png" alt="..." class="avatar-img rounded-circle" />
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><?php echo $correo;
                                                            } ?></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
                <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                    <i class="fe fe-x"><span class="sr-only"></span></i>
                </a>
                <nav class="vertnav navbar navbar-light">
                    <!-- nav bar -->
                    <div class="w-100 mb-4 d-flex">
                        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="home.php">
                            <div class="text-center">
                                <img src="assets/images/wolf.png" alt="logo.png" class="navbar-brand-img brand-md" />
                                <h6>Wolf</h6>
                            </div>
                        </a>
                    </div>
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Opciones</span>
                    </p>

                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item dropdown">
                            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-file-text fe-16"></i>
                                <span class="ml-3 item-text">Registrar</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="producto.php"><span class="ml-1 item-text">- Producto</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="factura.php"><span class="ml-1 item-text">- Factura</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-credit-card fe-16"></i>
                                <span class="ml-3 item-text">Ver</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="verpro.php"><span class="ml-1 item-text">- Producto</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="verfac.php"><span class="ml-1 item-text">- Factura</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="main-content">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
                    </li>
                </ul>
                <div class="my-4">
                    <div class="card-body">
                        <?php $resultado = mysqli_query($conn, $datos);
                        while ($row = mysqli_fetch_assoc($resultado)) {  ?>
                            <h5 class="card-title">Perfil</h5>
                            <p class="card-text">Datos del usuario</p>
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <form action="recuperar.php" method="POST">
                                        <tr class="table-info">
                                            <th scope="row" rowspan="3"> <img class="img-fluid" src="assets/images/ses.png"></th>
                                            <input type="text" class="form-control" name="id" readonly value="<?php echo  $row["id"]; ?>"><br>
                                        </tr>
                                        <tr class="table-secondary-regular">

                                            <td class="text-white">Nueva Contraseña: <br><input type="password" name="pass1" class="form-control " required></td>
                                            
                                        </tr>
                                        <tr class="table-secondary-regular">
                                            <td class="text-white">Confirmar Nueva Contraseña: <br><input type="password" name="pass2" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <button type='submit' class='btn btn-info btn-round waves-effect waves-light'>Confirmar</button></a>


                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/moment.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/simplebar.min.js"></script>
            <script src="js/daterangepicker.js"></script>
            <script src="js/jquery.stickOnScroll.js"></script>
            <script src="js/tinycolor-min.js"></script>
            <script src="js/config.js"></script>
            <script src="js/apps.js"></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag("js", new Date());
                gtag("config", "UA-56159088-1");
            </script>
    </body>

    </html>