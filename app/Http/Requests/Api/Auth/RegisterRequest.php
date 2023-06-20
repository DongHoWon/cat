<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'provider' => ['required', 'string'],
            'provider_user_id' => ['required', 'string'],
            'nick_name' => ['required', 'string'],
        ];
    }
}
