<?php

class Analytics{

    public $value;
    public $activ;

    static function getAnalytics(){

        global $db;

        $reqAnalytics = $db->prepare('SELECT
                                        *
                                      FROM Roffet_analytics
                                      WHERE activ = 1');
        $reqAnalytics->execute([]);
        return $reqAnalytics->fetch();
    }

}