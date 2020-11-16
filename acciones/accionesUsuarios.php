<?php
    /*
    var_dump($_POST['correo']);
    var_dump($_POST['pass']);
    var_dump($_POST['privilegio']);
    */
   include_once("../clases/claseUsuario.php");
   $c1 = $_REQUEST['nombre'];
   $c2 = $_REQUEST['usuario'];
   $c3 = $_REQUEST['edad'];
   $c6 = $_REQUEST['genero'];
   
   $op = $_REQUEST['opcion'];

    switch($op){
        case 'insertar':
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
        
        case 'Modificar':
            $id = $_REQUEST['id'];
            $usuario = new usuarios($c1,$c2,$c3,null,null,$c6,null,$id);
            if($usuario->modificar()){
                echo 'OK';
                header('Location: listaUsuario.php');    
            }else{
                echo 'ERROR';
            }
        default:
        #code...
        break;
    }
?>