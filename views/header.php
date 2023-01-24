<?php
print('
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Operaciones centro de computo para docentes y directores de escuela">
    <link rel="shortcut icon" type="image/png" href="./public/img/logo-info.png">
    <title>Centro de computo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/home.css">
    </head>');
if ($_SESSION['ok'] && $_SESSION['rangoUsuario'] != "2") {
    print('
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-principal">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img class="img-fluid img-logo" src="./public/img/logo-unsaac.png" alt="Logo Unsaac">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="./">
                            <div class="item">
                                <img
                                    class="d-none d-lg-block"
                                    src="./public/img/logo-home.png"
                                    alt="" width="60px">
                                <h4 class="text-center titulo-header pt-1">Home</h4>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="datosPersonales">
                            <div class="item">
                                <img
                                    src="./public/img/logo-perfil.png"
                                    alt="" width="60px"
                                    class="d-none d-lg-block">
                                <h4 class="text-center titulo-header pt-1">Datos</h4>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="manualSistema">
                            <div class="item">
                                <img
                                    src="./public/img/logo-manual.png"
                                    alt="" width="50px"
                                    class="d-none d-lg-block">
                                <h4 class="text-center titulo-header pt-1">Manual</h4>
                            </div>
                        </a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="descargarRegistros">
                            <div class="item">
                                <img
                                    src="./public/img/logo-imprimit.png"
                                    alt="" width="68px"
                                    class="d-none d-lg-block">
                                <h4 class="text-center titulo-header pt-1">Imprimir</h4>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salir">
                            <div class="item">
                                <img
                                    href="./cerrarSesion.php"
                                    src="./public/img/logo-salir.png"
                                    alt="" width="60px"
                                    class="d-none d-lg-block">
                                <h4 class="text-center titulo-header pt-1">Salir</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    ');
}
print '<main class="">

';
