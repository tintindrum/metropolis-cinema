<?php 
session_start();


if(!isset($_SESSION['login'])) {
    header('location:../index.php');
    
}
require_once "../app/db/connDb.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

    <link rel="stylesheet" href="../assets/styles/accueil.css">
    <link rel="stylesheet" href="../assets/styles/navbarre.css">
    <link rel="stylesheet" href="../assets/styles/films.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link rel="stylesheet" href="../assets/styles/parallaxpagefilm.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Films - Movie Player</title>
</head>
    

<body>
    
        <?php include("../assets/includes/navbarrefilms.php") ?>
        <?php
        $sqliddufilm = ("SELECT * FROM films WHERE id_film = '" .$_GET['id_film']. "' ");

        $requeteiddufilm = $pdo->prepare($sqliddufilm);
        $requeteiddufilm->execute();
        $dbiddufilm = $requeteiddufilm->fetch();
        ?>

        <section class="banniere" id="banniere">
            <div class="contenu">
            <h2 class="titredescript" style="text-align: center;"> <?php echo $dbiddufilm['nom_film']; ?></h2>            <img src="../assets/media/images/film/<?php echo $dbiddufilm['image_film']?>.png" alt="">
            </div>
        </section>
        
        <!-- section description film  -->

        <section class="description_film">
            
            <div class="container">
                <div class="left" data-aos="fade-up" data-aos-offset="200"
                 data-aos-duration="1100">
                    <h1>Resumé</h1>
                    <p><?php echo $dbiddufilm['resume_film']; ?></p>
                </div>
                <div class="center" data-aos="fade-up" data-aos-offset="200"
                 data-aos-duration="1100">
                    <h1>infos</h1>
                    <p>Note : <?php echo $dbiddufilm['note_film']; ?></p>
                    <p>Date sortie : <?php echo $dbiddufilm['dernierajout_film']; ?></p>
                    <p>Durée : <?php echo $dbiddufilm['duree_film']; ?></p>
                </div>
                <?php
                $sqlidduacteur = ('SELECT * FROM acteurs ORDER BY id_acteur ');

                $requeteidduacteur = $pdo->prepare($sqlidduacteur);
                $requeteidduacteur->execute();
                $dbidduacteur = $requeteidduacteur->fetchAll();
                ?>
                <div class="right" data-aos="fade-up" data-aos-offset="200"
                data-aos-duration="1100">
                    <h1>Acteur</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus illo magnam aliquam mollitia consequatur, est minima dolores, debitis aspernatur commodi vel et minus harum quos modi earum odit error ducimus.</p>
                    <p></p>
                </div>
            </div>
        </section>


        <section class="videofilm">
            <h2 class="titredescript" style="text-align: center;">Regarde le film en HD</h2>
            <div class="containervideofilm">
            <iframe width="1100" height="615" src="<?php echo $dbiddufilm['video_film']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
            </div>
            <div class="rating">
                <h2>Donnez votre avis</h2>
                <a href="#5" title="Donner 5 étoiles">★</a>
                <a href="#4" title="Donner 4 étoiles">★</a>
                <a href="#3" title="Donner 3 étoiles">★</a>
                <a href="#2" title="Donner 2 étoiles">★</a>
                <a href="#1" title="Donner 1 étoile">★</a>
            </div>
        </section>

        
        <?php include("../assets/includes/avfooter.php") ?>

        <?php include("../assets/includes/footer.php") ?>


        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/script.js" type="text/javascript"></script>
        <script src="../assets/js/parallax.js" type="text/javascript"></script>

        <!-- AOS library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>

        <!-- js -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
</body>
</html>
