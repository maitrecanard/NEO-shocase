<?php

include_once 'controllers/includes/analytics_controller.php';
include_once '_classes/Exploitant.php';
include_once '_classes/Header.php';
include_once '_classes/Articles.php';
include_once '_classes/Variante.php';
include_once 'controllers/includes/menu_controller.php';

$Exploitant = Exploitant :: getExploitant();
$Header = Header :: getHeader();
$ThreeArticleTop = Articles::getThreeArticles(1);
$TwoVariant = Variante::getHomeOptions();
$ThreeArticleButtom = Articles::getThreeArticlesDesc(2);