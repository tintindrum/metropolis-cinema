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
    <link rel="stylesheet" href="../assets/styles/navbarre.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movie Player</title>
</head>
<body>

<?php include("../assets/includes/navbarre.php") ?>

            <h1>Inscription</h1>
            <div  class="erreur"></div>

    <div class="container-form">
        <form  name="fo"  method="post"  action="">
                <input  type="text"  name="nom_user"  placeholder="Nom"/><br  />
                <input  type="text"  name="prenom_user"  placeholder="Prénom"/><br  />
                <input  type="text"  name="pseudo_user"  placeholder="Votre Pseudo"/><br  />
                <input  type="password"  name="mdp_user"  placeholder="Mot de passe"/><br  />
                <input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe"/><br  />
                <input  type="submit"  name="inscrire"/>
                <a class="login_user"  href="login.php">Déjà un compte</a>
        </form>
    </div>

        <?php include("../assets/includes/footer.php") ?>

       
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- AOS library -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
</body>
</html>