<?php
class ClaseAlumno{
    public $codAlumno=null;
    public $correoIntitucional=null;
    public $nombre=null;
    public $apellidos=null;
    public $codCarreraProfesional=null;

    /* *********** METODOS SET ************* */
    public function setCodAlumno($_codAlumno){
        $this->codAlumno=$_codAlumno;
    }
    public function setCorreoInstitucional($_correoIntitucional){
        $this->correoIntitucional=$_correoIntitucional;
    }
    public function setApellidos($_apellidos){
        $this->apellidos=$_apellidos;
    }
    public function setNombre($_nombre){
        $this->nombre=$_nombre;
    }
    public function setCarreraProfesional($_codCarreraProfesional){
        $this->codCarreraProfesional=$_codCarreraProfesional;
    }


    /* *********** METODOS GET ************* */
    public function getCodAlumno(){
        return $this->codAlumno;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCarreraProfesional(){
        return $this->codCarreraProfesional;
    }
    public function getCorreoInstitucional(){
        return $this->correoIntitucional;
    }
}