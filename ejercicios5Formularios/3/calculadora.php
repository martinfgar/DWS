<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>CALCULADORA</h3>
    <form action="calculadora.php" method="get">
        <label for="numero1">form numero 1: </label>
        <input type="number" name="numero1" id="">
        <label for="numero2">numero2: </label>
        <input type="number" name="numero2" id="">
        <div>
            <button type="submit" name="operacion" value="suma">SUMA</button>
            <button type="submit" name="operacion" value="resta">RESTA</button>
            <button type="submit" name="operacion" value="multiplicacion">MULTIPLICACION</button>
            <button type="submit" name="operacion" value="division">DIVISION</button>
        </div>
    </form>
    <?php

    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        switch ($_GET['operacion']) {
            case 'suma':
                echo "<script type='text/javascript'>alert(" . ($_GET['numero1'] + $_GET['numero2']) . ");</script>";
                break;
            case 'resta':
                echo "<script type='text/javascript'>alert(" . ($_GET['numero1'] - $_GET['numero2']) . ");</script>";
                break;
            case 'multiplicacion':
                echo "<script type='text/javascript'>alert(" . ($_GET['numero1'] * $_GET['numero2']) . ");</script>";
                break;
            case 'division':
                echo "<script type='text/javascript'>alert(" . ($_GET['numero1'] / $_GET['numero2']) . ");</script>";
                break;
        }
    }
    ?>
</body>

</html>