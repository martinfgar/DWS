<?php
require_once 'Dependencias.php';

abstract class Espacio {
    private bool $wifi;
    private int $puntosRed;
       /**
     * Get the value of wifi
     */ 
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set the value of wifi
     *
     * @return  self
     */ 
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }
    
    /**
     * Get the value of puntosRed
     */ 
    public function getPuntosRed()
    {
        return $this->puntosRed;
    }

    /**
     * Set the value of puntosRed
     *
     * @return  self
     */ 
    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;

        return $this;
    }
}