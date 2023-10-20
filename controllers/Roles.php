<?php
    require_once "models/Rol.php";
    class Roles{
        public function main(){
            echo "Acción main() del controlador Roles";
        }
        // Registrar usuarios
        public function createRol(){
            // Objeto 1
            $rol_1 = new Rol;
            $rol_1->setRolCode("1");
            echo "<br>Código Rol: " . $rol_1->getRolCode();
            $rol_1->setRolName("admin");            
            echo "<br>Nombre Rol: " . $rol_1->getRolName();
            // Objeto 2 - Constructor

            // Objeto 3 - Constructor

            // Utilice una estructura de repetición para mostrar los tres objetos
        }
    }
?>