<?php

class Defaut {

    public $id;
    public $page;
    public $activ;

    static function getDefaut(){

        global $db;

        $reqDefaut = $db->prepare('SELECT
                                        *
                                    FROM Roffet_defaut
                                    WHERE activ = 1');
        $reqDefaut->execute([]);
        return $reqDefaut->fetchAll();
    }
}