@extends('layouts.detailview')

    @section('title','Consultar Empresa')
    @section('title_name', $empresa->razon_social)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('empresas.index') }}">Ver Empresas</a>
        <a class="btn btn-primary" href="{{ route('empresas.edit', $empresa->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('empresas.destroy', $empresa->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <?php
        $ciudad = \DB::table('tb_ciudades')->where('id', $empresa->ciudad_id)->value('CiudadNombre');
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nit', 'Nit', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa->nit}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('razon_social', 'Razon Social', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa->razon_social}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre_negocio', 'Nombre Empresa', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa->nombre_negocio}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa->telefono}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('direccion', 'Direccion', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa->direccion}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$ciudad}}</p>
    </div>

    @endsection
