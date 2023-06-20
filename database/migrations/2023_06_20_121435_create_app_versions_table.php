<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_versions', static function (Blueprint $table) {
            $table->id();
            $table->string('version_name')->comment('버전명');
            $table->tinyInteger('is_update')->comment('업데이트 여부 0:기본 / 1:선택업데이트 / 2:강제업데이트')->default(0);
            $table->string('update_message')->nullable()->comment('업데이트 메시지');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_versions');
    }
};
