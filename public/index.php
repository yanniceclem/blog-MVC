<?php

// Définir le chemin de base de l'application (facultatif mais utile)
define('ROOT', dirname(__DIR__));

// Inclure et enregistrer l'autoloader
require ROOT . '/core/Autoloader.php';
App\Core\Autoloader::register();

// Simuler un système de routage très simple
$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path === '/') {
    $controllerName = 'HomeController';
    $actionName = 'index';
} elseif (preg_match('#^/articles$#', $path)) {
    $controllerName = 'ArticleController';
    $actionName = 'index';
} elseif (preg_match('#^/article/(\d+)$#', $path, $matches)) {
    $controllerName = 'ArticleController';
    $actionName = 'show';
    $id = $matches[1];
} else {
    // Gérer les autres routes ou afficher une erreur 404
    echo "Page non trouvée.";
    exit;
}

$controllerClassName = 'App\\Controllers\\' . $controllerName;

if (class_exists($controllerClassName)) {
    $controller = new $controllerClassName();
    if (method_exists($controller, $actionName)) {
        if ($actionName === 'show' && isset($id)) {
            $controller->$actionName($id);
        } else {
            $controller->$actionName();
        }
    } else {
        echo "Action non trouvée.";
    }
} else {
    echo "Contrôleur non trouvé.";
}