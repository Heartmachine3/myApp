@extends('layouts.detailview')

    @section('title','Consultar Pais')
    @section('title_name', $pais->PaisNombre)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('paises.index') }}">Ver Paises</a>
        <a class="btn btn-primary" href="{{ route('paises.edit', $pais->PaisCodigo) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('paises.destroy', $pais->PaisCodigo) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')
    
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Codigo Pais', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$pais->PaisCodigo}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisNombre', 'Pais Nombre', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$pais->PaisNombre}}</p>
    </div>

    @endsection
