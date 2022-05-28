<?php

    if(isset($_POST['submit'])){

        require_once('../database/team.php');

        $team = new Team();

        $team->setnameTeam($_POST['name']);

        $team->setDescription_en($_POST['Description-en']);

        $team->setDescription_ar($_POST['Description-ar']);
        
        $team->setDescription_fr($_POST['Description-fr']);

        $team->setJob_title($_POST['Job_title']);

        $team->setJob_title_ar($_POST['Job_title-ar']);

        $team->setJob_title_fr($_POST['Job_title-fr']);

        $team->insertteam();

        header('location:../Team.php');


    }


?>