<?php 
session_start();
if(!isset($_SESSION['login'])) {
    header('location:../index.php');
    
}
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

    <link rel="stylesheet" href="../assets/styles/accueil.css">
   <link rel="stylesheet" href="../assets/styles/navbarre.css"> 
    <link rel="stylesheet" href="../assets/styles/pageallfilms.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/modernizr.custom.63321.js"></script>
    
    <title>Accueil - Movie Player</title>
</head>
    
<body>
    

<?php include("../assets/includes/navbarrefilms.php") ?>

<!-- CARD FILMS  -->

<div class="titrepagefilms">
    <h2>Les films </h2>
</div>

<div class="row-dufilm">
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
    <div class="column-dufilm">
        <div class="card-dufilm">
            <h3 class="titre-cardfilm">Le film</h3>
          <img src="../assets/media/images/film/action_batmanthedarkknight.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam et magnam ducimus dignissimos, voluptatum exercitationem culpa provident illum at ea aliquam eius? Error tempora, corporis voluptate itaque eaque ducimus.</p>  
          <a href="#" class="btn btn-dark">Voir le film</a>
        </div>
    </div>
  
</div>

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


        <!-- js -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/scripts.js"></script>

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
