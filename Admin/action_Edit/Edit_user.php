<?php
        if(isset($_POST['submit'])){

                require_once('../database/users.php');

                $user = new users();

                $user->setUserId($_POST['id']);

                $get_user =  $user->get_users('id');

                    if($get_user){

                        $user->setUserName($_POST['username']);

                        $user->setUserEmail($_POST['email']);

                        $user->setUserPassword($_POST['Password']);
                        
                        $user->Edit_user();

                        header('location:../form-basic.php?do=Edit&id='.$_POST['id']);

                        exit();

                    }else{


                    }
        }else{
                header('location:../blogs.php');

                exit();
        }


?>