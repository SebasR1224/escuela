<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class UserModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function get_all(){
            $query = "SELECT * FROM users";
            $request = $this->select_all($query);
            return $request;
        }

        public function get($id){
            $query = "SELECT * FROM users WHERE id=$id";
            $request = $this->select($query);
            return $request;
        }

        public function insertUser($params_request){
            $query = "INSERT INTO users(username, email, password, status) VALUES (?,?,?,?)";
            $data = array($params_request['username'], $params_request['email'], $params_request['password'], $params_request['status']);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function updateUser($params_request){
            $query = "UPDATE users set username=?, email=?, password=?, status=? WHERE id={$params_request['id']}";
            $data = array($params_request['username'], $params_request['email'], $params_request['password'], $params_request['status']);
            $request = $this->update($query, $data);
            return $request;
        }

        public function deleteStudent($id){
            $query = "DELETE FROM users where id=$id";
            $request = $this->delete($query);
            return $request;
        }

        public function status($id, $estado){
            $query = "UPDATE users set status = $estado where id=$id";
            $request = $this->delete($query);
            return $request;
        }
    }
?>