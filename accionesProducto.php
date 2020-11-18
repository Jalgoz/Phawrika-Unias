<?php
   include_once("claseProducto.php");


   
   $op = $_POST['opcion'];
    switch($op){
        case 'insertar':
            $c1 = $_POST['nombre'];
            $c2 = $_POST['marca'];
            $c3 = $_POST['precio'];
            $c4 = $_POST['rebaja'];
            $c5 = $_POST['nuevoPrecio'];
            $c6 = $_POST['cantidad'];
            $c7 = $_POST['informacion'];
            $dir="img/productos/".$_FILES['foto']['name'];
            move_uploaded_file($_FILES["foto"]["tmp_name"],$dir);
            $producto = new producto($c1,$c2,$c3,$c4,$c5,$c6,$c7,$dir);
            if($producto->insercion()){
                header('location:lista-productos.php');
                echo 'OK';
            }else{
                echo 'ERROR';
            }
        break;
        
        case 'modificar':
            $c1 = $_POST['nombre'];
            $c2 = $_POST['marca'];
            $c3 = $_POST['precio'];
            $c4 = $_POST['rebaja'];
            $c5 = $_POST['nuevoPrecio'];
            $c6 = $_POST['cantidad'];
            $c7 = $_POST['informacion'];
            $dir="img/productos/".$_FILES['foto']['name'];
            move_uploaded_file($_FILES["foto"]["tmp_name"],$dir);
            $id = $_POST['id'];
            $producto = new producto($c1,$c2,$c3,$c4,$c5,$c6,$c7,$dir,$id);
            if($producto->modificar()){
                header('location:lista-productos.php');
                echo 'OK';
            }else{
                echo 'ERROR';
            }
        break;

       default:
            producto::eliminar($_GET["id"]);
            header('location:lista-productos.php');
        break;
    }
?> 