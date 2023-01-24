<?php
if (
    $_POST["r"] == "silabos-eliminar"
    &&  !isset($_POST["crud"])
) {
    print('
        <div class="container text-center ">
            <h1 class="text-color-white">Eliminar silabo</h1>
            <div class="row heightVacio">
                <form method="POST">
                    <input type="hidden" name="r" value="silabos-eliminar">
                    <input type="hidden" name="crud" value="set">
                    <input type="hidden" name="idAsignatura" value="' . $_POST['idAsignatura'] . '">
                    <input type="hidden" name="grupo" value="' . $_POST['grupo'] . '">
                    <hr>
                    <input class="btn btn-md btn-danger" type="submit" value="Si">
                </form>
                <a href="./"><button class="btn btn-md btn-primary">No</button></a>
            </div>
        ');
} else if (
    $_POST['r'] == 'silabos-eliminar'
    && $_POST['crud'] == 'set'
) {
    $ubicacion = "./cache/silabos/silabo" . $_POST['idAsignatura'] . ".pdf";
    unlink($ubicacion);
    $silaboController = new SilaboController();
    $silaboController->eliminarSilabo($_POST['idAsignatura'], $_POST['grupo']);
    echo "<p class='text-center text-color-white fs-1'>Eliminado exitosamente</p>
            <p class='text-center text-color-white fs-3'>Espere un momento...</p>
            <div class='container text-center heightVacio'>
                <script>
                    window.onload = function(){
                        reloadPage('silabos')
                    }
                </script>
            </div>";
} else {
    //Recurso no autorizado
    $controller = new ViewController();
    $controller->load_view('error401');
}
