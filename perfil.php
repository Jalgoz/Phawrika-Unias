<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phawrika Uñas</title>

    <link rel="stylesheet" href="css/main.min.css?v=<?php echo(rand()); ?>">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css?v=<?php echo(rand()); ?>"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>

<?php session_start(); ?>

<body>
    <nav class="nav__perfil">

        <a class="bar">&#9776;</a>
        <?php if($_SESSION['privilegio'] == 1) {?>
        <ul class="only__manager">
            <li>
                <a>Usuarios</a>
                <ul>
                    <li><a href="">Agregar usuario</a></li>
                    <li><a href="">Lista usuarios</a></li>
                </ul>
            </li>
            <li>
                <a>Productos</a>
                <ul>
                    <li><a href="">Agregar producto</a></li>
                    <li><a href="">Lista producto</a></li>
                </ul>
            </li>
        </ul>
        <?php }  ?>

        <div class="options">
            <div class="back"><a href="inicio.php">Volver</a></div>
            <div class="close"><a href="acciones/logoff.php">Cerrar sesion</a></div>
        </div>
    </nav>

    <div class="bienvenida">
        <img src="img/icon.png" alt="">
        <h2 class="bienvenida__banner">BIENVENID@ <strong><?php echo ($_SESSION['usuario']); ?>.</strong></h2>
        <p>Esperamos que tengas una bonita experiencia !!!</p>
    </div>

    <script src="js/jquery-3.5.1.min.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/jquery-ui.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/menu_bar.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/efectos.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/ajax.js?v=<?php echo(rand()); ?>"></script>
</body>
</html>