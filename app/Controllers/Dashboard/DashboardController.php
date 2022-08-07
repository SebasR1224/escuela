<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');

    class  DashboardController extends Controller
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