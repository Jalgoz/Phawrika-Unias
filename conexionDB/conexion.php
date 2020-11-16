<?php
    include_once("conf.php");
    class conexion
    {
        public static function conectar(){
            try{
                $pdo = new PDO("mysql:host = ".DB_HOST.";dbname=".DB_NAME,DB_USR,DB_PASS);
            }catch (PDOException $e){
                exit("ERROR".$e->getMessage());
            }
            return $pdo;
        }
    }
    
    // var_dump(conexion::conectar());
?>