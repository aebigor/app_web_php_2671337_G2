<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        # Crear Usuario
        public function createUser(){            
            $user = new User(
                "1",                
                "user_123",
                "albeiro",
                "ramos",
                "profealbeiro2020@gmail.com",
                sha1("12345"),
                1,
            );
            print_r($user);
        }
        # Listar Usuarios
        public function readUser(){}
        # Actualizar Usuario
        public function updateUser(){}
        # Eliminar Usuario
        public function deleteUser(){}
    }
?>