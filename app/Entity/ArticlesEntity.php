<?php

namespace App\Entity;

use Core\Entity\Entity;

class ArticlesEntity extends Entity{

    public $title;

    public $content;

    public $date;

    public $categorie_id;

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function setExtrait(){
        //...
    }
    public function url(){
        //...
    }

}