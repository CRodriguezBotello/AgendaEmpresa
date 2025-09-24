<?php
    require_once 'php/modelo/magenda.php';
    class CAgenda{

        public $vista;

        public function Menu(){
            $this->vista="menu";
        }
        
        public function ListarPersona(){
            $objPersona = new MAgenda();
            $datos=$objPersona->ListarPersona();
            $this->vista="listarPersonas";
            return $datos;
        } 
        
        public function AnadirPersona(){

            if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {

                $nombre = $_POST["nombre"];

                if (isset($_POST["apellido"]) && !empty($_POST["apellido"])) {
                    
                    $apellido= $_POST["apellido"];

                    if (isset($_POST["codPostal"]) && !empty($_POST["codPostal"])) {

                        $codPostal= $_POST["codPostal"];

                        if (isset($_POST["tfn"]) && !empty($_POST["tfn"])) {

                            $tfn= $_POST["tfn"];

                            if (isset($_POST["genero"]) && !empty($_POST["genero"])) {

                                $genero= $_POST["genero"];

                                if (isset($_POST["edad"]) && !empty($_POST["edad"])) {

                                    $edad= $_POST["edad"];

                                    if (isset($_POST["hobbies"]) && !empty($_POST["hobbies"])) {
                
                                        $hobbies= $_POST["hobbies"];

                                        $objPersona = new MAgenda();
                                        $datos=$objPersona->AnadirPersona($nombre, $apellido, $codPostal, $tfn, $genero, $edad, $hobbies);
                                        $this->vista="nuevaPersona";
                                        return $datos;

                                    }
                                }
                            }
                        }
                    }
                }
            }
            
        }
        
    }
?>