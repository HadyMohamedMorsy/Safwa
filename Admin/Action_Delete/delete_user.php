<?php
        if(isset($_GET['id'])){

                require_once('../database/users.php');

                $user = new users();

                $user->setUserId($_GET['id']);

                $get_user =  $user->get_users('id');

                        if($get_user){
                        
                                $user->Delete_user();

                                header('location:../datatable_users.php');

                                exit();

                        }else{


                        }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>