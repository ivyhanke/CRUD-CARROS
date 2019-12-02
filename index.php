<?php 
require 'vendor/autoload.php'; 
require 'init.php'; 

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require_once 'init.php';
require_once 'app/ConnectionDB.php';
require_once 'app/controller/CarrosController.php';
require_once 'app/model/Carro.php';
require_once 'app/view/template.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $CarrosController = new CarrosController();
    $result = $CarrosController->index();

    $renderer = new PhpRenderer('./app/view/');
    return $renderer->render($response, "carros.index.php", ['carros' => $result]);
});

$app->get('/add', function (Request $request, Response $response, $args) {
    $renderer = new PhpRenderer('./app/view/');
    return $renderer->render($response, "carros.new.php");
});

$app->post('/add', function (Request $request, Response $response, $args) {
    $CarrosController = new CarrosController();
    $CarrosController->add();
    return $response->withStatus(302)->withHeader('Location', '/');
});

$app->get('/edit/{idcar}', function (Request $request, Response $response, $args) {
    $idCar = $args['idcar'];
    $CarrosController = new CarrosController();
    $result = $CarrosController->select($idCar);

    $renderer = new PhpRenderer('./app/view/');
    return $renderer->render($response, "carros.edit.php", ['carro' => $result]);
});

$app->get('/remove/{idcar}', function (Request $request, Response $response, $args) {
    $idCar = $args['idcar'];
    $CarrosController = new CarrosController();
    $result = $CarrosController->remove($idCar);

    return $response->withStatus(302)->withHeader('Location', '/');
});

$app->post('/edit', function (Request $request, Response $response, $args) {
    $CarrosController = new CarrosController();
    $result = $CarrosController->edit();

    return $response->withStatus(302)->withHeader('Location', '/');
});
  
$app->run();