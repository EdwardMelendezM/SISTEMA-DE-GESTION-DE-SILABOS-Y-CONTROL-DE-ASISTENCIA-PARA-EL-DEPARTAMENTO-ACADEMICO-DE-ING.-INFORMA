<?php
class Router
{
    public $route;
    public function __construct($route)
    {
        $session_options = array(
            'use_only_cookies' => 1,
            //'auto_start'=>1,
            'read_and_close' => false
        );

        if (!isset($_SESSION)) session_start($session_options);

        if (!isset($_SESSION['ok'])) $_SESSION['ok'] = false;

        if ($_SESSION['ok']) {
            $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';
            $controller = new ViewController();
            switch ($this->route) {
                case 'home':
                    $controller->load_view('home');
                    break;
                case 'datosPersonales':
                    if (!isset($_POST['r'])) $controller->load_view('datosPersonales');
                    else if ($_POST['r'] == 'datosPersonales-editar') $controller->load_view('movieserie-add');
                    break;
                case 'manualSistema':
                    if (!isset($_POST['r'])) $controller->load_view('manualSistema');
                    else if ($_POST['r'] == 'user-add') $controller->load_view('user-add');
                    else if ($_POST['r'] == 'user-edit') $controller->load_view('user-edit');
                    else if ($_POST['r'] == 'user-delete') $controller->load_view('user-delete');
                    break;
                case 'descargarRegistros':
                    if (!isset($_POST['r'])) $controller->load_view('descargarRegistros');
                    else if ($_POST['r'] == 'status-add') $controller->load_view('status-add');
                    else if ($_POST['r'] == 'status-edit') $controller->load_view('status-edit');
                    else if ($_POST['r'] == 'status-delete') $controller->load_view('status-delete');
                    break;
                case 'opcionesCargaAcademica':
                    if (!isset($_POST['r'])) $controller->load_view('opcionesCargaAcademica');
                    else if ($_POST['r'] == 'opcionesCargaAcademica-subir') $controller->load_view('opcionesCargaAcademica-subir');
                    else if ($_POST['r'] == 'opcionesCargaAcademica-eliminar') $controller->load_view('opcionesCargaAcademica-eliminar');
                    break;
                case 'seguimientoSilabos':
                    if (!isset($_POST['r'])) $controller->load_view('seguimientoSilabos');
                    break;
                case 'silabos':
                    if (!isset($_POST['r'])) $controller->load_view('silabos');
                    else if ($_POST['r'] == 'silabos-subir') $controller->load_view('silabos-subir');
                    else if ($_POST['r'] == 'silabos-eliminar') $controller->load_view('silabos-eliminar');
                    break;
                case 'datosPersonales-editar':
                    if (!isset($_POST['r'])) $controller->load_view('datosPersonales-editar');
                    break;
                case 'asistencia':
                    if (!isset($_POST['r'])) $controller->load_view('asistencia');
                    else if ($_POST['r'] == 'asistencia-subir') $controller->load_view('asistencia-subir');
                    break;
                case 'seguimientoAsistenciasDocentes':
                    if (!isset($_POST['r'])) $controller->load_view('seguimientoAsistenciasDocentes');
                    break;
                case 'salir':
                    $user_session = new SessionController();
                    $user_session->logout();
                    break;
                default:
                    $controller->load_view('error404');
                    break;
            }
        } else {
            if (!isset($_POST['user']) && !isset($_POST['pass'])) {
                $login_form = new ViewController();
                $login_form->load_view('login');
            } else {
                $user_session = new SessionController();
                $session = $user_session->login($_POST['user'], $_POST['pass']);
                if (empty($session)) {
                    //echo "Datos incorrectos, ingresar nuevamente";
                    $controller = new ViewController();
                    //$controller->load_view('login');
                    header('Location:./?error=El usuario ' . $_POST['user'] . ' y el password proporcionado no coinciden');
                } else {
                    $_SESSION['ok'] = true;
                    foreach ($session as $row) {
                        $_SESSION['codUsuario'] = $row['codUsuario'];
                        //$_SESSION['nombreDocente'] = $row['nombreDocente'];
                        //$_SESSION['apellidosDocente'] = $row['apellidosDocente'];
                        $_SESSION['contrasena'] = $row['contrasena'];
                        $_SESSION['rangoUsuario'] = $row['rangoUsuario'];
                        if ($_SESSION['rangoUsuario'] != 2) {
                            $user_docente = new DocenteModel();
                            $sessionDocente = $user_docente->getDataDocente($_POST['user'], $_POST['pass']);
                            foreach ($sessionDocente as $row) {
                                $_SESSION["codDocente"] = $row['codUsuario'];
                                $_SESSION["nombreCompleto"] = $row['nombreCompleto'];
                                $_SESSION["categoria"] = $row['categoria'];
                                $_SESSION["regimen"] = $row['regimen'];
                                $_SESSION["correoInstitucional"] = $row['correoInstitucional'];
                            }
                        }
                    };
                    header('Location:./');
                }
            }
        }
    }
    public function __destruct()
    {
        $this;
    }
}
