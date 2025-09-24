<?php
    require_once 'php/modelo/mhobby.php';
    class CHobby{

        public $vista;
        
        public function ListarHobby(){
            $objHobby = new MHobby();
            $datos=$objHobby->ListarHobby();
            $this->vista="anadirPersona";
            return $datos;
        }
        
    }
?>