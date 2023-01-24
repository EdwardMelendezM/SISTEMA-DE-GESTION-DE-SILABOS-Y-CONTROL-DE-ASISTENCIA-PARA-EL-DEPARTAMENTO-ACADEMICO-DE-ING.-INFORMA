<?php
$templateDocente='
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-5 mt-4">Manual de sistema</h1>
        <hr>
        <p class="text-color-white-alpha">Descargar manual de silabo</p>
        <a href="./cache/manuales/manualSilabo.pdf" download>
            <button class="btn btn-md btn-danger mb-5">Manual Silabo</button>
        </a>

        <hr>
        <p class="text-color-white-alpha">Descargar manual de asistencia</p>
        <a href="./cache/manuales/manualSilabo.pdf" download>
            <button class="btn btn-md btn-danger">Manual Asistencia</button>
        </a>
    </div>
</div>
';
$templateDirector='
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-5 mt-4">Manual de sistema</h1>
        <hr>
        <p class="text-color-white-alpha">Descargar manual de silabo</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-danger mb-5">Manual Silabo</button></a>

        <hr>
        <p class="text-color-white-alpha">Descargar manual de asistencia</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-danger mb-5">Manual Asistencia</button></a>

        <hr>
        <p class="text-color-white-alpha">Descargar manual de control academico</p>
        <a href="./cache/manuales/manualSilabo.pdf" download><button class="btn btn-md btn-danger">Manual Control Academico</button></a>
    </div>
</div>
';

if($_SESSION['rangoUsuario']=="0"){
    print $templateDocente;
}
else if($_SESSION['rangoUsuario']=="1"){
    print $templateDirector;
}