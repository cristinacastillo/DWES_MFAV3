<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     * @return \Symfony\Component\HttpFoundation\Response
     * 
     */

    protected function unauthenticated($request, AuthenticationException $exception){

        if ($request->expectsJson())
            return response()
                ->json(['error' => true,
                        'mensaje' => 'You do not have access to this information. Login'
                ],401);

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
        /****IMPORTANT*****/
        if ($exception->getMessage() == "Trying to get property 'headers' of non-object") {

          return redirect()->route('login');

        }
        /*********/

        if ($exception instanceof NotFoundHttpException)
            if($request->is('api/*'))
                return response()
                ->json(['error' => true,
                        'mensaje' => 'Sorry, information not found'
                ],404);
        //endif;

        
        return parent::render($request, $exception);
    }
}
