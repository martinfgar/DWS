<?php

session_start();
if (!$_SESSION['authenticated']){
    header("Location: index.php");
}
unset($_SESSION['authenticated']);
header("Location: index.php");
exit;