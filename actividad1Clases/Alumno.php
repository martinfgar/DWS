<?php

require_once 'Dependencias.php';


class Alumno extends Persona{
    private string $codMatricula;
    private string $ciclo;
    
    /**
     * Get the value of codMatricula
     */ 
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    /**
     * Set the value of codMatricula
     *
     * @return  self
     */ 
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;

        return $this;
    }
    /**
     * Get the value of ciclo
     */ 
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * Set the value of ciclo
     *
     * @return  self
     */ 
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    public function imprimir(){
        echo json_encode((array) $this,JSON_PRETTY_PRINT);
    }
    public function imprimirHTML(){
        echo "<table><thead><tr><td>DNI</td><td>EMAIL</td><td>NOMBRE</td><td>CICLO</td><td>MATRÍCULA</td></tr></thead><tbody>";
        echo "<tr><td>{$this->getDni()}</td><td>{$this->getEmail()}</td><td>{$this->getNombre()}</td><td>{$this->ciclo}</td><td>{$this->codMatricula}</td></tr></tbody></table>";
        
    }
}
