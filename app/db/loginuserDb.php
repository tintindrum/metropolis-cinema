<?php 

require 'connDb.php';

/* formulaire de connexion */

if(isset($_POST['login'])) {
    $email = $_POST['email_us'];
    $mdp = $_POST['mdp_us'];
    if(!empty($email) AND !isset($mdp)){
        $VerifUser = $pdo->query('SELECT id FROM users WHERE mail_user = "'.$email.'" AND mdp_user = "'.$mdp.'"');
        $UserData = $VerifUser->fetch();
        if($VerifUser->rowCount() == 1){
            $_SESSION['login'] = $UserData['nom'];
            $return = "Vous êtes bien connecté !";
        }else $return = "Les identifiants sont incorrects !";
    }else $return = "Un ou plusieurs champs est manquant.";
}