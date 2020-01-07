<?php

include_once 'controllers/includes/analytics_controller.php';
include_once '_classes/Exploitant.php';
include_once '_classes/Page.php';
include_once '_classes/Articles.php';
include_once 'controllers/includes/menu_controller.php';
include_once 'controllers/includes/page_controller.php';

$Exploitant = Exploitant :: getExploitant();
$Page = Page :: getPage(5);
$Article = Articles :: getOneArticle(5);
$ArticleBottum : Articles :: getAllArticles();