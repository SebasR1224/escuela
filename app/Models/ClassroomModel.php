<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class ClassroomModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_all(){
            $query = "SELECT classrooms.roomCode, classrooms.ability, classrooms.id_teacher, classrooms.status, teachers.name as teacher FROM classrooms JOIN teachers on teachers.id = classrooms.id_teacher";
            $request = $this->select_all($query);
            return $request;
        }

        public function get($id){
            $query = "SELECT * FROM classrooms WHERE roomCode='$id'";
            $request = $this->select($query);
            return $request;
        }

        public function getTeacher(){
            $query = "SELECT * FROM teachers";
            $request = $this->select_all($query);
            return $request;
        }

        public function insertClassroom($params_request){
            $query = "INSERT INTO classrooms(roomCode, ability, id_teacher, status) VALUES (?,?,?,?)";
            $data = array($params_request['roomCode'], $params_request['ability'], $params_request['id_teacher'], $params_request['status']);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function updateClassroom($params_request){
            $query = "UPDATE classrooms set ability=?, id_teacher=?, status=? WHERE roomCode='{$params_request['roomCode']}'";
            $data = array($params_request['ability'], $params_request['id_teacher'], $params_request['status']);
            $request = $this->update($query, $data);
            return $request;
        }

        public function deleteStudent($id){
            $query = "DELETE FROM classrooms where roomCode='$id'";
            $request = $this->delete($query);
            return $request;
        }

        public function status($id, $estado){
            $query = "UPDATE classrooms set status = $estado where roomCode='$id'";
            $request = $this->delete($query);
            return $request;
        }
    }
?>