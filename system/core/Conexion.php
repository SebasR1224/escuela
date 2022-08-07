<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class Conexion
    {
        private $conect;
        public function __construct()
        {
            $conection = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_CHARSET;
            try{
                $this->conect = new PDO($conection, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                $this->conect = "connection error";
                echo "ERROR: ". $e->getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }
    }
?>