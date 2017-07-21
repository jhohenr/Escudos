<?php

require '../vendor/autoload.php';

use Escudos\CbsSports;
use Escudos\GloboEsporte;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    return $response->withJson(array_merge(
        CbsSports::nfl(),
        GloboEsporte::brasileiraoA(),
        GloboEsporte::brasileiraoB(),
        GloboEsporte::brasileiraoC(),
        GloboEsporte::brasileiraoD(),
        GloboEsporte::copaDoBrasil(),
        GloboEsporte::copaSulAmericana(),
        GloboEsporte::ligaDosCampeoes()
    ));
});

$app->get('/nfl', function (Request $request, Response $response) {
    return $response->withJson(CbsSports::nfl());
});

$app->get('/brasileirao-serie-a', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::brasileiraoA());
});

$app->get('/brasileirao-serie-b', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::brasileiraoB());
});

$app->get('/brasileirao-serie-c', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::brasileiraoC());
});

$app->get('/brasileirao-serie-d', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::brasileiraoD());
});

$app->get('/copa-do-brasil', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::copaDoBrasil());
});

$app->get('/copa-sul-americana', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::copaSulAmericana());
});

$app->get('/libertadores', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::libertadores());
});

$app->get('/liga-dos-campeoes', function (Request $request, Response $response) {
    return $response->withJson(GloboEsporte::ligaDosCampeoes());
});


$app->run();
