<?php
require_once('./controllers/Autoload.php');
$autoload = new Autoload();
$route_=( isset($_GET['r']) ) ? $_GET['r'] :'home' ;
$centroComputo = new Router($route_);
$a=new UserModels();