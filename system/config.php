<?php
    defined("BASE_PATH") or exit("No se permite acceso directo");

    //uri
    define("URI", $_SERVER["REQUEST_URI"]);
    define("REQUEST_METHOD", $_SERVER["REQUEST_METHOD"]);

    //Zona horaria
    date_default_timezone_set("America/Bogota");

    //Rutas
    define("FOLDER_PATH", "/escuela");
    define("FOLDER_MEDIA", FOLDER_PATH."/Assets");
    define("ROOT", $_SERVER["DOCUMENT_ROOT"]); 
    define("PATH_CONTROLLERS", "app/Controllers/");
    define("PATH_VIEWS", "escuela/app/Views/");
    define("HELPER_PATH", "system/helpers/");
    define("LIBS_ROUTE", ROOT . FOLDER_PATH . "/system/libs/");

    //conexion a la base de datos;
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "escuela");
    define("DB_CHARSET", "charset=utf8");

    //Core
    define("CORE", "system/core/");
    define("DEFAULT_CONTROLLER", "Home");

    //Control de errores
    define("ERROR_REPORTING_LEVEL", -1);
