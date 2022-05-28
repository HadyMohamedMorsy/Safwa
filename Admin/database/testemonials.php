<?php

    require_once('connect.php');

    class Testemonials extends connection{

        private $Testemonial_id;
        private $Catagory_id;
        private $Description_en;
        private $Description_ar;
        private $Description_fr;

        public function setTestemonial_id($Testemonial_id){

            $this->Testemonial_id = $Testemonial_id;

        }

        public function setCatagory_id($Catagory_id){

            $this->Catagory_id = $Catagory_id;

        }

        public function setDescription_en($Description_en){

            $this->Description_en = $Description_en;

        }

        public function setDescription_ar($Description_ar){

            $this->Description_ar = $Description_ar;

        }

        public function setDescription_fr($Description_fr){

            $this->Description_fr = $Description_fr;

        }

        public function getTestemonials($Testemonial_id = null){

            if($Testemonial_id != null){

                $sql = 'SELECT * FROM testemonials WHERE Testemonial_id = "'.$this->Testemonial_id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM testemonials';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }

        }

        public function Edit_test(){

            $sql = 'UPDATE testemonials SET
                Catagory_id = "1",
                Description_en = "'.$this->Description_en.'",
                Description_ar = "'.$this->Description_ar.'",
                Description_fr = "'.$this->Description_fr.'",
                Created_on = "'.date('Y/m/d').'"
                WHERE Testemonial_id = "'.$this->Testemonial_id.'"
            ';
    
            $this->runconnection()->query($sql);
        }

        public function Delete_testemonials(){

            $sql = 'DELETE FROM  testemonials  WHERE Testemonial_id = "'.$this->Testemonial_id.'" ';
    
            $this->runconnection()->query($sql);
        }


        public  function inserttestemonials(){
            
            $sql = 'INSERT INTO testemonials SET
                Catagory_id = "'.$this->Catagory_id.'",
                Description_en = "'.$this->Description_en.'",
                Description_ar = "'.$this->Description_ar.'",
                Description_fr = "'.$this->Description_fr.'",
                Created_on = "'.date('Y/m/d').'"
            ';

            $this->runconnection()->query($sql);

        }



    }

?>