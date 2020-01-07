<?php

class Header{
    
    public $id;
    public $name;
    public $value;
    public $activ;
    public $content;

    static function getHeader(){

        global $db;

        $reqHeader = $db->prepare('SELECT
                                        *
                                    FROM Roffet_header 
                                    WHERE activ = 1');
        $reqHeader->execute([]);
        return $reqHeader->fetch();
    }
}