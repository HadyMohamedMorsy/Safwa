<?php

class connection {

        public $db = null;

        public function runconnection(){

            $conn = new mysqli('localhost' , 'root' ,'' , 'safwa');

            return $conn;

        }

    }
?>