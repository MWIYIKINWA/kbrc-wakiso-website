<?php

class admin{
    
    //database property
    private $db;

    //constructor to initialize 
    function __construct($con){
       $this->db = $con;
    }

    ///////////////////////////////////////////////////////

    public function insert($username, $email, $password){
        try{

            $sql = "INSERT INTO admins (Name, Email, Password) VALUES (:username, :email, :password)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':username',$username);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':password',$password);

            //execute
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }

    ////////////////////////////////////////////

    public function get(){
        $sql = "SELECT * FROM admins";
        $result = $this->db->query($sql);
        return $result;
    }

    ////////////////////////////////////////////

    public function getById($id){
        $sql = "SELECT * FROM admins WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);

        //execute
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    /////////////////////////////////////////////////

    public function delete($id){
        try {
            $sql = "DELETE FROM admins WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);

            //excecute
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    ///////////////////////////////////////////////
    public function adminNo(){
        try {
            
            $sql = "SELECT count(*) FROM admins";
            $num = $this->db->query($sql)->fetchColumn();
            return $num; 
  
          } catch (PDOException $e) {
              echo $e->getMessage();
              return false;
          }
    }



}




