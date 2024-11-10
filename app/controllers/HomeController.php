<?php

namespace App\controllers;

use Core\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $posts = (new Post())->getAll();
        $categories = (new Post())->getCategories();
        $most_read_articles = (new Post())->most_read_articles();
        $this->view('home', ['articles' => $posts, 'categories' => $categories, 'most_read_articles' => $most_read_articles]);
    }

    public function article($id)

    {
        $articles=(new Post())->articleInfo($id);
        $this->view('post',$articles);
     //   echo "article $id";
//        $post = (new Post())->getById($id);
//        $this->view('post', ['post' => $post]);
    }

    public function category($id)
    {
        echo "work ".$id;
    }

}
