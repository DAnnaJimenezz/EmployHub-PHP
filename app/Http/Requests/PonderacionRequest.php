<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PonderacionRequest extends FormRequest
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
            'idiomas' => ['required', 'in:ENGLISH,FRENCH,GERMAN,SPANISH'],
            'educacion' => ['required', 'in:BACHELORS DEGREE,POSTGRADUATE,UNDERGRADUATE,TECHNICIAN,TECHNOLOGIST,ENGINEER'],
            'experiencia ' => ['required', 'string', 'max:30'],
            'habilidades_tecnicas' => ['required', 'string'],
            'proyecto_anterior' => ['required', 'string', 'max:60'],
            'referencias' => ['required', 'string', 'max:40'],
            'curso_adicional' => ['required', 'string', 'max:50'],
        ];
    }
}
