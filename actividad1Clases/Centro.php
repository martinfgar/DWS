<?php

class Centro{
    public string $nombre;
    public string $codigo;
    private $espacios = [];
    public function getEspacios(){return $this->espacios;}
    public function addEspacio(Espacio $espacio){($this->espacios)[] = $espacio;}
}

abstract class Espacio{
    public bool $wifi;
    public int $puntosRed;
}

class Aula extends Espacio{
    public string $numero;
    private $ordenadores = [];
    public bool $proyector;
    public bool $pizarraDigital;
    public bool $pantallaTactil;
    private $alumnos = [];
    public function getOrdenadores(){return $this->ordenadores;}
    public function addOrdenador(Ordenador $pc){
        if (!$pc->esSobremesa || count(array_filter($this->ordenadores,fn($v) => $v->esSobremesa)) < $this->puntosRed)
            ($this->ordenadores)[] = $pc;
    }
    public function addOrdenadores($ordenadores){array_merge($this->ordenadores,$ordenadores);}
    public function getAlumnos(){return $this->alumnos;}
    public function addAlumno(Alumno $alumno){($this->alumnos)[] = $alumno;}
}

class Despacho extends Espacio{
    public string $nombre;
    public Ordenador $ordenador;
}

class Variado extends Espacio{
    public string $tipo;
}

abstract class Persona{
    
    public string $dni;
    public string $nombre;
    public string $email;

}

class Docente extends Persona{
    public float $sueldo;
}

class Alumno extends Persona{
    public string $codMatricula;
    public string $ciclo;

}

class Ordenador{
    public string $codigoHZ;
    public string $OS;
    public bool $esSobremesa;
}

?>