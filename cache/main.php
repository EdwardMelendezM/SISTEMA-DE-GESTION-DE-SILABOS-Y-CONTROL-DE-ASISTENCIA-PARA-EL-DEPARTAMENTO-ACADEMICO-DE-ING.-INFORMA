<?php
require('pdf_mc_table.php');

class PDF extends PDF_MC_Table
{
    //Evaluacion
    function evaluacion($array)
    {

        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(52, 155, 214);
        $this->MultiCell(180, 10, "EVALUACION DE APRENDIZAJES", 1, "C", 1, 1);
        /*==================== PRIMERA UNIDAD ===================*/
        $this->SetFont('Arial', '', 11);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(30, 9, "UNIDAD", 1, 0, 'C', 0);
        $this->Cell(30, 9, "ENTORNOS", 1, 0, 'C', 0);
        $this->Cell(35, 9, "TENICAS", 1, 0, 'C', 0);
        $this->Cell(30, 9, "INSTRUMENTOS ", 1, 0, 'C', 0);
        $this->Cell(25, 9, "POR. UNID", 1, 0, 'C', 0);
        $this->Cell(30, 9, "POR. ASIG", 1, 1, 'C', 0);

        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(30, 30, 35, 30, 25, 30));
        $this->SetLineHeight(7);
        $this->SetAligns(array("C", "L", "L", "L", "L", "C"));

