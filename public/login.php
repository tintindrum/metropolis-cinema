<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/media/images/icon-m.png">

    <link rel="stylesheet" href="../assets/styles/login.css">
    <link rel="stylesheet" href="../assets/styles/avfooter.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link rel="stylesheet" href="../assets/styles/navbarre.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movie Player</title>
    <title>Document</title>
</head>
<body>

<?php include("../assets/includes/navbarre.php") ?>

        <h1 class="login_titre">Authentification</h1>
        <div  class="erreur"></div>
    <div class="container-form">    
        <form class="login-form" name="form"  method="post"  action="">
            <input class="login-pseudo"  type="text"  name="pseudo"  placeholder="Votre Pseudo"  /><br  />
            <input class="login_mdp" type="password"  name="password"  placeholder="Mot de passe"  /><br  />
            <input class="login_valid"  type="submit"  name="valider"  value="S'authentifier"  />
            <a class="login_compte"  href="inscription.php">Créer votre Compte</a>
        </form>
    </div>  

    <?php include("../assets/includes/footer.php") ?>
    

    <!-- AOS library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
   </script>
</body>
</html>