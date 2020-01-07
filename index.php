<?php

// inclusions des fichiers principaux
include_once  '_config/config.php';
include_once  '_config/db.php';
include_once  '_functions/function.php';
include_once '_classes/Activ.php';

$statut = Activ :: getActiv();

// définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower( $_GET['page']));
} else {
    
    switch ($statut['statut']){
        
        case 0 :
            $page = 'maintenance';
        break ;

        case 1 :
            $page = 'home';
        break ;
    }
}

// Array contenant toutes les pges
$allPages = scandir('controllers/');

// vérification de l'existance de la page
if (in_array($page.'_controller.php', $allPages)) {
    // inclusion de la page
    //include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
} elseif ($page == 'admin_19831222') {
        header('Location: http://mathieucrea.fr/roffet/admin_19831222/index.php');
} else { 
    include_once 'controllers/404_controller.php';
    include_once 'views/error/404_view.php';
} 
