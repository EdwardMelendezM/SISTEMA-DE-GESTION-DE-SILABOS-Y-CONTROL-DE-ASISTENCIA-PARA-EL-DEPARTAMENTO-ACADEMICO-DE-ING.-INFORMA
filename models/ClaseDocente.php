<?php
class ClaseDocente{
    public $codDocente=null;
    public $nombreCompleto=null;
    public $regimen=null;
    public $categoria=null;
    public $correoInstitucional=null;
    public $telefono=null;
    public $contrasena=null;
    public $rango=null;

    /* *********** METODOS SET ************* */
    public function setCodDocente($_codigoDocente){
        $this->codDocente=$_codigoDocente;
    }
    public function setNombreCompleto($_nombre){
        $this->nombreCompleto=$_nombre;
    }
    public function setRegimen($_regimen){
        $this->regimen=$_regimen;
    }   
    public function setCorreoInstitucional($_correoInstitucional){
        $this->correoInstitucional=$_correoInstitucional;
    }
    public function setTelefono($_telefono){
        $this->telefono=$_telefono;
    }
    public function setContrasena($_contrasena){
        $this->contrasena=$_contrasena;
    }
    public function setRango($_rango){
        $this->rango=$_rango;
    }
    public function setCategoria($_categoria){
        $this->categoria=$_categoria;
    }


    /* *********** METODOS GET ************* */
    public function getCodDocente(){
        return $this->codDocente;
    }
    public function getNombre(){
        return $this->nombreCompleto;
    }
    public function getRegimen(){
        return $this->regimen;
    }
    public function getCorreoInstitucional(){
        return $this->correoInstitucional;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getContrasena(){
        return $this->contrasena;
    }
    public function getRango(){
        return $this->rango;
    }
    public function getCategoria(){
        return $this->categoria;
    }
}