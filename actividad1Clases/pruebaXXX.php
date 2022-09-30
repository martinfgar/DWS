<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid grey;
        }
        thead{
            font-size: large;
            font-weight: 700;
        }
        form{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        form > * {
            margin:1em;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <form action="pruebaXXX.php" method="post">
        <div class="form-group">
            <label for="codigoHZ">Código</label>
            <input type="text" name="codigoHZ" required>
        </div>
        <div  class="form-group">
            <label for="OS">Sistema Operativo</label>
            <input type="text" name="OS" required>
        </div>
        <div  class="form-group">
            <label for="esSobremesa">Es sobremesa?</label>
            <select name="esSobremesa">
                <option value="0">No</option>
                <option value="1" selected>Sí</option>
            </select>
        </div>
        
        <button type="submit" value="save" name="accion">Guardar</button>
        <button type="submit" value="delete" name="accion">Eliminar</button>
        <button type="submit" value="update" name="accion">Actualizar</button>
    </form>
    <hr>
    <?php
        require_once 'Dependencias.php';
        $json = file_get_contents("ordenadores.json");
        $array =  json_decode($json);
        $ordenadores = [];
        foreach($array as $pc){    
            $ordenadores[$pc->codigoHZ] = Ordenador::createFromArray((array)$pc);
        };
        switch($_POST['accion']){
            case 'save':
                $ordenador = [];
                foreach ($_POST as $name => $input){
                    $ordenador[$name] = $input; 
                }
                $ordenador = Ordenador::createFromArray($ordenador);
                if (!$ordenadores[$ordenador->getCodigoHZ()]){
                    $ordenadores[$ordenador->getCodigoHZ()] = $ordenador;
                    file_put_contents("ordenadores.json", json_encode($ordenadores));
                }else{
                    echo "<h3 style='color:red'>Ya existe ese código</h3>";
                }
                break;
            case 'delete':
                unset($ordenadores[$_POST['codigoHZ']]);
                file_put_contents("ordenadores.json", json_encode($ordenadores));
                break;
            case 'update':
                if($ordenadores[$ordenador->getCodigoHZ()]){
                    $ordenadores[$ordenador->getCodigoHZ()]->setOS($_POST['OS']);
                    $ordenadores[$ordenador->getCodigoHZ()]->setEsSobremesa($_POST['esSobremesa']);
                } 
                file_put_contents("ordenadores.json", json_encode($ordenadores));
                break;
        }
        
        
        
    ?>
    <table style="text-align:center; width:90%">
        <thead>
            <tr>
                <td colspan="3"> ORDENADORES </td>
            </tr>
            <tr>
                <td>CÓDIGO</td>
                <td>OS</td>
                <td>SOBREMESA</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($ordenadores as $pc){
                    $esSobremesa = $pc->getEsSobremesa() == 1 ? 'Sí' : 'No' ;
                    echo "<tr>";
                    echo "<td>{$pc->getCodigoHZ()}</td>";
                    echo "<td>{$pc->getOS()}</td>";
                    echo "<td>{$esSobremesa}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
