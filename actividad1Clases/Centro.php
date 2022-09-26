<?php

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

abstract class Espacio{
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

class Despacho extends Espacio{
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

class Variado extends Espacio{
    private string $tipo;
    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}

abstract class Persona{
    
    private string $dni;
    private string $nombre;
    private string $email;

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

}

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
}

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

}

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

?>