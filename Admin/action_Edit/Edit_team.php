<?php
        if(isset($_POST['submit'])){

                require_once('../database/team.php');

                $test = new Team();

                $test->setTeam_id($_POST['id']);


                $get_test =  $test->getTeam('id');

                    if($get_test){

                        $test->setnameTeam($_POST['name-en']);

                        $test->setDescription_en($_POST['Description-en']);

                        $test->setDescription_ar($_POST['Description-ar']);

                        $test->setDescription_fr($_POST['Description-fr']);

                        $test->setJob_title($_POST['Job_title']);
                        
                        $test->setJob_title_ar($_POST['Job_title-ar']);
                        
                        $test->setJob_title_fr($_POST['Job_title-fr']);
                        
                        $test->Edit_team();

                        header('location:../Team.php?do=Edit&id='.$_POST['id']);

                        exit();

                    }else{


                    }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>