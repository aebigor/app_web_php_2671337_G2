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
            $rol_1->setRolName("admin");            
            // Objeto 2 - Constructor
            $rol_2 = new Rol("2", "customer");
            // Objeto 3 - Constructor
            $rol_3 = new Rol("3", "seller");
            // Objeto 3 - Constructor
            $rol_4 = new Rol("4", "provider");

            $roles = [$rol_1, $rol_2, $rol_3, $rol_4];
            
            // Utilice una estructura de repetición para mostrar los tres objetos
            for ($i=0; $i < 4; $i++) {
                echo "<br>Código Rol: " . $roles[$i]->getRolCode();
                echo "<br>Nombre Rol: " . $roles[$i]->getRolName();
            }

            echo "<br><br>";
            foreach ($roles as $rol) {
                echo "<br>Código Rol: " . $rol->getRolCode();
                echo "<br>Nombre Rol: " . $rol->getRolName();
            }
        }
    }
?>