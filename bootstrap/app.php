<?php

require_once __DIR__ . '/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));


$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->configure('app');


$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Controller\Exception\Handler::class
);

$app->router->group([
    'namespace' => 'App\Controller',
], function ($router) {
    require __DIR__ . '/../routes/web.php';
});

return $app;
