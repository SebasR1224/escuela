<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');

    class LoginController extends Controller
    {


    public function __construct()
    {

    }

    public function exec()
    {
        $this->render(__CLASS__);
    }

    }
?>