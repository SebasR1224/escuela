<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/TeacherModel.php';
require_once LIBS_ROUTE .'Session.php';

    class  TeacherController extends Controller
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
            $this->model = new TeacherModel();
        }

        public function exec()
        {
            $this->index();
        }

        public function index($message = '', $message_type = 'success'){
            $teachers = $this->model->get_all();
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'message_type' => $message_type, 'message' => $message, 'show_list' => true,'teachers' => $teachers);
            return $this->render(__CLASS__, $params);
        }

        public function add($message = '', $message_type = 'success')
        {
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'),'show_form' => true, 'message_type' => $message_type, 'message' => $message);
            $this->render(__CLASS__, $params);
        }


        public function store($request_params){
            if(!$this->verify($request_params))
                return $this->add('Son necesarios todos los campos', 'warning');
            
            $result = $this->model->insertTeacher($request_params);
            if($result == 0)
                return $this->add('Hubo un error al registrar el profesor', 'danger');
            
            return $this->index('Profesor registrado exitosamente');

        }

        public function edit($id)
        {
            $teacher = $this->model->get($id);
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'show_edit' => true, 'teacher' => $teacher);
            return $this->render(__CLASS__, $params);
        }

        public function update($request_params){
            if(!$this->verify($request_params))
                return $this->index('Son necesarios todos los campos', 'warning');
            if(!is_numeric($request_params['id']))
                return $this->index('El id del profesor debe ser numérico para editar', 'warning');
            
            $result = $this->model->updateTeacher($request_params);
            if(!$result)
                return $this->index("Hubo un error al editar el profesor número {$request_params['id']}", 'warning');

            $this->index("Profesor número {$request_params['id']} actualizado");
        }

        public function status($id){
            $teacher = $this->model->get($id);
            $teacher['status'] == 1 ? $status  = 0 : $status  = 1;

            $this->model->status($id, $status);
            
            $this->index("Profesor número {$id} actualizado");
        }


        private function verify($request_params)
        {
            foreach ($request_params as $param)
            if(empty($param) && !is_numeric($param)) return false;

            return true;
        }

    }
?>