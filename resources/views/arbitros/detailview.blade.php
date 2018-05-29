@extends('layouts.detailview')

    @section('title','Consultar Arbitro')
    @section('title_name', $arbitro->nombres . ' ' . $arbitro->apellidos)

    @section('buttons')

        <a class="btn btn-info" href="{{ route('arbitros.index') }}">Ver Arbitros</a>
        <a class="btn btn-primary" href="{{ route('arbitros.edit', $arbitro->id) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('arbitros.destroy', $arbitro->id) }}" onclick="return confirm('Deseas Eliminar este Registro?')">Eliminar</a>

    @endsection

    @section('detailview')

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('identificacion', 'N° Identificacion', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$arbitro->identificacion}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombres', 'Nombres', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$arbitro->nombres}}</p>
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('apellidos', 'Apellidos', ['style' => 'color:#585858']) !!}
        <p style="word-wrap: break-word">{{$arbitro->apellidos}}</p>
    </div>

    @endsection
