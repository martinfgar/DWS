<?php

use Models\Usuario;
require __DIR__.'/../Models/Usuario.php';


    switch ($_GET['action']){
        case 'insert':

            break;
        case 'index':
            $usuarios = Usuario::Select();
            require __DIR__.'/../Views/verUsuarios.php';
            exit;
        case null:
            $usuarios = Usuario::Select();
            require __DIR__.'/../Views/verUsuarios.php';
            exit;
    }

    switch ($_POST){
        
    }

    
