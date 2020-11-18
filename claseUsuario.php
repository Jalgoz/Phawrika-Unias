<?php
    include_once("conexion.php");
    class usuarios{
        private $id_usuario;
        private $nombre;
        private $usuario;
        private $edad;
        private $pass;
        private $correo;
        private $genero;
        private $privilegio;

        
        public function __Construct($c1,$c2,$c3,$c4,$c5,$c6,$c7,$id=null)
        {
            $this->id_usuario=$id;
            $this->nombre=$c1;
            $this->usuario=$c2;
            $this->edad=$c3;
            $this->pass=$c4;
            $this->correo=$c5;
            $this->genero=$c6;
            $this->privilegio=$c7;
        }
        //getter
        public function getId(){
            return $this->id_usuario;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getPass(){
            return $this->pass;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function getPrivilegios(){
            return $this->privilegio;
        }
       
        //setter
        public function setId($var){
            $this->id_usuario = $var;   
        }
        public function setNombre($var){
            $this->nombre = $var;   
        }
        public function setUsuario($var){
            $this->usuario = $var;
        }
        public function setEdad($var){
            $this->edad = $var;   
        }
        public function setCorreo($var){
            $this->correo = $var;
        }
        public function setPassword($var){
            $this->pass = $var;
        }
        public function setGenero($var){
            $this->genero = $var;   
        }
        public function setPrivilegio($var){
            $this->privilegio = $var;
        }

        public function insercion(){         
            $con=conexion::conectar();         
            $sql="INSERT INTO usuarios(nombre,usuario,edad,pass,correo,genero,privilegio) VALUES(:c1,:c2,:c3,:c4,:c5,:c6,:c7)";
            $query=$con->prepare($sql);
            $query->bindParam(":c1",$this->nombre);
            $query->bindParam(":c2",$this->usuario);
            $query->bindParam(":c3",$this->edad);
            $query->bindParam(":c4",$this->pass);
            $query->bindParam(":c5",$this->correo);
            $query->bindParam(":c6",$this->genero);
            $query->bindParam(":c7",$this->privilegio);   
            //var_dump($this->nombre);
            return $query->execute();
        }

        public static function seleccionarTodo(){
            $con=conexion::conectar();
            $sql="SELECT * FROM usuarios";
            $query=$con->prepare($sql);
            $query->execute();
            // var_dump($query->execute());
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'usuarios',array('nombre','usuario','edad','pass','correo','genero','privilegio',1));
            return $query->fetchAll();
        }

        public static function seleccionarPorId($id){
            $con=conexion::conectar();
            $sql="SELECT * FROM usuarios WHERE id_usuario=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":id",$id);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'usuarios',array('nombre','usuario','edad','pass','correo','genero','privilegio',1));
            return $query->fetchAll();
        }

        public function modificar()
        {
            $con=conexion::conectar();
            var_dump($this->id);
            $sql="UPDATE usuarios SET nombre=:c1,usuario=:c2,edad=:c3,genero=:c4,privilegio=:c5 WHERE id_usuario=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":c1",$this->nombre);
            $query->bindParam(":c2",$this->usuario);
            $query->bindParam(":c3",$this->edad);
            $query->bindParam(":c4",$this->genero);
            $query->bindParam(":c5",$this->privilegio);
            $query->bindParam(":id",$this->id_usuario);
            return $query->execute();
        }

        public static function eliminar($id)
        {
            $con=conexion::conectar();
            $sql="DELETE FROM usuarios WHERE id_usuario=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":id",$id);
            //var_dump($query->errorInfo());
            return $query->execute();
        }
        static public function seleccionarUsuario($usuario)
		{
            $pdo = conexion::conectar();
            var_dump($usuario);
			$sql='SELECT * FROM usuarios WHERE usuario = :usuario';
			$query = $pdo->prepare($sql);	
			$query->bindParam(':usuario',$usuario); 
			$query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'usuarios',array('nombre','usuario','edad','pass','correo','genero','privilegio',1));
 			return $query->fetch();			
		}
    }   
?>