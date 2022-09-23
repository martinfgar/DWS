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
        <button name="parimpar" type="submit" value="1">Pares</button>
        <button name="parimpar" type="submit" value="0">Impares</button>
        <input type="checkbox" name="pruebacheck" id="" value="aaa">
    </form>
    <?php
        if (isset($_GET['parimpar'])){
            for($_GET['parimpar']? $i=2 : $i=1;$i <=random_int(1,99); $i=$i+2){
                echo "<br>";
                echo $i;
            }
        }

    ?>
</body>
</html>