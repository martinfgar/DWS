<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="primerNum">Primer Numero</label>
        <input type="number" name="primerNum" id="">
        <label for="ultimonum">Segundo Numero</label>
        <input type="number" name="ultimonum" id="">
        <button type="submit">Enviar</button>
    </form>

    <?php
        $suma = 0;
        for($i=$_GET['primerNum']; $i<=$_GET['ultimonum'];$i++){
            $suma+=$i;
        }
        echo $suma;
    ?>
</body>
</html>