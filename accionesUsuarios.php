<?php
   include_once("claseUsuario.php");
   
   $op = $_REQUEST['opcion'];

    switch($op){
        case 'insertar':
            $c1 = $_REQUEST['nombre'];
            $c2 = $_REQUEST['usuario'];
            $c3 = $_REQUEST['edad'];
            $c6 = $_REQUEST['genero'];
            $c4 = $_REQUEST['clave'];
            $passHash = password_hash($c4,PASSWORD_DEFAULT);
            $c7 = $_REQUEST['privilegio'];
            $c5 = $_REQUEST['correo'];
            $usuario = new usuarios($c1,$c2,$c3,$passHash,$c5,$c6,$c7);
            // var_dump($usuario);
            if($usuario->insercion()){
                echo 'OK';
            }else{
                echo 'ERROR';
            }
        break;
        
        case 'modificar':
            $c1 = $_REQUEST['nombre'];
            $c2 = $_REQUEST['usuario'];
            $c3 = $_REQUEST['edad'];
            $c6 = $_REQUEST['genero'];
            $id = $_REQUEST['id'];
            $usuario = new usuarios($c1,$c2,$c3,null,null,$c6,null,$id);
            if($usuario->modificar()){
                echo 'OK';
                header('Location: listaUsuario.php');    
            }else{
                echo 'ERROR';
            }
        break;

       default:
            usuarios::eliminar($_GET["id"]);
            header('location:lista-usuarios.php');
        break;
    }
?>