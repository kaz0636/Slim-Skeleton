# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application.
This application uses the latest Slim 3 with the Twig-View template renderer.
It also uses the Monolog logger.

## Run it:

1. `$ cd my-app`
2. `$ php -S 0.0.0.0:8880 index.php`
3. Browse to http://localhost:8880

## Key directories

* `assets/` assets files
* `assets/src`: src files
* `assets/templates`: Twig template files
* `vendor`: Composer dependencies

## Key files

* `/index.php`: Entry point to application
* `src/settings.php`: Configuration
* `src/dependencies.php`: Services for Pimple
* `src/middleware.php`: Application middleware
* `src/routes.php`: All application routes are here
* `templates/index.twig`: Twig template file for the home page
