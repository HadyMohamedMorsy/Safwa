<?php
        if(isset($_GET['id'])){

                require_once('../database/team.php');

                $work = new Team();

                $work->setTeam_id($_GET['id']);

                $get_work =  $work->getTeam('id');

                        if($get_work){
                        
                                $work->Delete_team();

                                header('location:../datatable_works.php');

                                exit();

                        }else{


                        }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>