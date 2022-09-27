<?php
require_once 'Dependencias.php';

class Docente extends Persona{
    private float $sueldo;
        /**
     * Get the value of sueldo
     */ 
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */ 
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
    public function imprimir(){
        echo var_dump($this);
    }
    public function imprimirHTML(){
        echo "<table><thead><tr><td>DNI</td><td>EMAIL</td><td>NOMBRE</td><td>SUELDO</td></tr></thead><tbody>";
        echo "<tr><td>{$this->getDni()}</td><td>{$this->getEmail()}</td><td>{$this->getNombre()}</td><td>{$this->sueldo}</td></tr></tbody></table>";
        
    }
}