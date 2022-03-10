<?php 


require 'connDb.php';

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE roles(
    id_role  Int  Auto_increment  NOT NULL ,
    nom_role Varchar (255) NOT NULL
,CONSTRAINT role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE users(
    id_user       Int  Auto_increment  NOT NULL ,
    mail_user     Varchar (255) NOT NULL ,
    mdp_user Varchar (255) NOT NULL ,
    nom_user      Varchar (255) NOT NULL ,
    prenom_user   Varchar (255) NOT NULL ,
    id_role       Int NOT NULL
,CONSTRAINT users_PK PRIMARY KEY (id_user)

,CONSTRAINT users_role_FK FOREIGN KEY (id_role) REFERENCES roles (id_role)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: films
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE films(
    id_film     Int  Auto_increment  NOT NULL ,
    nom_film    Varchar (255) NOT NULL ,
    image_film  Varchar (255) NOT NULL ,
    resume_film Varchar (255) NOT NULL ,
    duree_film  Time NOT NULL ,
    video_film  Varchar (50) NOT NULL
,CONSTRAINT films_PK PRIMARY KEY (id_film)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: producteur
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE producteurs(
    id_producteur     Int  Auto_increment  NOT NULL ,
    nom_producteur    Varchar (255) NOT NULL ,
    prenom_producteur Varchar (255) NOT NULL ,
    nation_producteur Varchar (255) NOT NULL ,
    date_producteur   Date NOT NULL
,CONSTRAINT producteur_PK PRIMARY KEY (id_producteur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE categories(
    id_categorie   Int  Auto_increment  NOT NULL ,
    categorie_film Varchar (255) NOT NULL
,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: acteur
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE acteurs(
    id_acteur     Int  Auto_increment  NOT NULL ,
    nom_acteur    Varchar (255) NOT NULL ,
    prenom_acteur Varchar (255) NOT NULL ,
    nation_acteur Varchar (255) NOT NULL ,
    date_acteur   Date NOT NULL
,CONSTRAINT acteur_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: realisateur
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE realisateurs(
    id_realisateur     Int  Auto_increment  NOT NULL ,
    nom_realisateur    Varchar (255) NOT NULL ,
    prenom_realisateur Varchar (255) NOT NULL ,
    nation_realisateur Varchar (255) NOT NULL ,
    date_realisateur   Date NOT NULL
,CONSTRAINT realisateur_PK PRIMARY KEY (id_realisateur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: ¨produire
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE produire(
    id_film       Int NOT NULL ,
    id_producteur Int NOT NULL
,CONSTRAINT ¨produire_PK PRIMARY KEY (id_film,id_producteur)

,CONSTRAINT ¨produire_films_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
,CONSTRAINT ¨produire_producteur0_FK FOREIGN KEY (id_producteur) REFERENCES producteurs(id_producteur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: appartenir
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE appartenir(
    id_categorie Int NOT NULL ,
    id_film      Int NOT NULL
,CONSTRAINT appartenir_PK PRIMARY KEY (id_categorie,id_film)

,CONSTRAINT appartenir_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
,CONSTRAINT appartenir_films0_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: realiser
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE realiser(
    id_realisateur Int NOT NULL ,
    id_film        Int NOT NULL
,CONSTRAINT realiser_PK PRIMARY KEY (id_realisateur,id_film)

,CONSTRAINT realiser_realisateur_FK FOREIGN KEY (id_realisateur) REFERENCES realisateurs(id_realisateur)
,CONSTRAINT realiser_films0_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: jouer
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE jouer(
    id_film   Int NOT NULL ,
    id_acteur Int NOT NULL
,CONSTRAINT jouer_PK PRIMARY KEY (id_film,id_acteur)

,CONSTRAINT jouer_films_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
,CONSTRAINT jouer_acteur0_FK FOREIGN KEY (id_acteur) REFERENCES acteurs(id_acteur)
)ENGINE=InnoDB");



echo "Database tables créer ! ";