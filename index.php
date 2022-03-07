<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/media/images/icon-m.png">

    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/parallax.css">
    <link rel="stylesheet" href="assets/styles/avfooter.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movie Player</title>
</head>
<body>


<?php include("assets/includes/navbarrelogin.php") ?>

<!-- section bannière  -->

<section class="banniere" id="banniere"> <!-- suite en tête de page -->
   <div class="contenu">
      <img src="assets/media/images/movieplayer-mac-2x.png" alt="">
       <h2>Metropolis <span class="blueletter">P</span>layer , <br> vous propose une interface pour regarder vos films favoris </h2>
   </div>
   
</section>

<!-- section à propos de nous -->

<section class="apropos" id="apropos">
<h2 class="titre-texte">Le<span> cinéma</span> chez vous </h2> <!-- Suite section 2 a propos de nous -->
   <div class="row">
         <div class="col50">
            <div class="img" data-aos="fade-up" data-aos-offset="70"
             data-aos-duration="300">
              <img src="assets/media/images/sallecinema.png" >
            </div>
         </div>
         
         <div class="col50" data-aos="fade-down" data-aos-offset="70"
             data-aos-duration="300" >
              <div class="contenuapropos">
                  
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, accusamus! Facilis porro placeat ea similique omnis hic cupiditate dolores et eligendi ipsam labore exercitationem veritatis, esse in atque vel ex!
                  </p>
             </div>
         </div>
    </div>
</section>

<!-- parallax -->

<section class="paralaxContainer" id ="paralax">

</section>


<section class="histoire">

   <div class="texte-histoire">
     <h2 class="titre-histoire" data-aos="fade-down" data-aos-offset="70"
      data-aos-duration="400">Metropolis <span class="blueletter">P</span>layer</h2>
      <p class="para-histoire" data-aos="fade-right" data-aos-offset="70"
      data-aos-duration="400">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, pariatur velit laborum cum delectus excepturi illum, tenetur dolores totam fugit commodi nulla fugiat nostrum hic! Quisquam voluptatibus eligendi nobis dolorem!
      </p>
      <p class="para-histoire">

      </p>

      <div class="btn-histoire">
         <a href="public/inscription.php">Voir plus d'infos</a>
      </div>
   </div>

   <div class="img-histoirecont">
      <img src="assets/media/images/movieplayer-mac-2x.png" alt="" class="img-histoire">
   </div>
   
   <div class="img-histoirecont2">
      <img src="assets/media/images/movieplayer-mac-2x.png" alt="" class="img2-histoire">
   </div>
   
</section>

<?php include("assets/includes/avfooter.php") ?>

<?php include("assets/includes/footer.php") ?>

<!-- AOS library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
   </script>
<!-- jquery -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
   <script src="assets/js/aos.js"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <script src="assets/js/parallax.js" type="text/javascript"></script>

<!-- js -->
         <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>