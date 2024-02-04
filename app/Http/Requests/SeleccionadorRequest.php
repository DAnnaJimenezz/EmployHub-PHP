<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeleccionadorRequest extends FormRequest
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
            'numero_documento_seleccionador' => ['required', 'string', 'max:15'],
            'tipo_documento_seleccionador' => ['required', 'in:TI,CC,NIT,PASAPORTE,CC_EXTRANJERO'],
            'nombre_selector' => ['required', 'string', 'max:25'],
            'correo_electronico_selector' => ['required', 'email', 'max:30'],
            'telefono_selector' => ['required', 'string', 'max:15'],
            'id_tipo_usuario' => ['required', 'exists:tipo_usuarios,id'],
        ];
    }
}
