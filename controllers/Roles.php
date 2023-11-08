<?php
    require_once "models/Rol.php";
    class Roles{
        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar Rol
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/mod01_users/rol_create.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new Rol(
                    null,
                    $_POST['rolName']
                );                
                $rol->rolCreate();
                header("Location:?c=Roles&a=readRol");
            }
        }
        // Consultar roles
        public function readRol(){
            $roles = new Rol;
            $roles = $roles->rolRead();
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/mod01_users/rol_read.view.php";
            require_once "views/roles/admin/footer.view.php";            
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