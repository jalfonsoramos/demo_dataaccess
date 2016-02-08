<?php
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    
    class CityRepository extends GenericRepository
    {        
        public function __construct($db)
        {
            parent::__construct($db);
        }
        
        public function getByName($name)
        {
            $query = "select * from city where name like ?";
            return $this->Get($query,Array('%'.$name));
        }
        
        public function getById($id){
            $query = "select * from city where id like ?";
            return $this->Get($query,Array($id));
        }
    }
?>