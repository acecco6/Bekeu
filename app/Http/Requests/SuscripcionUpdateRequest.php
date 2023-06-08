<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SuscripcionUpdateRequest extends FormRequest
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
            "id" => "required|integer",
            'email' => 'required|email',
            'estado_id' => [
                'required',
                'integer',
                Rule::exists('estados', 'id')
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
        ];
    }
}
