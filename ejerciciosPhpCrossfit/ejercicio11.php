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
    
    for ($i=0;$i<7;$i++){
        $semana[jddayofweek($i,1)] = random_int(1,100); 
    }
    echo json_encode($semana);
    echo "<br>";
    echo "Suma: ".array_sum($semana)."<br>";
    echo "Media: ".array_sum($semana)/count($semana) ."<br>";

?>
</body>
</html>
