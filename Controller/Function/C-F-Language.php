<?php

    // // $LANGUAGE_SYSTEM = 'EN';
    // if (!isset($_SESSION['Language']) or empty($_SESSION)) {

    //     $_SESSION['Language'] = 'EN';
    // }

    if(!isset($_GET['Lang'])){

        $_SESSION['Language'] =  'EN';

    }else{
        $_SESSION['Language'] = $_GET['Lang'];
    }

    function IncludeFileByLanguage($PAGE_NAME,$LANGUAGE){
        return $LANGUAGE . '/' . $LANGUAGE . '-' . $PAGE_NAME . '.php';
    }
?>