<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'name' => 'required| regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/',
            'lastName' => 'required| regex:/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|string|min:8|confirmed',

        ];
    }
}
