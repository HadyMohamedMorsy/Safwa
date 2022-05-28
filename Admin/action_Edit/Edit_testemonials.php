<?php
        if(isset($_POST['submit'])){

                require_once('../database/testemonials.php');

                $test = new Testemonials();

                $test->setTestemonial_id($_POST['id']);


                $get_test =  $test->getTestemonials('id');

                    if($get_test){

                        $test->setCatagory_id('1');

                        $test->setDescription_en($_POST['Description-en']);

                        $test->setDescription_ar($_POST['Description-ar']);

                        $test->setDescription_fr($_POST['Description-fr']);
                        
                        $test->Edit_test();

                        header('location:../testemonials.php?do=Edit&id='.$_POST['id']);

                        exit();

                    }else{


                    }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>