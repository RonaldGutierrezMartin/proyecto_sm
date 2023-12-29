<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class logUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => ["required", "exists:usuarios,email"],
            "password" => "required"
        ];
    }

    public function messages()
    {
        return[
            "email.required" => "El email es obligatorio.",
            "email.exists" => "No existe ningun usuario con el email proporcionado.",
            "password.required" => "Es obligatorio introducir la contraseña"
        ];
    }
}
