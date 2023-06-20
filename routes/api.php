<?php

use App\Http\Controllers\Api\AppVersion\AppVersionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


foreach (glob(base_path('routes/api/*.php')) as $file) {
    require $file;
}

Route::get('app_versions', AppVersionController::class)->name('app_version');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
