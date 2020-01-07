<?php

include_once 'controllers/includes/analytics_controller.php';
include_once '_classes/Exploitant.php';
include_once '_classes/Articles.php';
include_once 'controllers/includes/menu_controller.php';

$Exploitant = Exploitant :: getExploitant();
$DetailArticle = Articles :: getDetail(?);

debug($DetailArticle);
