<?php

namespace App\Exceptions;

use App;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param \Throwable $exception
     * @return void
     * @throws Throwable
     */
    public function report(\Throwable $exception)
    {
        if (app()->bound('sentry') && $this->shouldReport($exception)){
            app('sentry')->captureException($exception);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        $response = parent::render($request, $exception);

        if (
            App::environment('production') &&
            $request->header('x-Inertia') &&
            in_array($response->status(), [500, 503, 404, 403])
        ) {
            return Inertia::render('Error', ['status' => $response->status() ?? 500])
                ->toResponse($request)
                ->setStatusCode($response->status());
        }

        return $response;
    }
}
