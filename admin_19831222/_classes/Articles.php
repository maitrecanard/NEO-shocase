<?php

class Articles{

    public $id;
    public $name;
    public $subname;
    public $description;
    public $content;
    public $img;
    public $created;
    public $modif;
    public $activ;
    public $activHome;


    static function getCountArticleActiv(){

        global $db;

        $reqCount = $db->prepare('SELECT
                                    COUNT(id) AS Nombre
                                    FROM Roffet_article
                                    WHERE activ = 1');
        $reqCount->execute([]);
        return $reqCount->fetch();
    }

    static function getCountArticleinactiv(){

        global $db;

        $reqCount = $db->prepare('SELECT
                                    COUNT(id) AS Nombre
                                    FROM Roffet_article
                                    WHERE activ = 0');
        $reqCount->execute([]);
        return $reqCount->fetch();
    } 
}