<?php
$templateDocente='
<div class="container min-vh-100 text-center">
    <div class="row">
        <h1 class="text-color-white mb-5 mt-4">Editar datos personales</h1>
        <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-4">Atras</button></a>
        <hr>
        
        <div class="col-md-12 col-lg-6">
            <img src="./public/img/logo-datosPersonales.png" width="350px">
        </div>
        <div class="col-md-12 col-lg-6">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre"
                            aria-describedby="emailHelp" placeholder="'.$_SESSION['nombreCompleto'].'">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Edad </label>
                    <input type="number"
                        class="form-control"
                        id="nombre" aria-describedby="emailHelp" placeholder="41">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Correo docente</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="docente@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Urb. Santa cruz M-12">
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>
';
function regionCompleto($regimen){
    return $regimen=='T' ? "Tiempo completo" : "Medio tiempo";
}
print $templateDocente;


