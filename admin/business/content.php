<?php

class content{

    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    //theme content

    public function getTheme(){
        $sql = "SELECT * FROM theme";
        $result = $this->db->query($sql);
        return $result;

    }

    public function updateTheme($y_theme, $y_confession, $m_theme, $m_confession, $id){
        try{

            $sql = "UPDATE theme SET m_theme = :mtheme, m_confession = :mconfession, y_theme = :ytheme, y_confession = :yconfession 
            WHERE theme_id = :id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':ytheme',$y_theme);
            $stmt->bindparam(':yconfession',$y_confession);
            $stmt->bindparam(':mtheme',$m_theme);
            $stmt->bindparam(':mconfession',$m_confession);
            $stmt->bindparam(':id',$id);

            //execute
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }

    //social media links

    public function getLinks(){
        $sql = "SELECT * FROM social_media_links";
        $result = $this->db->query($sql);
        return $result;

    }

    public function UpdateLinks($youtube, $facebook, $twitter, $instagram, $id){
        try{

            $sql = "UPDATE social_media_links SET youtube = :utube, facebook = :fb, twitter = :tw, instagram = :ins 
            WHERE social_id = :id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':utube',$youtube);
            $stmt->bindparam(':fb',$facebook);
            $stmt->bindparam(':tw',$twitter);
            $stmt->bindparam(':ins',$instagram);
            $stmt->bindparam(':id',$id);

            //execute
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }


    //posting sermons

    public function postSermon($theme, $verse, $thumbnail, $preacher, $service, $scripture, $link){
        try{

            $sql = "INSERT INTO sermons (theme, verse, thumbnail, preacher, service, scripture, link) VALUES
            (:theme, :verse, :thumbnail, :preacher, :service, :scripture, :link)";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':theme',$theme);
            $stmt->bindparam(':verse',$verse);
            $stmt->bindparam(':preacher',$preacher);
            $stmt->bindparam(':service',$service);
            $stmt->bindparam(':scripture',$scripture);
            $stmt->bindparam(':thumbnail',$thumbnail);
            $stmt->bindparam(':link',$link);

            //execute
            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }

    ///////////////////////////////////

    public function sermonNo(){

        try {
            
            $sql = "SELECT count(*) FROM sermons";
            $num = $this->db->query($sql)->fetchColumn();
            return $num; 
  
          } catch (PDOException $e) {
              echo $e->getMessage();
              return false;
          }

    }

    ///////////////////////////////

   public function getPost(){
        $sql = "SELECT * FROM sermons";
        $result = $this->db->query($sql);
        return $result;

    }

}