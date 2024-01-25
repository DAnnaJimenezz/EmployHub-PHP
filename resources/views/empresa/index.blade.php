@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.empresa') }}" class="boton1">Crear Nueva Empresa</a>
    <ul>
        @forelse ($empresas as $empresa)
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre de la Empresa</th>
                <th>Representante Legal</th>
                <th>Tipo de Empresa</th>
                <th>NIT</th>
                <th>Número de Trabajadores</th>
                <th>Correo del Representante Legal</th>
                <th>Naturaleza</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Teléfono Alternativo</th>
                <th>Gerente de Recursos Humanos</th>
                <th>Teléfono 1</th>
                <th>Teléfono Alternativo 2</th>
                <th>Correo del Gerente</th>
            </tr>
            <tr>
                <td><a>{{ $empresa->id }}</a></td>
                <td><a>{{ $empresa->nombre_empresa }}</a></td>
                <td><a>{{ $empresa->representante_legal}}</a></td>
                <td><a>{{ $empresa->tipo_empresa }}</a></td>
                <td><a>{{ $empresa->NIT }}</a></td>
                <td><a>{{ $empresa->numero_trabajadores }}</a></td>
                <td><a>{{ $empresa->correo_representante_legal}}</a></td>
                <td><a>{{ $empresa->naturaleza }}</a></td>
                <td><a>{{ $empresa->correo_empresa }}</a></td>
                <td><a>{{ $empresa->telefono_empresa}}</a></td>
                <td><a>{{ $empresa->telefono_alternativo_empresa}}</a></td>
                <td><a>{{ $empresa->gerente_recurso_humanos }}</a></td>
                <td><a>{{ $empresa->telefono_alternativo_gerente }}</a></td>
                <td><a>{{ $empresa->telefono_alternativo_2_gerente}}</a></td>
                <td><a>{{ $empresa->correo_gerente}}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.empresa', $empresa->id) }}">{{ $empresa->id }}</a> |
                <a href="{{ route('edit.empresa', $empresa->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.empresa', ['empresa'=>$empresa->id]) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p>No hay datos.</p>
        @endforelse
    </ul>
</div>
@endsection