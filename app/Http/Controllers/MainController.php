<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController
{
    public function index(Request $request)
    {
        return 'Bienvenue sur ma page d\'accueil autonome !';
    }

    public function hello(Request $request, $name)
    {
        return "Bonjour, " . ucfirst($name);
    }
}