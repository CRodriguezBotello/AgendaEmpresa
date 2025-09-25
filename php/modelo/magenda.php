<?php
    Class MAgenda{

        private $conexion;
        public $msg;

        public function __construct() {
            require_once 'php/config/configdb.php';
            $this->conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8");
        }
        
        public function ListarPersona(){

            $sql= "SELECT p.IdPersona, p.nombre, p.apellido, p.codPostal, p.tfn, p.genero, p.edad, h.hobby from persona p left join persona_hobby ph on p.IdPersona = ph.idPersona inner join hobby h on ph.idHobby = h.IdHobby ORDER BY p.IdPersona ASC;";
            $resultado=$this->conexion->query($sql);

            if($resultado->num_rows > 0){
                while ($fila = $resultado->fetch_assoc()) {
                    $personas[]=$fila;
                }
                return($personas);
            }else{
                $this->msg="No hay personas todavia";
                
            }
            
        }

        public function AnadirPersona($nombre, $apellido, $codPostal, $tfn, $genero, $edad, $hobbies){
            $this->conexion->begin_transaction();

            try {
                $stmt = $this->conexion->prepare("INSERT INTO persona (nombre, apellido, codPostal, tfn, genero, edad) VALUES (?,?,?,?,?,?)");
                $stmt->bind_param("sssssi", $nombre, $apellido, $codPostal, $tfn, $genero, $edad);
                $stmt->execute();
                $id_persona = $stmt->insert_id;
                $stmt->close();

                $stmt = $this->conexion->prepare("INSERT INTO persona_hobby (idPersona, idHobby) VALUES (?,?);");
                foreach ($hobbies as $hobby) {
                    $stmt->bind_param("ii", $id_persona,$hobby);
                    $stmt->execute();
                }
                $stmt->close();

                $this->conexion->commit();

                $this->msg= "Nueva persona añadida";
                return $this->msg;
            } catch (Exception $e) {
                $this->conexion->rollback();
                $this->msg= "Error al añadir a la persona".$e->getMessage();
                return $this->msg;
            }
        }

        public function BuscarPersona($filtro,$buscar){
            $sql="SELECT p.IdPersona, p.nombre, p.apellido, p.codPostal, p.tfn, p.genero, p.edad, h.hobby from persona p left join persona_hobby ph on p.IdPersona = ph.idPersona inner join hobby h on ph.idHobby = h.IdHobby where $filtro LIKE '%".$buscar."%' ORDER BY $filtro ASC";
            $resultado=$this->conexion->query($sql);

            if($resultado->num_rows > 0){
                while ($fila = $resultado->fetch_assoc()) {
                    $personas[]=$fila;
                }
                return($personas);
            }else{
                $this->msg="No hay resultados";
                return $this->msg;
            }
        }
    }
?>