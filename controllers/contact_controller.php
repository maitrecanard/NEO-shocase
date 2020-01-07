<?php

include_once 'controllers/includes/analytics_controller.php';
include_once '_classes/Exploitant.php';
include_once '_classes/Page.php';
include_once 'controllers/includes/menu_controller.php';
include_once 'controllers/includes/page_controller.php';

$Exploitant = Exploitant :: getExploitant();
$Page = Page :: getPage(4);


if(!empty($_POST) && isset($_POST['btnContact'])){
    if(isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['message'])){
        if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['message'])){
            $email = str_secur($_POST['email']);
            $firstname = str_secur($_POST['firstname']);
            $message = str_secur($_POST['message']);

            $message .= ' 

            email envoyé par: ' . $firstname . '
            avec comme adresse : ' . $email;
            

            // ENVOYER UN EMAIL
            mail($Exploitant['mail'], 'Roffet86.fr message client client', $message);
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Reessayez !";
    }
}

