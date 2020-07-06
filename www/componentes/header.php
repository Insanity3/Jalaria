<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jalaria</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- css -->
    <!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
    
</head>
<body>

<?php require 'back/indexb.php'?>
    <header>
    
    <div class="row">
        <div class="logo"></div>
        <div class="col-md d-flex justify-content-center align-items-center">
            <h1>Jalaria   </h1>.
        </div>
    </div>
        

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Sobre nosotros</a>
                    </li>
                    
                    <?php if(isset($_SESSION['usuario'])){?>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                            <?php echo $_SESSION['usuario'];?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="back/cerrar.php">
                            Cerrar sesión
                            </a>
                        </li>
                        <?php }else{?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                            Log In
                            </a>
                        </li>
                    <?php }?>
                </ul>
            
            </div>
        </nav>
    </header>