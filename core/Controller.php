<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = [])
    {
        extract($data); // Extrait les clés du tableau $data en tant que variables
        require ROOT . '/views/' . $view . '.php';
    }
}