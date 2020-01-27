<?php

namespace Core\Model;

use Core\Database\Database;

class Model{

    protected $db;
    protected $table;

    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $className = end($parts);
            $this->table = strtolower(str_replace('Model', '', $className)); 
        }
    }

    public function query($statement, $one = false){
        return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
    }
    public function queryOneBy($statement, $one = true){
        return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
    }
}