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

        <!-- section banniere film  -->

        <section class="banniere" id="banniere">
            <div class="contenu">
            <h2 class="titredescript" style="text-align: center; ">Le Hobbit</h2>
            </div>
        </section>

        
        <!-- section description film  -->


        <section class="description_film">
            <h2 class="titredescript" style="text-align: center;">Description du film :</h2>
            <div class="container">
                <div class="left" data-aos="fade-up" data-aos-offset="200"
                 data-aos-duration="1100">
                    <h1>Resumé</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptatibus, illo perferendis assumenda eum optio ullam nisi, dolorum nihil nulla enim eos suscipit accusamus vel! Odit doloribus pariatur ad nisi.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae hic sunt consectetur laborum labore, dolor eum ea vel, saepe tempora aliquam debitis atque error ex illo laudantium quo a quaerat.</p>
                </div>
                <div class="center" data-aos="fade-up" data-aos-offset="200"
                 data-aos-duration="1100">
                    <h1>infos</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error placeat accusamus odio autem culpa perferendis necessitatibus nisi, expedita laborum fugit blanditiis non nobis velit sequi sunt libero, harum in doloribus!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut delectus, repudiandae nesciunt eaque consectetur, impedit quidem aperiam eius nobis quas officia enim quo odit alias perspiciatis cum autem, adipisci suscipit.</p>
                </div>
                <div class="right" data-aos="fade-up" data-aos-offset="200"
                data-aos-duration="1100">
                    <h1>Acteur</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestias modi tempora. Doloremque animi sit, eum dolorem ipsum sint, commodi, ipsa expedita magni necessitatibus ut saepe. Nisi eum sapiente fuga!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, perspiciatis? Beatae quam quod, doloremque nisi accusantium autem corporis molestias nam exercitationem optio odit quis eaque dignissimos? Possimus at magnam ex.</p>
                </div>
            </div>
        </section>

       <!--  <section class="paralaxContainer" id ="paralax"></section> -->

        <section class="videofilm">
            <h2 class="titredescript" style="text-align: center;">Regarde le film en HD</h2>
            <div class="containervideofilm">
             <video width="1100" height="600" controls autoplay>
             <source src="../assets/media/video/Le Hobbit _ La Bataille des Cinq Armées - Bande Annonce Officielle (VF) - Peter Jackson.mp4" type=video/mp4>
             </video>    
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
