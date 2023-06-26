<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\Api\Auth\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $user = User::whereProviderUserId($request->provider_user_id)
            ->whereProvider($request->provider)
            ->first();

        if ($user->tokens) {
            $user->tokens()->delete();
        }

        $accessToken = $user->createToken('API Token', ['*'])->plainTextToken;

        UserResource::withoutWrapping();

        return (new UserResource($user, $accessToken))->response()->setStatusCode(Response::HTTP_OK);
    }
}
