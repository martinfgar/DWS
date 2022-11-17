<?php
namespace modelo;
include_once 'Conexion.php';
include_once 'Modelos.php';

class ZooModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function maxIdZoo(){
        
        $conn = $this->con();
        $stmt = $conn->prepare("SELECT max(id) as 'idMax' FROM zoos where 1");
        $stmt->execute();
        $resultado = $stmt->get_result();
     
        if ($row = $resultado->fetch_assoc()) {
             $max = $row['idMax'];
        }else{
            $max = -1;
        }
        //No se cierra la conexión ya que despues para ejecutar el insert necesitamos la conexión abierta, y habria que crear otra instancia del controlador.
        //Mejorar cambiando los metodos a estaticos?
        //$conn->close();
        return $max;
    }

    public function update($itemAssoc)
    {}

    public function insert($itemAssoc)
    {
       
        $conn = $this->con();
        $stmt = $conn->prepare("INSERT into zoos(id,ciudad,nombre,direccion,pais,descripcion,foto) values (?,?,?,?,?,?,?)");
        $stmt->bind_param("issssss",$itemAssoc['id'],$itemAssoc['ciudad'],$itemAssoc['nombre'],$itemAssoc['direccion'],$itemAssoc['pais'],$itemAssoc['descripcion'],$itemAssoc['foto']);
        $stmt->execute();
        $conn->close();      
    }

    public function selectById($id)
    {
       
       $conn = $this->con();
       $stmt = $conn->prepare("SELECT * FROM zoos where id=?");
       $stmt->bind_param("i",$id);
       $stmt->execute();
       $resultado = $stmt->get_result();
    
       if ($row = $resultado->fetch_assoc()) {
            $zoo = $row;
       }
       $conn->close();
       return $zoo;
    }

    public function delete($id)
    {

    }

    public function selectAll()
    {
       //TODO examen
       //devuelve un array de zoos en formato array asociativo
       $conn = $this->con();
       $stmt = $conn->prepare("SELECT * FROM zoos");
       $stmt->execute();
       $resultado = $stmt->get_result();
      
       $zoos = [];
       while ($row = $resultado->fetch_assoc()) {
            $zoos[] = $row;
       }
       $conn->close();
       return $zoos;
    }

}