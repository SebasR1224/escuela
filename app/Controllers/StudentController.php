<?php 
defined('BASE_PATH') or exit('No se permite acceso directo');
require_once ROOT . FOLDER_PATH .'/app/models/StudentModel.php';
require_once LIBS_ROUTE .'Session.php';

    class  StudentController extends Controller
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
            $this->model = new StudentModel();
        }

        public function exec()
        {
            $this->index();
        }

        public function index($message = '', $message_type = 'success'){
            $students = $this->model->get_all();
            $studentsClassrooms =[];

            for($i = 0; $i<count($students); $i++){
                $classrooms = $this->model->getClassroomStudent($students[$i]['id']);
                array_push($studentsClassrooms, (array_merge($students[$i], array('classroom' => $classrooms))));
            }
            
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'message_type' => $message_type, 'message' => $message, 'show_list' => true,'students' => $studentsClassrooms);
            return $this->render(__CLASS__, $params);
        }

        public function add($message = '', $message_type = 'success')
        {   
            $classrooms = $this->model->getClassroom();
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'),'show_form' => true, 'message_type' => $message_type, 'message' => $message, 'classrooms'=>$classrooms);
            $this->render(__CLASS__, $params);
        }


        public function store($request_params){
            if(!$this->verify($request_params))
                return $this->add('Son necesarios todos los campos', 'warning');
            
            $result = $this->model->insertStudent($request_params);
            if($result == 0)
                return $this->add('Hubo un error al registrar el estudiante', 'danger');
            
            foreach($request_params["classroom"] as $classroom){
                $resultClassroom = $this->model->insertStudentClass($classroom, $result);

                if($resultClassroom == 0)
                    return $this->add('Hubo un error al asosiar una clase al estudiante', 'danger');
            }
            
            $this->index('Estudiante registrado exitosamente');

        }

        public function edit($id)
        {
            $classroomsCodeStudent = [];
            $classrooms = $this->model->getClassroom();
            $student = $this->model->get($id);
            $classroomsStudent = $this->model->getClassroomStudent($id);

            foreach($classroomsStudent as $classroom){
                array_push($classroomsCodeStudent,  $classroom['id_classroom']);
            }
            $params = array('username'=> $this->session->get('username'), 'email'=> $this->session->get('email'), 'show_edit' => true, 'student' => $student, 'classrooms'=>$classrooms, 'classroomsCodeStudent' => $classroomsCodeStudent);
            return $this->render(__CLASS__, $params);
        }

        public function update($request_params){
            if(!$this->verify($request_params))
                return $this->index('Son necesarios todos los campos', 'warning');
            if(!is_numeric($request_params['id']))
                return $this->index('El id del estudiante debe ser numérico para editar', 'warning');
            
            $result = $this->model->updateStudent($request_params);
            if(!$result)
                return $this->index("Hubo un error al editar el estudiante número {$request_params['id']}", 'warning');

            $this->model->deleteStudentClass($request_params['id']);
            foreach($request_params["classroom"] as $classroom){
                $resultClassroom = $this->model->insertStudentClass($classroom, $request_params['id']);

                if($resultClassroom == 0)
                    return $this->add('Hubo un error al asosiar una clase al estudiante', 'danger');
            }

            $this->index("Estudiante número {$request_params['id']} actualizado");

        }

        public function status($id){
            $student = $this->model->get($id);
            $student['status'] == 1 ? $status  = 0 : $status  = 1;

            $this->model->status($id, $status);
            
            $this->index("Estudiante número {$id} actualizado");
        }


        private function verify($request_params)
        {
            foreach ($request_params as $param)
            if(empty($param) && !is_numeric($param)) return false;

            return true;
        }

    }
?>