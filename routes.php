<?php
use App\Controllers\HomeController;

$app->get('/', [HomeController::class, 'index']);

$app->get('/api', [HomeController::class, 'api']);