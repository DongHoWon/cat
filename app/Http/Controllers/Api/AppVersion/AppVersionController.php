<?php

namespace App\Http\Controllers\Api\AppVersion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AppVersion\AppVersionRequest;
use App\Http\Resources\Api\AppVersion\AppVersionResource;
use App\Models\AppVersion;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AppVersionController extends Controller
{
    public function __invoke(AppVersionRequest $request): JsonResponse
    {
        $appVersion = AppVersion::whereVersionName($request->version_name)->first();

        AppVersionResource::withoutWrapping();

        return (new AppVersionResource($appVersion))->response()->setStatusCode(Response::HTTP_OK);
    }
}
