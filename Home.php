<?php
    include 'Controller/Function/C-F-Timezone.php';
    include 'Controller/Function/C-F-Date-And-Time.php';
    include 'Controller/Config.php';
    include 'Controller/Function/C-F-Language.php';
    include IncludeFileByLanguage('Header',$_SESSION['Language']);
    include IncludeFileByLanguage('Style',$_SESSION['Language']);
    include IncludeFileByLanguage('Footer',$_SESSION['Language']);
    include IncludeFileByLanguage('Home',$_SESSION['Language']);
?>
<!DOCTYPE html>
<html lang="<?php echo strtolower($_SESSION['Language']); ?>" dir="<?php echo $Direction?>">

<head>
    
    <!-- Start The meta -->
    <?php include ("Links CSS In Head Area.php"); ?>
    <!-- End The meta -->
    <title>  Home </title>

    <!-- start The Links Files -->

    <!-- End The Links Files -->
</head>

<body>

    <!-- Start The Header -->
    <?php include ("Layouts/Header.php"); ?>
    <!-- End The Header-->

    <?php include ("Layouts/Home-Body.php"); ?>

    <!-- Start The Footer -->
    <?php include ("Layouts/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->

    <!-- End The Links Files -->
</body>

</html>