<?php

include_once '_classes/Exploitant.php';
include_once '_classes/Activ.php';
include_once '_classes/Articles.php'; 

$Exploitant = Exploitant::getExploitant();
$statut = Activ :: getActiv();
$CountArticleActiv = Articles:: getCountArticleActiv();
$CountArticleinactiv = Articles:: getCountArticleinactiv();
