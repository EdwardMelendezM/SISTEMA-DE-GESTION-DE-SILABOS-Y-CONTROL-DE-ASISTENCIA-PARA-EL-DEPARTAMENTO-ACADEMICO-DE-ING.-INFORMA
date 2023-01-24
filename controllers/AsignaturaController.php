<?php
class AsignaturaController
{
    private $model;
    public function __construct()
    {
        $this->model = new AsignaturaModel();
    }
    public function set($asignatura_data = array())
    {
        return $this->model->set($asignatura_data);
    }
    public function get($codAsignatura = '')
    {
        return $this->model->get($codAsignatura);
    }
    public function del($codAsignatura = '')
    {
        return $this->model->del($codAsignatura);
    }
    public function __destruct()
    {
        $this;
    }
}
