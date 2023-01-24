<?php
function determinarSilabo($valor)
{
    return $valor == "" ? "<em>NO REGISTRADO</em>" : "<b>REGISTRADO</b>";
}
if ($_SESSION['rangoUsuario'] == "1") {
    $cargaController = new CargaController();
    $row = $cargaController->get();
    $nroRow = count($row);
    $template = '
        <div class="container text-center">
            <h1 class="text-color-white">Seguimiento de silabos</h1>
            
            <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-2 mt-4">Atras</button></a>
            <div class="row mt-2">
                <nav>';

    $template .= '
    <div class="carga row">
    <table>
        <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Asignatura</th>
                <th class="text-center">grupo</th>
                <th class="text-center">Docente</th>
                <th class="text-center opcional">creditos</th>
                <th class="text-center">silabo</th>
            </tr>
        </thead>
        <tbody>';
    for ($indice = 0; $indice < count($row); $indice++) {
        $numero = $indice + 1;
        $silabo = determinarSilabo($row[$indice]['silabo']);
        $template .= '<tr>
                                <td>' . $numero . '</td>
                                <td>' . $row[$indice]['nombre'] . '</td>
                                <td>' . $row[$indice]['grupo'] . '</td>
                                <td>' . $row[$indice]['codDocente'] . '</td>
                                <td class="opcional">' . $row[$indice]['creditos'] . '</td>
                                <td>' . $silabo . '</td>
                            </tr>';
    }
    $template .= '
            </tbody>
        </table>
    </div>';

    print $template;
}
