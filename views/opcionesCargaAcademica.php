<?php
function determinarSilabo($valor)
{
    return $valor == "" ? "NO REGIS." : "<b>REGISTRADO</b>";
}
if ($_SESSION['rangoUsuario'] == "1") {
    $catalogoController = new CatalogoController();
    $row = $catalogoController->get();
    $nroRow = count($row);

    $template = '
        <div class="container text-center">
            <h1 class="text-color-white">Opciones de Carga Academica</h1>
            
            <a href="./"><button class="btn btn-md btn-danger mb-2 mt-4">Atras</button></a>
            <div class="row mt-2">
                <nav>';

    if ($nroRow == 0) {
        $template .= '
        <p class="text-color-alpha-white">El archivo debe ser de nombre <b>cargaAcademica.csv</b></p>
        <p class="text-color-alpha-white">El archivo no debe exceder los <b>5Mb</b></p>
                    <form method="POST">
                        <input type="hidden" name="r" value="opcionesCargaAcademica-subir">
                        <input class="btn btn-md btn-primary mb-4" type="submit" value="Subir Carga academica">
                    </form>';
    } else {
        $template .= '
        <p class="text-color-white ">Al eliminar la carga academica, todos lo datos se perderan</p>
        <p class="text-color-white ">Tener cuidado al <b>Eliminar</b></p>
                    <form method="POST">
                        <input type="hidden" name="r" value="opcionesCargaAcademica-eliminar">
                        <input class="btn btn-md btn-danger mb-4" type="submit" value="Eliminar carga academia">
                    </form>
                ';
    }
    $template .= '</nav>';

    if ($nroRow == 0) {

        $template .= '<div class="col-12 border rounded h-25 heightVacio">
        <p class="text-color-white  bg-primario fs-1">NO EXISTE CARGA PARA VISUALIZAR</p>';
    } else {
        $template .= '
        <div class="carga row">
            <table>
                <thead>
                    <tr>
                        <th>CodSemestre</th>
                        <th>CodAsignatura</th>
                        <th>Escuela Profesional</th>
                        <th>Docente</th>
                        <th class="opcional">Grupo</th>
                        <th class="opcional">Silabo</th>
                        <th class="min993px">aula</th>
                        <th class="min993px">dia</th>
                        <th class="min993px">Hora Inicio</th>
                        <th class="min993px">Hora Final</th>
                        <th class="min993px">Tipo</th>
                        <th class="final">LimiteAfor.</th>
                    </tr>
                </thead>
                <tbody>';
        for ($indice = 0; $indice < count($row); $indice++) {
            $numero = $indice + 1;
            $template .= '<tr>
                                        <td>' . $row[$indice]['codSemestre'] . '</td>
                                        <td>' . $row[$indice]['codAsignatura'] . '</td>
                                        <td>' . $row[$indice]['codCarreraProfesional'] . '</td>
                                        <td>' . $row[$indice]['codDocente'] . '</td>
                                        <td class="opcional">' . $row[$indice]['grupo'] . '</td>
                                        <td class="opcional">' . determinarSilabo($row[$indice]['silabo']) . '</td>
                                        <td class="min993px">' . $row[$indice]['aula'] . '</td>
                                        <td class="min993px">' . $row[$indice]['dia'] . '</td>
                                        <td class="min993px">' . $row[$indice]['horaInico'] . '</td>
                                        <td class="min993px">' . $row[$indice]['horaFinal'] . '</td>
                                        <td class="min993px">' . $row[$indice]['tipo'] . '</td>
                                        <td class="final">' . $row[$indice]['limiteAforo'] . '</td>
                                    </tr>';
        }
        $template .= '
                </tbody>
        </table>
        </div>
        ';
    }

    $template .= '
                </div>
            </div>
        </div>
        ';
    print $template;
} else {
    //Recurso no autorizado
    $controller = new ViewController();
    $controller->load_view('home');
}
