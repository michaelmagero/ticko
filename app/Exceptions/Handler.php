<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        // Render full exception details in debug mode
        if (config('app.debug')) {
            return parent::render($request, $e);
        }

        // Redirect if token mismatch error
        // Usually because user stayed on the same page too long and his session expired
        if ($e instanceof TokenMismatchException) {

            // if it's ajax request send back "unauthorized" status response
            // then in js/jQuery you catch and redirect all those 401 responses:
            // $.ajaxSetup({ statusCode: { 401: function() { window.location.href = '/your_login_page'; } } });
            if ($request->ajax()) {
                return response('Token Mismatch Exception', 401);
            }

            // redirect to login page
            return redirect()->route('auth.login.get');
        }

        // Model not found
        if ($e instanceof ModelNotFoundException) {

            // it could be useful to get not founded model name and pass it to 404 error page:
            // $model = $e->getModel();
            // $baseModel = new $model;
            // $resourceNotFounded = class_basename($baseModel);
            // return response()->view('app.errors.404', compact('resourceNotFounded'), 404);


            // or simply redirect to not found page
            return response()->view('app.errors.404', [], 404);
        }

        // Http exceptions
        if ($this->isHttpException($e)) {
            // redirect to login if not authenticated
            // I don't want to let unauthenticated users to see error pages
            if (!\Auth::check()) {
                return redirect()->route('auth.login.get');
            }


            // try to find right error page for this exception
            // I have prepared 4 most common errors: 403,404, 500 and 503
            $exception = FlattenException::create($e);
            $statusCode = $exception->getStatusCode($exception);

            if (in_array($statusCode, array(403, 404, 500, 503))) {
                return response()->view('app.errors.' . $statusCode, [], $statusCode);
            }
        }

        // uncomment line below if you want 500 error page for all other errors
        // I prefer to use default behavior for them
        //return response()->view('app.errors.500', [], 500);

        return parent::render($request, $e);
    }
}
