<?php

namespace App\Http\Resources\Api\AppVersion;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class UserResource extends JsonResource
{

    public function __construct(User $user, ?string $accessToken = '')
    {
        parent::__construct($user);
        $this->accessToken = $accessToken;
    }

    public function toArray(Request $request): array
    {
        /**
         * @var User $this
         */
        return [
            'code' => Response::HTTP_OK,
            'message' => 'success',
            'nick_name' => $this->nick_name,
            'provider' => $this->provider,
            'provider_user_id' => $this->provider_user_id,
            'access_token' => $this->accessToken,
        ];
    }
}
