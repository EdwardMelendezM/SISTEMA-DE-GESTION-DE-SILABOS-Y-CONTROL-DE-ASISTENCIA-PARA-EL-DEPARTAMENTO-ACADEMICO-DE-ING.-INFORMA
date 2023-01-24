<?php 
class DocenteModel extends Model {
	public function set( $user_data = array() ) {
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO tdocente (codDocente,nombreCompleto,categoria,regimen,telefono,correoInstitucional,rango,contrasena)
								VALUES ('$codDocente','$nombreCompleto','$categoria','$regimen','$telefono','$correoInstitucional','$rangoUsuario','$contrasena')";
		$this->set_query();
	}

	public function get( $codDocente = '' ) {
		$this->query = ($codDocente != '')
			?"SELECT * FROM tdocente WHERE codDocente = '$codDocente'"
			:"SELECT * FROM tdocente";
		
		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del( $codDocente= '' ) {
		$this->query = "DELETE FROM tdocente WHERE codDocente = '$codDocente'";
		$this->set_query();
	}

	public function getDataDocente($codDocente, $contrasena) {
		$this->query = "SELECT * FROM tdocente WHERE codDocente = '$codDocente' AND contrasena ='$contrasena'";
		$this->get_query();

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function __destruct() {
		$this;
	}
}