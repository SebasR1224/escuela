<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once (ROOT . '/escuela/app/Models/UserModel.php');
require_once LIBS_ROUTE .'Session.php';

    class LoginController extends Controller
    {

    private $model;
    private $session;    

    public function __construct()
    {
        $this->model = new UserModel();
        $this->session = new Session();
    }

    public function signIn($request_params){
        if($this->verify($request_params)){
            return $this->errorMessage("Los campos son obligatorios!!");
        }
        $result = $this->model->sigIn($request_params['value']);

        if(!$result){
            return $this->errorMessage("Datos de inicio de sesión incorrectos");
        }

        if($request_params['password'] != $result['password']){
            return $this->errorMessage("Datos de inicio de sesión incorrectos");
        }
        
        if($result['status'] == 0){
            return $this->errorMessage("Usuario inactivo");
        }

        //Iniciar session;
        $this->session->init();
        $this->session->add('email', $result['email']);
        $this->session->add('username', $result['username']);
        header('location: /escuela/dashboard');

    }
    public function verify($request_params){
        return empty($request_params['value']) OR empty($request_params['password']);
    }

    public function errorMessage($message){
        $params = array("error" => $message);
        $this->render(__CLASS__, $params);
    }

    public function exec()
    {
        $this->render(__CLASS__);
    }

    }
?>