<?php 


require 'connDb.php';

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE roles(
    id_role  Int  Auto_increment  NOT NULL ,
    nom_role Varchar (255) NOT NULL
,CONSTRAINT roles_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE users(
    id_user     Int  Auto_increment  NOT NULL ,
    mail_user   Varchar (255) NOT NULL ,
    mdp_user    Varchar (255) NOT NULL ,
    nom_user    Varchar (255) NOT NULL ,
    prenom_user Varchar (255) NOT NULL ,
    id_role     Int NOT NULL
,CONSTRAINT users_PK PRIMARY KEY (id_user)

,CONSTRAINT users_roles_FK FOREIGN KEY (id_role) REFERENCES roles(id_role)
)ENGINE=InnoDB");
#------------------------------------------------------------
# Table: films
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE films(
    id_film           Int  Auto_increment  NOT NULL ,
    titre_film        Varchar (255) NOT NULL ,
    synopsys_film     Varchar (2000) NOT NULL ,
    duree_film        Time NOT NULL ,
    datesortie_film   Date NOT NULL ,
    pegi_film         Int NOT NULL ,
    note_film         Float NOT NULL ,
    affiche_film      Varchar (2000) NOT NULL ,
    bandeannonce_film Varchar (2000) NOT NULL
,CONSTRAINT films_PK PRIMARY KEY (id_film)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE categories(
    id_categorie  Int  Auto_increment  NOT NULL ,
    nom_categorie Varchar (2000) NOT NULL
,CONSTRAINT categories_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: acteurs
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE acteurs(
    id_acteur     Int  Auto_increment  NOT NULL ,
    nom_acteur    Varchar (255) NOT NULL ,
    prenom_acteur Varchar (255) NOT NULL
,CONSTRAINT acteurs_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: realisateurs
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE realisateurs(
    id_realisateur     Int  Auto_increment  NOT NULL ,
    nom_realisateur    Varchar (255) NOT NULL ,
    prenom_realisateur Varchar (255) NOT NULL
,CONSTRAINT realisateurs_PK PRIMARY KEY (id_realisateur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: producteurs
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE producteurs(
    id_producteur  Int  Auto_increment  NOT NULL ,
    nom_producteur Varchar (255) NOT NULL
,CONSTRAINT producteurs_PK PRIMARY KEY (id_producteur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: administrer
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE administrer(
    id_user Int NOT NULL ,
    id_role Int NOT NULL
,CONSTRAINT administrer_PK PRIMARY KEY (id_user,id_role)

,CONSTRAINT administrer_users_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
,CONSTRAINT administrer_roles0_FK FOREIGN KEY (id_role) REFERENCES roles(id_role)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: categoriser
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE categoriser(
    id_film      Int NOT NULL ,
    id_categorie Int NOT NULL
,CONSTRAINT categoriser_PK PRIMARY KEY (id_film,id_categorie)

,CONSTRAINT categoriser_films_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
,CONSTRAINT categoriser_categories0_FK FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: realiser
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE realiser(
    id_film        Int NOT NULL ,
    id_realisateur Int NOT NULL
,CONSTRAINT realiser_PK PRIMARY KEY (id_film,id_realisateur)

,CONSTRAINT realiser_films_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
,CONSTRAINT realiser_realisateurs0_FK FOREIGN KEY (id_realisateur) REFERENCES realisateurs(id_realisateur)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: jouer
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE jouer(
    id_acteur Int NOT NULL ,
    id_film   Int NOT NULL
,CONSTRAINT jouer_PK PRIMARY KEY (id_acteur,id_film)

,CONSTRAINT jouer_acteurs_FK FOREIGN KEY (id_acteur) REFERENCES acteurs(id_acteur)
,CONSTRAINT jouer_films0_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
)ENGINE=InnoDB");


#------------------------------------------------------------
# Table: produire
#------------------------------------------------------------

$pdo->exec ("CREATE TABLE produire(
    id_producteur Int NOT NULL ,
    id_film       Int NOT NULL
,CONSTRAINT produire_PK PRIMARY KEY (id_producteur,id_film)

,CONSTRAINT produire_producteurs_FK FOREIGN KEY (id_producteur) REFERENCES producteurs(id_producteur)
,CONSTRAINT produire_films0_FK FOREIGN KEY (id_film) REFERENCES films(id_film)
)ENGINE=InnoDB");

echo "Database tables créer ! ";