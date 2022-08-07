<?php
defined('BASE_PATH') or exit('No se permite acceso directo');

//uri
define('URI', $_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

//Zona horaria
date_default_timezone_set('America/Bogota');

//Rutas
const PROYECT_NAME = "Escuela";
const FOLDER_PATH = "/escuela";
define('ROOT', $_SERVER['DOCUMENT_ROOT']); 
const PATH_CONTROLLERS = "app/Controllers/";    
const PATH_VIEWS = "escuela/app/Views/";
const HELPER_PATH = "system/helpers/";
define('LIBS_ROUTE', ROOT . FOLDER_PATH . '/system/libs/');


//conexion a la base de datos;
const DB_HOST = "localhost";    
const DB_USER = "root";    
const DB_PASSWORD = "";
const DB_NAME = "escuela";
const DB_CHARSET = "charset=utf8";


//Core
const CORE = "system/core/";
define('DEFAULT_CONTROLLER', 'Home');

//Control de errores
const ERROR_REPORTING_LEVEL = -1;

?>