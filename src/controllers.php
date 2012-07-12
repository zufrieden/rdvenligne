<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html', array());
})
->bind('accueil')
;

$app->get('/essai2', function () use ($app) {
    return $app['twig']->render('essai2.html', array());
})
->bind('essai2')
;

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name); 
})
->bind('salut')
;



$app->get('/essai/{prenom}', function ($prenom) use ($app) {
    return $app['twig']->render('essai.html', array(
    'prenom' => $prenom
    ));
})
->bind('essai')
;
 

$app->get('/contact/{firstName}', function ($firstName) use ($app) {
    return $app['twig']->render('contact.html', array(
    	'name' => $firstName
    ));
})
->bind('contact')
;

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    $page = 404 == $code ? '404.html' : '500.html';

    return new Response($app['twig']->render($page, array('code' => $code)), $code);
});
