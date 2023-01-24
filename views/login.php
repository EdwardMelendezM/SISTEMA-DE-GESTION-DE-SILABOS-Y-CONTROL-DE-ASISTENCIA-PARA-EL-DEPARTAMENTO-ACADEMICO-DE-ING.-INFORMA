<?php
print('
<div class="container contenedor-img" id="contenedor">
    <div id="contenedor1" class="container">
        <div id="contenedorcentrado">
            <div id="login">
                <h1 class="mt-1 text-center">Iniciar Sesion</h1>
                <form id="loginform" method="POST">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario <i class="fa-solid fa-user"></i></label>
                        <input
                            class="form-control"
                            id="usuario"
                            type="text"
                            name="user"
                            placeholder="Ingrese su usuario"
                            aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text">Nunca comparta su contraseña con nadie</div>
                    </div>
                    <div class="mb-3">
    
                        <label for="contraseña" class="form-label">Contraseña <i class="fa-solid fa-lock"></i></label>
                        <input
                            class="form-control"
                            id="contraseña"
                            type="password"
                            placeholder="Ingrese su contraseña"
                            name="pass"
                            required>
                    </div>

                    <div class="campoCaptcha" id="campoCaptcha">
                            <button class="btnCaptcha"  id="btnCaptcha"></button>
                            <p>No soy un robot</p>
                            <img src="./public/img/logo-captcha.png" width="40px">
                    </div>

                    <button id="btnEnviar" class="btn btn-lg btn-success btn-block">Login</button>

                    <div class="error" id="error">');
if (isset($_GET['error'])) {
    echo $_GET['error'];
}
print('
                    </div>
                </form>
                </div>
                    <div id="derecho">
                        <div class="titulo">
                            Bienvenido
                        </div>
                        <hr>
                    <div class="pie-form">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./public/js/login.js"></script>');
