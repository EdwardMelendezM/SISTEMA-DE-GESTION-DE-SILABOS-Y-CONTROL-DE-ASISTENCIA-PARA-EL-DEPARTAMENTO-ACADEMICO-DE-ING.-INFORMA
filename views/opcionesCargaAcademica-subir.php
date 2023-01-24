<?php
if (
    $_POST["r"] == "opcionesCargaAcademica-subir"
    &&  $_SESSION['rangoUsuario'] == "1"
    &&  !isset($_POST["crud"])
) {
    print('
        <div class="container text-center ">
            <h1 class="text-color-white">Subir Carga Academica</h1>
            <div class="row heightVacio">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="opcionesCargaAcademica-subir">
                    <input type="hidden" name="crud" value="set">
                    <label for="nuestroinput" class="bg-principal btn-editado">Subir carga</label>
                    <input id="nuestroinput" name="cargaAcademica" type="file" class="d-none" />
                    <hr>
                    <input class="btn btn-md btn-success mb-4" type="submit" value="Subir">
                </form>
            </div>
            <a href="javascript: history.go(-1)"><button class="btn btn-md btn-danger mb-2 mt-4">Atras</button></a>
        </div>
        ');
} else if (
    $_POST['r'] == 'opcionesCargaAcademica-subir'
    && $_SESSION['rangoUsuario'] == '1'
    && $_POST['crud'] == 'set'
) {
    //Programar la insersion
    $controlAcademicoController = new ControlAcademicoController();
    //datos del arhivo
    $nombre_archivo = $_FILES['cargaAcademica']['name'];
    $tipo_archivo = $_FILES['cargaAcademica']['type'];
    $tamano_archivo = $_FILES['cargaAcademica']['size'];

    //compruebo si las características del archivo son las que deseo
    if (!((strpos($tipo_archivo, "csv") ))) {
        echo "
            <p class='fs-2 text-color-white text-center bg-danger'>La extension del archivo es incorrecta.</p>
            <hr>
            <div class='container text-center'>
                <a href='./'><button class='btn btn-md btn-danger mb-2 mt-4'>Atras</button></a>
            </div>
            ";
    } else {
        if (move_uploaded_file($_FILES['cargaAcademica']['tmp_name'],"./cache/".$nombre_archivo)) {
            sleep(2);
            $valor=$controlAcademicoController->cargarCargaAcademica("./cache/".$nombre_archivo);
            echo "<p class='text-center text-color-white fs-2'>El archivo ha sido cargado correctamente</p>
            <p class='text-center text-color-white fs-3'>Espere un momento...</p>
            <div class='container text-center heightVacio'>
                <script>
                    window.onload = function(){
                        reloadPage('opcionesCargaAcademica')
                    }
                </script>
            </div>";

        } else {
            echo "<p class='text-center text-color-white'>Ocurrió algún error al subir el fichero. No pudo guardarse</p>
            <div class='container text-center heightVacio'>
                <script>
                    window.onload = function(){
                        reloadPage('opcionesCargaAcademica')
                    }
                </script>
            </div>";
        }
    }
    // $user = $users_controller->set($new_user);
    // $template = '
    //     <div class="container">
    //         <p class="item add">Usuario <b>%s</b> salvado</p>
    //     </div>
    //     <script>
    //         window.onload = function(){
    //             reloadPage("users")
    //         }
    //     </script>
    // ';
    // printf($template, $_POST['user']);
} else {
    //Recurso no autorizado
    $controller = new ViewController();
    $controller->load_view('error401');
}
