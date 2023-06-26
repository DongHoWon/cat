<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Auth\ProfileController;

Route::group(['as' => 'users.', 'prefix' => 'users', 'middleware' => ['auth:sanctum']], static function () {
    Route::post('{user}', ProfileController::class)->name('profile');
});
