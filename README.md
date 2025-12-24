# Laravel Router standalone

Un petit projet permettant d'utiliser le routeur Laravel de manière autonome (sans la totalité du framework). Idéal pour des micro-services ou pour réutiliser la gestion de routes d'Illuminate/Routing dans des contextes légers.

## Contenu

- `bootstrap/` : initialisation minimale de l'application.
- `app/` : helpers et configuration applicative légère.
- `public/` : point d'entrée `index.php` pour le serveur web.
- `routes/` : définitions de routes (`web.php`, `api.php`).

## Prérequis

- PHP 8.0+ (vérifier `composer.json` pour la version exacte requise)
- Composer

## Installation

1. Clonez le dépôt :

```bash
git clone https://github.com/lambirou/laravel-router-standalone.git
cd laravel-router-standalone
```

1. Installez les dépendances via Composer :

```bash
composer install
```

## Lancer en local

La manière la plus simple pour tester localement :

```bash
php -S localhost:8000 -t public
```

Puis ouvrez `http://localhost:8000`.

## Définir des routes

Ajoutez vos routes dans `routes/web.php` ou `routes/api.php`. Exemple simple :

```php
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => 'Hello world');
```

Le bootstrap charge les routes et le routeur minimal nécessaire pour répondre aux requêtes.

## Structure recommandée

- Placez la logique métier dans des contrôleurs ou closures appelés depuis `routes/*.php`.
- Conservez la configuration et les helpers dans `app/`.

## Contribution

Contributions bienvenues : ouvrez une issue pour discuter d'un changement, ou proposez une pull request avec des explications claires.

## Licence

Ce projet est fourni sous la licence indiquée dans le fichier `LICENSE`.
