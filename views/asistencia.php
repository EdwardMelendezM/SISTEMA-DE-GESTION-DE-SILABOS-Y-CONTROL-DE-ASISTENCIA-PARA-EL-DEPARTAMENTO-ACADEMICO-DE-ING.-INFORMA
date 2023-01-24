<?php
$vars = $_SERVER['REQUEST_URI'];
function determinarCodAsignaturaGrupo($vars)
{
    $var = str_split($vars);
    $codAsignatura = "";
    $grupo = "";
    //var_dump($var);
    $tamaño = count($var) - 9;
    for ($indice = $tamaño; $indice < count($var); $indice++) {
        if ($indice != count($var) - 1) {
            $codAsignatura .= $var[$indice];
        } else {
            $grupo .= $var[$indice];
        }
    }
    return [$codAsignatura, $grupo];
}
[$codAsignatura, $grupo] = determinarCodAsignaturaGrupo($vars);
$_SESSION['codAsignatura_agregar'] = $codAsignatura;
$_SESSION['grupo_agregar'] = $grupo;
$codDocente = $_SESSION['nombreCompleto'];
$asistenciaDocenteController = new AsistenciaDocenteController();
$row = $asistenciaDocenteController->get($codDocente, $codAsignatura);
$templateDocente = '
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-4 mt-4">Asistencia</h1>
        <hr>
        <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-4 mt-2">Atras</button></a>
        <div class="col-md-12 bg-white-alpha-v2">
            <p class="mb-4 mt-4 fs-5 text-color-white" >| Docente : <b>' . $_SESSION['nombreCompleto'] . '</b> | CodAsignatura: <b>' . $codAsignatura . '</b> | Grupo: <b>' . $grupo . '</b> |</p>
            <div class="border min-vh-100 mb-2">
                <div class="carga row">
                    <table>
                        <thead>
                            <tr>
                                <th class="min1200px  text-center">Fecha</th>
                                <th class=" text-center">
                                    <form method="POST">
                                        <input type="hidden" name="r" value="asistencia-subir">
                                        <input class="btn btn-md btn-success" type="submit" value="Agregar">
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>';
for ($indice = 0; $indice < count($row); $indice++) {
    $templateDocente .= '<tr>
                        <td id="fechaAsistencia">' . $row[$indice]['fechaAsistencia'] . '</td>
                        <td><button class="btn btn-md btn-primary">Ver</button></td>
                </tr>';
}
$templateDocente .= '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div> 
</div>
<script src="./public/js/fechaAsistencias.js"></script>
    ';

print $templateDocente;
