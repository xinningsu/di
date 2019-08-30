<?php

spl_autoload_register(function ($class) {
    include __DIR__ . '/' . $class . '.php';
});

$controller = $argv[1] . 'Controller';
$action = $argv[2];
$parameters = array_slice($argv, 3);

$container = new Container();

//$container->bind(FruitInterface::class, Banana::class);
//$container->bind(FruitInterface::class, Apple::class);
/*$container->bind(Apple::class, function () {
    return new Apple(2);
});*/

$container->run($controller, $action, $parameters);
