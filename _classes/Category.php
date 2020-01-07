<?php

class Category {

    public $id;
    public $Ca_titre;
    public $Ca_text;

    static function getCategory($category){

        global $db;

        $reqcategory = $db->prepare('SELECT
                                        *
                                    FROM Roffet_category
                                    WHERE id = ?');
        $reqcategory->execute([$category]);
        return $reqcategory->fetch();
    }
}