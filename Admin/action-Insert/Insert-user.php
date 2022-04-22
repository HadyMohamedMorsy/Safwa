<?php 	


    if(isset($_POST['submit'])){

        require_once('../database/users.php');

        $Adduser = new users();

        $Adduser->setUserName($_POST['username']);

        $Adduser->setUserEmail($_POST['email']);

        $Adduser->setUserPassword($_POST['Password']);

        $Adduser->InsertUser();

        
        header('location:../form-basic.php');

        exit();

        
    }else{

        header('location:../form-basic.php');

        exit();
    }




?>