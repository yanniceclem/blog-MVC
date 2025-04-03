<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->getAll();
        $this->render('articles/index', ['articles' => $articles]);
    }
}