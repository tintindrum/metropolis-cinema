<?php
session_start();
require '../app/db/connDb.php';


if (isset($_POST['inscrire'])){
    $email = htmlspecialchars($_POST['mail_us']);
    $mdp = htmlspecialchars($_POST['mdp_us']);
    $mdp2 = htmlspecialchars($_POST['mdpconf_us']);
    $nom = htmlspecialchars($_POST['nom_us']);
    $prenom = htmlspecialchars($_POST['prenom_us']);

    if (!empty($email) AND !empty($mdp) AND !empty($mdp2) AND !empty($nom) AND !empty($prenom)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($mdp == $mdp2) {
                if(strlen($nom) <= 50){
                    $TestEmail = $pdo->query('SELECT id_user FROM users WHERE mail_user = "'.$email.'"');
                    if($TestEmail->rowcount() < 1){
                       /*  $mdp = PasswordHash($mdp); B_CRYPT */
                        $pdo->query('INSERT INTO users VALUES (NULL, "'.$email.'", "'.$mdp.'", "'.$nom.'", "'.$prenom.'", 1)');
                        header("location:../../public/login.php");
                        $_SESSION['success']="Vous êtes bien inscrit !";

                    }else $return ="Votre adresse email est déjà utilisée.";
                }else $return = "Votre nom dépasse 50 caractères.";
            }else $return = "Les deux mots de passe ne correspondent pas.";
        }else $return = "L'email est invalide !";
    }else $return = "Un ou plusieurs champs est manquant.";
} 

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

    <link rel="stylesheet" href="../assets/styles/inscription.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Metropolis</title>
</head>
<body>

<?php include("../assets/includes/navbarrelogin.php") ?>

<section class="banniere" id="banniere"> <!-- suite en tête de page -->
   <div class="contenu">
      <img src="assets/media/images/movieplayer-mac-2x.png" alt="">
       <h2>Metro<span class="blueletter">p</span>olis , <br> vous propose une interface pour regarder vos films favoris </h2>
   </div>
   
</section>

            <h1>Inscription</h1>
        <div class="erreur" name="msgnotif"><?php if(isset($_POST['inscrire']) AND isset($return)) echo $return; ?></div>
        <div class="success" name="msgnotif"></div>
    <div class="container-form">
        <form  name="fo"  method="post"  action="">
                <input  type="mail"  name="mail_us"  placeholder="Votre email ..."/><br  />
                <input  type="password"  name="mdp_us"  placeholder="Mot de passe"/><br  />
                <input  type="password"  name="mdpconf_us"  placeholder="Confirmer votre Mot de passe"/><br  />
                <input  type="text"  name="nom_us"  placeholder="Nom"/><br  />
                <input  type="text"  name="prenom_us"  placeholder="Prénom"/><br  />
                <input  type="submit"  name="inscrire"/>
                <a class="login_user"  href="login.php">Déjà un compte</a>
        </form>
        <div class="img-log">
            <img src="../assets/media/images/movieplayer-mac-2x.png" alt="" class="img-histoire">
        </div>
    </div>

        <?php include("../assets/includes/footer.php") ?>

       
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
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