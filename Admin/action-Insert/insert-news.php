<?php
        if(isset($_POST['submit'])){

                require_once('../database/news.php');

                $posts = new news();

                $posts->setcatagortId(1);

                $posts->setuser_id(1);

                $posts->settitle_en($_POST['title-en']);

                $posts->settitle_ar($_POST['title-ar']);

                $posts->settitle_fr($_POST['title-fr']);

                $posts->setDescription_EN($_POST['post_en']);

                $posts->setDescription_ar($_POST['post_ar']);

                $posts->setDescription_fr($_POST['post_fr']);

                $posts->Insertnews();

        }else{
                header('location:../blogs.php');

                exit();
        }


?>