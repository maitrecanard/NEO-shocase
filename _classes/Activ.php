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
}