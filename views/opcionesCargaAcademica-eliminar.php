<?php
if (
    $_POST["r"] == "opcionesCargaAcademica-eliminar"
    &&  $_SESSION['rangoUsuario'] == "1"
    &&  !isset($_POST["crud"])
) {
    print('
        <div class="container text-center ">
            <h1 class="text-color-white">Eliminar carga academica</h1>
            <div class="row heightVacio">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="opcionesCargaAcademica-eliminar">
                    <input type="hidden" name="crud" value="set">
                    <hr>
                    <input class="btn btn-md btn-danger" type="submit" value="Si">
                    
                </form>
                <a href="./"><button class="btn btn-md btn-primary">No</button></a>
            </div>
            
            
        </div>
        ');
} else if (
    $_POST['r'] == 'opcionesCargaAcademica-eliminar'
    && $_SESSION['rangoUsuario'] == '1'
    && $_POST['crud'] == 'set'
) {
    $controlAcademicoController = new ControlAcademicoController();
    //Eliminar
    $controlAcademicoController->del();
    echo "<p class='text-center text-color-white'>Ejecutado exitosamente</p>
            <div class='container text-center heightVacio'>
                <script>
                    window.onload = function(){
                        reloadPage('opcionesCargaAcademica')
                    }
                </script>
            </div>";
} else {
    //Recurso no autorizado
    $controller = new ViewController();
    $controller->load_view('error401');
}
