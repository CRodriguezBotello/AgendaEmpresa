<?php
    Class MHobby{

        private $conexion;

        public function __construct() {
            require_once 'php/config/configdb.php';
            $this->conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8");
        }
        
        public function ListarHobby(){

            $sql= "SELECT * from hobby;";
            $resultado=$this->conexion->query($sql);

            if($resultado->num_rows > 0){
                while ($fila = $resultado->fetch_assoc()) {
                    $hobbies[]=$fila;
                }
                return($hobbies);
            }else{
                $this->msg="No hay hobbies todavia";
                
            }
            
        }

    }
?>