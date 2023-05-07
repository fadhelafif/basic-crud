<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'x' => ['required', 'gte:1', 'lte:33'],
            'y' => ['required', 'gte:1', 'lte:23'],
            'z' => ['required', 'gte:1', 'lte:18'],
            'w' => ['required', 'gte:1', 'lte:13'],
        ];
    }
}
