<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    abstract class Controller
    {
        private $view;

        protected function render($controler = '', $paramas = array())
        {
            $this->view = new View($controler, $paramas);
        }

        abstract public function exec();
    }
?>