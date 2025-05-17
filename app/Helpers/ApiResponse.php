<?php

namespace App\Helpers;

class ApiResponse
{
    /**
     * Return a successful JSON response with HTTP status code.
     *
     * @param mixed  $data    The data to return
     * @param string $message Message describing the response
     * @param int    $status  HTTP status code (default: 200 OK)
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, $message = 'The request has been processed successfully.', $status = 200)
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    /**
     * Return a generic error JSON response with HTTP status code.
     *
     * @param string $message Error message
     * @param mixed  $errors  Optional details (e.g., validation errors)
     * @param int    $status  HTTP status code (default: 400 Bad Request)
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($message = 'An unexpected error occurred while processing your request.', $errors = null, $status = 400)
    {
        $response = [
            'status'  => $status,
            'message' => $message,
        ];

        if (!is_null($errors)) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $status);
    }

    /**
     * Return a validation error JSON response with HTTP status code (HTTP 422).
     *
     * @param mixed  $errors  Validation error messages
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function validationError($errors, $message = 'Validation failed. Please review the provided inputs.')
    {
        return self::error($message, $errors, 422);
    }

    /**
     * Return a "Not Found" response with HTTP status code (HTTP 404).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function notFound($message = 'The requested resource could not be found.')
    {
        return self::error($message, null, 404);
    }

    /**
     * Return an "Unauthorized" response with HTTP status code (HTTP 401).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function unauthorized($message = 'Unauthorized access. Please check your credentials and try again.')
    {
        return self::error($message, null, 401);
    }

    /**
     * Return a "Forbidden" response with HTTP status code (HTTP 403).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function forbidden($message = 'You do not have permission to access this resource.')
    {
        return self::error($message, null, 403);
    }

    /**
     * Return a custom response with the provided status code.
     *
     * @param string $message Custom message
     * @param int    $status  Custom status code (default: 500)
     * @return \Illuminate\Http\JsonResponse
     */
    public static function custom($message = 'Custom response message', $status = 500)
    {
        return self::error($message, null, $status);
    }

    /**
     * Return a custom internal server error (HTTP 500).
     *
     * @param string $message Custom error message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function internalServerError($message = 'Something went wrong, please try again later.')
    {
        return self::error($message, null, 500);
    }
}
