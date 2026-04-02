<?php 

/************ 
// Chargement des 
// dépendances ici 
// seulement config.php
// qui se trouve 1 niveau en dessous
**************/ 

require_once '../config.php';

/***********
 * Routage entre
 * les diverses vues
 ***********/

// Non existence de la variable
// $_GET nommée 'p'
if(!isset($_GET['p'])) {

    // Nous sommes sur l'accueuil
    // chargement de view/homepage.php
include ROOT_PATH."/view/homepage.php";
}
else if(in_array($_GET['p'],ARRAY_VALID_PAGES)){

    
    include ROOT_PATH."/view/".$_GET['p'].".php";
}

else {
   
    include ROOT_PATH."/view/404.php";
}

