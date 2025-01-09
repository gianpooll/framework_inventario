<?php

// Cargamos las librerias
require_once "config/Config.php";

// AutoLoad
spl_autoload_register(function($className){
	require_once 'libs/' . $className . '.php';
});