<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->getAll();
        $this->render('articles/index', ['articles' => $articles]);
    }

    public function show(int $id)
    {
        $articleModel = new Article();
        $article = $articleModel->findById($id);

        if ($article) {
            $this->render('articles/show', ['article' => $article]);
        } else {
            // Gérer le cas où l'article n'existe pas (par exemple, afficher une erreur 404)
            echo "Article non trouvé.";
        }
    }
}