<?php

    require_once('connect.php');

    class catPosts extends connection{

        private $id;
        private $title_cat_en;
        private $title_cat_ar;
        private $title_cat_fr;

        public function setpostid($id){

            $this->id = $id;
        }

        public function settitle_cat_en($title_cat_en){

            $this->title_cat_en = $title_cat_en;
        }

        public function settitle_cat_ar($title_cat_ar){

            $this->title_cat_ar = $title_cat_ar;
        }

        public function settitle_cat_fr($title_cat_fr){

            $this->title_cat_fr = $title_cat_fr;
        }

        public function insertcatposts($table){

                $sql = 'INSERT INTO '.$table.' SET
                title_cat_en = "'.$this->title_cat_en.'",
                title_cat_ar = "'.$this->title_cat_ar.'",
                title_cat_fr = "'.$this->title_cat_fr.'",
                Created_on = "'.date('Y/m/d').'"
            ';

            $this->runconnection()->query($sql);

        }

        public function Edit_post($table){
            $sql = 'UPDATE '.$table.' SET
                title_cat_en = "'.$this->title_cat_en.'",
                title_cat_ar = "'.$this->title_cat_ar.'",
                title_cat_fr = "'.$this->title_cat_fr.'",
                Created_on = "'.date('Y/m/d').'"
                WHERE post_catagory_id = "'.$this->id.'"
            ';
    
            $this->runconnection()->query($sql);
        }


        public function get_cat($post_id = null , $table){

            if($post_id != null){
    
                $sql = 'SELECT * FROM '.$table.' WHERE post_catagory_id = "'.$this->id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM '.$table.' ';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }
    
    
        }


    }

?>