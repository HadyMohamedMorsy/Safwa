<?php 	
	require_once('database/users.php');

    if(isset($_POST['submit'])){

        $Adduser = new users();

        $Adduser->setUserName($_POST['username']);

        $Adduser->setUserEmail($_POST['email']);

        $Adduser->setUserPassword($_POST['email']);



    }else{



        header('location:form-basic.php');

    }




?>