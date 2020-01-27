<?php

namespace App;

use Core\Database\Database;
use Core\Config;

class App{

    private $db;
    private static $_instance;

    public static function load(){
        session_start();
        require ROOT . '/app/Autoload.php';
        Autoload::register();
        require ROOT . '/Core/Autoload.php';
        \Core\Autoload::register();
    }

    public static function getInstance(){
        if(is_null(self::$_instance)) {
            self::$_instance = new App();  
          }

          return self::$_instance;
    }
    public function getTable($modelName){
        $className = '\\App\\Model\\' . ucfirst($modelName) . 'Model';
        return new $className($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . "/settings/settings.php");
        if (is_null($this->db)){
            $this->db = new Database($config->get('dbName'), $config->get('dbHost'), $config->get('dbUser'), $config->get('dbPass'));
        }
        return $this->db;
    }

}