<?php

require_once 'Dependencias.php';

class Centro{
    private string $nombre;
    private string $codigo;
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
    private $espacios = [];
    public function getEspacios(){return $this->espacios;}
    public function addEspacio(Espacio $espacio){($this->espacios)[] = $espacio;}
    public function addEspacios($espacios){array_merge($this->espacios,$espacios);}
}