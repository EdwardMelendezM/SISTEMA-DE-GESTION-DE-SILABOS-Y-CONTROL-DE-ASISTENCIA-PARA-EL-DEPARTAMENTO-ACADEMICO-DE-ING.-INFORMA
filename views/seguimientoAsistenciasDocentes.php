<?php

$asistenciaDocenteController = new AsistenciaDocenteController();
$row = $asistenciaDocenteController->get();

$template = '
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white">Seguimiento de asistencias docentes</h1>
        <hr>
        <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-4 mt-2">Atras</button></a>
        <div class="carga row">
            <table>
                <thead>
                    <tr>
                        <th class=" text-center">N°</th>
                        <th class=" text-center">Docente</th>
                        <th class=" text-center">Cant. de asistencias</th>
                        <th class=" text-center">Porcentaje (%)</th>
                    </tr>
                </thead>
                <tbody>';
for ($indice = 0; $indice < count($row); $indice++) {
    $numero = $indice + 1;
    $cant = (int) $row[$indice]['asistenciaTotal'];
    $cant = ($cant / 5) * 100;
    $template .= '<tr>
                        <td>' . $numero . '</td>
                        <td>' . $row[$indice]['codDocente'] . '</td>
                        <td>' . $row[$indice]['asistenciaTotal'] . '</td>
                        <td>' . $cant . '% </td>
                    </tr>';
}

$template .= '
                </tbody>
            </table>
        </div>
    </div>
</div>';

print $template;
