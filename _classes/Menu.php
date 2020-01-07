<?php


class Menu
{
    public $id;
    public $order;
    public $title;
    public $url;
    public $img;

  

    /**
     * Envoie de tous les catégories
     * @return array
     */
    static function getAllMenu() {

        global $db;

        $reqMenu = $db->prepare('SELECT
                                         * 
                                 FROM Roffet_menu
                                 WHERE activ = 1 ORDER BY 6 ');
        $reqMenu->execute([]);
        return $reqMenu->fetchAll();
    }
}