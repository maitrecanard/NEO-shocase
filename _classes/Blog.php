<?php

class Blog {

    public $id;
    public $title;
    public $author;
    public $datetime;
    public $content;

    static function getAllPost() {

        global $db;

        $reqAllBlog = $db->prepare('SELECT
                                         *
                                     FROM Roffet_blog
                                     ORDER BY 1 DESC');
        $reqAllBlog->execute([]);
        return $reqAllBlog->fetchAll();
    }
}