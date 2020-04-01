<?php

namespace App\Controller\Exception;

use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * @var array
     */
    protected $dontReport = []; // All exceptions here will not be reported as proper exceptions


    public function render($request, Throwable $e): Response
    {
        /*
         *  Catch here the exceptions and return custom responses.
         */
        return parent::render($request, $e);
    }
}
