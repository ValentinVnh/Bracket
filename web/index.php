<?php
require_once __DIR__ . '/../src/Lib/Psr4AutoloaderClass.php';

$loader = new App\Bracket\Lib\Psr4AutoloaderClass();
$loader->addNamespace('App\Bracket', __DIR__ . '/../src');
$loader->register();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = "produit";
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$controllerClassName = 'App\Bracket\Controller\\'.'Controller'.ucfirst($controller);
if (class_exists($controllerClassName)) {
    $listeActions = get_class_methods($controllerClassName);
    if (!in_array($action, $listeActions)) {
        $controllerClassName::error($action);
    } else {
        $controllerClassName::$action();
    }
} else {
    \App\Bracket\Controller\GenericController::error("", "Ce que vous cherchez n'existe pas...");
}