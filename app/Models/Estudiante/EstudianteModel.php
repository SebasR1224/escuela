<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class EstudianteModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getEstudiantes(){
            $query = "SELECT * FROM estudiantes";
            $request = $this->select_all($query);
            return $request;
        }

        public function getEstudiante($id){
            $query = "SELECT * FROM estudiantes WHERE id=$id";
        }

        public function setEstudiante(string $dni, string $nombre, string $apellido, int $telefono, string $email, string $password, int $estado){
            $query = "INSERT INTO estudiantes(dni, nombre, apellido, telefono, email, password, estado) VALUES (?,?,?,?,?,?,?)";
            $data = array($dni, $nombre, $apellido, $telefono, $email, $password, $estado);
            $request = $this->insert($query, $data);
            return $request;
        }

        public function updateEstudiante(int $id, string $dni, string $nombre, string $apellido, int $telefono, string $email, string $password, int $estado){
            $query = "UPDATE estudiantes set dni=?, nombre=?, apellido=?, telefono=?, email=?, password=?, estado=? WHERE id=$id";
            $data = array($dni, $nombre, $apellido, $telefono, $email, $password, $estado);
            $request = $this->update($query, $data);
            return $request;
        }

        public function deleteEstudiante($id){
            $query = "DELETE FROM estudiantes where id=$id";
            $request = $this->delete($query);
            return $request;
        }

    }
?>