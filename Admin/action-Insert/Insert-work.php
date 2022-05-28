<?php
        if(isset($_POST['submit'])){

                require_once('../database/work.php');

                $Work = new Work();

                $Work->setTitle_work_en($_POST['Title_work_en']);

                $Work->setTitle_work_ar($_POST['Title_work_ar']);

                $Work->setTitle_work_fr($_POST['Title_work_fr']);

                $Work->setCatagory_id(1);

                $Work->insertWork();


        }else{
                header('location:../clients.php');

                exit();
        }


?>