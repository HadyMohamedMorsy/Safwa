<?php

    require_once('posts.php');

    class news extends Posts{

        public function get_news($new_id = null){

            if($post_id != null){
    
                $sql = 'SELECT * FROM news WHERE id = "'.$this->id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM news';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }
    
    
        }
    
        public function Insertnews(){
    
            $sql = 'INSERT INTO  news SET
                Catagory_id = "'.$this->catagort_id.'",
                User_id = "'.$this->User_id.'",
                Thumbnail = ".IMG-Defult-Male.jpg",
                title_en = "'.$this->title_en.'",
                title_ar = "'.$this->title_ar.'",
                title_fr = "'.$this->title_fr.'",
                Description_EN = "'.$this->Description_EN.'",
                Description_AR = "'.$this->Description_AR.'",
                Description_Fr = "'.$this->Description_Fr.'",
                Created_on = "'.date('Y/m/d').'",
                Slug = "slug"
            ';
            
            $this->runconnection()->query($sql);
        }

    }

?>