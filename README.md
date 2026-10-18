# Développement d'une application

<br>

## Serveur Web Local

<br>

Pour mettre en route le serveur sur linux il faut se placer à la racine du projet pour ouvrir un terminal afin d'entrer la commande: "composer start:linux" ou "composer start".
<br>
Le contenu est disponible à l'URL "http://localhost:8000/".
<br>
Alors que sur Windows, il faut enter la commande "composer start:windows".

<br>

## Style de codage

- Commande permettant de voir les fichier non valide : "composer test:cs".

- Commande permettant de modifier les fichier non valide : "composer fix:cs"

- Commande permettant de lancer le serveur sur linux : "composer start" ou "composer start:linux"

- Commande permettant de lancer le serveur sur windows : "composer start:windows"

<br>

## Fonctionnalités présentes

<br>

- Affichage de tous les film de la base de données.

- Affichage de tous les acteurs ayant joué dans un film sélectionner, ainsi que des informations sur ce film.

- Affichage de tous les films présents dans la base de données dans lesquels l'acteur sélectionné à joué, ainsi que des informations sur cet acteur.

- Possibilité de revenir à la page d'acceuil grâce à un menu.

<br>

## Jeux de données disponibles

Les jeux de données disponibles sont une base de données avec les tables suivantes: 
- movie 
- cast
- people
- image
- movie_genre
- genre

Ainsi, qu'une base de données réduite afin d'exécuter les tests plus rapidement.