<?php
namespace modelo;

class Conexion
{
    private $con;
    
    public function __construct(){
        //Lo he cambiado para adaptarlo a mi BD
        $this->con = new \mysqli('127.0.0.1', 'root', 'root', '2dser_1ebal_exa',3306);
    }
    
    public function close() {
        $this->con->close();
    }
    
    public function con(){
        return $this->con;
    }
}