        $this->Row(
            array(
                $array['unidad1'],
                $array['actividadEnt1'],
                "
                - Formales
                - Semi",
                "
                - Test
                - Rubrica",
                $array['porcentaje1'],
                "33.3%"
            )
        );
        $this->Row(
            array(
                $array['unidad2'],
                $array['actividadEnt2'],
                "
                - Formales
                - Semi",
                "
                - Test
                - Rubrica",
                $array['porcentaje2'],
                "33.3%"
            )
        );
        $this->Row(
            array(
                $array['unidad3'],
                $array['actividadEnt3'],
                "
                - Formales
                - Semi",
                "
                - Test
                - Rubrica",
                $array['porcentaje3'],
                "33.3%"
            )
        );
    }

    //Contenido general de las unidades
    function contenidos($array = '')
    {

        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(52, 155, 214);
        $this->MultiCell(180, 10, "PROGRAMACION DE CONTENIDOS", 1, "C", 1, 1);
        /*==================== PRIMERA UNIDAD ===================*/
        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(180, 199, 212);
        $this->MultiCell(180, 10, "PRIMERA UNIDAD DIDACTICA :" . utf8_decode($array['temaPrimera']), 1, 'C', 1, 1);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(70, 9, "CONTENIDOS", 1, 0, 'C', 0);
        $this->Cell(45, 9, "ACTIVIDADES", 1, 0, 'C', 0);
        $this->Cell(25, 9, "TIEMPO", 1, 0, 'C', 0);
        $this->Cell(40, 9, "HERRAMIENTAS ", 1, 1, 'C', 0);

        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(70, 45, 25, 40));
        $this->SetLineHeight(7);
        $this->SetAligns(array("", "", "C", ""));
        $this->Row(
            array(
                $array['contenidoPrimera'],
                $array['actividadPrimera'],
                $array['tiempoPrimera'],
                $array['herramientasPrimera'],
            )
        );
        /*$this->Row(
            array(
                "CAP. II:
                - Modelado de Patrones de diseño",
                "
                - Exposiciones
                -Trabajos monograficos",
                "8",
                "
                - Pc o Lapto
                - Internet",
            )
        );*/
        $this->SetFont('Arial', '', 11);
        $this->SetAligns(array("C", "", "C", ""));
        $this->Row(
            array(
                'EXAMEN PARCIAL',
                '',
                '2',
                ''
            )
        );
        /*==================== SEGUNDA UNIDAD ===================*/
        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(180, 199, 212);
        $this->MultiCell(180, 10, "SEGUNDA UNIDAD DIDACTICA :" . utf8_decode($array['temaSegunda']), 1, 'C', 1, 1);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(70, 9, "CONTENIDOS", 1, 0, 'C', 0);
        $this->Cell(45, 9, "ACTIVIDADES", 1, 0, 'C', 0);
        $this->Cell(25, 9, "TIEMPO", 1, 0, 'C', 0);
        $this->Cell(40, 9, "HERRAMIENTAS ", 1, 1, 'C', 0);

        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(70, 45, 25, 40));
        $this->SetLineHeight(7);
        $this->SetAligns(array("", "", "C", ""));
        $this->Row(
            array(
                $array['contenidoSegunda'],
                $array['actividadSegunda'],
                $array['tiempoSegunda'],
                $array['herramientasSegunda'],
            )
        );
        /*
        $this->Row(
            array(
                "CAP IV:
                - Arquitectura",
                "
                - Exposiciones
                - Trabajos monograficos",
                "8",
                "
                - Pc o Lapto
                - Internet",
            )
        );*/
        $this->SetFont('Arial', '', 11);
        $this->SetAligns(array("C", "", "C", ""));
        $this->Row(
            array(
                'EXAMEN PARCIAL',
                '',
                '2',
                ''
            )
        );
        /*==================== TERCERA UNIDAD ===================*/
        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(180, 199, 212);
        $this->MultiCell(180, 10, "TERCERA UNIDAD DIDACTICA :" . utf8_decode($array['temaTercero']), 1, 'C', 1, 1);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(70, 9, "CONTENIDOS", 1, 0, 'C', 0);
        $this->Cell(45, 9, "ACTIVIDADES", 1, 0, 'C', 0);
        $this->Cell(25, 9, "TIEMPO", 1, 0, 'C', 0);
        $this->Cell(40, 9, "HERRAMIENTAS ", 1, 1, 'C', 0);

        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(70, 45, 25, 40));
        $this->SetLineHeight(7);
        $this->SetAligns(array("", "", "C", ""));
        $this->Row(
            array(
                $array['contenidoTercero'],
                $array['actividadTercero'],
                $array['tiempoTercero'],
                $array['herramientasTercero'],
            )
        );/*
        $this->Row(
            array(
                "Unidad VI:
                - Arquitectura",
                "
                - Exposiciones
                - Trabajos monograficos",
                "8",
                "
                - Pc o Lapto
                - Internet",
            )
        );*/
        $this->SetFont('Arial', '', 11);
        $this->SetAligns(array("C", "", "C", ""));
        $this->Row(
            array(
                'EXAMEN PARCIAL',
                '',
                '2',
                ''
            )
        );
        /*================================================================================ */
    }
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Times', 'B', 16);
        $this->Image('logo.png', 10, 5, -600);
        $this->Image('logo-info.png', 175, 5, -850);
        // Movernos a la derecha
        $this->Cell(65);
        // Título
        //$this->SetDrawColor(0, 0, 0);

        $this->SetTextColor(0, 0, 0);
        //$this->Line(300, 3, 0, 3);
        $this->Line(300, 35, 0, 35);

        $this->Cell(60, 20, 'Universidad Nacional de San Antonio Abad del Cusco ', 0, 0, 'C');
        $this->Ln(10);

        // Salto de línea
        $this->Ln(30);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    function mostrarTablaDosFilas($titulo, $texto)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(52, 155, 214);
        $this->Cell(180, 10, utf8_decode($titulo), 1, 1, 'C', 1);
        $this->SetFont('Arial', '', 9);
        $this->SetFillColor(255, 255, 255);
        $this->MultiCell(180, 7, utf8_decode($texto), 1, 1, 1, 1);
    }
    function saltarLinea()
    {
        $this->Ln(7);
    }
    function mostrarTituloTabla($titulo, $array)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(0, 0, 0);
        //$this->SetDrawColor(0, 0, 0);
        $this->SetFillColor(52, 155, 214);
        $this->Cell(180, 10, $titulo, 1, 0, 'C', 1);
        $this->Ln(10);

        $this->SetTextColor(0, 0, 0);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.1 Nombre de la asignatura", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7,  utf8_decode($array['nombre']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.2 Codigo de la asignatura", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7,  utf8_decode($array['codAsignatura']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.3 Numero de creditos", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7,  utf8_decode($array['creditos']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.4 Categoria", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['categoria']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.5 Fecha de inicio", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['fechaInicio']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.6 Fecha de conclusion", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['fechaFin']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.7 Numero de horas", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['nroHoras']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.8 Aula y horario", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 7);
        $this->Cell(90, 7, utf8_decode($array['aulaHorario']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.9 Modo", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['modo']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.10 Semestre academico", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['semestre']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.11 Docente", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['docente']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.11 Email docente", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['email']), 1, 1, 'C', 0);

        $this->SetFont('Arial', 'B', 9);
        $this->Cell(90, 7, "1.11 Escuela profesional", 1, 0, 'C', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(90, 7, utf8_decode($array['escuelaProfesional']), 1, 1, 'C', 0);
    }
}
function main(
    $datoInformativo,
    $datoSumilla,
    $datoCompetencias,
    $datoResultados,
    $datoContenido,
    $datoEvaluacion,
    $datoBibliografia
) {
    $pdf = new PDF();

    $pdf->SetTextColor(220, 50, 50);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Cell(180, -15, 'Silabo', 0, 0, 'C');

    $pdf->Ln(0);
    $pdf->mostrarTituloTabla("I. Datos Informativos", $datoInformativo);
    $pdf->saltarLinea();

    $pdf->mostrarTablaDosFilas("II. Sumilla", $datoSumilla);
    $pdf->mostrarTablaDosFilas("III. Competencia", $datoCompetencias);
    $pdf->mostrarTablaDosFilas("IV. Resultados de aprendizajes", $datoResultados);

    $pdf->saltarLinea();
    $pdf->contenidos($datoContenido);
    $pdf->evaluacion($datoEvaluacion);

    $pdf->mostrarTablaDosFilas("VII. REFERENCIAS BIBLIOGRAFICAS", $datoBibliografia);
    $pdf->Output("silabo" . $_SESSION['datoInformativo']['codAsignatura'] . ".pdf", "D");
    //$pdf->Output();
}

/* ============= EJECUCION DEL ALGORITMO ============= */
session_start();
main(
    $_SESSION['datoInformativo'],
    $_SESSION['datoSumilla'],
    $_SESSION['datoCompetencia'],
    $_SESSION['datoResultados'],
    $_SESSION['datoContenido'],
    $_SESSION['datoEvaluacion'],
    $_SESSION['dataBibliografia']
);
