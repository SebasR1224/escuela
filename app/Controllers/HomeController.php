<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once (ROOT . '/escuela/app/Models/HomeModel.php');


    class HomeController extends Controller
    {
    public $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function exec()
    {
        $this->show();
    }

    public function show()
    {
        $this->render(__CLASS__); 
    }
    }
?>