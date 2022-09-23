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
}

class Aula extends Espacio{
    public string $numero;
    private $ordenadores = [];
    private $alumnos = [];
    public function getOrdenadores(){return $this->ordenadores;}
    public function addOrdenador(Ordenador $pc){($this->ordenadores)[] = $pc;}
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

}

class Docente extends Persona{
    public float $sueldo;
}

class Alumno extends Persona{
    public string $codMatricula;

}

class Ordenador{
    public string $codigo;
}

?>