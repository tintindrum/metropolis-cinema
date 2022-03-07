<?php


require 'connDb.php';

if (isset($_POST['inscription'])){
    $nom = $_POST['nom_user'];
    $prenom = $_POST['prenom_user'];
    $prenom = $_POST['prenom_user'];
}





/* 
$pdolog = $pdo->prepare('INSERT INTO users VALUES (NULL, :mail, :mdp, :nom, :prenom, 1)');

$pdolog->bindValue(':mail', $_POST['mail_user'], PDO::PARAM_STR);
$pdolog->bindValue(':mdp', $_POST['mdp_user'], PDO::PARAM_STR);
$pdolog->bindValue(':nom', $_POST['nom_user'], PDO::PARAM_STR);
$pdolog->bindValue(':prenom', $_POST['prenom_user'], PDO::PARAM_STR);

$insertlog = $pdolog->execute();

if($insertlog){
    header("location:../../public/login.php");
}
else {
    header("location:../../public/inscription.php");
}
?> */