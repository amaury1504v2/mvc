<?php

namespace Core\Entity;

class Entity{

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();

        return $this->$key;
    }

    public function __set($key, $value){
        $this->$key = $value;
    }
}