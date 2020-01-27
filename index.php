<?php

define('ROOT', __DIR__);
require ROOT . '/app/App.php';

use App\App;
use App\Controller\ArticlesController;
use App\Controller\ArticlesDetailController;

use App\Controller\CategoriesController;

App::load();

if(isset($_GET["home"])){
    $articles = new ArticlesController();
    $articles->home();
}

if(isset($_GET["detail"])){
    $article = new ArticlesDetailController();
    $article->home($_GET["detail"]);
}

if(isset($_GET["addArticle"])){
    $articles = new ArticlesController();
    $articles->addArticle();
}

if(isset($_GET["deleteArticle"])){
    $articles = new ArticlesController();
    $articles->deleteArticle($_GET["deleteArticle"]);
}

if(isset($_GET["title"])&&isset($_GET["categorie"])&&isset($_GET["content"])){
    $articles = new ArticlesController();
    $data = [$_GET["title"],$_GET["content"],$_GET["categorie"]];
    $articles->newArticle($data);
}

if(isset($_GET["categories"])){
    $categories = new CategoriesController();
    $categories->home();
}

if(isset($_GET["addCategorie"])){
    $categories = new CategoriesController();
    $categories->addCategorie();
}

if(isset($_GET["title"])&&isset($_GET["content"])){
    $categories = new CategoriesController();
    $data = [$_GET["title"],$_GET["content"]];
    $categories->newCategorie($data);
}
