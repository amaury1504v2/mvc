<?php

namespace App\Entity;

use Core\Entity\Entity;

class CategoriesEntity extends Entity{

    public $title;
    
    public $description;

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
}