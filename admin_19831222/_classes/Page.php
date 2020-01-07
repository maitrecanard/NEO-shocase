<?php

class Page
{
    public $id;
    public $title;
    public $keybord;
    public $description;
    public $content;
    public $img;
    public $activ;

    static function getPage() {

        global $db;



        $reqPage = $db->prepare('
                SELECT
                    *
                FROM Roffet_page
                ');
        $reqPage->execute([]);
        return $reqPage->fetch();
    }


}