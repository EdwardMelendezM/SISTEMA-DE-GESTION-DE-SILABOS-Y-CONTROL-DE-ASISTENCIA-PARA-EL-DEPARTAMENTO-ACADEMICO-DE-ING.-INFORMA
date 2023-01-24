<?php
class ClaseAsignatura{
    public $codAsignatura=null;
    public $codCarreraProfesional=null;
    public $nombre=null;
    public $categoria=null;
    public $creditos=null;

    public function setCodAsignatura($_codAsignatura){
        $this->codAsignatura=$_codAsignatura;
    }
    public function setCodCarreraProfesional($_codCarreraProfesional){
        $this->codCarreraProfesional=$_codCarreraProfesional;
    }
    public function setNombre($_nombre){
        $this->nombre=$_nombre;
    }
    public function setCategoria($_categoria){
        $this->categoria=$_categoria;
    }
    public function setCreditos($_creditos){
        $this->creditos=$_creditos;
    }


    /* *********** METODOS GET ************* */
    public function getCodAsignatura(){
        return $this->codAsignatura;
    }
    public function getCodCarreraProfesional(){
        return $this->codCarreraProfesional;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getCreditos(){
        return $this->creditos;
    }

}