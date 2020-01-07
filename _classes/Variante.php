<?php

class Variante{

    public $id;
    public $option1;
    public $option2;
    public $content;
    public $clef;

    static function getHomeOptions(){

        global $db;

        $reqHomeOptions = $db->prepare('
            SELECT
                *
            FROM Roffet_paramHome
            LIMIT 3
        ');
        $reqHomeOptions->execute([]);
        return $reqHomeOptions->fetchAll();
    }

}