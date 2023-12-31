<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerUser extends FormRequest
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
        /* regex:^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$ PARA LA CONTRASENIA */
        return [
            "email" => ["unique:usuarios,email", "required"],
            "name" =>["required"],
            "lastName1" => ["required"],
            "password"=>["required", "min:4"],
            "passwordCheck"=>["required", "same:password"]
        ];
    }

    public function messages(){

        return[
            "email.unique" => "El email ya esta registrado",
            "email.required" => "Es necesario un email para registrarse",
            "name.required" => "Es necesario un nombre para registrarse",
            "lastName1.required" => "Es necesario un apellido para registrarse",
            "password.required" => "Es necesario una contraseña para registrarse",
            "password.min" => "La contraseña debe tener como mínimo 4 caracteres",
            "passwordCheck.requeired" => "Repita su contraseña",
            "passwordCheck.same" => "Las contraseñas no coinciden"     
        ];
    }
}
