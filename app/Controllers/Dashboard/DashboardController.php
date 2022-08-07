<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once LIBS_ROUTE .'Session.php';

    class  DashboardController extends Controller
    {
    private $session;

    public function __construct()
    {
        $this->session = new Session();
        $this->session->init();
        if($this->session->getStatus() === 1 || empty($this->session->get('email'))){
            header('location: /escuela/login');
        }
    }

    public function exec()
    {
        $this->render(__CLASS__);
    }

    public function logout()
    {
        $this->session->close();
        header('location: /escuela/login');
    }

    }
?>