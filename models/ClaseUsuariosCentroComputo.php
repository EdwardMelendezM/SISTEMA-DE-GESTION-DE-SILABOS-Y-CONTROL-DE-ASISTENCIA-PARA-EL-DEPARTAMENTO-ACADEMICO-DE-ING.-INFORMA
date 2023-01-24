<?php
class ClaseUsuariosCentroComputo{
    public $codUsuario=null;
    public $contraseña=null;
    public $rangoUsuario=null;

    /* *********** METODOS SET ************* */
    public function setCodUsuario($_codUsuario){
        $this->codUsuario=$_codUsuario;
    }
    public function setContrasena($_contraseña){
        $this->contraseña=$_contraseña;
    }

    public function setRangoUsuario($_rangoUsuario){
        $this->rangoUsuario=$_rangoUsuario;
    }

    /* *********** METODOS GET ************* */
    public function getCodUsuario(){
        return $this->codUsuario;
    }
    public function getContraseña(){
        return $this->contraseña;
    }
    public function getRangoUsuario(){
        return $this->rangoUsuario;
    }

}