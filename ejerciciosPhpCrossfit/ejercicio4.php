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
        $nums = [10,4,6,2,3,16,2,8,4,23];
        echo json_encode($nums)."<br>";
        echo max($nums);
    ?>
</body>
</html>