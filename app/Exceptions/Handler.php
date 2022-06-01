<?php

namespace App\Exceptions;
use View; 
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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
	
  //  protected function registerErrorViewPaths() {
  //   parent::registerErrorViewPaths();
  //   if (request()->is('admin/*')) {
  //       View::prependNamespace(
  //           'errors',
  //           realpath(base_path('resources/views/acp/errors'))
  //       );
  //   }
  // }

}
