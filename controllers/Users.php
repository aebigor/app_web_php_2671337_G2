<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        # Crear Usuario
        public function createUser(){            
            $user = new User(
                2,
                3,
                "marinita",
                "garcia",
                "marinita@garcia.com",
                "54321",
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