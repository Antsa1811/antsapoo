<?php
namespace Core\Database;

class QueryBuilder{

    private $select =[];
    private $conditions =[];
    private $fields =[];

    public function select(){

        $this->fields = func_get_args();   
         return $this;
        
    }

    public function where(){

        foreach (func_get_args() as $arg ){
            $this->conditions[] =$arg;
        }
       
        return $this;
        
    } 

    public function from($table,$alias = null){
        if(is_null($alias)){
            $this->fields[] = $table;
        }else{
            $this->fields[] = "$table AS $alias";
        }

      return $this;
    }

    public function __ToString(){
            return 'SELECT ' . implode(', ', $this->select) . ' FROM ' . implode(', ', $this->fields) .' WHERE ' . implode(' AND ', $this->conditions);
    }



}