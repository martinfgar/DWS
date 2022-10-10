<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    if (!$_SESSION['authenticated']){
        header("Location: index.php");
    }
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <style>
        .form-field{
            display: flex;
            flex-direction: column;
            margin:1em;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            margin:2em;
            border: 1px solid black;
        }
        [hidden]{
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $fichero = isset($_GET['dni']) ? 'update.php' : 'insert.php';

    $mysqli = new mysqli("localhost", "root", "root", "centrofp");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $alumno = [
        'nombre' => '',
        'dni'    => '',
        'email'  => '',
        'codmatricula' => '',
        'ciclo'  => '',
        'dni_tutor' => ''
    ];
    $stmt = $mysqli->prepare("SELECT dni, concat(nombre,' ',apellido) as nom from tutores");
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($row = $resultado->fetch_assoc()){
        $tutores[] = [
            'dni' => $row['dni'], 
            'nombre'=> $row['nom']
        ];
    };
    
    echo "<form action='$fichero' method='post'>";
    if (isset($_GET['dni'])) {
        
        $stmt = $mysqli->prepare("SELECT * FROM alumnos where dni=?");
        $stmt->bind_param("s",$_GET['dni']);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($row = $resultado->fetch_assoc()){
            $alumno = $row;
        };
       
    }
    $mysqli->close();
    foreach ($alumno as $campo=>$valor){
        if ($campo == 'dni_tutor'){
            echo "<div class='form-field'>";
            echo "<label for='{$campo}'>TUTOR</label>";
            echo "<select id='{$campo}' name='{$campo}'>";
            array_walk($tutores, function($prof) use ($alumno){
                $selected =  $alumno['dni_tutor'] == $prof['dni'] ? 'selected' : '';
                echo "<option value={$prof["dni"]} {$selected}>{$prof['nombre']}</option>";
            });
            echo "</select>";
            echo "</div>";
        }else{
            $ocultar = (isset($_GET['dni']) && $campo == 'dni') ? 'hidden' : '';
            echo "<div class='form-field' {$ocultar}>";
            echo "<label for='{$campo}'>".strtoupper($campo)."</label>";
            echo "<input type='text' name='{$campo}' id='{$campo}' value= {$valor}>";
            echo "</div>";
        }       
    }
    ?>
  

    <div class="form-field">
        <button type="submit">Enviar</button>
    </div>
    
    </form>
</body>

</html>