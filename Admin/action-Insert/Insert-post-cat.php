<?php
        if(isset($_POST['submit'])){

                require_once('../database/cat-post.php');

                $posts_cat = new catPosts();

                $posts_cat->settitle_cat_en($_POST['cat_post_en']);

                $posts_cat->settitle_cat_ar($_POST['cat_post_ar']);

                $posts_cat->settitle_cat_fr($_POST['cat_post_fr']);

                $posts_cat->insertcatposts('posts_catagory');

        }else{
                header('location:../blogs.php');

                exit();
        }


?>