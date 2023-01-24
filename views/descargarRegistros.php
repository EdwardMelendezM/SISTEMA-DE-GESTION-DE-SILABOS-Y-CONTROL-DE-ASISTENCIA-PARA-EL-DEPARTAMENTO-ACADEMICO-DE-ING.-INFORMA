<?php
$templateDirector='
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-5 mt-4">Registros</h1>

        <hr>
        <p class="text-color-white-alpha">Descargar asistencia de docentes</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-primary mb-5">Asistencia de docentes</button></a>

        <hr>
        <p class="text-color-white-alpha">Descargar registro de silabos</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-primary mb-5">Registro de silabos</button></a>
        
        <hr>
        <p class="text-color-white-alpha">Descargar asistencia de alumnos</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-primary">Asistencia de alumnos</button></a>

    </div>
</div>';

$templateDocente='
<div class="container min-vh-100 text-center">
    <div class="row">
    <h1 class="text-color-white mb-5 mt-4">Registros</h1>
    <hr>
    <p class="text-color-white-alpha">Descargar asistencia de docente</p>
    <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-primary mb-5">Asistencia de docente</button></a>

    <hr>
    <p class="text-color-white-alpha">Descargar registro de irregularidades</p>
    <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-primary">Registro de irregularidades</button></a>
    </div>
</div>';

if($_SESSION['rangoUsuario']=="0"){
    print $templateDocente;
}
else if($_SESSION['rangoUsuario']=="1"){
    print $templateDirector;
}