<?php
/* requête jointure */

            /* Bases de la jointure ( films ) */
$sqlcategoriesaction = ("SELECT * FROM films
    /* Jointure Films / appartenir / categories */
    INNER JOIN appartenir ON films.id_film = appartenir.id_film 
    INNER JOIN categories ON categories.id_categorie = appartenir.id_categorie
    WHERE categories.id_categorie = 1 LIMIT 5
    
    ");
    
    $sqlcategoriesaventure = ("SELECT * FROM films
    /* Jointure Films / appartenir / categories */
    INNER JOIN appartenir ON films.id_film = appartenir.id_film 
    INNER JOIN categories ON categories.id_categorie = appartenir.id_categorie
    WHERE categories.id_categorie = 2 LIMIT 5
    
    ");
    $sqlcategoriescomedie = ("SELECT * FROM films
    /* Jointure Films / appartenir / categories */
    INNER JOIN appartenir ON films.id_film = appartenir.id_film 
    INNER JOIN categories ON categories.id_categorie = appartenir.id_categorie
    WHERE categories.id_categorie = 5 LIMIT 5
    
    ");

    $sqlcategoriessciencefiction = ("SELECT * FROM films
    /* Jointure Films / appartenir / categories */
    INNER JOIN appartenir ON films.id_film = appartenir.id_film 
    INNER JOIN categories ON categories.id_categorie = appartenir.id_categorie
    WHERE categories.id_categorie = 3 LIMIT 5

    ");

    

            /* Bases de la jointure ( films ) */
$sqljointuretable = ("SELECT * FROM films 
/* Jointure Films / jouer / acteurs */
    INNER JOIN jouer ON films.id_film = jouer.id_film
    INNER JOIN acteurs ON jouer.id_acteur = acteur.id_acteur
    /* Jointure Films / produire / producteurs */
    INNER JOIN produire ON films.id_film = produire.id_film
    INNER JOIN producteurs ON produire.id_acteur = producteurs.id_producteur
    /* Jointure Films / realiser / realisateurs */
    INNER JOIN realiser ON films.id_film = realiser.id_film
    INNER JOIN realisateurs ON realiser.id_acteur = realisateurs.id_realisateur
    ");


/* execute la requete */
$requetecategoriesaction = $pdo->query($sqlcategoriesaction);
$requetecategoriesaventure = $pdo->query($sqlcategoriesaventure);
$requetecategoriescomedie = $pdo->query($sqlcategoriescomedie);
$requetecategoriessciencefiction = $pdo->query($sqlcategoriessciencefiction);

/* recupere les data */
$datacategoriesaction = $requetecategoriesaction->fetchAll();
$datacategoriesaventure = $requetecategoriesaventure->fetchAll();
$datacategoriescomedie = $requetecategoriescomedie->fetchAll();
$datacategoriessciencefiction = $requetecategoriessciencefiction->fetchAll();
