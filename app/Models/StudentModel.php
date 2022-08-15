<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class StudentModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_all(){
            $query = "SELECT * FROM students";
            $request = $this->select_all($query);
            return $request;
        }

        public function get($id){
            $query = "SELECT * FROM students WHERE id=$id";
            $request = $this->select($query);
            return $request;
        }

        public function getClassroom(){
            $query = "SELECT * FROM classrooms";
            $request = $this->select_all($query);
            return $request;
        }

        public function getClassroomStudent($id_student){
            $query = "SELECT * FROM classroom_student WHERE id_student=$id_student";
            $request = $this->select_all($query);
            return $request;
        }

        public function insertStudent($request_params){
            $query = "INSERT INTO students(dni, dniType, name, lastName, gender, status) VALUES (?,?,?,?,?,?)";
            $data = array($request_params['dni'], $request_params['dniType'], $request_params['name'], $request_params['lastName'], $request_params['gender'], $request_params['status']);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function insertStudentClass($roomCode, $id_student){
            $query = "INSERT INTO classroom_student(id_classroom, id_student) VALUES (?,?)";
            $data = array($roomCode, $id_student);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function updateStudent($request_params){
            $query = "UPDATE students set dni=?, dniType=?, name=?, lastName=?, gender=?, status=? WHERE id={$request_params['id']}";
            $data = array($request_params['dni'], $request_params['dniType'], $request_params['name'], $request_params['lastName'], $request_params['gender'], $request_params['status']);
            $request = $this->update($query, $data);
            return $request;
        }

        public function deleteStudent($id){
            $query = "DELETE FROM students where id=$id";
            $request = $this->delete($query);
            return $request;
        }

        public function deleteStudentClass($id_student){
            $query = "DELETE FROM classroom_student where id_student=$id_student";
            $request = $this->delete($query);
            return $request;
        }

        public function status($id, $estado){
            $query = "UPDATE students set status = $estado where id=$id";
            $request = $this->delete($query);
            return $request;
        }

    }
?>