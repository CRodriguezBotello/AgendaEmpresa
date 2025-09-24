<?php
    require_once 'php/modelo/magenda.php';
    class CAgenda{

        public $vista;
        public $msg;

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
            $this->vista="mensajeAnadir";

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
                                        $msg=$objPersona->AnadirPersona($nombre, $apellido, $codPostal, $tfn, $genero, $edad, $hobbies);
                                        var_dump($msg);
                                        return $msg;

                                    }else{
                                        $this->msg= "Debes seleccionar al menos 1 hobby";
                                        return $this->msg;
                                    }
                                }else{
                                    $this->msg="Recuerda añadir la edad";  
                                    return $this->msg; 
                                }
                            }else{
                                $this->msg= "Recuerda seleccionar un genero";
                                return $this->msg;
                            }
                        }else{
                            $this->msg= "Recuerda añadir un telefono";
                            return $this->msg;
                        }
                    }else{
                        $this->msg="Recuerda añadir un codigo postal";
                        return $this->msg;
                    }
                }else{
                    $this->msg="Recuerda añadir un apellido";
                    return $this->msg;
                }
            }else{
                var_dump($this->msg);
                var_dump($this->vista);
                $this->msg="Recuerda añadir un nombre";
                return $this->msg;
            }

            
            
        }
        
    }
?>