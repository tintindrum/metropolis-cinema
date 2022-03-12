<?php 

$sqlidfilms = ('SELECT * FROM films ORDER BY `note` = ' .$_GET['id_film'].  ' DESC ');

$requeteidfilms = $pdo->query($sqlidfilms);

$dbidfilms = $requeteidfilms->fetch();

?>





