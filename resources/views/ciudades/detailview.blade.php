@extends('layouts.detailview')

    @section('title','Consultar Ciudad')
    @section('title_name', $ciudad->CiudadNombre)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('ciudades.index') }}">Ver Ciudades</a>
        <a class="btn btn-primary" href="{{ route('ciudades.edit', $ciudad->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('ciudades.destroy', $ciudad->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')
    
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('CiudadNombre', 'Nombre Ciudad', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$ciudad->CiudadNombre}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Codigo Pais', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$ciudad->PaisCodigo}}</p>
    </div>

    @endsection
