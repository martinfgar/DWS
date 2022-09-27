<?php
require_once 'Dependencias.php';

class Despacho extends Espacio {
    private string $nombre;
    private Ordenador $ordenador;
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
     * Get the value of ordenador
     */ 
    public function getOrdenador()
    {
        return $this->ordenador;
    }

    /**
     * Set the value of ordenador
     *
     * @return  self
     */ 
    public function setOrdenador($ordenador)
    {
        $this->ordenador = $ordenador;

        return $this;
    }
    
}