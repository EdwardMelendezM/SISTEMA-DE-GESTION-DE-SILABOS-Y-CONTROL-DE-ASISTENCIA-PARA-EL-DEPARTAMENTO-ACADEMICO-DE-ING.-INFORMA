<?php 
class AsignaturaModel extends Model {
	public function set( $user_data = array() ) {
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO tasignatura (codAsignatura,codCarreraProfesional,nombre,categoria,creditos)
								VALUES ('$codAsignatura','$codCarreraProfesional','$nombre','$categoria','$creditos')";
		$this->set_query();
	}
	public function get( $codAsignatura = '') {
		$this->query = ($codAsignatura != '')
			?"SELECT * FROM tasignatura WHERE (codAsignatura = '$codAsignatura')"
			:"SELECT * FROM tasignatura";
		
		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}
	public function del( $codAsignatura = '') {
		$this->query = "DELETE FROM tasignatura WHERE (codAsignatura = '$codAsignatura')";
		$this->set_query();
	}
	public function __destruct() {
		$this;
	}
}