<?php
class AsistenciaDocenteModel extends Model
{
	public function set($user_data = array())
	{
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO tasistenciadocentes (fechaAsistencia,codDocente,codAsignatura,observacion)
								VALUES ('$fechaAsistencia','$codDocente','$codAsignatura','$observacion')";
		$this->set_query();
	}

	public function get($codDocente = '', $codAsignatura = '')
	{
		$this->query = ($codDocente != '' || $codAsignatura != '')
			? "SELECT * FROM tasistenciadocentes WHERE codDocente = '$codDocente' AND codAsignatura = '$codAsignatura'"
			: "SELECT codDocente,count(fechaAsistencia) as asistenciaTotal FROM tasistenciadocentes GROUP BY codDocente";
		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del($codDocente = '')
	{
		return;
	}

	public function __destruct()
	{
		$this;
	}
}
