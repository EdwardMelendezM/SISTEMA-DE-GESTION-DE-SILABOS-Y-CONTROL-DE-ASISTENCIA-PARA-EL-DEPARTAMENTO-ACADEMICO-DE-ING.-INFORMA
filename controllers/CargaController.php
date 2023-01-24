<?php
class CargaController{
    private $model;
    public function __construct(){
        $this->model = new CargaModelo();
    }
    public function get($codDocente=''){
        return $this->model->get($codDocente);
    }
    public function __destruct(){
        $this;
    }
}