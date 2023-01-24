<?php
class ControlAcademicoController{
    private $modelDocente;
    private $modelAsignatura;
    private $modelUsuariosCentroComputo;
    private $modelCatalogo;
    private $modelCargaAcademica;

    private $claseCargaAcademica;
    
    public function __construct(){
        $this->modelDocente = new DocenteModel();
        $this->modelAsignatura = new AsignaturaModel();
        $this->modelUsuariosCentroComputo = new UsuariosCentroComputoModel();
        $this->modelCatalogo = new CatalogoModel();
        $this->modelCargaAcademica = new CargaAcademicaModel();
        
        $this->claseCargaAcademica= new ClaseCargaAcademica();
    }
    public function del(){
        $this->modelCargaAcademica->del();
    }

    public function cargarCargaAcademica($csv='noExiste.csv'){

        if($this->claseCargaAcademica->main($csv)){
            $tablaAsignaturas=$this->claseCargaAcademica->getTablaAsignaturas();
            $tablaCatalogo=$this->claseCargaAcademica->getTablaCatalogo();
            $tablaDocentes=$this->claseCargaAcademica->getTablaDocentes();
            $tablaUsuariosCentroComputo=$this->claseCargaAcademica->getTablaUsuariosCentroComputo();

            for ($indice=1; $indice < count($tablaAsignaturas); $indice++) { 
                $user_data=array(
                    "codAsignatura"=>$tablaAsignaturas[$indice]->getCodAsignatura(),
                    "codCarreraProfesional"=>$tablaAsignaturas[$indice]->getCodCarreraProfesional(),
                    "nombre"=>$tablaAsignaturas[$indice]->getNombre(),
                    "categoria"=>$tablaAsignaturas[$indice]->getCategoria(),
                    "creditos"=>$tablaAsignaturas[$indice]->getCreditos()
                );
                $this->modelAsignatura->set($user_data);
            }
            for ($indice=0; $indice < count($tablaDocentes); $indice++) { 
                $user_data=array(
                    "codDocente"=>$tablaDocentes[$indice]->getCodDocente(),
                    "nombreCompleto"=>$tablaDocentes[$indice]->getNombre(),
                    "categoria"=>$tablaDocentes[$indice]->getCategoria(),
                    "regimen"=>$tablaDocentes[$indice]->getRegimen(),
                    "correoInstitucional"=>$tablaDocentes[$indice]->getCorreoInstitucional(),
                    "telefono"=>$tablaDocentes[$indice]->getTelefono(),
                    "contrasena"=>$tablaDocentes[$indice]->getContrasena(),
                    "rangoUsuario"=>$tablaDocentes[$indice]->getRango(),
                );
                $this->modelDocente->set($user_data);
            }
            for ($indice=0; $indice < count($tablaUsuariosCentroComputo); $indice++) { 
                $user_data=array(
                    "codUsuario"=>$tablaUsuariosCentroComputo[$indice]->getCodUsuario(),
                    "contrasena"=>$tablaUsuariosCentroComputo[$indice]->getContraseña(),
                    "rangoUsuario"=>$tablaUsuariosCentroComputo[$indice]->getRangoUsuario()
                );
                $this->modelUsuariosCentroComputo->set($user_data);
            }
            for ($indice=1; $indice < count($tablaCatalogo); $indice++) { 
                $user_data=array(
                    "codSemestre"=>$tablaCatalogo[$indice]->getCodSemestre(),
                    "codAsignatura"=>$tablaCatalogo[$indice]->getCodAsignatura(),
                    "codCarreraProfesional"=>$tablaCatalogo[$indice]->getCodCarreraProfesional(),
                    "codDocente"=>$tablaCatalogo[$indice]->getCodDocente(),
                    "grupo"=>$tablaCatalogo[$indice]->getGrupo(),
                    "silabo"=>$tablaCatalogo[$indice]->getSilabo(),
                    "aula"=>$tablaCatalogo[$indice]->getAula(),
                    "dia"=>$tablaCatalogo[$indice]->getDia(),
                    "horaInico"=>$tablaCatalogo[$indice]->getHoraInicio(),
                    "horaFinal"=>$tablaCatalogo[$indice]->getHoraFinal(),
                    "tipo"=>$tablaCatalogo[$indice]->getTipo(),
                    "limiteAforo"=>$tablaCatalogo[$indice]->getLimiteAforo()
                );
                $this->modelCatalogo->set($user_data);
            }
            
            
        }
        else{
            return False;
        }
    }
    public function __destruct(){
        $this;
    }
}