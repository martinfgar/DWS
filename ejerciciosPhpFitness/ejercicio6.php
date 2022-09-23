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
        <input type="number" name="numero" id="">
    </form>

    <?php
        for ($i=1;$i<=$_GET['numero'];$i++){
            for($j=1;$j<=$i;$j++){
                echo "o";
            }
            echo "<br>";
        }
    ?>
</body>
</html>