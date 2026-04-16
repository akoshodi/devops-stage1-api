<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . "/../vendor/autoload.php";

$app = AppFactory::create();

$app->get("/", function (Request $request, Response $response) {
    $data = ["message" => "API is running"];
    $response->getBody()->write(json_encode($data));
    return $response
        ->withHeader("Content-Type", "application/json")
        ->withStatus(200);
});

$app->get("/health", function (Request $request, Response $response) {
    $data = ["message" => "healthy"];
    $response->getBody()->write(json_encode($data));
    return $response
        ->withHeader("Content-Type", "application/json")
        ->withStatus(200);
});

$app->get("/me", function (Request $request, Response $response) {
    $data = [
        "name" => "Your Full Name",
        "email" => "you@example.com",
        "github" => "https://github.com/yourusername",
    ];
    $response->getBody()->write(json_encode($data));
    return $response
        ->withHeader("Content-Type", "application/json")
        ->withStatus(200);
});

$app->run();
