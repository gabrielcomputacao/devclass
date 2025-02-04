<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'email | required',
            'password' => 'required'
        ];
    }

    // = Personaliza as mensagens de erro


    public function messages(): array
    {
        return [
            'email.email' => 'Email não é válido.',
            'email.required' => 'Email precisa ser preenchido.'
        ];
    }
}
