<?php
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

}
