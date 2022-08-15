<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class TeacherModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_all(){
            $query = "SELECT * FROM teachers";
            $request = $this->select_all($query);
            return $request;
        }

        public function get($id){
            $query = "SELECT * FROM teachers WHERE id=$id";
            $request = $this->select($query);
            return $request;
        }

        public function insertTeacher($request_params){
            $query = "INSERT INTO teachers(dni, name, course, status) VALUES (?,?,?,?)";
            $data = array($request_params['dni'], $request_params['name'], $request_params['course'], $request_params['status']);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function updateTeacher($request_params){
            $query = "UPDATE teachers set dni=?, name=?, course=?, status=? WHERE id={$request_params['id']}";
            $data = array($request_params['dni'], $request_params['name'], $request_params['course'], $request_params['status']);
            $request = $this->update($query, $data);
            return $request;
        }

        public function deleteTeacher($id){
            $query = "DELETE FROM teachers where id=$id";
            $request = $this->delete($query);
            return $request;
        }

        public function status($id, $estado){
            $query = "UPDATE teachers set status = $estado where id=$id";
            $request = $this->delete($query);
            return $request;
        }

    }
?>