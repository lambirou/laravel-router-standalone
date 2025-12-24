<?php

$router->get('/', function () {
    return 'Bienvenue sur ma page d\'accueil autonome !';
});

$router->get('/hello/{name}', function ($name) {
    return "Bonjour, " . ucfirst($name);
});