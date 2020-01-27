<?php

namespace Core\Database;

class Database{

    public $dbName;
    public $dbHost;
    public $dbUser;
    public $dbPass;
    public $pdo;

    public function __construct($dbName, $dbHost, $dbUser, $dbPass){

        $this->dbName = $dbName;
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;

        if($this->pdo == null){
            $pdo = new \PDO('mysql:dbname='. $this->dbName .';host='.$this->dbHost, $this->dbUser, $this->dbPass);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;            
        }
    }

    public function query($statement, $className = null, $one = false){
        $result = $this->pdo->query($statement);

        if(is_null($className)){
            $result->setFetchMode(\PDO::FETCH_OBJ);
        } else {
            $result->setFetchMode(\PDO::FETCH_CLASS , $className);

        }

        if ($one){
            return $result->fetch();
        } else {
            return $result->fetchAll();
        }
    }

    public function prepare($statement, $values , $className){
        
        $prepare = $this->pdo->prepare($statement);
        $prepare->setFetchMode(\PDO::FETCH_CLASS , $className);
        $prepare->execute($values);
    }
}