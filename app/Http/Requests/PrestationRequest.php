<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestationRequest extends FormRequest
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
            'nom' => 'string|max:255|required',
            'description' => 'text|max:1000|required',
            'prix' => 'double|required',
            'temps' => 'double'
        ];
    }


    public function message(): array
    {
        return [
            'nom.required' => "Le nom est obligatoire",
            'nom.string' => 'Le nom doit être du texte',
            'nom.max'=> 'Le nom ne doit pas dépasser 255 caractères',
            'description.required' => "La description est obligatoire",
            'description.text' => "La description doit être du text",
            'description.max' => "La description ne doit pas dépasser 1000 caractères",
            'prix.double' => "Le prix doit être un double",
            'prix.required' => "Le prix est obligatoire",
            'temps.double' => "Le temps doit être un double",
        ];

    }

}
