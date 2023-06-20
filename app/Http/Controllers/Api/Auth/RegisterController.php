<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\Api\AppVersion\UserResource;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        UserResource::withoutWrapping();

        return (new UserResource($user))->response()->setStatusCode(Response::HTTP_OK);
    }
}
