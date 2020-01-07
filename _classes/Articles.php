<?php


class Articles
{
    public $id;
    public $title;
    public $subtitle;
    public $slug;
    public $keybord;
    public $description;
    public $content;
    public $img;
    public $activ;
    public $activHome;

    function __construct($slug) {

        global $db;

        $slug = str_secur($slug);

        $reqBenefit = $db->prepare('SELECT
                                        *
                                    FROM Roffet_article 
                                    WHERE slug = ?');
        $reqBenefit->execute([$slug]);
        $data = $reqBenefit->fetch();

        $this->slug = $slug;
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->img = $data['img'];
        $this->content = $data['content'];
    
    }

    /**
     * Envoie de tous les auteurs
     * @return array
     */
    static function getThreeArticles($page) {

        global $db;

        $reqBenefits = $db->prepare('SELECT
                                        *
                                     FROM Roffet_article
                                      WHERE activhome = 1 AND activ = 1 AND fk_page = ?
                                       ORDER BY 1 LIMIT 3');
        $reqBenefits->execute([$page]);
        return $reqBenefits->fetchAll();
    }

    static function getThreeArticlesDesc($page) {

        global $db;

        $reqBenefits = $db->prepare('SELECT
                                        *
                                     FROM Roffet_article
                                      WHERE activ = 1 AND fk_page = ?
                                       ORDER BY 1 DESC LIMIT 3');
        $reqBenefits->execute([$page]);
        return $reqBenefits->fetchAll();
    }

    static function getAllArticles($page) {

        global $db;

        $reqAllBenefits = $db->prepare('SELECT
                                            *
                                        FROM Roffet_article
                                        WHERE  activ = 1 AND fk_page = ?');
        $reqAllBenefits->execute([$page]);
        return $reqAllBenefits->fetchAll();
    }

    static function getOneArticle($page) {

        global $db;

        $reqArticle = $db->prepare('SELECT
                                        *
                                    FROM Roffet_article
                                    WHERE activ = 1 AND fk_page = ?');
        $reqArticle->execute([$page]);
        return $reqArticle->fetch();
    }

    static function getDetail($slug) {

        global $db;

        $slug = str_secur($slug);

        $reqDetail = $db->prepare('SELECT
                                        *
                                    FROM Roffet_article 
                                    WHERE slug = ?');
        $reqDetail->execute([$slug]);
        $data = $reqDetail->fetch();

        $this->slug = $slug;
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->img = $data['img'];
        $this->content = $data['content'];
    
    }

}

