<?php
    require_once('connect.php');
    class Work extends connection{

        private $Work_id;
        private $Title_work_en;
        private $Title_work_ar;
        private $Title_work_fr;
        private $Catagory_id;
        private $Image_work;

        public function setWork_id($Work_id){

            $this->Work_id  = $Work_id;
        }

        public function setTitle_work_en($Title_work_en){

            $this->Title_work_en = $Title_work_en;
        }

        public function setTitle_work_ar($Title_work_ar){

            $this->Title_work_ar = $Title_work_ar;
        }


        public function setTitle_work_fr($Title_work_fr){

            $this->Title_work_fr = $Title_work_fr;
        }

        public function setCatagory_id($Catagory_id){

            $this->Catagory_id = $Catagory_id;
        }

        public function setImage_work($Image_work){

            $this->Image_work = $Image_work;
        }

        public function getwork($word_id = null){

            if($word_id != null){

                $sql = 'SELECT * FROM works WHERE Work_id = "'.$this->Work_id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM works';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }

        }

        public function Edit_work(){

            $sql = 'UPDATE works SET
                Title_work_en = "'.$this->Title_work_en.'",
                Title_work_ar = "'.$this->Title_work_ar.'",
                Title_work_fr = "'.$this->Title_work_fr.'",
                Catagory_id = "'.$this->Catagory_id.'",
                Image_work = "'.$this->Image_work.'",
                Created_on = "'.date('Y/m/d').'"
                WHERE Work_id = "'.$this->Work_id.'"
            ';
    
            $this->runconnection()->query($sql);
        }

        public function Delete_work(){

            $sql = 'DELETE FROM  works  WHERE Work_id = "'.$this->Work_id.'" ';
    
            $this->runconnection()->query($sql);
        }

       public function insertWork(){

                $sql = 'INSERT INTO works SET
                Title_work_en = "'.$this->Title_work_en.'",
                Title_work_ar = "'.$this->Title_work_ar.'",
                Title_work_fr = "'.$this->Title_work_fr.'",
                Catagory_id = "'.$this->Catagory_id.'",
                Image_work = "IMG-Defult-Male.jpg",
                Created_on = "'.date('Y/m/d').'"
            ';

            $this->runconnection()->query($sql);

        }


    }

?>