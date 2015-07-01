[LaraCollectif](http://shoodey.github.io/laracollectif)
===================

Système d'archivage pour l'[Université Internationale de Rabat](http://www.uir.ac.ma), sous Laravel 5.1

----------

L'équipe
-------------

|      Name     |        Role     |      Twitter    |
| ------------- | --------------- | --------------- |
| ADEL Zainab  	| Chef de projet  | @               |
| AMMINE Bassma | Développeur     | @AmmineAmn      |
| EL AMRI Ali  	| Développeur     | @MrShoodey      |
| EL AMRI Hadia | Développeur     | @scramettehaidy |
| KARBAL Basma  | Développeur     | @BasmaKarbal    |
| MESBAH Hind   | Développeur     | @ 				|


----------

Installation
-------------

> 1.  Téléchargez le zip sur ce [lien](https://github.com/Shoodey/LaraMoodle/zipball/master).
> 2.  Dézippez le dans `wamp/www/` et renommez le en `LaraCollectif`.
> 3.  Créez une base de donnée `laracollectif`.
> 4.  Lancez votre terminal puis `cd wamp/www/LaraCollectif`.
> 5.  Tapez `php artisan migrate` pour migrer les tables.
> 6.  Tapez `php db:seed` pour peupler les tables.
> 7.  Rendez vous dans : `localhost/laracollectif/public`.
> 8.  Connectez vous avec le couple `admin@admin.com` & `admin`

----------

Tâches Complétées
-------------

[01/07] Liste des tâches complétées: (Liste non exhaustive)

> **Divers:**
> 
> *   Système de pagination et de filtre et recherche pour les tables.
> *   Système d'autocomplétion sur certains champs de saisis.
> 
> **Utilisateurs:**
> 
> *   Connexion avec couple : Email, Password. `(/public/auth/login)`
> 
> **Rôles:**
> 
> *   Système de rôles modulable en fonction des souhaits du client.
> *   Création de rôles et attribution de permissions à la volée.
> *   Assignement des utilisateurs aux rôles correspondants.
> *   Rôle `super-admin` controlant la totalité du panel d'administration.
> 
> **Permissions:**
> 
> *   Chaque action, fonctionnalité ou lien lui est attribué une permission précise.
> *   Les permissions sont ensuite liées aux différents rôles
> 
> **Pôles:**
> 
> *   Ajout de pôle avec choix de : Nom, Administrateur.
> *   Edition de pôle limité à l'administrateur du pôle en question.
> *   Suppression de pôle limitée à l'administrateur du pôle en question.
> 
> **Catégories:**
> 
> *   Système modulable de création de catégories qui représentent les dossiers d'archivage.
> *   Possibilité de créer des sous dossiers à la volée et des les hiérarchiser:`
>     *   Cat 1
>         *   Sub Cat 1.1
>         *   Sub Cat 1.2
>         *   Sub Cat 1.3
>     *   Cat 2   
>         *   Sub Cat 2.1
>              *   Sub Cat 2.1.1
>         *   Sub Cat 2.2
>              *   Sub Cat 2.2.1
>              *   Sub Cat 2.2.2
>         *   Sub Cat 2.3

> *   Listage clair et précis de tous les dossiers et sous-dossiers ainsi que leurs chemins respectifs et contenus.

----------

## Tâches à réaliser

Liste des tâches à réaliser:  (Liste non exhaustive)>

> **Utilisateurs:**
> 
> *   Profil listant les informations des utilisateurs.
> *   Système de connexion pour les étudiants.
> 
> **Pôles:**
> 
> *   Profile lisant les information des pôles.
> 
> **Catégories:**
> 
> *   Affichage `user friendly` des catégories et leurs contenus.
> *   Fonction recherche des dossiers.
> 
> **Fichiers:**
> 
> *   Système d'upload de fichier en fonction des catégories.
> 
> **Calendrier**
> 
> *   Mise en place d'un calendrier d'évenements.
> 
> **EDTs:**
> 
> *   Système dynamique de gestion des emplois du temps.

----------