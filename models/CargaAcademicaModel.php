<?php 
class CargaAcademicaModel extends Model {
	public function set( $user_data = array() ) {
		return;
	}
	public function get( $codAsignatura = '', $codCarreraProfesional='',$codDocente='') {
		return;
	}
	public function del() {
		$this->query = "DELETE FROM tcatalogo";
		$this->set_query();
		
		$this->query = "DELETE FROM tusuarioscentrocomputo";
		$this->set_query();

		$this->query = "DELETE FROM tasignatura";
		$this->set_query();
		$this->query = "DELETE FROM tdocente";
		$this->set_query();

		$this->query = "INSERT INTO TUsuariosCentroComputo (codUsuario,contrasena,rangoUsuario) VALUES ('101010','123123','2')";
		$this->set_query();

		$this->query = "INSERT INTO TDocente(codDocente,nombreCompleto,categoria,regimen,telefono,correoInstitucional,rango,contrasena)
						VALUES ('101112','JUAN PEPA PIPA','principal','T',null,'101112@unsaac.edu.pe','1','123123')";
		$this->set_query();

		$this->query = "INSERT INTO TUsuariosCentroComputo (codUsuario,contrasena,rangoUsuario) VALUES ('101112','123123','1')";
		$this->set_query();
	}
	public function __destruct() {
		$this;
	}
}