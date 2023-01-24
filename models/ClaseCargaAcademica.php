<?php
class ClaseCargaAcademica
{
    public $cargaTotal = null;
    public $docentes = null;
    public $cargaAsignaturas = null;
    public $cargaCatalogo = null;
    public $usuariosCentroComputo = null;
    public $cargaAlumnos = null;
    public $cargaDocentes = null;

    public  function __construct()
    {
        $this->cargaTotal = [];
    }
    public function cargarCargaAcademica($cargaAcademica)
    {
        try {
            if (($manejador = fopen($cargaAcademica, "r")) !== FALSE) {
                while (($arrayFila = fgetcsv($manejador, 1000, ",")) !== FALSE) {
                    for ($i = 0; $i < count($arrayFila); $i++) {
                        $asignaturaCompleta = new ClaseAsignaturaCompleta();
                        $array = explode(";", $arrayFila[$i]);
                        $cantidadCodigo= explode(";", $array[1]);
                        if(count($cantidadCodigo)==1 && $array[15]!="GRUPO DESACTIVADO" && $array[15]!="CURSO DESACTIVADO" ){
                            $asignaturaCompleta->setCodigo($array[1]);
                            $asignaturaCompleta->setCarrera($array[2]);
                            $asignaturaCompleta->setCurso($array[3]);
                            $asignaturaCompleta->setCreditos($array[4]);
                            $asignaturaCompleta->setTipo($array[5]);
                            $asignaturaCompleta->setGrupo($array[6]);
                            $asignaturaCompleta->setHt($array[7]);
                            $asignaturaCompleta->setHp($array[8]);
                            $asignaturaCompleta->setDia($array[9]);
                            $asignaturaCompleta->setHrInicio($array[10]);
                            $asignaturaCompleta->setHrFin($array[11]);
                            $asignaturaCompleta->setAula($array[12]);
                            $asignaturaCompleta->setLimite($array[13]);
                            $asignaturaCompleta->setMatriculados($array[14]);
                            $asignaturaCompleta->setDocentes($array[15]);
                            array_push($this->cargaTotal, $asignaturaCompleta);
                        }
                    }
                }
                fclose($manejador);
                return True;
            } else {
                return False;
            }
        } catch (\Throwable $th) {
            throw $th;
            echo $th;
        }
    }
    public function determinarAsignaturas()
    {
        $this->cargaAsignaturas = [];
        for ($indice = 0; $indice < count($this->cargaTotal); $indice++) {
            $_asignatura = new ClaseAsignatura();
            $_asignatura->setCodAsignatura($this->cargaTotal[$indice]->getCodigo());
            $_asignatura->setCodCarreraProfesional($this->cargaTotal[$indice]->getCarrera());
            $_asignatura->setNombre($this->cargaTotal[$indice]->getCurso());
            $_asignatura->setCategoria(null);
            $_asignatura->setCreditos($this->cargaTotal[$indice]->getCreditos());
            array_push($this->cargaAsignaturas, $_asignatura);
        }
        return True;
    }
    public function determinarCatalogo()
    {
        $this->cargaCatalogo = [];
        for ($indice = 0; $indice < count($this->cargaTotal); $indice++) {
            $_catalogo = new ClaseCatalogo();
            $_catalogo->setCodSemestre("2022-II");
            $_catalogo->setCodAsignatura($this->cargaTotal[$indice]->getCodigo());
            $_catalogo->setCodCarreraProfesional($this->cargaTotal[$indice]->getCarrera());
            $_catalogo->setCodDocente($this->cargaTotal[$indice]->getDocentes());
            $_catalogo->setGrupo($this->cargaTotal[$indice]->getGrupo());
            $_catalogo->setSilabo(null);
            $_catalogo->setAula($this->cargaTotal[$indice]->getAula());
            $_catalogo->setDia($this->cargaTotal[$indice]->getDia());
            $_catalogo->setHoraInicio($this->cargaTotal[$indice]->getHrInicio());
            $_catalogo->setHoraFinal($this->cargaTotal[$indice]->getHrFin());
            $_catalogo->setTipo($this->cargaTotal[$indice]->getTipo());
            $_catalogo->setLimiteAforo($this->cargaTotal[$indice]->getLimite());
            array_push($this->cargaCatalogo, $_catalogo);
        }
        return True;
    }
    public function determinarDocentes()
    {
        $this->docentes = [];
        for ($indice = 0; $indice < count($this->cargaTotal); $indice++) {
            $_docentes = new ClaseDocente();
            if (!in_array($this->cargaTotal[$indice]->getDocentes(), $this->docentes)) {
                array_push($this->docentes, $this->cargaTotal[$indice]->getDocentes());
            }
        }
        $functionDocentes = $this->docentes;
        $this->docentes =null;
        $docentesExistentes = [];
        $codigoAux=201122;
        for ($indice = 1; $indice < count($functionDocentes); $indice++) {
            $_docentes = new ClaseDocente();
            
            if($functionDocentes[$indice]=='LAURO ENCISO RODAS'){
                $_docentes->setRango("1");
                $_docentes->setCodDocente(204040);
                $codigoAux=204040;
            }
            else{
                $_docentes->setRango("0");
                $_docentes->setCodDocente($codigoAux);
            }
            $_docentes->setContrasena(123123);
            $_docentes->setNombreCompleto($functionDocentes[$indice]);
            $_docentes->setRegimen(random_int(1, 10)%2==0 ? "Tiempo Completo": "Medio Tiempo");
            $_docentes->setCorreoInstitucional($codigoAux . "@unsaac.edu.pe");
            $_docentes->setCategoria(random_int(1, 10)%2==0 ? "Secundario": "Principal");
            $codigoAux+=122;
            $codigoAux+=random_int(1, 3);
            array_push($docentesExistentes, $_docentes);
        }
        $this->cargaDocentes=$docentesExistentes;
        $docentesExistentes=null;
        $codigoAux==null;
        $functionDocentes==null;
        return True;
    }
    public function subirCsvDocentes($csvDocente)
    {
        try {
            $this->cargaDocentes = [];
            if (($manejador = fopen($csvDocente, "r")) !== FALSE) {
                while (($arrayFila = fgetcsv($manejador, 1000, ",")) !== FALSE) {
                    for ($i = 0; $i < count($arrayFila); $i++) {
                        $_docentes = new ClaseDocente();
                        $array = explode(";", $arrayFila[$i]);
                        $_docentes->setCodDocente($array[0]);
                        $_docentes->setContrasena($array[1]);
                        $_docentes->setNombreCompleto($array[2]." ".$array[3]);
                        $_docentes->setRango($array[4]);
                        $_docentes->setRegimen($array[5]);
                        $_docentes->setCorreoInstitucional($array[0] . "@unsaac.edu.pe");
                        array_push($this->cargaDocentes, $_docentes);
                        //echo "<br>";
                    }
                }
                fclose($manejador);
                return True;
            } else {
                return False;
            }
        } catch (\Throwable $th) {
            throw $th;
            echo $th;
        }
    }
    public function usuariosCentroComputo()
    {
        $this->usuariosCentroComputo = [];
        for ($indice = 0; $indice < count($this->cargaDocentes); $indice++) {
            $_usuario= new ClaseUsuariosCentroComputo();
            $_usuario->setCodUsuario($this->cargaDocentes[$indice]->getCodDocente());
            $_usuario->setContrasena($this->cargaDocentes[$indice]->getContrasena());
            $_usuario->setRangoUsuario($this->cargaDocentes[$indice]->getRango());
            array_push($this->usuariosCentroComputo, $_usuario);
        }
        return True;
    }
    public function subirCsvAlumnos($csvAlumno)
    {
        try {
            $this->cargaAlumnos = [];
            if (($manejador = fopen($csvAlumno, "r")) !== FALSE) {
                while (($arrayFila = fgetcsv($manejador, 1000, ",")) !== FALSE) {
                    for ($i = 0; $i < count($arrayFila); $i++) {
                        $_alumno = new ClaseAlumno();
                        $array = explode(";", $arrayFila[$i]);
                        $_alumno->setCodAlumno($array[0]);
                        $_alumno->setNombre($array[1]);
                        $_alumno->setApellidos($array[2]);
                        $_alumno->setCarreraProfesional("INFO");
                        $_alumno->setCorreoInstitucional($array[0] . "@unsaac.edu.pe");
                        array_push($this->cargaAlumnos, $_alumno);
                    }
                }
                fclose($manejador);
                return True;
            } else {
                return False;
            }
        } catch (\Throwable $th) {
            throw $th;
            echo $th;
        }
    }
    public function main($archivoCargaAcademica){
        $carga1=$this->cargarCargaAcademica($archivoCargaAcademica);
        $carga2=$this->determinarAsignaturas();
        $carga3=$this->determinarCatalogo();
        $carga4=$this->determinarDocentes();
        $carga5=$this->usuariosCentroComputo();
        if($carga1 && $carga2 && $carga3 && $carga4 && $carga5){
            return True;
        }
        else{
            return False;
        }
    }
    public function getTablaAsignaturas(){
        return $this->cargaAsignaturas;
    }
    public function getTablaCatalogo(){
        return $this->cargaCatalogo;
    }
    public function getTablaDocentes(){
        return $this->cargaDocentes;
    }
    public function getTablaUsuariosCentroComputo(){
        return $this->usuariosCentroComputo;
    }
}
