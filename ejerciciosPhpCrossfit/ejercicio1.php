<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>DNI</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $datos = [['dni' => '12345678A', 'nombre' => 'Mario', 'apellido' => 'bros'],['dni' => '12345678B', 'nombre' => 'Joseba', 'apellido' => 'Carglass']];
            foreach($datos as $persona){
                echo "<tr>";
                echo "<td>{$persona['dni']}</td>";
                echo "<td>{$persona['nombre']}</td>";
                echo"<td>{$persona['apellido']}</td>";
                echo "</tr>";
            }
        ?>
        </tbody>

    </table>
    

</body>
</html>