<?php

use Models\Usuario;
require 'Models/Usuario.php';

    switch ($_POST['action']){
        case 'insert':
            $usr = new Usuario;
            $usr->username = $_POST['username'];
            $usr->password = $_POST['password'];
            $usr->name     = $_POST['name'];
            $usr->save();
            $usuarios = Usuario::Select();
          
            require 'Views/verUsuarios.php';
            exit;
    }
    

   

    
