<?php
        if(isset($_POST['submit'])){

                require_once('../database/cat_post.php');

                $posts_cat = new catPosts();

                $posts_cat->setpostid($_POST['id']);

                $posts_cat->settitle_cat_en($_POST['cat_post_en']);

                $posts_cat->settitle_cat_ar($_POST['cat_post_ar']);

                $posts_cat->settitle_cat_fr($_POST['cat_post_fr']);

                $posts_cat->Edit_post('posts_catagory');

        }else{
                header('location:../blogs.php');

                exit();
        }


?>