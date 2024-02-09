<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'tipo_documento' => ['required', 'in:TI,CC,NIT,PASAPORTE,CC_EXTRANJERO'],
            'numero_documento' => ['required', 'unique:instructores', 'max:20'],
            'nombre_instructor' => ['required', 'string', 'max:30'],
            'apellido_instructor' => ['required', 'string'],
            'correo_electronico' => ['required', 'string', 'max:50'],
            'contraseña' => ['required', 'string', 'max:40'],
            'id_administrador' => ['required', 'exists:administradores,id']
        ];
    }
}
