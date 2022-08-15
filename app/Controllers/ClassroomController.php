<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/ClassroomModel.php';
require_once LIBS_ROUTE .'Session.php';

    class  ClassroomController extends Controller
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
            $this->model = new ClassroomModel();
        }

        public function exec()
        {
            $this->index();
        }

        public function index($message = '', $message_type = 'success'){
            $classrooms = $this->model->get_all();
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'message_type' => $message_type, 'message' => $message, 'show_list' => true,'classrooms' => $classrooms);
            return $this->render(__CLASS__, $params);
        }

        public function add($message = '', $message_type = 'success')
        {   
            $teachers = $this->model->getTeacher();
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'),'show_form' => true, 'message_type' => $message_type, 'message' => $message, 'teachers'=> $teachers);
            $this->render(__CLASS__, $params);
        }


        public function store($request_params){
            if(!$this->verify($request_params))
                return $this->add('Son necesarios todos los campos', 'warning');
                
            $this->model->insertClassroom($request_params);
            return $this->index('Salon de clases registrado exitosamente');
        }

        public function edit($id)
        {
            $teachers = $this->model->getTeacher();
            $classroom = $this->model->get($id);
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'show_edit' => true, 'classroom' => $classroom, 'teachers'=> $teachers);
            return $this->render(__CLASS__, $params);
        }

        public function update($request_params){
            if(!$this->verify($request_params))
                return $this->index('Son necesarios todos los campos', 'warning');
            
            $result = $this->model->updateClassroom($request_params);
            if(!$result)
                return $this->index("Hubo un error al editar el salon de clases, número {$request_params['roomCode']}", 'warning');

            $this->index("Usuario número {$request_params['roomCode']} actualizado");
        }

        public function status($id){
            $classroom = $this->model->get($id);
            $classroom['status'] == 1 ? $status  = 0 : $status  = 1;

            $this->model->status($id, $status);
            
            $this->index("Usuario número {$id} actualizado");
        }


        private function verify($request_params)
        {
            foreach ($request_params as $param)
            if(empty($param) && !is_numeric($param)) return false;

            return true;
        }

    }
?>