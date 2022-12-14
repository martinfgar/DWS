<?php
require_once 'Dependencias.php';

class Ordenador implements Printable, \JsonSerializable{
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

    public function imprimir(){
        echo json_encode($this);
        
    }
    public function imprimirHTML(){
        echo "<table><thead><tr><td>CÓDIGO</td><td>OS</td><td>SOBREMESA</td></tr></thead><tbody>";
        $sobremesa = $this->esSobremesa ? 'Sí' : 'No';
        echo "<tr><td>{$this->codigoHZ}</td><td>{$this->OS}</td><td>{$sobremesa}</td></tr></tbody></table>";
        
    }
    public static function createFromArray($array){
        $pc = new Ordenador();
        $pc->setCodigoHZ( $array['codigoHZ']);
        $pc->setOS($array['OS']) ;
        $pc->setEsSobremesa($array['esSobremesa']);
        return $pc;
    }
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }
}
