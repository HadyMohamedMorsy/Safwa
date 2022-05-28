<?php

    require_once('connect.php');

    class Clients extends connection{

        private $Clients_id;
        private $Name_Client;
        private $Image_client;
        private $Created_on;

        public function setClients_id($Clients_id){

            $this->Clients_id = $Clients_id;
        }

        public function setName_Client($Name_Client){

            $this->Name_Client = $Name_Client;
        }

        public function setImage_client($Image_client){

            $this->Image_client = $Image_client;
        }

        function insertclient(){

                $sql = 'INSERT INTO clients SET
                Name_Client = "'.$this->Name_Client.'",
                Image_client = "IMG-Defult-Male.jpg",
                Created_on = "'.date('Y/m/d').'"
            ';

            $this->runconnection()->query($sql);

        }


    }

?>