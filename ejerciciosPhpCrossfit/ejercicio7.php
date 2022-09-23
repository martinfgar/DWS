<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Relación de números aleatorios <br>";
        for ($i=0;$i<10;$i++){
            $valores[] = random_int(1,200);
            echo "{$valores[$i]} ";
        }
        echo "<br>";
        echo "Otra forma de visualizar los datos de un array <br>";
        echo print_r($valores);
        echo "<br>";
        echo "Relación de números aleatorios al reves <br>";
        for ($i=9;$i>=0;$i--){
            echo "{$valores[$i]} ";
        }
    ?>

</body>
</html>