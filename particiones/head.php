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
    <header class="header-inicio">
        <div class="target hide">
            <a>&#9776;</a>
        </div>

        <nav class="header-inicio__menu nav">
            <ul>
                <li class="hashtag"><a href="#">#PhawrikaDeUñas</a></li>
                <li class="li__icon"><a href="inicio.php"><img src="img/icon.png" alt="icono"></a></li>
                <div class="menu-opciones">
                    <li class="li__inicio hide"><a href="inicio.php"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="nosotros.php"><i class="fas fa-users"></i> Quiénes Somos</a></li>
                    <li><a href="productos.php"><i class="fas fa-boxes"></i> Productos</a></li>
                    <li><a href="servicios.php"><i class="fas fa-hand-sparkles"></i> Servicios</a></li>
                    <li><a href="contactos.php"><i class="fas fa-envelope"></i> Contactanos</a></li>
                </div>

                <?php if(!isset($_SESSION['usuario'])) { /*var_dump($_SESSION['usuario'])*/ ?>
                <li>
                    <a class="hide-user"><i class="fas fa-user-friends"></i> <i class="fas fa-angle-down"></i></a>
                    <ul class="registros">
                        <li class="registro-usu log-in"><a>Iniciar Sesion</a></li>
                        <li class="registro-usu sign-in"><a>Registrarse</a></li>
                    </ul>
                </li>
                <?php }  ?>

                <?php if(isset($_SESSION['usuario'])) { ?>
                <li class="li__user">
                    <div class="nameUser"><p>Hola</p><a href="perfil.php"><?php echo ($_SESSION['usuario']); ?></a></div>
                    <div class="logOut"><a href="acciones/logoff.php">Cerrar sesion</a></div>
                </li>
                <?php }  ?>
            </ul>
        </nav>