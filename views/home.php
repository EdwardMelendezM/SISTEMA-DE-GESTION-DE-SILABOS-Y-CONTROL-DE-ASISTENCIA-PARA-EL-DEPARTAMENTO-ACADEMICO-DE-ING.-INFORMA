<?php

function determinarSilabo($valor)
{
    return $valor == "" ? "<em>No registrado</em>" : "<b>Registado</b>";
}
function mostrarSubirSilabo($valor)
{
    return $valor == ""
        ? '<a href="silabos"><button class="btn btn-sm btn-danger">Info</button></a>'
        : '<a href="silabos"><button class="btn btn-sm btn-primary">Info</button></a>';
}


if (isset($_SESSION['rangoUsuario']) && $_SESSION['rangoUsuario'] == "2") {
    $templateAdministrador = '
        <div class="container text-center mb-4 mt-4">
            <div class="row">
                <a class="btn btn-primary mb-4" href="salir">
                    <h4 class="text-center titulo-header pt-1">Salir</h4>
                </a>
                <h1 class="text-color-white">Administrador</h1>
                
                
                <h2 class="text-color-white-alpha">Opciones de administrador</h2>
                <div class="col-lg-12 border mt-4 rounded p-3">
                    <h2 class="text-color-white-alpha">Carga Academica</h2>
                    <button class="btn btn-lg btn-primary">Ver</button>
                    <button class="btn btn-lg btn-success">Agregar</button>
                    <button class="btn btn-lg btn-danger">Eliminar</button>
                </div>
                <div class="col-lg-12 border mt-4 rounded p-3">
                    <h2 class="text-color-white-alpha">Docentes</h2>
                    <button class="btn btn-lg btn-primary">Ver</button>
                    <button class="btn btn-lg btn-success">Agregar</button>
                    <button class="btn btn-lg btn-danger">Eliminar</button>
                </div>
                <div class="col-lg-12 border mt-4 rounded p-3">
                    <h2 class="text-color-white-alpha">Alumnos</h2>
                    <button class="btn btn-lg btn-primary">Ver</button>
                    <button class="btn btn-lg btn-success">Agregar</button>
                    <button class="btn btn-lg btn-danger">Eliminar</button>
                </div>
            </div>
        </div>';

    print $templateAdministrador;
} else if (($_SESSION['rangoUsuario']) && $_SESSION['rangoUsuario'] == "1") {
    $cargaController = new CargaController();
    $row = $cargaController->get($_SESSION["nombreCompleto"]);
    $templateDirector = '
        <div class="container text-center mt-4 mb-3">
        <div class="titulo-director mt-1">
            <h1 class="text-color-white fs-2">DIRECTOR DE ESCUELA</h1>
            <h1 class="text-color-white fs-2"></h1>
        </div>
        <div class="adicionales">   
            <p class=""><a
                href="seguimientoSilabos"
                class="btn btn-md bg-principal text-color-white-alpha btn-editado">
                    Seguimiento de silabos
                </a>
            </p>
            <p class=""><a
                href="seguimientoAsistenciasDocentes"
                class="btn btn-md bg-principal text-color-white-alpha btn-editado">
                    Seguimiento de asistencias docentes
                </a>
            </p>
            <p class="">
                <a
                href="opcionesCargaAcademica"
                class="btn btn-lmd bg-principal text-color-white-alpha btn-editado">
                    Opciones de carga academica
                </a>
            </p>
        </div>
        <div class="container border-editado pt-3 pb-4">
            <h2 class="fs-4 text-color-secundario">Carga Academia 2022-2</h2>
            <h3 class="fs-6 text-color-white-alpha">' . $_SESSION["nombreCompleto"] . '</h3>
            <h3 class="fs-5 text-color-secundario">DEPARTAMENTO ACADEMICO DE INGENIERIA INFORMATICA</h3>
            <div class="carga row">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Codigo</th>
                        <th>Grupo</th>
                        <th>Asignatura</th>
                        <th class="opcional">Creditos</th>
                        <th class="opcional">Categoria</th>
                        <th class="min993px">1°Parc</th>
                        <th class="min993px">2°Parc</th>
                        <th class="min993px">3°Parc</th>
                        <th class="min993px">Susti</th>
                        <th class="min993px">Prom.</th>
                        <th>A. Dia</th>

                        <th class="min1200px">Silabo</th>
                        <th class="min1200px"></th>
                    </tr>
                </thead>
                <tbody>';
    for ($indice = 0; $indice < count($row); $indice++) {
        $numero = $indice + 1;
        $templateDirector .= '<tr>
                        <td id="numero">' . $numero . '</td>
                        <td id="codAsignatura">' . $row[$indice]['codAsignatura'] . '</td>
                        <td id="grupo">' . $row[$indice]['grupo'] . '</td>
                        <td>' . $row[$indice]['nombre'] . '</td>
                        <td class="opcional">' . $row[$indice]['creditos'] . '</td>
                        <td class="opcional">EFF</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td>
                            <a
                                data-value="' . $row[$indice]['codAsignatura'] . $row[$indice]['grupo'] . '"
                                id="btnAsistencia"
                                href="asistencia"
                                class="btn btn-success btn-sm">Asist
                            </a>
                        </td>
                        <td class="min1200px">' . determinarSilabo($row[$indice]['silabo']) . '</td>
                        <td class="min1200px">' . mostrarSubirSilabo($row[$indice]['silabo']) . '</td>
                    </tr>';
    }

    $templateDirector .= '
                    </tbody>
                </table>
            </div>

        </div>
        <div class="usuario mt-5 mb-5">
            <h4><a
                href=""
                class="btn btn-md bg-principal text-color-white-alpha btn-editado">
                    Cambiar contraseña
                </a>
            </h4>
            <h4
            class="fs-6 text-color-white-alpha">
                Director:' . $_SESSION["nombreCompleto"] . '
            <h4><a href=""
            class="btn btn-md bg-principal text-color-white-alpha btn-editado">
            Ayuda por correo</a></h4>
        </div>
        <script type="text/javascript">
            const d = document;
            const btnAsistencia = d.querySelectorAll("#btnAsistencia");
            btnAsistencia.forEach(el=>
            el.addEventListener("click",(e)=>{
                e.preventDefault();
                const url= el.dataset.value
                location.href=`asistencia?${url}`;
            }))

        </script>';
    print $templateDirector;
} else {
    $cargaController = new CargaController();
    $row = $cargaController->get($_SESSION["nombreCompleto"]);
    $templateDocente = '
    <div class="container text-center mt-4 mb-3">
    <div class="container border-editado pt-3 pb-4">
        <h2 class="fs-4 text-color-secundario">Carga Academia 2022-2</h2>
        <h3 class="fs-6 text-color-white-alpha">Sr(a). ' . $_SESSION["nombreCompleto"] . '</h3>
        <h3 class="fs-5 text-color-secundario">DEPARTAMENTO ACADEMICO DE INGENIERIA INFORMATICA</h3>
        <div class="carga row">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th class=" text-center">Codigo</th>
                        <th class=" text-center">Grupo</th>
                        <th class=" text-center">Asignatura</th>
                        <th class="opcional text-center">Creditos</th>
                        <th class="opcional text-center">Categoria</th>
                        <th class="min993px text-center">1°Parc</th>
                        <th class="min993px text-center">2°Parc</th>
                        <th class="min993px text-center">3°Parc</th>
                        <th class="min993px text-center">Susti</th>
                        <th class="min993px text-center">Prom.</th>
                        <th>A. Dia</th>
                        <th class="min1200px text-center">Silabo</th>
                        <th class="min1200px text-center"></th>
                    </tr>
                </thead>
                <tbody>';
    for ($indice = 0; $indice < count($row); $indice++) {
        $numero = $indice + 1;
        $templateDocente .= '<tr>
                        <td>' . $numero . '</td>
                        <td>' . $row[$indice]['codAsignatura'] . '</td>
                        <td>' . $row[$indice]['grupo'] . '</td>
                        <td>' . $row[$indice]['nombre'] . '</td>
                        <td class="opcional">' . $row[$indice]['creditos'] . '</td>
                        <td class="opcional">EFF</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td class="min993px">nota</td>
                        <td>
                        <a
                                data-value="' . $row[$indice]['codAsignatura'] . $row[$indice]['grupo'] . '"
                                id="btnAsistencia"
                                href="asistencia"
                                class="btn btn-success btn-sm">Asist
                            </a>
                        </td>
                        <td class="min1200px">' . determinarSilabo($row[$indice]['silabo']) . '</td>
                        <td class="min1200px">' . mostrarSubirSilabo($row[$indice]['silabo']) . '</td>
                    </tr>';
    }

    $templateDocente .= '
                </tbody>
            </table>
        </div>

    </div>
    <div class="usuario mt-5 mb-5">
        <h4><a
            href=""
            class="btn btn-md bg-principal text-color-white-alpha btn-editado">
                Cambiar contraseña
            </a>
        </h4>
        <h4
            class="fs-6 text-color-white-alpha">
        Docente: ' . $_SESSION["nombreCompleto"] . '
        <h4><a href=""
        class="btn btn-md bg-principal text-color-white-alpha btn-editado">
        Ayuda por correo</a></h4>
    </div>
    <script type="text/javascript">
            const d = document;
            const btnAsistencia = d.querySelectorAll("#btnAsistencia");
            btnAsistencia.forEach(el=>
            el.addEventListener("click",(e)=>{
                e.preventDefault();
                const url= el.dataset.value
                location.href=`asistencia?${url}`;
            }))

        </script>';

    print $templateDocente;
}
