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
            'tipo_empresa' => ['required', 'in:NO_DEFINIDO,SOCIEDAD_LIMITADA,ANÓNIMA,DOMINIO,SOCIEDAD_ASOCIATIVA,EMPRESARIO_INDIVIDUAL,OTRA,PERSONA_NATURAL,SOCIEDAD_COLECTIVA,SOCIEDAD_POR_ACCIONES_SIMPLIFICADA,SOCIEDAD_DE_RESPONSABILIDAD_LIMITADA,SOCIEDAD_EN_COMANDITA_POR_ACCIONES,EMPRESA_RURAL_SENA_EMPRENDE_RURAL'],
            'NIT' => ['required', 'string', 'max:50', 'unique:empresas'],
            'numero_trabajadores' => ['required', 'string', 'max:50'],
            'correo_representante_legal' => ['required', 'email', 'max:80'],
            'naturaleza' => ['required', 'in:PÚBLICA,PRIVADA,MIXTA'],
            'correo_empresa' => ['required', 'email', 'max:80'],
            'telefono_empresa' => ['required', 'string', 'max:30'],
            'telefono_alternativo_empresa' => ['nullable', 'string', 'max:30'],
            'gerente_recursos_humanos' => ['required', 'string', 'max:50'],
            'telefono_alternativo_gerente' => ['nullable', 'string', 'max:30'],
            'telefono_alternativo_2_gerente' => ['nullable', 'string', 'max:30'],
            'correo_gerente' => ['required', 'email', 'max:80'],
            'id_tipo_usuario' => ['required', 'exists:tipo_usuarios,id'],
            'id_cargo' => ['required', 'exists:cargos,id'],
        ];
    }
}
