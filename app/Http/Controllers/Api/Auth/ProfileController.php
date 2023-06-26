<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\ProfileRequest;
use App\Http\Resources\Api\Auth\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{
    public function __invoke(ProfileRequest $request, User $user): JsonResponse
    {
        UserResource::withoutWrapping();

        return (new UserResource($user))->response()->setStatusCode(Response::HTTP_OK);
    }
}
