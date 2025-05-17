<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => ['required', 'string', 'max:255', 'unique:users'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role_id'  => ['required', 'exists:roles,id'],
        ]);

        if ($validator->fails()) {
            return ApiResponse::validationError($validator->errors());
        }

        // Create user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $request->role_id,
        ]);

        return ApiResponse::success($user, 'User registered successfully', 201);
    }

    /**
     * Log the user into the application.
     *
     * @param \Illuminate\Http\Request $request The incoming request containing user credentials (name and password)
     * @return \Illuminate\Http\JsonResponse The response containing the generated token or an error message
     */
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        try
        {
            // Attempt to get the token for the provided credentials
            if ($token = JWTAuth::attempt($credentials)) {
                $decodedToken = JWTAuth::setToken($token)->getPayload();
                $expiration = $decodedToken->get('exp');
                $expirationDate = \Carbon\Carbon::createFromTimestamp($expiration)->toDateTimeString();

                $user = JWTAuth::user();
                $user->load('role');

                return ApiResponse::success([
                    'token' => $token,
                    'expiration' => $expirationDate,
                    'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => $user->role ? $user->role->name : null,
                    ],
                ], 'Successfully logged in');
            }

            return ApiResponse::unauthorized('Invalid credentials provided');
        }
        catch (JWTException $e)
        {
            return ApiResponse::unauthorized('Could not create token');
        }
    }
}
