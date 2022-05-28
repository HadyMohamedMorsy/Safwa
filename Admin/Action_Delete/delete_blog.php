<?php
        if(isset($_GET['id'])){ 

                require_once('../database/posts.php');

                $posts = new Posts();

                $posts->setid($_GET['id']);

                $get_posts =  $posts->get_post('id' , 'posts');

                $posts->Deleteposts('posts');
;

                                // header('location:../datatable_posts.php');

                                // exit();


        }else{
                header('location:../blogs.php');

                exit();
        }


?>