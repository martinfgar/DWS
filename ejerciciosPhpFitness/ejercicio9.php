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
        <label for="num">Numero</label>
        <input type="number" name="num" id="">
        <button type="submit">Enviar</button>
    </form>

    <?php
        
        function es_primo($num)
        {
           if ($num == 1)
           return 0;
           for ($i = 2; $i <= $num/2; $i++)
           {
              if ($num % $i == 0)
              return 0;
           }
           return 1;
        }
        if (isset($_GET['num']))
        echo (es_primo($_GET['num']) ? "Es primo" : "No es primo");
        
    ?>
</body>
</html>