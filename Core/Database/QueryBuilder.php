<?php

namespace Core\Database;

class QueryBuilder{

    private $select = array();
    private $from = array();
    private $where = array();

    public function select(){
        $this->select = func_get_args();
        return $this;
    }

    public function from($table, $alias = null){

            if (is_null($alias)) {
                $this->from = [$table];
            } else {
                $this->from = ["$table AS $alias"];
            }
        return $this;
    }

    public function where(){
        foreach (func_get_args() as $arg) {
            $this->where = $arg;
        }
        return $this;
    }

    public function __toString(){
        return 'SELECT ' . implode(', ', $this->select) . ' FROM ' . implode(', ', $this->from) ;
    }
}