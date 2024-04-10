<?php 

namespace application\core;

class View{

    public $path;  //путь к виду
    public $route;
    public $layout = 'default';  //шаблон





    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'] .'/'. $route['action'];
        //debug($this->path);
    }

    public function render($title, $vars = []){
        if (file_exists('application/views/' . $this->path . '.php')){
            ob_start();
            require 'application/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        } else{
            echo 'Вид ' . $this->path . ' не найден';
        }


    }


    

}