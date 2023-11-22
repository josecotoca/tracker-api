<?php

namespace App\Exceptions;

use Throwable;
use App\Http\Resources\Api\ApiMeta;
use App\Http\Resources\Api\ApiErrorResource;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Create the error message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        //TODO: Fix or Add $exception->errors()
        $response = $exception->getMessage();
        return (new ApiErrorResource($response, $exception->status));
    }
}
