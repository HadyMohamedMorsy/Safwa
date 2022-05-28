<?php
        if(isset($_POST['submit'])){

                require_once('../database/posts.php');

                $test = new Posts();

                $test->setid($_POST['id']);

                $get_test =  $test->get_post('id' , "news");

                    if($get_test){

                        $test->setcatagortId('1');

                        $test->setuser_id('1');

                        $test->setThumbnail('IMG-Defult-Male.jpg');

                        $test->settitle_en($_POST['title-en']);

                        $test->settitle_ar($_POST['title-ar']);
                        
                        $test->settitle_fr($_POST['title-fr']);
                        
                        $test->setDescription_EN($_POST['post_en']);

                        $test->setDescription_ar($_POST['post_ar']);

                        $test->setDescription_fr($_POST['post_fr']);

                        $test->setslug('slug');
                        
                        $test->Edit_post('news');

                        header('location:../news.php?do=Edit&id='.$_POST['id']);

                        exit();

                        }else{


                        }
                        
                        }else{
                                header('location:../blogs.php');

                                exit();
                        }


?>