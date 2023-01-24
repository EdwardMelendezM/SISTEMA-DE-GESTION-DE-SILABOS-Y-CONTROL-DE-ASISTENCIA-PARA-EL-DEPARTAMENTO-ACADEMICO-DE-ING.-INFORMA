<?php
class ClaseAsignaturaCompleta{
    public $codigo;
    public $carrera;
    public $curso;
    public $creditos;
    public $tipo;
    public $grupo;
    public $ht;
    public $hp;
    public $dia;
    public $hrInicio;
    public $hrFin;
    public $aula;
    public $limite;
    public $matriculados;
    public $docentes;
    function __construct()
    {
        $this->codigo = null;
        $this->carrera = null;
        $this->curso = null;
        $this->creditos = null;
        $this->tipo = null;
        $this->grupo = null;
        $this->ht = null;
        $this->hp = null;
        $this->dia = null;
        $this->hrInicio = null;
        $this->hrFin = null;
        $this->aula = null;
        $this->limite = null;
        $this->matriculados = null;
        $this->docentes = null;
    }

    /* **********************************************/
    /*                 METODOS SET                  */
    /* **********************************************/
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function setCarrera($carrera){
        $this->carrera=$carrera;
    }
    public function setCurso($curso){
        $this->curso=$curso;
    }
    public function setCreditos($creditos){
        $this->creditos=$creditos;
    }
    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    public function setGrupo($grupo){
        $this->grupo=$grupo;
    }
    public function setHt($ht){
        $this->ht=$ht;
    }
    public function setHp($hp){
        $this->hp=$hp;
    }
    public function setDia($dia){
        $this->dia=$dia;
    }
    public function setHrInicio($hrInicio){
        $this->hrInicio=$hrInicio;
    }
    public function setHrFin($hrFin){
        $this->hrFin=$hrFin;
    }
    public function setAula($aula){
        $this->aula=$aula;
    }
    public function setLimite($limite){
        $this->limite=$limite;
    }
    public function setMatriculados($matriculados){
        $this->matriculados=$matriculados;
    }
    public function setDocentes($docentes){
        $this->docentes=$docentes;
    }

    /* **********************************************/
    /*                 METODOS GET                  */
    /* **********************************************/

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCarrera(){
        return $this->carrera;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getCreditos(){
        return $this->creditos;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getGrupo(){
        return $this->grupo;
    }
    public function getHt(){
        return $this->ht;
    }
    public function getHp(){
        return $this->hp;
    }
    public function getDia(){
        return $this->dia;
    }
    public function getHrInicio(){
        return $this->hrInicio;
    }
    public function getHrFin(){
        return $this->hrFin;
    }
    public function getAula(){
        return $this->aula;
    }
    public function getLimite(){
        return $this->limite;
    }
    public function getMatriculados(){
        return $this->matriculados;
    }
    public function getDocentes(){
        return $this->docentes;
    }
    public function show(){
        echo `<br>
        Codigo: $this->codigo <br>
        Carrera: $this->carrera <br>
        Curso: $this->curso <br>
        Creditos: $this->creditos <br>
        Tipo: $this->tipo <br>
        Grupo: $this->grupo <br>
        Ht: $this->ht <br>
        Hp: $this->hp <br>
        Dia: $this->dia <br>
        HrInicio: $this->hrInicio <br>
        HrFin: $this->hrFin <br>
        Aula: $this->aula <br>
        Limite: $this->limite <br>
        Matriculados: $this->matriculados <br>
        Docentes: $this->docentes <br>
        `;
    }
}