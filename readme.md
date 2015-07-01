LaraMoodle
===================

Système d'archivage pour l'[Université Internationale de Rabat](http://www.uir.ac.ma), sous Laravel 5.1

----------

<i class="icon-user"></i>L'équipe
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

<i class="icon-cog"></i>Installation
-------------

> 1. Téléchargez le zip sur ce [lien](https://github.com/Shoodey/LaraMoodle/zipball/master).
> 2. Dézippez le dans `wamp/www/` et renommez le en `LaraCollectif`.
> 3. Créez une base de donnée `laracollecti`.
> 4. Lancez votre terminal puis `cd wamp/www/LaraMoodle`.
> 5. Tapez `php artisan migrate`.
> 6. Tapez `php db:seed`.
> 7. 

> **Note:** La liste des liens accessibles figure dans les tâches complétées.

----------

<i class="icon-check"></i>Tâches complétées 
-------------------------------

[08/06] Liste des tâches complétées :

> **Utilisateurs:**

> - Inscription avec : Username, Email, Password. 
> `(/public/auth/register)`
> - Connection avec le couple : Email, Password.
> `(/public/auth/login)`
> - Récupération de mot de passe par envoi de mail.
> `(/public/password/email)`
> - Changement de mot de passe par token.
> `(/public/password/reset/$token)`

> **Pôles:**

> - Listage des pôles avec : ID, Name, Administrateur, Nombre d'appartenant, Actions.
> `(/public/poles)`
> - Ajout de pôle avec choix de : Name, Administrateur.
> `(/public/poles/create)`
> - Edition de pôle limité à l'administrateur du pôle en question.
> `(/public/poles/$id/edit)`
> - Suppression de pôle limitée à l'administrateur du pôle en question.
> - Profile du pôle avec : Avatar, Informations, Liste des utilisateurs appartenant au pôle.
> `(/public/poles/$id)`

----------

<i class="icon-clock"></i>Tâches à réaliser
-------------

Liste des tâches à réaliser (non exhaustive) :

> **Utilisateurs:**

> - Système de permissions.
> - Profile des utilisateurs : Avatar, A propos, CV, etc...

> **Pôles:**

> - Upload d'avatar.
> - Ajout d'informations : A propos, date de création, nombre d'étudiants...
> - Associer des professeurs (user.rank == teacher) à un pôle.

> **Modules:**

> - Permettre aux professeurs de créer/éditer des modules au sein d'un pôle avec système d'ownership.
> - Attribuer plus d'un professeur à un module.

> **Cours:**

>- Ajout de cours au seins des modules par des professeurs.


> **Fichiers:**

> - Upload de fichiers au sein d'un cours par des professeurs.

----------