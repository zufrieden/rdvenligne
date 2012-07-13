# RDV en ligne

## Technologie
Site d'une page développé sur [le microframework Silex](http://silex.sensiolabs.org/) et [Twig](http://silex.sensiolabs.org/doc/providers/twig.html) comme moteur de template.

## Frontend
- CSS : Utilisation de [LESS](http://lesscss.org/) et [The Semantic Grid System](http://semantic.gs/) pour la mise en page et la mise en forme.
- HTML : Basé sur [H5BP](http://html5boilerplate.com/)

## Installation
- The recommended way to install Silex is [through composer](http://getcomposer.org). Just create a `composer.json` file and run the `php composer.phar install` command to install it:

```JSON
    {
        "minimum-stability": "dev",
        "require": {
            "silex/silex": "1.0.*"
        }
    }
```

## Tests

To run the test suite, you need [composer](http://getcomposer.org) and [PHPUnit](https://github.com/sebastianbergmann/phpunit).

```bash
    $ php composer.phar install --dev
    $ phpunit
```