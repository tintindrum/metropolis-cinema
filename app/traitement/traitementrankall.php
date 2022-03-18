<?php 

$sqlclassements = "SELECT * FROM `films` ORDER BY `films`.`note_film` DESC;";

$requeteclassements = $pdo->query($sqlclassements);

$dbclassements = $requeteclassements->fetchAll();

