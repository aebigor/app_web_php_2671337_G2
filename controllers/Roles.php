<?php
    require_once "models/Rol.php";
    class Roles{
        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar Rol
        public function createRol(){
            $rol = new Rol(
                null,
                "seller"
            );            
            // $rol->rolCreate();
        }
        // Consultar roles
        public function readRol(){
            $roles = new Rol;
            $roles = $roles->rolRead();            
        }
        // Actualizar Rol
        public function updateRol(){
            // 1ra Parte de la actualización
            $rol = new Rol;
            $rol = $rol->getRolById("1");
            print_r($rol);
        }

    }
?>