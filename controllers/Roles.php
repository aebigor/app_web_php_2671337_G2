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
                "pepinito"
            );
            print_r($rol)            ;
            // $rol->rolCreate();
        }
        // Consultar roles
        public function readRol(){
            $roles = new Rol;
            $roles = $roles->rolRead();            
        }
        // Actualizar Rol
        public function updateRol(){
            // 1ra Parte: Obtener el registro
            $rol = new Rol;
            $rol = $rol->getRolById("1");            
            // 2da Parte: Actualizar el registro
            $rol_2 = new Rol(
                3,
                "vendedor"
            );
            // $rol_2->rolUpdate();
        }
        // Eliminar Rol
        public function deleteRol(){
            $rol = new Rol;
            // $rol->rolDelete("3");
        }

    }
?>