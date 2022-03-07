<?php

require 'connDb.php';

if (isset($_POST['inscrire'])){
    $email = $_POST['mail_us'];
    $mdp = $_POST['mdp_us'];
    $mdp2 = $_POST['mdpconf_us'];
    $nom = $_POST['nom_us'];
    $prenom = $_POST['prenom_us'];

    if (!empty($email) AND !empty($mdp) AND !empty($mdp2) AND !empty($nom) AND !empty($prenom)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($mdp == $mdp2) {
                if(strlen($nom) <= 50){
                    $TestEmail = $pdo->query('SELECT id_user FROM users WHERE mail_user = "'.$email.'"');
                    if($TestEmail->rowcount() < 1){
                        $pdo->query('INSERT INTO users VALUES (NULL, "'.$email.'", "'.$mdp.'", "'.$nom.'", "'.$prenom.'", 1)');
                        header("location:../../public/login.php");
                    }else $return ="Votre adresse email est déjà utilisée.";
                }else $return = "Votre nom dépasse 50 caractères.";
            }else $return = "Les deux mots de passe ne correspondent pas.";
        }else $return = "L'email est invalide !";
    }else $return = "Un ou plusieurs champs est manquant.";
} 

?>


