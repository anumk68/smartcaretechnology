<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    // existing code...

    public function render($request, Throwable $exception)
    {
        // Handle 404 errors
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('frontend.errors.404', [], 404);
        }

        return parent::render($request, $exception);
    }
}
