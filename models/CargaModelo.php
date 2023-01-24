<?php 
class CargaModelo extends Model {
	public function set( $user_data = array() ) {
        return ;
	}
	public function get( $codDocente = '' ) {
		$this->query = ($codDocente != '')
			?"SELECT DISTINCT ta.codAsignatura,ta.nombre, grupo, codDocente,ta.creditos,silabo
                FROM tcatalogo tc join tasignatura ta on tc.codAsignatura=ta.codAsignatura
                WHERE codDocente='$codDocente';"
			:"SELECT DISTINCT ta.nombre, grupo, codDocente,ta.creditos,silabo
                FROM tcatalogo tc join tasignatura ta on tc.codAsignatura=ta.codAsignatura";
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
	}
	public function del( $codDocente= '' ) {
        return ;
	}
	public function __destruct() {
		$this;
	}
}