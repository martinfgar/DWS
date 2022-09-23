<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Datos Personales</h1>
<?php
    echo ($_POST['nombre'] != "") ? '<p>Su nombre es '. $_POST["nombre"].'</p>' : "<p style='color:red'>No ha indicado su nombre</p>";
    echo ($_POST['apellidos'] != "") ? '<p>Sus apellidos son '. $_POST["apellidos"].'</p>' : "<p style='color:red'>No ha indicado sus apellidos</p>";
    echo isset($_POST['edad']) ? '<p>Su edad es '.$_POST["edad"].'</p>' : "<p style='color:red'>No ha indicado su edad</p>";
    echo isset($_POST['peso']) ? '<p>Su peso es '.$_POST["peso"].'</p>' : "<p style='color:red'>No ha escrito su peso</p>";
    echo isset($_POST['sexo']) ? '<p>Es un(a) '.$_POST["sexo"].'</p>' : "<p style='color:red'>No ha indicado su sexo</p>";
    echo isset($_POST['estado']) ? '<p>Su estado civil es '.$_POST["estado"].'</p>' : '<p style="color:red">No ha especificado su estado</p>';
    echo "Le gusta: ";
    foreach($_POST['aficion'] as $aficion){
        echo $aficion.', ';
    }
?>
</body>
</html>