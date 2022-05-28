<?php

    require_once('connect.php');

    class Team extends connection{

        private $Team_id;
        private $name_team;
        private $Description_en;
        private $Description_ar;
        private $Description_fr;
        private $Job_title;
        private $Job_title_ar;
        private $Job_title_fr;

        public function setTeam_id($Team_id){

            $this->Team_id = $Team_id;

        }


        public function setnameTeam($name_team){

            $this->name_team = $name_team;

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

        public function setJob_title($Job_title){

            $this->Job_title = $Job_title;

        }

        public function setJob_title_ar($Job_title_ar){

            $this->Job_title_ar = $Job_title_ar;

        }

        public function setJob_title_fr($Job_title_fr){

            $this->Job_title_fr = $Job_title_fr;

        }

        public function getTeam($team_id = null){

            if($team_id != null){

                $sql = 'SELECT * FROM team WHERE Team_id = "'.$this->Team_id.'"';
    
            }else{
    
                $sql = 'SELECT * FROM team';
    
            }
    
            
            $result =  $this->runconnection()->query($sql);
    
            if($result->num_rows > 0){
    
                return $result; 
    
            }else{
                
                return false;
            }

        }


        public function Edit_team(){

            $sql = 'UPDATE team SET
                name_team = "'.$this->name_team.'",
                Description_en = "'.$this->Description_en.'",
                Description_ar = "'.$this->Description_ar.'",
                Description_fr = "'.$this->Description_fr.'",
                Created_on = "'.date('Y/m/d').'",
                Job_title = "'.$this->Job_title.'",
                Job_title_ar = "'.$this->Job_title_ar.'",
                Job_title_fr = "'.$this->Job_title_fr.'"
                WHERE Team_id = "'.$this->Team_id.'"
            ';
    
            $this->runconnection()->query($sql);
        }


        public function Delete_team(){

            $sql = 'DELETE FROM  team  WHERE Team_id = "'.$this->Team_id.'" ';
    
            $this->runconnection()->query($sql);
        }


        public  function insertteam(){
            
            $sql = 'INSERT INTO team SET
                name_team = "'.$this->name_team.'",
                Description_en = "'.$this->Description_en.'",
                Description_ar = "'.$this->Description_ar.'",
                Description_fr = "'.$this->Description_fr.'",
                Created_on = "'.date('Y/m/d').'",
                Job_title = "'.$this->Job_title.'",
                Job_title_ar = "'.$this->Job_title_ar.'",
                Job_title_fr = "'.$this->Job_title_fr.'"
            ';

            $this->runconnection()->query($sql);

        }



    }

?>