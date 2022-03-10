<?php 

$sqlclassements = "SELECT * FROM `films` ORDER BY `films`.`note_film` DESC LIMIT 6;";

$requeteclassements = $pdo->query($sqlclassements);

$dbclassements = $requeteclassements->fetchAll();

