<?php

namespace App\Http\Resources\Api\AppVersion;

use App\Models\AppVersion;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class AppVersionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /**
         * @var AppVersion $this
         */
        return [
            'code' => Response::HTTP_OK,
            'message' => 'success',
            'version_name' => $this->version_name,
            'is_update' => $this->is_update,
            'update_message' => $this->update_message,
        ];
    }
}
