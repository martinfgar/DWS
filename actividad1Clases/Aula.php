<?php
class Aula extends Espacio{
    private string $numero;
    private $ordenadores = [];
    private bool $proyector;
    private bool $pizarraDigital;
    private bool $pantallaTactil;
    private $alumnos = [];

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of proyector
     */ 
    public function getProyector()
    {
        return $this->proyector;
    }

    /**
     * Set the value of proyector
     *
     * @return  self
     */ 
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;

        return $this;
    }

    /**
     * Get the value of pizarraDigital
     */ 
    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    /**
     * Set the value of pizarraDigital
     *
     * @return  self
     */ 
    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;

        return $this;
    }

    /**
     * Get the value of pantallaTactil
     */ 
    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    /**
     * Set the value of pantallaTactil
     *
     * @return  self
     */ 
    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;

        return $this;
    }

    public function getOrdenadores(){return $this->ordenadores;}
    public function addOrdenador(Ordenador $pc){
        if (!$pc->esSobremesa || count(array_filter($this->ordenadores,fn($v) => $v->esSobremesa)) < $this->puntosRed)
            ($this->ordenadores)[] = $pc;
    }
    public function addOrdenadores($ordenadores){array_merge($this->ordenadores,$ordenadores);}
    public function getAlumnos(){return $this->alumnos;}
    public function addAlumno(Alumno $alumno){($this->alumnos)[] = $alumno;}
    public function addAlumnos($alumnos){array_merge($this->alumnos,$alumnos);}
}