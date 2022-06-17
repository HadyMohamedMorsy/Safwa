<?php 
include('Function/C-F-Date-And-Time.php');

if (isset($_POST['submit'])) {
    // $Catagory_id = $_POST['Catagory_id'];
    $Description_en = (string)($_POST['Description_en']);
    $Description_ar = (string)($_POST['Description_ar']);
    $Description_fr = (string)($_POST['Description_fr']);
    $SqlInsertTestemonials = 'INSERT INTO testemonials (
                                        Description_en,
                                        Description_ar,
                                        Description_fr,
                                        Created_on
                                    )
                                VALUES (
                                    "'.$Description_en.'",
                                    "'.$Description_ar.'",
                                    "'.$Description_fr.'",
                                    "'.CurrentDateAndTime().'"
                                    )';

    if (mysqli_query($Connection,$SqlInsertTestemonials)) {
        header("Refresh:0");
        // echo $Description_en;
    }else {
        echo 'Somthing Hapen' . '<br>';
        echo $Description_en;
    }
}
?>