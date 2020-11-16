<?php
    include("../clases/claseUsuario.php");
    $usuario = $_REQUEST['usuario'];
    $pass = $_REQUEST['clave'];
    $arr = usuarios::seleccionarUsuario($usuario);
    echo $usuario;
    echo $pass;
    // var_dump($arr);
    if ($arr != false) {
        /*var_dump($_POST['logUsuario']);
        var_dump($_POST['logPassword']);*/
        
        //    var_dump($arr);
        if (($usuario == $arr->getUsuario()) && (password_verify($pass,$arr->getPass()))){
            session_start();
            $_SESSION['usuario']=$arr->getUsuario();
            $_SESSION['id']=$arr->getId();
            $_SESSION['privilegio']=$arr->getPrivilegios();
            $_SESSION['genero']=$arr->getGenero();
            $_SESSION['correo']=$arr->getCorreo();
            $_SESSION['pass']=$arr->getPass();
            $_SESSION['nombre']=$arr->getNombre();
            $_SESSION['edad']=$arr->getEdad();
            // header('Location: ../inicio.php');
            
            echo 'OK';
        } else {
            echo 'PASS';
            // header('Location: ../nosotros.php');
        }
    } else {
        // header('Location: ../contactos.php');
        echo 'USUARIO';
    }
    $arr = '';
?>