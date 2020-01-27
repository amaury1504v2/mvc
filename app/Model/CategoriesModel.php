<?php

namespace App\Model;

use Core\Database\QueryBuilder;
use Core\Model\Model;

class CategoriesModel extends Model{

    public function newCategorie($data){
        $this->db->prepare("INSERT INTO categories SET title = ?, description = ?", $data, $this->table);
    }

    public function find(){
        $query = new QueryBuilder();
        $query->select('*')
            ->from('Categories');
        return $this->db->query($query);
    }

}