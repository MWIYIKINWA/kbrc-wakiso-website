<?php

class newsLetter{

    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    
    ///////////////////////////////////////////////////////

    public function insert($email){
        try{

            $sql = "INSERT INTO subscribers (email) VALUES (:email)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':email',$email);
            
            //execute
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }

    /////////////////////////////////////

    public function getAllEmails(){
        try {
            
          $sql = "SELECT * FROM subscribers";
          $result = $this->db->query($sql);
          return $result; 

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //////////////////////////////////////////

    public function subscriberNo(){
        try {
            
            $sql = "SELECT count(*) FROM subscribers";
            $num = $this->db->query($sql)->fetchColumn();
            return $num; 
  
          } catch (PDOException $e) {
              echo $e->getMessage();
              return false;
          }
    }

    //////////////////////////////////////////

    public function sendEmail(){
        
    }
}