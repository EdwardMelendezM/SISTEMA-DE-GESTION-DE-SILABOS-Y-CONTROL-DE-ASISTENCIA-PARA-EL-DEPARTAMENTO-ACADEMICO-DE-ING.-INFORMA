<?php
class ClaseCatalogo{
    public $codSemestre=null;
    public $codAsignatura=null;
    public $codCarreraProfesional=null;
    public $codDocente=null;
    public $grupo=null;
    public $silabo=null;
    public $aula=null;
    public $dia=null;
    public $horaInicio=null;
    public $horaFinal=null;
    public $tipo=null;
    public $limiteAforo=null;
    /*  ****************** METODOS SET ************ */
    public function setCodSemestre($codSemestre){
        $this->codSemestre=$codSemestre;
    }
    public function setCodAsignatura($codAsignatura){
        $this->codAsignatura=$codAsignatura;
    }
    public function setCodCarreraProfesional($codCarreraProfesional){
        $this->codCarreraProfesional=$codCarreraProfesional;
    }
    public function setCodDocente($codDocente){
        $this->codDocente=$codDocente;
    }
    public function setGrupo($grupo){
        $this->grupo=$grupo;
    }
    public function setSilabo($silabo){
        $this->silabo=$silabo;
    }
    public function setAula($aula){
        $this->aula=$aula;
    }
    public function setDia($dia){
        $this->dia=$dia;
    }
    public function setHoraInicio($horaInicio){
        $this->horaInicio=$horaInicio;
    }
    public function setHoraFinal($horaFinal){
        $this->horaFinal=$horaFinal;
    }
    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    public function setLimiteAforo($limiteAforo){
        $this->limiteAforo=$limiteAforo;
    }

    /* ***********     METODOS GET      ********** */
    public function getCodSemestre(){
        return $this->codSemestre;
    }
    public function getCodAsignatura(){
        return $this->codAsignatura;;
    }
    public function getCodCarreraProfesional(){
        return $this->codCarreraProfesional;
    }
    public function getCodDocente(){
        return $this->codDocente;
    }
    public function getGrupo(){
        return $this->grupo;
    }
    public function getSilabo(){
        return $this->silabo;
    }
    public function getAula(){
        return $this->aula;
    }
    public function getDia(){
        return $this->dia;
    }
    public function getHoraInicio(){
        return $this->horaInicio;
    }
    public function getHoraFinal(){
        return $this->horaFinal;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getLimiteAforo(){
        return $this->limiteAforo;
    }
}