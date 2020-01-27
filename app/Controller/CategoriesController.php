<?php

namespace App\Controller;

use Core\Controller\Controller;

class CategoriesController extends Controller{

    public function __construct(){
        $this->loadModel('Categories');
    }

    public function home(){  
        $categories = $this->model->find();
        return $this->render('global.categories',[
            "categories" => $categories,
        ]);
    }

    public function addCategorie(){
        return $this->render('global.addCategorie',[]);
    }

    public function newCategorie($data){
        $acategories = $this->model->newCategorie($data);
        header("Location: http://".$_SERVER['HTTP_HOST']."?categories");
    }

}