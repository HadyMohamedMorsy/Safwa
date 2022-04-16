<?php
    include 'Controller/Function/C-F-Timezone.php';
    include 'Controller/Function/C-F-Date-And-Time.php';
    include 'Controller/Config.php';
    include 'Controller/Function/C-F-Language.php';
    include IncludeFileByLanguage('Header',$_SESSION['Language']);
    include IncludeFileByLanguage('Style',$_SESSION['Language']);
    include IncludeFileByLanguage('Footer',$_SESSION['Language']);
    include IncludeFileByLanguage('index',$_SESSION['Language']);
?>
<!DOCTYPE html>
<html lang="<?php echo strtolower($_SESSION['Language']); ?>" dir="<?php echo $Direction; ?>">

<head>
    
    <!-- Start The meta -->
    <?php include ("Links CSS In Head Area.php"); ?>
    <!-- End The meta -->
    <title>  Home </title>

    <!-- Start The Links Files -->
    <link rel="stylesheet" href="assists/Products/products.css">
    <!-- End The Links Files -->

</head>

<body>

    <!-- Start The Header -->
    <?php include ("Layouts/Header.php"); ?>
    <!-- End The Header-->

    <?php include ("Layouts/Products-body.php"); ?>

    <!-- Start The Footer -->
    <?php  include ("Layouts/Footer.php"); ?>
    <!-- End The Footer-->

    <!-- Start The Links Files -->
    <script src="Javascript-Files/demo.js"></script>
    <script src="Javascript-Files/menu.js"></script>
    <script src="Javascript-Files/Slider.js"></script>
    <script src="Javascript-Files/vanila-tilt.js"></script>
    <!-- End The Links Files -->

    <!-- script normal  -->
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".image-product"), {
            max: 25,
            speed: 400
        });
    
    </script>
    <!-- script normal  -->
</body>

</html>