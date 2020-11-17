<body>
    <nav class="nav__perfil">

        <a class="bar">&#9776;</a>
        <?php if($_SESSION['privilegio'] == 1) {?>
        <ul class="only__manager">
            <li>
                <a>Usuarios</a>
                <ul>
                    <li><a href="agregar-usuario.php">Agregar usuario</a></li>
                    <li><a href="lista-usuarios.php">Lista usuarios</a></li>
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