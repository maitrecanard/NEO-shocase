<?php

class Setting {

    public $id;
    public $name;
    public $value1;
    public $value2;
    public $activ;

    static function getActivTitle(){

        global $db;

        $reqActivTitle = $db->prepare('SELECT
                                            *
                                        FROM Roffet_parameter
                                        WHERE id = 1 and activ = 1');
        $reqActivTitle->execute([]);
        return $reqActivTitle->fetch();
    }

    static function getActivContent(){

        global $db;

        $reqActivContent = $db->prepare('SELECT
                                            *
                                        FROM Roffet_parameter
                                        WHERE id = 2 and activ = 1');
        $reqActivContent->execute([]);
        return $reqActivContent->fetch();
    }
}