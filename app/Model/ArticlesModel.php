<?php

namespace App\Model;

use Core\Database\QueryBuilder;
use Core\Model\Model;

class ArticlesModel extends Model{

    public function newArticle($data){
        $this->db->prepare("INSERT INTO articles SET title = ?, content = ?, categorie = ?", $data, $this->table);
    }
    
    public function find(){
        $query = new QueryBuilder();
        $query->select('*')
            ->from('Articles');
        return $this->db->query($query);
    }

    public function detail($id){
        $query2 = new QueryBuilder();
        $query2->select('*')
            ->from('Articles')
            ->where("id='1'"); // LE WHERE NE MARCHE PAS DANS LE CORE DU COUP ON FAIT CA EN MODE PORC
        return $this->db->query("SELECT * FROM articles WHERE id=".$id);
    }

    public function deleteArticle($id){
         $this->db->query("DELETE FROM `articles` WHERE id=".$id); //erreur dans le code du sujet mais ma fonction  fonctionne
    }
}