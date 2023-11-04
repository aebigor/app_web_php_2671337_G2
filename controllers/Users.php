<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        # Crear Usuario
        public function createUser(){            
            $user = new User(
                1,
                2,
                "albeiro",
                "ramos",
                "profealbeiro2020",
                "12345",
                1);
            // $user->userCreate();
        }
        # Listar Usuarios
        public function readUser(){}
        # Actualizar Usuario
        public function updateUser(){}
        # Eliminar Usuario
        public function deleteUser(){}
    }
?>