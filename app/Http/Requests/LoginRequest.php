<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|max:100',
            'password' => 'required|min:6|Max:12'
        ];
    }
    public function messages()
    {
        return[
            'username.required' => 'Это поле обязательно к заполнению!',
            'username.max' => 'Максимальное количество символов - 100',
            'password.required' => 'Это поле обязательно к заполнению!',
            'password.max' => 'Максимальное количество символов - 12',
            'password.min' => 'Минимальное количество символов - 6'
        ];
    }
}
