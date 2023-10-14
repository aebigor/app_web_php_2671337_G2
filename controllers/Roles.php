<?php
    require_once "models/Rol.php";
    class Roles {
        public function __construct(){}

        public function createRol() {
            $rol = new Rol;
            $rol->setRolCode("Hola Mundo!!!");
            echo $rol->getRolCode();
        }
    }
?>