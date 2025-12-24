<?php

require 'vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

// 1. Créer le conteneur et le dispatcher d'événements (obligatoires)
$container = new Container();
$events = new Dispatcher($container);

// 2. Instancier le routeur
$router = new Router($events, $container);

// Register web routes
$router->group([], fn () => require APP_ROOT .'/routes/web.php');

// Register web routes
$router->group([], fn () => require APP_ROOT .'/routes/api.php');

// 3. Définir vos routes
$router->get('/', function () {
    return 'Bienvenue sur ma page d\'accueil autonome !';
});

$router->get('/hello/{name}', function ($name) {
    return "Bonjour, " . ucfirst($name);
});

// 4. Créer la requête à partir des globales PHP
$request = Request::capture();

// 5. Faire correspondre la requête à une route et envoyer la réponse
try {
    $response = $router->dispatch($request);
    $response->send();
} catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {
    header("HTTP/1.0 404 Not Found");
    echo "Page non trouvée.";
}
