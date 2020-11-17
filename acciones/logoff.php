<?php
    include ("seguridad.php");
    session_destroy();
    header('Location: ../inicio.php');
?>