<?php 
// include('Config.php');
include('Function/C-F-Date-And-Time.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $Job_title = $_POST['Job_title'];
    $Job_title_ar = $_POST['Job_title_ar'];
    $Job_title_fr = $_POST['Job_title_fr'];
    $Description_en = $_POST['Description_en'];
    $Description_ar = $_POST['Description_ar'];
    $Description_fr = $_POST['Description_fr'];

    $SqlInsertTeam = '  INSERT INTO team (
                                name_team,
                                Description_en,
                                Description_ar,
                                Description_fr,
                                Created_on,
                                Job_title,
                                Job_title_ar,
                                Job_title_fr
                            )
                        VALUES (
                            "'.$name.'",
                            "'.$Description_en.'",
                            "'.$Description_ar.'",
                            "'.$Description_fr.'",
                            "'.CurrentDateAndTime().'",
                            "'.$Job_title.'",
                            "'.$Job_title_ar.'",
                            "'.$Description_en.'"
                            )';

    if (mysqli_query($Connection,$SqlInsertTeam)) {
        header("Refresh:0");
    }else {
        echo 'Somthing Hapen' . '<br>';
    }
}
?>