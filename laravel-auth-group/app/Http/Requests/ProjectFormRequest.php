<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'description' => 'required|min:100',
            'date' => 'nullable|date|date_format:Y-m-d',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.max' => 'Il titolo non deve superare i 50 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve avere almeno 100 caratteri',
            'date.date' => 'La data deve essere una data',
            'date.date_format' => 'La data deve essere formattata come anno-mese-giorno'
        ];
    }
}
