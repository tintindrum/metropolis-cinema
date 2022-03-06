<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

    <link rel="stylesheet" href="../assets/styles/accueil.css">
    <link rel="stylesheet" href="../assets/styles/navbarre.css">
    <link rel="stylesheet" href="../assets/styles/carouselcategories.css">
    <link rel="stylesheet" href="../assets/styles/topfilmcarousel.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/modernizr.custom.63321.js"></script>
    <title>Accueil - Movie Player</title>
</head>
    
<body>
    

<?php include("../assets/includes/navbarre.php") ?>

<!-- top tendance -->

<?php include("../assets/includes/carousel.php") ?>

<!-- categories carousel -->

<?php include("../assets/includes/categoriecarousel.php") ?>

<!-- carousel top film -->

<?php include("../assets/includes/topfilmcarousel.php") ?>

<!-- avant footer -->

<?php include("../assets/includes/avfooter.php") ?>

<!-- footer -->

<?php include("../assets/includes/footer.php") ?>


<!-- JS -->

        <!-- AOS library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>

        <script src="../assets/js/caroussel.js" type="text/javascript"></script>
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/script.js" type="text/javascript"></script>
        <script src="../assets/js/carouselcategories.js"></script>
        <script src="../assets/js/script.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../assets/js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

        <!-- AOS library -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
            AOS.init();
            </script>
        
    </body>
</html>
