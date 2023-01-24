<?php
if (
    $_POST["r"] == "asistencia-subir"
    && !isset($_POST["crud"])
    && !isset($_POST['subirPdfAux'])
    && !isset($_SESSION['asistenciaDocenteEjecutado'])
) {
    $asignaturaController = new AsignaturaController();
    $row = $asignaturaController->get($_SESSION["codAsignatura_agregar"]);
    $nombreCurso = $row[0]["nombre"];
    print('
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-color-white">Asistencia</h1>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="text-color-white">' . $nombreCurso . '</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="text-color-white" scope="row" >Horario</th>
                            <td class="text-color-white" id="horario"   >07M1</td>
                        </tr>
                        <tr>
                            <th class="text-color-white" scope="row" >Fecha actual</th>
                            <td class="text-color-white" id="fecha">26-10-2022</td>
                        </tr>
                        <tr>
                            <th class="text-color-white" scope="row">Modalidad</th>
                            <td class="text-color-white"  colspan="2">Virtual</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-sm-12 d-flex justify-content-end align-items-end flex-column">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-lg btn-danger mb-3 " data-toggle="modal" data-target="#exampleModal">
                Mi asistencia
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Asistencia Docente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Nombre de curso: </b><small>' . $nombreCurso . '</small></p>
                        <p><b>Facultad: </b> <small>FACULTAD DE INGENIERÍA ELÉCTRICA, ELECTRÓNICA, INFORMÁTICA Y MECÁNICA</small></p>
                        <p><b>Nombre: </b> <small>' . $_SESSION["nombreCompleto"] . '</small></p>
                        <p><b>Codigo: </b> <small>' . $_SESSION["codUsuario"] . ' </small></p>
                        <p><b>Fecha/Hora de registro: </b><small id="horaFecha"></small> </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <form method="POST">
                            <input type="hidden" name="r" value="asistencia-subir">
                            <input type="hidden" name="crud" value="set">
                            <input class="btn btn-md btn-success" type="submit" value="Registrar">
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-color-white">Alumnos</th>
                                <th class="text-color-white">Estado</th>
                                <th class="text-color-white">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-color-white">Almadro Perez Paredes</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Ana Maria Verdes Kuiro</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Bernando Altomira Gutierrez</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                        <label class="custom-control-label" for="customSwitch3"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Calos Mamani Turpo</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                        <label class="custom-control-label" for="customSwitch4"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Daniel Quispe Huamani</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                        <label class="custom-control-label" for="customSwitch5"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Edu Fernandez Quispe</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                        <label class="custom-control-label" for="customSwitch6"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Paola Mamani Quispe</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                        <label class="custom-control-label" for="customSwitch7"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Wilber Maximo Paredez</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                        <label class="custom-control-label" for="customSwitch8"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="form-inline mb-2">
                    <button class="btn btn-success ml-2">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/fechaAsistenciasSubir.js"></script>
');
} else if (
    $_POST['r'] == 'asistencia-subir'
    && ($_POST['crud'] == 'set' || $_SESSION["asistenciaDocenteEjecutado"] == "True")
    && !isset($_POST['subirPdfAux'])

) {
    $asignaturaController = new AsignaturaController();
    $row = $asignaturaController->get($_SESSION["codAsignatura_agregar"]);
    $nombreCurso = $row[0]["nombre"];

    $AsistenciaDocenteController = new AsistenciaDocenteController();
    //fechaAsistencia,codDocente,codAsignatura,observacion
    $array = array(
        "fechaAsistencia" => $milisegundos = round(microtime(true) * 1000),
        "codDocente" => $_SESSION["nombreCompleto"],
        "codAsignatura" => $_SESSION["codAsignatura_agregar"],
        "observacion" => ""
    );
    $AsistenciaDocenteController->set($array);
    print('
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-color-white">Asistencia</h1>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="text-color-white">' . $nombreCurso . '</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="text-color-white" scope="row" >Horario</th>
                            <td class="text-color-white" id="horario"   >07M1</td>
                        </tr>
                        <tr>
                            <th class="text-color-white" scope="row" >Fecha actual</th>
                            <td class="text-color-white" id="fecha">26-10-2022</td>
                        </tr>
                        <tr>
                            <th class="text-color-white" scope="row">Modalidad</th>
                            <td class="text-color-white"  colspan="2">Virtual</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-sm-12 d-flex justify-content-end align-items-end flex-column">
                <!-- Button trigger modal -->
                <button disabled type="button" class="btn btn-lg btn-primary mb-3 "><i>Registrado</i></button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Asistencia Docente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Nombre de curso: </b><small>' . $nombreCurso . '</small></p>
                        <p><b>Facultad: </b> <small>FACULTAD DE INGENIERÍA ELÉCTRICA, ELECTRÓNICA, INFORMÁTICA Y MECÁNICA</small></p>
                        <p><b>Nombre: </b> <small>' . $_SESSION["nombreCompleto"] . '</small></p>
                        <p><b>Codigo: </b> <small>' . $_SESSION["codUsuario"] . ' </small></p>
                        <p><b>Fecha/Hora de registro: </b><small id="horaFecha"></small> </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <form method="POST">
                            <input type="hidden" name="r" value="asistencia-subir">
                            <input type="hidden" name="crud" value="set">
                            <input class="btn btn-md btn-success" type="submit" value="Registrar">
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-color-white">Alumnos</th>
                                <th class="text-color-white">Estado</th>
                                <th class="text-color-white">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-color-white">Almadro Perez Paredes</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Ana Maria Verdes Kuiro</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Bernando Altomira Gutierrez</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                        <label class="custom-control-label" for="customSwitch3"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Calos Mamani Turpo</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                        <label class="custom-control-label" for="customSwitch4"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Daniel Quispe Huamani</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                        <label class="custom-control-label" for="customSwitch5"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Edu Fernandez Quispe</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                        <label class="custom-control-label" for="customSwitch6"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Paola Mamani Quispe</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                        <label class="custom-control-label" for="customSwitch7"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-color-white">Wilber Maximo Paredez</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                        <label class="custom-control-label" for="customSwitch8"></label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="observaciones" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="form-inline mb-2">
                    <button class="btn btn-success ml-2" id="guardarAsistenciaAlumnos">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/fechaAsistenciasSubir.js"></script>
    ');
} else if (
    $_POST['r'] == 'silabos-subir'
    && $_POST['crud'] == 'set'
    && $_POST['subirPdfAux'] == "ok"
) {
    //Programar la insersion
    //$controlAcademicoController = new ControlAcademicoController();
    //datos del arhivo
    $idAsignatura = $_POST['idAsignatura'];
    $grupo = $_POST['grupo'];
    $nombre_archivo = $_FILES['silaboPdf']['name'];
    $tipo_archivo = $_FILES['silaboPdf']['type'];
    $tamano_archivo = $_FILES['silaboPdf']['size'];
    if (!((strpos($tipo_archivo, "pdf")))) {
        echo "
    <p class='fs-2 text-color-white text-center bg-danger'>La extension del archivo es incorrecta.</p>
    <hr>
    <div class='container text-center'>
        <a href='./'><button class='btn btn-md btn-danger mb-2 mt-4'>Atras</button></a>
    </div>";
        /* Volvemos a null nuestras variables globales*/
        $_SESSION['datoInformativo'] = null;
        $_SESSION['datoSumilla'] = null;
        $_SESSION['datoCompetencia'] = null;
        $_SESSION['datoResultados'] = null;
        $_SESSION['datoContenido'] = null;
        $_SESSION['datoEvaluacion'] = null;
        $_SESSION['dataBibliografia'] = null;
    } else {

        $ubicacion = "./cache/silabos/" . $nombre_archivo;
        if (move_uploaded_file($_FILES['silaboPdf']['tmp_name'], $ubicacion)) {
            $array = array(
                "codAsignatura" => $idAsignatura,
                "silabo" => $ubicacion,
                "grupo" => $grupo
            );
            $silaboController = new SilaboController();
            $silaboController->actualizarSilabo($array);
            //$valor = $controlAcademicoController->cargarCargaAcademica("./cache/" . $nombre_archivo);
            echo "<p class='text-center text-color-white fs-2'>El silabo ha sido cargado correctamente</p>
    <p class='text-center text-color-white fs-3'>Espere un momento...</p>
    <div class='container text-center heightVacio'>
        <script>
            window.onload = function() {
                reloadPage('silabos')
            }
        </script>
    </div>";
        } else {
            echo "<p class='text-center text-color-white'>Ocurrió algún error al subir el fichero. No pudo guardarse</p>
    <div class='container text-center heightVacio'>
        <script>
            window.onload = function() {
                    reloadPage('silabos')
        </script>
    </div>";
        }
    }
} else {
    //Recurso no autorizado
    $controller = new ViewController();
    $controller->load_view('error401');
}
