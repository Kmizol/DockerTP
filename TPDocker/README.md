# docker-php


lancement de docker :
docker-compose up --build

arret de docker :
docker-compose down




----------------------------------
Etape 1|

configurer le fichier config.php en ajoutant les données de connexion à la base de donnée PHPmyadmin

($mysqli = mysqli_connect("db","[NOM_UTILISATEUR]" ,"[MDP_UTILISATEUR]","test");)
----------------------------------
Etape 2|

Crée fichier .env et compléter avec [NOM_UTILISATEUR] et [MDP_UTILISATEUR] utilisé dans le fichier config.php
et Ajouter un le mot de passe pour le ROOT
----------------------------------
Etape 3|
docker-compose up --build

----------------------------------
Etape 4|
Accéder à la page PhpMyAdmin (port:8080) en tant que Root et attribuer les droits d'ajout/suppretion/modification à l'utilisateur ([NOM_UTILISATEUR], [MDP_UTILISATEUR]")

importer le fichier init\database.sql dans la base test.

--------------------------------------------------------------------------------------

Une fois tous les etapes réalisé, la page web "localhost:80" permetra de crée/supprimer/modifier/lire les éléments de la table "test" présent sur la base de donnée