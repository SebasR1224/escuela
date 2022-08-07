<?php
    defined('BASE_PATH') or exit('No se permite acceso directo');
    class View
    {
        protected $template;
        protected $controller;
        protected $params;

        public function __construct($controller, $params = array())
        {
            $this->controller = $controller;
            $this->params = $params;
            $this->render();
        }

        protected function render()
        {
            if(class_exists($this->controller)){
                $file_name = str_replace('Controller', '',  $this->controller);
                $this->template = $this->contentTemplate($file_name);
                echo $this->template;
            }else{
                throw new Exception("Error no existe {$this->controller}");
            }
        }

        protected function contentTemplate($file_name)
        {
            $file_path = ROOT . '/' . PATH_VIEWS . "$file_name/$file_name.php";
            if(is_file($file_path)){
                extract($this->params);
                ob_start();
                require_once($file_path);
                $template = ob_get_contents();
                ob_end_clean();
                return $template;
            }
            else{
                throw new Exception("Error no existe {$file_path}");
            }
        }
    }
?>