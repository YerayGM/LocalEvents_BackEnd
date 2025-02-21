<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'second_name' => 'string',
			'first_surname' => 'required|string',
			'second_surname' => 'required|string',
			'email' => 'required|string',
			'admin' => 'required',
			'level' => 'required',
			'image' => 'string',
			'phone_number' => 'string',
			'github_id' => 'string',
			'github_token' => 'string',
			'github_refresh_token' => 'string',
        ];
    }
}
