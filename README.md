## Préparation du TI 1 - MVC - PHP

1. Création d'un nouveau dossier en dehors d'un suivit .git projet-ti1
2. Création de 5 dossiers :
   model
   view
   controller
   datas
   public
3. On va placer le fichier zip `projet.zip` dans le dossier `datas`
4. On crée un `.gitignore` et on y rajoute tous les fichiers se trouvant dans datas :

# On ne veut pas de fichiers venant de

# datas

datas/\*

5. On initialise git : `git init`
6. Si on vérifie avec un `git status`, on ne devrait voir que le .gitignore, en effet le dossiers datas est échappé grâce au `.gitignore`, et les autres dossiers sont vides. Si vous vous avez d'autres fichiers, ajoutez les dans le `.gitignore`
7. On désire faire suivre par git le fichier .zip, on rajoute au `.gitignore` :

```bash
# On veut garder le fichier zip d'origine
!datas/projet.zip
```

8. On commit cette sauvegarde
9. On va rajouter des `.gitkeep` dans chaque dossiers qu'on souhaite suivre, on peut faire un commit par dossier suivi.
10. On va dézipper `projet.zip` dans datas
11. Pour l'exercice, les fichiers sont déjà fonctionnels, ça ne sera pas le cas lors du TI :

- Vous avez donc un choix, les faire fonctionner directement via ce dossier (inutile de passer par wamp, vous travaillez en html, ! ça prendra du temps pour le convertir en CF), ou mettre en place directement le contrôleur frontal

12. Créez un hôte virtuel via `Wamp` vers le dossier public de ce projet sous le nom `projet-ti1` (URL locale AVEC public : `C:\WEB2026\PHP\projet-ti1\public` )

13. Redémarrage des **DNS**, Vous devriez avoir accès qu'au public.
14. Création du contrôleur frontal : public/index.php

```php
<?php
echo "Ceci est notre CF <br> path : ".__dir__;
```

15. On va créer le fichier de configuration à la racine du projet, mais on va avant tout le placer dans le `.gitignore`:

```bash
# On ne veut pas de fichiers venant de

# datas

datas/\*

# On veut garder le fichier zip d'origine

!datas/projet.zip

# On protège le fichier config.php car

# il ne doit pas se trouver sur git

config.php
```

16. Création de `config.php` (non suivi donc protégé) à la racine du projet

```php
<?php
# Fichier protégé par le .gitignore
# On pourra donc y mettre de constantes critiques
# Comme des login / mots de passe / clés etc...
# Si non présent, on duplique config.ini.php
# sous le nom de config.php
# Et on met les constantes à jours
// racine du projet quelque soit son emplacement
const ROOT_PATH = __dir__;
// Pages acceptées pour le projet
// Ce sont les nom des pages PHP
// acceptées mises dans le dossier
// view/ mise à part la homepage et la 404
const ARRAY_VALID_PAGES = [
    'about',
    'skills',
    'contact',
    'projects',
];
```

17. Création d'une copie de `config.php` sous le nom de `config.ini.php` qui sera suivie par git

```php
<?php
# Fichier suivi par git
# Enregistrez-moi sous le
# Nom de config.php et modifiez
# les constantes nécessaires
// racine du projet quelque soit son emplacement
const ROOT_PATH = __dir__;
// Pages acceptées pour le projet
// Ce sont les nom des pages PHP
// acceptées mises dans le dossier
// view/ mise à part la homepage et la 404
const ARRAY_VALID_PAGES = [
    'about',
    'skills',
    'contact',
    'projects',
];
```

18. On modifie `public/index.php` pour charger le fichier `config.php` et afficher ses constantes

```php
<?php
# public/index.php
/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';
// test de la constante racine
echo "Racine du projet : ".ROOT_PATH."<br>";
// affichage des pages acceptées
echo "<pre>";
print_r(ARRAY_VALID_PAGES);
echo "</pre>";
```
# ti2project
