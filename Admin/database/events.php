<?php

    require_once('posts.php');

    class Events extends Posts{

        public function get_events($events_id = null){

            if($events_id != null){
    
                $sql = 'SELECT * FROM events WHERE id = "'.$this->id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM events';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }
    
    
        }
    
        public function Insertevents(){
    
            $sql = 'INSERT INTO  events SET
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