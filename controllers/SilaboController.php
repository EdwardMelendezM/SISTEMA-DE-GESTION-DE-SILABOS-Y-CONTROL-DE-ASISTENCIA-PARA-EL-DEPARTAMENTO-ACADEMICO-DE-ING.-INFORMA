<?php
class SilaboController
{
    private $model;
    public function __construct()
    {
        $this->model = new SilaboModel();
    }
    public function actualizarSilabo($silabo_data = array())
    {
        return $this->model->set($silabo_data);
    }
    public function get($cod_asignatura = '')
    {
        return $this->model->get($cod_asignatura);
    }
    public function eliminarSilabo($cod_asignatura = '', $grupo = '')
    {
        return $this->model->del($cod_asignatura, $grupo);
    }
    public function __destruct()
    {
        $this;
    }
}
