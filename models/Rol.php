<?php
    class Rol{
        // ****** 1er Parte: Clase (POO) *************** //
        // Atributos
        private $rolCode;
        private $rolName;
        // Métodos
        # Sobrecarga de Constructores
        public function __construct(){}
        // Métodos set() y get()        
        # rolCode: set()
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        # rolCode: get()
        public function getRolCode(){
            return $this->rolCode;
        }        
        // ****** 2da Parte: Persistencia DB (CRUD) ****** //
        public function rolCreate(){
            echo "Función para crear Rol";
        }
    }    
?>