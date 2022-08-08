<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once (ROOT . '/escuela/app/Models/Login/LoginModel.php');
require_once LIBS_ROUTE .'Session.php';

    class LoginController extends Controller
    {

    private $model;
    private $session;    

    public function __construct()
    {
        $this->model = new LoginModel();
        $this->session = new Session();
    }

    public function signIn($request_params){
        if($this->verify($request_params)){
            return $this->errorMessage("Los campos son obligatorios!!");
        }
        $result = $this->model->sigIn($request_params['email']);

        if(!$result){
            return $this->errorMessage("Datos de inicio de sesión incorrectos");
        }

        if(!password_verify($request_params['password'], $result['password'])){
            return $this->errorMessage("Datos de inicio de sesión incorrectos");
        }
        if($result['estado'] == 0){
            return $this->errorMessage("Usuario inactivo");
        }

        //Iniciar session;
        $this->session->init();
        $this->session->add('email', $result['email']);
        header('location: /escuela/dashboard');

    }
    public function verify($request_params){
        return empty($request_params['email']) OR empty($request_params['password']);
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