<?php
class AsistenciaDocenteController
{
    private $model;
    public function __construct()
    {
        $this->model = new AsistenciaDocenteModel();
    }
    public function set($asistenciaDocente_data = array())
    {
        return $this->model->set($asistenciaDocente_data);
    }
    public function get($codDocente = '', $codAsignatura = '')
    {
        return $this->model->get($codDocente, $codAsignatura);
    }

    public function __destruct()
    {
        $this;
    }
}
