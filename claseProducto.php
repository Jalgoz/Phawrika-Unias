<?php
    include_once("conexion.php");
    class producto{
        private $id_producto;
        private $nombre;
        private $marca;
        private $precio;
        private $rebaja;
        private $nuevoPrecio;
        private $cantidad;
        private $informacion;
        private $imagen;
        
        public function __Construct($c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$id=null)
        {
            $this->id_producto=$id;
            $this->nombre=$c1;
            $this->marca=$c2;
            $this->precio=$c3;
            $this->rebaja=$c4;
            $this->nuevoPrecio=$c5;
            $this->cantidad=$c6;
            $this->informacion=$c7;
            $this->imagen=$c8;
        }
        //getter
        public function getId(){
            return $this->id_producto;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getRebaja(){
            return $this->rebaja;
        }
        public function getNuevoPrecio(){
            return $this->nuevoPrecio;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getInformacion(){
            return $this->informacion;
        }
        public function getImagen(){
            return $this->imagen;
        }
       
        //setter
        public function setId($var){
            $this->id_producto = $var;   
        }
        public function setNombre($var){
            $this->nombre = $var;   
        }
        public function setMarca($var){
            $this->marca = $var;
        }
        public function setPrecio($var){
            $this->precio = $var;   
        }
        public function setRebaja($var){
            $this->rebaja = $var;
        }
        public function setNuevoPrecio($var){
            $this->nuevoPrecio = $var;
        }
        public function setCantidad($var){
            $this->cantidad = $var;   
        }
        public function setInformacion($var){
            $this->informacion = $var;
        }
        public function setImagen($var){
            $this->imagen = $var;
        }

        public function insercion(){        
            $con=conexion::conectar();         
            $sql="INSERT INTO producto(nombre,marca,precio,rebaja,nuevoPrecio,cantidad,informacion,imagen) VALUES(:c1,:c2,:c3,:c4,:c5,:c6,:c7,:c8)";
            $query=$con->prepare($sql);
            $query->bindParam(":c1",$this->nombre);
            $query->bindParam(":c2",$this->marca);
            $query->bindParam(":c3",$this->precio);
            $query->bindParam(":c4",$this->rebaja);
            $query->bindParam(":c5",$this->nuevoPrecio);
            $query->bindParam(":c6",$this->cantidad);
            $query->bindParam(":c7",$this->informacion);
            $query->bindParam(":c8",$this->imagen);   
            //var_dump($this->nombre);
            return $query->execute();
        }

        public static function seleccionarTodo(){
            $con=conexion::conectar();
            $sql="SELECT * FROM producto";
            $query=$con->prepare($sql);
            $query->execute();
            // var_dump($query->execute());
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'producto',array('nombre','marca','precio','rebaja','nuevoPrecio','cantidad','informacion','imagen',1));
            return $query->fetchAll();
        }

        public static function seleccionarPorId($id){
            $con=conexion::conectar();
            $sql="SELECT * FROM producto WHERE id_producto=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":id",$id);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'producto',array('nombre','marca','precio','rebaja','nuevoPrecio','cantidad','informacion','imagen',1));
            return $query->fetchAll();
        }

        public function modificar(){
            $con=conexion::conectar();
            $sql="UPDATE producto SET nombre=:c1,marca=:c2,precio=:c3,rebaja=:c4,nuevoPrecio=:c5,cantidad=:c6,informacion=:c7,imagen=:c8 WHERE id_producto=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":id",$this->id_producto);
            $query->bindParam(":c1",$this->nombre);
            $query->bindParam(":c2",$this->marca);
            $query->bindParam(":c3",$this->precio);
            $query->bindParam(":c4",$this->rebaja);
            $query->bindParam(":c5",$this->nuevoPrecio);
            $query->bindParam(":c6",$this->cantidad);
            $query->bindParam(":c7",$this->informacion); 
            $query->bindParam(":c8",$this->imagen);  
            return $query->execute();
        }

        public static function eliminar($id)
        {
            $con=conexion::conectar();
            $sql="DELETE FROM producto WHERE id_producto=:id";
            $query=$con->prepare($sql);
            $query->bindParam(":id",$id);
            //var_dump($query->errorInfo());
            return $query->execute();
        }
    }   
?>