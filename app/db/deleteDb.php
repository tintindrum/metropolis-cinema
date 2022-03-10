<?php 


require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("DROP TABLE roles");
$pdo->exec("DROP TABLE users");
$pdo->exec("DROP TABLE films");
$pdo->exec("DROP TABLE producteurs");
$pdo->exec("DROP TABLE categories");
$pdo->exec("DROP TABLE acteurs");
$pdo->exec("DROP TABLE realisateurs");
$pdo->exec("DROP TABLE produire");
$pdo->exec("DROP TABLE appartenir");
$pdo->exec("DROP TABLE realiser");
$pdo->exec("DROP TABLE jouer");


$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo "Database tables supprimées ! ";