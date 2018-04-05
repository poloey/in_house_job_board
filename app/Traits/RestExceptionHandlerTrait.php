<?php

namespace App\Traits;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

trait RestExceptionHandlerTrait
{

    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request $request
     * @param Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Exception $e)
    {
        switch(true) {
          case ($e instanceof AuthenticationException):
            $retval = $this->exceptionErrorResponse('Not authenticate', 401);
            break;

          case ($e instanceof AuthorizationException):
            $retval = $this->exceptionErrorResponse('Not authorize', 401);
            break;

          case ($e instanceof MethodNotAllowedHttpException):
            $retval = $this->exceptionErrorResponse('Method Not Allowed HttpException', 405);
            break;

          case ($e instanceof HttpException):
            $retval = $this->exceptionErrorResponse('http exception', 401);
            break;

          case $e instanceof ModelNotFoundException:
            $className = class_basename($e->getModel());
            $text = "{$className} Model Not found";
            $retval = $this->exceptionErrorResponse($text, 404);
            break;

          case $e instanceof ValidationException:
            $retval = $this->convertValidationExceptionToResponse($e, 400);
            break;
          default:
              $retval = $this->badRequest();
        }

        return $retval;

    }

    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($message='Bad request', $statusCode=400)
    {
        return $this->jsonResponse(['error' => $message], $statusCode);
    }

    protected function exceptionErrorResponse($message='exceptionErrorResponse', $statusCode) {
        return $this->jsonResponse(['error' => $message], $statusCode);
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function modelNotFound($message='Record not found', $statusCode=404)
    {
        return $this->jsonResponse(['error' => $message], $statusCode);
    }

    /**
     * Returns json response.
     *
     * @param array|null $payload
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function jsonResponse(array $payload=null, $statusCode=404)
    {
        $payload = $payload ?: [];

        return response()->json($payload, $statusCode);
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Exception $e
     * @return bool
     */
    protected function isModelNotFoundException(Exception $e)
    {
        return $e instanceof ModelNotFoundException;
    }
    /**
     * Create a response object from the given validation exception.
     *
     * @param  \Illuminate\Validation\ValidationException  $e
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors = $e->validator->errors()->getMessages();
        return $this->exceptionErrorResponse($errors, 422);
    }

}
