<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo.css">
    	<!-- Latest compiled and minified CSS /*BOOTSTRAP*/-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled JavaScript /*BOOTSTRAP*/-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

    <!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <div class="margen">
        <div class="principal">
            <div class="contenido">
                <div class="summary">
                    <h1>
                        Practicando Herencia
                    </h1>
                        <div class="fecha">03/02/2022</div>
                    </div>
                </div>
                <?php
                    require_once('padre/Animal.php');
                    require_once('hija/Perro.php');
                    require_once('hija/Gato.php');

                    $perro = new Perro();
                    $gato = new Gato();

                    echo "<h3>Perro:</h3>";
                    $perro->comer();
                    $perro->llamarDormir();

                    echo "<hr>";

                    echo "<h3>Gato:</h3>";
                    $gato->comer();
                    $gato->llamarDormir();
                ?>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start" style="background-color: #240000;">
        <div class="container-fluid">
            <div class="row">
                <section class="mb-4 text-center">
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.facebook.com/campusfp/">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://twitter.com/Campus_FP">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.linkedin.com/school/campus-fp/">
                        <i class="fab fa-linkedin"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/campusfp_/?hl=es">
                        <i class="fab fa-instagram"></i>
                    </a>
                </section>
            </div>
        </div>
            <section class="footer-copyright text-center text-light">© 2022 Copyright:
                <a href="https://campusfp.es/">www.campusfp.es</a>
            </section>
    </footer>




</body>
</html>