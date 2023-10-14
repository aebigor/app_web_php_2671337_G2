<?php
    class Rol{
        // ************** 1ra Parte. Modelo de Negocio **************** //  
        
        // Atributos: Encapsulamiento (- private, # protected)
        private $rolCode;
        private $rolName;

        // Métodos
        # Constructores (Pueden ser varios)
        public function __construct(){}

        //  Métodos set() y get()
        # $rolCode: set()
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        # $rolCode: get()
        public function getRolCode(){
            return $this->rolCode;
        }
        # $rolName: set()
        public function setRolName($rolName){
            $this->rolName = $rolName;
        }
        # $rolName: get()
        public function getRolName(){
            return $this->rolName;
        }
        
        // *********** 2da Parte. Persistencia DB (CRUD) ************* //  
        
        # Registrar
        # Consultar
        # Obtener por Id
        # Actualizar
        # Eliminar
    }
?>