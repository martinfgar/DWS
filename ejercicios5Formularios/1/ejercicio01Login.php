<?php


$user_pass = ["martin" => "root"];
if (isset($_POST['user'])) {
    if ($user_pass[$_POST['user']] == $_POST['pass']) {
        header("Location: https://google.com");
        die();
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}