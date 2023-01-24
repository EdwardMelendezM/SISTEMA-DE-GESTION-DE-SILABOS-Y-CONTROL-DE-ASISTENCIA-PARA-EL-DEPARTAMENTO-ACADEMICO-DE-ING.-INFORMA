<?php
class CatalogoController{
    private $model;
    public function __construct(){
        $this->model = new CatalogoModel();
    }
    public function set($catalogo_data=array()){
        return $this->model->set($catalogo_data);
    }
    public function get($codAsignatura = '', $codCarreraProfesional='',$codDocente=''){
        return $this->model->get($codAsignatura,$codCarreraProfesional,$codDocente);
    }
    public function del($catalogo_id=''){
        return $this->model->del($catalogo_id);
    }
    public function __destruct(){
        $this;
    }
}