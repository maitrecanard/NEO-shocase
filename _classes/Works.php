<?php


class Works
{
        public $id;
        public $title;
        public $subtitle;
        public $description;
        public $content;
        public $img;
        public $category;

        /**
         * Works constructor.
         * @param $id
         */
        function __construct($id) {

                global $db;

                $id = str_secur($id);

                $reqWorks = $db->prepare("SELECT 
                                rp.*
                        FROM Roffet_page rp
                        INNER JOIN Roffet_category rc ON rp.fk_category = rc.id
                        where rc.id = 2 AND rp.id = ?
                ");
                $reqWorks->execute([$id]);
                $data = $reqWorks->fetch();

                $this->id = $id;
                $this->title = $data['title'];
                $this->subtitle = $data['subtitle'];
                $this->description = $data['description'];
                $this->content = $data['content'];
                $this->img = $data['img'];

        }

        /**
         * Envoi tous les travaux
         * @return array
         */

         static function getHomeWorks($category) {
                 
                global $db;

                 $reqHomeWorks = $db->prepare('SELECT 
                                rp.*
                        FROM Roffet_page rp
                        INNER JOIN Roffet_category rc ON rp.fk_category = rc.id
                        WHERE rp.activ = 1 AND rp.activHome = 1 AND rc.id = ?
                        ORDER BY rp.id DESC LIMIT 3   
                 ');
                 $reqHomeWorks->execute([$category]);
                 return $reqHomeWorks->fetchAll();
         }

         static function getAllWorks($category) {

                global $db;

                $reqAllWorks = $db->prepare('SELECT
                                rp.*
                        FROM Roffet_page rp
                        INNER JOIN Roffet_category rc ON rp.fk_category = rc.id
                        WHERE rp.activ = 1  AND rc.id = ?
                        ORDER BY rp.id DESC
                ');
                $reqAllWorks->execute([$category]);
                return $reqAllWorks->fetchAll();
         }
}