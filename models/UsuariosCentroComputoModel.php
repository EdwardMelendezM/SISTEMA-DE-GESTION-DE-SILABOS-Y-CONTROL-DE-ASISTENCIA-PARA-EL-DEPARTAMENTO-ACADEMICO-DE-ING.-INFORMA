<?php 
class UsuariosCentroComputoModel extends Model {
    
	public function set( $user_data = array() ) {
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO tusuarioscentrocomputo (codUsuario,contrasena,rangoUsuario)
								VALUES ('$codUsuario','$contrasena','$rangoUsuario')";
		$this->set_query();
	}
	public function get( $codUsuario = '') {
		$this->query = ($codUsuario != '')
			?"SELECT * FROM tusuarioscentrocomputo WHERE (codUsuario = '$codUsuario')"
			:"SELECT * FROM tusuarioscentrocomputo";
		
		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}
	public function del( $codUsuario = '') {
		$this->query = "DELETE FROM tusuarioscentrocomputo WHERE (codUsuario = '$codUsuario')";
		$this->set_query();
	}
	public function __destruct() {
		$this;
	}
}