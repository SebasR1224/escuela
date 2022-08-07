<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once (ROOT . '/escuela/app/Models/Home/HomeModel.php');

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
        $params = array('nombre' =>  'Mundo');
        $this->render(__CLASS__, $params); 
    }
    }
?>