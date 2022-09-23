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
                <td>PRODUCTO</td>
                <td>PRECIO</td>
                <td>PRECIO NUEVO</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $productos = ['voladoras','rodadoras','sandalias','zapatillas','chancletas'];
                $precios = ['voladoras' => 120,'rodadoras' => 100, 'zapatillas'=>70 ,'sandalias' => 50, 'chancletas' => 10];
                $rebaja = 20;
                foreach($productos as $producto){
                    echo "<tr>";
                    echo "<td>{$producto}</td>";
                    echo "<td>{$precios[$producto]}</td>";
                    $precios[$producto] = $precios[$producto]*(100-$rebaja)/100;
                    echo "<td>{$precios[$producto]}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>