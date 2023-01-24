<?php
function determinarSilabo($valor)
{
    return $valor == "" ? "NO REGISTRADO" : "<b>REGISTRADO</b>";
}
function VerificarSilabo($valor, $idCurso, $grupo)
{
    return $valor == ""
        ? '
    <form method="POST">
        <input type="hidden" name="r" value="silabos-subir">
        <input type="hidden" name="idAsignatura" value="' . $idCurso . '">
        <input type="hidden" name="grupo" value="' . $grupo . '">
        <input class="btn btn-md btn-success" type="submit" value="Subir">
    </form>
    
    '
        : '
    <form method="POST">
        <input type="hidden" name="r" value="silabos-eliminar">
        <input type="hidden" name="idAsignatura" value="' . $idCurso . '">
        <input type="hidden" name="grupo" value="' . $grupo . '">
        <input class="btn btn-md btn-danger" type="submit" value="Eliminar">
    </form>
    <a class="mt-1 btn btn-sm btn-primary" href="' . $valor . '" >Ver silabo</a>
    ';
}
$cargaController = new CargaController();
$row = $cargaController->get($_SESSION["nombreCompleto"]);
$nroRow = count($row);
$template = '
    <div class="container text-center">
        <h1 class="text-color-white">Silabos</h1>
        <a href="./"><button class="btn btn-md btn-danger mb-2 mt-4">Atras</button></a>
    <div class="carga row">
            <table>
                <thead>
                    <tr>
                        <th class="min1200px  text-center">N°</th>
                        <th class=" text-center">Codigo</th>
                        <th class="min1200px text-center">Grupo</th>
                        <th class=" text-center">Asignatura</th>
                        <th class=" text-center">Silabo</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>';
for ($indice = 0; $indice < count($row); $indice++) {
    $numero = $indice + 1;
    $template .= '<tr>
                        <td class="min1200px">' . $numero . '</td>
                        <td>' . $row[$indice]['codAsignatura'] . '</td>
                        <td class="min1200px">' . $row[$indice]['grupo'] . '</td>
                        <td>' . $row[$indice]['nombre'] . '</td>
                        <td>' . determinarSilabo($row[$indice]['silabo']) . '</td>
                        <td>' . VerificarSilabo(
        $row[$indice]['silabo'],
        $row[$indice]['codAsignatura'],
        $row[$indice]['grupo'],

    ) . '</td>
                    </tr>';
}
$template .= '
                </tbody>
            </table>
        </div>
    </div>
    ';


print $template;
