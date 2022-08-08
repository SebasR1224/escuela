<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/Estudiante/EstudianteModel.php';
require_once LIBS_ROUTE .'Session.php';

    class  EstudianteController extends Controller
    {
        private $model;
        private $session;

        public function __construct()
        {
            $this->session = new Session();
            $this->session->init();
            if($this->session->getStatus() === 1 || empty($this->session->get('email'))){
                header('location: /escuela/login');
            }
            $this->model = new EstudianteModel();
        }

        public function exec()
        {
            $this->render(__CLASS__);
        }

        public function index(){
            $response = $this->model->getEstudiantes();
            $data["data"] = $response;

            echo json_encode($data);
        }

        public function store($params){
            $this->model->setEstudiante($params['dni'], $params['nombre'], $params['apellido'], $params['telefono'], $params['correo'], $params['password'], $params['estado']);
        }

        public function changeEstado($params){
            $estado = $params['estado'] == 1 ? 0 : 1;
            $this->model->changeEstado($params['id'], $estado);
        }

    }
?>