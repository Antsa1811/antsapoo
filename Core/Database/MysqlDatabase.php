<?php
/**
 *Class pour le database 
 */

namespace Core\Database;
use PDO;

class MysqlDatabase extends Database{
    
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    
    /**
     * function pour construire la conexion pdo
     * @param type $db_name
     * @param type $db_user
     * @param type $db_pass
     * @param type $db_host
     */
    public function __construct($db_name,$db_user="root",$db_pass="",$db_host="localhost") {
        
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
        
    }
    
    /**
     * class pour generer PDO
     */
    
    private function getPDO(){
        
        if($this->pdo === null){
            $pdo= new PDO('mysql:dbname=poo;host=localhost','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo =$pdo;
        }
        
        return $this->pdo;
        
    }
    
    /**
     * function query pour execute une requete SQL
     * @param type $statement
     * @return type $datas
     */
    public function query($statement,$class_name = null, $one=false){
          $req = $this->getPDO()->query($statement);
          if(strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0 ){
             return $req;
         }

          if($class_name === null){
              $req->setFetchMode(PDO::FETCH_OBJ);
          }else{
            $req->setFetchMode(PDO::FETCH_CLASS,$class_name);
          }       
          
         if($one){
            $datas=$req->fetch();
        }else    
        {
            $datas=$req->fetchAll();
        }
          
          return $datas;
    }
    
    /**
     * Function pour insertion des donnees
     * @param type $statement
     * @return type
     */
    public  function insert($statement){
        $req =$this->getPDO()->exec($statement);
        
        return $req;
    }
    
    
    public function prepare($statement,$attribut,$class_name=null, $one = false){
        
        $req =$this->getPDO()->prepare($statement);
        $res = $req->execute($attribut);
      
         if(strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0 ){
             return $res;
         }
         
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else{
          $req->setFetchMode(PDO::FETCH_CLASS,$class_name);
        }

        
        if($one){
            $datas=$req->fetch();
        }else    
        {
            $datas=$req->fetchAll();
        }
       
        return $datas;
        
    }

    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }
    
    
}