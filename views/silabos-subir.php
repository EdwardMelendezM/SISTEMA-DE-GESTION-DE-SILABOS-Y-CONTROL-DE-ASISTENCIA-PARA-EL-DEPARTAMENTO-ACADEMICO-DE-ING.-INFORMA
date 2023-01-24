<?php
if (
    $_POST["r"] == "silabos-subir"
    &&  !isset($_POST["crud"])
    && !isset($_POST['subirPdfAux'])
) {
    print('
        <div class="container text-center ">
            <h1 class="text-color-white">Subir Silabo</h1>
            <p class="text-color-white">Complete el cuestionario acerca del silabo</p>
            <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-2 mt-5">Atras</button></a>
            <hr>
            <div class="row">
                <form method="POST" class="row g-3 needs-validation" novalidate>
                        <p class="text-color-white fs-3">Datos Informativos</p>
                        <input type="hidden" name="r" value="silabos-subir">
                        <input type="hidden" name="crud" value="set">
                        <input type="hidden" name="idAsignatura" value="' . $_POST['idAsignatura'] . '">
                        <input type="hidden" name="grupo" value="' . $_POST['grupo'] . '">

                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label text-color-white">Codigo Asignatura</label>
                        <input name="codAsignatura" type="text" class="form-control" id="validationCustom01" value="' . $_POST['idAsignatura'] . '" required>
                        <div class="valid-feedback">
                            Verificado!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Nombre Asignatura</label>
                        <input name="nombre" type="text" class="form-control" id="validationCustom02" value="Algortimos Basicos" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Categoria</label>
                        <input name="categoria" type="text" class="form-control" id="validationCustom02" value="EFF" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Numero de Creditos</label>
                        <input name="creditos"  type="text" class="form-control" id="validationCustom02" value="3" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Fecha de inicio</label>
                        <input name="fechaInicio" type="text" class="form-control" id="validationCustom02" value="10/11/2023" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Fecha de conclusion</label>
                        <input name="fechaFin" type="text" class="form-control" id="validationCustom02" value="10/11/2023" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Numero de horas</label>
                        <input name="nroHoras" type="text" class="form-control" id="validationCustom02" value="3T-2P" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Aula y horario</label>
                        <input name="aulaHorario" type="text" class="form-control" id="validationCustom02" value="T:LU 16-18 IN203; T:VI 16-17 IN203; P:MI 16-18 IN302 P:MI 16-18 IN303" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Modo</label>
                        <input name="modo" type="text" class="form-control" id="validationCustom02" value="Presencial" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Semestre academico</label>
                        <input name="semestre" type="text" class="form-control" id="validationCustom02" value="2023-I" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Docente</label>
                        <input name="docente" type="text" class="form-control" id="validationCustom02" value="Mario Cartagena Quispe" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label text-color-white">Email</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input name="email" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label text-color-white">Escuela profesional</label>
                        <input name="escuelaProfesional" type="text" class="form-control" id="validationCustom02" value="Ingenieria de sistemas e informatica" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    
                    <hr>
                    <p class="text-color-white fs-3">Sumilla</p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Naturaleza del curso</label>
                        <textarea name="summillaNat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Ejes tematicos</label>
                        <textarea name="sumillaEjes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <p class="text-color-white fs-3">Competencias</p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Contenido</label>
                        <textarea name="competencias" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <p class="text-color-white fs-3">Resultados</p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Contenido</label>
                        <textarea name="resultados" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <hr>
                    <p class="text-color-white fs-2">Programacion de contenidos</p>

                    <p class="text-color-white fs-3">Primera unidad dictica</p>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label text-color-white">Tema</label>
                        <input name="temaPrimera" type="text" class="form-control" id="validationCustom02" value="INGENIERIA DE SOFTWARE" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Contenido</label>
                        <input name="contenidoPrimera" type="text" class="form-control" id="validationCustom02" value="CAP I:Conceptos generales" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad</label>
                        <input name="actividadPrimera" type="text" class="form-control" id="validationCustom02" value="Dictado" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Tiempo</label>
                        <input name="tiempoPrimera" type="text" class="form-control" id="validationCustom02" value="3" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Herramientas digitales</label>
                        <input name="herramientasPrimera" type="text" class="form-control" id="validationCustom02" value="PC o Laptop" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>

                    <p class="text-color-white fs-3">Segunda unidad dictica</p>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label text-color-white">Tema</label>
                        <input name="temaSegunda" type="text" class="form-control" id="validationCustom02" value="INGENIERIA DE SOFTWARE" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Contenido</label>
                        <input name="contenidoSegunda" type="text" class="form-control" id="validationCustom02" value="CAP II Conceptos Avanz" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad</label>
                        <input name="actividadSegunda" type="text" class="form-control" id="validationCustom02" value="Exposición" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Tiempo</label>
                        <input name="tiempoSegunda" type="text" class="form-control" id="validationCustom02" value="8" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Herramientas digitales</label>
                        <input name="herramientasSegunda" type="text" class="form-control" id="validationCustom02" value="PC o Laptop" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>

                    <p class="text-color-white fs-3">Tercera unidad dictica</p>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label text-color-white">Tema</label>
                        <input name="temaTercero" type="text" class="form-control" id="validationCustom02" value="INGENIERIA DE SOFTWARE" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Contenido</label>
                        <input name="contenidoTercero" type="text" class="form-control" id="validationCustom02" value="CAP II" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad</label>
                        <input name="actividadTercero" type="text" class="form-control" id="validationCustom02" value="Exposición" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Tiempo</label>
                        <input name="tiempoTercero" type="text" class="form-control" id="validationCustom02" value="8" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Herramientas digitales</label>
                        <input name="herramientasTercero" type="text" class="form-control" id="validationCustom02" value="PC o Laptop" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <hr>
                    <p class="text-color-white fs-3">Estrategia Metodologica</p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Contenido</label>
                        <textarea name="contenidoMetod" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <hr>
                    <p class="text-color-white fs-2">Evaluacion de aprendizajes</p>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Unidad</label>
                        <input name="unidad1" type="text" class="form-control" id="validationCustom02" value="Unidad 1" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad con entornos</label>
                        <input name="actividadEnt1" type="text" class="form-control" id="validationCustom02" value="Examen, trabajos ,proyecto" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Evaluacion</label>
                        <input name="evaluacion1" type="text" class="form-control" id="validationCustom02" value="Formales y rubricas" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Porcentaje</label>
                        <input name="porcentaje1" type="text" class="form-control" id="validationCustom02" value="10% 30% 50%" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Unidad</label>
                        <input name="unidad2" type="text" class="form-control" id="validationCustom02" value="Unidad 2" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad con entornos</label>
                        <input name="actividadEnt2" type="text" class="form-control" id="validationCustom02" value="Examen, trabajos ,proyecto" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Evaluacion</label>
                        <input name="evaluacion2" type="text" class="form-control" id="validationCustom02" value="Formales y rubricas" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Porcentaje</label>
                        <input name="porcentaje2" type="text" class="form-control" id="validationCustom02" value="10% 30% 50%" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Unidad</label>
                        <input name="unidad3" type="text" class="form-control" id="validationCustom02" value="Unidad 3" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Actividad con entornos</label>
                        <input name="actividadEnt3" type="text" class="form-control" id="validationCustom02" value="Examen, trabajos ,proyecto" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Evaluacion</label>
                        <input name="evaluacion3" type="text" class="form-control" id="validationCustom02" value="Formales y rubricas" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label text-color-white">Porcentaje</label>
                        <input name="porcentaje3" type="text" class="form-control" id="validationCustom02" value="10% 30% 50%" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <hr>
                    <p class="text-color-white fs-3">Referencias bibliograficas</p>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-color-white">Contenido</label>
                        <textarea name="bibliografia" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="col-12 mt-5 mb-5">
                        <button class="btn  btn-lg btn-danger" type="submit mt-2">Enviar form</button>
                    </div>
                </form>
            </div>

            
        </div>
        ');
} else if (
    $_POST['r'] == 'silabos-subir'
    && $_POST['crud'] == 'set'
    && !isset($_POST['subirPdfAux'])

) {
    echo '<p class="text-center text-color-white fs-3">Datos enviados por el formulario</p>';
    $datoInformativo = array(
        'codAsignatura' => $_POST['codAsignatura'],
        'nombre' => $_POST['nombre'],
        'categoria' => $_POST['categoria'],
        'creditos' => $_POST['creditos'],
        'fechaInicio' => $_POST['fechaInicio'],
        'fechaFin' => $_POST['fechaFin'],
        'nroHoras' => $_POST['nroHoras'],
        'aulaHorario' => $_POST['aulaHorario'],
        'modo' => $_POST['modo'],
        'semestre' => $_POST['semestre'],
        'docente' => $_POST['docente'],
        'email' => $_POST['email'],
        'escuelaProfesional' => $_POST['escuelaProfesional']
    );
    $datoSumilla = $_POST['summillaNat'] . "
        " . $_POST['sumillaEjes'];

    $datoCompetencia = $_POST['competencias'];
    $datoResultados = $_POST['resultados'];
    $datoContenido = array(
        "temaPrimera" => $_POST['temaPrimera'],
        "contenidoPrimera" => $_POST['contenidoPrimera'],
        "actividadPrimera" => $_POST['actividadPrimera'],
        "tiempoPrimera" => $_POST['tiempoPrimera'],
        "herramientasPrimera" => $_POST['herramientasPrimera'],

        "temaSegunda" => $_POST['temaSegunda'],
        "contenidoSegunda" => $_POST['contenidoSegunda'],
        "actividadSegunda" => $_POST['actividadSegunda'],
        "tiempoSegunda" => $_POST['tiempoSegunda'],
        "herramientasSegunda" => $_POST['herramientasSegunda'],

        "temaTercero" => $_POST['temaTercero'],
        "contenidoTercero" => $_POST['contenidoTercero'],
        "actividadTercero" => $_POST['actividadTercero'],
        "tiempoTercero" => $_POST['tiempoTercero'],
        "herramientasTercero" => $_POST['herramientasTercero'],
    );
    $datoEvaluacion = array(
        "unidad1" => $_POST['unidad1'],
        "actividadEnt1" => $_POST['actividadEnt1'],
        "evaluacion1" => $_POST['evaluacion1'],
        "porcentaje1" => $_POST['porcentaje1'],
        "unidad2" => $_POST['unidad2'],
        "actividadEnt2" => $_POST['actividadEnt2'],
        "evaluacion2" => $_POST['evaluacion2'],
        "porcentaje2" => $_POST['porcentaje2'],
        "unidad3" => $_POST['unidad3'],
        "actividadEnt3" => $_POST['actividadEnt3'],
        "evaluacion3" => $_POST['evaluacion3'],
        "porcentaje3" => $_POST['porcentaje3'],
    );
    $dataBibliografia = $_POST['bibliografia'];

    $_SESSION['datoInformativo'] = $datoInformativo;
    $_SESSION['datoSumilla'] = $datoSumilla;
    $_SESSION['datoCompetencia'] = $datoCompetencia;
    $_SESSION['datoResultados'] = $datoResultados;
    $_SESSION['datoContenido'] = $datoContenido;
    $_SESSION['datoEvaluacion'] = $datoEvaluacion;
    $_SESSION['dataBibliografia'] = $dataBibliografia;

    $template = '
    <div class="container text-center ">
            <h1 class="text-color-white">Subir pdf silabo</h1>
            <div class="row heightVacio">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="silabos-subir">
                    <input type="hidden" name="subirPdfAux" value="ok">
                    <input type="hidden" name="crud" value="set">
                    <input type="hidden" name="idAsignatura" value="' . $_POST['idAsignatura'] . '">
                    <input type="hidden" name="grupo" value="' . $_POST['grupo'] . '">
                    <label for="nuestroinput" class="bg-principal btn-editado">Subir carga</label>
                    <input id="nuestroinput" name="silaboPdf" type="file" class="d-none" />
                    <hr>
                    <input class="btn btn-md btn-success mb-4" type="submit" value="Subir">
                </form>
            </div>
            <a href="./"><button class="btn btn-md btn-danger mb-2 mt-4">Atras</button></a>
        </div>
    ';
    print $template;

    echo "</div>
    <script type='text/javascript'>
        window.location.replace('cache/main.php ')
    </script>";
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
            </div>
            ";
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
                    window.onload = function(){
                        reloadPage('silabos')
                    }
                </script>
            </div>";
        } else {
            echo "<p class='text-center text-color-white'>Ocurrió algún error al subir el fichero. No pudo guardarse</p>
            <div class='container text-center heightVacio'>
                <script>
                    window.onload = function(){
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
