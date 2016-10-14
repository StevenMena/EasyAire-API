<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [

        \Symfony\Component\HttpKernel\Exception\HttpException::class,
       
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
    /*
    public function render($request, Exception $exception)
    {
        if ($exception instanceof TokenMismatchException){
            //Redirect to login form if session expires
            return redirect()->route('doLogin');
        }

        //return parent::render($request, $exception);
    }*/
    
    public function render($request, Exception $e)
    {       //dd($e);
        /*
        if($this->isHttpException($e)){
            if (view()->exists('errors.'.$e->getStatusCode()))
            {
                return response()->view('errors.'.$e->getStatusCode(), [], $e->getStatusCode());
            }else{
            return response()->view('errors.custom', [], $e->getStatusCode());
            }
        }*/
        return parent::render($request, $e);
        //return response()->view('errors.'.'500', [], 500);
    }
    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}
