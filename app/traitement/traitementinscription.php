<?php

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