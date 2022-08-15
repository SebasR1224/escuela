<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo FOLDER_MEDIA?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo FOLDER_MEDIA?>/css/style.css">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= FOLDER_PATH?>">Escuela</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= FOLDER_PATH?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= FOLDER_PATH?>/login">Iniciar sesión</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-2">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?= FOLDER_MEDIA?>/img/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= FOLDER_MEDIA?>/img/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= FOLDER_MEDIA?>/img/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= FOLDER_MEDIA?>/img/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= FOLDER_MEDIA?>/img/5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Essential javascripts for application to work-->
    <script src="<?php echo FOLDER_MEDIA?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/popper.min.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/bootstrap.min.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/main.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/fontawesome.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/functions.js"></script>
    <script src="<?php echo FOLDER_MEDIA?>/js/plugins/pace.min.js"></script>
</body>
</html>