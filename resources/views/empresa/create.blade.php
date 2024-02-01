@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('../css/Empresas/createCompany.css') }}">
<h1 class="tituloEmpresa">Crear <span>Empresa</span></h1>
<form class="formulario-doble" action="{{ route('store.empresa') }}" method="POST">
    @csrf
    <section class="derecha">
        <h2>Datos Empresariales</h2>
        <label for="titulo">Nombre de la Empresa</label>
        <input type="text" id="titulo" name="nombre_empresa"><br><br>
        
        <label for="descripcion">*Representante Legal</label><br>
        <input type="text" id="titulo" name="representante_legal" required><br><br>

        <label for="tipo_empresa">Tipo de Empresa</label>
        <select id="tipo_empresa" name="tipo_empresa">
            <option value="NO_DEFINIDO">No definido</option>
            <option value="LIMITADA">Limitada</option>
            <option value="ANÓNIMA">Anónima</option>
            <option value="DOMINIO">Comanditaria</option>
            <option value="SOCIEDAD_ASOCIATIVA">Sociedad Asociativa</option>
            <option value="EMPRESARIO_INDIVIDUAL">Empresa Unipersonal</option>
            <option value="OTRA">Otro</option>
            <option value="PERSONA_NATURAL">Persona Natural</option>
            <option value="SOCIEDAD_COLECTIVA">Sociedad Colectiva</option>
            <option value="SOCIEDAD_POR_ACCIONES_SIMPLIFICADA">Sociedad por Acciones Simplificada</option>
            <option value="SOCIEDAD_DE_RESPONSABILIDAD_LIMITADA">Sociedad de Responsabilidad Limitada</option>
            <option value="SOCIEDAD_EN_COMANDITA_POR_ACCIONES">Sociedad en Comandita por Acciones</option>
            <option value="EMPRESA_RURAL_SENA_EMPRENDE_RURAL">Empresa Rural SENA Emprende Rural    </option>
        </select><br><br>

        <label for="nit">NIT:</label>
        <input type="text" id=nit name="NIT"><br><br>

        <label for="trabajadores">*Número de Trabajadores</label>
        <input type="number" id="trabajadores" name="numero_trabajadores" required><br><br>
            
        <label for="correo">Correo del Representante Legal</label>
        <input type="text" id=correo name="correo_representante_legal"><br><br>

        <label for="naturaleza">Naturaleza</label>
        <select id="naturaleza" name="naturaleza">
            <option value="PÚBLICA">Pública</option>
            <option value="PRIVADA">Privada</option>
            <option value="MIXTA">Mixta</option>
        </select><br><br>
    
    </section>
    <section class="izquierda">
        <h2>Datos de Ubicación</h2>
        
        <label for="direccion">*Correo Empresa</label>
        <textarea name="correo_empresa" rows="4" cols="50" required></textarea><br><br>

        <label for="telefono">*Teléfono</label>
        <input type="text" id="telefono" name="telefono_empresa" required><br><br>
        
        <label for="telefono2">Teléfono Alternativo</label>
        <input type="text" id="telefono2" name="telefono_alternativo_empresa"><br><br>
        
        <h2>Datos de Recursos Humanos</h2>
        
        <label for="recursos-humanos">*Gerente de Recursos Humanos</label>
        <input type="text" id="recursos-humanos" name="gerente_recurso_humanos" required><br><br>

        <label for="telefono">*Teléfono</label>
        <input type="text" id="telefono" name="telefono_alternativo_gerente" required><br><br>
        
        <label for="telefono2">Teléfono Alternativo</label>
        <input type="text" id="telefono2" name="telefono_alternativo_2_gerente"><br><br>
        
        <label for="correo">*Correo Electrónico del Gerente</label>
        <input type="text" id=correo name="correo_gerente" class="textarea1" required><br><br>

        <label for="correo">Escribe el ID del Puesto</label>
        <input type="number" id=correo name="id_cargo" class="textarea1" required><br><br>
        
        <label for="exampleInputEmail" class="id_tipo_usuario"></label>
        <select class="tipo_usuario" name="id_tipo_usuario" id="">
            @foreach ($tipo_usuario as $tipo_usuarios)
            <option value="{{$tipo_usuarios->id}}">{{$tipo_usuarios->nombre_tipo_usuario}}</option>    
            @endforeach
        
        </select>
        
        <center><button type="submit" class="crear-oferta-button">Crear Empresa</button></center>
    
    </section>
</form>
@endsection