<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nombre_empresa' => ['required', 'string', 'max:25'],
            'representante_legal' => ['required', 'string', 'max:50'],
            'tipo_empresa' => ['required', 'in:NOT_DEFINED,LIMITED,ANONYMOUS,COMMAND,ASSOCIATIVE COMPANY,SOLE PROPRIETORSHIP,OTHER,NATURAL PERSON,COLLECTIVE SOCIETY,SIMPLIFIED JOINT STOCK COMPANIES,LIMITED PARTNERSHIP,LIMITED PARTNERSHIP BY SHARES,RURAL COMPANY SENA EMPRENDE RURAL'],
            'NIT' => ['required', 'string', 'max:50', 'unique:companies'],
            'numero_trabajadores' => ['required', 'string', 'max:50'],
            'correo_representante_legal' => ['required', 'email', 'max:80'],
            'naturaleza' => ['required', 'in:PUBLIC,PRIVATE,MIXED'],
            'correo_empresa' => ['required', 'email', 'max:80'],
            'telefono_empresa' => ['required', 'string', 'max:30'],
            'telefono_alternativo_empresa' => ['nullable', 'string', 'max:30'],
            'gerente_recursos_humanos' => ['required', 'string', 'max:50'],
            'telefono_alternativo_gerente' => ['nullable', 'string', 'max:30'],
            'telefono_alternativo_2_gerente' => ['nullable', 'string', 'max:30'],
            'correo_gerente' => ['required', 'email', 'max:80'],
            'id_tipo_usuario' => ['required', 'exists:user_types,id'],
            'id_cargo' => ['required', 'exists:posts,id'],
        ];
    }
}
