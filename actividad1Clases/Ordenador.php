<?php
class Ordenador{
    private string $codigoHZ;
    private string $OS;
    private bool $esSobremesa;

    /**
     * Get the value of codigoHZ
     */ 
    public function getCodigoHZ()
    {
        return $this->codigoHZ;
    }

    /**
     * Set the value of codigoHZ
     *
     * @return  self
     */ 
    public function setCodigoHZ($codigoHZ)
    {
        $this->codigoHZ = $codigoHZ;

        return $this;
    }

    /**
     * Get the value of OS
     */ 
    public function getOS()
    {
        return $this->OS;
    }

    /**
     * Set the value of OS
     *
     * @return  self
     */ 
    public function setOS($OS)
    {
        $this->OS = $OS;

        return $this;
    }

    /**
     * Get the value of esSobremesa
     */ 
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }

    /**
     * Set the value of esSobremesa
     *
     * @return  self
     */ 
    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;

        return $this;
    }

    
}