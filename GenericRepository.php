<?php
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    
    class GenericRepository
    {        
        public function __construct($db){
            $this->db = $db;
        }
        
        public function Get($sql,$bindParams){                
                $stmt = $this->db->prepare($sql);
                $stmt->execute($bindParams);
                return $stmt;           
        }
    }
?>