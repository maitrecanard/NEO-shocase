<?php


class Page
{
    public $id;
    public $title;
    public $description;
    public $content;
    public $img;
    public $activ;

 
    /**
     * envoi tous les articles
     * @return array
     */
    static function getPage($page) {

        global $db;



        $reqPage = $db->prepare('SELECT
                    *
                FROM Roffet_page
                where id = ? and activ = 1
                ');
        $reqPage->execute([$page]);
        return $reqPage->fetch();
    }

}