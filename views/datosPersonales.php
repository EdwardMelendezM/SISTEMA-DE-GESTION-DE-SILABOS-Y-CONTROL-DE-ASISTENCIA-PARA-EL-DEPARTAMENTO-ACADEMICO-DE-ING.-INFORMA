<?php
$templateDocente = '
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-5 mt-4">Datos personales</h1>
        <hr>
        
        <div class="col-md-12 col-lg-6">
            <img src="./public/img/logo-datosPersonales.png" width="350px">
        </div>
        <div class="col-md-12 col-lg-6">
            <br>
            <br>
            <p class="fs-6 text-color-white">Nombre Completo     : <b>' . $_SESSION['nombreCompleto'] . '</b></p>
            <p class="fs-6 text-color-white">Edad                : <b>41</b></p>
            <p class="fs-6 text-color-white">Codigo              : <b>' . $_SESSION["codUsuario"] . '</b></p>
            <p class="fs-6 text-color-white">Correo Institucional: <b>' . $_SESSION["correoInstitucional"] . '</b></p>
            <p class="fs-6 text-color-white">Regimen             : <b>' . regionCompleto($_SESSION["regimen"]) . '</b></p>
            <p class="fs-6 text-color-white">Categoria           : <b>' . $_SESSION["categoria"] . '</b></p>
            <a href="datosPersonales-editar"><button class="btn btn-md btn-success mt-2">Editar datos</button></a>
        </div>
    </div>
</div>
';
function regionCompleto($regimen)
{
    return $regimen == 'T' ? "Tiempo completo" : "Medio tiempo";
}
print $templateDocente;
