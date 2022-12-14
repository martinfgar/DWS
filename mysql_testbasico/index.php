<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
        }
        th,td,table{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1em;
        }
        body > *{
            margin:3em;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Añadir</legend>
        <form id="update" action="update_test.php" method="get"></form>
        <form id="delete" action="delete_test.php" method="get"></form>
        <form action="insert_test.php" method="get">
            <div>
                <label for="id">ID:</label>
                <input type="number" name="id">
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>
           
            <button type="submit">Insertar</button>
        </form>
    </fieldset>
    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysqli = new mysqli("localhost", "root", "root", "test");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            /* Sentencia no preparada */
            $resultado = $mysqli->query("SELECT * FROM test");

            // mostrar resultado
            while ($row = $resultado->fetch_assoc()) {
                echo "<input form='delete' name='id' value='{$row["id"]}' hidden>";
                echo "<input form='delete' name='nombre' value='{$row["nombre"]}' hidden>";

                echo "<tr>";
                echo "<td><input name='id' form='update' type='number' value='{$row["id"]}'></td>";
                echo "<td><input  name='nombre' form='update' type='text' value='{$row["nombre"]}'></td>";
                echo "<td><button type='submit' form='update'>Actualizar </button></td>";
                echo "<td><button type='submit' form='delete'>Eliminar</button></td>";
                echo "</tr>";
            }

            /* se recomienda el cierre explícito */
            $mysqli->close();

            ?>
        </tbody>


    </table>
</body>

</html>