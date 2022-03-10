<?php 

/* formulaire de connexion */

if(isset($_POST['login'])) {
    $email = $_POST['email_u'];
    $mdp = $_POST['mdp_u'];
    if(!empty($email) AND !empty($mdp)){
        $VerifUser = $pdo->query('SELECT id_user FROM users WHERE mail_user = "'.$email.'" AND mdp_user = "'.$mdp.'"');
        $UserData = $VerifUser->fetch();
        if($VerifUser->rowCount() == 1){
            header("location:../../public/accueil.php");
            $_SESSION['login'] = $UserData['id_user'];
            $_SESSION['success']=" Vous êtes bien connecté !";  
        }else $return = "Les identifiants sont incorrects !";
    }else $return = "Un ou plusieurs champs est manquant.";
}

?>