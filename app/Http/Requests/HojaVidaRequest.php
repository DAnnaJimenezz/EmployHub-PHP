<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HojaVidaRequest extends FormRequest
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
            'descripcion_personal' => ['required', 'string', 'max:500'],
            'experiencia' => ['required', 'string', 'max:500'],
            'educacion' => ['required', 'string', 'max:500'],
            'idiomas' => ['required', 'string', 'max:300'],
        ];
    }
}
