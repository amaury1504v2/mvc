<?php

namespace App\Controller;

use Core\Controller\Controller;
use App\Controller\ArticlesDetailController;
use App\Controller\CategoriesController;

class ArticlesController extends Controller{

    public function __construct(){
        $this->loadModel('Articles');
    }

    public function home(){  
        $articles = $this->model->find();
        return $this->render('global.home',[
            "articles" => $articles,
        ]);
    }

    public function addArticle(){
        return $this->render('global.addArticle',[]);
    }

    public function newArticle($data){
        $articles = $this->model->newArticle($data);
        header("Location: http://".$_SERVER['HTTP_HOST']."?home");
    }

    public function deleteArticle($id){
        $articles = $this->model->deleteArticle($id);
        header("Location: http://".$_SERVER['HTTP_HOST']."?home");
    }
}