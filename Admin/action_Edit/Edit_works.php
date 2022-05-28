<?php
        if(isset($_POST['submit'])){

                require_once('../database/work.php');

                $Work = new Work();

                $Work->setWork_id($_POST['id']);

                echo $_POST['id'];

                $get_Work =  $Work->getwork('id');

                    if($get_Work){

                        $Work->setTitle_work_en($_POST['Title_work_en']);

                        $Work->setTitle_work_ar($_POST['Title_work_ar']);

                        $Work->setTitle_work_fr($_POST['Title_work_fr']);

                        $Work->setCatagory_id('1');

                        $Work->setImage_work('IMG-Defult-Male.jpg');
                        
                        $Work->Edit_work();

                    }else{


                    }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>