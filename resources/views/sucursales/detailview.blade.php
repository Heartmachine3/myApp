@extends('layouts.detailview')

    @section('title','Consultar Sucursal')
    @section('title_name', $sucursal->nombre)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('sucursales.index') }}">Ver Sucursales</a>
        <a class="btn btn-primary" href="{{ route('sucursales.edit', $sucursal->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('sucursales.destroy', $sucursal->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <?php
        $ciudad = \DB::table('tb_ciudades')->where('id', $sucursal->ciudad_id)->value('CiudadNombre');
        $empresa = \DB::table('tb_empresas')->where('id', $sucursal->empresa_id)->value('razon_social');
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre', 'Nombre', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sucursal->nombre}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('empresa_id', 'Empresa', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$empresa}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$ciudad}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sucursal->telefono}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('direccion', 'Direccion', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sucursal->direccion}}</p>
    </div>

    @endsection
