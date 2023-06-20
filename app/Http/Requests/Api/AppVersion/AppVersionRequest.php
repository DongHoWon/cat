<?php

namespace App\Http\Requests\Api\AppVersion;

use App\Models\AppVersion;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppVersionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'version_name' => ['required', 'string', Rule::exists(AppVersion::class, 'version_name')],
        ];
    }
}
