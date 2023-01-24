<?php
class CatalogoModel extends Model
{
	public function set($user_data = array())
	{
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO tcatalogo (codSemestre,codAsignatura,codCarreraProfesional,codDocente,grupo,silabo,aula,dia,horaInico,horaFinal,tipo,limiteAforo)
								VALUES ('$codSemestre','$codAsignatura','$codCarreraProfesional','$codDocente','$grupo','$silabo','$aula','$dia','$horaInico','$horaFinal','$tipo','$limiteAforo')";
		$this->set_query();
	}
	public function get($codAsignatura = '', $codCarreraProfesional = '', $codDocente = '')
	{
		$this->query = ($codAsignatura != '' && $codCarreraProfesional != '' && $codDocente != '')
			? "SELECT * FROM tcatalogo WHERE (codAsignatura = '$codAsignatura' AND codCarreraProfesional='$codCarreraProfesional' AND codDocente='$codDocente')"
			: "SELECT * FROM tcatalogo";

		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}
	public function del($codAsignatura = '', $codCarreraProfesional = '', $codDocente = '')
	{
		$this->query = "DELETE FROM tcatalogo WHERE (codAsignatura = '$codAsignatura' AND codCarreraProfesional='$codCarreraProfesional' AND codDocente='$codDocente')";
		$this->set_query();
	}
	public function __destruct()
	{
		$this;
	}
}
