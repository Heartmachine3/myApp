@extends('layouts.detailview')

    @section('title','Consultar Sede')
    @section('title_name', $sede->nombre)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('sedes.index') }}">Ver Sedes</a>
        <a class="btn btn-primary" href="{{ route('sedes.edit', $sede->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('sedes.destroy', $sede->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <?php
        $ciudad = \DB::table('tb_ciudades')->where('id', $sede->ciudad_id)->value('CiudadNombre');
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre', 'Nombre Sede', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$sede->nombre}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Ciudad', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$ciudad}}</p>
    </div>

    @endsection
