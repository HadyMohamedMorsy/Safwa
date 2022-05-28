<?php
        if(isset($_GET['id'])){

                require_once('../database/work.php');

                $work = new Work();

                $work->setWork_id($_GET['id']);

                $get_work =  $work->getwork('id');

                        if($get_work){
                        
                                $work->Delete_work();

                                header('location:../datatable_works.php');

                                exit();

                        }else{


                        }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>