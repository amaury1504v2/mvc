<?php

namespace App\Controller;

use Core\Controller\Controller;

class ArticlesDetailController extends Controller{

    public function __construct(){
        $this->loadModel('Articles');
    }

    public function home($id){  
        $articleSingle = $this->model->detail($id);
        return $this->render('global.detail',[
            "articleSingle" => $articleSingle
        ]);
    }
}