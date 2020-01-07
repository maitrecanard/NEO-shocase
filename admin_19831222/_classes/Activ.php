<?php

class Activ

{
    public $statut;

    static function getActiv(){

        global $db;

        $reqActiv = $db->prepare('SELECT
                                    statut
                                    FROM Roffet_maintenance
                                    WHERE statut = 1');
        $reqActiv->execute([]);
        return $reqActiv->fetch();
    }

    static function postActiv(){

        global $db;

        $reqPostActiv = $db->prepare('UPDATE
                                      FROM Roffet_maintenance
                                      SET aciv = 1');
        $reqPostActiv->execute([]);
        return $reqPostActiv->fetch();
    }
}