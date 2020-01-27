<?php

namespace Core\Controller;

use App\App;

class Controller{

    public $model;

    public $default = 'default';
    
    protected function loadModel($modelName){
        
        $this->model = App::getInstance()->getTable($modelName);
    }
    public function render($view, $values){
       
        ob_start();
        extract($values);
        $this->viewPath = str_replace(".", "/", $view);
        require ROOT . '/app/view/' . $this->viewPath .'.php';
        $content = ob_get_clean();

        require ROOT . '/app/view/' . $this->default .'.php';
    }
}