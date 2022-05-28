<?php

    if(isset($_POST['submit'])){

            require_once('../database/testemonials.php');

            $testemonials = new Testemonials();

            $testemonials->setCatagory_id(1);

            $testemonials->setDescription_en($_POST['Description-en']);

            $testemonials->setDescription_ar($_POST['Description-ar']);

            $testemonials->setDescription_fr($_POST['Description-fr']);

            $testemonials->inserttestemonials();

    }else{
            header('location:../clients.php');

            exit();
    }



?>