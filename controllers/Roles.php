<?php
    require_once "models/Rol.php";
    class Roles{
        public function main(){
            header("Location:?c=Dashboard");
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
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                // 1ra Parte: Obtener el registro
                $rol = new Rol;
                $rol = $rol->getRolById($_GET['idRol']);
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/mod01_users/rol_update.view.php";                
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // 2da Parte: Actualizar el registro
                $rol = new Rol(
                    $_POST['rolCode'],
                    $_POST['rolName']
                );
                print_r($rol);
                $rol->rolUpdate();
                header("Location:?c=Roles&a=readRol");
            }
        }
        // Eliminar Rol
        public function deleteRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = isset($_GET['idRol']) ? $_GET['idRol'] : null;
               
        
                if ($rol) {
                    $rol = new Rol();
                    $rol = $rol->rolDelete($_GET['idRol']);
                    header("Location:?c=Roles&a=readRol");
        
                    if ($rol) { 
                        $rol->rolDelete($_GET['idRol']);
                        header("Location:?c=Roles&a=readRol");
                    } else {
                        // Manejar el caso en que no se encuentra el rol
                        echo "El rol no se encontró";
                    }
                } else {
                    // Manejar el caso en que no se proporciona un código de rol
                    echo "Código de rol no proporcionado";
                }
            }
        }
    }
        
        
        
     // $rol->rolDelete("3");
     

?>