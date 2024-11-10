<?php

namespace App\models;

use Core\Model;

class Post extends Model
{
    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC  LIMIT 9");
        $stmt->execute();
        //        $stmt = $this->db->query("SELECT * FROM posts");
        //        return $stmt->fetchAll();
        return $stmt->fetchAll();
    }
    public function getCategories()
    {
        // Get Categories
        $stmt = $this->db->query("SELECT *,COUNT(*) as article_count FROM `article` INNER JOIN category ON id_categorie=category_id GROUP BY id_categorie");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function most_read_articles()
    {
        // Get Most Read Articles
        $stmt = $this->db->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND() LIMIT 4");
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function articleInfo($article_id): array
    {
        // Get Article Info
        $stmt = $this->db->prepare("SELECT * FROM `article` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_id` = ?");
        $stmt->execute([$article_id]);
        $article = $stmt->fetch();
        $category= $this->categoryOfArticle($article["id_categorie"]);
        $authors_article= $this->categoryOfArticle($article["id_author"]);
        $commentsOfArticle= $this->categoryOfArticle($article_id);


        return ['article' => $article,'category'=>$category,'authorArticles'=>$authors_article,'comments'=>$commentsOfArticle];

    }

    private function categoryOfArticle($categoryId)
    {
        // Get Category of article
        $stmt = $this->db->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetch();
    }
    private function authorsArticle($authorId)
    {
        // Get Author's articles
        $stmt = $this->db->prepare("SELECT article_title, article_id FROM `article` WHERE id_author = ? LIMIT 4");
        $stmt->execute([$authorId]);
        return $stmt->fetchAll();
    }
    private function commentsOfArticle($commentId)
    {
        // Get Comments
        $stmt = $this->db->prepare("SELECT * FROM `article` INNER JOIN `comment` WHERE `article`.`article_id`= `comment`.`id_article` AND `article`.`article_id` = ? ORDER BY comment_id DESC");
        $stmt->execute([$commentId]);
        return $stmt->fetchAll();
    }

}
