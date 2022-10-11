
<?php
session_start();
if (!$_SESSION['authenticated']){
    header("Location: index.php");
}

if (isset($_POST['dni']) && isset($_POST['nombre'])) {
    $dni= $_POST['dni'];
    $nombre = $_POST['nombre'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $codmatricula = isset($_POST['codmatricula']) ? $_POST['codmatricula'] : '';
    $ciclo = isset($_POST['ciclo']) ? $_POST['ciclo'] : '';
    $dni_tutor = isset($_POST['dni_tutor']) ? $_POST['dni_tutor'] : '';

    $mysqli = new mysqli("localhost", "root", "root", "centrofp");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO alumnos(dni,nombre,email,codmatricula,ciclo,dni_tutor) VALUES (?, ?, ?, ?, ?, ?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("ssssss", $dni, $nombre,$email,$codmatricula,$ciclo,$dni_tutor)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
    header("Location: control.php");
    exit;
}else{
    echo("<br>Error en parametros<br>");
    
}



?>

