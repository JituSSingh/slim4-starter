<?php
require 'vendor/autoload.php';

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require __DIR__ . '/constants.php';
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/definitions.php');
$container = $builder->build();
$app = \DI\Bridge\Slim\Bridge::create($container);
$app->add(TwigMiddleware::create($app, $container->get(Twig::class)));
require __DIR__ . '/routes.php';
$app->run();