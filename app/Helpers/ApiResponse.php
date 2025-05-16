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
    public static function success($data = null, $message = 'Success', $status = 200)
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
    public static function error($message = 'Error', $errors = null, $status = 400)
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
    public static function validationError($errors, $message = 'Validation failed')
    {
        return self::error($message, $errors, 422);
    }

    /**
     * Return a "Not Found" response with HTTP status code (HTTP 404).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function notFound($message = 'Resource not found')
    {
        return self::error($message, null, 404);
    }

    /**
     * Return an "Unauthorized" response with HTTP status code (HTTP 401).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function unauthorized($message = 'Unauthorized')
    {
        return self::error($message, null, 401);
    }

    /**
     * Return a "Forbidden" response with HTTP status code (HTTP 403).
     *
     * @param string $message Custom message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function forbidden($message = 'Forbidden')
    {
        return self::error($message, null, 403);
    }
}
