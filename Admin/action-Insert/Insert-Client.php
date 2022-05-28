<?php
        if(isset($_POST['submit'])){

                require_once('../database/Client.php');

                $client = new Clients();

                $client->setName_Client($_POST['name']);

                $client->insertclient();

        }else{
                header('location:../clients.php');

                exit();
        }


?>