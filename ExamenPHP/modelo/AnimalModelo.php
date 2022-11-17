<?php
namespace modelo;

include_once 'Conexion.php';
include_once 'Modelos.php';

class AnimalModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function update($itemAssoc)
    {}

    public function selectById($id)
    {
        
    }

    public function delete($id)
    {

    }

    public function insert($itemAssoc)
    {
        
        
    }
    
    public function selectAnimalsByZoo($idZoo){
        //TODO examen
        //SELECT * FROM animals where zoo_id=$idZoo
        //devuelve un array de animales en formato array asociativo
       $conn = $this->con();
       $stmt = $conn->prepare("SELECT * FROM animals where zoo_id=?");
       $stmt->bind_param("i",$idZoo);
       $stmt->execute();
       $resultado = $stmt->get_result();
       $animales = [];
       while ($row = $resultado->fetch_assoc()) {
            $animales[] = $row;
       }
       $conn->close();
       return $animales;

    }

    public function selectAll()
    {

    }
}

