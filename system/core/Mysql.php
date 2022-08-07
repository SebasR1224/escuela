<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class Mysql extends Conexion
    {
        private $conexion;
        private $query;
        private $values;

        public function __construct()
        {
            $this->conexion = new Conexion();    
            $this->conexion = $this->conexion->conect();
        }

        //insertar un registro
        public function insert(string $query, array  $values){
            $this->query = $query;
            $this->values = $values;
            $insert = $this->conexion->prepare($this->query);
            $result = $insert->execute($this->values);
            if($result)
            {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        //Burcar un registro;
        public function select(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //Burcar todos los registros;
        public function select_all(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        //Actualizar un registro;
        public function update(string $query, array $values){
            $this->query = $query;
            $this->values = $values;
            $update = $this->conexion->prepare($this->query);
            $result = $update->execute($this->values);
            return $result;
        }
        //Eliminar registros
        public function delete(string $query){
            $this->query = $query;
            $result = $this->conexion->prepare($this->query);
            $delete =  $result->execute();
            return $delete;
        }

        public function sigIn(string $email){
            $email = $this->conexion->quote($email);

            $this->query = "SELECT * FROM estudiantes where email={$email}";
            $result = $this->conexion->prepare($this->query);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>