<?php

use Models\Usuario;
require 'Models/Usuario.php';

switch ($_GET['action']){
    case 'insert':
        require 'Views/formUsuarios.php';
        exit;
        break;
    case 'index':
        $usuarios = Usuario::Select();
        require 'Views/verUsuarios.php';
        exit;
    case 'delete':
        $usuarios = Usuario::Select(['username' => $_GET['username']]);
        foreach($usuarios as $usr){
            $usr->delete();
        }
        $usuarios = Usuario::Select();
        require 'Views/verUsuarios.php';
        exit;
    case null:
        $usuarios = Usuario::Select();
        require 'Views/verUsuarios.php';
        exit;
}