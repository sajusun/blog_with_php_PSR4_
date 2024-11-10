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
        $stmt = $this->db->query("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND() LIMIT 4");
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
